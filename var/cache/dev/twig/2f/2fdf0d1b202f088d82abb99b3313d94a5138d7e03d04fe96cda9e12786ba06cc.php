<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_998f2cd9d0fad043bbe29ff2df60cfef040e87a20690e02bfb4f03b9caf54632 extends Twig_Template
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
        $__internal_46681fdd7e9993be90f5532312ccd8772a841baf8b92930a9f9299fe13e67a8d = $this->env->getExtension("native_profiler");
        $__internal_46681fdd7e9993be90f5532312ccd8772a841baf8b92930a9f9299fe13e67a8d->enter($__internal_46681fdd7e9993be90f5532312ccd8772a841baf8b92930a9f9299fe13e67a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_46681fdd7e9993be90f5532312ccd8772a841baf8b92930a9f9299fe13e67a8d->leave($__internal_46681fdd7e9993be90f5532312ccd8772a841baf8b92930a9f9299fe13e67a8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
