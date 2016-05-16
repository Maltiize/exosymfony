<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2712ad8defc1aea0880b35c432fff6cfb9ead15b9e3d26866dac0c2d8d879a3b extends Twig_Template
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
        $__internal_e0064f4cf10160a0f6a307b1578f431c49d703e861196d39a3025e40486d556c = $this->env->getExtension("native_profiler");
        $__internal_e0064f4cf10160a0f6a307b1578f431c49d703e861196d39a3025e40486d556c->enter($__internal_e0064f4cf10160a0f6a307b1578f431c49d703e861196d39a3025e40486d556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e0064f4cf10160a0f6a307b1578f431c49d703e861196d39a3025e40486d556c->leave($__internal_e0064f4cf10160a0f6a307b1578f431c49d703e861196d39a3025e40486d556c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
