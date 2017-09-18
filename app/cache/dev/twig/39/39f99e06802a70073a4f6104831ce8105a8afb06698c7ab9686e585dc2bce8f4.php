<?php

/* :default:liens.html.twig */
class __TwigTemplate_4d662ff0840d32d1769b5f3d0641d885a3f86cac5adb2baa360c144d2c7a9851 extends Twig_Template
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
        $__internal_a9229e160e15f605d2896da60d119f7a5d50bf66aba431639204e68e2d94bb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9229e160e15f605d2896da60d119f7a5d50bf66aba431639204e68e2d94bb86->enter($__internal_a9229e160e15f605d2896da60d119f7a5d50bf66aba431639204e68e2d94bb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9229e160e15f605d2896da60d119f7a5d50bf66aba431639204e68e2d94bb86->leave($__internal_a9229e160e15f605d2896da60d119f7a5d50bf66aba431639204e68e2d94bb86_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_25b8077f93a0ea43d4af1e21c421e944e35e18a03d3bb741af1c23a844af6ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b8077f93a0ea43d4af1e21c421e944e35e18a03d3bb741af1c23a844af6ec9->enter($__internal_25b8077f93a0ea43d4af1e21c421e944e35e18a03d3bb741af1c23a844af6ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_25b8077f93a0ea43d4af1e21c421e944e35e18a03d3bb741af1c23a844af6ec9->leave($__internal_25b8077f93a0ea43d4af1e21c421e944e35e18a03d3bb741af1c23a844af6ec9_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9912a22919afa662c6b17993e943f1e25e9e851274c9860ba82c07b11c268ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9912a22919afa662c6b17993e943f1e25e9e851274c9860ba82c07b11c268ef4->enter($__internal_9912a22919afa662c6b17993e943f1e25e9e851274c9860ba82c07b11c268ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_9912a22919afa662c6b17993e943f1e25e9e851274c9860ba82c07b11c268ef4->leave($__internal_9912a22919afa662c6b17993e943f1e25e9e851274c9860ba82c07b11c268ef4_prof);

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
        return array (  85 => 35,  79 => 34,  47 => 8,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block content %}
    <ul>

        <li><a href=\"http://www.alternativestheatrales.be/intro.html\" target=\"_blank\">Alternatives Theatrales</a></li>

        {#<li><a href=\"http://www.arte-belgique.be\" target=\"_blank\">Arte Belgique</a></li>#}

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
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
", ":default:liens.html.twig", "/var/www/html/will/app/Resources/views/default/liens.html.twig");
    }
}
