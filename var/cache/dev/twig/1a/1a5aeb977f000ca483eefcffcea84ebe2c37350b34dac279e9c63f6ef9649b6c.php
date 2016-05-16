<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f151f50fe1a12e6fa53881d010806d1c38d016e4a796ca9bc23d65c6d2f9db09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_730e737ba45066b2b35c5cf980db4e6c063a704c141f0cd9f316b2b5f1152dfd = $this->env->getExtension("native_profiler");
        $__internal_730e737ba45066b2b35c5cf980db4e6c063a704c141f0cd9f316b2b5f1152dfd->enter($__internal_730e737ba45066b2b35c5cf980db4e6c063a704c141f0cd9f316b2b5f1152dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_730e737ba45066b2b35c5cf980db4e6c063a704c141f0cd9f316b2b5f1152dfd->leave($__internal_730e737ba45066b2b35c5cf980db4e6c063a704c141f0cd9f316b2b5f1152dfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e933833fbd24d1e34808c06613ea7778543eaedd0aac0ae455a7b1b85a6fb55a = $this->env->getExtension("native_profiler");
        $__internal_e933833fbd24d1e34808c06613ea7778543eaedd0aac0ae455a7b1b85a6fb55a->enter($__internal_e933833fbd24d1e34808c06613ea7778543eaedd0aac0ae455a7b1b85a6fb55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e933833fbd24d1e34808c06613ea7778543eaedd0aac0ae455a7b1b85a6fb55a->leave($__internal_e933833fbd24d1e34808c06613ea7778543eaedd0aac0ae455a7b1b85a6fb55a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
