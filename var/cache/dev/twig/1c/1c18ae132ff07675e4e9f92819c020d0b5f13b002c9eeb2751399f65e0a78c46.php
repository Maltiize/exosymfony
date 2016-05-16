<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f311a0fe8c348e7525046c5041d5aec3b9f6f329a46d2af69e5dc018aad57778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ec3904f9afdac44747271f39006916474cfd13ea51ff37efacf854091866017 = $this->env->getExtension("native_profiler");
        $__internal_3ec3904f9afdac44747271f39006916474cfd13ea51ff37efacf854091866017->enter($__internal_3ec3904f9afdac44747271f39006916474cfd13ea51ff37efacf854091866017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3ec3904f9afdac44747271f39006916474cfd13ea51ff37efacf854091866017->leave($__internal_3ec3904f9afdac44747271f39006916474cfd13ea51ff37efacf854091866017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
