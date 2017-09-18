<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app_default_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_default_accueil');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'app_default_accueil',);
        }

        // app_default_jury
        if ($pathinfo === '/jury') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::juryAction',  '_route' => 'app_default_jury',);
        }

        // app_default_historique
        if ($pathinfo === '/historique') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::historiqueAction',  '_route' => 'app_default_historique',);
        }

        // app_default_liens
        if ($pathinfo === '/liens') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::liensAction',  '_route' => 'app_default_liens',);
        }

        // app_default_nomines
        if (0 === strpos($pathinfo, '/Nomines') && preg_match('#^/Nomines(?:/(?P<domaine>[^/]++)(?:/(?P<annee>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_nomines')), array (  'domaine' => 'Auteur',  'annee' => 2015,  '_controller' => 'AppBundle\\Controller\\DefaultController::NominesAction',));
        }

        // app_default_archivepdf
        if (0 === strpos($pathinfo, '/archivePdf') && preg_match('#^/archivePdf/(?P<fichier>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_archivepdf')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::archivePdfAction',));
        }

        // app_default_galerie
        if (0 === strpos($pathinfo, '/galerie') && preg_match('#^/galerie/(?P<galleries>[^/]++)/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_galerie')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::galerieAction',));
        }

        // app_default_partenaires
        if ($pathinfo === '/partenaires') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::partenairesAction',  '_route' => 'app_default_partenaires',);
        }

        // app_default_find
        if ($pathinfo === '/find') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::findAction',  '_route' => 'app_default_find',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
