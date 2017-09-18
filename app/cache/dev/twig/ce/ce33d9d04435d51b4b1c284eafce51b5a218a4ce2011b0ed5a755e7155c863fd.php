<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b900aaa81a7911189d655f99cd21f402aebb1158684ca00f56a2692b340ba0af extends Twig_Template
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
        $__internal_f06d2e245e770d7aa78cd87fb71f2d4cb333a0ce3caaa7f9f8f497323900694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06d2e245e770d7aa78cd87fb71f2d4cb333a0ce3caaa7f9f8f497323900694f->enter($__internal_f06d2e245e770d7aa78cd87fb71f2d4cb333a0ce3caaa7f9f8f497323900694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f06d2e245e770d7aa78cd87fb71f2d4cb333a0ce3caaa7f9f8f497323900694f->leave($__internal_f06d2e245e770d7aa78cd87fb71f2d4cb333a0ce3caaa7f9f8f497323900694f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
