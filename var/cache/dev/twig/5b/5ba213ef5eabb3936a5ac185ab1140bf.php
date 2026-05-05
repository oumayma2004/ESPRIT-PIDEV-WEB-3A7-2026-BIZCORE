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

/* admin/product_dashboard.html.twig */
class __TwigTemplate_f0b6f5fe10cbb00c27ee9185cce0ad8c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_dashboard.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Admin — Gestion Produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    ";
        // line 7
        yield "    <div class=\"bc-main\">

        ";
        // line 10
        yield "        <header class=\"bc-topbar\">
            <span class=\"bc-topbar-title\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("breadcrumbLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLabel"]) || array_key_exists("breadcrumbLabel", $context) ? $context["breadcrumbLabel"] : (function () { throw new RuntimeError('Variable "breadcrumbLabel" does not exist.', 11, $this->source); })()), "GESTION PRODUITS")) : ("GESTION PRODUITS")), "html", null, true);
        yield "</span>

            <div class=\"bc-topbar-stats\">
                <div class=\"bc-stat-item blue\">
                    <div class=\"val\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("totalProdLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalProdLabel"]) || array_key_exists("totalProdLabel", $context) ? $context["totalProdLabel"] : (function () { throw new RuntimeError('Variable "totalProdLabel" does not exist.', 15, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()), "total", [], "any", false, false, false, 15), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()), "total", [], "any", false, false, false, 15), 0)) : (0)))), "html", null, true);
        yield "</div>
                    <div class=\"lbl\">Produits</div>
                </div>
                <div class=\"bc-topbar-sep\"></div>
                <div class=\"bc-stat-item teal\">
                    <div class=\"val\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("totalStockLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalStockLabel"]) || array_key_exists("totalStockLabel", $context) ? $context["totalStockLabel"] : (function () { throw new RuntimeError('Variable "totalStockLabel" does not exist.', 20, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "stock", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "stock", [], "any", false, false, false, 20), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "stock", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "stock", [], "any", false, false, false, 20), 0)) : (0)))), "html", null, true);
        yield "</div>
                    <div class=\"lbl\">En Stock</div>
                </div>
                <div class=\"bc-topbar-sep\"></div>
                <div class=\"bc-stat-item orange\">
                    <div class=\"val\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("totalCatLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalCatLabel"]) || array_key_exists("totalCatLabel", $context) ? $context["totalCatLabel"] : (function () { throw new RuntimeError('Variable "totalCatLabel" does not exist.', 25, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "categories", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "categories", [], "any", false, false, false, 25), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "categories", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "categories", [], "any", false, false, false, 25), 0)) : (0)))), "html", null, true);
        yield "</div>
                    <div class=\"lbl\">Catégories</div>
                </div>
            </div>

            <div class=\"bc-topbar-avatar\" title=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("adminNameLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["adminNameLabel"]) || array_key_exists("adminNameLabel", $context) ? $context["adminNameLabel"] : (function () { throw new RuntimeError('Variable "adminNameLabel" does not exist.', 30, $this->source); })()), "Admin")) : ("Admin")), "html", null, true);
        yield "\">
                ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("profileInitials", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["profileInitials"]) || array_key_exists("profileInitials", $context) ? $context["profileInitials"] : (function () { throw new RuntimeError('Variable "profileInitials" does not exist.', 31, $this->source); })()), "A")) : ("A")), "html", null, true);
        yield "
            </div>
        </header>

        ";
        // line 36
        yield "        <div class=\"bc-content\">

            ";
        // line 39
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["success"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 40
            yield "                <div class=\"alert alert-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["error"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 43
            yield "                <div class=\"alert alert-danger\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "
            ";
        // line 47
        yield "            <div class=\"d-flex align-center justify-between mb-16\" style=\"flex-wrap:wrap;gap:12px;\">
                <div class=\"d-flex gap-8\" style=\"flex-wrap:wrap;\">
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add");
        yield "\" class=\"btn btn-primary\">➕ ADD NEW</a>
                    <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_export_pdf");
        yield "\" class=\"btn btn-export\">📤 EXPORT PDF</a>
                </div>

                <div class=\"d-flex align-center gap-12\" style=\"flex-wrap:wrap;\">
                    ";
        // line 55
        yield "                    <div class=\"bc-search-box\">
                        <span class=\"search-icon\">🔍</span>
                        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par nom, catégorie, statut...\" oninput=\"filterTable()\">
                    </div>
                    ";
        // line 60
        yield "                    <select class=\"form-control\" id=\"sortSelect\" onchange=\"sortTable()\" style=\"width:195px;\">
                        <option value=\"\">-- Trier Produits --</option>
                        <option value=\"nom-asc\">Nom A→Z</option>
                        <option value=\"nom-desc\">Nom Z→A</option>
                        <option value=\"prix-asc\">Prix ↑</option>
                        <option value=\"prix-desc\">Prix ↓</option>
                        <option value=\"stock-desc\">Stock ↓</option>
                        <option value=\"stock-asc\">Stock ↑</option>
                        <option value=\"cat-asc\">Catégorie A→Z</option>
                        <option value=\"cat-desc\">Catégorie Z→A</option>
                        <option value=\"statut-asc\">Statut A→Z</option>
                        <option value=\"statut-desc\">Statut Z→A</option>
                    </select>
                    ";
        // line 74
        yield "                    <button class=\"btn btn-export\" id=\"btnKeywords\" title=\"Générer des mots-clés IA\" style=\"padding:10px 16px;\">
                        🤖 AI KEYWORDS
                    </button>
                    ";
        // line 78
        yield "                    <button class=\"btn-icon\" id=\"btnStats\" onclick=\"toggleStatsPanel()\" title=\"Statistiques\" style=\"font-size:20px;padding:8px;\">📊</button>
                </div>
            </div>

            ";
        // line 83
        yield "            <div id=\"statsPanel\" style=\"display:none;margin-bottom:16px;\">
                <div class=\"bc-card\" style=\"padding:18px 20px;\">
                    <div style=\"display:flex;align-items:center;justify-content:space-between;margin-bottom:14px;\">
                        <div style=\"font-size:14px;font-weight:700;color:var(--bc-text-dark);\">📊 Statistiques Produits</div>
                        <button onclick=\"toggleStatsPanel()\" style=\"background:none;border:none;cursor:pointer;color:var(--bc-text-light);font-size:18px;line-height:1;\">×</button>
                    </div>

                    ";
        // line 91
        yield "                    <div id=\"statsKpi\" style=\"display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:16px;\">
                        <div class=\"stats-kpi-card kpi-blue\">
                            <div class=\"kpi-val\" id=\"kpiTotal\">—</div>
                            <div class=\"kpi-lbl\">Total produits</div>
                        </div>
                        <div class=\"stats-kpi-card kpi-teal\">
                            <div class=\"kpi-val\" id=\"kpiStock\">—</div>
                            <div class=\"kpi-lbl\">En stock</div>
                        </div>
                        <div class=\"stats-kpi-card kpi-orange\">
                            <div class=\"kpi-val\" id=\"kpiCats\">—</div>
                            <div class=\"kpi-lbl\">Catégories</div>
                        </div>
                    </div>

                    ";
        // line 107
        yield "                    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:16px;align-items:center;\">
                        <div style=\"text-align:center;\">
                            <div style=\"font-size:11px;font-weight:700;color:var(--bc-text-mid);text-transform:uppercase;letter-spacing:.05em;margin-bottom:6px;\">Par Catégorie</div>
                            <canvas id=\"catChart\" style=\"max-height:160px;\"></canvas>
                        </div>
                        <div style=\"text-align:center;\">
                            <div style=\"font-size:11px;font-weight:700;color:var(--bc-text-mid);text-transform:uppercase;letter-spacing:.05em;margin-bottom:6px;\">Par Statut</div>
                            <canvas id=\"statChart\" style=\"max-height:160px;\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 121
        yield "            <div class=\"bc-card\" style=\"padding:0;overflow:hidden;\">
                <div class=\"bc-table-wrap\">
                    <table class=\"bc-table\" id=\"productsTable\">
                        <thead>
                            <tr>
                                <th><input type=\"checkbox\" id=\"selectAll\" onchange=\"toggleAll(this)\"></th>
                                <th>Image</th>
                                <th>Nom Produit</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id=\"tableBody\">
                            ";
        // line 137
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 137, $this->source); })()))) {
            // line 138
            yield "                            <tr>
                                <td colspan=\"8\">
                                    <div class=\"bc-empty\">
                                        <div class=\"bc-empty-icon\">📦</div>
                                        <h3>Aucun produit</h3>
                                        <p>Commencez par ajouter votre premier produit.</p>
                                        <a href=\"";
            // line 144
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add");
            yield "\" class=\"btn btn-primary\" style=\"margin-top:12px;\">➕ Ajouter un produit</a>
                                    </div>
                                </td>
                            </tr>
                            ";
        } else {
            // line 149
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 149, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 150
                yield "                            <tr data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 150)), "html", null, true);
                yield "\"
                                data-cat=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 151)), "html", null, true);
                yield "\"
                                data-statut=\"";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 152)), "html", null, true);
                yield "\"
                                data-prix=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 153), "html", null, true);
                yield "\"
                                data-stock=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 154), "html", null, true);
                yield "\">
                                <td><input type=\"checkbox\" class=\"row-check\" value=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 155), "html", null, true);
                yield "\" data-token=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 155))), "html", null, true);
                yield "\"></td>
                                <td>
                                    ";
                // line 157
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 158
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 158), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 158), "html", null, true);
                    yield "\" class=\"prod-thumb\">
                                    ";
                } else {
                    // line 160
                    yield "                                        <div class=\"prod-thumb-placeholder\">📦</div>
                                    ";
                }
                // line 162
                yield "                                </td>
                                <td><strong>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 163), "html", null, true);
                yield "</strong></td>
                                <td>
                                    ";
                // line 165
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 166
                    yield "                                        <span class=\"badge badge-info\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 166), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 167
                    yield "—";
                }
                // line 168
                yield "                                </td>
                                <td class=\"text-teal text-bold\">";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 169), "html", null, true);
                yield " €</td>
                                <td>
                                    ";
                // line 171
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 171) > 10)) {
                    // line 172
                    yield "                                        <span style=\"color:var(--bc-green);font-weight:600;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 172), "html", null, true);
                    yield "</span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 173
$context["product"], "stockDisponible", [], "any", false, false, false, 173) > 0)) {
                    // line 174
                    yield "                                        <span style=\"color:var(--bc-orange);font-weight:600;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 174), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 176
                    yield "                                        <span style=\"color:var(--bc-danger);font-weight:600;\">0</span>
                                    ";
                }
                // line 178
                yield "                                </td>
                                <td>
                                    ";
                // line 180
                $context["statut"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 180));
                // line 181
                yield "                                    ";
                if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 181, $this->source); })()) == "disponible")) {
                    // line 182
                    yield "                                        <span class=\"badge badge-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 182), "html", null, true);
                    yield "</span>
                                    ";
                } elseif ((                // line 183
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 183, $this->source); })()) == "rupture")) {
                    // line 184
                    yield "                                        <span class=\"badge badge-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 184), "html", null, true);
                    yield "</span>
                                    ";
                } elseif ((                // line 185
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 185, $this->source); })()) == "en commande")) {
                    // line 186
                    yield "                                        <span class=\"badge badge-info\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 186), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 188
                    yield "                                        <span class=\"badge badge-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 188), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 190
                yield "                                </td>
                                <td>
                                    <div class=\"d-flex gap-8\">
                                        <a href=\"";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 193)]), "html", null, true);
                yield "\"
                                           class=\"btn-icon edit\" title=\"Modifier\">✏️</a>
                                        <button type=\"button\" class=\"btn-icon delete\" title=\"Supprimer\"
                                            onclick=\"openDeleteModal(
                                                '";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 197)]), "html", null, true);
                yield "',
                                                '";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 198))), "html", null, true);
                yield "',
                                                '";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 199), "js"), "html", null, true);
                yield "'
                                            )\">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "                            ";
        }
        // line 206
        yield "                        </tbody>
                    </table>
                </div>

                ";
        // line 211
        yield "                <div class=\"d-flex align-center justify-between\" style=\"padding:14px 20px;border-top:1px solid var(--bc-border);flex-wrap:wrap;gap:10px;\">
                    <button class=\"btn btn-danger btn-sm\" id=\"btnDeleteSelected\" onclick=\"deleteSelected()\" style=\"display:none;\">
                        🗑 SUPPRIMER LA SÉLECTION
                    </button>
                    <span id=\"selectedCount\" style=\"font-size:12px;color:var(--bc-text-light);\"></span>
                    <span id=\"resultsLabel\" style=\"font-size:12px;color:var(--bc-text-light);\">
                        ";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 217, $this->source); })())), "html", null, true);
        yield " produit(s) au total
                    </span>
                </div>
            </div>

        </div>";
        // line 223
        yield "    </div>";
        // line 224
        yield "

";
        // line 227
        yield "<div id=\"deleteModal\" class=\"del-modal-overlay\" style=\"display:none;\" onclick=\"if(event.target===this)closeDeleteModal()\">
    <div class=\"del-modal\">
        <div class=\"del-modal-icon\">🗑️</div>
        <h3 class=\"del-modal-title\">Confirmer la suppression</h3>
        <p class=\"del-modal-msg\">Voulez-vous vraiment supprimer&nbsp;<strong id=\"delProductName\"></strong>&nbsp;?<br><small>Cette action est irréversible.</small></p>
        <div class=\"del-modal-actions\">
            <button class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">❌ Annuler</button>
            <form id=\"delForm\" method=\"post\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"_token\" id=\"delToken\">
                <button type=\"submit\" class=\"btn btn-danger\">🗑️ Supprimer</button>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 244
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 245
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4/dist/chart.umd.min.js\"></script>
<script>
/* ── Search / Filter ── */
function filterTable() {
    var q = document.getElementById('searchInput').value.toLowerCase().trim();
    var rows = document.querySelectorAll('#tableBody tr[data-name]');
    var visible = 0;
    rows.forEach(function(row) {
        var match = !q
            || row.dataset.name.includes(q)
            || (row.dataset.cat && row.dataset.cat.includes(q))
            || (row.dataset.statut && row.dataset.statut.includes(q));
        row.style.display = match ? '' : 'none';
        if (match) visible++;
    });
    document.getElementById('resultsLabel').textContent = visible + ' produit(s) affiché(s)';
}

/* ── Sort ── */
function sortTable() {
    var val   = document.getElementById('sortSelect').value;
    var tbody = document.getElementById('tableBody');
    var rows  = Array.from(tbody.querySelectorAll('tr[data-name]'));
    rows.sort(function(a, b) {
        switch(val) {
            case 'nom-asc':    return a.dataset.name.localeCompare(b.dataset.name, 'fr');
            case 'nom-desc':   return b.dataset.name.localeCompare(a.dataset.name, 'fr');
            case 'prix-asc':   return parseFloat(a.dataset.prix)  - parseFloat(b.dataset.prix);
            case 'prix-desc':  return parseFloat(b.dataset.prix)  - parseFloat(a.dataset.prix);
            case 'stock-desc': return parseInt(b.dataset.stock)   - parseInt(a.dataset.stock);
            case 'stock-asc':  return parseInt(a.dataset.stock)   - parseInt(b.dataset.stock);
            case 'cat-asc':    return (a.dataset.cat||'').localeCompare(b.dataset.cat||'', 'fr');
            case 'cat-desc':   return (b.dataset.cat||'').localeCompare(a.dataset.cat||'', 'fr');
            case 'statut-asc': return (a.dataset.statut||'').localeCompare(b.dataset.statut||'', 'fr');
            case 'statut-desc':return (b.dataset.statut||'').localeCompare(a.dataset.statut||'', 'fr');
            default:           return 0;
        }
    });
    rows.forEach(function(r) { tbody.appendChild(r); });
}

/* ── Select All ── */
function toggleAll(cb) {
    document.querySelectorAll('.row-check').forEach(function(c) { c.checked = cb.checked; });
    updateDeleteBtn();
}

document.addEventListener('change', function(e) {
    if (e.target && e.target.classList.contains('row-check')) updateDeleteBtn();
});

function updateDeleteBtn() {
    var checked = document.querySelectorAll('.row-check:checked').length;
    var btn = document.getElementById('btnDeleteSelected');
    var cnt = document.getElementById('selectedCount');
    if (btn) btn.style.display = checked > 0 ? 'inline-flex' : 'none';
    if (cnt) cnt.textContent   = checked > 0 ? checked + ' sélectionné(s)' : '';
}

function deleteSelected() {
    var checks = Array.from(document.querySelectorAll('.row-check:checked'));
    if (checks.length === 0) return;

    /* Utiliser la modale pour la suppression en lot */
    openDeleteModal(null, null, checks.length + ' produit(s) sélectionné(s)', checks);
}

/* ── Stats panel ── */
var statsLoaded = false;
var catChartInst = null;
var statChartInst = null;

function toggleStatsPanel() {
    var panel = document.getElementById('statsPanel');
    if (!panel) return;
    var visible = panel.style.display !== 'none';
    panel.style.display = visible ? 'none' : 'block';
    if (!visible && !statsLoaded) {
        loadStats();
        statsLoaded = true;
    }
}

function loadStats() {
    fetch('";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stats");
        yield "')
        .then(function(r) { return r.json(); })
        .then(function(data) {
            /* ── KPI cards ── */
            var kpiTotal = document.getElementById('kpiTotal');
            var kpiStock = document.getElementById('kpiStock');
            var kpiCats  = document.getElementById('kpiCats');
            if (kpiTotal) kpiTotal.textContent = (data.totalProduits != null) ? data.totalProduits : '—';
            if (kpiStock) kpiStock.textContent = (data.totalStock    != null) ? data.totalStock    : '—';
            if (kpiCats)  kpiCats.textContent  = (data.totalCats     != null) ? data.totalCats     : '—';

            /* ── Palette ── */
            var pal = ['#2ECC9B','#3498DB','#E67E22','#E74C3C','#9B59B6','#1ABC9C','#F39C12'];

            /* ── Catégories — doughnut compact ── */
            var catLabels = Object.keys(data.categoryCounts);
            var catVals   = Object.values(data.categoryCounts);
            if (catChartInst) catChartInst.destroy();
            catChartInst = new Chart(document.getElementById('catChart'), {
                type: 'doughnut',
                data: {
                    labels: catLabels,
                    datasets: [{ data: catVals, backgroundColor: pal.slice(0, catLabels.length), borderWidth: 2, borderColor: '#fff' }]
                },
                options: {
                    responsive: true, maintainAspectRatio: true, cutout: '68%',
                    plugins: {
                        legend: { position: 'bottom', labels: { font: { size: 11 }, padding: 8, boxWidth: 12 } },
                        tooltip: { callbacks: { label: function(ctx) {
                            var tot = ctx.dataset.data.reduce(function(a,b){return a+b;},0);
                            var pct = tot > 0 ? Math.round(ctx.parsed/tot*100) : 0;
                            return ' ' + ctx.label + ': ' + ctx.parsed + ' (' + pct + '%)';
                        }}}
                    }
                }
            });

            /* ── Statuts — barres horizontales colorées ── */
            var stLabels = Object.keys(data.statusCounts);
            var stVals   = Object.values(data.statusCounts);
            var stColors = stLabels.map(function(l) {
                switch (l.toLowerCase()) {
                    case 'disponible':  return '#2ECC9B';
                    case 'rupture':     return '#E74C3C';
                    case 'en commande': return '#3498DB';
                    default:            return '#94A3B8';
                }
            });
            if (statChartInst) statChartInst.destroy();
            statChartInst = new Chart(document.getElementById('statChart'), {
                type: 'bar',
                data: {
                    labels: stLabels,
                    datasets: [{ label: 'Produits', data: stVals, backgroundColor: stColors, borderRadius: 6, borderSkipped: false }]
                },
                options: {
                    responsive: true, maintainAspectRatio: true, indexAxis: 'y',
                    plugins: {
                        legend: { display: false },
                        tooltip: { callbacks: { label: function(ctx) { return ' ' + ctx.parsed.x + ' produit(s)'; } } }
                    },
                    scales: {
                        x: { beginAtZero: true, ticks: { stepSize: 1, font: { size: 11 } }, grid: { color: 'rgba(0,0,0,.05)' } },
                        y: { ticks: { font: { size: 11 } }, grid: { display: false } }
                    }
                }
            });
        })
        .catch(function(e) { console.error('Stats error:', e); });
}

/* ── AI Keywords button ── */
document.getElementById('btnKeywords') && document.getElementById('btnKeywords').addEventListener('click', function() {
    alert('🤖 Génération IA des mots-clés en cours... (fonctionnalité à connecter au backend IA)');
});
</script>

<style>
/* ── KPI mini-cards ── */
.stats-kpi-card {
    border-radius: 10px; padding: 12px 16px;
    display: flex; flex-direction: column; gap: 2px;
}
.kpi-val { font-size: 22px; font-weight: 800; line-height: 1.1; }
.kpi-lbl { font-size: 11px; font-weight: 500; opacity: .75; text-transform: uppercase; letter-spacing: .04em; }
.stats-kpi-card.kpi-blue   { background: #EBF5FB; color: #1A5276; }
.stats-kpi-card.kpi-teal   { background: #E8F8F0; color: #1E6B45; }
.stats-kpi-card.kpi-orange { background: #FEF5E7; color: #784212; }
.stats-kpi-card.kpi-blue   .kpi-val { color: #2980B9; }
.stats-kpi-card.kpi-teal   .kpi-val { color: #2ECC9B; }
.stats-kpi-card.kpi-orange .kpi-val { color: #E67E22; }

/* ── Modale Suppression ── */
.del-modal-overlay {
    position: fixed; inset: 0;
    background: rgba(0,0,0,.5);
    z-index: 2000;
    display: flex; align-items: center; justify-content: center;
    animation: fadeInOverlay .2s ease;
}
@keyframes fadeInOverlay { from { opacity:0; } to { opacity:1; } }
.del-modal {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 20px 60px rgba(0,0,0,.25);
    padding: 36px 32px 28px;
    width: 100%; max-width: 420px;
    text-align: center;
    animation: popIn .25s ease;
}
@keyframes popIn {
    from { transform: scale(.88); opacity: 0; }
    to   { transform: scale(1);   opacity: 1; }
}
.del-modal-icon { font-size: 52px; margin-bottom: 14px; }
.del-modal-title { font-size: 20px; font-weight: 800; color: #1E293B; margin-bottom: 10px; }
.del-modal-msg  { font-size: 14px; color: #64748B; line-height: 1.6; margin-bottom: 24px; }
.del-modal-msg strong { color: #1E293B; }
.del-modal-msg small  { font-size: 12px; color: #E74C3C; }
.del-modal-actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
.del-modal-actions .btn { min-width: 130px; justify-content: center; }
</style>

<script>
/* ── Modale suppression individuelle / en lot ── */
var _delBatchChecks = null;

function openDeleteModal(action, token, name, batchChecks) {
    _delBatchChecks = batchChecks || null;
    document.getElementById('delProductName').textContent = name || '';
    var form = document.getElementById('delForm');
    var overlay = document.getElementById('deleteModal');

    if (_delBatchChecks) {
        /* Mode lot : le formulaire sera soumis via JS à la confirmation */
        form.removeAttribute('action');
        document.getElementById('delToken').value = '';
    } else {
        form.action = action;
        document.getElementById('delToken').value = token;
    }

    overlay.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none';
    document.body.style.overflow = '';
    _delBatchChecks = null;
}

/* Surcharger la soumission du formulaire modal pour le mode lot */
document.getElementById('delForm').addEventListener('submit', function(e) {
    if (_delBatchChecks) {
        e.preventDefault();
        closeDeleteModal();
        var promises = _delBatchChecks.map(function(cb) {
            var fd = new FormData();
            fd.append('_token', cb.dataset.token);
            return fetch('/admin/products/' + cb.value + '/delete', { method: 'POST', body: fd });
        });
        Promise.all(promises).then(function() { location.reload(); });
    }
});

/* Fermer avec Echap */
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDeleteModal();
});
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
        return "admin/product_dashboard.html.twig";
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
        return array (  630 => 330,  542 => 245,  529 => 244,  503 => 227,  499 => 224,  497 => 223,  489 => 217,  481 => 211,  475 => 206,  472 => 205,  460 => 199,  456 => 198,  452 => 197,  445 => 193,  440 => 190,  434 => 188,  428 => 186,  426 => 185,  421 => 184,  419 => 183,  414 => 182,  411 => 181,  409 => 180,  405 => 178,  401 => 176,  395 => 174,  393 => 173,  388 => 172,  386 => 171,  381 => 169,  378 => 168,  375 => 167,  369 => 166,  367 => 165,  362 => 163,  359 => 162,  355 => 160,  347 => 158,  345 => 157,  338 => 155,  334 => 154,  330 => 153,  326 => 152,  322 => 151,  317 => 150,  312 => 149,  304 => 144,  296 => 138,  294 => 137,  276 => 121,  261 => 107,  244 => 91,  235 => 83,  229 => 78,  224 => 74,  209 => 60,  203 => 55,  196 => 50,  192 => 49,  188 => 47,  185 => 45,  176 => 43,  171 => 42,  162 => 40,  157 => 39,  153 => 36,  146 => 31,  142 => 30,  134 => 25,  126 => 20,  118 => 15,  111 => 11,  108 => 10,  104 => 7,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Admin — Gestion Produits{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    {# ══════════════════ MAIN ══════════════════ #}
    <div class=\"bc-main\">

        {# ── TOP BAR ── #}
        <header class=\"bc-topbar\">
            <span class=\"bc-topbar-title\">{{ breadcrumbLabel|default('GESTION PRODUITS') }}</span>

            <div class=\"bc-topbar-stats\">
                <div class=\"bc-stat-item blue\">
                    <div class=\"val\">{{ totalProdLabel|default(stats.total|default(0)) }}</div>
                    <div class=\"lbl\">Produits</div>
                </div>
                <div class=\"bc-topbar-sep\"></div>
                <div class=\"bc-stat-item teal\">
                    <div class=\"val\">{{ totalStockLabel|default(stats.stock|default(0)) }}</div>
                    <div class=\"lbl\">En Stock</div>
                </div>
                <div class=\"bc-topbar-sep\"></div>
                <div class=\"bc-stat-item orange\">
                    <div class=\"val\">{{ totalCatLabel|default(stats.categories|default(0)) }}</div>
                    <div class=\"lbl\">Catégories</div>
                </div>
            </div>

            <div class=\"bc-topbar-avatar\" title=\"{{ adminNameLabel|default('Admin') }}\">
                {{ profileInitials|default('A') }}
            </div>
        </header>

        {# ── CONTENT ── #}
        <div class=\"bc-content\">

            {# Flash #}
            {% for msg in app.flashes('success') %}
                <div class=\"alert alert-success\">✅ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"alert alert-danger\">⚠ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}

            {# ── ACTION BAR ── #}
            <div class=\"d-flex align-center justify-between mb-16\" style=\"flex-wrap:wrap;gap:12px;\">
                <div class=\"d-flex gap-8\" style=\"flex-wrap:wrap;\">
                    <a href=\"{{ path('product_add') }}\" class=\"btn btn-primary\">➕ ADD NEW</a>
                    <a href=\"{{ path('admin_export_pdf') }}\" class=\"btn btn-export\">📤 EXPORT PDF</a>
                </div>

                <div class=\"d-flex align-center gap-12\" style=\"flex-wrap:wrap;\">
                    {# Search #}
                    <div class=\"bc-search-box\">
                        <span class=\"search-icon\">🔍</span>
                        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par nom, catégorie, statut...\" oninput=\"filterTable()\">
                    </div>
                    {# Sort #}
                    <select class=\"form-control\" id=\"sortSelect\" onchange=\"sortTable()\" style=\"width:195px;\">
                        <option value=\"\">-- Trier Produits --</option>
                        <option value=\"nom-asc\">Nom A→Z</option>
                        <option value=\"nom-desc\">Nom Z→A</option>
                        <option value=\"prix-asc\">Prix ↑</option>
                        <option value=\"prix-desc\">Prix ↓</option>
                        <option value=\"stock-desc\">Stock ↓</option>
                        <option value=\"stock-asc\">Stock ↑</option>
                        <option value=\"cat-asc\">Catégorie A→Z</option>
                        <option value=\"cat-desc\">Catégorie Z→A</option>
                        <option value=\"statut-asc\">Statut A→Z</option>
                        <option value=\"statut-desc\">Statut Z→A</option>
                    </select>
                    {# AI Keywords btn #}
                    <button class=\"btn btn-export\" id=\"btnKeywords\" title=\"Générer des mots-clés IA\" style=\"padding:10px 16px;\">
                        🤖 AI KEYWORDS
                    </button>
                    {# Stats button #}
                    <button class=\"btn-icon\" id=\"btnStats\" onclick=\"toggleStatsPanel()\" title=\"Statistiques\" style=\"font-size:20px;padding:8px;\">📊</button>
                </div>
            </div>

            {# ── STATS PANEL ── #}
            <div id=\"statsPanel\" style=\"display:none;margin-bottom:16px;\">
                <div class=\"bc-card\" style=\"padding:18px 20px;\">
                    <div style=\"display:flex;align-items:center;justify-content:space-between;margin-bottom:14px;\">
                        <div style=\"font-size:14px;font-weight:700;color:var(--bc-text-dark);\">📊 Statistiques Produits</div>
                        <button onclick=\"toggleStatsPanel()\" style=\"background:none;border:none;cursor:pointer;color:var(--bc-text-light);font-size:18px;line-height:1;\">×</button>
                    </div>

                    {# KPI mini-cards #}
                    <div id=\"statsKpi\" style=\"display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:16px;\">
                        <div class=\"stats-kpi-card kpi-blue\">
                            <div class=\"kpi-val\" id=\"kpiTotal\">—</div>
                            <div class=\"kpi-lbl\">Total produits</div>
                        </div>
                        <div class=\"stats-kpi-card kpi-teal\">
                            <div class=\"kpi-val\" id=\"kpiStock\">—</div>
                            <div class=\"kpi-lbl\">En stock</div>
                        </div>
                        <div class=\"stats-kpi-card kpi-orange\">
                            <div class=\"kpi-val\" id=\"kpiCats\">—</div>
                            <div class=\"kpi-lbl\">Catégories</div>
                        </div>
                    </div>

                    {# Charts row — compact #}
                    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:16px;align-items:center;\">
                        <div style=\"text-align:center;\">
                            <div style=\"font-size:11px;font-weight:700;color:var(--bc-text-mid);text-transform:uppercase;letter-spacing:.05em;margin-bottom:6px;\">Par Catégorie</div>
                            <canvas id=\"catChart\" style=\"max-height:160px;\"></canvas>
                        </div>
                        <div style=\"text-align:center;\">
                            <div style=\"font-size:11px;font-weight:700;color:var(--bc-text-mid);text-transform:uppercase;letter-spacing:.05em;margin-bottom:6px;\">Par Statut</div>
                            <canvas id=\"statChart\" style=\"max-height:160px;\"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {# ── TABLE CARD ── #}
            <div class=\"bc-card\" style=\"padding:0;overflow:hidden;\">
                <div class=\"bc-table-wrap\">
                    <table class=\"bc-table\" id=\"productsTable\">
                        <thead>
                            <tr>
                                <th><input type=\"checkbox\" id=\"selectAll\" onchange=\"toggleAll(this)\"></th>
                                <th>Image</th>
                                <th>Nom Produit</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id=\"tableBody\">
                            {% if products is empty %}
                            <tr>
                                <td colspan=\"8\">
                                    <div class=\"bc-empty\">
                                        <div class=\"bc-empty-icon\">📦</div>
                                        <h3>Aucun produit</h3>
                                        <p>Commencez par ajouter votre premier produit.</p>
                                        <a href=\"{{ path('product_add') }}\" class=\"btn btn-primary\" style=\"margin-top:12px;\">➕ Ajouter un produit</a>
                                    </div>
                                </td>
                            </tr>
                            {% else %}
                            {% for product in products %}
                            <tr data-name=\"{{ product.nomProduit|lower }}\"
                                data-cat=\"{{ product.categorie|lower }}\"
                                data-statut=\"{{ product.statut|lower }}\"
                                data-prix=\"{{ product.prix }}\"
                                data-stock=\"{{ product.stockDisponible }}\">
                                <td><input type=\"checkbox\" class=\"row-check\" value=\"{{ product.idProduit }}\" data-token=\"{{ csrf_token('delete_' ~ product.idProduit) }}\"></td>
                                <td>
                                    {% if product.imageUrl %}
                                        <img src=\"{{ product.imageUrl }}\" alt=\"{{ product.nomProduit }}\" class=\"prod-thumb\">
                                    {% else %}
                                        <div class=\"prod-thumb-placeholder\">📦</div>
                                    {% endif %}
                                </td>
                                <td><strong>{{ product.nomProduit }}</strong></td>
                                <td>
                                    {% if product.categorie %}
                                        <span class=\"badge badge-info\">{{ product.categorie }}</span>
                                    {% else %}—{% endif %}
                                </td>
                                <td class=\"text-teal text-bold\">{{ product.prix }} €</td>
                                <td>
                                    {% if product.stockDisponible > 10 %}
                                        <span style=\"color:var(--bc-green);font-weight:600;\">{{ product.stockDisponible }}</span>
                                    {% elseif product.stockDisponible > 0 %}
                                        <span style=\"color:var(--bc-orange);font-weight:600;\">{{ product.stockDisponible }}</span>
                                    {% else %}
                                        <span style=\"color:var(--bc-danger);font-weight:600;\">0</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% set statut = product.statut|lower %}
                                    {% if statut == 'disponible' %}
                                        <span class=\"badge badge-success\">{{ product.statut }}</span>
                                    {% elseif statut == 'rupture' %}
                                        <span class=\"badge badge-danger\">{{ product.statut }}</span>
                                    {% elseif statut == 'en commande' %}
                                        <span class=\"badge badge-info\">{{ product.statut }}</span>
                                    {% else %}
                                        <span class=\"badge badge-muted\">{{ product.statut }}</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"d-flex gap-8\">
                                        <a href=\"{{ path('product_edit', {id: product.idProduit}) }}\"
                                           class=\"btn-icon edit\" title=\"Modifier\">✏️</a>
                                        <button type=\"button\" class=\"btn-icon delete\" title=\"Supprimer\"
                                            onclick=\"openDeleteModal(
                                                '{{ path('product_delete', {id: product.idProduit}) }}',
                                                '{{ csrf_token('delete_' ~ product.idProduit) }}',
                                                '{{ product.nomProduit|e('js') }}'
                                            )\">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}
                            {% endif %}
                        </tbody>
                    </table>
                </div>

                {# ── BOTTOM BAR ── #}
                <div class=\"d-flex align-center justify-between\" style=\"padding:14px 20px;border-top:1px solid var(--bc-border);flex-wrap:wrap;gap:10px;\">
                    <button class=\"btn btn-danger btn-sm\" id=\"btnDeleteSelected\" onclick=\"deleteSelected()\" style=\"display:none;\">
                        🗑 SUPPRIMER LA SÉLECTION
                    </button>
                    <span id=\"selectedCount\" style=\"font-size:12px;color:var(--bc-text-light);\"></span>
                    <span id=\"resultsLabel\" style=\"font-size:12px;color:var(--bc-text-light);\">
                        {{ products|length }} produit(s) au total
                    </span>
                </div>
            </div>

        </div>{# /bc-content #}
    </div>{# /bc-main #}


{# ── MODALE CONFIRMATION SUPPRESSION ── #}
<div id=\"deleteModal\" class=\"del-modal-overlay\" style=\"display:none;\" onclick=\"if(event.target===this)closeDeleteModal()\">
    <div class=\"del-modal\">
        <div class=\"del-modal-icon\">🗑️</div>
        <h3 class=\"del-modal-title\">Confirmer la suppression</h3>
        <p class=\"del-modal-msg\">Voulez-vous vraiment supprimer&nbsp;<strong id=\"delProductName\"></strong>&nbsp;?<br><small>Cette action est irréversible.</small></p>
        <div class=\"del-modal-actions\">
            <button class=\"btn btn-secondary\" onclick=\"closeDeleteModal()\">❌ Annuler</button>
            <form id=\"delForm\" method=\"post\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"_token\" id=\"delToken\">
                <button type=\"submit\" class=\"btn btn-danger\">🗑️ Supprimer</button>
            </form>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4/dist/chart.umd.min.js\"></script>
<script>
/* ── Search / Filter ── */
function filterTable() {
    var q = document.getElementById('searchInput').value.toLowerCase().trim();
    var rows = document.querySelectorAll('#tableBody tr[data-name]');
    var visible = 0;
    rows.forEach(function(row) {
        var match = !q
            || row.dataset.name.includes(q)
            || (row.dataset.cat && row.dataset.cat.includes(q))
            || (row.dataset.statut && row.dataset.statut.includes(q));
        row.style.display = match ? '' : 'none';
        if (match) visible++;
    });
    document.getElementById('resultsLabel').textContent = visible + ' produit(s) affiché(s)';
}

/* ── Sort ── */
function sortTable() {
    var val   = document.getElementById('sortSelect').value;
    var tbody = document.getElementById('tableBody');
    var rows  = Array.from(tbody.querySelectorAll('tr[data-name]'));
    rows.sort(function(a, b) {
        switch(val) {
            case 'nom-asc':    return a.dataset.name.localeCompare(b.dataset.name, 'fr');
            case 'nom-desc':   return b.dataset.name.localeCompare(a.dataset.name, 'fr');
            case 'prix-asc':   return parseFloat(a.dataset.prix)  - parseFloat(b.dataset.prix);
            case 'prix-desc':  return parseFloat(b.dataset.prix)  - parseFloat(a.dataset.prix);
            case 'stock-desc': return parseInt(b.dataset.stock)   - parseInt(a.dataset.stock);
            case 'stock-asc':  return parseInt(a.dataset.stock)   - parseInt(b.dataset.stock);
            case 'cat-asc':    return (a.dataset.cat||'').localeCompare(b.dataset.cat||'', 'fr');
            case 'cat-desc':   return (b.dataset.cat||'').localeCompare(a.dataset.cat||'', 'fr');
            case 'statut-asc': return (a.dataset.statut||'').localeCompare(b.dataset.statut||'', 'fr');
            case 'statut-desc':return (b.dataset.statut||'').localeCompare(a.dataset.statut||'', 'fr');
            default:           return 0;
        }
    });
    rows.forEach(function(r) { tbody.appendChild(r); });
}

/* ── Select All ── */
function toggleAll(cb) {
    document.querySelectorAll('.row-check').forEach(function(c) { c.checked = cb.checked; });
    updateDeleteBtn();
}

document.addEventListener('change', function(e) {
    if (e.target && e.target.classList.contains('row-check')) updateDeleteBtn();
});

function updateDeleteBtn() {
    var checked = document.querySelectorAll('.row-check:checked').length;
    var btn = document.getElementById('btnDeleteSelected');
    var cnt = document.getElementById('selectedCount');
    if (btn) btn.style.display = checked > 0 ? 'inline-flex' : 'none';
    if (cnt) cnt.textContent   = checked > 0 ? checked + ' sélectionné(s)' : '';
}

function deleteSelected() {
    var checks = Array.from(document.querySelectorAll('.row-check:checked'));
    if (checks.length === 0) return;

    /* Utiliser la modale pour la suppression en lot */
    openDeleteModal(null, null, checks.length + ' produit(s) sélectionné(s)', checks);
}

/* ── Stats panel ── */
var statsLoaded = false;
var catChartInst = null;
var statChartInst = null;

function toggleStatsPanel() {
    var panel = document.getElementById('statsPanel');
    if (!panel) return;
    var visible = panel.style.display !== 'none';
    panel.style.display = visible ? 'none' : 'block';
    if (!visible && !statsLoaded) {
        loadStats();
        statsLoaded = true;
    }
}

function loadStats() {
    fetch('{{ path(\"admin_stats\") }}')
        .then(function(r) { return r.json(); })
        .then(function(data) {
            /* ── KPI cards ── */
            var kpiTotal = document.getElementById('kpiTotal');
            var kpiStock = document.getElementById('kpiStock');
            var kpiCats  = document.getElementById('kpiCats');
            if (kpiTotal) kpiTotal.textContent = (data.totalProduits != null) ? data.totalProduits : '—';
            if (kpiStock) kpiStock.textContent = (data.totalStock    != null) ? data.totalStock    : '—';
            if (kpiCats)  kpiCats.textContent  = (data.totalCats     != null) ? data.totalCats     : '—';

            /* ── Palette ── */
            var pal = ['#2ECC9B','#3498DB','#E67E22','#E74C3C','#9B59B6','#1ABC9C','#F39C12'];

            /* ── Catégories — doughnut compact ── */
            var catLabels = Object.keys(data.categoryCounts);
            var catVals   = Object.values(data.categoryCounts);
            if (catChartInst) catChartInst.destroy();
            catChartInst = new Chart(document.getElementById('catChart'), {
                type: 'doughnut',
                data: {
                    labels: catLabels,
                    datasets: [{ data: catVals, backgroundColor: pal.slice(0, catLabels.length), borderWidth: 2, borderColor: '#fff' }]
                },
                options: {
                    responsive: true, maintainAspectRatio: true, cutout: '68%',
                    plugins: {
                        legend: { position: 'bottom', labels: { font: { size: 11 }, padding: 8, boxWidth: 12 } },
                        tooltip: { callbacks: { label: function(ctx) {
                            var tot = ctx.dataset.data.reduce(function(a,b){return a+b;},0);
                            var pct = tot > 0 ? Math.round(ctx.parsed/tot*100) : 0;
                            return ' ' + ctx.label + ': ' + ctx.parsed + ' (' + pct + '%)';
                        }}}
                    }
                }
            });

            /* ── Statuts — barres horizontales colorées ── */
            var stLabels = Object.keys(data.statusCounts);
            var stVals   = Object.values(data.statusCounts);
            var stColors = stLabels.map(function(l) {
                switch (l.toLowerCase()) {
                    case 'disponible':  return '#2ECC9B';
                    case 'rupture':     return '#E74C3C';
                    case 'en commande': return '#3498DB';
                    default:            return '#94A3B8';
                }
            });
            if (statChartInst) statChartInst.destroy();
            statChartInst = new Chart(document.getElementById('statChart'), {
                type: 'bar',
                data: {
                    labels: stLabels,
                    datasets: [{ label: 'Produits', data: stVals, backgroundColor: stColors, borderRadius: 6, borderSkipped: false }]
                },
                options: {
                    responsive: true, maintainAspectRatio: true, indexAxis: 'y',
                    plugins: {
                        legend: { display: false },
                        tooltip: { callbacks: { label: function(ctx) { return ' ' + ctx.parsed.x + ' produit(s)'; } } }
                    },
                    scales: {
                        x: { beginAtZero: true, ticks: { stepSize: 1, font: { size: 11 } }, grid: { color: 'rgba(0,0,0,.05)' } },
                        y: { ticks: { font: { size: 11 } }, grid: { display: false } }
                    }
                }
            });
        })
        .catch(function(e) { console.error('Stats error:', e); });
}

/* ── AI Keywords button ── */
document.getElementById('btnKeywords') && document.getElementById('btnKeywords').addEventListener('click', function() {
    alert('🤖 Génération IA des mots-clés en cours... (fonctionnalité à connecter au backend IA)');
});
</script>

<style>
/* ── KPI mini-cards ── */
.stats-kpi-card {
    border-radius: 10px; padding: 12px 16px;
    display: flex; flex-direction: column; gap: 2px;
}
.kpi-val { font-size: 22px; font-weight: 800; line-height: 1.1; }
.kpi-lbl { font-size: 11px; font-weight: 500; opacity: .75; text-transform: uppercase; letter-spacing: .04em; }
.stats-kpi-card.kpi-blue   { background: #EBF5FB; color: #1A5276; }
.stats-kpi-card.kpi-teal   { background: #E8F8F0; color: #1E6B45; }
.stats-kpi-card.kpi-orange { background: #FEF5E7; color: #784212; }
.stats-kpi-card.kpi-blue   .kpi-val { color: #2980B9; }
.stats-kpi-card.kpi-teal   .kpi-val { color: #2ECC9B; }
.stats-kpi-card.kpi-orange .kpi-val { color: #E67E22; }

/* ── Modale Suppression ── */
.del-modal-overlay {
    position: fixed; inset: 0;
    background: rgba(0,0,0,.5);
    z-index: 2000;
    display: flex; align-items: center; justify-content: center;
    animation: fadeInOverlay .2s ease;
}
@keyframes fadeInOverlay { from { opacity:0; } to { opacity:1; } }
.del-modal {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 20px 60px rgba(0,0,0,.25);
    padding: 36px 32px 28px;
    width: 100%; max-width: 420px;
    text-align: center;
    animation: popIn .25s ease;
}
@keyframes popIn {
    from { transform: scale(.88); opacity: 0; }
    to   { transform: scale(1);   opacity: 1; }
}
.del-modal-icon { font-size: 52px; margin-bottom: 14px; }
.del-modal-title { font-size: 20px; font-weight: 800; color: #1E293B; margin-bottom: 10px; }
.del-modal-msg  { font-size: 14px; color: #64748B; line-height: 1.6; margin-bottom: 24px; }
.del-modal-msg strong { color: #1E293B; }
.del-modal-msg small  { font-size: 12px; color: #E74C3C; }
.del-modal-actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
.del-modal-actions .btn { min-width: 130px; justify-content: center; }
</style>

<script>
/* ── Modale suppression individuelle / en lot ── */
var _delBatchChecks = null;

function openDeleteModal(action, token, name, batchChecks) {
    _delBatchChecks = batchChecks || null;
    document.getElementById('delProductName').textContent = name || '';
    var form = document.getElementById('delForm');
    var overlay = document.getElementById('deleteModal');

    if (_delBatchChecks) {
        /* Mode lot : le formulaire sera soumis via JS à la confirmation */
        form.removeAttribute('action');
        document.getElementById('delToken').value = '';
    } else {
        form.action = action;
        document.getElementById('delToken').value = token;
    }

    overlay.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none';
    document.body.style.overflow = '';
    _delBatchChecks = null;
}

/* Surcharger la soumission du formulaire modal pour le mode lot */
document.getElementById('delForm').addEventListener('submit', function(e) {
    if (_delBatchChecks) {
        e.preventDefault();
        closeDeleteModal();
        var promises = _delBatchChecks.map(function(cb) {
            var fd = new FormData();
            fd.append('_token', cb.dataset.token);
            return fetch('/admin/products/' + cb.value + '/delete', { method: 'POST', body: fd });
        });
        Promise.all(promises).then(function() { location.reload(); });
    }
});

/* Fermer avec Echap */
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDeleteModal();
});
</script>
{% endblock %}
", "admin/product_dashboard.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\product_dashboard.html.twig");
    }
}
