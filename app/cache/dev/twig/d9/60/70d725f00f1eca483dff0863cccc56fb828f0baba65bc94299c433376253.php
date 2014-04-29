<?php

/* JuegoBundle:Default:portada.html.twig */
class __TwigTemplate_d96070d725f00f1eca483dff0863cccc56fb828f0baba65bc94299c433376253 extends Twig_Template
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
        echo "<section class=\"juegos\">
    <h2>
        Juegos Nuevos
    </h2>
    <p>
    <table border=1 id=\"juegos_nuevos\">
        <tr>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegosNuevos"]) ? $context["juegosNuevos"] : $this->getContext($context, "juegosNuevos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 12
            echo "            <td>
                <article id=\"juego\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ficha", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
            echo "\">
                        <span>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "nombre"), "html", null, true);
            echo "</span>
                    </a>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ficha", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "nombre"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"), "html", null, true);
            echo "\">
                        </img>
                    </a>
                </article>
            </td>
        ";
            // line 23
            if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3)) {
                // line 24
                echo "        </tr><tr>
            ";
            }
            // line 26
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tr>
    </table>
</p>
<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("lista_total_estrenos", array("tipo_lista" => "general"));
        echo "\">Ver mas ></a>
</section>



";
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  104 => 27,  90 => 26,  86 => 24,  84 => 23,  74 => 18,  70 => 17,  65 => 15,  61 => 14,  57 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
