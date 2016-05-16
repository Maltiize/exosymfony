<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e92fb345524d7bf51395d1d5d3d4258bf5c31ce76b7c98ca9b3c706ada08fc66 extends Twig_Template
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
        $__internal_acede2b064d1b8242066612ed62b1bccbe30b663655c3dafe347626ddbdede8a = $this->env->getExtension("native_profiler");
        $__internal_acede2b064d1b8242066612ed62b1bccbe30b663655c3dafe347626ddbdede8a->enter($__internal_acede2b064d1b8242066612ed62b1bccbe30b663655c3dafe347626ddbdede8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_acede2b064d1b8242066612ed62b1bccbe30b663655c3dafe347626ddbdede8a->leave($__internal_acede2b064d1b8242066612ed62b1bccbe30b663655c3dafe347626ddbdede8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
