<?php

/* default/menuPdf.html.twig */
class __TwigTemplate_776bdab6ed10a33526f794a5033c6169ccae388868d8cd71cb7eb75567173fea extends Twig_Template
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
        $__internal_ef0d4d8f66ad2d7e91bd2e000dcada9a3d553a83c032b45369f62a50b1afb76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0d4d8f66ad2d7e91bd2e000dcada9a3d553a83c032b45369f62a50b1afb76c->enter($__internal_ef0d4d8f66ad2d7e91bd2e000dcada9a3d553a83c032b45369f62a50b1afb76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menuPdf.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) || array_key_exists("fichiers", $context) ? $context["fichiers"] : (function () { throw new Twig_Error_Runtime('Variable "fichiers" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 2
            echo "    ";
            // line 3
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_archivepdf", array("fichier" => $context["fichier"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, trim($context["fichier"], ".pdf"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ef0d4d8f66ad2d7e91bd2e000dcada9a3d553a83c032b45369f62a50b1afb76c->leave($__internal_ef0d4d8f66ad2d7e91bd2e000dcada9a3d553a83c032b45369f62a50b1afb76c_prof);

    }

    public function getTemplateName()
    {
        return "default/menuPdf.html.twig";
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
        return new Twig_Source("{% for fichier in fichiers %}
    {#<li><a href=\"{{ asset(fichier) }}\">{{ fichier|trim('.pdf')}}</a></li>#}
    <li><a href=\"{{ path('app_default_archivepdf', {'fichier': fichier}) }}\">{{ fichier|trim('.pdf') }}</a></li>
{% endfor %}
", "default/menuPdf.html.twig", "/var/www/html/will/app/Resources/views/default/menuPdf.html.twig");
    }
}
