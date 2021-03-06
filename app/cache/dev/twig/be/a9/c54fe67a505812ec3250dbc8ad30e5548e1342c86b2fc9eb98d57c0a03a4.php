<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_bea9c54fe67a505812ec3250dbc8ad30e5548e1342c86b2fc9eb98d57c0a03a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  97 => 28,  161 => 63,  129 => 52,  114 => 39,  100 => 36,  234 => 90,  211 => 76,  207 => 74,  205 => 72,  200 => 69,  195 => 68,  190 => 65,  181 => 71,  155 => 48,  137 => 54,  113 => 54,  104 => 37,  90 => 33,  65 => 23,  70 => 13,  34 => 6,  58 => 15,  84 => 37,  23 => 1,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  186 => 59,  178 => 54,  174 => 52,  148 => 74,  126 => 37,  118 => 40,  77 => 26,  76 => 21,  172 => 59,  160 => 54,  150 => 58,  81 => 34,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 82,  214 => 69,  177 => 70,  169 => 57,  140 => 55,  132 => 35,  128 => 38,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 102,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 53,  135 => 44,  119 => 48,  102 => 39,  71 => 26,  67 => 26,  63 => 24,  59 => 27,  38 => 6,  94 => 35,  89 => 30,  85 => 38,  75 => 31,  68 => 29,  56 => 9,  87 => 30,  21 => 3,  26 => 4,  93 => 43,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 10,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 65,  163 => 55,  158 => 67,  156 => 66,  151 => 59,  142 => 59,  138 => 37,  136 => 42,  121 => 48,  117 => 44,  105 => 23,  91 => 26,  62 => 16,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 28,  72 => 20,  69 => 24,  47 => 15,  40 => 7,  37 => 5,  22 => 3,  246 => 97,  157 => 62,  145 => 39,  139 => 45,  131 => 47,  123 => 58,  120 => 95,  115 => 28,  111 => 30,  108 => 43,  101 => 35,  98 => 45,  96 => 34,  83 => 29,  74 => 30,  66 => 17,  55 => 21,  52 => 10,  50 => 16,  43 => 7,  41 => 10,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 93,  199 => 69,  193 => 73,  189 => 71,  187 => 74,  182 => 66,  176 => 60,  173 => 69,  168 => 72,  164 => 59,  162 => 53,  154 => 58,  149 => 51,  147 => 58,  144 => 44,  141 => 70,  133 => 65,  130 => 43,  125 => 44,  122 => 48,  116 => 54,  112 => 43,  109 => 44,  106 => 50,  103 => 31,  99 => 46,  95 => 42,  92 => 42,  86 => 25,  82 => 22,  80 => 22,  73 => 25,  64 => 26,  60 => 22,  57 => 12,  54 => 22,  51 => 14,  48 => 9,  45 => 16,  42 => 10,  39 => 8,  36 => 7,  33 => 6,  30 => 3,);
    }
}
