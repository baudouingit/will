<?php

/* :default:menuPdf.html.twig */
class __TwigTemplate_3f1e854d076736d1bdc2136f5c0623095759ac6ce5683b98f97d7257adf7f7e0 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["fichiers"] ?? null));
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
    }

    public function getTemplateName()
    {
        return ":default:menuPdf.html.twig";
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
        return new Twig_Source("", ":default:menuPdf.html.twig", "/var/www/html/will/app/Resources/views/default/menuPdf.html.twig");
    }
}
