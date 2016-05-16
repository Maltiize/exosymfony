<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_dabfb53934316d4b186f43fcbd810d6278610d5947960f597be922cd19f33ddd extends Twig_Template
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
        $__internal_9ec705d3e7754cfc68a04198d94dbf029e3adfcbb2f7176dd87fc23e513dd426 = $this->env->getExtension("native_profiler");
        $__internal_9ec705d3e7754cfc68a04198d94dbf029e3adfcbb2f7176dd87fc23e513dd426->enter($__internal_9ec705d3e7754cfc68a04198d94dbf029e3adfcbb2f7176dd87fc23e513dd426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9ec705d3e7754cfc68a04198d94dbf029e3adfcbb2f7176dd87fc23e513dd426->leave($__internal_9ec705d3e7754cfc68a04198d94dbf029e3adfcbb2f7176dd87fc23e513dd426_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
