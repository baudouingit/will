<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6a8ff86c76e7d8f65361a1d26968f1a333b07b38c8f8d8ad59a8adf87159b4e6 extends Twig_Template
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
        $__internal_9df1026c5cc7b9b1a08725a25b50b828f7aef5403102c95d08bf122819b630ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df1026c5cc7b9b1a08725a25b50b828f7aef5403102c95d08bf122819b630ad->enter($__internal_9df1026c5cc7b9b1a08725a25b50b828f7aef5403102c95d08bf122819b630ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9df1026c5cc7b9b1a08725a25b50b828f7aef5403102c95d08bf122819b630ad->leave($__internal_9df1026c5cc7b9b1a08725a25b50b828f7aef5403102c95d08bf122819b630ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
