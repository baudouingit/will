<?php

/* :default:galerie.html.twig */
class __TwigTemplate_0fee11c90968ebb263982d151f26c3e3f988f1b612cc876062232d72b6f5e1d3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["photos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                    ";
            // line 12
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["path"] ?? null) . "/") . $context["item"])), "html", null, true);
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
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  77 => 22,  74 => 21,  67 => 19,  64 => 18,  57 => 14,  48 => 12,  46 => 11,  42 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:galerie.html.twig", "/var/www/html/will/app/Resources/views/default/galerie.html.twig");
    }
}
