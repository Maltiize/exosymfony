<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_474eba5b633bd580b6441eea39743ac9fa3cf4382f385136e44e29a48bfde783 extends Twig_Template
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
        $__internal_92e5fd6e6767f1a07de8ccfcb2a3f50e27c4e5a1f7b0324bc22f10d0d6eca6ca = $this->env->getExtension("native_profiler");
        $__internal_92e5fd6e6767f1a07de8ccfcb2a3f50e27c4e5a1f7b0324bc22f10d0d6eca6ca->enter($__internal_92e5fd6e6767f1a07de8ccfcb2a3f50e27c4e5a1f7b0324bc22f10d0d6eca6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_92e5fd6e6767f1a07de8ccfcb2a3f50e27c4e5a1f7b0324bc22f10d0d6eca6ca->leave($__internal_92e5fd6e6767f1a07de8ccfcb2a3f50e27c4e5a1f7b0324bc22f10d0d6eca6ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
