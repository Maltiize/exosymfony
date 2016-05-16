<?php

/* adress/editAddr.html.twig */
class __TwigTemplate_98e3a48becf3f0024da6e54405990fbaabd1d2b9ff60cfcf19324ec3e4e31d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adress/addAddr.html.twig", "adress/editAddr.html.twig", 1);
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
        $__internal_607042efe774988bd39f05a9a9e6549b0dcd97670e4882dc058a8b79dea2bf58 = $this->env->getExtension("native_profiler");
        $__internal_607042efe774988bd39f05a9a9e6549b0dcd97670e4882dc058a8b79dea2bf58->enter($__internal_607042efe774988bd39f05a9a9e6549b0dcd97670e4882dc058a8b79dea2bf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/editAddr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_607042efe774988bd39f05a9a9e6549b0dcd97670e4882dc058a8b79dea2bf58->leave($__internal_607042efe774988bd39f05a9a9e6549b0dcd97670e4882dc058a8b79dea2bf58_prof);

    }

    // line 3
    public function block_edit($context, array $blocks = array())
    {
        $__internal_24c0a0460b5d441525a2149128327de901dde8b42d0d3aea17d77768836cdb24 = $this->env->getExtension("native_profiler");
        $__internal_24c0a0460b5d441525a2149128327de901dde8b42d0d3aea17d77768836cdb24->enter($__internal_24c0a0460b5d441525a2149128327de901dde8b42d0d3aea17d77768836cdb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

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
        
        $__internal_24c0a0460b5d441525a2149128327de901dde8b42d0d3aea17d77768836cdb24->leave($__internal_24c0a0460b5d441525a2149128327de901dde8b42d0d3aea17d77768836cdb24_prof);

    }

    public function getTemplateName()
    {
        return "adress/editAddr.html.twig";
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
