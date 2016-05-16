<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_46af5c70fd3fbf6db9295dc874c92c7c8e40348009d38b59ed8b743847c978b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_14652e5eee785fcc7588ed9848c304ca1916bd6ad415cfe51c0b3b06f1713f9c = $this->env->getExtension("native_profiler");
        $__internal_14652e5eee785fcc7588ed9848c304ca1916bd6ad415cfe51c0b3b06f1713f9c->enter($__internal_14652e5eee785fcc7588ed9848c304ca1916bd6ad415cfe51c0b3b06f1713f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14652e5eee785fcc7588ed9848c304ca1916bd6ad415cfe51c0b3b06f1713f9c->leave($__internal_14652e5eee785fcc7588ed9848c304ca1916bd6ad415cfe51c0b3b06f1713f9c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22a721de86d82da18616712a29f61ca3cc6f19e66f5dcfbe9422bebe4d1c13c5 = $this->env->getExtension("native_profiler");
        $__internal_22a721de86d82da18616712a29f61ca3cc6f19e66f5dcfbe9422bebe4d1c13c5->enter($__internal_22a721de86d82da18616712a29f61ca3cc6f19e66f5dcfbe9422bebe4d1c13c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_22a721de86d82da18616712a29f61ca3cc6f19e66f5dcfbe9422bebe4d1c13c5->leave($__internal_22a721de86d82da18616712a29f61ca3cc6f19e66f5dcfbe9422bebe4d1c13c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
