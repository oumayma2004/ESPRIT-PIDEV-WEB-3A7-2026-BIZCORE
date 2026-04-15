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

/* admin/coach/index.html.twig */
class __TwigTemplate_e014c47a8fe64fa1f5817534ce66f4e8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/index.html.twig"));

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

        yield "Liste des Coachs — Bizcore";
        
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
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 20px; font-weight: 700; color: #111827; margin: 0;\">
            Liste des Coachs
        </h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter Coach
            </a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-chart-bar\"></i> Statistiques
            </a>
        </div>
    </div>

    <div class=\"d-flex align-items-center justify-content-between mb-3\">
        <div class=\"position-relative\" style=\"width: 280px;\">
            <i class=\"fas fa-search position-absolute\" style=\"left: 12px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 13px;\"></i>
            <input type=\"text\" 
                   id=\"searchInput\"
                   class=\"form-control form-control-sm\" 
                   placeholder=\"Rechercher par nom...\"
                   style=\"padding-left: 36px; border-radius: 6px; border-color: #d1d5db; font-size: 13px;\">
        </div>
        <div>
            <select class=\"form-select form-select-sm\" id=\"sortSelect\" style=\"width: 180px; font-size: 13px; border-color: #d1d5db;\">
                <option>Trier: Nom (A→Z)</option>
                <option>Trier: Nom (Z→A)</option>
                <option>Trier: Expérience ↑</option>
                <option>Trier: Expérience ↓</option>
                <option>Trier: Tarif ↑</option>
                <option>Trier: Tarif ↓</option>
            </select>
        </div>
    </div>

    <div class=\"table-responsive\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Expérience</th>
                    <th>Tarif (DT/H)</th>
                    <th>Disponibilité</th>
                    <th>Téléphone</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"coachTableBody\">
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 60
            yield "                <tr data-nom=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 60)), "html", null, true);
            yield "\" data-experience=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 60), "html", null, true);
            yield "\" data-tarif=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 60), "html", null, true);
            yield "\">
                    <td>
                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\">
                            ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 63), "html", null, true);
            yield "
                        </a>
                    </td>
                    <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                    <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                    <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 70) == "Disponible")) {
                // line 71
                yield "                            <span class=\"badge-disponible\">Disponible</span>
                        ";
            } else {
                // line 73
                yield "                            <span class=\"badge-indisponible\">Indisponible</span>
                        ";
            }
            // line 75
            yield "                    </td>
                    <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "numTel", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                    <td>";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 77)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 77), "html", null, true)) : ("N/A"));
            yield "</td>
                    <td>
                        <button class=\"btn btn-danger btn-sm\" 
                                onclick=\"if(confirm('Supprimer ce coach ?')) { document.getElementById('deleteForm";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 80), "html", null, true);
            yield "').submit(); }\">
                            Sup.
                        </button>
                        <form id=\"deleteForm";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" style=\"display: none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 84))), "html", null, true);
            yield "\">
                        </form>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 88
        if (!$context['_iterated']) {
            // line 89
            yield "                <tr>
                    <td colspan=\"8\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
                        <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                        Aucun coach trouvé
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "            </tbody>
        </table>
    </div>

    <div class=\"d-flex align-items-center justify-content-between mt-3\">
        <div style=\"font-size: 13px; color: #6b7280;\">
            <span id=\"coachCount\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 102, $this->source); })())), "html", null, true);
        yield "</span> coach(s) trouvé(s)
        </div>
        <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_export_csv");
        yield "\" class=\"btn btn-success btn-sm\">
            <i class=\"fas fa-file-csv\"></i> Exporter CSV
        </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        yield "<script>
// Search functionality
const searchInput = document.getElementById('searchInput');
if (searchInput) {
    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('#coachTableBody tr');
        let visibleCount = 0;

        rows.forEach(row => {
            const nom = row.getAttribute('data-nom');
            if (nom && nom.includes(searchTerm)) {
                row.style.display = '';
                visibleCount++;
            } else if (nom) {
                row.style.display = 'none';
            }
        });

        const countEl = document.getElementById('coachCount');
        if (countEl) countEl.textContent = visibleCount;
    });
}

// Sort functionality
const sortSelect = document.getElementById('sortSelect');
if (sortSelect) {
    sortSelect.addEventListener('change', function(e) {
        const tbody = document.getElementById('coachTableBody');
        const rows = Array.from(tbody.querySelectorAll('tr')).filter(row => row.getAttribute('data-nom'));
        const sortType = e.target.value;

        rows.sort((a, b) => {
            if (sortType.includes('Nom (A→Z)')) {
                return a.getAttribute('data-nom').localeCompare(b.getAttribute('data-nom'));
            } else if (sortType.includes('Nom (Z→A)')) {
                return b.getAttribute('data-nom').localeCompare(a.getAttribute('data-nom'));
            } else if (sortType.includes('Expérience ↑')) {
                return parseInt(a.getAttribute('data-experience')) - parseInt(b.getAttribute('data-experience'));
            } else if (sortType.includes('Expérience ↓')) {
                return parseInt(b.getAttribute('data-experience')) - parseInt(a.getAttribute('data-experience'));
            } else if (sortType.includes('Tarif ↑')) {
                return parseFloat(a.getAttribute('data-tarif')) - parseFloat(b.getAttribute('data-tarif'));
            } else if (sortType.includes('Tarif ↓')) {
                return parseFloat(b.getAttribute('data-tarif')) - parseFloat(a.getAttribute('data-tarif'));
            }
            return 0;
        });

        rows.forEach(row => tbody.appendChild(row));
    });
}

// Export CSV
function exportCSV() {
    const rows = Array.from(document.querySelectorAll('#coachTableBody tr')).filter(row => row.style.display !== 'none' && row.getAttribute('data-nom'));
    let csv = 'Nom,Prénom,Expérience,Tarif,Disponibilité,Téléphone,Note\\n';

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length > 1) {
            const rowData = [
                cells[0].textContent.trim(),
                cells[1].textContent.trim(),
                cells[2].textContent.trim(),
                cells[3].textContent.trim(),
                cells[4].textContent.trim(),
                cells[5].textContent.trim(),
                cells[6].textContent.trim()
            ];
            csv += rowData.join(',') + '\\n';
        }
    });

    const blob = new Blob([csv], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'coachs_export.csv';
    a.click();
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
        return "admin/coach/index.html.twig";
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
        return array (  296 => 112,  286 => 111,  272 => 104,  267 => 102,  259 => 96,  247 => 89,  245 => 88,  236 => 84,  230 => 83,  224 => 80,  218 => 77,  214 => 76,  211 => 75,  207 => 73,  203 => 71,  201 => 70,  196 => 68,  192 => 67,  188 => 66,  182 => 63,  178 => 62,  168 => 60,  163 => 59,  118 => 17,  112 => 14,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Coachs — Bizcore{% endblock %}

{% block page_title %}GESTION COACHING{% endblock %}

{% block body %}
<div class=\"card-panel\">
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 20px; font-weight: 700; color: #111827; margin: 0;\">
            Liste des Coachs
        </h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"{{ path('admin_coach_new') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter Coach
            </a>
            <a href=\"{{ path('admin_statistics_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-chart-bar\"></i> Statistiques
            </a>
        </div>
    </div>

    <div class=\"d-flex align-items-center justify-content-between mb-3\">
        <div class=\"position-relative\" style=\"width: 280px;\">
            <i class=\"fas fa-search position-absolute\" style=\"left: 12px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 13px;\"></i>
            <input type=\"text\" 
                   id=\"searchInput\"
                   class=\"form-control form-control-sm\" 
                   placeholder=\"Rechercher par nom...\"
                   style=\"padding-left: 36px; border-radius: 6px; border-color: #d1d5db; font-size: 13px;\">
        </div>
        <div>
            <select class=\"form-select form-select-sm\" id=\"sortSelect\" style=\"width: 180px; font-size: 13px; border-color: #d1d5db;\">
                <option>Trier: Nom (A→Z)</option>
                <option>Trier: Nom (Z→A)</option>
                <option>Trier: Expérience ↑</option>
                <option>Trier: Expérience ↓</option>
                <option>Trier: Tarif ↑</option>
                <option>Trier: Tarif ↓</option>
            </select>
        </div>
    </div>

    <div class=\"table-responsive\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Expérience</th>
                    <th>Tarif (DT/H)</th>
                    <th>Disponibilité</th>
                    <th>Téléphone</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id=\"coachTableBody\">
                {% for coach in coaches %}
                <tr data-nom=\"{{ coach.nom|lower }}\" data-experience=\"{{ coach.experienceAnnees }}\" data-tarif=\"{{ coach.tarifHoraire }}\">
                    <td>
                        <a href=\"{{ path('admin_coach_show', {'id': coach.id}) }}\">
                            {{ coach.nom }}
                        </a>
                    </td>
                    <td>{{ coach.prenom }}</td>
                    <td>{{ coach.experienceAnnees }}</td>
                    <td>{{ coach.tarifHoraire }}</td>
                    <td>
                        {% if coach.disponibilite == 'Disponible' %}
                            <span class=\"badge-disponible\">Disponible</span>
                        {% else %}
                            <span class=\"badge-indisponible\">Indisponible</span>
                        {% endif %}
                    </td>
                    <td>{{ coach.numTel }}</td>
                    <td>{{ coach.noteMoyenne ?? 'N/A' }}</td>
                    <td>
                        <button class=\"btn btn-danger btn-sm\" 
                                onclick=\"if(confirm('Supprimer ce coach ?')) { document.getElementById('deleteForm{{ coach.id }}').submit(); }\">
                            Sup.
                        </button>
                        <form id=\"deleteForm{{ coach.id }}\" method=\"post\" action=\"{{ path('admin_coach_delete', {'id': coach.id}) }}\" style=\"display: none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coach.id) }}\">
                        </form>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"8\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
                        <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                        Aucun coach trouvé
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"d-flex align-items-center justify-content-between mt-3\">
        <div style=\"font-size: 13px; color: #6b7280;\">
            <span id=\"coachCount\">{{ coaches|length }}</span> coach(s) trouvé(s)
        </div>
        <a href=\"{{ path('admin_coach_export_csv') }}\" class=\"btn btn-success btn-sm\">
            <i class=\"fas fa-file-csv\"></i> Exporter CSV
        </a>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
// Search functionality
const searchInput = document.getElementById('searchInput');
if (searchInput) {
    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('#coachTableBody tr');
        let visibleCount = 0;

        rows.forEach(row => {
            const nom = row.getAttribute('data-nom');
            if (nom && nom.includes(searchTerm)) {
                row.style.display = '';
                visibleCount++;
            } else if (nom) {
                row.style.display = 'none';
            }
        });

        const countEl = document.getElementById('coachCount');
        if (countEl) countEl.textContent = visibleCount;
    });
}

// Sort functionality
const sortSelect = document.getElementById('sortSelect');
if (sortSelect) {
    sortSelect.addEventListener('change', function(e) {
        const tbody = document.getElementById('coachTableBody');
        const rows = Array.from(tbody.querySelectorAll('tr')).filter(row => row.getAttribute('data-nom'));
        const sortType = e.target.value;

        rows.sort((a, b) => {
            if (sortType.includes('Nom (A→Z)')) {
                return a.getAttribute('data-nom').localeCompare(b.getAttribute('data-nom'));
            } else if (sortType.includes('Nom (Z→A)')) {
                return b.getAttribute('data-nom').localeCompare(a.getAttribute('data-nom'));
            } else if (sortType.includes('Expérience ↑')) {
                return parseInt(a.getAttribute('data-experience')) - parseInt(b.getAttribute('data-experience'));
            } else if (sortType.includes('Expérience ↓')) {
                return parseInt(b.getAttribute('data-experience')) - parseInt(a.getAttribute('data-experience'));
            } else if (sortType.includes('Tarif ↑')) {
                return parseFloat(a.getAttribute('data-tarif')) - parseFloat(b.getAttribute('data-tarif'));
            } else if (sortType.includes('Tarif ↓')) {
                return parseFloat(b.getAttribute('data-tarif')) - parseFloat(a.getAttribute('data-tarif'));
            }
            return 0;
        });

        rows.forEach(row => tbody.appendChild(row));
    });
}

// Export CSV
function exportCSV() {
    const rows = Array.from(document.querySelectorAll('#coachTableBody tr')).filter(row => row.style.display !== 'none' && row.getAttribute('data-nom'));
    let csv = 'Nom,Prénom,Expérience,Tarif,Disponibilité,Téléphone,Note\\n';

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length > 1) {
            const rowData = [
                cells[0].textContent.trim(),
                cells[1].textContent.trim(),
                cells[2].textContent.trim(),
                cells[3].textContent.trim(),
                cells[4].textContent.trim(),
                cells[5].textContent.trim(),
                cells[6].textContent.trim()
            ];
            csv += rowData.join(',') + '\\n';
        }
    });

    const blob = new Blob([csv], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'coachs_export.csv';
    a.click();
}
</script>
{% endblock %}
", "admin/coach/index.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\admin\\coach\\index.html.twig");
    }
}
