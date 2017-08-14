<?php

/* ::base.html.twig */
class __TwigTemplate_c408256580491de4202cf668643d8e0130a4d4d8f26c48d50302bf8bb06696af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455ddeeec9f22ed62aa91ec559519120028fa4c9b0cc51dde14a6a69d78b52fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455ddeeec9f22ed62aa91ec559519120028fa4c9b0cc51dde14a6a69d78b52fe->enter($__internal_455ddeeec9f22ed62aa91ec559519120028fa4c9b0cc51dde14a6a69d78b52fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</head>
<body>
";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "</body>
</html>
";
        
        $__internal_455ddeeec9f22ed62aa91ec559519120028fa4c9b0cc51dde14a6a69d78b52fe->leave($__internal_455ddeeec9f22ed62aa91ec559519120028fa4c9b0cc51dde14a6a69d78b52fe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c55d24e24de8cc0400e357a0449d6416df90247033ac94b9237d9699f0f89e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55d24e24de8cc0400e357a0449d6416df90247033ac94b9237d9699f0f89e8a->enter($__internal_c55d24e24de8cc0400e357a0449d6416df90247033ac94b9237d9699f0f89e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c55d24e24de8cc0400e357a0449d6416df90247033ac94b9237d9699f0f89e8a->leave($__internal_c55d24e24de8cc0400e357a0449d6416df90247033ac94b9237d9699f0f89e8a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78516e19b2f3e403ed5aa8f5f4a2d731498b51039052a905a387507bde7ff23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78516e19b2f3e403ed5aa8f5f4a2d731498b51039052a905a387507bde7ff23f->enter($__internal_78516e19b2f3e403ed5aa8f5f4a2d731498b51039052a905a387507bde7ff23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6c772e5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6c772e5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main_main_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "6c772e5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6c772e5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    ";
        
        $__internal_78516e19b2f3e403ed5aa8f5f4a2d731498b51039052a905a387507bde7ff23f->leave($__internal_78516e19b2f3e403ed5aa8f5f4a2d731498b51039052a905a387507bde7ff23f_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_299fd5d8384c38f13101c7eaa2fad42a266d92390489b781b3b4bcde65fa72c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299fd5d8384c38f13101c7eaa2fad42a266d92390489b781b3b4bcde65fa72c7->enter($__internal_299fd5d8384c38f13101c7eaa2fad42a266d92390489b781b3b4bcde65fa72c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"http://code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
        ";
        // line 27
        echo "        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/galleria.min.js\"></script>
    ";
        
        $__internal_299fd5d8384c38f13101c7eaa2fad42a266d92390489b781b3b4bcde65fa72c7->leave($__internal_299fd5d8384c38f13101c7eaa2fad42a266d92390489b781b3b4bcde65fa72c7_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac473f976a211be2c48f43e0e89e49c862de99955cc33403ce384724e6b81a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac473f976a211be2c48f43e0e89e49c862de99955cc33403ce384724e6b81a97->enter($__internal_ac473f976a211be2c48f43e0e89e49c862de99955cc33403ce384724e6b81a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
";
        
        $__internal_ac473f976a211be2c48f43e0e89e49c862de99955cc33403ce384724e6b81a97->leave($__internal_ac473f976a211be2c48f43e0e89e49c862de99955cc33403ce384724e6b81a97_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 36,  134 => 35,  122 => 27,  118 => 24,  112 => 23,  105 => 14,  91 => 12,  86 => 8,  80 => 7,  68 => 6,  59 => 38,  57 => 35,  53 => 33,  51 => 23,  39 => 15,  37 => 7,  33 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        {% stylesheets
        filter='less, cssrewrite'
        output='css/main.css'
        '@AppBundle/Resources/less/main.less' %}
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\"
          integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
    {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"http://code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
        {#<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>#}
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/galleria.min.js\"></script>
    {% endblock %}
</head>
<body>
{% block body %}

{% endblock %}
</body>
</html>
", "::base.html.twig", "/var/www/html/will/app/Resources/views/base.html.twig");
    }
}
