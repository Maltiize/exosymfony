<?php

/* base.html.twig */
class __TwigTemplate_b5007c05490b1e91308ca2ea1afe90da0de2da12917a75914f3dca6991192549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f2cac38f0627533a7517a941176b0a09adfabca1d202adc4f5bbebc3acaefe = $this->env->getExtension("native_profiler");
        $__internal_a8f2cac38f0627533a7517a941176b0a09adfabca1d202adc4f5bbebc3acaefe->enter($__internal_a8f2cac38f0627533a7517a941176b0a09adfabca1d202adc4f5bbebc3acaefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a8f2cac38f0627533a7517a941176b0a09adfabca1d202adc4f5bbebc3acaefe->leave($__internal_a8f2cac38f0627533a7517a941176b0a09adfabca1d202adc4f5bbebc3acaefe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c2a872730506aeb4a33984dd041c202378ef9212bb34cb833079b35ad7dbfb8 = $this->env->getExtension("native_profiler");
        $__internal_7c2a872730506aeb4a33984dd041c202378ef9212bb34cb833079b35ad7dbfb8->enter($__internal_7c2a872730506aeb4a33984dd041c202378ef9212bb34cb833079b35ad7dbfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7c2a872730506aeb4a33984dd041c202378ef9212bb34cb833079b35ad7dbfb8->leave($__internal_7c2a872730506aeb4a33984dd041c202378ef9212bb34cb833079b35ad7dbfb8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb9bc04f41699f1d94e727fd8bacb2058ebe74ea646d79060977f441dcbc6449 = $this->env->getExtension("native_profiler");
        $__internal_cb9bc04f41699f1d94e727fd8bacb2058ebe74ea646d79060977f441dcbc6449->enter($__internal_cb9bc04f41699f1d94e727fd8bacb2058ebe74ea646d79060977f441dcbc6449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb9bc04f41699f1d94e727fd8bacb2058ebe74ea646d79060977f441dcbc6449->leave($__internal_cb9bc04f41699f1d94e727fd8bacb2058ebe74ea646d79060977f441dcbc6449_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_49bf6667468f442d101bf27486d2f4d3143e0b227eae8e21f5be42e3fb381f58 = $this->env->getExtension("native_profiler");
        $__internal_49bf6667468f442d101bf27486d2f4d3143e0b227eae8e21f5be42e3fb381f58->enter($__internal_49bf6667468f442d101bf27486d2f4d3143e0b227eae8e21f5be42e3fb381f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49bf6667468f442d101bf27486d2f4d3143e0b227eae8e21f5be42e3fb381f58->leave($__internal_49bf6667468f442d101bf27486d2f4d3143e0b227eae8e21f5be42e3fb381f58_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53c7bdac1e0621676068ee55a68b92f5341aa10c2dc6f40af969ec14ebff5570 = $this->env->getExtension("native_profiler");
        $__internal_53c7bdac1e0621676068ee55a68b92f5341aa10c2dc6f40af969ec14ebff5570->enter($__internal_53c7bdac1e0621676068ee55a68b92f5341aa10c2dc6f40af969ec14ebff5570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_53c7bdac1e0621676068ee55a68b92f5341aa10c2dc6f40af969ec14ebff5570->leave($__internal_53c7bdac1e0621676068ee55a68b92f5341aa10c2dc6f40af969ec14ebff5570_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
