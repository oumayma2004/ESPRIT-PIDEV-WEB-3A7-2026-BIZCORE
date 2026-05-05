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

/* marketplace/reviews.html.twig */
class __TwigTemplate_92b7ec8f7cd9caeec6d2c66b59a819b9 extends Template
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
        yield "Avis - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "nomProduit", [], "any", false, false, false, 2), "html", null, true);
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
        yield "<!-- Styles specific for the reviews page -->
<style>
    .sr-container {
        max-width: 900px;
        margin: 40px auto;
        font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif;
    }
    .sr-header-box {
        background: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        border: 1px solid #e1e7ef;
        text-align: center;
    }
    .sr-title {
        font-size: 28px;
        font-weight: 800;
        color: #1e293b;
        margin: 0 0 10px 0;
    }
    .sr-subtitle {
        color: #64748b;
        font-size: 16px;
        margin: 0 0 20px 0;
    }
    
    .sr-stats {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
    }
    .sr-stat-item {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .sr-stat-value {
        font-size: 32px;
        font-weight: 800;
        color: #0d9488;
    }
    .sr-stat-label {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #94a3b8;
        font-weight: 600;
        margin-top: 5px;
    }

    /* Sentiment Bar */
    .sr-sentiment-bar-wrapper {
        margin-top: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    .sr-sentiment-bar {
        height: 12px;
        display: flex;
        border-radius: 6px;
        overflow: hidden;
        background: #f1f5f9;
        margin-bottom: 8px;
    }
    .sr-sentiment-segment {
        height: 100%;
        transition: width 0.5s ease;
    }
    .sr-sentiment-labels {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        font-weight: 600;
    }
    .color-pos { background: #10b981; color: #10b981; }
    .color-neu { background: #fbbf24; color: #fbbf24; }
    .color-neg { background: #ef4444; color: #ef4444; }

    /* Tabs */
    .sr-tabs {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }
    .sr-tab-btn {
        padding: 10px 24px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        background: #fff;
        color: #64748b;
        border: 2px solid #e2e8f0;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .sr-tab-btn:hover {
        border-color: #cbd5e1;
        background: #f8fafc;
    }
    .sr-tab-btn.active {
        background: #0f172a;
        color: #fff;
        border-color: #0f172a;
    }

    /* Platform Icons */
    .ico-google { color: #ea4335; }
    .ico-facebook { color: #1877f2; }
    .ico-instagram { color: #e1306c; }
    .ico-reddit { color: #ff4500; }
    .ico-tiktok { color: #000; }
    .sr-tab-btn.active [class^=\"ico-\"] {
        color: #fff; /* White icon when active */
    }

    /* Grid */
    .sr-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }
    .sr-card {
        background: #fff;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        border: 1px solid #e2e8f0;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s;
    }
    .sr-card:hover {
        transform: translateY(-2px);
    }
    .sr-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
    }
    .sr-card-user {
        font-weight: 700;
        color: #1e293b;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .sr-card-date {
        font-size: 12px;
        color: #94a3b8;
    }
    .sr-card-stars {
        color: #f59e0b;
        font-size: 14px;
        letter-spacing: 2px;
    }
    .sr-card-text {
        font-size: 14px;
        color: #475569;
        line-height: 1.6;
        flex-grow: 1;
    }
    .sr-card-footer {
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #f1f5f9;
        padding-top: 15px;
    }
    .sr-sentiment-badge {
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
    }
    .badge-pos { background: #d1fae5; color: #065f46; }
    .badge-neu { background: #fef3c7; color: #92400e; }
    .badge-neg { background: #fee2e2; color: #991b1b; }

</style>

<div class=\"sr-container\">
    
    <div style=\"margin-bottom: 20px;\">
        <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
        yield "\" style=\"color: #64748b; text-decoration: none; font-weight: 600; font-size: 14px;\">
            ← Retour à la Marketplace
        </a>
    </div>

    <div class=\"sr-header-box\">
        <h1 class=\"sr-title\">Avis sociaux pour \"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "nomProduit", [], "any", false, false, false, 207), "html", null, true);
        yield "\"</h1>
        <p class=\"sr-subtitle\">Découvrez ce que les internautes disent de ce produit à travers le web.</p>
        
        <div class=\"sr-stats\">
            <div class=\"sr-stat-item\">
                <span class=\"sr-stat-value\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "score", [], "any", false, false, false, 212), 1), "html", null, true);
        yield "</span>
                <span class=\"sr-stat-label\">Note Globale</span>
            </div>
            <div class=\"sr-stat-item\">
                <span class=\"sr-stat-value\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "total", [], "any", false, false, false, 216), "html", null, true);
        yield "</span>
                <span class=\"sr-stat-label\">Avis Analysés</span>
            </div>
        </div>

        ";
        // line 221
        $context["p"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, true, false, 221), "positive", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, false, false, 221), "positive", [], "any", false, false, false, 221), 0)) : (0));
        // line 222
        yield "        ";
        $context["neu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, true, false, 222), "neutral", [], "any", true, true, false, 222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, false, false, 222), "neutral", [], "any", false, false, false, 222), 0)) : (0));
        // line 223
        yield "        ";
        $context["neg"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, true, false, 223), "negative", [], "any", true, true, false, 223)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, false, false, 223), "negative", [], "any", false, false, false, 223), 0)) : (0));
        // line 224
        yield "        
        <div class=\"sr-sentiment-bar-wrapper\">
            <div class=\"sr-sentiment-labels\" style=\"margin-bottom: 8px;\">
                <span style=\"color: #10b981;\">Positifs (";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["p"] ?? null), "html", null, true);
        yield "%)</span>
                <span style=\"color: #fbbf24;\">Neutres (";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["neu"] ?? null), "html", null, true);
        yield "%)</span>
                <span style=\"color: #ef4444;\">Négatifs (";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["neg"] ?? null), "html", null, true);
        yield "%)</span>
            </div>
            <div class=\"sr-sentiment-bar\">
                <div class=\"sr-sentiment-segment color-pos\" style=\"width: ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["p"] ?? null), "html", null, true);
        yield "%;\"></div>
                <div class=\"sr-sentiment-segment color-neu\" style=\"width: ";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["neu"] ?? null), "html", null, true);
        yield "%;\"></div>
                <div class=\"sr-sentiment-segment color-neg\" style=\"width: ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["neg"] ?? null), "html", null, true);
        yield "%;\"></div>
            </div>
            <div style=\"font-size: 11px; color: #94a3b8; margin-top: 10px;\">
                <i class=\"fas fa-robot\"></i> Sentiment analysé par intelligence artificielle (OpenAI)
            </div>
        </div>
    </div>

    ";
        // line 243
        yield "    ";
        $context["platforms"] = [];
        // line 244
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 245
            yield "        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 245), ($context["platforms"] ?? null))) {
                // line 246
                yield "            ";
                $context["platforms"] = Twig\Extension\CoreExtension::merge(($context["platforms"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 246)]);
                // line 247
                yield "        ";
            }
            // line 248
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "
    ";
        // line 250
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["reviews"] ?? null)) == 0)) {
            // line 251
            yield "        <div style=\"text-align: center; padding: 50px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;\">
            <p style=\"color: #64748b; font-size: 16px;\">Aucun avis n'a encore été trouvé pour ce produit.</p>
        </div>
    ";
        } else {
            // line 255
            yield "        
        <div class=\"sr-tabs\">
            <button class=\"sr-tab-btn active\" onclick=\"filterReviews('all', this)\">
                <i class=\"fas fa-globe\"></i> Tout afficher
            </button>
            ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["platforms"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 261
                yield "                <button class=\"sr-tab-btn\" onclick=\"filterReviews('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plat"], "html", null, true);
                yield "', this)\">
                    ";
                // line 262
                if (($context["plat"] == "Google")) {
                    yield "<i class=\"fab fa-google ico-google\"></i>
                    ";
                } elseif ((                // line 263
$context["plat"] == "Facebook")) {
                    yield "<i class=\"fab fa-facebook ico-facebook\"></i>
                    ";
                } elseif ((                // line 264
$context["plat"] == "Instagram")) {
                    yield "<i class=\"fab fa-instagram ico-instagram\"></i>
                    ";
                } elseif ((                // line 265
$context["plat"] == "Reddit")) {
                    yield "<i class=\"fab fa-reddit ico-reddit\"></i>
                    ";
                } elseif ((                // line 266
$context["plat"] == "TikTok")) {
                    yield "<i class=\"fab fa-tiktok ico-tiktok\"></i>
                    ";
                } else {
                    // line 267
                    yield "<i class=\"fas fa-comment\"></i>";
                }
                // line 268
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plat"], "html", null, true);
                yield "
                </button>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            yield "        </div>

        <div class=\"sr-grid\" id=\"reviewsGrid\">
            ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 275
                yield "                
                ";
                // line 276
                $context["badgeClass"] = "badge-neu";
                // line 277
                yield "                ";
                $context["sentLabel"] = "Neutre";
                // line 278
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "sentiment", [], "any", false, false, false, 278) == "positive")) {
                    yield " ";
                    $context["badgeClass"] = "badge-pos";
                    yield " ";
                    $context["sentLabel"] = "Positif";
                    // line 279
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "sentiment", [], "any", false, false, false, 279) == "negative")) {
                    yield " ";
                    $context["badgeClass"] = "badge-neg";
                    yield " ";
                    $context["sentLabel"] = "Négatif";
                    // line 280
                    yield "                ";
                }
                // line 281
                yield "
                <div class=\"sr-card\" data-platform=\"";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 282), "html", null, true);
                yield "\">
                    <div class=\"sr-card-header\">
                        <div>
                            <div class=\"sr-card-user\">";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "username", [], "any", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "username", [], "any", false, false, false, 285), "Anonyme")) : ("Anonyme")), "html", null, true);
                yield "</div>
                            <div class=\"sr-card-date\">";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 286), "html", null, true);
                yield "</div>
                        </div>
                        <div style=\"display:flex; flex-direction:column; align-items:flex-end;\">
                            <div class=\"sr-card-stars\">
                                ";
                // line 290
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "stars", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 291
                    yield "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 292
                        yield "                                        ";
                        if (($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "stars", [], "any", false, false, false, 292)))) {
                            // line 293
                            yield "                                            ★
                                        ";
                        } else {
                            // line 295
                            yield "                                            ☆
                                        ";
                        }
                        // line 297
                        yield "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 298
                    yield "                                ";
                }
                // line 299
                yield "                            </div>
                        </div>
                    </div>
                    
                    <div class=\"sr-card-text\">
                        \"";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "text", [], "any", false, false, false, 304), "html", null, true);
                yield "\"
                    </div>
                    
                    <div class=\"sr-card-footer\">
                        <span class=\"sr-sentiment-badge ";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["badgeClass"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sentLabel"] ?? null), "html", null, true);
                yield "</span>
                        
                        <span style=\"font-weight: bold; font-size: 13px; color: #64748b; display: flex; align-items: center; gap: 6px;\">
                            ";
                // line 311
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 311) == "Google")) {
                    yield "<i class=\"fab fa-google\" style=\"color:#ea4335\"></i>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 312
$context["r"], "platform", [], "any", false, false, false, 312) == "Facebook")) {
                    yield "<i class=\"fab fa-facebook\" style=\"color:#1877f2\"></i>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 313
$context["r"], "platform", [], "any", false, false, false, 313) == "Instagram")) {
                    yield "<i class=\"fab fa-instagram\" style=\"color:#e1306c\"></i>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 314
$context["r"], "platform", [], "any", false, false, false, 314) == "Reddit")) {
                    yield "<i class=\"fab fa-reddit\" style=\"color:#ff4500\"></i>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 315
$context["r"], "platform", [], "any", false, false, false, 315) == "TikTok")) {
                    yield "<i class=\"fab fa-tiktok\" style=\"color:#000\"></i>
                            ";
                } else {
                    // line 316
                    yield "<i class=\"fas fa-globe\"></i>";
                }
                // line 317
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 317), "html", null, true);
                yield "
                        </span>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            yield "        </div>

    ";
        }
        // line 325
        yield "
</div>

<script>
    function filterReviews(platform, btn) {
        // Toggle Active Class
        document.querySelectorAll('.sr-tab-btn').forEach(el => el.classList.remove('active'));
        btn.classList.add('active');

        // Filter Cards
        const cards = document.querySelectorAll('.sr-card');
        cards.forEach(card => {
            if (platform === 'all' || card.dataset.platform === platform) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
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
        return "marketplace/reviews.html.twig";
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
        return array (  575 => 325,  570 => 322,  558 => 317,  555 => 316,  550 => 315,  546 => 314,  542 => 313,  538 => 312,  534 => 311,  526 => 308,  519 => 304,  512 => 299,  509 => 298,  503 => 297,  499 => 295,  495 => 293,  492 => 292,  487 => 291,  485 => 290,  478 => 286,  474 => 285,  468 => 282,  465 => 281,  462 => 280,  455 => 279,  448 => 278,  445 => 277,  443 => 276,  440 => 275,  436 => 274,  431 => 271,  421 => 268,  418 => 267,  413 => 266,  409 => 265,  405 => 264,  401 => 263,  397 => 262,  392 => 261,  388 => 260,  381 => 255,  375 => 251,  373 => 250,  370 => 249,  364 => 248,  361 => 247,  358 => 246,  355 => 245,  350 => 244,  347 => 243,  336 => 234,  332 => 233,  328 => 232,  322 => 229,  318 => 228,  314 => 227,  309 => 224,  306 => 223,  303 => 222,  301 => 221,  293 => 216,  286 => 212,  278 => 207,  269 => 201,  71 => 5,  64 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/reviews.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\marketplace\\reviews.html.twig");
    }
}
