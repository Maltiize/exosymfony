<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_7d54f22e6feecaf5b4565726008b325e3512865faad807130e902af0dc05e10b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_2d48c7910a4119a5baf30cc7766ec1512199ce5337932caf2ee9f97e34ddee08 = $this->env->getExtension("native_profiler");
        $__internal_2d48c7910a4119a5baf30cc7766ec1512199ce5337932caf2ee9f97e34ddee08->enter($__internal_2d48c7910a4119a5baf30cc7766ec1512199ce5337932caf2ee9f97e34ddee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d48c7910a4119a5baf30cc7766ec1512199ce5337932caf2ee9f97e34ddee08->leave($__internal_2d48c7910a4119a5baf30cc7766ec1512199ce5337932caf2ee9f97e34ddee08_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3a5a11b7a29e467a6f32c12d0f074bc54ed5d11ceb7db6162060d0e0e1f9f12 = $this->env->getExtension("native_profiler");
        $__internal_e3a5a11b7a29e467a6f32c12d0f074bc54ed5d11ceb7db6162060d0e0e1f9f12->enter($__internal_e3a5a11b7a29e467a6f32c12d0f074bc54ed5d11ceb7db6162060d0e0e1f9f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e3a5a11b7a29e467a6f32c12d0f074bc54ed5d11ceb7db6162060d0e0e1f9f12->leave($__internal_e3a5a11b7a29e467a6f32c12d0f074bc54ed5d11ceb7db6162060d0e0e1f9f12_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
