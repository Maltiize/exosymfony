<?php

/* index.html.twig */
class __TwigTemplate_cd5b85ca34283cf0144c5f00c17d8eceb9adcc32d3d0649e103a950109c7deb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d94b5857edf95f88a253e4747f3b3e456645ff95a18292266c9797946291de47 = $this->env->getExtension("native_profiler");
        $__internal_d94b5857edf95f88a253e4747f3b3e456645ff95a18292266c9797946291de47->enter($__internal_d94b5857edf95f88a253e4747f3b3e456645ff95a18292266c9797946291de47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94b5857edf95f88a253e4747f3b3e456645ff95a18292266c9797946291de47->leave($__internal_d94b5857edf95f88a253e4747f3b3e456645ff95a18292266c9797946291de47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75ed200ce73ddad885442a5f1a98480b139be0811150eb29bb20a51f0f77fa4b = $this->env->getExtension("native_profiler");
        $__internal_75ed200ce73ddad885442a5f1a98480b139be0811150eb29bb20a51f0f77fa4b->enter($__internal_75ed200ce73ddad885442a5f1a98480b139be0811150eb29bb20a51f0f77fa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_75ed200ce73ddad885442a5f1a98480b139be0811150eb29bb20a51f0f77fa4b->leave($__internal_75ed200ce73ddad885442a5f1a98480b139be0811150eb29bb20a51f0f77fa4b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cae8b01fa9e9a141c022207200f3e4833386962892ace49cd38ed1b24f7a0d1 = $this->env->getExtension("native_profiler");
        $__internal_9cae8b01fa9e9a141c022207200f3e4833386962892ace49cd38ed1b24f7a0d1->enter($__internal_9cae8b01fa9e9a141c022207200f3e4833386962892ace49cd38ed1b24f7a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["addr"]) {
            // line 7
            echo "        Name book : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "name", array()), "html", null, true);
            echo "
        Id book :";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "id", array()), "html", null, true);
            echo " </br>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrBookDelete", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> delete </a>
        <a href=\" ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrBookIndex", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> see content </a></br> </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addrAddBook");
        echo "\"> add a new book</a>


";
        
        $__internal_9cae8b01fa9e9a141c022207200f3e4833386962892ace49cd38ed1b24f7a0d1->leave($__internal_9cae8b01fa9e9a141c022207200f3e4833386962892ace49cd38ed1b24f7a0d1_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  73 => 10,  69 => 9,  65 => 8,  60 => 7,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Hello {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% for addr in list %}*/
/*         Name book : {{ addr.name }}*/
/*         Id book :{{ addr.id }} </br>*/
/*         <a href="{{ path('addrBookDelete', {'id': addr.id}) }}"> delete </a>*/
/*         <a href=" {{  path('addrBookIndex', {'id': addr.id})}}"> see content </a></br> </br>*/
/*     {% endfor %}*/
/*     <a href="{{ path('addrAddBook')}}"> add a new book</a>*/
/* */
/* */
/* {% endblock %}*/
