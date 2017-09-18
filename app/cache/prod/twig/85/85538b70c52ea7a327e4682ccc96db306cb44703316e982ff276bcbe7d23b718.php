<?php

/* :default:jury.html.twig */
class __TwigTemplate_e7159cabf700b0930a22ca82d09699aaa1057e27f676668394f444874cff1249 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"jury\">
        <ul>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
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
        return array (  66 => 15,  57 => 12,  54 => 11,  50 => 10,  42 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:jury.html.twig", "/var/www/html/will/app/Resources/views/default/jury.html.twig");
    }
}
