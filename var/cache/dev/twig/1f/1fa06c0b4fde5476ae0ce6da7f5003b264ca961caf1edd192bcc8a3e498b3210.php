<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3ece238a6e3179a108a18f8439b41ae47806e0b3793f826f85c454ee584bef75 extends Twig_Template
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
        $__internal_9849ecc7de1d84ed1a3805ae95e531f544def2a1c38fc65891b3860acfa48131 = $this->env->getExtension("native_profiler");
        $__internal_9849ecc7de1d84ed1a3805ae95e531f544def2a1c38fc65891b3860acfa48131->enter($__internal_9849ecc7de1d84ed1a3805ae95e531f544def2a1c38fc65891b3860acfa48131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9849ecc7de1d84ed1a3805ae95e531f544def2a1c38fc65891b3860acfa48131->leave($__internal_9849ecc7de1d84ed1a3805ae95e531f544def2a1c38fc65891b3860acfa48131_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
