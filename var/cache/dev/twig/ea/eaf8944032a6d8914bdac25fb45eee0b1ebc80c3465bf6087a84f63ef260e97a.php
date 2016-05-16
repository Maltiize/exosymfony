<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8011e8e3d7e5fc7b56b19a0164b03463038e5b56edf6e51aa61b572fbf0d7d60 extends Twig_Template
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
        $__internal_a340cb7ce77ba52b90dd077048fe80dc77bbab3f2c42855ff5a5dd5e26f6b3ff = $this->env->getExtension("native_profiler");
        $__internal_a340cb7ce77ba52b90dd077048fe80dc77bbab3f2c42855ff5a5dd5e26f6b3ff->enter($__internal_a340cb7ce77ba52b90dd077048fe80dc77bbab3f2c42855ff5a5dd5e26f6b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a340cb7ce77ba52b90dd077048fe80dc77bbab3f2c42855ff5a5dd5e26f6b3ff->leave($__internal_a340cb7ce77ba52b90dd077048fe80dc77bbab3f2c42855ff5a5dd5e26f6b3ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
