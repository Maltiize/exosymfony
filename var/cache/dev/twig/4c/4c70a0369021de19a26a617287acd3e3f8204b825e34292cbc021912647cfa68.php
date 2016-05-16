<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_23b43024d9fd2bf4583dadfdadb8721dbd35c8d7a95e76c7e23cd2cff9d2f8ca extends Twig_Template
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
        $__internal_eb7bb841c4d1496508605e47bc6ee62f40efb9647abab62504a1e903c7f2f77d = $this->env->getExtension("native_profiler");
        $__internal_eb7bb841c4d1496508605e47bc6ee62f40efb9647abab62504a1e903c7f2f77d->enter($__internal_eb7bb841c4d1496508605e47bc6ee62f40efb9647abab62504a1e903c7f2f77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_eb7bb841c4d1496508605e47bc6ee62f40efb9647abab62504a1e903c7f2f77d->leave($__internal_eb7bb841c4d1496508605e47bc6ee62f40efb9647abab62504a1e903c7f2f77d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
