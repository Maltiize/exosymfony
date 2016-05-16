<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_df276ad2225a183342d5b6a71bc2ead73333c09a5635caaa14d70de911e8ceba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_96b24296a87ebb605c849893d1d3a3238c40b745e0c356a836dcb22459f74e25 = $this->env->getExtension("native_profiler");
        $__internal_96b24296a87ebb605c849893d1d3a3238c40b745e0c356a836dcb22459f74e25->enter($__internal_96b24296a87ebb605c849893d1d3a3238c40b745e0c356a836dcb22459f74e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b24296a87ebb605c849893d1d3a3238c40b745e0c356a836dcb22459f74e25->leave($__internal_96b24296a87ebb605c849893d1d3a3238c40b745e0c356a836dcb22459f74e25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d56d6d917ea6feacaa20fd7be84744113c8ad42d1aa123bce93059856ab56cc = $this->env->getExtension("native_profiler");
        $__internal_4d56d6d917ea6feacaa20fd7be84744113c8ad42d1aa123bce93059856ab56cc->enter($__internal_4d56d6d917ea6feacaa20fd7be84744113c8ad42d1aa123bce93059856ab56cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4d56d6d917ea6feacaa20fd7be84744113c8ad42d1aa123bce93059856ab56cc->leave($__internal_4d56d6d917ea6feacaa20fd7be84744113c8ad42d1aa123bce93059856ab56cc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32407dad2310ef86a780203c8632cd5a53eb72148c5c61a4465c09166fb84d3c = $this->env->getExtension("native_profiler");
        $__internal_32407dad2310ef86a780203c8632cd5a53eb72148c5c61a4465c09166fb84d3c->enter($__internal_32407dad2310ef86a780203c8632cd5a53eb72148c5c61a4465c09166fb84d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32407dad2310ef86a780203c8632cd5a53eb72148c5c61a4465c09166fb84d3c->leave($__internal_32407dad2310ef86a780203c8632cd5a53eb72148c5c61a4465c09166fb84d3c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
