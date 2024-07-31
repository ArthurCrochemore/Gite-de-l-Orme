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

/* _header.html.twig */
class __TwigTemplate_280f1387785366c42c3bebaba7546505 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        yield "<header>
    <ul id='tabs'>
        <li><a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
            <img id='logo' src='les_photos/logo.png' class='tab' />
        </a></li>
        <li><a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("learn_more");
        yield "\">
            <p id='en-savoir-plus' class='tab content'>En Savoir +</p>
        </a></li>
        <li><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("see_photos");
        yield "\">
            <p id='gallerie' class='tab content'>Gallerie</p>
        </a></li>
        <li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("when_can_i_book");
        yield "\">
            <p id='disponibilites' class='tab content'>Disponibilités</p>
        </a></li>
        <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_us");
        yield "\">
            <p id='contacts' class='tab content'>Contact</p>
        </a></li>
        <li class=\"dropdown\">
            <a href=\"#langues\">
                <p id='langues' class='tab content'>Langues</p>
            </a>
            <ul class=\"dropdown-content\">
                <li><a href=\"#fr\">FR</a></li>
                <li><a href=\"#en\">EN</a></li>
            </ul>
        </li>
    </ul>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_header.html.twig";
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
        return array (  69 => 15,  63 => 12,  57 => 9,  51 => 6,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <ul id='tabs'>
        <li><a href=\"{{ path('home') }}\">
            <img id='logo' src='les_photos/logo.png' class='tab' />
        </a></li>
        <li><a href=\"{{ path('learn_more') }}\">
            <p id='en-savoir-plus' class='tab content'>En Savoir +</p>
        </a></li>
        <li><a href=\"{{ path('see_photos') }}\">
            <p id='gallerie' class='tab content'>Gallerie</p>
        </a></li>
        <li><a href=\"{{ path('when_can_i_book') }}\">
            <p id='disponibilites' class='tab content'>Disponibilités</p>
        </a></li>
        <li><a href=\"{{ path('contact_us') }}\">
            <p id='contacts' class='tab content'>Contact</p>
        </a></li>
        <li class=\"dropdown\">
            <a href=\"#langues\">
                <p id='langues' class='tab content'>Langues</p>
            </a>
            <ul class=\"dropdown-content\">
                <li><a href=\"#fr\">FR</a></li>
                <li><a href=\"#en\">EN</a></li>
            </ul>
        </li>
    </ul>
</header>
", "_header.html.twig", "/var/www/html/templates/_header.html.twig");
    }
}
