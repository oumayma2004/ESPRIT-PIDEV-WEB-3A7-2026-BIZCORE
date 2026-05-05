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
class __TwigTemplate_c76fe6b5ef746092600b8d8512e2f009 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["customer"] ?? null), "html", null, true);
        yield "</div>

        <table>
            <tr><td>Réservation</td><td>#";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "</td></tr>
            <tr><td>Événement</td><td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["event"] ?? null), "html", null, true);
        yield "</td></tr>
            <tr><td>Place</td><td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["seat"] ?? null), "html", null, true);
        yield "</td></tr>
            <tr><td>Montant</td><td>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["amount"] ?? null), "html", null, true);
        yield "</td></tr>
            <tr><td>Date</td><td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date"] ?? null), "html", null, true);
        yield "</td></tr>
        </table>

        <div class=\"footer\">✅ Bonne expérience !</div>
    </div>
</body>
</html>";
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
        return array (  125 => 67,  121 => 66,  117 => 65,  113 => 64,  109 => 63,  103 => 60,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ticket/view.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\ticket\\view.html.twig");
    }
}
