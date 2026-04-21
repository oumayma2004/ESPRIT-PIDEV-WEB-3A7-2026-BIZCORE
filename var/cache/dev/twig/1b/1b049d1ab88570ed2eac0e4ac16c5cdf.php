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

/* dashboard/report.html.twig */
class __TwigTemplate_e3cac9d0234910dae7683b1b2204dbaf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/report.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Arial, sans-serif; color: #111827; }
        .title { font-size: 24px; font-weight: 700; margin-bottom: 10px; }
        .meta { color: #667085; margin-bottom: 20px; }
        .grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 20px; }
        .card { border: 1px solid #e5e7ef; border-radius: 12px; padding: 12px; }
        .label { font-size: 11px; color: #667085; }
        .value { font-size: 22px; font-weight: 700; margin-top: 6px; }
        .bars { display: flex; align-items: flex-end; gap: 18px; height: 180px; margin-top: 18px; }
        .bar-item { flex: 1; text-align: center; }
        .bar-wrap { height: 140px; display: flex; align-items: flex-end; justify-content: center; }
        .bar { width: 18px; border-radius: 999px; display: inline-block; }
        .blue { background: #5b7cff; }
        .green { background: #25c18f; }
        .orange { background: #ff9800; }
        .purple { background: #8b5cf6; }
        .gray { background: #94a3b8; }
        .small { font-size: 11px; color: #667085; margin-top: 6px; }
    </style>
</head>
<body>
    <div class=\"title\">BizCore Dashboard Report</div>
    <div class=\"meta\">Generated at ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["generatedAt"]) || array_key_exists("generatedAt", $context) ? $context["generatedAt"] : (function () { throw new RuntimeError('Variable "generatedAt" does not exist.', 27, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield "</div>

    <div class=\"grid\">
        <div class=\"card\"><div class=\"label\">Total users</div><div class=\"value\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "users", [], "any", false, false, false, 30), "html", null, true);
        yield "</div></div>
        <div class=\"card\"><div class=\"label\">Active users</div><div class=\"value\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 31, $this->source); })()), "active_users", [], "any", false, false, false, 31), "html", null, true);
        yield "</div></div>
        <div class=\"card\"><div class=\"label\">Products</div><div class=\"value\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 32, $this->source); })()), "products", [], "any", false, false, false, 32), "html", null, true);
        yield "</div></div>
        <div class=\"card\"><div class=\"label\">Orders</div><div class=\"value\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 33, $this->source); })()), "orders", [], "any", false, false, false, 33), "html", null, true);
        yield "</div></div>
    </div>

    <div class=\"card\">
        <div class=\"label\">Main statistics</div>
        <div class=\"bars\">
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar blue\" style=\"height: ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 40, $this->source); })()), "users", [], "any", false, false, false, 40) / (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 40, $this->source); })())) * 140), "html", null, true);
        yield "px;\"></span></div>
                <div class=\"small\">Users</div>
            </div>
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar green\" style=\"height: ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "products", [], "any", false, false, false, 44) / (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 44, $this->source); })())) * 140), "html", null, true);
        yield "px;\"></span></div>
                <div class=\"small\">Products</div>
            </div>
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar orange\" style=\"height: ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "orders", [], "any", false, false, false, 48) / (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 48, $this->source); })())) * 140), "html", null, true);
        yield "px;\"></span></div>
                <div class=\"small\">Orders</div>
            </div>
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar purple\" style=\"height: ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "events", [], "any", false, false, false, 52) / (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 52, $this->source); })())) * 140), "html", null, true);
        yield "px;\"></span></div>
                <div class=\"small\">Events</div>
            </div>
        </div>
    </div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/report.html.twig";
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
        return array (  122 => 52,  115 => 48,  108 => 44,  101 => 40,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  73 => 27,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body { font-family: Arial, sans-serif; color: #111827; }
        .title { font-size: 24px; font-weight: 700; margin-bottom: 10px; }
        .meta { color: #667085; margin-bottom: 20px; }
        .grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 20px; }
        .card { border: 1px solid #e5e7ef; border-radius: 12px; padding: 12px; }
        .label { font-size: 11px; color: #667085; }
        .value { font-size: 22px; font-weight: 700; margin-top: 6px; }
        .bars { display: flex; align-items: flex-end; gap: 18px; height: 180px; margin-top: 18px; }
        .bar-item { flex: 1; text-align: center; }
        .bar-wrap { height: 140px; display: flex; align-items: flex-end; justify-content: center; }
        .bar { width: 18px; border-radius: 999px; display: inline-block; }
        .blue { background: #5b7cff; }
        .green { background: #25c18f; }
        .orange { background: #ff9800; }
        .purple { background: #8b5cf6; }
        .gray { background: #94a3b8; }
        .small { font-size: 11px; color: #667085; margin-top: 6px; }
    </style>
</head>
<body>
    <div class=\"title\">BizCore Dashboard Report</div>
    <div class=\"meta\">Generated at {{ generatedAt|date('Y-m-d H:i') }}</div>

    <div class=\"grid\">
        <div class=\"card\"><div class=\"label\">Total users</div><div class=\"value\">{{ stats.users }}</div></div>
        <div class=\"card\"><div class=\"label\">Active users</div><div class=\"value\">{{ stats.active_users }}</div></div>
        <div class=\"card\"><div class=\"label\">Products</div><div class=\"value\">{{ stats.products }}</div></div>
        <div class=\"card\"><div class=\"label\">Orders</div><div class=\"value\">{{ stats.orders }}</div></div>
    </div>

    <div class=\"card\">
        <div class=\"label\">Main statistics</div>
        <div class=\"bars\">
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar blue\" style=\"height: {{ (stats.users / max) * 140 }}px;\"></span></div>
                <div class=\"small\">Users</div>
            </div>
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar green\" style=\"height: {{ (stats.products / max) * 140 }}px;\"></span></div>
                <div class=\"small\">Products</div>
            </div>
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar orange\" style=\"height: {{ (stats.orders / max) * 140 }}px;\"></span></div>
                <div class=\"small\">Orders</div>
            </div>
            <div class=\"bar-item\">
                <div class=\"bar-wrap\"><span class=\"bar purple\" style=\"height: {{ (stats.events / max) * 140 }}px;\"></span></div>
                <div class=\"small\">Events</div>
            </div>
        </div>
    </div>
</body>
</html>", "dashboard/report.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\dashboard\\report.html.twig");
    }
}
