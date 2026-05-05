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

/* article/show.html.twig */
class __TwigTemplate_3387fccf5a88da2f84f89b094a049f8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; font-size: 14px; }
    .topbar-right { display: flex; align-items: center; gap: 10px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* ── ARTICLE CARD ──────────────────────────────────────────── */
    .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); max-width: 900px; }
    .detail-header { background: #1e293b; padding: 24px 28px; display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; }
    .detail-header-left { display: flex; flex-direction: column; gap: 8px; }

    .detail-tags { display: flex; gap: 8px; flex-wrap: wrap; }
    .tag { padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .tag-green  { background: rgba(34,197,94,0.2);  color: #22c55e; }
    .tag-blue   { background: rgba(14,165,233,0.2); color: #38bdf8; }
    .tag-yellow { background: rgba(251,191,36,0.2); color: #fbbf24; }
    .tag-grey   { background: rgba(148,163,184,0.2); color: #94a3b8; }

    .detail-title { font-size: 22px; font-weight: 700; color: #f1f5f9; line-height: 1.3; }

    .detail-meta-row { display: flex; gap: 20px; flex-wrap: wrap; }
    .meta-item { font-size: 12px; color: #64748b; display: flex; align-items: center; gap: 5px; }
    .meta-item strong { color: #94a3b8; }

    .action-btns-header { display: flex; gap: 8px; flex-shrink: 0; }
    .btn-edit-h { display: inline-flex; align-items: center; gap: 6px; background: #f59e0b; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; text-decoration: none; transition: opacity 0.15s; }
    .btn-edit-h:hover { opacity: 0.85; }
    .btn-del-h  { display: inline-flex; align-items: center; gap: 6px; background: #ef4444; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; border: none; cursor: pointer; transition: opacity 0.15s; font-family: 'DM Sans', sans-serif; }
    .btn-del-h:hover { opacity: 0.85; }

    .detail-img { width: 100%; max-height: 360px; object-fit: cover; display: block; }
    .detail-img-placeholder { height: 180px; display: flex; align-items: center; justify-content: center; font-size: 64px; background: #f1f5f9; }

    .detail-body { padding: 28px; }

    .section-label { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px; }
    .content-text { font-size: 14px; color: #475569; line-height: 1.9; white-space: pre-wrap; }

    .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 24px; padding-top: 24px; border-top: 1px solid #f1f5f9; }
    .meta-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; }
    .meta-box .label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
    .meta-box .value { font-size: 13px; font-weight: 600; color: #1e293b; }

    /* ── REACTIONS ADMIN BLOCK ─────────────────────────────────── */
    .reactions-block {
        margin-top: 28px; padding-top: 28px;
        border-top: 1px solid #f1f5f9;
    }
    .reactions-block-title {
        font-size: 11px; font-weight: 700; color: #94a3b8;
        text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 16px;
        display: flex; align-items: center; gap: 8px;
    }

    /* KPI row */
    .reaction-kpi-row { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin-bottom: 24px; }
    .reaction-kpi { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 14px 16px; text-align: center; }
    .reaction-kpi .kpi-icon { font-size: 20px; margin-bottom: 4px; }
    .reaction-kpi .kpi-val { font-size: 22px; font-weight: 800; color: #0f172a; line-height: 1; margin-bottom: 4px; }
    .reaction-kpi .kpi-label { font-size: 11px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: .4px; }

    /* Avis admin table */
    .avis-admin-table-wrap { overflow-x: auto; }
    .avis-admin-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .avis-admin-table th { text-align: left; padding: 9px 12px; font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: .5px; border-bottom: 1px solid #e2e8f0; white-space: nowrap; }
    .avis-admin-table td { padding: 11px 12px; border-bottom: 1px solid #f1f5f9; color: #334155; vertical-align: middle; }
    .avis-admin-table tr:last-child td { border-bottom: none; }
    .avis-admin-table tr:hover td { background: #f8fafc; }

    .tbl-avatar { width: 30px; height: 30px; border-radius: 50%; background: #22c55e; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 800; color: #fff; flex-shrink: 0; }
    .tbl-avatar.anon { background: #94a3b8; }
    .author-cell { display: flex; align-items: center; gap: 8px; }
    .author-name { font-weight: 600; color: #1e293b; }

    .type-pill { display: inline-flex; align-items: center; gap: 4px; font-size: 11px; font-weight: 700; padding: 3px 9px; border-radius: 20px; border: 1px solid; white-space: nowrap; }
    .type-like     { background: #f0fdf4; color: #16a34a; border-color: #bbf7d0; }
    .type-helpful  { background: #eff6ff; color: #2563eb; border-color: #bfdbfe; }
    .type-bookmark { background: #faf5ff; color: #7c3aed; border-color: #ddd6fe; }
    .type-share    { background: #fff7ed; color: #c2410c; border-color: #fed7aa; }

    .stars-cell { color: #f59e0b; font-size: 13px; letter-spacing: 1px; }
    .avis-cell  { color: #475569; font-style: italic; max-width: 280px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .anon-tag   { display: inline-block; background: #f1f5f9; color: #94a3b8; font-size: 10px; font-weight: 700; padding: 2px 7px; border-radius: 10px; margin-left: 4px; }
    .date-cell  { font-size: 12px; color: #94a3b8; white-space: nowrap; }

    .table-empty { text-align: center; padding: 28px; color: #94a3b8; font-size: 13px; }
    .table-loading { text-align: center; padding: 28px; color: #94a3b8; font-size: 13px; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }
</style>

<div style=\"display:flex; min-height:100vh;\">

    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"nav-item\"><span>📝</span> Blog</a>
            <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"nav-item active\"><span>📰</span> Articles</a>
            <a href=\"#\" class=\"nav-item\"><span>🛍</span> Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"#\" class=\"btn-profile\">Profile</a>
                <a href=\"#\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <div class=\"main\">

        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span>
                <span class=\"separator\">/</span>
                <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">ARTICLES</a>
                <span class=\"separator\">/</span>
                <span>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 168, $this->source); })()), "titre", [], "any", false, false, false, 168)), 0, 40), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 168, $this->source); })()), "titre", [], "any", false, false, false, 168)) > 40)) {
            yield "…";
        }
        yield "</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "flashes", ["success"], "method", false, false, false, 178));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 179
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "flashes", ["error"], "method", false, false, false, 181));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 182
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "
            <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"back-link\">← Retour aux articles</a>

            <div class=\"detail-card\">

                ";
        // line 190
        yield "                <div class=\"detail-header\">
                    <div class=\"detail-header-left\">
                        <div class=\"detail-tags\">
                            ";
        // line 193
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 193, $this->source); })()), "statut", [], "any", false, false, false, 193) == "publié")) {
            // line 194
            yield "                                <span class=\"tag tag-green\">✓ Publié</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 195
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 195, $this->source); })()), "statut", [], "any", false, false, false, 195) == "brouillon")) {
            // line 196
            yield "                                <span class=\"tag tag-yellow\">✎ Brouillon</span>
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 197
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 197, $this->source); })()), "statut", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "                                <span class=\"tag tag-grey\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 198, $this->source); })()), "statut", [], "any", false, false, false, 198)), "html", null, true);
            yield "</span>
                            ";
        }
        // line 200
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 200, $this->source); })()), "categorie", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 201
            yield "                                <span class=\"tag tag-blue\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 201, $this->source); })()), "categorie", [], "any", false, false, false, 201), "html", null, true);
            yield "</span>
                            ";
        }
        // line 203
        yield "                            <span class=\"tag tag-grey\">📰 Article #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 203, $this->source); })()), "idArticle", [], "any", false, false, false, 203), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"detail-title\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 205, $this->source); })()), "titre", [], "any", false, false, false, 205), "html", null, true);
        yield "</div>
                        <div class=\"detail-meta-row\">
                            <span class=\"meta-item\"><strong>Vues :</strong> 👁 ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 207, $this->source); })()), "nombreVues", [], "any", false, false, false, 207), "html", null, true);
        yield "</span>
                            ";
        // line 208
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 208, $this->source); })()), "categorie", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "                                <span class=\"meta-item\"><strong>Catégorie :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 209, $this->source); })()), "categorie", [], "any", false, false, false, 209), "html", null, true);
            yield "</span>
                            ";
        }
        // line 211
        yield "                        </div>
                    </div>
                    <div class=\"action-btns-header\">
                        <a href=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 214, $this->source); })()), "idArticle", [], "any", false, false, false, 214)]), "html", null, true);
        yield "\" class=\"btn-edit-h\">✏ Modifier</a>
                        <form method=\"post\" action=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 215, $this->source); })()), "idArticle", [], "any", false, false, false, 215)]), "html", null, true);
        yield "\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 216, $this->source); })()), "idArticle", [], "any", false, false, false, 216))), "html", null, true);
        yield "\">
                            <button class=\"btn-del-h\" onclick=\"return confirm('Supprimer cet article ?')\">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>

                ";
        // line 223
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 223, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 223)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 224
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 224, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 224))), "html", null, true);
            yield "\" class=\"detail-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 224, $this->source); })()), "titre", [], "any", false, false, false, 224), "html", null, true);
            yield "\">
                ";
        } else {
            // line 226
            yield "                    <div class=\"detail-img-placeholder\">📰</div>
                ";
        }
        // line 228
        yield "
                <div class=\"detail-body\">

                    ";
        // line 232
        yield "                    <div class=\"section-label\">Contenu de l'article</div>
                    <div class=\"content-text\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 233, $this->source); })()), "contenu", [], "any", false, false, false, 233), "html", null, true);
        yield "</div>

                    ";
        // line 236
        yield "                    <div class=\"meta-grid\">
                        <div class=\"meta-box\">
                            <div class=\"label\">Catégorie</div>
                            <div class=\"value\">";
        // line 239
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "categorie", [], "any", true, true, false, 239) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 239, $this->source); })()), "categorie", [], "any", false, false, false, 239)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 239, $this->source); })()), "categorie", [], "any", false, false, false, 239), "html", null, true)) : ("—"));
        yield "</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Statut</div>
                            <div class=\"value\">";
        // line 243
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 243, $this->source); })()), "statut", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 243, $this->source); })()), "statut", [], "any", false, false, false, 243)), "html", null, true)) : ("—"));
        yield "</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Nombre de vues</div>
                            <div class=\"value\">👁 ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 247, $this->source); })()), "nombreVues", [], "any", false, false, false, 247), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Identifiant</div>
                            <div class=\"value\">#";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 251, $this->source); })()), "idArticle", [], "any", false, false, false, 251), "html", null, true);
        yield "</div>
                        </div>
                    </div>

                    ";
        // line 259
        yield "                    <div class=\"reactions-block\">

                        <div class=\"reactions-block-title\">
                            📊 Engagement des lecteurs
                        </div>

                        ";
        // line 266
        yield "                        <div class=\"reaction-kpi-row\" id=\"adminKpiRow\">
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">👍</div><div class=\"kpi-val\" id=\"kpi-like\">—</div><div class=\"kpi-label\">J'aime</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">✅</div><div class=\"kpi-val\" id=\"kpi-helpful\">—</div><div class=\"kpi-label\">Utile</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">🔖</div><div class=\"kpi-val\" id=\"kpi-bookmark\">—</div><div class=\"kpi-label\">Sauvegardé</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">📤</div><div class=\"kpi-val\" id=\"kpi-share\">—</div><div class=\"kpi-label\">Partagé</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">⭐</div><div class=\"kpi-val\" id=\"kpi-note\" style=\"color:#f59e0b\">—</div><div class=\"kpi-label\">Note moy.</div></div>
                        </div>

                        ";
        // line 275
        yield "                        <div class=\"section-label\" style=\"margin-bottom:12px\">Avis soumis par les utilisateurs</div>
                        <div class=\"avis-admin-table-wrap\">
                            <table class=\"avis-admin-table\">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Type</th>
                                        <th>Note</th>
                                        <th>Avis</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id=\"adminAvisBody\">
                                    <tr><td colspan=\"5\" class=\"table-loading\">⏳ Chargement…</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>";
        // line 294
        yield "
                </div>";
        // line 296
        yield "            </div>";
        // line 297
        yield "
        </div>
    </div>
</div>

<script>
const ARTICLE_ID = ";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 303, $this->source); })()), "idArticle", [], "any", false, false, false, 303), "html", null, true);
        yield ";
const AVIS_URL   = `/blog/\${ARTICLE_ID}/avis`;

const TYPE_LABELS = { like:'👍 J\\'aime', helpful:'✅ Utile', bookmark:'🔖 Sauvegardé', share:'📤 Partagé' };
const TYPE_CLASS  = { like:'type-like', helpful:'type-helpful', bookmark:'type-bookmark', share:'type-share' };

function escHtml(str) {
    if (!str) return '';
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
}

async function loadAdminReactions() {
    try {
        const res  = await fetch(AVIS_URL);
        const json = await res.json();

        if (!json.success) return;

        const data = json.data;

        // ── Update KPI counters ──────────────────────────────────
        const counts = { like: 0, helpful: 0, bookmark: 0, share: 0 };
        let notesSum = 0, notesCount = 0;

        data.forEach(item => {
            if (counts[item.type_reaction] !== undefined) counts[item.type_reaction]++;
            if (item.note) { notesSum += item.note; notesCount++; }
        });

        document.getElementById('kpi-like').textContent     = counts.like;
        document.getElementById('kpi-helpful').textContent  = counts.helpful;
        document.getElementById('kpi-bookmark').textContent = counts.bookmark;
        document.getElementById('kpi-share').textContent    = counts.share;
        document.getElementById('kpi-note').textContent     = notesCount > 0
            ? (notesSum / notesCount).toFixed(1) + '/5'
            : '—';

        // ── Render avis table ────────────────────────────────────
        const tbody = document.getElementById('adminAvisBody');

        if (!data.length) {
            tbody.innerHTML = '<tr><td colspan=\"5\" class=\"table-empty\">Aucune réaction pour cet article.</td></tr>';
            return;
        }

        tbody.innerHTML = data.map(item => {
            const initials   = item.is_anonymous ? '?' : (item.nom ? item.nom.charAt(0).toUpperCase() : '?');
            const authorName = item.is_anonymous ? 'Anonyme' : (item.nom ?? 'Utilisateur');
            const avatarCls  = item.is_anonymous ? 'tbl-avatar anon' : 'tbl-avatar';
            const anonTag    = item.is_anonymous ? '<span class=\"anon-tag\">anonyme</span>' : '';

            const starsHtml = item.note
                ? `<span class=\"stars-cell\">\${'★'.repeat(item.note)}\${'☆'.repeat(5 - item.note)}</span>`
                : '<span style=\"color:#cbd5e1\">—</span>';

            const avisHtml = item.avis
                ? `<span class=\"avis-cell\" title=\"\${escHtml(item.avis)}\">\${escHtml(item.avis)}</span>`
                : '<span style=\"color:#cbd5e1\">—</span>';

            const date    = new Date(item.date_reaction);
            const dateStr = date.toLocaleDateString('fr-FR', { day:'2-digit', month:'short', year:'numeric' })
                          + ' ' + date.toLocaleTimeString('fr-FR', { hour:'2-digit', minute:'2-digit' });

            return `
            <tr>
                <td>
                    <div class=\"author-cell\">
                        <div class=\"\${avatarCls}\">\${initials}</div>
                        <span class=\"author-name\">\${escHtml(authorName)}\${anonTag}</span>
                    </div>
                </td>
                <td><span class=\"type-pill \${TYPE_CLASS[item.type_reaction] ?? ''}\">\${TYPE_LABELS[item.type_reaction] ?? item.type_reaction}</span></td>
                <td>\${starsHtml}</td>
                <td>\${avisHtml}</td>
                <td class=\"date-cell\">\${dateStr}</td>
            </tr>`;
        }).join('');

    } catch (err) {
        document.getElementById('adminAvisBody').innerHTML =
            '<tr><td colspan=\"5\" class=\"table-empty\">⚠️ Erreur de chargement.</td></tr>';
    }
}

loadAdminReactions();
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
        return "article/show.html.twig";
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
        return array (  518 => 303,  510 => 297,  508 => 296,  505 => 294,  485 => 275,  475 => 266,  467 => 259,  460 => 251,  453 => 247,  446 => 243,  439 => 239,  434 => 236,  429 => 233,  426 => 232,  421 => 228,  417 => 226,  409 => 224,  406 => 223,  397 => 216,  393 => 215,  389 => 214,  384 => 211,  378 => 209,  376 => 208,  372 => 207,  367 => 205,  361 => 203,  355 => 201,  352 => 200,  346 => 198,  344 => 197,  341 => 196,  339 => 195,  336 => 194,  334 => 193,  329 => 190,  322 => 185,  319 => 184,  310 => 182,  305 => 181,  296 => 179,  292 => 178,  276 => 168,  271 => 166,  244 => 142,  240 => 141,  235 => 139,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.titre }}{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; font-size: 14px; }
    .topbar-right { display: flex; align-items: center; gap: 10px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* ── ARTICLE CARD ──────────────────────────────────────────── */
    .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); max-width: 900px; }
    .detail-header { background: #1e293b; padding: 24px 28px; display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; }
    .detail-header-left { display: flex; flex-direction: column; gap: 8px; }

    .detail-tags { display: flex; gap: 8px; flex-wrap: wrap; }
    .tag { padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .tag-green  { background: rgba(34,197,94,0.2);  color: #22c55e; }
    .tag-blue   { background: rgba(14,165,233,0.2); color: #38bdf8; }
    .tag-yellow { background: rgba(251,191,36,0.2); color: #fbbf24; }
    .tag-grey   { background: rgba(148,163,184,0.2); color: #94a3b8; }

    .detail-title { font-size: 22px; font-weight: 700; color: #f1f5f9; line-height: 1.3; }

    .detail-meta-row { display: flex; gap: 20px; flex-wrap: wrap; }
    .meta-item { font-size: 12px; color: #64748b; display: flex; align-items: center; gap: 5px; }
    .meta-item strong { color: #94a3b8; }

    .action-btns-header { display: flex; gap: 8px; flex-shrink: 0; }
    .btn-edit-h { display: inline-flex; align-items: center; gap: 6px; background: #f59e0b; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; text-decoration: none; transition: opacity 0.15s; }
    .btn-edit-h:hover { opacity: 0.85; }
    .btn-del-h  { display: inline-flex; align-items: center; gap: 6px; background: #ef4444; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; border: none; cursor: pointer; transition: opacity 0.15s; font-family: 'DM Sans', sans-serif; }
    .btn-del-h:hover { opacity: 0.85; }

    .detail-img { width: 100%; max-height: 360px; object-fit: cover; display: block; }
    .detail-img-placeholder { height: 180px; display: flex; align-items: center; justify-content: center; font-size: 64px; background: #f1f5f9; }

    .detail-body { padding: 28px; }

    .section-label { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px; }
    .content-text { font-size: 14px; color: #475569; line-height: 1.9; white-space: pre-wrap; }

    .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 24px; padding-top: 24px; border-top: 1px solid #f1f5f9; }
    .meta-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; }
    .meta-box .label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
    .meta-box .value { font-size: 13px; font-weight: 600; color: #1e293b; }

    /* ── REACTIONS ADMIN BLOCK ─────────────────────────────────── */
    .reactions-block {
        margin-top: 28px; padding-top: 28px;
        border-top: 1px solid #f1f5f9;
    }
    .reactions-block-title {
        font-size: 11px; font-weight: 700; color: #94a3b8;
        text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 16px;
        display: flex; align-items: center; gap: 8px;
    }

    /* KPI row */
    .reaction-kpi-row { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin-bottom: 24px; }
    .reaction-kpi { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 14px 16px; text-align: center; }
    .reaction-kpi .kpi-icon { font-size: 20px; margin-bottom: 4px; }
    .reaction-kpi .kpi-val { font-size: 22px; font-weight: 800; color: #0f172a; line-height: 1; margin-bottom: 4px; }
    .reaction-kpi .kpi-label { font-size: 11px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: .4px; }

    /* Avis admin table */
    .avis-admin-table-wrap { overflow-x: auto; }
    .avis-admin-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .avis-admin-table th { text-align: left; padding: 9px 12px; font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: .5px; border-bottom: 1px solid #e2e8f0; white-space: nowrap; }
    .avis-admin-table td { padding: 11px 12px; border-bottom: 1px solid #f1f5f9; color: #334155; vertical-align: middle; }
    .avis-admin-table tr:last-child td { border-bottom: none; }
    .avis-admin-table tr:hover td { background: #f8fafc; }

    .tbl-avatar { width: 30px; height: 30px; border-radius: 50%; background: #22c55e; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 800; color: #fff; flex-shrink: 0; }
    .tbl-avatar.anon { background: #94a3b8; }
    .author-cell { display: flex; align-items: center; gap: 8px; }
    .author-name { font-weight: 600; color: #1e293b; }

    .type-pill { display: inline-flex; align-items: center; gap: 4px; font-size: 11px; font-weight: 700; padding: 3px 9px; border-radius: 20px; border: 1px solid; white-space: nowrap; }
    .type-like     { background: #f0fdf4; color: #16a34a; border-color: #bbf7d0; }
    .type-helpful  { background: #eff6ff; color: #2563eb; border-color: #bfdbfe; }
    .type-bookmark { background: #faf5ff; color: #7c3aed; border-color: #ddd6fe; }
    .type-share    { background: #fff7ed; color: #c2410c; border-color: #fed7aa; }

    .stars-cell { color: #f59e0b; font-size: 13px; letter-spacing: 1px; }
    .avis-cell  { color: #475569; font-style: italic; max-width: 280px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    .anon-tag   { display: inline-block; background: #f1f5f9; color: #94a3b8; font-size: 10px; font-weight: 700; padding: 2px 7px; border-radius: 10px; margin-left: 4px; }
    .date-cell  { font-size: 12px; color: #94a3b8; white-space: nowrap; }

    .table-empty { text-align: center; padding: 28px; color: #94a3b8; font-size: 13px; }
    .table-loading { text-align: center; padding: 28px; color: #94a3b8; font-size: 13px; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }
</style>

<div style=\"display:flex; min-height:100vh;\">

    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"{{ path('evenement_index') }}\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"{{ path('frontend_blog_index') }}\" class=\"nav-item\"><span>📝</span> Blog</a>
            <a href=\"{{ path('article_index') }}\" class=\"nav-item active\"><span>📰</span> Articles</a>
            <a href=\"#\" class=\"nav-item\"><span>🛍</span> Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"#\" class=\"btn-profile\">Profile</a>
                <a href=\"#\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <div class=\"main\">

        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span>
                <span class=\"separator\">/</span>
                <a href=\"{{ path('article_index') }}\">ARTICLES</a>
                <span class=\"separator\">/</span>
                <span>{{ article.titre|upper|slice(0, 40) }}{% if article.titre|length > 40 %}…{% endif %}</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            {% for msg in app.flashes('success') %}
                <div class=\"flash flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash flash-error\">❌ {{ msg }}</div>
            {% endfor %}

            <a href=\"{{ path('article_index') }}\" class=\"back-link\">← Retour aux articles</a>

            <div class=\"detail-card\">

                {# ── Header ── #}
                <div class=\"detail-header\">
                    <div class=\"detail-header-left\">
                        <div class=\"detail-tags\">
                            {% if article.statut == 'publié' %}
                                <span class=\"tag tag-green\">✓ Publié</span>
                            {% elseif article.statut == 'brouillon' %}
                                <span class=\"tag tag-yellow\">✎ Brouillon</span>
                            {% elseif article.statut %}
                                <span class=\"tag tag-grey\">{{ article.statut|capitalize }}</span>
                            {% endif %}
                            {% if article.categorie %}
                                <span class=\"tag tag-blue\">{{ article.categorie }}</span>
                            {% endif %}
                            <span class=\"tag tag-grey\">📰 Article #{{ article.idArticle }}</span>
                        </div>
                        <div class=\"detail-title\">{{ article.titre }}</div>
                        <div class=\"detail-meta-row\">
                            <span class=\"meta-item\"><strong>Vues :</strong> 👁 {{ article.nombreVues }}</span>
                            {% if article.categorie %}
                                <span class=\"meta-item\"><strong>Catégorie :</strong> {{ article.categorie }}</span>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"action-btns-header\">
                        <a href=\"{{ path('article_edit', {'id': article.idArticle}) }}\" class=\"btn-edit-h\">✏ Modifier</a>
                        <form method=\"post\" action=\"{{ path('article_delete', {'id': article.idArticle}) }}\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.idArticle) }}\">
                            <button class=\"btn-del-h\" onclick=\"return confirm('Supprimer cet article ?')\">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>

                {# ── Image ── #}
                {% if article.imagePrincipale %}
                    <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" class=\"detail-img\" alt=\"{{ article.titre }}\">
                {% else %}
                    <div class=\"detail-img-placeholder\">📰</div>
                {% endif %}

                <div class=\"detail-body\">

                    {# ── Content ── #}
                    <div class=\"section-label\">Contenu de l'article</div>
                    <div class=\"content-text\">{{ article.contenu }}</div>

                    {# ── Meta grid ── #}
                    <div class=\"meta-grid\">
                        <div class=\"meta-box\">
                            <div class=\"label\">Catégorie</div>
                            <div class=\"value\">{{ article.categorie ?? '—' }}</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Statut</div>
                            <div class=\"value\">{{ article.statut ? article.statut|capitalize : '—' }}</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Nombre de vues</div>
                            <div class=\"value\">👁 {{ article.nombreVues }}</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Identifiant</div>
                            <div class=\"value\">#{{ article.idArticle }}</div>
                        </div>
                    </div>

                    {# ══════════════════════════════════════════════════
                       REACTIONS ADMIN BLOCK
                       Shows engagement KPIs + full avis table
                    ══════════════════════════════════════════════════ #}
                    <div class=\"reactions-block\">

                        <div class=\"reactions-block-title\">
                            📊 Engagement des lecteurs
                        </div>

                        {# KPI row — loaded by JS #}
                        <div class=\"reaction-kpi-row\" id=\"adminKpiRow\">
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">👍</div><div class=\"kpi-val\" id=\"kpi-like\">—</div><div class=\"kpi-label\">J'aime</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">✅</div><div class=\"kpi-val\" id=\"kpi-helpful\">—</div><div class=\"kpi-label\">Utile</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">🔖</div><div class=\"kpi-val\" id=\"kpi-bookmark\">—</div><div class=\"kpi-label\">Sauvegardé</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">📤</div><div class=\"kpi-val\" id=\"kpi-share\">—</div><div class=\"kpi-label\">Partagé</div></div>
                            <div class=\"reaction-kpi\"><div class=\"kpi-icon\">⭐</div><div class=\"kpi-val\" id=\"kpi-note\" style=\"color:#f59e0b\">—</div><div class=\"kpi-label\">Note moy.</div></div>
                        </div>

                        {# Avis table — loaded by JS #}
                        <div class=\"section-label\" style=\"margin-bottom:12px\">Avis soumis par les utilisateurs</div>
                        <div class=\"avis-admin-table-wrap\">
                            <table class=\"avis-admin-table\">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Type</th>
                                        <th>Note</th>
                                        <th>Avis</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id=\"adminAvisBody\">
                                    <tr><td colspan=\"5\" class=\"table-loading\">⏳ Chargement…</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>{# /reactions-block #}

                </div>{# /detail-body #}
            </div>{# /detail-card #}

        </div>
    </div>
</div>

<script>
const ARTICLE_ID = {{ article.idArticle }};
const AVIS_URL   = `/blog/\${ARTICLE_ID}/avis`;

const TYPE_LABELS = { like:'👍 J\\'aime', helpful:'✅ Utile', bookmark:'🔖 Sauvegardé', share:'📤 Partagé' };
const TYPE_CLASS  = { like:'type-like', helpful:'type-helpful', bookmark:'type-bookmark', share:'type-share' };

function escHtml(str) {
    if (!str) return '';
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
}

async function loadAdminReactions() {
    try {
        const res  = await fetch(AVIS_URL);
        const json = await res.json();

        if (!json.success) return;

        const data = json.data;

        // ── Update KPI counters ──────────────────────────────────
        const counts = { like: 0, helpful: 0, bookmark: 0, share: 0 };
        let notesSum = 0, notesCount = 0;

        data.forEach(item => {
            if (counts[item.type_reaction] !== undefined) counts[item.type_reaction]++;
            if (item.note) { notesSum += item.note; notesCount++; }
        });

        document.getElementById('kpi-like').textContent     = counts.like;
        document.getElementById('kpi-helpful').textContent  = counts.helpful;
        document.getElementById('kpi-bookmark').textContent = counts.bookmark;
        document.getElementById('kpi-share').textContent    = counts.share;
        document.getElementById('kpi-note').textContent     = notesCount > 0
            ? (notesSum / notesCount).toFixed(1) + '/5'
            : '—';

        // ── Render avis table ────────────────────────────────────
        const tbody = document.getElementById('adminAvisBody');

        if (!data.length) {
            tbody.innerHTML = '<tr><td colspan=\"5\" class=\"table-empty\">Aucune réaction pour cet article.</td></tr>';
            return;
        }

        tbody.innerHTML = data.map(item => {
            const initials   = item.is_anonymous ? '?' : (item.nom ? item.nom.charAt(0).toUpperCase() : '?');
            const authorName = item.is_anonymous ? 'Anonyme' : (item.nom ?? 'Utilisateur');
            const avatarCls  = item.is_anonymous ? 'tbl-avatar anon' : 'tbl-avatar';
            const anonTag    = item.is_anonymous ? '<span class=\"anon-tag\">anonyme</span>' : '';

            const starsHtml = item.note
                ? `<span class=\"stars-cell\">\${'★'.repeat(item.note)}\${'☆'.repeat(5 - item.note)}</span>`
                : '<span style=\"color:#cbd5e1\">—</span>';

            const avisHtml = item.avis
                ? `<span class=\"avis-cell\" title=\"\${escHtml(item.avis)}\">\${escHtml(item.avis)}</span>`
                : '<span style=\"color:#cbd5e1\">—</span>';

            const date    = new Date(item.date_reaction);
            const dateStr = date.toLocaleDateString('fr-FR', { day:'2-digit', month:'short', year:'numeric' })
                          + ' ' + date.toLocaleTimeString('fr-FR', { hour:'2-digit', minute:'2-digit' });

            return `
            <tr>
                <td>
                    <div class=\"author-cell\">
                        <div class=\"\${avatarCls}\">\${initials}</div>
                        <span class=\"author-name\">\${escHtml(authorName)}\${anonTag}</span>
                    </div>
                </td>
                <td><span class=\"type-pill \${TYPE_CLASS[item.type_reaction] ?? ''}\">\${TYPE_LABELS[item.type_reaction] ?? item.type_reaction}</span></td>
                <td>\${starsHtml}</td>
                <td>\${avisHtml}</td>
                <td class=\"date-cell\">\${dateStr}</td>
            </tr>`;
        }).join('');

    } catch (err) {
        document.getElementById('adminAvisBody').innerHTML =
            '<tr><td colspan=\"5\" class=\"table-empty\">⚠️ Erreur de chargement.</td></tr>';
    }
}

loadAdminReactions();
</script>

{% endblock %}", "article/show.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\article\\show.html.twig");
    }
}
