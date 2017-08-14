<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b4117a757115a7116e5ea8ec62e1f6c4da091e679508426351132a6629a77b7b extends Twig_Template
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
        $__internal_79e38c7532cfd92a05f859e41c1ccdacd0e9e112dbc8a5a1fc0517156cbd99d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e38c7532cfd92a05f859e41c1ccdacd0e9e112dbc8a5a1fc0517156cbd99d9->enter($__internal_79e38c7532cfd92a05f859e41c1ccdacd0e9e112dbc8a5a1fc0517156cbd99d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_79e38c7532cfd92a05f859e41c1ccdacd0e9e112dbc8a5a1fc0517156cbd99d9->leave($__internal_79e38c7532cfd92a05f859e41c1ccdacd0e9e112dbc8a5a1fc0517156cbd99d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
