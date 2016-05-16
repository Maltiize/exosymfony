<?php

/* :adress:editAddr.html.twig */
class __TwigTemplate_862b4d7a26d9cc61c1e13915c3c1d0bb1124d3d43be63561a7ce643448cdf3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adress/addAddr.html.twig", ":adress:editAddr.html.twig", 1);
        $this->blocks = array(
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adress/addAddr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd51dfdfeb94b24ed29523deff0b986481361166fed0e7d1c50821624b3f3320 = $this->env->getExtension("native_profiler");
        $__internal_fd51dfdfeb94b24ed29523deff0b986481361166fed0e7d1c50821624b3f3320->enter($__internal_fd51dfdfeb94b24ed29523deff0b986481361166fed0e7d1c50821624b3f3320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adress:editAddr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd51dfdfeb94b24ed29523deff0b986481361166fed0e7d1c50821624b3f3320->leave($__internal_fd51dfdfeb94b24ed29523deff0b986481361166fed0e7d1c50821624b3f3320_prof);

    }

    // line 3
    public function block_edit($context, array $blocks = array())
    {
        $__internal_2b76ada720a7dfa6850f3c221020f1dbc1d3bfa386801d5f14fe043f9ff460ec = $this->env->getExtension("native_profiler");
        $__internal_2b76ada720a7dfa6850f3c221020f1dbc1d3bfa386801d5f14fe043f9ff460ec->enter($__internal_2b76ada720a7dfa6850f3c221020f1dbc1d3bfa386801d5f14fe043f9ff460ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        // line 4
        echo "    ancien nom : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["olddata"]) ? $context["olddata"] : $this->getContext($context, "olddata")), "nom", array()), "html", null, true);
        echo " </br>
    ancien prenom : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["olddata"]) ? $context["olddata"] : $this->getContext($context, "olddata")), "prenom", array()), "html", null, true);
        echo "  </br>
    ancien numero : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["olddata"]) ? $context["olddata"] : $this->getContext($context, "olddata")), "numero", array()), "html", null, true);
        echo "  </br>
";
        
        $__internal_2b76ada720a7dfa6850f3c221020f1dbc1d3bfa386801d5f14fe043f9ff460ec->leave($__internal_2b76ada720a7dfa6850f3c221020f1dbc1d3bfa386801d5f14fe043f9ff460ec_prof);

    }

    public function getTemplateName()
    {
        return ":adress:editAddr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'adress/addAddr.html.twig' %}*/
/* */
/* {% block edit %}*/
/*     ancien nom : {{ olddata.nom }} </br>*/
/*     ancien prenom : {{ olddata.prenom }}  </br>*/
/*     ancien numero : {{ olddata.numero }}  </br>*/
/* {% endblock %}*/
