<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_71a48e06c9462728a8c0f284fff9bd52d689b664df4c18978b95eb8a08bd6a04 extends Twig_Template
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
        $__internal_e35867872e3391e40cc9e58cbbb6173ee4ae6c06a77526946f1ec8c48bbb6ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35867872e3391e40cc9e58cbbb6173ee4ae6c06a77526946f1ec8c48bbb6ed3->enter($__internal_e35867872e3391e40cc9e58cbbb6173ee4ae6c06a77526946f1ec8c48bbb6ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e35867872e3391e40cc9e58cbbb6173ee4ae6c06a77526946f1ec8c48bbb6ed3->leave($__internal_e35867872e3391e40cc9e58cbbb6173ee4ae6c06a77526946f1ec8c48bbb6ed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
