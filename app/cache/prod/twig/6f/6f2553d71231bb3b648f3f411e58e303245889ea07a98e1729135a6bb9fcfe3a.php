<?php

/* :default:liens.html.twig */
class __TwigTemplate_dbf03879ec219192cc356d04bdd7ee691881a2155de5c11f1c25aa52ea965666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:liens.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo "    <ul>

        <li><a href=\"http://www.alternativestheatrales.be/intro.html\" target=\"_blank\">Alternatives Theatrales</a></li>

        ";
        // line 8
        echo "
        <li><a href=\"http://www.aml-cfwb.be/aspasia/\">Aspasia</a></li>

        <li><a href=\"http://www.lansman.org\" target=\"_blank\">Editions Lansman</a></li>

        <li><a href=\"http://www.bellone.be\" target=\"_blank\">Maison de la Bellone</a></li>

        <li><a href=\"http://www.lalibre.be\" target=\"_blank\">La Libre</a></li>

        <li><a href=\"http://www.lesoir.be\" target=\"_blank\">Le Soir</a></li>

        <li><a href=\"http://www.levif.be\" target=\"_blank\">Le vif L'Express</a></li>

        <li><a href=\"http://www.rtbf.be\" target=\"_blank\">Rtbf</a></li>

        <li><a href=\"http://www.rtbf.be/culture/chronique/archive_christian-jade?chroniqueurId=7754751\" target=\"_blank\">Rtbf
                Christian Jade</a></li>

        <li><a href=\"http://www.artscene.cfwb.be\" target=\"_blank\">Le Centre des Arts de la Scène</a></li>

        <li><a href=\"http://www.uniondesartistes.be\" target=\"_blank\">L'Union des Artistes</a></li>

        <li><a href=\"http://www.prixjacqueshuisman.be\" target=\"_blank\">Prix Jacques Huisman</a></li>

    </ul>
";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return ":default:liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  67 => 34,  38 => 8,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:liens.html.twig", "/var/www/html/will/app/Resources/views/default/liens.html.twig");
    }
}
