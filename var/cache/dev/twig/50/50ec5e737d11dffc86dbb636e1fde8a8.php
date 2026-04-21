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

/* marketplace/favorites.html.twig */
class __TwigTemplate_5dfa6829712da28f954e8e6ea1c34775 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/favorites.html.twig"));

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

        yield "Mes Favoris";
        
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
    <div class=\"bc-main\" style=\"border-radius: 8px; border: 1px solid var(--bc-border);\">
        <header class=\"bc-topbar\">
            <div class=\"marketplace-header\" style=\"margin:0;flex:1;\">
                <h1 style=\"font-size:22px;margin:0;\">Mes Favoris</h1>
                <p style=\"font-size:12px;color:var(--bc-text-light);margin:0;\">Vos produits sauvegardés pour plus tard</p>
            </div>
            
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
        yield "\" class=\"btn btn-secondary\" style=\"margin-left:15px;\">
                ← Retour Marketplace
            </a>

            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-dark\" id=\"cart-btn\" style=\"position:relative;flex-shrink:0;margin-left: 10px;\">
                🛒 Panier <span id=\"cart-count-top\" style=\"background:var(--bc-teal);border-radius:12px;padding:1px 8px;font-size:11px;margin-left:4px;\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 18, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span>
            </a>
        </header>

        <div class=\"bc-content\">
            ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "                <div class=\"bc-empty\">
                    <div class=\"bc-empty-icon\">❤️</div>
                    <h3>Aucun favori</h3>
                    <p>Vous n'avez pas encore sauvegardé de produit dans vos favoris.</p>
                </div>
            ";
        } else {
            // line 30
            yield "                <div class=\"products-grid\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                yield "                    <div class=\"product-card\" id=\"fav-card-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                        <div class=\"product-card-img\" style=\"position:relative;\">
                            ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 35), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 35), "html", null, true);
                    yield "\" loading=\"lazy\">
                            ";
                } else {
                    // line 37
                    yield "                                <div class=\"no-img\">📦</div>
                            ";
                }
                // line 39
                yield "                            
                            <!-- Bonton enlever des favoris -->
                            <button onclick=\"toggleFavorite(";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 41), "html", null, true);
                yield ")\" 
                                    style=\"position:absolute; top:8px; left:8px; background:white; border:none; border-radius:50%; width:32px; height:32px; cursor:pointer; box-shadow:0 2px 4px rgba(0,0,0,0.1); display:flex; align-items:center; justify-content:center; color:#ef4444; font-size:18px;\">
                                ♥
                            </button>
                        </div>

                        <div class=\"product-card-body\">
                            <div class=\"product-card-header\">
                                <div class=\"product-card-name\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 49), "html", null, true);
                yield "</div>
                                <div class=\"product-card-price\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 50), "html", null, true);
                yield " €</div>
                            </div>
                            <div class=\"product-card-desc\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 52), "html", null, true);
                yield "</div>

                            ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 54) > 0)) {
                    // line 55
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\" style=\"margin-top:10px;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 56))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn-add-cart\">
                                        🛒 Ajouter au panier
                                    </button>
                                </form>
                            ";
                } else {
                    // line 62
                    yield "                                <button class=\"btn-add-cart\" disabled style=\"background:#CBD5E1;cursor:not-allowed;margin-top:10px;\">
                                    Indisponible
                                </button>
                            ";
                }
                // line 66
                yield "                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                </div>
            ";
        }
        // line 71
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
window.toggleFavorite = function(id) {
    fetch('/marketplace/api/favorites/toggle/' + id, {method: 'POST'})
    .then(r => r.json())
    .then(data => {
        if(data.success && !data.isFavorite) {
            let card = document.getElementById('fav-card-' + id);
            if (card) {
                card.style.display = 'none';
            }
        }
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
        return "marketplace/favorites.html.twig";
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
        return array (  235 => 76,  225 => 75,  215 => 71,  211 => 69,  203 => 66,  197 => 62,  188 => 56,  183 => 55,  181 => 54,  176 => 52,  171 => 50,  167 => 49,  156 => 41,  152 => 39,  148 => 37,  140 => 35,  138 => 34,  132 => 32,  128 => 31,  125 => 30,  117 => 24,  115 => 23,  107 => 18,  103 => 17,  96 => 13,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mes Favoris{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\" style=\"border-radius: 8px; border: 1px solid var(--bc-border);\">
        <header class=\"bc-topbar\">
            <div class=\"marketplace-header\" style=\"margin:0;flex:1;\">
                <h1 style=\"font-size:22px;margin:0;\">Mes Favoris</h1>
                <p style=\"font-size:12px;color:var(--bc-text-light);margin:0;\">Vos produits sauvegardés pour plus tard</p>
            </div>
            
            <a href=\"{{ path('marketplace_index') }}\" class=\"btn btn-secondary\" style=\"margin-left:15px;\">
                ← Retour Marketplace
            </a>

            <a href=\"{{ path('cart_index') }}\" class=\"btn btn-dark\" id=\"cart-btn\" style=\"position:relative;flex-shrink:0;margin-left: 10px;\">
                🛒 Panier <span id=\"cart-count-top\" style=\"background:var(--bc-teal);border-radius:12px;padding:1px 8px;font-size:11px;margin-left:4px;\">{{ cart_count|default(0) }}</span>
            </a>
        </header>

        <div class=\"bc-content\">
            {% if products is empty %}
                <div class=\"bc-empty\">
                    <div class=\"bc-empty-icon\">❤️</div>
                    <h3>Aucun favori</h3>
                    <p>Vous n'avez pas encore sauvegardé de produit dans vos favoris.</p>
                </div>
            {% else %}
                <div class=\"products-grid\">
                    {% for product in products %}
                    <div class=\"product-card\" id=\"fav-card-{{ product.idProduit }}\">
                        <div class=\"product-card-img\" style=\"position:relative;\">
                            {% if product.imageUrl %}
                                <img src=\"{{ product.imageUrl }}\" alt=\"{{ product.nomProduit }}\" loading=\"lazy\">
                            {% else %}
                                <div class=\"no-img\">📦</div>
                            {% endif %}
                            
                            <!-- Bonton enlever des favoris -->
                            <button onclick=\"toggleFavorite({{ product.idProduit }})\" 
                                    style=\"position:absolute; top:8px; left:8px; background:white; border:none; border-radius:50%; width:32px; height:32px; cursor:pointer; box-shadow:0 2px 4px rgba(0,0,0,0.1); display:flex; align-items:center; justify-content:center; color:#ef4444; font-size:18px;\">
                                ♥
                            </button>
                        </div>

                        <div class=\"product-card-body\">
                            <div class=\"product-card-header\">
                                <div class=\"product-card-name\">{{ product.nomProduit }}</div>
                                <div class=\"product-card-price\">{{ product.prix }} €</div>
                            </div>
                            <div class=\"product-card-desc\">{{ product.description }}</div>

                            {% if product.stockDisponible > 0 %}
                                <form method=\"post\" action=\"{{ path('cart_add', {id: product.idProduit}) }}\" style=\"margin-top:10px;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ product.idProduit) }}\">
                                    <button type=\"submit\" class=\"btn-add-cart\">
                                        🛒 Ajouter au panier
                                    </button>
                                </form>
                            {% else %}
                                <button class=\"btn-add-cart\" disabled style=\"background:#CBD5E1;cursor:not-allowed;margin-top:10px;\">
                                    Indisponible
                                </button>
                            {% endif %}
                        </div>
                    </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
window.toggleFavorite = function(id) {
    fetch('/marketplace/api/favorites/toggle/' + id, {method: 'POST'})
    .then(r => r.json())
    .then(data => {
        if(data.success && !data.isFavorite) {
            let card = document.getElementById('fav-card-' + id);
            if (card) {
                card.style.display = 'none';
            }
        }
    });
}
</script>
{% endblock %}
", "marketplace/favorites.html.twig", "C:\\Users\\dhiaj_onolvpc\\Desktop\\FINAL\\FINAL\\templates\\marketplace\\favorites.html.twig");
    }
}
