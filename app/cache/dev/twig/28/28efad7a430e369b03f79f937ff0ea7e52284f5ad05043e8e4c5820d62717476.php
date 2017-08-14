<?php

/* default/galerie.html.twig */
class __TwigTemplate_cde1c8e5bbb9e7ba96d4835af966cba0875cf0d7777aa70b81ce0b729944e7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "default/galerie.html.twig", 1);
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
        $__internal_adabb682a29911711748824bf510e5fb1d930588528b3b52388b2e7b21ae302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adabb682a29911711748824bf510e5fb1d930588528b3b52388b2e7b21ae302d->enter($__internal_adabb682a29911711748824bf510e5fb1d930588528b3b52388b2e7b21ae302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adabb682a29911711748824bf510e5fb1d930588528b3b52388b2e7b21ae302d->leave($__internal_adabb682a29911711748824bf510e5fb1d930588528b3b52388b2e7b21ae302d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_81cd377b28fbbee6e98c15231172f8b8144e23e8baaa2755fecb06a1085ec76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cd377b28fbbee6e98c15231172f8b8144e23e8baaa2755fecb06a1085ec76b->enter($__internal_81cd377b28fbbee6e98c15231172f8b8144e23e8baaa2755fecb06a1085ec76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_81cd377b28fbbee6e98c15231172f8b8144e23e8baaa2755fecb06a1085ec76b->leave($__internal_81cd377b28fbbee6e98c15231172f8b8144e23e8baaa2755fecb06a1085ec76b_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c317b7e454666adcb7a7faa4a35d7893ed29936963b0d034eadbff56b46da690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c317b7e454666adcb7a7faa4a35d7893ed29936963b0d034eadbff56b46da690->enter($__internal_c317b7e454666adcb7a7faa4a35d7893ed29936963b0d034eadbff56b46da690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_c317b7e454666adcb7a7faa4a35d7893ed29936963b0d034eadbff56b46da690->leave($__internal_c317b7e454666adcb7a7faa4a35d7893ed29936963b0d034eadbff56b46da690_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1b3ef9af138928a7ca9573adb9f508b8f252f6ac26770f8bb2e40cb29ef807d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b3ef9af138928a7ca9573adb9f508b8f252f6ac26770f8bb2e40cb29ef807d->enter($__internal_b1b3ef9af138928a7ca9573adb9f508b8f252f6ac26770f8bb2e40cb29ef807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b1b3ef9af138928a7ca9573adb9f508b8f252f6ac26770f8bb2e40cb29ef807d->leave($__internal_b1b3ef9af138928a7ca9573adb9f508b8f252f6ac26770f8bb2e40cb29ef807d_prof);

    }

    public function getTemplateName()
    {
        return "default/galerie.html.twig";
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
", "default/galerie.html.twig", "/var/www/html/will/app/Resources/views/default/galerie.html.twig");
    }
}
