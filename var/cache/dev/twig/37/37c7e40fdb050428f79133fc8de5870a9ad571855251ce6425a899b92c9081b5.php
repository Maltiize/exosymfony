<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d4b78213ed80a6f2d9f5b50ae1db91b1e5091507d814aaf1b05e5f9812c6911e extends Twig_Template
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
        $__internal_f50da59c972bc56015164a01d2ecb95382fa405bdc4a16a80e203e49ca71db1a = $this->env->getExtension("native_profiler");
        $__internal_f50da59c972bc56015164a01d2ecb95382fa405bdc4a16a80e203e49ca71db1a->enter($__internal_f50da59c972bc56015164a01d2ecb95382fa405bdc4a16a80e203e49ca71db1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f50da59c972bc56015164a01d2ecb95382fa405bdc4a16a80e203e49ca71db1a->leave($__internal_f50da59c972bc56015164a01d2ecb95382fa405bdc4a16a80e203e49ca71db1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
