<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_004f36704e61453c2137576a9004506149d9b6fa60581ba3b3623f82ce0edf3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8cccf25d3f4f5f55c77ee3063ed9897e6e19146521bed04dcd7357a4c7f8211 = $this->env->getExtension("native_profiler");
        $__internal_b8cccf25d3f4f5f55c77ee3063ed9897e6e19146521bed04dcd7357a4c7f8211->enter($__internal_b8cccf25d3f4f5f55c77ee3063ed9897e6e19146521bed04dcd7357a4c7f8211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8cccf25d3f4f5f55c77ee3063ed9897e6e19146521bed04dcd7357a4c7f8211->leave($__internal_b8cccf25d3f4f5f55c77ee3063ed9897e6e19146521bed04dcd7357a4c7f8211_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_331a1259129138ffd66dbb8404dab5ae35281f6c6e8d8f8b2e5300565aa2bee8 = $this->env->getExtension("native_profiler");
        $__internal_331a1259129138ffd66dbb8404dab5ae35281f6c6e8d8f8b2e5300565aa2bee8->enter($__internal_331a1259129138ffd66dbb8404dab5ae35281f6c6e8d8f8b2e5300565aa2bee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_331a1259129138ffd66dbb8404dab5ae35281f6c6e8d8f8b2e5300565aa2bee8->leave($__internal_331a1259129138ffd66dbb8404dab5ae35281f6c6e8d8f8b2e5300565aa2bee8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7aaf05cb4b5ed30e164c4ee3862b5a9a54363ac862abd3abfea7359a34146c1 = $this->env->getExtension("native_profiler");
        $__internal_f7aaf05cb4b5ed30e164c4ee3862b5a9a54363ac862abd3abfea7359a34146c1->enter($__internal_f7aaf05cb4b5ed30e164c4ee3862b5a9a54363ac862abd3abfea7359a34146c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f7aaf05cb4b5ed30e164c4ee3862b5a9a54363ac862abd3abfea7359a34146c1->leave($__internal_f7aaf05cb4b5ed30e164c4ee3862b5a9a54363ac862abd3abfea7359a34146c1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
