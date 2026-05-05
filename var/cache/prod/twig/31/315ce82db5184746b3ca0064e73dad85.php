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

/* evenement/index.html.twig */
class __TwigTemplate_fd53e0016892f28564c91239ce5e7c2d extends Template
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
        yield "Gestion des Événements";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "GESTION ÉVÉNEMENTS";
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
        yield "<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: inherit;
        background: #f0f4f8;
        display: flex;
        min-height: 100vh;
    }

    /* ===== SIDEBAR ===== */
    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }

    .sidebar-brand {
        padding: 24px 20px 20px;
        font-size: 22px;
        font-weight: 700;
        color: #fff;
        border-bottom: 1px solid #2a3347;
        letter-spacing: 0.5px;
    }

    .sidebar-section {
        padding: 16px 16px 6px;
        font-size: 10px;
        font-weight: 700;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .sidebar-nav { flex: 1; padding: 6px 10px; }

    .nav-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 12px;
        border-radius: 8px;
        color: #94a3b8;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.15s;
        margin-bottom: 2px;
    }

    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .nav-item .nav-icon { width: 16px; text-align: center; font-size: 14px; }

    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }

    .user-avatar {
        width: 34px; height: 34px;
        background: #22c55e;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 14px; color: #0f1117; font-weight: 700;
    }

    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }

    .btn-profile, .btn-logout {
        flex: 1; padding: 6px; border-radius: 6px;
        font-size: 11px; font-weight: 600;
        font-family: inherit;
        text-align: center; cursor: pointer;
        border: none; text-decoration: none; display: block;
    }

    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    /* ===== MAIN ===== */
    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; overflow: hidden; }

    /* ===== TOPBAR (original) ===== */
    .topbar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 28px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0; z-index: 50;
    }

    .topbar-left {
        display: flex; align-items: center; gap: 10px;
        font-size: 15px; font-weight: 600; color: #1e293b;
    }

    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-right { display: flex; align-items: center; gap: 16px; }

    .topbar-icon {
        width: 36px; height: 36px;
        border-radius: 8px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        display: flex; align-items: center; justify-content: center;
        color: #64748b; cursor: pointer; font-size: 15px;
    }

    /* ===== CONTENT ===== */
    .content { padding: 28px; }

    /* ===== STAT CARDS (above table) ===== */
    .stat-row {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 14px;
        margin-bottom: 20px;
    }

    .stat-card {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 14px 16px 10px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        position: relative;
        overflow: hidden;
    }

    .sc-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sc-label {
        font-size: 11px;
        font-weight: 700;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .sc-icon {
        width: 30px; height: 30px;
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
    }

    .sc-value {
        font-size: 22px;
        font-weight: 700;
        color: #1e293b;
        line-height: 1;
    }

    .sc-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sc-badge {
        font-size: 10px;
        font-weight: 700;
        padding: 2px 7px;
        border-radius: 4px;
    }

    .badge-up   { background: #dcfce7; color: #15803d; }
    .badge-down { background: #fee2e2; color: #dc2626; }

    .sc-spark {
        width: 80px;
        height: 32px;
    }

    /* ===== ACTION BAR ===== */
    .action-bar {
        display: flex; align-items: center;
        gap: 12px; margin-bottom: 16px; flex-wrap: wrap;
    }

    .btn-add {
        display: inline-flex; align-items: center; gap: 7px;
        background: #22c55e; color: #fff;
        font-family: inherit; font-size: 13px; font-weight: 700;
        padding: 9px 18px; border-radius: 7px; text-decoration: none; transition: all 0.2s;
    }

    .btn-add:hover { background: #16a34a; }

    .btn-export {
        display: inline-flex; align-items: center; gap: 7px;
        background: #fff; color: #475569;
        font-family: inherit; font-size: 13px; font-weight: 600;
        padding: 9px 18px; border-radius: 7px; text-decoration: none;
        border: 1px solid #e2e8f0; transition: all 0.2s; cursor: pointer;
    }

    .btn-export:hover { background: #f8fafc; }

    .spacer { flex: 1; }

    .search-box {
        display: flex; align-items: center; gap: 8px;
        background: #fff; border: 1px solid #e2e8f0;
        border-radius: 7px; padding: 8px 14px; width: 220px;
    }

    .search-box input {
        border: none; outline: none;
        font-family: inherit; font-size: 13px;
        color: #475569; width: 100%; background: transparent;
    }

    .search-box .search-icon { color: #94a3b8; font-size: 13px; }

    /* ===== TABLE ===== */
    .table-card {
        background: #fff; border: 1px solid #e2e8f0;
        border-radius: 12px; overflow: hidden;
        box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }

    table { width: 100%; border-collapse: collapse; font-size: 13px; }
    thead tr { background: #1e293b; color: #fff; }

    thead th {
        padding: 13px 16px; text-align: left;
        font-weight: 600; font-size: 12px; letter-spacing: 0.3px;
    }

    tbody tr { border-bottom: 1px solid #f1f5f9; transition: background 0.1s; }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: #f8fafc; }

    td { padding: 13px 16px; color: #475569; vertical-align: middle; }
    td.title-cell { font-weight: 600; color: #1e293b; }

    td .thumb { width: 40px; height: 40px; border-radius: 7px; object-fit: cover; border: 1px solid #e2e8f0; }

    td .no-image {
        width: 40px; height: 40px; border-radius: 7px;
        background: #f1f5f9;
        display: flex; align-items: center; justify-content: center;
        font-size: 18px; border: 1px solid #e2e8f0;
    }

    .price-tag {
        background: #dcfce7; color: #16a34a;
        font-weight: 700; font-size: 12px;
        padding: 3px 9px; border-radius: 20px;
    }

    .action-btns { display: flex; gap: 6px; align-items: center; }

    .btn-icon {
        width: 32px; height: 32px; border-radius: 7px; border: none;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
        font-size: 13px; text-decoration: none; transition: opacity 0.15s;
    }

    .btn-icon:hover { opacity: 0.8; }
    .btn-view-ic     { background: #0ea5e9; color: #fff; }
    .btn-edit-ic     { background: #f59e0b; color: #fff; }
    .btn-del-ic      { background: #ef4444; color: #fff; }
    .btn-ai-ic       { background: #7c3aed; color: #fff; }
    /* ✅ Waitlist button - purple, same size as other icons */
    .btn-waitlist-ic { background: #8b5cf6; color: #fff; }

    input[type=\"checkbox\"] { width: 15px; height: 15px; cursor: pointer; accent-color: #22c55e; }

    .bottom-bar { padding: 16px 0 0; display: flex; align-items: center; justify-content: space-between; }

    .btn-delete-all {
        display: inline-flex; align-items: center; gap: 7px;
        background: #ef4444; color: #fff;
        font-family: inherit; font-size: 13px; font-weight: 600;
        padding: 9px 18px; border-radius: 7px; border: none; cursor: pointer;
    }

    .btn-delete-all:hover { background: #dc2626; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    .empty-row td { text-align: center; padding: 60px; color: #94a3b8; font-size: 15px; }
    .visually-hidden {
        position: absolute;
        width: 1px; height: 1px;
        padding: 0; margin: -1px;
        overflow: hidden; clip: rect(0, 0, 0, 0);
        white-space: nowrap; border: 0;
    }

    .btn-ai-bulk {
        display: inline-flex; align-items: center; gap: 7px;
        background: #7c3aed; color: #fff;
        font-family: inherit; font-size: 13px; font-weight: 700;
        padding: 9px 18px; border-radius: 7px; text-decoration: none;
        border: 1px solid #6d28d9; transition: background 0.2s;
    }
    .btn-ai-bulk:hover { background: #6d28d9; color: #fff; }
    .ai-score {
        display: inline-flex; align-items: center; gap: 6px;
        min-width: 86px; padding: 5px 9px; border-radius: 999px;
        background: #f5f3ff; color: #5b21b6;
        font-size: 12px; font-weight: 700;
    }
    .ai-score-stars { color: #f59e0b; letter-spacing: 1px; white-space: nowrap; }
    .ai-empty {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 5px 9px; border-radius: 999px;
        background: #f8fafc; color: #64748b;
        border: 1px solid #e2e8f0;
        font-size: 12px; font-weight: 600;
    }
</style>
";
        // line 341
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 342
            yield "<nav class=\"mt-4 d-flex justify-content-center\">
    <ul class=\"pagination\">

        ";
            // line 346
            yield "        <li class=\"page-item ";
            if ((($context["currentPage"] ?? null) == 1)) {
                yield "disabled";
            }
            yield "\">
            <a class=\"page-link\" href=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index", ["page" => (((($context["currentPage"] ?? null) > 1)) ? ((($context["currentPage"] ?? null) - 1)) : (1))]), "html", null, true);
            yield "\" ";
            if ((($context["currentPage"] ?? null) == 1)) {
                yield "aria-disabled=\"true\" tabindex=\"-1\"";
            } else {
                yield "rel=\"prev\"";
            }
            yield ">
                &laquo; Précédent
            </a>
        </li>

        ";
            // line 353
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 354
                yield "            <li class=\"page-item ";
                if (($context["p"] == ($context["currentPage"] ?? null))) {
                    yield "active";
                }
                yield "\">
                <a class=\"page-link\" href=\"";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index", ["page" => $context["p"]]), "html", null, true);
                yield "\">
                    ";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            yield "
        ";
            // line 362
            yield "        <li class=\"page-item ";
            if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
                yield "disabled";
            }
            yield "\">
            <a class=\"page-link\" href=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index", ["page" => (((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) ? ((($context["currentPage"] ?? null) + 1)) : (($context["totalPages"] ?? null)))]), "html", null, true);
            yield "\" ";
            if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
                yield "aria-disabled=\"true\" tabindex=\"-1\"";
            } else {
                yield "rel=\"next\"";
            }
            yield ">
                Suivant &raquo;
            </a>
        </li>

    </ul>
</nav>
";
        }
        // line 371
        $context["total_events"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["evenements"] ?? null));
        // line 372
        $context["total_capacity"] = 0;
        // line 373
        $context["total_revenue"] = 0;
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["evenements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 375
            yield "    ";
            $context["total_capacity"] = (($context["total_capacity"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "capacity", [], "any", false, false, false, 375));
            // line 376
            yield "    ";
            $context["total_revenue"] = (($context["total_revenue"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "price", [], "any", false, false, false, 376));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 378
        yield "
            ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 379));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 380
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 382));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 383
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 385));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 386
            yield "                <div class=\"flash\" style=\"background:#dbeafe;border:1px solid #bfdbfe;color:#1d4ed8;padding:12px 16px;border-radius:8px;font-size:13px;margin-bottom:8px;\">ℹ️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        yield "
            <!-- ACTION BAR -->
            <div class=\"action-bar\">
                <a href=\"";
        // line 391
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        yield "\" class=\"btn-add\">＋ Ajouter un evenement</a>
                <button class=\"btn-export\" type=\"button\" onclick=\"exportPDF()\">⬆ EXPORT PDF</button>
                <a href=\"";
        // line 393
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_analyze_all");
        yield "\" class=\"btn-ai-bulk\">
    🤖 Analyze All Comments
</a>

                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
                    <label class=\"visually-hidden\" for=\"searchInput\">Rechercher un evenement</label>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" onkeyup=\"filterTable()\">
                </div>
                
            </div>

            <!-- ===== STAT CARDS ===== -->
            <div class=\"stat-row\">

                <!-- Événements -->
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Événements</span>
                        <div class=\"sc-icon\" style=\"background:#E6F1FB;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\">
                                <rect x=\"1\" y=\"3\" width=\"14\" height=\"12\" rx=\"2\" stroke=\"#378ADD\" stroke-width=\"1.5\"/>
                                <path d=\"M5 1v4M11 1v4M1 7h14\" stroke=\"#378ADD\" stroke-width=\"1.5\" stroke-linecap=\"round\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_events"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\">
                        <span class=\"sc-badge badge-up\">↑ +12% ce mois</span>
                        <canvas class=\"sc-spark\" id=\"sk-events\"></canvas>
                    </div>
                </div>

                <!-- Capacité totale -->
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Capacité totale</span>
                        <div class=\"sc-icon\" style=\"background:#EAF3DE;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\">
                                <circle cx=\"6\" cy=\"5\" r=\"3\" stroke=\"#639922\" stroke-width=\"1.5\"/>
                                <path d=\"M1 14c0-2.76 2.24-5 5-5s5 2.24 5 5\" stroke=\"#639922\" stroke-width=\"1.5\" stroke-linecap=\"round\"/>
                                <circle cx=\"12\" cy=\"5\" r=\"2\" stroke=\"#639922\" stroke-width=\"1.2\"/>
                                <path d=\"M12 10c1.66 0 3 1.34 3 3\" stroke=\"#639922\" stroke-width=\"1.2\" stroke-linecap=\"round\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_capacity"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\">
                        <span class=\"sc-badge badge-up\">↑ +8% ce mois</span>
                        <canvas class=\"sc-spark\" id=\"sk-capacity\"></canvas>
                    </div>
                </div>

                <!-- Revenus -->
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Revenus</span>
                        <div class=\"sc-icon\" style=\"background:#FAEEDA;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\">
                                <circle cx=\"8\" cy=\"8\" r=\"6.5\" stroke=\"#BA7517\" stroke-width=\"1.5\"/>
                                <path d=\"M8 4v1.5M8 10.5V12M6 7.5c0-.83.67-1.5 2-1.5s2 .67 2 1.5-.67 1.5-2 1.5-2 .67-2 1.5.67 1.5 2 1.5 2-.67 2-1.5\" stroke=\"#BA7517\" stroke-width=\"1.3\" stroke-linecap=\"round\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_revenue"] ?? null), "html", null, true);
        yield " DT</div>
                    <div class=\"sc-bottom\">
                        <span class=\"sc-badge badge-down\">↓ -3% ce mois</span>
                        <canvas class=\"sc-spark\" id=\"sk-revenue\"></canvas>
                    </div>
                </div>

                <!-- Taux remplissage -->
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Remplissage</span>
                        <div class=\"sc-icon\" style=\"background:#EEEDFE;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\">
                                <path d=\"M2 12L5 8L8 10L11 5L14 7\" stroke=\"#534AB7\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                                <circle cx=\"14\" cy=\"7\" r=\"1.5\" fill=\"#534AB7\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">72%</div>
                    <div class=\"sc-bottom\">
                        <span class=\"sc-badge badge-up\">↑ +5% ce mois</span>
                        <canvas class=\"sc-spark\" id=\"sk-fill\"></canvas>
                    </div>
                </div>

            </div>

            <!-- TABLE -->
            <div class=\"table-card\">
                <table id=\"eventsTable\">
                    <thead>
                        <tr>
                            <th style=\"width:40px;\"><input type=\"checkbox\" id=\"checkAll\" aria-label=\"Selectionner tous les evenements\" onchange=\"toggleAll(this)\"></th>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Capacité</th>
                            <th>Date</th>
                            <th>Note IA</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["evenements"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 504
            yield "                        <tr>
                            <td><input type=\"checkbox\" class=\"row-check\" value=\"";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 505), "html", null, true);
            yield "\" aria-label=\"Selectionner ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 505), "html", null, true);
            yield "\"></td>
                            <td>";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 506), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 508
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["eventThumbs"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 508), [], "array", true, true, false, 508)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["eventThumbs"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 508)] ?? null) : null), null)) : (null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 509
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($_v1 = ($context["eventThumbs"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 509)] ?? null) : null)), "html", null, true);
                yield "\" class=\"thumb\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 509), "html", null, true);
                yield "\" loading=\"lazy\" decoding=\"async\" width=\"40\" height=\"40\">
                                ";
            } else {
                // line 511
                yield "                                    <div class=\"no-image\">📅</div>
                                ";
            }
            // line 513
            yield "                            </td>
                            <td class=\"title-cell\">";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 514), "html", null, true);
            yield "</td>
                            <td>";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 515), 0, 50) . "..."), "html", null, true);
            yield "</td>
                            <td><span class=\"price-tag\">";
            // line 516
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 516), "html", null, true);
            yield " DT</span></td>
                            <td>";
            // line 517
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capacity", [], "any", false, false, false, 517), "html", null, true);
            yield "</td>
                            <td>";
            // line 518
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 518), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>

                            <td>
                                ";
            // line 521
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 521)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 522
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield ((($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 522)))) ? ("⭐") : ("☆"));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 523
                yield "                                    <span class=\"ai-score\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 523), 1), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 525
                yield "                                    <span class=\"ai-empty\">Non analyse</span>
                                ";
            }
            // line 527
            yield "                            </td>
                            <td>
                                <div class=\"action-btns\">
                                    <a href=\"";
            // line 530
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 530)]), "html", null, true);
            yield "\" class=\"btn-icon btn-view-ic\" title=\"Voir\" aria-label=\"Voir ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 530), "html", null, true);
            yield "\">👁</a>
                                    <a href=\"";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 531)]), "html", null, true);
            yield "\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\" aria-label=\"Modifier ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 531), "html", null, true);
            yield "\">✏</a>
                                    <a href=\"";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_analyze", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 532)]), "html", null, true);
            yield "\" class=\"btn-icon btn-ai-ic\" title=\"Analyse IA\" aria-label=\"Analyser ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 532), "html", null, true);
            yield "\">🤖</a>
                                    ";
            // line 534
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 534)]), "html", null, true);
            yield "\" class=\"btn-icon btn-waitlist-ic\" title=\"Liste d'attente\" aria-label=\"Liste d'attente ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 534), "html", null, true);
            yield "\">⏳</a>
                                    <form method=\"post\" action=\"";
            // line 535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 535)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 536))), "html", null, true);
            yield "\">
                                        <button class=\"btn-icon btn-del-ic\" type=\"submit\" title=\"Supprimer\" aria-label=\"Supprimer ";
            // line 537
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 537), "html", null, true);
            yield "\" onclick=\"return confirm('Supprimer ?')\">🗑</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 542
        if (!$context['_iterated']) {
            // line 543
            yield "                        <tr class=\"empty-row\">
                            <td colspan=\"9\">📭 Aucun événement trouvé</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 547
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                <button class=\"btn-delete-all\" type=\"button\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                <span style=\"font-size:13px; color:#94a3b8;\">
                    Résultats : ";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["evenements"] ?? null)), "html", null, true);
        yield " événement";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["evenements"] ?? null)) != 1)) ? ("s") : (""));
        yield "
                </span>
            </div>

<script defer>
function sparkline(id, data, color) {
    const canvas = document.getElementById(id);
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    const width = canvas.width || canvas.offsetWidth;
    const height = canvas.height || canvas.offsetHeight;
    const min = Math.min(...data);
    const max = Math.max(...data);
    const range = Math.max(1, max - min);
    const points = data.map((value, index) => ({
        x: data.length === 1 ? width : (index / (data.length - 1)) * width,
        y: height - ((value - min) / range) * (height - 4) - 2
    }));

    ctx.clearRect(0, 0, width, height);
    ctx.beginPath();
    ctx.moveTo(points[0].x, height);
    points.forEach(point => ctx.lineTo(point.x, point.y));
    ctx.lineTo(points[points.length - 1].x, height);
    ctx.closePath();
    ctx.fillStyle = color + '22';
    ctx.fill();

    ctx.beginPath();
    points.forEach((point, index) => {
        if (index === 0) ctx.moveTo(point.x, point.y);
        else ctx.lineTo(point.x, point.y);
    });
    ctx.strokeStyle = color;
    ctx.lineWidth = 1.5;
    ctx.stroke();
}

window.addEventListener('DOMContentLoaded', () => {
    sparkline('sk-events',   [10, 14, 11, 18, 16, 20, ";
        // line 593
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_events"] ?? null), "html", null, true);
        yield "],    '#378ADD');
    sparkline('sk-capacity', [800, 950, 900, 1100, 1050, 1150, ";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_capacity"] ?? null), "html", null, true);
        yield "], '#639922');
    sparkline('sk-revenue',  [9200, 8800, 9100, 8600, 8900, 8700, ";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_revenue"] ?? null), "html", null, true);
        yield "], '#BA7517');
    sparkline('sk-fill',     [55, 60, 65, 68, 70, 69, 72], '#534AB7');
});

function filterTable() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#eventsTable tbody tr:not(.empty-row)').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(input) ? '' : 'none';
    });
}

function toggleAll(checkbox) {
    document.querySelectorAll('.row-check').forEach(c => c.checked = checkbox.checked);
}

function deleteSelected() {
    const checked = [...document.querySelectorAll('.row-check:checked')];
    if (checked.length === 0) { alert('Sélectionnez au moins un événement.'); return; }
    if (!confirm('Supprimer ' + checked.length + ' événement(s) ?')) return;

    let index = 0;

    function deleteNext() {
        if (index >= checked.length) return;
        const id = checked[index].value;
        index++;

        fetch('/evenement/' + id + '/delete', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: '_token=' + encodeURIComponent(
                document.querySelector(`input[value=\"\${id}\"]`)
                    ?.closest('tr')
                    ?.querySelector('input[name=\"_token\"]')
                    ?.value || ''
            )
        }).then(() => {
            const row = document.querySelector(`.row-check[value=\"\${id}\"]`)?.closest('tr');
            if (row) row.remove();
            deleteNext();
        }).catch(() => deleteNext());
    }

    deleteNext();
}

function exportPDF() {
    const rows = document.querySelectorAll('#eventsTable tbody tr:not(.empty-row)');
    
    let tableHTML = `
        <html><head><style>
            body { font-family: Arial, sans-serif; padding: 20px; }
            h2 { color: #1e293b; margin-bottom: 16px; }
            table { width: 100%; border-collapse: collapse; font-size: 13px; }
            thead tr { background: #1e293b; color: #fff; }
            th { padding: 10px 12px; text-align: left; }
            td { padding: 9px 12px; border-bottom: 1px solid #e2e8f0; color: #475569; }
            tr:nth-child(even) td { background: #f8fafc; }
            .price { background: #dcfce7; color: #16a34a; padding: 2px 8px; border-radius: 20px; font-weight: 700; }
        </style></head><body>
        <h2>📋 Gestion des Événements</h2>
        <table>
            <thead><tr>
                <th>ID</th><th>Titre</th><th>Description</th>
                <th>Prix</th><th>Capacité</th><th>Date</th>
            </tr></thead>
            <tbody>
    `;

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length < 9) return;
        tableHTML += `<tr>
            <td>\${cells[1].textContent.trim()}</td>
            <td>\${cells[3].textContent.trim()}</td>
            <td>\${cells[4].textContent.trim()}</td>
            <td><span class=\"price\">\${cells[5].textContent.trim()}</span></td>
            <td>\${cells[6].textContent.trim()}</td>
            <td>\${cells[7].textContent.trim()}</td>
        </tr>`;
    });

    tableHTML += `</tbody></table></body></html>`;

    const win = window.open('', '_blank');
    win.document.write(tableHTML);
    win.document.close();
    win.print();
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
        return "evenement/index.html.twig";
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
        return array (  893 => 595,  889 => 594,  885 => 593,  841 => 554,  832 => 547,  823 => 543,  821 => 542,  811 => 537,  807 => 536,  803 => 535,  796 => 534,  790 => 532,  784 => 531,  778 => 530,  773 => 527,  769 => 525,  763 => 523,  753 => 522,  751 => 521,  745 => 518,  741 => 517,  737 => 516,  733 => 515,  729 => 514,  726 => 513,  722 => 511,  714 => 509,  712 => 508,  707 => 506,  701 => 505,  698 => 504,  693 => 503,  645 => 458,  624 => 440,  601 => 420,  571 => 393,  566 => 391,  561 => 388,  552 => 386,  547 => 385,  538 => 383,  533 => 382,  524 => 380,  520 => 379,  517 => 378,  510 => 376,  507 => 375,  503 => 374,  501 => 373,  499 => 372,  497 => 371,  480 => 363,  473 => 362,  470 => 360,  460 => 356,  456 => 355,  449 => 354,  444 => 353,  430 => 347,  423 => 346,  418 => 342,  416 => 341,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "evenement/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\evenement\\index.html.twig");
    }
}
