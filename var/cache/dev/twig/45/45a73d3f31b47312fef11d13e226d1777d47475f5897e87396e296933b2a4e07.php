<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1ad69d2349430fc5e895aef0714ebddde7e5b4f9fe3d72c7f9043f5b67976fa0 extends Twig_Template
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
        $__internal_e03ecfd2245d2624358d1ac4627d46a8cf5e74ba7281cb2a0181164ca836ef74 = $this->env->getExtension("native_profiler");
        $__internal_e03ecfd2245d2624358d1ac4627d46a8cf5e74ba7281cb2a0181164ca836ef74->enter($__internal_e03ecfd2245d2624358d1ac4627d46a8cf5e74ba7281cb2a0181164ca836ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e03ecfd2245d2624358d1ac4627d46a8cf5e74ba7281cb2a0181164ca836ef74->leave($__internal_e03ecfd2245d2624358d1ac4627d46a8cf5e74ba7281cb2a0181164ca836ef74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
