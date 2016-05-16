<?php

/* adress/indexBook.html.twig */
class __TwigTemplate_64a7e4b9466a815b040f55dc07dea8092bdfdb69a28d67cfb2d4cd9266744c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/indexBook.html.twig", 1);
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
        $__internal_56f74a9aa4a1f05213e844609cbd43d209ee3d9029f085ebd55b52fe6c216197 = $this->env->getExtension("native_profiler");
        $__internal_56f74a9aa4a1f05213e844609cbd43d209ee3d9029f085ebd55b52fe6c216197->enter($__internal_56f74a9aa4a1f05213e844609cbd43d209ee3d9029f085ebd55b52fe6c216197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/indexBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f74a9aa4a1f05213e844609cbd43d209ee3d9029f085ebd55b52fe6c216197->leave($__internal_56f74a9aa4a1f05213e844609cbd43d209ee3d9029f085ebd55b52fe6c216197_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed8aab9696c44d2c0e9847e1ec61c8f61c5f2e716266983d07e6f3879f15be0c = $this->env->getExtension("native_profiler");
        $__internal_ed8aab9696c44d2c0e9847e1ec61c8f61c5f2e716266983d07e6f3879f15be0c->enter($__internal_ed8aab9696c44d2c0e9847e1ec61c8f61c5f2e716266983d07e6f3879f15be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_ed8aab9696c44d2c0e9847e1ec61c8f61c5f2e716266983d07e6f3879f15be0c->leave($__internal_ed8aab9696c44d2c0e9847e1ec61c8f61c5f2e716266983d07e6f3879f15be0c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfb20b137de32712036eceacec9ef7aa1ce439b648c15db6ec7bd03546aa3321 = $this->env->getExtension("native_profiler");
        $__internal_cfb20b137de32712036eceacec9ef7aa1ce439b648c15db6ec7bd03546aa3321->enter($__internal_cfb20b137de32712036eceacec9ef7aa1ce439b648c15db6ec7bd03546aa3321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\"> Add new contact </a>


";
        
        $__internal_cfb20b137de32712036eceacec9ef7aa1ce439b648c15db6ec7bd03546aa3321->leave($__internal_cfb20b137de32712036eceacec9ef7aa1ce439b648c15db6ec7bd03546aa3321_prof);

    }

    public function getTemplateName()
    {
        return "adress/indexBook.html.twig";
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
/*     <a href="{{ path('addrAdd', {'id': idBook}) }}"> Add new contact </a>*/
/* */
/* */
/* {% endblock %}*/
