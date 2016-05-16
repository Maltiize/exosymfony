<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2510c1917560ae4aa540801d290955df7fabc7001bc6652a350909f3de3857fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27a5af0e533e0ef338948674206064e9385e49cc2f315809d0b653406956a06b = $this->env->getExtension("native_profiler");
        $__internal_27a5af0e533e0ef338948674206064e9385e49cc2f315809d0b653406956a06b->enter($__internal_27a5af0e533e0ef338948674206064e9385e49cc2f315809d0b653406956a06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_27a5af0e533e0ef338948674206064e9385e49cc2f315809d0b653406956a06b->leave($__internal_27a5af0e533e0ef338948674206064e9385e49cc2f315809d0b653406956a06b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
