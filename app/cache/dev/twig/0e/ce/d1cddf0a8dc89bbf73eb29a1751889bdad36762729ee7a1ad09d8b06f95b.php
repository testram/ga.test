<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_0eced1cddf0a8dc89bbf73eb29a1751889bdad36762729ee7a1ad09d8b06f95b extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  165 => 60,  153 => 56,  134 => 54,  127 => 60,  110 => 22,  97 => 41,  161 => 63,  129 => 52,  114 => 39,  100 => 39,  234 => 90,  211 => 76,  207 => 75,  205 => 72,  200 => 72,  195 => 68,  190 => 65,  181 => 65,  155 => 48,  137 => 54,  113 => 48,  104 => 37,  90 => 27,  65 => 23,  70 => 19,  34 => 6,  58 => 17,  84 => 24,  23 => 1,  216 => 79,  213 => 78,  210 => 99,  206 => 94,  186 => 59,  178 => 66,  174 => 52,  148 => 74,  126 => 37,  118 => 49,  77 => 26,  76 => 31,  172 => 64,  160 => 54,  150 => 55,  81 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 70,  169 => 57,  140 => 58,  132 => 35,  128 => 38,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 53,  135 => 62,  119 => 40,  102 => 40,  71 => 26,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 30,  85 => 32,  75 => 31,  68 => 29,  56 => 11,  87 => 34,  21 => 3,  26 => 9,  93 => 43,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 10,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 65,  163 => 55,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 37,  136 => 42,  121 => 50,  117 => 19,  105 => 34,  91 => 26,  62 => 16,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 28,  72 => 20,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 62,  145 => 39,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 28,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 17,  55 => 16,  52 => 14,  50 => 16,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 69,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 63,  173 => 69,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 44,  141 => 51,  133 => 65,  130 => 46,  125 => 51,  122 => 48,  116 => 39,  112 => 43,  109 => 44,  106 => 45,  103 => 31,  99 => 31,  95 => 42,  92 => 42,  86 => 25,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 10,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
