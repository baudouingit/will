<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_896196dbc4083abd92836d57cefc246cfcf84ebd591734cdaf2cc315757250ea extends Twig_Template
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
        $__internal_91046848888a0a6fe4f661f7cd3f318587deaac8746dfb71a7a570efd4fa501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91046848888a0a6fe4f661f7cd3f318587deaac8746dfb71a7a570efd4fa501e->enter($__internal_91046848888a0a6fe4f661f7cd3f318587deaac8746dfb71a7a570efd4fa501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_91046848888a0a6fe4f661f7cd3f318587deaac8746dfb71a7a570efd4fa501e->leave($__internal_91046848888a0a6fe4f661f7cd3f318587deaac8746dfb71a7a570efd4fa501e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
