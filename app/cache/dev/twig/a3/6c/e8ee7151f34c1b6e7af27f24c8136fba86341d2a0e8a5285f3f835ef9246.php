<?php

/* BackendBundle:Valoracion:show.html.twig */
class __TwigTemplate_a36ce8ee7151f34c1b6e7af27f24c8136fba86341d2a0e8a5285f3f835ef9246 extends Twig_Template
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
        echo "<h1>Valoracion</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calificacion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calificacion"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opinion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "opinion"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Puntaje</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "puntaje"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Revisado</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "revisado"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("valoracion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valoracion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Valoracion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  97 => 28,  161 => 63,  129 => 52,  114 => 39,  100 => 36,  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 71,  155 => 48,  137 => 54,  113 => 54,  104 => 37,  90 => 33,  65 => 23,  70 => 13,  34 => 7,  58 => 19,  84 => 37,  23 => 1,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 74,  126 => 37,  118 => 40,  77 => 26,  76 => 31,  172 => 59,  160 => 54,  150 => 58,  81 => 34,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 70,  169 => 57,  140 => 55,  132 => 35,  128 => 38,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 53,  135 => 44,  119 => 48,  102 => 39,  71 => 26,  67 => 26,  63 => 24,  59 => 27,  38 => 6,  94 => 35,  89 => 30,  85 => 38,  75 => 31,  68 => 29,  56 => 9,  87 => 30,  21 => 3,  26 => 4,  93 => 43,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 65,  163 => 55,  158 => 67,  156 => 66,  151 => 59,  142 => 59,  138 => 37,  136 => 42,  121 => 48,  117 => 44,  105 => 23,  91 => 26,  62 => 28,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 28,  72 => 30,  69 => 24,  47 => 15,  40 => 7,  37 => 5,  22 => 3,  246 => 97,  157 => 62,  145 => 39,  139 => 45,  131 => 47,  123 => 58,  120 => 95,  115 => 28,  111 => 30,  108 => 43,  101 => 35,  98 => 45,  96 => 34,  83 => 29,  74 => 30,  66 => 14,  55 => 21,  52 => 20,  50 => 16,  43 => 14,  41 => 10,  35 => 6,  32 => 6,  29 => 5,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 60,  173 => 69,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 70,  133 => 65,  130 => 43,  125 => 44,  122 => 48,  116 => 54,  112 => 43,  109 => 44,  106 => 50,  103 => 31,  99 => 46,  95 => 42,  92 => 42,  86 => 36,  82 => 22,  80 => 32,  73 => 25,  64 => 26,  60 => 22,  57 => 22,  54 => 22,  51 => 14,  48 => 19,  45 => 16,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 3,);
    }
}
