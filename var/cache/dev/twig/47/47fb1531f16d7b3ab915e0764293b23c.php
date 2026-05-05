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
class __TwigTemplate_4252a8f3d51c8b70fa208ebb45b29942 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/reviews.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/reviews.html.twig"));

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

        yield "Avis - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "nomProduit", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 207, $this->source); })()), "nomProduit", [], "any", false, false, false, 207), "html", null, true);
        yield "\"</h1>
        <p class=\"sr-subtitle\">Découvrez ce que les internautes disent de ce produit à travers le web.</p>
        
        <div class=\"sr-stats\">
            <div class=\"sr-stat-item\">
                <span class=\"sr-stat-value\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 212, $this->source); })()), "score", [], "any", false, false, false, 212), 1), "html", null, true);
        yield "</span>
                <span class=\"sr-stat-label\">Note Globale</span>
            </div>
            <div class=\"sr-stat-item\">
                <span class=\"sr-stat-value\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 216, $this->source); })()), "total", [], "any", false, false, false, 216), "html", null, true);
        yield "</span>
                <span class=\"sr-stat-label\">Avis Analysés</span>
            </div>
        </div>

        ";
        // line 221
        $context["p"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, true, false, 221), "positive", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 221, $this->source); })()), "sentiments", [], "any", false, false, false, 221), "positive", [], "any", false, false, false, 221), 0)) : (0));
        // line 222
        yield "        ";
        $context["neu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, true, false, 222), "neutral", [], "any", true, true, false, 222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 222, $this->source); })()), "sentiments", [], "any", false, false, false, 222), "neutral", [], "any", false, false, false, 222), 0)) : (0));
        // line 223
        yield "        ";
        $context["neg"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["summary"] ?? null), "sentiments", [], "any", false, true, false, 223), "negative", [], "any", true, true, false, 223)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["summary"]) || array_key_exists("summary", $context) ? $context["summary"] : (function () { throw new RuntimeError('Variable "summary" does not exist.', 223, $this->source); })()), "sentiments", [], "any", false, false, false, 223), "negative", [], "any", false, false, false, 223), 0)) : (0));
        // line 224
        yield "        
        <div class=\"sr-sentiment-bar-wrapper\">
            <div class=\"sr-sentiment-labels\" style=\"margin-bottom: 8px;\">
                <span style=\"color: #10b981;\">Positifs (";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 227, $this->source); })()), "html", null, true);
        yield "%)</span>
                <span style=\"color: #fbbf24;\">Neutres (";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["neu"]) || array_key_exists("neu", $context) ? $context["neu"] : (function () { throw new RuntimeError('Variable "neu" does not exist.', 228, $this->source); })()), "html", null, true);
        yield "%)</span>
                <span style=\"color: #ef4444;\">Négatifs (";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["neg"]) || array_key_exists("neg", $context) ? $context["neg"] : (function () { throw new RuntimeError('Variable "neg" does not exist.', 229, $this->source); })()), "html", null, true);
        yield "%)</span>
            </div>
            <div class=\"sr-sentiment-bar\">
                <div class=\"sr-sentiment-segment color-pos\" style=\"width: ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 232, $this->source); })()), "html", null, true);
        yield "%;\"></div>
                <div class=\"sr-sentiment-segment color-neu\" style=\"width: ";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["neu"]) || array_key_exists("neu", $context) ? $context["neu"] : (function () { throw new RuntimeError('Variable "neu" does not exist.', 233, $this->source); })()), "html", null, true);
        yield "%;\"></div>
                <div class=\"sr-sentiment-segment color-neg\" style=\"width: ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["neg"]) || array_key_exists("neg", $context) ? $context["neg"] : (function () { throw new RuntimeError('Variable "neg" does not exist.', 234, $this->source); })()), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 245
            yield "        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 245), (isset($context["platforms"]) || array_key_exists("platforms", $context) ? $context["platforms"] : (function () { throw new RuntimeError('Variable "platforms" does not exist.', 245, $this->source); })()))) {
                // line 246
                yield "            ";
                $context["platforms"] = Twig\Extension\CoreExtension::merge((isset($context["platforms"]) || array_key_exists("platforms", $context) ? $context["platforms"] : (function () { throw new RuntimeError('Variable "platforms" does not exist.', 246, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["r"], "platform", [], "any", false, false, false, 246)]);
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 250, $this->source); })())) == 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["platforms"]) || array_key_exists("platforms", $context) ? $context["platforms"] : (function () { throw new RuntimeError('Variable "platforms" does not exist.', 260, $this->source); })()));
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 274, $this->source); })()));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 308, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sentLabel"]) || array_key_exists("sentLabel", $context) ? $context["sentLabel"] : (function () { throw new RuntimeError('Variable "sentLabel" does not exist.', 308, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  605 => 325,  600 => 322,  588 => 317,  585 => 316,  580 => 315,  576 => 314,  572 => 313,  568 => 312,  564 => 311,  556 => 308,  549 => 304,  542 => 299,  539 => 298,  533 => 297,  529 => 295,  525 => 293,  522 => 292,  517 => 291,  515 => 290,  508 => 286,  504 => 285,  498 => 282,  495 => 281,  492 => 280,  485 => 279,  478 => 278,  475 => 277,  473 => 276,  470 => 275,  466 => 274,  461 => 271,  451 => 268,  448 => 267,  443 => 266,  439 => 265,  435 => 264,  431 => 263,  427 => 262,  422 => 261,  418 => 260,  411 => 255,  405 => 251,  403 => 250,  400 => 249,  394 => 248,  391 => 247,  388 => 246,  385 => 245,  380 => 244,  377 => 243,  366 => 234,  362 => 233,  358 => 232,  352 => 229,  348 => 228,  344 => 227,  339 => 224,  336 => 223,  333 => 222,  331 => 221,  323 => 216,  316 => 212,  308 => 207,  299 => 201,  101 => 5,  88 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Avis - {{ product.nomProduit }}{% endblock %}

{% block body %}
<!-- Styles specific for the reviews page -->
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
        <a href=\"{{ path('marketplace_index') }}\" style=\"color: #64748b; text-decoration: none; font-weight: 600; font-size: 14px;\">
            ← Retour à la Marketplace
        </a>
    </div>

    <div class=\"sr-header-box\">
        <h1 class=\"sr-title\">Avis sociaux pour \"{{ product.nomProduit }}\"</h1>
        <p class=\"sr-subtitle\">Découvrez ce que les internautes disent de ce produit à travers le web.</p>
        
        <div class=\"sr-stats\">
            <div class=\"sr-stat-item\">
                <span class=\"sr-stat-value\">{{ summary.score|number_format(1) }}</span>
                <span class=\"sr-stat-label\">Note Globale</span>
            </div>
            <div class=\"sr-stat-item\">
                <span class=\"sr-stat-value\">{{ summary.total }}</span>
                <span class=\"sr-stat-label\">Avis Analysés</span>
            </div>
        </div>

        {% set p = summary.sentiments.positive|default(0) %}
        {% set neu = summary.sentiments.neutral|default(0) %}
        {% set neg = summary.sentiments.negative|default(0) %}
        
        <div class=\"sr-sentiment-bar-wrapper\">
            <div class=\"sr-sentiment-labels\" style=\"margin-bottom: 8px;\">
                <span style=\"color: #10b981;\">Positifs ({{ p }}%)</span>
                <span style=\"color: #fbbf24;\">Neutres ({{ neu }}%)</span>
                <span style=\"color: #ef4444;\">Négatifs ({{ neg }}%)</span>
            </div>
            <div class=\"sr-sentiment-bar\">
                <div class=\"sr-sentiment-segment color-pos\" style=\"width: {{ p }}%;\"></div>
                <div class=\"sr-sentiment-segment color-neu\" style=\"width: {{ neu }}%;\"></div>
                <div class=\"sr-sentiment-segment color-neg\" style=\"width: {{ neg }}%;\"></div>
            </div>
            <div style=\"font-size: 11px; color: #94a3b8; margin-top: 10px;\">
                <i class=\"fas fa-robot\"></i> Sentiment analysé par intelligence artificielle (OpenAI)
            </div>
        </div>
    </div>

    {# Extrait des plateformes uniques #}
    {% set platforms = [] %}
    {% for r in reviews %}
        {% if r.platform not in platforms %}
            {% set platforms = platforms|merge([r.platform]) %}
        {% endif %}
    {% endfor %}

    {% if reviews|length == 0 %}
        <div style=\"text-align: center; padding: 50px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;\">
            <p style=\"color: #64748b; font-size: 16px;\">Aucun avis n'a encore été trouvé pour ce produit.</p>
        </div>
    {% else %}
        
        <div class=\"sr-tabs\">
            <button class=\"sr-tab-btn active\" onclick=\"filterReviews('all', this)\">
                <i class=\"fas fa-globe\"></i> Tout afficher
            </button>
            {% for plat in platforms %}
                <button class=\"sr-tab-btn\" onclick=\"filterReviews('{{ plat }}', this)\">
                    {% if plat == 'Google' %}<i class=\"fab fa-google ico-google\"></i>
                    {% elseif plat == 'Facebook' %}<i class=\"fab fa-facebook ico-facebook\"></i>
                    {% elseif plat == 'Instagram' %}<i class=\"fab fa-instagram ico-instagram\"></i>
                    {% elseif plat == 'Reddit' %}<i class=\"fab fa-reddit ico-reddit\"></i>
                    {% elseif plat == 'TikTok' %}<i class=\"fab fa-tiktok ico-tiktok\"></i>
                    {% else %}<i class=\"fas fa-comment\"></i>{% endif %}
                    {{ plat }}
                </button>
            {% endfor %}
        </div>

        <div class=\"sr-grid\" id=\"reviewsGrid\">
            {% for r in reviews %}
                
                {% set badgeClass = 'badge-neu' %}
                {% set sentLabel = 'Neutre' %}
                {% if r.sentiment == 'positive' %} {% set badgeClass = 'badge-pos' %} {% set sentLabel = 'Positif' %}
                {% elseif r.sentiment == 'negative' %} {% set badgeClass = 'badge-neg' %} {% set sentLabel = 'Négatif' %}
                {% endif %}

                <div class=\"sr-card\" data-platform=\"{{ r.platform }}\">
                    <div class=\"sr-card-header\">
                        <div>
                            <div class=\"sr-card-user\">{{ r.username|default('Anonyme') }}</div>
                            <div class=\"sr-card-date\">{{ r.date }}</div>
                        </div>
                        <div style=\"display:flex; flex-direction:column; align-items:flex-end;\">
                            <div class=\"sr-card-stars\">
                                {% if r.stars %}
                                    {% for i in 1..5 %}
                                        {% if i <= r.stars|round %}
                                            ★
                                        {% else %}
                                            ☆
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"sr-card-text\">
                        \"{{ r.text }}\"
                    </div>
                    
                    <div class=\"sr-card-footer\">
                        <span class=\"sr-sentiment-badge {{ badgeClass }}\">{{ sentLabel }}</span>
                        
                        <span style=\"font-weight: bold; font-size: 13px; color: #64748b; display: flex; align-items: center; gap: 6px;\">
                            {% if r.platform == 'Google' %}<i class=\"fab fa-google\" style=\"color:#ea4335\"></i>
                            {% elseif r.platform == 'Facebook' %}<i class=\"fab fa-facebook\" style=\"color:#1877f2\"></i>
                            {% elseif r.platform == 'Instagram' %}<i class=\"fab fa-instagram\" style=\"color:#e1306c\"></i>
                            {% elseif r.platform == 'Reddit' %}<i class=\"fab fa-reddit\" style=\"color:#ff4500\"></i>
                            {% elseif r.platform == 'TikTok' %}<i class=\"fab fa-tiktok\" style=\"color:#000\"></i>
                            {% else %}<i class=\"fas fa-globe\"></i>{% endif %}
                            {{ r.platform }}
                        </span>
                    </div>
                </div>
            {% endfor %}
        </div>

    {% endif %}

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

{% endblock %}
", "marketplace/reviews.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\marketplace\\reviews.html.twig");
    }
}
