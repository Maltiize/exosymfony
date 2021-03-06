<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16a8e24e202cbc53c963fb8e65b69b40b8014fafcfa6aa4460dd2ebff91d8151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8021df327d740311b47653f6c202b4a650adf5b9aa8e40d20e31d918523dc422 = $this->env->getExtension("native_profiler");
        $__internal_8021df327d740311b47653f6c202b4a650adf5b9aa8e40d20e31d918523dc422->enter($__internal_8021df327d740311b47653f6c202b4a650adf5b9aa8e40d20e31d918523dc422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8021df327d740311b47653f6c202b4a650adf5b9aa8e40d20e31d918523dc422->leave($__internal_8021df327d740311b47653f6c202b4a650adf5b9aa8e40d20e31d918523dc422_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1cb11037ec7e30445f4d5cad9355a3eb57368cf98d74b6553be918933e44ba1 = $this->env->getExtension("native_profiler");
        $__internal_a1cb11037ec7e30445f4d5cad9355a3eb57368cf98d74b6553be918933e44ba1->enter($__internal_a1cb11037ec7e30445f4d5cad9355a3eb57368cf98d74b6553be918933e44ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a1cb11037ec7e30445f4d5cad9355a3eb57368cf98d74b6553be918933e44ba1->leave($__internal_a1cb11037ec7e30445f4d5cad9355a3eb57368cf98d74b6553be918933e44ba1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65b9f7a761716c6205eb2e5f4dd7d76cebdfb885a5cab419a240eb96172e8f1c = $this->env->getExtension("native_profiler");
        $__internal_65b9f7a761716c6205eb2e5f4dd7d76cebdfb885a5cab419a240eb96172e8f1c->enter($__internal_65b9f7a761716c6205eb2e5f4dd7d76cebdfb885a5cab419a240eb96172e8f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_65b9f7a761716c6205eb2e5f4dd7d76cebdfb885a5cab419a240eb96172e8f1c->leave($__internal_65b9f7a761716c6205eb2e5f4dd7d76cebdfb885a5cab419a240eb96172e8f1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c4925a05db7ee0634bbf6ded7a089436073ac6a6607fda45dc4dbe58ad8ae5 = $this->env->getExtension("native_profiler");
        $__internal_84c4925a05db7ee0634bbf6ded7a089436073ac6a6607fda45dc4dbe58ad8ae5->enter($__internal_84c4925a05db7ee0634bbf6ded7a089436073ac6a6607fda45dc4dbe58ad8ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_84c4925a05db7ee0634bbf6ded7a089436073ac6a6607fda45dc4dbe58ad8ae5->leave($__internal_84c4925a05db7ee0634bbf6ded7a089436073ac6a6607fda45dc4dbe58ad8ae5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
