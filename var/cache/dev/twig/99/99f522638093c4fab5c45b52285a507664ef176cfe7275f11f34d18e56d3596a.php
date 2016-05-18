<?php

/* index.html.twig */
class __TwigTemplate_ff07b85c90d6214d5360afd959c92553eb4a3352ac4be944c17ad90ba9ed0ee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4bbd39ca4267b6b6075fcb04a5513f9e860ae063bb57959ae47671a686cb82e = $this->env->getExtension("native_profiler");
        $__internal_d4bbd39ca4267b6b6075fcb04a5513f9e860ae063bb57959ae47671a686cb82e->enter($__internal_d4bbd39ca4267b6b6075fcb04a5513f9e860ae063bb57959ae47671a686cb82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4bbd39ca4267b6b6075fcb04a5513f9e860ae063bb57959ae47671a686cb82e->leave($__internal_d4bbd39ca4267b6b6075fcb04a5513f9e860ae063bb57959ae47671a686cb82e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a99b5efb3dee42bc31b35eaf16ea8c29ea17b88ab28c8bfd4a998e833837dd57 = $this->env->getExtension("native_profiler");
        $__internal_a99b5efb3dee42bc31b35eaf16ea8c29ea17b88ab28c8bfd4a998e833837dd57->enter($__internal_a99b5efb3dee42bc31b35eaf16ea8c29ea17b88ab28c8bfd4a998e833837dd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Hello ";
        
        $__internal_a99b5efb3dee42bc31b35eaf16ea8c29ea17b88ab28c8bfd4a998e833837dd57->leave($__internal_a99b5efb3dee42bc31b35eaf16ea8c29ea17b88ab28c8bfd4a998e833837dd57_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fcaaee2febee57bc52094562679a95380eef93a1f2958cc1bd9c97f1cf4c638 = $this->env->getExtension("native_profiler");
        $__internal_9fcaaee2febee57bc52094562679a95380eef93a1f2958cc1bd9c97f1cf4c638->enter($__internal_9fcaaee2febee57bc52094562679a95380eef93a1f2958cc1bd9c97f1cf4c638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["addr"]) {
            // line 7
            echo "        Name book : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "name", array()), "html", null, true);
            echo "
        Id book :";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["addr"], "id", array()), "html", null, true);
            echo " </br>
        <a href=\" ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addrBookIndex", array("id" => $this->getAttribute($context["addr"], "id", array()))), "html", null, true);
            echo "\"> see content </a></br> </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("addrAddBook");
        echo "\"> add a new book</a>


";
        
        $__internal_9fcaaee2febee57bc52094562679a95380eef93a1f2958cc1bd9c97f1cf4c638->leave($__internal_9fcaaee2febee57bc52094562679a95380eef93a1f2958cc1bd9c97f1cf4c638_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  69 => 9,  65 => 8,  60 => 7,  56 => 6,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Hello {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% for addr in list %}*/
/*         Name book : {{ addr.name }}*/
/*         Id book :{{ addr.id }} </br>*/
/*         <a href=" {{  path('addrBookIndex', {'id': addr.id})}}"> see content </a></br> </br>*/
/*     {% endfor %}*/
/*     <a href="{{ path('addrAddBook')}}"> add a new book</a>*/
/* */
/* */
/* {% endblock %}*/
