<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_235658280058df971a63211b6203922364038ee0c166d3f752c5b3c64057c6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51db826612775528c1f5cca31d999fc5bc6cfadea55f9117bb855129ae4f2a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51db826612775528c1f5cca31d999fc5bc6cfadea55f9117bb855129ae4f2a44->enter($__internal_51db826612775528c1f5cca31d999fc5bc6cfadea55f9117bb855129ae4f2a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_51db826612775528c1f5cca31d999fc5bc6cfadea55f9117bb855129ae4f2a44->leave($__internal_51db826612775528c1f5cca31d999fc5bc6cfadea55f9117bb855129ae4f2a44_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_badc9ad75d42a46cb4abc5b4cf98b43cd09e790a866798124d43ecdc5beb59c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badc9ad75d42a46cb4abc5b4cf98b43cd09e790a866798124d43ecdc5beb59c9->enter($__internal_badc9ad75d42a46cb4abc5b4cf98b43cd09e790a866798124d43ecdc5beb59c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_badc9ad75d42a46cb4abc5b4cf98b43cd09e790a866798124d43ecdc5beb59c9->leave($__internal_badc9ad75d42a46cb4abc5b4cf98b43cd09e790a866798124d43ecdc5beb59c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
