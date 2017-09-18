<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3cb6cdd282f8529a0533f9e46d06271cab67d7b25a74611f36817532a60f8e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c76428d184ea0a27ae41e7b7e53ea8547ee80761321c370ecbc6788ec5bec741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76428d184ea0a27ae41e7b7e53ea8547ee80761321c370ecbc6788ec5bec741->enter($__internal_c76428d184ea0a27ae41e7b7e53ea8547ee80761321c370ecbc6788ec5bec741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76428d184ea0a27ae41e7b7e53ea8547ee80761321c370ecbc6788ec5bec741->leave($__internal_c76428d184ea0a27ae41e7b7e53ea8547ee80761321c370ecbc6788ec5bec741_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_258aeddcaf8f3edfa1663b559b46896758b689a6c1d6e3a867be68dd68dfc515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258aeddcaf8f3edfa1663b559b46896758b689a6c1d6e3a867be68dd68dfc515->enter($__internal_258aeddcaf8f3edfa1663b559b46896758b689a6c1d6e3a867be68dd68dfc515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_258aeddcaf8f3edfa1663b559b46896758b689a6c1d6e3a867be68dd68dfc515->leave($__internal_258aeddcaf8f3edfa1663b559b46896758b689a6c1d6e3a867be68dd68dfc515_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e9f6de7c3b04a2cf47569fab9dab629425dcd858a734740fba5b00db80c82ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9f6de7c3b04a2cf47569fab9dab629425dcd858a734740fba5b00db80c82ee->enter($__internal_7e9f6de7c3b04a2cf47569fab9dab629425dcd858a734740fba5b00db80c82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7e9f6de7c3b04a2cf47569fab9dab629425dcd858a734740fba5b00db80c82ee->leave($__internal_7e9f6de7c3b04a2cf47569fab9dab629425dcd858a734740fba5b00db80c82ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
