<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_236aefbe52006d5ba215b930612bc6ec473a13807872ed77a116ae9f1a78ee6d extends Twig_Template
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
        $__internal_e7b39fa25417295cc33a73013db964b249d98f26b5822ff2a14e97ac310b79bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b39fa25417295cc33a73013db964b249d98f26b5822ff2a14e97ac310b79bb->enter($__internal_e7b39fa25417295cc33a73013db964b249d98f26b5822ff2a14e97ac310b79bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e7b39fa25417295cc33a73013db964b249d98f26b5822ff2a14e97ac310b79bb->leave($__internal_e7b39fa25417295cc33a73013db964b249d98f26b5822ff2a14e97ac310b79bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
