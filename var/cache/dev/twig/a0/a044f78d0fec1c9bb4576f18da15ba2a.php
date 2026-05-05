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

/* blog/show.html.twig */
class __TwigTemplate_a7f5af18841a5a0992fd3df1051131a6 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'sidebar_content' => [$this, 'block_sidebar_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " — Bizcore Blog";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "BLOG — Article";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_content"));

        // line 7
        yield "<div class=\"sidebar-section\">
    <div class=\"sidebar-section-label\">NAVIGATION</div>
    ";
        // line 9
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\"
       class=\"";
            // line 11
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11)) && is_string($_v1 = "dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\">
        <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
    </a>
    ";
        } else {
            // line 15
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
            yield "\"
       class=\"";
            // line 16
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16)) && is_string($_v3 = "marketplace") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\">
        <i class=\"fas fa-shopping-cart\"></i> MARKETPLACE
    </a>
    ";
        }
        // line 20
        yield "    <a href=\"";
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front")));
        yield "\"
       class=\"";
        // line 21
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21)) && is_string($_v5 = "evenement") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
    </a>
    <a href=\"";
        // line 24
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
        yield "\"
       class=\"";
        // line 25
        yield ((((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v7 = "app_coach") && str_starts_with($_v6, $_v7)) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v9 = "admin_coach") && str_starts_with($_v8, $_v9)))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-user-tie\"></i> COACHING
    </a>
    <a href=\"";
        // line 28
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index")));
        yield "\"
       class=\"";
        // line 29
        yield ((((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29)) && is_string($_v11 = "frontend_blog") && str_starts_with($_v10, $_v11)) || (is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29)) && is_string($_v13 = "article") && str_starts_with($_v12, $_v13)))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-blog\"></i> BLOG
    </a>
    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\"
       class=\"";
        // line 33
        yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33)) && is_string($_v15 = "profile") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-user-circle\"></i> PROFIL
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
<style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

        /* ── READING PROGRESS BAR (Métier 3) ──────────────── */
        .read-progress-bar { position:fixed; top:0; left:0; height:3px; background:linear-gradient(90deg,#22c55e,#3b82f6); width:0%; z-index:9999; transition:width .1s linear; }

        /* ── NAVBAR ─────────────────────────────────────────────── */
        .navbar { background:#fff; border-bottom:1px solid #e2e8f0; padding:0 40px; height:64px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; box-shadow:0 1px 3px rgba(0,0,0,.06); }
        .nav-brand { font-size:20px; font-weight:800; color:#0f172a; letter-spacing:-.5px; }
        .nav-brand span { color:#22c55e; }
        .nav-links { display:flex; align-items:center; gap:28px; }
        .nav-links a { font-size:14px; font-weight:500; color:#64748b; text-decoration:none; transition:color .15s; }
        .nav-links a:hover, .nav-links a.active { color:#0f172a; }
        .nav-cta { background:#22c55e; color:#fff !important; padding:8px 18px; border-radius:8px; font-weight:600 !important; }
        .nav-cta:hover { background:#16a34a !important; }

        /* ── LAYOUT ─────────────────────────────────────────────── */
        .page { max-width:860px; margin:0 auto; padding:40px 24px 80px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:24px; transition:color .15s; }
        .back-link:hover { color:#22c55e; }

        /* ── ARTICLE CARD ───────────────────────────────────────── */
        .article-wrap { background:#fff; border:1px solid #e2e8f0; border-radius:20px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,.06); }

        .article-hero { position:relative; }
        .article-hero img { width:100%; max-height:420px; object-fit:cover; display:block; }
        .article-hero-placeholder { height:220px; background:linear-gradient(135deg,#e0f2fe,#f0fdf4); display:flex; align-items:center; justify-content:center; font-size:72px; }

        .hero-badges { position:absolute; top:18px; left:18px; display:flex; gap:8px; flex-wrap:wrap; }
        .badge { padding:5px 13px; border-radius:20px; font-size:12px; font-weight:700; color:#fff; }
        .badge-publié    { background:#22c55e; }
        .badge-brouillon { background:#f59e0b; }
        .badge-archivé   { background:#94a3b8; }
        .badge-cat { background:rgba(15,23,42,.75); backdrop-filter:blur(6px); }

        .article-body { padding:36px; }
        .article-title { font-size:28px; font-weight:800; color:#0f172a; line-height:1.25; margin-bottom:16px; letter-spacing:-.5px; }

        .article-meta { display:flex; align-items:center; gap:20px; margin-bottom:28px; flex-wrap:wrap; }
        .meta-chip { display:inline-flex; align-items:center; gap:6px; font-size:13px; color:#64748b; }
        .meta-chip strong { color:#334155; font-weight:600; }
        .meta-dot { width:4px; height:4px; border-radius:50%; background:#cbd5e1; flex-shrink:0; }

        .article-content { font-size:15.5px; line-height:1.85; color:#334155; white-space:pre-wrap; margin-bottom:36px; }

        /* ── DIVIDER ────────────────────────────────────────────── */
        .divider { border:none; border-top:1px solid #f1f5f9; margin:0 0 32px; }

        /* ── REACTION SUMMARY BAR ───────────────────────────────── */
        .reaction-summary {
            display:flex; align-items:center; gap:10px; flex-wrap:wrap;
            background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px;
            padding:16px 20px; margin-bottom:28px;
        }
        .summary-label { font-size:12px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.6px; margin-right:4px; }
        .summary-chip {
            display:inline-flex; align-items:center; gap:6px;
            background:#fff; border:1px solid #e2e8f0; border-radius:50px;
            padding:6px 14px; font-size:13px; font-weight:700; color:#334155;
            box-shadow:0 1px 3px rgba(0,0,0,.04);
        }
        .summary-chip .chip-count { color:#22c55e; }
        .summary-empty { font-size:13px; color:#94a3b8; font-style:italic; }
        .star-summary { display:inline-flex; align-items:center; gap:5px; font-size:13px; font-weight:700; color:#f59e0b; margin-left:4px; }
        .star-summary span { color:#334155; }

        /* ── REACTION PANEL ─────────────────────────────────────── */
        .reaction-panel { }
        .reaction-title { font-size:13px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.7px; margin-bottom:18px; }

        .reaction-buttons { display:flex; gap:12px; flex-wrap:wrap; margin-bottom:24px; }

        .react-btn {
            display:inline-flex; align-items:center; gap:8px;
            padding:10px 20px; border-radius:50px;
            font-family:'Inter',sans-serif; font-size:14px; font-weight:600;
            border:2px solid #e2e8f0; background:#f8fafc; color:#475569;
            cursor:pointer; transition:all .18s; user-select:none;
        }
        .react-btn:hover:not(:disabled) { border-color:#22c55e; color:#16a34a; background:#f0fdf4; transform:translateY(-1px); }
        .react-btn.active { background:#22c55e; border-color:#22c55e; color:#fff; box-shadow:0 4px 12px rgba(34,197,94,.3); }
        .react-btn.active:hover { background:#16a34a; border-color:#16a34a; }
        .react-btn:disabled { opacity:.5; cursor:not-allowed; }
        .react-btn .count { font-size:12px; background:rgba(0,0,0,.08); padding:2px 7px; border-radius:10px; }
        .react-btn.active .count { background:rgba(255,255,255,.25); }

        /* ── STAR RATING ────────────────────────────────────────── */
        .star-section { margin-bottom:28px; }
        .star-label { font-size:13px; color:#64748b; margin-bottom:10px; font-weight:500; }
        .stars { display:flex; gap:6px; align-items:center; }
        .star { font-size:28px; cursor:pointer; color:#e2e8f0; transition:color .12s, transform .12s; line-height:1; }
        .star:hover, .star.lit { color:#f59e0b; transform:scale(1.15); }
        .star-avg-inline { font-size:13px; font-weight:700; color:#94a3b8; margin-left:12px; }
        .star-avg-inline strong { color:#f59e0b; font-size:15px; }

        /* ── AVIS FORM ──────────────────────────────────────────── */
        .avis-section { margin-bottom:36px; }
        .avis-label { font-size:13px; color:#64748b; margin-bottom:8px; font-weight:500; }
        .avis-row { display:flex; gap:10px; }
        .avis-input {
            flex:1; padding:10px 14px; border:1.5px solid #e2e8f0; border-radius:10px;
            font-family:'Inter',sans-serif; font-size:14px; color:#1e293b;
            background:#f8fafc; outline:none; resize:none; transition:border-color .15s;
        }
        .avis-input:focus { border-color:#22c55e; background:#fff; }
        .avis-submit {
            padding:10px 20px; background:#22c55e; color:#fff; border:none;
            border-radius:10px; font-family:'Inter',sans-serif; font-size:14px;
            font-weight:700; cursor:pointer; transition:background .15s; white-space:nowrap;
        }
        .avis-submit:hover { background:#16a34a; }
        .anon-row { display:flex; align-items:center; gap:8px; margin-top:10px; cursor:pointer; width:fit-content; }
        .anon-row input { accent-color:#22c55e; width:15px; height:15px; cursor:pointer; }
        .anon-row span { font-size:12px; color:#94a3b8; font-weight:500; }

        /* ── AVIS LIST ──────────────────────────────────────────── */
        .avis-list-section { }
        .avis-list-title {
            font-size:13px; font-weight:700; color:#94a3b8;
            text-transform:uppercase; letter-spacing:.7px; margin-bottom:16px;
            display:flex; align-items:center; gap:8px;
        }
        .avis-count-badge {
            background:#22c55e; color:#fff; font-size:11px; font-weight:800;
            padding:2px 8px; border-radius:20px;
        }

        .avis-list { display:flex; flex-direction:column; gap:12px; }

        .avis-card {
            background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px;
            padding:16px 18px; display:flex; flex-direction:column; gap:8px;
            animation:fadeIn .3s ease;
        }
        @keyframes fadeIn { from{opacity:0;transform:translateY(6px)} to{opacity:1;transform:translateY(0)} }

        .avis-card-header { display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:8px; }
        .avis-author { display:flex; align-items:center; gap:10px; }
        .avis-avatar {
            width:32px; height:32px; border-radius:50%; background:#22c55e;
            display:flex; align-items:center; justify-content:center;
            font-size:13px; font-weight:800; color:#fff; flex-shrink:0;
        }
        .avis-avatar.anon { background:#94a3b8; }
        .avis-name { font-size:13px; font-weight:700; color:#1e293b; }
        .avis-date { font-size:11px; color:#94a3b8; }

        .avis-meta { display:flex; align-items:center; gap:8px; flex-wrap:wrap; }
        .avis-type-badge {
            font-size:11px; font-weight:700; padding:3px 9px; border-radius:20px;
            border:1px solid;
        }
        .type-like     { background:#f0fdf4; color:#16a34a; border-color:#bbf7d0; }
        .type-helpful  { background:#eff6ff; color:#2563eb; border-color:#bfdbfe; }
        .type-bookmark { background:#faf5ff; color:#7c3aed; border-color:#ddd6fe; }
        .type-share    { background:#fff7ed; color:#c2410c; border-color:#fed7aa; }

        .avis-stars { color:#f59e0b; font-size:13px; letter-spacing:1px; }

        .avis-text { font-size:14px; color:#475569; line-height:1.65; font-style:italic; }
        .avis-text::before { content:'\"'; color:#22c55e; font-size:18px; font-weight:800; line-height:0; vertical-align:-4px; margin-right:2px; }
        .avis-text::after  { content:'\"'; color:#22c55e; font-size:18px; font-weight:800; line-height:0; vertical-align:-4px; margin-left:2px; }

        .avis-empty { text-align:center; padding:32px; color:#94a3b8; font-size:14px; background:#f8fafc; border:1px dashed #e2e8f0; border-radius:12px; }
        .avis-empty .empty-icon { font-size:36px; display:block; margin-bottom:8px; }

        /* ── LOGIN NOTICE ───────────────────────────────────────── */
        .login-notice { background:#f0fdf4; border:1.5px solid #bbf7d0; border-radius:12px; padding:16px 20px; display:flex; align-items:center; gap:12px; margin-bottom:24px; }
        .login-notice p { font-size:14px; color:#166534; margin:0; }
        .login-notice a { color:#16a34a; font-weight:700; text-decoration:none; }

        /* ── SIGNALEMENT BUTTON ────────────────────────────────── */
        .signalement-bar { display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; padding:16px 0 0; margin-top:8px; }
        .signalement-info { font-size:12px; color:#94a3b8; }
        .btn-signaler { display:inline-flex; align-items:center; gap:7px; padding:9px 18px; border:1.5px solid #fca5a5; background:#fff5f5; color:#dc2626; border-radius:9px; font-family:'Inter',sans-serif; font-size:13px; font-weight:700; text-decoration:none; transition:all .15s; }
        .btn-signaler:hover { background:#fee2e2; border-color:#ef4444; }
        .btn-signaler.already { background:#f1f5f9; color:#94a3b8; border-color:#e2e8f0; pointer-events:none; }

        /* ── TTS BUTTON ─────────────────────────────────────────── */
        .tts-bar { display:flex; align-items:center; gap:12px; padding:14px 18px; background:#f0f9ff; border:1.5px solid #bae6fd; border-radius:12px; margin-bottom:24px; flex-wrap:wrap; }
        .tts-info { font-size:13px; color:#0369a1; font-weight:500; flex:1; }
        .btn-tts { display:inline-flex; align-items:center; gap:7px; padding:9px 18px; background:#0284c7; color:#fff; border:none; border-radius:9px; font-family:'Inter',sans-serif; font-size:13px; font-weight:700; cursor:pointer; transition:all .15s; white-space:nowrap; }
        .btn-tts:hover { background:#0369a1; transform:translateY(-1px); }
        .btn-tts.playing { background:#dc2626; }
        .btn-tts.playing:hover { background:#b91c1c; }
        .tts-progress { flex:1; min-width:120px; }
        .tts-progress-bar { height:4px; background:#e0f2fe; border-radius:4px; overflow:hidden; display:none; }
        .tts-progress-bar.show { display:block; }
        .tts-progress-fill { height:100%; background:#0284c7; border-radius:4px; width:0%; transition:width .3s; }

        /* ── AVIS MODERATION FEEDBACK ────────────────────────────── */
        .mod-checking { display:none; align-items:center; gap:8px; font-size:12px; color:#7c3aed; font-weight:600; margin-top:8px; }
        .mod-checking.show { display:flex; }
        .mod-checking-dots span { animation:pulse-dot 1.2s infinite; margin-left:2px; }
        .mod-checking-dots span:nth-child(2) { animation-delay:.2s; }
        .mod-checking-dots span:nth-child(3) { animation-delay:.4s; }
        @keyframes pulse-dot { 0%,80%,100%{opacity:.2}40%{opacity:1} }
        .mod-result { display:none; font-size:12px; font-weight:600; padding:8px 12px; border-radius:8px; margin-top:8px; }
        .mod-result.show { display:block; }
        .mod-approved { background:#dcfce7; color:#15803d; border:1px solid #bbf7d0; }
        .mod-rejected { background:#fee2e2; color:#dc2626; border:1px solid #fecaca; }

        /* ── TOAST ──────────────────────────────────────────────── */
        .toast { position:fixed; bottom:24px; right:24px; background:#0f172a; color:#fff; padding:13px 22px; border-radius:12px; font-size:14px; font-weight:600; z-index:9999; opacity:0; transform:translateY(10px); transition:all .25s; pointer-events:none; }
        .toast.show { opacity:1; transform:translateY(0); }
        .toast.green { background:#15803d; }
        .toast.red   { background:#dc2626; }

        /* ── FOOTER ─────────────────────────────────────────────── */
        .footer { background:#0f172a; color:#64748b; text-align:center; padding:28px; font-size:13px; margin-top:60px; }
        .footer span { color:#22c55e; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 256
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

        // line 258
        yield "<div class=\"page\">

    <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"back-link\">← Retour au blog</a>

    <div class=\"article-wrap\">

        ";
        // line 265
        yield "        <div class=\"article-hero\">
            ";
        // line 266
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 266, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 267, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 267))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 267, $this->source); })()), "titre", [], "any", false, false, false, 267), "html", null, true);
            yield "\">
            ";
        } else {
            // line 269
            yield "                <div class=\"article-hero-placeholder\">📝</div>
            ";
        }
        // line 271
        yield "            <div class=\"hero-badges\">
                ";
        // line 272
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 272, $this->source); })()), "statut", [], "any", false, false, false, 272)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 273
            yield "                    <span class=\"badge badge-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 273, $this->source); })()), "statut", [], "any", false, false, false, 273), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 273, $this->source); })()), "statut", [], "any", false, false, false, 273)), "html", null, true);
            yield "</span>
                ";
        }
        // line 275
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 275, $this->source); })()), "categorie", [], "any", false, false, false, 275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 276
            yield "                    <span class=\"badge badge-cat\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 276, $this->source); })()), "categorie", [], "any", false, false, false, 276), "html", null, true);
            yield "</span>
                ";
        }
        // line 278
        yield "            </div>
        </div>

        ";
        // line 282
        yield "        <div class=\"article-body\">

            <h1 class=\"article-title\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 284, $this->source); })()), "titre", [], "any", false, false, false, 284), "html", null, true);
        yield "</h1>

            ";
        // line 286
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 286, $this->source); })()), "motsClesArray", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 287
            yield "            <div style=\"display:flex;flex-wrap:wrap;gap:6px;margin-bottom:16px;\">
                ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 288, $this->source); })()), "motsClesArray", [], "any", false, false, false, 288));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 289
                yield "                    <span style=\"display:inline-block;background:#ede9fe;color:#5b21b6;font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            yield "            </div>
            ";
        }
        // line 293
        yield "
            ";
        // line 295
        yield "            <div class=\"read-progress-bar\" id=\"readProgressBar\"></div>

            <div class=\"article-meta\">
                <span class=\"meta-chip\">👁 <strong>";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 298, $this->source); })()), "nombreVues", [], "any", false, false, false, 298), "html", null, true);
        yield "</strong> vues</span>
                <span class=\"meta-dot\"></span>
                <span class=\"meta-chip\">⏱ <strong>";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 300, $this->source); })()), "readingTimeMinutes", [], "any", false, false, false, 300), "html", null, true);
        yield " min</strong> de lecture</span>
                ";
        // line 301
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 301, $this->source); })()), "isTrending", [], "method", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 302
            yield "                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\" style=\"color:#f97316;font-weight:700\">🔥 Trending</span>
                ";
        }
        // line 305
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 305, $this->source); })()), "categorie", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 306
            yield "                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\">🏷 <strong>";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 307, $this->source); })()), "categorie", [], "any", false, false, false, 307), "html", null, true);
            yield "</strong></span>
                ";
        }
        // line 309
        yield "                ";
        if ((($tmp = (isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 309, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 310
            yield "                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\">⭐ <strong id=\"metaAvgNote\">";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 311, $this->source); })()), "html", null, true);
            yield "/5</strong></span>
                ";
        } else {
            // line 313
            yield "                    <span class=\"meta-dot\" id=\"metaAvgNoteSep\" style=\"display:none\"></span>
                    <span class=\"meta-chip\" id=\"metaAvgNoteChip\" style=\"display:none\">⭐ <strong id=\"metaAvgNote\">–/5</strong></span>
                ";
        }
        // line 316
        yield "            </div>

            ";
        // line 318
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 318, $this->source); })()), "resumeIa", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 319
            yield "            <div style=\"background:#f0fdf4;border-left:4px solid #22c55e;border-radius:0 10px 10px 0;padding:14px 18px;margin-bottom:22px;font-size:14px;color:#166534;font-style:italic;line-height:1.7;\">
                ";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 320, $this->source); })()), "resumeIa", [], "any", false, false, false, 320), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 323
        yield "
            <div class=\"article-content\" id=\"articleContentText\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 324, $this->source); })()), "contenu", [], "any", false, false, false, 324), "html", null, true);
        yield "</div>

            ";
        // line 327
        yield "            <div class=\"tts-bar\" id=\"ttsBar\">
                <span class=\"tts-info\">🎧 Écoutez cet article</span>
                <div class=\"tts-progress\">
                    <div class=\"tts-progress-bar\" id=\"ttsProgressBar\">
                        <div class=\"tts-progress-fill\" id=\"ttsProgressFill\"></div>
                    </div>
                </div>
                <button class=\"btn-tts\" id=\"btnTts\" onclick=\"toggleTTS()\">
                    🔊 Écouter l'article
                </button>
            </div>

            <hr class=\"divider\">

            ";
        // line 344
        yield "            <div class=\"reaction-summary\" id=\"reactionSummary\">
                <span class=\"summary-label\">Réactions</span>
                ";
        // line 346
        $context["total"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 346, $this->source); })()), "like", [], "array", false, false, false, 346) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 346, $this->source); })()), "helpful", [], "array", false, false, false, 346)) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 346, $this->source); })()), "bookmark", [], "array", false, false, false, 346)) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 346, $this->source); })()), "share", [], "array", false, false, false, 346));
        // line 347
        yield "                ";
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 347, $this->source); })()) == 0)) {
            // line 348
            yield "                    <span class=\"summary-empty\">Soyez le premier à réagir à cet article !</span>
                ";
        } else {
            // line 350
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 350, $this->source); })()), "like", [], "array", false, false, false, 350) > 0)) {
                // line 351
                yield "                        <span class=\"summary-chip\">👍 <span class=\"chip-count\" id=\"sc-like\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 351, $this->source); })()), "like", [], "array", false, false, false, 351), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 353
                yield "                        <span class=\"summary-chip\" id=\"sc-like-wrap\" style=\"display:none\">👍 <span class=\"chip-count\" id=\"sc-like\">0</span></span>
                    ";
            }
            // line 355
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 355, $this->source); })()), "helpful", [], "array", false, false, false, 355) > 0)) {
                // line 356
                yield "                        <span class=\"summary-chip\">✅ <span class=\"chip-count\" id=\"sc-helpful\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 356, $this->source); })()), "helpful", [], "array", false, false, false, 356), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 358
                yield "                        <span class=\"summary-chip\" id=\"sc-helpful-wrap\" style=\"display:none\">✅ <span class=\"chip-count\" id=\"sc-helpful\">0</span></span>
                    ";
            }
            // line 360
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 360, $this->source); })()), "bookmark", [], "array", false, false, false, 360) > 0)) {
                // line 361
                yield "                        <span class=\"summary-chip\">🔖 <span class=\"chip-count\" id=\"sc-bookmark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 361, $this->source); })()), "bookmark", [], "array", false, false, false, 361), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 363
                yield "                        <span class=\"summary-chip\" id=\"sc-bookmark-wrap\" style=\"display:none\">🔖 <span class=\"chip-count\" id=\"sc-bookmark\">0</span></span>
                    ";
            }
            // line 365
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 365, $this->source); })()), "share", [], "array", false, false, false, 365) > 0)) {
                // line 366
                yield "                        <span class=\"summary-chip\">📤 <span class=\"chip-count\" id=\"sc-share\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 366, $this->source); })()), "share", [], "array", false, false, false, 366), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 368
                yield "                        <span class=\"summary-chip\" id=\"sc-share-wrap\" style=\"display:none\">📤 <span class=\"chip-count\" id=\"sc-share\">0</span></span>
                    ";
            }
            // line 370
            yield "                    ";
            if ((($tmp = (isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 370, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 371
                yield "                        <span class=\"star-summary\">⭐ <span id=\"summaryAvg\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 371, $this->source); })()), "html", null, true);
                yield "</span><span>/5</span></span>
                    ";
            } else {
                // line 373
                yield "                        <span class=\"star-summary\" id=\"summaryAvgWrap\" style=\"display:none\">⭐ <span id=\"summaryAvg\">–</span><span>/5</span></span>
                    ";
            }
            // line 375
            yield "                ";
        }
        // line 376
        yield "            </div>

            ";
        // line 381
        yield "            <div class=\"reaction-panel\">

                <div class=\"reaction-title\">Votre réaction</div>

                ";
        // line 385
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "user", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 386
            yield "                    <div class=\"login-notice\">
                        <span style=\"font-size:20px\">🔒</span>
                        <p>Connectez-vous pour réagir à cet article. <a href=\"#\">Se connecter →</a></p>
                    </div>
                ";
        }
        // line 391
        yield "
                ";
        // line 393
        yield "                <div class=\"reaction-buttons\">
                    <button class=\"react-btn ";
        // line 394
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "like", [], "array", true, true, false, 394)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-like\" data-type=\"like\" onclick=\"handleReaction('like')\"
                            ";
        // line 396
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 396, $this->source); })()), "user", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        👍 J'aime <span class=\"count\" id=\"count-like\">";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 397, $this->source); })()), "like", [], "array", false, false, false, 397), "html", null, true);
        yield "</span>
                    </button>
                    <button class=\"react-btn ";
        // line 399
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "helpful", [], "array", true, true, false, 399)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-helpful\" data-type=\"helpful\" onclick=\"handleReaction('helpful')\"
                            ";
        // line 401
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        ✅ Utile <span class=\"count\" id=\"count-helpful\">";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 402, $this->source); })()), "helpful", [], "array", false, false, false, 402), "html", null, true);
        yield "</span>
                    </button>
                    <button class=\"react-btn ";
        // line 404
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "bookmark", [], "array", true, true, false, 404)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-bookmark\" data-type=\"bookmark\" onclick=\"handleReaction('bookmark')\"
                            ";
        // line 406
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 406, $this->source); })()), "user", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        🔖 Sauvegarder <span class=\"count\" id=\"count-bookmark\">";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 407, $this->source); })()), "bookmark", [], "array", false, false, false, 407), "html", null, true);
        yield "</span>
                    </button>
                    <button class=\"react-btn ";
        // line 409
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "share", [], "array", true, true, false, 409)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-share\" data-type=\"share\" onclick=\"handleReaction('share')\"
                            ";
        // line 411
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 411, $this->source); })()), "user", [], "any", false, false, false, 411)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        📤 Partager <span class=\"count\" id=\"count-share\">";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 412, $this->source); })()), "share", [], "array", false, false, false, 412), "html", null, true);
        yield "</span>
                    </button>
                </div>

                ";
        // line 417
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "user", [], "any", false, false, false, 417)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 418
            yield "                <div class=\"star-section\">
                    <div class=\"star-label\">
                        Évaluer cet article
                        <span class=\"star-avg-inline\" id=\"starAvgInline\">
                            ";
            // line 422
            if ((($tmp = (isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 422, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "— Moyenne actuelle : <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 422, $this->source); })()), "html", null, true);
                yield "</strong>/5";
            }
            // line 423
            yield "                        </span>
                    </div>
                    <div class=\"stars\" id=\"starRow\">
                        ";
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 427
                yield "                            <span class=\"star\" data-val=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\"
                                  onclick=\"submitNote(";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield ")\"
                                  onmouseenter=\"hoverStars(";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield ")\"
                                  onmouseleave=\"resetStars()\">★</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            yield "                    </div>
                </div>

                ";
            // line 436
            yield "                <div class=\"avis-section\">
                    <div class=\"avis-label\">Laisser un avis court <span style=\"color:#94a3b8\">(500 caractères max)</span></div>
                    <div class=\"avis-row\">
                        <textarea class=\"avis-input\" id=\"avisInput\" rows=\"2\" maxlength=\"500\"
                                  placeholder=\"Votre impression en quelques mots…\"></textarea>
                        <button class=\"avis-submit\" onclick=\"submitAvis()\">Envoyer</button>
                    </div>
                    <label class=\"anon-row\">
                        <input type=\"checkbox\" id=\"anonCheck\">
                        <span>Réagir anonymement</span>
                    </label>
                    ";
            // line 448
            yield "                    <div class=\"mod-checking\" id=\"modChecking\">
                        🤖 Modération IA en cours
                        <span class=\"mod-checking-dots\"><span>.</span><span>.</span><span>.</span></span>
                    </div>
                    <div class=\"mod-result\" id=\"modResult\"></div>
                </div>
                ";
        }
        // line 455
        yield "
            </div>";
        // line 457
        yield "
            <hr class=\"divider\">

            ";
        // line 464
        yield "            <div class=\"avis-list-section\">
                <div class=\"avis-list-title\">
                    💬 Avis des lecteurs
                    <span class=\"avis-count-badge\" id=\"avisCountBadge\">⏳</span>
                </div>
                <div class=\"avis-list\" id=\"avisList\">
                    <div class=\"avis-empty\">
                        <span class=\"empty-icon\">⏳</span>
                        Chargement des avis…
                    </div>
                </div>
            </div>

                    ";
        // line 478
        yield "            <div class=\"signalement-bar\">
                <span class=\"signalement-info\">🛡 Contenu inapproprié ou incorrect ?</span>
                ";
        // line 480
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "user", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 481
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_new", ["id_article" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 481, $this->source); })()), "idArticle", [], "any", false, false, false, 481)]), "html", null, true);
            yield "\" class=\"btn-signaler\">
                        🚩 Signaler cet article
                    </a>
                ";
        } else {
            // line 485
            yield "                    <a href=\"#\" class=\"btn-signaler already\" title=\"Connectez-vous pour signaler\">
                        🚩 Signaler (connexion requise)
                    </a>
                ";
        }
        // line 489
        yield "            </div>

</div>";
        // line 492
        yield "    </div>";
        // line 493
        yield "</div>

";
        // line 496
        yield "<footer class=\"footer\">© 2026 <span>Bizcore</span> — Tous droits réservés</footer>

";
        // line 499
        yield "<div class=\"toast\" id=\"toast\"></div>

<script>
// ──────────────────────────────────────────────────────────────────
// CONFIG
// ──────────────────────────────────────────────────────────────────
const ARTICLE_ID = ";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 505, $this->source); })()), "idArticle", [], "any", false, false, false, 505), "html", null, true);
        yield ";
const REACT_URL  = `/blog/\${ARTICLE_ID}/react`;
const AVIS_URL   = `/blog/\${ARTICLE_ID}/avis`;
const IS_LOGGED  = ";
        // line 508
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 508, $this->source); })()), "user", [], "any", false, false, false, 508)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";

// ──────────────────────────────────────────────────────────────────
// TOAST
// ──────────────────────────────────────────────────────────────────
function showToast(msg, color = '') {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.className = 'toast show ' + color;
    setTimeout(() => t.classList.remove('show'), 3200);
}

// ──────────────────────────────────────────────────────────────────
// UPDATE ALL COUNTS & SUMMARY after a reaction
// ──────────────────────────────────────────────────────────────────
function updateCounts(counts, avgNote) {
    const types = ['like', 'helpful', 'bookmark', 'share'];

    types.forEach(type => {
        // Button count
        const btnCount = document.getElementById('count-' + type);
        if (btnCount) btnCount.textContent = counts[type] ?? 0;

        // Summary chip
        const sc = document.getElementById('sc-' + type);
        if (sc) {
            sc.textContent = counts[type] ?? 0;
            // Show the chip wrapper if count > 0
            const wrap = document.getElementById('sc-' + type + '-wrap');
            if (wrap) wrap.style.display = (counts[type] > 0) ? '' : 'none';
        }
    });

    // If summary had \"empty\" text, rebuild it
    const totalNow = types.reduce((s, t) => s + (counts[t] ?? 0), 0);
    const summary = document.getElementById('reactionSummary');
    if (summary) {
        const emptyEl = summary.querySelector('.summary-empty');
        if (emptyEl && totalNow > 0) emptyEl.remove();
    }

    // Star average
    if (avgNote !== null && avgNote !== undefined) {
        const els = ['summaryAvg', 'metaAvgNote'];
        els.forEach(id => {
            const el = document.getElementById(id);
            if (el) el.textContent = avgNote;
        });
        ['summaryAvgWrap', 'metaAvgNoteSep', 'metaAvgNoteChip'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.style.display = '';
        });
        const starAvg = document.getElementById('starAvgInline');
        if (starAvg) starAvg.innerHTML = `— Moyenne actuelle : <strong>\${avgNote}</strong>/5`;
    }
}

// ──────────────────────────────────────────────────────────────────
// HANDLE REACTION BUTTON TOGGLE
// ──────────────────────────────────────────────────────────────────
async function handleReaction(type, extra = {}) {
    if (!IS_LOGGED) { showToast('🔒 Connectez-vous pour réagir', 'red'); return; }

    const btn = document.getElementById('btn-' + type);
    if (btn) btn.disabled = true;

    try {
        const res  = await fetch(REACT_URL, {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({ type, ...extra }),
        });
        const json = await res.json();

        if (!json.success) { showToast('❌ ' + json.message, 'red'); return; }

        if (btn) btn.classList.toggle('active', json.active);

        updateCounts(json.counts, json.avg_note);

        showToast(
            json.active ? '✅ Réaction enregistrée !' : 'Réaction retirée',
            json.active ? 'green' : ''
        );

        // Refresh avis list so newly added avis appears immediately
        // ──────────────────────────────────────────────────────────────────
// TEXT-TO-SPEECH — Web Speech API (no external key needed)
// ──────────────────────────────────────────────────────────────────
let ttsActive = false;

function toggleTTS() {
    if (ttsActive) {
        window.speechSynthesis.cancel();
        ttsActive = false;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '🔊 Écouter l\\'article'; btn.classList.remove('playing'); }
        const bar = document.getElementById('ttsProgressBar');
        if (bar) bar.classList.remove('show');
        return;
    }

    if (!('speechSynthesis' in window)) {
        alert('Votre navigateur ne supporte pas la lecture audio. Essayez Chrome ou Edge.');
        return;
    }

    // Get text
    const contentEl = document.getElementById('articleContentText');
    const rawText = contentEl ? (contentEl.innerText || contentEl.textContent || '') : '';
    const fullText = rawText.trim();

    if (!fullText) {
        alert('Aucun contenu à lire.');
        return;
    }

    // Cancel anything playing
    window.speechSynthesis.cancel();

    // Build utterance
    const utter = new SpeechSynthesisUtterance(fullText);
    utter.lang   = 'fr-FR';
    utter.rate   = 0.9;
    utter.pitch  = 1;
    utter.volume = 1;

    utter.onstart = () => {
        ttsActive = true;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '⏹ Arrêter'; btn.classList.add('playing'); }
        const bar = document.getElementById('ttsProgressBar');
        if (bar) bar.classList.add('show');
    };

    utter.onend = () => {
        ttsActive = false;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '🔊 Écouter l\\'article'; btn.classList.remove('playing'); }
        const bar = document.getElementById('ttsProgressBar');
        if (bar) bar.classList.remove('show');
        const fill = document.getElementById('ttsProgressFill');
        if (fill) { fill.style.width = '100%'; setTimeout(() => fill.style.width = '0%', 1000); }
    };

    utter.onerror = (e) => {
        ttsActive = false;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '🔊 Écouter l\\'article'; btn.classList.remove('playing'); }
        // Don't alert on 'interrupted' — that's normal when user clicks stop
        if (e.error !== 'interrupted' && e.error !== 'canceled') {
            alert('Erreur audio: ' + e.error + '. Vérifiez que le son est activé sur votre PC.');
        }
    };

    utter.onboundary = (evt) => {
        if (evt.name === 'word') {
            const fill = document.getElementById('ttsProgressFill');
            if (fill) fill.style.width = Math.min(100, Math.round((evt.charIndex / fullText.length) * 100)) + '%';
        }
    };

    // THE FIX: Chrome's getVoices() is async. We poll every 100ms until voices load,
    // then speak. Max 20 tries (2 seconds). Works 100% of the time.
    let tries = 0;
    function trySpeak() {
        const voices = window.speechSynthesis.getVoices();
        if (voices.length > 0 || tries >= 20) {
            // Pick best French voice, fall back to any voice
            const frVoice = voices.find(v => v.lang === 'fr-FR' && v.localService)
                         || voices.find(v => v.lang === 'fr-FR')
                         || voices.find(v => v.lang.startsWith('fr'))
                         || null;
            if (frVoice) utter.voice = frVoice;
            window.speechSynthesis.speak(utter);
        } else {
            tries++;
            setTimeout(trySpeak, 100);
        }
    }
    trySpeak();
}

    } catch (err) {
        showToast('❌ Erreur réseau', 'red');
    } finally {
        if (btn) btn.disabled = false;
    }
}

// Stop TTS if user leaves the page
window.addEventListener('beforeunload', () => { if ('speechSynthesis' in window) window.speechSynthesis.cancel(); });

// Pre-warm voices on page load so first click is instant
if ('speechSynthesis' in window) window.speechSynthesis.getVoices();

loadAvisList();

// ──────────────────────────────────────────────────────────────────
// STARS — hover preview + submit
// ──────────────────────────────────────────────────────────────────
let selectedNote = null;

function hoverStars(val) {
    document.querySelectorAll('.star').forEach((s, i) => s.classList.toggle('lit', i < val));
}
function resetStars() {
    document.querySelectorAll('.star').forEach((s, i) => s.classList.toggle('lit', selectedNote !== null && i < selectedNote));
}
function submitNote(val) {
    if (!IS_LOGGED) { showToast('🔒 Connectez-vous pour noter', 'red'); return; }
    selectedNote = val;
    resetStars();
    const anon = document.getElementById('anonCheck')?.checked ?? false;
    handleReaction('like', { note: val, anonymous: anon });
}

// ──────────────────────────────────────────────────────────────────
// AVIS SUBMIT
// ──────────────────────────────────────────────────────────────────
async function submitAvis() {
    if (!IS_LOGGED) { showToast('🔒 Connectez-vous pour laisser un avis', 'red'); return; }
    const avis = document.getElementById('avisInput').value.trim();
    if (!avis) { showToast('✏️ Écrivez quelques mots d\\'abord', 'red'); return; }
    const anon = document.getElementById('anonCheck')?.checked ?? false;

    // ── AI MODERATION before saving ───────────────────────────────
    const submitBtn  = document.querySelector('.avis-submit');
    const modChecking = document.getElementById('modChecking');
    const modResult   = document.getElementById('modResult');

    if (submitBtn) submitBtn.disabled = true;
    if (modChecking) modChecking.classList.add('show');
    if (modResult)   modResult.classList.remove('show');

    try {
        const modRes = await fetch('/api/articles/moderate-avis', {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({
                avis,
                article_titre: document.title.replace(' — Bizcore Blog', '')
            }),
        });
        const modJson = await modRes.json();
        const decision = modJson.data?.decision ?? 'approved';
        const reason   = modJson.data?.reason   ?? '';

        if (modChecking) modChecking.classList.remove('show');

        if (decision === 'rejected') {
            // Show rejection feedback — do NOT submit
            if (modResult) {
                modResult.className = 'mod-result show mod-rejected';
                modResult.innerHTML = '❌ Avis non publié — ' + escHtml(reason);
            }
            showToast('❌ Avis rejeté par la modération IA', 'red');
            if (submitBtn) submitBtn.disabled = false;
            return;
        }

        // Approved — show brief confirmation then submit
        if (modResult) {
            modResult.className = 'mod-result show mod-approved';
            modResult.innerHTML = '✅ Modération IA : approuvé — publication en cours…';
        }

    } catch (_) {
        // If moderation fails, approve silently (never block on error)
        if (modChecking) modChecking.classList.remove('show');
    }

    // Submit reaction
    await handleReaction('helpful', { avis, anonymous: anon });
    document.getElementById('avisInput').value = '';
    if (submitBtn) submitBtn.disabled = false;

    // Hide moderation result after submit
    setTimeout(() => {
        if (modResult) modResult.classList.remove('show');
    }, 3000);
}

// ──────────────────────────────────────────────────────────────────
// LOAD & RENDER AVIS LIST  →  GET /blog/{id}/avis
// ──────────────────────────────────────────────────────────────────
const TYPE_LABELS = { like:'👍 J\\'aime', helpful:'✅ Utile', bookmark:'🔖 Sauvegardé', share:'📤 Partagé' };
const TYPE_CLASS  = { like:'type-like', helpful:'type-helpful', bookmark:'type-bookmark', share:'type-share' };

async function loadAvisList() {
    try {
        const res  = await fetch(AVIS_URL);
        const json = await res.json();
        const list = document.getElementById('avisList');
        const badge = document.getElementById('avisCountBadge');

        if (!json.success || !json.data.length) {
            badge.textContent = '0';
            list.innerHTML = `
                <div class=\"avis-empty\">
                    <span class=\"empty-icon\">💬</span>
                    Aucun avis pour l'instant — soyez le premier !
                </div>`;
            return;
        }

        badge.textContent = json.data.length;

        list.innerHTML = json.data.map(item => {
            // Author display
            const initials = item.is_anonymous
                ? '?'
                : (item.nom ? item.nom.charAt(0).toUpperCase() : '?');
            const authorName = item.is_anonymous ? 'Anonyme' : (item.nom ?? 'Utilisateur');
            const avatarClass = item.is_anonymous ? 'avis-avatar anon' : 'avis-avatar';

            // Stars display
            const starsHtml = item.note
                ? `<span class=\"avis-stars\">\${'★'.repeat(item.note)}\${'☆'.repeat(5 - item.note)}</span>`
                : '';

            // Date format
            const date = new Date(item.date_reaction);
            const dateStr = date.toLocaleDateString('fr-FR', { day:'2-digit', month:'short', year:'numeric' });

            // Avis text (only if provided)
            const avisHtml = item.avis
                ? `<div class=\"avis-text\">\${escHtml(item.avis)}</div>`
                : '';

            return `
            <div class=\"avis-card\">
                <div class=\"avis-card-header\">
                    <div class=\"avis-author\">
                        <div class=\"\${avatarClass}\">\${initials}</div>
                        <div>
                            <div class=\"avis-name\">\${escHtml(authorName)}</div>
                            <div class=\"avis-date\">\${dateStr}</div>
                        </div>
                    </div>
                    <div class=\"avis-meta\">
                        <span class=\"avis-type-badge \${TYPE_CLASS[item.type_reaction] ?? ''}\">\${TYPE_LABELS[item.type_reaction] ?? item.type_reaction}</span>
                        \${starsHtml}
                    </div>
                </div>
                \${avisHtml}
            </div>`;
        }).join('');

    } catch (err) {
        document.getElementById('avisList').innerHTML = `
            <div class=\"avis-empty\"><span class=\"empty-icon\">⚠️</span>Erreur de chargement des avis.</div>`;
    }
}

// ──────────────────────────────────────────────────────────────────
// UTILS
// ──────────────────────────────────────────────────────────────────
function escHtml(str) {
    if (!str) return '';
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
}

// ──────────────────────────────────────────────────────────────────
// INIT
// ──────────────────────────────────────────────────────────────────
loadAvisList();

// ──────────────────────────────────────────────────────────────────
// READING PROGRESS BAR
// HOW IT WORKS:
//   - As you scroll down the article, the green bar at the top grows
//   - 0% at the top, 100% when you reach the bottom
//   - No server requests are made — this is pure JavaScript
// ──────────────────────────────────────────────────────────────────
window.addEventListener('scroll', function() {
    var bar = document.getElementById('readProgressBar');
    if (!bar) return;
    var totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    var progress = totalHeight > 0 ? (window.scrollY / totalHeight) * 100 : 0;
    bar.style.width = Math.min(100, progress).toFixed(1) + '%';

    // Save the current reading position to browser storage
    // This allows the page to scroll back to where you stopped reading
    localStorage.setItem('readPos_";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 892, $this->source); })()), "idArticle", [], "any", false, false, false, 892), "html", null, true);
        yield "', Math.round(window.scrollY));
});

// ──────────────────────────────────────────────────────────────────
// RESTORE READING POSITION
// HOW IT WORKS:
//   - When you open an article you already started reading,
//     the page automatically scrolls to where you stopped
//   - Position is saved per article using the article ID
//   - Only restores if you were past the first 300 pixels
// ──────────────────────────────────────────────────────────────────
(function restoreReadingPosition() {
    var savedPosition = localStorage.getItem('readPos_";
        // line 904
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 904, $this->source); })()), "idArticle", [], "any", false, false, false, 904), "html", null, true);
        yield "');
    if (savedPosition && parseInt(savedPosition) > 300) {
        setTimeout(function() {
            window.scrollTo({ top: parseInt(savedPosition), behavior: 'smooth' });
        }, 400);
    }
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
        return "blog/show.html.twig";
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
        return array (  1357 => 904,  1342 => 892,  955 => 508,  949 => 505,  941 => 499,  937 => 496,  933 => 493,  931 => 492,  927 => 489,  921 => 485,  913 => 481,  911 => 480,  907 => 478,  892 => 464,  887 => 457,  884 => 455,  875 => 448,  862 => 436,  857 => 432,  848 => 429,  844 => 428,  839 => 427,  835 => 426,  830 => 423,  824 => 422,  818 => 418,  815 => 417,  808 => 412,  802 => 411,  795 => 409,  790 => 407,  784 => 406,  777 => 404,  772 => 402,  766 => 401,  759 => 399,  754 => 397,  748 => 396,  741 => 394,  738 => 393,  735 => 391,  728 => 386,  726 => 385,  720 => 381,  716 => 376,  713 => 375,  709 => 373,  703 => 371,  700 => 370,  696 => 368,  690 => 366,  687 => 365,  683 => 363,  677 => 361,  674 => 360,  670 => 358,  664 => 356,  661 => 355,  657 => 353,  651 => 351,  648 => 350,  644 => 348,  641 => 347,  639 => 346,  635 => 344,  619 => 327,  614 => 324,  611 => 323,  605 => 320,  602 => 319,  600 => 318,  596 => 316,  591 => 313,  586 => 311,  583 => 310,  580 => 309,  575 => 307,  572 => 306,  569 => 305,  564 => 302,  562 => 301,  558 => 300,  553 => 298,  548 => 295,  545 => 293,  541 => 291,  532 => 289,  528 => 288,  525 => 287,  523 => 286,  518 => 284,  514 => 282,  509 => 278,  503 => 276,  500 => 275,  492 => 273,  490 => 272,  487 => 271,  483 => 269,  475 => 267,  473 => 266,  470 => 265,  463 => 260,  459 => 258,  446 => 256,  221 => 40,  208 => 39,  192 => 33,  188 => 32,  182 => 29,  178 => 28,  172 => 25,  168 => 24,  162 => 21,  157 => 20,  150 => 16,  145 => 15,  138 => 11,  133 => 10,  131 => 9,  127 => 7,  114 => 6,  91 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.titre }} — Bizcore Blog{% endblock %}
{% block page_title %}BLOG — Article{% endblock %}

{% block sidebar_content %}
<div class=\"sidebar-section\">
    <div class=\"sidebar-section-label\">NAVIGATION</div>
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('dashboard') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'dashboard' ? 'active' : '' }}\">
        <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
    </a>
    {% else %}
    <a href=\"{{ path('marketplace_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'marketplace' ? 'active' : '' }}\">
        <i class=\"fas fa-shopping-cart\"></i> MARKETPLACE
    </a>
    {% endif %}
    <a href=\"{{ is_granted('ROLE_ADMIN') ? path('evenement_index') : path('evenement_front') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'evenement' ? 'active' : '' }}\">
        <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
    </a>
    <a href=\"{{ is_granted('ROLE_ADMIN') ? path('admin_coach_index') : path('app_coach_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'app_coach' or app.request.attributes.get('_route') starts with 'admin_coach' ? 'active' : '' }}\">
        <i class=\"fas fa-user-tie\"></i> COACHING
    </a>
    <a href=\"{{ is_granted('ROLE_ADMIN') ? path('article_index') : path('frontend_blog_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'frontend_blog' or app.request.attributes.get('_route') starts with 'article' ? 'active' : '' }}\">
        <i class=\"fas fa-blog\"></i> BLOG
    </a>
    <a href=\"{{ path('profile_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'profile' ? 'active' : '' }}\">
        <i class=\"fas fa-user-circle\"></i> PROFIL
    </a>
</div>
{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
<style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

        /* ── READING PROGRESS BAR (Métier 3) ──────────────── */
        .read-progress-bar { position:fixed; top:0; left:0; height:3px; background:linear-gradient(90deg,#22c55e,#3b82f6); width:0%; z-index:9999; transition:width .1s linear; }

        /* ── NAVBAR ─────────────────────────────────────────────── */
        .navbar { background:#fff; border-bottom:1px solid #e2e8f0; padding:0 40px; height:64px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; box-shadow:0 1px 3px rgba(0,0,0,.06); }
        .nav-brand { font-size:20px; font-weight:800; color:#0f172a; letter-spacing:-.5px; }
        .nav-brand span { color:#22c55e; }
        .nav-links { display:flex; align-items:center; gap:28px; }
        .nav-links a { font-size:14px; font-weight:500; color:#64748b; text-decoration:none; transition:color .15s; }
        .nav-links a:hover, .nav-links a.active { color:#0f172a; }
        .nav-cta { background:#22c55e; color:#fff !important; padding:8px 18px; border-radius:8px; font-weight:600 !important; }
        .nav-cta:hover { background:#16a34a !important; }

        /* ── LAYOUT ─────────────────────────────────────────────── */
        .page { max-width:860px; margin:0 auto; padding:40px 24px 80px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:24px; transition:color .15s; }
        .back-link:hover { color:#22c55e; }

        /* ── ARTICLE CARD ───────────────────────────────────────── */
        .article-wrap { background:#fff; border:1px solid #e2e8f0; border-radius:20px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,.06); }

        .article-hero { position:relative; }
        .article-hero img { width:100%; max-height:420px; object-fit:cover; display:block; }
        .article-hero-placeholder { height:220px; background:linear-gradient(135deg,#e0f2fe,#f0fdf4); display:flex; align-items:center; justify-content:center; font-size:72px; }

        .hero-badges { position:absolute; top:18px; left:18px; display:flex; gap:8px; flex-wrap:wrap; }
        .badge { padding:5px 13px; border-radius:20px; font-size:12px; font-weight:700; color:#fff; }
        .badge-publié    { background:#22c55e; }
        .badge-brouillon { background:#f59e0b; }
        .badge-archivé   { background:#94a3b8; }
        .badge-cat { background:rgba(15,23,42,.75); backdrop-filter:blur(6px); }

        .article-body { padding:36px; }
        .article-title { font-size:28px; font-weight:800; color:#0f172a; line-height:1.25; margin-bottom:16px; letter-spacing:-.5px; }

        .article-meta { display:flex; align-items:center; gap:20px; margin-bottom:28px; flex-wrap:wrap; }
        .meta-chip { display:inline-flex; align-items:center; gap:6px; font-size:13px; color:#64748b; }
        .meta-chip strong { color:#334155; font-weight:600; }
        .meta-dot { width:4px; height:4px; border-radius:50%; background:#cbd5e1; flex-shrink:0; }

        .article-content { font-size:15.5px; line-height:1.85; color:#334155; white-space:pre-wrap; margin-bottom:36px; }

        /* ── DIVIDER ────────────────────────────────────────────── */
        .divider { border:none; border-top:1px solid #f1f5f9; margin:0 0 32px; }

        /* ── REACTION SUMMARY BAR ───────────────────────────────── */
        .reaction-summary {
            display:flex; align-items:center; gap:10px; flex-wrap:wrap;
            background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px;
            padding:16px 20px; margin-bottom:28px;
        }
        .summary-label { font-size:12px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.6px; margin-right:4px; }
        .summary-chip {
            display:inline-flex; align-items:center; gap:6px;
            background:#fff; border:1px solid #e2e8f0; border-radius:50px;
            padding:6px 14px; font-size:13px; font-weight:700; color:#334155;
            box-shadow:0 1px 3px rgba(0,0,0,.04);
        }
        .summary-chip .chip-count { color:#22c55e; }
        .summary-empty { font-size:13px; color:#94a3b8; font-style:italic; }
        .star-summary { display:inline-flex; align-items:center; gap:5px; font-size:13px; font-weight:700; color:#f59e0b; margin-left:4px; }
        .star-summary span { color:#334155; }

        /* ── REACTION PANEL ─────────────────────────────────────── */
        .reaction-panel { }
        .reaction-title { font-size:13px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.7px; margin-bottom:18px; }

        .reaction-buttons { display:flex; gap:12px; flex-wrap:wrap; margin-bottom:24px; }

        .react-btn {
            display:inline-flex; align-items:center; gap:8px;
            padding:10px 20px; border-radius:50px;
            font-family:'Inter',sans-serif; font-size:14px; font-weight:600;
            border:2px solid #e2e8f0; background:#f8fafc; color:#475569;
            cursor:pointer; transition:all .18s; user-select:none;
        }
        .react-btn:hover:not(:disabled) { border-color:#22c55e; color:#16a34a; background:#f0fdf4; transform:translateY(-1px); }
        .react-btn.active { background:#22c55e; border-color:#22c55e; color:#fff; box-shadow:0 4px 12px rgba(34,197,94,.3); }
        .react-btn.active:hover { background:#16a34a; border-color:#16a34a; }
        .react-btn:disabled { opacity:.5; cursor:not-allowed; }
        .react-btn .count { font-size:12px; background:rgba(0,0,0,.08); padding:2px 7px; border-radius:10px; }
        .react-btn.active .count { background:rgba(255,255,255,.25); }

        /* ── STAR RATING ────────────────────────────────────────── */
        .star-section { margin-bottom:28px; }
        .star-label { font-size:13px; color:#64748b; margin-bottom:10px; font-weight:500; }
        .stars { display:flex; gap:6px; align-items:center; }
        .star { font-size:28px; cursor:pointer; color:#e2e8f0; transition:color .12s, transform .12s; line-height:1; }
        .star:hover, .star.lit { color:#f59e0b; transform:scale(1.15); }
        .star-avg-inline { font-size:13px; font-weight:700; color:#94a3b8; margin-left:12px; }
        .star-avg-inline strong { color:#f59e0b; font-size:15px; }

        /* ── AVIS FORM ──────────────────────────────────────────── */
        .avis-section { margin-bottom:36px; }
        .avis-label { font-size:13px; color:#64748b; margin-bottom:8px; font-weight:500; }
        .avis-row { display:flex; gap:10px; }
        .avis-input {
            flex:1; padding:10px 14px; border:1.5px solid #e2e8f0; border-radius:10px;
            font-family:'Inter',sans-serif; font-size:14px; color:#1e293b;
            background:#f8fafc; outline:none; resize:none; transition:border-color .15s;
        }
        .avis-input:focus { border-color:#22c55e; background:#fff; }
        .avis-submit {
            padding:10px 20px; background:#22c55e; color:#fff; border:none;
            border-radius:10px; font-family:'Inter',sans-serif; font-size:14px;
            font-weight:700; cursor:pointer; transition:background .15s; white-space:nowrap;
        }
        .avis-submit:hover { background:#16a34a; }
        .anon-row { display:flex; align-items:center; gap:8px; margin-top:10px; cursor:pointer; width:fit-content; }
        .anon-row input { accent-color:#22c55e; width:15px; height:15px; cursor:pointer; }
        .anon-row span { font-size:12px; color:#94a3b8; font-weight:500; }

        /* ── AVIS LIST ──────────────────────────────────────────── */
        .avis-list-section { }
        .avis-list-title {
            font-size:13px; font-weight:700; color:#94a3b8;
            text-transform:uppercase; letter-spacing:.7px; margin-bottom:16px;
            display:flex; align-items:center; gap:8px;
        }
        .avis-count-badge {
            background:#22c55e; color:#fff; font-size:11px; font-weight:800;
            padding:2px 8px; border-radius:20px;
        }

        .avis-list { display:flex; flex-direction:column; gap:12px; }

        .avis-card {
            background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px;
            padding:16px 18px; display:flex; flex-direction:column; gap:8px;
            animation:fadeIn .3s ease;
        }
        @keyframes fadeIn { from{opacity:0;transform:translateY(6px)} to{opacity:1;transform:translateY(0)} }

        .avis-card-header { display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:8px; }
        .avis-author { display:flex; align-items:center; gap:10px; }
        .avis-avatar {
            width:32px; height:32px; border-radius:50%; background:#22c55e;
            display:flex; align-items:center; justify-content:center;
            font-size:13px; font-weight:800; color:#fff; flex-shrink:0;
        }
        .avis-avatar.anon { background:#94a3b8; }
        .avis-name { font-size:13px; font-weight:700; color:#1e293b; }
        .avis-date { font-size:11px; color:#94a3b8; }

        .avis-meta { display:flex; align-items:center; gap:8px; flex-wrap:wrap; }
        .avis-type-badge {
            font-size:11px; font-weight:700; padding:3px 9px; border-radius:20px;
            border:1px solid;
        }
        .type-like     { background:#f0fdf4; color:#16a34a; border-color:#bbf7d0; }
        .type-helpful  { background:#eff6ff; color:#2563eb; border-color:#bfdbfe; }
        .type-bookmark { background:#faf5ff; color:#7c3aed; border-color:#ddd6fe; }
        .type-share    { background:#fff7ed; color:#c2410c; border-color:#fed7aa; }

        .avis-stars { color:#f59e0b; font-size:13px; letter-spacing:1px; }

        .avis-text { font-size:14px; color:#475569; line-height:1.65; font-style:italic; }
        .avis-text::before { content:'\"'; color:#22c55e; font-size:18px; font-weight:800; line-height:0; vertical-align:-4px; margin-right:2px; }
        .avis-text::after  { content:'\"'; color:#22c55e; font-size:18px; font-weight:800; line-height:0; vertical-align:-4px; margin-left:2px; }

        .avis-empty { text-align:center; padding:32px; color:#94a3b8; font-size:14px; background:#f8fafc; border:1px dashed #e2e8f0; border-radius:12px; }
        .avis-empty .empty-icon { font-size:36px; display:block; margin-bottom:8px; }

        /* ── LOGIN NOTICE ───────────────────────────────────────── */
        .login-notice { background:#f0fdf4; border:1.5px solid #bbf7d0; border-radius:12px; padding:16px 20px; display:flex; align-items:center; gap:12px; margin-bottom:24px; }
        .login-notice p { font-size:14px; color:#166534; margin:0; }
        .login-notice a { color:#16a34a; font-weight:700; text-decoration:none; }

        /* ── SIGNALEMENT BUTTON ────────────────────────────────── */
        .signalement-bar { display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; padding:16px 0 0; margin-top:8px; }
        .signalement-info { font-size:12px; color:#94a3b8; }
        .btn-signaler { display:inline-flex; align-items:center; gap:7px; padding:9px 18px; border:1.5px solid #fca5a5; background:#fff5f5; color:#dc2626; border-radius:9px; font-family:'Inter',sans-serif; font-size:13px; font-weight:700; text-decoration:none; transition:all .15s; }
        .btn-signaler:hover { background:#fee2e2; border-color:#ef4444; }
        .btn-signaler.already { background:#f1f5f9; color:#94a3b8; border-color:#e2e8f0; pointer-events:none; }

        /* ── TTS BUTTON ─────────────────────────────────────────── */
        .tts-bar { display:flex; align-items:center; gap:12px; padding:14px 18px; background:#f0f9ff; border:1.5px solid #bae6fd; border-radius:12px; margin-bottom:24px; flex-wrap:wrap; }
        .tts-info { font-size:13px; color:#0369a1; font-weight:500; flex:1; }
        .btn-tts { display:inline-flex; align-items:center; gap:7px; padding:9px 18px; background:#0284c7; color:#fff; border:none; border-radius:9px; font-family:'Inter',sans-serif; font-size:13px; font-weight:700; cursor:pointer; transition:all .15s; white-space:nowrap; }
        .btn-tts:hover { background:#0369a1; transform:translateY(-1px); }
        .btn-tts.playing { background:#dc2626; }
        .btn-tts.playing:hover { background:#b91c1c; }
        .tts-progress { flex:1; min-width:120px; }
        .tts-progress-bar { height:4px; background:#e0f2fe; border-radius:4px; overflow:hidden; display:none; }
        .tts-progress-bar.show { display:block; }
        .tts-progress-fill { height:100%; background:#0284c7; border-radius:4px; width:0%; transition:width .3s; }

        /* ── AVIS MODERATION FEEDBACK ────────────────────────────── */
        .mod-checking { display:none; align-items:center; gap:8px; font-size:12px; color:#7c3aed; font-weight:600; margin-top:8px; }
        .mod-checking.show { display:flex; }
        .mod-checking-dots span { animation:pulse-dot 1.2s infinite; margin-left:2px; }
        .mod-checking-dots span:nth-child(2) { animation-delay:.2s; }
        .mod-checking-dots span:nth-child(3) { animation-delay:.4s; }
        @keyframes pulse-dot { 0%,80%,100%{opacity:.2}40%{opacity:1} }
        .mod-result { display:none; font-size:12px; font-weight:600; padding:8px 12px; border-radius:8px; margin-top:8px; }
        .mod-result.show { display:block; }
        .mod-approved { background:#dcfce7; color:#15803d; border:1px solid #bbf7d0; }
        .mod-rejected { background:#fee2e2; color:#dc2626; border:1px solid #fecaca; }

        /* ── TOAST ──────────────────────────────────────────────── */
        .toast { position:fixed; bottom:24px; right:24px; background:#0f172a; color:#fff; padding:13px 22px; border-radius:12px; font-size:14px; font-weight:600; z-index:9999; opacity:0; transform:translateY(10px); transition:all .25s; pointer-events:none; }
        .toast.show { opacity:1; transform:translateY(0); }
        .toast.green { background:#15803d; }
        .toast.red   { background:#dc2626; }

        /* ── FOOTER ─────────────────────────────────────────────── */
        .footer { background:#0f172a; color:#64748b; text-align:center; padding:28px; font-size:13px; margin-top:60px; }
        .footer span { color:#22c55e; }
    </style>
{% endblock %}

{% block body %}
{# ══ PAGE ═════════════════════════════════════════════════════════ #}
<div class=\"page\">

    <a href=\"{{ path('frontend_blog_index') }}\" class=\"back-link\">← Retour au blog</a>

    <div class=\"article-wrap\">

        {# ── Hero image ── #}
        <div class=\"article-hero\">
            {% if article.imagePrincipale %}
                <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" alt=\"{{ article.titre }}\">
            {% else %}
                <div class=\"article-hero-placeholder\">📝</div>
            {% endif %}
            <div class=\"hero-badges\">
                {% if article.statut %}
                    <span class=\"badge badge-{{ article.statut }}\">{{ article.statut|capitalize }}</span>
                {% endif %}
                {% if article.categorie %}
                    <span class=\"badge badge-cat\">{{ article.categorie }}</span>
                {% endif %}
            </div>
        </div>

        {# ── Article body ── #}
        <div class=\"article-body\">

            <h1 class=\"article-title\">{{ article.titre }}</h1>

            {% if article.motsClesArray %}
            <div style=\"display:flex;flex-wrap:wrap;gap:6px;margin-bottom:16px;\">
                {% for tag in article.motsClesArray %}
                    <span style=\"display:inline-block;background:#ede9fe;color:#5b21b6;font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;\">{{ tag }}</span>
                {% endfor %}
            </div>
            {% endif %}

            {# ── Reading progress bar (fixed top) #}
            <div class=\"read-progress-bar\" id=\"readProgressBar\"></div>

            <div class=\"article-meta\">
                <span class=\"meta-chip\">👁 <strong>{{ article.nombreVues }}</strong> vues</span>
                <span class=\"meta-dot\"></span>
                <span class=\"meta-chip\">⏱ <strong>{{ article.readingTimeMinutes }} min</strong> de lecture</span>
                {% if article.isTrending() %}
                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\" style=\"color:#f97316;font-weight:700\">🔥 Trending</span>
                {% endif %}
                {% if article.categorie %}
                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\">🏷 <strong>{{ article.categorie }}</strong></span>
                {% endif %}
                {% if avg_note %}
                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\">⭐ <strong id=\"metaAvgNote\">{{ avg_note }}/5</strong></span>
                {% else %}
                    <span class=\"meta-dot\" id=\"metaAvgNoteSep\" style=\"display:none\"></span>
                    <span class=\"meta-chip\" id=\"metaAvgNoteChip\" style=\"display:none\">⭐ <strong id=\"metaAvgNote\">–/5</strong></span>
                {% endif %}
            </div>

            {% if article.resumeIa %}
            <div style=\"background:#f0fdf4;border-left:4px solid #22c55e;border-radius:0 10px 10px 0;padding:14px 18px;margin-bottom:22px;font-size:14px;color:#166534;font-style:italic;line-height:1.7;\">
                {{ article.resumeIa }}
            </div>
            {% endif %}

            <div class=\"article-content\" id=\"articleContentText\">{{ article.contenu }}</div>

            {# ══ TTS — LISTEN TO THIS ARTICLE ══════════════════════ #}
            <div class=\"tts-bar\" id=\"ttsBar\">
                <span class=\"tts-info\">🎧 Écoutez cet article</span>
                <div class=\"tts-progress\">
                    <div class=\"tts-progress-bar\" id=\"ttsProgressBar\">
                        <div class=\"tts-progress-fill\" id=\"ttsProgressFill\"></div>
                    </div>
                </div>
                <button class=\"btn-tts\" id=\"btnTts\" onclick=\"toggleTTS()\">
                    🔊 Écouter l'article
                </button>
            </div>

            <hr class=\"divider\">

            {# ══════════════════════════════════════════════════════
               REACTION SUMMARY — shows what people already did
            ══════════════════════════════════════════════════════ #}
            <div class=\"reaction-summary\" id=\"reactionSummary\">
                <span class=\"summary-label\">Réactions</span>
                {% set total = counts['like'] + counts['helpful'] + counts['bookmark'] + counts['share'] %}
                {% if total == 0 %}
                    <span class=\"summary-empty\">Soyez le premier à réagir à cet article !</span>
                {% else %}
                    {% if counts['like'] > 0 %}
                        <span class=\"summary-chip\">👍 <span class=\"chip-count\" id=\"sc-like\">{{ counts['like'] }}</span></span>
                    {% else %}
                        <span class=\"summary-chip\" id=\"sc-like-wrap\" style=\"display:none\">👍 <span class=\"chip-count\" id=\"sc-like\">0</span></span>
                    {% endif %}
                    {% if counts['helpful'] > 0 %}
                        <span class=\"summary-chip\">✅ <span class=\"chip-count\" id=\"sc-helpful\">{{ counts['helpful'] }}</span></span>
                    {% else %}
                        <span class=\"summary-chip\" id=\"sc-helpful-wrap\" style=\"display:none\">✅ <span class=\"chip-count\" id=\"sc-helpful\">0</span></span>
                    {% endif %}
                    {% if counts['bookmark'] > 0 %}
                        <span class=\"summary-chip\">🔖 <span class=\"chip-count\" id=\"sc-bookmark\">{{ counts['bookmark'] }}</span></span>
                    {% else %}
                        <span class=\"summary-chip\" id=\"sc-bookmark-wrap\" style=\"display:none\">🔖 <span class=\"chip-count\" id=\"sc-bookmark\">0</span></span>
                    {% endif %}
                    {% if counts['share'] > 0 %}
                        <span class=\"summary-chip\">📤 <span class=\"chip-count\" id=\"sc-share\">{{ counts['share'] }}</span></span>
                    {% else %}
                        <span class=\"summary-chip\" id=\"sc-share-wrap\" style=\"display:none\">📤 <span class=\"chip-count\" id=\"sc-share\">0</span></span>
                    {% endif %}
                    {% if avg_note %}
                        <span class=\"star-summary\">⭐ <span id=\"summaryAvg\">{{ avg_note }}</span><span>/5</span></span>
                    {% else %}
                        <span class=\"star-summary\" id=\"summaryAvgWrap\" style=\"display:none\">⭐ <span id=\"summaryAvg\">–</span><span>/5</span></span>
                    {% endif %}
                {% endif %}
            </div>

            {# ══════════════════════════════════════════════════════
               REACTION PANEL — buttons + stars + avis form
            ══════════════════════════════════════════════════════ #}
            <div class=\"reaction-panel\">

                <div class=\"reaction-title\">Votre réaction</div>

                {% if not app.user %}
                    <div class=\"login-notice\">
                        <span style=\"font-size:20px\">🔒</span>
                        <p>Connectez-vous pour réagir à cet article. <a href=\"#\">Se connecter →</a></p>
                    </div>
                {% endif %}

                {# Reaction buttons #}
                <div class=\"reaction-buttons\">
                    <button class=\"react-btn {% if user_reactions['like'] is defined %}active{% endif %}\"
                            id=\"btn-like\" data-type=\"like\" onclick=\"handleReaction('like')\"
                            {% if not app.user %}disabled{% endif %}>
                        👍 J'aime <span class=\"count\" id=\"count-like\">{{ counts['like'] }}</span>
                    </button>
                    <button class=\"react-btn {% if user_reactions['helpful'] is defined %}active{% endif %}\"
                            id=\"btn-helpful\" data-type=\"helpful\" onclick=\"handleReaction('helpful')\"
                            {% if not app.user %}disabled{% endif %}>
                        ✅ Utile <span class=\"count\" id=\"count-helpful\">{{ counts['helpful'] }}</span>
                    </button>
                    <button class=\"react-btn {% if user_reactions['bookmark'] is defined %}active{% endif %}\"
                            id=\"btn-bookmark\" data-type=\"bookmark\" onclick=\"handleReaction('bookmark')\"
                            {% if not app.user %}disabled{% endif %}>
                        🔖 Sauvegarder <span class=\"count\" id=\"count-bookmark\">{{ counts['bookmark'] }}</span>
                    </button>
                    <button class=\"react-btn {% if user_reactions['share'] is defined %}active{% endif %}\"
                            id=\"btn-share\" data-type=\"share\" onclick=\"handleReaction('share')\"
                            {% if not app.user %}disabled{% endif %}>
                        📤 Partager <span class=\"count\" id=\"count-share\">{{ counts['share'] }}</span>
                    </button>
                </div>

                {# Star rating #}
                {% if app.user %}
                <div class=\"star-section\">
                    <div class=\"star-label\">
                        Évaluer cet article
                        <span class=\"star-avg-inline\" id=\"starAvgInline\">
                            {% if avg_note %}— Moyenne actuelle : <strong>{{ avg_note }}</strong>/5{% endif %}
                        </span>
                    </div>
                    <div class=\"stars\" id=\"starRow\">
                        {% for i in 1..5 %}
                            <span class=\"star\" data-val=\"{{ i }}\"
                                  onclick=\"submitNote({{ i }})\"
                                  onmouseenter=\"hoverStars({{ i }})\"
                                  onmouseleave=\"resetStars()\">★</span>
                        {% endfor %}
                    </div>
                </div>

                {# Avis form #}
                <div class=\"avis-section\">
                    <div class=\"avis-label\">Laisser un avis court <span style=\"color:#94a3b8\">(500 caractères max)</span></div>
                    <div class=\"avis-row\">
                        <textarea class=\"avis-input\" id=\"avisInput\" rows=\"2\" maxlength=\"500\"
                                  placeholder=\"Votre impression en quelques mots…\"></textarea>
                        <button class=\"avis-submit\" onclick=\"submitAvis()\">Envoyer</button>
                    </div>
                    <label class=\"anon-row\">
                        <input type=\"checkbox\" id=\"anonCheck\">
                        <span>Réagir anonymement</span>
                    </label>
                    {# AI moderation feedback #}
                    <div class=\"mod-checking\" id=\"modChecking\">
                        🤖 Modération IA en cours
                        <span class=\"mod-checking-dots\"><span>.</span><span>.</span><span>.</span></span>
                    </div>
                    <div class=\"mod-result\" id=\"modResult\"></div>
                </div>
                {% endif %}

            </div>{# /reaction-panel #}

            <hr class=\"divider\">

            {# ══════════════════════════════════════════════════════
               AVIS LIST — displays all opinions left by users
               This is the KEY part that was missing before
            ══════════════════════════════════════════════════════ #}
            <div class=\"avis-list-section\">
                <div class=\"avis-list-title\">
                    💬 Avis des lecteurs
                    <span class=\"avis-count-badge\" id=\"avisCountBadge\">⏳</span>
                </div>
                <div class=\"avis-list\" id=\"avisList\">
                    <div class=\"avis-empty\">
                        <span class=\"empty-icon\">⏳</span>
                        Chargement des avis…
                    </div>
                </div>
            </div>

                    {# ══ SIGNALEMENT BUTTON ══════════════════════════════════ #}
            <div class=\"signalement-bar\">
                <span class=\"signalement-info\">🛡 Contenu inapproprié ou incorrect ?</span>
                {% if app.user %}
                    <a href=\"{{ path('signalement_new', {id_article: article.idArticle}) }}\" class=\"btn-signaler\">
                        🚩 Signaler cet article
                    </a>
                {% else %}
                    <a href=\"#\" class=\"btn-signaler already\" title=\"Connectez-vous pour signaler\">
                        🚩 Signaler (connexion requise)
                    </a>
                {% endif %}
            </div>

</div>{# /article-body #}
    </div>{# /article-wrap #}
</div>

{# ══ FOOTER ═══════════════════════════════════════════════════════ #}
<footer class=\"footer\">© 2026 <span>Bizcore</span> — Tous droits réservés</footer>

{# ══ TOAST ════════════════════════════════════════════════════════ #}
<div class=\"toast\" id=\"toast\"></div>

<script>
// ──────────────────────────────────────────────────────────────────
// CONFIG
// ──────────────────────────────────────────────────────────────────
const ARTICLE_ID = {{ article.idArticle }};
const REACT_URL  = `/blog/\${ARTICLE_ID}/react`;
const AVIS_URL   = `/blog/\${ARTICLE_ID}/avis`;
const IS_LOGGED  = {{ app.user ? 'true' : 'false' }};

// ──────────────────────────────────────────────────────────────────
// TOAST
// ──────────────────────────────────────────────────────────────────
function showToast(msg, color = '') {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.className = 'toast show ' + color;
    setTimeout(() => t.classList.remove('show'), 3200);
}

// ──────────────────────────────────────────────────────────────────
// UPDATE ALL COUNTS & SUMMARY after a reaction
// ──────────────────────────────────────────────────────────────────
function updateCounts(counts, avgNote) {
    const types = ['like', 'helpful', 'bookmark', 'share'];

    types.forEach(type => {
        // Button count
        const btnCount = document.getElementById('count-' + type);
        if (btnCount) btnCount.textContent = counts[type] ?? 0;

        // Summary chip
        const sc = document.getElementById('sc-' + type);
        if (sc) {
            sc.textContent = counts[type] ?? 0;
            // Show the chip wrapper if count > 0
            const wrap = document.getElementById('sc-' + type + '-wrap');
            if (wrap) wrap.style.display = (counts[type] > 0) ? '' : 'none';
        }
    });

    // If summary had \"empty\" text, rebuild it
    const totalNow = types.reduce((s, t) => s + (counts[t] ?? 0), 0);
    const summary = document.getElementById('reactionSummary');
    if (summary) {
        const emptyEl = summary.querySelector('.summary-empty');
        if (emptyEl && totalNow > 0) emptyEl.remove();
    }

    // Star average
    if (avgNote !== null && avgNote !== undefined) {
        const els = ['summaryAvg', 'metaAvgNote'];
        els.forEach(id => {
            const el = document.getElementById(id);
            if (el) el.textContent = avgNote;
        });
        ['summaryAvgWrap', 'metaAvgNoteSep', 'metaAvgNoteChip'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.style.display = '';
        });
        const starAvg = document.getElementById('starAvgInline');
        if (starAvg) starAvg.innerHTML = `— Moyenne actuelle : <strong>\${avgNote}</strong>/5`;
    }
}

// ──────────────────────────────────────────────────────────────────
// HANDLE REACTION BUTTON TOGGLE
// ──────────────────────────────────────────────────────────────────
async function handleReaction(type, extra = {}) {
    if (!IS_LOGGED) { showToast('🔒 Connectez-vous pour réagir', 'red'); return; }

    const btn = document.getElementById('btn-' + type);
    if (btn) btn.disabled = true;

    try {
        const res  = await fetch(REACT_URL, {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({ type, ...extra }),
        });
        const json = await res.json();

        if (!json.success) { showToast('❌ ' + json.message, 'red'); return; }

        if (btn) btn.classList.toggle('active', json.active);

        updateCounts(json.counts, json.avg_note);

        showToast(
            json.active ? '✅ Réaction enregistrée !' : 'Réaction retirée',
            json.active ? 'green' : ''
        );

        // Refresh avis list so newly added avis appears immediately
        // ──────────────────────────────────────────────────────────────────
// TEXT-TO-SPEECH — Web Speech API (no external key needed)
// ──────────────────────────────────────────────────────────────────
let ttsActive = false;

function toggleTTS() {
    if (ttsActive) {
        window.speechSynthesis.cancel();
        ttsActive = false;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '🔊 Écouter l\\'article'; btn.classList.remove('playing'); }
        const bar = document.getElementById('ttsProgressBar');
        if (bar) bar.classList.remove('show');
        return;
    }

    if (!('speechSynthesis' in window)) {
        alert('Votre navigateur ne supporte pas la lecture audio. Essayez Chrome ou Edge.');
        return;
    }

    // Get text
    const contentEl = document.getElementById('articleContentText');
    const rawText = contentEl ? (contentEl.innerText || contentEl.textContent || '') : '';
    const fullText = rawText.trim();

    if (!fullText) {
        alert('Aucun contenu à lire.');
        return;
    }

    // Cancel anything playing
    window.speechSynthesis.cancel();

    // Build utterance
    const utter = new SpeechSynthesisUtterance(fullText);
    utter.lang   = 'fr-FR';
    utter.rate   = 0.9;
    utter.pitch  = 1;
    utter.volume = 1;

    utter.onstart = () => {
        ttsActive = true;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '⏹ Arrêter'; btn.classList.add('playing'); }
        const bar = document.getElementById('ttsProgressBar');
        if (bar) bar.classList.add('show');
    };

    utter.onend = () => {
        ttsActive = false;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '🔊 Écouter l\\'article'; btn.classList.remove('playing'); }
        const bar = document.getElementById('ttsProgressBar');
        if (bar) bar.classList.remove('show');
        const fill = document.getElementById('ttsProgressFill');
        if (fill) { fill.style.width = '100%'; setTimeout(() => fill.style.width = '0%', 1000); }
    };

    utter.onerror = (e) => {
        ttsActive = false;
        const btn = document.getElementById('btnTts');
        if (btn) { btn.innerHTML = '🔊 Écouter l\\'article'; btn.classList.remove('playing'); }
        // Don't alert on 'interrupted' — that's normal when user clicks stop
        if (e.error !== 'interrupted' && e.error !== 'canceled') {
            alert('Erreur audio: ' + e.error + '. Vérifiez que le son est activé sur votre PC.');
        }
    };

    utter.onboundary = (evt) => {
        if (evt.name === 'word') {
            const fill = document.getElementById('ttsProgressFill');
            if (fill) fill.style.width = Math.min(100, Math.round((evt.charIndex / fullText.length) * 100)) + '%';
        }
    };

    // THE FIX: Chrome's getVoices() is async. We poll every 100ms until voices load,
    // then speak. Max 20 tries (2 seconds). Works 100% of the time.
    let tries = 0;
    function trySpeak() {
        const voices = window.speechSynthesis.getVoices();
        if (voices.length > 0 || tries >= 20) {
            // Pick best French voice, fall back to any voice
            const frVoice = voices.find(v => v.lang === 'fr-FR' && v.localService)
                         || voices.find(v => v.lang === 'fr-FR')
                         || voices.find(v => v.lang.startsWith('fr'))
                         || null;
            if (frVoice) utter.voice = frVoice;
            window.speechSynthesis.speak(utter);
        } else {
            tries++;
            setTimeout(trySpeak, 100);
        }
    }
    trySpeak();
}

    } catch (err) {
        showToast('❌ Erreur réseau', 'red');
    } finally {
        if (btn) btn.disabled = false;
    }
}

// Stop TTS if user leaves the page
window.addEventListener('beforeunload', () => { if ('speechSynthesis' in window) window.speechSynthesis.cancel(); });

// Pre-warm voices on page load so first click is instant
if ('speechSynthesis' in window) window.speechSynthesis.getVoices();

loadAvisList();

// ──────────────────────────────────────────────────────────────────
// STARS — hover preview + submit
// ──────────────────────────────────────────────────────────────────
let selectedNote = null;

function hoverStars(val) {
    document.querySelectorAll('.star').forEach((s, i) => s.classList.toggle('lit', i < val));
}
function resetStars() {
    document.querySelectorAll('.star').forEach((s, i) => s.classList.toggle('lit', selectedNote !== null && i < selectedNote));
}
function submitNote(val) {
    if (!IS_LOGGED) { showToast('🔒 Connectez-vous pour noter', 'red'); return; }
    selectedNote = val;
    resetStars();
    const anon = document.getElementById('anonCheck')?.checked ?? false;
    handleReaction('like', { note: val, anonymous: anon });
}

// ──────────────────────────────────────────────────────────────────
// AVIS SUBMIT
// ──────────────────────────────────────────────────────────────────
async function submitAvis() {
    if (!IS_LOGGED) { showToast('🔒 Connectez-vous pour laisser un avis', 'red'); return; }
    const avis = document.getElementById('avisInput').value.trim();
    if (!avis) { showToast('✏️ Écrivez quelques mots d\\'abord', 'red'); return; }
    const anon = document.getElementById('anonCheck')?.checked ?? false;

    // ── AI MODERATION before saving ───────────────────────────────
    const submitBtn  = document.querySelector('.avis-submit');
    const modChecking = document.getElementById('modChecking');
    const modResult   = document.getElementById('modResult');

    if (submitBtn) submitBtn.disabled = true;
    if (modChecking) modChecking.classList.add('show');
    if (modResult)   modResult.classList.remove('show');

    try {
        const modRes = await fetch('/api/articles/moderate-avis', {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({
                avis,
                article_titre: document.title.replace(' — Bizcore Blog', '')
            }),
        });
        const modJson = await modRes.json();
        const decision = modJson.data?.decision ?? 'approved';
        const reason   = modJson.data?.reason   ?? '';

        if (modChecking) modChecking.classList.remove('show');

        if (decision === 'rejected') {
            // Show rejection feedback — do NOT submit
            if (modResult) {
                modResult.className = 'mod-result show mod-rejected';
                modResult.innerHTML = '❌ Avis non publié — ' + escHtml(reason);
            }
            showToast('❌ Avis rejeté par la modération IA', 'red');
            if (submitBtn) submitBtn.disabled = false;
            return;
        }

        // Approved — show brief confirmation then submit
        if (modResult) {
            modResult.className = 'mod-result show mod-approved';
            modResult.innerHTML = '✅ Modération IA : approuvé — publication en cours…';
        }

    } catch (_) {
        // If moderation fails, approve silently (never block on error)
        if (modChecking) modChecking.classList.remove('show');
    }

    // Submit reaction
    await handleReaction('helpful', { avis, anonymous: anon });
    document.getElementById('avisInput').value = '';
    if (submitBtn) submitBtn.disabled = false;

    // Hide moderation result after submit
    setTimeout(() => {
        if (modResult) modResult.classList.remove('show');
    }, 3000);
}

// ──────────────────────────────────────────────────────────────────
// LOAD & RENDER AVIS LIST  →  GET /blog/{id}/avis
// ──────────────────────────────────────────────────────────────────
const TYPE_LABELS = { like:'👍 J\\'aime', helpful:'✅ Utile', bookmark:'🔖 Sauvegardé', share:'📤 Partagé' };
const TYPE_CLASS  = { like:'type-like', helpful:'type-helpful', bookmark:'type-bookmark', share:'type-share' };

async function loadAvisList() {
    try {
        const res  = await fetch(AVIS_URL);
        const json = await res.json();
        const list = document.getElementById('avisList');
        const badge = document.getElementById('avisCountBadge');

        if (!json.success || !json.data.length) {
            badge.textContent = '0';
            list.innerHTML = `
                <div class=\"avis-empty\">
                    <span class=\"empty-icon\">💬</span>
                    Aucun avis pour l'instant — soyez le premier !
                </div>`;
            return;
        }

        badge.textContent = json.data.length;

        list.innerHTML = json.data.map(item => {
            // Author display
            const initials = item.is_anonymous
                ? '?'
                : (item.nom ? item.nom.charAt(0).toUpperCase() : '?');
            const authorName = item.is_anonymous ? 'Anonyme' : (item.nom ?? 'Utilisateur');
            const avatarClass = item.is_anonymous ? 'avis-avatar anon' : 'avis-avatar';

            // Stars display
            const starsHtml = item.note
                ? `<span class=\"avis-stars\">\${'★'.repeat(item.note)}\${'☆'.repeat(5 - item.note)}</span>`
                : '';

            // Date format
            const date = new Date(item.date_reaction);
            const dateStr = date.toLocaleDateString('fr-FR', { day:'2-digit', month:'short', year:'numeric' });

            // Avis text (only if provided)
            const avisHtml = item.avis
                ? `<div class=\"avis-text\">\${escHtml(item.avis)}</div>`
                : '';

            return `
            <div class=\"avis-card\">
                <div class=\"avis-card-header\">
                    <div class=\"avis-author\">
                        <div class=\"\${avatarClass}\">\${initials}</div>
                        <div>
                            <div class=\"avis-name\">\${escHtml(authorName)}</div>
                            <div class=\"avis-date\">\${dateStr}</div>
                        </div>
                    </div>
                    <div class=\"avis-meta\">
                        <span class=\"avis-type-badge \${TYPE_CLASS[item.type_reaction] ?? ''}\">\${TYPE_LABELS[item.type_reaction] ?? item.type_reaction}</span>
                        \${starsHtml}
                    </div>
                </div>
                \${avisHtml}
            </div>`;
        }).join('');

    } catch (err) {
        document.getElementById('avisList').innerHTML = `
            <div class=\"avis-empty\"><span class=\"empty-icon\">⚠️</span>Erreur de chargement des avis.</div>`;
    }
}

// ──────────────────────────────────────────────────────────────────
// UTILS
// ──────────────────────────────────────────────────────────────────
function escHtml(str) {
    if (!str) return '';
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
}

// ──────────────────────────────────────────────────────────────────
// INIT
// ──────────────────────────────────────────────────────────────────
loadAvisList();

// ──────────────────────────────────────────────────────────────────
// READING PROGRESS BAR
// HOW IT WORKS:
//   - As you scroll down the article, the green bar at the top grows
//   - 0% at the top, 100% when you reach the bottom
//   - No server requests are made — this is pure JavaScript
// ──────────────────────────────────────────────────────────────────
window.addEventListener('scroll', function() {
    var bar = document.getElementById('readProgressBar');
    if (!bar) return;
    var totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    var progress = totalHeight > 0 ? (window.scrollY / totalHeight) * 100 : 0;
    bar.style.width = Math.min(100, progress).toFixed(1) + '%';

    // Save the current reading position to browser storage
    // This allows the page to scroll back to where you stopped reading
    localStorage.setItem('readPos_{{ article.idArticle }}', Math.round(window.scrollY));
});

// ──────────────────────────────────────────────────────────────────
// RESTORE READING POSITION
// HOW IT WORKS:
//   - When you open an article you already started reading,
//     the page automatically scrolls to where you stopped
//   - Position is saved per article using the article ID
//   - Only restores if you were past the first 300 pixels
// ──────────────────────────────────────────────────────────────────
(function restoreReadingPosition() {
    var savedPosition = localStorage.getItem('readPos_{{ article.idArticle }}');
    if (savedPosition && parseInt(savedPosition) > 300) {
        setTimeout(function() {
            window.scrollTo({ top: parseInt(savedPosition), behavior: 'smooth' });
        }, 400);
    }
})();
</script>
{% endblock %}
", "blog/show.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\blog\\show.html.twig");
    }
}
