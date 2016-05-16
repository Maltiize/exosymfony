<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_016ec88f009b6a82292da54508fd5675eacdc2a5a15dded5182e3d49285061da extends Twig_Template
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
        $__internal_3f0275edd363106e3a9965352010ace97f6da75d28e3a722364996371ddf8e8f = $this->env->getExtension("native_profiler");
        $__internal_3f0275edd363106e3a9965352010ace97f6da75d28e3a722364996371ddf8e8f->enter($__internal_3f0275edd363106e3a9965352010ace97f6da75d28e3a722364996371ddf8e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3f0275edd363106e3a9965352010ace97f6da75d28e3a722364996371ddf8e8f->leave($__internal_3f0275edd363106e3a9965352010ace97f6da75d28e3a722364996371ddf8e8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
