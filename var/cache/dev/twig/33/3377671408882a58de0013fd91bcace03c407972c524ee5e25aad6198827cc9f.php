<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c6f45a7d6689a1ecf84138b516a4aab0b1207a07a844c649eaf97dd4631beaf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_2555e03c8a36dba23eb4fe976e920842c5b7e650fef0145de457d546c7f8a627 = $this->env->getExtension("native_profiler");
        $__internal_2555e03c8a36dba23eb4fe976e920842c5b7e650fef0145de457d546c7f8a627->enter($__internal_2555e03c8a36dba23eb4fe976e920842c5b7e650fef0145de457d546c7f8a627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2555e03c8a36dba23eb4fe976e920842c5b7e650fef0145de457d546c7f8a627->leave($__internal_2555e03c8a36dba23eb4fe976e920842c5b7e650fef0145de457d546c7f8a627_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c39ff3cfdeb4912028ac0d284cf583ff88dcb90f7d233331ac9895fc1170b2f = $this->env->getExtension("native_profiler");
        $__internal_0c39ff3cfdeb4912028ac0d284cf583ff88dcb90f7d233331ac9895fc1170b2f->enter($__internal_0c39ff3cfdeb4912028ac0d284cf583ff88dcb90f7d233331ac9895fc1170b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_0c39ff3cfdeb4912028ac0d284cf583ff88dcb90f7d233331ac9895fc1170b2f->leave($__internal_0c39ff3cfdeb4912028ac0d284cf583ff88dcb90f7d233331ac9895fc1170b2f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
