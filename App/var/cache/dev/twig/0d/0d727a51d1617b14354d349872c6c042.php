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

/* contacts.html.twig */
class __TwigTemplate_4331e97a5feffcf30c893b70de54323d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts.html.twig"));

        // line 1
        yield "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
        <title>Gîte de l'Orme</title>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" href=\"les_photos/icon.png\" />
        <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"style-contact.css\" type=\"text/css\" rel=\"stylesheet\" />

        <script src=\"mail_controller.js\"></script>
    </head>

    <body>
        ";
        // line 14
        yield from         $this->loadTemplate("_header.html.twig", "contacts.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
        <div id=\"main\" class=\"main-centered\">
            <h1 id=\"title\">Contacts :</h1>
            <hr />

            <div class=\"main-container container\">
                <form id=\"contactForm\" onsubmit=\"submitForm(event)\">
                    <h2>Contactez-nous par mail</h2>

                    <label for=\"fmail\">Email</label>
                    <input
                        type=\"email\"
                        id=\"fmail\"
                        name=\"fmail\"
                        placeholder=\"Votre mail..\"
                        aria-label=\"Email\"
                        required
                    />

                    <label for=\"fobjet\">Objet</label>
                    <input
                        type=\"text\"
                        id=\"fobjet\"
                        name=\"fobjet\"
                        placeholder=\"Objet ..\"
                        aria-label=\"Objet\"
                        required
                    />

                    <label for=\"subject\">Sujet</label>
                    <textarea
                        id=\"subject\"
                        name=\"subject\"
                        placeholder=\"Ecrivez ici..\"
                        style=\"height: 200px\"
                        aria-label=\"Sujet\"
                        required
                    ></textarea>

                    <input type=\"submit\" value=\"Submit\" />
                </form>

                <div class=\"container others-container\">
                    <h2>Téléphone</h2>
                    <p>+33 7 82 32 70 31</p>
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
        return "contacts.html.twig";
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
        <link href=\"style-contact.css\" type=\"text/css\" rel=\"stylesheet\" />

        <script src=\"mail_controller.js\"></script>
    </head>

    <body>
        {% include '_header.html.twig' %}

        <div id=\"main\" class=\"main-centered\">
            <h1 id=\"title\">Contacts :</h1>
            <hr />

            <div class=\"main-container container\">
                <form id=\"contactForm\" onsubmit=\"submitForm(event)\">
                    <h2>Contactez-nous par mail</h2>

                    <label for=\"fmail\">Email</label>
                    <input
                        type=\"email\"
                        id=\"fmail\"
                        name=\"fmail\"
                        placeholder=\"Votre mail..\"
                        aria-label=\"Email\"
                        required
                    />

                    <label for=\"fobjet\">Objet</label>
                    <input
                        type=\"text\"
                        id=\"fobjet\"
                        name=\"fobjet\"
                        placeholder=\"Objet ..\"
                        aria-label=\"Objet\"
                        required
                    />

                    <label for=\"subject\">Sujet</label>
                    <textarea
                        id=\"subject\"
                        name=\"subject\"
                        placeholder=\"Ecrivez ici..\"
                        style=\"height: 200px\"
                        aria-label=\"Sujet\"
                        required
                    ></textarea>

                    <input type=\"submit\" value=\"Submit\" />
                </form>

                <div class=\"container others-container\">
                    <h2>Téléphone</h2>
                    <p>+33 7 82 32 70 31</p>
                </div>
            </div>
        </div>

        <footer></footer>
    </body>
</html>
", "contacts.html.twig", "/var/www/html/templates/contacts.html.twig");
    }
}
