<?php

/* adress/deleteAddr.html.twig */
class __TwigTemplate_072a34618139224308c41ffb5a61ab01c0cad653b58f9e5164fed019b29823cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/deleteAddr.html.twig", 1);
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
        $__internal_630f57085cdcdfa538ed494c0db2bf9cbdf158ceb1390df4fd340f0ef997d7af = $this->env->getExtension("native_profiler");
        $__internal_630f57085cdcdfa538ed494c0db2bf9cbdf158ceb1390df4fd340f0ef997d7af->enter($__internal_630f57085cdcdfa538ed494c0db2bf9cbdf158ceb1390df4fd340f0ef997d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/deleteAddr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630f57085cdcdfa538ed494c0db2bf9cbdf158ceb1390df4fd340f0ef997d7af->leave($__internal_630f57085cdcdfa538ed494c0db2bf9cbdf158ceb1390df4fd340f0ef997d7af_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec904d7f29712546cfa411f46cf24f19e60f6300acc34a331be6a7ac78d2c8b7 = $this->env->getExtension("native_profiler");
        $__internal_ec904d7f29712546cfa411f46cf24f19e60f6300acc34a331be6a7ac78d2c8b7->enter($__internal_ec904d7f29712546cfa411f46cf24f19e60f6300acc34a331be6a7ac78d2c8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Le contact a bien été supprimé </br>
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrBookIndex", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"> revenir au carnet </a> </br> </br>
";
        
        $__internal_ec904d7f29712546cfa411f46cf24f19e60f6300acc34a331be6a7ac78d2c8b7->leave($__internal_ec904d7f29712546cfa411f46cf24f19e60f6300acc34a331be6a7ac78d2c8b7_prof);

    }

    public function getTemplateName()
    {
        return "adress/deleteAddr.html.twig";
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
