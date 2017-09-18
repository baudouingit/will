<?php

/* :default:archivePdf.html.twig */
class __TwigTemplate_5cf785907565ab03ab039892acc4760b07809b4ae55bcc94317f0c18edd30704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", ":default:archivePdf.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        // line 16
        echo "
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"content pdf-height\">
                ";
        // line 25
        echo "                ";
        // line 26
        echo "
                ";
        // line 28
        echo "
                ";
        // line 30
        echo "                    ";
        // line 31
        echo "                ";
        // line 32
        echo "            </div>
        </div>
    </div>
";
    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            \$(\"#href\").trigger('click');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return ":default:archivePdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  85 => 39,  78 => 37,  75 => 36,  68 => 32,  66 => 31,  64 => 30,  61 => 28,  58 => 26,  56 => 25,  47 => 19,  44 => 18,  39 => 16,  34 => 3,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:archivePdf.html.twig", "/var/www/html/will/app/Resources/views/default/archivePdf.html.twig");
    }
}
