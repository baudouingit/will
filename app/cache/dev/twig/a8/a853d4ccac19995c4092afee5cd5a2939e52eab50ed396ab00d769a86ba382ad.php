<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_efcf7cfc8763a8c42c05c404350fef78a075bd0cbad662cb5091ce03bf6a1df1 extends Twig_Template
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
        $__internal_7f26e5313f4a9ab352be89f8ef17dad40062512f0343fb1cca3d098da3be4bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f26e5313f4a9ab352be89f8ef17dad40062512f0343fb1cca3d098da3be4bad->enter($__internal_7f26e5313f4a9ab352be89f8ef17dad40062512f0343fb1cca3d098da3be4bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7f26e5313f4a9ab352be89f8ef17dad40062512f0343fb1cca3d098da3be4bad->leave($__internal_7f26e5313f4a9ab352be89f8ef17dad40062512f0343fb1cca3d098da3be4bad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
