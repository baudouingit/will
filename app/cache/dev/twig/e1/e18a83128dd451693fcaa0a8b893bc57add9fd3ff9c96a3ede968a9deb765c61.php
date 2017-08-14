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
        $__internal_55012fd849ac0c81260fd11489de545a157185e6352cca73bc7d4017b5efb89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55012fd849ac0c81260fd11489de545a157185e6352cca73bc7d4017b5efb89c->enter($__internal_55012fd849ac0c81260fd11489de545a157185e6352cca73bc7d4017b5efb89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_55012fd849ac0c81260fd11489de545a157185e6352cca73bc7d4017b5efb89c->leave($__internal_55012fd849ac0c81260fd11489de545a157185e6352cca73bc7d4017b5efb89c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0f2d95ea945b912df7e72ecbacc83b5be8013393f0fd360dedf93691b9ca5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f2d95ea945b912df7e72ecbacc83b5be8013393f0fd360dedf93691b9ca5e4->enter($__internal_f0f2d95ea945b912df7e72ecbacc83b5be8013393f0fd360dedf93691b9ca5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f0f2d95ea945b912df7e72ecbacc83b5be8013393f0fd360dedf93691b9ca5e4->leave($__internal_f0f2d95ea945b912df7e72ecbacc83b5be8013393f0fd360dedf93691b9ca5e4_prof);

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
