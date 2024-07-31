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

/* index.html.twig */
class __TwigTemplate_f8aeb7be1675764efb3d28cc659e70c1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">

  <head>
    <title> Gîte de l'Orme </title>
    <meta charset=\"UTF-8\" />
    <link rel=\"icon\" href=\"les_photos/icon.png\">
    <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"style-index.css\" type=\"text/css\" rel=\"stylesheet\" />

    <script src=\"event.js\"></script>
  </head>

  <body>
        ";
        // line 15
        yield from         $this->loadTemplate("_header.html.twig", "index.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "
        <div id=\"main\">
            <img src='les_photos/jardin_gite.jpg' id='diapo' alt='picture'></img>
        </div>


    </div>



<footer> </footer>
  </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
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
        return array (  59 => 16,  57 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">

  <head>
    <title> Gîte de l'Orme </title>
    <meta charset=\"UTF-8\" />
    <link rel=\"icon\" href=\"les_photos/icon.png\">
    <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"style-index.css\" type=\"text/css\" rel=\"stylesheet\" />

    <script src=\"event.js\"></script>
  </head>

  <body>
        {% include '_header.html.twig' %}

        <div id=\"main\">
            <img src='les_photos/jardin_gite.jpg' id='diapo' alt='picture'></img>
        </div>


    </div>



<footer> </footer>
  </body>
", "index.html.twig", "/var/www/html/templates/index.html.twig");
    }
}
