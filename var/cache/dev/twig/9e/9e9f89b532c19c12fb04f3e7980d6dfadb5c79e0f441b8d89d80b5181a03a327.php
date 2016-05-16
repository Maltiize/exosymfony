<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2eedc8dead59d5ebc098bf3a59b60b1dc63f911a09838a30e1a075e3971c5717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d0be4339659c4e6ef3110a410e090f011abb022cade0c152070ae858f245b71b = $this->env->getExtension("native_profiler");
        $__internal_d0be4339659c4e6ef3110a410e090f011abb022cade0c152070ae858f245b71b->enter($__internal_d0be4339659c4e6ef3110a410e090f011abb022cade0c152070ae858f245b71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0be4339659c4e6ef3110a410e090f011abb022cade0c152070ae858f245b71b->leave($__internal_d0be4339659c4e6ef3110a410e090f011abb022cade0c152070ae858f245b71b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_353cce059ee9e92acd1a7c0e367a8f8803a26fcc422aa2cfd390bd2090cc9fd9 = $this->env->getExtension("native_profiler");
        $__internal_353cce059ee9e92acd1a7c0e367a8f8803a26fcc422aa2cfd390bd2090cc9fd9->enter($__internal_353cce059ee9e92acd1a7c0e367a8f8803a26fcc422aa2cfd390bd2090cc9fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_353cce059ee9e92acd1a7c0e367a8f8803a26fcc422aa2cfd390bd2090cc9fd9->leave($__internal_353cce059ee9e92acd1a7c0e367a8f8803a26fcc422aa2cfd390bd2090cc9fd9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
