<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6bd1c9993eb68f716d3aa75712494381cc903f96ca5ef13834d04d6b7c9cdcfc extends Twig_Template
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
        $__internal_d5b464f481769e81a5b5d3268afcf8362d7a62ef88be4713f4ce32738cc8a5e0 = $this->env->getExtension("native_profiler");
        $__internal_d5b464f481769e81a5b5d3268afcf8362d7a62ef88be4713f4ce32738cc8a5e0->enter($__internal_d5b464f481769e81a5b5d3268afcf8362d7a62ef88be4713f4ce32738cc8a5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d5b464f481769e81a5b5d3268afcf8362d7a62ef88be4713f4ce32738cc8a5e0->leave($__internal_d5b464f481769e81a5b5d3268afcf8362d7a62ef88be4713f4ce32738cc8a5e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
