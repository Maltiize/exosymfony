<?php

/* base.html.twig */
class __TwigTemplate_b5007c05490b1e91308ca2ea1afe90da0de2da12917a75914f3dca6991192549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba343d553e96670cedc69c9ab3ab443bf173d66462116eb5bfdaceaf74d54561 = $this->env->getExtension("native_profiler");
        $__internal_ba343d553e96670cedc69c9ab3ab443bf173d66462116eb5bfdaceaf74d54561->enter($__internal_ba343d553e96670cedc69c9ab3ab443bf173d66462116eb5bfdaceaf74d54561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"mon petit exo symfony2\">
        <meta name=\"author\" content=\"Maltiize\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/3-col-portfolio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <title>AppAdressBook</title>

    </head>
    <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class=\"container\">
        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    </div>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
        
        $__internal_ba343d553e96670cedc69c9ab3ab443bf173d66462116eb5bfdaceaf74d54561->leave($__internal_ba343d553e96670cedc69c9ab3ab443bf173d66462116eb5bfdaceaf74d54561_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_45d6680ee7cd968c1669358ad9681593b2515eb626435ba7abf312016cc0824c = $this->env->getExtension("native_profiler");
        $__internal_45d6680ee7cd968c1669358ad9681593b2515eb626435ba7abf312016cc0824c->enter($__internal_45d6680ee7cd968c1669358ad9681593b2515eb626435ba7abf312016cc0824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45d6680ee7cd968c1669358ad9681593b2515eb626435ba7abf312016cc0824c->leave($__internal_45d6680ee7cd968c1669358ad9681593b2515eb626435ba7abf312016cc0824c_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c131760d3b470b7069ed16ba196fcfd0652a3364de863b5b7408d84cb972e3a8 = $this->env->getExtension("native_profiler");
        $__internal_c131760d3b470b7069ed16ba196fcfd0652a3364de863b5b7408d84cb972e3a8->enter($__internal_c131760d3b470b7069ed16ba196fcfd0652a3364de863b5b7408d84cb972e3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c131760d3b470b7069ed16ba196fcfd0652a3364de863b5b7408d84cb972e3a8->leave($__internal_c131760d3b470b7069ed16ba196fcfd0652a3364de863b5b7408d84cb972e3a8_prof);

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
        return array (  126 => 50,  115 => 46,  106 => 51,  104 => 50,  100 => 49,  96 => 48,  93 => 47,  91 => 46,  79 => 37,  73 => 34,  67 => 31,  56 => 25,  38 => 10,  34 => 9,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="mon petit exo symfony2">*/
/*         <meta name="author" content="Maltiize">*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('css/3-col-portfolio.css') }}" rel="stylesheet">*/
/*         <title>AppAdressBook</title>*/
/* */
/*     </head>*/
/*     <body>*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">{{ app.user.prenom }} {{ app.user.nom }} </a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{ path('fos_user_registration_register') }}">Register</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('fos_user_security_logout') }}">Logout</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('index') }}">Home</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/*     <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*         <script src="{{ asset('js/jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
