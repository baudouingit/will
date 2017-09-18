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
        $__internal_77b819047492a4547ef4f76221a6d00786721fb0f5a415c4c085da91e629f18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b819047492a4547ef4f76221a6d00786721fb0f5a415c4c085da91e629f18e->enter($__internal_77b819047492a4547ef4f76221a6d00786721fb0f5a415c4c085da91e629f18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_77b819047492a4547ef4f76221a6d00786721fb0f5a415c4c085da91e629f18e->leave($__internal_77b819047492a4547ef4f76221a6d00786721fb0f5a415c4c085da91e629f18e_prof);

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
