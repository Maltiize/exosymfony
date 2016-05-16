<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a5993b719e05a2f17afb70126a4fdeab502d3712910ed60046c2b459b7f84683 extends Twig_Template
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
        $__internal_ed950d1d11098ca379d181413bcbdbb2783b2328aa48e22ddc79ab0a4a3e36ef = $this->env->getExtension("native_profiler");
        $__internal_ed950d1d11098ca379d181413bcbdbb2783b2328aa48e22ddc79ab0a4a3e36ef->enter($__internal_ed950d1d11098ca379d181413bcbdbb2783b2328aa48e22ddc79ab0a4a3e36ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ed950d1d11098ca379d181413bcbdbb2783b2328aa48e22ddc79ab0a4a3e36ef->leave($__internal_ed950d1d11098ca379d181413bcbdbb2783b2328aa48e22ddc79ab0a4a3e36ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
