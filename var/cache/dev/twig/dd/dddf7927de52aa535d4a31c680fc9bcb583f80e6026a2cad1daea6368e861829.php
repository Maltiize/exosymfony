<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_4bea75ea11b620c3dd0a0548f74e3d04d5c577e27819add3d801c646dd2f2e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_0cb632ec1344af0b36a99fa13b6239959aeffdc97cac5c4b24c2196616382ba8 = $this->env->getExtension("native_profiler");
        $__internal_0cb632ec1344af0b36a99fa13b6239959aeffdc97cac5c4b24c2196616382ba8->enter($__internal_0cb632ec1344af0b36a99fa13b6239959aeffdc97cac5c4b24c2196616382ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb632ec1344af0b36a99fa13b6239959aeffdc97cac5c4b24c2196616382ba8->leave($__internal_0cb632ec1344af0b36a99fa13b6239959aeffdc97cac5c4b24c2196616382ba8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_873680ede420cfceffd456983aced3e18e485c25587fa1c4db850ac5266c7703 = $this->env->getExtension("native_profiler");
        $__internal_873680ede420cfceffd456983aced3e18e485c25587fa1c4db850ac5266c7703->enter($__internal_873680ede420cfceffd456983aced3e18e485c25587fa1c4db850ac5266c7703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_873680ede420cfceffd456983aced3e18e485c25587fa1c4db850ac5266c7703->leave($__internal_873680ede420cfceffd456983aced3e18e485c25587fa1c4db850ac5266c7703_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
