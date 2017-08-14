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
        $__internal_b9a4c0cbdf4a03031fcafe125e2407eeaa74757c738847369f2fff3d4d4c5fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a4c0cbdf4a03031fcafe125e2407eeaa74757c738847369f2fff3d4d4c5fba->enter($__internal_b9a4c0cbdf4a03031fcafe125e2407eeaa74757c738847369f2fff3d4d4c5fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_b9a4c0cbdf4a03031fcafe125e2407eeaa74757c738847369f2fff3d4d4c5fba->leave($__internal_b9a4c0cbdf4a03031fcafe125e2407eeaa74757c738847369f2fff3d4d4c5fba_prof);

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
