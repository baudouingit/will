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
        $__internal_3c34363384b01d3d27b96d20c1f801043b945ad0d0faa0277a8da209f3646a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c34363384b01d3d27b96d20c1f801043b945ad0d0faa0277a8da209f3646a2b->enter($__internal_3c34363384b01d3d27b96d20c1f801043b945ad0d0faa0277a8da209f3646a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3c34363384b01d3d27b96d20c1f801043b945ad0d0faa0277a8da209f3646a2b->leave($__internal_3c34363384b01d3d27b96d20c1f801043b945ad0d0faa0277a8da209f3646a2b_prof);

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
