<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c02cbbd125bcf686cdc11ee4452198416569160c9ba32767097b6f810aaddaa8 extends Twig_Template
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
        $__internal_9679f033f75e57f1ad7a79e0a40bc22ccf44b13484e1a3ab1a32eb2405206f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9679f033f75e57f1ad7a79e0a40bc22ccf44b13484e1a3ab1a32eb2405206f15->enter($__internal_9679f033f75e57f1ad7a79e0a40bc22ccf44b13484e1a3ab1a32eb2405206f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9679f033f75e57f1ad7a79e0a40bc22ccf44b13484e1a3ab1a32eb2405206f15->leave($__internal_9679f033f75e57f1ad7a79e0a40bc22ccf44b13484e1a3ab1a32eb2405206f15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
