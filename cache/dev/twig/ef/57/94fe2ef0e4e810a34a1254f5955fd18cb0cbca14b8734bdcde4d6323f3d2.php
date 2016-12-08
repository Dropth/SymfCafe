<?php

/* default/modifCafe.html.twig */
class __TwigTemplate_ef5794fe2ef0e4e810a34a1254f5955fd18cb0cbca14b8734bdcde4d6323f3d2 extends Twig_Template
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
    <h1> Modifier votre Café </h1>
    
   <div class='container'>
            <ul class='nav nav-pills pull-center'>
                <div class='row'>
                   
                   
                    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update", array("id" => $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

                            <div class=\"form-group\">
                                <label for=\"nom\">Nom du Café</label>    
                                <input id=\"nom\" class=\"form-control\" type=\"text\" name=\"nom\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "nom", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"adresse\">Adresse du Cafe</label>
                                    <input id=\"adresse\" class=\"form-control\" type=\"text\" name=\"adresse\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "adresse", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"arron\">Arrondissement</label>
                                    <input id=\"arron\" class=\"form-control\" type=\"int\" name=\"arron\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "arrondissement", array()), "html", null, true);
        echo "\"><br>
                            </div>

                            <div class=\"form-group\">
                                    <label for=\"geo\">Geo Latitude</label>
                                    <input id=\"geo\" class=\"form-control\" type=\"text\" name=\"geo\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "geoLatitude", array()), "html", null, true);
        echo "\"><br>
                            </div>
                            
                            <div class=\"form-group\">
                                    <label for=\"prixC\">Prix Comptoir</label>
                                    <input id=\"prixC\" class=\"form-control\" type=\"int\" name=\"prixC\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "prixComptoir", array()), "html", null, true);
        echo "\"><br>
                            </div>
                            
                            <div class=\"form-group\">
                                    <label for=\"prixS\">Prix Salle</label>
                                    <input id=\"prixS\" class=\"form-control\" type=\"int\" name=\"prixS\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "prixSalle", array()), "html", null, true);
        echo "\"><br>
                            </div>
                        
                            <div class=\"form-group\">
                                    <label for=\"prixT\">Prix Terasse</label>
                                    <input id=\"prixT\" class=\"form-control\" type=\"int\" name=\"prixT\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "prixTerasse", array()), "html", null, true);
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
        return "default/modifCafe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  96 => 43,  88 => 38,  80 => 33,  72 => 28,  64 => 23,  56 => 18,  49 => 14,  39 => 6,  36 => 5,  11 => 3,);
    }
}
