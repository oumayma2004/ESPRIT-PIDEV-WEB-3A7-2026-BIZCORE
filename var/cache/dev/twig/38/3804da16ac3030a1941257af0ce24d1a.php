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

/* admin/statistics/index.html.twig */
class __TwigTemplate_d022d6aee7b0c9b29d731759de3241d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics/index.html.twig"));

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

        yield "Statistiques des Coachs - Admin";
        
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

        yield "STATISTIQUES DES COACHS";
        
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
        <div class=\"col-md-8\">
            <h1 class=\"display-4 fw-bold text-dark\">
                <i class=\"fas fa-chart-line text-primary me-3\"></i>Statistiques des Coachs
            </h1>
            <p class=\"lead text-muted\">Classement global, KPI et analyse de performance</p>
        </div>
        <div class=\"col-md-4 text-end\">
            <div class=\"alert alert-info py-3\">
                <strong>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCoaches"]) || array_key_exists("totalCoaches", $context) ? $context["totalCoaches"] : (function () { throw new RuntimeError('Variable "totalCoaches" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</strong> coachs analysés
            </div>
        </div>
    </div>

    <!-- Highlights: Top & Bottom Coaches -->
    ";
        // line 25
        if (((isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 25, $this->source); })()) && (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "    <div class=\"row mb-5\">
        <!-- Top Coach (Best Performer) -->
        <div class=\"col-md-6\">
            <div class=\"card border-success shadow-sm h-100\">
                <div class=\"card-header bg-success text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-trophy me-2\"></i>Meilleur Coach
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"flex-grow-1\">
                            <h4 class=\"mb-0\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 38, $this->source); })()), "fullName", [], "any", false, false, false, 38), "html", null, true);
            yield "</h4>
                            <small class=\"text-muted\">Classement : <strong>#";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 39, $this->source); })()), "rang", [], "any", false, false, false, 39), "html", null, true);
            yield "</strong></small>
                        </div>
                        <div class=\"text-end\">
                            <div class=\"display-6 text-success fw-bold\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 42, $this->source); })()), "scoreGlobal", [], "any", false, false, false, 42), "html", null, true);
            yield "/100</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Occupation</small><br>
                            <strong>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 48, $this->source); })()), "tauxOccupation", [], "any", false, false, false, 48), "html", null, true);
            yield "%</strong>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Fidélité</small><br>
                            <strong>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 52, $this->source); })()), "fidelite", [], "any", false, false, false, 52), "html", null, true);
            yield "%</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Note</small><br>
                            <strong>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 56, $this->source); })()), "notePonderee", [], "any", false, false, false, 56), "html", null, true);
            yield "/100</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Tendance</small><br>
                            <strong>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["topCoach"]) || array_key_exists("topCoach", $context) ? $context["topCoach"] : (function () { throw new RuntimeError('Variable "topCoach" does not exist.', 60, $this->source); })()), "tendance", [], "any", false, false, false, 60), "html", null, true);
            yield "</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Coach (Needs Improvement) -->
        <div class=\"col-md-6\">
            <div class=\"card border-warning shadow-sm h-100\">
                <div class=\"card-header bg-warning text-dark\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>À Améliorer
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"flex-grow-1\">
                            <h4 class=\"mb-0\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 78, $this->source); })()), "fullName", [], "any", false, false, false, 78), "html", null, true);
            yield "</h4>
                            <small class=\"text-muted\">Classement : <strong>#";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 79, $this->source); })()), "rang", [], "any", false, false, false, 79), "html", null, true);
            yield "</strong></small>
                        </div>
                        <div class=\"text-end\">
                            <div class=\"display-6 text-warning fw-bold\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 82, $this->source); })()), "scoreGlobal", [], "any", false, false, false, 82), "html", null, true);
            yield "/100</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Occupation</small><br>
                            <strong>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 88, $this->source); })()), "tauxOccupation", [], "any", false, false, false, 88), "html", null, true);
            yield "%</strong>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Fidélité</small><br>
                            <strong>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 92, $this->source); })()), "fidelite", [], "any", false, false, false, 92), "html", null, true);
            yield "%</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Note</small><br>
                            <strong>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 96, $this->source); })()), "notePonderee", [], "any", false, false, false, 96), "html", null, true);
            yield "/100</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Tendance</small><br>
                            <strong>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bottomCoach"]) || array_key_exists("bottomCoach", $context) ? $context["bottomCoach"] : (function () { throw new RuntimeError('Variable "bottomCoach" does not exist.', 100, $this->source); })()), "tendance", [], "any", false, false, false, 100), "html", null, true);
            yield "</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 108
        yield "
    <!-- Classement Complet -->
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-list-ol me-2\"></i>Classement Complet des Coachs
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 5%;\">#</th>
                            <th style=\"width: 20%;\">Coach</th>
                            <th style=\"width: 12%;\">Domaine</th>
                            <th style=\"width: 13%;\">Score Global</th>
                            <th style=\"width: 12%;\">Occupation</th>
                            <th style=\"width: 12%;\">Fidélité</th>
                            <th style=\"width: 13%;\">Note</th>
                            <th style=\"width: 13%;\">Tendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coachesStatistics"]) || array_key_exists("coachesStatistics", $context) ? $context["coachesStatistics"] : (function () { throw new RuntimeError('Variable "coachesStatistics" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 133
            yield "                        <tr class=\"align-middle\">
                            <!-- Rang -->
                            <td>
                                <span class=\"badge bg-primary fs-6\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "rang", [], "any", false, false, false, 136), "html", null, true);
            yield "</span>
                            </td>

                            <!-- Nom Coach -->
                            <td>
                                <strong class=\"text-dark\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fullName", [], "any", false, false, false, 141), "html", null, true);
            yield "</strong><br>
                                <small class=\"text-muted\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "experienceAnnees", [], "any", false, false, false, 142), "html", null, true);
            yield " ans exp.</small>
                            </td>

                            <!-- Domaine -->
                            <td>
                                ";
            // line 147
            $context["domaineBadgeClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ["BRANDING" => "warning", "E_COMMERCE" => "info", "LEADERSHIP" => "success", "FINANCE" => "danger", "FUNDING" => "primary"], CoreExtension::getAttribute($this->env, $this->source,             // line 153
$context["stat"], "domaine", [], "any", false, false, false, 153), [], "array", true, true, false, 148) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ["BRANDING" => "warning", "E_COMMERCE" => "info", "LEADERSHIP" => "success", "FINANCE" => "danger", "FUNDING" => "primary"], CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "domaine", [], "any", false, false, false, 153), [], "array", false, false, false, 148)))) ? (CoreExtension::getAttribute($this->env, $this->source, ["BRANDING" => "warning", "E_COMMERCE" => "info", "LEADERSHIP" => "success", "FINANCE" => "danger", "FUNDING" => "primary"], CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "domaine", [], "any", false, false, false, 153), [], "array", false, false, false, 148)) : ("secondary"));
            // line 154
            yield "                                <span class=\"badge bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domaineBadgeClass"]) || array_key_exists("domaineBadgeClass", $context) ? $context["domaineBadgeClass"] : (function () { throw new RuntimeError('Variable "domaineBadgeClass" does not exist.', 154, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "domaine", [], "any", false, false, false, 154), "html", null, true);
            yield "</span>
                            </td>

                            <!-- Score Global -->
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <strong class=\"fs-5 text-dark me-2\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 160), "html", null, true);
            yield "</strong>
                                    <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                        ";
            // line 162
            $context["scoreColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 162) >= 70)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 162) >= 50)) ? ("warning") : ("danger"))));
            // line 163
            yield "                                        <div class=\"progress-bar bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreColor"]) || array_key_exists("scoreColor", $context) ? $context["scoreColor"] : (function () { throw new RuntimeError('Variable "scoreColor" does not exist.', 163, $this->source); })()), "html", null, true);
            yield "\" 
                                             role=\"progressbar\" 
                                             style=\"width: ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 165), "html", null, true);
            yield "%;\" 
                                             aria-valuenow=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "scoreGlobal", [], "any", false, false, false, 166), "html", null, true);
            yield "\" 
                                             aria-valuemin=\"0\" 
                                             aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Taux d'Occupation (35%) -->
                            <td>
                                <div class=\"progress\" style=\"height: 20px;\">
                                    <div class=\"progress-bar bg-info\" 
                                         role=\"progressbar\" 
                                         style=\"width: ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tauxOccupation", [], "any", false, false, false, 179), "html", null, true);
            yield "%;\"
                                         title=\"Taux d'occupation: ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tauxOccupation", [], "any", false, false, false, 180), "html", null, true);
            yield "%\">
                                        <small>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tauxOccupation", [], "any", false, false, false, 181), "html", null, true);
            yield "%</small>
                                    </div>
                                </div>
                                <small class=\"text-muted d-block mt-1\">35% du score</small>
                            </td>

                            <!-- Fidélité Client (20%) -->
                            <td>
                                <div class=\"progress\" style=\"height: 20px;\">
                                    <div class=\"progress-bar bg-success\" 
                                         role=\"progressbar\" 
                                         style=\"width: ";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fidelite", [], "any", false, false, false, 192), "html", null, true);
            yield "%;\"
                                         title=\"Fidélité: ";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fidelite", [], "any", false, false, false, 193), "html", null, true);
            yield "%\">
                                        <small>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "fidelite", [], "any", false, false, false, 194), "html", null, true);
            yield "%</small>
                                    </div>
                                </div>
                                <small class=\"text-muted d-block mt-1\">20% du score</small>
                            </td>

                            <!-- Note Pondérée (35%) -->
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    ";
            // line 203
            $context["noteInt"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "notePonderee", [], "any", false, false, false, 203), 0);
            // line 204
            yield "                                    <strong class=\"me-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noteInt"]) || array_key_exists("noteInt", $context) ? $context["noteInt"] : (function () { throw new RuntimeError('Variable "noteInt" does not exist.', 204, $this->source); })()), "html", null, true);
            yield "/100</strong>
                                    ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 206
                yield "                                        ";
                if (($context["i"] <= ((isset($context["noteInt"]) || array_key_exists("noteInt", $context) ? $context["noteInt"] : (function () { throw new RuntimeError('Variable "noteInt" does not exist.', 206, $this->source); })()) / 20))) {
                    // line 207
                    yield "                                            <i class=\"fas fa-star text-warning fs-6\"></i>
                                        ";
                } else {
                    // line 209
                    yield "                                            <i class=\"far fa-star text-muted fs-6\"></i>
                                        ";
                }
                // line 211
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "                                </div>
                                <small class=\"text-muted d-block mt-1\">35% du score</small>
                            </td>

                            <!-- Tendance (10%) -->
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    ";
            // line 219
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 219) > 100)) {
                // line 220
                yield "                                        <i class=\"fas fa-arrow-up text-success me-2\"></i>
                                        <span class=\"text-success fw-bold\">";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 221) - 100), 0), "html", null, true);
                yield "%</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 222
$context["stat"], "tendance", [], "any", false, false, false, 222) < 100)) {
                // line 223
                yield "                                        <i class=\"fas fa-arrow-down text-danger me-2\"></i>
                                        <span class=\"text-danger fw-bold\">";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((100 - CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "tendance", [], "any", false, false, false, 224)), 0), "html", null, true);
                yield "%</span>
                                    ";
            } else {
                // line 226
                yield "                                        <i class=\"fas fa-minus text-muted me-2\"></i>
                                        <span class=\"text-muted\">Stable</span>
                                    ";
            }
            // line 229
            yield "                                </div>
                                <small class=\"text-muted d-block mt-1\">10% du score</small>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Légende et Explication des KPI -->
    <div class=\"row mt-5\">
        <div class=\"col-lg-12\">
            <div class=\"card bg-light border-0\">
                <div class=\"card-header bg-dark text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i>Explications des KPI
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-info\">
                                <i class=\"fas fa-chart-pie text-info me-2\"></i>Taux d'Occupation (35%)
                            </h6>
                            <p class=\"text-muted small\">Pourcentage de créneaux réservés par rapport aux créneaux disponibles. Un coach très occupé a un taux élevé.</p>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-success\">
                                <i class=\"fas fa-star text-success me-2\"></i>Note Pondérée (35%)
                            </h6>
                            <p class=\"text-muted small\">Note moyenne ajustée selon le nombre d'avis. Une note avec peu d'avis compte moins qu'une note établie.</p>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-success\">
                                <i class=\"fas fa-handshake text-success me-2\"></i>Fidélité Client (20%)
                            </h6>
                            <p class=\"text-muted small\">Pourcentage de clients qui reviennent réserver plusieurs fois avec le même coach. Indicateur de satisfaction.</p>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-warning\">
                                <i class=\"fas fa-chart-line text-warning me-2\"></i>Tendance (10%)
                            </h6>
                            <p class=\"text-muted small\">Comparaison des réservations du mois courant vs mois précédent. Montre l'évolution de la demande.</p>
                        </div>
                    </div>
                    <hr>
                    <p class=\"text-muted small mb-0\">
                        <strong>Score Global :</strong> Calcul pondéré des 4 KPI (35% + 35% + 20% + 10% = 100%). 
                        Les coachs sont classés du score le plus élevé au plus bas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
            <a href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la Gestion des Coachs
            </a>
        </div>
        <div class=\"col-md-6 text-end\">
            <a href=\"";
        // line 294
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics_detailed");
        yield "\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-chart-bar me-2\"></i>Vue Détaillée
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .card:hover {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    
    .progress-bar {
        transition: width 0.6s ease;
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
        return "admin/statistics/index.html.twig";
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
        return array (  534 => 294,  526 => 289,  469 => 234,  459 => 229,  454 => 226,  449 => 224,  446 => 223,  444 => 222,  440 => 221,  437 => 220,  435 => 219,  426 => 212,  420 => 211,  416 => 209,  412 => 207,  409 => 206,  405 => 205,  400 => 204,  398 => 203,  386 => 194,  382 => 193,  378 => 192,  364 => 181,  360 => 180,  356 => 179,  340 => 166,  336 => 165,  330 => 163,  328 => 162,  323 => 160,  311 => 154,  309 => 153,  308 => 147,  300 => 142,  296 => 141,  288 => 136,  283 => 133,  279 => 132,  253 => 108,  242 => 100,  235 => 96,  228 => 92,  221 => 88,  212 => 82,  206 => 79,  202 => 78,  181 => 60,  174 => 56,  167 => 52,  160 => 48,  151 => 42,  145 => 39,  141 => 38,  127 => 26,  125 => 25,  116 => 19,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Coachs - Admin{% endblock %}

{% block page_title %}STATISTIQUES DES COACHS{% endblock %}

{% block body %}
<div class=\"container-fluid py-5\">
    <!-- Header -->
    <div class=\"row mb-5\">
        <div class=\"col-md-8\">
            <h1 class=\"display-4 fw-bold text-dark\">
                <i class=\"fas fa-chart-line text-primary me-3\"></i>Statistiques des Coachs
            </h1>
            <p class=\"lead text-muted\">Classement global, KPI et analyse de performance</p>
        </div>
        <div class=\"col-md-4 text-end\">
            <div class=\"alert alert-info py-3\">
                <strong>{{ totalCoaches }}</strong> coachs analysés
            </div>
        </div>
    </div>

    <!-- Highlights: Top & Bottom Coaches -->
    {% if topCoach and bottomCoach %}
    <div class=\"row mb-5\">
        <!-- Top Coach (Best Performer) -->
        <div class=\"col-md-6\">
            <div class=\"card border-success shadow-sm h-100\">
                <div class=\"card-header bg-success text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-trophy me-2\"></i>Meilleur Coach
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"flex-grow-1\">
                            <h4 class=\"mb-0\">{{ topCoach.fullName }}</h4>
                            <small class=\"text-muted\">Classement : <strong>#{{ topCoach.rang }}</strong></small>
                        </div>
                        <div class=\"text-end\">
                            <div class=\"display-6 text-success fw-bold\">{{ topCoach.scoreGlobal }}/100</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Occupation</small><br>
                            <strong>{{ topCoach.tauxOccupation }}%</strong>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Fidélité</small><br>
                            <strong>{{ topCoach.fidelite }}%</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Note</small><br>
                            <strong>{{ topCoach.notePonderee }}/100</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Tendance</small><br>
                            <strong>{{ topCoach.tendance }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Coach (Needs Improvement) -->
        <div class=\"col-md-6\">
            <div class=\"card border-warning shadow-sm h-100\">
                <div class=\"card-header bg-warning text-dark\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>À Améliorer
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center mb-3\">
                        <div class=\"flex-grow-1\">
                            <h4 class=\"mb-0\">{{ bottomCoach.fullName }}</h4>
                            <small class=\"text-muted\">Classement : <strong>#{{ bottomCoach.rang }}</strong></small>
                        </div>
                        <div class=\"text-end\">
                            <div class=\"display-6 text-warning fw-bold\">{{ bottomCoach.scoreGlobal }}/100</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Occupation</small><br>
                            <strong>{{ bottomCoach.tauxOccupation }}%</strong>
                        </div>
                        <div class=\"col-6 mb-2\">
                            <small class=\"text-muted\">Fidélité</small><br>
                            <strong>{{ bottomCoach.fidelite }}%</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Note</small><br>
                            <strong>{{ bottomCoach.notePonderee }}/100</strong>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted\">Tendance</small><br>
                            <strong>{{ bottomCoach.tendance }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    <!-- Classement Complet -->
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-primary text-white\">
            <h5 class=\"card-title mb-0\">
                <i class=\"fas fa-list-ol me-2\"></i>Classement Complet des Coachs
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 5%;\">#</th>
                            <th style=\"width: 20%;\">Coach</th>
                            <th style=\"width: 12%;\">Domaine</th>
                            <th style=\"width: 13%;\">Score Global</th>
                            <th style=\"width: 12%;\">Occupation</th>
                            <th style=\"width: 12%;\">Fidélité</th>
                            <th style=\"width: 13%;\">Note</th>
                            <th style=\"width: 13%;\">Tendance</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for stat in coachesStatistics %}
                        <tr class=\"align-middle\">
                            <!-- Rang -->
                            <td>
                                <span class=\"badge bg-primary fs-6\">{{ stat.rang }}</span>
                            </td>

                            <!-- Nom Coach -->
                            <td>
                                <strong class=\"text-dark\">{{ stat.fullName }}</strong><br>
                                <small class=\"text-muted\">{{ stat.experienceAnnees }} ans exp.</small>
                            </td>

                            <!-- Domaine -->
                            <td>
                                {% set domaineBadgeClass = {
                                    'BRANDING': 'warning',
                                    'E_COMMERCE': 'info',
                                    'LEADERSHIP': 'success',
                                    'FINANCE': 'danger',
                                    'FUNDING': 'primary'
                                }[stat.domaine] ?? 'secondary' %}
                                <span class=\"badge bg-{{ domaineBadgeClass }}\">{{ stat.domaine }}</span>
                            </td>

                            <!-- Score Global -->
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <strong class=\"fs-5 text-dark me-2\">{{ stat.scoreGlobal }}</strong>
                                    <div class=\"progress flex-grow-1\" style=\"height: 8px;\">
                                        {% set scoreColor = stat.scoreGlobal >= 70 ? 'success' : (stat.scoreGlobal >= 50 ? 'warning' : 'danger') %}
                                        <div class=\"progress-bar bg-{{ scoreColor }}\" 
                                             role=\"progressbar\" 
                                             style=\"width: {{ stat.scoreGlobal }}%;\" 
                                             aria-valuenow=\"{{ stat.scoreGlobal }}\" 
                                             aria-valuemin=\"0\" 
                                             aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Taux d'Occupation (35%) -->
                            <td>
                                <div class=\"progress\" style=\"height: 20px;\">
                                    <div class=\"progress-bar bg-info\" 
                                         role=\"progressbar\" 
                                         style=\"width: {{ stat.tauxOccupation }}%;\"
                                         title=\"Taux d'occupation: {{ stat.tauxOccupation }}%\">
                                        <small>{{ stat.tauxOccupation }}%</small>
                                    </div>
                                </div>
                                <small class=\"text-muted d-block mt-1\">35% du score</small>
                            </td>

                            <!-- Fidélité Client (20%) -->
                            <td>
                                <div class=\"progress\" style=\"height: 20px;\">
                                    <div class=\"progress-bar bg-success\" 
                                         role=\"progressbar\" 
                                         style=\"width: {{ stat.fidelite }}%;\"
                                         title=\"Fidélité: {{ stat.fidelite }}%\">
                                        <small>{{ stat.fidelite }}%</small>
                                    </div>
                                </div>
                                <small class=\"text-muted d-block mt-1\">20% du score</small>
                            </td>

                            <!-- Note Pondérée (35%) -->
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    {% set noteInt = stat.notePonderee | round(0) %}
                                    <strong class=\"me-2\">{{ noteInt }}/100</strong>
                                    {% for i in range(1, 5) %}
                                        {% if i <= (noteInt / 20) %}
                                            <i class=\"fas fa-star text-warning fs-6\"></i>
                                        {% else %}
                                            <i class=\"far fa-star text-muted fs-6\"></i>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <small class=\"text-muted d-block mt-1\">35% du score</small>
                            </td>

                            <!-- Tendance (10%) -->
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    {% if stat.tendance > 100 %}
                                        <i class=\"fas fa-arrow-up text-success me-2\"></i>
                                        <span class=\"text-success fw-bold\">{{ (stat.tendance - 100) | round(0) }}%</span>
                                    {% elseif stat.tendance < 100 %}
                                        <i class=\"fas fa-arrow-down text-danger me-2\"></i>
                                        <span class=\"text-danger fw-bold\">{{ (100 - stat.tendance) | round(0) }}%</span>
                                    {% else %}
                                        <i class=\"fas fa-minus text-muted me-2\"></i>
                                        <span class=\"text-muted\">Stable</span>
                                    {% endif %}
                                </div>
                                <small class=\"text-muted d-block mt-1\">10% du score</small>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Légende et Explication des KPI -->
    <div class=\"row mt-5\">
        <div class=\"col-lg-12\">
            <div class=\"card bg-light border-0\">
                <div class=\"card-header bg-dark text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i>Explications des KPI
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-info\">
                                <i class=\"fas fa-chart-pie text-info me-2\"></i>Taux d'Occupation (35%)
                            </h6>
                            <p class=\"text-muted small\">Pourcentage de créneaux réservés par rapport aux créneaux disponibles. Un coach très occupé a un taux élevé.</p>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-success\">
                                <i class=\"fas fa-star text-success me-2\"></i>Note Pondérée (35%)
                            </h6>
                            <p class=\"text-muted small\">Note moyenne ajustée selon le nombre d'avis. Une note avec peu d'avis compte moins qu'une note établie.</p>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-success\">
                                <i class=\"fas fa-handshake text-success me-2\"></i>Fidélité Client (20%)
                            </h6>
                            <p class=\"text-muted small\">Pourcentage de clients qui reviennent réserver plusieurs fois avec le même coach. Indicateur de satisfaction.</p>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <h6 class=\"fw-bold text-warning\">
                                <i class=\"fas fa-chart-line text-warning me-2\"></i>Tendance (10%)
                            </h6>
                            <p class=\"text-muted small\">Comparaison des réservations du mois courant vs mois précédent. Montre l'évolution de la demande.</p>
                        </div>
                    </div>
                    <hr>
                    <p class=\"text-muted small mb-0\">
                        <strong>Score Global :</strong> Calcul pondéré des 4 KPI (35% + 35% + 20% + 10% = 100%). 
                        Les coachs sont classés du score le plus élevé au plus bas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
            <a href=\"{{ path('admin_coach_index') }}\" class=\"btn btn-secondary btn-lg\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la Gestion des Coachs
            </a>
        </div>
        <div class=\"col-md-6 text-end\">
            <a href=\"{{ path('admin_statistics_detailed') }}\" class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-chart-bar me-2\"></i>Vue Détaillée
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .card:hover {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    
    .progress-bar {
        transition: width 0.6s ease;
    }
</style>
{% endblock %}
", "admin/statistics/index.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\admin\\statistics\\index.html.twig");
    }
}
