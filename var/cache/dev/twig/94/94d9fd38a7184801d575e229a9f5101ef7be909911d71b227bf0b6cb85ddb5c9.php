<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1b996d8870b5d44ebf37366efbd722d1c36fbd785e2b176135faf8cfc4d67f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1358b3d5ffe8c2afe0f671f0b4f0d17c0e9683a801552b41f4e3e49f3b5c144e = $this->env->getExtension("native_profiler");
        $__internal_1358b3d5ffe8c2afe0f671f0b4f0d17c0e9683a801552b41f4e3e49f3b5c144e->enter($__internal_1358b3d5ffe8c2afe0f671f0b4f0d17c0e9683a801552b41f4e3e49f3b5c144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1358b3d5ffe8c2afe0f671f0b4f0d17c0e9683a801552b41f4e3e49f3b5c144e->leave($__internal_1358b3d5ffe8c2afe0f671f0b4f0d17c0e9683a801552b41f4e3e49f3b5c144e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b515f06dd399a1339e7768316f5b9ca9094647719065cd64bc76025c0050ffc = $this->env->getExtension("native_profiler");
        $__internal_8b515f06dd399a1339e7768316f5b9ca9094647719065cd64bc76025c0050ffc->enter($__internal_8b515f06dd399a1339e7768316f5b9ca9094647719065cd64bc76025c0050ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8b515f06dd399a1339e7768316f5b9ca9094647719065cd64bc76025c0050ffc->leave($__internal_8b515f06dd399a1339e7768316f5b9ca9094647719065cd64bc76025c0050ffc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
