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

/* events/front_index.html.twig */
class __TwigTemplate_cd2dac38631e20b7fb93456d6b10f974 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
            'meta_description' => [$this, 'block_meta_description'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/front_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/front_index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 4, $this->source); })())) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "cardImage", [], "any", false, false, false, 4))) {
            // line 5
            yield "        <link rel=\"preload\" as=\"image\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "cardImage", [], "any", false, false, false, 5)), "html", null, true);
            yield "\" fetchpriority=\"high\">
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        yield "Événements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "ÉVÉNEMENTS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "<style>


    /* Scope the reset to this page's content so it doesn't break the base flex layout */
    #content * { box-sizing: border-box; }
    #content { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    /* NAV */
    .navbar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 40px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }

    .nav-brand {
        font-size: 20px;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.5px;
    }

    .nav-brand span { color: #22c55e; }

    .nav-links { display: flex; align-items: center; gap: 28px; }

    .nav-links a {
        font-size: 14px;
        font-weight: 500;
        color: #64748b;
        text-decoration: none;
        transition: color 0.15s;
    }

    .nav-links a:hover, .nav-links a.active { color: #0f172a; }

    .nav-cta {
        background: #22c55e;
        color: #fff !important;
        padding: 8px 18px;
        border-radius: 8px;
        font-weight: 600 !important;
    }

    .nav-cta:hover { background: #16a34a; }

    /* HERO */
    .hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%);
        padding: 64px 40px;
        text-align: center;
        color: #fff;
    }

    .hero-tag {
        display: inline-block;
        background: rgba(34,197,94,0.15);
        color: #22c55e;
        border: 1px solid rgba(34,197,94,0.3);
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .hero h1 {
        font-size: 42px;
        font-weight: 800;
        letter-spacing: -1px;
        margin-bottom: 14px;
        line-height: 1.15;
    }

    .hero p {
        font-size: 16px;
        color: #94a3b8;
        max-width: 500px;
        margin: 0 auto 28px;
        line-height: 1.7;
    }

    .hero-search {
        display: flex;
        max-width: 440px;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    }

    .hero-search input {
        flex: 1;
        padding: 13px 18px;
        border: none;
        outline: none;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #1e293b;
    }

    .hero-search button {
        padding: 13px 20px;
        background: #22c55e;
        color: #fff;
        border: none;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
    }

    /* CONTENT */
    .content { max-width: 1200px; margin: 0 auto; padding: 48px 24px; }

    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 28px;
    }

    .section-title { font-size: 22px; font-weight: 700; color: #0f172a; }
    .section-count { font-size: 13px; color: #94a3b8; }

    /* GRID */
    .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
    }

    /* CARD */
    .event-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: transform 0.2s, box-shadow 0.2s;
        display: flex;
        flex-direction: column;
    }

    .event-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 32px rgba(0,0,0,0.1);
    }

    .card-img {
        position: relative;
        height: 200px;
        overflow: hidden;
        background: #f1f5f9;
    }

    .card-img img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .event-card:hover .card-img img { transform: scale(1.05); }

    .card-img-placeholder {
        width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        font-size: 52px;
        background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
    }

    .card-badge {
        position: absolute;
        top: 14px; left: 14px;
        background: #22c55e;
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        padding: 4px 11px;
        border-radius: 20px;
    }

    .card-price {
        position: absolute;
        top: 14px; right: 14px;
        background: rgba(15,23,42,0.8);
        backdrop-filter: blur(6px);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        padding: 4px 11px;
        border-radius: 20px;
    }

    .card-body {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .card-title {
        font-size: 17px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.3;
    }

    .card-desc {
        font-size: 13px;
        color: #64748b;
        line-height: 1.65;
        flex: 1;
    }

    .card-meta {
        display: flex;
        flex-direction: column;
        gap: 6px;
        padding-top: 12px;
        border-top: 1px solid #f1f5f9;
    }

    .meta-row {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: #64748b;
    }

    .meta-row .dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: #22c55e;
        flex-shrink: 0;
    }

    .card-footer {
        padding: 16px 20px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        gap: 10px;
    }

    .btn-details {
        flex: 1;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
        text-decoration: none;
        background: #f8fafc;
        color: #475569;
        border: 1px solid #e2e8f0;
        transition: all 0.15s;
    }

    .btn-details:hover { background: #f1f5f9; color: #0f172a; }

    .btn-reserve {
        flex: 1;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        font-family: 'Inter', sans-serif;
        text-decoration: none;
        background: #22c55e;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: all 0.15s;
    }

    .btn-reserve:hover { background: #16a34a; }

    /* EMPTY */
    .empty {
        text-align: center;
        padding: 80px 20px;
        color: #94a3b8;
    }

    .empty .empty-icon { font-size: 56px; margin-bottom: 16px; }
    .empty h3 { font-size: 18px; color: #64748b; margin-bottom: 8px; }

    /* FOOTER */
    .footer {
        background: #0f172a;
        color: #64748b;
        text-align: center;
        padding: 28px;
        font-size: 13px;
        margin-top: 60px;
    }

    .footer span { color: #22c55e; }
</style>

<!-- HERO -->
";
        // line 329
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        // line 330
        yield "<section class=\"hero\">
    <div class=\"hero-tag\">📅 Événements</div>
    <h1>Découvrez nos<br>événements</h1>
    <p>Participez à des événements exclusifs, des ateliers et des conférences pour développer vos compétences.</p>
    <div class=\"hero-search\">
        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un événement...\" onkeyup=\"filterCards()\">
        <button type=\"button\" aria-label=\"Rechercher un événement\">Rechercher</button>
    </div>
</section>

<!-- CARDS -->
<div class=\"content\">
    <div class=\"section-header\">
        <div class=\"section-title\">Tous les événements</div>
        <div class=\"section-count\">";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 344, $this->source); })())), "html", null, true);
        yield " événement";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 344, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</div>
    </div>

    <div class=\"events-grid\" id=\"eventsGrid\">
        ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 348, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 349
            yield "        <div class=\"event-card\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 349)), "html", null, true);
            yield "\">
            <div class=\"card-img\">
                ";
            // line 351
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 352
                yield "                   <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "cardImage", [], "any", true, true, false, 352)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "cardImage", [], "any", false, false, false, 352), ("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 352)))) : (("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 352))))), "html", null, true);
                yield "\" 
     alt=\"";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 353), "html", null, true);
                yield "\"
     loading=\"";
                // line 354
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 354)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("eager") : ("lazy"));
                yield "\"
     fetchpriority=\"";
                // line 355
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 355) == 1)) ? ("high") : ("auto"));
                yield "\"
     decoding=\"async\"
     width=\"480\" 
     height=\"240\">
                    ";
            } else {
                // line 360
                yield "                    <div class=\"card-img-placeholder\">📅</div>
                ";
            }
            // line 362
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "isFull", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 363
                yield "    <span class=\"card-badge\" style=\"background:#dc2626;\">
        ❌ Complet
    </span>
";
            } else {
                // line 367
                yield "    <span class=\"card-badge\">
        ✓ Disponible
    </span>
";
            }
            // line 371
            yield "                <div class=\"card-price\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "price", [], "any", false, false, false, 371), "html", null, true);
            yield " DT</div>
            </div>

            <div class=\"card-body\">
                <div class=\"card-title\">";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "title", [], "any", false, false, false, 375), "html", null, true);
            yield "</div>
                <div class=\"card-desc\">";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 376), 0, 100) . "..."), "html", null, true);
            yield "</div>
                <div class=\"card-meta\">
                    <div class=\"meta-row\">
                        <div class=\"dot\"></div>
                        📆 ";
            // line 380
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 380), "d/m/Y à H:i"), "html", null, true)) : ("Date à confirmer"));
            yield "
                    </div>
                    <div class=\"meta-row\">
                        <div class=\"dot\"></div>
                        👥 ";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capacity", [], "any", false, false, false, 384), "html", null, true);
            yield " places
                    </div>
                </div>
                ";
            // line 387
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 388
                yield "    ⭐ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiRating", [], "any", false, false, false, 388), "html", null, true);
                yield "/5 <br>

    <small>
        👍 ";
                // line 391
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiPositive", [], "any", false, false, false, 391), "html", null, true);
                yield "%
        😐 ";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiNeutral", [], "any", false, false, false, 392), "html", null, true);
                yield "%
        👎 ";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiNegative", [], "any", false, false, false, 393), "html", null, true);
                yield "%
    </small>

    <p>";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "aiSummary", [], "any", false, false, false, 396), "html", null, true);
                yield "</p>
";
            } else {
                // line 398
                yield "    <span class=\"text-muted\">Not rated yet</span>
";
            }
            // line 400
            yield "            </div>

            <div class=\"card-footer\">

                <a href=\"";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 404)]), "html", null, true);
            yield "\" class=\"btn-reserve\">
    Réserver
</a> </div>
        </div>
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
        // line 408
        if (!$context['_iterated']) {
            // line 409
            yield "        <div class=\"empty\" style=\"grid-column:1/-1;\">
            <div class=\"empty-icon\">📭</div>
            <h3>Aucun événement disponible</h3>
            <p>Revenez bientôt pour découvrir nos prochains événements.</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        yield "    </div>
</div>

<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>

<script>
function filterCards() {
    const val = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('.event-card').forEach(card => {
        card.style.display = card.dataset.title.includes(val) ? '' : 'none';
    });
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        yield "Découvrez nos événements exclusifs, ateliers et conférences pour développer vos compétences professionnelles.";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "events/front_index.html.twig";
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
        return array (  693 => 329,  667 => 415,  656 => 409,  654 => 408,  637 => 404,  631 => 400,  627 => 398,  622 => 396,  616 => 393,  612 => 392,  608 => 391,  601 => 388,  599 => 387,  593 => 384,  586 => 380,  579 => 376,  575 => 375,  567 => 371,  561 => 367,  555 => 363,  552 => 362,  548 => 360,  540 => 355,  536 => 354,  532 => 353,  527 => 352,  525 => 351,  519 => 349,  501 => 348,  492 => 344,  476 => 330,  474 => 329,  157 => 14,  144 => 13,  121 => 11,  98 => 9,  83 => 5,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {% if evenements|length > 0 and evenements[0].cardImage %}
        <link rel=\"preload\" as=\"image\" href=\"{{ asset(evenements[0].cardImage) }}\" fetchpriority=\"high\">
    {% endif %}
{% endblock %}

{% block title %}Événements{% endblock %}

{% block page_title %}ÉVÉNEMENTS{% endblock %}

{% block body %}
<style>


    /* Scope the reset to this page's content so it doesn't break the base flex layout */
    #content * { box-sizing: border-box; }
    #content { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    /* NAV */
    .navbar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 40px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }

    .nav-brand {
        font-size: 20px;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.5px;
    }

    .nav-brand span { color: #22c55e; }

    .nav-links { display: flex; align-items: center; gap: 28px; }

    .nav-links a {
        font-size: 14px;
        font-weight: 500;
        color: #64748b;
        text-decoration: none;
        transition: color 0.15s;
    }

    .nav-links a:hover, .nav-links a.active { color: #0f172a; }

    .nav-cta {
        background: #22c55e;
        color: #fff !important;
        padding: 8px 18px;
        border-radius: 8px;
        font-weight: 600 !important;
    }

    .nav-cta:hover { background: #16a34a; }

    /* HERO */
    .hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%);
        padding: 64px 40px;
        text-align: center;
        color: #fff;
    }

    .hero-tag {
        display: inline-block;
        background: rgba(34,197,94,0.15);
        color: #22c55e;
        border: 1px solid rgba(34,197,94,0.3);
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .hero h1 {
        font-size: 42px;
        font-weight: 800;
        letter-spacing: -1px;
        margin-bottom: 14px;
        line-height: 1.15;
    }

    .hero p {
        font-size: 16px;
        color: #94a3b8;
        max-width: 500px;
        margin: 0 auto 28px;
        line-height: 1.7;
    }

    .hero-search {
        display: flex;
        max-width: 440px;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    }

    .hero-search input {
        flex: 1;
        padding: 13px 18px;
        border: none;
        outline: none;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #1e293b;
    }

    .hero-search button {
        padding: 13px 20px;
        background: #22c55e;
        color: #fff;
        border: none;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
    }

    /* CONTENT */
    .content { max-width: 1200px; margin: 0 auto; padding: 48px 24px; }

    .section-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 28px;
    }

    .section-title { font-size: 22px; font-weight: 700; color: #0f172a; }
    .section-count { font-size: 13px; color: #94a3b8; }

    /* GRID */
    .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
    }

    /* CARD */
    .event-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: transform 0.2s, box-shadow 0.2s;
        display: flex;
        flex-direction: column;
    }

    .event-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 32px rgba(0,0,0,0.1);
    }

    .card-img {
        position: relative;
        height: 200px;
        overflow: hidden;
        background: #f1f5f9;
    }

    .card-img img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .event-card:hover .card-img img { transform: scale(1.05); }

    .card-img-placeholder {
        width: 100%; height: 100%;
        display: flex; align-items: center; justify-content: center;
        font-size: 52px;
        background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
    }

    .card-badge {
        position: absolute;
        top: 14px; left: 14px;
        background: #22c55e;
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        padding: 4px 11px;
        border-radius: 20px;
    }

    .card-price {
        position: absolute;
        top: 14px; right: 14px;
        background: rgba(15,23,42,0.8);
        backdrop-filter: blur(6px);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        padding: 4px 11px;
        border-radius: 20px;
    }

    .card-body {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .card-title {
        font-size: 17px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.3;
    }

    .card-desc {
        font-size: 13px;
        color: #64748b;
        line-height: 1.65;
        flex: 1;
    }

    .card-meta {
        display: flex;
        flex-direction: column;
        gap: 6px;
        padding-top: 12px;
        border-top: 1px solid #f1f5f9;
    }

    .meta-row {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: #64748b;
    }

    .meta-row .dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: #22c55e;
        flex-shrink: 0;
    }

    .card-footer {
        padding: 16px 20px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        gap: 10px;
    }

    .btn-details {
        flex: 1;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
        text-decoration: none;
        background: #f8fafc;
        color: #475569;
        border: 1px solid #e2e8f0;
        transition: all 0.15s;
    }

    .btn-details:hover { background: #f1f5f9; color: #0f172a; }

    .btn-reserve {
        flex: 1;
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        font-family: 'Inter', sans-serif;
        text-decoration: none;
        background: #22c55e;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: all 0.15s;
    }

    .btn-reserve:hover { background: #16a34a; }

    /* EMPTY */
    .empty {
        text-align: center;
        padding: 80px 20px;
        color: #94a3b8;
    }

    .empty .empty-icon { font-size: 56px; margin-bottom: 16px; }
    .empty h3 { font-size: 18px; color: #64748b; margin-bottom: 8px; }

    /* FOOTER */
    .footer {
        background: #0f172a;
        color: #64748b;
        text-align: center;
        padding: 28px;
        font-size: 13px;
        margin-top: 60px;
    }

    .footer span { color: #22c55e; }
</style>

<!-- HERO -->
{% block meta_description %}Découvrez nos événements exclusifs, ateliers et conférences pour développer vos compétences professionnelles.{% endblock %}
<section class=\"hero\">
    <div class=\"hero-tag\">📅 Événements</div>
    <h1>Découvrez nos<br>événements</h1>
    <p>Participez à des événements exclusifs, des ateliers et des conférences pour développer vos compétences.</p>
    <div class=\"hero-search\">
        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un événement...\" onkeyup=\"filterCards()\">
        <button type=\"button\" aria-label=\"Rechercher un événement\">Rechercher</button>
    </div>
</section>

<!-- CARDS -->
<div class=\"content\">
    <div class=\"section-header\">
        <div class=\"section-title\">Tous les événements</div>
        <div class=\"section-count\">{{ evenements|length }} événement{{ evenements|length != 1 ? 's' : '' }}</div>
    </div>

    <div class=\"events-grid\" id=\"eventsGrid\">
        {% for evenement in evenements %}
        <div class=\"event-card\" data-title=\"{{ evenement.title|lower }}\">
            <div class=\"card-img\">
                {% if evenement.image %}
                   <img src=\"{{ asset(evenement.cardImage|default('uploads/' ~ evenement.image)) }}\" 
     alt=\"{{ evenement.title }}\"
     loading=\"{{ loop.first ? 'eager' : 'lazy' }}\"
     fetchpriority=\"{{ loop.index == 1 ? 'high' : 'auto' }}\"
     decoding=\"async\"
     width=\"480\" 
     height=\"240\">
                    {% else %}
                    <div class=\"card-img-placeholder\">📅</div>
                {% endif %}
                {% if evenement.isFull %}
    <span class=\"card-badge\" style=\"background:#dc2626;\">
        ❌ Complet
    </span>
{% else %}
    <span class=\"card-badge\">
        ✓ Disponible
    </span>
{% endif %}
                <div class=\"card-price\">{{ evenement.price }} DT</div>
            </div>

            <div class=\"card-body\">
                <div class=\"card-title\">{{ evenement.title }}</div>
                <div class=\"card-desc\">{{ evenement.description|slice(0, 100) ~ '...' }}</div>
                <div class=\"card-meta\">
                    <div class=\"meta-row\">
                        <div class=\"dot\"></div>
                        📆 {{ evenement.date ? evenement.date|date('d/m/Y à H:i') : 'Date à confirmer' }}
                    </div>
                    <div class=\"meta-row\">
                        <div class=\"dot\"></div>
                        👥 {{ evenement.capacity }} places
                    </div>
                </div>
                {% if evenement.aiRating %}
    ⭐ {{ evenement.aiRating }}/5 <br>

    <small>
        👍 {{ evenement.aiPositive }}%
        😐 {{ evenement.aiNeutral }}%
        👎 {{ evenement.aiNegative }}%
    </small>

    <p>{{ evenement.aiSummary }}</p>
{% else %}
    <span class=\"text-muted\">Not rated yet</span>
{% endif %}
            </div>

            <div class=\"card-footer\">

                <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\" class=\"btn-reserve\">
    Réserver
</a> </div>
        </div>
        {% else %}
        <div class=\"empty\" style=\"grid-column:1/-1;\">
            <div class=\"empty-icon\">📭</div>
            <h3>Aucun événement disponible</h3>
            <p>Revenez bientôt pour découvrir nos prochains événements.</p>
        </div>
        {% endfor %}
    </div>
</div>

<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>

<script>
function filterCards() {
    const val = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('.event-card').forEach(card => {
        card.style.display = card.dataset.title.includes(val) ? '' : 'none';
    });
}
</script>
{% endblock %}
", "events/front_index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\events\\front_index.html.twig");
    }
}
