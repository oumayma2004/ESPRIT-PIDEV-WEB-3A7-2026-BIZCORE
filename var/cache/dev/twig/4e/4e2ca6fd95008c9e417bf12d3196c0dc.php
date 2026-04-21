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

/* admin/domaine/index.html.twig */
class __TwigTemplate_95b1000a333168d0656c659b1438b0a4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/domaine/index.html.twig"));

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

        yield "Liste des Domaines — Bizcore";
        
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

        yield "GESTION COACHING";
        
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
        yield "<div class=\"card-panel\">

    ";
        // line 11
        yield "    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 20px; font-weight: 700; color: #111827; margin: 0;\">
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" style=\"color: #111827; text-decoration: none;\">Liste des Coachs</a>
            <span style=\"color: #d1d5db; margin: 0 10px;\">|</span>
            <span style=\"color: #20c997;\">Liste des Domaines</span>
        </h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter Domaine
            </a>
            <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-chart-bar\"></i> Statistiques
            </a>
        </div>
    </div>

    ";
        // line 28
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 30
                yield "            <div class=\"alert alert-";
                yield ((($context["type"] == "success")) ? ("success") : ("danger"));
                yield " alert-dismissible fade show mb-3\" role=\"alert\">
                <i class=\"fas fa-";
                // line 31
                yield ((($context["type"] == "success")) ? ("check-circle") : ("exclamation-circle"));
                yield "\"></i>
                ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
    ";
        // line 39
        yield "    <div class=\"d-flex align-items-center justify-content-between mb-3\">
        <div class=\"position-relative\" style=\"width: 280px;\">
            <i class=\"fas fa-search position-absolute\" style=\"left: 12px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 13px;\"></i>
            <input type=\"text\"
                   id=\"searchInput\"
                   class=\"form-control form-control-sm\"
                   placeholder=\"Rechercher un domaine...\"
                   style=\"padding-left: 36px; border-radius: 6px; border-color: #d1d5db; font-size: 13px;\">
        </div>
        <div>
            <select class=\"form-select form-select-sm\" id=\"sortSelect\" style=\"width: 200px; font-size: 13px; border-color: #d1d5db;\">
                <option>Trier: Nom (A→Z)</option>
                <option>Trier: Nom (Z→A)</option>
                <option>Trier: Coaches ↑</option>
                <option>Trier: Coaches ↓</option>
                <option>Trier: Durée ↑</option>
                <option>Trier: Durée ↓</option>
            </select>
        </div>
    </div>

    ";
        // line 61
        yield "    <div class=\"table-responsive\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Nom du domaine</th>
                    <th>Description</th>
                    <th>Niveau</th>
                    <th>Durée (h)</th>
                    <th>Nb Coaches</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"domaineTableBody\">
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["domaines"]) || array_key_exists("domaines", $context) ? $context["domaines"] : (function () { throw new RuntimeError('Variable "domaines" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 75
            yield "                <tr data-nom=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 75)), "html", null, true);
            yield "\"
                    data-coaches=\"";
            // line 76
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coachCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 76), [], "array", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coachCounts"]) || array_key_exists("coachCounts", $context) ? $context["coachCounts"] : (function () { throw new RuntimeError('Variable "coachCounts" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coachCounts"]) || array_key_exists("coachCounts", $context) ? $context["coachCounts"] : (function () { throw new RuntimeError('Variable "coachCounts" does not exist.', 76, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "html", null, true)) : (0));
            yield "\"
                    data-duree=\"";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 77)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 77), "html", null, true)) : (0));
            yield "\">
                    <td>
                        <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" style=\"font-weight:600;color:#111827;text-decoration:none;\">
                            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 80), "html", null, true);
            yield "
                        </a>
                    </td>
                    <td style=\"font-size:13px;color:#6b7280;max-width:250px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;\">
                        ";
            // line 84
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", true, true, false, 84) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", false, false, false, 84)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", false, false, false, 84), "html", null, true)) : ("—"));
            yield "
                    </td>
                    <td>
                        ";
            // line 87
            $context["niveauColors"] = ["Débutant" => "#059669", "Intermédiaire" => "#f59e0b", "Expert" => "#dc2626"];
            // line 88
            yield "                        <span style=\"background:";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 88), [], "array", true, true, false, 88) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauColors"]) || array_key_exists("niveauColors", $context) ? $context["niveauColors"] : (function () { throw new RuntimeError('Variable "niveauColors" does not exist.', 88, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 88), [], "array", false, false, false, 88)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauColors"]) || array_key_exists("niveauColors", $context) ? $context["niveauColors"] : (function () { throw new RuntimeError('Variable "niveauColors" does not exist.', 88, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 88), [], "array", false, false, false, 88), "html", null, true)) : ("#6b7280"));
            yield "18;
                                     color:";
            // line 89
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 89), [], "array", true, true, false, 89) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauColors"]) || array_key_exists("niveauColors", $context) ? $context["niveauColors"] : (function () { throw new RuntimeError('Variable "niveauColors" does not exist.', 89, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 89), [], "array", false, false, false, 89)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauColors"]) || array_key_exists("niveauColors", $context) ? $context["niveauColors"] : (function () { throw new RuntimeError('Variable "niveauColors" does not exist.', 89, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 89), [], "array", false, false, false, 89), "html", null, true)) : ("#6b7280"));
            yield ";
                                     border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;\">
                            ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 91), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td style=\"font-size:13px;\">";
            // line 94
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", true, true, false, 94) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 94)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 94), "html", null, true)) : ("—"));
            yield "</td>
                    <td>
                        <span style=\"background:#eff6ff;color:#1d4ed8;border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;\">
                            ";
            // line 97
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coachCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 97), [], "array", true, true, false, 97) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coachCounts"]) || array_key_exists("coachCounts", $context) ? $context["coachCounts"] : (function () { throw new RuntimeError('Variable "coachCounts" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 97), [], "array", false, false, false, 97)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coachCounts"]) || array_key_exists("coachCounts", $context) ? $context["coachCounts"] : (function () { throw new RuntimeError('Variable "coachCounts" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 97), [], "array", false, false, false, 97), "html", null, true)) : (0));
            yield " coach";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["coachCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 97), [], "array", true, true, false, 97) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coachCounts"]) || array_key_exists("coachCounts", $context) ? $context["coachCounts"] : (function () { throw new RuntimeError('Variable "coachCounts" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 97), [], "array", false, false, false, 97)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["coachCounts"]) || array_key_exists("coachCounts", $context) ? $context["coachCounts"] : (function () { throw new RuntimeError('Variable "coachCounts" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 97), [], "array", false, false, false, 97)) : (0)) > 1)) ? ("s") : (""));
            yield "
                        </span>
                    </td>
                    <td style=\"white-space:nowrap;\">
                        <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm\" style=\"background:#20c997;color:#fff;border:none;margin-right:4px;\"
                           title=\"Modifier\">
                            <i class=\"fas fa-pencil-alt\"></i> Mod.
                        </a>
                        <button class=\"btn btn-danger btn-sm\"
                                onclick=\"showDeleteConfirm('delDomaine";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 107), "js"), "html", null, true);
            yield "')\">
                            Sup.
                        </button>
                        <form id=\"delDomaine";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 110), "html", null, true);
            yield "\" method=\"post\"
                              action=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" style=\"display:none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 112))), "html", null, true);
            yield "\">
                        </form>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 116
        if (!$context['_iterated']) {
            // line 117
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
                        <i class=\"fas fa-layer-group fa-2x mb-2\" style=\"display: block;\"></i>
                        Aucun domaine trouvé
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domaine'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 129
        yield "    <div class=\"d-flex align-items-center justify-content-between mt-3\">
        <div style=\"font-size: 13px; color: #6b7280;\">
            <span id=\"domaineCount\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["domaines"]) || array_key_exists("domaines", $context) ? $context["domaines"] : (function () { throw new RuntimeError('Variable "domaines" does not exist.', 131, $this->source); })())), "html", null, true);
        yield "</span> domaine(s) trouvé(s)
        </div>
        <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_export_csv");
        yield "\" class=\"btn btn-success btn-sm\">
            <i class=\"fas fa-file-csv\"></i> Exporter CSV
        </a>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        yield "<script>
// Search
var searchInput = document.getElementById('searchInput');
if (searchInput) {
    searchInput.addEventListener('input', function(e) {
        var term = e.target.value.toLowerCase();
        var rows = document.querySelectorAll('#domaineTableBody tr[data-nom]');
        var count = 0;
        rows.forEach(function(row) {
            var nom = row.getAttribute('data-nom');
            if (nom && nom.includes(term)) {
                row.style.display = '';
                count++;
            } else if (nom) {
                row.style.display = 'none';
            }
        });
        document.getElementById('domaineCount').textContent = count;
    });
}

// Sort
var sortSelect = document.getElementById('sortSelect');
if (sortSelect) {
    sortSelect.addEventListener('change', function(e) {
        var tbody = document.getElementById('domaineTableBody');
        var rows = Array.from(tbody.querySelectorAll('tr[data-nom]'));
        var type = e.target.value;

        rows.sort(function(a, b) {
            if (type.includes('Nom (A→Z)')) return a.dataset.nom.localeCompare(b.dataset.nom);
            if (type.includes('Nom (Z→A)')) return b.dataset.nom.localeCompare(a.dataset.nom);
            if (type.includes('Coaches ↑')) return parseInt(a.dataset.coaches) - parseInt(b.dataset.coaches);
            if (type.includes('Coaches ↓')) return parseInt(b.dataset.coaches) - parseInt(a.dataset.coaches);
            if (type.includes('Durée ↑')) return parseInt(a.dataset.duree) - parseInt(b.dataset.duree);
            if (type.includes('Durée ↓')) return parseInt(b.dataset.duree) - parseInt(a.dataset.duree);
            return 0;
        });

        rows.forEach(function(row) { tbody.appendChild(row); });
    });
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/domaine/index.html.twig";
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
        return array (  368 => 142,  358 => 141,  343 => 133,  338 => 131,  334 => 129,  328 => 124,  316 => 117,  314 => 116,  305 => 112,  301 => 111,  297 => 110,  289 => 107,  280 => 101,  271 => 97,  265 => 94,  259 => 91,  254 => 89,  249 => 88,  247 => 87,  241 => 84,  234 => 80,  230 => 79,  225 => 77,  221 => 76,  216 => 75,  211 => 74,  196 => 61,  173 => 39,  170 => 37,  164 => 36,  154 => 32,  150 => 31,  145 => 30,  140 => 29,  135 => 28,  126 => 21,  120 => 18,  112 => 13,  108 => 11,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Domaines — Bizcore{% endblock %}

{% block page_title %}GESTION COACHING{% endblock %}

{% block body %}
<div class=\"card-panel\">

    {# ── Header ── #}
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 20px; font-weight: 700; color: #111827; margin: 0;\">
            <a href=\"{{ path('admin_coach_index') }}\" style=\"color: #111827; text-decoration: none;\">Liste des Coachs</a>
            <span style=\"color: #d1d5db; margin: 0 10px;\">|</span>
            <span style=\"color: #20c997;\">Liste des Domaines</span>
        </h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"{{ path('admin_domaine_new') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter Domaine
            </a>
            <a href=\"{{ path('admin_statistics_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-chart-bar\"></i> Statistiques
            </a>
        </div>
    </div>

    {# ── Flash messages ── #}
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type == 'success' ? 'success' : 'danger' }} alert-dismissible fade show mb-3\" role=\"alert\">
                <i class=\"fas fa-{{ type == 'success' ? 'check-circle' : 'exclamation-circle' }}\"></i>
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {# ── Search + Sort ── #}
    <div class=\"d-flex align-items-center justify-content-between mb-3\">
        <div class=\"position-relative\" style=\"width: 280px;\">
            <i class=\"fas fa-search position-absolute\" style=\"left: 12px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 13px;\"></i>
            <input type=\"text\"
                   id=\"searchInput\"
                   class=\"form-control form-control-sm\"
                   placeholder=\"Rechercher un domaine...\"
                   style=\"padding-left: 36px; border-radius: 6px; border-color: #d1d5db; font-size: 13px;\">
        </div>
        <div>
            <select class=\"form-select form-select-sm\" id=\"sortSelect\" style=\"width: 200px; font-size: 13px; border-color: #d1d5db;\">
                <option>Trier: Nom (A→Z)</option>
                <option>Trier: Nom (Z→A)</option>
                <option>Trier: Coaches ↑</option>
                <option>Trier: Coaches ↓</option>
                <option>Trier: Durée ↑</option>
                <option>Trier: Durée ↓</option>
            </select>
        </div>
    </div>

    {# ── Table ── #}
    <div class=\"table-responsive\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Nom du domaine</th>
                    <th>Description</th>
                    <th>Niveau</th>
                    <th>Durée (h)</th>
                    <th>Nb Coaches</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"domaineTableBody\">
                {% for domaine in domaines %}
                <tr data-nom=\"{{ domaine.nomDomaine|lower }}\"
                    data-coaches=\"{{ coachCounts[domaine.id] ?? 0 }}\"
                    data-duree=\"{{ domaine.dureeFormationHeures ?? 0 }}\">
                    <td>
                        <a href=\"{{ path('admin_domaine_show', {'id': domaine.id}) }}\" style=\"font-weight:600;color:#111827;text-decoration:none;\">
                            {{ domaine.nomDomaine }}
                        </a>
                    </td>
                    <td style=\"font-size:13px;color:#6b7280;max-width:250px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;\">
                        {{ domaine.description ?? '—' }}
                    </td>
                    <td>
                        {% set niveauColors = {'Débutant': '#059669', 'Intermédiaire': '#f59e0b', 'Expert': '#dc2626'} %}
                        <span style=\"background:{{ niveauColors[domaine.niveauDifficulte] ?? '#6b7280' }}18;
                                     color:{{ niveauColors[domaine.niveauDifficulte] ?? '#6b7280' }};
                                     border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;\">
                            {{ domaine.niveauDifficulte }}
                        </span>
                    </td>
                    <td style=\"font-size:13px;\">{{ domaine.dureeFormationHeures ?? '—' }}</td>
                    <td>
                        <span style=\"background:#eff6ff;color:#1d4ed8;border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;\">
                            {{ coachCounts[domaine.id] ?? 0 }} coach{{ (coachCounts[domaine.id] ?? 0) > 1 ? 's' : '' }}
                        </span>
                    </td>
                    <td style=\"white-space:nowrap;\">
                        <a href=\"{{ path('admin_domaine_edit', {'id': domaine.id}) }}\"
                           class=\"btn btn-sm\" style=\"background:#20c997;color:#fff;border:none;margin-right:4px;\"
                           title=\"Modifier\">
                            <i class=\"fas fa-pencil-alt\"></i> Mod.
                        </a>
                        <button class=\"btn btn-danger btn-sm\"
                                onclick=\"showDeleteConfirm('delDomaine{{ domaine.id }}', '{{ domaine.nomDomaine|e('js') }}')\">
                            Sup.
                        </button>
                        <form id=\"delDomaine{{ domaine.id }}\" method=\"post\"
                              action=\"{{ path('admin_domaine_delete', {'id': domaine.id}) }}\" style=\"display:none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ domaine.id) }}\">
                        </form>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"6\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
                        <i class=\"fas fa-layer-group fa-2x mb-2\" style=\"display: block;\"></i>
                        Aucun domaine trouvé
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    {# ── Footer ── #}
    <div class=\"d-flex align-items-center justify-content-between mt-3\">
        <div style=\"font-size: 13px; color: #6b7280;\">
            <span id=\"domaineCount\">{{ domaines|length }}</span> domaine(s) trouvé(s)
        </div>
        <a href=\"{{ path('admin_domaine_export_csv') }}\" class=\"btn btn-success btn-sm\">
            <i class=\"fas fa-file-csv\"></i> Exporter CSV
        </a>
    </div>

</div>
{% endblock %}

{% block javascripts %}
<script>
// Search
var searchInput = document.getElementById('searchInput');
if (searchInput) {
    searchInput.addEventListener('input', function(e) {
        var term = e.target.value.toLowerCase();
        var rows = document.querySelectorAll('#domaineTableBody tr[data-nom]');
        var count = 0;
        rows.forEach(function(row) {
            var nom = row.getAttribute('data-nom');
            if (nom && nom.includes(term)) {
                row.style.display = '';
                count++;
            } else if (nom) {
                row.style.display = 'none';
            }
        });
        document.getElementById('domaineCount').textContent = count;
    });
}

// Sort
var sortSelect = document.getElementById('sortSelect');
if (sortSelect) {
    sortSelect.addEventListener('change', function(e) {
        var tbody = document.getElementById('domaineTableBody');
        var rows = Array.from(tbody.querySelectorAll('tr[data-nom]'));
        var type = e.target.value;

        rows.sort(function(a, b) {
            if (type.includes('Nom (A→Z)')) return a.dataset.nom.localeCompare(b.dataset.nom);
            if (type.includes('Nom (Z→A)')) return b.dataset.nom.localeCompare(a.dataset.nom);
            if (type.includes('Coaches ↑')) return parseInt(a.dataset.coaches) - parseInt(b.dataset.coaches);
            if (type.includes('Coaches ↓')) return parseInt(b.dataset.coaches) - parseInt(a.dataset.coaches);
            if (type.includes('Durée ↑')) return parseInt(a.dataset.duree) - parseInt(b.dataset.duree);
            if (type.includes('Durée ↓')) return parseInt(b.dataset.duree) - parseInt(a.dataset.duree);
            return 0;
        });

        rows.forEach(function(row) { tbody.appendChild(row); });
    });
}
</script>
{% endblock %}
", "admin/domaine/index.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\admin\\domaine\\index.html.twig");
    }
}
