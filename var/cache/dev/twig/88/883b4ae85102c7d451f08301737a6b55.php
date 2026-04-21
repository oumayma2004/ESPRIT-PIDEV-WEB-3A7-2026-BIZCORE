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

/* marketplace/index.html.twig */
class __TwigTemplate_d9954332779ec61a3ea70c6819a8f795 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/index.html.twig"));

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

        yield "Marketplace";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    ";
        // line 7
        yield "    <div class=\"bc-main\" style=\"border-radius: 8px; border: 1px solid var(--bc-border);\">

        ";
        // line 10
        yield "        <header class=\"bc-topbar\">
            <button class=\"btn-icon\" id=\"sidebar-toggle\" style=\"display:none;\">☰</button>
            <div class=\"marketplace-header\" style=\"margin:0;flex:1;\">
                <h1 style=\"font-size:22px;margin:0;\">Marketplace</h1>
                <p style=\"font-size:12px;color:var(--bc-text-light);margin:0;\">Découvrez nos meilleurs produits et formations</p>
            </div>

            ";
        // line 18
        yield "            <div class=\"marketplace-search\" style=\"max-width:340px;\">
                <span style=\"color:var(--bc-text-light);\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un produit...\" oninput=\"filterProducts()\">
                <select id=\"catFilter\" onchange=\"filterProducts()\" style=\"border:none;background:transparent;outline:none;font-size:13px;cursor:pointer;color:var(--bc-text-mid);border-left:1px solid var(--bc-border);padding-left:10px;margin-left:4px;\">
                    <option value=\"\">Toutes catégories</option>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 24
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                </select>
            </div>

            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-dark\" id=\"cart-btn\" style=\"position:relative;flex-shrink:0;\">
                🛒 Panier <span id=\"cart-count-top\" style=\"background:var(--bc-teal);border-radius:12px;padding:1px 8px;font-size:11px;margin-left:4px;\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 30, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span>
            </a>
        </header>

        ";
        // line 35
        yield "        <div style=\"padding:0 28px;\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", ["success"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 37
            yield "                <div class=\"alert alert-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", ["error"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 40
            yield "                <div class=\"alert alert-danger\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </div>

        ";
        // line 45
        yield "        <div class=\"bc-content\">
            ";
        // line 46
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "                <div class=\"bc-empty\">
                    <div class=\"bc-empty-icon\">📦</div>
                    <h3>Aucun produit disponible</h3>
                    <p>Les produits seront affichés ici dès qu'ils seront publiés.</p>
                </div>
            ";
        } else {
            // line 53
            yield "                <div class=\"products-grid\" id=\"productsGrid\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 55
                yield "                    <div class=\"product-card\"
                         data-name=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 56)), "html", null, true);
                yield "\"
                         data-cat=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 57)), "html", null, true);
                yield "\"
                         data-desc=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 58)), "html", null, true);
                yield "\">

                        <div class=\"product-card-img\">
                            ";
                // line 61
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 62
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 62), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 62), "html", null, true);
                    yield "\" loading=\"lazy\">
                            ";
                } else {
                    // line 64
                    yield "                                <div class=\"no-img\">📦</div>
                            ";
                }
                // line 66
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                                <span class=\"product-cat-badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 67), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 69
                yield "                        </div>

                        <div class=\"product-card-body\">
                            <div class=\"product-card-header\">
                                <div class=\"product-card-name\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 73), "html", null, true);
                yield "</div>
                                <div class=\"product-card-price\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 74), "html", null, true);
                yield " €</div>
                            </div>
                            <div class=\"product-card-desc\">";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 76), "html", null, true);
                yield "</div>
                            <div class=\"product-card-stock\">
                                ";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 78) > 0)) {
                    // line 79
                    yield "                                    <span style=\"color:var(--bc-teal);\">✔</span> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 79), "html", null, true);
                    yield " en stock
                                ";
                } else {
                    // line 81
                    yield "                                    <span style=\"color:var(--bc-danger);\">✖</span> Rupture de stock
                                ";
                }
                // line 83
                yield "                            </div>

                            ";
                // line 85
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 85) > 0)) {
                    // line 86
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 86)]), "html", null, true);
                    yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 87))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn-add-cart\">
                                        🛒 Ajouter au panier
                                    </button>
                                </form>
                            ";
                } else {
                    // line 93
                    yield "                                <button class=\"btn-add-cart\" disabled style=\"background:#CBD5E1;cursor:not-allowed;\">
                                    Indisponible
                                </button>
                            ";
                }
                // line 97
                yield "                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                </div>

                <p id=\"noResults\" style=\"display:none;text-align:center;padding:40px;color:var(--bc-text-light);\">
                    🔍 Aucun produit trouvé pour cette recherche.
                </p>
            ";
        }
        // line 106
        yield "        </div>
    </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function filterProducts() {
    var q   = document.getElementById('searchInput').value.toLowerCase().trim();
    var cat = document.getElementById('catFilter').value.toLowerCase();
    var cards = document.querySelectorAll('.product-card');
    var visible = 0;

    cards.forEach(function(card) {
        var name = card.dataset.name || '';
        var c    = card.dataset.cat  || '';
        var desc = card.dataset.desc || '';
        var matchQ   = !q   || name.includes(q) || desc.includes(q);
        var matchCat = !cat || c.includes(cat);
        if (matchQ && matchCat) {
            card.style.display = '';
            visible++;
        } else {
            card.style.display = 'none';
        }
    });

    var noRes = document.getElementById('noResults');
    if (noRes) noRes.style.display = visible === 0 ? 'block' : 'none';
}

// Update cart badge
(function() {
    var count = parseInt('";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 141, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "');
    var badge = document.getElementById('cart-count-badge');
    if (badge && count > 0) { badge.style.display = 'inline'; badge.textContent = count; }
})();
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
        return "marketplace/index.html.twig";
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
        return array (  361 => 141,  330 => 113,  320 => 112,  308 => 106,  300 => 100,  292 => 97,  286 => 93,  277 => 87,  272 => 86,  270 => 85,  266 => 83,  262 => 81,  256 => 79,  254 => 78,  249 => 76,  244 => 74,  240 => 73,  234 => 69,  228 => 67,  225 => 66,  221 => 64,  213 => 62,  211 => 61,  205 => 58,  201 => 57,  197 => 56,  194 => 55,  190 => 54,  187 => 53,  179 => 47,  177 => 46,  174 => 45,  170 => 42,  161 => 40,  156 => 39,  147 => 37,  143 => 36,  140 => 35,  133 => 30,  129 => 29,  124 => 26,  113 => 24,  109 => 23,  102 => 18,  93 => 10,  89 => 7,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Marketplace{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    {# ── MAIN ── #}
    <div class=\"bc-main\" style=\"border-radius: 8px; border: 1px solid var(--bc-border);\">

        {# Top bar #}
        <header class=\"bc-topbar\">
            <button class=\"btn-icon\" id=\"sidebar-toggle\" style=\"display:none;\">☰</button>
            <div class=\"marketplace-header\" style=\"margin:0;flex:1;\">
                <h1 style=\"font-size:22px;margin:0;\">Marketplace</h1>
                <p style=\"font-size:12px;color:var(--bc-text-light);margin:0;\">Découvrez nos meilleurs produits et formations</p>
            </div>

            {# Search + filter in top bar #}
            <div class=\"marketplace-search\" style=\"max-width:340px;\">
                <span style=\"color:var(--bc-text-light);\">🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un produit...\" oninput=\"filterProducts()\">
                <select id=\"catFilter\" onchange=\"filterProducts()\" style=\"border:none;background:transparent;outline:none;font-size:13px;cursor:pointer;color:var(--bc-text-mid);border-left:1px solid var(--bc-border);padding-left:10px;margin-left:4px;\">
                    <option value=\"\">Toutes catégories</option>
                    {% for cat in categories %}
                        <option value=\"{{ cat }}\">{{ cat }}</option>
                    {% endfor %}
                </select>
            </div>

            <a href=\"{{ path('cart_index') }}\" class=\"btn btn-dark\" id=\"cart-btn\" style=\"position:relative;flex-shrink:0;\">
                🛒 Panier <span id=\"cart-count-top\" style=\"background:var(--bc-teal);border-radius:12px;padding:1px 8px;font-size:11px;margin-left:4px;\">{{ cart_count|default(0) }}</span>
            </a>
        </header>

        {# Flash messages #}
        <div style=\"padding:0 28px;\">
            {% for msg in app.flashes('success') %}
                <div class=\"alert alert-success\">✅ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"alert alert-danger\">⚠ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}
        </div>

        {# Content #}
        <div class=\"bc-content\">
            {% if products is empty %}
                <div class=\"bc-empty\">
                    <div class=\"bc-empty-icon\">📦</div>
                    <h3>Aucun produit disponible</h3>
                    <p>Les produits seront affichés ici dès qu'ils seront publiés.</p>
                </div>
            {% else %}
                <div class=\"products-grid\" id=\"productsGrid\">
                    {% for product in products %}
                    <div class=\"product-card\"
                         data-name=\"{{ product.nomProduit|lower }}\"
                         data-cat=\"{{ product.categorie|lower }}\"
                         data-desc=\"{{ product.description|lower }}\">

                        <div class=\"product-card-img\">
                            {% if product.imageUrl %}
                                <img src=\"{{ product.imageUrl }}\" alt=\"{{ product.nomProduit }}\" loading=\"lazy\">
                            {% else %}
                                <div class=\"no-img\">📦</div>
                            {% endif %}
                            {% if product.categorie %}
                                <span class=\"product-cat-badge\">{{ product.categorie }}</span>
                            {% endif %}
                        </div>

                        <div class=\"product-card-body\">
                            <div class=\"product-card-header\">
                                <div class=\"product-card-name\">{{ product.nomProduit }}</div>
                                <div class=\"product-card-price\">{{ product.prix }} €</div>
                            </div>
                            <div class=\"product-card-desc\">{{ product.description }}</div>
                            <div class=\"product-card-stock\">
                                {% if product.stockDisponible > 0 %}
                                    <span style=\"color:var(--bc-teal);\">✔</span> {{ product.stockDisponible }} en stock
                                {% else %}
                                    <span style=\"color:var(--bc-danger);\">✖</span> Rupture de stock
                                {% endif %}
                            </div>

                            {% if product.stockDisponible > 0 %}
                                <form method=\"post\" action=\"{{ path('cart_add', {id: product.idProduit}) }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ product.idProduit) }}\">
                                    <button type=\"submit\" class=\"btn-add-cart\">
                                        🛒 Ajouter au panier
                                    </button>
                                </form>
                            {% else %}
                                <button class=\"btn-add-cart\" disabled style=\"background:#CBD5E1;cursor:not-allowed;\">
                                    Indisponible
                                </button>
                            {% endif %}
                        </div>
                    </div>
                    {% endfor %}
                </div>

                <p id=\"noResults\" style=\"display:none;text-align:center;padding:40px;color:var(--bc-text-light);\">
                    🔍 Aucun produit trouvé pour cette recherche.
                </p>
            {% endif %}
        </div>
    </div>
    </div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function filterProducts() {
    var q   = document.getElementById('searchInput').value.toLowerCase().trim();
    var cat = document.getElementById('catFilter').value.toLowerCase();
    var cards = document.querySelectorAll('.product-card');
    var visible = 0;

    cards.forEach(function(card) {
        var name = card.dataset.name || '';
        var c    = card.dataset.cat  || '';
        var desc = card.dataset.desc || '';
        var matchQ   = !q   || name.includes(q) || desc.includes(q);
        var matchCat = !cat || c.includes(cat);
        if (matchQ && matchCat) {
            card.style.display = '';
            visible++;
        } else {
            card.style.display = 'none';
        }
    });

    var noRes = document.getElementById('noResults');
    if (noRes) noRes.style.display = visible === 0 ? 'block' : 'none';
}

// Update cart badge
(function() {
    var count = parseInt('{{ cart_count|default(0) }}');
    var badge = document.getElementById('cart-count-badge');
    if (badge && count > 0) { badge.style.display = 'inline'; badge.textContent = count; }
})();
</script>
{% endblock %}
", "marketplace/index.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\marketplace\\index.html.twig");
    }
}
