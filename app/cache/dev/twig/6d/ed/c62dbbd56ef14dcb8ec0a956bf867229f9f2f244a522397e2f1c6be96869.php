<?php

/* UsuarioBundle:Default:perfil.html.twig */
class __TwigTemplate_6dedc62dbbd56ef14dcb8ec0a956bf867229f9f2f244a522397e2f1c6be96869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
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
        echo "<h2>Perfil de <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_perfil", array("username" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "</a></h2>

";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["criticas"]) ? $context["criticas"] : $this->getContext($context, "criticas")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["critica"]) {
            // line 8
            echo "<section> 
    ";
            // line 9
            $context["juego"] = $this->getAttribute((isset($context["critica"]) ? $context["critica"] : $this->getContext($context, "critica")), "post");
            // line 10
            echo "    ";
            $this->env->loadTemplate("JuegoBundle:Default:includes/lista-detalle-juegos.html.twig")->display($context);
            echo "    
</section>
<section>
    ";
            // line 13
            $context["usuario"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user");
            // line 14
            echo "    ";
            $this->env->loadTemplate("JuegoBundle:Default:includes/critica.html.twig")->display($context);
            // line 15
            echo "</section>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 17
            echo "<section>
    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
            echo " no ha reseñado ningún juego
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['critica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<section>
    ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UsuarioBundle:Default:recientes"));
        echo " 
</section>
";
    }

    // line 27
    public function block_aside($context, array $blocks = array())
    {
        // line 28
        echo "
<p><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("usuario_logout");
        echo "\">Salir</a></p>

";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 63,  155 => 48,  137 => 45,  113 => 42,  104 => 27,  90 => 26,  65 => 19,  70 => 13,  34 => 6,  58 => 8,  84 => 23,  23 => 3,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 40,  126 => 99,  118 => 29,  77 => 23,  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 25,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 62,  169 => 57,  140 => 55,  132 => 35,  128 => 109,  107 => 36,  61 => 9,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 44,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 10,  59 => 20,  38 => 9,  94 => 28,  89 => 17,  85 => 26,  75 => 15,  68 => 20,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 70,  88 => 8,  78 => 17,  46 => 19,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 37,  136 => 56,  121 => 46,  117 => 44,  105 => 23,  91 => 29,  62 => 11,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 17,  72 => 14,  69 => 6,  47 => 8,  40 => 7,  37 => 13,  22 => 3,  246 => 97,  157 => 43,  145 => 39,  139 => 45,  131 => 41,  123 => 35,  120 => 95,  115 => 28,  111 => 37,  108 => 36,  101 => 21,  98 => 33,  96 => 31,  83 => 7,  74 => 18,  66 => 13,  55 => 8,  52 => 14,  50 => 16,  43 => 10,  41 => 10,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 47,  133 => 55,  130 => 43,  125 => 44,  122 => 43,  116 => 41,  112 => 27,  109 => 30,  106 => 24,  103 => 31,  99 => 31,  95 => 28,  92 => 18,  86 => 24,  82 => 22,  80 => 18,  73 => 16,  64 => 5,  60 => 10,  57 => 12,  54 => 10,  51 => 6,  48 => 13,  45 => 9,  42 => 9,  39 => 8,  36 => 7,  33 => 12,  30 => 7,);
    }
}
