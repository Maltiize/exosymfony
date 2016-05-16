<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_33d1607284beb7aa4de288979b67011a45132293ab5d2e2abbd15948bd02d368 extends Twig_Template
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
        $__internal_998285dc4e4f862a4dcbbfd84ce11947646eecfd0daf6f9da0d7d2f27531ec7e = $this->env->getExtension("native_profiler");
        $__internal_998285dc4e4f862a4dcbbfd84ce11947646eecfd0daf6f9da0d7d2f27531ec7e->enter($__internal_998285dc4e4f862a4dcbbfd84ce11947646eecfd0daf6f9da0d7d2f27531ec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_998285dc4e4f862a4dcbbfd84ce11947646eecfd0daf6f9da0d7d2f27531ec7e->leave($__internal_998285dc4e4f862a4dcbbfd84ce11947646eecfd0daf6f9da0d7d2f27531ec7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
