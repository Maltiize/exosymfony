<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a220dc1c87aeea53b5e5a436ad9cbc8be3765663f3ffd9732c401c2fa70c7103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_8f95ac5ef5823faf833b5f19798b851f9ac1f380edb1021571a41137751a0ece = $this->env->getExtension("native_profiler");
        $__internal_8f95ac5ef5823faf833b5f19798b851f9ac1f380edb1021571a41137751a0ece->enter($__internal_8f95ac5ef5823faf833b5f19798b851f9ac1f380edb1021571a41137751a0ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f95ac5ef5823faf833b5f19798b851f9ac1f380edb1021571a41137751a0ece->leave($__internal_8f95ac5ef5823faf833b5f19798b851f9ac1f380edb1021571a41137751a0ece_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53ed7ab34e6034f3e19a5f4bf991c6c0410444ed2e9395551179a14908b26f09 = $this->env->getExtension("native_profiler");
        $__internal_53ed7ab34e6034f3e19a5f4bf991c6c0410444ed2e9395551179a14908b26f09->enter($__internal_53ed7ab34e6034f3e19a5f4bf991c6c0410444ed2e9395551179a14908b26f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_53ed7ab34e6034f3e19a5f4bf991c6c0410444ed2e9395551179a14908b26f09->leave($__internal_53ed7ab34e6034f3e19a5f4bf991c6c0410444ed2e9395551179a14908b26f09_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
