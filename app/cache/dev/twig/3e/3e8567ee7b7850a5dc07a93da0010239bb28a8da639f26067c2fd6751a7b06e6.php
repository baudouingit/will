<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a4d2f2ef63f4c0c4ed9d1650d7d22d08b4bde334a93b465f03294368bc5dd7ab extends Twig_Template
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
        $__internal_3ad0fbb34c33fa31eabc23ae3b26da580c332577a1c1f3f585ca2db8df9f8aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad0fbb34c33fa31eabc23ae3b26da580c332577a1c1f3f585ca2db8df9f8aaf->enter($__internal_3ad0fbb34c33fa31eabc23ae3b26da580c332577a1c1f3f585ca2db8df9f8aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3ad0fbb34c33fa31eabc23ae3b26da580c332577a1c1f3f585ca2db8df9f8aaf->leave($__internal_3ad0fbb34c33fa31eabc23ae3b26da580c332577a1c1f3f585ca2db8df9f8aaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
