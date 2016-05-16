<?php

/* :adress:indexBook.html.twig */
class __TwigTemplate_b5ee75778abd13ad3171f4449cdee0b1718a8573c75050a2d25cafc7d50e5b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adress:indexBook.html.twig", 1);
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
        $__internal_df743ee24d6bdc1406a0e754c3892d686f061e9ae0b5c79418adbf43c7e35bfb = $this->env->getExtension("native_profiler");
        $__internal_df743ee24d6bdc1406a0e754c3892d686f061e9ae0b5c79418adbf43c7e35bfb->enter($__internal_df743ee24d6bdc1406a0e754c3892d686f061e9ae0b5c79418adbf43c7e35bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adress:indexBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df743ee24d6bdc1406a0e754c3892d686f061e9ae0b5c79418adbf43c7e35bfb->leave($__internal_df743ee24d6bdc1406a0e754c3892d686f061e9ae0b5c79418adbf43c7e35bfb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0b0b39ec37d8dff01065682ebba186b6a554e00e63edea0df37bfce48f3d747 = $this->env->getExtension("native_profiler");
        $__internal_e0b0b39ec37d8dff01065682ebba186b6a554e00e63edea0df37bfce48f3d747->enter($__internal_e0b0b39ec37d8dff01065682ebba186b6a554e00e63edea0df37bfce48f3d747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_e0b0b39ec37d8dff01065682ebba186b6a554e00e63edea0df37bfce48f3d747->leave($__internal_e0b0b39ec37d8dff01065682ebba186b6a554e00e63edea0df37bfce48f3d747_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2ff627295db32753151701a8534991d0dfe53d27f0a9e94b346026ca1de22a = $this->env->getExtension("native_profiler");
        $__internal_1f2ff627295db32753151701a8534991d0dfe53d27f0a9e94b346026ca1de22a->enter($__internal_1f2ff627295db32753151701a8534991d0dfe53d27f0a9e94b346026ca1de22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAddr"]) ? $context["listAddr"] : $this->getContext($context, "listAddr")));
        foreach ($context['_seq'] as $context["_key"] => $context["addr"]) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "nom", array()), "html", null, true);
            echo "
    ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "prenom", array()), "html", null, true);
            echo "
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "numero", array()), "html", null, true);
            echo "
    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "id", array()), "html", null, true);
            echo "
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrEdit", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> edit </a>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrDelete", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> delete </a> </br> </br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrAdd", array("id" => (isset($context["idBook"]) ? $context["idBook"] : $this->getContext($context, "idBook")))), "html", null, true);
        echo "\"> edit </a>


";
        
        $__internal_1f2ff627295db32753151701a8534991d0dfe53d27f0a9e94b346026ca1de22a->leave($__internal_1f2ff627295db32753151701a8534991d0dfe53d27f0a9e94b346026ca1de22a_prof);

    }

    public function getTemplateName()
    {
        return ":adress:indexBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  60 => 7,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Hello {% endblock %}*/
/* {% block body %}*/
/* */
/* {% for addr in listAddr %}*/
/*     {{ addr.nom }}*/
/*     {{ addr.prenom }}*/
/*     {{ addr.numero }}*/
/*     {{ addr.id }}*/
/*     <a href="{{ path('addrEdit', {'id': addr.id}) }}"> edit </a>  <a href="{{ path('addrDelete', {'id': addr.id}) }}"> delete </a> </br> </br>*/
/* {% endfor %}*/
/*     <a href="{{ path('addrAdd', {'id': idBook}) }}"> edit </a>*/
/* */
/* */
/* {% endblock %}*/
