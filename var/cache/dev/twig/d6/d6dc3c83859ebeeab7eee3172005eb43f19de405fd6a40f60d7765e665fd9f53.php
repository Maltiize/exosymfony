<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5edca773a187411d07304b99db4ea4181cbe5acb35b325cbcbeca142ba670d16 extends Twig_Template
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
        $__internal_15dd2a8eb428cba59426b2a8a8e3ebcb260ee052425f74fdc12d01d463421a81 = $this->env->getExtension("native_profiler");
        $__internal_15dd2a8eb428cba59426b2a8a8e3ebcb260ee052425f74fdc12d01d463421a81->enter($__internal_15dd2a8eb428cba59426b2a8a8e3ebcb260ee052425f74fdc12d01d463421a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_15dd2a8eb428cba59426b2a8a8e3ebcb260ee052425f74fdc12d01d463421a81->leave($__internal_15dd2a8eb428cba59426b2a8a8e3ebcb260ee052425f74fdc12d01d463421a81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
