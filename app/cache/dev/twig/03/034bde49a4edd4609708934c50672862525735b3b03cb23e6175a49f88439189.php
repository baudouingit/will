<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b5010c58dd0c6b8e682c972a4afe88e389a848d5d3d57be072b89cb025485807 extends Twig_Template
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
        $__internal_35fca39bfbf162c085a383ac3c6d6e7dd49839a6792f31bf1453ceb78b7b7228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fca39bfbf162c085a383ac3c6d6e7dd49839a6792f31bf1453ceb78b7b7228->enter($__internal_35fca39bfbf162c085a383ac3c6d6e7dd49839a6792f31bf1453ceb78b7b7228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_35fca39bfbf162c085a383ac3c6d6e7dd49839a6792f31bf1453ceb78b7b7228->leave($__internal_35fca39bfbf162c085a383ac3c6d6e7dd49839a6792f31bf1453ceb78b7b7228_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
