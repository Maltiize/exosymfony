<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_536b2b38cfe888004fd781e121028f5b046d76a8b4ae697ed6137ea45c1b63ef extends Twig_Template
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
        $__internal_92baaac5789711812dda72be3c8cd1ce8d04d22e7f35dad86c38cb9559183202 = $this->env->getExtension("native_profiler");
        $__internal_92baaac5789711812dda72be3c8cd1ce8d04d22e7f35dad86c38cb9559183202->enter($__internal_92baaac5789711812dda72be3c8cd1ce8d04d22e7f35dad86c38cb9559183202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_92baaac5789711812dda72be3c8cd1ce8d04d22e7f35dad86c38cb9559183202->leave($__internal_92baaac5789711812dda72be3c8cd1ce8d04d22e7f35dad86c38cb9559183202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
