<?php

/* ::frontend.html.twig */
class __TwigTemplate_573974bc3a35d6b24c68ad136cfad5ab54dbd85c2943ee5007926147256ec0fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'loginRegistro' => array($this, 'block_loginRegistro'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/juego/js/ajax-search.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<header id=\"principal\">

    <div id=\"logo\">
        <a>
            <figure>
                <img src=\"\"></img>
            </figure>
        </a>
    </div>
    <div style=\"position:relative;\">
        <form  id=\"ajax-search-form\"  action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\"  method=\"POST\">

            <input id=\"buscador\" data-url=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("ajax_search");
        echo "\" required type=\"text\" name=\"juego\" placeholder=\"Escriba el nombre del juego\" />
            <input type=\"submit\">

        </form>
        <div id=\"resultado\" style=\"background-color: grey; position: absolute; z-index: 3;\">

        </div>

    </div>


    ";
        // line 35
        $this->displayBlock('loginRegistro', $context, $blocks);
        // line 70
        echo "


</header>

<nav>
    <ul>
        <li>
            ##TOP GA##              
        </li>
        <li>
            ##PC
        </li>
        <li>
            ##360##
        </li>
        <li>
            ##PS3##
        </li>
    </ul>
</nav>

<article>
      ";
        // line 93
        $this->displayBlock('article', $context, $blocks);
        // line 95
        echo "
</article>

<aside>
      ";
        // line 99
        $this->displayBlock('aside', $context, $blocks);
        // line 109
        echo "  ";
    }

    // line 35
    public function block_loginRegistro($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 37
            echo "    <div id=\"logueado\">
        ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 39
                echo "        <p class=\"info\">
";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
                echo "
        </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "

        <p>Bienvenido 
            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_perfil", array("username" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
            echo "\">
";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " 
            </a>
        </p>
    </div>
    ";
        } else {
            // line 52
            echo "    <div id=\"login-registro\">
        <p>
            <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("usuario_login");
            echo "\">
                Iniciar Sesion
            </a>
            |

            <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("usuario_registro");
            echo "\">
                Registrarse
            </a>
            </a>

        </p>
    </div>


    ";
        }
        // line 69
        echo "    ";
    }

    // line 93
    public function block_article($context, array $blocks = array())
    {
        // line 94
        echo "      ";
    }

    // line 99
    public function block_aside($context, array $blocks = array())
    {
        // line 100
        echo "       ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 101
            echo "    <p>
        <a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\">
            Salir
        </a>
    </p>
      ";
        }
        // line 107
        echo "</aside>
";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 107,  219 => 102,  216 => 101,  213 => 100,  210 => 99,  206 => 94,  203 => 93,  199 => 69,  186 => 59,  178 => 54,  174 => 52,  166 => 47,  162 => 46,  157 => 43,  148 => 40,  145 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  128 => 109,  126 => 99,  120 => 95,  118 => 93,  93 => 70,  91 => 35,  77 => 24,  72 => 22,  60 => 12,  51 => 9,  47 => 8,  44 => 7,  41 => 6,  36 => 4,  33 => 3,  109 => 30,  104 => 27,  90 => 26,  86 => 24,  84 => 23,  74 => 18,  70 => 17,  65 => 15,  61 => 14,  57 => 11,  40 => 11,  31 => 4,  28 => 3,);
    }
}
