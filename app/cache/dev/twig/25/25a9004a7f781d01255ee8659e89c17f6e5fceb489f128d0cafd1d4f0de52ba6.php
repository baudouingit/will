<?php

/* :default:menuGalleries.html.twig */
class __TwigTemplate_a442c6d57d6b97c262d77095b41c70c71aedc26f168ff083553b059231e3cad7 extends Twig_Template
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
        $__internal_5ba981da14718b59dfde1cea1635326590aa0425aa4096ed8be867e9ad1445cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba981da14718b59dfde1cea1635326590aa0425aa4096ed8be867e9ad1445cf->enter($__internal_5ba981da14718b59dfde1cea1635326590aa0425aa4096ed8be867e9ad1445cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:menuGalleries.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new Twig_Error_Runtime('Variable "galleries" does not exist.', 1, $this->getSourceContext()); })()));
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
        
        $__internal_5ba981da14718b59dfde1cea1635326590aa0425aa4096ed8be867e9ad1445cf->leave($__internal_5ba981da14718b59dfde1cea1635326590aa0425aa4096ed8be867e9ad1445cf_prof);

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
        return array (  28 => 3,  26 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for gallery in galleries %}
    {#<li><a href=\"{{ asset(photos) }}\">{{ fichier|trim('.pdf')}}</a></li>#}
    <li><a href=\"{{ path('app_default_galerie', {'galleries': gallery, 'index': \"2\"})}}\">{{ gallery }}</a></li>
{% endfor %}
", ":default:menuGalleries.html.twig", "/var/www/html/will/app/Resources/views/default/menuGalleries.html.twig");
    }
}
