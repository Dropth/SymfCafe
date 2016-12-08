<?php

/* default/addComm.html.twig */
class __TwigTemplate_322ec468e9e5093c677e31f95c0dffbb6556871fb26c735495998dee31041afa extends Twig_Template
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
    <h1> Ajouter votre commentaire </h1>
    
   <div class='container'>
            <ul class='nav nav-pills pull-center'>
                <div class='row'>
                    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\">

                            <div class=\"form-group hidden\">
                                <input id=\"idCafe\" class=\"form-control\" type=\"int\" name=\"idCafe\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group hidden\">
                                    <input id=\"date\" class=\"form-control\" type=\"text\" name=\"date\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"texte\">Votre commentaire</label>
                                    <input id=\"texte\" class=\"form-control\" type=\"text\" name=\"texte\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"etoile\">Votre note (zéro : c’est du jus de chaussette. Cinq : What Else?)</label>
                                    <input id=\"etoile\" class=\"form-control\" type=\"int\" name=\"etoile\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"auteur\">Votre pseudo</label>
                                    <input id=\"auteur\" class=\"form-control\" type=\"text\" name=\"auteur\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "html", null, true);
        echo "\"><br>
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
        return "default/addComm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  60 => 19,  53 => 15,  47 => 12,  39 => 6,  36 => 5,  11 => 3,);
    }
}
