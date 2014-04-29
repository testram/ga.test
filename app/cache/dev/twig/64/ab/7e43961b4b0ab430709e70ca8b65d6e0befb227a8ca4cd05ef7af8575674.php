<?php

/* ::base.html.twig */
class __TwigTemplate_64ab7e43961b4b0ab430709e70ca8b65d6e0befb227a8ca4cd05ef7af8575674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | GameAffinity</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"contenedor\">
           
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "            <footer>
                &copy; ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - GameAffinity. Todos los derechos reservados
                
            </footer>
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  69 => 6,  64 => 5,  55 => 17,  49 => 14,  46 => 13,  35 => 7,  29 => 5,  23 => 1,  227 => 107,  219 => 102,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  203 => 93,  199 => 69,  186 => 59,  178 => 54,  174 => 52,  166 => 47,  162 => 46,  157 => 43,  148 => 40,  145 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  128 => 109,  126 => 99,  120 => 95,  118 => 93,  93 => 70,  91 => 35,  77 => 24,  72 => 22,  60 => 12,  51 => 9,  47 => 8,  44 => 12,  41 => 6,  36 => 4,  33 => 6,  109 => 30,  104 => 27,  90 => 26,  86 => 24,  84 => 23,  74 => 12,  70 => 17,  65 => 15,  61 => 14,  57 => 18,  40 => 11,  31 => 4,  28 => 3,);
    }
}
