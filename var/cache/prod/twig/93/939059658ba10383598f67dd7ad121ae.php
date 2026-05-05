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
class __TwigTemplate_be81c1f77653db639d189e693f3303a0 extends Template
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
        yield "Mes Favoris";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["cart_count"] ?? null), 0)) : (0)), "html", null, true);
        yield "</span>
            </a>
        </header>

        <div class=\"bc-content\">
            ";
        // line 23
        if (Twig\Extension\CoreExtension::testEmpty(($context["products"] ?? null))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
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
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  214 => 76,  207 => 75,  200 => 71,  196 => 69,  188 => 66,  182 => 62,  173 => 56,  168 => 55,  166 => 54,  161 => 52,  156 => 50,  152 => 49,  141 => 41,  137 => 39,  133 => 37,  125 => 35,  123 => 34,  117 => 32,  113 => 31,  110 => 30,  102 => 24,  100 => 23,  92 => 18,  88 => 17,  81 => 13,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/favorites.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\marketplace\\favorites.html.twig");
    }
}
