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
        $__internal_879f3c9091c0476455f042e78f260478f98ba499b5eb2d06d27db03d2bec9bf7 = $this->env->getExtension("native_profiler");
        $__internal_879f3c9091c0476455f042e78f260478f98ba499b5eb2d06d27db03d2bec9bf7->enter($__internal_879f3c9091c0476455f042e78f260478f98ba499b5eb2d06d27db03d2bec9bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879f3c9091c0476455f042e78f260478f98ba499b5eb2d06d27db03d2bec9bf7->leave($__internal_879f3c9091c0476455f042e78f260478f98ba499b5eb2d06d27db03d2bec9bf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99a62703d786bfe60ad131a4c7b741214ebb8302eca876d3c7b106325f0c01e6 = $this->env->getExtension("native_profiler");
        $__internal_99a62703d786bfe60ad131a4c7b741214ebb8302eca876d3c7b106325f0c01e6->enter($__internal_99a62703d786bfe60ad131a4c7b741214ebb8302eca876d3c7b106325f0c01e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99a62703d786bfe60ad131a4c7b741214ebb8302eca876d3c7b106325f0c01e6->leave($__internal_99a62703d786bfe60ad131a4c7b741214ebb8302eca876d3c7b106325f0c01e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8a488c424eed4fd9b158970ed6e228a22ec1530bb312d40c4ea713e30448801 = $this->env->getExtension("native_profiler");
        $__internal_e8a488c424eed4fd9b158970ed6e228a22ec1530bb312d40c4ea713e30448801->enter($__internal_e8a488c424eed4fd9b158970ed6e228a22ec1530bb312d40c4ea713e30448801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8a488c424eed4fd9b158970ed6e228a22ec1530bb312d40c4ea713e30448801->leave($__internal_e8a488c424eed4fd9b158970ed6e228a22ec1530bb312d40c4ea713e30448801_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94ebcf36ca339069c620b927127032d6c76a759dd0fa3c8773c44c5c36cecbea = $this->env->getExtension("native_profiler");
        $__internal_94ebcf36ca339069c620b927127032d6c76a759dd0fa3c8773c44c5c36cecbea->enter($__internal_94ebcf36ca339069c620b927127032d6c76a759dd0fa3c8773c44c5c36cecbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94ebcf36ca339069c620b927127032d6c76a759dd0fa3c8773c44c5c36cecbea->leave($__internal_94ebcf36ca339069c620b927127032d6c76a759dd0fa3c8773c44c5c36cecbea_prof);

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
