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
use Twig\TemplateWrapper;

/* ticket/view.html.twig */
class __TwigTemplate_9619ccf622add8111a78c284e445911e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/view.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Votre Billet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .welcome {
            font-size: 28px;
            color: #4F46E5;
            margin-bottom: 8px;
        }
        .name {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #eee;
        }
        td:first-child {
            color: #888;
            width: 40%;
        }
        .footer {
            margin-top: 24px;
            color: #4F46E5;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"card\">
        <div class=\"welcome\">🎟️ Bienvenue</div>
        <div class=\"name\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "</div>

        <table>
            <tr><td>Réservation</td><td>#";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "</td></tr>
            <tr><td>Événement</td><td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "</td></tr>
            <tr><td>Place</td><td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["seat"]) || array_key_exists("seat", $context) ? $context["seat"] : (function () { throw new RuntimeError('Variable "seat" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "</td></tr>
            <tr><td>Montant</td><td>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "</td></tr>
            <tr><td>Date</td><td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "</td></tr>
        </table>

        <div class=\"footer\">✅ Bonne expérience !</div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ticket/view.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  131 => 67,  127 => 66,  123 => 65,  119 => 64,  115 => 63,  109 => 60,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Votre Billet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        .welcome {
            font-size: 28px;
            color: #4F46E5;
            margin-bottom: 8px;
        }
        .name {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #eee;
        }
        td:first-child {
            color: #888;
            width: 40%;
        }
        .footer {
            margin-top: 24px;
            color: #4F46E5;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"card\">
        <div class=\"welcome\">🎟️ Bienvenue</div>
        <div class=\"name\">{{ customer }}</div>

        <table>
            <tr><td>Réservation</td><td>#{{ id }}</td></tr>
            <tr><td>Événement</td><td>{{ event }}</td></tr>
            <tr><td>Place</td><td>{{ seat }}</td></tr>
            <tr><td>Montant</td><td>{{ amount }}</td></tr>
            <tr><td>Date</td><td>{{ date }}</td></tr>
        </table>

        <div class=\"footer\">✅ Bonne expérience !</div>
    </div>
</body>
</html>", "ticket/view.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\ticket\\view.html.twig");
    }
}
