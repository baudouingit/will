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
        $__internal_323f7a57b1c6cbf92f359b72bd770f898ade5565931dad9f25b55d72ab1aa896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f7a57b1c6cbf92f359b72bd770f898ade5565931dad9f25b55d72ab1aa896->enter($__internal_323f7a57b1c6cbf92f359b72bd770f898ade5565931dad9f25b55d72ab1aa896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_323f7a57b1c6cbf92f359b72bd770f898ade5565931dad9f25b55d72ab1aa896->leave($__internal_323f7a57b1c6cbf92f359b72bd770f898ade5565931dad9f25b55d72ab1aa896_prof);

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
