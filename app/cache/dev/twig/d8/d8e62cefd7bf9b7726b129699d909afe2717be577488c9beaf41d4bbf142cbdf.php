<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0913dd5aeb36d7ff894219d7d149cb1547e65fd327367a560e72d238e7df8265 extends Twig_Template
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
        $__internal_5dbe5c1a3acf9bf9941c9ee1f9f8c9f3d32a2e33d7331e723663a23eca56df1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbe5c1a3acf9bf9941c9ee1f9f8c9f3d32a2e33d7331e723663a23eca56df1f->enter($__internal_5dbe5c1a3acf9bf9941c9ee1f9f8c9f3d32a2e33d7331e723663a23eca56df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_5dbe5c1a3acf9bf9941c9ee1f9f8c9f3d32a2e33d7331e723663a23eca56df1f->leave($__internal_5dbe5c1a3acf9bf9941c9ee1f9f8c9f3d32a2e33d7331e723663a23eca56df1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
