<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f97f53bdeb440dce4aa51a6afb03b0dc51f12f2ac76a71c2df2e17b48c4df2c6 extends Twig_Template
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
        $__internal_fb32ca3ef96f2fbe06b3f9210e6d7ca0b59c3711a713b3099c44a7af9eb845dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb32ca3ef96f2fbe06b3f9210e6d7ca0b59c3711a713b3099c44a7af9eb845dc->enter($__internal_fb32ca3ef96f2fbe06b3f9210e6d7ca0b59c3711a713b3099c44a7af9eb845dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fb32ca3ef96f2fbe06b3f9210e6d7ca0b59c3711a713b3099c44a7af9eb845dc->leave($__internal_fb32ca3ef96f2fbe06b3f9210e6d7ca0b59c3711a713b3099c44a7af9eb845dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
