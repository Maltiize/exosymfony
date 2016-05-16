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
        $__internal_53cb3c1485f28b1833b5ce24d3028a673f59646e6b0a9d3d0c886a85ffe93947 = $this->env->getExtension("native_profiler");
        $__internal_53cb3c1485f28b1833b5ce24d3028a673f59646e6b0a9d3d0c886a85ffe93947->enter($__internal_53cb3c1485f28b1833b5ce24d3028a673f59646e6b0a9d3d0c886a85ffe93947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53cb3c1485f28b1833b5ce24d3028a673f59646e6b0a9d3d0c886a85ffe93947->leave($__internal_53cb3c1485f28b1833b5ce24d3028a673f59646e6b0a9d3d0c886a85ffe93947_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee82c59fc68c1a30cdbe090117834c8b71de6df3b2a188299286703f7cc1c97f = $this->env->getExtension("native_profiler");
        $__internal_ee82c59fc68c1a30cdbe090117834c8b71de6df3b2a188299286703f7cc1c97f->enter($__internal_ee82c59fc68c1a30cdbe090117834c8b71de6df3b2a188299286703f7cc1c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee82c59fc68c1a30cdbe090117834c8b71de6df3b2a188299286703f7cc1c97f->leave($__internal_ee82c59fc68c1a30cdbe090117834c8b71de6df3b2a188299286703f7cc1c97f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77b4e1396a523694add74c257d972490094a248ea0e41db71d964ccab3664601 = $this->env->getExtension("native_profiler");
        $__internal_77b4e1396a523694add74c257d972490094a248ea0e41db71d964ccab3664601->enter($__internal_77b4e1396a523694add74c257d972490094a248ea0e41db71d964ccab3664601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_77b4e1396a523694add74c257d972490094a248ea0e41db71d964ccab3664601->leave($__internal_77b4e1396a523694add74c257d972490094a248ea0e41db71d964ccab3664601_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f11fc9a305c9c617b49980838516a3b2da05edb75859b5c1e6720b26aaff2804 = $this->env->getExtension("native_profiler");
        $__internal_f11fc9a305c9c617b49980838516a3b2da05edb75859b5c1e6720b26aaff2804->enter($__internal_f11fc9a305c9c617b49980838516a3b2da05edb75859b5c1e6720b26aaff2804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f11fc9a305c9c617b49980838516a3b2da05edb75859b5c1e6720b26aaff2804->leave($__internal_f11fc9a305c9c617b49980838516a3b2da05edb75859b5c1e6720b26aaff2804_prof);

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
