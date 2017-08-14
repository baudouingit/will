<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bab92c8304288474573c675e6022f9525ae1f945bc959751768520a6c5e5b98f extends Twig_Template
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
        $__internal_86664da8775f90fbc3e7503dc97615d927cfd80b7554b5c1eb1dae05e237eafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86664da8775f90fbc3e7503dc97615d927cfd80b7554b5c1eb1dae05e237eafe->enter($__internal_86664da8775f90fbc3e7503dc97615d927cfd80b7554b5c1eb1dae05e237eafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_86664da8775f90fbc3e7503dc97615d927cfd80b7554b5c1eb1dae05e237eafe->leave($__internal_86664da8775f90fbc3e7503dc97615d927cfd80b7554b5c1eb1dae05e237eafe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
