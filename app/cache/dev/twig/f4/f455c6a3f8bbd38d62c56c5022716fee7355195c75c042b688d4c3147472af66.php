<?php

/* :default:galerie.html.twig */
class __TwigTemplate_6c717da5d4ebf96253396ad88534ee11e6d318f781b74729b0e6d151e70b9a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:galerie.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8986f7fd71b85e95e3ed5887fe082b9a7a3377100580bd93fe4de1ea6ebfe79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8986f7fd71b85e95e3ed5887fe082b9a7a3377100580bd93fe4de1ea6ebfe79f->enter($__internal_8986f7fd71b85e95e3ed5887fe082b9a7a3377100580bd93fe4de1ea6ebfe79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8986f7fd71b85e95e3ed5887fe082b9a7a3377100580bd93fe4de1ea6ebfe79f->leave($__internal_8986f7fd71b85e95e3ed5887fe082b9a7a3377100580bd93fe4de1ea6ebfe79f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a12644807d5d0e970d99617d6473e62bfa1493abeb141b61d737812952b97753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12644807d5d0e970d99617d6473e62bfa1493abeb141b61d737812952b97753->enter($__internal_a12644807d5d0e970d99617d6473e62bfa1493abeb141b61d737812952b97753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <style>
        /*.galleria{ max-width: 1000px; height: 1000px; background: #000 }*/
        /*.galleria{ max-width: 500px; height: 400px; background: #000 }*/
    </style>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"galleria\" style=\"margin: auto\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new Twig_Error_Runtime('Variable "photos" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                    ";
            // line 12
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 12, $this->getSourceContext()); })()) . "/") . $context["item"])), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_a12644807d5d0e970d99617d6473e62bfa1493abeb141b61d737812952b97753->leave($__internal_a12644807d5d0e970d99617d6473e62bfa1493abeb141b61d737812952b97753_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47cce5e0d124b5e67dd52d03f207765157d78cba376d46546e341033179e7d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cce5e0d124b5e67dd52d03f207765157d78cba376d46546e341033179e7d28->enter($__internal_47cce5e0d124b5e67dd52d03f207765157d78cba376d46546e341033179e7d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_47cce5e0d124b5e67dd52d03f207765157d78cba376d46546e341033179e7d28->leave($__internal_47cce5e0d124b5e67dd52d03f207765157d78cba376d46546e341033179e7d28_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88e75cc6cba6afa95ac78872a17c3c6ad92f65bed8873188ec7f0b152b3a2ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e75cc6cba6afa95ac78872a17c3c6ad92f65bed8873188ec7f0b152b3a2ef6->enter($__internal_88e75cc6cba6afa95ac78872a17c3c6ad92f65bed8873188ec7f0b152b3a2ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            (function () {
                Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria', {
                    responsive: true,
                    showCounter: true,
                    thumbnails: false,
                    trueFullscreen: true,
//                    height: 0.5625,
                });
            }());
        </script>
    ";
        
        $__internal_88e75cc6cba6afa95ac78872a17c3c6ad92f65bed8873188ec7f0b152b3a2ef6->leave($__internal_88e75cc6cba6afa95ac78872a17c3c6ad92f65bed8873188ec7f0b152b3a2ef6_prof);

    }

    public function getTemplateName()
    {
        return ":default:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  92 => 21,  82 => 19,  76 => 18,  66 => 14,  57 => 12,  55 => 11,  51 => 10,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block content %}
    <style>
        /*.galleria{ max-width: 1000px; height: 1000px; background: #000 }*/
        /*.galleria{ max-width: 500px; height: 400px; background: #000 }*/
    </style>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"galleria\" style=\"margin: auto\">
                {% for item in photos %}
                    {#{{ asset(path ~ '/' ~ item) }}#}
                    <img src=\"{{ asset(path ~ '/' ~ item) }}\">
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
    {% block stylesheets %}
        {{ parent() }}
    {% endblock %}
    {% block javascripts %}
        {{ parent() }}
        <script>
            (function () {
                Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria', {
                    responsive: true,
                    showCounter: true,
                    thumbnails: false,
                    trueFullscreen: true,
//                    height: 0.5625,
                });
            }());
        </script>
    {% endblock %}
", ":default:galerie.html.twig", "/var/www/html/will/app/Resources/views/default/galerie.html.twig");
    }
}
