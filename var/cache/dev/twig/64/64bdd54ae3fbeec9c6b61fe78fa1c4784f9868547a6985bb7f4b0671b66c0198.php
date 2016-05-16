<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5bc4e1dc9a3249e036cd817a8060e1d34e2092eccef43eb47bed5f3217c632ba extends Twig_Template
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
        $__internal_4d635ca2007687937b9d28a6875986bdce3f18a7ea392dc8160b1f27514b98c5 = $this->env->getExtension("native_profiler");
        $__internal_4d635ca2007687937b9d28a6875986bdce3f18a7ea392dc8160b1f27514b98c5->enter($__internal_4d635ca2007687937b9d28a6875986bdce3f18a7ea392dc8160b1f27514b98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4d635ca2007687937b9d28a6875986bdce3f18a7ea392dc8160b1f27514b98c5->leave($__internal_4d635ca2007687937b9d28a6875986bdce3f18a7ea392dc8160b1f27514b98c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
