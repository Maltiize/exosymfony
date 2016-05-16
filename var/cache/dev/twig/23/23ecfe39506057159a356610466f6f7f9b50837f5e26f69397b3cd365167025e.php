<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_8b334726cefd4195fcbe5b20dcfb1b95b8aa018ce5eb5665da9a54a333eb8e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c18d2ff8204f7d2314da0a6f97086b66749d23c09a9b88b7ea66852a90a926ba = $this->env->getExtension("native_profiler");
        $__internal_c18d2ff8204f7d2314da0a6f97086b66749d23c09a9b88b7ea66852a90a926ba->enter($__internal_c18d2ff8204f7d2314da0a6f97086b66749d23c09a9b88b7ea66852a90a926ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18d2ff8204f7d2314da0a6f97086b66749d23c09a9b88b7ea66852a90a926ba->leave($__internal_c18d2ff8204f7d2314da0a6f97086b66749d23c09a9b88b7ea66852a90a926ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_859132e9140284528e8bcb83743864d53a1b18ebdf9bff8031b1e3b90d8fd031 = $this->env->getExtension("native_profiler");
        $__internal_859132e9140284528e8bcb83743864d53a1b18ebdf9bff8031b1e3b90d8fd031->enter($__internal_859132e9140284528e8bcb83743864d53a1b18ebdf9bff8031b1e3b90d8fd031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_859132e9140284528e8bcb83743864d53a1b18ebdf9bff8031b1e3b90d8fd031->leave($__internal_859132e9140284528e8bcb83743864d53a1b18ebdf9bff8031b1e3b90d8fd031_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
