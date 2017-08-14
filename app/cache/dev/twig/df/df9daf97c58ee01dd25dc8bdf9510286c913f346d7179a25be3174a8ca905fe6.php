<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c7955c5bbab4f0492e207b04930c48e3b3057a986d6b0ee356e776c8a214bb9 extends Twig_Template
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
        $__internal_6f1ef89d160ffd96c73bb8e0de8a61dd1dd34a50a5f671979accc385273bd767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1ef89d160ffd96c73bb8e0de8a61dd1dd34a50a5f671979accc385273bd767->enter($__internal_6f1ef89d160ffd96c73bb8e0de8a61dd1dd34a50a5f671979accc385273bd767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6f1ef89d160ffd96c73bb8e0de8a61dd1dd34a50a5f671979accc385273bd767->leave($__internal_6f1ef89d160ffd96c73bb8e0de8a61dd1dd34a50a5f671979accc385273bd767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
