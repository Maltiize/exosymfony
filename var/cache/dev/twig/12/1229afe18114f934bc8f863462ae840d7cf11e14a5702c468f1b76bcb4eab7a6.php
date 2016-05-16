<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fb7a6fa856b2f9c9c4d5c8c7caacd65c5c965bf6d219f5b3e9d4eb2826cac4c1 extends Twig_Template
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
        $__internal_b42e9a7b0e18f00d4f650b239246817a127d7154a0ba75e82e54a8ddd6ae9b11 = $this->env->getExtension("native_profiler");
        $__internal_b42e9a7b0e18f00d4f650b239246817a127d7154a0ba75e82e54a8ddd6ae9b11->enter($__internal_b42e9a7b0e18f00d4f650b239246817a127d7154a0ba75e82e54a8ddd6ae9b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b42e9a7b0e18f00d4f650b239246817a127d7154a0ba75e82e54a8ddd6ae9b11->leave($__internal_b42e9a7b0e18f00d4f650b239246817a127d7154a0ba75e82e54a8ddd6ae9b11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
