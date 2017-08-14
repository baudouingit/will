<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8a05fde1dbe4f1d639776b5aa1cb001c3eb7abdbe5e7891584eddd8e41c16eb8 extends Twig_Template
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
        $__internal_2158cf11adbcf0d3b67a13aaa595d664e1c8d539f3e255e54a2fff51b6ab58ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2158cf11adbcf0d3b67a13aaa595d664e1c8d539f3e255e54a2fff51b6ab58ae->enter($__internal_2158cf11adbcf0d3b67a13aaa595d664e1c8d539f3e255e54a2fff51b6ab58ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2158cf11adbcf0d3b67a13aaa595d664e1c8d539f3e255e54a2fff51b6ab58ae->leave($__internal_2158cf11adbcf0d3b67a13aaa595d664e1c8d539f3e255e54a2fff51b6ab58ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
