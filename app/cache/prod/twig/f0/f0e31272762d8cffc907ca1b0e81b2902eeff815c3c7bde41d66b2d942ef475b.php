<?php

/* :default:index.html.twig */
class __TwigTemplate_f207ddf9b61c9fb1d6443fc904356d93035939f872d79aa8ecef029cf0a5fbae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
";
        // line 36
        echo "        
        <h2>Editorial</h2>

Le jury des Prix de la Critique – des journalistes culturels 
exclusivement, a tranché parmi la centaine de comédiens, d'auteurs, de 
metteurs en scène, de scénographes, de musiciens, de spectacles… Et de 
nos multiples coups de coeur de la saison 2016-2017, une première 
délibération a retenu quarante-quatre noms. Aux  quatorze catégories 
(qui quadrillent tous les paramètres de la scène) de trois 
nominations  chacune, s'ajoute le prix Bernadette Abraté qui honore le 
rayonnement d'une personnalité des arts de la scène et qui, cette 
année, rend hommage à Philippe de Coen, figure essentielle du  
cirque cotemporain en Belgique, avec sa compagnie Feria Musica et qui vient de 
clore cette belle aventure de 20 ans avec un opéra circassien, Daral 
Shaga. Comme l'année dernière, le jury a souhaité décerner un prix 
spécial: il avait alors  salué  \"Five easy pieces\" de  Milo Rau, il 
couronne  aujourd'hui \"Nicht schlafen\" du  chorégraphe flamand Alain 
Platel et des Ballets C de la B, une vertigineuse sarabande de mort et 
résurrection, d'horreur et de sensualité, centrée sur la musique de 
Mahler. Toutes les nominations des Prix de la Critique Théâtre, Danse 
et Cirque, vous sont dévoilées aujourd'hui dans les différents médias 
et sur notre site. Chaque membre du jury y croque les portraits des 
artistes. Une seconde délibération -saignante !- choisira les lauréats, 
dévoilés le 25 septembre au Théâtre Royal de Namur, à 20 heures. 
Bienvenue à tous ! Venez découvrir les étoiles de la scène belge de 
théâtre, de danse, de cirque, le tout en musique, venez participer à la 
fête  du spectacle vivant. Sans équivalent dans la partie francophone 
du pays, les Prix de la Critique (créés en 1952) continuent d'affirmer 
leur totale indépendance. Ils n'ont qu'une règle d'or : assumer leurs 
coups de coeur,  toutes esthétiques confondues . <p 
class=\"signature\">Le jury des Prix de la Critique: Nurten Aka, Laurent 
Ancion, Marie Baudet, Didier Béclard, Laurence Bertels, François 
Caudron, Michèle Friche, Muriel Hublet, Christian Jade, Catherine 
Makereel, Dominique Mussche, Nicolas Naizy. </p> 
    </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 36,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/var/www/html/will/app/Resources/views/default/index.html.twig");
    }
}
