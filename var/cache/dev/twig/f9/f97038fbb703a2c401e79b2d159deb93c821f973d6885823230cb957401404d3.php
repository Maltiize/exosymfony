<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9a857b3d6ad45803eebac37804fff5db048c34470cb01f164c56898e320488b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c2d95d03fc73ef88f06f2d00c0e620ebb3821147c1fbb334ba0afed7f4accf8e = $this->env->getExtension("native_profiler");
        $__internal_c2d95d03fc73ef88f06f2d00c0e620ebb3821147c1fbb334ba0afed7f4accf8e->enter($__internal_c2d95d03fc73ef88f06f2d00c0e620ebb3821147c1fbb334ba0afed7f4accf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d95d03fc73ef88f06f2d00c0e620ebb3821147c1fbb334ba0afed7f4accf8e->leave($__internal_c2d95d03fc73ef88f06f2d00c0e620ebb3821147c1fbb334ba0afed7f4accf8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c147418602b6466a41603ff57d79466f31552757a86c229aed9262bc58cea471 = $this->env->getExtension("native_profiler");
        $__internal_c147418602b6466a41603ff57d79466f31552757a86c229aed9262bc58cea471->enter($__internal_c147418602b6466a41603ff57d79466f31552757a86c229aed9262bc58cea471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c147418602b6466a41603ff57d79466f31552757a86c229aed9262bc58cea471->leave($__internal_c147418602b6466a41603ff57d79466f31552757a86c229aed9262bc58cea471_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
