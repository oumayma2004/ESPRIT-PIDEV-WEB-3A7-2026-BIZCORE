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
class __TwigTemplate_cca99606566caedc9dd39ed2b0c751fa extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        yield " — Bizcore Blog</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
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
</head>
<body>

";
        // line 226
        yield "<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"#\">Événements</a>
        <a href=\"#\">Coaching</a>
        <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"active\">Blog</a>
        ";
        // line 233
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 233, $this->source); })()), "user", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "            <a href=\"#\" class=\"nav-cta\">Mon compte</a>
        ";
        } else {
            // line 236
            yield "            <a href=\"#\" class=\"nav-cta\">Se connecter</a>
        ";
        }
        // line 238
        yield "    </div>
</nav>

";
        // line 242
        yield "<div class=\"page\">

    <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"back-link\">← Retour au blog</a>

    <div class=\"article-wrap\">

        ";
        // line 249
        yield "        <div class=\"article-hero\">
            ";
        // line 250
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 250, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 251, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 251))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 251, $this->source); })()), "titre", [], "any", false, false, false, 251), "html", null, true);
            yield "\">
            ";
        } else {
            // line 253
            yield "                <div class=\"article-hero-placeholder\">📝</div>
            ";
        }
        // line 255
        yield "            <div class=\"hero-badges\">
                ";
        // line 256
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 256, $this->source); })()), "statut", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 257
            yield "                    <span class=\"badge badge-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 257, $this->source); })()), "statut", [], "any", false, false, false, 257), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 257, $this->source); })()), "statut", [], "any", false, false, false, 257)), "html", null, true);
            yield "</span>
                ";
        }
        // line 259
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 259, $this->source); })()), "categorie", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 260
            yield "                    <span class=\"badge badge-cat\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 260, $this->source); })()), "categorie", [], "any", false, false, false, 260), "html", null, true);
            yield "</span>
                ";
        }
        // line 262
        yield "            </div>
        </div>

        ";
        // line 266
        yield "        <div class=\"article-body\">

            <h1 class=\"article-title\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 268, $this->source); })()), "titre", [], "any", false, false, false, 268), "html", null, true);
        yield "</h1>

            ";
        // line 270
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 270, $this->source); })()), "motsClesArray", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 271
            yield "            <div style=\"display:flex;flex-wrap:wrap;gap:6px;margin-bottom:16px;\">
                ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 272, $this->source); })()), "motsClesArray", [], "any", false, false, false, 272));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 273
                yield "                    <span style=\"display:inline-block;background:#ede9fe;color:#5b21b6;font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            yield "            </div>
            ";
        }
        // line 277
        yield "
            ";
        // line 279
        yield "            <div class=\"read-progress-bar\" id=\"readProgressBar\"></div>

            <div class=\"article-meta\">
                <span class=\"meta-chip\">👁 <strong>";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 282, $this->source); })()), "nombreVues", [], "any", false, false, false, 282), "html", null, true);
        yield "</strong> vues</span>
                <span class=\"meta-dot\"></span>
                <span class=\"meta-chip\">⏱ <strong>";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 284, $this->source); })()), "readingTimeMinutes", [], "any", false, false, false, 284), "html", null, true);
        yield " min</strong> de lecture</span>
                ";
        // line 285
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 285, $this->source); })()), "isTrending", [], "method", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 286
            yield "                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\" style=\"color:#f97316;font-weight:700\">🔥 Trending</span>
                ";
        }
        // line 289
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 289, $this->source); })()), "categorie", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\">🏷 <strong>";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 291, $this->source); })()), "categorie", [], "any", false, false, false, 291), "html", null, true);
            yield "</strong></span>
                ";
        }
        // line 293
        yield "                ";
        if ((($tmp = (isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 293, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 294
            yield "                    <span class=\"meta-dot\"></span>
                    <span class=\"meta-chip\">⭐ <strong id=\"metaAvgNote\">";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 295, $this->source); })()), "html", null, true);
            yield "/5</strong></span>
                ";
        } else {
            // line 297
            yield "                    <span class=\"meta-dot\" id=\"metaAvgNoteSep\" style=\"display:none\"></span>
                    <span class=\"meta-chip\" id=\"metaAvgNoteChip\" style=\"display:none\">⭐ <strong id=\"metaAvgNote\">–/5</strong></span>
                ";
        }
        // line 300
        yield "            </div>

            ";
        // line 302
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 302, $this->source); })()), "resumeIa", [], "any", false, false, false, 302)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 303
            yield "            <div style=\"background:#f0fdf4;border-left:4px solid #22c55e;border-radius:0 10px 10px 0;padding:14px 18px;margin-bottom:22px;font-size:14px;color:#166534;font-style:italic;line-height:1.7;\">
                ";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 304, $this->source); })()), "resumeIa", [], "any", false, false, false, 304), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 307
        yield "
            <div class=\"article-content\" id=\"articleContentText\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 308, $this->source); })()), "contenu", [], "any", false, false, false, 308), "html", null, true);
        yield "</div>

            ";
        // line 311
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
        // line 328
        yield "            <div class=\"reaction-summary\" id=\"reactionSummary\">
                <span class=\"summary-label\">Réactions</span>
                ";
        // line 330
        $context["total"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 330, $this->source); })()), "like", [], "array", false, false, false, 330) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 330, $this->source); })()), "helpful", [], "array", false, false, false, 330)) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 330, $this->source); })()), "bookmark", [], "array", false, false, false, 330)) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 330, $this->source); })()), "share", [], "array", false, false, false, 330));
        // line 331
        yield "                ";
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 331, $this->source); })()) == 0)) {
            // line 332
            yield "                    <span class=\"summary-empty\">Soyez le premier à réagir à cet article !</span>
                ";
        } else {
            // line 334
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 334, $this->source); })()), "like", [], "array", false, false, false, 334) > 0)) {
                // line 335
                yield "                        <span class=\"summary-chip\">👍 <span class=\"chip-count\" id=\"sc-like\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 335, $this->source); })()), "like", [], "array", false, false, false, 335), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 337
                yield "                        <span class=\"summary-chip\" id=\"sc-like-wrap\" style=\"display:none\">👍 <span class=\"chip-count\" id=\"sc-like\">0</span></span>
                    ";
            }
            // line 339
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 339, $this->source); })()), "helpful", [], "array", false, false, false, 339) > 0)) {
                // line 340
                yield "                        <span class=\"summary-chip\">✅ <span class=\"chip-count\" id=\"sc-helpful\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 340, $this->source); })()), "helpful", [], "array", false, false, false, 340), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 342
                yield "                        <span class=\"summary-chip\" id=\"sc-helpful-wrap\" style=\"display:none\">✅ <span class=\"chip-count\" id=\"sc-helpful\">0</span></span>
                    ";
            }
            // line 344
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 344, $this->source); })()), "bookmark", [], "array", false, false, false, 344) > 0)) {
                // line 345
                yield "                        <span class=\"summary-chip\">🔖 <span class=\"chip-count\" id=\"sc-bookmark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 345, $this->source); })()), "bookmark", [], "array", false, false, false, 345), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 347
                yield "                        <span class=\"summary-chip\" id=\"sc-bookmark-wrap\" style=\"display:none\">🔖 <span class=\"chip-count\" id=\"sc-bookmark\">0</span></span>
                    ";
            }
            // line 349
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 349, $this->source); })()), "share", [], "array", false, false, false, 349) > 0)) {
                // line 350
                yield "                        <span class=\"summary-chip\">📤 <span class=\"chip-count\" id=\"sc-share\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 350, $this->source); })()), "share", [], "array", false, false, false, 350), "html", null, true);
                yield "</span></span>
                    ";
            } else {
                // line 352
                yield "                        <span class=\"summary-chip\" id=\"sc-share-wrap\" style=\"display:none\">📤 <span class=\"chip-count\" id=\"sc-share\">0</span></span>
                    ";
            }
            // line 354
            yield "                    ";
            if ((($tmp = (isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 354, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 355
                yield "                        <span class=\"star-summary\">⭐ <span id=\"summaryAvg\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 355, $this->source); })()), "html", null, true);
                yield "</span><span>/5</span></span>
                    ";
            } else {
                // line 357
                yield "                        <span class=\"star-summary\" id=\"summaryAvgWrap\" style=\"display:none\">⭐ <span id=\"summaryAvg\">–</span><span>/5</span></span>
                    ";
            }
            // line 359
            yield "                ";
        }
        // line 360
        yield "            </div>

            ";
        // line 365
        yield "            <div class=\"reaction-panel\">

                <div class=\"reaction-title\">Votre réaction</div>

                ";
        // line 369
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 369, $this->source); })()), "user", [], "any", false, false, false, 369)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 370
            yield "                    <div class=\"login-notice\">
                        <span style=\"font-size:20px\">🔒</span>
                        <p>Connectez-vous pour réagir à cet article. <a href=\"#\">Se connecter →</a></p>
                    </div>
                ";
        }
        // line 375
        yield "
                ";
        // line 377
        yield "                <div class=\"reaction-buttons\">
                    <button class=\"react-btn ";
        // line 378
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "like", [], "array", true, true, false, 378)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-like\" data-type=\"like\" onclick=\"handleReaction('like')\"
                            ";
        // line 380
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 380, $this->source); })()), "user", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        👍 J'aime <span class=\"count\" id=\"count-like\">";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 381, $this->source); })()), "like", [], "array", false, false, false, 381), "html", null, true);
        yield "</span>
                    </button>
                    <button class=\"react-btn ";
        // line 383
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "helpful", [], "array", true, true, false, 383)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-helpful\" data-type=\"helpful\" onclick=\"handleReaction('helpful')\"
                            ";
        // line 385
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "user", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        ✅ Utile <span class=\"count\" id=\"count-helpful\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 386, $this->source); })()), "helpful", [], "array", false, false, false, 386), "html", null, true);
        yield "</span>
                    </button>
                    <button class=\"react-btn ";
        // line 388
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "bookmark", [], "array", true, true, false, 388)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-bookmark\" data-type=\"bookmark\" onclick=\"handleReaction('bookmark')\"
                            ";
        // line 390
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 390, $this->source); })()), "user", [], "any", false, false, false, 390)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        🔖 Sauvegarder <span class=\"count\" id=\"count-bookmark\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 391, $this->source); })()), "bookmark", [], "array", false, false, false, 391), "html", null, true);
        yield "</span>
                    </button>
                    <button class=\"react-btn ";
        // line 393
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user_reactions"] ?? null), "share", [], "array", true, true, false, 393)) {
            yield "active";
        }
        yield "\"
                            id=\"btn-share\" data-type=\"share\" onclick=\"handleReaction('share')\"
                            ";
        // line 395
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 395, $this->source); })()), "user", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled";
        }
        yield ">
                        📤 Partager <span class=\"count\" id=\"count-share\">";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 396, $this->source); })()), "share", [], "array", false, false, false, 396), "html", null, true);
        yield "</span>
                    </button>
                </div>

                ";
        // line 401
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 402
            yield "                <div class=\"star-section\">
                    <div class=\"star-label\">
                        Évaluer cet article
                        <span class=\"star-avg-inline\" id=\"starAvgInline\">
                            ";
            // line 406
            if ((($tmp = (isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 406, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "— Moyenne actuelle : <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg_note"]) || array_key_exists("avg_note", $context) ? $context["avg_note"] : (function () { throw new RuntimeError('Variable "avg_note" does not exist.', 406, $this->source); })()), "html", null, true);
                yield "</strong>/5";
            }
            // line 407
            yield "                        </span>
                    </div>
                    <div class=\"stars\" id=\"starRow\">
                        ";
            // line 410
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 411
                yield "                            <span class=\"star\" data-val=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\"
                                  onclick=\"submitNote(";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield ")\"
                                  onmouseenter=\"hoverStars(";
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield ")\"
                                  onmouseleave=\"resetStars()\">★</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            yield "                    </div>
                </div>

                ";
            // line 420
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
            // line 432
            yield "                    <div class=\"mod-checking\" id=\"modChecking\">
                        🤖 Modération IA en cours
                        <span class=\"mod-checking-dots\"><span>.</span><span>.</span><span>.</span></span>
                    </div>
                    <div class=\"mod-result\" id=\"modResult\"></div>
                </div>
                ";
        }
        // line 439
        yield "
            </div>";
        // line 441
        yield "
            <hr class=\"divider\">

            ";
        // line 448
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
        // line 462
        yield "            <div class=\"signalement-bar\">
                <span class=\"signalement-info\">🛡 Contenu inapproprié ou incorrect ?</span>
                ";
        // line 464
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 464, $this->source); })()), "user", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 465
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_new", ["id_article" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 465, $this->source); })()), "idArticle", [], "any", false, false, false, 465)]), "html", null, true);
            yield "\" class=\"btn-signaler\">
                        🚩 Signaler cet article
                    </a>
                ";
        } else {
            // line 469
            yield "                    <a href=\"#\" class=\"btn-signaler already\" title=\"Connectez-vous pour signaler\">
                        🚩 Signaler (connexion requise)
                    </a>
                ";
        }
        // line 473
        yield "            </div>

</div>";
        // line 476
        yield "    </div>";
        // line 477
        yield "</div>

";
        // line 480
        yield "<footer class=\"footer\">© 2026 <span>Bizcore</span> — Tous droits réservés</footer>

";
        // line 483
        yield "<div class=\"toast\" id=\"toast\"></div>

<script>
// ──────────────────────────────────────────────────────────────────
// CONFIG
// ──────────────────────────────────────────────────────────────────
const ARTICLE_ID = ";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 489, $this->source); })()), "idArticle", [], "any", false, false, false, 489), "html", null, true);
        yield ";
const REACT_URL  = `/blog/\${ARTICLE_ID}/react`;
const AVIS_URL   = `/blog/\${ARTICLE_ID}/avis`;
const IS_LOGGED  = ";
        // line 492
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 492, $this->source); })()), "user", [], "any", false, false, false, 492)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
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
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 876, $this->source); })()), "idArticle", [], "any", false, false, false, 876), "html", null, true);
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
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 888, $this->source); })()), "idArticle", [], "any", false, false, false, 888), "html", null, true);
        yield "');
    if (savedPosition && parseInt(savedPosition) > 300) {
        setTimeout(function() {
            window.scrollTo({ top: parseInt(savedPosition), behavior: 'smooth' });
        }, 400);
    }
})();
</script>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  1199 => 888,  1184 => 876,  797 => 492,  791 => 489,  783 => 483,  779 => 480,  775 => 477,  773 => 476,  769 => 473,  763 => 469,  755 => 465,  753 => 464,  749 => 462,  734 => 448,  729 => 441,  726 => 439,  717 => 432,  704 => 420,  699 => 416,  690 => 413,  686 => 412,  681 => 411,  677 => 410,  672 => 407,  666 => 406,  660 => 402,  657 => 401,  650 => 396,  644 => 395,  637 => 393,  632 => 391,  626 => 390,  619 => 388,  614 => 386,  608 => 385,  601 => 383,  596 => 381,  590 => 380,  583 => 378,  580 => 377,  577 => 375,  570 => 370,  568 => 369,  562 => 365,  558 => 360,  555 => 359,  551 => 357,  545 => 355,  542 => 354,  538 => 352,  532 => 350,  529 => 349,  525 => 347,  519 => 345,  516 => 344,  512 => 342,  506 => 340,  503 => 339,  499 => 337,  493 => 335,  490 => 334,  486 => 332,  483 => 331,  481 => 330,  477 => 328,  461 => 311,  456 => 308,  453 => 307,  447 => 304,  444 => 303,  442 => 302,  438 => 300,  433 => 297,  428 => 295,  425 => 294,  422 => 293,  417 => 291,  414 => 290,  411 => 289,  406 => 286,  404 => 285,  400 => 284,  395 => 282,  390 => 279,  387 => 277,  383 => 275,  374 => 273,  370 => 272,  367 => 271,  365 => 270,  360 => 268,  356 => 266,  351 => 262,  345 => 260,  342 => 259,  334 => 257,  332 => 256,  329 => 255,  325 => 253,  317 => 251,  315 => 250,  312 => 249,  305 => 244,  301 => 242,  296 => 238,  292 => 236,  288 => 234,  286 => 233,  282 => 232,  274 => 226,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ article.titre }} — Bizcore Blog</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
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
</head>
<body>

{# ══ NAVBAR ══════════════════════════════════════════════════════ #}
<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"#\">Événements</a>
        <a href=\"#\">Coaching</a>
        <a href=\"{{ path('frontend_blog_index') }}\" class=\"active\">Blog</a>
        {% if app.user %}
            <a href=\"#\" class=\"nav-cta\">Mon compte</a>
        {% else %}
            <a href=\"#\" class=\"nav-cta\">Se connecter</a>
        {% endif %}
    </div>
</nav>

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

</body>
</html>
", "blog/show.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\blog\\show.html.twig");
    }
}
