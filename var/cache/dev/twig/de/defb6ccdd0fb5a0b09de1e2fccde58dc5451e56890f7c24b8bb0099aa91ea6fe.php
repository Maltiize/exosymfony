<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a3b8ecd8d5cedba5085837420f04b7f589df73562e352ad982b766326e0d78d0 extends Twig_Template
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
        $__internal_b122d96a2645467a2b01d3108f48676594b280f0eef3c1ecab483262a0e2e171 = $this->env->getExtension("native_profiler");
        $__internal_b122d96a2645467a2b01d3108f48676594b280f0eef3c1ecab483262a0e2e171->enter($__internal_b122d96a2645467a2b01d3108f48676594b280f0eef3c1ecab483262a0e2e171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b122d96a2645467a2b01d3108f48676594b280f0eef3c1ecab483262a0e2e171->leave($__internal_b122d96a2645467a2b01d3108f48676594b280f0eef3c1ecab483262a0e2e171_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
