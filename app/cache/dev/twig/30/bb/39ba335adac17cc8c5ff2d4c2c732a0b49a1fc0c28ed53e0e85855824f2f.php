<?php

/* JuegoBundle:Default:lista-juegos-general.html.twig */
class __TwigTemplate_30bb39ba335adac17cc8c5ff2d4c2c732a0b49a1fc0c28ed53e0e85855824f2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuegoBundle:Default:listado-global.html.twig");

        $this->blocks = array(
            'seccion' => array($this, 'block_seccion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuegoBundle:Default:listado-global.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_seccion($context, array $blocks = array())
    {
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) ? $context["juegos"] : $this->getContext($context, "juegos")));
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 6
            echo "<section class=\"item_juego\"
         <header>
        <hgroup>
            <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ficha", array("juego" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "nombre"), "html", null, true);
            echo "</a></h2>
            <h3><a>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "desarrollador"), "nombre"), "html", null, true);
            echo "</a></h3>
        </hgroup>
    </header>
   <p>
        ";
            // line 14
            $context["categorias"] = $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "categorias");
            // line 15
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre")), "html", null, true);
                echo "
            ";
                // line 17
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 18
                    echo "        ,
            ";
                }
                // line 20
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </p>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "JuegoBundle:Default:lista-juegos-general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  98 => 21,  84 => 20,  80 => 18,  78 => 17,  73 => 16,  55 => 15,  53 => 14,  46 => 10,  40 => 9,  35 => 6,  31 => 5,  28 => 4,);
    }
}
