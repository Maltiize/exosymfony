<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bceb8a976a1d54c0780a8be77e317615b6b18b4f2be65c8cad33a59d816d209a extends Twig_Template
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
        $__internal_f16b30ceaf39da25fa3bd5011526cb46e9de5f998dac751cfb4b76b77dcc5806 = $this->env->getExtension("native_profiler");
        $__internal_f16b30ceaf39da25fa3bd5011526cb46e9de5f998dac751cfb4b76b77dcc5806->enter($__internal_f16b30ceaf39da25fa3bd5011526cb46e9de5f998dac751cfb4b76b77dcc5806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f16b30ceaf39da25fa3bd5011526cb46e9de5f998dac751cfb4b76b77dcc5806->leave($__internal_f16b30ceaf39da25fa3bd5011526cb46e9de5f998dac751cfb4b76b77dcc5806_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
