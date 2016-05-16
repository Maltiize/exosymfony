<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_62a8a60824c531db67e4d4a3c21f0df65d90b80490c36074ba50b8343eb2fd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4645871766fca13db649c6f396799069a6bdc54050a6b4e1d400e9e93973abeb = $this->env->getExtension("native_profiler");
        $__internal_4645871766fca13db649c6f396799069a6bdc54050a6b4e1d400e9e93973abeb->enter($__internal_4645871766fca13db649c6f396799069a6bdc54050a6b4e1d400e9e93973abeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4645871766fca13db649c6f396799069a6bdc54050a6b4e1d400e9e93973abeb->leave($__internal_4645871766fca13db649c6f396799069a6bdc54050a6b4e1d400e9e93973abeb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92d547e60022f023d12178cbc5a52a37ddf9d215298091f2df5e310f6e1bc3c8 = $this->env->getExtension("native_profiler");
        $__internal_92d547e60022f023d12178cbc5a52a37ddf9d215298091f2df5e310f6e1bc3c8->enter($__internal_92d547e60022f023d12178cbc5a52a37ddf9d215298091f2df5e310f6e1bc3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_92d547e60022f023d12178cbc5a52a37ddf9d215298091f2df5e310f6e1bc3c8->leave($__internal_92d547e60022f023d12178cbc5a52a37ddf9d215298091f2df5e310f6e1bc3c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
