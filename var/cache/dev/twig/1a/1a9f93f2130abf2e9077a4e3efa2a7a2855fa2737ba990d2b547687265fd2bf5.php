<?php

/* :adress:addAddrBook.html.twig */
class __TwigTemplate_f0cbe65b0a301bc8cda7097c1a7efe20345e32273a8b18b785fdd3e9b2b27951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":adress:addAddrBook.html.twig", 1);
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
        $__internal_e41bcb9af0bc2c2ec3d3f8a27facb191443a6f013efa91d7d7171cdf57291719 = $this->env->getExtension("native_profiler");
        $__internal_e41bcb9af0bc2c2ec3d3f8a27facb191443a6f013efa91d7d7171cdf57291719->enter($__internal_e41bcb9af0bc2c2ec3d3f8a27facb191443a6f013efa91d7d7171cdf57291719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adress:addAddrBook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41bcb9af0bc2c2ec3d3f8a27facb191443a6f013efa91d7d7171cdf57291719->leave($__internal_e41bcb9af0bc2c2ec3d3f8a27facb191443a6f013efa91d7d7171cdf57291719_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_224b28f3583acc4c006e3835646b1ed5a5d2073361c63be6a043400c51ed8f87 = $this->env->getExtension("native_profiler");
        $__internal_224b28f3583acc4c006e3835646b1ed5a5d2073361c63be6a043400c51ed8f87->enter($__internal_224b28f3583acc4c006e3835646b1ed5a5d2073361c63be6a043400c51ed8f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_224b28f3583acc4c006e3835646b1ed5a5d2073361c63be6a043400c51ed8f87->leave($__internal_224b28f3583acc4c006e3835646b1ed5a5d2073361c63be6a043400c51ed8f87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec640e689b160a86d0767744880c37eaec11da8152183cbad30400c9ce74ba89 = $this->env->getExtension("native_profiler");
        $__internal_ec640e689b160a86d0767744880c37eaec11da8152183cbad30400c9ce74ba89->enter($__internal_ec640e689b160a86d0767744880c37eaec11da8152183cbad30400c9ce74ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec640e689b160a86d0767744880c37eaec11da8152183cbad30400c9ce74ba89->leave($__internal_ec640e689b160a86d0767744880c37eaec11da8152183cbad30400c9ce74ba89_prof);

    }

    // line 6
    public function block_edit($context, array $blocks = array())
    {
        $__internal_9dc0d9e15599a310eea78c9ce0e79b3db0456c25dff2bb630c44d8c5fe8a3e7c = $this->env->getExtension("native_profiler");
        $__internal_9dc0d9e15599a310eea78c9ce0e79b3db0456c25dff2bb630c44d8c5fe8a3e7c->enter($__internal_9dc0d9e15599a310eea78c9ce0e79b3db0456c25dff2bb630c44d8c5fe8a3e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        echo " ";
        
        $__internal_9dc0d9e15599a310eea78c9ce0e79b3db0456c25dff2bb630c44d8c5fe8a3e7c->leave($__internal_9dc0d9e15599a310eea78c9ce0e79b3db0456c25dff2bb630c44d8c5fe8a3e7c_prof);

    }

    public function getTemplateName()
    {
        return ":adress:addAddrBook.html.twig";
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
