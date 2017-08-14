<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce5736b881f446aee6a91cb5806d49cfeb29f9a2ef2a0322a62e0cf879be06ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_bb9aa022d05f018d1200df095e212622e3e2cbfb204e4223d1d96e18431c54f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9aa022d05f018d1200df095e212622e3e2cbfb204e4223d1d96e18431c54f8->enter($__internal_bb9aa022d05f018d1200df095e212622e3e2cbfb204e4223d1d96e18431c54f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb9aa022d05f018d1200df095e212622e3e2cbfb204e4223d1d96e18431c54f8->leave($__internal_bb9aa022d05f018d1200df095e212622e3e2cbfb204e4223d1d96e18431c54f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8132ced7d8fed65d0a9dfd213dcc8a9b1378dfe455af85528b6efaed2310bba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8132ced7d8fed65d0a9dfd213dcc8a9b1378dfe455af85528b6efaed2310bba0->enter($__internal_8132ced7d8fed65d0a9dfd213dcc8a9b1378dfe455af85528b6efaed2310bba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8132ced7d8fed65d0a9dfd213dcc8a9b1378dfe455af85528b6efaed2310bba0->leave($__internal_8132ced7d8fed65d0a9dfd213dcc8a9b1378dfe455af85528b6efaed2310bba0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_491988cd602b1ce813eee49a3a02b5a6473792e2b761ac87d072448ff8ecb0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491988cd602b1ce813eee49a3a02b5a6473792e2b761ac87d072448ff8ecb0f9->enter($__internal_491988cd602b1ce813eee49a3a02b5a6473792e2b761ac87d072448ff8ecb0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_491988cd602b1ce813eee49a3a02b5a6473792e2b761ac87d072448ff8ecb0f9->leave($__internal_491988cd602b1ce813eee49a3a02b5a6473792e2b761ac87d072448ff8ecb0f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4218e7203ed47d9d7798448ae496f55915a5330d5924b67bff52c654e3d044e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4218e7203ed47d9d7798448ae496f55915a5330d5924b67bff52c654e3d044e->enter($__internal_b4218e7203ed47d9d7798448ae496f55915a5330d5924b67bff52c654e3d044e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b4218e7203ed47d9d7798448ae496f55915a5330d5924b67bff52c654e3d044e->leave($__internal_b4218e7203ed47d9d7798448ae496f55915a5330d5924b67bff52c654e3d044e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
