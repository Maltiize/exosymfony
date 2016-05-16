<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9b84efccdca74a81718a18a5cb860b74da4af92cee888a3462aabad657add342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_ee1f6884cef0e1e5d5f031256194c9164a50aad651936ea6ea828a2d44df3d63 = $this->env->getExtension("native_profiler");
        $__internal_ee1f6884cef0e1e5d5f031256194c9164a50aad651936ea6ea828a2d44df3d63->enter($__internal_ee1f6884cef0e1e5d5f031256194c9164a50aad651936ea6ea828a2d44df3d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1f6884cef0e1e5d5f031256194c9164a50aad651936ea6ea828a2d44df3d63->leave($__internal_ee1f6884cef0e1e5d5f031256194c9164a50aad651936ea6ea828a2d44df3d63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_137fe07214ca780172118745c056a5500f9562bfb785c0d9c336e0c509b25dc0 = $this->env->getExtension("native_profiler");
        $__internal_137fe07214ca780172118745c056a5500f9562bfb785c0d9c336e0c509b25dc0->enter($__internal_137fe07214ca780172118745c056a5500f9562bfb785c0d9c336e0c509b25dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_137fe07214ca780172118745c056a5500f9562bfb785c0d9c336e0c509b25dc0->leave($__internal_137fe07214ca780172118745c056a5500f9562bfb785c0d9c336e0c509b25dc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
