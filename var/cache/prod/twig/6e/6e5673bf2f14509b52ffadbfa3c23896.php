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
class __TwigTemplate_f5e7f252cbf34101bc90f9e7633f8964 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des Domaines — Bizcore";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "GESTION COACHING";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "
";
        // line 12
        yield "<div class=\"d-flex align-items-center gap-3 mb-4\" style=\"border-bottom: 2px solid #e5e7eb; padding-bottom: 0;\">
    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\"
       style=\"font-size:16px;font-weight:700;color:#6b7280;text-decoration:none;padding:8px 0;border-bottom:3px solid transparent;margin-bottom:-2px;transition:all .2s;\">
        <i class=\"fas fa-user-tie\" style=\"margin-right:6px;\"></i>Liste des Coachs
    </a>
    <span style=\"color:#e5e7eb;font-size:20px;\">|</span>
    <span style=\"font-size:16px;font-weight:700;color:#20c997;padding:8px 0;border-bottom:3px solid #20c997;margin-bottom:-2px;\">
        <i class=\"fas fa-layer-group\" style=\"margin-right:6px;\"></i>Liste des Domaines
    </span>
</div>

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                yield "        <div class=\"alert alert-";
                yield ((($context["type"] == "success")) ? ("success") : ("danger"));
                yield " alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-";
                // line 27
                yield ((($context["type"] == "success")) ? ("check-circle") : ("exclamation-circle"));
                yield "\"></i>
            ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
";
        // line 37
        yield "<div class=\"row g-3 mb-4\">
    <div class=\"col-md-2 col-sm-4 col-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-align:center;\">
            <div style=\"font-size:26px;font-weight:800;color:#20c997;\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 40), "html", null, true);
        yield "</div>
            <div style=\"font-size:11px;color:#6b7280;font-weight:600;margin-top:4px;\">TOTAL DOMAINES</div>
        </div>
    </div>
    <div class=\"col-md-2 col-sm-4 col-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-align:center;\">
            <div style=\"font-size:22px;font-weight:800;color:#059669;\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byLevel", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 47) == "Débutant")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cnt", [], "any", false, false, false, 47), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "            </div>
            <div style=\"font-size:11px;color:#059669;font-weight:600;margin-top:4px;\">DÉBUTANT</div>
        </div>
    </div>
    <div class=\"col-md-2 col-sm-4 col-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-align:center;\">
            <div style=\"font-size:22px;font-weight:800;color:#f59e0b;\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byLevel", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 55) == "Intermédiaire")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cnt", [], "any", false, false, false, 55), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "            </div>
            <div style=\"font-size:11px;color:#f59e0b;font-weight:600;margin-top:4px;\">INTERMÉDIAIRE</div>
        </div>
    </div>
    <div class=\"col-md-2 col-sm-4 col-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-align:center;\">
            <div style=\"font-size:22px;font-weight:800;color:#dc2626;\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byLevel", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 63) == "Expert")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cnt", [], "any", false, false, false, 63), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "            </div>
            <div style=\"font-size:11px;color:#dc2626;font-weight:600;margin-top:4px;\">EXPERT</div>
        </div>
    </div>
    <div class=\"col-md-2 col-sm-4 col-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-align:center;\">
            <div style=\"font-size:20px;font-weight:800;color:#1d4ed8;\">
                ";
        // line 71
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "avgDuree", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "avgDuree", [], "any", false, false, false, 71) . " h"), "html", null, true)) : ("—"));
        yield "
            </div>
            <div style=\"font-size:11px;color:#6b7280;font-weight:600;margin-top:4px;\">DURÉE MOY. (h)</div>
        </div>
    </div>
    <div class=\"col-md-2 col-sm-4 col-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:16px;text-align:center;\">
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_stats");
        yield "\" style=\"text-decoration:none;\">
                <div style=\"font-size:24px;font-weight:800;color:#8b5cf6;\"><i class=\"fas fa-chart-bar\"></i></div>
                <div style=\"font-size:11px;color:#8b5cf6;font-weight:600;margin-top:4px;\">VOIR STATS</div>
            </a>
        </div>
    </div>
</div>

";
        // line 89
        yield "<div class=\"card-panel\">

    ";
        // line 92
        yield "    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size: 18px; font-weight: 700; color: #111827; margin: 0;\">
            <i class=\"fas fa-layer-group\" style=\"color:#20c997;margin-right:8px;\"></i>
            Domaines de coaching
            <span style=\"font-size:13px;font-weight:400;color:#9ca3af;margin-left:8px;\">(";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["domaines"] ?? null)), "html", null, true);
        yield " domaine(s))</span>
        </h2>
        <div class=\"d-flex align-items-center gap-2\">
            <button type=\"button\" id=\"whatsNewBtn\" class=\"btn btn-sm\"
                    style=\"background:linear-gradient(135deg,#20c997,#0ea5e9);color:#fff;font-weight:600;border:none;\">
                <i class=\"fas fa-wand-magic-sparkles\"></i> Quoi de neuf ?
            </button>
            <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_new");
        yield "\" class=\"btn btn-success btn-sm\">
                <i class=\"fas fa-plus\"></i> Ajouter
            </a>
            <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_export_csv");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-file-csv\"></i> CSV
            </a>
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_stats");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-chart-bar\"></i> Stats détaillées
            </a>
        </div>
    </div>

    ";
        // line 116
        yield "    <div class=\"d-flex align-items-center gap-2 mb-3 flex-wrap\">
        <div class=\"position-relative\" style=\"width: 260px;\">
            <i class=\"fas fa-search position-absolute\" style=\"left: 12px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 13px;\"></i>
            <input type=\"text\"
                   id=\"searchInput\"
                   class=\"form-control form-control-sm\"
                   placeholder=\"Rechercher un domaine...\"
                   style=\"padding-left: 36px; border-radius: 6px; border-color: #d1d5db; font-size: 13px;\">
        </div>
        <select id=\"niveauFilter\" class=\"form-select form-select-sm\" style=\"width: 160px; font-size: 13px; border-color: #d1d5db;\">
            <option value=\"\">Tous les niveaux</option>
            <option value=\"Débutant\">Débutant</option>
            <option value=\"Intermédiaire\">Intermédiaire</option>
            <option value=\"Expert\">Expert</option>
        </select>
        <select id=\"sortSelect\" class=\"form-select form-select-sm\" style=\"width: 190px; font-size: 13px; border-color: #d1d5db;\">
            <option value=\"nom-asc\">Trier: Nom (A→Z)</option>
            <option value=\"nom-desc\">Trier: Nom (Z→A)</option>
            <option value=\"duree-asc\">Trier: Durée ↑</option>
            <option value=\"duree-desc\">Trier: Durée ↓</option>
            <option value=\"coaches-asc\">Trier: Coaches ↑</option>
            <option value=\"coaches-desc\">Trier: Coaches ↓</option>
        </select>
    </div>

    ";
        // line 142
        yield "    <div class=\"table-responsive\">
        <table class=\"data-table\">
            <thead>
                <tr>
                    <th>#</th>
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
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["domaines"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 157
            yield "                <tr data-nom=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 157)), "html", null, true);
            yield "\"
                    data-niveau=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 158), "html", null, true);
            yield "\"
                    data-duree=\"";
            // line 159
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", true, true, false, 159) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 159)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 159), "html", null, true)) : (0));
            yield "\"
                    data-coaches=\"";
            // line 160
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coachCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 160), [], "array", true, true, false, 160) &&  !(null === (($_v0 = ($context["coachCounts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 160)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["coachCounts"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 160)] ?? null) : null), "html", null, true)) : (0));
            yield "\">
                    <td style=\"font-size:12px;color:#9ca3af;\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "idDomaine", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\"
                           style=\"font-weight:600;color:#111827;text-decoration:none;\">
                            ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 165), "html", null, true);
            yield "
                        </a>
                    </td>
                    <td style=\"font-size:13px;color:#6b7280;max-width:220px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;\"
                        title=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", false, false, false, 169), "html", null, true);
            yield "\">
                        ";
            // line 170
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", true, true, false, 170) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", false, false, false, 170)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "description", [], "any", false, false, false, 170), "html", null, true)) : ("—"));
            yield "
                    </td>
                    <td>
                        ";
            // line 173
            $context["niveauColors"] = ["Débutant" => "#059669", "Intermédiaire" => "#f59e0b", "Expert" => "#dc2626"];
            // line 174
            yield "                        <span style=\"background:";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 174), [], "array", true, true, false, 174) &&  !(null === (($_v2 = ($context["niveauColors"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 174)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["niveauColors"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 174)] ?? null) : null), "html", null, true)) : ("#6b7280"));
            yield "18;
                                     color:";
            // line 175
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 175), [], "array", true, true, false, 175) &&  !(null === (($_v4 = ($context["niveauColors"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 175)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["niveauColors"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 175)] ?? null) : null), "html", null, true)) : ("#6b7280"));
            yield ";
                                     border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;\">
                            ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "niveauDifficulte", [], "any", false, false, false, 177), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td style=\"font-size:13px;font-weight:600;color:#1d4ed8;\">
                        ";
            // line 181
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "dureeFormationHeures", [], "any", false, false, false, 181) . " h"), "html", null, true)) : ("—"));
            yield "
                    </td>
                    <td>
                        <span style=\"background:#eff6ff;color:#1d4ed8;border-radius:20px;padding:3px 10px;font-size:11px;font-weight:700;\">
                            ";
            // line 185
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coachCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 185), [], "array", true, true, false, 185) &&  !(null === (($_v6 = ($context["coachCounts"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 185)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["coachCounts"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 185)] ?? null) : null), "html", null, true)) : (0));
            yield " coach";
            yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["coachCounts"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 185), [], "array", true, true, false, 185) &&  !(null === (($_v8 = ($context["coachCounts"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 185)] ?? null) : null)))) ? ((($_v9 = ($context["coachCounts"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 185)] ?? null) : null)) : (0)) > 1)) ? ("s") : (""));
            yield "
                        </span>
                    </td>
                    <td style=\"white-space:nowrap;\">
                        <a href=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 189)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm btn-outline-secondary\" style=\"font-size:11px;padding:3px 8px;margin-right:2px;\" title=\"Voir détail\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\"
                           class=\"btn btn-sm\" style=\"background:#20c997;color:#fff;border:none;margin-right:2px;font-size:11px;padding:3px 8px;\" title=\"Modifier\">
                            <i class=\"fas fa-pencil-alt\"></i>
                        </a>
                        <button class=\"btn btn-danger btn-sm\" style=\"font-size:11px;padding:3px 8px;\"
                                onclick=\"showDeleteConfirm('delDomaine";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 198), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 198), "js"), "html", null, true);
            yield "')\">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                        <form id=\"delDomaine";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 201), "html", null, true);
            yield "\" method=\"post\"
                              action=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            yield "\" style=\"display:none;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["domaine"], "id", [], "any", false, false, false, 203))), "html", null, true);
            yield "\">
                        </form>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 207
        if (!$context['_iterated']) {
            // line 208
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center\" style=\"padding: 40px; color: #9ca3af;\">
                        <i class=\"fas fa-layer-group fa-2x mb-2\" style=\"display: block;\"></i>
                        Aucun domaine trouvé
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['domaine'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 220
        yield "    <div class=\"d-flex align-items-center justify-content-between mt-3\">
        <div style=\"font-size: 13px; color: #6b7280;\">
            <span id=\"domaineCount\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["domaines"] ?? null)), "html", null, true);
        yield "</span> domaine(s) affiché(s) sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "
        </div>
    </div>

</div>

";
        // line 229
        yield "<div id=\"whatsNewModal\" style=\"display:none;position:fixed;inset:0;background:rgba(0,0,0,.55);z-index:9998;align-items:flex-start;justify-content:center;padding:40px 16px;overflow-y:auto;\">
    <div style=\"background:#fff;border-radius:16px;padding:28px;max-width:820px;width:100%;box-shadow:0 20px 60px rgba(0,0,0,.3);\">
        <div class=\"d-flex align-items-center justify-content-between\" style=\"margin-bottom:18px;\">
            <h3 style=\"font-size:18px;font-weight:700;color:#111827;margin:0;\">
                <i class=\"fas fa-wand-magic-sparkles\" style=\"color:#20c997;\"></i>
                Quoi de neuf dans le monde du coaching ?
            </h3>
            <button type=\"button\" onclick=\"closeWhatsNew()\"
                    style=\"background:#f3f4f6;border:none;width:32px;height:32px;border-radius:8px;cursor:pointer;font-size:16px;color:#6b7280;\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <p style=\"font-size:13px;color:#6b7280;margin:0 0 16px;\">
            Suggestions générées en temps réel à partir des tendances web (SerpAPI) et structurées par IA (Gemini).
            Cliquez sur « Ajouter » pour enregistrer un domaine en un clic.
        </p>

        <div id=\"whatsNewLoading\" style=\"display:none;text-align:center;padding:40px 20px;color:#6b7280;\">
            <i class=\"fas fa-circle-notch fa-spin\" style=\"font-size:28px;color:#20c997;\"></i>
            <div style=\"margin-top:12px;font-size:14px;\">Analyse des tendances mondiales…</div>
        </div>

        <div id=\"whatsNewError\" style=\"display:none;background:#fee2e2;border:1px solid #fecaca;color:#991b1b;padding:12px 14px;border-radius:8px;font-size:13px;margin-bottom:12px;\"></div>

        <div id=\"whatsNewList\" style=\"display:none;\"></div>

        <div style=\"display:flex;justify-content:space-between;align-items:center;margin-top:18px;padding-top:14px;border-top:1px solid #f3f4f6;\">
            <small style=\"color:#9ca3af;\">Source: <span id=\"whatsNewSource\">—</span></small>
            <div style=\"display:flex;gap:8px;\">
                <button type=\"button\" onclick=\"loadWhatsNew()\" class=\"btn btn-sm btn-outline-secondary\">
                    <i class=\"fas fa-rotate\"></i> Régénérer
                </button>
                <button type=\"button\" onclick=\"closeWhatsNew()\" class=\"btn btn-sm\" style=\"background:#f3f4f6;color:#374151;\">
                    Fermer
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 270
        yield "<div id=\"deleteModal\" style=\"display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:9999;align-items:center;justify-content:center;\">
    <div style=\"background:#fff;border-radius:16px;padding:28px;max-width:400px;width:90%;box-shadow:0 20px 60px rgba(0,0,0,.3);\">
        <div style=\"text-align:center;margin-bottom:20px;\">
            <div style=\"width:56px;height:56px;background:#fee2e2;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;\">
                <i class=\"fas fa-exclamation-triangle\" style=\"color:#dc2626;font-size:24px;\"></i>
            </div>
            <h3 style=\"font-size:16px;font-weight:700;color:#111827;margin:0 0 8px;\">Confirmer la suppression</h3>
            <p style=\"font-size:13px;color:#6b7280;margin:0;\">
                Supprimer le domaine <strong id=\"deleteModalName\" style=\"color:#dc2626;\"></strong> ?<br>
                <span style=\"font-size:12px;color:#ef4444;\">Attention : tous les coachs de ce domaine seront également supprimés.</span>
            </p>
        </div>
        <div style=\"display:flex;gap:10px;\">
            <button onclick=\"document.getElementById('deleteModal').style.display='none'\"
                    style=\"flex:1;padding:10px;border-radius:8px;border:1px solid #d1d5db;background:#fff;font-weight:600;cursor:pointer;\">
                Annuler
            </button>
            <button id=\"deleteModalConfirm\"
                    style=\"flex:1;padding:10px;border-radius:8px;border:none;background:#dc2626;color:#fff;font-weight:600;cursor:pointer;\">
                <i class=\"fas fa-trash\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 297
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 298
        yield "<script>
// ── Delete confirm modal ──
function showDeleteConfirm(formId, name) {
    document.getElementById('deleteModalName').textContent = name;
    document.getElementById('deleteModalConfirm').onclick = function() {
        document.getElementById(formId).submit();
    };
    document.getElementById('deleteModal').style.display = 'flex';
}
document.getElementById('deleteModal').addEventListener('click', function(e) {
    if (e.target === this) this.style.display = 'none';
});

// ── Search ──
var searchInput = document.getElementById('searchInput');
var niveauFilter = document.getElementById('niveauFilter');

function applyFilters() {
    var term   = searchInput.value.toLowerCase();
    var niveau = niveauFilter.value;
    var rows   = document.querySelectorAll('#domaineTableBody tr[data-nom]');
    var count  = 0;
    rows.forEach(function(row) {
        var matchNom    = row.dataset.nom.includes(term);
        var matchNiveau = !niveau || row.dataset.niveau === niveau;
        if (matchNom && matchNiveau) { row.style.display = ''; count++; }
        else { row.style.display = 'none'; }
    });
    document.getElementById('domaineCount').textContent = count;
}
if (searchInput) searchInput.addEventListener('input', applyFilters);
if (niveauFilter) niveauFilter.addEventListener('change', applyFilters);

// ── Sort ──
var sortSelect = document.getElementById('sortSelect');
if (sortSelect) {
    sortSelect.addEventListener('change', function() {
        var tbody = document.getElementById('domaineTableBody');
        var rows  = Array.from(tbody.querySelectorAll('tr[data-nom]'));
        var val   = sortSelect.value;

        rows.sort(function(a, b) {
            if (val === 'nom-asc')      return a.dataset.nom.localeCompare(b.dataset.nom);
            if (val === 'nom-desc')     return b.dataset.nom.localeCompare(a.dataset.nom);
            if (val === 'duree-asc')    return parseFloat(a.dataset.duree) - parseFloat(b.dataset.duree);
            if (val === 'duree-desc')   return parseFloat(b.dataset.duree) - parseFloat(a.dataset.duree);
            if (val === 'coaches-asc')  return parseInt(a.dataset.coaches) - parseInt(b.dataset.coaches);
            if (val === 'coaches-desc') return parseInt(b.dataset.coaches) - parseInt(a.dataset.coaches);
            return 0;
        });

        rows.forEach(function(row) { tbody.appendChild(row); });
    });
}

// ── \"Quoi de neuf ?\" — AI domain suggestions ──
var WHATS_NEW_URL = \"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_whats_new");
        yield "\";
var WHATS_NEW_ADD_URL = \"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_whats_new_add");
        yield "\";
var WHATS_NEW_CSRF = \"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("whats_new_add"), "html", null, true);
        yield "\";

function openWhatsNew() {
    document.getElementById('whatsNewModal').style.display = 'flex';
    loadWhatsNew();
}
function closeWhatsNew() {
    document.getElementById('whatsNewModal').style.display = 'none';
}
function escapeHtml(s) {
    return String(s == null ? '' : s)
        .replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
        .replace(/\"/g,'&quot;').replace(/'/g,'&#39;');
}
function renderSuggestions(list) {
    var wrap = document.getElementById('whatsNewList');
    if (!list || !list.length) {
        wrap.innerHTML = '<div style=\"text-align:center;padding:30px;color:#9ca3af;font-size:14px;\">'
                      + '<i class=\"fas fa-inbox fa-2x\" style=\"display:block;margin-bottom:10px;color:#d1d5db;\"></i>'
                      + 'Aucune nouvelle suggestion pour le moment.</div>';
        wrap.style.display = 'block';
        return;
    }
    var html = '<div style=\"display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:14px;\">';
    list.forEach(function(s, i) {
        var badge = s.tendance
            ? '<span style=\"font-size:10px;font-weight:700;background:#d1fae5;color:#065f46;padding:3px 8px;border-radius:20px;\">' + escapeHtml(s.tendance) + '</span>'
            : '';
        html += '<div data-idx=\"' + i + '\" style=\"border:1px solid #e5e7eb;border-radius:12px;padding:14px;background:#fafbff;display:flex;flex-direction:column;gap:8px;\">'
             +   '<div class=\"d-flex justify-content-between align-items-start gap-2\">'
             +     '<div style=\"font-weight:700;font-size:14px;color:#111827;\">' + escapeHtml(s.nom) + '</div>'
             +     badge
             +   '</div>'
             +   '<div style=\"font-size:12.5px;color:#374151;line-height:1.5;\">' + escapeHtml(s.description) + '</div>'
             +   (s.pourquoi ? '<div style=\"font-size:11.5px;color:#6b7280;font-style:italic;\"><i class=\"fas fa-lightbulb\" style=\"color:#f59e0b;\"></i> ' + escapeHtml(s.pourquoi) + '</div>' : '')
             +   '<div style=\"margin-top:auto;display:flex;justify-content:flex-end;\">'
             +     '<button type=\"button\" class=\"btn btn-sm btn-success\" onclick=\"addSuggestion(this, ' + i + ')\">'
             +       '<i class=\"fas fa-plus\"></i> Ajouter'
             +     '</button>'
             +   '</div>'
             + '</div>';
    });
    html += '</div>';
    wrap.innerHTML = html;
    wrap.style.display = 'block';
    window._whatsNewData = list;
}

function loadWhatsNew() {
    var loading = document.getElementById('whatsNewLoading');
    var err = document.getElementById('whatsNewError');
    var list = document.getElementById('whatsNewList');
    loading.style.display = 'block';
    err.style.display = 'none';
    list.style.display = 'none';
    list.innerHTML = '';

    fetch(WHATS_NEW_URL, { headers: { 'Accept': 'application/json' } })
        .then(function(r) { return r.json().then(function(d){ return { ok: r.ok, data: d }; }); })
        .then(function(res) {
            loading.style.display = 'none';
            if (!res.ok || !res.data.ok) {
                err.textContent = (res.data && res.data.error) ? res.data.error : 'Erreur lors du chargement.';
                err.style.display = 'block';
                return;
            }
            document.getElementById('whatsNewSource').textContent = res.data.source || '—';
            renderSuggestions(res.data.suggestions || []);
        })
        .catch(function(e) {
            loading.style.display = 'none';
            err.textContent = 'Erreur réseau : ' + e.message;
            err.style.display = 'block';
        });
}

function addSuggestion(btn, idx) {
    var s = (window._whatsNewData || [])[idx];
    if (!s) return;
    btn.disabled = true;
    btn.innerHTML = '<i class=\"fas fa-circle-notch fa-spin\"></i> Ajout…';

    var body = new URLSearchParams();
    body.append('_token', WHATS_NEW_CSRF);
    body.append('nom', s.nom);
    body.append('description', s.description);

    fetch(WHATS_NEW_ADD_URL, { method: 'POST', headers: { 'Accept': 'application/json' }, body: body })
        .then(function(r) { return r.json().then(function(d){ return { ok: r.ok, data: d }; }); })
        .then(function(res) {
            if (!res.ok || !res.data.ok) {
                btn.disabled = false;
                btn.innerHTML = '<i class=\"fas fa-triangle-exclamation\"></i> ' + ((res.data && res.data.error) || 'Erreur');
                btn.classList.remove('btn-success');
                btn.classList.add('btn-danger');
                return;
            }
            btn.innerHTML = '<i class=\"fas fa-check\"></i> Ajouté';
            btn.classList.remove('btn-success');
            btn.classList.add('btn-secondary');
            // Reload index after a short delay so the new row appears
            setTimeout(function() { window.location.reload(); }, 900);
        })
        .catch(function(e) {
            btn.disabled = false;
            btn.innerHTML = '<i class=\"fas fa-triangle-exclamation\"></i> Erreur réseau';
        });
}

(function() {
    var btn = document.getElementById('whatsNewBtn');
    if (btn) btn.addEventListener('click', openWhatsNew);
    var modal = document.getElementById('whatsNewModal');
    if (modal) modal.addEventListener('click', function(e) { if (e.target === modal) closeWhatsNew(); });
})();
</script>
";
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
        return array (  621 => 356,  617 => 355,  613 => 354,  555 => 298,  548 => 297,  518 => 270,  476 => 229,  465 => 222,  461 => 220,  455 => 215,  443 => 208,  441 => 207,  432 => 203,  428 => 202,  424 => 201,  416 => 198,  408 => 193,  401 => 189,  392 => 185,  385 => 181,  378 => 177,  373 => 175,  368 => 174,  366 => 173,  360 => 170,  356 => 169,  349 => 165,  344 => 163,  339 => 161,  335 => 160,  331 => 159,  327 => 158,  322 => 157,  317 => 156,  301 => 142,  274 => 116,  265 => 109,  259 => 106,  253 => 103,  243 => 96,  237 => 92,  233 => 89,  222 => 78,  212 => 71,  203 => 64,  192 => 63,  183 => 56,  172 => 55,  163 => 48,  152 => 47,  142 => 40,  137 => 37,  134 => 33,  120 => 28,  116 => 27,  111 => 26,  106 => 25,  102 => 24,  89 => 13,  86 => 12,  83 => 8,  76 => 7,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/domaine/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\domaine\\index.html.twig");
    }
}
