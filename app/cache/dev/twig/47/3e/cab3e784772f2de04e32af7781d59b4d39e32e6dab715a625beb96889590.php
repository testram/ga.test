<?php

/* ::redaccion.html.twig */
class __TwigTemplate_473ecab3e784772f2de04e32af7781d59b4d39e32e6dab715a625beb96889590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/redaccion/js/ajax-eliminar.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<header>
    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">
                Tu portada 
            </a>
        </li>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("crear_juego");
        echo "\">
                Crear reseña
            </a>
        </li>
        <li>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfil", array("username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
        echo "\">
            Modificar Perfil
            </a>
        </li>
        
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("redaccion_logout");
        echo "\">
                Cerrar sesión
            </a>
        </li>
    </ul>
</header>

";
        // line 35
        $this->displayBlock('article', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('aside', $context, $blocks);
        // line 40
        echo "

";
    }

    // line 35
    public function block_article($context, array $blocks = array())
    {
    }

    // line 38
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::redaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  101 => 35,  95 => 40,  93 => 38,  88 => 35,  78 => 28,  69 => 22,  61 => 17,  53 => 12,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  187 => 74,  181 => 71,  177 => 70,  173 => 69,  166 => 65,  161 => 63,  157 => 62,  151 => 59,  147 => 58,  143 => 57,  137 => 54,  133 => 53,  129 => 52,  122 => 48,  118 => 47,  114 => 46,  108 => 43,  104 => 42,  100 => 41,  94 => 38,  90 => 37,  86 => 36,  79 => 32,  75 => 31,  71 => 30,  66 => 28,  62 => 27,  59 => 26,  51 => 14,  48 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
