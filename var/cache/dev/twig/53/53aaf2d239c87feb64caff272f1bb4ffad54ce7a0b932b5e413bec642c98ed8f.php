<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ce6624fe1cd554e24ff6b946e1b02453818ef4ec3c7a6ecc71a741a16cd036d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb04051528f5b86f36b15e3b0632c2742e1783a7c41867959dab2ccc4fa04d93 = $this->env->getExtension("native_profiler");
        $__internal_bb04051528f5b86f36b15e3b0632c2742e1783a7c41867959dab2ccc4fa04d93->enter($__internal_bb04051528f5b86f36b15e3b0632c2742e1783a7c41867959dab2ccc4fa04d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb04051528f5b86f36b15e3b0632c2742e1783a7c41867959dab2ccc4fa04d93->leave($__internal_bb04051528f5b86f36b15e3b0632c2742e1783a7c41867959dab2ccc4fa04d93_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e44604dab5755d824e820af6ef4d48e257e7c5749c5da6ea76f3445f7c3a94e = $this->env->getExtension("native_profiler");
        $__internal_5e44604dab5755d824e820af6ef4d48e257e7c5749c5da6ea76f3445f7c3a94e->enter($__internal_5e44604dab5755d824e820af6ef4d48e257e7c5749c5da6ea76f3445f7c3a94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5e44604dab5755d824e820af6ef4d48e257e7c5749c5da6ea76f3445f7c3a94e->leave($__internal_5e44604dab5755d824e820af6ef4d48e257e7c5749c5da6ea76f3445f7c3a94e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
