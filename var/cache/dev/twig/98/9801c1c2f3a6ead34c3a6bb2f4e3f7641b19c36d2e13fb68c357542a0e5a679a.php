<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_7fc5a230d850caf764b904872bae890ba22208e9ff1e1d105307171dcd901165 extends Twig_Template
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
        $__internal_ee2e008e921b713677ccf46227ec5c87f8fdfe9ea6acd41e30ea13f831203e25 = $this->env->getExtension("native_profiler");
        $__internal_ee2e008e921b713677ccf46227ec5c87f8fdfe9ea6acd41e30ea13f831203e25->enter($__internal_ee2e008e921b713677ccf46227ec5c87f8fdfe9ea6acd41e30ea13f831203e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ee2e008e921b713677ccf46227ec5c87f8fdfe9ea6acd41e30ea13f831203e25->leave($__internal_ee2e008e921b713677ccf46227ec5c87f8fdfe9ea6acd41e30ea13f831203e25_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_24effdbb8a079d5c2c80edcb71167b32407dda17b2e16ebae166d5ec43b9a975 = $this->env->getExtension("native_profiler");
        $__internal_24effdbb8a079d5c2c80edcb71167b32407dda17b2e16ebae166d5ec43b9a975->enter($__internal_24effdbb8a079d5c2c80edcb71167b32407dda17b2e16ebae166d5ec43b9a975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_24effdbb8a079d5c2c80edcb71167b32407dda17b2e16ebae166d5ec43b9a975->leave($__internal_24effdbb8a079d5c2c80edcb71167b32407dda17b2e16ebae166d5ec43b9a975_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_575e1de09b532f23a5f5e0241b212eaddd698bae3f0b8fc81866261055489441 = $this->env->getExtension("native_profiler");
        $__internal_575e1de09b532f23a5f5e0241b212eaddd698bae3f0b8fc81866261055489441->enter($__internal_575e1de09b532f23a5f5e0241b212eaddd698bae3f0b8fc81866261055489441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_575e1de09b532f23a5f5e0241b212eaddd698bae3f0b8fc81866261055489441->leave($__internal_575e1de09b532f23a5f5e0241b212eaddd698bae3f0b8fc81866261055489441_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e000c6345fe10525a6725b861209abc6b4f064c46f33755c1b2a852dda6f0644 = $this->env->getExtension("native_profiler");
        $__internal_e000c6345fe10525a6725b861209abc6b4f064c46f33755c1b2a852dda6f0644->enter($__internal_e000c6345fe10525a6725b861209abc6b4f064c46f33755c1b2a852dda6f0644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e000c6345fe10525a6725b861209abc6b4f064c46f33755c1b2a852dda6f0644->leave($__internal_e000c6345fe10525a6725b861209abc6b4f064c46f33755c1b2a852dda6f0644_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
