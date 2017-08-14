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
        $__internal_7d0aa213b099497f1dc3db55f1aa7c0dbeebf808b97bc287daba589648a8d51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0aa213b099497f1dc3db55f1aa7c0dbeebf808b97bc287daba589648a8d51b->enter($__internal_7d0aa213b099497f1dc3db55f1aa7c0dbeebf808b97bc287daba589648a8d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 39
        echo "</head>
<body>
";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "</body>
</html>
";
        
        $__internal_7d0aa213b099497f1dc3db55f1aa7c0dbeebf808b97bc287daba589648a8d51b->leave($__internal_7d0aa213b099497f1dc3db55f1aa7c0dbeebf808b97bc287daba589648a8d51b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ce54c758e191258b1b3b519b7dc2ed49772dd32b99ec08e9f724cbd877a199d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce54c758e191258b1b3b519b7dc2ed49772dd32b99ec08e9f724cbd877a199d->enter($__internal_2ce54c758e191258b1b3b519b7dc2ed49772dd32b99ec08e9f724cbd877a199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ce54c758e191258b1b3b519b7dc2ed49772dd32b99ec08e9f724cbd877a199d->leave($__internal_2ce54c758e191258b1b3b519b7dc2ed49772dd32b99ec08e9f724cbd877a199d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e3a46d72c63c2db05919599bc1bc359881a4035867021ab1b26f9223e91b106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3a46d72c63c2db05919599bc1bc359881a4035867021ab1b26f9223e91b106->enter($__internal_7e3a46d72c63c2db05919599bc1bc359881a4035867021ab1b26f9223e91b106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7e3a46d72c63c2db05919599bc1bc359881a4035867021ab1b26f9223e91b106->leave($__internal_7e3a46d72c63c2db05919599bc1bc359881a4035867021ab1b26f9223e91b106_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca63feb9af6ba830ec68bed594c906634ab864bf83dfb932639f386bbf035bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca63feb9af6ba830ec68bed594c906634ab864bf83dfb932639f386bbf035bce->enter($__internal_ca63feb9af6ba830ec68bed594c906634ab864bf83dfb932639f386bbf035bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script
                src=\"https://code.jquery.com/jquery-1.12.4.min.js\"
                integrity=\"sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=\"
                crossorigin=\"anonymous\"></script>

        ";
        // line 32
        echo "        ";
        // line 33
        echo "        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
                integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/galleria.min.js\"></script>
    ";
        
        $__internal_ca63feb9af6ba830ec68bed594c906634ab864bf83dfb932639f386bbf035bce->leave($__internal_ca63feb9af6ba830ec68bed594c906634ab864bf83dfb932639f386bbf035bce_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_18764a4d94369cfd600454f51cfebac8bf6f56aea2b2572e8255c3d7d7f1cc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18764a4d94369cfd600454f51cfebac8bf6f56aea2b2572e8255c3d7d7f1cc9a->enter($__internal_18764a4d94369cfd600454f51cfebac8bf6f56aea2b2572e8255c3d7d7f1cc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
";
        
        $__internal_18764a4d94369cfd600454f51cfebac8bf6f56aea2b2572e8255c3d7d7f1cc9a->leave($__internal_18764a4d94369cfd600454f51cfebac8bf6f56aea2b2572e8255c3d7d7f1cc9a_prof);

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
        return array (  147 => 42,  141 => 41,  129 => 33,  127 => 32,  118 => 24,  112 => 23,  105 => 14,  91 => 12,  86 => 8,  80 => 7,  68 => 6,  59 => 44,  57 => 41,  53 => 39,  51 => 23,  39 => 15,  37 => 7,  33 => 6,  26 => 1,);
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

        <script
                src=\"https://code.jquery.com/jquery-1.12.4.min.js\"
                integrity=\"sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=\"
                crossorigin=\"anonymous\"></script>

        {#<script src=\"http://code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>#}
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
