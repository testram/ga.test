<?php

/* JuegoBundle:Default/includes:critica.html.twig */
class __TwigTemplate_df6bd9f1f594ce9afcab1d30bc6586d10c282739a367f43f276f5ed173c2bb74 extends Twig_Template
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
        // line 2
        echo "<h5>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_perfil", array("username" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"))), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "
    </a>
</h5>
<h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["critica"]) ? $context["critica"] : $this->getContext($context, "critica")), "puntaje")), "html", null, true);
        echo "</h4>
<h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["critica"]) ? $context["critica"] : $this->getContext($context, "critica")), "titulo")), "html", null, true);
        echo "</h2>
<p>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["critica"]) ? $context["critica"] : $this->getContext($context, "critica")), "opinion")), "html", null, true);
        echo "
</p>

";
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default/includes:critica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 40,  126 => 99,  118 => 93,  77 => 24,  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 29,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 35,  128 => 109,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 107,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 36,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 4,  93 => 70,  88 => 8,  78 => 34,  46 => 13,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 37,  136 => 56,  121 => 46,  117 => 44,  105 => 32,  91 => 35,  62 => 18,  49 => 14,  24 => 4,  25 => 3,  19 => 2,  79 => 17,  72 => 22,  69 => 6,  47 => 8,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 43,  145 => 39,  139 => 45,  131 => 41,  123 => 35,  120 => 95,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 32,  96 => 31,  83 => 7,  74 => 12,  66 => 20,  55 => 17,  52 => 21,  50 => 13,  43 => 8,  41 => 10,  35 => 7,  32 => 7,  29 => 5,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 46,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 38,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 31,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 5,  60 => 12,  57 => 18,  54 => 10,  51 => 9,  48 => 13,  45 => 9,  42 => 7,  39 => 7,  36 => 8,  33 => 6,  30 => 7,);
    }
}
