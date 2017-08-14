<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_90cbd7b9f921e29eff6202713c31b5952a48df672a30406ee9da09ea9ccfbac8 extends Twig_Template
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
        $__internal_b0bbda462de6e6bc9372ef1a1e64f8d29e8322a9c7f06cfa632bbd61066933bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bbda462de6e6bc9372ef1a1e64f8d29e8322a9c7f06cfa632bbd61066933bf->enter($__internal_b0bbda462de6e6bc9372ef1a1e64f8d29e8322a9c7f06cfa632bbd61066933bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_b0bbda462de6e6bc9372ef1a1e64f8d29e8322a9c7f06cfa632bbd61066933bf->leave($__internal_b0bbda462de6e6bc9372ef1a1e64f8d29e8322a9c7f06cfa632bbd61066933bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
