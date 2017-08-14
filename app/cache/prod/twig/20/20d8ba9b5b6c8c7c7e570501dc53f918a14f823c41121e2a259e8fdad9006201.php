<?php

/* ::template.html.twig */
class __TwigTemplate_b46efcd5952bffbcb44c5f7b974aa0e8b558764eb1c37fc13c28b30282a9e038 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Les prix de la critique";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" alt=\"logo td\"/>
                    ";
        } else {
            // asset "657d4b8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_657d4b8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/657d4b8.png");
            echo "                    <img class=logo src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "app_default_nomines")) {
            // line 55
            echo "
                    <div class=\"col-md-1 col-xs-1\">
                        <a style='float: left; background: transparent;'
                           href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => ($context["prev"] ?? null), "annee" => ($context["annee"] ?? null))), "html", null, true);
            echo "\"><h1
                                    style=\"margin-left: 0;\"><span
                                        class=\"glyphicon glyphicon-menu-left\" style=\"color:#b31b20;\"></span></h1>
                        </a>

                    </div>
                    <div class=\"col-md-10 col-xs-10 center-text\">
                        <h1 style=\"text-align: center;\">";
            // line 65
            echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
            echo "</h1>
                    </div>
                    <div class=\"col-md-1 col-xs-1\">
                        <a style='float: right; background: transparent;'
                           href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => ($context["next"] ?? null), "annee" => ($context["annee"] ?? null))), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
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
            <div id=\"tr\" class=\"col-md-8 col-md-offset-2 rounded transparent\"></div> ";
        // line 90
        echo "            <div id=\"op\" class=\"col-md-8 col-md-offset-2 rounded\">
                ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "            </div>
        </div>

    </div>
";
    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
        // line 92
        echo "                    ";
        // line 93
        echo "                ";
    }

    // line 99
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 102
    public function block_javascript($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
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
        return array (  230 => 103,  227 => 102,  220 => 100,  217 => 99,  213 => 93,  211 => 92,  208 => 91,  200 => 94,  198 => 91,  195 => 90,  190 => 85,  186 => 82,  179 => 78,  176 => 77,  165 => 69,  158 => 65,  148 => 58,  143 => 55,  141 => 54,  132 => 48,  128 => 47,  122 => 44,  113 => 38,  109 => 37,  98 => 29,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  65 => 10,  51 => 9,  47 => 8,  41 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::template.html.twig", "/var/www/html/will/app/Resources/views/template.html.twig");
    }
}
