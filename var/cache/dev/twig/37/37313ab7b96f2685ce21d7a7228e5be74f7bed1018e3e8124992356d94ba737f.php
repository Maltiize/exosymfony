<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0e4196fea55afbd8fbf9e6514894e4a28c7fc95052e5215a05caaf5c56a18a12 extends Twig_Template
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
        $__internal_25d4c729c2817aefe6743bde321fc1e494018ab1cc615d4fdffad67d11e36808 = $this->env->getExtension("native_profiler");
        $__internal_25d4c729c2817aefe6743bde321fc1e494018ab1cc615d4fdffad67d11e36808->enter($__internal_25d4c729c2817aefe6743bde321fc1e494018ab1cc615d4fdffad67d11e36808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_25d4c729c2817aefe6743bde321fc1e494018ab1cc615d4fdffad67d11e36808->leave($__internal_25d4c729c2817aefe6743bde321fc1e494018ab1cc615d4fdffad67d11e36808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
