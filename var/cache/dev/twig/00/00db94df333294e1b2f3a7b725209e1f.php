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

    .action-btns { display: flex; gap: 6px; }

    .btn-icon {
        width: 32px; height: 32px; border-radius: 7px; border: none;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
        font-size: 13px; text-decoration: none; transition: opacity 0.15s;
    }

    .btn-icon:hover { opacity: 0.8; }
    .btn-view-ic { background: #0ea5e9; color: #fff; }
    .btn-edit-ic { background: #f59e0b; color: #fff; }
    .btn-del-ic  { background: #ef4444; color: #fff; }

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
        // line 310
        $context["total_events"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 310, $this->source); })()));
        // line 311
        $context["total_capacity"] = 0;
        // line 312
        $context["total_revenue"] = 0;
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 313, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 314
            yield "    ";
            $context["total_capacity"] = ((isset($context["total_capacity"]) || array_key_exists("total_capacity", $context) ? $context["total_capacity"] : (function () { throw new RuntimeError('Variable "total_capacity" does not exist.', 314, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "capacity", [], "any", false, false, false, 314));
            // line 315
            yield "    ";
            $context["total_revenue"] = ((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 315, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "price", [], "any", false, false, false, 315));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "
            ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 318, $this->source); })()), "flashes", ["success"], "method", false, false, false, 318));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 319
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "flashes", ["error"], "method", false, false, false, 321));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 322
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        yield "
            <!-- ACTION BAR -->
            <div class=\"action-bar\">
                <a href=\"";
        // line 327
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        yield "\" class=\"btn-add\">＋ Ajouter un evenement</a>
                <button class=\"btn-export\" onclick=\"window.print()\">⬆ EXPORT PDF</button>
                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" onkeyup=\"filterTable()\">
                </div>
                
            </div>

            <!-- ===== STAT CARDS (juste au-dessus du tableau) ===== -->
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
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 351, $this->source); })()), "html", null, true);
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
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_capacity"]) || array_key_exists("total_capacity", $context) ? $context["total_capacity"] : (function () { throw new RuntimeError('Variable "total_capacity" does not exist.', 371, $this->source); })()), "html", null, true);
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
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 389, $this->source); })()), "html", null, true);
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
            <!-- /STAT CARDS -->

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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 434, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 435
            yield "                        <tr>
                            <td><input type=\"checkbox\" class=\"row-check\" value=\"";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 436), "html", null, true);
            yield "\"></td>
                            <td>";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 437), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 439
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 439)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 440
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 440))), "html", null, true);
                yield "\" class=\"thumb\" alt=\"\">
                                ";
            } else {
                // line 442
                yield "                                    <div class=\"no-image\">📅</div>
                                ";
            }
            // line 444
            yield "                            </td>
                            <td class=\"title-cell\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 445), "html", null, true);
            yield "</td>
                            <td>";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 446), 0, 50) . "..."), "html", null, true);
            yield "</td>
                            <td><span class=\"price-tag\">";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 447), "html", null, true);
            yield " DT</span></td>
                            <td>";
            // line 448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capacity", [], "any", false, false, false, 448), "html", null, true);
            yield "</td>
                            <td>";
            // line 449
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 449)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 449), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                            <td>
                                <div class=\"action-btns\">
                                    <a href=\"";
            // line 452
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenements_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 452)]), "html", null, true);
            yield "\" class=\"btn-icon btn-view-ic\" title=\"Voir\">👁</a>
                                    <a href=\"";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 453)]), "html", null, true);
            yield "\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\">✏</a>
                                    <form method=\"post\" action=\"";
            // line 454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 454)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 455))), "html", null, true);
            yield "\">
                                        <button class=\"btn-icon btn-del-ic\" title=\"Supprimer\" onclick=\"return confirm('Supprimer ?')\">🗑</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 461
        if (!$context['_iterated']) {
            // line 462
            yield "                        <tr class=\"empty-row\">
                            <td colspan=\"9\">📭 Aucun événement trouvé</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                <button class=\"btn-delete-all\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                <span style=\"font-size:13px; color:#94a3b8;\">
                    Résultats : ";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 473, $this->source); })())), "html", null, true);
        yield " événement";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 473, $this->source); })())) != 1)) ? ("s") : (""));
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
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 505, $this->source); })()), "html", null, true);
        yield "],    '#378ADD');
sparkline('sk-capacity', [800, 950, 900, 1100, 1050, 1150, ";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_capacity"]) || array_key_exists("total_capacity", $context) ? $context["total_capacity"] : (function () { throw new RuntimeError('Variable "total_capacity" does not exist.', 506, $this->source); })()), "html", null, true);
        yield "], '#639922');
sparkline('sk-revenue',  [9200, 8800, 9100, 8600, 8900, 8700, ";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 507, $this->source); })()), "html", null, true);
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
    checked.forEach(c => {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '/evenement/' + c.value + '/delete';
        const token = document.createElement('input');
        token.type = 'hidden'; token.name = '_token';
        form.appendChild(token);
        document.body.appendChild(form);
        form.submit();
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
        return array (  723 => 507,  719 => 506,  715 => 505,  678 => 473,  669 => 466,  660 => 462,  658 => 461,  647 => 455,  643 => 454,  639 => 453,  635 => 452,  629 => 449,  625 => 448,  621 => 447,  617 => 446,  613 => 445,  610 => 444,  606 => 442,  600 => 440,  598 => 439,  593 => 437,  589 => 436,  586 => 435,  581 => 434,  533 => 389,  512 => 371,  489 => 351,  462 => 327,  457 => 324,  448 => 322,  443 => 321,  434 => 319,  430 => 318,  427 => 317,  420 => 315,  417 => 314,  413 => 313,  411 => 312,  409 => 311,  407 => 310,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
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

    .action-btns { display: flex; gap: 6px; }

    .btn-icon {
        width: 32px; height: 32px; border-radius: 7px; border: none;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
        font-size: 13px; text-decoration: none; transition: opacity 0.15s;
    }

    .btn-icon:hover { opacity: 0.8; }
    .btn-view-ic { background: #0ea5e9; color: #fff; }
    .btn-edit-ic { background: #f59e0b; color: #fff; }
    .btn-del-ic  { background: #ef4444; color: #fff; }

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

            <!-- ACTION BAR -->
            <div class=\"action-bar\">
                <a href=\"{{ path('evenement_new') }}\" class=\"btn-add\">＋ Ajouter un evenement</a>
                <button class=\"btn-export\" onclick=\"window.print()\">⬆ EXPORT PDF</button>
                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" onkeyup=\"filterTable()\">
                </div>
                
            </div>

            <!-- ===== STAT CARDS (juste au-dessus du tableau) ===== -->
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
            <!-- /STAT CARDS -->

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
                                <div class=\"action-btns\">
                                    <a href=\"{{ path('evenements_show', {'id': evenement.id}) }}\" class=\"btn-icon btn-view-ic\" title=\"Voir\">👁</a>
                                    <a href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\">✏</a>
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
    checked.forEach(c => {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '/evenement/' + c.value + '/delete';
        const token = document.createElement('input');
        token.type = 'hidden'; token.name = '_token';
        form.appendChild(token);
        document.body.appendChild(form);
        form.submit();
    });
}
</script>

{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\melek\\Downloads\\wetransfer_esprit-pidev-web-3a7-2026-bizcore-main-zip_2026-04-09_1330\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\templates\\evenement\\index.html.twig");
    }
}
