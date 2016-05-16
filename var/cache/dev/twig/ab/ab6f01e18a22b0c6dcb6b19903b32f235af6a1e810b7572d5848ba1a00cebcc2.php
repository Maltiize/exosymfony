<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4f1c0f9d69bed8b6bf5a72f952e423347087405c452806473a249c53de557e02 extends Twig_Template
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
        $__internal_09de0a400684f42ce3be1f10aab152e7eb23b5a1a9e1567a4ec224e0a597952c = $this->env->getExtension("native_profiler");
        $__internal_09de0a400684f42ce3be1f10aab152e7eb23b5a1a9e1567a4ec224e0a597952c->enter($__internal_09de0a400684f42ce3be1f10aab152e7eb23b5a1a9e1567a4ec224e0a597952c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_09de0a400684f42ce3be1f10aab152e7eb23b5a1a9e1567a4ec224e0a597952c->leave($__internal_09de0a400684f42ce3be1f10aab152e7eb23b5a1a9e1567a4ec224e0a597952c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
