<?php

/* RedaccionBundle:Default:form.html.twig */
class __TwigTemplate_38f3bc7c1cde6e0f1c7af9201fc04fae67cf5c448a1bb03022bc6ab2b366b276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::redaccion.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::redaccion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/redaccion/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\">

</script>
<script>
    CKEDITOR.replace(\"gameaffinity_juegobundle_juegotype_critica\");
</script>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "


";
    }

    // line 26
    public function block_article($context, array $blocks = array())
    {
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div>
";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label', array("label" => "Nombre del Juego"));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget');
        echo "
</div>

<div>
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_lanzamiento"), 'label', array("label" => "Fecha de Lanzamiento"));
        echo "
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_lanzamiento"), 'errors');
        echo "
    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_lanzamiento"), 'widget');
        echo "
</div>
<div>
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "desarrollador"), 'label');
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "desarrollador"), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "desarrollador"), 'widget');
        echo "
</div>
<div>
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorias"), 'label');
        echo "
    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorias"), 'errors');
        echo "
    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorias"), 'widget');
        echo "
</div>

<div>
    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sistemas"), 'label');
        echo "
    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sistemas"), 'errors');
        echo "
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sistemas"), 'widget');
        echo "
</div>
<div>
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntuacion"), 'label');
        echo "
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntuacion"), 'errors');
        echo "
    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntuacion"), 'widget');
        echo "
</div>
<div>
    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "critica"), 'label');
        echo "
    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "critica"), 'errors');
        echo "
    <div>
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "critica"), 'widget', array("attr" => array("cols" => "80", "rows" => "10")));
        echo "
    </div>
</div>
<div>
    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotosSecundarias"), 'label', array("label" => "fotos secundarias (opcionales)"));
        echo "
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotosSecundarias"), 'errors');
        echo "
    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fotosSecundarias"), "vars"), "prototype")), 'widget');
        echo "
</div>

";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "RedaccionBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 74,  181 => 71,  177 => 70,  173 => 69,  166 => 65,  161 => 63,  157 => 62,  151 => 59,  147 => 58,  143 => 57,  137 => 54,  133 => 53,  129 => 52,  122 => 48,  118 => 47,  114 => 46,  108 => 43,  104 => 42,  100 => 41,  94 => 38,  90 => 37,  86 => 36,  79 => 32,  75 => 31,  71 => 30,  66 => 28,  62 => 27,  59 => 26,  51 => 14,  48 => 13,  37 => 5,  33 => 4,  30 => 3,);
    }
}
