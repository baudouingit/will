<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_78bd99b89e89fa08a092d546f5df515842e01c11ddd7df7e7856741d39a7253f extends Twig_Template
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
        $__internal_8907822d9c854182e52b3fa19ef057416921e35af9ee6df567df34bd3a8101ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8907822d9c854182e52b3fa19ef057416921e35af9ee6df567df34bd3a8101ef->enter($__internal_8907822d9c854182e52b3fa19ef057416921e35af9ee6df567df34bd3a8101ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_8907822d9c854182e52b3fa19ef057416921e35af9ee6df567df34bd3a8101ef->leave($__internal_8907822d9c854182e52b3fa19ef057416921e35af9ee6df567df34bd3a8101ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
