<?php

/* default/login.html.twig */
class __TwigTemplate_713bfc731c6ba522d57170b3fa91849209e973b2d751bdd96c34f088d30becb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <center><h1>Connexion:</h1></center>
    <br>

    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "                    
  <div class='container'>
            <ul class='nav nav-pills pull-center'>
                <div class='row'>                  
                

    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        
        <div class=\"form-group\">
            <label for=\"username\">Login :</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div class=\"form-group\">
            <label for=\"password\">Mot de passe :</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <div class=\"form-group\">
            <input type=\"hidden\" name=\"_target_path\" value=\"\" />
            <button type=\"submit\" class=\"btn-success\">login</button>
        </div>
    </form>
        
    </div>
            </ul>
        </div>
";
    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  60 => 17,  52 => 11,  46 => 9,  44 => 8,  39 => 5,  36 => 4,  11 => 2,);
    }
}
