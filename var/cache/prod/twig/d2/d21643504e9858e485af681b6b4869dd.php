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

/* base.html.twig */
class __TwigTemplate_332f12c5c60658307588a7a3627a6d6a extends Template
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

        $this->parent = false;

        $this->blocks = [
            'meta_description' => [$this, 'block_meta_description'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'layout' => [$this, 'block_layout'],
            'sidebar_content' => [$this, 'block_sidebar_content'],
            'nav_section_label' => [$this, 'block_nav_section_label'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 6
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 8
        $context["isAdmin"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN");
        // line 9
        yield "    ";
        $context["loadAdminVendorAssets"] = (($context["isAdmin"] ?? null) &&  !((array_key_exists("disable_admin_vendor_assets", $context)) ? (Twig\Extension\CoreExtension::default(($context["disable_admin_vendor_assets"] ?? null), false)) : (false)));
        // line 10
        yield "    ";
        if ((($tmp = ($context["loadAdminVendorAssets"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <link rel=\"preconnect\" href=\"https://cdn.jsdelivr.net\" crossorigin>
    <link rel=\"preconnect\" href=\"https://cdnjs.cloudflare.com\" crossorigin>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel=\"preload\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
    <link rel=\"preload\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
    <link rel=\"preload\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
    <link rel=\"preload\" href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bizcore.css"), "html", null, true);
            yield "\" as=\"style\" onload=\"this.rel='stylesheet'\">
    <noscript>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bizcore.css"), "html", null, true);
            yield "\">
    </noscript>
    ";
        }
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 28
        yield "    <style>
        ";
        // line 29
        if ((($context["isAdmin"] ?? null) &&  !((array_key_exists("disable_admin_chrome_styles", $context)) ? (Twig\Extension\CoreExtension::default(($context["disable_admin_chrome_styles"] ?? null), false)) : (false)))) {
            // line 30
            yield "        :root {
            --sidebar-bg: #1a2332;
            --sidebar-active: #20c997;
            --accent: #20c997;
            --accent-dark: #1ab386;
            --text-sidebar: #8a9aaf;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: Arial, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", sans-serif;
            background: #f5f7fa;
            min-height: 100vh;
            display: flex;
        }

        /* ═══ SIDEBAR ═══ */
        #sidebar {
            width: 220px;
            min-height: 100vh;
            background: var(--sidebar-bg);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0;
            z-index: 1000;
        }

        .sidebar-logo {
            padding: 24px 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }
        .sidebar-logo .logo-icon {
            width: 50px; height: 50px;
            background: var(--accent);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .sidebar-logo .logo-text {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .sidebar-nav {
            flex: 1;
            padding: 20px 0;
        }
        .sidebar-section {
            margin-bottom: 4px;
        }
        .sidebar-section-label {
            color: var(--text-sidebar);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 12px 20px 8px;
        }
        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: var(--text-sidebar);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        .sidebar-nav a i {
            width: 18px;
            text-align: center;
            font-size: 14px;
        }
        .sidebar-nav a:hover {
            background: rgba(255,255,255,.05);
            color: #fff;
        }
        .sidebar-nav a.active {
            background: var(--sidebar-active);
            color: #fff;
            border-left-color: var(--sidebar-active);
        }
        .sidebar-nav a.disabled {
            opacity: 0.4;
            cursor: not-allowed;
            pointer-events: none;
        }

        .sidebar-footer {
            border-top: 1px solid rgba(255,255,255,.08);
            padding: 16px 0;
        }
        .sidebar-footer a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: var(--text-sidebar);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: color 0.2s;
        }
        .sidebar-footer a:hover {
            color: #ff6b6b;
        }
        .sidebar-footer a i {
            width: 18px;
            text-align: center;
        }

        .sidebar-user {
            padding: 16px 20px;
            border-top: 1px solid rgba(255,255,255,.08);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .sidebar-user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            flex-shrink: 0;
        }
        .sidebar-user-info .name {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
        }
        .sidebar-user-info .role {
            color: var(--text-sidebar);
            font-size: 11px;
        }

        /* ═══ MAIN WRAPPER ═══ */
        #main-wrapper {
            margin-left: 220px;
            flex: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        #main-wrapper.front-wrapper-no-user-nav {
            margin-left: 0;
            width: 100%;
        }

        #main-wrapper.front-wrapper-no-user-nav .navbar {
            display: none !important;
        }

        #main-wrapper.front-wrapper-no-user-nav .gestion-front-nav {
            display: flex !important;
        }

        /* ═══ TOPBAR ═══ */
        #topbar {
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            padding: 0 28px;
            gap: 16px;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .breadcrumb-bar {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
        }
        .breadcrumb-bar a {
            color: var(--accent);
            text-decoration: none;
        }
        .breadcrumb-bar span.sep {
            color: #d1d5db;
        }
        .breadcrumb-bar .current {
            color: #374151;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 12px;
        }
        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .topbar-icon-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f3f4f6;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .topbar-icon-btn:hover {
            background: #e5e7eb;
        }
        .topbar-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
        }

        /* ═══ CONTENT ═══ */
        #content {
            flex: 1;
            padding: 28px;
        }

        /* ═══ BUTTONS ═══ */
        .btn-success {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
        }
        .btn-success:hover {
            background: var(--accent-dark);
            border-color: var(--accent-dark);
            color: #fff;
        }
        .btn-danger {
            background: #ef4444;
            border-color: #ef4444;
        }
        .btn-danger:hover {
            background: #dc2626;
            border-color: #dc2626;
        }

        /* ═══ BADGES ═══ */
        .badge-disponible {
            background: #d1fae5;
            color: #065f46;
            border-radius: 12px;
            padding: 4px 12px;
            font-size: 11px;
            font-weight: 600;
        }
        .badge-indisponible {
            background: #fee2e2;
            color: #991b1b;
            border-radius: 12px;
            padding: 4px 12px;
            font-size: 11px;
            font-weight: 600;
        }
        .badge-domain {
            background: #dbeafe;
            color: #1e40af;
            border-radius: 12px;
            padding: 3px 10px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ═══ CARD PANEL ═══ */
        .card-panel {
            background: #fff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            padding: 24px;
            margin-bottom: 20px;
        }

        /* ═══ TABLE ═══ */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }
        .data-table thead tr {
            background: #f9fafb;
        }
        .data-table th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #e5e7eb;
        }
        .data-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #f3f4f6;
            color: #374151;
        }
        .data-table tbody tr:hover {
            background: #f9fafb;
        }
        .data-table a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }
        .data-table a:hover {
            text-decoration: underline;
        }

        .sidebar-badge-soon {
            font-size: 9px;
            margin-left: auto;
            background: #374151;
            color: #9ca3af;
            padding: 2px 6px;
            border-radius: 4px;
        }
        ";
        } else {
            // line 383
            yield "        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            background: #f8fafc;
            color: #1e293b;
            font-family: Arial, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", sans-serif;
        }
        #main-wrapper.front-wrapper-no-user-nav {
            width: 100%;
            min-height: 100vh;
        }
        #content {
            min-height: calc(100vh - 64px);
        }
        #main-wrapper.front-wrapper-no-user-nav .navbar {
            display: none !important;
        }
        #main-wrapper.front-wrapper-no-user-nav .gestion-front-nav {
            display: flex !important;
        }
        ";
        }
        // line 405
        yield "    </style>
</head>
<body>

";
        // line 409
        yield from $this->unwrap()->yieldBlock('layout', $context, $blocks);
        // line 524
        yield "
";
        // line 525
        if ((($tmp = ($context["loadAdminVendorAssets"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 526
            yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" defer></script>
";
        }
        // line 528
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 529
        yield "
";
        // line 530
        if ((($tmp = ($context["loadAdminVendorAssets"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 531
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_success_popup.html.twig");
            yield "
";
            // line 532
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_error_popup.html.twig");
            yield "
";
        }
        // line 534
        yield "</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Bizcore rassemble vos gestions metier, reservations, evenements, marketplace, coaching et profil dans un espace unifie.";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Bizcore";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 409
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 410
        if ((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 412
            yield "<nav id=\"sidebar\">
    <div class=\"sidebar-logo\">
        <div class=\"logo-icon\">B</div>
        <div class=\"logo-text\">Bizcore</div>
    </div>

    <div class=\"sidebar-nav\">
        ";
            // line 419
            yield from $this->unwrap()->yieldBlock('sidebar_content', $context, $blocks);
            // line 470
            yield "    </div>

    <div class=\"sidebar-footer\">
        <a href=\"";
            // line 473
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
            <i class=\"fas fa-sign-out-alt\"></i> DÉCONNEXION
        </a>
    </div>

    <div class=\"sidebar-user\">
        <div class=\"sidebar-user-avatar\">
            ";
            // line 480
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 480), "email", [], "any", false, false, false, 480), 0, 1)), "html", null, true)) : ("U"));
            yield "
        </div>
        <div class=\"sidebar-user-info\">
            <div class=\"name\">
                ";
            // line 484
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 484)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 484), "prenom", [], "any", true, true, false, 484) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 484), "prenom", [], "any", false, false, false, 484)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 484), "prenom", [], "any", false, false, false, 484)) : ("")) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 484), "nom", [], "any", true, true, false, 484) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 484), "nom", [], "any", false, false, false, 484)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 484), "nom", [], "any", false, false, false, 484)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 484), "email", [], "any", false, false, false, 484)))), "html", null, true)) : ("Utilisateur"));
            yield "
            </div>
            <div class=\"role\">
                ";
            // line 487
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 487) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 487), "roles", [], "any", false, false, false, 487)))) ? ("Administrateur") : ("Utilisateur"));
            yield "
            </div>
        </div>
    </div>
</nav>

";
            // line 494
            yield "<div id=\"main-wrapper\">
    ";
            // line 496
            yield "    <div id=\"topbar\">
        <div class=\"breadcrumb-bar\">
            <a href=\"";
            // line 498
            yield (((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
            yield "\" aria-label=\"Accueil\">Accueil</a>
            <span class=\"sep\">/</span>
            ";
            // line 500
            yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
            // line 503
            yield "        </div>
        <div class=\"topbar-actions\">
            ";
            // line 505
            if ((($tmp = ($context["loadAdminVendorAssets"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 506
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_notification_bell.html.twig");
                yield "
            ";
            }
            // line 508
            yield "            <button class=\"topbar-icon-btn\" type=\"button\" aria-label=\"Parametres\">⚙</button>
            <div class=\"topbar-avatar\">";
            // line 509
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 509), "email", [], "any", false, false, false, 509), 0, 1)), "html", null, true)) : ("U"));
            yield "</div>
        </div>
    </div>

    ";
            // line 514
            yield "    <main role=\"main\">
";
        } else {
            // line 516
            yield "<div id=\"main-wrapper\" class=\"front-wrapper-no-user-nav\">
    ";
            // line 517
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_front_gestion_nav.html.twig");
            yield "
    <main id=\"content\" role=\"main\">
";
        }
        // line 520
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 521
        yield "    </main>
</div>
";
        yield from [];
    }

    // line 419
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 420
        yield "        <div class=\"sidebar-section\">
            <div class=\"sidebar-section-label\">";
        // line 421
        yield from $this->unwrap()->yieldBlock('nav_section_label', $context, $blocks);
        yield "</div>
            ";
        // line 422
        if ((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 423
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\"
               class=\"";
            // line 424
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 424), "attributes", [], "any", false, false, false, 424), "get", ["_route"], "method", false, false, false, 424)) && is_string($_v1 = "dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
            </a>
            <a href=\"";
            // line 427
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "?view=users\"
               class=\"\">
                <i class=\"fas fa-users\"></i> UTILISATEURS
            </a>
            <a href=\"";
            // line 431
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\"
               class=\"";
            // line 432
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 432), "attributes", [], "any", false, false, false, 432), "get", ["_route"], "method", false, false, false, 432)) && is_string($_v3 = "admin_dashboard") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-tasks\"></i> GESTION PRODUIT
            </a>
            <a href=\"";
            // line 435
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
            yield "\"
               class=\"";
            // line 436
            yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 436), "attributes", [], "any", false, false, false, 436), "get", ["route"], "method", false, false, false, 436)) && is_string($_v5 = "vendor") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-store\"></i> VENDEURS
            </a>

            ";
        } else {
            // line 441
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
            yield "\"
               class=\"";
            // line 442
            yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 442), "attributes", [], "any", false, false, false, 442), "get", ["_route"], "method", false, false, false, 442)) && is_string($_v7 = "marketplace") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-shopping-cart\"></i> MARKETPLACE
            </a>
            ";
        }
        // line 446
        yield "            <a href=\"";
        yield (((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front")));
        yield "\"
               class=\"";
        // line 447
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 447), "attributes", [], "any", false, false, false, 447), "get", ["_route"], "method", false, false, false, 447)) && is_string($_v9 = "evenement") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
            </a>
            <a href=\"";
        // line 450
        yield (((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my")));
        yield "\"
               class=\"";
        // line 451
        yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 451), "attributes", [], "any", false, false, false, 451), "get", ["_route"], "method", false, false, false, 451)) && is_string($_v11 = "reservation") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-ticket-alt\"></i> ";
        // line 452
        yield (((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("RÉSERVATIONS") : ("MES RÉSERVATIONS"));
        yield "
            </a>
            ";
        // line 454
        yield from $this->unwrap()->yieldBlock('sidebar_nav', $context, $blocks);
        // line 460
        yield "            <a href=\"";
        yield (((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index")));
        yield "\"
               class=\"";
        // line 461
        yield ((((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 461), "attributes", [], "any", false, false, false, 461), "get", ["_route"], "method", false, false, false, 461)) && is_string($_v13 = "frontend_blog") && str_starts_with($_v12, $_v13)) || (is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 461), "attributes", [], "any", false, false, false, 461), "get", ["_route"], "method", false, false, false, 461)) && is_string($_v15 = "article") && str_starts_with($_v14, $_v15)))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-blog\"></i> BLOG
            </a>
            <a href=\"";
        // line 464
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\"
               class=\"";
        // line 465
        yield (((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 465), "attributes", [], "any", false, false, false, 465), "get", ["_route"], "method", false, false, false, 465)) && is_string($_v17 = "profile") && str_starts_with($_v16, $_v17))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-user-circle\"></i> PROFIL
            </a>
        </div>
        ";
        yield from [];
    }

    // line 421
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_section_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "NAVIGATION";
        yield from [];
    }

    // line 454
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 455
        yield "            <a href=\"";
        yield (((($tmp = ($context["isAdmin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
        yield "\"
               class=\"";
        // line 456
        yield ((((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 456), "attributes", [], "any", false, false, false, 456), "get", ["_route"], "method", false, false, false, 456)) && is_string($_v19 = "admin_coach") && str_starts_with($_v18, $_v19)) || (is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 456), "attributes", [], "any", false, false, false, 456), "get", ["_route"], "method", false, false, false, 456)) && is_string($_v21 = "app_coach") && str_starts_with($_v20, $_v21)))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-user-tie\"></i> COACHING
            </a>
            ";
        yield from [];
    }

    // line 500
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 501
        yield "            <span class=\"current\">";
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</span>
            ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ACCUEIL";
        yield from [];
    }

    // line 520
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 528
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  862 => 528,  852 => 520,  834 => 501,  827 => 500,  818 => 456,  813 => 455,  806 => 454,  795 => 421,  785 => 465,  781 => 464,  775 => 461,  770 => 460,  768 => 454,  763 => 452,  759 => 451,  755 => 450,  749 => 447,  744 => 446,  737 => 442,  732 => 441,  724 => 436,  720 => 435,  714 => 432,  710 => 431,  703 => 427,  697 => 424,  692 => 423,  690 => 422,  686 => 421,  683 => 420,  676 => 419,  669 => 521,  666 => 520,  660 => 517,  657 => 516,  653 => 514,  646 => 509,  643 => 508,  637 => 506,  635 => 505,  631 => 503,  629 => 500,  624 => 498,  620 => 496,  617 => 494,  608 => 487,  602 => 484,  595 => 480,  585 => 473,  580 => 470,  578 => 419,  569 => 412,  567 => 410,  560 => 409,  550 => 27,  539 => 7,  528 => 6,  521 => 534,  516 => 532,  512 => 531,  510 => 530,  507 => 529,  505 => 528,  501 => 526,  499 => 525,  496 => 524,  494 => 409,  488 => 405,  464 => 383,  109 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  93 => 23,  85 => 18,  76 => 11,  73 => 10,  70 => 9,  68 => 8,  64 => 7,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\base.html.twig");
    }
}
