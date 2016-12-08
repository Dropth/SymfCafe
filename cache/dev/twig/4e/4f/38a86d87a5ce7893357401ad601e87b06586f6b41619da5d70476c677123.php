<?php

/* default/modifComm.html.twig */
class __TwigTemplate_4e4f38a86d87a5ce7893357401ad601e87b06586f6b41619da5d70476c677123 extends Twig_Template
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
    <h1> Modifier votre commentaire </h1>
    
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "id", array()), "html", null, true);
        echo "
    
   <div class='container'>
            <ul class='nav nav-pills pull-center'>
                <div class='row'>
                    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateComm", array("id" => $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

                            <div class=\"form-group hidden\">
                                <input id=\"idCafe\" class=\"form-control\" type=\"int\" name=\"idCafe\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "idCafe", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group hidden\">
                                    <input id=\"date\" class=\"form-control\" type=\"text\" name=\"date\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "date", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"texte\">Votre commentaire</label>
                                    <input id=\"texte\" class=\"form-control\" type=\"text\" name=\"texte\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "texte", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"etoile\">Votre note (zéro : c’est du jus de chaussette. Cinq : What Else?)</label>
                                    <input id=\"etoile\" class=\"form-control\" type=\"int\" name=\"etoile\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "etoile", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"auteur\">Votre pseudo</label>
                                    <input id=\"auteur\" class=\"form-control\" type=\"text\" name=\"auteur\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")), "auteur", array()), "html", null, true);
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
        return "default/modifComm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  81 => 31,  73 => 26,  65 => 21,  58 => 17,  52 => 14,  44 => 9,  39 => 6,  36 => 5,  11 => 3,);
    }
}
