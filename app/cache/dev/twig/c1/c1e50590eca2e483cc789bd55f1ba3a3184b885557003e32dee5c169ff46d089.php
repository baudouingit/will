<?php

/* :default:menu.html.twig */
class __TwigTemplate_a77b0fabca2eb401ef48ed9a69ab954825e28c2caf7265959eac8267fabedf92 extends Twig_Template
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
        $__internal_a2cd9f2cb3033a78a7342a85cd67619bda9b70beec51563f1a7e9c77ea278b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cd9f2cb3033a78a7342a85cd67619bda9b70beec51563f1a7e9c77ea278b3e->enter($__internal_a2cd9f2cb3033a78a7342a85cd67619bda9b70beec51563f1a7e9c77ea278b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domaines"]) || array_key_exists("domaines", $context) ? $context["domaines"] : (function () { throw new Twig_Error_Runtime('Variable "domaines" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => twig_get_attribute($this->env, $this->getSourceContext(), $context["domaine"], "domaine", array()), "annee" => (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new Twig_Error_Runtime('Variable "annee" does not exist.', 2, $this->getSourceContext()); })()))), "html", null, true);
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
        
        $__internal_a2cd9f2cb3033a78a7342a85cd67619bda9b70beec51563f1a7e9c77ea278b3e->leave($__internal_a2cd9f2cb3033a78a7342a85cd67619bda9b70beec51563f1a7e9c77ea278b3e_prof);

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
        return array (  37 => 4,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for domaine in domaines %}
    <li><a href=\"{{ path('app_default_nomines', {'domaine': domaine.domaine, 'annee': annee})}}\">{{ domaine.domaine}}</a></li>
{% endfor %}

", ":default:menu.html.twig", "/var/www/html/will/app/Resources/views/default/menu.html.twig");
    }
}
