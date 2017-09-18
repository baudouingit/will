<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_default_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_jury' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::juryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jury',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_historique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::historiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/historique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_liens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::liensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liens',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_nomines' => array (  0 =>   array (    0 => 'domaine',    1 => 'annee',  ),  1 =>   array (    'domaine' => 'Auteur',    'annee' => 2015,    '_controller' => 'AppBundle\\Controller\\DefaultController::NominesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annee',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'domaine',    ),    2 =>     array (      0 => 'text',      1 => '/Nomines',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_archivepdf' => array (  0 =>   array (    0 => 'fichier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::archivePdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fichier',    ),    1 =>     array (      0 => 'text',      1 => '/archivePdf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_galerie' => array (  0 =>   array (    0 => 'galleries',    1 => 'index',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::galerieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'galleries',    ),    2 =>     array (      0 => 'text',      1 => '/galerie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_partenaires' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::partenairesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partenaires',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_default_find' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::findAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/find',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
