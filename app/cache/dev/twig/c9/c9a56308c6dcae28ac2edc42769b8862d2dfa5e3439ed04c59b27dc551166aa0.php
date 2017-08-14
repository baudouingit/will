<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6dd342528922b908367469b3e331a148930074fe780893181db7b127998cca11 extends Twig_Template
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
        $__internal_4f649739746812066dfc9162875eeb433817db0bd6c5d7d896948747526ecf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f649739746812066dfc9162875eeb433817db0bd6c5d7d896948747526ecf5b->enter($__internal_4f649739746812066dfc9162875eeb433817db0bd6c5d7d896948747526ecf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4f649739746812066dfc9162875eeb433817db0bd6c5d7d896948747526ecf5b->leave($__internal_4f649739746812066dfc9162875eeb433817db0bd6c5d7d896948747526ecf5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
