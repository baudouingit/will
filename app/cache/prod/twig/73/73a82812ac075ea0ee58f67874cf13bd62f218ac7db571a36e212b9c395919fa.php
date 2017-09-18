<?php

/* :default:nomines.html.twig */
class __TwigTemplate_bddec8037f5380a047be00a501a0f2d1fb4e25f8d379584d8010f195a51695a7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nomines"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["elu"] ?? null), "html", null, true);
            echo " \" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine1", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["separator1"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine2", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env,             // line 23
($context["separator2"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "nomine3", array()), "html", null, true);
            echo "</h2>
                <div class=\"col-md-12 ";
            // line 24
            echo twig_escape_filter($this->env, ($context["elu"] ?? null), "html", null, true);
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
        return array (  117 => 27,  102 => 24,  96 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:nomines.html.twig", "/var/www/html/will/app/Resources/views/default/nomines.html.twig");
    }
}
