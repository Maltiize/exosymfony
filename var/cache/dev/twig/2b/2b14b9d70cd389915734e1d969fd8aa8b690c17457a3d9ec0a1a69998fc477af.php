<?php

/* base.html.twig */
class __TwigTemplate_29244a05f72d16be455ec02d993ecb9084b8faaf04327e60c73b4998f9232d7c extends Twig_Template
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
        $__internal_6272b20cc80b1f855af01516c9543f4750d0d5495a690d6e7c7197ad442716f5 = $this->env->getExtension("native_profiler");
        $__internal_6272b20cc80b1f855af01516c9543f4750d0d5495a690d6e7c7197ad442716f5->enter($__internal_6272b20cc80b1f855af01516c9543f4750d0d5495a690d6e7c7197ad442716f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6272b20cc80b1f855af01516c9543f4750d0d5495a690d6e7c7197ad442716f5->leave($__internal_6272b20cc80b1f855af01516c9543f4750d0d5495a690d6e7c7197ad442716f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b9119bf8b07889cd31f753a6b71f4db118879e26cdb1dc2386274d757e408f8 = $this->env->getExtension("native_profiler");
        $__internal_6b9119bf8b07889cd31f753a6b71f4db118879e26cdb1dc2386274d757e408f8->enter($__internal_6b9119bf8b07889cd31f753a6b71f4db118879e26cdb1dc2386274d757e408f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b9119bf8b07889cd31f753a6b71f4db118879e26cdb1dc2386274d757e408f8->leave($__internal_6b9119bf8b07889cd31f753a6b71f4db118879e26cdb1dc2386274d757e408f8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d36942a51aa0b0a2ec637516ff5086d7795f0d095e8f3c812c65882fa3af1a17 = $this->env->getExtension("native_profiler");
        $__internal_d36942a51aa0b0a2ec637516ff5086d7795f0d095e8f3c812c65882fa3af1a17->enter($__internal_d36942a51aa0b0a2ec637516ff5086d7795f0d095e8f3c812c65882fa3af1a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d36942a51aa0b0a2ec637516ff5086d7795f0d095e8f3c812c65882fa3af1a17->leave($__internal_d36942a51aa0b0a2ec637516ff5086d7795f0d095e8f3c812c65882fa3af1a17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf0847aec34ed642a42d757690e485df4956858c2d0265c8077f6ad9ac96c9f = $this->env->getExtension("native_profiler");
        $__internal_bbf0847aec34ed642a42d757690e485df4956858c2d0265c8077f6ad9ac96c9f->enter($__internal_bbf0847aec34ed642a42d757690e485df4956858c2d0265c8077f6ad9ac96c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bbf0847aec34ed642a42d757690e485df4956858c2d0265c8077f6ad9ac96c9f->leave($__internal_bbf0847aec34ed642a42d757690e485df4956858c2d0265c8077f6ad9ac96c9f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5bb61592a83b99c31ffbc6de28509efc391c6f6c92d991e0d20cef4340545c9 = $this->env->getExtension("native_profiler");
        $__internal_e5bb61592a83b99c31ffbc6de28509efc391c6f6c92d991e0d20cef4340545c9->enter($__internal_e5bb61592a83b99c31ffbc6de28509efc391c6f6c92d991e0d20cef4340545c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5bb61592a83b99c31ffbc6de28509efc391c6f6c92d991e0d20cef4340545c9->leave($__internal_e5bb61592a83b99c31ffbc6de28509efc391c6f6c92d991e0d20cef4340545c9_prof);

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
