<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_77e57aa1fac522d2c7fb809b34d259b430818a6b982c81c19adb7543968aab9c extends Twig_Template
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
        $__internal_17b01dd246bf79c1668418fb8844009d3306ecb9a679b0f6b71f3caf1fdc691f = $this->env->getExtension("native_profiler");
        $__internal_17b01dd246bf79c1668418fb8844009d3306ecb9a679b0f6b71f3caf1fdc691f->enter($__internal_17b01dd246bf79c1668418fb8844009d3306ecb9a679b0f6b71f3caf1fdc691f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_17b01dd246bf79c1668418fb8844009d3306ecb9a679b0f6b71f3caf1fdc691f->leave($__internal_17b01dd246bf79c1668418fb8844009d3306ecb9a679b0f6b71f3caf1fdc691f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
