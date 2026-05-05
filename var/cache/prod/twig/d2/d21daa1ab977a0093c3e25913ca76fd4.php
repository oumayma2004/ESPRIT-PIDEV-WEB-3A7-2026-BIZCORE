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
class __TwigTemplate_6414e7c5e544334f79218daa9eb8aa16 extends Template
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
        yield (((($context["mode"] ?? null) == "admin")) ? ("Gestion des Articles") : ("Blog"));
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (((($context["mode"] ?? null) == "admin")) ? ("GESTION ARTICLES") : ("BLOG"));
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
        $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["articles"] ?? null));
        // line 118
        $context["published"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["articles"] ?? null), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "statut", [], "any", false, false, false, 118) == "publié"); }));
        // line 119
        $context["drafts"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["articles"] ?? null), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "statut", [], "any", false, false, false, 119) == "brouillon"); }));
        // line 120
        $context["total_views"] = 0;
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            $context["total_views"] = (($context["total_views"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nombreVues", [], "any", false, false, false, 121));
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
        $context["indexRoute"] = (((($context["mode"] ?? null) == "admin")) ? ("article_index") : ("frontend_blog_index"));
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
        yield (((($context["mode"] ?? null) == "admin")) ? ("GESTION BLOG") : ("BLOG PUBLIC"));
        yield "</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                ";
        // line 150
        if ((($context["mode"] ?? null) == "admin")) {
            yield "<div class=\"topbar-icon\">⚙</div>";
        }
        // line 151
        yield "            </div>
        </div>

        <div class=\"content\">

            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 156));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 159));
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
        if ((($context["mode"] ?? null) == "user")) {
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
        if ((($context["mode"] ?? null) == "admin")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"sc-bottom\"><span class=\"sc-badge badge-up\">↑ ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["published"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["drafts"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_views"] ?? null), "html", null, true);
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
        if ((($context["mode"] ?? null) == "admin")) {
            // line 230
            yield "                                <th style=\"width:40px;\"><input type=\"checkbox\" id=\"checkAll\" onchange=\"toggleAll(this)\"></th>
                            ";
        }
        // line 232
        yield "                            <th>ID</th>
                            <th>Image</th>
                            <th>";
        // line 234
        yield $this->getTemplateForMacro("macro_sort_link", $context, 234, $this->getSourceContext())->macro_sort_link(...["Titre", "titre", ($context["sortBy"] ?? null), ($context["sortDir"] ?? null), ($context["indexRoute"] ?? null)]);
        yield "</th>
                            <th>";
        // line 235
        yield $this->getTemplateForMacro("macro_sort_link", $context, 235, $this->getSourceContext())->macro_sort_link(...["Catégorie", "categorie", ($context["sortBy"] ?? null), ($context["sortDir"] ?? null), ($context["indexRoute"] ?? null)]);
        yield "</th>
                            <th>Statut</th>
                            <th>";
        // line 237
        yield $this->getTemplateForMacro("macro_sort_link", $context, 237, $this->getSourceContext())->macro_sort_link(...["Vues", "nombre_vues", ($context["sortBy"] ?? null), ($context["sortDir"] ?? null), ($context["indexRoute"] ?? null)]);
        yield "</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 244
            yield "                        <tr>
                            ";
            // line 245
            if ((($context["mode"] ?? null) == "admin")) {
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
            if ((($context["mode"] ?? null) == "admin")) {
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
            yield (((($context["mode"] ?? null) == "admin")) ? (9) : (8));
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
        if ((($context["mode"] ?? null) == "admin")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["articles"] ?? null)), "html", null, true);
        yield " article";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["articles"] ?? null)) != 1)) ? ("s") : (""));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "],'#378ADD');
sparkline('sk2',[1,2,2,4,3,5,";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["published"] ?? null), "html", null, true);
        yield "],'#639922');
sparkline('sk3',[1,1,2,1,2,1,";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["drafts"] ?? null), "html", null, true);
        yield "],'#BA7517');
sparkline('sk4',[100,200,150,300,250,400,";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_views"] ?? null), "html", null, true);
        yield "],'#534AB7');

function filterTable() {
    const q = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#articleTable tbody tr:not(.empty-row)').forEach(r => { r.style.display = r.textContent.toLowerCase().includes(q) ? '' : 'none'; });
}
";
        // line 317
        if ((($context["mode"] ?? null) == "admin")) {
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
            // line 124
            yield "    ";
            $context["newDir"] = ((((($context["currentSortBy"] ?? null) == ($context["field"] ?? null)) && (($context["currentSortDir"] ?? null) == "ASC"))) ? ("DESC") : ("ASC"));
            // line 125
            yield "    ";
            $context["arrow"] = "";
            // line 126
            yield "    ";
            if ((($context["currentSortBy"] ?? null) == ($context["field"] ?? null))) {
                // line 127
                yield "        ";
                $context["arrow"] = (((($context["currentSortDir"] ?? null) == "ASC")) ? (" ▲") : (" ▼"));
                // line 128
                yield "    ";
            }
            // line 129
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["routeName"] ?? null), ["sortBy" => ($context["field"] ?? null), "sortDir" => ($context["newDir"] ?? null)]), "html", null, true);
            yield "\"
       class=\"";
            // line 130
            yield (((($context["currentSortBy"] ?? null) == ($context["field"] ?? null))) ? ("sort-active") : (""));
            yield "\">
        ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["arrow"] ?? null), "html", null, true);
            yield "
    </a>
";
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
        return array (  647 => 131,  643 => 130,  638 => 129,  635 => 128,  632 => 127,  629 => 126,  626 => 125,  623 => 124,  607 => 123,  601 => 330,  587 => 318,  585 => 317,  576 => 311,  572 => 310,  568 => 309,  564 => 308,  545 => 295,  541 => 293,  537 => 291,  535 => 290,  528 => 285,  519 => 282,  516 => 281,  514 => 280,  507 => 277,  501 => 275,  494 => 271,  490 => 270,  486 => 269,  481 => 268,  479 => 267,  473 => 264,  469 => 263,  466 => 262,  456 => 261,  452 => 259,  444 => 258,  439 => 256,  436 => 255,  432 => 253,  426 => 251,  424 => 250,  418 => 248,  412 => 246,  410 => 245,  407 => 244,  402 => 243,  393 => 237,  388 => 235,  384 => 234,  380 => 232,  376 => 230,  374 => 229,  362 => 220,  349 => 210,  336 => 200,  324 => 191,  320 => 190,  303 => 175,  296 => 172,  294 => 171,  290 => 169,  284 => 166,  280 => 164,  278 => 163,  275 => 162,  266 => 160,  261 => 159,  252 => 157,  248 => 156,  241 => 151,  237 => 150,  230 => 146,  218 => 136,  216 => 135,  213 => 134,  210 => 122,  201 => 121,  199 => 120,  197 => 119,  195 => 118,  193 => 117,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "article/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\article\\index.html.twig");
    }
}
