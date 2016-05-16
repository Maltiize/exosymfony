<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_ad442a2a9118d40a0923641642e7ac1da9d67df0ab1e47f50da318ccd282e283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_4d510cee1cc2289ce47455bf06f0f78fdc56c6a19cf3414c1857e2e7cd9541ba = $this->env->getExtension("native_profiler");
        $__internal_4d510cee1cc2289ce47455bf06f0f78fdc56c6a19cf3414c1857e2e7cd9541ba->enter($__internal_4d510cee1cc2289ce47455bf06f0f78fdc56c6a19cf3414c1857e2e7cd9541ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d510cee1cc2289ce47455bf06f0f78fdc56c6a19cf3414c1857e2e7cd9541ba->leave($__internal_4d510cee1cc2289ce47455bf06f0f78fdc56c6a19cf3414c1857e2e7cd9541ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bd5b43f62726319de3b8a52d919be0f2608a0cc78f4eaac9c4396924d3fa065 = $this->env->getExtension("native_profiler");
        $__internal_7bd5b43f62726319de3b8a52d919be0f2608a0cc78f4eaac9c4396924d3fa065->enter($__internal_7bd5b43f62726319de3b8a52d919be0f2608a0cc78f4eaac9c4396924d3fa065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7bd5b43f62726319de3b8a52d919be0f2608a0cc78f4eaac9c4396924d3fa065->leave($__internal_7bd5b43f62726319de3b8a52d919be0f2608a0cc78f4eaac9c4396924d3fa065_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
