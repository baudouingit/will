<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5365b505c546ca15a5dd0c9002e20ae45c69acc28e225d8e949d29a7fb5898e4 extends Twig_Template
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
        $__internal_78d70704c894bf10fc819a06d1b1006af4281bfc7ca16a79bbf6d43e629631e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d70704c894bf10fc819a06d1b1006af4281bfc7ca16a79bbf6d43e629631e8->enter($__internal_78d70704c894bf10fc819a06d1b1006af4281bfc7ca16a79bbf6d43e629631e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_78d70704c894bf10fc819a06d1b1006af4281bfc7ca16a79bbf6d43e629631e8->leave($__internal_78d70704c894bf10fc819a06d1b1006af4281bfc7ca16a79bbf6d43e629631e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
