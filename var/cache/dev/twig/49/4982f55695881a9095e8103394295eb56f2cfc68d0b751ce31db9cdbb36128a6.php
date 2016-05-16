<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_293d2b14e96117bf703816474a4932ddba28eef904cd6163faceb877c844a053 extends Twig_Template
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
        $__internal_59f16efed98931f716492aafa00105cbde3d6fb098d220fb5060602affb2dcda = $this->env->getExtension("native_profiler");
        $__internal_59f16efed98931f716492aafa00105cbde3d6fb098d220fb5060602affb2dcda->enter($__internal_59f16efed98931f716492aafa00105cbde3d6fb098d220fb5060602affb2dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_59f16efed98931f716492aafa00105cbde3d6fb098d220fb5060602affb2dcda->leave($__internal_59f16efed98931f716492aafa00105cbde3d6fb098d220fb5060602affb2dcda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
