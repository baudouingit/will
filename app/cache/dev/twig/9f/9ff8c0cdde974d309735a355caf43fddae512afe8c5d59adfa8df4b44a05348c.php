<?php

/* ::xtemplate.html.twig */
class __TwigTemplate_e31328fe31c6cbebafc77f2e0d74acf7cdd4a491137a2016cf00f5cbed7a0e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::xtemplate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fc79eefb9cdc479721e697f419f2d1ed03c1121d28038d95c872d2ff82342fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc79eefb9cdc479721e697f419f2d1ed03c1121d28038d95c872d2ff82342fb->enter($__internal_3fc79eefb9cdc479721e697f419f2d1ed03c1121d28038d95c872d2ff82342fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::xtemplate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc79eefb9cdc479721e697f419f2d1ed03c1121d28038d95c872d2ff82342fb->leave($__internal_3fc79eefb9cdc479721e697f419f2d1ed03c1121d28038d95c872d2ff82342fb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9394018860fd7998f11d7535be9268b8c908995e702873b6e372d08c1aaece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9394018860fd7998f11d7535be9268b8c908995e702873b6e372d08c1aaece->enter($__internal_1f9394018860fd7998f11d7535be9268b8c908995e702873b6e372d08c1aaece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Les prix de la critique";
        
        $__internal_1f9394018860fd7998f11d7535be9268b8c908995e702873b6e372d08c1aaece->leave($__internal_1f9394018860fd7998f11d7535be9268b8c908995e702873b6e372d08c1aaece_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa0c2ad16e227b4621e866d23d9dc93e0a429e18188e120cab6ffebcbeda3386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0c2ad16e227b4621e866d23d9dc93e0a429e18188e120cab6ffebcbeda3386->enter($__internal_aa0c2ad16e227b4621e866d23d9dc93e0a429e18188e120cab6ffebcbeda3386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container menu\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">
                    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "657d4b8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_657d4b8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/657d4b8_logo_1.png");
            // line 9
            echo "                    <img class=logo src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"logo td\"/>
                    ";
        } else {
            // asset "657d4b8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_657d4b8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/657d4b8.png");
            echo "                    <img class=logo src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"logo td\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "</a>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Historique</a></li>
                    <li><a href=\"#\">Jury</a></li>
                    <li><a href=\"#\">Liens</a></li>
                </ul>
            </div>
            <p class=\"navbar-text\">
            <h1>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new Twig_Error_Runtime('Variable "pageTitle" does not exist.', 28, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1></p>
        </div>
    </nav>
    <div class=\"container mainbody\">
        <row>
            <div class=\"col-md-8 col-md-offset-2 \">
                ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "            </div>
        </row>
    </div>
";
        
        $__internal_aa0c2ad16e227b4621e866d23d9dc93e0a429e18188e120cab6ffebcbeda3386->leave($__internal_aa0c2ad16e227b4621e866d23d9dc93e0a429e18188e120cab6ffebcbeda3386_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ef48afbdef8b8bf58d583fe993a6dbf714c6f0797bdc75d110da6045de383b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef48afbdef8b8bf58d583fe993a6dbf714c6f0797bdc75d110da6045de383b6->enter($__internal_0ef48afbdef8b8bf58d583fe993a6dbf714c6f0797bdc75d110da6045de383b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "                ";
        
        $__internal_0ef48afbdef8b8bf58d583fe993a6dbf714c6f0797bdc75d110da6045de383b6->leave($__internal_0ef48afbdef8b8bf58d583fe993a6dbf714c6f0797bdc75d110da6045de383b6_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c73b22d073e6551f11e1cedbfc04978aaa2be4fb56c0a1bf4015383d3fef0215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73b22d073e6551f11e1cedbfc04978aaa2be4fb56c0a1bf4015383d3fef0215->enter($__internal_c73b22d073e6551f11e1cedbfc04978aaa2be4fb56c0a1bf4015383d3fef0215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c73b22d073e6551f11e1cedbfc04978aaa2be4fb56c0a1bf4015383d3fef0215->leave($__internal_c73b22d073e6551f11e1cedbfc04978aaa2be4fb56c0a1bf4015383d3fef0215_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_56fc570e2ba127ce5da87a151db471e1b186779e1c18919cd76cece044759a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fc570e2ba127ce5da87a151db471e1b186779e1c18919cd76cece044759a4a->enter($__internal_56fc570e2ba127ce5da87a151db471e1b186779e1c18919cd76cece044759a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_56fc570e2ba127ce5da87a151db471e1b186779e1c18919cd76cece044759a4a->leave($__internal_56fc570e2ba127ce5da87a151db471e1b186779e1c18919cd76cece044759a4a_prof);

    }

    public function getTemplateName()
    {
        return "::xtemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 44,  150 => 43,  140 => 41,  134 => 40,  127 => 35,  121 => 34,  111 => 36,  109 => 34,  100 => 28,  80 => 10,  66 => 9,  62 => 8,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Les prix de la critique{% endblock %}
{% block body %}
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container menu\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">
                    {% image '@AppBundle/Resources/logos/logo.png' %}
                    <img class=logo src=\"{{ asset_url }}\" alt=\"logo td\"/>
                    {% endimage %}</a>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Historique</a></li>
                    <li><a href=\"#\">Jury</a></li>
                    <li><a href=\"#\">Liens</a></li>
                </ul>
            </div>
            <p class=\"navbar-text\">
            <h1>{{ pageTitle }}</h1></p>
        </div>
    </nav>
    <div class=\"container mainbody\">
        <row>
            <div class=\"col-md-8 col-md-offset-2 \">
                {% block content %}
                {% endblock %}
            </div>
        </row>
    </div>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block javascript %}
    {{ parent() }}
{% endblock %}

", "::xtemplate.html.twig", "/var/www/html/will/app/Resources/views/xtemplate.html.twig");
    }
}
