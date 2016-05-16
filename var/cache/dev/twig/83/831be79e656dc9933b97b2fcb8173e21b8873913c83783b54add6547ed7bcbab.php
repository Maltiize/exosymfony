<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_783f952f9c35fb841b2d837994a23f23916539022dc681304a17387caad3004c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_fc527cf9c6e79f3c2d80bdd9eff84b3fe53debc1f20c19927f7b391f3d85a708 = $this->env->getExtension("native_profiler");
        $__internal_fc527cf9c6e79f3c2d80bdd9eff84b3fe53debc1f20c19927f7b391f3d85a708->enter($__internal_fc527cf9c6e79f3c2d80bdd9eff84b3fe53debc1f20c19927f7b391f3d85a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc527cf9c6e79f3c2d80bdd9eff84b3fe53debc1f20c19927f7b391f3d85a708->leave($__internal_fc527cf9c6e79f3c2d80bdd9eff84b3fe53debc1f20c19927f7b391f3d85a708_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ec270c484efd19a81e892fd5007b61106c18b039bf11526b9e8809d444c1f01 = $this->env->getExtension("native_profiler");
        $__internal_2ec270c484efd19a81e892fd5007b61106c18b039bf11526b9e8809d444c1f01->enter($__internal_2ec270c484efd19a81e892fd5007b61106c18b039bf11526b9e8809d444c1f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2ec270c484efd19a81e892fd5007b61106c18b039bf11526b9e8809d444c1f01->leave($__internal_2ec270c484efd19a81e892fd5007b61106c18b039bf11526b9e8809d444c1f01_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
