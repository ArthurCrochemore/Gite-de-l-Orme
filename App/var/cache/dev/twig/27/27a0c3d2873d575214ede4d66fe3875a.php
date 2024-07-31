<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* gallerie.html.twig */
class __TwigTemplate_c1888f0a5dfc18ff71af54c4b3dd0fb1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallerie.html.twig"));

        // line 1
        yield "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
        <title>Gîte de l'Orme</title>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" href=\"les_photos/icon.png\" />
        <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"style-gallerie.css\" type=\"text/css\" rel=\"stylesheet\" />

        <script src=\"event.js\"></script>
    </head>

    <body>
        ";
        // line 14
        yield from         $this->loadTemplate("_header.html.twig", "gallerie.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
        <div id=\"main\" class=\"main-centered\">
            <h1 id=\"title\">Gallerie :</h1>
            <hr />

            <div id=\"sub-main\">
                <h2>Extérieur</h2>
                <div class=\"card\">
                    <img src=\"les_photos/jardin_gite.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/balancoire.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/acces_pavee.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/dalle_pavee.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img
                        src=\"les_photos/entree_terasse.jpg\"
                        alt=\"jardin_gite\"
                    />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/jardin.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/jeux_enfants.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/jeux_enfants_2.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/vue_fenetre.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/parking.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse_2.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse_3.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse_nuit.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/mare.jpg\" alt=\"mezzanine\" />
                </div>
                <hr />

                <h2>Rez de Chaussé</h2>
                <div class=\"card\">
                    <img src=\"les_photos/rez_cuisine.jpg\" alt=\"rez_cuisine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/chambre_2.jpg\" alt=\"chambre_2\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/cuisine.jpg\" alt=\"cuisine\" />
                </div>
                <div class=\"card\">
                    <img
                        src=\"les_photos/grande_chambre.jpg\"
                        alt=\"grande_chambre\"
                    />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/rez_tv.jpg\" alt=\"grande_chambre\" />
                </div>
                <hr />

                <h2>Etage</h2>
                <div class=\"card\">
                    <img src=\"les_photos/mezzanine.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/cabane.jpg\" alt=\"mezzanine\" />
                </div>
            </div>
        </div>

        <footer></footer>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "gallerie.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  58 => 15,  56 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
        <title>Gîte de l'Orme</title>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" href=\"les_photos/icon.png\" />
        <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"style-gallerie.css\" type=\"text/css\" rel=\"stylesheet\" />

        <script src=\"event.js\"></script>
    </head>

    <body>
        {% include '_header.html.twig' %}

        <div id=\"main\" class=\"main-centered\">
            <h1 id=\"title\">Gallerie :</h1>
            <hr />

            <div id=\"sub-main\">
                <h2>Extérieur</h2>
                <div class=\"card\">
                    <img src=\"les_photos/jardin_gite.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/balancoire.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/acces_pavee.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/dalle_pavee.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img
                        src=\"les_photos/entree_terasse.jpg\"
                        alt=\"jardin_gite\"
                    />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/jardin.jpg\" alt=\"jardin_gite\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/jeux_enfants.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/jeux_enfants_2.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/vue_fenetre.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/parking.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse_2.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse_3.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/terrasse_nuit.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/mare.jpg\" alt=\"mezzanine\" />
                </div>
                <hr />

                <h2>Rez de Chaussé</h2>
                <div class=\"card\">
                    <img src=\"les_photos/rez_cuisine.jpg\" alt=\"rez_cuisine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/chambre_2.jpg\" alt=\"chambre_2\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/cuisine.jpg\" alt=\"cuisine\" />
                </div>
                <div class=\"card\">
                    <img
                        src=\"les_photos/grande_chambre.jpg\"
                        alt=\"grande_chambre\"
                    />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/rez_tv.jpg\" alt=\"grande_chambre\" />
                </div>
                <hr />

                <h2>Etage</h2>
                <div class=\"card\">
                    <img src=\"les_photos/mezzanine.jpg\" alt=\"mezzanine\" />
                </div>
                <div class=\"card\">
                    <img src=\"les_photos/cabane.jpg\" alt=\"mezzanine\" />
                </div>
            </div>
        </div>

        <footer></footer>
    </body>
</html>
", "gallerie.html.twig", "/var/www/html/templates/gallerie.html.twig");
    }
}
