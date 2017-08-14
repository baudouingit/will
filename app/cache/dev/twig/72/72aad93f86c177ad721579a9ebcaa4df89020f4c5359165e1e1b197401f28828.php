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
        $__internal_bfa9537e059848a5e6ce9db70cdb6d35b3d577c27a6bf900709766000290282f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa9537e059848a5e6ce9db70cdb6d35b3d577c27a6bf900709766000290282f->enter($__internal_bfa9537e059848a5e6ce9db70cdb6d35b3d577c27a6bf900709766000290282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa9537e059848a5e6ce9db70cdb6d35b3d577c27a6bf900709766000290282f->leave($__internal_bfa9537e059848a5e6ce9db70cdb6d35b3d577c27a6bf900709766000290282f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f9dc4eb27352293ded83885a025039fe7353cfafb3fc721e314d9dd009f8b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9dc4eb27352293ded83885a025039fe7353cfafb3fc721e314d9dd009f8b21->enter($__internal_9f9dc4eb27352293ded83885a025039fe7353cfafb3fc721e314d9dd009f8b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f9dc4eb27352293ded83885a025039fe7353cfafb3fc721e314d9dd009f8b21->leave($__internal_9f9dc4eb27352293ded83885a025039fe7353cfafb3fc721e314d9dd009f8b21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_180750efe7017d5d8ad6dd83f4c53c47180dd085e9148ee9bf0a5f0178d3da76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180750efe7017d5d8ad6dd83f4c53c47180dd085e9148ee9bf0a5f0178d3da76->enter($__internal_180750efe7017d5d8ad6dd83f4c53c47180dd085e9148ee9bf0a5f0178d3da76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_180750efe7017d5d8ad6dd83f4c53c47180dd085e9148ee9bf0a5f0178d3da76->leave($__internal_180750efe7017d5d8ad6dd83f4c53c47180dd085e9148ee9bf0a5f0178d3da76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6349d554a55825c195a413064b1a5a46db565bdef363343a19a5f05f96078a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6349d554a55825c195a413064b1a5a46db565bdef363343a19a5f05f96078a95->enter($__internal_6349d554a55825c195a413064b1a5a46db565bdef363343a19a5f05f96078a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6349d554a55825c195a413064b1a5a46db565bdef363343a19a5f05f96078a95->leave($__internal_6349d554a55825c195a413064b1a5a46db565bdef363343a19a5f05f96078a95_prof);

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
