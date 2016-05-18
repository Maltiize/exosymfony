<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3b67ddf1da24f07f57eec9b0179a730d50ee42490ac9c3aa179c99c991ae6e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cd636666357b5a3af25d6d1417b74234b2dfabdfbd0bdcae367116da607ad8b4 = $this->env->getExtension("native_profiler");
        $__internal_cd636666357b5a3af25d6d1417b74234b2dfabdfbd0bdcae367116da607ad8b4->enter($__internal_cd636666357b5a3af25d6d1417b74234b2dfabdfbd0bdcae367116da607ad8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd636666357b5a3af25d6d1417b74234b2dfabdfbd0bdcae367116da607ad8b4->leave($__internal_cd636666357b5a3af25d6d1417b74234b2dfabdfbd0bdcae367116da607ad8b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80657e5a18d0b307b97335e32c154287791f5f7bf4e572dfb4547c95b0bad5cb = $this->env->getExtension("native_profiler");
        $__internal_80657e5a18d0b307b97335e32c154287791f5f7bf4e572dfb4547c95b0bad5cb->enter($__internal_80657e5a18d0b307b97335e32c154287791f5f7bf4e572dfb4547c95b0bad5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80657e5a18d0b307b97335e32c154287791f5f7bf4e572dfb4547c95b0bad5cb->leave($__internal_80657e5a18d0b307b97335e32c154287791f5f7bf4e572dfb4547c95b0bad5cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_275a99533967d2e2158f41edd0e57068f49961bd20d5fc54624190134302398c = $this->env->getExtension("native_profiler");
        $__internal_275a99533967d2e2158f41edd0e57068f49961bd20d5fc54624190134302398c->enter($__internal_275a99533967d2e2158f41edd0e57068f49961bd20d5fc54624190134302398c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_275a99533967d2e2158f41edd0e57068f49961bd20d5fc54624190134302398c->leave($__internal_275a99533967d2e2158f41edd0e57068f49961bd20d5fc54624190134302398c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72765ed5e50be5bd30192a0947ea5fa604190d037508fa642f295ae078f3207b = $this->env->getExtension("native_profiler");
        $__internal_72765ed5e50be5bd30192a0947ea5fa604190d037508fa642f295ae078f3207b->enter($__internal_72765ed5e50be5bd30192a0947ea5fa604190d037508fa642f295ae078f3207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72765ed5e50be5bd30192a0947ea5fa604190d037508fa642f295ae078f3207b->leave($__internal_72765ed5e50be5bd30192a0947ea5fa604190d037508fa642f295ae078f3207b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
