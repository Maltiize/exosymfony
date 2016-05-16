<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0b5e430aee31dcae58a00872126547abcc6ae0f599de699bf935edb664ce13e5 extends Twig_Template
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
        $__internal_2d8186620d7febef5b6ae990e23c56d0e783e66ff2f5ef4fa34e77e65162c1ba = $this->env->getExtension("native_profiler");
        $__internal_2d8186620d7febef5b6ae990e23c56d0e783e66ff2f5ef4fa34e77e65162c1ba->enter($__internal_2d8186620d7febef5b6ae990e23c56d0e783e66ff2f5ef4fa34e77e65162c1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2d8186620d7febef5b6ae990e23c56d0e783e66ff2f5ef4fa34e77e65162c1ba->leave($__internal_2d8186620d7febef5b6ae990e23c56d0e783e66ff2f5ef4fa34e77e65162c1ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
