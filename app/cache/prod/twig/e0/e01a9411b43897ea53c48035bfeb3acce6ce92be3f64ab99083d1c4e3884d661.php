<?php

/* :default:menu.html.twig */
class __TwigTemplate_36f49cc38a088da8725b45e7d1ba2bbec535e14ebaa9dbf34679e4de5adbafce extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["domaines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => twig_get_attribute($this->env, $this->getSourceContext(), $context["domaine"], "domaine", array()), "annee" => ($context["annee"] ?? null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["domaine"], "domaine", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return ":default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:menu.html.twig", "/var/www/html/will/app/Resources/views/default/menu.html.twig");
    }
}
