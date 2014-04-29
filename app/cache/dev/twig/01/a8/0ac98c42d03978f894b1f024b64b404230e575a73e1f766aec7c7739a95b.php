<?php

/* base.html.twig */
class __TwigTemplate_01a80ac98c42d03978f894b1f024b64b404230e575a73e1f766aec7c7739a95b extends Twig_Template
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  64 => 5,  57 => 18,  55 => 17,  49 => 14,  46 => 13,  44 => 12,  35 => 7,  29 => 5,  23 => 1,  106 => 38,  101 => 35,  95 => 40,  93 => 38,  88 => 35,  78 => 28,  69 => 6,  61 => 17,  53 => 12,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  187 => 74,  181 => 71,  177 => 70,  173 => 69,  166 => 65,  161 => 63,  157 => 62,  151 => 59,  147 => 58,  143 => 57,  137 => 54,  133 => 53,  129 => 52,  122 => 48,  118 => 47,  114 => 46,  108 => 43,  104 => 42,  100 => 41,  94 => 38,  90 => 37,  86 => 36,  79 => 17,  75 => 31,  71 => 30,  66 => 28,  62 => 27,  59 => 26,  51 => 14,  48 => 9,  37 => 5,  33 => 6,  30 => 3,);
    }
}
