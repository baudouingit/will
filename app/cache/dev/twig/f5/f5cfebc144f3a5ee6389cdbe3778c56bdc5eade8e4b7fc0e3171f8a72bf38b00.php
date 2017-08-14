<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c6c4f0e5054e6169d7d995108f2b02ce7db46216c2225e360960f78550040c24 extends Twig_Template
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
        $__internal_55b62a3606eb2bd31d7460adba8d7e81bc0d5bcf4418581891354c6876fc907f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b62a3606eb2bd31d7460adba8d7e81bc0d5bcf4418581891354c6876fc907f->enter($__internal_55b62a3606eb2bd31d7460adba8d7e81bc0d5bcf4418581891354c6876fc907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_55b62a3606eb2bd31d7460adba8d7e81bc0d5bcf4418581891354c6876fc907f->leave($__internal_55b62a3606eb2bd31d7460adba8d7e81bc0d5bcf4418581891354c6876fc907f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
