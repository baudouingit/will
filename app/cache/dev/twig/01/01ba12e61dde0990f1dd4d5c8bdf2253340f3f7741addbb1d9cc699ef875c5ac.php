<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_654e4c1d75e0feab9ff39cb826d724d2a6ff18cedf0cabfd14670bcadf1d6612 extends Twig_Template
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
        $__internal_915ad877dfc6b08d2e5f9b09f142330b62bb8e7a275d1dcdeec06dd9130182e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915ad877dfc6b08d2e5f9b09f142330b62bb8e7a275d1dcdeec06dd9130182e6->enter($__internal_915ad877dfc6b08d2e5f9b09f142330b62bb8e7a275d1dcdeec06dd9130182e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_915ad877dfc6b08d2e5f9b09f142330b62bb8e7a275d1dcdeec06dd9130182e6->leave($__internal_915ad877dfc6b08d2e5f9b09f142330b62bb8e7a275d1dcdeec06dd9130182e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
