<?php

/* UsuarioBundle:Default:registro.html.twig */
class __TwigTemplate_1ecaa0afc16df6b6dfdf1f5a4902d98b6a6795eeec88b17b99558eab69a41564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
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
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
<div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre"), 'label');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre"), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre"), 'widget');
        echo "
</div>
<div>
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "username"), 'label', array("label" => "Nombre de Usuario"));
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "username"), 'errors');
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "username"), 'widget');
        echo "
</div>



";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 63,  155 => 48,  137 => 45,  113 => 42,  104 => 27,  90 => 26,  65 => 15,  70 => 13,  34 => 5,  58 => 8,  84 => 23,  23 => 3,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 40,  126 => 99,  118 => 29,  77 => 23,  76 => 32,  172 => 59,  160 => 54,  150 => 48,  81 => 25,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 62,  169 => 57,  140 => 55,  132 => 35,  128 => 109,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 44,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 20,  38 => 6,  94 => 28,  89 => 17,  85 => 26,  75 => 15,  68 => 20,  56 => 9,  87 => 25,  21 => 3,  26 => 3,  93 => 70,  88 => 8,  78 => 17,  46 => 19,  27 => 4,  44 => 13,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 55,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 37,  136 => 56,  121 => 46,  117 => 44,  105 => 23,  91 => 29,  62 => 11,  49 => 13,  24 => 4,  25 => 5,  19 => 2,  79 => 17,  72 => 26,  69 => 6,  47 => 9,  40 => 7,  37 => 13,  22 => 3,  246 => 97,  157 => 43,  145 => 39,  139 => 45,  131 => 41,  123 => 35,  120 => 95,  115 => 28,  111 => 37,  108 => 36,  101 => 21,  98 => 33,  96 => 31,  83 => 7,  74 => 18,  66 => 13,  55 => 8,  52 => 14,  50 => 16,  43 => 8,  41 => 10,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 60,  173 => 65,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 47,  133 => 55,  130 => 43,  125 => 44,  122 => 43,  116 => 41,  112 => 27,  109 => 30,  106 => 24,  103 => 31,  99 => 31,  95 => 28,  92 => 18,  86 => 24,  82 => 22,  80 => 18,  73 => 20,  64 => 5,  60 => 10,  57 => 13,  54 => 10,  51 => 10,  48 => 13,  45 => 9,  42 => 9,  39 => 11,  36 => 7,  33 => 12,  30 => 7,);
    }
}
