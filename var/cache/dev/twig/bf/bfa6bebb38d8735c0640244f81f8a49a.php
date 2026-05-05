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
class __TwigTemplate_ac912bf850de05eafbbe6cfde7e535e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/index.html.twig"));

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

        yield "Marketplace";
        
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
        yield "<style>
    :root {
        --mk-primary: #0d9488; /* Teal */
        --mk-primary-hover: #0f766e;
        --mk-secondary: #3b82f6; /* Blue for Sell button */
        --mk-bg: #f8fafc;
        --mk-border: #e2e8f0;
        --mk-text: #1e293b;
        --mk-text-light: #64748b;
        --mk-white: #ffffff;
        --mk-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    #content { padding: 0 !important; background: var(--mk-bg); }

    .mk-container {
        padding: 24px;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ── HEADER ── */
    .mk-header-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 32px;
        flex-wrap: wrap;
    }

    .mk-search-container {
        flex: 1;
        min-width: 300px;
        display: flex;
        align-items: center;
        background: #f1f5f9;
        border: 1px solid var(--mk-border);
        border-radius: 12px;
        padding: 0 16px;
        height: 48px;
        transition: all 0.2s ease;
    }

    .mk-search-container:focus-within {
        background: #fff;
        border-color: var(--mk-primary);
        box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
    }

    .mk-search-icon {
        color: #94a3b8;
        margin-right: 12px;
    }

    .mk-search-input {
        flex: 1;
        border: none;
        background: transparent;
        outline: none;
        font-size: 14px;
        color: var(--mk-text);
    }

    .mk-search-divider {
        width: 1px;
        height: 24px;
        background: #e2e8f0;
        margin: 0 12px;
    }

    .mk-category-select {
        border: none;
        background: transparent;
        outline: none;
        font-size: 14px;
        color: var(--mk-text-light);
        cursor: pointer;
        padding-right: 8px;
    }

    .mk-btn-top {
        display: flex;
        align-items: center;
        gap: 8px;
        height: 48px;
        padding: 0 20px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        border: 1px solid var(--mk-border);
        white-space: nowrap;
    }

    .mk-btn-teal {
        background: var(--mk-primary);
        color: #fff;
        border-color: var(--mk-primary);
    }

    .mk-btn-teal:hover {
        background: var(--mk-primary-hover);
        transform: translateY(-1px);
    }

    .mk-btn-white {
        background: #fff;
        color: var(--mk-text);
    }

    .mk-btn-white:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }

    .mk-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        font-size: 11px;
        font-weight: 700;
        margin-left: 4px;
    }

    .mk-badge-red { background: #fee2e2; color: #ef4444; }
    .mk-badge-dark { background: #1e293b; color: #fff; }

    /* ── SELL BUTTON ── */
    .mk-sell-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .mk-btn-sell {
        background: var(--mk-secondary);
        color: #fff;
        padding: 12px 32px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
        transition: all 0.2s;
    }

    .mk-btn-sell:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 20px 25px -5px rgba(59, 130, 246, 0.4);
        color: white;
    }

    /* ── PRODUCT GRID ── */
    .mk-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 20px;
    }

    .mk-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        border: 1px solid #f1f5f9;
    }

    .mk-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 20px -5px rgba(0, 0, 0, 0.1);
    }

    .mk-card-img-wrapper {
        position: relative;
        height: 180px;
        overflow: hidden;
    }

    .mk-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .mk-card:hover .mk-card-img {
        transform: scale(1.1);
    }

    .mk-fav-btn {
        position: absolute;
        top: 16px;
        left: 16px;
        width: 36px;
        height: 36px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        z-index: 10;
        transition: all 0.2s;
    }

    .mk-fav-btn i { font-size: 16px; }

    .mk-cat-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        background: var(--mk-primary);
        color: #fff;
        padding: 6px 14px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 700;
        z-index: 10;
    }

    .mk-card-content {
        padding: 16px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .mk-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 10px;
        gap: 10px;
    }

    .mk-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--mk-text);
        margin: 0;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .mk-card-price {
        font-size: 16px;
        font-weight: 800;
        color: var(--mk-primary);
        white-space: nowrap;
    }

    .mk-card-desc {
        font-size: 13px;
        color: var(--mk-text-light);
        margin-bottom: 16px;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex: 1;
    }

    .mk-vendor-info {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        font-size: 13px;
        color: var(--mk-text-light);
    }

    .mk-vendor-name {
        color: var(--mk-primary);
        font-weight: 700;
    }

    .mk-status-badge {
        background: #d1fae5;
        color: #065f46;
        padding: 2px 8px;
        border-radius: 8px;
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
    }

    .mk-rating-row {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 16px;
    }

    .mk-rating-stars { color: #fbbf24; font-size: 14px; }
    .mk-rating-text { font-size: 13px; color: var(--mk-text-light); font-weight: 500; }

    .mk-stock-status {
        font-size: 13px;
        color: #10b981;
        font-weight: 600;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .mk-btn-action {
        width: 100%;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
        margin-bottom: 10px;
        text-decoration: none;
    }

    .mk-btn-cart {
        background: var(--mk-primary);
        color: #fff;
    }

    .mk-btn-cart:hover { background: var(--mk-primary-hover); transform: scale(1.02); }

    .mk-btn-social {
        background: #fff;
        border: 1px solid var(--mk-border);
        color: var(--mk-text);
    }

    .mk-btn-social:hover { background: #f8fafc; border-color: #cbd5e1; }
    .mk-btn-social i { color: #3b82f6; }

    /* ── FLASH PROMO BANNER ── */
    #flash-promo-banner {
        display: none;
        position: fixed;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(135deg, #1e293b, #0f172a);
        color: #fff;
        border-radius: 20px;
        padding: 16px 32px;
        z-index: 9999;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2);
        min-width: 350px;
        text-align: center;
        border: 1px solid rgba(239, 68, 68, 0.3);
        animation: banner-in 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    @keyframes banner-in {
        from { transform: translateX(-50%) translateY(100px); opacity: 0; }
        to   { transform: translateX(-50%) translateY(0); opacity: 1; }
    }

    .banner-cd {
        color: #fde68a;
        font-weight: 800;
        margin-top: 4px;
        font-size: 14px;
    }

    .mk-card.promo-active {
        border: 2px solid #ef4444;
        box-shadow: 0 0 20px rgba(239, 68, 68, 0.15);
    }

    /* Custom scrollbar for dropdown */
    .premium-scroll::-webkit-scrollbar { width: 6px; }
    .premium-scroll::-webkit-scrollbar-track { background: transparent; }
    .premium-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .premium-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    /* Translation Dropdown override */
    .lang-item:hover { background: #f1f5f9; }
    .lang-item.lang-active { background: #f0fdfa; color: var(--mk-primary); font-weight: bold; }
</style>

<div class=\"mk-container\">
    ";
        // line 411
        yield "    <div class=\"mk-header-actions\">
        <div class=\"mk-search-container\">
            <i class=\"fas fa-search mk-search-icon\"></i>
            <input type=\"text\" id=\"searchInput\" class=\"mk-search-input\" placeholder=\"Rechercher...\" oninput=\"filterProducts()\">
            <div class=\"mk-search-divider\"></div>
            <select id=\"catFilter\" class=\"mk-category-select\" onchange=\"filterProducts()\">
                <option value=\"\">Toutes catégories</option>
                ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 418, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 419
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        yield "            </select>
        </div>

        <button id=\"open-ranking-modal\" class=\"mk-btn-top mk-btn-teal\">
            <i class=\"fas fa-store\"></i> Top boutiques
        </button>

        <a href=\"";
        // line 428
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_favorites");
        yield "\" class=\"mk-btn-top mk-btn-white\">
            <i class=\"fas fa-heart\" style=\"color:#ef4444;\"></i> Favoris
            <span id=\"fav-count-top\" class=\"mk-badge mk-badge-red\">";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 430, $this->source); })())), "html", null, true);
        yield "</span>
        </a>

        <a href=\"";
        // line 433
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"mk-btn-top mk-btn-white\">
            <i class=\"fas fa-shopping-cart\"></i> Panier
            <span id=\"cart-count-top\" class=\"mk-badge mk-badge-dark\">";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cart_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cart_count"]) || array_key_exists("cart_count", $context) ? $context["cart_count"] : (function () { throw new RuntimeError('Variable "cart_count" does not exist.', 435, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</span>
        </a>

        ";
        // line 439
        yield "        <div style=\"position:relative;\" id=\"translate-widget\">
            <button id=\"translate-btn\" class=\"mk-btn-top mk-btn-white\">
                <i class=\"fas fa-globe\" style=\"color: var(--mk-primary);\"></i>
                <span id=\"translate-label\">Français</span>
                <i class=\"fas fa-chevron-down\" style=\"font-size: 10px; margin-left: 4px; opacity: 0.5;\"></i>
            </button>
            <div id=\"translate-dropdown\" style=\"display:none; position:absolute; right:0; top:calc(100% + 8px); background:#fff; border:1px solid var(--mk-border); border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,0.1); width:340px; z-index:10000; overflow:hidden;\">
                <div style=\"padding:12px; font-size:12px; font-weight:800; color:var(--mk-text-light); border-bottom:1px solid #f1f5f9; background:#f8fafc;\">LANGUES</div>
                <ul id=\"lang-list\" class=\"premium-scroll\" style=\"list-style:none; padding:12px; margin:0; display:grid; grid-template-columns:1fr 1fr; gap:6px; max-height:300px; overflow-y:auto;\">
                    <li data-lang=\"fr\" data-label=\"Français\" class=\"lang-item lang-active\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇫🇷</span> Français</li>
                    <li data-lang=\"en\" data-label=\"English\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇬🇧</span> English</li>
                    <li data-lang=\"es\" data-label=\"Español\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇪🇸</span> Español</li>
                    <li data-lang=\"de\" data-label=\"Deutsch\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇩🇪</span> Deutsch</li>
                    <li data-lang=\"it\" data-label=\"Italiano\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇮🇹</span> Italiano</li>
                    <li data-lang=\"pt\" data-label=\"Português\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇵🇹</span> Português</li>
                    <li data-lang=\"nl\" data-label=\"Nederlands\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇳🇱</span> Nederlands</li>
                    <li data-lang=\"sv\" data-label=\"Svenska\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇸🇪</span> Svenska</li>
                    <li data-lang=\"ru\" data-label=\"Русский\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇷🇺</span> Русский</li>
                    <li data-lang=\"ar\" data-label=\"العربية\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇸🇦</span> العربية</li>
                    <li data-lang=\"zh\" data-label=\"中文\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇨🇳</span> 中文</li>
                    <li data-lang=\"ja\" data-label=\"日本語\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇯🇵</span> 日本語</li>
                    <li data-lang=\"ko\" data-label=\"한국어\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇰🇷</span> 한국어</li>
                    <li data-lang=\"tr\" data-label=\"Türkçe\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇹🇷</span> Türkçe</li>
                    <li data-lang=\"hi\" data-label=\"हिन्दी\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇮🇳</span> हिन्दी</li>
                </ul>
            </div>
        </div>

        ";
        // line 468
        yield "        <div style=\"position:relative;\" id=\"currency-widget\">
            <button id=\"currency-btn\" class=\"mk-btn-top mk-btn-white\">
                <span id=\"currency-flag\">🇪🇺</span>
                <span id=\"currency-label\" style=\"margin: 0 4px;\">EUR (€)</span>
                <i class=\"fas fa-chevron-down\" style=\"font-size: 10px; opacity: 0.5;\"></i>
            </button>
            <div id=\"currency-dropdown\" style=\"display:none; position:absolute; right:0; top:calc(100% + 8px); background:#fff; border:1px solid var(--mk-border); border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,0.1); width:200px; z-index:100; overflow:hidden;\">
                <div style=\"padding:12px; font-size:12px; font-weight:800; color:var(--mk-text-light); border-bottom:1px solid #f1f5f9; background:#f8fafc;\">DEVISES</div>
                <ul id=\"currency-list\" style=\"list-style:none; padding:8px; margin:0; display:grid; grid-template-columns:1fr 1fr; gap:4px;\">
                    <li data-currency=\"EUR\" data-symbol=\"€\" data-flag=\"🇪🇺\" class=\"currency-item currency-active\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇪🇺</span> EUR (€)</li>
                    <li data-currency=\"USD\" data-symbol=\"\$\" data-flag=\"🇺🇸\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇺🇸</span> USD (\$)</li>
                    <li data-currency=\"GBP\" data-symbol=\"£\" data-flag=\"🇬🇧\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇬🇧</span> GBP (£)</li>
                    <li data-currency=\"CAD\" data-symbol=\"C\$\" data-flag=\"🇨🇦\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇨🇦</span> CAD (\$)</li>
                    <li data-currency=\"CHF\" data-symbol=\"CHF\" data-flag=\"🇨🇭\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇨🇭</span> CHF</li>
                    <li data-currency=\"TND\" data-symbol=\"DT\" data-flag=\"🇹🇳\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇹🇳</span> TND (DT)</li>
                    <li data-currency=\"MAD\" data-symbol=\"DH\" data-flag=\"🇲🇦\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇲🇦</span> MAD (DH)</li>
                    <li data-currency=\"JPY\" data-symbol=\"¥\" data-flag=\"🇯🇵\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇯🇵</span> JPY (¥)</li>
                    <li data-currency=\"CNY\" data-symbol=\"¥\" data-flag=\"🇨🇳\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇨🇳</span> CNY (¥)</li>
                    <li data-currency=\"SAR\" data-symbol=\"﷼\" data-flag=\"🇸🇦\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇸🇦</span> SAR</li>
                </ul>
            </div>
        </div>
    </div>

    ";
        // line 493
        yield "    <div class=\"mk-sell-wrapper\">
        <a href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_sell");
        yield "\" class=\"mk-btn-sell\">
            <i class=\"fas fa-plus\"></i> Vendre un produit
        </a>
    </div>

    ";
        // line 500
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 500, $this->source); })()))) {
            // line 501
            yield "        <div style=\"text-align:center; padding:80px 20px; background:#fff; border-radius:24px; border:1px dashed var(--mk-border);\">
            <div style=\"font-size:48px; margin-bottom:16px;\">📦</div>
            <h3 style=\"color:var(--mk-text); font-weight:800;\">Aucun produit disponible</h3>
            <p style=\"color:var(--mk-text-light);\">Revenez plus tard pour découvrir nos nouveautés.</p>
        </div>
    ";
        } else {
            // line 507
            yield "        <div class=\"mk-grid\" id=\"productsGrid\">
            ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 508, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 509
                yield "                <div class=\"mk-card\" 
                     data-name=\"";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 510)), "html", null, true);
                yield "\" 
                     data-cat=\"";
                // line 511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 511)), "html", null, true);
                yield "\" 
                     data-desc=\"";
                // line 512
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 512)), "html", null, true);
                yield "\">
                    
                    <div class=\"mk-card-img-wrapper\">
                        <button onclick=\"toggleFavorite(";
                // line 515
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 515), "html", null, true);
                yield ", this)\" class=\"mk-fav-btn\" style=\"color:";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 515), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 515, $this->source); })()))) {
                    yield "#ef4444";
                } else {
                    yield "#9ca3af";
                }
                yield ";\">
                            <i class=\"fas fa-heart\"></i>
                        </button>
                        
                        ";
                // line 519
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 520
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "imageUrl", [], "any", false, false, false, 520), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 520), "html", null, true);
                    yield "\" class=\"mk-card-img\" loading=\"lazy\">
                        ";
                } else {
                    // line 522
                    yield "                            <div style=\"width:100%; height:100%; background:#f1f5f9; display:flex; align-items:center; justify-content:center; font-size:48px;\">📦</div>
                        ";
                }
                // line 524
                yield "
                        ";
                // line 525
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 526
                    yield "                            <span class=\"mk-cat-badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 526), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 528
                yield "                    </div>

                    <div class=\"mk-card-content\">
                        <div class=\"mk-card-header\">
                            <h2 class=\"mk-card-title\">";
                // line 532
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 532), "html", null, true);
                yield "</h2>
                            <div class=\"mk-card-price-wrapper\" data-vendor-id=\"";
                // line 533
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 533)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 533), "id", [], "any", false, false, false, 533), "html", null, true)) : (""));
                yield "\" data-price-eur=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 533), "html", null, true);
                yield "\">
                                <div class=\"mk-card-price price-normal\">";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 534), "html", null, true);
                yield " €</div>
                                <div class=\"promo-price-block\" style=\"display:none; flex-direction:column; align-items:flex-end; gap:2px;\">
                                    <span class=\"price-original-crossed\" style=\"font-size:12px; color:#94a3b8; text-decoration:line-through; font-weight:500;\"></span>
                                    <div style=\"display:flex; align-items:center; gap:8px;\">
                                        <span class=\"promo-pct-badge\" style=\"background:#ef4444; color:#fff; padding:2px 6px; border-radius:6px; font-size:11px; font-weight:800;\"></span>
                                        <span class=\"price-discounted\" style=\"font-size:20px; font-weight:800; color:#ef4444;\"></span>
                                    </div>
                                </div>
                                <div class=\"promo-countdown\" style=\"display:none; font-size:11px; font-weight:700; color:#ef4444; margin-top:4px; align-items:center; gap:4px;\"></div>
                            </div>
                        </div>
                        
                        <p class=\"mk-card-desc\">";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 546), "html", null, true);
                yield "</p>

                        ";
                // line 548
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 548)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 549
                    yield "                            <div class=\"mk-vendor-info\">
                                <i class=\"fas fa-store\"></i> Vendu par : 
                                <span class=\"mk-vendor-name\">";
                    // line 551
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 551), "nom", [], "any", false, false, false, 551), "html", null, true);
                    yield "</span>
                                ";
                    // line 552
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 552), "statut", [], "any", false, false, false, 552) == "actif")) {
                        // line 553
                        yield "                                    <span class=\"mk-status-badge\">ACTIF</span>
                                ";
                    }
                    // line 555
                    yield "                            </div>
                        ";
                }
                // line 557
                yield "
                        <div class=\"mk-rating-row\" style=\"flex-wrap: wrap;\">
                            <div style=\"display:flex; align-items:center; gap:6px; width: 100%; justify-content: space-between; margin-bottom: 8px;\">
                                <div style=\"display:flex; align-items:center; gap:6px;\">
                                    <div class=\"mk-rating-stars\">
                                        ";
                // line 562
                $context["fullStars"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", true, true, false, 562)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 562), 0)) : (0)), 0, "floor");
                // line 563
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 564
                    yield "                                            ";
                    if (($context["i"] <= (isset($context["fullStars"]) || array_key_exists("fullStars", $context) ? $context["fullStars"] : (function () { throw new RuntimeError('Variable "fullStars" does not exist.', 564, $this->source); })()))) {
                        // line 565
                        yield "                                                <i class=\"fas fa-star\"></i>
                                            ";
                    } else {
                        // line 567
                        yield "                                                <i class=\"far fa-star\"></i>
                                            ";
                    }
                    // line 569
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 570
                yield "                                    </div>
                                    <span class=\"mk-rating-text\">";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", true, true, false, 571)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 571), 0)) : (0)), 1), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ratingCount", [], "any", true, true, false, 571)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ratingCount", [], "any", false, false, false, 571), 0)) : (0)), "html", null, true);
                yield " avis)</span>
                                </div>
                            </div>

                            <div style=\"display:flex; align-items:center; justify-content: space-between; width: 100%;\">
                                <form method=\"post\" action=\"";
                // line 576
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_rate_product", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 576)]), "html", null, true);
                yield "\" style=\"display:flex; align-items:center; gap:4px;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 577
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("rate_product_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 577))), "html", null, true);
                yield "\">
                                    <select name=\"rating\" style=\"font-size:11px; padding:2px 6px; border:1px solid var(--mk-border); border-radius:6px; background:#f8fafc; color:var(--mk-text); cursor:pointer; outline:none;\">
                                        <option value=\"5\">⭐⭐⭐⭐⭐ 5</option>
                                        <option value=\"4\">⭐⭐⭐⭐ 4</option>
                                        <option value=\"3\">⭐⭐⭐ 3</option>
                                        <option value=\"2\">⭐⭐ 2</option>
                                        <option value=\"1\">⭐ 1</option>
                                    </select>
                                    <button type=\"submit\" style=\"font-size:10px; padding:4px 10px; background:var(--mk-primary); border:none; color:white; border-radius:6px; cursor:pointer; font-weight:700; transition: all 0.2s;\">
                                        Évaluer
                                    </button>
                                </form>

                                <!-- Menu 3 points -->
                                ";
                // line 591
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 591) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "vendeur", [], "any", false, false, false, 591), "email", [], "any", false, false, false, 591) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "email", [], "any", false, false, false, 591)))))) {
                    // line 592
                    yield "                                    <div style=\"position: relative;\">
                                        <button type=\"button\" onclick=\"toggleCardMenu(";
                    // line 593
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 593), "html", null, true);
                    yield ", event)\" style=\"background:transparent; border:none; cursor:pointer; padding:4px 8px; color:var(--mk-text-light); transition: color 0.2s;\">
                                            <i class=\"fas fa-ellipsis-v\"></i>
                                        </button>
                                        <div id=\"card-menu-";
                    // line 596
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 596), "html", null, true);
                    yield "\" class=\"mk-card-menu-dropdown\" style=\"display:none; position:absolute; bottom:100%; right:0; margin-bottom: 8px; background:#fff; border:1px solid var(--mk-border); border-radius:8px; box-shadow:0 4px 6px rgba(0,0,0,0.1); z-index:100; min-width:140px; overflow:hidden;\">
                                            <a href=\"";
                    // line 597
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_edit_product", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 597)]), "html", null, true);
                    yield "\" style=\"display:block; padding:10px 12px; font-size:13px; color:var(--mk-text); text-decoration:none; border-bottom:1px solid #f1f5f9;\">
                                                <i class=\"fas fa-edit\" style=\"margin-right:6px; color:var(--mk-secondary);\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"";
                    // line 600
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_delete_product", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 600)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\" style=\"margin:0;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 601
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_product_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 601))), "html", null, true);
                    yield "\">
                                                <button type=\"submit\" style=\"display:block; width:100%; text-align:left; padding:10px 12px; font-size:13px; color:#ef4444; background:none; border:none; cursor:pointer;\">
                                                    <i class=\"fas fa-trash-alt\" style=\"margin-right:6px;\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                ";
                }
                // line 609
                yield "                            </div>
                        </div>

                        <div class=\"mk-stock-status\">
                            ";
                // line 613
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 613) > 0)) {
                    // line 614
                    yield "                                <i class=\"fas fa-check-circle\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 614), "html", null, true);
                    yield " en stock
                            ";
                } else {
                    // line 616
                    yield "                                <i class=\"fas fa-times-circle\" style=\"color:#ef4444;\"></i> Rupture de stock
                            ";
                }
                // line 618
                yield "                        </div>

                        <div style=\"margin-top:auto;\">
                            ";
                // line 621
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 621) > 0)) {
                    // line 622
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 622)]), "html", null, true);
                    yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 623
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 623))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"mk-btn-action mk-btn-cart\">
                                        <i class=\"fas fa-shopping-cart\"></i> Ajouter au panier
                                    </button>
                                </form>
                            ";
                } else {
                    // line 629
                    yield "                                <button class=\"mk-btn-action\" disabled style=\"background:#e2e8f0; color:#94a3b8; cursor:not-allowed;\">
                                    Indisponible
                                </button>
                            ";
                }
                // line 633
                yield "
                            <a href=\"";
                // line 634
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_social_reviews", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "idProduit", [], "any", false, false, false, 634)]), "html", null, true);
                yield "\" class=\"mk-btn-action mk-btn-social\">
                                <i class=\"fas fa-globe\"></i> Avis Sociaux
                            </a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 641
            yield "        </div>

        <p id=\"noResults\" style=\"display:none; text-align:center; padding:40px; color:var(--mk-text-light); font-weight:600;\">
            🔍 Aucun produit ne correspond à votre recherche.
        </p>
    ";
        }
        // line 647
        yield "</div>

";
        // line 650
        yield "<div id=\"ai-ranking-modal\" style=\"display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(15,23,42,0.6); backdrop-filter:blur(4px); z-index:9999; align-items:center; justify-content:center; padding:20px;\">
    <div style=\"background:#fff; padding:32px; border-radius:24px; width:100%; max-width:700px; max-height:90vh; overflow-y:auto; position:relative; box-shadow:0 25px 50px -12px rgba(0,0,0,0.25);\">
        <button onclick=\"document.getElementById('ai-ranking-modal').style.display='none'\" style=\"position:absolute; right:24px; top:24px; background:#f1f5f9; border:none; width:40px; height:40px; border-radius:50%; font-size:20px; cursor:pointer; color:#64748b; display:flex; align-items:center; justify-content:center;\">&times;</button>
        <h2 style=\"margin-top:0; color:var(--mk-text); font-size:24px; font-weight:800; margin-bottom:24px; display:flex; align-items:center; gap:12px;\">
            <i class=\"fas fa-award\" style=\"color:#fbbf24;\"></i> Classement des Boutiques
        </h2>
        <div id=\"ranking-container\"></div>
    </div>
</div>

<div id=\"translate-overlay\" style=\"display:none; position:fixed; inset:0; background:rgba(15,23,42,0.4); backdrop-filter:blur(4px); z-index:10000; align-items:center; justify-content:center;\">
    <div style=\"background:#fff; border-radius:24px; padding:40px; box-shadow:0 25px 50px -12px rgba(0,0,0,0.25); text-align:center;\">
        <div style=\"font-size:48px; margin-bottom:16px; animation: spin 2s linear infinite;\">🌐</div>
        <p style=\"font-weight:800; color:var(--mk-text); font-size:18px;\">Traduction en cours...</p>
    </div>
</div>

<style>
    @keyframes spin { 100% { transform: rotate(360deg); } }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 672
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

        // line 673
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
/* ═══════════════════════════ Filtrage ═══════════════════════════ */
function filterProducts() {
    const q = document.getElementById('searchInput').value.toLowerCase().trim();
    const cat = document.getElementById('catFilter').value.toLowerCase();
    const cards = document.querySelectorAll('.mk-card');
    let visible = 0;

    cards.forEach(card => {
        const name = card.dataset.name || '';
        const c = card.dataset.cat || '';
        const desc = card.dataset.desc || '';
        const matchQ = !q || name.includes(q) || desc.includes(q);
        const matchCat = !cat || c.includes(cat);
        
        if (matchQ && matchCat) {
            card.style.display = '';
            visible++;
        } else {
            card.style.display = 'none';
        }
    });

    const noRes = document.getElementById('noResults');
    if (noRes) noRes.style.display = visible === 0 ? 'block' : 'none';
}

/* ═══════════════════════════ Favoris ═══════════════════════════ */
function toggleFavorite(id, btn) {
    fetch('/marketplace/api/favorites/toggle/' + id, {method: 'POST'})
        .then(r => r.json())
        .then(data => {
            if(data.success) {
                btn.style.color = data.isFavorite ? '#ef4444' : '#9ca3af';
                const favCount = document.getElementById('fav-count-top');
                if (favCount) favCount.textContent = data.count;
            }
        });
}

/* ═══════════════════════════ Dropdowns ═══════════════════════════ */
function setupDropdown(btnId, dropdownId) {
    const btn = document.getElementById(btnId);
    const dropdown = document.getElementById(dropdownId);
    if (!btn || !dropdown) return;

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = dropdown.style.display === 'block';
        document.querySelectorAll('[id\$=\"-dropdown\"]').forEach(d => d.style.display = 'none');
        dropdown.style.display = isOpen ? 'none' : 'block';
    });
}

setupDropdown('translate-btn', 'translate-dropdown');
setupDropdown('currency-btn', 'currency-dropdown');

document.addEventListener('click', () => {
    document.querySelectorAll('[id\$=\"-dropdown\"]').forEach(d => d.style.display = 'none');
    document.querySelectorAll('.mk-card-menu-dropdown').forEach(m => m.style.display = 'none');
});

/* ═══════════════════════════ Card Menu ═══════════════════════════ */
function toggleCardMenu(id, event) {
    event.stopPropagation();
    event.preventDefault();
    const menu = document.getElementById('card-menu-' + id);
    const isOpen = menu.style.display === 'block';
    
    // Fermer tous les autres menus
    document.querySelectorAll('.mk-card-menu-dropdown').forEach(m => m.style.display = 'none');
    
    // Ouvrir si c'était fermé
    if (!isOpen) {
        menu.style.display = 'block';
    }
}

/* ═══════════════════════════ Ranking Modal ═══════════════════════════ */
const openRankingBtn = document.getElementById('open-ranking-modal');
if (openRankingBtn) {
    openRankingBtn.addEventListener('click', () => {
        const container = document.getElementById('ranking-container');
        document.getElementById('ai-ranking-modal').style.display = 'flex';
        container.innerHTML = '<div style=\"text-align:center; padding:40px; color:#64748b;\"><i class=\"fas fa-spinner fa-spin fa-2x\"></i><br><br>Analyse des performances...</div>';

        fetch('";
        // line 760
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_api_shops_ranking");
        yield "')
            .then(r => r.json())
            .then(data => {
                if(data.success) {
                    let html = '';
                    data.shops.forEach((shop, index) => {
                        const rankColor = index === 0 ? '#fbbf24' : (index === 1 ? '#94a3b8' : (index === 2 ? '#b45309' : '#3b82f6'));
                        html += `
                            <div style=\"border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; margin-bottom: 16px; transition: transform 0.2s;\">
                                <div style=\"display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:12px;\">
                                    <div>
                                        <div style=\"font-size:11px; font-weight:800; color:\${rankColor}; text-transform:uppercase; margin-bottom:4px;\">RANG #\${index+1}</div>
                                        <strong style=\"font-size:18px; color:var(--mk-text);\">\${shop.nom}</strong>
                                    </div>
                                    <div style=\"background:#1e293b; color:#fff; padding:4px 12px; border-radius:20px; font-size:13px; font-weight:700;\">
                                        ★ \${shop.rating}
                                    </div>
                                </div>
                                <div style=\"background:#f8fafc; padding:12px; border-radius:12px; border-left:4px solid \${rankColor}; font-size:13px; color:#475569; line-height:1.5;\">
                                    \${shop.ai_insight}
                                </div>
                            </div>
                        `;
                    });
                    container.innerHTML = html || '<p>Aucune boutique trouvée.</p>';
                }
            });
    });
}

/* ══════════════════════════════════════════════════════════════
   TRADUCTION MARKETPLACE — ApiController
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';

    let currentLang = 'fr';
    const SELECTORS = [
        '.mk-card-title',
        '.mk-card-desc',
        '.mk-cat-badge',
        '.mk-stock-status',
        '.bc-empty h3',
        '.bc-empty p',
        '#noResults',
    ];

    const dropdown = document.getElementById('translate-dropdown');
    const overlay  = document.getElementById('translate-overlay');

    document.querySelectorAll('.lang-item').forEach(function (item) {
        item.addEventListener('click', function () {
            const lang  = this.dataset.lang;
            const label = this.dataset.label;
            if (dropdown) dropdown.style.display = 'none';
            if (lang === currentLang) return;
            applyTranslation(lang, label);
        });
    });

    function collectNodes() {
        const seen  = new Set();
        const nodes = [];
        SELECTORS.forEach(function (sel) {
            document.querySelectorAll(sel).forEach(function (el) {
                el.childNodes.forEach(function (child) {
                    if (child.nodeType === Node.TEXT_NODE
                        && child.textContent.trim().length > 0
                        && !seen.has(child)) {
                        seen.add(child);
                        nodes.push(child);
                    }
                });
            });
        });
        return nodes;
    }

    async function translateBatch(textsArray, sourceLang, targetLang) {
        if (!textsArray || textsArray.length === 0) return [];
        try {
            const resp = await fetch('/marketplace/api/translate-batch', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ texts: textsArray, source_lang: sourceLang, target_lang: targetLang })
            });
            if (!resp.ok) return textsArray;
            const json = await resp.json();
            return json.translatedTexts || textsArray;
        } catch (e) {
            console.error('Translation error:', e);
            return textsArray;
        }
    }

    async function applyTranslation(targetLang, label) {
        const nodes = collectNodes();
        if (!nodes.length) return;

        nodes.forEach(n => { if (!n._origText) n._origText = n.textContent; });

        if (targetLang === 'fr') {
            nodes.forEach(n => { n.textContent = n._origText; });
            document.documentElement.dir = 'ltr';
            setActive(targetLang, label);
            currentLang = 'fr';
            return;
        }

        if (overlay) overlay.style.display = 'flex';

        try {
            const batchSize = 40;
            for (let i = 0; i < nodes.length; i += batchSize) {
                const batchNodes = nodes.slice(i, i + batchSize);
                const originalTexts = batchNodes.map(n => n._origText);
                const translatedTexts = await translateBatch(originalTexts, 'fr', targetLang);
                batchNodes.forEach((n, idx) => { if(translatedTexts[idx]) n.textContent = translatedTexts[idx]; });
            }
            document.documentElement.dir = (targetLang === 'ar') ? 'rtl' : 'ltr';
            setActive(targetLang, label);
            currentLang = targetLang;
        } catch (err) {
            console.error('Translation failed:', err);
        } finally {
            if (overlay) overlay.style.display = 'none';
        }
    }

    function setActive(lang, label) {
        const labelEl = document.getElementById('translate-label');
        if (labelEl) labelEl.textContent = label || lang;
        document.querySelectorAll('.lang-item').forEach(li => {
            li.classList.toggle('lang-active', li.dataset.lang === lang);
        });
    }
})();

/* ══════════════════════════════════════════════════════════════
   CONVERTISSEUR DE DEVISES — ApiController
   ══════════════════════════════════════════════════════════════ */
/* ══════════════════════════════════════════════════════════════
   GLOBAL STATE POUR DEVISES (Partagé entre Currency et Flash Promo)
   ══════════════════════════════════════════════════════════════ */
window.MK_CURRENCY = {
    code: 'EUR',
    symbol: '€',
    rate: 1
};

/* ══════════════════════════════════════════════════════════════
   CONVERTISSEUR DE DEVISES — ApiController
   ══════════════════════════════════════════════════════════════ */
(function() {
    const curDropdown = document.getElementById('currency-dropdown');
    let rates = null;

    async function fetchRates() {
        if(rates) return rates;
        try {
            const response = await fetch('/marketplace/api/currency-rates');
            const data = await response.json();
            if(data && data.rates) rates = data.rates;
        } catch(e) { console.error('Currency API error:', e); }
        return rates;
    }

    function formatPrice(val, symbol, code) {
        const formatted = val.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 2 });
        return ['USD', 'GBP', 'CAD', 'JPY', 'CNY', 'SAR'].includes(code) ? `\${symbol} \${formatted}` : `\${formatted} \${symbol}`;
    }

    document.querySelectorAll('.currency-item').forEach(item => {
        item.addEventListener('click', async function() {
            const targetCurrency = this.dataset.currency;
            const symbol = this.dataset.symbol;
            const flag = this.dataset.flag;
            
            if (curDropdown) curDropdown.style.display = 'none';
            if (targetCurrency === window.MK_CURRENCY.code) return;

            document.querySelectorAll('.currency-item').forEach(li => li.classList.remove('currency-active'));
            this.classList.add('currency-active');
            
            const labelEl = document.getElementById('currency-label');
            const flagEl = document.getElementById('currency-flag');
            if (labelEl) labelEl.textContent = `\${targetCurrency} (\${symbol})`;
            if (flagEl) flagEl.textContent = flag;

            const fetchedRates = await fetchRates();
            if (!fetchedRates) {
                alert(\"Impossible de charger les taux de change.\");
                return;
            }

            const rate = fetchedRates[targetCurrency] || 1;
            
            // Update Global State
            window.MK_CURRENCY.code = targetCurrency;
            window.MK_CURRENCY.symbol = symbol;
            window.MK_CURRENCY.rate = rate;

            // Mise à jour de tous les prix (Normaux et Promos)
            document.querySelectorAll('.mk-card-price-wrapper').forEach(wrapper => {
                const basePriceEur = parseFloat(wrapper.getAttribute('data-price-eur'));
                if (isNaN(basePriceEur)) return;

                const convertedBase = basePriceEur * rate;
                
                // Update Normal Price
                const normalEl = wrapper.querySelector('.price-normal');
                if (normalEl) normalEl.textContent = formatPrice(convertedBase, symbol, targetCurrency);

                // Update Promo Prices (if currently active)
                const card = wrapper.closest('.mk-card');
                if (card && card.classList.contains('promo-active')) {
                    const originalEl = wrapper.querySelector('.price-original-crossed');
                    const discountedEl = wrapper.querySelector('.price-discounted');
                    const pctBadge = wrapper.querySelector('.promo-pct-badge');
                    
                    if (originalEl) originalEl.textContent = formatPrice(convertedBase, symbol, targetCurrency);
                    
                    if (discountedEl && pctBadge) {
                        const pct = parseInt(pctBadge.textContent.replace('-', '').replace('%', ''));
                        const discountedEur = basePriceEur * (1 - pct / 100);
                        discountedEl.textContent = formatPrice(discountedEur * rate, symbol, targetCurrency);
                    }
                }
            });
        });
    });

    // Helper global pour le polling flash promo
    window.formatPriceGlobal = formatPrice;
})();

/* ══════════════════════════════════════════════════════════════
   FLASH PROMO — Polling temps réel
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';

    let bannerEl = null;
    function ensureBanner() {
        if (!bannerEl) {
            bannerEl = document.createElement('div');
            bannerEl.id = 'flash-promo-banner';
            bannerEl.innerHTML = `
                <div style=\"font-size: 24px; margin-bottom: 4px;\">⚡</div>
                <div id=\"fp-banner-text\" style=\"font-weight: 700;\">Promotion flash en cours !</div>
                <div class=\"banner-cd\" id=\"fp-banner-cd\"></div>
            `;
            document.body.appendChild(bannerEl);
        }
        return bannerEl;
    }

    let bannerCdInt = null;

    function applyPromos(promos) {
        const { code, symbol, rate } = window.MK_CURRENCY;

        document.querySelectorAll('.mk-card-price-wrapper').forEach(wrapper => {
            const vendorId = wrapper.dataset.vendorId;
            const originalPriceEur = parseFloat(wrapper.dataset.priceEur);
            const promo = promos[vendorId];
            const card = wrapper.closest('.mk-card');

            const normalDiv = wrapper.querySelector('.price-normal');
            const promoDiv = wrapper.querySelector('.promo-price-block');
            const countdownDiv = wrapper.querySelector('.promo-countdown');
            const crossedEl = wrapper.querySelector('.price-original-crossed');
            const discountedEl = wrapper.querySelector('.price-discounted');
            const pctBadgeEl = wrapper.querySelector('.promo-pct-badge');

            if (promo && promo.remainingSeconds > 0 && !isNaN(originalPriceEur)) {
                const pct = promo.discountPercent;
                const discountedEur = originalPriceEur * (1 - pct / 100);

                if (normalDiv) normalDiv.style.display = 'none';
                if (promoDiv) promoDiv.style.display = 'flex';
                if (countdownDiv) {
                    countdownDiv.style.display = 'flex';
                    countdownDiv.innerHTML = `<i class=\"fas fa-clock\"></i> Expire dans \${promo.remainingSeconds}s`;
                }

                // Appliquer la conversion de devise sur les prix promo
                if (crossedEl) crossedEl.textContent = window.formatPriceGlobal(originalPriceEur * rate, symbol, code);
                if (discountedEl) discountedEl.textContent = window.formatPriceGlobal(discountedEur * rate, symbol, code);
                if (pctBadgeEl) pctBadgeEl.textContent = '-' + pct + '%';

                if (card) card.classList.add('promo-active');
            } else {
                if (normalDiv) {
                    normalDiv.style.display = 'block';
                    // S'assurer que le prix normal est aussi converti si on vient de quitter une promo
                    normalDiv.textContent = window.formatPriceGlobal(originalPriceEur * rate, symbol, code);
                }
                if (promoDiv) promoDiv.style.display = 'none';
                if (countdownDiv) countdownDiv.style.display = 'none';
                if (card) card.classList.remove('promo-active');
            }
        });

        const activeVendors = Object.keys(promos).filter(id => promos[id].remainingSeconds > 0);
        if (activeVendors.length > 0) {
            showBanner(promos, activeVendors);
        } else {
            hideBanner();
        }
    }

    function showBanner(promos, activeIds) {
        const b = ensureBanner();
        b.style.display = 'block';

        let maxRem = 0;
        let names = [];
        activeIds.forEach(id => {
            if (promos[id].remainingSeconds > maxRem) maxRem = promos[id].remainingSeconds;
            names.push(promos[id].vendorName);
        });

        const textEl = document.getElementById('fp-banner-text');
        const cdEl = document.getElementById('fp-banner-cd');
        if (textEl) textEl.textContent = '⚡ Flash Promo : ' + names.join(', ');
        
        clearInterval(bannerCdInt);
        let rem = maxRem;
        bannerCdInt = setInterval(() => {
            rem--;
            if (rem <= 0) {
                clearInterval(bannerCdInt);
                hideBanner();
            } else if (cdEl) {
                cdEl.textContent = 'Expire dans ' + rem + ' s';
            }
        }, 1000);
    }

    function hideBanner() {
        if (bannerEl) bannerEl.style.display = 'none';
        clearInterval(bannerCdInt);
    }

    async function poll() {
        try {
            const r = await fetch('/marketplace/api/flash-promos');
            const data = await r.json();
            applyPromos(data.promos || {});
        } catch (e) {}
    }

    poll();
    setInterval(poll, 2000);
})();
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
        return array (  1067 => 760,  977 => 673,  964 => 672,  933 => 650,  929 => 647,  921 => 641,  908 => 634,  905 => 633,  899 => 629,  890 => 623,  885 => 622,  883 => 621,  878 => 618,  874 => 616,  868 => 614,  866 => 613,  860 => 609,  849 => 601,  845 => 600,  839 => 597,  835 => 596,  829 => 593,  826 => 592,  824 => 591,  807 => 577,  803 => 576,  793 => 571,  790 => 570,  784 => 569,  780 => 567,  776 => 565,  773 => 564,  768 => 563,  766 => 562,  759 => 557,  755 => 555,  751 => 553,  749 => 552,  745 => 551,  741 => 549,  739 => 548,  734 => 546,  719 => 534,  713 => 533,  709 => 532,  703 => 528,  697 => 526,  695 => 525,  692 => 524,  688 => 522,  680 => 520,  678 => 519,  665 => 515,  659 => 512,  655 => 511,  651 => 510,  648 => 509,  644 => 508,  641 => 507,  633 => 501,  630 => 500,  622 => 494,  619 => 493,  593 => 468,  563 => 439,  557 => 435,  552 => 433,  546 => 430,  541 => 428,  532 => 421,  521 => 419,  517 => 418,  508 => 411,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Marketplace{% endblock %}

{% block body %}
<style>
    :root {
        --mk-primary: #0d9488; /* Teal */
        --mk-primary-hover: #0f766e;
        --mk-secondary: #3b82f6; /* Blue for Sell button */
        --mk-bg: #f8fafc;
        --mk-border: #e2e8f0;
        --mk-text: #1e293b;
        --mk-text-light: #64748b;
        --mk-white: #ffffff;
        --mk-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    #content { padding: 0 !important; background: var(--mk-bg); }

    .mk-container {
        padding: 24px;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ── HEADER ── */
    .mk-header-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 32px;
        flex-wrap: wrap;
    }

    .mk-search-container {
        flex: 1;
        min-width: 300px;
        display: flex;
        align-items: center;
        background: #f1f5f9;
        border: 1px solid var(--mk-border);
        border-radius: 12px;
        padding: 0 16px;
        height: 48px;
        transition: all 0.2s ease;
    }

    .mk-search-container:focus-within {
        background: #fff;
        border-color: var(--mk-primary);
        box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
    }

    .mk-search-icon {
        color: #94a3b8;
        margin-right: 12px;
    }

    .mk-search-input {
        flex: 1;
        border: none;
        background: transparent;
        outline: none;
        font-size: 14px;
        color: var(--mk-text);
    }

    .mk-search-divider {
        width: 1px;
        height: 24px;
        background: #e2e8f0;
        margin: 0 12px;
    }

    .mk-category-select {
        border: none;
        background: transparent;
        outline: none;
        font-size: 14px;
        color: var(--mk-text-light);
        cursor: pointer;
        padding-right: 8px;
    }

    .mk-btn-top {
        display: flex;
        align-items: center;
        gap: 8px;
        height: 48px;
        padding: 0 20px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        border: 1px solid var(--mk-border);
        white-space: nowrap;
    }

    .mk-btn-teal {
        background: var(--mk-primary);
        color: #fff;
        border-color: var(--mk-primary);
    }

    .mk-btn-teal:hover {
        background: var(--mk-primary-hover);
        transform: translateY(-1px);
    }

    .mk-btn-white {
        background: #fff;
        color: var(--mk-text);
    }

    .mk-btn-white:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }

    .mk-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        font-size: 11px;
        font-weight: 700;
        margin-left: 4px;
    }

    .mk-badge-red { background: #fee2e2; color: #ef4444; }
    .mk-badge-dark { background: #1e293b; color: #fff; }

    /* ── SELL BUTTON ── */
    .mk-sell-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .mk-btn-sell {
        background: var(--mk-secondary);
        color: #fff;
        padding: 12px 32px;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.3);
        transition: all 0.2s;
    }

    .mk-btn-sell:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 20px 25px -5px rgba(59, 130, 246, 0.4);
        color: white;
    }

    /* ── PRODUCT GRID ── */
    .mk-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 20px;
    }

    .mk-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        border: 1px solid #f1f5f9;
    }

    .mk-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 20px -5px rgba(0, 0, 0, 0.1);
    }

    .mk-card-img-wrapper {
        position: relative;
        height: 180px;
        overflow: hidden;
    }

    .mk-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .mk-card:hover .mk-card-img {
        transform: scale(1.1);
    }

    .mk-fav-btn {
        position: absolute;
        top: 16px;
        left: 16px;
        width: 36px;
        height: 36px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        z-index: 10;
        transition: all 0.2s;
    }

    .mk-fav-btn i { font-size: 16px; }

    .mk-cat-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        background: var(--mk-primary);
        color: #fff;
        padding: 6px 14px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 700;
        z-index: 10;
    }

    .mk-card-content {
        padding: 16px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .mk-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 10px;
        gap: 10px;
    }

    .mk-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--mk-text);
        margin: 0;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .mk-card-price {
        font-size: 16px;
        font-weight: 800;
        color: var(--mk-primary);
        white-space: nowrap;
    }

    .mk-card-desc {
        font-size: 13px;
        color: var(--mk-text-light);
        margin-bottom: 16px;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex: 1;
    }

    .mk-vendor-info {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        font-size: 13px;
        color: var(--mk-text-light);
    }

    .mk-vendor-name {
        color: var(--mk-primary);
        font-weight: 700;
    }

    .mk-status-badge {
        background: #d1fae5;
        color: #065f46;
        padding: 2px 8px;
        border-radius: 8px;
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
    }

    .mk-rating-row {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 16px;
    }

    .mk-rating-stars { color: #fbbf24; font-size: 14px; }
    .mk-rating-text { font-size: 13px; color: var(--mk-text-light); font-weight: 500; }

    .mk-stock-status {
        font-size: 13px;
        color: #10b981;
        font-weight: 600;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .mk-btn-action {
        width: 100%;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.2s;
        margin-bottom: 10px;
        text-decoration: none;
    }

    .mk-btn-cart {
        background: var(--mk-primary);
        color: #fff;
    }

    .mk-btn-cart:hover { background: var(--mk-primary-hover); transform: scale(1.02); }

    .mk-btn-social {
        background: #fff;
        border: 1px solid var(--mk-border);
        color: var(--mk-text);
    }

    .mk-btn-social:hover { background: #f8fafc; border-color: #cbd5e1; }
    .mk-btn-social i { color: #3b82f6; }

    /* ── FLASH PROMO BANNER ── */
    #flash-promo-banner {
        display: none;
        position: fixed;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(135deg, #1e293b, #0f172a);
        color: #fff;
        border-radius: 20px;
        padding: 16px 32px;
        z-index: 9999;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2);
        min-width: 350px;
        text-align: center;
        border: 1px solid rgba(239, 68, 68, 0.3);
        animation: banner-in 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    @keyframes banner-in {
        from { transform: translateX(-50%) translateY(100px); opacity: 0; }
        to   { transform: translateX(-50%) translateY(0); opacity: 1; }
    }

    .banner-cd {
        color: #fde68a;
        font-weight: 800;
        margin-top: 4px;
        font-size: 14px;
    }

    .mk-card.promo-active {
        border: 2px solid #ef4444;
        box-shadow: 0 0 20px rgba(239, 68, 68, 0.15);
    }

    /* Custom scrollbar for dropdown */
    .premium-scroll::-webkit-scrollbar { width: 6px; }
    .premium-scroll::-webkit-scrollbar-track { background: transparent; }
    .premium-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .premium-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    /* Translation Dropdown override */
    .lang-item:hover { background: #f1f5f9; }
    .lang-item.lang-active { background: #f0fdfa; color: var(--mk-primary); font-weight: bold; }
</style>

<div class=\"mk-container\">
    {# ── Top Header Section ── #}
    <div class=\"mk-header-actions\">
        <div class=\"mk-search-container\">
            <i class=\"fas fa-search mk-search-icon\"></i>
            <input type=\"text\" id=\"searchInput\" class=\"mk-search-input\" placeholder=\"Rechercher...\" oninput=\"filterProducts()\">
            <div class=\"mk-search-divider\"></div>
            <select id=\"catFilter\" class=\"mk-category-select\" onchange=\"filterProducts()\">
                <option value=\"\">Toutes catégories</option>
                {% for cat in categories %}
                    <option value=\"{{ cat }}\">{{ cat }}</option>
                {% endfor %}
            </select>
        </div>

        <button id=\"open-ranking-modal\" class=\"mk-btn-top mk-btn-teal\">
            <i class=\"fas fa-store\"></i> Top boutiques
        </button>

        <a href=\"{{ path('marketplace_favorites') }}\" class=\"mk-btn-top mk-btn-white\">
            <i class=\"fas fa-heart\" style=\"color:#ef4444;\"></i> Favoris
            <span id=\"fav-count-top\" class=\"mk-badge mk-badge-red\">{{ favorites|length }}</span>
        </a>

        <a href=\"{{ path('cart_index') }}\" class=\"mk-btn-top mk-btn-white\">
            <i class=\"fas fa-shopping-cart\"></i> Panier
            <span id=\"cart-count-top\" class=\"mk-badge mk-badge-dark\">{{ cart_count|default(0) }}</span>
        </a>

        {# Language Selector #}
        <div style=\"position:relative;\" id=\"translate-widget\">
            <button id=\"translate-btn\" class=\"mk-btn-top mk-btn-white\">
                <i class=\"fas fa-globe\" style=\"color: var(--mk-primary);\"></i>
                <span id=\"translate-label\">Français</span>
                <i class=\"fas fa-chevron-down\" style=\"font-size: 10px; margin-left: 4px; opacity: 0.5;\"></i>
            </button>
            <div id=\"translate-dropdown\" style=\"display:none; position:absolute; right:0; top:calc(100% + 8px); background:#fff; border:1px solid var(--mk-border); border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,0.1); width:340px; z-index:10000; overflow:hidden;\">
                <div style=\"padding:12px; font-size:12px; font-weight:800; color:var(--mk-text-light); border-bottom:1px solid #f1f5f9; background:#f8fafc;\">LANGUES</div>
                <ul id=\"lang-list\" class=\"premium-scroll\" style=\"list-style:none; padding:12px; margin:0; display:grid; grid-template-columns:1fr 1fr; gap:6px; max-height:300px; overflow-y:auto;\">
                    <li data-lang=\"fr\" data-label=\"Français\" class=\"lang-item lang-active\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇫🇷</span> Français</li>
                    <li data-lang=\"en\" data-label=\"English\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇬🇧</span> English</li>
                    <li data-lang=\"es\" data-label=\"Español\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇪🇸</span> Español</li>
                    <li data-lang=\"de\" data-label=\"Deutsch\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇩🇪</span> Deutsch</li>
                    <li data-lang=\"it\" data-label=\"Italiano\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇮🇹</span> Italiano</li>
                    <li data-lang=\"pt\" data-label=\"Português\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇵🇹</span> Português</li>
                    <li data-lang=\"nl\" data-label=\"Nederlands\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇳🇱</span> Nederlands</li>
                    <li data-lang=\"sv\" data-label=\"Svenska\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇸🇪</span> Svenska</li>
                    <li data-lang=\"ru\" data-label=\"Русский\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇷🇺</span> Русский</li>
                    <li data-lang=\"ar\" data-label=\"العربية\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇸🇦</span> العربية</li>
                    <li data-lang=\"zh\" data-label=\"中文\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇨🇳</span> 中文</li>
                    <li data-lang=\"ja\" data-label=\"日本語\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇯🇵</span> 日本語</li>
                    <li data-lang=\"ko\" data-label=\"한국어\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇰🇷</span> 한국어</li>
                    <li data-lang=\"tr\" data-label=\"Türkçe\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇹🇷</span> Türkçe</li>
                    <li data-lang=\"hi\" data-label=\"हिन्दी\" class=\"lang-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:10px;\"><span style=\"font-size:18px;\">🇮🇳</span> हिन्दी</li>
                </ul>
            </div>
        </div>

        {# Currency Selector #}
        <div style=\"position:relative;\" id=\"currency-widget\">
            <button id=\"currency-btn\" class=\"mk-btn-top mk-btn-white\">
                <span id=\"currency-flag\">🇪🇺</span>
                <span id=\"currency-label\" style=\"margin: 0 4px;\">EUR (€)</span>
                <i class=\"fas fa-chevron-down\" style=\"font-size: 10px; opacity: 0.5;\"></i>
            </button>
            <div id=\"currency-dropdown\" style=\"display:none; position:absolute; right:0; top:calc(100% + 8px); background:#fff; border:1px solid var(--mk-border); border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,0.1); width:200px; z-index:100; overflow:hidden;\">
                <div style=\"padding:12px; font-size:12px; font-weight:800; color:var(--mk-text-light); border-bottom:1px solid #f1f5f9; background:#f8fafc;\">DEVISES</div>
                <ul id=\"currency-list\" style=\"list-style:none; padding:8px; margin:0; display:grid; grid-template-columns:1fr 1fr; gap:4px;\">
                    <li data-currency=\"EUR\" data-symbol=\"€\" data-flag=\"🇪🇺\" class=\"currency-item currency-active\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇪🇺</span> EUR (€)</li>
                    <li data-currency=\"USD\" data-symbol=\"\$\" data-flag=\"🇺🇸\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇺🇸</span> USD (\$)</li>
                    <li data-currency=\"GBP\" data-symbol=\"£\" data-flag=\"🇬🇧\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇬🇧</span> GBP (£)</li>
                    <li data-currency=\"CAD\" data-symbol=\"C\$\" data-flag=\"🇨🇦\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇨🇦</span> CAD (\$)</li>
                    <li data-currency=\"CHF\" data-symbol=\"CHF\" data-flag=\"🇨🇭\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇨🇭</span> CHF</li>
                    <li data-currency=\"TND\" data-symbol=\"DT\" data-flag=\"🇹🇳\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇹🇳</span> TND (DT)</li>
                    <li data-currency=\"MAD\" data-symbol=\"DH\" data-flag=\"🇲🇦\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇲🇦</span> MAD (DH)</li>
                    <li data-currency=\"JPY\" data-symbol=\"¥\" data-flag=\"🇯🇵\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇯🇵</span> JPY (¥)</li>
                    <li data-currency=\"CNY\" data-symbol=\"¥\" data-flag=\"🇨🇳\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇨🇳</span> CNY (¥)</li>
                    <li data-currency=\"SAR\" data-symbol=\"﷼\" data-flag=\"🇸🇦\" class=\"currency-item\" style=\"padding:8px; border-radius:8px; cursor:pointer; font-size:13px; display:flex; align-items:center; gap:8px;\"><span>🇸🇦</span> SAR</li>
                </ul>
            </div>
        </div>
    </div>

    {# ── Sell Button ── #}
    <div class=\"mk-sell-wrapper\">
        <a href=\"{{ path('marketplace_sell') }}\" class=\"mk-btn-sell\">
            <i class=\"fas fa-plus\"></i> Vendre un produit
        </a>
    </div>

    {# ── Grid ── #}
    {% if products is empty %}
        <div style=\"text-align:center; padding:80px 20px; background:#fff; border-radius:24px; border:1px dashed var(--mk-border);\">
            <div style=\"font-size:48px; margin-bottom:16px;\">📦</div>
            <h3 style=\"color:var(--mk-text); font-weight:800;\">Aucun produit disponible</h3>
            <p style=\"color:var(--mk-text-light);\">Revenez plus tard pour découvrir nos nouveautés.</p>
        </div>
    {% else %}
        <div class=\"mk-grid\" id=\"productsGrid\">
            {% for product in products %}
                <div class=\"mk-card\" 
                     data-name=\"{{ product.nomProduit|lower }}\" 
                     data-cat=\"{{ product.categorie|lower }}\" 
                     data-desc=\"{{ product.description|lower }}\">
                    
                    <div class=\"mk-card-img-wrapper\">
                        <button onclick=\"toggleFavorite({{ product.idProduit }}, this)\" class=\"mk-fav-btn\" style=\"color:{% if product.idProduit in favorites %}#ef4444{% else %}#9ca3af{% endif %};\">
                            <i class=\"fas fa-heart\"></i>
                        </button>
                        
                        {% if product.imageUrl %}
                            <img src=\"{{ product.imageUrl }}\" alt=\"{{ product.nomProduit }}\" class=\"mk-card-img\" loading=\"lazy\">
                        {% else %}
                            <div style=\"width:100%; height:100%; background:#f1f5f9; display:flex; align-items:center; justify-content:center; font-size:48px;\">📦</div>
                        {% endif %}

                        {% if product.categorie %}
                            <span class=\"mk-cat-badge\">{{ product.categorie }}</span>
                        {% endif %}
                    </div>

                    <div class=\"mk-card-content\">
                        <div class=\"mk-card-header\">
                            <h2 class=\"mk-card-title\">{{ product.nomProduit }}</h2>
                            <div class=\"mk-card-price-wrapper\" data-vendor-id=\"{{ product.vendeur ? product.vendeur.id : '' }}\" data-price-eur=\"{{ product.prix }}\">
                                <div class=\"mk-card-price price-normal\">{{ product.prix }} €</div>
                                <div class=\"promo-price-block\" style=\"display:none; flex-direction:column; align-items:flex-end; gap:2px;\">
                                    <span class=\"price-original-crossed\" style=\"font-size:12px; color:#94a3b8; text-decoration:line-through; font-weight:500;\"></span>
                                    <div style=\"display:flex; align-items:center; gap:8px;\">
                                        <span class=\"promo-pct-badge\" style=\"background:#ef4444; color:#fff; padding:2px 6px; border-radius:6px; font-size:11px; font-weight:800;\"></span>
                                        <span class=\"price-discounted\" style=\"font-size:20px; font-weight:800; color:#ef4444;\"></span>
                                    </div>
                                </div>
                                <div class=\"promo-countdown\" style=\"display:none; font-size:11px; font-weight:700; color:#ef4444; margin-top:4px; align-items:center; gap:4px;\"></div>
                            </div>
                        </div>
                        
                        <p class=\"mk-card-desc\">{{ product.description }}</p>

                        {% if product.vendeur %}
                            <div class=\"mk-vendor-info\">
                                <i class=\"fas fa-store\"></i> Vendu par : 
                                <span class=\"mk-vendor-name\">{{ product.vendeur.nom }}</span>
                                {% if product.vendeur.statut == 'actif' %}
                                    <span class=\"mk-status-badge\">ACTIF</span>
                                {% endif %}
                            </div>
                        {% endif %}

                        <div class=\"mk-rating-row\" style=\"flex-wrap: wrap;\">
                            <div style=\"display:flex; align-items:center; gap:6px; width: 100%; justify-content: space-between; margin-bottom: 8px;\">
                                <div style=\"display:flex; align-items:center; gap:6px;\">
                                    <div class=\"mk-rating-stars\">
                                        {% set fullStars = product.rating|default(0)|round(0, 'floor') %}
                                        {% for i in 1..5 %}
                                            {% if i <= fullStars %}
                                                <i class=\"fas fa-star\"></i>
                                            {% else %}
                                                <i class=\"far fa-star\"></i>
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                    <span class=\"mk-rating-text\">{{ product.rating|default(0)|number_format(1) }} ({{ product.ratingCount|default(0) }} avis)</span>
                                </div>
                            </div>

                            <div style=\"display:flex; align-items:center; justify-content: space-between; width: 100%;\">
                                <form method=\"post\" action=\"{{ path('marketplace_rate_product', {id: product.idProduit}) }}\" style=\"display:flex; align-items:center; gap:4px;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('rate_product_' ~ product.idProduit) }}\">
                                    <select name=\"rating\" style=\"font-size:11px; padding:2px 6px; border:1px solid var(--mk-border); border-radius:6px; background:#f8fafc; color:var(--mk-text); cursor:pointer; outline:none;\">
                                        <option value=\"5\">⭐⭐⭐⭐⭐ 5</option>
                                        <option value=\"4\">⭐⭐⭐⭐ 4</option>
                                        <option value=\"3\">⭐⭐⭐ 3</option>
                                        <option value=\"2\">⭐⭐ 2</option>
                                        <option value=\"1\">⭐ 1</option>
                                    </select>
                                    <button type=\"submit\" style=\"font-size:10px; padding:4px 10px; background:var(--mk-primary); border:none; color:white; border-radius:6px; cursor:pointer; font-weight:700; transition: all 0.2s;\">
                                        Évaluer
                                    </button>
                                </form>

                                <!-- Menu 3 points -->
                                {% if app.user and (is_granted('ROLE_ADMIN') or (product.vendeur and product.vendeur.email == app.user.email)) %}
                                    <div style=\"position: relative;\">
                                        <button type=\"button\" onclick=\"toggleCardMenu({{ product.idProduit }}, event)\" style=\"background:transparent; border:none; cursor:pointer; padding:4px 8px; color:var(--mk-text-light); transition: color 0.2s;\">
                                            <i class=\"fas fa-ellipsis-v\"></i>
                                        </button>
                                        <div id=\"card-menu-{{ product.idProduit }}\" class=\"mk-card-menu-dropdown\" style=\"display:none; position:absolute; bottom:100%; right:0; margin-bottom: 8px; background:#fff; border:1px solid var(--mk-border); border-radius:8px; box-shadow:0 4px 6px rgba(0,0,0,0.1); z-index:100; min-width:140px; overflow:hidden;\">
                                            <a href=\"{{ path('marketplace_edit_product', {id: product.idProduit}) }}\" style=\"display:block; padding:10px 12px; font-size:13px; color:var(--mk-text); text-decoration:none; border-bottom:1px solid #f1f5f9;\">
                                                <i class=\"fas fa-edit\" style=\"margin-right:6px; color:var(--mk-secondary);\"></i> Modifier
                                            </a>
                                            <form method=\"post\" action=\"{{ path('marketplace_delete_product', {id: product.idProduit}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\" style=\"margin:0;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_product_' ~ product.idProduit) }}\">
                                                <button type=\"submit\" style=\"display:block; width:100%; text-align:left; padding:10px 12px; font-size:13px; color:#ef4444; background:none; border:none; cursor:pointer;\">
                                                    <i class=\"fas fa-trash-alt\" style=\"margin-right:6px;\"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"mk-stock-status\">
                            {% if product.stockDisponible > 0 %}
                                <i class=\"fas fa-check-circle\"></i> {{ product.stockDisponible }} en stock
                            {% else %}
                                <i class=\"fas fa-times-circle\" style=\"color:#ef4444;\"></i> Rupture de stock
                            {% endif %}
                        </div>

                        <div style=\"margin-top:auto;\">
                            {% if product.stockDisponible > 0 %}
                                <form method=\"post\" action=\"{{ path('cart_add', {id: product.idProduit}) }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ product.idProduit) }}\">
                                    <button type=\"submit\" class=\"mk-btn-action mk-btn-cart\">
                                        <i class=\"fas fa-shopping-cart\"></i> Ajouter au panier
                                    </button>
                                </form>
                            {% else %}
                                <button class=\"mk-btn-action\" disabled style=\"background:#e2e8f0; color:#94a3b8; cursor:not-allowed;\">
                                    Indisponible
                                </button>
                            {% endif %}

                            <a href=\"{{ path('product_social_reviews', {id: product.idProduit}) }}\" class=\"mk-btn-action mk-btn-social\">
                                <i class=\"fas fa-globe\"></i> Avis Sociaux
                            </a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <p id=\"noResults\" style=\"display:none; text-align:center; padding:40px; color:var(--mk-text-light); font-weight:600;\">
            🔍 Aucun produit ne correspond à votre recherche.
        </p>
    {% endif %}
</div>

{# ── Modals and Overlays ── #}
<div id=\"ai-ranking-modal\" style=\"display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(15,23,42,0.6); backdrop-filter:blur(4px); z-index:9999; align-items:center; justify-content:center; padding:20px;\">
    <div style=\"background:#fff; padding:32px; border-radius:24px; width:100%; max-width:700px; max-height:90vh; overflow-y:auto; position:relative; box-shadow:0 25px 50px -12px rgba(0,0,0,0.25);\">
        <button onclick=\"document.getElementById('ai-ranking-modal').style.display='none'\" style=\"position:absolute; right:24px; top:24px; background:#f1f5f9; border:none; width:40px; height:40px; border-radius:50%; font-size:20px; cursor:pointer; color:#64748b; display:flex; align-items:center; justify-content:center;\">&times;</button>
        <h2 style=\"margin-top:0; color:var(--mk-text); font-size:24px; font-weight:800; margin-bottom:24px; display:flex; align-items:center; gap:12px;\">
            <i class=\"fas fa-award\" style=\"color:#fbbf24;\"></i> Classement des Boutiques
        </h2>
        <div id=\"ranking-container\"></div>
    </div>
</div>

<div id=\"translate-overlay\" style=\"display:none; position:fixed; inset:0; background:rgba(15,23,42,0.4); backdrop-filter:blur(4px); z-index:10000; align-items:center; justify-content:center;\">
    <div style=\"background:#fff; border-radius:24px; padding:40px; box-shadow:0 25px 50px -12px rgba(0,0,0,0.25); text-align:center;\">
        <div style=\"font-size:48px; margin-bottom:16px; animation: spin 2s linear infinite;\">🌐</div>
        <p style=\"font-weight:800; color:var(--mk-text); font-size:18px;\">Traduction en cours...</p>
    </div>
</div>

<style>
    @keyframes spin { 100% { transform: rotate(360deg); } }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
/* ═══════════════════════════ Filtrage ═══════════════════════════ */
function filterProducts() {
    const q = document.getElementById('searchInput').value.toLowerCase().trim();
    const cat = document.getElementById('catFilter').value.toLowerCase();
    const cards = document.querySelectorAll('.mk-card');
    let visible = 0;

    cards.forEach(card => {
        const name = card.dataset.name || '';
        const c = card.dataset.cat || '';
        const desc = card.dataset.desc || '';
        const matchQ = !q || name.includes(q) || desc.includes(q);
        const matchCat = !cat || c.includes(cat);
        
        if (matchQ && matchCat) {
            card.style.display = '';
            visible++;
        } else {
            card.style.display = 'none';
        }
    });

    const noRes = document.getElementById('noResults');
    if (noRes) noRes.style.display = visible === 0 ? 'block' : 'none';
}

/* ═══════════════════════════ Favoris ═══════════════════════════ */
function toggleFavorite(id, btn) {
    fetch('/marketplace/api/favorites/toggle/' + id, {method: 'POST'})
        .then(r => r.json())
        .then(data => {
            if(data.success) {
                btn.style.color = data.isFavorite ? '#ef4444' : '#9ca3af';
                const favCount = document.getElementById('fav-count-top');
                if (favCount) favCount.textContent = data.count;
            }
        });
}

/* ═══════════════════════════ Dropdowns ═══════════════════════════ */
function setupDropdown(btnId, dropdownId) {
    const btn = document.getElementById(btnId);
    const dropdown = document.getElementById(dropdownId);
    if (!btn || !dropdown) return;

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = dropdown.style.display === 'block';
        document.querySelectorAll('[id\$=\"-dropdown\"]').forEach(d => d.style.display = 'none');
        dropdown.style.display = isOpen ? 'none' : 'block';
    });
}

setupDropdown('translate-btn', 'translate-dropdown');
setupDropdown('currency-btn', 'currency-dropdown');

document.addEventListener('click', () => {
    document.querySelectorAll('[id\$=\"-dropdown\"]').forEach(d => d.style.display = 'none');
    document.querySelectorAll('.mk-card-menu-dropdown').forEach(m => m.style.display = 'none');
});

/* ═══════════════════════════ Card Menu ═══════════════════════════ */
function toggleCardMenu(id, event) {
    event.stopPropagation();
    event.preventDefault();
    const menu = document.getElementById('card-menu-' + id);
    const isOpen = menu.style.display === 'block';
    
    // Fermer tous les autres menus
    document.querySelectorAll('.mk-card-menu-dropdown').forEach(m => m.style.display = 'none');
    
    // Ouvrir si c'était fermé
    if (!isOpen) {
        menu.style.display = 'block';
    }
}

/* ═══════════════════════════ Ranking Modal ═══════════════════════════ */
const openRankingBtn = document.getElementById('open-ranking-modal');
if (openRankingBtn) {
    openRankingBtn.addEventListener('click', () => {
        const container = document.getElementById('ranking-container');
        document.getElementById('ai-ranking-modal').style.display = 'flex';
        container.innerHTML = '<div style=\"text-align:center; padding:40px; color:#64748b;\"><i class=\"fas fa-spinner fa-spin fa-2x\"></i><br><br>Analyse des performances...</div>';

        fetch('{{ path(\"marketplace_api_shops_ranking\") }}')
            .then(r => r.json())
            .then(data => {
                if(data.success) {
                    let html = '';
                    data.shops.forEach((shop, index) => {
                        const rankColor = index === 0 ? '#fbbf24' : (index === 1 ? '#94a3b8' : (index === 2 ? '#b45309' : '#3b82f6'));
                        html += `
                            <div style=\"border: 1px solid #e2e8f0; border-radius: 16px; padding: 20px; margin-bottom: 16px; transition: transform 0.2s;\">
                                <div style=\"display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:12px;\">
                                    <div>
                                        <div style=\"font-size:11px; font-weight:800; color:\${rankColor}; text-transform:uppercase; margin-bottom:4px;\">RANG #\${index+1}</div>
                                        <strong style=\"font-size:18px; color:var(--mk-text);\">\${shop.nom}</strong>
                                    </div>
                                    <div style=\"background:#1e293b; color:#fff; padding:4px 12px; border-radius:20px; font-size:13px; font-weight:700;\">
                                        ★ \${shop.rating}
                                    </div>
                                </div>
                                <div style=\"background:#f8fafc; padding:12px; border-radius:12px; border-left:4px solid \${rankColor}; font-size:13px; color:#475569; line-height:1.5;\">
                                    \${shop.ai_insight}
                                </div>
                            </div>
                        `;
                    });
                    container.innerHTML = html || '<p>Aucune boutique trouvée.</p>';
                }
            });
    });
}

/* ══════════════════════════════════════════════════════════════
   TRADUCTION MARKETPLACE — ApiController
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';

    let currentLang = 'fr';
    const SELECTORS = [
        '.mk-card-title',
        '.mk-card-desc',
        '.mk-cat-badge',
        '.mk-stock-status',
        '.bc-empty h3',
        '.bc-empty p',
        '#noResults',
    ];

    const dropdown = document.getElementById('translate-dropdown');
    const overlay  = document.getElementById('translate-overlay');

    document.querySelectorAll('.lang-item').forEach(function (item) {
        item.addEventListener('click', function () {
            const lang  = this.dataset.lang;
            const label = this.dataset.label;
            if (dropdown) dropdown.style.display = 'none';
            if (lang === currentLang) return;
            applyTranslation(lang, label);
        });
    });

    function collectNodes() {
        const seen  = new Set();
        const nodes = [];
        SELECTORS.forEach(function (sel) {
            document.querySelectorAll(sel).forEach(function (el) {
                el.childNodes.forEach(function (child) {
                    if (child.nodeType === Node.TEXT_NODE
                        && child.textContent.trim().length > 0
                        && !seen.has(child)) {
                        seen.add(child);
                        nodes.push(child);
                    }
                });
            });
        });
        return nodes;
    }

    async function translateBatch(textsArray, sourceLang, targetLang) {
        if (!textsArray || textsArray.length === 0) return [];
        try {
            const resp = await fetch('/marketplace/api/translate-batch', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ texts: textsArray, source_lang: sourceLang, target_lang: targetLang })
            });
            if (!resp.ok) return textsArray;
            const json = await resp.json();
            return json.translatedTexts || textsArray;
        } catch (e) {
            console.error('Translation error:', e);
            return textsArray;
        }
    }

    async function applyTranslation(targetLang, label) {
        const nodes = collectNodes();
        if (!nodes.length) return;

        nodes.forEach(n => { if (!n._origText) n._origText = n.textContent; });

        if (targetLang === 'fr') {
            nodes.forEach(n => { n.textContent = n._origText; });
            document.documentElement.dir = 'ltr';
            setActive(targetLang, label);
            currentLang = 'fr';
            return;
        }

        if (overlay) overlay.style.display = 'flex';

        try {
            const batchSize = 40;
            for (let i = 0; i < nodes.length; i += batchSize) {
                const batchNodes = nodes.slice(i, i + batchSize);
                const originalTexts = batchNodes.map(n => n._origText);
                const translatedTexts = await translateBatch(originalTexts, 'fr', targetLang);
                batchNodes.forEach((n, idx) => { if(translatedTexts[idx]) n.textContent = translatedTexts[idx]; });
            }
            document.documentElement.dir = (targetLang === 'ar') ? 'rtl' : 'ltr';
            setActive(targetLang, label);
            currentLang = targetLang;
        } catch (err) {
            console.error('Translation failed:', err);
        } finally {
            if (overlay) overlay.style.display = 'none';
        }
    }

    function setActive(lang, label) {
        const labelEl = document.getElementById('translate-label');
        if (labelEl) labelEl.textContent = label || lang;
        document.querySelectorAll('.lang-item').forEach(li => {
            li.classList.toggle('lang-active', li.dataset.lang === lang);
        });
    }
})();

/* ══════════════════════════════════════════════════════════════
   CONVERTISSEUR DE DEVISES — ApiController
   ══════════════════════════════════════════════════════════════ */
/* ══════════════════════════════════════════════════════════════
   GLOBAL STATE POUR DEVISES (Partagé entre Currency et Flash Promo)
   ══════════════════════════════════════════════════════════════ */
window.MK_CURRENCY = {
    code: 'EUR',
    symbol: '€',
    rate: 1
};

/* ══════════════════════════════════════════════════════════════
   CONVERTISSEUR DE DEVISES — ApiController
   ══════════════════════════════════════════════════════════════ */
(function() {
    const curDropdown = document.getElementById('currency-dropdown');
    let rates = null;

    async function fetchRates() {
        if(rates) return rates;
        try {
            const response = await fetch('/marketplace/api/currency-rates');
            const data = await response.json();
            if(data && data.rates) rates = data.rates;
        } catch(e) { console.error('Currency API error:', e); }
        return rates;
    }

    function formatPrice(val, symbol, code) {
        const formatted = val.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 2 });
        return ['USD', 'GBP', 'CAD', 'JPY', 'CNY', 'SAR'].includes(code) ? `\${symbol} \${formatted}` : `\${formatted} \${symbol}`;
    }

    document.querySelectorAll('.currency-item').forEach(item => {
        item.addEventListener('click', async function() {
            const targetCurrency = this.dataset.currency;
            const symbol = this.dataset.symbol;
            const flag = this.dataset.flag;
            
            if (curDropdown) curDropdown.style.display = 'none';
            if (targetCurrency === window.MK_CURRENCY.code) return;

            document.querySelectorAll('.currency-item').forEach(li => li.classList.remove('currency-active'));
            this.classList.add('currency-active');
            
            const labelEl = document.getElementById('currency-label');
            const flagEl = document.getElementById('currency-flag');
            if (labelEl) labelEl.textContent = `\${targetCurrency} (\${symbol})`;
            if (flagEl) flagEl.textContent = flag;

            const fetchedRates = await fetchRates();
            if (!fetchedRates) {
                alert(\"Impossible de charger les taux de change.\");
                return;
            }

            const rate = fetchedRates[targetCurrency] || 1;
            
            // Update Global State
            window.MK_CURRENCY.code = targetCurrency;
            window.MK_CURRENCY.symbol = symbol;
            window.MK_CURRENCY.rate = rate;

            // Mise à jour de tous les prix (Normaux et Promos)
            document.querySelectorAll('.mk-card-price-wrapper').forEach(wrapper => {
                const basePriceEur = parseFloat(wrapper.getAttribute('data-price-eur'));
                if (isNaN(basePriceEur)) return;

                const convertedBase = basePriceEur * rate;
                
                // Update Normal Price
                const normalEl = wrapper.querySelector('.price-normal');
                if (normalEl) normalEl.textContent = formatPrice(convertedBase, symbol, targetCurrency);

                // Update Promo Prices (if currently active)
                const card = wrapper.closest('.mk-card');
                if (card && card.classList.contains('promo-active')) {
                    const originalEl = wrapper.querySelector('.price-original-crossed');
                    const discountedEl = wrapper.querySelector('.price-discounted');
                    const pctBadge = wrapper.querySelector('.promo-pct-badge');
                    
                    if (originalEl) originalEl.textContent = formatPrice(convertedBase, symbol, targetCurrency);
                    
                    if (discountedEl && pctBadge) {
                        const pct = parseInt(pctBadge.textContent.replace('-', '').replace('%', ''));
                        const discountedEur = basePriceEur * (1 - pct / 100);
                        discountedEl.textContent = formatPrice(discountedEur * rate, symbol, targetCurrency);
                    }
                }
            });
        });
    });

    // Helper global pour le polling flash promo
    window.formatPriceGlobal = formatPrice;
})();

/* ══════════════════════════════════════════════════════════════
   FLASH PROMO — Polling temps réel
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';

    let bannerEl = null;
    function ensureBanner() {
        if (!bannerEl) {
            bannerEl = document.createElement('div');
            bannerEl.id = 'flash-promo-banner';
            bannerEl.innerHTML = `
                <div style=\"font-size: 24px; margin-bottom: 4px;\">⚡</div>
                <div id=\"fp-banner-text\" style=\"font-weight: 700;\">Promotion flash en cours !</div>
                <div class=\"banner-cd\" id=\"fp-banner-cd\"></div>
            `;
            document.body.appendChild(bannerEl);
        }
        return bannerEl;
    }

    let bannerCdInt = null;

    function applyPromos(promos) {
        const { code, symbol, rate } = window.MK_CURRENCY;

        document.querySelectorAll('.mk-card-price-wrapper').forEach(wrapper => {
            const vendorId = wrapper.dataset.vendorId;
            const originalPriceEur = parseFloat(wrapper.dataset.priceEur);
            const promo = promos[vendorId];
            const card = wrapper.closest('.mk-card');

            const normalDiv = wrapper.querySelector('.price-normal');
            const promoDiv = wrapper.querySelector('.promo-price-block');
            const countdownDiv = wrapper.querySelector('.promo-countdown');
            const crossedEl = wrapper.querySelector('.price-original-crossed');
            const discountedEl = wrapper.querySelector('.price-discounted');
            const pctBadgeEl = wrapper.querySelector('.promo-pct-badge');

            if (promo && promo.remainingSeconds > 0 && !isNaN(originalPriceEur)) {
                const pct = promo.discountPercent;
                const discountedEur = originalPriceEur * (1 - pct / 100);

                if (normalDiv) normalDiv.style.display = 'none';
                if (promoDiv) promoDiv.style.display = 'flex';
                if (countdownDiv) {
                    countdownDiv.style.display = 'flex';
                    countdownDiv.innerHTML = `<i class=\"fas fa-clock\"></i> Expire dans \${promo.remainingSeconds}s`;
                }

                // Appliquer la conversion de devise sur les prix promo
                if (crossedEl) crossedEl.textContent = window.formatPriceGlobal(originalPriceEur * rate, symbol, code);
                if (discountedEl) discountedEl.textContent = window.formatPriceGlobal(discountedEur * rate, symbol, code);
                if (pctBadgeEl) pctBadgeEl.textContent = '-' + pct + '%';

                if (card) card.classList.add('promo-active');
            } else {
                if (normalDiv) {
                    normalDiv.style.display = 'block';
                    // S'assurer que le prix normal est aussi converti si on vient de quitter une promo
                    normalDiv.textContent = window.formatPriceGlobal(originalPriceEur * rate, symbol, code);
                }
                if (promoDiv) promoDiv.style.display = 'none';
                if (countdownDiv) countdownDiv.style.display = 'none';
                if (card) card.classList.remove('promo-active');
            }
        });

        const activeVendors = Object.keys(promos).filter(id => promos[id].remainingSeconds > 0);
        if (activeVendors.length > 0) {
            showBanner(promos, activeVendors);
        } else {
            hideBanner();
        }
    }

    function showBanner(promos, activeIds) {
        const b = ensureBanner();
        b.style.display = 'block';

        let maxRem = 0;
        let names = [];
        activeIds.forEach(id => {
            if (promos[id].remainingSeconds > maxRem) maxRem = promos[id].remainingSeconds;
            names.push(promos[id].vendorName);
        });

        const textEl = document.getElementById('fp-banner-text');
        const cdEl = document.getElementById('fp-banner-cd');
        if (textEl) textEl.textContent = '⚡ Flash Promo : ' + names.join(', ');
        
        clearInterval(bannerCdInt);
        let rem = maxRem;
        bannerCdInt = setInterval(() => {
            rem--;
            if (rem <= 0) {
                clearInterval(bannerCdInt);
                hideBanner();
            } else if (cdEl) {
                cdEl.textContent = 'Expire dans ' + rem + ' s';
            }
        }, 1000);
    }

    function hideBanner() {
        if (bannerEl) bannerEl.style.display = 'none';
        clearInterval(bannerCdInt);
    }

    async function poll() {
        try {
            const r = await fetch('/marketplace/api/flash-promos');
            const data = await r.json();
            applyPromos(data.promos || {});
        } catch (e) {}
    }

    poll();
    setInterval(poll, 2000);
})();
</script>
{% endblock %}
", "marketplace/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\marketplace\\index.html.twig");
    }
}
