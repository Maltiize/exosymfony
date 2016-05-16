<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_75f2b94346e298f6e346fdacac6b706b52f1fb1aa2c4790be8cbe85cbe06c5e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2bb1a69ef8d83781548c9b7c283c1a528b4f52e50b03e0320c807abc39534849 = $this->env->getExtension("native_profiler");
        $__internal_2bb1a69ef8d83781548c9b7c283c1a528b4f52e50b03e0320c807abc39534849->enter($__internal_2bb1a69ef8d83781548c9b7c283c1a528b4f52e50b03e0320c807abc39534849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb1a69ef8d83781548c9b7c283c1a528b4f52e50b03e0320c807abc39534849->leave($__internal_2bb1a69ef8d83781548c9b7c283c1a528b4f52e50b03e0320c807abc39534849_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_072ff997eae9615933337f8b201992f8117aa2de0fc6ee86932cff297988394f = $this->env->getExtension("native_profiler");
        $__internal_072ff997eae9615933337f8b201992f8117aa2de0fc6ee86932cff297988394f->enter($__internal_072ff997eae9615933337f8b201992f8117aa2de0fc6ee86932cff297988394f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_072ff997eae9615933337f8b201992f8117aa2de0fc6ee86932cff297988394f->leave($__internal_072ff997eae9615933337f8b201992f8117aa2de0fc6ee86932cff297988394f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
