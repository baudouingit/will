<?php

/* :default:menuGalleries.html.twig */
class __TwigTemplate_086d1e3397ebd0b72b3ea72aef3f6bd03df023833867f3b06d26f54765f79eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 2
            echo "    ";
            // line 3
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_galerie", array("galleries" => $context["gallery"], "index" => "2")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["gallery"], "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return ":default:menuGalleries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:menuGalleries.html.twig", "/var/www/html/will/app/Resources/views/default/menuGalleries.html.twig");
    }
}
