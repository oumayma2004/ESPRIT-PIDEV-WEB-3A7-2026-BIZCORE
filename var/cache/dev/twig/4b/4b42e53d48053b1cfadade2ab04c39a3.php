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
class __TwigTemplate_27a6f080709fb782dd6293ab9e951000 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/index.html.twig"));

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

        yield "Liste des Coachs — Bizcore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "GESTION COACHING";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
";
        // line 12
        yield "<style>
    .bz-modal-overlay{position:fixed;inset:0;background:rgba(17,24,39,.55);display:none;align-items:center;justify-content:center;z-index:2000;animation:bzFade .15s ease-out;}
    .bz-modal-overlay.show{display:flex;}
    @keyframes bzFade{from{opacity:0}to{opacity:1}}
    @keyframes bzPop{from{transform:translateY(10px) scale(.96);opacity:0}to{transform:none;opacity:1}}
    .bz-modal{background:#fff;border-radius:14px;width:100%;max-width:440px;padding:26px;box-shadow:0 20px 40px rgba(0,0,0,.18);animation:bzPop .18s ease-out;}
    .bz-modal-icon{width:60px;height:60px;border-radius:50%;background:#fee2e2;color:#dc2626;font-size:26px;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;}
    .bz-modal-title{font-size:17px;font-weight:700;color:#111827;text-align:center;margin-bottom:6px;}
    .bz-modal-msg{font-size:13px;color:#4b5563;text-align:center;margin-bottom:6px;line-height:1.5;}
    .bz-modal-target{font-size:13px;color:#111827;text-align:center;font-weight:600;margin-bottom:18px;}
    .bz-modal-actions{display:flex;gap:10px;justify-content:center;}
    .bz-modal-actions .btn{min-width:120px;}
</style>

<div id=\"deleteCoachModal\" class=\"bz-modal-overlay\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"deleteCoachModalTitle\">
    <div class=\"bz-modal\">
        <div class=\"bz-modal-icon\"><i class=\"fas fa-exclamation-triangle\"></i></div>
        <div id=\"deleteCoachModalTitle\" class=\"bz-modal-title\">Supprimer ce coach ?</div>
        <div class=\"bz-modal-msg\">Cette action est <strong>irréversible</strong>.</div>
        <div class=\"bz-modal-target\" id=\"deleteCoachModalTarget\">—</div>
        <div class=\"bz-modal-actions\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" id=\"deleteCoachCancel\">
                <i class=\"fas fa-times\"></i> Annuler
            </button>
            <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"deleteCoachConfirm\">
                <i class=\"fas fa-trash\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

";
        // line 46
        yield "<div class=\"d-flex align-items-center gap-3 mb-4\" style=\"border-bottom: 2px solid #e5e7eb; padding-bottom: 0;\">
    <span style=\"font-size:16px;font-weight:700;color:#20c997;padding:8px 0;border-bottom:3px solid #20c997;margin-bottom:-2px;\">
        <i class=\"fas fa-user-tie\" style=\"margin-right:6px;\"></i>Liste des Coachs
    </span>
    <span style=\"color:#e5e7eb;font-size:20px;\">|</span>
    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_index");
        yield "\"
       style=\"font-size:16px;font-weight:700;color:#6b7280;text-decoration:none;padding:8px 0;border-bottom:3px solid transparent;margin-bottom:-2px;transition:all .2s;\">
        <i class=\"fas fa-layer-group\" style=\"margin-right:6px;\"></i>Liste des Domaines
    </a>
</div>

<div class=\"card-panel\">
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 20px; font-weight: 700; color: #111827; margin: 0;\">
            Coachs
            <span style=\"font-size:13px;font-weight:400;color:#9ca3af;margin-left:6px;\">(";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()), "html", null, true);
        yield " au total)</span>
        </h2>
        <div class=\"d-flex align-items-center gap-3\">
            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter Coach
            </a>
            <a href=\"";
        // line 67
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
                    <th>Domaine</th>
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 110, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 111
            yield "                ";
            $context["domaineName"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaineCoaching", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaineCoaching", [], "any", false, false, false, 111), "nomDomaine", [], "any", false, false, false, 111)) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", true, true, false, 111) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 111)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 111)) : (""))));
            // line 112
            yield "                <tr data-nom=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 112)), "html", null, true);
            yield "\" data-experience=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 112), "html", null, true);
            yield "\" data-tarif=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 112), "html", null, true);
            yield "\" data-domaine=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["domaineName"]) || array_key_exists("domaineName", $context) ? $context["domaineName"] : (function () { throw new RuntimeError('Variable "domaineName" does not exist.', 112, $this->source); })())), "html", null, true);
            yield "\">
                    <td>
                        <a href=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\">
                            ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 115), "html", null, true);
            yield "
                        </a>
                    </td>
                    <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 120
            if ((($tmp = (isset($context["domaineName"]) || array_key_exists("domaineName", $context) ? $context["domaineName"] : (function () { throw new RuntimeError('Variable "domaineName" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                            <span style=\"background:#ecfdf5;color:#059669;border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;white-space:nowrap;\">
                                ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domaineName"]) || array_key_exists("domaineName", $context) ? $context["domaineName"] : (function () { throw new RuntimeError('Variable "domaineName" does not exist.', 122, $this->source); })()), "html", null, true);
                yield "
                            </span>
                        ";
            } else {
                // line 125
                yield "                            <span style=\"color:#9ca3af;font-size:12px;\">—</span>
                        ";
            }
            // line 127
            yield "                    </td>
                    <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 128), "html", null, true);
            yield "</td>
                    <td>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 129), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 131
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 131) == "Disponible")) {
                // line 132
                yield "                            <span class=\"badge-disponible\">Disponible</span>
                        ";
            } else {
                // line 134
                yield "                            <span class=\"badge-indisponible\">Indisponible</span>
                        ";
            }
            // line 136
            yield "                    </td>
                    <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "numTel", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                    <td>";
            // line 138
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 138)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 138), "html", null, true)) : ("N/A"));
            yield "</td>
                    <td>
                        <button type=\"button\"
                                class=\"btn btn-danger btn-sm\"
                                data-delete-coach
                                data-coach-id=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "\"
                                data-coach-name=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 144), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 144), "html", null, true);
            yield "\">
                            Sup.
                        </button>
                        <form id=\"deleteForm";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield "\" method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" style=\"display: none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 148))), "html", null, true);
            yield "\">
                        </form>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "                <tr>
                    <td colspan=\"9\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
                        <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                        Aucun coach trouvé
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "            </tbody>
        </table>
    </div>

    <div class=\"d-flex align-items-center justify-content-between mt-3\">
        <div style=\"font-size: 13px; color: #6b7280;\">
            <span id=\"coachCount\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 166, $this->source); })())), "html", null, true);
        yield "</span> coach(s) trouvé(s)
        </div>
        <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_export_csv");
        yield "\" class=\"btn btn-success btn-sm\">
            <i class=\"fas fa-file-csv\"></i> Exporter CSV
        </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 176
        yield "<script>
// ═══════════════════════════════════════════════
// Custom delete confirmation modal (replaces native confirm)
// ═══════════════════════════════════════════════
(function () {
    const modal      = document.getElementById('deleteCoachModal');
    const targetEl   = document.getElementById('deleteCoachModalTarget');
    const cancelBtn  = document.getElementById('deleteCoachCancel');
    const confirmBtn = document.getElementById('deleteCoachConfirm');
    let pendingId = null;

    function openModal(id, name) {
        pendingId = id;
        targetEl.textContent = name || '';
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closeModal() {
        pendingId = null;
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('[data-delete-coach]').forEach(btn => {
        btn.addEventListener('click', () => {
            openModal(btn.dataset.coachId, btn.dataset.coachName);
        });
    });

    cancelBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && modal.classList.contains('show')) closeModal(); });

    confirmBtn.addEventListener('click', () => {
        if (!pendingId) return;
        const form = document.getElementById('deleteForm' + pendingId);
        if (form) form.submit();
    });
})();

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

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  410 => 176,  397 => 175,  380 => 168,  375 => 166,  367 => 160,  355 => 153,  353 => 152,  344 => 148,  338 => 147,  330 => 144,  326 => 143,  318 => 138,  314 => 137,  311 => 136,  307 => 134,  303 => 132,  301 => 131,  296 => 129,  292 => 128,  289 => 127,  285 => 125,  279 => 122,  276 => 121,  274 => 120,  269 => 118,  263 => 115,  259 => 114,  247 => 112,  244 => 111,  239 => 110,  193 => 67,  187 => 64,  181 => 61,  168 => 51,  161 => 46,  128 => 12,  125 => 8,  112 => 7,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Coachs — Bizcore{% endblock %}

{% block page_title %}GESTION COACHING{% endblock %}

{% block body %}

{# ═══════════════════════════════════════════════
   DELETE CONFIRMATION MODAL (custom — replaces native confirm)
═══════════════════════════════════════════════ #}
<style>
    .bz-modal-overlay{position:fixed;inset:0;background:rgba(17,24,39,.55);display:none;align-items:center;justify-content:center;z-index:2000;animation:bzFade .15s ease-out;}
    .bz-modal-overlay.show{display:flex;}
    @keyframes bzFade{from{opacity:0}to{opacity:1}}
    @keyframes bzPop{from{transform:translateY(10px) scale(.96);opacity:0}to{transform:none;opacity:1}}
    .bz-modal{background:#fff;border-radius:14px;width:100%;max-width:440px;padding:26px;box-shadow:0 20px 40px rgba(0,0,0,.18);animation:bzPop .18s ease-out;}
    .bz-modal-icon{width:60px;height:60px;border-radius:50%;background:#fee2e2;color:#dc2626;font-size:26px;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;}
    .bz-modal-title{font-size:17px;font-weight:700;color:#111827;text-align:center;margin-bottom:6px;}
    .bz-modal-msg{font-size:13px;color:#4b5563;text-align:center;margin-bottom:6px;line-height:1.5;}
    .bz-modal-target{font-size:13px;color:#111827;text-align:center;font-weight:600;margin-bottom:18px;}
    .bz-modal-actions{display:flex;gap:10px;justify-content:center;}
    .bz-modal-actions .btn{min-width:120px;}
</style>

<div id=\"deleteCoachModal\" class=\"bz-modal-overlay\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"deleteCoachModalTitle\">
    <div class=\"bz-modal\">
        <div class=\"bz-modal-icon\"><i class=\"fas fa-exclamation-triangle\"></i></div>
        <div id=\"deleteCoachModalTitle\" class=\"bz-modal-title\">Supprimer ce coach ?</div>
        <div class=\"bz-modal-msg\">Cette action est <strong>irréversible</strong>.</div>
        <div class=\"bz-modal-target\" id=\"deleteCoachModalTarget\">—</div>
        <div class=\"bz-modal-actions\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" id=\"deleteCoachCancel\">
                <i class=\"fas fa-times\"></i> Annuler
            </button>
            <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"deleteCoachConfirm\">
                <i class=\"fas fa-trash\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

{# ═══════════════════════════════════════════════
   TAB NAVIGATION
═══════════════════════════════════════════════ #}
<div class=\"d-flex align-items-center gap-3 mb-4\" style=\"border-bottom: 2px solid #e5e7eb; padding-bottom: 0;\">
    <span style=\"font-size:16px;font-weight:700;color:#20c997;padding:8px 0;border-bottom:3px solid #20c997;margin-bottom:-2px;\">
        <i class=\"fas fa-user-tie\" style=\"margin-right:6px;\"></i>Liste des Coachs
    </span>
    <span style=\"color:#e5e7eb;font-size:20px;\">|</span>
    <a href=\"{{ path('admin_domaine_index') }}\"
       style=\"font-size:16px;font-weight:700;color:#6b7280;text-decoration:none;padding:8px 0;border-bottom:3px solid transparent;margin-bottom:-2px;transition:all .2s;\">
        <i class=\"fas fa-layer-group\" style=\"margin-right:6px;\"></i>Liste des Domaines
    </a>
</div>

<div class=\"card-panel\">
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 20px; font-weight: 700; color: #111827; margin: 0;\">
            Coachs
            <span style=\"font-size:13px;font-weight:400;color:#9ca3af;margin-left:6px;\">({{ total }} au total)</span>
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
                    <th>Domaine</th>
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
                {% set domaineName = coach.domaineCoaching ? coach.domaineCoaching.nomDomaine : (coach.domaine ?? '') %}
                <tr data-nom=\"{{ coach.nom|lower }}\" data-experience=\"{{ coach.experienceAnnees }}\" data-tarif=\"{{ coach.tarifHoraire }}\" data-domaine=\"{{ domaineName|lower }}\">
                    <td>
                        <a href=\"{{ path('admin_coach_show', {'id': coach.id}) }}\">
                            {{ coach.nom }}
                        </a>
                    </td>
                    <td>{{ coach.prenom }}</td>
                    <td>
                        {% if domaineName %}
                            <span style=\"background:#ecfdf5;color:#059669;border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;white-space:nowrap;\">
                                {{ domaineName }}
                            </span>
                        {% else %}
                            <span style=\"color:#9ca3af;font-size:12px;\">—</span>
                        {% endif %}
                    </td>
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
                        <button type=\"button\"
                                class=\"btn btn-danger btn-sm\"
                                data-delete-coach
                                data-coach-id=\"{{ coach.id }}\"
                                data-coach-name=\"{{ coach.prenom }} {{ coach.nom }}\">
                            Sup.
                        </button>
                        <form id=\"deleteForm{{ coach.id }}\" method=\"post\" action=\"{{ path('admin_coach_delete', {'id': coach.id}) }}\" style=\"display: none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coach.id) }}\">
                        </form>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"9\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
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
// ═══════════════════════════════════════════════
// Custom delete confirmation modal (replaces native confirm)
// ═══════════════════════════════════════════════
(function () {
    const modal      = document.getElementById('deleteCoachModal');
    const targetEl   = document.getElementById('deleteCoachModalTarget');
    const cancelBtn  = document.getElementById('deleteCoachCancel');
    const confirmBtn = document.getElementById('deleteCoachConfirm');
    let pendingId = null;

    function openModal(id, name) {
        pendingId = id;
        targetEl.textContent = name || '';
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closeModal() {
        pendingId = null;
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('[data-delete-coach]').forEach(btn => {
        btn.addEventListener('click', () => {
            openModal(btn.dataset.coachId, btn.dataset.coachName);
        });
    });

    cancelBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && modal.classList.contains('show')) closeModal(); });

    confirmBtn.addEventListener('click', () => {
        if (!pendingId) return;
        const form = document.getElementById('deleteForm' + pendingId);
        if (form) form.submit();
    });
})();

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
", "admin/coach/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\coach\\index.html.twig");
    }
}
