<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7033b9769f91d000e3bdf6b36b3018efcae5820444f7a587bcfd44fc3cea0b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c5f1ad147ca1da4cbff1292ce83698e05f2e10e3947bd9be75d47b8c9073cc88 = $this->env->getExtension("native_profiler");
        $__internal_c5f1ad147ca1da4cbff1292ce83698e05f2e10e3947bd9be75d47b8c9073cc88->enter($__internal_c5f1ad147ca1da4cbff1292ce83698e05f2e10e3947bd9be75d47b8c9073cc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f1ad147ca1da4cbff1292ce83698e05f2e10e3947bd9be75d47b8c9073cc88->leave($__internal_c5f1ad147ca1da4cbff1292ce83698e05f2e10e3947bd9be75d47b8c9073cc88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a57ae233248e89431b3e4d5fe7d21a2914cef4d4d3038326d8868ba9edb0a2d7 = $this->env->getExtension("native_profiler");
        $__internal_a57ae233248e89431b3e4d5fe7d21a2914cef4d4d3038326d8868ba9edb0a2d7->enter($__internal_a57ae233248e89431b3e4d5fe7d21a2914cef4d4d3038326d8868ba9edb0a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a57ae233248e89431b3e4d5fe7d21a2914cef4d4d3038326d8868ba9edb0a2d7->leave($__internal_a57ae233248e89431b3e4d5fe7d21a2914cef4d4d3038326d8868ba9edb0a2d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
