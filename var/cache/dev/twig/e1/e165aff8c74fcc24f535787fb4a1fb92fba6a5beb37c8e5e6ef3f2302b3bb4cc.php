<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_89535e855147298be20189b26c6dd113d86a70ec2d46949f4686cf26f0d6fd3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a6fbefe4f8eaaa56a5ef6cd19b1e2daa72d1d6d22ed4264b7e7eb492dfd721d3 = $this->env->getExtension("native_profiler");
        $__internal_a6fbefe4f8eaaa56a5ef6cd19b1e2daa72d1d6d22ed4264b7e7eb492dfd721d3->enter($__internal_a6fbefe4f8eaaa56a5ef6cd19b1e2daa72d1d6d22ed4264b7e7eb492dfd721d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fbefe4f8eaaa56a5ef6cd19b1e2daa72d1d6d22ed4264b7e7eb492dfd721d3->leave($__internal_a6fbefe4f8eaaa56a5ef6cd19b1e2daa72d1d6d22ed4264b7e7eb492dfd721d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9990416b874f3ff75833ce1f4d175abfbf8daedb35947501c722e040712bca46 = $this->env->getExtension("native_profiler");
        $__internal_9990416b874f3ff75833ce1f4d175abfbf8daedb35947501c722e040712bca46->enter($__internal_9990416b874f3ff75833ce1f4d175abfbf8daedb35947501c722e040712bca46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9990416b874f3ff75833ce1f4d175abfbf8daedb35947501c722e040712bca46->leave($__internal_9990416b874f3ff75833ce1f4d175abfbf8daedb35947501c722e040712bca46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
