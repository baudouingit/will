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
        $__internal_67ca6bf3abdaa374ad14b778323560f4aa35ba75b388cf8ac0a4b4940f3c101e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ca6bf3abdaa374ad14b778323560f4aa35ba75b388cf8ac0a4b4940f3c101e->enter($__internal_67ca6bf3abdaa374ad14b778323560f4aa35ba75b388cf8ac0a4b4940f3c101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ca6bf3abdaa374ad14b778323560f4aa35ba75b388cf8ac0a4b4940f3c101e->leave($__internal_67ca6bf3abdaa374ad14b778323560f4aa35ba75b388cf8ac0a4b4940f3c101e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_621ca06d6bbf2f3c8ea78b9b73e47615243ec70bf50fecf6471bf0ce9800d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621ca06d6bbf2f3c8ea78b9b73e47615243ec70bf50fecf6471bf0ce9800d3dc->enter($__internal_621ca06d6bbf2f3c8ea78b9b73e47615243ec70bf50fecf6471bf0ce9800d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_621ca06d6bbf2f3c8ea78b9b73e47615243ec70bf50fecf6471bf0ce9800d3dc->leave($__internal_621ca06d6bbf2f3c8ea78b9b73e47615243ec70bf50fecf6471bf0ce9800d3dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b862783bdf83734d355367863fbc448f6003bce95c8a56fc48de525ce28d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b862783bdf83734d355367863fbc448f6003bce95c8a56fc48de525ce28d95->enter($__internal_e5b862783bdf83734d355367863fbc448f6003bce95c8a56fc48de525ce28d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5b862783bdf83734d355367863fbc448f6003bce95c8a56fc48de525ce28d95->leave($__internal_e5b862783bdf83734d355367863fbc448f6003bce95c8a56fc48de525ce28d95_prof);

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
