<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ee503253c4770c7a575fdca9afdbc029b2db659ce7c073eb327670e4e110a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_82447902148da986cd21660456e7b3a5478da61998459dc6c15422cbd2dd24a7 = $this->env->getExtension("native_profiler");
        $__internal_82447902148da986cd21660456e7b3a5478da61998459dc6c15422cbd2dd24a7->enter($__internal_82447902148da986cd21660456e7b3a5478da61998459dc6c15422cbd2dd24a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82447902148da986cd21660456e7b3a5478da61998459dc6c15422cbd2dd24a7->leave($__internal_82447902148da986cd21660456e7b3a5478da61998459dc6c15422cbd2dd24a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55214f1ed1793d4608c661f984c8a0f74b5dea2530343174aabf01006f6ecee3 = $this->env->getExtension("native_profiler");
        $__internal_55214f1ed1793d4608c661f984c8a0f74b5dea2530343174aabf01006f6ecee3->enter($__internal_55214f1ed1793d4608c661f984c8a0f74b5dea2530343174aabf01006f6ecee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_55214f1ed1793d4608c661f984c8a0f74b5dea2530343174aabf01006f6ecee3->leave($__internal_55214f1ed1793d4608c661f984c8a0f74b5dea2530343174aabf01006f6ecee3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
