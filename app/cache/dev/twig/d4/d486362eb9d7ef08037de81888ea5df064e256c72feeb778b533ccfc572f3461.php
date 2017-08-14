<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_04042967fc88b8b88f25bc8c38f4e687fef8949c54a5db1162a5a8209f21b92e extends Twig_Template
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
        $__internal_c0c6d812f21f6286cb2262cf364b9c55e3f8e4eb6a31f7fe3af1ec49cda55e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c6d812f21f6286cb2262cf364b9c55e3f8e4eb6a31f7fe3af1ec49cda55e1f->enter($__internal_c0c6d812f21f6286cb2262cf364b9c55e3f8e4eb6a31f7fe3af1ec49cda55e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c0c6d812f21f6286cb2262cf364b9c55e3f8e4eb6a31f7fe3af1ec49cda55e1f->leave($__internal_c0c6d812f21f6286cb2262cf364b9c55e3f8e4eb6a31f7fe3af1ec49cda55e1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
