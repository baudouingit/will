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
        $__internal_a6a7201f7b3f5966cb9783b71617ce37e9735b0ae0bfb036b0bbbe941bdafda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a7201f7b3f5966cb9783b71617ce37e9735b0ae0bfb036b0bbbe941bdafda3->enter($__internal_a6a7201f7b3f5966cb9783b71617ce37e9735b0ae0bfb036b0bbbe941bdafda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a7201f7b3f5966cb9783b71617ce37e9735b0ae0bfb036b0bbbe941bdafda3->leave($__internal_a6a7201f7b3f5966cb9783b71617ce37e9735b0ae0bfb036b0bbbe941bdafda3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc8e36b659ab03cc929ce8620ed324a76996fdf5ece028f22846c12ccb690a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc8e36b659ab03cc929ce8620ed324a76996fdf5ece028f22846c12ccb690a7->enter($__internal_5fc8e36b659ab03cc929ce8620ed324a76996fdf5ece028f22846c12ccb690a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5fc8e36b659ab03cc929ce8620ed324a76996fdf5ece028f22846c12ccb690a7->leave($__internal_5fc8e36b659ab03cc929ce8620ed324a76996fdf5ece028f22846c12ccb690a7_prof);

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
