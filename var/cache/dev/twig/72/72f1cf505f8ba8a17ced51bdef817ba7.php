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

/* evenement/event_analysis.html.twig */
class __TwigTemplate_6ba720bdebe19425601542d8462833fd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/event_analysis.html.twig"));

        // line 1
        yield "<h2>📊 AI Analysis - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1), "html", null, true);
        yield "</h2>

<div class=\"card p-4\">
    <h3>⭐ Rating: ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 4, $this->source); })()), "rating", [], "any", false, false, false, 4), "html", null, true);
        yield "/5</h3>

    <p>😊 Positive: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 6, $this->source); })()), "positive", [], "any", false, false, false, 6), "html", null, true);
        yield "%</p>
    <p>😐 Neutral: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 7, $this->source); })()), "neutral", [], "any", false, false, false, 7), "html", null, true);
        yield "%</p>
    <p>😡 Negative: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 8, $this->source); })()), "negative", [], "any", false, false, false, 8), "html", null, true);
        yield "%</p>

    <hr>

    <h4>🧾 Summary</h4>
    <p>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 13, $this->source); })()), "summary", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
</div>

<a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_events");
        yield "\" class=\"btn btn-secondary mt-3\">
    ⬅ Back
</a>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "evenement/event_analysis.html.twig";
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
        return array (  79 => 16,  73 => 13,  65 => 8,  61 => 7,  57 => 6,  52 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>📊 AI Analysis - {{ event.title }}</h2>

<div class=\"card p-4\">
    <h3>⭐ Rating: {{ analysis.rating }}/5</h3>

    <p>😊 Positive: {{ analysis.positive }}%</p>
    <p>😐 Neutral: {{ analysis.neutral }}%</p>
    <p>😡 Negative: {{ analysis.negative }}%</p>

    <hr>

    <h4>🧾 Summary</h4>
    <p>{{ analysis.summary }}</p>
</div>

<a href=\"{{ path('admin_events') }}\" class=\"btn btn-secondary mt-3\">
    ⬅ Back
</a>", "evenement/event_analysis.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\evenement\\event_analysis.html.twig");
    }
}
