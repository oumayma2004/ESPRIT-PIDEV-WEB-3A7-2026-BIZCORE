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
class __TwigTemplate_fc69c92a991dc6cd990be6f45208a5ca extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bizcore.css"), "html", null, true);
        yield "\">
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "    <style>
        :root {
            --sidebar-bg: #1a2332;
            --sidebar-active: #20c997;
            --accent: #20c997;
            --accent-dark: #1ab386;
            --text-sidebar: #8a9aaf;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
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
    </style>
</head>
<body>

";
        // line 356
        yield from $this->unwrap()->yieldBlock('layout', $context, $blocks);
        // line 454
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
";
        // line 456
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 457
        yield "
";
        // line 458
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_success_popup.html.twig");
        yield "
";
        // line 459
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_error_popup.html.twig");
        yield "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bizcore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 356
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout"));

        // line 358
        yield "<nav id=\"sidebar\">
    <div class=\"sidebar-logo\">
        <div class=\"logo-icon\">B</div>
        <div class=\"logo-text\">Bizcore</div>
    </div>

    <div class=\"sidebar-nav\">
        ";
        // line 365
        yield from $this->unwrap()->yieldBlock('sidebar_content', $context, $blocks);
        // line 407
        yield "    </div>

    <div class=\"sidebar-footer\">
        <a href=\"";
        // line 410
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
            <i class=\"fas fa-sign-out-alt\"></i> DÉCONNEXION
        </a>
    </div>

    <div class=\"sidebar-user\">
        <div class=\"sidebar-user-avatar\">
            ";
        // line 417
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "user", [], "any", false, false, false, 417)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "user", [], "any", false, false, false, 417), "email", [], "any", false, false, false, 417), 0, 1)), "html", null, true)) : ("U"));
        yield "
        </div>
        <div class=\"sidebar-user-info\">
            <div class=\"name\">
                ";
        // line 421
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 421), "prenom", [], "any", true, true, false, 421) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "prenom", [], "any", false, false, false, 421)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "prenom", [], "any", false, false, false, 421)) : ("")) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 421), "nom", [], "any", true, true, false, 421) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "nom", [], "any", false, false, false, 421)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "nom", [], "any", false, false, false, 421)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 421, $this->source); })()), "user", [], "any", false, false, false, 421), "email", [], "any", false, false, false, 421)))), "html", null, true)) : ("Utilisateur"));
        yield "
            </div>
            <div class=\"role\">
                ";
        // line 424
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "roles", [], "any", false, false, false, 424)))) ? ("Administrateur") : ("Utilisateur"));
        yield "
            </div>
        </div>
    </div>
</nav>

";
        // line 431
        yield "<div id=\"main-wrapper\">
    ";
        // line 433
        yield "    <div id=\"topbar\">
        <div class=\"breadcrumb-bar\">
            <a href=\"";
        // line 435
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
        yield "\"><i class=\"fas fa-home\"></i></a>
            <span class=\"sep\">/</span>
            ";
        // line 437
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 440
        yield "        </div>
        <div class=\"topbar-actions\">
            ";
        // line 442
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/_notification_bell.html.twig");
        yield "
            <button class=\"topbar-icon-btn\"><i class=\"fas fa-cog\"></i></button>
            <div class=\"topbar-avatar\">";
        // line 444
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "user", [], "any", false, false, false, 444)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 444, $this->source); })()), "user", [], "any", false, false, false, 444), "email", [], "any", false, false, false, 444), 0, 1)), "html", null, true)) : ("U"));
        yield "</div>
        </div>
    </div>

    ";
        // line 449
        yield "    <div id=\"content\">
        ";
        // line 450
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 451
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 365
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_content"));

        // line 366
        yield "        <div class=\"sidebar-section\">
            <div class=\"sidebar-section-label\">";
        // line 367
        yield from $this->unwrap()->yieldBlock('nav_section_label', $context, $blocks);
        yield "</div>
            ";
        // line 368
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 369
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\"
               class=\"";
            // line 370
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "request", [], "any", false, false, false, 370), "attributes", [], "any", false, false, false, 370), "get", ["_route"], "method", false, false, false, 370)) && is_string($_v1 = "dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
            </a>
            <a href=\"";
            // line 373
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "?view=users\"
               class=\"\">
                <i class=\"fas fa-users\"></i> UTILISATEURS
            </a>
            <a href=\"";
            // line 377
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\"
               class=\"";
            // line 378
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "request", [], "any", false, false, false, 378), "attributes", [], "any", false, false, false, 378), "get", ["_route"], "method", false, false, false, 378)) && is_string($_v3 = "admin_dashboard") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-tasks\"></i> GESTION PRODUIT
            </a>
            ";
        } else {
            // line 382
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
            yield "\"
               class=\"";
            // line 383
            yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 383, $this->source); })()), "request", [], "any", false, false, false, 383), "attributes", [], "any", false, false, false, 383), "get", ["_route"], "method", false, false, false, 383)) && is_string($_v5 = "marketplace") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
            yield "\">
                <i class=\"fas fa-shopping-cart\"></i> MARKETPLACE
            </a>
            ";
        }
        // line 387
        yield "            <a href=\"";
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index")));
        yield "\"
               class=\"";
        // line 388
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 388, $this->source); })()), "request", [], "any", false, false, false, 388), "attributes", [], "any", false, false, false, 388), "get", ["_route"], "method", false, false, false, 388)) && is_string($_v7 = "evenement") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
            </a>
            ";
        // line 391
        yield from $this->unwrap()->yieldBlock('sidebar_nav', $context, $blocks);
        // line 397
        yield "            <a href=\"";
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index")));
        yield "\"
               class=\"";
        // line 398
        yield ((((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "request", [], "any", false, false, false, 398), "attributes", [], "any", false, false, false, 398), "get", ["_route"], "method", false, false, false, 398)) && is_string($_v9 = "frontend_blog") && str_starts_with($_v8, $_v9)) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "request", [], "any", false, false, false, 398), "attributes", [], "any", false, false, false, 398), "get", ["_route"], "method", false, false, false, 398)) && is_string($_v11 = "article") && str_starts_with($_v10, $_v11)))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-blog\"></i> BLOG
            </a>
            <a href=\"";
        // line 401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\"
               class=\"";
        // line 402
        yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 402, $this->source); })()), "request", [], "any", false, false, false, 402), "attributes", [], "any", false, false, false, 402), "get", ["_route"], "method", false, false, false, 402)) && is_string($_v13 = "profile") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-user-circle\"></i> PROFIL
            </a>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 367
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_section_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_section_label"));

        yield "NAVIGATION";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 391
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        // line 392
        yield "            <a href=\"";
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
        yield "\" 
               class=\"";
        // line 393
        yield ((((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "request", [], "any", false, false, false, 393), "attributes", [], "any", false, false, false, 393), "get", ["_route"], "method", false, false, false, 393)) && is_string($_v15 = "admin_coach") && str_starts_with($_v14, $_v15)) || (is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "request", [], "any", false, false, false, 393), "attributes", [], "any", false, false, false, 393), "get", ["_route"], "method", false, false, false, 393)) && is_string($_v17 = "app_coach") && str_starts_with($_v16, $_v17)))) ? ("active") : (""));
        yield "\">
                <i class=\"fas fa-user-tie\"></i> COACHING
            </a>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 437
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 438
        yield "            <span class=\"current\">";
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</span>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "ACCUEIL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 450
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 456
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  782 => 456,  766 => 450,  739 => 438,  729 => 437,  717 => 393,  712 => 392,  702 => 391,  685 => 367,  672 => 402,  668 => 401,  662 => 398,  657 => 397,  655 => 391,  649 => 388,  644 => 387,  637 => 383,  632 => 382,  625 => 378,  621 => 377,  614 => 373,  608 => 370,  603 => 369,  601 => 368,  597 => 367,  594 => 366,  584 => 365,  574 => 451,  572 => 450,  569 => 449,  562 => 444,  557 => 442,  553 => 440,  551 => 437,  546 => 435,  542 => 433,  539 => 431,  530 => 424,  524 => 421,  517 => 417,  507 => 410,  502 => 407,  500 => 365,  491 => 358,  481 => 356,  465 => 11,  448 => 6,  436 => 459,  432 => 458,  429 => 457,  427 => 456,  423 => 454,  421 => 356,  75 => 12,  73 => 11,  69 => 10,  62 => 6,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Bizcore{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bizcore.css') }}\">
    {% block stylesheets %}{% endblock %}
    <style>
        :root {
            --sidebar-bg: #1a2332;
            --sidebar-active: #20c997;
            --accent: #20c997;
            --accent-dark: #1ab386;
            --text-sidebar: #8a9aaf;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
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
    </style>
</head>
<body>

{% block layout %}
{# SIDEBAR #}
<nav id=\"sidebar\">
    <div class=\"sidebar-logo\">
        <div class=\"logo-icon\">B</div>
        <div class=\"logo-text\">Bizcore</div>
    </div>

    <div class=\"sidebar-nav\">
        {% block sidebar_content %}
        <div class=\"sidebar-section\">
            <div class=\"sidebar-section-label\">{% block nav_section_label %}NAVIGATION{% endblock %}</div>
            {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('dashboard') }}\"
               class=\"{{ app.request.attributes.get('_route') starts with 'dashboard' ? 'active' : '' }}\">
                <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
            </a>
            <a href=\"{{ path('dashboard') }}?view=users\"
               class=\"\">
                <i class=\"fas fa-users\"></i> UTILISATEURS
            </a>
            <a href=\"{{ path('admin_dashboard') }}\"
               class=\"{{ app.request.attributes.get('_route') starts with 'admin_dashboard' ? 'active' : '' }}\">
                <i class=\"fas fa-tasks\"></i> GESTION PRODUIT
            </a>
            {% else %}
            <a href=\"{{ path('marketplace_index') }}\"
               class=\"{{ app.request.attributes.get('_route') starts with 'marketplace' ? 'active' : '' }}\">
                <i class=\"fas fa-shopping-cart\"></i> MARKETPLACE
            </a>
            {% endif %}
            <a href=\"{{ is_granted('ROLE_ADMIN') ? path('evenement_index') : path('evenement_index') }}\"
               class=\"{{ app.request.attributes.get('_route') starts with 'evenement' ? 'active' : '' }}\">
                <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
            </a>
            {% block sidebar_nav %}
            <a href=\"{{ is_granted('ROLE_ADMIN') ? path('admin_coach_index') : path('app_coach_index') }}\" 
               class=\"{{ app.request.attributes.get('_route') starts with 'admin_coach' or app.request.attributes.get('_route') starts with 'app_coach' ? 'active' : '' }}\">
                <i class=\"fas fa-user-tie\"></i> COACHING
            </a>
            {% endblock %}
            <a href=\"{{ is_granted('ROLE_ADMIN') ? path('article_index') : path('frontend_blog_index') }}\"
               class=\"{{ app.request.attributes.get('_route') starts with 'frontend_blog' or app.request.attributes.get('_route') starts with 'article' ? 'active' : '' }}\">
                <i class=\"fas fa-blog\"></i> BLOG
            </a>
            <a href=\"{{ path('profile_index') }}\"
               class=\"{{ app.request.attributes.get('_route') starts with 'profile' ? 'active' : '' }}\">
                <i class=\"fas fa-user-circle\"></i> PROFIL
            </a>
        </div>
        {% endblock %}
    </div>

    <div class=\"sidebar-footer\">
        <a href=\"{{ path('app_logout') }}\">
            <i class=\"fas fa-sign-out-alt\"></i> DÉCONNEXION
        </a>
    </div>

    <div class=\"sidebar-user\">
        <div class=\"sidebar-user-avatar\">
            {{ app.user ? app.user.email|slice(0,1)|upper : 'U' }}
        </div>
        <div class=\"sidebar-user-info\">
            <div class=\"name\">
                {{ app.user ? (app.user.prenom ?? '') ~ ' ' ~ (app.user.nom ?? app.user.email) : 'Utilisateur' }}
            </div>
            <div class=\"role\">
                {{ app.user and 'ROLE_ADMIN' in app.user.roles ? 'Administrateur' : 'Utilisateur' }}
            </div>
        </div>
    </div>
</nav>

{# MAIN #}
<div id=\"main-wrapper\">
    {# TOPBAR #}
    <div id=\"topbar\">
        <div class=\"breadcrumb-bar\">
            <a href=\"{{ is_granted('ROLE_ADMIN') ? path('dashboard') : path('app_coach_index') }}\"><i class=\"fas fa-home\"></i></a>
            <span class=\"sep\">/</span>
            {% block breadcrumb %}
            <span class=\"current\">{% block page_title %}ACCUEIL{% endblock %}</span>
            {% endblock %}
        </div>
        <div class=\"topbar-actions\">
            {{ include('components/_notification_bell.html.twig') }}
            <button class=\"topbar-icon-btn\"><i class=\"fas fa-cog\"></i></button>
            <div class=\"topbar-avatar\">{{ app.user ? app.user.email|slice(0,1)|upper : 'U' }}</div>
        </div>
    </div>

    {# CONTENT #}
    <div id=\"content\">
        {% block body %}{% endblock %}
    </div>
</div>
{% endblock %}

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
{% block javascripts %}{% endblock %}

{{ include('components/_success_popup.html.twig') }}
{{ include('components/_error_popup.html.twig') }}
</body>
</html>
", "base.html.twig", "C:\\Users\\MSI\\Desktop\\payment +qrcode\\bizcore\\templates\\base.html.twig");
    }
}
