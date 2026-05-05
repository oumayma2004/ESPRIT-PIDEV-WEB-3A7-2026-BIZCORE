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

/* admin/coach/stats.html.twig */
class __TwigTemplate_9298ba5a37ce297012bc13b93323d419 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/stats.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Statistiques Coachs - Bizcore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-fluid\">
    <!-- Page Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0\">
            <i class=\"bi bi-graph-up me-2\"></i>Statistiques des Coachs
        </h2>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>

    <!-- Summary Cards -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-people-fill text-primary fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "total", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">Total Coachs</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-check-circle-fill text-success fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 32, $this->source); })()), "disponibles", [], "any", false, false, false, 32), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">Disponibles</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-x-circle-fill text-danger fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "indisponibles", [], "any", false, false, false, 41), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">Indisponibles</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-star-fill text-warning fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "note_moyenne", [], "any", false, false, false, 50), "html", null, true);
        yield "/5</h3>
                    <p class=\"text-muted mb-0\">Note Moyenne</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Statistics -->
    <div class=\"row g-3\">
        <!-- Répartition par Domaine -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white border-0 pb-0\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-briefcase text-primary me-2\"></i>Répartition par Domaine
                    </h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Domaine</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 77, $this->source); })()), "par_domaine", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["domaine"] => $context["count"]) {
            // line 78
            yield "                            <tr>
                                <td>
                                    <span class=\"badge bg-info\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domaine"], "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-end\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 84, $this->source); })()), "total", [], "any", false, false, false, 84)) * 100), 1), "html", null, true);
            yield "%
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['domaine'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Répartition par Expérience -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white border-0 pb-0\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-award text-success me-2\"></i>Répartition par Expérience
                    </h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Expérience</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 112, $this->source); })()), "par_experience", [], "any", false, false, false, 112));
        foreach ($context['_seq'] as $context["range"] => $context["count"]) {
            // line 113
            yield "                            <tr>
                                <td>
                                    <span class=\"badge bg-primary\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["range"], "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-end\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 119, $this->source); })()), "total", [], "any", false, false, false, 119)) * 100), 1), "html", null, true);
            yield "%
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['range'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tarif Moyen -->
        <div class=\"col-md-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-currency-dollar text-success fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 134, $this->source); })()), "tarif_moyen", [], "any", false, false, false, 134), "html", null, true);
        yield " DT/H</h3>
                    <p class=\"text-muted mb-0\">Tarif Horaire Moyen</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/coach/stats.html.twig";
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
        return array (  283 => 134,  270 => 123,  260 => 119,  255 => 117,  250 => 115,  246 => 113,  242 => 112,  216 => 88,  206 => 84,  201 => 82,  196 => 80,  192 => 78,  188 => 77,  158 => 50,  146 => 41,  134 => 32,  122 => 23,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques Coachs - Bizcore{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <!-- Page Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0\">
            <i class=\"bi bi-graph-up me-2\"></i>Statistiques des Coachs
        </h2>
        <a href=\"{{ path('admin_coach_index') }}\" class=\"btn btn-secondary\">
            <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>

    <!-- Summary Cards -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-people-fill text-primary fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">{{ stats.total }}</h3>
                    <p class=\"text-muted mb-0\">Total Coachs</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-check-circle-fill text-success fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">{{ stats.disponibles }}</h3>
                    <p class=\"text-muted mb-0\">Disponibles</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-x-circle-fill text-danger fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">{{ stats.indisponibles }}</h3>
                    <p class=\"text-muted mb-0\">Indisponibles</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-star-fill text-warning fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">{{ stats.note_moyenne }}/5</h3>
                    <p class=\"text-muted mb-0\">Note Moyenne</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Statistics -->
    <div class=\"row g-3\">
        <!-- Répartition par Domaine -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white border-0 pb-0\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-briefcase text-primary me-2\"></i>Répartition par Domaine
                    </h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Domaine</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for domaine, count in stats.par_domaine %}
                            <tr>
                                <td>
                                    <span class=\"badge bg-info\">{{ domaine }}</span>
                                </td>
                                <td class=\"text-end\">{{ count }}</td>
                                <td class=\"text-end\">
                                    {{ ((count / stats.total) * 100)|round(1) }}%
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Répartition par Expérience -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white border-0 pb-0\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-award text-success me-2\"></i>Répartition par Expérience
                    </h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Expérience</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for range, count in stats.par_experience %}
                            <tr>
                                <td>
                                    <span class=\"badge bg-primary\">{{ range }}</span>
                                </td>
                                <td class=\"text-end\">{{ count }}</td>
                                <td class=\"text-end\">
                                    {{ ((count / stats.total) * 100)|round(1) }}%
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tarif Moyen -->
        <div class=\"col-md-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-currency-dollar text-success fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">{{ stats.tarif_moyen }} DT/H</h3>
                    <p class=\"text-muted mb-0\">Tarif Horaire Moyen</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
</style>
{% endblock %}
", "admin/coach/stats.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\coach\\stats.html.twig");
    }
}
