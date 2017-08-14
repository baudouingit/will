<?php

namespace AppBundle\Controller;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function accueilAction()
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig', array(
                'pageTitle' => "Accueil")
        );
    }

    /**
     * @Route("/jury")
     */
    public function juryAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Jures')->getJuresActifs();
        return $this->render(
            'default/jury.html.twig', array(
                'entities' => $entities, 'pageTitle' => 'Liste des jurés')
        );
    }

    /**
     * @Route("/historique")
     */
    public function historiqueAction()
    {
        return $this->render(
            'default/historique.html.twig', array(
                'pageTitle' => 'Historique des Prix')
        );
    }

    /**
     * @Route("/liens")
     */
    public function liensAction()
    {

        return $this->render(
            'default/liens.html.twig', array(
                'pageTitle' => 'Liens')
        );
    }

    /**
     * @Route("/Nomines/{domaine}/{annee}")
     */
    public function NominesAction($domaine = "Auteur", $annee = 2015)
    {
        /**
         * Dernier millésime mis à jour.
         */

        $anneeCourante = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')
            ->getCurrentYear();
        /**
         * Si année proposée est en DB
         */

        if (!$this->getDoctrine()
            ->getRepository('AppBundle:NominesV')
            ->validateQueriedYear($annee)
        ) {
            $annee = $anneeCourante;
        }
        /**
         * Lister catégories récompensées cette annee. $Domains
         */
        $Domains = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')
            ->getDomainsInYear($annee);

        /**
         * Compter nombre de catégories récompensées cette annee.
         */
        $countDomains = count($Domains);

        $doms = array();
        foreach ($Domains as $key => $value) {
            $doms[$key] = $value['domaine'];
        }
        $idx = array_keys($doms, $domaine);
        if ($idx[0] == 0) {
            $prev = $doms[$countDomains - 1];
        } else {
            $prev = $doms[($idx[0] - 1) % $countDomains];
        }
        $next = $doms[($idx[0] + 1) % $countDomains];

        /**
         * Obtenir les nominés pour l'année et la catégorie demandée
         */
        $Nomines = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')
            ->getNominesYearDomain($domaine, $annee);

        return $this->render(
            'default/nomines.html.twig', array('count' => $countDomains, 'pageTitle' => $domaine,
            'nomines' => $Nomines, 'annee' => $annee,
            'next' => $next, 'prev' => $prev));

    }

    /**
     * @Route("/archivePdf/{fichier}")
     */
    public function archivePdfAction($fichier)
    {

        $kernel = $this->get('kernel');
        $path = $kernel->locateResource('@AppBundle/Resources/pdf/' . $fichier);

        $response = new BinaryFileResponse($path);

        $response->headers->set('Content-Type', 'application/pdf');
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_INLINE, //use ResponseHeaderBag::DISPOSITION_ATTACHMENT to save as an attachement
            $fichier
        );

        return $response;
    }

    /**
     * @Route("/galerie/{galleries}/{index}")
     * @template()
     */

    public function galerieAction($galleries, $index)
    {
        $year = preg_replace('/^images/', '', $galleries);
        $dir = "galerie/$galleries";
        $photos = preg_grep('/^([^.])/', scandir($dir)); /* Les clefs débutent au n° 2 pcq dot files éliminés. */
        $limit = count($photos);

        if (isset($_POST['index'])) {
            if (isset($_POST['up'])) {
                $index = $_POST['index'];
                $index = ($index > $limit ? $index = 2 : $index = $index + 1);
            } else {
                if (isset($_POST['down'])) {
                    $index = $_POST['index'];
                    $index = ($index == 2 ? $index = $limit + 1 : $index = $index - 1);
                }
            }
        }

        return $this->render(
            'default/galerie.html.twig', array('pageTitle' => "Galerie " . $year, 'photos' => $photos, 'index' => $index, 'path' => $dir));
    }

    /**
     * @Route("/partenaires")
     */
    public function partenairesAction()
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/partenaires.html.twig', array(
                'pageTitle' => "Partenaires")
        );
    }

    /**
     * @Route("/find")
     * @template()
     */

    public function findAction(Request $request)
    {
        // crée une tâche et lui donne quelques données par défaut pour cet exemple
//        $find = new AppBundle:find();
//        $categories = array('Toutes' => 'Toutes', 'Auteur' => 'Auteur', 'Spectacle' => 'Spectacle', 'Seul en scène' => 'Seul en scène');
        $domains = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')
            ->getAllDomains();

        $years = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')
            ->getYearsPublished();


        $domaines['Toutes'] = 'Toutes';
        foreach ($domains as $item) {
            foreach ($item as $categorie) {
                $domaines[$categorie] = $categorie;
            }
        }

        $annees['Toutes'] = 'Toutes';
        foreach ($years as $item) {
            foreach ($item as $year) {
                $annees[$year] = $year;
            }
        }

        $find = array();
        $form = $this->createFormBuilder($find)
            ->add(
                'categorie', 'choice',
                array('choices' => $domaines,
                    'preferred_choices' => array('Toutes')), array('attr' => array('maxlength' => 4)))
            ->add(
                'annee', 'choice', array('choices' => $annees,
                'preferred_choices' => array('Toutes'), 'attr' => array(
                    'class' => 'find')))
            ->add('nom', 'text', array('required' => FALSE))
            ->add(
                'confirmer', 'submit', array(
                'attr' => array('class' => 'find'),))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            if ($data['annee'] === 'Toutes') $data['annee'] = '';
            if ($data['categorie'] === 'Toutes') $data['categorie'] = '';

            $archive = $this->getDoctrine()
                ->getRepository('AppBundle:NominesV')
                ->getNominesArchive($data['categorie'], $data['annee'], $data['nom']);

            if (!$archive) {
                return $this->render(
                    'default/empty.html.twig', array(
                    'message' => "Il n'y a pas de données répondant à votre requête. Peut-être êtes vous trop sélectif. Réessayez en élargissant vos critères",
                    'pageTitle' => "Pas de résultat"
                ));
            }

            return $this->render(
                'default/archive.html.twig', array(
                'archive' => $archive, 'pageTitle' => 'Nominés trouvés',
            ));

        }

        return $this->render(
            'default/find.html.twig', array(
            'form' => $form->createView(), 'pageTitle' => 'Critères de recherche',
        ));
    }



}