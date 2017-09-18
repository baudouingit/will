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
        $__internal_d59d8fc7a28de35772f134641f68ac377fe76ce2353b7194959e59541cbf75bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59d8fc7a28de35772f134641f68ac377fe76ce2353b7194959e59541cbf75bb->enter($__internal_d59d8fc7a28de35772f134641f68ac377fe76ce2353b7194959e59541cbf75bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d59d8fc7a28de35772f134641f68ac377fe76ce2353b7194959e59541cbf75bb->leave($__internal_d59d8fc7a28de35772f134641f68ac377fe76ce2353b7194959e59541cbf75bb_prof);

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
