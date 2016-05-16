<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5f3e474287ffcc52b469fcf88e493b294dbeb3c4501f7106ca65c2eb0d57b9a6 extends Twig_Template
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
        $__internal_6cc25b376372123cb21e97ce62bcec85bf0840ac47ca720d8e24b729a3cc6c3c = $this->env->getExtension("native_profiler");
        $__internal_6cc25b376372123cb21e97ce62bcec85bf0840ac47ca720d8e24b729a3cc6c3c->enter($__internal_6cc25b376372123cb21e97ce62bcec85bf0840ac47ca720d8e24b729a3cc6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6cc25b376372123cb21e97ce62bcec85bf0840ac47ca720d8e24b729a3cc6c3c->leave($__internal_6cc25b376372123cb21e97ce62bcec85bf0840ac47ca720d8e24b729a3cc6c3c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_94b1a69421cb8ee745cfd0a5fb791d346bc49aa4c920cf08f92056bf63fd2083 = $this->env->getExtension("native_profiler");
        $__internal_94b1a69421cb8ee745cfd0a5fb791d346bc49aa4c920cf08f92056bf63fd2083->enter($__internal_94b1a69421cb8ee745cfd0a5fb791d346bc49aa4c920cf08f92056bf63fd2083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_94b1a69421cb8ee745cfd0a5fb791d346bc49aa4c920cf08f92056bf63fd2083->leave($__internal_94b1a69421cb8ee745cfd0a5fb791d346bc49aa4c920cf08f92056bf63fd2083_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4bde11959683c97b2b1ba0993b392d15cd32e7578182c313e43b483f4e853bb9 = $this->env->getExtension("native_profiler");
        $__internal_4bde11959683c97b2b1ba0993b392d15cd32e7578182c313e43b483f4e853bb9->enter($__internal_4bde11959683c97b2b1ba0993b392d15cd32e7578182c313e43b483f4e853bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4bde11959683c97b2b1ba0993b392d15cd32e7578182c313e43b483f4e853bb9->leave($__internal_4bde11959683c97b2b1ba0993b392d15cd32e7578182c313e43b483f4e853bb9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e1ebc80db8edcbe88a6b6b2ee7484b6a50e9e7e64de0a2ea8d88e5a35ccc5aa4 = $this->env->getExtension("native_profiler");
        $__internal_e1ebc80db8edcbe88a6b6b2ee7484b6a50e9e7e64de0a2ea8d88e5a35ccc5aa4->enter($__internal_e1ebc80db8edcbe88a6b6b2ee7484b6a50e9e7e64de0a2ea8d88e5a35ccc5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e1ebc80db8edcbe88a6b6b2ee7484b6a50e9e7e64de0a2ea8d88e5a35ccc5aa4->leave($__internal_e1ebc80db8edcbe88a6b6b2ee7484b6a50e9e7e64de0a2ea8d88e5a35ccc5aa4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
