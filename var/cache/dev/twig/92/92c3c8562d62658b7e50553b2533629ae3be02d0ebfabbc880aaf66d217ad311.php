<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0a5d6b3c6e1a79949f1a47faa2ad53648caa25b15873584aa2316471f241222f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_671080a3a4476b82be6e779f2b887c690b341134e0ef27a22208be107d83f1ff = $this->env->getExtension("native_profiler");
        $__internal_671080a3a4476b82be6e779f2b887c690b341134e0ef27a22208be107d83f1ff->enter($__internal_671080a3a4476b82be6e779f2b887c690b341134e0ef27a22208be107d83f1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_671080a3a4476b82be6e779f2b887c690b341134e0ef27a22208be107d83f1ff->leave($__internal_671080a3a4476b82be6e779f2b887c690b341134e0ef27a22208be107d83f1ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e97a8829295887b8c37f1ef327efcf9e592a2318010144aeb8f0f67af8090685 = $this->env->getExtension("native_profiler");
        $__internal_e97a8829295887b8c37f1ef327efcf9e592a2318010144aeb8f0f67af8090685->enter($__internal_e97a8829295887b8c37f1ef327efcf9e592a2318010144aeb8f0f67af8090685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e97a8829295887b8c37f1ef327efcf9e592a2318010144aeb8f0f67af8090685->leave($__internal_e97a8829295887b8c37f1ef327efcf9e592a2318010144aeb8f0f67af8090685_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
