<?php

/* :default:archive.html.twig */
class __TwigTemplate_1017799d6cbda8aca8d8bc032fc32de1c75ea5491971b111d282b8ce700b293d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:archive.html.twig", 1);
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
        $__internal_72870247e32b396fa1067582c3f4d0c8fd9c7808501d2a41e5967da9755b08d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72870247e32b396fa1067582c3f4d0c8fd9c7808501d2a41e5967da9755b08d5->enter($__internal_72870247e32b396fa1067582c3f4d0c8fd9c7808501d2a41e5967da9755b08d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:archive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72870247e32b396fa1067582c3f4d0c8fd9c7808501d2a41e5967da9755b08d5->leave($__internal_72870247e32b396fa1067582c3f4d0c8fd9c7808501d2a41e5967da9755b08d5_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbf6ab4d90f5fd4c7e1cb675136eedb322f996b99323686b8f52bd19f3064dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf6ab4d90f5fd4c7e1cb675136eedb322f996b99323686b8f52bd19f3064dbe->enter($__internal_fbf6ab4d90f5fd4c7e1cb675136eedb322f996b99323686b8f52bd19f3064dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 5
        $context["annee"] = "";
        // line 6
        echo "                ";
        $context["domaine"] = "";
        // line 7
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archive"]) || array_key_exists("archive", $context) ? $context["archive"] : (function () { throw new Twig_Error_Runtime('Variable "archive" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "elu", array())) {
                // line 9
                echo "                        ";
                $context["elu"] = "elu";
                // line 10
                echo "                    ";
            } else {
                // line 11
                echo "                        ";
                $context["elu"] = "";
                // line 12
                echo "                    ";
            }
            // line 13
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "annee", array()) != (isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new Twig_Error_Runtime('Variable "annee" does not exist.', 13, $this->getSourceContext()); })()))) {
                // line 14
                echo "                        <h1 style=\"margin: 0 0 0 15px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "annee", array()), "html", null, true);
                echo "</h1>
                        ";
                // line 15
                $context["annee"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "annee", array());
                // line 16
                echo "                    ";
            }
            // line 17
            echo "
                    <div>
                        ";
            // line 19
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "domaine", array()) != (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new Twig_Error_Runtime('Variable "domaine" does not exist.', 19, $this->getSourceContext()); })()))) {
                // line 20
                echo "                            <h2 class=\" \" style=\"margin: 0 0 0 15px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "domaine", array()), "html", null, true);
                echo "</h2>
                            ";
                // line 21
                $context["domaine"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "domaine", array());
                // line 22
                echo "                        ";
            }
            // line 23
            echo "                    </div>
                    ";
            // line 24
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "annee", array()) < 2008)) {
                // line 25
                echo "                        <p class=\"";
                echo twig_escape_filter($this->env, (isset($context["elu"]) || array_key_exists("elu", $context) ? $context["elu"] : (function () { throw new Twig_Error_Runtime('Variable "elu" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
                echo "  col-md-12 \">
                            ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine1", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine2", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine3", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "commentaire", array()), "html", null, true);
                echo "
                        </p>
                    ";
            } else {
                // line 29
                echo "                        <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["elu"]) || array_key_exists("elu", $context) ? $context["elu"] : (function () { throw new Twig_Error_Runtime('Variable "elu" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
                echo " inline col-md-12 \"
                           href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_default_nomines", array("domaine" => twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "domaine", array()), "annee" => twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "annee", array()))), "html", null, true);
                echo "\">
                            ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine1", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine2", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine3", array()), "html", null, true);
                echo " ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "commentaire", array());
                echo "
                        </a>
                    ";
            }
            // line 34
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </div>
    ";
        
        $__internal_fbf6ab4d90f5fd4c7e1cb675136eedb322f996b99323686b8f52bd19f3064dbe->leave($__internal_fbf6ab4d90f5fd4c7e1cb675136eedb322f996b99323686b8f52bd19f3064dbe_prof);

    }

    public function getTemplateName()
    {
        return ":default:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  140 => 34,  129 => 31,  125 => 30,  120 => 29,  108 => 26,  103 => 25,  101 => 24,  98 => 23,  95 => 22,  93 => 21,  88 => 20,  86 => 19,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  49 => 7,  46 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
    {% block content %}
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% set annee = '' %}
                {% set domaine = '' %}
                {% for item in archive %}
                    {% if item.elu %}
                        {% set elu = \"elu\" %}
                    {% else %}
                        {% set elu = \"\" %}
                    {% endif %}
                    {% if item.annee != annee %}
                        <h1 style=\"margin: 0 0 0 15px;\">{{ item.annee }}</h1>
                        {% set annee = item.annee %}
                    {% endif %}

                    <div>
                        {% if item.domaine != domaine %}
                            <h2 class=\" \" style=\"margin: 0 0 0 15px;\">{{ item.domaine }}</h2>
                            {% set domaine = item.domaine %}
                        {% endif %}
                    </div>
                    {% if item.annee < 2008 %}
                        <p class=\"{{ elu }}  col-md-12 \">
                            {{ item.nomine1 }} {{ item.nomine2 }} {{ item.nomine3 }} {{ item.commentaire }}
                        </p>
                    {% else %}
                        <a class=\"{{ elu }} inline col-md-12 \"
                           href=\"{{ path('app_default_nomines', {'domaine': item.domaine, 'annee': item.annee}) }}\">
                            {{ item.nomine1 }} {{ item.nomine2 }}{{ item.nomine3 }} {{ item.commentaire | raw }}
                        </a>
                    {% endif %}
                {% endfor %}
            </div>
        </div>
    {% endblock %}

", ":default:archive.html.twig", "/var/www/html/will/app/Resources/views/default/archive.html.twig");
    }
}
