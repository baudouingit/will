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
        $__internal_c7d1c3b5cfa2c2d1fc3e873e8ffa3d36b7d6d91a535ffb9a527a52b8029c68a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d1c3b5cfa2c2d1fc3e873e8ffa3d36b7d6d91a535ffb9a527a52b8029c68a5->enter($__internal_c7d1c3b5cfa2c2d1fc3e873e8ffa3d36b7d6d91a535ffb9a527a52b8029c68a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c7d1c3b5cfa2c2d1fc3e873e8ffa3d36b7d6d91a535ffb9a527a52b8029c68a5->leave($__internal_c7d1c3b5cfa2c2d1fc3e873e8ffa3d36b7d6d91a535ffb9a527a52b8029c68a5_prof);

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
