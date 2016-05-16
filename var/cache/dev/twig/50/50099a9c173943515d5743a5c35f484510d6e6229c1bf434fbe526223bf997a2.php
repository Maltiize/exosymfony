<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f9467e5d4468693cf4bb2b6d016fee3809b6bcdab60fc379d553142257230305 extends Twig_Template
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
        $__internal_2ba9d52f9ba27b0aaaf1bba499b4ed60582fb25f0fdd46659178488667f457ce = $this->env->getExtension("native_profiler");
        $__internal_2ba9d52f9ba27b0aaaf1bba499b4ed60582fb25f0fdd46659178488667f457ce->enter($__internal_2ba9d52f9ba27b0aaaf1bba499b4ed60582fb25f0fdd46659178488667f457ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2ba9d52f9ba27b0aaaf1bba499b4ed60582fb25f0fdd46659178488667f457ce->leave($__internal_2ba9d52f9ba27b0aaaf1bba499b4ed60582fb25f0fdd46659178488667f457ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
