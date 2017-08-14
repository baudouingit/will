<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1070cff9b7431821e7e577be4c31a047e2c8e759ec47d196d74fce04e822121f extends Twig_Template
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
        $__internal_fac29230b3ed6f314e4029e8b4af7a7efee69ed99ffc2f361f8fb528cd7e2833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac29230b3ed6f314e4029e8b4af7a7efee69ed99ffc2f361f8fb528cd7e2833->enter($__internal_fac29230b3ed6f314e4029e8b4af7a7efee69ed99ffc2f361f8fb528cd7e2833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fac29230b3ed6f314e4029e8b4af7a7efee69ed99ffc2f361f8fb528cd7e2833->leave($__internal_fac29230b3ed6f314e4029e8b4af7a7efee69ed99ffc2f361f8fb528cd7e2833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
