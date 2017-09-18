<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6b467ff520385a73ccb98d1aa0a8636b89461171ce5c01e68840974dfccb3300 extends Twig_Template
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
        $__internal_e18c00b8f0974e802fcd5a9197132c55189c3d7a18847e3e26bc5cb69ab230ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18c00b8f0974e802fcd5a9197132c55189c3d7a18847e3e26bc5cb69ab230ae->enter($__internal_e18c00b8f0974e802fcd5a9197132c55189c3d7a18847e3e26bc5cb69ab230ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e18c00b8f0974e802fcd5a9197132c55189c3d7a18847e3e26bc5cb69ab230ae->leave($__internal_e18c00b8f0974e802fcd5a9197132c55189c3d7a18847e3e26bc5cb69ab230ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
