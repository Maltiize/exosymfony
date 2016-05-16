<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_20b7baec672c35f73145d04ef69dd74ee97570308ea07973c0406469c556387f extends Twig_Template
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
        $__internal_6fbd3134b09c32977df0b802359d8b80dbb21ac53e831d839da9c0ee5956b5e9 = $this->env->getExtension("native_profiler");
        $__internal_6fbd3134b09c32977df0b802359d8b80dbb21ac53e831d839da9c0ee5956b5e9->enter($__internal_6fbd3134b09c32977df0b802359d8b80dbb21ac53e831d839da9c0ee5956b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6fbd3134b09c32977df0b802359d8b80dbb21ac53e831d839da9c0ee5956b5e9->leave($__internal_6fbd3134b09c32977df0b802359d8b80dbb21ac53e831d839da9c0ee5956b5e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
