<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_88fc6616dbc15accd6b0474368b2d1b72418e54afc679d9e64a4d7b5362ba4d7 extends Twig_Template
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
        $__internal_7dbfcd3e1922538a122116b6b7efc4ea850d9402973b0dc467c1e82088cc7f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbfcd3e1922538a122116b6b7efc4ea850d9402973b0dc467c1e82088cc7f7b->enter($__internal_7dbfcd3e1922538a122116b6b7efc4ea850d9402973b0dc467c1e82088cc7f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7dbfcd3e1922538a122116b6b7efc4ea850d9402973b0dc467c1e82088cc7f7b->leave($__internal_7dbfcd3e1922538a122116b6b7efc4ea850d9402973b0dc467c1e82088cc7f7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/will/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
