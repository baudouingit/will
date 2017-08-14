<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
//    public function indexAction($name)
//    {
//        return $this->render('', array('name' => $name));
//    }
    public function allKnownCategoriesAction()
    {
        $year = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')->getCurrentYear();
        $domaines = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')->getDomainsInYear($year);
        return $this->render('default/menu.html.twig', array(
            'domaines' => $domaines, 'annee' => $year,
        ));
    }

    public function allYearsOnWebAction()
    {
        $years = $this->getDoctrine()
            ->getRepository('AppBundle:NominesV')->getYearsPublished();
        return $this->render('default/archiveOnWeb.html.twig', array(
            'annees' => $years,
        ));
    }

    public function allYearsOnPaperAction()
    {
        $dir = "pdf";
        $fichiers = preg_grep('/^([^.])/', scandir($dir));
        return $this->render('default/menuPdf.html.twig', array(
            'fichiers' => $fichiers,
        ));
    }
    public function allGalleriesAction()
    {
        $dir = "galerie";
        $galleries = preg_grep('/^([^.])/', scandir($dir));
        return $this->render('default/menuGalleries.html.twig', array(
            'galleries' => $galleries,
        ));
    }
}