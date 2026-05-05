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
class __TwigTemplate_cbe99c450f3d25fcb19c72ce0d845a0b extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon Panier";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                <span style=\"font-size:13px;color:var(--bc-text-light);\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null)), "html", null, true);
            yield " article(s)</span>
            ";
        }
        // line 14
        yield "        </header>

        <div class=\"bc-content\">

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 18));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 21));
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
        if (Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["subtotal"] ?? null), 2, ".", " "), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["subtotal"] ?? null), 2, ".", " "), "html", null, true);
            yield " €</span>
                    </div>

                    <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_index", ["total" => ($context["subtotal"] ?? null)]), "html", null, true);
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
        return array (  334 => 133,  323 => 125,  315 => 120,  309 => 117,  298 => 109,  291 => 104,  280 => 95,  276 => 94,  272 => 92,  261 => 87,  256 => 86,  250 => 82,  247 => 81,  239 => 75,  235 => 74,  231 => 73,  227 => 72,  220 => 70,  216 => 69,  212 => 68,  208 => 67,  205 => 66,  198 => 61,  195 => 60,  189 => 58,  187 => 57,  183 => 56,  180 => 55,  177 => 53,  173 => 51,  165 => 49,  162 => 48,  159 => 46,  155 => 45,  148 => 40,  144 => 37,  135 => 31,  128 => 26,  126 => 25,  123 => 24,  114 => 22,  109 => 21,  100 => 19,  96 => 18,  90 => 14,  84 => 12,  82 => 11,  77 => 9,  73 => 7,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cart/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\cart\\index.html.twig");
    }
}
