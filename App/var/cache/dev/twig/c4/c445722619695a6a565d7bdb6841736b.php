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

/* en-savoir-plus.html.twig */
class __TwigTemplate_3c39df0537b0cfc57dbf105bcf388851 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en-savoir-plus.html.twig"));

        // line 1
        yield "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
        <title>Gîte de l'Orme</title>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" href=\"les_photos/icon.png\" />
        <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" />
        <link
            href=\"style-en-savoir-plus.css\"
            type=\"text/css\"
            rel=\"stylesheet\"
        />

        <script src=\"event.js\"></script>
    </head>

    <body>
        ";
        // line 18
        yield from         $this->loadTemplate("_header.html.twig", "en-savoir-plus.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
        <div id=\"main\" class=\"main-centered\">
            <h1 id=\"title\">En Savoir Plus :</h1>
            <hr />

            <div id=\"text\">
                <div class=\"text\">
                    <p id=\"l1\">
                        Bienvenue au Gîte de l'Orme, un gîte très calme située
                        près du Havre et à proximité des plages d'Etretat et
                        d'Honfleur. Nous vous proposons un environnement
                        paisible et reposant, tout en restant aisément
                        accessible grâce à sa proximité des grands axes
                        routiers.
                    </p>

                    <p id=\"l2\">
                        Le gîte se trouve à environ 15 minutes du Havre centre/
                        plage, 19 km d'Etretat et 22 km d'Honfleur.
                    </p>

                    <div id=\"container\" class=\"first\">
                        <img
                            src=\"les_photos/rez_cuisine.jpg\"
                            class=\"pictures\"
                            id=\"left\"
                        />

                        <p id=\"l3\">
                            Autrefois, cet endroit était une ferme normande dont
                            l'étable a été transformée en maison. Nous avons
                            conservé le style normand lors de sa rénovation,
                            avec une structure en brique et silex. Une partie de
                            la demeure étant inoccupée, nous avons décidé de
                            l'aménager en gîte, afin de permettre à des
                            personnes comme vous de venir y passer des vacances
                            reposantes.
                        </p>

                        <p id=\"l4\">
                            Le stationnement est gratuit dans propriété privée
                            (en retrait de la voie publique et à l'abri des
                            regards indiscrets). Il vous est également possible
                            de stationner plusieurs véhicules et/ou camions.
                        </p>

                        <p id=\"l5\">
                            Notre gîte est entièrement équipé, il comprend 2
                            chambres (une avec un lit double et l'autre avec 2
                            lits superposés) ainsi qu'une mezzanine avec un
                            canapé-lit pouvant être utilisé comme une 3ème
                            chambre. Vous trouverez également une pièce de vie
                            avec coin cuisine (micro-ondes, réfrigérateur,
                            congélateur, four, plaque de cuisson, cafetière,
                            bouilloire, TV), une salle de douche et une terrasse
                            avec barbecue.
                        </p>

                        <p id=\"l6\">
                            Il est également équipé d'un lave linge ainsi que de
                            fils au niveau de la terasse, pour y étendre le
                            linge. Nous fournissons le linge de lit.
                        </p>
                    </div>

                    <p id=\"l8\">
                        Pour les enfants, un espace de jeux intérieur avec
                        cabane et coin lecture/jeux est à leur disposition,
                        ainsi qu'un portique extérieur.
                    </p>

                    <div id=\"container\" class=\"second\">
                        <img
                            src=\"les_photos/chambre_2.jpg\"
                            class=\"pictures\"
                            id=\"right\"
                        />

                        <p id=\"l9\">
                            Notre gîte est idéal pour des séjours en semaine ou
                            en week-end, avec des tarifs attractifs selon les
                            conditions. Pour les vacances scolaires, comptez à
                            partir de 290€ la semaine, ou à partir de 350€ la
                            semaine en petites vacances. En juillet et août, les
                            tarifs varient de 380€ à 590€ la semaine, avec une
                            remise pour les séjours de plusieurs semaines
                            consécutives. Nous proposons également des tarifs
                            spéciaux pour les longues périodes, à partir de 37€
                            par nuit selon les conditions.
                        </p>

                        <p id=\"l10\">
                            Le WIFI est gratuit (avec une très bonne réception,
                            permettant de se connecter à plusieurs en même
                            temps).
                        </p>

                        <p id=\"l11\">
                            Les tarifs comprennent l'eau, l'électricité et le
                            chauffage, la WIFI étant gratuite.
                        </p>

                        <p id=\"l12\"></p>
                    </div>

                    <p id=\"l13\">
                        Le gîte est non-fumeur (il est cependant possible de
                        fumer à l'extérieur) et ne peut accueillir d'animaux. Il
                        n'est pas adapté aux personnes à mobilité réduite (étage
                        sans ascenseur).
                    </p>

                    <p id=\"l14\">
                        Le gîte est déclaré en Mairie. Son classement
                        préfectoral est de 1 étoile. La taxe de séjour est de
                        niveau 1*: 0,80€/nuit/adulte; gratuit pour les mineurs
                    </p>

                    <p id=\"l15\">
                        Pour plus de photos ou pour obtenir un devis
                        personnalisé, n'hésitez pas à nous contacter par mail en
                        indiquant la période souhaitée ainsi que le nombre de
                        personnes adultes et enfants. Nous vous répondrons
                        rapidement.
                    </p>

                    <p id=\"final\">En espérant vous voir bientôt.</p>
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
        return "en-savoir-plus.html.twig";
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
        return array (  62 => 19,  60 => 18,  41 => 1,);
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
        <link
            href=\"style-en-savoir-plus.css\"
            type=\"text/css\"
            rel=\"stylesheet\"
        />

        <script src=\"event.js\"></script>
    </head>

    <body>
        {% include '_header.html.twig' %}

        <div id=\"main\" class=\"main-centered\">
            <h1 id=\"title\">En Savoir Plus :</h1>
            <hr />

            <div id=\"text\">
                <div class=\"text\">
                    <p id=\"l1\">
                        Bienvenue au Gîte de l'Orme, un gîte très calme située
                        près du Havre et à proximité des plages d'Etretat et
                        d'Honfleur. Nous vous proposons un environnement
                        paisible et reposant, tout en restant aisément
                        accessible grâce à sa proximité des grands axes
                        routiers.
                    </p>

                    <p id=\"l2\">
                        Le gîte se trouve à environ 15 minutes du Havre centre/
                        plage, 19 km d'Etretat et 22 km d'Honfleur.
                    </p>

                    <div id=\"container\" class=\"first\">
                        <img
                            src=\"les_photos/rez_cuisine.jpg\"
                            class=\"pictures\"
                            id=\"left\"
                        />

                        <p id=\"l3\">
                            Autrefois, cet endroit était une ferme normande dont
                            l'étable a été transformée en maison. Nous avons
                            conservé le style normand lors de sa rénovation,
                            avec une structure en brique et silex. Une partie de
                            la demeure étant inoccupée, nous avons décidé de
                            l'aménager en gîte, afin de permettre à des
                            personnes comme vous de venir y passer des vacances
                            reposantes.
                        </p>

                        <p id=\"l4\">
                            Le stationnement est gratuit dans propriété privée
                            (en retrait de la voie publique et à l'abri des
                            regards indiscrets). Il vous est également possible
                            de stationner plusieurs véhicules et/ou camions.
                        </p>

                        <p id=\"l5\">
                            Notre gîte est entièrement équipé, il comprend 2
                            chambres (une avec un lit double et l'autre avec 2
                            lits superposés) ainsi qu'une mezzanine avec un
                            canapé-lit pouvant être utilisé comme une 3ème
                            chambre. Vous trouverez également une pièce de vie
                            avec coin cuisine (micro-ondes, réfrigérateur,
                            congélateur, four, plaque de cuisson, cafetière,
                            bouilloire, TV), une salle de douche et une terrasse
                            avec barbecue.
                        </p>

                        <p id=\"l6\">
                            Il est également équipé d'un lave linge ainsi que de
                            fils au niveau de la terasse, pour y étendre le
                            linge. Nous fournissons le linge de lit.
                        </p>
                    </div>

                    <p id=\"l8\">
                        Pour les enfants, un espace de jeux intérieur avec
                        cabane et coin lecture/jeux est à leur disposition,
                        ainsi qu'un portique extérieur.
                    </p>

                    <div id=\"container\" class=\"second\">
                        <img
                            src=\"les_photos/chambre_2.jpg\"
                            class=\"pictures\"
                            id=\"right\"
                        />

                        <p id=\"l9\">
                            Notre gîte est idéal pour des séjours en semaine ou
                            en week-end, avec des tarifs attractifs selon les
                            conditions. Pour les vacances scolaires, comptez à
                            partir de 290€ la semaine, ou à partir de 350€ la
                            semaine en petites vacances. En juillet et août, les
                            tarifs varient de 380€ à 590€ la semaine, avec une
                            remise pour les séjours de plusieurs semaines
                            consécutives. Nous proposons également des tarifs
                            spéciaux pour les longues périodes, à partir de 37€
                            par nuit selon les conditions.
                        </p>

                        <p id=\"l10\">
                            Le WIFI est gratuit (avec une très bonne réception,
                            permettant de se connecter à plusieurs en même
                            temps).
                        </p>

                        <p id=\"l11\">
                            Les tarifs comprennent l'eau, l'électricité et le
                            chauffage, la WIFI étant gratuite.
                        </p>

                        <p id=\"l12\"></p>
                    </div>

                    <p id=\"l13\">
                        Le gîte est non-fumeur (il est cependant possible de
                        fumer à l'extérieur) et ne peut accueillir d'animaux. Il
                        n'est pas adapté aux personnes à mobilité réduite (étage
                        sans ascenseur).
                    </p>

                    <p id=\"l14\">
                        Le gîte est déclaré en Mairie. Son classement
                        préfectoral est de 1 étoile. La taxe de séjour est de
                        niveau 1*: 0,80€/nuit/adulte; gratuit pour les mineurs
                    </p>

                    <p id=\"l15\">
                        Pour plus de photos ou pour obtenir un devis
                        personnalisé, n'hésitez pas à nous contacter par mail en
                        indiquant la période souhaitée ainsi que le nombre de
                        personnes adultes et enfants. Nous vous répondrons
                        rapidement.
                    </p>

                    <p id=\"final\">En espérant vous voir bientôt.</p>
                </div>
            </div>
        </div>

        <footer></footer>
    </body>
</html>
", "en-savoir-plus.html.twig", "/var/www/html/templates/en-savoir-plus.html.twig");
    }
}
