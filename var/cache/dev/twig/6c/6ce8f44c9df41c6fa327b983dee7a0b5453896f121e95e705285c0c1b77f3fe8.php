<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_7c4aaa032cf9f206f23352bc81a655f19fba89d099dc7dd864514d6cbeaa3a24 extends Twig_Template
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
        $__internal_6d762f4ba29f53bc068f9aa62fb63a91297b5f13a3a44b42bcc65c05e873142a = $this->env->getExtension("native_profiler");
        $__internal_6d762f4ba29f53bc068f9aa62fb63a91297b5f13a3a44b42bcc65c05e873142a->enter($__internal_6d762f4ba29f53bc068f9aa62fb63a91297b5f13a3a44b42bcc65c05e873142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_6d762f4ba29f53bc068f9aa62fb63a91297b5f13a3a44b42bcc65c05e873142a->leave($__internal_6d762f4ba29f53bc068f9aa62fb63a91297b5f13a3a44b42bcc65c05e873142a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
