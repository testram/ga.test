<?php

/* JuegoBundle:Default:lista-juegos-puntuacion.html.twig */
class __TwigTemplate_50b89f095d665a156e6402535c4e6e247755eb5aac56dfad818d6b1c324eadf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuegoBundle:Default:listado-global.html.twig");

        $this->blocks = array(
            'seccion' => array($this, 'block_seccion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuegoBundle:Default:listado-global.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_seccion($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) ? $context["juegos"] : $this->getContext($context, "juegos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 6
            echo "<section>
    <span class=\"numeracion_item\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "        
    </span>
 ";
            // line 10
            $this->env->loadTemplate("JuegoBundle:Default:includes/lista-detalle-juegos.html.twig")->display($context);
            // line 11
            echo "</section>
<section class=\"puntuacion\">
    <span id=\"puntuacion\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "puntuacion"), "html", null, true);
            echo "</span>
    <span id=\"votos\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "votos"), "html", null, true);
            echo "</span>
</section>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:lista-juegos-puntuacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  34 => 5,  58 => 21,  84 => 20,  23 => 1,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 40,  126 => 99,  118 => 93,  77 => 24,  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 29,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 35,  128 => 109,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 107,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 36,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 70,  88 => 8,  78 => 17,  46 => 10,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 37,  136 => 56,  121 => 46,  117 => 44,  105 => 32,  91 => 35,  62 => 11,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 17,  72 => 22,  69 => 6,  47 => 8,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 43,  145 => 39,  139 => 45,  131 => 41,  123 => 35,  120 => 95,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 21,  96 => 31,  83 => 7,  74 => 12,  66 => 13,  55 => 8,  52 => 21,  50 => 13,  43 => 8,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 46,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 38,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 24,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 18,  73 => 16,  64 => 5,  60 => 10,  57 => 18,  54 => 10,  51 => 6,  48 => 13,  45 => 9,  42 => 7,  39 => 8,  36 => 8,  33 => 7,  30 => 7,);
    }
}
