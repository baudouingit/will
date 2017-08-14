<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_04d097d843fe7a4f1640efeabda6fe6ef1e5cad5362072ace449539ebdc827c6 extends Twig_Template
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
        $__internal_bf3b4d1bb97d658d267928b1ab2d782866090a48e107008eaa525adf8d46155f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3b4d1bb97d658d267928b1ab2d782866090a48e107008eaa525adf8d46155f->enter($__internal_bf3b4d1bb97d658d267928b1ab2d782866090a48e107008eaa525adf8d46155f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bf3b4d1bb97d658d267928b1ab2d782866090a48e107008eaa525adf8d46155f->leave($__internal_bf3b4d1bb97d658d267928b1ab2d782866090a48e107008eaa525adf8d46155f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
