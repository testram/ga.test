<?php

/* JuegoBundle:Default:juego.html.twig */
class __TwigTemplate_b0e95d36cf01c505b653d8dd6f9c8039e3c769eb115f008ed42c84ddb2dd4221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
            'ruta_ficha' => array($this, 'block_ruta_ficha'),
            'titulo' => array($this, 'block_titulo'),
            'ruta_criticas' => array($this, 'block_ruta_criticas'),
            'contenido' => array($this, 'block_contenido'),
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

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "<section class=\"titulo_juego_review\">
    <h2>
        <a href=\"";
        // line 7
        $this->displayBlock('ruta_ficha', $context, $blocks);
        echo "\">
        ";
        // line 8
        $this->displayBlock('titulo', $context, $blocks);
        // line 9
        echo "        </a>
    </h2>
</section>

<section class=\"secciones\">
    <nav>
        <ul>
            <li>
                <a href=\"";
        // line 17
        $this->displayBlock("ruta_ficha", $context, $blocks);
        echo "\">
                    Ficha
                </a>
            </li>
            <li>
                 <a href=\"";
        // line 22
        $this->displayBlock('ruta_criticas', $context, $blocks);
        echo "\">
                    Criticas
                </a>
                
            </li>
        </ul>
    </nav>
</section>


";
        // line 32
        $this->displayBlock('contenido', $context, $blocks);
        // line 34
        echo "
";
    }

    // line 7
    public function block_ruta_ficha($context, array $blocks = array())
    {
    }

    // line 8
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 22
    public function block_ruta_criticas($context, array $blocks = array())
    {
    }

    // line 32
    public function block_contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:juego.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 29,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 42,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 22,  88 => 8,  78 => 34,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 56,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 32,  91 => 27,  62 => 18,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 41,  123 => 35,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 32,  96 => 31,  83 => 7,  74 => 14,  66 => 20,  55 => 17,  52 => 21,  50 => 13,  43 => 8,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
