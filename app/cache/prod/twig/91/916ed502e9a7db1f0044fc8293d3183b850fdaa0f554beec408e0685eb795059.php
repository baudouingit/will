<?php

/* :default:archiveOnWeb.html.twig */
class __TwigTemplate_4795edd222cf40d444247bd4bda24c561c7d13aa5e76267e5d7303261115e652 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["annees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["annee"], "anneesValides", array()) > 2007)) {
                // line 3
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => "Spectacle", "annee" => twig_get_attribute($this->env, $this->getSourceContext(), $context["annee"], "anneesValides", array()))), "html", null, true);
                echo "\">
                ";
                // line 4
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["annee"], "anneesValides", array()) - 1), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["annee"], "anneesValides", array()), "html", null, true);
                echo "</a></li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return ":default:archiveOnWeb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:archiveOnWeb.html.twig", "/var/www/html/will/app/Resources/views/default/archiveOnWeb.html.twig");
    }
}
