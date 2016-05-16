<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2fc020ed8bde78f53d1a233b006b5b8c67795c538e1cce848bc5545c8d5551b7 extends Twig_Template
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
        $__internal_287482ffd34c45474375a24c54846ddf38a26fcfb0aa41bb9d3acbcb0220fa28 = $this->env->getExtension("native_profiler");
        $__internal_287482ffd34c45474375a24c54846ddf38a26fcfb0aa41bb9d3acbcb0220fa28->enter($__internal_287482ffd34c45474375a24c54846ddf38a26fcfb0aa41bb9d3acbcb0220fa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_287482ffd34c45474375a24c54846ddf38a26fcfb0aa41bb9d3acbcb0220fa28->leave($__internal_287482ffd34c45474375a24c54846ddf38a26fcfb0aa41bb9d3acbcb0220fa28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
