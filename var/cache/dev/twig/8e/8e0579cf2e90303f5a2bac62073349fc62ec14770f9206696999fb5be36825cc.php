<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_389c6b99197d17712a090aad672da8140ae90a04fda6c5631ade41863def5280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_32c8822bb82ad3b9a71beeb9ea32888bc41568e707a17770988590f9ae721d32 = $this->env->getExtension("native_profiler");
        $__internal_32c8822bb82ad3b9a71beeb9ea32888bc41568e707a17770988590f9ae721d32->enter($__internal_32c8822bb82ad3b9a71beeb9ea32888bc41568e707a17770988590f9ae721d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c8822bb82ad3b9a71beeb9ea32888bc41568e707a17770988590f9ae721d32->leave($__internal_32c8822bb82ad3b9a71beeb9ea32888bc41568e707a17770988590f9ae721d32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_526b16ba04e8ec7e384ca2e95dc7fc8894ce949c3a612e92b78abdfc6725f5f3 = $this->env->getExtension("native_profiler");
        $__internal_526b16ba04e8ec7e384ca2e95dc7fc8894ce949c3a612e92b78abdfc6725f5f3->enter($__internal_526b16ba04e8ec7e384ca2e95dc7fc8894ce949c3a612e92b78abdfc6725f5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_526b16ba04e8ec7e384ca2e95dc7fc8894ce949c3a612e92b78abdfc6725f5f3->leave($__internal_526b16ba04e8ec7e384ca2e95dc7fc8894ce949c3a612e92b78abdfc6725f5f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
