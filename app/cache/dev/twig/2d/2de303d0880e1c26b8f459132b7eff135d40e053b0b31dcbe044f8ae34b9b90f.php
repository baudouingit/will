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
        $__internal_71064efbfbf1bc0f47d2429740bfa7f43e32cf92721a5ab9e66069ba69f1f824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71064efbfbf1bc0f47d2429740bfa7f43e32cf92721a5ab9e66069ba69f1f824->enter($__internal_71064efbfbf1bc0f47d2429740bfa7f43e32cf92721a5ab9e66069ba69f1f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_71064efbfbf1bc0f47d2429740bfa7f43e32cf92721a5ab9e66069ba69f1f824->leave($__internal_71064efbfbf1bc0f47d2429740bfa7f43e32cf92721a5ab9e66069ba69f1f824_prof);

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
