<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7e964846d1ee153d2fd0cf8a2b9db3f198e8eaa03c0f43ca54d6d6dea0f567c0 extends Twig_Template
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
        $__internal_fd9ae86c300489c3db73c3b8a9ae8a931ba74e65ccbb6e3f7f517d1d647bad20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9ae86c300489c3db73c3b8a9ae8a931ba74e65ccbb6e3f7f517d1d647bad20->enter($__internal_fd9ae86c300489c3db73c3b8a9ae8a931ba74e65ccbb6e3f7f517d1d647bad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fd9ae86c300489c3db73c3b8a9ae8a931ba74e65ccbb6e3f7f517d1d647bad20->leave($__internal_fd9ae86c300489c3db73c3b8a9ae8a931ba74e65ccbb6e3f7f517d1d647bad20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
