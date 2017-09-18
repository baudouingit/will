<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_222194d6a9569086cdc8a82c73db49040db4e6fba1e46c44ba5938ba00d5b757 extends Twig_Template
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
        $__internal_2394bf36c328cd8d550175a2fb34672aa873fc0e4919c04828348034eee282f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2394bf36c328cd8d550175a2fb34672aa873fc0e4919c04828348034eee282f1->enter($__internal_2394bf36c328cd8d550175a2fb34672aa873fc0e4919c04828348034eee282f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2394bf36c328cd8d550175a2fb34672aa873fc0e4919c04828348034eee282f1->leave($__internal_2394bf36c328cd8d550175a2fb34672aa873fc0e4919c04828348034eee282f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
