<?php

/* index.html.twig */
class __TwigTemplate_ff07b85c90d6214d5360afd959c92553eb4a3352ac4be944c17ad90ba9ed0ee2 extends Twig_Template
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
        $__internal_d9268a35bb20fab9ec6b722100a93fc1d7f3580331a623e7542ba268d151c146 = $this->env->getExtension("native_profiler");
        $__internal_d9268a35bb20fab9ec6b722100a93fc1d7f3580331a623e7542ba268d151c146->enter($__internal_d9268a35bb20fab9ec6b722100a93fc1d7f3580331a623e7542ba268d151c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9268a35bb20fab9ec6b722100a93fc1d7f3580331a623e7542ba268d151c146->leave($__internal_d9268a35bb20fab9ec6b722100a93fc1d7f3580331a623e7542ba268d151c146_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa61c521e1ad3449cba23444b3982f6e24d19e1a3bef248787ea18027b25def8 = $this->env->getExtension("native_profiler");
        $__internal_fa61c521e1ad3449cba23444b3982f6e24d19e1a3bef248787ea18027b25def8->enter($__internal_fa61c521e1ad3449cba23444b3982f6e24d19e1a3bef248787ea18027b25def8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_fa61c521e1ad3449cba23444b3982f6e24d19e1a3bef248787ea18027b25def8->leave($__internal_fa61c521e1ad3449cba23444b3982f6e24d19e1a3bef248787ea18027b25def8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_31d0abc853735c51af47f32e5ff3428d27ef2f20b0c26d497e0509f2a3f4711a = $this->env->getExtension("native_profiler");
        $__internal_31d0abc853735c51af47f32e5ff3428d27ef2f20b0c26d497e0509f2a3f4711a->enter($__internal_31d0abc853735c51af47f32e5ff3428d27ef2f20b0c26d497e0509f2a3f4711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <a href=\" ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrBookIndex", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> see content </a></br> </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addrAddBook");
        echo "\"> add a new book</a>


";
        
        $__internal_31d0abc853735c51af47f32e5ff3428d27ef2f20b0c26d497e0509f2a3f4711a->leave($__internal_31d0abc853735c51af47f32e5ff3428d27ef2f20b0c26d497e0509f2a3f4711a_prof);

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
        return array (  77 => 11,  69 => 9,  65 => 8,  60 => 7,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
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
/*         <a href=" {{  path('addrBookIndex', {'id': addr.id})}}"> see content </a></br> </br>*/
/*     {% endfor %}*/
/*     <a href="{{ path('addrAddBook')}}"> add a new book</a>*/
/* */
/* */
/* {% endblock %}*/
