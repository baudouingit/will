<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5ad0d82815a8b90f4b79c00cfbc6afbcf444f545258b6d1ec472483df3603db8 extends Twig_Template
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
        $__internal_9b44ab7fa950cb089590a95c6679c3f393a7c4ed6f2ef5cfc623244e1ac74efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b44ab7fa950cb089590a95c6679c3f393a7c4ed6f2ef5cfc623244e1ac74efc->enter($__internal_9b44ab7fa950cb089590a95c6679c3f393a7c4ed6f2ef5cfc623244e1ac74efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9b44ab7fa950cb089590a95c6679c3f393a7c4ed6f2ef5cfc623244e1ac74efc->leave($__internal_9b44ab7fa950cb089590a95c6679c3f393a7c4ed6f2ef5cfc623244e1ac74efc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
