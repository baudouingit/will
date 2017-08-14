<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_111ae81a179afc64a9ebcacdcd13132aca4696fbf219a0a781304eb4edcc4361 extends Twig_Template
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
        $__internal_bfacabb8214a99fd6a0e4529faa5e57e8989a25b908ded7bc678361df9002123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfacabb8214a99fd6a0e4529faa5e57e8989a25b908ded7bc678361df9002123->enter($__internal_bfacabb8214a99fd6a0e4529faa5e57e8989a25b908ded7bc678361df9002123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bfacabb8214a99fd6a0e4529faa5e57e8989a25b908ded7bc678361df9002123->leave($__internal_bfacabb8214a99fd6a0e4529faa5e57e8989a25b908ded7bc678361df9002123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
