<?php

/* JuegoBundle:Default:listado-global.html.twig */
class __TwigTemplate_e91578851ac1e7e1a4b6da6635f3b178fd81f118bc7ebe6c87e62adafddd2ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
            'seccion' => array($this, 'block_seccion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_article($context, array $blocks = array())
    {
        // line 4
        echo "<nav id=\"lista_juegos_global\">
    <ul>
        <li>
            ##vista general
        </li>
         <li>
            ##valoracion
        </li>
         <li>
            ##popularidad
        </li>
         <li>
            ##genero
        </li>
    </ul>
</nav>

";
        // line 21
        $this->displayBlock('seccion', $context, $blocks);
        // line 23
        echo "
";
    }

    // line 21
    public function block_seccion($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:listado-global.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  51 => 21,  32 => 4,  29 => 3,  106 => 24,  98 => 21,  84 => 20,  80 => 18,  78 => 17,  73 => 16,  55 => 15,  53 => 23,  46 => 10,  40 => 9,  35 => 6,  31 => 5,  28 => 4,);
    }
}
