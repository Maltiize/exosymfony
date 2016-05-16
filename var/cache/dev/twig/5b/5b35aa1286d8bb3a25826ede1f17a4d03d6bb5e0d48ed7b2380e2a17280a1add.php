<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bc1b5a6495eb97dd61d2b29f78f49d64b29febe207917bac309235cb99ffa909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0d3567bb7cda84d184686bce697dd48bc284cf716aa29018b82d786f32cddb69 = $this->env->getExtension("native_profiler");
        $__internal_0d3567bb7cda84d184686bce697dd48bc284cf716aa29018b82d786f32cddb69->enter($__internal_0d3567bb7cda84d184686bce697dd48bc284cf716aa29018b82d786f32cddb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d3567bb7cda84d184686bce697dd48bc284cf716aa29018b82d786f32cddb69->leave($__internal_0d3567bb7cda84d184686bce697dd48bc284cf716aa29018b82d786f32cddb69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e44b97a34072e0352f9232282ea25ce7b37692c6a4fe3613ae6ff05c8e0de04 = $this->env->getExtension("native_profiler");
        $__internal_9e44b97a34072e0352f9232282ea25ce7b37692c6a4fe3613ae6ff05c8e0de04->enter($__internal_9e44b97a34072e0352f9232282ea25ce7b37692c6a4fe3613ae6ff05c8e0de04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e44b97a34072e0352f9232282ea25ce7b37692c6a4fe3613ae6ff05c8e0de04->leave($__internal_9e44b97a34072e0352f9232282ea25ce7b37692c6a4fe3613ae6ff05c8e0de04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9bc4e26353af8094d6de4190161e8cb39fade0a622544292c6f03adb81e50eb = $this->env->getExtension("native_profiler");
        $__internal_c9bc4e26353af8094d6de4190161e8cb39fade0a622544292c6f03adb81e50eb->enter($__internal_c9bc4e26353af8094d6de4190161e8cb39fade0a622544292c6f03adb81e50eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9bc4e26353af8094d6de4190161e8cb39fade0a622544292c6f03adb81e50eb->leave($__internal_c9bc4e26353af8094d6de4190161e8cb39fade0a622544292c6f03adb81e50eb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6004a97ca59530eff999b410fbc9815ec66a0ab9aa7220e0409ca1fe3ee5d337 = $this->env->getExtension("native_profiler");
        $__internal_6004a97ca59530eff999b410fbc9815ec66a0ab9aa7220e0409ca1fe3ee5d337->enter($__internal_6004a97ca59530eff999b410fbc9815ec66a0ab9aa7220e0409ca1fe3ee5d337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6004a97ca59530eff999b410fbc9815ec66a0ab9aa7220e0409ca1fe3ee5d337->leave($__internal_6004a97ca59530eff999b410fbc9815ec66a0ab9aa7220e0409ca1fe3ee5d337_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
