<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3b86692dd20b1edcffff0df8f56793cb589326223548b2fdd1ae4c254d9f5e7a extends Twig_Template
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
        $__internal_ec8a8ab029701f09b1b3dd6786a1e0641b18a9df773f68b01d97e32adda96bce = $this->env->getExtension("native_profiler");
        $__internal_ec8a8ab029701f09b1b3dd6786a1e0641b18a9df773f68b01d97e32adda96bce->enter($__internal_ec8a8ab029701f09b1b3dd6786a1e0641b18a9df773f68b01d97e32adda96bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ec8a8ab029701f09b1b3dd6786a1e0641b18a9df773f68b01d97e32adda96bce->leave($__internal_ec8a8ab029701f09b1b3dd6786a1e0641b18a9df773f68b01d97e32adda96bce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
