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

/* article/index.html.twig */
class __TwigTemplate_5ce50815b9117b0e922904073f35bca0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "admin")) ? ("Gestion des Articles") : ("Blog"));
        
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 5, $this->source); })()) == "admin")) ? ("GESTION ARTICLES") : ("BLOG"));
        
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
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }
.sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; letter-spacing: 0.5px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; font-family: 'DM Sans', sans-serif; text-align: center; cursor: pointer; border: none; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-right { display: flex; align-items: center; gap: 16px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    .content { padding: 28px; }

    .stat-row { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px; margin-bottom: 20px; }
    .stat-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 14px 16px 10px; display: flex; flex-direction: column; gap: 6px; position: relative; overflow: hidden; }
    .sc-top { display: flex; align-items: center; justify-content: space-between; }
    .sc-label { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
    .sc-icon { width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center; }
    .sc-value { font-size: 22px; font-weight: 700; color: #1e293b; line-height: 1; }
    .sc-bottom { display: flex; align-items: center; justify-content: space-between; }
    .sc-badge { font-size: 10px; font-weight: 700; padding: 2px 7px; border-radius: 4px; }
    .badge-up   { background: #dcfce7; color: #15803d; }
    .badge-grey { background: #f1f5f9; color: #64748b; }
    .sc-spark { width: 80px; height: 32px; }

    .action-bar { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; flex-wrap: wrap; }
    .btn-add { display: inline-flex; align-items: center; gap: 7px; background: #22c55e; color: #fff; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700; padding: 9px 18px; border-radius: 7px; text-decoration: none; transition: all 0.2s; }
    .btn-add:hover { background: #16a34a; }
    .btn-export { display: inline-flex; align-items: center; gap: 7px; background: #fff; color: #475569; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 7px; text-decoration: none; border: 1px solid #e2e8f0; transition: all 0.2s; cursor: pointer; }
    .btn-export:hover { background: #f8fafc; }
    .spacer { flex: 1; }
    .search-box { display: flex; align-items: center; gap: 8px; background: #fff; border: 1px solid #e2e8f0; border-radius: 7px; padding: 8px 14px; width: 220px; }
    .search-box input { border: none; outline: none; font-family: 'DM Sans', sans-serif; font-size: 13px; color: #475569; width: 100%; background: transparent; }
    .search-box .search-icon { color: #94a3b8; font-size: 13px; }

    .table-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }
    table { width: 100%; border-collapse: collapse; font-size: 13px; }
    thead tr { background: #1e293b; color: #fff; }
    thead th { padding: 13px 16px; text-align: left; font-weight: 600; font-size: 12px; letter-spacing: 0.3px; }
    thead th a { color: #fff; text-decoration: none; display: inline-flex; align-items: center; gap: 4px; }
    thead th a:hover { color: #22c55e; }
    thead th a.sort-active { color: #22c55e; }
    tbody tr { border-bottom: 1px solid #f1f5f9; transition: background 0.1s; }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: #f8fafc; }
    td { padding: 13px 16px; color: #475569; vertical-align: middle; }
    td.title-cell { font-weight: 600; color: #1e293b; max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

    .thumb { width: 40px; height: 40px; border-radius: 7px; object-fit: cover; border: 1px solid #e2e8f0; }
    .no-image { width: 40px; height: 40px; border-radius: 7px; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-size: 18px; border: 1px solid #e2e8f0; }

    .cat-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; background: #dbeafe; color: #1d4ed8; }
    .status-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .status-publié    { background: #dcfce7; color: #16a34a; }
    .status-brouillon { background: #fef9c3; color: #a16207; }
    .status-archivé   { background: #f1f5f9; color: #64748b; }

    .views-tag { font-size: 12px; font-weight: 600; color: #64748b; }

    .action-btns { display: flex; gap: 6px; }
    .btn-icon { width: 32px; height: 32px; border-radius: 7px; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 13px; text-decoration: none; transition: opacity 0.15s; }
    .btn-icon:hover { opacity: 0.8; }
    .btn-view-ic { background: #0ea5e9; color: #fff; }
    .btn-edit-ic { background: #f59e0b; color: #fff; }
    .btn-del-ic  { background: #ef4444; color: #fff; }

    input[type=\"checkbox\"] { width: 15px; height: 15px; cursor: pointer; accent-color: #22c55e; }

    .bottom-bar { padding: 16px 0 0; display: flex; align-items: center; justify-content: space-between; }
    .btn-delete-all { display: inline-flex; align-items: center; gap: 7px; background: #ef4444; color: #fff; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 7px; border: none; cursor: pointer; }
    .btn-delete-all:hover { background: #dc2626; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    .empty-row td { text-align: center; padding: 60px; color: #94a3b8; font-size: 15px; }
    .excerpt { max-width: 240px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; }

    .user-mode-banner { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 8px; padding: 10px 16px; font-size: 13px; color: #1d4ed8; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; }
</style>

";
        // line 117
        $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 117, $this->source); })()));
        // line 118
        $context["published"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 118, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 118, $this->source); })()), "statut", [], "any", false, false, false, 118) == "publié"); }));
        // line 119
        $context["drafts"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 119, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 119, $this->source); })()), "statut", [], "any", false, false, false, 119) == "brouillon"); }));
        // line 120
        $context["total_views"] = 0;
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            $context["total_views"] = ((isset($context["total_views"]) || array_key_exists("total_views", $context) ? $context["total_views"] : (function () { throw new RuntimeError('Variable "total_views" does not exist.', 121, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nombreVues", [], "any", false, false, false, 121));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "
";
        // line 134
        yield "
";
        // line 135
        $context["indexRoute"] = ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 135, $this->source); })()) == "admin")) ? ("article_index") : ("frontend_blog_index"));
        // line 136
        yield "
<div style=\"display:flex; min-height:100vh; width:100vw;\">

   
    <div class=\"main\">

        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span>
                <span class=\"separator\">/</span>
                <span>";
        // line 146
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 146, $this->source); })()) == "admin")) ? ("GESTION BLOG") : ("BLOG PUBLIC"));
        yield "</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                ";
        // line 150
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 150, $this->source); })()) == "admin")) {
            yield "<div class=\"topbar-icon\">⚙</div>";
        }
        // line 151
        yield "            </div>
        </div>

        <div class=\"content\">

            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "flashes", ["success"], "method", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 157
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "flashes", ["error"], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 160
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        yield "
            ";
        // line 163
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 163, $this->source); })()) == "user")) {
            // line 164
            yield "                <div class=\"user-mode-banner\">
                    🌐 <strong>Mode lecture</strong> — Vue publique du blog. Les actions d'administration sont désactivées.
                    &nbsp;<a href=\"";
            // line 166
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
            yield "\" style=\"color:#1d4ed8; font-weight:600;\">Accéder à l'admin →</a>
                </div>
            ";
        }
        // line 169
        yield "
            <div class=\"action-bar\">
                ";
        // line 171
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 171, $this->source); })()) == "admin")) {
            // line 172
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
            yield "\" class=\"btn-add\">＋ ADD NEW</a>
                    <button class=\"btn-export\" onclick=\"window.print()\">⬆ EXPORT PDF</button>
                ";
        }
        // line 175
        yield "                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" onkeyup=\"filterTable()\">
                </div>
            </div>

            <div class=\"stat-row\">
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Total articles</span>
                        <div class=\"sc-icon\" style=\"background:#E6F1FB;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><rect x=\"2\" y=\"2\" width=\"12\" height=\"12\" rx=\"2\" stroke=\"#378ADD\" stroke-width=\"1.5\"/><path d=\"M5 6h6M5 9h4\" stroke=\"#378ADD\" stroke-width=\"1.3\" stroke-linecap=\"round\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 190, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">↑ ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 191, $this->source); })()), "html", null, true);
        yield " total</span><canvas class=\"sc-spark\" id=\"sk1\"></canvas></div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Publiés</span>
                        <div class=\"sc-icon\" style=\"background:#EAF3DE;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><circle cx=\"8\" cy=\"8\" r=\"6\" stroke=\"#639922\" stroke-width=\"1.5\"/><path d=\"M5 8l2 2 4-4\" stroke=\"#639922\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["published"]) || array_key_exists("published", $context) ? $context["published"] : (function () { throw new RuntimeError('Variable "published" does not exist.', 200, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">actifs</span><canvas class=\"sc-spark\" id=\"sk2\"></canvas></div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Brouillons</span>
                        <div class=\"sc-icon\" style=\"background:#FEF9C3;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><path d=\"M3 12L10 5l2 2-7 7H3v-2z\" stroke=\"#BA7517\" stroke-width=\"1.3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new RuntimeError('Variable "drafts" does not exist.', 210, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-grey\">en attente</span><canvas class=\"sc-spark\" id=\"sk3\"></canvas></div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Total vues</span>
                        <div class=\"sc-icon\" style=\"background:#EEEDFE;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><ellipse cx=\"8\" cy=\"8\" rx=\"7\" ry=\"4.5\" stroke=\"#534AB7\" stroke-width=\"1.5\"/><circle cx=\"8\" cy=\"8\" r=\"2\" stroke=\"#534AB7\" stroke-width=\"1.3\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_views"]) || array_key_exists("total_views", $context) ? $context["total_views"] : (function () { throw new RuntimeError('Variable "total_views" does not exist.', 220, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">↑ cumulées</span><canvas class=\"sc-spark\" id=\"sk4\"></canvas></div>
                </div>
            </div>

            <div class=\"table-card\">
                <table id=\"articleTable\">
                    <thead>
                        <tr>
                            ";
        // line 229
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 229, $this->source); })()) == "admin")) {
            // line 230
            yield "                                <th style=\"width:40px;\"><input type=\"checkbox\" id=\"checkAll\" onchange=\"toggleAll(this)\"></th>
                            ";
        }
        // line 232
        yield "                            <th>ID</th>
                            <th>Image</th>
                            <th>";
        // line 234
        yield $this->getTemplateForMacro("macro_sort_link", $context, 234, $this->getSourceContext())->macro_sort_link(...["Titre", "titre", (isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 234, $this->source); })()), (isset($context["sortDir"]) || array_key_exists("sortDir", $context) ? $context["sortDir"] : (function () { throw new RuntimeError('Variable "sortDir" does not exist.', 234, $this->source); })()), (isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 234, $this->source); })())]);
        yield "</th>
                            <th>";
        // line 235
        yield $this->getTemplateForMacro("macro_sort_link", $context, 235, $this->getSourceContext())->macro_sort_link(...["Catégorie", "categorie", (isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 235, $this->source); })()), (isset($context["sortDir"]) || array_key_exists("sortDir", $context) ? $context["sortDir"] : (function () { throw new RuntimeError('Variable "sortDir" does not exist.', 235, $this->source); })()), (isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 235, $this->source); })())]);
        yield "</th>
                            <th>Statut</th>
                            <th>";
        // line 237
        yield $this->getTemplateForMacro("macro_sort_link", $context, 237, $this->getSourceContext())->macro_sort_link(...["Vues", "nombre_vues", (isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 237, $this->source); })()), (isset($context["sortDir"]) || array_key_exists("sortDir", $context) ? $context["sortDir"] : (function () { throw new RuntimeError('Variable "sortDir" does not exist.', 237, $this->source); })()), (isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 237, $this->source); })())]);
        yield "</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 243, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 244
            yield "                        <tr>
                            ";
            // line 245
            if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 245, $this->source); })()) == "admin")) {
                // line 246
                yield "                                <td><input type=\"checkbox\" class=\"row-check\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 246), "html", null, true);
                yield "\"></td>
                            ";
            }
            // line 248
            yield "                            <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 248), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 250
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imagePrincipale", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 251
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imagePrincipale", [], "any", false, false, false, 251))), "html", null, true);
                yield "\" class=\"thumb\" alt=\"\">
                                ";
            } else {
                // line 253
                yield "                                    <div class=\"no-image\">📰</div>
                                ";
            }
            // line 255
            yield "                            </td>
                            <td class=\"title-cell\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 256), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 258
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"cat-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 258), "html", null, true);
                yield "</span>";
            } else {
                yield "—";
            }
            // line 259
            yield "                            </td>
                            <td>
                                ";
            // line 261
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"status-badge status-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 261), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 261)), "html", null, true);
                yield "</span>";
            } else {
                yield "—";
            }
            // line 262
            yield "                            </td>
                            <td><span class=\"views-tag\">👁 ";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nombreVues", [], "any", false, false, false, 263), "html", null, true);
            yield "</span></td>
                            <td><span class=\"excerpt\">";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 264), 0, 70) . "…"), "html", null, true);
            yield "</span></td>
                            <td>
                                <div class=\"action-btns\">
                                    ";
            // line 267
            if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 267, $this->source); })()) == "admin")) {
                // line 268
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 268)]), "html", null, true);
                yield "\" class=\"btn-icon btn-view-ic\" title=\"Voir\">👁</a>
                                        <a href=\"";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 269)]), "html", null, true);
                yield "\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\">✏</a>
                                        <form method=\"post\" action=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 270)]), "html", null, true);
                yield "\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 271))), "html", null, true);
                yield "\">
                                            <button class=\"btn-icon btn-del-ic\" title=\"Supprimer\" onclick=\"return confirm('Supprimer cet article ?')\">🗑</button>
                                        </form>
                                    ";
            } else {
                // line 275
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 275)]), "html", null, true);
                yield "\" class=\"btn-icon btn-view-ic\" title=\"Lire\">👁</a>
                                    ";
            }
            // line 277
            yield "                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 280
        if (!$context['_iterated']) {
            // line 281
            yield "                        <tr class=\"empty-row\">
                            <td colspan=\"";
            // line 282
            yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 282, $this->source); })()) == "admin")) ? (9) : (8));
            yield "\">📭 Aucun article trouvé</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        yield "                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                ";
        // line 290
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 290, $this->source); })()) == "admin")) {
            // line 291
            yield "                    <button class=\"btn-delete-all\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                ";
        } else {
            // line 293
            yield "                    <span></span>
                ";
        }
        // line 295
        yield "                <span style=\"font-size:13px; color:#94a3b8;\">Résultats : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 295, $this->source); })())), "html", null, true);
        yield " article";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 295, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</span>
            </div>

        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js\"></script>
<script>
function sparkline(id, data, color) {
    const c = document.getElementById(id); if (!c) return;
    new Chart(c, { type:'line', data:{ labels:data.map((_,i)=>i), datasets:[{data, borderColor:color, borderWidth:1.5, pointRadius:0, fill:true, backgroundColor:color+'22', tension:0.4}] }, options:{responsive:false, animation:false, plugins:{legend:{display:false},tooltip:{enabled:false}}, scales:{x:{display:false},y:{display:false}}} });
}
sparkline('sk1',[2,4,3,6,5,8,";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 308, $this->source); })()), "html", null, true);
        yield "],'#378ADD');
sparkline('sk2',[1,2,2,4,3,5,";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["published"]) || array_key_exists("published", $context) ? $context["published"] : (function () { throw new RuntimeError('Variable "published" does not exist.', 309, $this->source); })()), "html", null, true);
        yield "],'#639922');
sparkline('sk3',[1,1,2,1,2,1,";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new RuntimeError('Variable "drafts" does not exist.', 310, $this->source); })()), "html", null, true);
        yield "],'#BA7517');
sparkline('sk4',[100,200,150,300,250,400,";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_views"]) || array_key_exists("total_views", $context) ? $context["total_views"] : (function () { throw new RuntimeError('Variable "total_views" does not exist.', 311, $this->source); })()), "html", null, true);
        yield "],'#534AB7');

function filterTable() {
    const q = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#articleTable tbody tr:not(.empty-row)').forEach(r => { r.style.display = r.textContent.toLowerCase().includes(q) ? '' : 'none'; });
}
";
        // line 317
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 317, $this->source); })()) == "admin")) {
            // line 318
            yield "function toggleAll(cb) { document.querySelectorAll('.row-check').forEach(c => c.checked = cb.checked); }
function deleteSelected() {
    const checked = [...document.querySelectorAll('.row-check:checked')];
    if (!checked.length) { alert('Sélectionnez au moins un article.'); return; }
    if (!confirm('Supprimer ' + checked.length + ' article(s) ?')) return;
    checked.forEach(c => {
        const f = document.createElement('form'); f.method='POST'; f.action='/article/'+c.value+'/delete';
        const t = document.createElement('input'); t.type='hidden'; t.name='_token';
        f.appendChild(t); document.body.appendChild(f); f.submit();
    });
}
";
        }
        // line 330
        yield "</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 123
    public function macro_sort_link($label = null, $field = null, $currentSortBy = null, $currentSortDir = null, $routeName = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "currentSortBy" => $currentSortBy,
            "currentSortDir" => $currentSortDir,
            "routeName" => $routeName,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sort_link"));

            // line 124
            yield "    ";
            $context["newDir"] = (((((isset($context["currentSortBy"]) || array_key_exists("currentSortBy", $context) ? $context["currentSortBy"] : (function () { throw new RuntimeError('Variable "currentSortBy" does not exist.', 124, $this->source); })()) == (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 124, $this->source); })())) && ((isset($context["currentSortDir"]) || array_key_exists("currentSortDir", $context) ? $context["currentSortDir"] : (function () { throw new RuntimeError('Variable "currentSortDir" does not exist.', 124, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"));
            // line 125
            yield "    ";
            $context["arrow"] = "";
            // line 126
            yield "    ";
            if (((isset($context["currentSortBy"]) || array_key_exists("currentSortBy", $context) ? $context["currentSortBy"] : (function () { throw new RuntimeError('Variable "currentSortBy" does not exist.', 126, $this->source); })()) == (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()))) {
                // line 127
                yield "        ";
                $context["arrow"] = ((((isset($context["currentSortDir"]) || array_key_exists("currentSortDir", $context) ? $context["currentSortDir"] : (function () { throw new RuntimeError('Variable "currentSortDir" does not exist.', 127, $this->source); })()) == "ASC")) ? (" ▲") : (" ▼"));
                // line 128
                yield "    ";
            }
            // line 129
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 129, $this->source); })()), ["sortBy" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 129, $this->source); })()), "sortDir" => (isset($context["newDir"]) || array_key_exists("newDir", $context) ? $context["newDir"] : (function () { throw new RuntimeError('Variable "newDir" does not exist.', 129, $this->source); })())]), "html", null, true);
            yield "\"
       class=\"";
            // line 130
            yield ((((isset($context["currentSortBy"]) || array_key_exists("currentSortBy", $context) ? $context["currentSortBy"] : (function () { throw new RuntimeError('Variable "currentSortBy" does not exist.', 130, $this->source); })()) == (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 130, $this->source); })()))) ? ("sort-active") : (""));
            yield "\">
        ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 131, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["arrow"]) || array_key_exists("arrow", $context) ? $context["arrow"] : (function () { throw new RuntimeError('Variable "arrow" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/index.html.twig";
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
        return array (  674 => 131,  670 => 130,  665 => 129,  662 => 128,  659 => 127,  656 => 126,  653 => 125,  650 => 124,  631 => 123,  622 => 330,  608 => 318,  606 => 317,  597 => 311,  593 => 310,  589 => 309,  585 => 308,  566 => 295,  562 => 293,  558 => 291,  556 => 290,  549 => 285,  540 => 282,  537 => 281,  535 => 280,  528 => 277,  522 => 275,  515 => 271,  511 => 270,  507 => 269,  502 => 268,  500 => 267,  494 => 264,  490 => 263,  487 => 262,  477 => 261,  473 => 259,  465 => 258,  460 => 256,  457 => 255,  453 => 253,  447 => 251,  445 => 250,  439 => 248,  433 => 246,  431 => 245,  428 => 244,  423 => 243,  414 => 237,  409 => 235,  405 => 234,  401 => 232,  397 => 230,  395 => 229,  383 => 220,  370 => 210,  357 => 200,  345 => 191,  341 => 190,  324 => 175,  317 => 172,  315 => 171,  311 => 169,  305 => 166,  301 => 164,  299 => 163,  296 => 162,  287 => 160,  282 => 159,  273 => 157,  269 => 156,  262 => 151,  258 => 150,  251 => 146,  239 => 136,  237 => 135,  234 => 134,  231 => 122,  222 => 121,  220 => 120,  218 => 119,  216 => 118,  214 => 117,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ mode == 'admin' ? 'Gestion des Articles' : 'Blog' }}{% endblock %}

{% block page_title %}{{ mode == 'admin' ? 'GESTION ARTICLES' : 'BLOG' }}{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }
.sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; letter-spacing: 0.5px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; font-family: 'DM Sans', sans-serif; text-align: center; cursor: pointer; border: none; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-right { display: flex; align-items: center; gap: 16px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    .content { padding: 28px; }

    .stat-row { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 14px; margin-bottom: 20px; }
    .stat-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 14px 16px 10px; display: flex; flex-direction: column; gap: 6px; position: relative; overflow: hidden; }
    .sc-top { display: flex; align-items: center; justify-content: space-between; }
    .sc-label { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
    .sc-icon { width: 30px; height: 30px; border-radius: 8px; display: flex; align-items: center; justify-content: center; }
    .sc-value { font-size: 22px; font-weight: 700; color: #1e293b; line-height: 1; }
    .sc-bottom { display: flex; align-items: center; justify-content: space-between; }
    .sc-badge { font-size: 10px; font-weight: 700; padding: 2px 7px; border-radius: 4px; }
    .badge-up   { background: #dcfce7; color: #15803d; }
    .badge-grey { background: #f1f5f9; color: #64748b; }
    .sc-spark { width: 80px; height: 32px; }

    .action-bar { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; flex-wrap: wrap; }
    .btn-add { display: inline-flex; align-items: center; gap: 7px; background: #22c55e; color: #fff; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700; padding: 9px 18px; border-radius: 7px; text-decoration: none; transition: all 0.2s; }
    .btn-add:hover { background: #16a34a; }
    .btn-export { display: inline-flex; align-items: center; gap: 7px; background: #fff; color: #475569; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 7px; text-decoration: none; border: 1px solid #e2e8f0; transition: all 0.2s; cursor: pointer; }
    .btn-export:hover { background: #f8fafc; }
    .spacer { flex: 1; }
    .search-box { display: flex; align-items: center; gap: 8px; background: #fff; border: 1px solid #e2e8f0; border-radius: 7px; padding: 8px 14px; width: 220px; }
    .search-box input { border: none; outline: none; font-family: 'DM Sans', sans-serif; font-size: 13px; color: #475569; width: 100%; background: transparent; }
    .search-box .search-icon { color: #94a3b8; font-size: 13px; }

    .table-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }
    table { width: 100%; border-collapse: collapse; font-size: 13px; }
    thead tr { background: #1e293b; color: #fff; }
    thead th { padding: 13px 16px; text-align: left; font-weight: 600; font-size: 12px; letter-spacing: 0.3px; }
    thead th a { color: #fff; text-decoration: none; display: inline-flex; align-items: center; gap: 4px; }
    thead th a:hover { color: #22c55e; }
    thead th a.sort-active { color: #22c55e; }
    tbody tr { border-bottom: 1px solid #f1f5f9; transition: background 0.1s; }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: #f8fafc; }
    td { padding: 13px 16px; color: #475569; vertical-align: middle; }
    td.title-cell { font-weight: 600; color: #1e293b; max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

    .thumb { width: 40px; height: 40px; border-radius: 7px; object-fit: cover; border: 1px solid #e2e8f0; }
    .no-image { width: 40px; height: 40px; border-radius: 7px; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-size: 18px; border: 1px solid #e2e8f0; }

    .cat-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; background: #dbeafe; color: #1d4ed8; }
    .status-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .status-publié    { background: #dcfce7; color: #16a34a; }
    .status-brouillon { background: #fef9c3; color: #a16207; }
    .status-archivé   { background: #f1f5f9; color: #64748b; }

    .views-tag { font-size: 12px; font-weight: 600; color: #64748b; }

    .action-btns { display: flex; gap: 6px; }
    .btn-icon { width: 32px; height: 32px; border-radius: 7px; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 13px; text-decoration: none; transition: opacity 0.15s; }
    .btn-icon:hover { opacity: 0.8; }
    .btn-view-ic { background: #0ea5e9; color: #fff; }
    .btn-edit-ic { background: #f59e0b; color: #fff; }
    .btn-del-ic  { background: #ef4444; color: #fff; }

    input[type=\"checkbox\"] { width: 15px; height: 15px; cursor: pointer; accent-color: #22c55e; }

    .bottom-bar { padding: 16px 0 0; display: flex; align-items: center; justify-content: space-between; }
    .btn-delete-all { display: inline-flex; align-items: center; gap: 7px; background: #ef4444; color: #fff; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 7px; border: none; cursor: pointer; }
    .btn-delete-all:hover { background: #dc2626; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    .empty-row td { text-align: center; padding: 60px; color: #94a3b8; font-size: 15px; }
    .excerpt { max-width: 240px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; }

    .user-mode-banner { background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 8px; padding: 10px 16px; font-size: 13px; color: #1d4ed8; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; }
</style>

{% set total       = articles|length %}
{% set published   = articles|filter(a => a.statut == 'publié')|length %}
{% set drafts      = articles|filter(a => a.statut == 'brouillon')|length %}
{% set total_views = 0 %}
{% for a in articles %}{% set total_views = total_views + a.nombreVues %}{% endfor %}

{% macro sort_link(label, field, currentSortBy, currentSortDir, routeName) %}
    {% set newDir = (currentSortBy == field and currentSortDir == 'ASC') ? 'DESC' : 'ASC' %}
    {% set arrow = '' %}
    {% if currentSortBy == field %}
        {% set arrow = currentSortDir == 'ASC' ? ' ▲' : ' ▼' %}
    {% endif %}
    <a href=\"{{ path(routeName, {sortBy: field, sortDir: newDir}) }}\"
       class=\"{{ currentSortBy == field ? 'sort-active' : '' }}\">
        {{ label }}{{ arrow }}
    </a>
{% endmacro %}

{% set indexRoute = (mode == 'admin') ? 'article_index' : 'frontend_blog_index' %}

<div style=\"display:flex; min-height:100vh; width:100vw;\">

   
    <div class=\"main\">

        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span>
                <span class=\"separator\">/</span>
                <span>{{ mode == 'admin' ? 'GESTION BLOG' : 'BLOG PUBLIC' }}</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                {% if mode == 'admin' %}<div class=\"topbar-icon\">⚙</div>{% endif %}
            </div>
        </div>

        <div class=\"content\">

            {% for msg in app.flashes('success') %}
                <div class=\"flash flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash flash-error\">❌ {{ msg }}</div>
            {% endfor %}

            {% if mode == 'user' %}
                <div class=\"user-mode-banner\">
                    🌐 <strong>Mode lecture</strong> — Vue publique du blog. Les actions d'administration sont désactivées.
                    &nbsp;<a href=\"{{ path('article_index') }}\" style=\"color:#1d4ed8; font-weight:600;\">Accéder à l'admin →</a>
                </div>
            {% endif %}

            <div class=\"action-bar\">
                {% if mode == 'admin' %}
                    <a href=\"{{ path('article_new') }}\" class=\"btn-add\">＋ ADD NEW</a>
                    <button class=\"btn-export\" onclick=\"window.print()\">⬆ EXPORT PDF</button>
                {% endif %}
                <div class=\"spacer\"></div>
                <div class=\"search-box\">
                    <span class=\"search-icon\">🔍</span>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" onkeyup=\"filterTable()\">
                </div>
            </div>

            <div class=\"stat-row\">
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Total articles</span>
                        <div class=\"sc-icon\" style=\"background:#E6F1FB;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><rect x=\"2\" y=\"2\" width=\"12\" height=\"12\" rx=\"2\" stroke=\"#378ADD\" stroke-width=\"1.5\"/><path d=\"M5 6h6M5 9h4\" stroke=\"#378ADD\" stroke-width=\"1.3\" stroke-linecap=\"round\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">{{ total }}</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">↑ {{ total }} total</span><canvas class=\"sc-spark\" id=\"sk1\"></canvas></div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Publiés</span>
                        <div class=\"sc-icon\" style=\"background:#EAF3DE;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><circle cx=\"8\" cy=\"8\" r=\"6\" stroke=\"#639922\" stroke-width=\"1.5\"/><path d=\"M5 8l2 2 4-4\" stroke=\"#639922\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">{{ published }}</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">actifs</span><canvas class=\"sc-spark\" id=\"sk2\"></canvas></div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Brouillons</span>
                        <div class=\"sc-icon\" style=\"background:#FEF9C3;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><path d=\"M3 12L10 5l2 2-7 7H3v-2z\" stroke=\"#BA7517\" stroke-width=\"1.3\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">{{ drafts }}</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-grey\">en attente</span><canvas class=\"sc-spark\" id=\"sk3\"></canvas></div>
                </div>
                <div class=\"stat-card\">
                    <div class=\"sc-top\">
                        <span class=\"sc-label\">Total vues</span>
                        <div class=\"sc-icon\" style=\"background:#EEEDFE;\">
                            <svg width=\"15\" height=\"15\" viewBox=\"0 0 16 16\" fill=\"none\"><ellipse cx=\"8\" cy=\"8\" rx=\"7\" ry=\"4.5\" stroke=\"#534AB7\" stroke-width=\"1.5\"/><circle cx=\"8\" cy=\"8\" r=\"2\" stroke=\"#534AB7\" stroke-width=\"1.3\"/></svg>
                        </div>
                    </div>
                    <div class=\"sc-value\">{{ total_views }}</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">↑ cumulées</span><canvas class=\"sc-spark\" id=\"sk4\"></canvas></div>
                </div>
            </div>

            <div class=\"table-card\">
                <table id=\"articleTable\">
                    <thead>
                        <tr>
                            {% if mode == 'admin' %}
                                <th style=\"width:40px;\"><input type=\"checkbox\" id=\"checkAll\" onchange=\"toggleAll(this)\"></th>
                            {% endif %}
                            <th>ID</th>
                            <th>Image</th>
                            <th>{{ _self.sort_link('Titre', 'titre', sortBy, sortDir, indexRoute) }}</th>
                            <th>{{ _self.sort_link('Catégorie', 'categorie', sortBy, sortDir, indexRoute) }}</th>
                            <th>Statut</th>
                            <th>{{ _self.sort_link('Vues', 'nombre_vues', sortBy, sortDir, indexRoute) }}</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for article in articles %}
                        <tr>
                            {% if mode == 'admin' %}
                                <td><input type=\"checkbox\" class=\"row-check\" value=\"{{ article.idArticle }}\"></td>
                            {% endif %}
                            <td>{{ article.idArticle }}</td>
                            <td>
                                {% if article.imagePrincipale %}
                                    <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" class=\"thumb\" alt=\"\">
                                {% else %}
                                    <div class=\"no-image\">📰</div>
                                {% endif %}
                            </td>
                            <td class=\"title-cell\">{{ article.titre }}</td>
                            <td>
                                {% if article.categorie %}<span class=\"cat-badge\">{{ article.categorie }}</span>{% else %}—{% endif %}
                            </td>
                            <td>
                                {% if article.statut %}<span class=\"status-badge status-{{ article.statut }}\">{{ article.statut|capitalize }}</span>{% else %}—{% endif %}
                            </td>
                            <td><span class=\"views-tag\">👁 {{ article.nombreVues }}</span></td>
                            <td><span class=\"excerpt\">{{ article.contenu|slice(0, 70) ~ '…' }}</span></td>
                            <td>
                                <div class=\"action-btns\">
                                    {% if mode == 'admin' %}
                                        <a href=\"{{ path('article_show', {'id': article.idArticle}) }}\" class=\"btn-icon btn-view-ic\" title=\"Voir\">👁</a>
                                        <a href=\"{{ path('article_edit', {'id': article.idArticle}) }}\" class=\"btn-icon btn-edit-ic\" title=\"Modifier\">✏</a>
                                        <form method=\"post\" action=\"{{ path('article_delete', {'id': article.idArticle}) }}\" style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.idArticle) }}\">
                                            <button class=\"btn-icon btn-del-ic\" title=\"Supprimer\" onclick=\"return confirm('Supprimer cet article ?')\">🗑</button>
                                        </form>
                                    {% else %}
                                        <a href=\"{{ path('frontend_blog_show', {'id': article.idArticle}) }}\" class=\"btn-icon btn-view-ic\" title=\"Lire\">👁</a>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                        {% else %}
                        <tr class=\"empty-row\">
                            <td colspan=\"{{ mode == 'admin' ? 9 : 8 }}\">📭 Aucun article trouvé</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <div class=\"bottom-bar\">
                {% if mode == 'admin' %}
                    <button class=\"btn-delete-all\" onclick=\"deleteSelected()\">🗑 DELETE SELECTED RECORDS</button>
                {% else %}
                    <span></span>
                {% endif %}
                <span style=\"font-size:13px; color:#94a3b8;\">Résultats : {{ articles|length }} article{{ articles|length != 1 ? 's' : '' }}</span>
            </div>

        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js\"></script>
<script>
function sparkline(id, data, color) {
    const c = document.getElementById(id); if (!c) return;
    new Chart(c, { type:'line', data:{ labels:data.map((_,i)=>i), datasets:[{data, borderColor:color, borderWidth:1.5, pointRadius:0, fill:true, backgroundColor:color+'22', tension:0.4}] }, options:{responsive:false, animation:false, plugins:{legend:{display:false},tooltip:{enabled:false}}, scales:{x:{display:false},y:{display:false}}} });
}
sparkline('sk1',[2,4,3,6,5,8,{{ total }}],'#378ADD');
sparkline('sk2',[1,2,2,4,3,5,{{ published }}],'#639922');
sparkline('sk3',[1,1,2,1,2,1,{{ drafts }}],'#BA7517');
sparkline('sk4',[100,200,150,300,250,400,{{ total_views }}],'#534AB7');

function filterTable() {
    const q = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#articleTable tbody tr:not(.empty-row)').forEach(r => { r.style.display = r.textContent.toLowerCase().includes(q) ? '' : 'none'; });
}
{% if mode == 'admin' %}
function toggleAll(cb) { document.querySelectorAll('.row-check').forEach(c => c.checked = cb.checked); }
function deleteSelected() {
    const checked = [...document.querySelectorAll('.row-check:checked')];
    if (!checked.length) { alert('Sélectionnez au moins un article.'); return; }
    if (!confirm('Supprimer ' + checked.length + ' article(s) ?')) return;
    checked.forEach(c => {
        const f = document.createElement('form'); f.method='POST'; f.action='/article/'+c.value+'/delete';
        const t = document.createElement('input'); t.type='hidden'; t.name='_token';
        f.appendChild(t); document.body.appendChild(f); f.submit();
    });
}
{% endif %}
</script>
{% endblock %}", "article/index.html.twig", "C:\\Users\\MSI\\Desktop\\payment +qrcode\\bizcore\\templates\\article\\index.html.twig");
    }
}
