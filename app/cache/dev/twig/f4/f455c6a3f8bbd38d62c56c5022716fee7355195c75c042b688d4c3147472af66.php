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
        $__internal_0a3a5b3142e9f0c1a1f1bbeba95ad568da30fd4080f84497855a85aecb217fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3a5b3142e9f0c1a1f1bbeba95ad568da30fd4080f84497855a85aecb217fe6->enter($__internal_0a3a5b3142e9f0c1a1f1bbeba95ad568da30fd4080f84497855a85aecb217fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a3a5b3142e9f0c1a1f1bbeba95ad568da30fd4080f84497855a85aecb217fe6->leave($__internal_0a3a5b3142e9f0c1a1f1bbeba95ad568da30fd4080f84497855a85aecb217fe6_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_85f31c4ee30a576ad4ddb74d7fe75f1b012d9db52111404855e37c3a2eaa2cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f31c4ee30a576ad4ddb74d7fe75f1b012d9db52111404855e37c3a2eaa2cff->enter($__internal_85f31c4ee30a576ad4ddb74d7fe75f1b012d9db52111404855e37c3a2eaa2cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_85f31c4ee30a576ad4ddb74d7fe75f1b012d9db52111404855e37c3a2eaa2cff->leave($__internal_85f31c4ee30a576ad4ddb74d7fe75f1b012d9db52111404855e37c3a2eaa2cff_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06e78cf84496bfefcfcd1187c0a4419ae0880ac2cf246beb4fffbe25b983d5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e78cf84496bfefcfcd1187c0a4419ae0880ac2cf246beb4fffbe25b983d5fe->enter($__internal_06e78cf84496bfefcfcd1187c0a4419ae0880ac2cf246beb4fffbe25b983d5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_06e78cf84496bfefcfcd1187c0a4419ae0880ac2cf246beb4fffbe25b983d5fe->leave($__internal_06e78cf84496bfefcfcd1187c0a4419ae0880ac2cf246beb4fffbe25b983d5fe_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a257b48c822081528aa5517abf82833ea96b4dc5285068cae52042bf612d870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a257b48c822081528aa5517abf82833ea96b4dc5285068cae52042bf612d870->enter($__internal_1a257b48c822081528aa5517abf82833ea96b4dc5285068cae52042bf612d870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            (function () {
                Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria', {
//                    responsive: true,
//                    showCounter: true,
                    thumbnails: false,
//                    imageCrop: false,
//                    trueFullscreen: true,
                });
            }());
        </script>
    ";
        
        $__internal_1a257b48c822081528aa5517abf82833ea96b4dc5285068cae52042bf612d870->leave($__internal_1a257b48c822081528aa5517abf82833ea96b4dc5285068cae52042bf612d870_prof);

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
//                    responsive: true,
//                    showCounter: true,
                    thumbnails: false,
//                    imageCrop: false,
//                    trueFullscreen: true,
                });
            }());
        </script>
    {% endblock %}
", ":default:galerie.html.twig", "/var/www/html/will/app/Resources/views/default/galerie.html.twig");
    }
}
