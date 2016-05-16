<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d993c77b4e2a2fdcd0d51e06a38491b550d3fad3b88b9a72440167188eb13016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6204282581ce643a97afaa866ba7f6588a7e5e08ad26548d8996d0c7beebc517 = $this->env->getExtension("native_profiler");
        $__internal_6204282581ce643a97afaa866ba7f6588a7e5e08ad26548d8996d0c7beebc517->enter($__internal_6204282581ce643a97afaa866ba7f6588a7e5e08ad26548d8996d0c7beebc517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6204282581ce643a97afaa866ba7f6588a7e5e08ad26548d8996d0c7beebc517->leave($__internal_6204282581ce643a97afaa866ba7f6588a7e5e08ad26548d8996d0c7beebc517_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3014f43476c01b33f3f398e4985ae2e68a20ecf23a284e2793a5f06f119440f4 = $this->env->getExtension("native_profiler");
        $__internal_3014f43476c01b33f3f398e4985ae2e68a20ecf23a284e2793a5f06f119440f4->enter($__internal_3014f43476c01b33f3f398e4985ae2e68a20ecf23a284e2793a5f06f119440f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3014f43476c01b33f3f398e4985ae2e68a20ecf23a284e2793a5f06f119440f4->leave($__internal_3014f43476c01b33f3f398e4985ae2e68a20ecf23a284e2793a5f06f119440f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
