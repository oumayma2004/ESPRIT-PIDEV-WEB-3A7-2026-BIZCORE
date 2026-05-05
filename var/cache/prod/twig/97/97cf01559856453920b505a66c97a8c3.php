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

/* reservation/reservation_index.html.twig */
class __TwigTemplate_a5e68018dc4b000214c6d08638541d88 extends Template
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
            'layout' => [$this, 'block_layout'],
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

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des Réservations";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from         $this->unwrap()->yieldBlock("body", $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: inherit; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }

    .action-bar { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; }
    .spacer { flex: 1; }
    .search-box { display: flex; align-items: center; gap: 8px; background: #fff; border: 1px solid #e2e8f0; border-radius: 7px; padding: 8px 14px; width: 220px; }
    .search-box input { border: none; outline: none; font-family: inherit; font-size: 13px; color: #475569; width: 100%; background: transparent; }

    .table-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }
    table { width: 100%; border-collapse: collapse; font-size: 13px; }
    thead tr { background: #1e293b; color: #fff; }
    thead th { padding: 13px 16px; text-align: left; font-weight: 600; font-size: 12px; }
    tbody tr { border-bottom: 1px solid #f1f5f9; transition: background 0.1s; }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: #f8fafc; }
    td { padding: 13px 16px; color: #475569; vertical-align: middle; }
    td.bold { font-weight: 600; color: #1e293b; }

    .badge { display: inline-block; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .badge-green { background: #dcfce7; color: #16a34a; }
    .badge-red { background: #fee2e2; color: #dc2626; }

    .action-btns { display: flex; gap: 6px; }
    .btn-icon { width: 32px; height: 32px; border-radius: 7px; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 13px; text-decoration: none; transition: opacity 0.15s; }
    .btn-icon:hover { opacity: 0.8; }
    .btn-edit-ic { background: #f59e0b; color: #fff; }
    .btn-del-ic { background: #ef4444; color: #fff; }

    .bottom-bar { padding: 16px 0 0; display: flex; align-items: center; justify-content: space-between; }
    .btn-delete-all { display: inline-flex; align-items: center; gap: 7px; background: #ef4444; color: #fff; font-family: inherit; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 7px; border: none; cursor: pointer; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    input[type=\"checkbox\"] { width: 15px; height: 15px; cursor: pointer; accent-color: #22c55e; }
    .visually-hidden {
        position: absolute;
        width: 1px; height: 1px;
        padding: 0; margin: -1px;
        overflow: hidden; clip: rect(0, 0, 0, 0);
        white-space: nowrap; border: 0;
    }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"nav-item\">⊞ Dashboard</a>
            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "?view=users\" class=\"nav-item\">👤 Utilisateurs</a>
            <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"nav-item\">📅 Événements</a>
            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"nav-item active\">🎟 Réservations</a>
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"nav-item\">🎯 Coaching</a>
            <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"nav-item\">📝 Blog</a>
            <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"nav-item\">🛍 Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div style=\"font-size:13px; font-weight:600; color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px; color:#64748b;\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\" class=\"btn-profile\">Profile</a>
                <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <div class=\"main\">
        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span> / GESTION RÉSERVATIONS
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">
            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 117
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "
            <div class=\"action-bar\">
                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span>🔍</span>
                    <label class=\"visually-hidden\" for=\"searchInput\">Rechercher une reservation</label>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher...\" onkeyup=\"filterTable()\">
                </div>
            </div>

            <div class=\"table-card\">
                <table id=\"resTable\">
                    <thead>
                        <tr>
                            <th><input type=\"checkbox\" id=\"checkAll\" aria-label=\"Selectionner toutes les reservations\" onchange=\"toggleAll(this)\"></th>
                            <th>ID</th>
                            <th>Événement</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Places</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 147
            yield "                        <tr>
                            <td><input type=\"checkbox\" class=\"row-check\" value=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\" aria-label=\"Selectionner reservation ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\"></td>
                            <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                            <td class=\"bold\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "evenement", [], "any", false, false, false, 150), "title", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                            <td class=\"bold\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                            <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "email", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                            <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "telephone", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
                            <td>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nombrePlaces", [], "any", false, false, false, 154), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge ";
            // line 156
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 156) == "confirmé")) ? ("badge-green") : ("badge-red"));
            yield "\">
                                    ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 157)), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>";
            // line 160
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 160), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                            <td>
                                <div class=\"action-btns\">
                                    <a href=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 163)]), "html", null, true);
            yield "\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\" aria-label=\"Modifier reservation ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 163), "html", null, true);
            yield "\">✏</a>
                                    <form method=\"post\" action=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_admin_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 165))), "html", null, true);
            yield "\">
                                        <button class=\"btn-icon btn-del-ic\" type=\"submit\" onclick=\"return confirm('Supprimer ?')\" title=\"Supprimer\" aria-label=\"Supprimer reservation ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "\">🗑</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 171
        if (!$context['_iterated']) {
            // line 172
            yield "                        <tr><td colspan=\"10\" style=\"text-align:center; padding:50px; color:#94a3b8;\">📭 Aucune réservation</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                <button class=\"btn-delete-all\" type=\"button\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                <span style=\"font-size:13px; color:#94a3b8;\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["reservations"] ?? null)), "html", null, true);
        yield " réservation";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["reservations"] ?? null)) != 1)) ? ("s") : (""));
        yield "</span>
            </div>
        </div>
    </div>
</div>

<script defer>
function filterTable() {
    const val = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#resTable tbody tr').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(val) ? '' : 'none';
    });
}
function toggleAll(cb) { document.querySelectorAll('.row-check').forEach(c => c.checked = cb.checked); }
function deleteSelected() {
    const checked = [...document.querySelectorAll('.row-check:checked')];
    if (!checked.length) { alert('Sélectionnez au moins une réservation.'); return; }
    if (!confirm('Supprimer ' + checked.length + ' réservation(s) ?')) return;
    checked.forEach(c => {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '/reservations/' + c.value + '/admin-delete';
        const t = document.createElement('input');
        t.type = 'hidden'; t.name = '_token'; t.value = '';
        form.appendChild(t);
        document.body.appendChild(form);
        form.submit();
    });
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/reservation_index.html.twig";
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
        return array (  358 => 180,  350 => 174,  343 => 172,  341 => 171,  331 => 166,  327 => 165,  323 => 164,  317 => 163,  311 => 160,  305 => 157,  301 => 156,  296 => 154,  292 => 153,  288 => 152,  284 => 151,  280 => 150,  276 => 149,  270 => 148,  267 => 147,  262 => 146,  233 => 119,  224 => 117,  220 => 116,  200 => 99,  196 => 98,  182 => 87,  178 => 86,  174 => 85,  170 => 84,  166 => 83,  162 => 82,  158 => 81,  82 => 7,  75 => 6,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/reservation_index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\reservation_index.html.twig");
    }
}
