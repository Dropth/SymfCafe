<?php

/* default/voirCafe.html.twig */
class __TwigTemplate_7170232728880dc5bea39f0b5862c12183ac58f95a214bd5ff69b56c83556082 extends Twig_Template
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
        echo "
<div class='container'>
            <ul class='nav nav-pills pull-right'>
                <div class='row'>
                        
                            <p><img src=\"http://i38.servimg.com/u/f38/12/09/47/97/testfo11.png\"></p>
    
                            

                            <h1> Détails d'un cafe </h1>
                            
                            <p>
                                Nous avons donc ici un café se nommant <span class=\"badge badge-primary\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "nom", array()), "html", null, true);
        echo "</span> 
                                et dont l'adresse est <span class=\"badge badge-primary\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "adresse", array()), "html", null, true);
        echo "</span>.</p>

                                <p>Voici la géo localisation : <span class=\"badge badge-primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "geoLatitude", array()), "html", null, true);
        echo "</span>  </p>

                                <p>Les différents prix sont :</p>

                                <p> Comptoir : <span class=\"badge badge-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "prixComptoir", array()), "html", null, true);
        echo "</span>
                                    Salle : <span class=\"badge badge-primary\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "prixSalle", array()), "html", null, true);
        echo "</span>
                                    Terasse : <span class=\"badge badge-primary\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "prixTerasse", array()), "html", null, true);
        echo "</span></p>

                                ";
        // line 28
        $context["cptEtoile"] = 0;
        // line 29
        echo "                                ";
        $context["cptComm"] = 0;
        // line 30
        echo "                                ";
        $context["etoileMoy"] = 0;
        // line 31
        echo "
                                </br>
                                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 34
            echo "                                    
                                    ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($context["commentaire"], "etoile", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                echo "                                        
                                       ";
                // line 37
                $context["cptEtoile"] = ((isset($context["cptEtoile"]) ? $context["cptEtoile"] : $this->getContext($context, "cptEtoile")) + 1);
                // line 38
                echo "                                        
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                    
                                    ";
            // line 41
            $context["cptComm"] = ((isset($context["cptComm"]) ? $context["cptComm"] : $this->getContext($context, "cptComm")) + 1);
            // line 42
            echo "                                    
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                ";
        if (((isset($context["cptComm"]) ? $context["cptComm"] : $this->getContext($context, "cptComm")) != 0)) {
            // line 45
            echo "                                    ";
            $context["etoileMoy"] = ((isset($context["cptEtoile"]) ? $context["cptEtoile"] : $this->getContext($context, "cptEtoile")) / (isset($context["cptComm"]) ? $context["cptComm"] : $this->getContext($context, "cptComm")));
            // line 46
            echo "                                ";
        } else {
            // line 47
            echo "                                     ";
            $context["etoileMoy"] =  -1;
            // line 48
            echo "                                ";
        }
        echo "                                   
                                   
                                   ";
        // line 50
        if (((isset($context["etoileMoy"]) ? $context["etoileMoy"] : $this->getContext($context, "etoileMoy")) > 0)) {
            // line 51
            echo "                                     <p>Voici la note moyenne : <FONT size=\"10\" color=\"#309C00\">";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["etoileMoy"]) ? $context["etoileMoy"] : $this->getContext($context, "etoileMoy")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 52
                echo "                                        
                                        ✰
                                        
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "</FONT></p>
                                   ";
        } else {
            // line 57
            echo "                                      <p>Voici la note moyenne : <FONT size=\"10\" color=\"#309C00\">0</FONT></p>
                                   ";
        }
        // line 59
        echo "

                               
                                    
                                    
                                   <div id =\"map\" style=\"height:180px; border-width:2px; border-style:solid ; border-color:#309C00;\">
                                 
                                 <script>
                                    // create a map in the \"map\" div, set the view to a given place and zoom
                                    var map = L.map('map').setView([";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "geoLatitude", array()), "html", null, true);
        echo "], 13);

                                    // add an OpenStreetMap tile layer
                                    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                                        attribution: '&copy; <a href=\"http://osm.org/copyright\">OpenStreetMap</a> contributors'
                                    }).addTo(map);

                                    // add a marker in the given location, attach some popup content to it and open the popup
                                    L.marker([";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "geoLatitude", array()), "html", null, true);
        echo "]).addTo(map)
                                            .bindPopup('";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "nom", array()), "html", null, true);
        echo "')
                                    .openPopup();
                                </script>
                                
                                </div>
                                
                                <p>
                                <h4>Souhaitez-vous revoir la  <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("Lister");
        echo "\">liste</a> des cafes ?</h4>
                                </p>
                                <br>
                                
                                                              
                                    ";
        // line 89
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 90
            echo "                                                <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addComm", array("id" => $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Ajouter un commentaire</a></p> 
                                    ";
        }
        // line 92
        echo "                                        
                                    ";
        // line 93
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 94
            echo "                                            <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppCafe", array("id" => $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Supprimer le café</a>
                                            <p><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifCafe", array("id" => $this->getAttribute((isset($context["cafe"]) ? $context["cafe"] : $this->getContext($context, "cafe")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier le café</a></p>
                                    ";
        }
        // line 97
        echo "                                    
                                

                                <div class=\"page-header\">

                                    <h1>Les commentaires</h1>

                                </div>
                                
                                ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 107
            echo "                                    
                                    <div style=\"border-width:1px; border-style:solid ; border-color:#309C00;\">
                                        
                                            ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "texte", array()), "html", null, true);
            echo "
                                            
                                            <fieldset>
                                                Auteur :  ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "auteur", array()), "html", null, true);
            echo ", Le ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "html", null, true);
            echo "</br>Note :
                                                ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($context["commentaire"], "etoile", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 115
                echo "                                        
                                                    ★

                                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                                                 
                                                 <br><br>
                                            
                                                  ";
            // line 122
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 123
                echo "                                                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppComm", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Supprimer le commentaire</a>
                                                    <p><a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifComm", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\">Modifier le commentaire</a></p>
                                                  ";
            }
            // line 126
            echo "                                                  
                                                  <br>
                                            </fieldset>
                                            <br>
                                            
                                            
                                    </div>
                                    <br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                    
                                    <br>
                                    <br>
                                    
                                    </div>
                                    </ul>
                                    </div>
                                    </div>



";
    }

    public function getTemplateName()
    {
        return "default/voirCafe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 135,  300 => 126,  295 => 124,  290 => 123,  288 => 122,  283 => 119,  274 => 115,  270 => 114,  264 => 113,  258 => 110,  253 => 107,  249 => 106,  238 => 97,  233 => 95,  228 => 94,  226 => 93,  223 => 92,  217 => 90,  215 => 89,  207 => 84,  197 => 77,  193 => 76,  182 => 68,  171 => 59,  167 => 57,  163 => 55,  154 => 52,  149 => 51,  147 => 50,  141 => 48,  138 => 47,  135 => 46,  132 => 45,  129 => 44,  122 => 42,  120 => 41,  117 => 40,  110 => 38,  108 => 37,  105 => 36,  101 => 35,  98 => 34,  94 => 33,  90 => 31,  87 => 30,  84 => 29,  82 => 28,  77 => 26,  73 => 25,  69 => 24,  62 => 20,  57 => 18,  53 => 17,  39 => 5,  36 => 4,  11 => 2,);
    }
}
