<?php

/* JuegoBundle:Default:ficha.html.twig */
class __TwigTemplate_f954097a00abe940b54189758fb31fa8fa8e0457607f3a2813d860557a6c37dc extends Twig_Template
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
            'aside' => array($this, 'block_aside'),
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
        echo "<section>
    <div class=\"ficha-item-clave\">Año</span>
        <div class=\"ficha-item-valor\">";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "fechaLanzamiento"), "Y"), "html", null, true);
        echo "</div>
</section>
<section>
    <div class=\"ficha-item-clave\">Desarrollador</div>
    <div class=\"ficha-item-valor\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "desarrollador"), "nombre"), "html", null, true);
        echo "</div>
</section>
<section>
    <div class=\"ficha-item-clave\">Genero</div>
    <div class=\"ficha-item-valor\">
        ";
        // line 29
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
            // line 30
            echo "         ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["genero"]) ? $context["genero"] : $this->getContext($context, "genero")), "nombre")), "html", null, true);
            echo "
        ";
            // line 31
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                // line 32
                echo "        .
        ";
            }
            // line 34
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
        // line 35
        echo "
    </div>
</section>

<section>
    <div class=\"ficha-item-clave\">Sistema</div>
     ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "sistemas"));
        foreach ($context['_seq'] as $context["_key"] => $context["sistema"]) {
            // line 42
            echo "    <div class=\"ficha-item-valor\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sistema"]) ? $context["sistema"] : $this->getContext($context, "sistema")), "nombre"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</section>

<section>
    <p>
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valoracion_form", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
        echo "\">
            Añade tu critica
        </a>
    </p>
</section>
";
    }

    // line 54
    public function block_aside($context, array $blocks = array())
    {
        // line 55
        echo "<section>
    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "foto"), "html", null, true);
        echo "\"></img>
</section>
<section>
    <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "puntuacion")), "html", null, true);
        echo "</p>
    <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "votos")), "html", null, true);
        echo "</p>
</section>
";
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:ficha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 59,  160 => 54,  150 => 48,  81 => 29,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 42,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 56,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 32,  91 => 27,  62 => 18,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 41,  123 => 35,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 14,  66 => 20,  55 => 15,  52 => 21,  50 => 13,  43 => 8,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
