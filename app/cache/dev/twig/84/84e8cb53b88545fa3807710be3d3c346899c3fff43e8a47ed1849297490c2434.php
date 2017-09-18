<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_46026d735aab7c374f3abef3796f7551964937a467e1bdf54280bded45918ec2 extends Twig_Template
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
        $__internal_9d948ed75a2c9a924f2bc6f4d8b88a1d44a47de6858c3baf22463e2e770dc42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d948ed75a2c9a924f2bc6f4d8b88a1d44a47de6858c3baf22463e2e770dc42c->enter($__internal_9d948ed75a2c9a924f2bc6f4d8b88a1d44a47de6858c3baf22463e2e770dc42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9d948ed75a2c9a924f2bc6f4d8b88a1d44a47de6858c3baf22463e2e770dc42c->leave($__internal_9d948ed75a2c9a924f2bc6f4d8b88a1d44a47de6858c3baf22463e2e770dc42c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
