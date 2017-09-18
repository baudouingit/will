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
        $__internal_f916f65b5a597cd1b46318edf9f20829c180abe686d2a2d38ba38240b5fcba15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f916f65b5a597cd1b46318edf9f20829c180abe686d2a2d38ba38240b5fcba15->enter($__internal_f916f65b5a597cd1b46318edf9f20829c180abe686d2a2d38ba38240b5fcba15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f916f65b5a597cd1b46318edf9f20829c180abe686d2a2d38ba38240b5fcba15->leave($__internal_f916f65b5a597cd1b46318edf9f20829c180abe686d2a2d38ba38240b5fcba15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5acefe7bfa455110aa061ae8d32493d2a1d708861c4238f57158743280b4ae6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acefe7bfa455110aa061ae8d32493d2a1d708861c4238f57158743280b4ae6f->enter($__internal_5acefe7bfa455110aa061ae8d32493d2a1d708861c4238f57158743280b4ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5acefe7bfa455110aa061ae8d32493d2a1d708861c4238f57158743280b4ae6f->leave($__internal_5acefe7bfa455110aa061ae8d32493d2a1d708861c4238f57158743280b4ae6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6d91079966f8741115374bd59a0768245a5c0b73f928881f2a05e2caf6d4bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d91079966f8741115374bd59a0768245a5c0b73f928881f2a05e2caf6d4bf7->enter($__internal_b6d91079966f8741115374bd59a0768245a5c0b73f928881f2a05e2caf6d4bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6d91079966f8741115374bd59a0768245a5c0b73f928881f2a05e2caf6d4bf7->leave($__internal_b6d91079966f8741115374bd59a0768245a5c0b73f928881f2a05e2caf6d4bf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa5f8f24c80bede679838d1e41c67cc8951a8a73c8aa7a4b1710e897b41872ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5f8f24c80bede679838d1e41c67cc8951a8a73c8aa7a4b1710e897b41872ac->enter($__internal_fa5f8f24c80bede679838d1e41c67cc8951a8a73c8aa7a4b1710e897b41872ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fa5f8f24c80bede679838d1e41c67cc8951a8a73c8aa7a4b1710e897b41872ac->leave($__internal_fa5f8f24c80bede679838d1e41c67cc8951a8a73c8aa7a4b1710e897b41872ac_prof);

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
