<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_68190727bb6961998bf37714cc611eaf02157ef8ff08da6cc6e034bf4c08bea2 extends Twig_Template
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
        $__internal_174491430a96c2af81fa6af767ac3a929be40fe0bffa7f62f6fbc11e93ca697e = $this->env->getExtension("native_profiler");
        $__internal_174491430a96c2af81fa6af767ac3a929be40fe0bffa7f62f6fbc11e93ca697e->enter($__internal_174491430a96c2af81fa6af767ac3a929be40fe0bffa7f62f6fbc11e93ca697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_174491430a96c2af81fa6af767ac3a929be40fe0bffa7f62f6fbc11e93ca697e->leave($__internal_174491430a96c2af81fa6af767ac3a929be40fe0bffa7f62f6fbc11e93ca697e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
