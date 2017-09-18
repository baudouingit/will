<?php

/* :default:index1.html.twig */
class __TwigTemplate_43a5de36d225187ab0852da5a520adbb5714b55174f1be6f3c65f6f3216097fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <div class=\"navbar-header\">








                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                            data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Historique</a></li>
                        <li><a href=\"#\">Jury</a></li>
                        <li><a href=\"#\">Liens</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



";
    }

    public function getTemplateName()
    {
        return ":default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index1.html.twig", "/var/www/html/will/app/Resources/views/default/index1.html.twig");
    }
}
