<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_8fff1af14673b18dc678bab3cff39b93a38b431b3c363edf2d6e957f8dafb06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  97 => 28,  161 => 63,  129 => 52,  114 => 39,  100 => 36,  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 71,  155 => 48,  137 => 54,  113 => 54,  104 => 37,  90 => 32,  65 => 23,  70 => 13,  34 => 6,  58 => 15,  84 => 29,  23 => 1,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 74,  126 => 37,  118 => 40,  77 => 26,  76 => 17,  172 => 59,  160 => 54,  150 => 58,  81 => 34,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 70,  169 => 57,  140 => 55,  132 => 35,  128 => 38,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 53,  135 => 44,  119 => 48,  102 => 17,  71 => 26,  67 => 26,  63 => 24,  59 => 13,  38 => 6,  94 => 34,  89 => 30,  85 => 38,  75 => 31,  68 => 29,  56 => 11,  87 => 30,  21 => 3,  26 => 11,  93 => 43,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 10,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 65,  163 => 55,  158 => 67,  156 => 66,  151 => 59,  142 => 59,  138 => 37,  136 => 42,  121 => 48,  117 => 19,  105 => 18,  91 => 26,  62 => 16,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 28,  72 => 20,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 97,  157 => 62,  145 => 39,  139 => 45,  131 => 47,  123 => 58,  120 => 20,  115 => 28,  111 => 30,  108 => 19,  101 => 35,  98 => 45,  96 => 34,  83 => 29,  74 => 30,  66 => 17,  55 => 21,  52 => 10,  50 => 16,  43 => 7,  41 => 5,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 60,  173 => 69,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 70,  133 => 65,  130 => 43,  125 => 44,  122 => 48,  116 => 54,  112 => 43,  109 => 44,  106 => 50,  103 => 31,  99 => 46,  95 => 42,  92 => 42,  86 => 25,  82 => 28,  80 => 22,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 3,  30 => 3,);
    }
}
