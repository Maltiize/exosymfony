<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_354e5c35d954c07524afdb7e03724ce6919027f9e3044def632e30039142b093 extends Twig_Template
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
        $__internal_66062f0d4ed2a8fe8ca082cffb73851c735879ae14998a570a05b15a27185c77 = $this->env->getExtension("native_profiler");
        $__internal_66062f0d4ed2a8fe8ca082cffb73851c735879ae14998a570a05b15a27185c77->enter($__internal_66062f0d4ed2a8fe8ca082cffb73851c735879ae14998a570a05b15a27185c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_66062f0d4ed2a8fe8ca082cffb73851c735879ae14998a570a05b15a27185c77->leave($__internal_66062f0d4ed2a8fe8ca082cffb73851c735879ae14998a570a05b15a27185c77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
