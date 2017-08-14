<?php

/* :default:archivePdf.html.twig */
class __TwigTemplate_a090c8eeb2a599aa0fc144c74ce0b0d4993523d1fae65c19a40241098b76c1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:archivePdf.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4251c7ba4c6468787ce7b622ae50da2d9369b55375b612f7c9decd60c2e64ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4251c7ba4c6468787ce7b622ae50da2d9369b55375b612f7c9decd60c2e64ac->enter($__internal_f4251c7ba4c6468787ce7b622ae50da2d9369b55375b612f7c9decd60c2e64ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:archivePdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4251c7ba4c6468787ce7b622ae50da2d9369b55375b612f7c9decd60c2e64ac->leave($__internal_f4251c7ba4c6468787ce7b622ae50da2d9369b55375b612f7c9decd60c2e64ac_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfe81ce0cb9e8e3ce133df49daf4066b6ce8fc982326f0e80d10f8d830ef69e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe81ce0cb9e8e3ce133df49daf4066b6ce8fc982326f0e80d10f8d830ef69e9->enter($__internal_bfe81ce0cb9e8e3ce133df49daf4066b6ce8fc982326f0e80d10f8d830ef69e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        // line 16
        echo "
";
        
        $__internal_bfe81ce0cb9e8e3ce133df49daf4066b6ce8fc982326f0e80d10f8d830ef69e9->leave($__internal_bfe81ce0cb9e8e3ce133df49daf4066b6ce8fc982326f0e80d10f8d830ef69e9_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_60dd4d20651de981189ef8bf23444694bcda88c28fb2771a283f16e828d71513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dd4d20651de981189ef8bf23444694bcda88c28fb2771a283f16e828d71513->enter($__internal_60dd4d20651de981189ef8bf23444694bcda88c28fb2771a283f16e828d71513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"content pdf-height\">
                ";
        // line 25
        echo "                ";
        // line 26
        echo "
                ";
        // line 28
        echo "
                ";
        // line 30
        echo "                    ";
        // line 31
        echo "                ";
        // line 32
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_60dd4d20651de981189ef8bf23444694bcda88c28fb2771a283f16e828d71513->leave($__internal_60dd4d20651de981189ef8bf23444694bcda88c28fb2771a283f16e828d71513_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0019d6c473fe95c6d0bc9579b5d47465c501c2c87f1bfe0faaa802f0e4467980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0019d6c473fe95c6d0bc9579b5d47465c501c2c87f1bfe0faaa802f0e4467980->enter($__internal_0019d6c473fe95c6d0bc9579b5d47465c501c2c87f1bfe0faaa802f0e4467980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0019d6c473fe95c6d0bc9579b5d47465c501c2c87f1bfe0faaa802f0e4467980->leave($__internal_0019d6c473fe95c6d0bc9579b5d47465c501c2c87f1bfe0faaa802f0e4467980_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_068a6e34aef6c8513a523f41be9394f3732ca057139f2581e5a7361e08865559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068a6e34aef6c8513a523f41be9394f3732ca057139f2581e5a7361e08865559->enter($__internal_068a6e34aef6c8513a523f41be9394f3732ca057139f2581e5a7361e08865559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$(\"#href\").trigger('click');
        });
    </script>
";
        
        $__internal_068a6e34aef6c8513a523f41be9394f3732ca057139f2581e5a7361e08865559->leave($__internal_068a6e34aef6c8513a523f41be9394f3732ca057139f2581e5a7361e08865559_prof);

    }

    public function getTemplateName()
    {
        return ":default:archivePdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  109 => 39,  99 => 37,  93 => 36,  83 => 32,  81 => 31,  79 => 30,  76 => 28,  73 => 26,  71 => 25,  62 => 19,  56 => 18,  48 => 16,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block head %}
    {{ parent() }}
{#
    <script type =\"text/javascript\">
        <!--
        function Redirect() {
            window.location=\"\";
        }

//        document.write(\"You will be redirected to main page in 1 sec.\");
        setTimeout('Redirect(\"#\")', 0);
        //-->
    </script>
#}

{% endblock %}
{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"content pdf-height\">
                {#http://localhost/pctd/web/pdf/1952-1982.pdf#}
                {#<a id=\"href\" href=\"http://localhost/pctd/web/1999-2000.pdf\">{{ fichier|trim('.pdf') }}</a>#}

                {#<a id=\"href\" href=\"{{ asset(fichier) }}\">1952-1982</a>#}

                {#<object data=\"{{ asset(fichier) }}\" type=\"application/pdf\" width=\"100%\" height=\"100%\">#}
                    {#alt : <a href=\"{{ asset(fichier) }}\">test.pdf</a>#}
                {#</object>#}
            </div>
        </div>
    </div>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block javascript %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            \$(\"#href\").trigger('click');
        });
    </script>
{% endblock %}

", ":default:archivePdf.html.twig", "/var/www/html/will/app/Resources/views/default/archivePdf.html.twig");
    }
}
