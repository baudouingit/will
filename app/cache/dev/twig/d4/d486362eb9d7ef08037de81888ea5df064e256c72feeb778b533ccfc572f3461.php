<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_04042967fc88b8b88f25bc8c38f4e687fef8949c54a5db1162a5a8209f21b92e extends Twig_Template
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
        $__internal_a46b52a0dc7bcc212e59cb62f5a8fdd920524c822483b130c9345808a2d7c170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46b52a0dc7bcc212e59cb62f5a8fdd920524c822483b130c9345808a2d7c170->enter($__internal_a46b52a0dc7bcc212e59cb62f5a8fdd920524c822483b130c9345808a2d7c170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a46b52a0dc7bcc212e59cb62f5a8fdd920524c822483b130c9345808a2d7c170->leave($__internal_a46b52a0dc7bcc212e59cb62f5a8fdd920524c822483b130c9345808a2d7c170_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
