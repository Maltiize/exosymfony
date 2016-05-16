<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_278e16ecc86bab3a7d229523b1f9575748434dce99c77b11b30c688e6489cbf6 extends Twig_Template
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
        $__internal_8fff647354ff08f92144e255e89725d282a09025c635f1ea77e2556e4f14fe81 = $this->env->getExtension("native_profiler");
        $__internal_8fff647354ff08f92144e255e89725d282a09025c635f1ea77e2556e4f14fe81->enter($__internal_8fff647354ff08f92144e255e89725d282a09025c635f1ea77e2556e4f14fe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8fff647354ff08f92144e255e89725d282a09025c635f1ea77e2556e4f14fe81->leave($__internal_8fff647354ff08f92144e255e89725d282a09025c635f1ea77e2556e4f14fe81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
