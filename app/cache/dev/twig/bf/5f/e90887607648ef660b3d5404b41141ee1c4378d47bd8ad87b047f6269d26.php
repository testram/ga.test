<?php

/* JuegoBundle:Default:review.html.twig.twig */
class __TwigTemplate_bf5fe90887607648ef660b3d5404b41141ee1c4378d47bd8ad87b047f6269d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuegoBundle:Default:juego.html.twig");

        $this->blocks = array(
            'ruta_ficha' => array($this, 'block_ruta_ficha'),
            'titulo' => array($this, 'block_titulo'),
            'ruta_criticas' => array($this, 'block_ruta_criticas'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuegoBundle:Default:juego.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ruta_ficha($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ficha", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_titulo($context, array $blocks = array())
    {
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "nombre")), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_ruta_criticas($context, array $blocks = array())
    {
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("review", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 19
            echo "<div>
    ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
<section>
    <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "puntuacion")), "html", null, true);
        echo "</p>
    <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "votos")), "html", null, true);
        echo "</p>
</section>
<section>
    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "foto"), "html", null, true);
        echo "\"></img>
</section>
<section>
    <div class=\"ficha-item-clave\">Año</span>
        <div class=\"ficha-item-valor\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "fechaLanzamiento"), "Y"), "html", null, true);
        echo "</div>
</section>
<section>
    <div class=\"ficha-item-clave\">Desarrollador</div>
    <div class=\"ficha-item-valor\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "desarrollador"), "nombre"), "html", null, true);
        echo "</div>
</section>
<section>
    <div class=\"ficha-item-clave\">Genero</div>
    <div class=\"ficha-item-valor\">
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "categorias"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["genero"]) {
            // line 43
            echo "         ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")), "nombre")), "html", null, true);
            echo "
        ";
            // line 44
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 45
                echo "        .
        ";
            }
            // line 47
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    </div>
</section>
<section>
    <div class=\"ficha-item-clave\">Critica</div>
    <div class=\"ficha-item-valor\">";
        // line 53
        echo $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "critica");
        echo "</div>
</section>
<section>
    <div class=\"ficha-item-clave\">Desarrollador</div>
    <div class=\"ficha-item-valor\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "desarrollador"), "nombre"), "html", null, true);
        echo "</div>
</section>

<section>
    <div class=\"ficha-item-clave\">Sistema</div>
     ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "sistemas"));
        foreach ($context['_seq'] as $context["_key"] => $context["sistema"]) {
            // line 63
            echo "    <div class=\"ficha-item-valor\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sistema"]) ? $context["sistema"] : $this->getContext($context, "sistema")), "nombre"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</section>


";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valoraciones"]) ? $context["valoraciones"] : $this->getContext($context, "valoraciones")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
            // line 69
            echo "<section>
    <article>
        <header>
            <h3><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "usuario")) ? ($this->env->getExtension('routing')->getPath("usuario_perfil", array("username" => $this->getAttribute($this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "usuario"), "username")))) : ($this->env->getExtension('routing')->getPath("portada_redaccion", array("redactor" => $this->getAttribute($this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "redactor"), "username"))))), "html", null, true);
            // line 74
            echo "\">
                    
";
            // line 76
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "usuario")) ? ($this->getAttribute($this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "usuario"), "username")) : ($this->getAttribute($this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "redactor"), "username"))), "html", null, true);
            echo "
                </a>

            </h3>
            <div class=\"calificacion\">

            ";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "calificacion")), "html", null, true);
            echo "

            </div>
            <h2>
            ";
            // line 86
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "titulo")), "html", null, true);
            echo "
            </h2>

            <p>
            ";
            // line 90
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["valoracion"]) ? $context["valoracion"] : $this->getContext($context, "valoracion")), "opinion")), "html", null, true);
            echo "
            </p>

        </header>

</section>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 97
            echo "<section>
    <div class=\"mensaje\">
        <p>
            Aun no hay criticas para esta reseña
        </p>
    </div>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:review.html.twig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 63,  155 => 48,  137 => 45,  113 => 42,  104 => 27,  90 => 26,  65 => 19,  70 => 17,  34 => 6,  58 => 17,  84 => 23,  23 => 3,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 40,  126 => 99,  118 => 93,  77 => 23,  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 25,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 62,  169 => 57,  140 => 55,  132 => 35,  128 => 109,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 44,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 20,  38 => 9,  94 => 28,  89 => 20,  85 => 26,  75 => 17,  68 => 20,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 70,  88 => 8,  78 => 17,  46 => 10,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 37,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 29,  62 => 11,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 17,  72 => 22,  69 => 6,  47 => 8,  40 => 9,  37 => 10,  22 => 2,  246 => 97,  157 => 43,  145 => 39,  139 => 45,  131 => 41,  123 => 35,  120 => 95,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 33,  96 => 31,  83 => 7,  74 => 18,  66 => 13,  55 => 8,  52 => 14,  50 => 16,  43 => 10,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 47,  133 => 55,  130 => 43,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 30,  106 => 24,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 18,  73 => 16,  64 => 5,  60 => 10,  57 => 12,  54 => 10,  51 => 6,  48 => 13,  45 => 9,  42 => 7,  39 => 8,  36 => 8,  33 => 7,  30 => 7,);
    }
}
