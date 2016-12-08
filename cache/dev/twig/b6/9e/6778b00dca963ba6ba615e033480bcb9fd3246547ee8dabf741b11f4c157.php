<?php

/* default/addCafe.html.twig */
class __TwigTemplate_b69e6778b00dca963ba6ba615e033480bcb9fd3246547ee8dabf741b11f4c157 extends Twig_Template
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
    <h1> Ajouter votre Café </h1>
    
   <div class='container'>
            <ul class='nav nav-pills pull-center'>
                <div class='row'>
                   ";
        // line 30
        echo "                   
                   
                   
                    <form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ajoutCafe");
        echo "\" method=\"POST\">

                            <div class=\"form-group\">
                                <label for=\"nom\">Nom du Café</label>    
                                <input id=\"nom\" class=\"form-control\" type=\"text\" name=\"nom\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"adresse\">Adresse du Cafe</label>
                                    <input id=\"adresse\" class=\"form-control\" type=\"text\" name=\"adresse\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"arron\">Arrondissement</label>
                                    <input id=\"arron\" class=\"form-control\" type=\"int\" name=\"arron\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"geo\">Geo Latitude</label>
                                    <input id=\"geo\" class=\"form-control\" type=\"text\" name=\"geo\"><br>
                            </div>
                            
                            <div class=\"form-group\">
                                    <label for=\"prixC\">Prix Comptoir</label>
                                    <input id=\"prixC\" class=\"form-control\" type=\"int\" name=\"prixC\"><br>
                            </div>
                            
                            <div class=\"form-group\">
                                    <label for=\"prixS\">Prix Salle</label>
                                    <input id=\"prixS\" class=\"form-control\" type=\"int\" name=\"prixS\"><br>
                            </div>
                        
                            <div class=\"form-group\">
                                    <label for=\"prixT\">Prix Terasse</label>
                                    <input id=\"prixT\" class=\"form-control\" type=\"int\" name=\"prixT\"><br>
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
        return "default/addCafe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 33,  47 => 30,  39 => 6,  36 => 5,  11 => 3,);
    }
}
