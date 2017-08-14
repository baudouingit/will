<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b28eeeae7eaff042c1498e18c5a61eb0c47b7db03d5da89175814d91004179d2 extends Twig_Template
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
        $__internal_e6a139a3020df9d7776214d22708bed8316d967f7c51f439be07a4b741e1a397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a139a3020df9d7776214d22708bed8316d967f7c51f439be07a4b741e1a397->enter($__internal_e6a139a3020df9d7776214d22708bed8316d967f7c51f439be07a4b741e1a397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e6a139a3020df9d7776214d22708bed8316d967f7c51f439be07a4b741e1a397->leave($__internal_e6a139a3020df9d7776214d22708bed8316d967f7c51f439be07a4b741e1a397_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
