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
        $__internal_5cb755a35d9d08f6df1c8b225f7b3d9b25e505ce946d889bf926ebfa5d171df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb755a35d9d08f6df1c8b225f7b3d9b25e505ce946d889bf926ebfa5d171df7->enter($__internal_5cb755a35d9d08f6df1c8b225f7b3d9b25e505ce946d889bf926ebfa5d171df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::xtemplate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb755a35d9d08f6df1c8b225f7b3d9b25e505ce946d889bf926ebfa5d171df7->leave($__internal_5cb755a35d9d08f6df1c8b225f7b3d9b25e505ce946d889bf926ebfa5d171df7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef360e08bfe0d21413c0643eeb7558a147d71cdc13ab44bc906c1c15c9e86c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef360e08bfe0d21413c0643eeb7558a147d71cdc13ab44bc906c1c15c9e86c31->enter($__internal_ef360e08bfe0d21413c0643eeb7558a147d71cdc13ab44bc906c1c15c9e86c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Les prix de la critique";
        
        $__internal_ef360e08bfe0d21413c0643eeb7558a147d71cdc13ab44bc906c1c15c9e86c31->leave($__internal_ef360e08bfe0d21413c0643eeb7558a147d71cdc13ab44bc906c1c15c9e86c31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c54cb3f85fbcedaa1c603051c6613568c46f3fa3ce371b54bd9b61097decd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c54cb3f85fbcedaa1c603051c6613568c46f3fa3ce371b54bd9b61097decd51->enter($__internal_2c54cb3f85fbcedaa1c603051c6613568c46f3fa3ce371b54bd9b61097decd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c54cb3f85fbcedaa1c603051c6613568c46f3fa3ce371b54bd9b61097decd51->leave($__internal_2c54cb3f85fbcedaa1c603051c6613568c46f3fa3ce371b54bd9b61097decd51_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ac07846c6c9b56a31b493b12b0523cd90fc6ea850c79eccf7c4b6d00ebd0ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac07846c6c9b56a31b493b12b0523cd90fc6ea850c79eccf7c4b6d00ebd0ba9->enter($__internal_0ac07846c6c9b56a31b493b12b0523cd90fc6ea850c79eccf7c4b6d00ebd0ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "                ";
        
        $__internal_0ac07846c6c9b56a31b493b12b0523cd90fc6ea850c79eccf7c4b6d00ebd0ba9->leave($__internal_0ac07846c6c9b56a31b493b12b0523cd90fc6ea850c79eccf7c4b6d00ebd0ba9_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23908321bab4aaa29c510e047d2abd33cfa2af6af6cee9c96b539cffaffe6cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23908321bab4aaa29c510e047d2abd33cfa2af6af6cee9c96b539cffaffe6cc5->enter($__internal_23908321bab4aaa29c510e047d2abd33cfa2af6af6cee9c96b539cffaffe6cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_23908321bab4aaa29c510e047d2abd33cfa2af6af6cee9c96b539cffaffe6cc5->leave($__internal_23908321bab4aaa29c510e047d2abd33cfa2af6af6cee9c96b539cffaffe6cc5_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e1a3477be8b8006d76a75b9fe9c8561aaddff54ca62be4d9e82f42dab91769f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a3477be8b8006d76a75b9fe9c8561aaddff54ca62be4d9e82f42dab91769f1->enter($__internal_e1a3477be8b8006d76a75b9fe9c8561aaddff54ca62be4d9e82f42dab91769f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_e1a3477be8b8006d76a75b9fe9c8561aaddff54ca62be4d9e82f42dab91769f1->leave($__internal_e1a3477be8b8006d76a75b9fe9c8561aaddff54ca62be4d9e82f42dab91769f1_prof);

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
