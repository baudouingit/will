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
        $__internal_a5559ba79b358de16c13fcb3a5aadc28348e471285179febfaa58f06bf14714b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5559ba79b358de16c13fcb3a5aadc28348e471285179febfaa58f06bf14714b->enter($__internal_a5559ba79b358de16c13fcb3a5aadc28348e471285179febfaa58f06bf14714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5559ba79b358de16c13fcb3a5aadc28348e471285179febfaa58f06bf14714b->leave($__internal_a5559ba79b358de16c13fcb3a5aadc28348e471285179febfaa58f06bf14714b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d5377d4b85dfe8abc5796e21be1a27bde65250ab304558505d9213f16261565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5377d4b85dfe8abc5796e21be1a27bde65250ab304558505d9213f16261565->enter($__internal_5d5377d4b85dfe8abc5796e21be1a27bde65250ab304558505d9213f16261565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_5d5377d4b85dfe8abc5796e21be1a27bde65250ab304558505d9213f16261565->leave($__internal_5d5377d4b85dfe8abc5796e21be1a27bde65250ab304558505d9213f16261565_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8278d491c0a5385c1b91dd1e83aeec6f38e7c2bbd2d58c3b16a1f7a031783219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8278d491c0a5385c1b91dd1e83aeec6f38e7c2bbd2d58c3b16a1f7a031783219->enter($__internal_8278d491c0a5385c1b91dd1e83aeec6f38e7c2bbd2d58c3b16a1f7a031783219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8278d491c0a5385c1b91dd1e83aeec6f38e7c2bbd2d58c3b16a1f7a031783219->leave($__internal_8278d491c0a5385c1b91dd1e83aeec6f38e7c2bbd2d58c3b16a1f7a031783219_prof);

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
