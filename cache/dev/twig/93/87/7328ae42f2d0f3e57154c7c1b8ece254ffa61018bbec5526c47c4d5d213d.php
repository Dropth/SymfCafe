<?php

/* default/inscription.html.twig */
class __TwigTemplate_93877328ae42f2d0f3e57154c7c1b8ece254ffa61018bbec5526c47c4d5d213d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
    <h1> Inscrivez-vous ! </h1>
    
    ";
        // line 9
        if (array_key_exists("message", $context)) {
            // line 10
            echo "        <h2>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</h2>
        <h2>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "</h2>
    ";
        }
        // line 13
        echo "    
   <div class='container'>
            <ul class='nav nav-pills pull-center'>
                <div class='row'>
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ajoutUtil");
        echo "\" method=\"POST\">

                           <div class=\"form-group\">
                                    <label for=\"login\">Votre login</label>
                                    <input id=\"login\" class=\"form-control\" type=\"text\" name=\"login\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"mdp\">Votre mot de passe</label>
                                    <input id=\"mdp\" class=\"form-control\" type=\"int\" name=\"mdp\"><br>
                            </div>

                            <div class=\"form-group\">
                             <button type=\"submit\" class=\"btn-success\" name=\"valider\">Valider</button>
                             <button type=\"submit\" class=\"btn-success\" name=\"annuler\">Annuler</button>
                            </div>\t
                    </form>
                    
                    
                </div>
            </ul>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "default/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 13,  51 => 11,  46 => 10,  44 => 9,  39 => 6,  36 => 5,  11 => 3,);
    }
}
