<?php

/* default/menuGalleries.html.twig */
class __TwigTemplate_dc48bb857d4e7b90e5c9be574ec581a865e55ed8b93a2c51c82269b85f7fdc80 extends Twig_Template
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
        $__internal_8cbcc6d17e1cdbe145948a4be19edaace6af6ff45267420ae6ee14bcb832c475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbcc6d17e1cdbe145948a4be19edaace6af6ff45267420ae6ee14bcb832c475->enter($__internal_8cbcc6d17e1cdbe145948a4be19edaace6af6ff45267420ae6ee14bcb832c475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menuGalleries.html.twig"));

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
        
        $__internal_8cbcc6d17e1cdbe145948a4be19edaace6af6ff45267420ae6ee14bcb832c475->leave($__internal_8cbcc6d17e1cdbe145948a4be19edaace6af6ff45267420ae6ee14bcb832c475_prof);

    }

    public function getTemplateName()
    {
        return "default/menuGalleries.html.twig";
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
", "default/menuGalleries.html.twig", "/var/www/html/will/app/Resources/views/default/menuGalleries.html.twig");
    }
}
