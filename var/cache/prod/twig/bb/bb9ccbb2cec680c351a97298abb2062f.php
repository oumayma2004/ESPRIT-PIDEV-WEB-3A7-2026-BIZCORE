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

/* admin/domaine/stats.html.twig */
class __TwigTemplate_b0645ba7e6ff591ccf4e50498d7941f7 extends Template
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
        yield "Statistiques Domaines — Bizcore";
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
        // line 10
        yield "<div class=\"d-flex align-items-center gap-3 mb-4\" style=\"border-bottom: 2px solid #e5e7eb; padding-bottom: 0;\">
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\"
       style=\"font-size:16px;font-weight:700;color:#6b7280;text-decoration:none;padding:8px 0;border-bottom:3px solid transparent;margin-bottom:-2px;\">
        <i class=\"fas fa-user-tie\" style=\"margin-right:6px;\"></i>Liste des Coachs
    </a>
    <span style=\"color:#e5e7eb;font-size:20px;\">|</span>
    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_index");
        yield "\"
       style=\"font-size:16px;font-weight:700;color:#20c997;text-decoration:none;padding:8px 0;border-bottom:3px solid #20c997;margin-bottom:-2px;\">
        <i class=\"fas fa-layer-group\" style=\"margin-right:6px;\"></i>Liste des Domaines
    </a>
</div>

<div class=\"d-flex align-items-center justify-content-between mb-4\">
    <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0;\">
        <i class=\"fas fa-chart-bar\" style=\"color:#20c997;margin-right:8px;\"></i>
        Statistiques des Domaines de Coaching
    </h2>
    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

";
        // line 33
        yield "<div class=\"row g-3 mb-4\">
    <div class=\"col-md-3 col-sm-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:20px;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,.06);\">
            <div style=\"width:48px;height:48px;border-radius:12px;background:#ecfdf5;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;\">
                <i class=\"fas fa-layer-group\" style=\"color:#20c997;font-size:20px;\"></i>
            </div>
            <div style=\"font-size:32px;font-weight:800;color:#111827;\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 39), "html", null, true);
        yield "</div>
            <div style=\"font-size:12px;color:#6b7280;font-weight:600;margin-top:4px;text-transform:uppercase;letter-spacing:.5px;\">Total Domaines</div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:20px;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,.06);\">
            <div style=\"width:48px;height:48px;border-radius:12px;background:#eff6ff;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;\">
                <i class=\"fas fa-clock\" style=\"color:#1d4ed8;font-size:20px;\"></i>
            </div>
            <div style=\"font-size:28px;font-weight:800;color:#1d4ed8;\">
                ";
        // line 50
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "avgDuree", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "avgDuree", [], "any", false, false, false, 50) . " h"), "html", null, true)) : ("—"));
        yield "
            </div>
            <div style=\"font-size:12px;color:#6b7280;font-weight:600;margin-top:4px;text-transform:uppercase;letter-spacing:.5px;\">Durée Moy. Globale</div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:20px;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,.06);\">
            <div style=\"width:48px;height:48px;border-radius:12px;background:#fef2f2;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;\">
                <i class=\"fas fa-arrow-up\" style=\"color:#dc2626;font-size:20px;\"></i>
            </div>
            <div style=\"font-size:22px;font-weight:800;color:#dc2626;\">
                ";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "plusLong", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "plusLong", [], "any", false, false, false, 62), "duree_formation_heures", [], "any", false, false, false, 62) . " h"), "html", null, true)) : ("—"));
        yield "
            </div>
            <div style=\"font-size:12px;color:#6b7280;font-weight:600;margin-top:2px;text-transform:uppercase;letter-spacing:.5px;\">Plus Long</div>
            ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "plusLong", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "            <div style=\"font-size:11px;color:#dc2626;margin-top:2px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "plusLong", [], "any", false, false, false, 66), "nom_domaine", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>
            ";
        }
        // line 68
        yield "        </div>
    </div>

    <div class=\"col-md-3 col-sm-6\">
        <div style=\"background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:20px;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,.06);\">
            <div style=\"width:48px;height:48px;border-radius:12px;background:#f0fdf4;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;\">
                <i class=\"fas fa-arrow-down\" style=\"color:#059669;font-size:20px;\"></i>
            </div>
            <div style=\"font-size:22px;font-weight:800;color:#059669;\">
                ";
        // line 77
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "moinsCourt", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "moinsCourt", [], "any", false, false, false, 77), "duree_formation_heures", [], "any", false, false, false, 77) . " h"), "html", null, true)) : ("—"));
        yield "
            </div>
            <div style=\"font-size:12px;color:#6b7280;font-weight:600;margin-top:2px;text-transform:uppercase;letter-spacing:.5px;\">Moins Long</div>
            ";
        // line 80
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "moinsCourt", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "            <div style=\"font-size:11px;color:#059669;margin-top:2px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "moinsCourt", [], "any", false, false, false, 81), "nom_domaine", [], "any", false, false, false, 81), "html", null, true);
            yield "</div>
            ";
        }
        // line 83
        yield "        </div>
    </div>
</div>

<div class=\"row g-4\">

    ";
        // line 90
        yield "    <div class=\"col-md-5\">
        <div class=\"card-panel\" style=\"height:100%;\">
            <h3 style=\"font-size:15px;font-weight:700;color:#111827;margin-bottom:20px;\">
                <i class=\"fas fa-signal\" style=\"color:#20c997;margin-right:8px;\"></i>
                Répartition par Niveau de Difficulté
            </h3>
            ";
        // line 96
        $context["niveauColors"] = ["Débutant" => "#059669", "Intermédiaire" => "#f59e0b", "Expert" => "#dc2626"];
        // line 97
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "byLevel", [], "any", false, false, false, 97));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 98
            yield "            ";
            $context["pct"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 98) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cnt", [], "any", false, false, false, 98) / CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 98)) * 100), 1)) : (0));
            // line 99
            yield "            <div style=\"margin-bottom:16px;\">
                <div style=\"display:flex;justify-content:space-between;margin-bottom:6px;\">
                    <span style=\"font-size:13px;font-weight:600;color:";
            // line 101
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 101), [], "array", true, true, false, 101) &&  !(null === (($_v0 = ($context["niveauColors"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 101)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["niveauColors"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 101)] ?? null) : null), "html", null, true)) : ("#6b7280"));
            yield ";\">
                        ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 102), "html", null, true);
            yield "
                    </span>
                    <span style=\"font-size:13px;color:#6b7280;font-weight:600;\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "cnt", [], "any", false, false, false, 104), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
            yield "%)</span>
                </div>
                <div style=\"background:#f3f4f6;border-radius:8px;height:10px;overflow:hidden;\">
                    <div style=\"width:";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
            yield "%;background:";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 107), [], "array", true, true, false, 107) &&  !(null === (($_v2 = ($context["niveauColors"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 107)] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["niveauColors"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["row"], "niveau_difficulte", [], "any", false, false, false, 107)] ?? null) : null), "html", null, true)) : ("#6b7280"));
            yield ";height:100%;border-radius:8px;transition:width .4s;\"></div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 110
        if (!$context['_iterated']) {
            // line 111
            yield "            <p style=\"color:#9ca3af;font-size:13px;\">Aucune donnée disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "        </div>
    </div>

    ";
        // line 117
        yield "    <div class=\"col-md-7\">
        <div class=\"card-panel\" style=\"height:100%;\">
            <h3 style=\"font-size:15px;font-weight:700;color:#111827;margin-bottom:20px;\">
                <i class=\"fas fa-users\" style=\"color:#20c997;margin-right:8px;\"></i>
                Nombre de Coachs par Domaine
            </h3>
            <div class=\"table-responsive\">
                <table class=\"data-table\" style=\"margin:0;\">
                    <thead>
                        <tr>
                            <th>Domaine</th>
                            <th style=\"text-align:right;\">Coachs</th>
                            <th style=\"text-align:right;\">Part</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 133
        $context["totalCoaches"] = 0;
        // line 134
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "coachByDomain", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            $context["totalCoaches"] = (($context["totalCoaches"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb_coaches", [], "any", false, false, false, 134));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "coachByDomain", [], "any", false, false, false, 135));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 136
            yield "                        ";
            $context["pct"] = (((($context["totalCoaches"] ?? null) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb_coaches", [], "any", false, false, false, 136) / ($context["totalCoaches"] ?? null)) * 100), 1)) : (0));
            // line 137
            yield "                        <tr>
                            <td style=\"font-weight:600;font-size:13px;\">
                                <span style=\"display:inline-block;width:8px;height:8px;border-radius:50%;background:#20c997;margin-right:6px;\"></span>
                                ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nom_domaine", [], "any", false, false, false, 140), "html", null, true);
            yield "
                            </td>
                            <td style=\"text-align:right;font-weight:700;color:#111827;\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "nb_coaches", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                            <td style=\"text-align:right;\">
                                <span style=\"background:#ecfdf5;color:#059669;border-radius:12px;padding:2px 8px;font-size:11px;font-weight:700;\">
                                    ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pct"] ?? null), "html", null, true);
            yield "%
                                </span>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 149
        if (!$context['_iterated']) {
            // line 150
            yield "                        <tr><td colspan=\"3\" style=\"color:#9ca3af;text-align:center;padding:20px;\">Aucune donnée</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/domaine/stats.html.twig";
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
        return array (  339 => 152,  332 => 150,  330 => 149,  321 => 145,  315 => 142,  310 => 140,  305 => 137,  302 => 136,  296 => 135,  286 => 134,  284 => 133,  266 => 117,  261 => 113,  254 => 111,  252 => 110,  242 => 107,  234 => 104,  229 => 102,  225 => 101,  221 => 99,  218 => 98,  212 => 97,  210 => 96,  202 => 90,  194 => 83,  188 => 81,  186 => 80,  180 => 77,  169 => 68,  163 => 66,  161 => 65,  155 => 62,  140 => 50,  126 => 39,  118 => 33,  110 => 27,  96 => 16,  88 => 11,  85 => 10,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/domaine/stats.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\domaine\\stats.html.twig");
    }
}
