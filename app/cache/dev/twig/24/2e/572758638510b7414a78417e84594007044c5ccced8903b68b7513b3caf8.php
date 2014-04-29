<?php

/* RedaccionBundle:Default:portada.html.twig */
class __TwigTemplate_242e572758638510b7414a78417e84594007044c5ccced8903b68b7513b3caf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->env->getExtension('security')->isGranted("ROLE_REDACCION")) ? ("::redaccion.html.twig") : ("::frontend.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_article($context, array $blocks = array())
    {
        // line 5
        echo "<h2>Perfil de 
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada_redaccion", array("redactor" => $this->getAttribute((isset($context["redactor"]) ? $context["redactor"] : $this->getContext($context, "redactor")), "username"))), "html", null, true);
        echo "\">
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redactor"]) ? $context["redactor"] : $this->getContext($context, "redactor")), "username"), "html", null, true);
        echo "
    </a>
</h2>

";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) ? $context["juegos"] : $this->getContext($context, "juegos")));
        $context['_iterated'] = false;
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
            echo "<section>
    ";
            // line 13
            if ($this->env->getExtension('security')->isGranted("ROLE_REDACCION")) {
                // line 14
                echo "    
    ";
                // line 15
                $this->env->loadTemplate("JuegoBundle:Default:includes/lista-detalle-juegos.html.twig")->display($context);
                echo " 
    <div>
        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar_juego", array("slug" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"))), "html", null, true);
                echo "\">
            Editar
        </a>
        <a class=\"ajax-eliminar\" data-slug=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "slug"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getUrl("eliminar_juego");
                echo "\">
            Eliminar
        </a>
    </div>
   
    ";
            } else {
                // line 26
                echo "    ";
                $this->env->loadTemplate("JuegoBundle:Default:includes/lista-detalle-juegos.html.twig")->display($context);
                echo " 
    ";
            }
            // line 28
            echo "</section>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 30
            echo "<section>

    <p>
    ";
            // line 33
            echo twig_escape_filter($this->env, (($this->env->getExtension('security')->isGranted("ROLE_REDACCION")) ? ("No has reseñado ningun juego") : (($this->getAttribute((isset($context["redactor"]) ? $context["redactor"] : $this->getContext($context, "redactor")), "username") . " no ha reseñado ningun juego"))), "html", null, true);
            echo "
    </p>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_REDACCION")) {
            // line 38
            echo "<a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfil", array("username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
            echo "\">
    Gestionar Mi perfil
</a>
";
        }
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "RedaccionBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  128 => 38,  126 => 37,  116 => 33,  111 => 30,  97 => 28,  91 => 26,  80 => 20,  74 => 17,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  43 => 11,  36 => 7,  32 => 6,  29 => 5,  26 => 4,);
    }
}
