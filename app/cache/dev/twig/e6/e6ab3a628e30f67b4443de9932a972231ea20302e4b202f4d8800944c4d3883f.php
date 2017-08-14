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
        $__internal_eecb2939fa75efcfd537f967ffb265c120a1100d237df43b20a39dda0943c5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecb2939fa75efcfd537f967ffb265c120a1100d237df43b20a39dda0943c5a4->enter($__internal_eecb2939fa75efcfd537f967ffb265c120a1100d237df43b20a39dda0943c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_eecb2939fa75efcfd537f967ffb265c120a1100d237df43b20a39dda0943c5a4->leave($__internal_eecb2939fa75efcfd537f967ffb265c120a1100d237df43b20a39dda0943c5a4_prof);

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
