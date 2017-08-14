<?php

/* default/archiveOnWeb.html.twig */
class __TwigTemplate_5d9a2d1dbf6c0427234f5d5782a16ec42870c551f8938cd488ce6ad77cbe051c extends Twig_Template
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
        $__internal_14414215ac5b03951b1dcd463e4329a10f89ba22f1e9f9b57ca5b90832e76c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14414215ac5b03951b1dcd463e4329a10f89ba22f1e9f9b57ca5b90832e76c2e->enter($__internal_14414215ac5b03951b1dcd463e4329a10f89ba22f1e9f9b57ca5b90832e76c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/archiveOnWeb.html.twig"));

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
        
        $__internal_14414215ac5b03951b1dcd463e4329a10f89ba22f1e9f9b57ca5b90832e76c2e->leave($__internal_14414215ac5b03951b1dcd463e4329a10f89ba22f1e9f9b57ca5b90832e76c2e_prof);

    }

    public function getTemplateName()
    {
        return "default/archiveOnWeb.html.twig";
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
{% endfor %}", "default/archiveOnWeb.html.twig", "/var/www/html/will/app/Resources/views/default/archiveOnWeb.html.twig");
    }
}
