<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_be49787dc961235c27716348236169ff50d794fbe905b97fcd598fda5650fc4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75f8e48c3b7d3c6edb8cd1cb5daf93808503bf768cf8c0f5959bca2227339835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f8e48c3b7d3c6edb8cd1cb5daf93808503bf768cf8c0f5959bca2227339835->enter($__internal_75f8e48c3b7d3c6edb8cd1cb5daf93808503bf768cf8c0f5959bca2227339835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_75f8e48c3b7d3c6edb8cd1cb5daf93808503bf768cf8c0f5959bca2227339835->leave($__internal_75f8e48c3b7d3c6edb8cd1cb5daf93808503bf768cf8c0f5959bca2227339835_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
