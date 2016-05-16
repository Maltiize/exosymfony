<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3923a565db04145cffec3c58ea3cdaad4c7b9953c4799645547824d6eba20ef9 extends Twig_Template
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
        $__internal_c8766a5b03451b915b7d22993b0bb525e83127ac805fc2177747aecc1202c291 = $this->env->getExtension("native_profiler");
        $__internal_c8766a5b03451b915b7d22993b0bb525e83127ac805fc2177747aecc1202c291->enter($__internal_c8766a5b03451b915b7d22993b0bb525e83127ac805fc2177747aecc1202c291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c8766a5b03451b915b7d22993b0bb525e83127ac805fc2177747aecc1202c291->leave($__internal_c8766a5b03451b915b7d22993b0bb525e83127ac805fc2177747aecc1202c291_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_45c009c178444a4a24bb17b25aaec80084edc12b43fac25896e9062f76ecfa1a = $this->env->getExtension("native_profiler");
        $__internal_45c009c178444a4a24bb17b25aaec80084edc12b43fac25896e9062f76ecfa1a->enter($__internal_45c009c178444a4a24bb17b25aaec80084edc12b43fac25896e9062f76ecfa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_45c009c178444a4a24bb17b25aaec80084edc12b43fac25896e9062f76ecfa1a->leave($__internal_45c009c178444a4a24bb17b25aaec80084edc12b43fac25896e9062f76ecfa1a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_47d833436f7e97878e4d0cbf87b1125ebf70f2d6bc1a4e208c358486356fe572 = $this->env->getExtension("native_profiler");
        $__internal_47d833436f7e97878e4d0cbf87b1125ebf70f2d6bc1a4e208c358486356fe572->enter($__internal_47d833436f7e97878e4d0cbf87b1125ebf70f2d6bc1a4e208c358486356fe572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_47d833436f7e97878e4d0cbf87b1125ebf70f2d6bc1a4e208c358486356fe572->leave($__internal_47d833436f7e97878e4d0cbf87b1125ebf70f2d6bc1a4e208c358486356fe572_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_966ef896f42df99d2031fdc272e52dba84c4009873ea789b4bb42ae0dbaf97f9 = $this->env->getExtension("native_profiler");
        $__internal_966ef896f42df99d2031fdc272e52dba84c4009873ea789b4bb42ae0dbaf97f9->enter($__internal_966ef896f42df99d2031fdc272e52dba84c4009873ea789b4bb42ae0dbaf97f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_966ef896f42df99d2031fdc272e52dba84c4009873ea789b4bb42ae0dbaf97f9->leave($__internal_966ef896f42df99d2031fdc272e52dba84c4009873ea789b4bb42ae0dbaf97f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
