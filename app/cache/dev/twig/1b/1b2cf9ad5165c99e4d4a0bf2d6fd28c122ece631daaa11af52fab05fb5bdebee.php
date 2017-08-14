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
        $__internal_27a1e755632f4edf4fb867d5346ae5949e487868e259bb0c897636d26d911827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a1e755632f4edf4fb867d5346ae5949e487868e259bb0c897636d26d911827->enter($__internal_27a1e755632f4edf4fb867d5346ae5949e487868e259bb0c897636d26d911827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_27a1e755632f4edf4fb867d5346ae5949e487868e259bb0c897636d26d911827->leave($__internal_27a1e755632f4edf4fb867d5346ae5949e487868e259bb0c897636d26d911827_prof);

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
