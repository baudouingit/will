<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d76a4ea8879d49fc185ad606715cd19dd176c15b6e861c12d505e1d6b22f3e71 extends Twig_Template
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
        $__internal_ad228b3791861b77c42ebe2b17beefe91628a5dae69a39be2289e313f344594c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad228b3791861b77c42ebe2b17beefe91628a5dae69a39be2289e313f344594c->enter($__internal_ad228b3791861b77c42ebe2b17beefe91628a5dae69a39be2289e313f344594c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ad228b3791861b77c42ebe2b17beefe91628a5dae69a39be2289e313f344594c->leave($__internal_ad228b3791861b77c42ebe2b17beefe91628a5dae69a39be2289e313f344594c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
