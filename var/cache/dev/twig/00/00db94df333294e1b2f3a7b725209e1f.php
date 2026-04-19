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
class __TwigTemplate_fd7734fcb15b3fbc5e64f587449b9e91 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

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

        yield "Gestion des Événements";
        
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

        yield "GESTION ÉVÉNEMENTS";
        
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
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: 'DM Sans', sans-serif;
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
        font-family: 'DM Sans', sans-serif;
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
        font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700;
        padding: 9px 18px; border-radius: 7px; text-decoration: none; transition: all 0.2s;
    }

    .btn-add:hover { background: #16a34a; }

    .btn-export {
        display: inline-flex; align-items: center; gap: 7px;
        background: #fff; color: #475569;
        font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600;
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
        font-family: 'DM Sans', sans-serif; font-size: 13px;
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
    .btn-ai-ic       { background: #f59e0b; color: #fff; }
    /* ✅ Waitlist button - purple, same size as other icons */
    .btn-waitlist-ic { background: #8b5cf6; color: #fff; }

    input[type=\"checkbox\"] { width: 15px; height: 15px; cursor: pointer; accent-color: #22c55e; }

    .bottom-bar { padding: 16px 0 0; display: flex; align-items: center; justify-content: space-between; }

    .btn-delete-all {
        display: inline-flex; align-items: center; gap: 7px;
        background: #ef4444; color: #fff;
        font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600;
        padding: 9px 18px; border-radius: 7px; border: none; cursor: pointer;
    }

    .btn-delete-all:hover { background: #dc2626; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    .empty-row td { text-align: center; padding: 60px; color: #94a3b8; font-size: 15px; }
</style>

";
        // line 313
        $context["total_events"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 313, $this->source); })()));
        // line 314
        $context["total_capacity"] = 0;
        // line 315
        $context["total_revenue"] = 0;
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 316, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 317
            yield "    ";
            $context["total_capacity"] = ((isset($context["total_capacity"]) || array_key_exists("total_capacity", $context) ? $context["total_capacity"] : (function () { throw new RuntimeError('Variable "total_capacity" does not exist.', 317, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "capacity", [], "any", false, false, false, 317));
            // line 318
            yield "    ";
            $context["total_revenue"] = ((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 318, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "price", [], "any", false, false, false, 318));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "
            ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "flashes", ["success"], "method", false, false, false, 321));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 322
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "flashes", ["error"], "method", false, false, false, 324));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 325
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "flashes", ["info"], "method", false, false, false, 327));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 328
            yield "                <div class=\"flash\" style=\"background:#dbeafe;border:1px solid #bfdbfe;color:#1d4ed8;padding:12px 16px;border-radius:8px;font-size:13px;margin-bottom:8px;\">ℹ️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        yield "
            <!-- ACTION BAR -->
            <div class=\"action-bar\">
                <a href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        yield "\" class=\"btn-add\">＋ Ajouter un evenement</a>
                <button class=\"btn-export\" onclick=\"exportPDF()\">⬆ EXPORT PDF</button>
                <a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_analyze_all");
        yield "\" class=\"btn btn-warning\">
    🤖 Analyze All Comments
</a>

                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
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
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 361, $this->source); })()), "html", null, true);
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
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_capacity"]) || array_key_exists("total_capacity", $context) ? $context["total_capacity"] : (function () { throw new RuntimeError('Variable "total_capacity" does not exist.', 381, $this->source); })()), "html", null, true);
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
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 399, $this->source); })()), "html", null, true);
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
                            <th style=\"width:40px;\"><input type=\"checkbox\" id=\"checkAll\" onchange=\"toggleAll(this)\"></th>
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
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 444, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 445
            yield "                        <tr>
                            <td><input type=\"checkbox\" class=\"row-check\" value=\"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 446), "html", null, true);
            yield "\"></td>
                            <td>";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 447), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 449
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 449)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 450
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 450))), "html", null, true);
                yield "\" class=\"thumb\" alt=\"\">
                                ";
            } else {
                // line 452
                yield "                                    <div class=\"no-image\">📅</div>
                                ";
            }
            // line 454
            yield "                            </td>
                            <td class=\"title-cell\">";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 455), "html", null, true);
            yield "</td>
                            <td>";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 456), 0, 50) . "..."), "html", null, true);
            yield "</td>
                            <td><span class=\"price-tag\">";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 457), "html", null, true);
            yield " DT</span></td>
                            <td>";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capacity", [], "any", false, false, false, 458), "html", null, true);
            yield "</td>
                            <td>";
            // line 459
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 459), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>

                            <td>
                                ";
            // line 462
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 463
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield ((($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 463)))) ? ("⭐") : ("☆"));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                yield "                                    <span style=\"font-size:11px;color:#64748b;\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 464), 1), "html", null, true);
                yield ")</span>
                                ";
            } else {
                // line 466
                yield "                                    <span style=\"color:#94a3b8;font-size:12px;\">— non analysé</span>
                                ";
            }
            // line 468
            yield "                            </td>
                            <td>
                                <div class=\"action-btns\">
                                    <a href=\"";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 471)]), "html", null, true);
            yield "\" class=\"btn-icon btn-view-ic\" title=\"Voir\">👁</a>
                                    <a href=\"";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 472)]), "html", null, true);
            yield "\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\">✏</a>
                                    <a href=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_analyze", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 473)]), "html", null, true);
            yield "\" class=\"btn-icon btn-ai-ic\" title=\"Analyse IA\">🤖</a>
                                    ";
            // line 475
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 475)]), "html", null, true);
            yield "\" class=\"btn-icon btn-waitlist-ic\" title=\"Liste d'attente\">⏳</a>
                                    <form method=\"post\" action=\"";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 476)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 477))), "html", null, true);
            yield "\">
                                        <button class=\"btn-icon btn-del-ic\" title=\"Supprimer\" onclick=\"return confirm('Supprimer ?')\">🗑</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 483
        if (!$context['_iterated']) {
            // line 484
            yield "                        <tr class=\"empty-row\">
                            <td colspan=\"9\">📭 Aucun événement trouvé</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                <button class=\"btn-delete-all\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                <span style=\"font-size:13px; color:#94a3b8;\">
                    Résultats : ";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 495, $this->source); })())), "html", null, true);
        yield " événement";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 495, $this->source); })())) != 1)) ? ("s") : (""));
        yield "
                </span>
            </div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js\"></script>
<script>
function sparkline(id, data, color) {
    const canvas = document.getElementById(id);
    if (!canvas) return;
    new Chart(canvas, {
        type: 'line',
        data: {
            labels: data.map((_, i) => i),
            datasets: [{
                data: data,
                borderColor: color,
                borderWidth: 1.5,
                pointRadius: 0,
                fill: true,
                backgroundColor: color + '22',
                tension: 0.4
            }]
        },
        options: {
            responsive: false,
            animation: false,
            plugins: { legend: { display: false }, tooltip: { enabled: false } },
            scales: { x: { display: false }, y: { display: false } }
        }
    });
}

sparkline('sk-events',   [10, 14, 11, 18, 16, 20, ";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 527, $this->source); })()), "html", null, true);
        yield "],    '#378ADD');
sparkline('sk-capacity', [800, 950, 900, 1100, 1050, 1150, ";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_capacity"]) || array_key_exists("total_capacity", $context) ? $context["total_capacity"] : (function () { throw new RuntimeError('Variable "total_capacity" does not exist.', 528, $this->source); })()), "html", null, true);
        yield "], '#639922');
sparkline('sk-revenue',  [9200, 8800, 9100, 8600, 8900, 8700, ";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 529, $this->source); })()), "html", null, true);
        yield "], '#BA7517');
sparkline('sk-fill',     [55, 60, 65, 68, 70, 69, 72], '#534AB7');

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  783 => 529,  779 => 528,  775 => 527,  738 => 495,  729 => 488,  720 => 484,  718 => 483,  707 => 477,  703 => 476,  698 => 475,  694 => 473,  690 => 472,  686 => 471,  681 => 468,  677 => 466,  671 => 464,  661 => 463,  659 => 462,  653 => 459,  649 => 458,  645 => 457,  641 => 456,  637 => 455,  634 => 454,  630 => 452,  624 => 450,  622 => 449,  617 => 447,  613 => 446,  610 => 445,  605 => 444,  557 => 399,  536 => 381,  513 => 361,  484 => 335,  479 => 333,  474 => 330,  465 => 328,  460 => 327,  451 => 325,  446 => 324,  437 => 322,  433 => 321,  430 => 320,  423 => 318,  420 => 317,  416 => 316,  414 => 315,  412 => 314,  410 => 313,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Événements{% endblock %}

{% block page_title %}GESTION ÉVÉNEMENTS{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: 'DM Sans', sans-serif;
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
        font-family: 'DM Sans', sans-serif;
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
        font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700;
        padding: 9px 18px; border-radius: 7px; text-decoration: none; transition: all 0.2s;
    }

    .btn-add:hover { background: #16a34a; }

    .btn-export {
        display: inline-flex; align-items: center; gap: 7px;
        background: #fff; color: #475569;
        font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600;
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
        font-family: 'DM Sans', sans-serif; font-size: 13px;
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
    .btn-ai-ic       { background: #f59e0b; color: #fff; }
    /* ✅ Waitlist button - purple, same size as other icons */
    .btn-waitlist-ic { background: #8b5cf6; color: #fff; }

    input[type=\"checkbox\"] { width: 15px; height: 15px; cursor: pointer; accent-color: #22c55e; }

    .bottom-bar { padding: 16px 0 0; display: flex; align-items: center; justify-content: space-between; }

    .btn-delete-all {
        display: inline-flex; align-items: center; gap: 7px;
        background: #ef4444; color: #fff;
        font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600;
        padding: 9px 18px; border-radius: 7px; border: none; cursor: pointer;
    }

    .btn-delete-all:hover { background: #dc2626; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    .empty-row td { text-align: center; padding: 60px; color: #94a3b8; font-size: 15px; }
</style>

{% set total_events   = evenements|length %}
{% set total_capacity = 0 %}
{% set total_revenue  = 0 %}
{% for ev in evenements %}
    {% set total_capacity = total_capacity + ev.capacity %}
    {% set total_revenue  = total_revenue  + ev.price %}
{% endfor %}

            {% for msg in app.flashes('success') %}
                <div class=\"flash flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash flash-error\">❌ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('info') %}
                <div class=\"flash\" style=\"background:#dbeafe;border:1px solid #bfdbfe;color:#1d4ed8;padding:12px 16px;border-radius:8px;font-size:13px;margin-bottom:8px;\">ℹ️ {{ msg }}</div>
            {% endfor %}

            <!-- ACTION BAR -->
            <div class=\"action-bar\">
                <a href=\"{{ path('evenement_new') }}\" class=\"btn-add\">＋ Ajouter un evenement</a>
                <button class=\"btn-export\" onclick=\"exportPDF()\">⬆ EXPORT PDF</button>
                <a href=\"{{ path('events_analyze_all') }}\" class=\"btn btn-warning\">
    🤖 Analyze All Comments
</a>

                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
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
                    <div class=\"sc-value\">{{ total_events }}</div>
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
                    <div class=\"sc-value\">{{ total_capacity }}</div>
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
                    <div class=\"sc-value\">{{ total_revenue }} DT</div>
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
                            <th style=\"width:40px;\"><input type=\"checkbox\" id=\"checkAll\" onchange=\"toggleAll(this)\"></th>
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
                        {% for evenement in evenements %}
                        <tr>
                            <td><input type=\"checkbox\" class=\"row-check\" value=\"{{ evenement.id }}\"></td>
                            <td>{{ evenement.id }}</td>
                            <td>
                                {% if evenement.image %}
                                    <img src=\"{{ asset('uploads/' ~ evenement.image) }}\" class=\"thumb\" alt=\"\">
                                {% else %}
                                    <div class=\"no-image\">📅</div>
                                {% endif %}
                            </td>
                            <td class=\"title-cell\">{{ evenement.title }}</td>
                            <td>{{ evenement.description|slice(0, 50) ~ '...' }}</td>
                            <td><span class=\"price-tag\">{{ evenement.price }} DT</span></td>
                            <td>{{ evenement.capacity }}</td>
                            <td>{{ evenement.date ? evenement.date|date('d/m/Y') : '-' }}</td>

                            <td>
                                {% if evenement.aiRating %}
                                    {% for i in 1..5 %}{{ i <= evenement.aiRating|round ? '⭐' : '☆' }}{% endfor %}
                                    <span style=\"font-size:11px;color:#64748b;\">({{ evenement.aiRating|number_format(1) }})</span>
                                {% else %}
                                    <span style=\"color:#94a3b8;font-size:12px;\">— non analysé</span>
                                {% endif %}
                            </td>
                            <td>
                                <div class=\"action-btns\">
                                    <a href=\"{{ path('evenements_show', {'id': evenement.id}) }}\" class=\"btn-icon btn-view-ic\" title=\"Voir\">👁</a>
                                    <a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\">✏</a>
                                    <a href=\"{{ path('event_analyze', {'id': evenement.id}) }}\" class=\"btn-icon btn-ai-ic\" title=\"Analyse IA\">🤖</a>
                                    {# ✅ Waitlist button - purple icon, same style as others #}
                                    <a href=\"{{ path('admin_waitlist', {'id': evenement.id}) }}\" class=\"btn-icon btn-waitlist-ic\" title=\"Liste d'attente\">⏳</a>
                                    <form method=\"post\" action=\"{{ path('evenement_delete', {'id': evenement.id}) }}\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                                        <button class=\"btn-icon btn-del-ic\" title=\"Supprimer\" onclick=\"return confirm('Supprimer ?')\">🗑</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        {% else %}
                        <tr class=\"empty-row\">
                            <td colspan=\"9\">📭 Aucun événement trouvé</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                <button class=\"btn-delete-all\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                <span style=\"font-size:13px; color:#94a3b8;\">
                    Résultats : {{ evenements|length }} événement{{ evenements|length != 1 ? 's' : '' }}
                </span>
            </div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js\"></script>
<script>
function sparkline(id, data, color) {
    const canvas = document.getElementById(id);
    if (!canvas) return;
    new Chart(canvas, {
        type: 'line',
        data: {
            labels: data.map((_, i) => i),
            datasets: [{
                data: data,
                borderColor: color,
                borderWidth: 1.5,
                pointRadius: 0,
                fill: true,
                backgroundColor: color + '22',
                tension: 0.4
            }]
        },
        options: {
            responsive: false,
            animation: false,
            plugins: { legend: { display: false }, tooltip: { enabled: false } },
            scales: { x: { display: false }, y: { display: false } }
        }
    });
}

sparkline('sk-events',   [10, 14, 11, 18, 16, 20, {{ total_events }}],    '#378ADD');
sparkline('sk-capacity', [800, 950, 900, 1100, 1050, 1150, {{ total_capacity }}], '#639922');
sparkline('sk-revenue',  [9200, 8800, 9100, 8600, 8900, 8700, {{ total_revenue }}], '#BA7517');
sparkline('sk-fill',     [55, 60, 65, 68, 70, 69, 72], '#534AB7');

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

{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\MSI\\Desktop\\payment +qrcode\\bizcore\\templates\\evenement\\index.html.twig");
    }
}
