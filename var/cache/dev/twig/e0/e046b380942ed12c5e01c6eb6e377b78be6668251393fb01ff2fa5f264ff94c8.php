<?php

/* :adress:deleteAddr.html.twig */
class __TwigTemplate_b97f6925e962ac8c3b52ae1a75715183b8f7605048093e13f2b9df73a1d06c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adress:deleteAddr.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a67a1a8d3a2c85f30e662cc1f14a20040c8a6c7bd286aa4ddd7be516394a74a = $this->env->getExtension("native_profiler");
        $__internal_4a67a1a8d3a2c85f30e662cc1f14a20040c8a6c7bd286aa4ddd7be516394a74a->enter($__internal_4a67a1a8d3a2c85f30e662cc1f14a20040c8a6c7bd286aa4ddd7be516394a74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adress:deleteAddr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a67a1a8d3a2c85f30e662cc1f14a20040c8a6c7bd286aa4ddd7be516394a74a->leave($__internal_4a67a1a8d3a2c85f30e662cc1f14a20040c8a6c7bd286aa4ddd7be516394a74a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff205d4c53d53a8d77b481228d50a2c0564c7d47594eca9c9966b5c60a8cd658 = $this->env->getExtension("native_profiler");
        $__internal_ff205d4c53d53a8d77b481228d50a2c0564c7d47594eca9c9966b5c60a8cd658->enter($__internal_ff205d4c53d53a8d77b481228d50a2c0564c7d47594eca9c9966b5c60a8cd658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Le contact a bien été supprimé </br>
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrBookIndex", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"> revenir au carnet </a> </br> </br>
";
        
        $__internal_ff205d4c53d53a8d77b481228d50a2c0564c7d47594eca9c9966b5c60a8cd658->leave($__internal_ff205d4c53d53a8d77b481228d50a2c0564c7d47594eca9c9966b5c60a8cd658_prof);

    }

    public function getTemplateName()
    {
        return ":adress:deleteAddr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* Le contact a bien été supprimé </br>*/
/* <a href="{{ path('addrBookIndex', {'id': id}) }}"> revenir au carnet </a> </br> </br>*/
/* {% endblock %}*/
/* */
