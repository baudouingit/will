<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c24e47e2ebb1ef1168658e5e23e1aad0ebc26560ef58f42cb103956c0b73ed76 extends Twig_Template
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
        $__internal_66a510520bd647da72ccaee5c0f64780f8cb650e0c230e22bca0ed804cc18896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a510520bd647da72ccaee5c0f64780f8cb650e0c230e22bca0ed804cc18896->enter($__internal_66a510520bd647da72ccaee5c0f64780f8cb650e0c230e22bca0ed804cc18896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_66a510520bd647da72ccaee5c0f64780f8cb650e0c230e22bca0ed804cc18896->leave($__internal_66a510520bd647da72ccaee5c0f64780f8cb650e0c230e22bca0ed804cc18896_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
