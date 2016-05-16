<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f7b9432add9391bf13469ba4b082527b3067ae2812a632fed2c9dd9cea0de932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_332b3b750f5307dc2953e43f9fb0ceeea9509728e855068468a1348939800473 = $this->env->getExtension("native_profiler");
        $__internal_332b3b750f5307dc2953e43f9fb0ceeea9509728e855068468a1348939800473->enter($__internal_332b3b750f5307dc2953e43f9fb0ceeea9509728e855068468a1348939800473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_332b3b750f5307dc2953e43f9fb0ceeea9509728e855068468a1348939800473->leave($__internal_332b3b750f5307dc2953e43f9fb0ceeea9509728e855068468a1348939800473_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7a02b92ad6857e57d70ed786a3dce93cf94f0ef48de0b384b7cfe46b196f4b9f = $this->env->getExtension("native_profiler");
        $__internal_7a02b92ad6857e57d70ed786a3dce93cf94f0ef48de0b384b7cfe46b196f4b9f->enter($__internal_7a02b92ad6857e57d70ed786a3dce93cf94f0ef48de0b384b7cfe46b196f4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7a02b92ad6857e57d70ed786a3dce93cf94f0ef48de0b384b7cfe46b196f4b9f->leave($__internal_7a02b92ad6857e57d70ed786a3dce93cf94f0ef48de0b384b7cfe46b196f4b9f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_69bfe33a4d09d3334f05156c2797c30811257fe4063328c1f469dfd1af26a0ae = $this->env->getExtension("native_profiler");
        $__internal_69bfe33a4d09d3334f05156c2797c30811257fe4063328c1f469dfd1af26a0ae->enter($__internal_69bfe33a4d09d3334f05156c2797c30811257fe4063328c1f469dfd1af26a0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_69bfe33a4d09d3334f05156c2797c30811257fe4063328c1f469dfd1af26a0ae->leave($__internal_69bfe33a4d09d3334f05156c2797c30811257fe4063328c1f469dfd1af26a0ae_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9754bbc5e4ccfe52086f84faf0983e80e92877482d9d0a2dc8931bee4d282bff = $this->env->getExtension("native_profiler");
        $__internal_9754bbc5e4ccfe52086f84faf0983e80e92877482d9d0a2dc8931bee4d282bff->enter($__internal_9754bbc5e4ccfe52086f84faf0983e80e92877482d9d0a2dc8931bee4d282bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9754bbc5e4ccfe52086f84faf0983e80e92877482d9d0a2dc8931bee4d282bff->leave($__internal_9754bbc5e4ccfe52086f84faf0983e80e92877482d9d0a2dc8931bee4d282bff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
