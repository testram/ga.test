<?php

/* JuegoBundle:Default:includes/lista-detalle-juegos.html.twig */
class __TwigTemplate_59374d10e01294184e0fcda33e1da2fa695e557c165f68d80028e222888a6a98 extends Twig_Template
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
        echo "    <header>
        <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ficha", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "foto"), "html", null, true);
        echo "\">                
            </img>
        </a>
        <hgroup>
            <h2><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ficha", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "nombre"), "html", null, true);
        echo "</a></h2>
            <h3><a href=\"\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "desarrollador"), "nombre"), "html", null, true);
        echo "</a></h3>
        </hgroup>
    </header>
";
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:includes/lista-detalle-juegos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  33 => 7,  22 => 2,  19 => 1,  136 => 42,  128 => 38,  126 => 37,  116 => 33,  111 => 30,  97 => 28,  91 => 26,  80 => 20,  74 => 17,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  43 => 11,  36 => 7,  32 => 6,  29 => 5,  26 => 3,);
    }
}
