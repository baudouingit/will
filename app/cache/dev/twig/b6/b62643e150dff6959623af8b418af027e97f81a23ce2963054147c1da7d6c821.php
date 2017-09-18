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
        $__internal_d718f60cb74b0b05096fbe44b51652a81ca5ca2bfba325567b5dd423f4073b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d718f60cb74b0b05096fbe44b51652a81ca5ca2bfba325567b5dd423f4073b3d->enter($__internal_d718f60cb74b0b05096fbe44b51652a81ca5ca2bfba325567b5dd423f4073b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:archivePdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d718f60cb74b0b05096fbe44b51652a81ca5ca2bfba325567b5dd423f4073b3d->leave($__internal_d718f60cb74b0b05096fbe44b51652a81ca5ca2bfba325567b5dd423f4073b3d_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_e668d906a23819df5c705b874cd0b2b21d52ece21659e52577e7fcc1113e96b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e668d906a23819df5c705b874cd0b2b21d52ece21659e52577e7fcc1113e96b3->enter($__internal_e668d906a23819df5c705b874cd0b2b21d52ece21659e52577e7fcc1113e96b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        // line 16
        echo "
";
        
        $__internal_e668d906a23819df5c705b874cd0b2b21d52ece21659e52577e7fcc1113e96b3->leave($__internal_e668d906a23819df5c705b874cd0b2b21d52ece21659e52577e7fcc1113e96b3_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_6af82d5895de0d6af6e2242b5270a01348de6d03ad47cca83addd4baae04f102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af82d5895de0d6af6e2242b5270a01348de6d03ad47cca83addd4baae04f102->enter($__internal_6af82d5895de0d6af6e2242b5270a01348de6d03ad47cca83addd4baae04f102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6af82d5895de0d6af6e2242b5270a01348de6d03ad47cca83addd4baae04f102->leave($__internal_6af82d5895de0d6af6e2242b5270a01348de6d03ad47cca83addd4baae04f102_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5e06cabde1c1e60d86f9fb1e0b4a4e51a20b3c1f7daa4b3280fe40ad53ae074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e06cabde1c1e60d86f9fb1e0b4a4e51a20b3c1f7daa4b3280fe40ad53ae074->enter($__internal_e5e06cabde1c1e60d86f9fb1e0b4a4e51a20b3c1f7daa4b3280fe40ad53ae074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e5e06cabde1c1e60d86f9fb1e0b4a4e51a20b3c1f7daa4b3280fe40ad53ae074->leave($__internal_e5e06cabde1c1e60d86f9fb1e0b4a4e51a20b3c1f7daa4b3280fe40ad53ae074_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_34d093338a48fe341c78e2bd3d425889d93d4e726353f41b1466ef182e713478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d093338a48fe341c78e2bd3d425889d93d4e726353f41b1466ef182e713478->enter($__internal_34d093338a48fe341c78e2bd3d425889d93d4e726353f41b1466ef182e713478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_34d093338a48fe341c78e2bd3d425889d93d4e726353f41b1466ef182e713478->leave($__internal_34d093338a48fe341c78e2bd3d425889d93d4e726353f41b1466ef182e713478_prof);

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
