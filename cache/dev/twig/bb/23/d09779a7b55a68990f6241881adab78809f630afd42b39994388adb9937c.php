<?php

/* default/index.html.twig */
class __TwigTemplate_bb23d09779a7b55a68990f6241881adab78809f630afd42b39994388adb9937c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class='container'>
            <ul class='nav nav-pills pull-right'>
                <div class='row'>
    
    <center>
     <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\" />
        
    <br>
    <h1> Liste des café <small>...Oui Monseigneur !</small></h1>
    <br>
    
    <p><img src=\"http://i38.servimg.com/u/f38/12/09/47/97/cafev11.png\"></p>

<br>


<form id='recherche' method='POST' action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Lister");
        echo "\">
    
    <table>
    
    <tr>
        
        <td>Nom : </td><td><input type=\"text\" name=\"nom\" /></td>
        
    </tr>
    
    <tr>
        
        <td>Adresse : </td><td><input type=\"text\" name=\"adresse\" /></td>
        
    </tr>
    
    <tr>
        
        <td>Arrondissement :  </td><td><input type=\"text\" name=\"arrondissement\" /></td>
        
    </tr>
    
    <tr>
        
        <td><input type=\"submit\" class=\"btn-success\" value=\"Filtrer\" /></td>
        
    </tr>
    
    </table>
    
</form>
<br>

 <p>
     ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("addCafe");
            echo "\" class=\"btn btn-success\">Ajouter un cafe</a>
        
     ";
        }
        // line 58
        echo "</p>
<br>
    
    <table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>id</th>
                        <th>nom</th>
                        <th>adresse</th>
                        <th>arrondissement</th>
                        
       
                        
                        <th class=\"hidden-sm\">geo_latitude</th>
                        <th class=\"hidden-sm\">prix_comptoir</th>
                        <th class=\"hidden-sm\">prix_salle</th>
                        <th class=\"hidden-sm\">prix_terasse</th>
                        <th class=\"hidden-sm\"></th>
        
\t\t</tr>
\t</thead>
\t
        <tbody>
    
    ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cafes"]) ? $context["cafes"] : $this->getContext($context, "cafes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cafe"]) {
            // line 83
            echo "      
            
            <tr>
                <td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voir", array("id" => $this->getAttribute($context["cafe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "arrondissement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "geoLatitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "prixComptoir", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "prixSalle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["cafe"], "prixTerasse", array()), "html", null, true);
            echo "</td>
            </tr>

        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cafe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    
    </tbody>
    </table>
    
    
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 98,  171 => 93,  167 => 92,  163 => 91,  159 => 90,  155 => 89,  151 => 88,  147 => 87,  141 => 86,  136 => 83,  132 => 82,  106 => 58,  99 => 55,  97 => 54,  60 => 20,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
