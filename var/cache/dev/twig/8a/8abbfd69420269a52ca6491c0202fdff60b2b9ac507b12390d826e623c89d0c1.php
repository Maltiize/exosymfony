<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_30b3962c20b9c1b1a6d2200a00f9825e8916b32de03a14b40b1a0ec91e18a54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_575dce2d96e5dd9309d6346265d16909c296ac9a3c515d44da0ebfa61a15166f = $this->env->getExtension("native_profiler");
        $__internal_575dce2d96e5dd9309d6346265d16909c296ac9a3c515d44da0ebfa61a15166f->enter($__internal_575dce2d96e5dd9309d6346265d16909c296ac9a3c515d44da0ebfa61a15166f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_575dce2d96e5dd9309d6346265d16909c296ac9a3c515d44da0ebfa61a15166f->leave($__internal_575dce2d96e5dd9309d6346265d16909c296ac9a3c515d44da0ebfa61a15166f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_040d93eda9ce0a9b367e3ed62bfa5c45b0d641d3f8e1ff14a4b3d5dcb1651ad2 = $this->env->getExtension("native_profiler");
        $__internal_040d93eda9ce0a9b367e3ed62bfa5c45b0d641d3f8e1ff14a4b3d5dcb1651ad2->enter($__internal_040d93eda9ce0a9b367e3ed62bfa5c45b0d641d3f8e1ff14a4b3d5dcb1651ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_040d93eda9ce0a9b367e3ed62bfa5c45b0d641d3f8e1ff14a4b3d5dcb1651ad2->leave($__internal_040d93eda9ce0a9b367e3ed62bfa5c45b0d641d3f8e1ff14a4b3d5dcb1651ad2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
