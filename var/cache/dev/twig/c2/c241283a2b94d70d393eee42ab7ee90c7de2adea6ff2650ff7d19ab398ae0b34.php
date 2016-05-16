<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8337cbdc56004a0f2043d666dc071cc5d80ebd2fcd5406ffdf114c0a53f8837c extends Twig_Template
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
        $__internal_ca69fabee5217223a26010209cef24a13bf6de26c7f3f960cb73934165c513c5 = $this->env->getExtension("native_profiler");
        $__internal_ca69fabee5217223a26010209cef24a13bf6de26c7f3f960cb73934165c513c5->enter($__internal_ca69fabee5217223a26010209cef24a13bf6de26c7f3f960cb73934165c513c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ca69fabee5217223a26010209cef24a13bf6de26c7f3f960cb73934165c513c5->leave($__internal_ca69fabee5217223a26010209cef24a13bf6de26c7f3f960cb73934165c513c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
