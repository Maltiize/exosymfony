<?php

/* ::base.html.twig */
class __TwigTemplate_ee584aaf098a466b31efa26becfac110990710771bcfeefa4ed6331acfe5c817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a632bbabb6ae3df73f4e3bb4182d9e3ad1d4369a2bb3053bdbb163df2eb9dcd1 = $this->env->getExtension("native_profiler");
        $__internal_a632bbabb6ae3df73f4e3bb4182d9e3ad1d4369a2bb3053bdbb163df2eb9dcd1->enter($__internal_a632bbabb6ae3df73f4e3bb4182d9e3ad1d4369a2bb3053bdbb163df2eb9dcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a632bbabb6ae3df73f4e3bb4182d9e3ad1d4369a2bb3053bdbb163df2eb9dcd1->leave($__internal_a632bbabb6ae3df73f4e3bb4182d9e3ad1d4369a2bb3053bdbb163df2eb9dcd1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89b3a44592095b9a6a5293783fa01e686c9be1f9f69403cd0fb7fe46295a8693 = $this->env->getExtension("native_profiler");
        $__internal_89b3a44592095b9a6a5293783fa01e686c9be1f9f69403cd0fb7fe46295a8693->enter($__internal_89b3a44592095b9a6a5293783fa01e686c9be1f9f69403cd0fb7fe46295a8693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_89b3a44592095b9a6a5293783fa01e686c9be1f9f69403cd0fb7fe46295a8693->leave($__internal_89b3a44592095b9a6a5293783fa01e686c9be1f9f69403cd0fb7fe46295a8693_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0534f38bde8d9d747671594d468255ff80680e94e542796b5cb19a4083a424bd = $this->env->getExtension("native_profiler");
        $__internal_0534f38bde8d9d747671594d468255ff80680e94e542796b5cb19a4083a424bd->enter($__internal_0534f38bde8d9d747671594d468255ff80680e94e542796b5cb19a4083a424bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0534f38bde8d9d747671594d468255ff80680e94e542796b5cb19a4083a424bd->leave($__internal_0534f38bde8d9d747671594d468255ff80680e94e542796b5cb19a4083a424bd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d9a4bd4b1c1f31e161e81af8d96b45f5b653ea16cfa5dc44dc3c825f07c8806 = $this->env->getExtension("native_profiler");
        $__internal_7d9a4bd4b1c1f31e161e81af8d96b45f5b653ea16cfa5dc44dc3c825f07c8806->enter($__internal_7d9a4bd4b1c1f31e161e81af8d96b45f5b653ea16cfa5dc44dc3c825f07c8806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7d9a4bd4b1c1f31e161e81af8d96b45f5b653ea16cfa5dc44dc3c825f07c8806->leave($__internal_7d9a4bd4b1c1f31e161e81af8d96b45f5b653ea16cfa5dc44dc3c825f07c8806_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_741d49dd0cd0025ebf40642d55048379ef6923dbdd2827370979c131d9f02801 = $this->env->getExtension("native_profiler");
        $__internal_741d49dd0cd0025ebf40642d55048379ef6923dbdd2827370979c131d9f02801->enter($__internal_741d49dd0cd0025ebf40642d55048379ef6923dbdd2827370979c131d9f02801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_741d49dd0cd0025ebf40642d55048379ef6923dbdd2827370979c131d9f02801->leave($__internal_741d49dd0cd0025ebf40642d55048379ef6923dbdd2827370979c131d9f02801_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
