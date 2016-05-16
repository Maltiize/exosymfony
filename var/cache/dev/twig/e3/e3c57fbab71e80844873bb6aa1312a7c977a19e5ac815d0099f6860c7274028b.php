<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_74066972a3825e4e8691b9c37991f9ed8f26e06862933e6a1f1bea1e699a5d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c328a9ae2e2b881419c9d15bd1a7c0dd2d4b37f6857c74b65c771e63810da1dd = $this->env->getExtension("native_profiler");
        $__internal_c328a9ae2e2b881419c9d15bd1a7c0dd2d4b37f6857c74b65c771e63810da1dd->enter($__internal_c328a9ae2e2b881419c9d15bd1a7c0dd2d4b37f6857c74b65c771e63810da1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c328a9ae2e2b881419c9d15bd1a7c0dd2d4b37f6857c74b65c771e63810da1dd->leave($__internal_c328a9ae2e2b881419c9d15bd1a7c0dd2d4b37f6857c74b65c771e63810da1dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f170a72ada02dfd2bd1d1b61088510a5b5cbaaa13eb8a97f790313aecab24d9 = $this->env->getExtension("native_profiler");
        $__internal_3f170a72ada02dfd2bd1d1b61088510a5b5cbaaa13eb8a97f790313aecab24d9->enter($__internal_3f170a72ada02dfd2bd1d1b61088510a5b5cbaaa13eb8a97f790313aecab24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3f170a72ada02dfd2bd1d1b61088510a5b5cbaaa13eb8a97f790313aecab24d9->leave($__internal_3f170a72ada02dfd2bd1d1b61088510a5b5cbaaa13eb8a97f790313aecab24d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
