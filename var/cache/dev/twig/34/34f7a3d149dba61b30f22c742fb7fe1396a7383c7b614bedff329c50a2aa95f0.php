<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c93e9e4629731286c737b2e1068955fb01b124c307b1e9df109de626107b0b56 extends Twig_Template
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
        $__internal_e509f10888fd97a04a3633040688181062eece3384d6ae1e45ea5af7bfdf9942 = $this->env->getExtension("native_profiler");
        $__internal_e509f10888fd97a04a3633040688181062eece3384d6ae1e45ea5af7bfdf9942->enter($__internal_e509f10888fd97a04a3633040688181062eece3384d6ae1e45ea5af7bfdf9942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e509f10888fd97a04a3633040688181062eece3384d6ae1e45ea5af7bfdf9942->leave($__internal_e509f10888fd97a04a3633040688181062eece3384d6ae1e45ea5af7bfdf9942_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
