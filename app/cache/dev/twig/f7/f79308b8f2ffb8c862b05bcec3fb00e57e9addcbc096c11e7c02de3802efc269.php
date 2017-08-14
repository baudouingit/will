<?php

/* :default:index1.html.twig */
class __TwigTemplate_9d80113dc6135628ebd730bdfdd1ef30b5512cdd788a52f596de1121c9a88dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d488ea346b4c66b247885549bc5c193d31236359200f8930e030a7ab2f374244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d488ea346b4c66b247885549bc5c193d31236359200f8930e030a7ab2f374244->enter($__internal_d488ea346b4c66b247885549bc5c193d31236359200f8930e030a7ab2f374244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d488ea346b4c66b247885549bc5c193d31236359200f8930e030a7ab2f374244->leave($__internal_d488ea346b4c66b247885549bc5c193d31236359200f8930e030a7ab2f374244_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b79d0049cda85a4da4941f419ffdd1675fd0b373f574981805e9b75a09aedaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b79d0049cda85a4da4941f419ffdd1675fd0b373f574981805e9b75a09aedaf->enter($__internal_4b79d0049cda85a4da4941f419ffdd1675fd0b373f574981805e9b75a09aedaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <div class=\"navbar-header\">








                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Historique</a></li>
                        <li><a href=\"#\">Jury</a></li>
                        <li><a href=\"#\">Liens</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



";
        
        $__internal_4b79d0049cda85a4da4941f419ffdd1675fd0b373f574981805e9b75a09aedaf->leave($__internal_4b79d0049cda85a4da4941f419ffdd1675fd0b373f574981805e9b75a09aedaf_prof);

    }

    public function getTemplateName()
    {
        return ":default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    {{ parent() }}

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <div class=\"navbar-header\">








                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Historique</a></li>
                        <li><a href=\"#\">Jury</a></li>
                        <li><a href=\"#\">Liens</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



{% endblock %}", ":default:index1.html.twig", "/var/www/html/will/app/Resources/views/default/index1.html.twig");
    }
}
