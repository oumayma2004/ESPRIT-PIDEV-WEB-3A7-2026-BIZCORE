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

/* admin/product_export_pdf.html.twig */
class __TwigTemplate_0675f3e282ab0f21e4b937546a3ca1f8 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_export_pdf.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Export PDF — Produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "<style>
    @media print {
        .bc-sidebar, .bc-topbar, .no-print { display: none !important; }
        .bc-main { margin-left: 0 !important; }
        .bc-content { padding: 0 !important; }
        body { background: white !important; }
        .bc-card { box-shadow: none !important; border: 1px solid #ddd; }
        table { width: 100% !important; }
    }
    .export-header { text-align: center; margin-bottom: 32px; }
    .export-header h1 { font-size: 28px; font-weight: 800; color: #1A2332; }
    .export-header p  { color: #7F8C8D; font-size: 14px; margin-top: 4px; }
    .export-meta { display: flex; gap: 24px; justify-content: center; margin-bottom: 28px; flex-wrap: wrap; }
    .export-meta-item { text-align: center; }
    .export-meta-item .val { font-size: 24px; font-weight: 800; }
    .export-meta-item .lbl { font-size: 11px; color: #94A3B8; }
    .teal { color: #2ECC9B; }
    .blue { color: #3498DB; }
    .orange { color: #E67E22; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        yield "<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\">
        <header class=\"bc-topbar no-print\">
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"btn-icon\" title=\"Retour\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">📤 Export PDF — Liste des Produits</span>
            <button onclick=\"window.print()\" class=\"btn btn-primary btn-sm\">🖨 Imprimer / PDF</button>
        </header>

        <div class=\"bc-content\">
            <div class=\"bc-card\">

                ";
        // line 40
        yield "                <div class=\"export-header\">
                    <div style=\"display:flex;align-items:center;justify-content:center;gap:14px;margin-bottom:12px;\">
                        <div class=\"bc-logo-circle\" style=\"width:52px;height:52px;font-size:22px;\">B</div>
                        <div>
                            <div style=\"font-size:22px;font-weight:800;color:#1A2332;\">BizCore</div>
                            <div style=\"font-size:12px;color:#94A3B8;\">Rapport de Gestion Produits</div>
                        </div>
                    </div>
                    <h1>Liste Complète des Produits</h1>
                    <p>Généré le ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                </div>

                ";
        // line 53
        yield "                ";
        $context["totalStock"] = 0;
        // line 54
        yield "                ";
        $context["cats"] = [];
        // line 55
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 56
            yield "                    ";
            $context["totalStock"] = ((isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 56, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["p"], "stockDisponible", [], "any", false, false, false, 56));
            // line 57
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 57) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 57), (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 57, $this->source); })())))) {
                // line 58
                yield "                        ";
                $context["cats"] = Twig\Extension\CoreExtension::merge((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 58, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 58)]);
                // line 59
                yield "                    ";
            }
            // line 60
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
                <div class=\"export-meta\">
                    <div class=\"export-meta-item\">
                        <div class=\"val blue\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 64, $this->source); })())), "html", null, true);
        yield "</div>
                        <div class=\"lbl\">Produits Total</div>
                    </div>
                    <div class=\"export-meta-item\">
                        <div class=\"val teal\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalStock"]) || array_key_exists("totalStock", $context) ? $context["totalStock"] : (function () { throw new RuntimeError('Variable "totalStock" does not exist.', 68, $this->source); })()), "html", null, true);
        yield "</div>
                        <div class=\"lbl\">Unités en Stock</div>
                    </div>
                    <div class=\"export-meta-item\">
                        <div class=\"val orange\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 72, $this->source); })())), "html", null, true);
        yield "</div>
                        <div class=\"lbl\">Catégories</div>
                    </div>
                </div>

                ";
        // line 78
        yield "                <div class=\"bc-table-wrap\">
                    <table class=\"bc-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom du Produit</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 93
            yield "                            <tr>
                                <td style=\"color:var(--bc-text-light);font-size:12px;\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                                <td><strong>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 95), "html", null, true);
            yield "</strong></td>
                                <td>
                                    ";
            // line 97
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "                                        <span class=\"badge badge-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 98), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 99
                yield "—";
            }
            // line 100
            yield "                                </td>
                                <td class=\"text-teal text-bold\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 101), "html", null, true);
            yield " €</td>
                                <td>
                                    ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 103) > 10)) {
                // line 104
                yield "                                        <span style=\"color:var(--bc-green);font-weight:600;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 104), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 105
$context["product"], "stockDisponible", [], "any", false, false, false, 105) > 0)) {
                // line 106
                yield "                                        <span style=\"color:var(--bc-orange);font-weight:600;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 106), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 108
                yield "                                        <span style=\"color:var(--bc-danger);font-weight:600;\">0</span>
                                    ";
            }
            // line 110
            yield "                                </td>
                                <td>
                                    ";
            // line 112
            $context["s"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 112));
            // line 113
            yield "                                    ";
            if (((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 113, $this->source); })()) == "disponible")) {
                yield "<span class=\"badge badge-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 113), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((            // line 114
(isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 114, $this->source); })()) == "rupture")) {
                yield "<span class=\"badge badge-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 114), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((            // line 115
(isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 115, $this->source); })()) == "en commande")) {
                yield "<span class=\"badge badge-info\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 115), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 116
                yield "<span class=\"badge badge-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 116), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 118
            yield "                                </td>
                                <td style=\"max-width:260px;font-size:12px;color:var(--bc-text-mid);\">
                                    ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 120), 0, 80), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 120)) > 80)) {
                yield "…";
            }
            // line 121
            yield "                                </td>
                            </tr>
                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "                            <tr>
                                <td colspan=\"7\" style=\"text-align:center;padding:32px;color:var(--bc-text-light);\">
                                    Aucun produit à exporter.
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                        </tbody>
                    </table>
                </div>

                <div style=\"margin-top:28px;padding-top:16px;border-top:1px solid var(--bc-border);display:flex;justify-content:space-between;font-size:12px;color:var(--bc-text-light);\">
                    <span>BizCore — Rapport automatique</span>
                    <span>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</span>
                </div>

            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/product_export_pdf.html.twig";
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
        return array (  373 => 136,  365 => 130,  354 => 124,  352 => 123,  338 => 121,  333 => 120,  329 => 118,  323 => 116,  316 => 115,  310 => 114,  303 => 113,  301 => 112,  297 => 110,  293 => 108,  287 => 106,  285 => 105,  280 => 104,  278 => 103,  273 => 101,  270 => 100,  267 => 99,  261 => 98,  259 => 97,  254 => 95,  250 => 94,  247 => 93,  229 => 92,  213 => 78,  205 => 72,  198 => 68,  191 => 64,  186 => 61,  180 => 60,  177 => 59,  174 => 58,  171 => 57,  168 => 56,  163 => 55,  160 => 54,  157 => 53,  151 => 49,  140 => 40,  129 => 31,  124 => 28,  114 => 27,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Export PDF — Produits{% endblock %}

{% block stylesheets %}
<style>
    @media print {
        .bc-sidebar, .bc-topbar, .no-print { display: none !important; }
        .bc-main { margin-left: 0 !important; }
        .bc-content { padding: 0 !important; }
        body { background: white !important; }
        .bc-card { box-shadow: none !important; border: 1px solid #ddd; }
        table { width: 100% !important; }
    }
    .export-header { text-align: center; margin-bottom: 32px; }
    .export-header h1 { font-size: 28px; font-weight: 800; color: #1A2332; }
    .export-header p  { color: #7F8C8D; font-size: 14px; margin-top: 4px; }
    .export-meta { display: flex; gap: 24px; justify-content: center; margin-bottom: 28px; flex-wrap: wrap; }
    .export-meta-item { text-align: center; }
    .export-meta-item .val { font-size: 24px; font-weight: 800; }
    .export-meta-item .lbl { font-size: 11px; color: #94A3B8; }
    .teal { color: #2ECC9B; }
    .blue { color: #3498DB; }
    .orange { color: #E67E22; }
</style>
{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\">
        <header class=\"bc-topbar no-print\">
            <a href=\"{{ path('admin_dashboard') }}\" class=\"btn-icon\" title=\"Retour\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">📤 Export PDF — Liste des Produits</span>
            <button onclick=\"window.print()\" class=\"btn btn-primary btn-sm\">🖨 Imprimer / PDF</button>
        </header>

        <div class=\"bc-content\">
            <div class=\"bc-card\">

                {# En-tête rapport #}
                <div class=\"export-header\">
                    <div style=\"display:flex;align-items:center;justify-content:center;gap:14px;margin-bottom:12px;\">
                        <div class=\"bc-logo-circle\" style=\"width:52px;height:52px;font-size:22px;\">B</div>
                        <div>
                            <div style=\"font-size:22px;font-weight:800;color:#1A2332;\">BizCore</div>
                            <div style=\"font-size:12px;color:#94A3B8;\">Rapport de Gestion Produits</div>
                        </div>
                    </div>
                    <h1>Liste Complète des Produits</h1>
                    <p>Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}</p>
                </div>

                {# Stats #}
                {% set totalStock = 0 %}
                {% set cats = [] %}
                {% for p in products %}
                    {% set totalStock = totalStock + p.stockDisponible %}
                    {% if p.categorie and p.categorie not in cats %}
                        {% set cats = cats|merge([p.categorie]) %}
                    {% endif %}
                {% endfor %}

                <div class=\"export-meta\">
                    <div class=\"export-meta-item\">
                        <div class=\"val blue\">{{ products|length }}</div>
                        <div class=\"lbl\">Produits Total</div>
                    </div>
                    <div class=\"export-meta-item\">
                        <div class=\"val teal\">{{ totalStock }}</div>
                        <div class=\"lbl\">Unités en Stock</div>
                    </div>
                    <div class=\"export-meta-item\">
                        <div class=\"val orange\">{{ cats|length }}</div>
                        <div class=\"lbl\">Catégories</div>
                    </div>
                </div>

                {# Table #}
                <div class=\"bc-table-wrap\">
                    <table class=\"bc-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom du Produit</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th>Statut</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for product in products %}
                            <tr>
                                <td style=\"color:var(--bc-text-light);font-size:12px;\">{{ loop.index }}</td>
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
                                    {% set s = product.statut|lower %}
                                    {% if s == 'disponible' %}<span class=\"badge badge-success\">{{ product.statut }}</span>
                                    {% elseif s == 'rupture' %}<span class=\"badge badge-danger\">{{ product.statut }}</span>
                                    {% elseif s == 'en commande' %}<span class=\"badge badge-info\">{{ product.statut }}</span>
                                    {% else %}<span class=\"badge badge-muted\">{{ product.statut }}</span>
                                    {% endif %}
                                </td>
                                <td style=\"max-width:260px;font-size:12px;color:var(--bc-text-mid);\">
                                    {{ product.description|slice(0, 80) }}{% if product.description|length > 80 %}…{% endif %}
                                </td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"7\" style=\"text-align:center;padding:32px;color:var(--bc-text-light);\">
                                    Aucun produit à exporter.
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                <div style=\"margin-top:28px;padding-top:16px;border-top:1px solid var(--bc-border);display:flex;justify-content:space-between;font-size:12px;color:var(--bc-text-light);\">
                    <span>BizCore — Rapport automatique</span>
                    <span>{{ \"now\"|date(\"d/m/Y\") }}</span>
                </div>

            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "admin/product_export_pdf.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\admin\\product_export_pdf.html.twig");
    }
}
