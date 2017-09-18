<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c341af6c653119e152086de5aedfa39f5745f0a26bc3dbf8bd24d477bb1a25e8 extends Twig_Template
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
        $__internal_b38957fe621e658cea3847d3e2b460cdf0e5f35ca7e08c3b3505381a425f7926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38957fe621e658cea3847d3e2b460cdf0e5f35ca7e08c3b3505381a425f7926->enter($__internal_b38957fe621e658cea3847d3e2b460cdf0e5f35ca7e08c3b3505381a425f7926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b38957fe621e658cea3847d3e2b460cdf0e5f35ca7e08c3b3505381a425f7926->leave($__internal_b38957fe621e658cea3847d3e2b460cdf0e5f35ca7e08c3b3505381a425f7926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
