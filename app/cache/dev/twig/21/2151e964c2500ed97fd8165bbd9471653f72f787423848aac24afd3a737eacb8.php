<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7c48cdc8a93388f254fc41adab608cdbab0c1103da3f032c7b2462e375225970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2fd5fad77c0f2560467db61b59c08820847e653e58479965b6d04d0f5ddeb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fd5fad77c0f2560467db61b59c08820847e653e58479965b6d04d0f5ddeb8d->enter($__internal_c2fd5fad77c0f2560467db61b59c08820847e653e58479965b6d04d0f5ddeb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2fd5fad77c0f2560467db61b59c08820847e653e58479965b6d04d0f5ddeb8d->leave($__internal_c2fd5fad77c0f2560467db61b59c08820847e653e58479965b6d04d0f5ddeb8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03470fb5d3b85e63a006b5840cad9931d43941b5ac978188180bc52c18348383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03470fb5d3b85e63a006b5840cad9931d43941b5ac978188180bc52c18348383->enter($__internal_03470fb5d3b85e63a006b5840cad9931d43941b5ac978188180bc52c18348383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03470fb5d3b85e63a006b5840cad9931d43941b5ac978188180bc52c18348383->leave($__internal_03470fb5d3b85e63a006b5840cad9931d43941b5ac978188180bc52c18348383_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0f6fa622ef4aa046cbbf110279579ad655a3b0dad81f44fbea7dc84748b76a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f6fa622ef4aa046cbbf110279579ad655a3b0dad81f44fbea7dc84748b76a6->enter($__internal_a0f6fa622ef4aa046cbbf110279579ad655a3b0dad81f44fbea7dc84748b76a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_a0f6fa622ef4aa046cbbf110279579ad655a3b0dad81f44fbea7dc84748b76a6->leave($__internal_a0f6fa622ef4aa046cbbf110279579ad655a3b0dad81f44fbea7dc84748b76a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_697107ee136aab8e4044988dc0943ac1e3ddec0de8deb8019a83e51539900075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697107ee136aab8e4044988dc0943ac1e3ddec0de8deb8019a83e51539900075->enter($__internal_697107ee136aab8e4044988dc0943ac1e3ddec0de8deb8019a83e51539900075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_697107ee136aab8e4044988dc0943ac1e3ddec0de8deb8019a83e51539900075->leave($__internal_697107ee136aab8e4044988dc0943ac1e3ddec0de8deb8019a83e51539900075_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
