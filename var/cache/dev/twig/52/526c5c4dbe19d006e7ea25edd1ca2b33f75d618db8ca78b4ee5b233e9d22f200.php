<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_c7a2b1ec1e36aa6850e82fc15b437cc08ac07ecf1ff96e5e205b895891b43cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_1dd18c3bd12e2c971ca4215a6e753ff032f513547c5a15c1f6a5d4dc15ee0684 = $this->env->getExtension("native_profiler");
        $__internal_1dd18c3bd12e2c971ca4215a6e753ff032f513547c5a15c1f6a5d4dc15ee0684->enter($__internal_1dd18c3bd12e2c971ca4215a6e753ff032f513547c5a15c1f6a5d4dc15ee0684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd18c3bd12e2c971ca4215a6e753ff032f513547c5a15c1f6a5d4dc15ee0684->leave($__internal_1dd18c3bd12e2c971ca4215a6e753ff032f513547c5a15c1f6a5d4dc15ee0684_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e6261368a23e6d296682f73ea7f13fddeb8e1f0f87ed4c592d1565187eb3119 = $this->env->getExtension("native_profiler");
        $__internal_6e6261368a23e6d296682f73ea7f13fddeb8e1f0f87ed4c592d1565187eb3119->enter($__internal_6e6261368a23e6d296682f73ea7f13fddeb8e1f0f87ed4c592d1565187eb3119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6e6261368a23e6d296682f73ea7f13fddeb8e1f0f87ed4c592d1565187eb3119->leave($__internal_6e6261368a23e6d296682f73ea7f13fddeb8e1f0f87ed4c592d1565187eb3119_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
