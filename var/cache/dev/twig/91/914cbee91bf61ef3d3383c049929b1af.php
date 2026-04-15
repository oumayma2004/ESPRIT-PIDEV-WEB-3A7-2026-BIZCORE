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

/* admin/statistics/detailed.html.twig */
class __TwigTemplate_cf7a61e669e0bbf926d8e844845df16e extends Template
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
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics/detailed.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Statistiques Détaillées - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "STATISTIQUES DÉTAILLÉES";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"container-fluid py-5\">
    <!-- Header -->
    <div class=\"row mb-5\">
        <div class=\"col\">
            <h1 class=\"display-4 fw-bold text-dark\">
                <i class=\"fas fa-chart-bar text-primary me-3\"></i>Vue Détaillée des Statistiques
            </h1>
            <p class=\"lead text-muted\">Analyse approfondie des performances de chaque coach</p>
        </div>
    </div>

    <!-- Cartes détaillées pour chaque coach -->
    <div class=\"row g-4\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coachesStatistics"]) || array_key_exists("coachesStatistics", $context) ? $context["coachesStatistics"] : (function () { throw new RuntimeError('Variable "coachesStatistics" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 22
            yield "        <div class=\"col-lg-6 col-xl-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <!-- Header avec rang et nom -->
                <div class=\"card-header bg-gradient\" 
                     style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div>
                            <h5 class=\"card-title mb-1\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fullName", [], "any", false, false, false, 29), "html", null, true);
            yield "</h5>
                            <small class=\"text-light\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "domaine", [], "any", false, false, false, 30), "html", null, true);
            yield "</small>
                        </div>
                        <div class=\"text-end\">
                            <div class=\"display-6 fw-bold\">#";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "rang", [], "any", false, false, false, 33), "html", null, true);
            yield "</div>
                            <small class=\"text-light\">Classement</small>
                        </div>
                    </div>
                </div>

                <div class=\"card-body\">
                    <!-- Score global principal -->
                    <div class=\"text-center mb-4\">
                        <div class=\"display-1 fw-bold text-primary\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 42), "html", null, true);
            yield "</div>
                        <p class=\"text-muted\">Score Global / 100</p>
                        <div class=\"progress\" style=\"height: 12px;\">
                            ";
            // line 45
            $context["scoreColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 45) >= 70)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 45) >= 50)) ? ("warning") : ("danger"))));
            // line 46
            yield "                            <div class=\"progress-bar bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "\" 
                                 style=\"width: ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 47), "html", null, true);
            yield "%;\">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- KPI 1: Taux d'Occupation -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-calendar-check text-info me-2\"></i>Taux d'Occupation
                            </label>
                            <span class=\"badge bg-info\">35%</span>
                        </div>
                        <p class=\"text-muted small\">Pourcentage de créneaux réservés</p>
                        <div class=\"progress\" style=\"height: 25px;\">
                            <div class=\"progress-bar bg-info\" 
                                 role=\"progressbar\" 
                                 style=\"width: ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tauxOccupation", [], "any", false, false, false, 66), "html", null, true);
            yield "%;\"
                                 aria-valuenow=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tauxOccupation", [], "any", false, false, false, 67), "html", null, true);
            yield "\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                                <strong>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tauxOccupation", [], "any", false, false, false, 70), "html", null, true);
            yield "%</strong>
                            </div>
                        </div>
                    </div>

                    <!-- KPI 2: Note Pondérée -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-star text-warning me-2\"></i>Note Pondérée
                            </label>
                            <span class=\"badge bg-warning text-dark\">35%</span>
                        </div>
                        <p class=\"text-muted small\">En fonction du nombre d'avis reçus</p>
                        <div class=\"progress\" style=\"height: 25px;\">
                            <div class=\"progress-bar bg-warning\" 
                                 role=\"progressbar\" 
                                 style=\"width: ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "notePonderee", [], "any", false, false, false, 87), "html", null, true);
            yield "%;\"
                                 aria-valuenow=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "notePonderee", [], "any", false, false, false, 88), "html", null, true);
            yield "\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                                <strong>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "notePonderee", [], "any", false, false, false, 91), "html", null, true);
            yield "</strong>
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            ";
            // line 95
            $context["stars"] = Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "notePonderee", [], "any", false, false, false, 95) / 20), 0);
            // line 96
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 97
                yield "                                ";
                if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new RuntimeError('Variable "stars" does not exist.', 97, $this->source); })()))) {
                    // line 98
                    yield "                                    <i class=\"fas fa-star text-warning\"></i>
                                ";
                } else {
                    // line 100
                    yield "                                    <i class=\"far fa-star text-muted\"></i>
                                ";
                }
                // line 102
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                        </div>
                    </div>

                    <!-- KPI 3: Fidélité Client -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-handshake text-success me-2\"></i>Fidélité Client
                            </label>
                            <span class=\"badge bg-success\">20%</span>
                        </div>
                        <p class=\"text-muted small\">% clients qui reviennent</p>
                        <div class=\"progress\" style=\"height: 25px;\">
                            <div class=\"progress-bar bg-success\" 
                                 role=\"progressbar\" 
                                 style=\"width: ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fidelite", [], "any", false, false, false, 118), "html", null, true);
            yield "%;\"
                                 aria-valuenow=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fidelite", [], "any", false, false, false, 119), "html", null, true);
            yield "\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                                <strong>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fidelite", [], "any", false, false, false, 122), "html", null, true);
            yield "%</strong>
                            </div>
                        </div>
                    </div>

                    <!-- KPI 4: Tendance -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-chart-line text-warning me-2\"></i>Tendance
                            </label>
                            <span class=\"badge bg-warning text-dark\">10%</span>
                        </div>
                        <p class=\"text-muted small\">vs mois précédent</p>
                        <div class=\"alert mb-0\" 
                             style=\"background-color: ";
            // line 137
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 137) > 100)) {
                yield "#d4edda";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 137) < 100)) {
                yield "#f8d7da";
            } else {
                yield "#d1ecf1";
            }
            yield ";\">
                            <strong>
                                ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 139) > 100)) {
                // line 140
                yield "                                    <i class=\"fas fa-arrow-up text-success me-2\"></i>
                                    +";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 141) - 100), 0), "html", null, true);
                yield "%
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 142
$context["stat"], "tendance", [], "any", false, false, false, 142) < 100)) {
                // line 143
                yield "                                    <i class=\"fas fa-arrow-down text-danger me-2\"></i>
                                    -";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((100 - CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 144)), 0), "html", null, true);
                yield "%
                                ";
            } else {
                // line 146
                yield "                                    <i class=\"fas fa-minus text-info me-2\"></i>
                                    Stable
                                ";
            }
            // line 149
            yield "                            </strong>
                        </div>
                    </div>

                    <hr>

                    <!-- Informations complémentaires -->
                    <div class=\"row text-center text-muted small\">
                        <div class=\"col-6\">
                            <strong>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "experienceAnnees", [], "any", false, false, false, 158), "html", null, true);
            yield "</strong><br/>Ans d'expérience
                        </div>
                        <div class=\"col-6\">
                            <strong>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tarifHoraire", [], "any", false, false, false, 161), "html", null, true);
            yield " DT/H</strong><br/>Tarif horaire
                        </div>
                    </div>
                </div>

                <!-- Footer avec action -->
                <div class=\"card-footer bg-light border-0\">
                    <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "coach", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary w-100\">
                        <i class=\"fas fa-eye me-2\"></i>Voir le coach
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "    </div>

    <!-- Actions de navigation -->
    <div class=\"row mt-5\">
        <div class=\"col text-center\">
            <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics_index");
        yield "\" class=\"btn btn-lg btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la Vue Classement
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
    
    .progress-bar {
        transition: width 0.6s ease;
        font-weight: bold;
        font-size: 0.875rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/statistics/detailed.html.twig";
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
        return array (  386 => 180,  379 => 175,  366 => 168,  356 => 161,  350 => 158,  339 => 149,  334 => 146,  329 => 144,  326 => 143,  324 => 142,  320 => 141,  317 => 140,  315 => 139,  304 => 137,  286 => 122,  280 => 119,  276 => 118,  259 => 103,  253 => 102,  249 => 100,  245 => 98,  242 => 97,  237 => 96,  235 => 95,  228 => 91,  222 => 88,  218 => 87,  198 => 70,  192 => 67,  188 => 66,  166 => 47,  161 => 46,  159 => 45,  153 => 42,  141 => 33,  135 => 30,  131 => 29,  122 => 22,  118 => 21,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques Détaillées - Admin{% endblock %}

{% block page_title %}STATISTIQUES DÉTAILLÉES{% endblock %}

{% block body %}
<div class=\"container-fluid py-5\">
    <!-- Header -->
    <div class=\"row mb-5\">
        <div class=\"col\">
            <h1 class=\"display-4 fw-bold text-dark\">
                <i class=\"fas fa-chart-bar text-primary me-3\"></i>Vue Détaillée des Statistiques
            </h1>
            <p class=\"lead text-muted\">Analyse approfondie des performances de chaque coach</p>
        </div>
    </div>

    <!-- Cartes détaillées pour chaque coach -->
    <div class=\"row g-4\">
        {% for stat in coachesStatistics %}
        <div class=\"col-lg-6 col-xl-4\">
            <div class=\"card shadow-sm border-0 h-100\">
                <!-- Header avec rang et nom -->
                <div class=\"card-header bg-gradient\" 
                     style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div>
                            <h5 class=\"card-title mb-1\">{{ stat.fullName }}</h5>
                            <small class=\"text-light\">{{ stat.domaine }}</small>
                        </div>
                        <div class=\"text-end\">
                            <div class=\"display-6 fw-bold\">#{{ stat.rang }}</div>
                            <small class=\"text-light\">Classement</small>
                        </div>
                    </div>
                </div>

                <div class=\"card-body\">
                    <!-- Score global principal -->
                    <div class=\"text-center mb-4\">
                        <div class=\"display-1 fw-bold text-primary\">{{ stat.scoreGlobal }}</div>
                        <p class=\"text-muted\">Score Global / 100</p>
                        <div class=\"progress\" style=\"height: 12px;\">
                            {% set scoreColor = stat.scoreGlobal >= 70 ? 'success' : (stat.scoreGlobal >= 50 ? 'warning' : 'danger') %}
                            <div class=\"progress-bar bg-{{ scoreColor }}\" 
                                 style=\"width: {{ stat.scoreGlobal }}%;\">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- KPI 1: Taux d'Occupation -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-calendar-check text-info me-2\"></i>Taux d'Occupation
                            </label>
                            <span class=\"badge bg-info\">35%</span>
                        </div>
                        <p class=\"text-muted small\">Pourcentage de créneaux réservés</p>
                        <div class=\"progress\" style=\"height: 25px;\">
                            <div class=\"progress-bar bg-info\" 
                                 role=\"progressbar\" 
                                 style=\"width: {{ stat.tauxOccupation }}%;\"
                                 aria-valuenow=\"{{ stat.tauxOccupation }}\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                                <strong>{{ stat.tauxOccupation }}%</strong>
                            </div>
                        </div>
                    </div>

                    <!-- KPI 2: Note Pondérée -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-star text-warning me-2\"></i>Note Pondérée
                            </label>
                            <span class=\"badge bg-warning text-dark\">35%</span>
                        </div>
                        <p class=\"text-muted small\">En fonction du nombre d'avis reçus</p>
                        <div class=\"progress\" style=\"height: 25px;\">
                            <div class=\"progress-bar bg-warning\" 
                                 role=\"progressbar\" 
                                 style=\"width: {{ stat.notePonderee }}%;\"
                                 aria-valuenow=\"{{ stat.notePonderee }}\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                                <strong>{{ stat.notePonderee }}</strong>
                            </div>
                        </div>
                        <div class=\"mt-2\">
                            {% set stars = (stat.notePonderee / 20) | round(0) %}
                            {% for i in range(1, 5) %}
                                {% if i <= stars %}
                                    <i class=\"fas fa-star text-warning\"></i>
                                {% else %}
                                    <i class=\"far fa-star text-muted\"></i>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>

                    <!-- KPI 3: Fidélité Client -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-handshake text-success me-2\"></i>Fidélité Client
                            </label>
                            <span class=\"badge bg-success\">20%</span>
                        </div>
                        <p class=\"text-muted small\">% clients qui reviennent</p>
                        <div class=\"progress\" style=\"height: 25px;\">
                            <div class=\"progress-bar bg-success\" 
                                 role=\"progressbar\" 
                                 style=\"width: {{ stat.fidelite }}%;\"
                                 aria-valuenow=\"{{ stat.fidelite }}\" 
                                 aria-valuemin=\"0\" 
                                 aria-valuemax=\"100\">
                                <strong>{{ stat.fidelite }}%</strong>
                            </div>
                        </div>
                    </div>

                    <!-- KPI 4: Tendance -->
                    <div class=\"mb-4\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <label class=\"form-label mb-0 fw-bold\">
                                <i class=\"fas fa-chart-line text-warning me-2\"></i>Tendance
                            </label>
                            <span class=\"badge bg-warning text-dark\">10%</span>
                        </div>
                        <p class=\"text-muted small\">vs mois précédent</p>
                        <div class=\"alert mb-0\" 
                             style=\"background-color: {% if stat.tendance > 100 %}#d4edda{% elseif stat.tendance < 100 %}#f8d7da{% else %}#d1ecf1{% endif %};\">
                            <strong>
                                {% if stat.tendance > 100 %}
                                    <i class=\"fas fa-arrow-up text-success me-2\"></i>
                                    +{{ (stat.tendance - 100) | round(0) }}%
                                {% elseif stat.tendance < 100 %}
                                    <i class=\"fas fa-arrow-down text-danger me-2\"></i>
                                    -{{ (100 - stat.tendance) | round(0) }}%
                                {% else %}
                                    <i class=\"fas fa-minus text-info me-2\"></i>
                                    Stable
                                {% endif %}
                            </strong>
                        </div>
                    </div>

                    <hr>

                    <!-- Informations complémentaires -->
                    <div class=\"row text-center text-muted small\">
                        <div class=\"col-6\">
                            <strong>{{ stat.experienceAnnees }}</strong><br/>Ans d'expérience
                        </div>
                        <div class=\"col-6\">
                            <strong>{{ stat.tarifHoraire }} DT/H</strong><br/>Tarif horaire
                        </div>
                    </div>
                </div>

                <!-- Footer avec action -->
                <div class=\"card-footer bg-light border-0\">
                    <a href=\"{{ path('admin_coach_show', {id: stat.coach.id}) }}\" class=\"btn btn-sm btn-primary w-100\">
                        <i class=\"fas fa-eye me-2\"></i>Voir le coach
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Actions de navigation -->
    <div class=\"row mt-5\">
        <div class=\"col text-center\">
            <a href=\"{{ path('admin_statistics_index') }}\" class=\"btn btn-lg btn-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la Vue Classement
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
    
    .progress-bar {
        transition: width 0.6s ease;
        font-weight: bold;
        font-size: 0.875rem;
    }
</style>
{% endblock %}
", "admin/statistics/detailed.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\admin\\statistics\\detailed.html.twig");
    }
}
