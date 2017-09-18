<?php

/* :default:nomines.html.twig */
class __TwigTemplate_d48a06d5cac18b78465a4194bf105c99079de90d53caa1e62d0adfb4c681fbaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:nomines.html.twig", 1);
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
        $__internal_a6ae8c332318dda0ca9939447c16da0cc8e7c8e133b84c1b08c01712076031ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ae8c332318dda0ca9939447c16da0cc8e7c8e133b84c1b08c01712076031ee->enter($__internal_a6ae8c332318dda0ca9939447c16da0cc8e7c8e133b84c1b08c01712076031ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:nomines.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ae8c332318dda0ca9939447c16da0cc8e7c8e133b84c1b08c01712076031ee->leave($__internal_a6ae8c332318dda0ca9939447c16da0cc8e7c8e133b84c1b08c01712076031ee_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2c6c257b312db6e155ae70da0c81e7b8efb76510a84213ace8aa749c7262263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c6c257b312db6e155ae70da0c81e7b8efb76510a84213ace8aa749c7262263->enter($__internal_a2c6c257b312db6e155ae70da0c81e7b8efb76510a84213ace8aa749c7262263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nomines"]) || array_key_exists("nomines", $context) ? $context["nomines"] : (function () { throw new Twig_Error_Runtime('Variable "nomines" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "elu", array()) == true)) {
                // line 7
                echo "                ";
                $context["elu"] = "elu";
                // line 8
                echo "            ";
            } else {
                // line 9
                echo "                ";
                $context["elu"] = "";
                // line 10
                echo "            ";
            }
            // line 11
            echo "            ";
            if (trim(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine2", array()))) {
                // line 12
                echo "                ";
                $context["separator1"] = "-";
                // line 13
                echo "            ";
            } else {
                // line 14
                echo "                ";
                $context["separator1"] = "";
                // line 15
                echo "            ";
            }
            // line 16
            echo "            ";
            if (trim(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine3", array()))) {
                // line 17
                echo "                ";
                $context["separator2"] = "-";
                // line 18
                echo "            ";
            } else {
                // line 19
                echo "                ";
                $context["separator2"] = "";
                // line 20
                echo "            ";
            }
            // line 21
            echo "            <div>
                <h2 class=\" col-md-12 ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["elu"]) || array_key_exists("elu", $context) ? $context["elu"] : (function () { throw new Twig_Error_Runtime('Variable "elu" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo " \" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine1", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["separator1"]) || array_key_exists("separator1", $context) ? $context["separator1"] : (function () { throw new Twig_Error_Runtime('Variable "separator1" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine2", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env,             // line 23
(isset($context["separator2"]) || array_key_exists("separator2", $context) ? $context["separator2"] : (function () { throw new Twig_Error_Runtime('Variable "separator2" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine3", array()), "html", null, true);
            echo "</h2>
                <div class=\"col-md-12 ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["elu"]) || array_key_exists("elu", $context) ? $context["elu"] : (function () { throw new Twig_Error_Runtime('Variable "elu" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
            echo " \"><img  style=\"float: left; padding-right: 1em;\" src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "photo", array())), "html", null, true);
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "photo", array())), "html", null, true);
            echo "\"/>";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "longcomm", array());
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
</div>
";
        
        $__internal_a2c6c257b312db6e155ae70da0c81e7b8efb76510a84213ace8aa749c7262263->leave($__internal_a2c6c257b312db6e155ae70da0c81e7b8efb76510a84213ace8aa749c7262263_prof);

    }

    public function getTemplateName()
    {
        return ":default:nomines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  111 => 24,  105 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block content %}
<div class=\"row\">
    <div class=\"col-md-12\">
        {% for item in nomines %}
            {% if item.elu == true %}
                {% set elu = 'elu' %}
            {% else %}
                {% set elu = '' %}
            {% endif %}
            {% if item.nomine2|trim %}
                {% set separator1 = '-' %}
            {% else %}
                {% set separator1 = '' %}
            {% endif %}
            {% if item.nomine3|trim %}
                {% set separator2 = '-' %}
            {% else %}
                {% set separator2 = '' %}
            {% endif %}
            <div>
                <h2 class=\" col-md-12 {{ elu }} \" > {{ item.nomine1 }} {{ separator1 }} {{ item.nomine2 }} {{
                    separator2 }} {{ item.nomine3 }}</h2>
                <div class=\"col-md-12 {{ elu }} \"><img  style=\"float: left; padding-right: 1em;\" src={{ asset(item.photo) }} alt=\"{{ asset(item.photo) }}\"/>{{ item.longcomm | raw }}</div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", ":default:nomines.html.twig", "/var/www/html/will/app/Resources/views/default/nomines.html.twig");
    }
}
