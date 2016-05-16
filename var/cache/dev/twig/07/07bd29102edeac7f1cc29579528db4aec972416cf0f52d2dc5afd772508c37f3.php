<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6e58d6d410cb8fd1d1e0ca8b38033c43159854bc1e8951f1b871aab11f3fe33a extends Twig_Template
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
        $__internal_c3003d008bb3ecd68b8fdd40d8be60f6753a07c8cd93b2dc1190472ffbf265a6 = $this->env->getExtension("native_profiler");
        $__internal_c3003d008bb3ecd68b8fdd40d8be60f6753a07c8cd93b2dc1190472ffbf265a6->enter($__internal_c3003d008bb3ecd68b8fdd40d8be60f6753a07c8cd93b2dc1190472ffbf265a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3003d008bb3ecd68b8fdd40d8be60f6753a07c8cd93b2dc1190472ffbf265a6->leave($__internal_c3003d008bb3ecd68b8fdd40d8be60f6753a07c8cd93b2dc1190472ffbf265a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_276d71a768e6e6fe3fb217aa3f93e7d780262a0785311a838b78374cdc3da66c = $this->env->getExtension("native_profiler");
        $__internal_276d71a768e6e6fe3fb217aa3f93e7d780262a0785311a838b78374cdc3da66c->enter($__internal_276d71a768e6e6fe3fb217aa3f93e7d780262a0785311a838b78374cdc3da66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_276d71a768e6e6fe3fb217aa3f93e7d780262a0785311a838b78374cdc3da66c->leave($__internal_276d71a768e6e6fe3fb217aa3f93e7d780262a0785311a838b78374cdc3da66c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01fe44e809bedff87bff516d48e741536c5e975ffe94a7f86f3800aba64625ed = $this->env->getExtension("native_profiler");
        $__internal_01fe44e809bedff87bff516d48e741536c5e975ffe94a7f86f3800aba64625ed->enter($__internal_01fe44e809bedff87bff516d48e741536c5e975ffe94a7f86f3800aba64625ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01fe44e809bedff87bff516d48e741536c5e975ffe94a7f86f3800aba64625ed->leave($__internal_01fe44e809bedff87bff516d48e741536c5e975ffe94a7f86f3800aba64625ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fbef97fa67ea358850452d459fea10c385bfccd15d2c36d648f71c6b33a29ee = $this->env->getExtension("native_profiler");
        $__internal_9fbef97fa67ea358850452d459fea10c385bfccd15d2c36d648f71c6b33a29ee->enter($__internal_9fbef97fa67ea358850452d459fea10c385bfccd15d2c36d648f71c6b33a29ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9fbef97fa67ea358850452d459fea10c385bfccd15d2c36d648f71c6b33a29ee->leave($__internal_9fbef97fa67ea358850452d459fea10c385bfccd15d2c36d648f71c6b33a29ee_prof);

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
