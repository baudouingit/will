<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_87dc9be238333b585ff1ad593cffc82e855405c238cafc28e1186e77e06ca244 extends Twig_Template
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
        $__internal_df7b1a1b8e7fefb17a9a10bb725618aa2b7d08e96b7789c38983ac6d8e67e273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7b1a1b8e7fefb17a9a10bb725618aa2b7d08e96b7789c38983ac6d8e67e273->enter($__internal_df7b1a1b8e7fefb17a9a10bb725618aa2b7d08e96b7789c38983ac6d8e67e273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_df7b1a1b8e7fefb17a9a10bb725618aa2b7d08e96b7789c38983ac6d8e67e273->leave($__internal_df7b1a1b8e7fefb17a9a10bb725618aa2b7d08e96b7789c38983ac6d8e67e273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
