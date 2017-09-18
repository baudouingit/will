<?php

/* ::xtemplate.html.twig */
class __TwigTemplate_d1571976b32627be27099bef8dcba48c5d26713dcece4c0c3f8667bd4f5433ea extends Twig_Template
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
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Historique</a></li>
                    <li><a href=\"#\">Jury</a></li>
                    <li><a href=\"#\">Liens</a></li>
                </ul>
            </div>
            <p class=\"navbar-text\">
            <h1>";
        // line 28
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
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
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "                ";
    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
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
        return array (  123 => 44,  120 => 43,  113 => 41,  110 => 40,  106 => 35,  103 => 34,  96 => 36,  94 => 34,  85 => 28,  65 => 10,  51 => 9,  47 => 8,  41 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::xtemplate.html.twig", "/var/www/html/will/app/Resources/views/xtemplate.html.twig");
    }
}
