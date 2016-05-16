<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3f9b8dfc11e682f02c543ca4a147f4b0186cb157d68474a379a565ce8b2f9462 extends Twig_Template
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
        $__internal_a13b616fbaae025a9724804cb838e1eb172faec6e33baf193181d4e14d7cb37b = $this->env->getExtension("native_profiler");
        $__internal_a13b616fbaae025a9724804cb838e1eb172faec6e33baf193181d4e14d7cb37b->enter($__internal_a13b616fbaae025a9724804cb838e1eb172faec6e33baf193181d4e14d7cb37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a13b616fbaae025a9724804cb838e1eb172faec6e33baf193181d4e14d7cb37b->leave($__internal_a13b616fbaae025a9724804cb838e1eb172faec6e33baf193181d4e14d7cb37b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
