<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f5d25e730ef255744bd4c4f8d1e9b55a43198bc82fc66cc8a093e4251ca858e4 extends Twig_Template
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
        $__internal_710db9cf71e97545295041f43c76e7f01a1d8e7405c82c5fd22cbd56d8bc97e1 = $this->env->getExtension("native_profiler");
        $__internal_710db9cf71e97545295041f43c76e7f01a1d8e7405c82c5fd22cbd56d8bc97e1->enter($__internal_710db9cf71e97545295041f43c76e7f01a1d8e7405c82c5fd22cbd56d8bc97e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_710db9cf71e97545295041f43c76e7f01a1d8e7405c82c5fd22cbd56d8bc97e1->leave($__internal_710db9cf71e97545295041f43c76e7f01a1d8e7405c82c5fd22cbd56d8bc97e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
