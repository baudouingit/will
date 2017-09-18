<?php

/* base.html.twig */
class __TwigTemplate_2bc7df0f0192ae123bdb7d28faebfa681a6ef3d0108922a4893089f347d3a493 extends Twig_Template
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
        $__internal_60b262a27bfd4f91aec0a0de1032ba93d4abee4424a71066fff07dd8a2340a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b262a27bfd4f91aec0a0de1032ba93d4abee4424a71066fff07dd8a2340a82->enter($__internal_60b262a27bfd4f91aec0a0de1032ba93d4abee4424a71066fff07dd8a2340a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_60b262a27bfd4f91aec0a0de1032ba93d4abee4424a71066fff07dd8a2340a82->leave($__internal_60b262a27bfd4f91aec0a0de1032ba93d4abee4424a71066fff07dd8a2340a82_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c09535f52175b992f3c0f9bfe29f4fa3f0772241d638a2f7eae788198cef5713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09535f52175b992f3c0f9bfe29f4fa3f0772241d638a2f7eae788198cef5713->enter($__internal_c09535f52175b992f3c0f9bfe29f4fa3f0772241d638a2f7eae788198cef5713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c09535f52175b992f3c0f9bfe29f4fa3f0772241d638a2f7eae788198cef5713->leave($__internal_c09535f52175b992f3c0f9bfe29f4fa3f0772241d638a2f7eae788198cef5713_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac47c25c99f2dd1c3446c7539ac20b0e0735f1f23bc6fca44e69f26ddc628c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac47c25c99f2dd1c3446c7539ac20b0e0735f1f23bc6fca44e69f26ddc628c17->enter($__internal_ac47c25c99f2dd1c3446c7539ac20b0e0735f1f23bc6fca44e69f26ddc628c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ac47c25c99f2dd1c3446c7539ac20b0e0735f1f23bc6fca44e69f26ddc628c17->leave($__internal_ac47c25c99f2dd1c3446c7539ac20b0e0735f1f23bc6fca44e69f26ddc628c17_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c2f7b761f3ac6dd3390a00484bb63ec2c65888a6b0947ef05a2f8c863dcfbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2f7b761f3ac6dd3390a00484bb63ec2c65888a6b0947ef05a2f8c863dcfbb8->enter($__internal_2c2f7b761f3ac6dd3390a00484bb63ec2c65888a6b0947ef05a2f8c863dcfbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2c2f7b761f3ac6dd3390a00484bb63ec2c65888a6b0947ef05a2f8c863dcfbb8->leave($__internal_2c2f7b761f3ac6dd3390a00484bb63ec2c65888a6b0947ef05a2f8c863dcfbb8_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_11da9a5cf8548c6f704c793126fd73de958f9c435dc1c6efd5bc1e8f3b73168d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11da9a5cf8548c6f704c793126fd73de958f9c435dc1c6efd5bc1e8f3b73168d->enter($__internal_11da9a5cf8548c6f704c793126fd73de958f9c435dc1c6efd5bc1e8f3b73168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
";
        
        $__internal_11da9a5cf8548c6f704c793126fd73de958f9c435dc1c6efd5bc1e8f3b73168d->leave($__internal_11da9a5cf8548c6f704c793126fd73de958f9c435dc1c6efd5bc1e8f3b73168d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/var/www/html/will/app/Resources/views/base.html.twig");
    }
}
