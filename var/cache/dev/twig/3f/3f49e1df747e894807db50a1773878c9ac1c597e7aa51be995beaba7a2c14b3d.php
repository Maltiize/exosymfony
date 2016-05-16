<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f11c1233f9197372b99fae8b921da0e5a087fbd448e4c8150f8d73644d66defa extends Twig_Template
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
        $__internal_1690a6662c5a18eb49b31997a96af0a0623ba8d141fb57db27c5a40e0d547589 = $this->env->getExtension("native_profiler");
        $__internal_1690a6662c5a18eb49b31997a96af0a0623ba8d141fb57db27c5a40e0d547589->enter($__internal_1690a6662c5a18eb49b31997a96af0a0623ba8d141fb57db27c5a40e0d547589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1690a6662c5a18eb49b31997a96af0a0623ba8d141fb57db27c5a40e0d547589->leave($__internal_1690a6662c5a18eb49b31997a96af0a0623ba8d141fb57db27c5a40e0d547589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
