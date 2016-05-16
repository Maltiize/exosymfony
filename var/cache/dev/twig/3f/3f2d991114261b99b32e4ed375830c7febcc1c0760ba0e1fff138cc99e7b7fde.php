<?php

/* :adress:addAddr.html.twig */
class __TwigTemplate_638ef5e4b8d6435d69cdcc17bc1115e39468dfd9bd7bc765962a69e6ee1d56fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adress:addAddr.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58acad1e669041d791c205bd864e164d3c44f0b5bf594f71aab510aa32d89ff4 = $this->env->getExtension("native_profiler");
        $__internal_58acad1e669041d791c205bd864e164d3c44f0b5bf594f71aab510aa32d89ff4->enter($__internal_58acad1e669041d791c205bd864e164d3c44f0b5bf594f71aab510aa32d89ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adress:addAddr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58acad1e669041d791c205bd864e164d3c44f0b5bf594f71aab510aa32d89ff4->leave($__internal_58acad1e669041d791c205bd864e164d3c44f0b5bf594f71aab510aa32d89ff4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aebdea32da4dd8a078a1b8886278d110841f91732248d0e22e737e4c139e042 = $this->env->getExtension("native_profiler");
        $__internal_5aebdea32da4dd8a078a1b8886278d110841f91732248d0e22e737e4c139e042->enter($__internal_5aebdea32da4dd8a078a1b8886278d110841f91732248d0e22e737e4c139e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_5aebdea32da4dd8a078a1b8886278d110841f91732248d0e22e737e4c139e042->leave($__internal_5aebdea32da4dd8a078a1b8886278d110841f91732248d0e22e737e4c139e042_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6811123aa32b1a00c82398f277c24412413794815c2e0bac7fbfaea6814cb3 = $this->env->getExtension("native_profiler");
        $__internal_1e6811123aa32b1a00c82398f277c24412413794815c2e0bac7fbfaea6814cb3->enter($__internal_1e6811123aa32b1a00c82398f277c24412413794815c2e0bac7fbfaea6814cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('edit', $context, $blocks);
        echo " </br> </br>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1e6811123aa32b1a00c82398f277c24412413794815c2e0bac7fbfaea6814cb3->leave($__internal_1e6811123aa32b1a00c82398f277c24412413794815c2e0bac7fbfaea6814cb3_prof);

    }

    // line 6
    public function block_edit($context, array $blocks = array())
    {
        $__internal_92c71b810cca8693b6f4b862407be77e32d938464d3f7ce19a27a2cc000571df = $this->env->getExtension("native_profiler");
        $__internal_92c71b810cca8693b6f4b862407be77e32d938464d3f7ce19a27a2cc000571df->enter($__internal_92c71b810cca8693b6f4b862407be77e32d938464d3f7ce19a27a2cc000571df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        echo " ";
        
        $__internal_92c71b810cca8693b6f4b862407be77e32d938464d3f7ce19a27a2cc000571df->leave($__internal_92c71b810cca8693b6f4b862407be77e32d938464d3f7ce19a27a2cc000571df_prof);

    }

    public function getTemplateName()
    {
        return ":adress:addAddr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 6,  67 => 9,  63 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Hello {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% block edit %} {% endblock %} </br> </br>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
