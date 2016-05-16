<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d8d61c53b7997ac606e5bdac18a15998d027b8423734100c1ceb27f5663a5cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_78e64f8cbbd1d203e57c2883fed478df44b438defd09080ae8083427d3f0cfe3 = $this->env->getExtension("native_profiler");
        $__internal_78e64f8cbbd1d203e57c2883fed478df44b438defd09080ae8083427d3f0cfe3->enter($__internal_78e64f8cbbd1d203e57c2883fed478df44b438defd09080ae8083427d3f0cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78e64f8cbbd1d203e57c2883fed478df44b438defd09080ae8083427d3f0cfe3->leave($__internal_78e64f8cbbd1d203e57c2883fed478df44b438defd09080ae8083427d3f0cfe3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_647786e75582588d13f9bb73a90ac727e93ef451966cc969033e380568b0b890 = $this->env->getExtension("native_profiler");
        $__internal_647786e75582588d13f9bb73a90ac727e93ef451966cc969033e380568b0b890->enter($__internal_647786e75582588d13f9bb73a90ac727e93ef451966cc969033e380568b0b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_647786e75582588d13f9bb73a90ac727e93ef451966cc969033e380568b0b890->leave($__internal_647786e75582588d13f9bb73a90ac727e93ef451966cc969033e380568b0b890_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_502183cc2c55b6e74180388d2eab9c1ca1bfb299a67cf715450421add12113f0 = $this->env->getExtension("native_profiler");
        $__internal_502183cc2c55b6e74180388d2eab9c1ca1bfb299a67cf715450421add12113f0->enter($__internal_502183cc2c55b6e74180388d2eab9c1ca1bfb299a67cf715450421add12113f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_502183cc2c55b6e74180388d2eab9c1ca1bfb299a67cf715450421add12113f0->leave($__internal_502183cc2c55b6e74180388d2eab9c1ca1bfb299a67cf715450421add12113f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c247c7ab0fbbb0d9120a62e88934fe0fbe59e0b6dbd36a9fd804a828bd4451a0 = $this->env->getExtension("native_profiler");
        $__internal_c247c7ab0fbbb0d9120a62e88934fe0fbe59e0b6dbd36a9fd804a828bd4451a0->enter($__internal_c247c7ab0fbbb0d9120a62e88934fe0fbe59e0b6dbd36a9fd804a828bd4451a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c247c7ab0fbbb0d9120a62e88934fe0fbe59e0b6dbd36a9fd804a828bd4451a0->leave($__internal_c247c7ab0fbbb0d9120a62e88934fe0fbe59e0b6dbd36a9fd804a828bd4451a0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
