<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3b9cb23edfae3df3afe2a87fd899635f3136b3db8496560c7f81c45e13280203 extends Twig_Template
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
        $__internal_1bc96968dbc0243cc6f4fa9c15dce80427060e5d2ff14fede16b327f42016d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc96968dbc0243cc6f4fa9c15dce80427060e5d2ff14fede16b327f42016d97->enter($__internal_1bc96968dbc0243cc6f4fa9c15dce80427060e5d2ff14fede16b327f42016d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_1bc96968dbc0243cc6f4fa9c15dce80427060e5d2ff14fede16b327f42016d97->leave($__internal_1bc96968dbc0243cc6f4fa9c15dce80427060e5d2ff14fede16b327f42016d97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
