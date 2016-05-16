<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_575b473f00dc0eaa6f95260a6a368f984971556c10a7a26e4b0adf5ebeb864e3 extends Twig_Template
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
        $__internal_fc0418a2a50592d25a69f88ad88b80f10a18e4f1bfde751acbb88c2d6d3db3da = $this->env->getExtension("native_profiler");
        $__internal_fc0418a2a50592d25a69f88ad88b80f10a18e4f1bfde751acbb88c2d6d3db3da->enter($__internal_fc0418a2a50592d25a69f88ad88b80f10a18e4f1bfde751acbb88c2d6d3db3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fc0418a2a50592d25a69f88ad88b80f10a18e4f1bfde751acbb88c2d6d3db3da->leave($__internal_fc0418a2a50592d25a69f88ad88b80f10a18e4f1bfde751acbb88c2d6d3db3da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
