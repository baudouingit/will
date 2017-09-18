<?php

/* :default:archiveOnWeb.html.twig */
class __TwigTemplate_ad4a509789179f8d6100f6a5a43649fb379e2a4c2e555aeb3d5d5001dc4bfdb3 extends Twig_Template
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
        $__internal_ce7279fb029063add932784933ecf30ce31a7127bc18a4b853cb8dc63913b378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7279fb029063add932784933ecf30ce31a7127bc18a4b853cb8dc63913b378->enter($__internal_ce7279fb029063add932784933ecf30ce31a7127bc18a4b853cb8dc63913b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:archiveOnWeb.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) || array_key_exists("annees", $context) ? $context["annees"] : (function () { throw new Twig_Error_Runtime('Variable "annees" does not exist.', 1, $this->getSourceContext()); })()));
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
        
        $__internal_ce7279fb029063add932784933ecf30ce31a7127bc18a4b853cb8dc63913b378->leave($__internal_ce7279fb029063add932784933ecf30ce31a7127bc18a4b853cb8dc63913b378_prof);

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
        return array (  34 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for annee in annees %}
    {% if annee.anneesValides > 2007 %}
        <li><a href=\"{{ path('app_default_nomines', {'domaine': 'Spectacle', 'annee': annee.anneesValides,}) }}\">
                {{ annee.anneesValides - 1 }}-{{ annee.anneesValides }}</a></li>
    {% endif %}
{% endfor %}", ":default:archiveOnWeb.html.twig", "/var/www/html/will/app/Resources/views/default/archiveOnWeb.html.twig");
    }
}
