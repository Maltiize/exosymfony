<?php

/* adress/addAddrBook.html.twig */
class __TwigTemplate_4b8b8c1ca70da0fed54898f9824f8de4566b2bdaee4e6aa2a5509374dbcb2259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/addAddrBook.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_418a1827cfc6f2379ecc51900e64ef45999ae48ad63765c31120ef6a7ff15d9a = $this->env->getExtension("native_profiler");
        $__internal_418a1827cfc6f2379ecc51900e64ef45999ae48ad63765c31120ef6a7ff15d9a->enter($__internal_418a1827cfc6f2379ecc51900e64ef45999ae48ad63765c31120ef6a7ff15d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/addAddrBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418a1827cfc6f2379ecc51900e64ef45999ae48ad63765c31120ef6a7ff15d9a->leave($__internal_418a1827cfc6f2379ecc51900e64ef45999ae48ad63765c31120ef6a7ff15d9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa123d40413356274c39ecca44df4a7423b52958138aa8badb01134825eaf565 = $this->env->getExtension("native_profiler");
        $__internal_aa123d40413356274c39ecca44df4a7423b52958138aa8badb01134825eaf565->enter($__internal_aa123d40413356274c39ecca44df4a7423b52958138aa8badb01134825eaf565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_aa123d40413356274c39ecca44df4a7423b52958138aa8badb01134825eaf565->leave($__internal_aa123d40413356274c39ecca44df4a7423b52958138aa8badb01134825eaf565_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_850e8535a22d196579a8a86090695740b5b1a00d014e2eec2d2c05847f94ba1a = $this->env->getExtension("native_profiler");
        $__internal_850e8535a22d196579a8a86090695740b5b1a00d014e2eec2d2c05847f94ba1a->enter($__internal_850e8535a22d196579a8a86090695740b5b1a00d014e2eec2d2c05847f94ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('edit', $context, $blocks);
        // line 7
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_850e8535a22d196579a8a86090695740b5b1a00d014e2eec2d2c05847f94ba1a->leave($__internal_850e8535a22d196579a8a86090695740b5b1a00d014e2eec2d2c05847f94ba1a_prof);

    }

    // line 6
    public function block_edit($context, array $blocks = array())
    {
        $__internal_764ada572fe9c2da5a708fba5521b099fad202663367d343891e935b0c88d239 = $this->env->getExtension("native_profiler");
        $__internal_764ada572fe9c2da5a708fba5521b099fad202663367d343891e935b0c88d239->enter($__internal_764ada572fe9c2da5a708fba5521b099fad202663367d343891e935b0c88d239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        echo " ";
        
        $__internal_764ada572fe9c2da5a708fba5521b099fad202663367d343891e935b0c88d239->leave($__internal_764ada572fe9c2da5a708fba5521b099fad202663367d343891e935b0c88d239_prof);

    }

    public function getTemplateName()
    {
        return "adress/addAddrBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  66 => 9,  62 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Hello {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% block edit %} {% endblock %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
