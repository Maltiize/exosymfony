<?php

/* ::index.html.twig */
class __TwigTemplate_a3eed17294175d630f11b74841f5d53b66b63777a6355e959bb4fb763f3d551b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::index.html.twig", 1);
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
        $__internal_42b0e648707675ebfece027058778fc68c3a17052180e328679092183a5b75bb = $this->env->getExtension("native_profiler");
        $__internal_42b0e648707675ebfece027058778fc68c3a17052180e328679092183a5b75bb->enter($__internal_42b0e648707675ebfece027058778fc68c3a17052180e328679092183a5b75bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42b0e648707675ebfece027058778fc68c3a17052180e328679092183a5b75bb->leave($__internal_42b0e648707675ebfece027058778fc68c3a17052180e328679092183a5b75bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33dd333fa9d7288e7720e73c10a8c55327abb1e2453f2d1d5257328d46b77a4 = $this->env->getExtension("native_profiler");
        $__internal_f33dd333fa9d7288e7720e73c10a8c55327abb1e2453f2d1d5257328d46b77a4->enter($__internal_f33dd333fa9d7288e7720e73c10a8c55327abb1e2453f2d1d5257328d46b77a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_f33dd333fa9d7288e7720e73c10a8c55327abb1e2453f2d1d5257328d46b77a4->leave($__internal_f33dd333fa9d7288e7720e73c10a8c55327abb1e2453f2d1d5257328d46b77a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d0d5ed85d091eae25896ffa1d1176b3b6db3c8456d6d41ecb3b39bee8705623 = $this->env->getExtension("native_profiler");
        $__internal_7d0d5ed85d091eae25896ffa1d1176b3b6db3c8456d6d41ecb3b39bee8705623->enter($__internal_7d0d5ed85d091eae25896ffa1d1176b3b6db3c8456d6d41ecb3b39bee8705623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getExtension('routing')->getPath("addrBookIndex");
            echo "\"> see Content </a>
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrDelete", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> delete </a> </br> </br>
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
        
        $__internal_7d0d5ed85d091eae25896ffa1d1176b3b6db3c8456d6d41ecb3b39bee8705623->leave($__internal_7d0d5ed85d091eae25896ffa1d1176b3b6db3c8456d6d41ecb3b39bee8705623_prof);

    }

    public function getTemplateName()
    {
        return "::index.html.twig";
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
/*         <a href="{{ path('addrBookIndex')}}"> see Content </a>*/
/*         <a href="{{ path('addrDelete', {'id': addr.id}) }}"> delete </a> </br> </br>*/
/*     {% endfor %}*/
/*     <a href="{{ path('addrAddBook')}}"> add a new book</a>*/
/* */
/* */
/* {% endblock %}*/
