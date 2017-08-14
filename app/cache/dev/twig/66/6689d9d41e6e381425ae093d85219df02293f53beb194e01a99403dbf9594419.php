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
        $__internal_eb182fa9208e4f07076e750758f4cf6ef8a0ac739c8d90c25563996b22c7752c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb182fa9208e4f07076e750758f4cf6ef8a0ac739c8d90c25563996b22c7752c->enter($__internal_eb182fa9208e4f07076e750758f4cf6ef8a0ac739c8d90c25563996b22c7752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eb182fa9208e4f07076e750758f4cf6ef8a0ac739c8d90c25563996b22c7752c->leave($__internal_eb182fa9208e4f07076e750758f4cf6ef8a0ac739c8d90c25563996b22c7752c_prof);

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
