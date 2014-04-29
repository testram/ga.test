<?php

/* RedaccionBundle:Default:login.html.twig */
class __TwigTemplate_c0a9833c5b74cd9db815f7bab1f9e2ae626fa7d848885746448058ad6795c5f8 extends Twig_Template
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

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"error\">
    ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo "</div>

<form method =\"POST\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("redaccion_login_check");
        echo "\" >
    <div>
    username:
    <input type=\"text\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
    </div>
    
    <div>
        password:
        <input type=\"password\" name=\"_password\" />
    </div>
    <div>
        <input type=\"submit\" value=\"Entrar\" />
    </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "RedaccionBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 12,  42 => 10,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
