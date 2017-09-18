<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fb091eb7dca38ef5431673eedbd1e665dc95ae562fd07c82b702d238921c97f8 extends Twig_Template
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
        $__internal_8bcfd505822ec59aeff2a2c71c9b024aaf7af104e0a768e013dd59747c0206d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcfd505822ec59aeff2a2c71c9b024aaf7af104e0a768e013dd59747c0206d4->enter($__internal_8bcfd505822ec59aeff2a2c71c9b024aaf7af104e0a768e013dd59747c0206d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8bcfd505822ec59aeff2a2c71c9b024aaf7af104e0a768e013dd59747c0206d4->leave($__internal_8bcfd505822ec59aeff2a2c71c9b024aaf7af104e0a768e013dd59747c0206d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
