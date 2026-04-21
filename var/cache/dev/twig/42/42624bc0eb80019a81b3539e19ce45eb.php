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

/* cart/index.html.twig */
class __TwigTemplate_05d22db304fe1ed82dc73bd3fd5ab1f1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Mon Panier";
        
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
        yield "    <div class=\"bc-main\">
        <header class=\"bc-topbar\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
        yield "\" class=\"btn-icon\" title=\"Continuer les achats\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">🛒 Mon Panier</span>
            ";
        // line 11
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 11, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                <span style=\"font-size:13px;color:var(--bc-text-light);\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())), "html", null, true);
            yield " article(s)</span>
            ";
        }
        // line 14
        yield "        </header>

        <div class=\"bc-content\">

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 19
            yield "                <div class=\"alert alert-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 22
            yield "                <div class=\"alert alert-danger\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
            ";
        // line 25
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "                <div class=\"bc-card\">
                    <div class=\"bc-empty\">
                        <div class=\"bc-empty-icon\">🛒</div>
                        <h3>Votre panier est vide</h3>
                        <p>Parcourez la marketplace pour ajouter des produits à votre panier.</p>
                        <a href=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
            yield "\" class=\"btn btn-primary\" style=\"margin-top:16px;\">
                            🛍 Découvrir les produits
                        </a>
                    </div>
                </div>
            ";
        } else {
            // line 37
            yield "            <div style=\"display:grid;grid-template-columns:1fr 340px;gap:24px;align-items:start;\">

                ";
            // line 40
            yield "                <div class=\"bc-card\" style=\"padding:0;\">
                    <div style=\"padding:20px 24px;border-bottom:1px solid var(--bc-border);\">
                        <div class=\"bc-card-title\" style=\"margin:0;\">Articles du panier</div>
                    </div>

                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                yield "                    <div class=\"cart-item\" style=\"padding:16px 24px;\">
                        ";
                // line 48
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "imageUrl", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "imageUrl", [], "any", false, false, false, 49), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nomProduit", [], "any", false, false, false, 49), "html", null, true);
                    yield "\" class=\"cart-item-img\">
                        ";
                } else {
                    // line 51
                    yield "                            <div class=\"cart-item-img\" style=\"display:flex;align-items:center;justify-content:center;font-size:32px;\">📦</div>
                        ";
                }
                // line 53
                yield "
                        ";
                // line 55
                yield "                        <div class=\"cart-item-info\" style=\"flex:1;\">
                            <div class=\"cart-item-name\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nomProduit", [], "any", false, false, false, 56), "html", null, true);
                yield "</div>
                            ";
                // line 57
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 58
                    yield "                                <div class=\"cart-item-cat\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categorie", [], "any", false, false, false, 58), "html", null, true);
                    yield "</div>
                            ";
                }
                // line 60
                yield "                            <div style=\"font-size:12px;color:var(--bc-text-light);margin-top:4px;\">
                                ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 61), "html", null, true);
                yield " € / unité
                            </div>
                        </div>

                        ";
                // line 66
                yield "                        <div class=\"cart-item-qty\">
                            <form method=\"post\" action=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_update_" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 68))), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"qty\" value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 69) - 1), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"qty-btn\" ";
                // line 70
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 70) <= 1)) {
                    yield "disabled";
                }
                yield ">−</button>
                            </form>
                            <span class=\"qty-val\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 72), "html", null, true);
                yield "</span>
                            <form method=\"post\" action=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_update_" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 74))), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"qty\" value=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 75) + 1), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"qty-btn\">+</button>
                            </form>
                        </div>

                        ";
                // line 81
                yield "                        <div class=\"cart-item-price\">
                            ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 82) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 82)), 2, ".", " "), "html", null, true);
                yield " €
                        </div>

                        ";
                // line 86
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_remove_" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productId", [], "any", false, false, false, 87))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"cart-item-remove\" title=\"Retirer\">✕</button>
                        </form>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "
                    <div style=\"padding:16px 24px;border-top:1px solid var(--bc-border);\">
                        <form method=\"post\" action=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
            yield "\" onsubmit=\"return confirm('Vider le panier ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("cart_clear"), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn\" style=\"background:transparent;color:var(--bc-danger);font-size:13px;padding:0;gap:6px;\">
                                🗑 Vider le panier
                            </button>
                        </form>
                    </div>
                </div>

                ";
            // line 104
            yield "                <div class=\"cart-summary\" style=\"position:sticky;top:80px;\">
                    <div class=\"bc-card-title\" style=\"margin-bottom:16px;\">Récapitulatif</div>

                    <div class=\"cart-total-row\">
                        <span>Sous-total</span>
                        <span>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 109, $this->source); })()), 2, ".", " "), "html", null, true);
            yield " €</span>
                    </div>
                    <div class=\"cart-total-row\">
                        <span>Livraison</span>
                        <span style=\"color:var(--bc-green);\">Gratuite</span>
                    </div>
                    <div class=\"cart-total-row\">
                        <span>Total</span>
                        <span class=\"total-val\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 117, $this->source); })()), 2, ".", " "), "html", null, true);
            yield " €</span>
                    </div>

                    <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_index", ["total" => (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 120, $this->source); })())]), "html", null, true);
            yield "\"
                       class=\"btn btn-primary w-100\"
                       style=\"justify-content:center;padding:14px;margin-top:20px;font-size:14px;\">
                        💳 Passer au paiement
                    </a>
                    <a href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
            yield "\"
                       class=\"btn btn-secondary w-100\"
                       style=\"justify-content:center;padding:12px;margin-top:10px;\">
                        ← Continuer les achats
                    </a>
                </div>
            </div>
            ";
        }
        // line 133
        yield "
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
        return "cart/index.html.twig";
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
        return array (  349 => 133,  338 => 125,  330 => 120,  324 => 117,  313 => 109,  306 => 104,  295 => 95,  291 => 94,  287 => 92,  276 => 87,  271 => 86,  265 => 82,  262 => 81,  254 => 75,  250 => 74,  246 => 73,  242 => 72,  235 => 70,  231 => 69,  227 => 68,  223 => 67,  220 => 66,  213 => 61,  210 => 60,  204 => 58,  202 => 57,  198 => 56,  195 => 55,  192 => 53,  188 => 51,  180 => 49,  177 => 48,  174 => 46,  170 => 45,  163 => 40,  159 => 37,  150 => 31,  143 => 26,  141 => 25,  138 => 24,  129 => 22,  124 => 21,  115 => 19,  111 => 18,  105 => 14,  99 => 12,  97 => 11,  92 => 9,  88 => 7,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mon Panier{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    {# MAIN #}
    <div class=\"bc-main\">
        <header class=\"bc-topbar\">
            <a href=\"{{ path('marketplace_index') }}\" class=\"btn-icon\" title=\"Continuer les achats\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">🛒 Mon Panier</span>
            {% if items is not empty %}
                <span style=\"font-size:13px;color:var(--bc-text-light);\">{{ items|length }} article(s)</span>
            {% endif %}
        </header>

        <div class=\"bc-content\">

            {% for msg in app.flashes('success') %}
                <div class=\"alert alert-success\">✅ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"alert alert-danger\">⚠ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}

            {% if items is empty %}
                <div class=\"bc-card\">
                    <div class=\"bc-empty\">
                        <div class=\"bc-empty-icon\">🛒</div>
                        <h3>Votre panier est vide</h3>
                        <p>Parcourez la marketplace pour ajouter des produits à votre panier.</p>
                        <a href=\"{{ path('marketplace_index') }}\" class=\"btn btn-primary\" style=\"margin-top:16px;\">
                            🛍 Découvrir les produits
                        </a>
                    </div>
                </div>
            {% else %}
            <div style=\"display:grid;grid-template-columns:1fr 340px;gap:24px;align-items:start;\">

                {# ITEMS LIST #}
                <div class=\"bc-card\" style=\"padding:0;\">
                    <div style=\"padding:20px 24px;border-bottom:1px solid var(--bc-border);\">
                        <div class=\"bc-card-title\" style=\"margin:0;\">Articles du panier</div>
                    </div>

                    {% for item in items %}
                    <div class=\"cart-item\" style=\"padding:16px 24px;\">
                        {# Image #}
                        {% if item.imageUrl %}
                            <img src=\"{{ item.imageUrl }}\" alt=\"{{ item.nomProduit }}\" class=\"cart-item-img\">
                        {% else %}
                            <div class=\"cart-item-img\" style=\"display:flex;align-items:center;justify-content:center;font-size:32px;\">📦</div>
                        {% endif %}

                        {# Info #}
                        <div class=\"cart-item-info\" style=\"flex:1;\">
                            <div class=\"cart-item-name\">{{ item.nomProduit }}</div>
                            {% if item.categorie %}
                                <div class=\"cart-item-cat\">{{ item.categorie }}</div>
                            {% endif %}
                            <div style=\"font-size:12px;color:var(--bc-text-light);margin-top:4px;\">
                                {{ item.prix }} € / unité
                            </div>
                        </div>

                        {# Quantity controls #}
                        <div class=\"cart-item-qty\">
                            <form method=\"post\" action=\"{{ path('cart_update', {id: item.productId}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_update_' ~ item.productId) }}\">
                                <input type=\"hidden\" name=\"qty\" value=\"{{ item.quantity - 1 }}\">
                                <button type=\"submit\" class=\"qty-btn\" {% if item.quantity <= 1 %}disabled{% endif %}>−</button>
                            </form>
                            <span class=\"qty-val\">{{ item.quantity }}</span>
                            <form method=\"post\" action=\"{{ path('cart_update', {id: item.productId}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_update_' ~ item.productId) }}\">
                                <input type=\"hidden\" name=\"qty\" value=\"{{ item.quantity + 1 }}\">
                                <button type=\"submit\" class=\"qty-btn\">+</button>
                            </form>
                        </div>

                        {# Subtotal #}
                        <div class=\"cart-item-price\">
                            {{ (item.prix * item.quantity)|number_format(2, '.', ' ') }} €
                        </div>

                        {# Remove #}
                        <form method=\"post\" action=\"{{ path('cart_remove', {id: item.productId}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_remove_' ~ item.productId) }}\">
                            <button type=\"submit\" class=\"cart-item-remove\" title=\"Retirer\">✕</button>
                        </form>
                    </div>
                    {% endfor %}

                    <div style=\"padding:16px 24px;border-top:1px solid var(--bc-border);\">
                        <form method=\"post\" action=\"{{ path('cart_clear') }}\" onsubmit=\"return confirm('Vider le panier ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_clear') }}\">
                            <button type=\"submit\" class=\"btn\" style=\"background:transparent;color:var(--bc-danger);font-size:13px;padding:0;gap:6px;\">
                                🗑 Vider le panier
                            </button>
                        </form>
                    </div>
                </div>

                {# ORDER SUMMARY #}
                <div class=\"cart-summary\" style=\"position:sticky;top:80px;\">
                    <div class=\"bc-card-title\" style=\"margin-bottom:16px;\">Récapitulatif</div>

                    <div class=\"cart-total-row\">
                        <span>Sous-total</span>
                        <span>{{ subtotal|number_format(2, '.', ' ') }} €</span>
                    </div>
                    <div class=\"cart-total-row\">
                        <span>Livraison</span>
                        <span style=\"color:var(--bc-green);\">Gratuite</span>
                    </div>
                    <div class=\"cart-total-row\">
                        <span>Total</span>
                        <span class=\"total-val\">{{ subtotal|number_format(2, '.', ' ') }} €</span>
                    </div>

                    <a href=\"{{ path('payment_index', {total: subtotal}) }}\"
                       class=\"btn btn-primary w-100\"
                       style=\"justify-content:center;padding:14px;margin-top:20px;font-size:14px;\">
                        💳 Passer au paiement
                    </a>
                    <a href=\"{{ path('marketplace_index') }}\"
                       class=\"btn btn-secondary w-100\"
                       style=\"justify-content:center;padding:12px;margin-top:10px;\">
                        ← Continuer les achats
                    </a>
                </div>
            </div>
            {% endif %}

        </div>
    </div>
    </div>

{% endblock %}
", "cart/index.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\cart\\index.html.twig");
    }
}
