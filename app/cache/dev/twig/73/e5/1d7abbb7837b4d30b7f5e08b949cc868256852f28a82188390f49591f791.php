<?php

/* BackendBundle:Categoria:edit.html.twig */
class __TwigTemplate_73e51d7abbb7837b4d30b7f5e08b949cc868256852f28a82188390f49591f791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Categoria edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Categoria:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  161 => 63,  129 => 52,  114 => 46,  100 => 41,  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 71,  155 => 48,  137 => 54,  113 => 42,  104 => 42,  90 => 37,  65 => 15,  70 => 13,  34 => 7,  58 => 8,  84 => 23,  23 => 1,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 40,  126 => 37,  118 => 47,  77 => 23,  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 25,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 70,  169 => 57,  140 => 55,  132 => 35,  128 => 38,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 57,  135 => 44,  119 => 42,  102 => 32,  71 => 30,  67 => 15,  63 => 22,  59 => 26,  38 => 6,  94 => 38,  89 => 17,  85 => 26,  75 => 31,  68 => 20,  56 => 9,  87 => 25,  21 => 3,  26 => 4,  93 => 38,  88 => 35,  78 => 28,  46 => 12,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 65,  163 => 55,  158 => 67,  156 => 66,  151 => 59,  142 => 59,  138 => 37,  136 => 42,  121 => 46,  117 => 44,  105 => 23,  91 => 26,  62 => 27,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 17,  72 => 26,  69 => 15,  47 => 9,  40 => 7,  37 => 5,  22 => 3,  246 => 97,  157 => 62,  145 => 39,  139 => 45,  131 => 41,  123 => 35,  120 => 95,  115 => 28,  111 => 30,  108 => 43,  101 => 35,  98 => 33,  96 => 31,  83 => 7,  74 => 17,  66 => 14,  55 => 17,  52 => 15,  50 => 16,  43 => 11,  41 => 10,  35 => 6,  32 => 6,  29 => 5,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 60,  173 => 69,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 47,  133 => 53,  130 => 43,  125 => 44,  122 => 48,  116 => 33,  112 => 27,  109 => 30,  106 => 38,  103 => 31,  99 => 31,  95 => 40,  92 => 18,  86 => 36,  82 => 22,  80 => 20,  73 => 20,  64 => 13,  60 => 10,  57 => 18,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 5,  36 => 7,  33 => 6,  30 => 3,);
    }
}