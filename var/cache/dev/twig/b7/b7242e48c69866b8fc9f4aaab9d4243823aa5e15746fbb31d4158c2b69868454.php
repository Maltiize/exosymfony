<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_a9e36716b3a73efa59e5e575485b3c68149a834493e6cdcd84d3642aecc7b5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_f3d03540207d6e913a7db51d77974edbce39149fd1956966604d28190ba16a63 = $this->env->getExtension("native_profiler");
        $__internal_f3d03540207d6e913a7db51d77974edbce39149fd1956966604d28190ba16a63->enter($__internal_f3d03540207d6e913a7db51d77974edbce39149fd1956966604d28190ba16a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d03540207d6e913a7db51d77974edbce39149fd1956966604d28190ba16a63->leave($__internal_f3d03540207d6e913a7db51d77974edbce39149fd1956966604d28190ba16a63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f69d351967a2ed4828dd02655b18b1f2ef6e644b1a8efd53582437b6a1fc6fa5 = $this->env->getExtension("native_profiler");
        $__internal_f69d351967a2ed4828dd02655b18b1f2ef6e644b1a8efd53582437b6a1fc6fa5->enter($__internal_f69d351967a2ed4828dd02655b18b1f2ef6e644b1a8efd53582437b6a1fc6fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f69d351967a2ed4828dd02655b18b1f2ef6e644b1a8efd53582437b6a1fc6fa5->leave($__internal_f69d351967a2ed4828dd02655b18b1f2ef6e644b1a8efd53582437b6a1fc6fa5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
