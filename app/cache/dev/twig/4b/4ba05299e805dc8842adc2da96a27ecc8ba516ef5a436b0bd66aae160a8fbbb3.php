<?php

/* :default:jury.html.twig */
class __TwigTemplate_ccc3904646cba50bcb30ef832116a89e9f2ddb403ba77a6750d952071ce0b9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:jury.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0702bf4922b77f02ed8343b4a399bb7fd372f442fca3ee6cabe667531f3c452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0702bf4922b77f02ed8343b4a399bb7fd372f442fca3ee6cabe667531f3c452->enter($__internal_a0702bf4922b77f02ed8343b4a399bb7fd372f442fca3ee6cabe667531f3c452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:jury.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0702bf4922b77f02ed8343b4a399bb7fd372f442fca3ee6cabe667531f3c452->leave($__internal_a0702bf4922b77f02ed8343b4a399bb7fd372f442fca3ee6cabe667531f3c452_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e2d7167e6344fdcace36dd3b2826b2e8dade1a486859c05c84ea2516b8c0918d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d7167e6344fdcace36dd3b2826b2e8dade1a486859c05c84ea2516b8c0918d->enter($__internal_e2d7167e6344fdcace36dd3b2826b2e8dade1a486859c05c84ea2516b8c0918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"jury\">
        <ul>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "                <li>
                    <h2> ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "nom", array()), "html", null, true);
            echo "</h2>
                </li>
                <li>
                    <img src=";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "vignette", array())), "html", null, true);
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "vignette", array()), "html", null, true);
            // line 11
            echo "\" style=\"float: left; padding-right: 5px;\">
                    ";
            // line 12
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "notice", array());
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </div>
";
        
        $__internal_e2d7167e6344fdcace36dd3b2826b2e8dade1a486859c05c84ea2516b8c0918d->leave($__internal_e2d7167e6344fdcace36dd3b2826b2e8dade1a486859c05c84ea2516b8c0918d_prof);

    }

    public function getTemplateName()
    {
        return ":default:jury.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  66 => 12,  63 => 11,  59 => 10,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block content %}
    <div class=\"jury\">
        <ul>
            {% for entity in entities %}
                <li>
                    <h2> {{ entity.prenom }} {{ entity.nom }}</h2>
                </li>
                <li>
                    <img src={{ asset(entity.vignette) }} alt=\"{{ entity
                    .vignette }}\" style=\"float: left; padding-right: 5px;\">
                    {{ entity.notice | raw }}
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}
", ":default:jury.html.twig", "/var/www/html/will/app/Resources/views/default/jury.html.twig");
    }
}
