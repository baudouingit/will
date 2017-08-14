<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f101147476ec322fb9cff92a4493564282e9b17a2406b28bff04d06c0ac11ec6 extends Twig_Template
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
        $__internal_0a65bc5dc548f2f1924d9f4f3442a515c37fc14d6560fef7f2f115cbd45fe3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a65bc5dc548f2f1924d9f4f3442a515c37fc14d6560fef7f2f115cbd45fe3e8->enter($__internal_0a65bc5dc548f2f1924d9f4f3442a515c37fc14d6560fef7f2f115cbd45fe3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0a65bc5dc548f2f1924d9f4f3442a515c37fc14d6560fef7f2f115cbd45fe3e8->leave($__internal_0a65bc5dc548f2f1924d9f4f3442a515c37fc14d6560fef7f2f115cbd45fe3e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
