<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d84bf68c9aed6234dd776488eb98fc72db6ff26402825f50c168b01b13c2b012 extends Twig_Template
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
        $__internal_73d8a5b80043581f11fbc419b05f205cc7aa0c6fae0f76296b74910968a6cef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d8a5b80043581f11fbc419b05f205cc7aa0c6fae0f76296b74910968a6cef4->enter($__internal_73d8a5b80043581f11fbc419b05f205cc7aa0c6fae0f76296b74910968a6cef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_73d8a5b80043581f11fbc419b05f205cc7aa0c6fae0f76296b74910968a6cef4->leave($__internal_73d8a5b80043581f11fbc419b05f205cc7aa0c6fae0f76296b74910968a6cef4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
