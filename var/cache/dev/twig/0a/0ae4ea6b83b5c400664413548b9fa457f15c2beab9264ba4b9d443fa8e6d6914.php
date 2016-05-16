<?php

/* adress/addAddr.html.twig */
class __TwigTemplate_8a018b322cd76740573141671d246b2729d9c4bccffa857368bf8d5a3bde295b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adress/addAddr.html.twig", 1);
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
        $__internal_e17f7d33172549ed876b3fc51c04b1e82931a7893fedc4de98b5be9c98c98284 = $this->env->getExtension("native_profiler");
        $__internal_e17f7d33172549ed876b3fc51c04b1e82931a7893fedc4de98b5be9c98c98284->enter($__internal_e17f7d33172549ed876b3fc51c04b1e82931a7893fedc4de98b5be9c98c98284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adress/addAddr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17f7d33172549ed876b3fc51c04b1e82931a7893fedc4de98b5be9c98c98284->leave($__internal_e17f7d33172549ed876b3fc51c04b1e82931a7893fedc4de98b5be9c98c98284_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_700c54512b672c9b0806e032d370d5101fd52442d7111d14aab665fd1120dea9 = $this->env->getExtension("native_profiler");
        $__internal_700c54512b672c9b0806e032d370d5101fd52442d7111d14aab665fd1120dea9->enter($__internal_700c54512b672c9b0806e032d370d5101fd52442d7111d14aab665fd1120dea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_700c54512b672c9b0806e032d370d5101fd52442d7111d14aab665fd1120dea9->leave($__internal_700c54512b672c9b0806e032d370d5101fd52442d7111d14aab665fd1120dea9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa9cb234dc5b85f85f4d0af0a2bdfb352d6eff2a5e61de656662f8f712913337 = $this->env->getExtension("native_profiler");
        $__internal_aa9cb234dc5b85f85f4d0af0a2bdfb352d6eff2a5e61de656662f8f712913337->enter($__internal_aa9cb234dc5b85f85f4d0af0a2bdfb352d6eff2a5e61de656662f8f712913337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('edit', $context, $blocks);
        echo " </br> </br>
    ";
        // line 7
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
        
        $__internal_aa9cb234dc5b85f85f4d0af0a2bdfb352d6eff2a5e61de656662f8f712913337->leave($__internal_aa9cb234dc5b85f85f4d0af0a2bdfb352d6eff2a5e61de656662f8f712913337_prof);

    }

    // line 6
    public function block_edit($context, array $blocks = array())
    {
        $__internal_003a05ec35be76172ae46fbf4b5f572cc473711fe45705058029e5039617ac02 = $this->env->getExtension("native_profiler");
        $__internal_003a05ec35be76172ae46fbf4b5f572cc473711fe45705058029e5039617ac02->enter($__internal_003a05ec35be76172ae46fbf4b5f572cc473711fe45705058029e5039617ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        echo " ";
        
        $__internal_003a05ec35be76172ae46fbf4b5f572cc473711fe45705058029e5039617ac02->leave($__internal_003a05ec35be76172ae46fbf4b5f572cc473711fe45705058029e5039617ac02_prof);

    }

    public function getTemplateName()
    {
        return "adress/addAddr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 6,  67 => 9,  63 => 8,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Hello {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% block edit %} {% endblock %} </br> </br>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
