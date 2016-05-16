<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_faa4a4a34f229163d60c6e0690743f7f2d226a08656b4d2a4bf9a08831af4c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3501db16bfc094b7962a319521b0a46602f5907b8e488964bb4886ed1253ff32 = $this->env->getExtension("native_profiler");
        $__internal_3501db16bfc094b7962a319521b0a46602f5907b8e488964bb4886ed1253ff32->enter($__internal_3501db16bfc094b7962a319521b0a46602f5907b8e488964bb4886ed1253ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3501db16bfc094b7962a319521b0a46602f5907b8e488964bb4886ed1253ff32->leave($__internal_3501db16bfc094b7962a319521b0a46602f5907b8e488964bb4886ed1253ff32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08a468102f661fe18ee1b54d3d7991fa3e9546c4ca04f004e0d0bfe111e64705 = $this->env->getExtension("native_profiler");
        $__internal_08a468102f661fe18ee1b54d3d7991fa3e9546c4ca04f004e0d0bfe111e64705->enter($__internal_08a468102f661fe18ee1b54d3d7991fa3e9546c4ca04f004e0d0bfe111e64705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08a468102f661fe18ee1b54d3d7991fa3e9546c4ca04f004e0d0bfe111e64705->leave($__internal_08a468102f661fe18ee1b54d3d7991fa3e9546c4ca04f004e0d0bfe111e64705_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_214a53f9f2a7e68f0061c88c7e7ba5cb28555b8581a76b3771a22defbe26c3cf = $this->env->getExtension("native_profiler");
        $__internal_214a53f9f2a7e68f0061c88c7e7ba5cb28555b8581a76b3771a22defbe26c3cf->enter($__internal_214a53f9f2a7e68f0061c88c7e7ba5cb28555b8581a76b3771a22defbe26c3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_214a53f9f2a7e68f0061c88c7e7ba5cb28555b8581a76b3771a22defbe26c3cf->leave($__internal_214a53f9f2a7e68f0061c88c7e7ba5cb28555b8581a76b3771a22defbe26c3cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74f0ce04dff804ea6b679d33a576e2e9631c94b21d387b9dce69acd708a7448b = $this->env->getExtension("native_profiler");
        $__internal_74f0ce04dff804ea6b679d33a576e2e9631c94b21d387b9dce69acd708a7448b->enter($__internal_74f0ce04dff804ea6b679d33a576e2e9631c94b21d387b9dce69acd708a7448b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_74f0ce04dff804ea6b679d33a576e2e9631c94b21d387b9dce69acd708a7448b->leave($__internal_74f0ce04dff804ea6b679d33a576e2e9631c94b21d387b9dce69acd708a7448b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
