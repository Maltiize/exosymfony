<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_eb499a3c7ef7001a82a76e4ddb06c1df114a2faa6a024a7116e0ef2d9b7ddddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0c01e4dd3f94c5f1af91a7a8bff441b47e9b8832c95d220dd3a34b469c0dcd0f = $this->env->getExtension("native_profiler");
        $__internal_0c01e4dd3f94c5f1af91a7a8bff441b47e9b8832c95d220dd3a34b469c0dcd0f->enter($__internal_0c01e4dd3f94c5f1af91a7a8bff441b47e9b8832c95d220dd3a34b469c0dcd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c01e4dd3f94c5f1af91a7a8bff441b47e9b8832c95d220dd3a34b469c0dcd0f->leave($__internal_0c01e4dd3f94c5f1af91a7a8bff441b47e9b8832c95d220dd3a34b469c0dcd0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d76e0249e0dcc88de4eb892eabaeb77675c6ece7a41bcfaa1dc6ad901927670 = $this->env->getExtension("native_profiler");
        $__internal_6d76e0249e0dcc88de4eb892eabaeb77675c6ece7a41bcfaa1dc6ad901927670->enter($__internal_6d76e0249e0dcc88de4eb892eabaeb77675c6ece7a41bcfaa1dc6ad901927670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6d76e0249e0dcc88de4eb892eabaeb77675c6ece7a41bcfaa1dc6ad901927670->leave($__internal_6d76e0249e0dcc88de4eb892eabaeb77675c6ece7a41bcfaa1dc6ad901927670_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
