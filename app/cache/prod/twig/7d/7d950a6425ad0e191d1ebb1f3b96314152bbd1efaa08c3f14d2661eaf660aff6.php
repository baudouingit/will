<?php

/* :default:archive.html.twig */
class __TwigTemplate_41096d4baeb609741dc566065a686f11c7460acfe792fdc3c1c22f66f16e1061 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["archive"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "annee", array()) != ($context["annee"] ?? null))) {
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "domaine", array()) != ($context["domaine"] ?? null))) {
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
                echo twig_escape_filter($this->env, ($context["elu"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["elu"] ?? null), "html", null, true);
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
        return array (  137 => 35,  131 => 34,  120 => 31,  116 => 30,  111 => 29,  99 => 26,  94 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  79 => 20,  77 => 19,  73 => 17,  70 => 16,  68 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  40 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:archive.html.twig", "/var/www/html/will/app/Resources/views/default/archive.html.twig");
    }
}
