<?php

/* ::template.html.twig */
class __TwigTemplate_b9ee5446f09919f2298812569b01e3962ffbfc15da5ab32cae65e2acc38bf0a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::template.html.twig", 1);
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
        $__internal_ac17c39fb6dc084c5673ffab0cc0f10df4fc41fa244eb739a672c416d71787cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac17c39fb6dc084c5673ffab0cc0f10df4fc41fa244eb739a672c416d71787cb->enter($__internal_ac17c39fb6dc084c5673ffab0cc0f10df4fc41fa244eb739a672c416d71787cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac17c39fb6dc084c5673ffab0cc0f10df4fc41fa244eb739a672c416d71787cb->leave($__internal_ac17c39fb6dc084c5673ffab0cc0f10df4fc41fa244eb739a672c416d71787cb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4265638263405bd53fdac7d222f4c9a8bafab1a48eca6ee7017b91cd1131aa03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4265638263405bd53fdac7d222f4c9a8bafab1a48eca6ee7017b91cd1131aa03->enter($__internal_4265638263405bd53fdac7d222f4c9a8bafab1a48eca6ee7017b91cd1131aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Les prix de la critique";
        
        $__internal_4265638263405bd53fdac7d222f4c9a8bafab1a48eca6ee7017b91cd1131aa03->leave($__internal_4265638263405bd53fdac7d222f4c9a8bafab1a48eca6ee7017b91cd1131aa03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2af7df935efc5d155a145db8accb8b4c3e0cefc18f9b09a5bd47b7b06cbace8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2af7df935efc5d155a145db8accb8b4c3e0cefc18f9b09a5bd47b7b06cbace8->enter($__internal_c2af7df935efc5d155a145db8accb8b4c3e0cefc18f9b09a5bd47b7b06cbace8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_accueil");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_historique");
        echo "\">Historique</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_jury");
        echo "\">Jury</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_liens");
        echo "\">Liens</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Palmares<span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Categories:allKnownCategories"));
        echo "
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Archives<span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Categories:allYearsOnPaper"));
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Categories:allYearsOnWeb"));
        echo "
                        </ul>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Galeries<span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Categories:allGalleries"));
        echo "
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_find");
        echo "\">Recherches</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_partenaires");
        echo "\">Partenaires</a></li>
                </ul>
            </div>

            <div class=\"row\" style=\"padding-left: 0; margin-left: 0;\">

                ";
        // line 54
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "app_default_nomines")) {
            // line 55
            echo "
                    <div class=\"col-md-1 col-xs-1\">
                        <a style='float: left; background: transparent;'
                           href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => (isset($context["prev"]) || array_key_exists("prev", $context) ? $context["prev"] : (function () { throw new Twig_Error_Runtime('Variable "prev" does not exist.', 58, $this->getSourceContext()); })()), "annee" => (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new Twig_Error_Runtime('Variable "annee" does not exist.', 58, $this->getSourceContext()); })()))), "html", null, true);
            echo "\"><h1
                                    style=\"margin-left: 0;\"><span
                                        class=\"glyphicon glyphicon-menu-left\" style=\"color:#b31b20;\"></span></h1>
                        </a>

                    </div>
                    <div class=\"col-md-10 col-xs-10 center-text\">
                        <h1 style=\"text-align: center;\">";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new Twig_Error_Runtime('Variable "pageTitle" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "</h1>
                    </div>
                    <div class=\"col-md-1 col-xs-1\">
                        <a style='float: right; background: transparent;'
                           href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 69, $this->getSourceContext()); })()), "annee" => (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new Twig_Error_Runtime('Variable "annee" does not exist.', 69, $this->getSourceContext()); })()))), "html", null, true);
            echo "\"><h1
                            ><span
                                        class=\"glyphicon glyphicon-menu-right\" style=\"color:#b31b20\"></span></h1>
                        </a>
                    </div>


                ";
        } else {
            // line 77
            echo "                    <div class=\"col-md-12 col-xs-12\">
                        <h1 class=\"titrePage\" style=\"text-align: center;\">";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new Twig_Error_Runtime('Variable "pageTitle" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo "</h1>
                    </div>

                ";
        }
        // line 82
        echo "            </div>
        </div>
        ";
        // line 85
        echo "    </nav>
    <div class=\"container contenu\">
        <div class=row>
            <div class=\"col-md-8 col-md-offset-2 rounded transparent\"></div> ";
        // line 89
        echo "            <div class=\"col-md-8 col-md-offset-2 rounded\">
                ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "            </div>
        </div>

    </div>
";
        
        $__internal_c2af7df935efc5d155a145db8accb8b4c3e0cefc18f9b09a5bd47b7b06cbace8->leave($__internal_c2af7df935efc5d155a145db8accb8b4c3e0cefc18f9b09a5bd47b7b06cbace8_prof);

    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f1a2081501dd2e525db7dd6aa848786ca566029e934c391ce0baf64c82ab732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1a2081501dd2e525db7dd6aa848786ca566029e934c391ce0baf64c82ab732->enter($__internal_9f1a2081501dd2e525db7dd6aa848786ca566029e934c391ce0baf64c82ab732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 91
        echo "                    ";
        // line 92
        echo "                ";
        
        $__internal_9f1a2081501dd2e525db7dd6aa848786ca566029e934c391ce0baf64c82ab732->leave($__internal_9f1a2081501dd2e525db7dd6aa848786ca566029e934c391ce0baf64c82ab732_prof);

    }

    // line 98
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b14a5e109c77de272104bba04f2066840742aa4753e5040e804538fca4cddb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14a5e109c77de272104bba04f2066840742aa4753e5040e804538fca4cddb91->enter($__internal_b14a5e109c77de272104bba04f2066840742aa4753e5040e804538fca4cddb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 99
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_b14a5e109c77de272104bba04f2066840742aa4753e5040e804538fca4cddb91->leave($__internal_b14a5e109c77de272104bba04f2066840742aa4753e5040e804538fca4cddb91_prof);

    }

    // line 101
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c814f38d860260d1b8d9b393d6a59e7ae5a2adcb522d71b07c286e1c4b6dd4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c814f38d860260d1b8d9b393d6a59e7ae5a2adcb522d71b07c286e1c4b6dd4c7->enter($__internal_c814f38d860260d1b8d9b393d6a59e7ae5a2adcb522d71b07c286e1c4b6dd4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 102
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_c814f38d860260d1b8d9b393d6a59e7ae5a2adcb522d71b07c286e1c4b6dd4c7->leave($__internal_c814f38d860260d1b8d9b393d6a59e7ae5a2adcb522d71b07c286e1c4b6dd4c7_prof);

    }

    public function getTemplateName()
    {
        return "::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 102,  257 => 101,  247 => 99,  241 => 98,  234 => 92,  232 => 91,  226 => 90,  215 => 93,  213 => 90,  210 => 89,  205 => 85,  201 => 82,  194 => 78,  191 => 77,  180 => 69,  173 => 65,  163 => 58,  158 => 55,  156 => 54,  147 => 48,  143 => 47,  137 => 44,  128 => 38,  124 => 37,  113 => 29,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  80 => 10,  66 => 9,  62 => 8,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
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
                    <li><a href=\"{{ path('app_default_accueil') }}\">Home</a></li>
                    <li><a href=\"{{ path('app_default_historique') }}\">Historique</a></li>
                    <li><a href=\"{{ path('app_default_jury') }}\">Jury</a></li>
                    <li><a href=\"{{ path('app_default_liens') }}\">Liens</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Palmares<span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            {{ render(controller('AppBundle:Categories:allKnownCategories')) }}
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Archives<span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            {{ render(controller('AppBundle:Categories:allYearsOnPaper')) }}
                            {{ render(controller('AppBundle:Categories:allYearsOnWeb')) }}
                        </ul>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Galeries<span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            {{ render(controller('AppBundle:Categories:allGalleries')) }}
                        </ul>
                    </li>
                    <li><a href=\"{{ path('app_default_find') }}\">Recherches</a></li>
                    <li><a href=\"{{ path('app_default_partenaires') }}\">Partenaires</a></li>
                </ul>
            </div>

            <div class=\"row\" style=\"padding-left: 0; margin-left: 0;\">

                {% if app.request.attributes.get('_route') == \"app_default_nomines\" %}

                    <div class=\"col-md-1 col-xs-1\">
                        <a style='float: left; background: transparent;'
                           href=\"{{ path('app_default_nomines', {'domaine': prev, 'annee': annee}) }}\"><h1
                                    style=\"margin-left: 0;\"><span
                                        class=\"glyphicon glyphicon-menu-left\" style=\"color:#b31b20;\"></span></h1>
                        </a>

                    </div>
                    <div class=\"col-md-10 col-xs-10 center-text\">
                        <h1 style=\"text-align: center;\">{{ pageTitle }}</h1>
                    </div>
                    <div class=\"col-md-1 col-xs-1\">
                        <a style='float: right; background: transparent;'
                           href=\"{{ path('app_default_nomines', {'domaine': next, 'annee': annee}) }}\"><h1
                            ><span
                                        class=\"glyphicon glyphicon-menu-right\" style=\"color:#b31b20\"></span></h1>
                        </a>
                    </div>


                {% else %}
                    <div class=\"col-md-12 col-xs-12\">
                        <h1 class=\"titrePage\" style=\"text-align: center;\">{{ pageTitle }}</h1>
                    </div>

                {% endif %}
            </div>
        </div>
        {#<h1>{{ pageTitle }}</h1>#}
    </nav>
    <div class=\"container contenu\">
        <div class=row>
            <div class=\"col-md-8 col-md-offset-2 rounded transparent\"></div> {# Panneau transparent sous le texte #}
            <div class=\"col-md-8 col-md-offset-2 rounded\">
                {% block content %}
                    {# Ici s'insérera le texte #}
                {% endblock %}
            </div>
        </div>

    </div>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block javascript %}
    {{ parent() }}
{% endblock %}
", "::template.html.twig", "/var/www/html/will/app/Resources/views/template.html.twig");
    }
}
