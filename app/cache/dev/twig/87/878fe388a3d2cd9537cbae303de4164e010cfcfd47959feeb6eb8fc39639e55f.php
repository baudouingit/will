<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c74df6a8f74c50666cc3a67c41c3c7e4c7c0b9fe89f39fe2b6b431eabfdb880e extends Twig_Template
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
        $__internal_9f6b1e7fcfdc4234cfe874d87f0c60a7dac24a3d1b1e0dd96e235a85b7831337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b1e7fcfdc4234cfe874d87f0c60a7dac24a3d1b1e0dd96e235a85b7831337->enter($__internal_9f6b1e7fcfdc4234cfe874d87f0c60a7dac24a3d1b1e0dd96e235a85b7831337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9f6b1e7fcfdc4234cfe874d87f0c60a7dac24a3d1b1e0dd96e235a85b7831337->leave($__internal_9f6b1e7fcfdc4234cfe874d87f0c60a7dac24a3d1b1e0dd96e235a85b7831337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
