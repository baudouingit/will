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
        $__internal_85bb20f53b8b0020840676427ca934b7102c79bd4d84e617ab4c106e6e57c377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bb20f53b8b0020840676427ca934b7102c79bd4d84e617ab4c106e6e57c377->enter($__internal_85bb20f53b8b0020840676427ca934b7102c79bd4d84e617ab4c106e6e57c377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_85bb20f53b8b0020840676427ca934b7102c79bd4d84e617ab4c106e6e57c377->leave($__internal_85bb20f53b8b0020840676427ca934b7102c79bd4d84e617ab4c106e6e57c377_prof);

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
