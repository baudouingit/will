<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d0bc019668b4b9515300aabcb2201d6d9e8cbb983fe4320afad18b6143c61610 extends Twig_Template
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
        $__internal_1f6af821aa03c412ef24684539062b6d421282cefb025b78d1a9837580908308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6af821aa03c412ef24684539062b6d421282cefb025b78d1a9837580908308->enter($__internal_1f6af821aa03c412ef24684539062b6d421282cefb025b78d1a9837580908308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1f6af821aa03c412ef24684539062b6d421282cefb025b78d1a9837580908308->leave($__internal_1f6af821aa03c412ef24684539062b6d421282cefb025b78d1a9837580908308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
