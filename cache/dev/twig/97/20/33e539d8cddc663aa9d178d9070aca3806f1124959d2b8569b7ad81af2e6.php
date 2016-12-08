<?php

/* base.html.twig */
class __TwigTemplate_972033e539d8cddc663aa9d178d9070aca3806f1124959d2b8569b7ad81af2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css\" />
        <script src=\"http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>


        <script type=\"text/javascript\">
            \$(document).ready(function() {

                \$(\"ul.notes-echelle\").addClass(\"js\");
                \$(\"ul.notes-echelle li\").addClass(\"note-off\");

                \$(\"ul.notes-echelle input\")
                        .focus(function() {
                            \$(this).parents(\"ul.notes-echelle\").find(\"li\").removeClass(\"note-focus\");
                            \$(this).parent(\"li\").addClass(\"note-focus\");
                            \$(this).parent(\"li\").nextAll(\"li\").addClass(\"note-off\");
                            \$(this).parent(\"li\").prevAll(\"li\").removeClass(\"note-off\");
                            \$(this).parent(\"li\").removeClass(\"note-off\");
                        })
                        .blur(function() {
                            \$(this).parents(\"ul.notes-echelle\").find(\"li\").removeClass(\"note-focus\");
                            if(\$(this).parents(\"ul.notes-echelle\").find(\"li input:checked\").length == 0) {
                                \$(this).parents(\"ul.notes-echelle\").find(\"li\").addClass(\"note-off\");
                            }
                        })
                        .click(function() {
                            \$(this).parents(\"ul.notes-echelle\").find(\"li\").removeClass(\"note-checked\");
                            \$(this).parent(\"li\").addClass(\"note-checked\");
                        });

                \$(\"ul.notes-echelle li\").mouseover(function() {
                    \$(this).nextAll(\"li\").addClass(\"note-off\");
                    \$(this).prevAll(\"li\").removeClass(\"note-off\");
                    \$(this).removeClass(\"note-off\");
                });

                \$(\"ul.notes-echelle\").mouseout(function() {
                    \$(this).children(\"li\").addClass(\"note-off\");
                    \$(this).find(\"li input:checked\").parent(\"li\").trigger(\"mouseover\");
                });

                \$(\"ul.notes-echelle input:checked\").parent(\"li\").trigger(\"mouseover\");
                \$(\"ul.notes-echelle input:checked\").trigger(\"click\");

            });
        </script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function(\$){
                \$('#form').submit(function(e){
                    e.preventDefault();
                    \$.ajax({
                        url: '/',
                        dataType: 'text',
                        type: 'post',
                        contentType: 'application/x-www-form-urlencoded',
                        data: \$(this).serialize(),
                        success: function( data, textStatus, jQxhr ){
                            \$('#retour').html(data);
                        },
                        error: function( jqXhr, textStatus, errorThrown ){
                            console.log( errorThrown );
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class=\"container\">
      \t\t<div class=\"header\">
\t        <ul class=\"nav nav-pills pull-right\">
\t          <li class=\"active\"><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("Lister");
        echo "\">Home</a></li>
                  
                    ";
        // line 83
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 84
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a></li>
                    ";
        } else {
            // line 86
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
                    ";
        }
        // line 88
        echo "                  
\t          <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">Inscription</a></li>
\t        </ul>
                    <h3 class=\"text-muted\"><FONT color=\"#309C00\">";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "html", null, true);
        echo " Un Petit Café ?</FONT></h3>
\t    </div>
        ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "        <div class=\"footer\">
        \t<p><span class=\"glyphicon glyphicon-copyright-mark\"></span> J. Némard</p>
                <p>Modifié par Florian Alline</p>
      \t</div>

    </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Un cafe ?";
    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 94,  171 => 93,  165 => 5,  153 => 95,  150 => 94,  148 => 93,  143 => 91,  138 => 89,  135 => 88,  129 => 86,  123 => 84,  121 => 83,  116 => 81,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
