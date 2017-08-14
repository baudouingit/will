<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a2543a510ec9c856e30a80f74d9d9e2e726adda9c49b8de73c01dcf255b861c6 extends Twig_Template
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
        $__internal_fc7e8f8e16632a7ada4586e100614d284280b7ff112ae913fa7a4b4a103761b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7e8f8e16632a7ada4586e100614d284280b7ff112ae913fa7a4b4a103761b9->enter($__internal_fc7e8f8e16632a7ada4586e100614d284280b7ff112ae913fa7a4b4a103761b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fc7e8f8e16632a7ada4586e100614d284280b7ff112ae913fa7a4b4a103761b9->leave($__internal_fc7e8f8e16632a7ada4586e100614d284280b7ff112ae913fa7a4b4a103761b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
