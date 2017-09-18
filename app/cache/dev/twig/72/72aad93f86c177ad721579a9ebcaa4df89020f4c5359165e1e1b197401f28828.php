<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_470a602c764ebfcb33d3ba25b6a00372d2fc482b29662a33cd0b57ced399653c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58edc71dd104a190a85429bdfdbe4c40780fcc637f752979832338da3d3185c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58edc71dd104a190a85429bdfdbe4c40780fcc637f752979832338da3d3185c0->enter($__internal_58edc71dd104a190a85429bdfdbe4c40780fcc637f752979832338da3d3185c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58edc71dd104a190a85429bdfdbe4c40780fcc637f752979832338da3d3185c0->leave($__internal_58edc71dd104a190a85429bdfdbe4c40780fcc637f752979832338da3d3185c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d0b535114d16c44cf6244b893099b609a66bccfb57893f7810e85f797ee7297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0b535114d16c44cf6244b893099b609a66bccfb57893f7810e85f797ee7297->enter($__internal_6d0b535114d16c44cf6244b893099b609a66bccfb57893f7810e85f797ee7297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d0b535114d16c44cf6244b893099b609a66bccfb57893f7810e85f797ee7297->leave($__internal_6d0b535114d16c44cf6244b893099b609a66bccfb57893f7810e85f797ee7297_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48cc298dd5dacca623b9a384df928ea5404e94d28c94402cbc9440dec669e091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cc298dd5dacca623b9a384df928ea5404e94d28c94402cbc9440dec669e091->enter($__internal_48cc298dd5dacca623b9a384df928ea5404e94d28c94402cbc9440dec669e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_48cc298dd5dacca623b9a384df928ea5404e94d28c94402cbc9440dec669e091->leave($__internal_48cc298dd5dacca623b9a384df928ea5404e94d28c94402cbc9440dec669e091_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b555bc2403f82c3cd746c50d233c6e1cd40f6fba3b2c8100880ff03e2bd0718a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b555bc2403f82c3cd746c50d233c6e1cd40f6fba3b2c8100880ff03e2bd0718a->enter($__internal_b555bc2403f82c3cd746c50d233c6e1cd40f6fba3b2c8100880ff03e2bd0718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b555bc2403f82c3cd746c50d233c6e1cd40f6fba3b2c8100880ff03e2bd0718a->leave($__internal_b555bc2403f82c3cd746c50d233c6e1cd40f6fba3b2c8100880ff03e2bd0718a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
