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

/* article/new.html.twig */
class __TwigTemplate_cfe7c716148a41b587bf6aa67d5d5744 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/new.html.twig"));

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

        yield "Ajouter un Article";
        
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
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* ── LAYOUT: form left, AI generator right ── */
    .new-layout { display: grid; grid-template-columns: 1fr 360px; gap: 24px; align-items: start; max-width: 1280px; }

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(34,197,94,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #22c55e; font-size: 16px; }
    .form-body { padding: 28px; }

    .error-summary { background: #fee2e2; border: 1.5px solid #ef4444; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; font-weight: 700; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; display: flex; flex-direction: column; gap: 4px; font-size: 13px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }
    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }
    .form-group input, .form-group textarea, .form-group select {
        padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px;
        font-family: 'DM Sans', sans-serif; font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s, box-shadow 0.2s; background: #fff; width: 100%;
    }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group textarea.is-invalid, .form-group select.is-invalid { border-color: #ef4444 !important; }
    .form-group textarea { resize: vertical; min-height: 200px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }

    /* ── AI GENERATOR PANEL ──────────────────────────────────────── */
    .ai-panel { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.06); position: sticky; top: 24px; }
    .ai-panel-header { background: linear-gradient(135deg, #7c3aed, #4f46e5); padding: 16px 20px; display: flex; align-items: center; gap: 10px; }
    .ai-panel-title { font-size: 15px; font-weight: 700; color: #fff; }
    .ai-panel-sub { font-size: 11px; color: rgba(255,255,255,.7); margin-top: 2px; }
    .ai-panel-body { padding: 20px; }

    .gen-field { margin-bottom: 14px; }
    .gen-label { font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 6px; display: block; }
    .gen-input { width: 100%; padding: 10px 13px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #1e293b; background: #f8fafc; outline: none; transition: border-color .15s; }
    .gen-input:focus { border-color: #7c3aed; box-shadow: 0 0 0 3px rgba(124,58,237,.1); background: #fff; }
    .gen-select { width: 100%; padding: 10px 13px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 13px; color: #1e293b; background: #f8fafc; outline: none; cursor: pointer; transition: border-color .15s; }
    .gen-select:focus { border-color: #7c3aed; }

    .btn-generate { width: 100%; padding: 13px; background: linear-gradient(135deg, #7c3aed, #4f46e5); color: #fff; border: none; border-radius: 10px; font-family: 'DM Sans', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: opacity .15s, transform .15s; margin-bottom: 16px; }
    .btn-generate:hover:not(:disabled) { opacity: .9; transform: translateY(-1px); }
    .btn-generate:disabled { opacity: .5; cursor: not-allowed; }

    /* Loading animation */
    .gen-loader { display: none; text-align: center; padding: 20px; }
    .gen-loader-dots { display: inline-flex; gap: 6px; }
    .gen-loader-dots span { width: 8px; height: 8px; background: #7c3aed; border-radius: 50%; animation: bounce 1.2s infinite; }
    .gen-loader-dots span:nth-child(2) { animation-delay: .2s; }
    .gen-loader-dots span:nth-child(3) { animation-delay: .4s; }
    @keyframes bounce { 0%,80%,100%{transform:scale(0)} 40%{transform:scale(1)} }
    .gen-loader p { font-size: 13px; color: #7c3aed; font-weight: 600; margin-top: 10px; }

    /* Generated result preview */
    .gen-result { display: none; }
    .gen-result.show { display: block; }
    .gen-result-title { font-size: 12px; font-weight: 700; color: #15803d; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 10px; display: flex; align-items: center; gap: 6px; }
    .gen-preview { background: #f0fdf4; border: 1.5px solid #bbf7d0; border-radius: 10px; padding: 14px; margin-bottom: 12px; }
    .gen-preview-titre { font-size: 14px; font-weight: 700; color: #0f172a; margin-bottom: 6px; }
    .gen-preview-excerpt { font-size: 12px; color: #475569; line-height: 1.6; }
    .gen-preview-meta { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 10px; }
    .gen-meta-chip { display: inline-block; background: #ede9fe; color: #5b21b6; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 10px; }
    .gen-word-count { font-size: 11px; color: #94a3b8; margin-top: 4px; }

    .btn-inject { width: 100%; padding: 11px; background: #22c55e; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 8px; }
    .btn-inject:hover { background: #16a34a; }
    .btn-regenerate { width: 100%; padding: 9px; background: #f8fafc; color: #475569; border: 1.5px solid #e2e8f0; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; cursor: pointer; transition: background .15s; }
    .btn-regenerate:hover { background: #f1f5f9; }

    .gen-error { background: #fee2e2; border: 1px solid #fecaca; border-radius: 10px; padding: 14px; font-size: 13px; color: #dc2626; display: none; }
    .gen-error.show { display: block; }

    .ai-tip { background: #faf5ff; border: 1px solid #e9d5ff; border-radius: 8px; padding: 12px 14px; font-size: 12px; color: #6b21a8; line-height: 1.6; }
    .ai-tip strong { display: block; margin-bottom: 4px; color: #4c1d95; }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"#\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"#\" class=\"nav-item\"><span>📝</span> Blog</a>
            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"nav-item active\"><span>📰</span> Articles</a>
            <a href=\"#\" class=\"nav-item\"><span>🛍</span> Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div style=\"font-size:13px; font-weight:600; color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px; color:#64748b;\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"#\" class=\"btn-profile\">Profile</a>
                <a href=\"#\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <div class=\"main\">
        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span> /
                <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">ARTICLES</a> /
                <span>AJOUTER</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">
            <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"back-link\">← Retour à la liste</a>

            <div class=\"new-layout\">

                ";
        // line 175
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data", "class" => "form-card", "id" => "article-form"]]);
        yield "

                    <div class=\"form-card-header\">
                        <div class=\"icon\">📋</div>
                        Ajouter un nouvel article
                    </div>

                    <div class=\"form-body\">

                        ";
        // line 184
        $context["hasErrors"] = false;
        // line 185
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185)) > 0)) {
                $context["hasErrors"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "                        ";
        if ((($tmp = (isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 186, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "                        <div class=\"error-summary\">
                            <strong>⚠️ Veuillez corriger les erreurs suivantes :</strong>
                            <ul>
                                ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 191
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 191), "errors", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 192
                    yield "                                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 192), "label", [], "any", false, false, false, 192), "html", null, true);
                    yield " : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 192), "html", null, true);
                    yield "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            yield "                            </ul>
                        </div>
                        ";
        }
        // line 198
        yield "
                        <div class=\"form-grid\">

                            <div class=\"form-group full\">
                                ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "titre", [], "any", false, false, false, 202), 'label');
        yield "
                                ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "titre", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "titre", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "errors", [], "any", false, false, false, 203)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "Titre de l'article", "id" => "field-titre"]]);
        yield "
                                ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "titre", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "errors", [], "any", false, false, false, 204));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 204), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "categorie", [], "any", false, false, false, 208), 'label');
        yield "
                                ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "categorie", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "categorie", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "errors", [], "any", false, false, false, 209)) > 0)) ? ("is-invalid") : ("")), "id" => "field-categorie"]]);
        yield "
                                ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "categorie", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "errors", [], "any", false, false, false, 210));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 210), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "statut", [], "any", false, false, false, 214), 'label');
        yield "
                                ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "statut", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "statut", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "errors", [], "any", false, false, false, 215)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                                ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "statut", [], "any", false, false, false, 216), "vars", [], "any", false, false, false, 216), "errors", [], "any", false, false, false, 216));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 216), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "nombre_vues", [], "any", false, false, false, 220), 'label');
        yield "
                                ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "nombre_vues", [], "any", false, false, false, 221), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "nombre_vues", [], "any", false, false, false, 221), "vars", [], "any", false, false, false, 221), "errors", [], "any", false, false, false, 221)) > 0)) ? ("is-invalid") : ("")), "min" => 0]]);
        yield "
                                ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "nombre_vues", [], "any", false, false, false, 222), "vars", [], "any", false, false, false, 222), "errors", [], "any", false, false, false, 222));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 222), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "image_principale", [], "any", false, false, false, 226), 'label');
        yield "
                                <div class=\"file-upload-wrapper\">
                                    ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "image_principale", [], "any", false, false, false, 228), 'widget');
        yield "
                                    <div class=\"file-upload-box\">
                                        <div style=\"font-size:28px; color:#cbd5e1; margin-bottom:6px;\">📎</div>
                                        <p>Cliquez pour choisir une image</p>
                                        <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                                        <div class=\"file-name\" id=\"file-name-display\"></div>
                                    </div>
                                </div>
                                ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "image_principale", [], "any", false, false, false, 236), "vars", [], "any", false, false, false, 236), "errors", [], "any", false, false, false, 236));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 236), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "                            </div>

                            <div class=\"form-group full\">
                                ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "contenu", [], "any", false, false, false, 240), 'label');
        yield "
                                ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "contenu", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "contenu", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "errors", [], "any", false, false, false, 241)) > 0)) ? ("is-invalid") : ("")), "rows" => 12, "placeholder" => "Rédigez le contenu de l'article ici, ou utilisez le générateur IA →", "id" => "field-contenu"]]);
        yield "
                                ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "contenu", [], "any", false, false, false, 242), "vars", [], "any", false, false, false, 242), "errors", [], "any", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 242), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "                            </div>

                        </div>
                    </div>

                    <div class=\"form-actions\">
                        <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"btn btn-secondary\">✕ Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success\">＋ Publier l'article</button>
                    </div>

                ";
        // line 253
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'form_end');
        yield "

                ";
        // line 256
        yield "                <div class=\"ai-panel\">
                    <div class=\"ai-panel-header\">
                        <div>
                            <div class=\"ai-panel-title\">✨ Générateur IA</div>
                            <div class=\"ai-panel-sub\">Brouillon de 300 mots en quelques secondes</div>
                        </div>
                    </div>
                    <div class=\"ai-panel-body\">

                        <div class=\"gen-field\">
                            <label class=\"gen-label\">Titre de l'article *</label>
                            <input type=\"text\" id=\"gen-titre\" class=\"gen-input\"
                                   placeholder=\"Ex: Comment financer sa startup en 2026\"
                                   maxlength=\"200\">
                        </div>

                        <div class=\"gen-field\">
                            <label class=\"gen-label\">Catégorie</label>
                            <select id=\"gen-categorie\" class=\"gen-select\">
                                <option value=\"Actualité\">Actualité</option>
                                <option value=\"Technologie\">Technologie</option>
                                <option value=\"Sport\">Sport</option>
                                <option value=\"Culture\">Culture</option>
                                <option value=\"Économie\" selected>Économie</option>
                                <option value=\"Santé\">Santé</option>
                                <option value=\"Coaching\">Coaching</option>
                                <option value=\"Lifestyle\">Lifestyle</option>
                                <option value=\"Autre\">Autre</option>
                            </select>
                        </div>

                        <div class=\"gen-field\">
                            <label class=\"gen-label\">Ton de l'article</label>
                            <select id=\"gen-tone\" class=\"gen-select\">
                                <option value=\"Informatif\">📚 Informatif — Factuel et pédagogique</option>
                                <option value=\"Motivant\">🚀 Motivant — Inspirant et dynamique</option>
                                <option value=\"Technique\">🔧 Technique — Précis et détaillé</option>
                                <option value=\"Narratif\">📖 Narratif — Storytelling</option>
                            </select>
                        </div>

                        <button class=\"btn-generate\" id=\"btnGenerate\" onclick=\"generateDraft()\">
                            ✨ Générer un brouillon
                        </button>

                        ";
        // line 302
        yield "                        <div class=\"gen-loader\" id=\"genLoader\">
                            <div class=\"gen-loader-dots\">
                                <span></span><span></span><span></span>
                            </div>
                            <p id=\"genLoaderText\">L'IA rédige votre article…</p>
                        </div>

                        ";
        // line 310
        yield "                        <div class=\"gen-error\" id=\"genError\"></div>

                        ";
        // line 313
        yield "                        <div class=\"gen-result\" id=\"genResult\">
                            <div class=\"gen-result-title\">✅ Brouillon généré</div>
                            <div class=\"gen-preview\">
                                <div class=\"gen-preview-titre\" id=\"genPreviewTitre\"></div>
                                <div class=\"gen-preview-excerpt\" id=\"genPreviewExcerpt\"></div>
                                <div class=\"gen-preview-meta\" id=\"genPreviewTags\"></div>
                                <div class=\"gen-word-count\" id=\"genWordCount\"></div>
                            </div>
                            <button class=\"btn-inject\" onclick=\"injectDraft()\">
                                ⬅ Injecter dans le formulaire
                            </button>
                            <button class=\"btn-regenerate\" onclick=\"generateDraft()\">
                                🔄 Générer une autre version
                            </button>
                        </div>

                        <div class=\"ai-tip\">
                            <strong>💡 Comment ça marche</strong>
                            Entrez un titre, choisissez la catégorie et le ton, puis cliquez \"Générer un brouillon\". L'IA écrit ~300 mots. Cliquez \"Injecter\" pour remplir le formulaire automatiquement — vous pouvez ensuite modifier le texte avant de publier.
                        </div>

                    </div>
                </div>

            </div>";
        // line 338
        yield "        </div>
    </div>
</div>

<script>
const GENERATE_URL = '/api/articles/generate-draft';

// ── File upload display ────────────────────────────────────────
const fi = document.querySelector('input[type=\"file\"]');
const dn = document.getElementById('file-name-display');
if (fi && dn) {
    fi.addEventListener('change', function () {
        if (this.files && this.files[0]) { dn.textContent = '✅ ' + this.files[0].name; dn.style.display = 'block'; }
    });
}

// ── Generated draft data (held in memory) ─────────────────────
let generatedData = null;
let loadingMessages = [
    \"L'IA rédige votre article…\",
    \"Structuration du contenu…\",
    \"Optimisation SEO en cours…\",
    \"Finalisation du brouillon…\",
];
let loadingTimer = null;

// ── GENERATE DRAFT ────────────────────────────────────────────
async function generateDraft() {
    const titre     = document.getElementById('gen-titre').value.trim();
    const categorie = document.getElementById('gen-categorie').value;
    const tone      = document.getElementById('gen-tone').value;

    if (titre.length < 5) {
        showGenError('Entrez un titre d\\'au moins 5 caractères.');
        return;
    }

    // UI: loading state
    document.getElementById('btnGenerate').disabled = true;
    document.getElementById('genLoader').style.display = 'block';
    document.getElementById('genResult').classList.remove('show');
    document.getElementById('genError').classList.remove('show');

    // Rotating loading messages
    let msgIdx = 0;
    loadingTimer = setInterval(() => {
        msgIdx = (msgIdx + 1) % loadingMessages.length;
        const el = document.getElementById('genLoaderText');
        if (el) el.textContent = loadingMessages[msgIdx];
    }, 2000);

    try {
        const res = await fetch(GENERATE_URL, {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({ titre, categorie, tone }),
        });

        const json = await res.json();

        if (!json.success) {
            showGenError(json.message || 'Erreur lors de la génération.');
            return;
        }

        generatedData = json.data;

        // Show preview
        document.getElementById('genPreviewTitre').textContent = generatedData.titre;

        // Show first 180 chars of content as excerpt
        const excerpt = generatedData.contenu.slice(0, 200) + '…';
        document.getElementById('genPreviewExcerpt').textContent = excerpt;

        // Show tags
        const tags = (generatedData.mots_cles || '').split(',').filter(t => t.trim());
        document.getElementById('genPreviewTags').innerHTML =
            tags.map(t => `<span class=\"gen-meta-chip\">\${escHtml(t.trim())}</span>`).join('');

        document.getElementById('genWordCount').textContent =
            `📊 \${generatedData.word_count ?? '~300'} mots générés`;

        document.getElementById('genResult').classList.add('show');

    } catch (err) {
        showGenError('Erreur réseau : ' + err.message);
    } finally {
        clearInterval(loadingTimer);
        document.getElementById('btnGenerate').disabled = false;
        document.getElementById('genLoader').style.display = 'none';
    }
}

// ── INJECT DRAFT INTO FORM ────────────────────────────────────
function injectDraft() {
    if (!generatedData) return;

    // Set titre — try id first, fall back to name selector
    const titreField = document.getElementById('field-titre')
        || document.querySelector('[name\$=\"[titre]\"]')
        || document.querySelector('[name=\"article[titre]\"]');
    if (titreField) {
        titreField.value = generatedData.titre;
        titreField.dispatchEvent(new Event('input', { bubbles: true }));
    }

    // Set contenu — try id first, fall back to name selector
    const contenuField = document.getElementById('field-contenu')
        || document.querySelector('[name\$=\"[contenu]\"]')
        || document.querySelector('[name=\"article[contenu]\"]');
    if (contenuField) {
        contenuField.value = generatedData.contenu;
        contenuField.dispatchEvent(new Event('input', { bubbles: true }));
        // Visual flash to confirm injection
        contenuField.style.borderColor = '#22c55e';
        contenuField.style.boxShadow = '0 0 0 3px rgba(34,197,94,0.15)';
        setTimeout(() => {
            contenuField.style.borderColor = '';
            contenuField.style.boxShadow = '';
        }, 2000);
        contenuField.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    // Set categorie — case-insensitive match on value OR text
    const catField = document.getElementById('field-categorie')
        || document.querySelector('[name\$=\"[categorie]\"]')
        || document.querySelector('[name=\"article[categorie]\"]');
    if (catField && generatedData.categorie) {
        const target = generatedData.categorie.trim().toLowerCase();
        const opts = catField.options;
        let matched = false;
        for (let i = 0; i < opts.length; i++) {
            if (opts[i].value.trim().toLowerCase() === target
                || opts[i].text.trim().toLowerCase() === target) {
                catField.selectedIndex = i;
                matched = true;
                break;
            }
        }
        // If no match, keep whatever the user had selected — don't reset to blank
    }

    // Visual confirmation on the button
    const btn = document.querySelector('.btn-inject');
    if (btn) {
        const original = btn.innerHTML;
        btn.innerHTML = '✅ Injecté dans le formulaire !';
        btn.style.background = '#15803d';
        setTimeout(() => {
            btn.innerHTML = original;
            btn.style.background = '';
        }, 2500);
    }
}

// ── ERROR DISPLAY ─────────────────────────────────────────────
function showGenError(msg) {
    const el = document.getElementById('genError');
    el.textContent = '❌ ' + msg;
    el.classList.add('show');
}

// ── UTILS ─────────────────────────────────────────────────────
function escHtml(str) {
    if (!str) return '';
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}

// Sync generator titre with form titre on focus change (convenience)
document.getElementById('field-titre')?.addEventListener('blur', function () {
    const genTitre = document.getElementById('gen-titre');
    if (genTitre && !genTitre.value && this.value) {
        genTitre.value = this.value;
    }
});
document.getElementById('gen-titre')?.addEventListener('blur', function () {
    const formTitre = document.getElementById('field-titre');
    if (formTitre && !formTitre.value && this.value) {
        formTitre.value = this.value;
    }
});
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
        return "article/new.html.twig";
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
        return array (  590 => 338,  564 => 313,  560 => 310,  551 => 302,  504 => 256,  499 => 253,  492 => 249,  484 => 243,  473 => 242,  469 => 241,  465 => 240,  460 => 237,  449 => 236,  438 => 228,  433 => 226,  428 => 223,  417 => 222,  413 => 221,  409 => 220,  404 => 217,  393 => 216,  389 => 215,  385 => 214,  380 => 211,  369 => 210,  365 => 209,  361 => 208,  356 => 205,  345 => 204,  341 => 203,  337 => 202,  331 => 198,  326 => 195,  320 => 194,  309 => 192,  304 => 191,  300 => 190,  295 => 187,  292 => 186,  280 => 185,  278 => 184,  265 => 175,  258 => 170,  245 => 160,  220 => 138,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Ajouter un Article{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* ── LAYOUT: form left, AI generator right ── */
    .new-layout { display: grid; grid-template-columns: 1fr 360px; gap: 24px; align-items: start; max-width: 1280px; }

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(34,197,94,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #22c55e; font-size: 16px; }
    .form-body { padding: 28px; }

    .error-summary { background: #fee2e2; border: 1.5px solid #ef4444; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; font-weight: 700; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; display: flex; flex-direction: column; gap: 4px; font-size: 13px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }
    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }
    .form-group input, .form-group textarea, .form-group select {
        padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px;
        font-family: 'DM Sans', sans-serif; font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s, box-shadow 0.2s; background: #fff; width: 100%;
    }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group textarea.is-invalid, .form-group select.is-invalid { border-color: #ef4444 !important; }
    .form-group textarea { resize: vertical; min-height: 200px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }

    /* ── AI GENERATOR PANEL ──────────────────────────────────────── */
    .ai-panel { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.06); position: sticky; top: 24px; }
    .ai-panel-header { background: linear-gradient(135deg, #7c3aed, #4f46e5); padding: 16px 20px; display: flex; align-items: center; gap: 10px; }
    .ai-panel-title { font-size: 15px; font-weight: 700; color: #fff; }
    .ai-panel-sub { font-size: 11px; color: rgba(255,255,255,.7); margin-top: 2px; }
    .ai-panel-body { padding: 20px; }

    .gen-field { margin-bottom: 14px; }
    .gen-label { font-size: 11px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 6px; display: block; }
    .gen-input { width: 100%; padding: 10px 13px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #1e293b; background: #f8fafc; outline: none; transition: border-color .15s; }
    .gen-input:focus { border-color: #7c3aed; box-shadow: 0 0 0 3px rgba(124,58,237,.1); background: #fff; }
    .gen-select { width: 100%; padding: 10px 13px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 13px; color: #1e293b; background: #f8fafc; outline: none; cursor: pointer; transition: border-color .15s; }
    .gen-select:focus { border-color: #7c3aed; }

    .btn-generate { width: 100%; padding: 13px; background: linear-gradient(135deg, #7c3aed, #4f46e5); color: #fff; border: none; border-radius: 10px; font-family: 'DM Sans', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: opacity .15s, transform .15s; margin-bottom: 16px; }
    .btn-generate:hover:not(:disabled) { opacity: .9; transform: translateY(-1px); }
    .btn-generate:disabled { opacity: .5; cursor: not-allowed; }

    /* Loading animation */
    .gen-loader { display: none; text-align: center; padding: 20px; }
    .gen-loader-dots { display: inline-flex; gap: 6px; }
    .gen-loader-dots span { width: 8px; height: 8px; background: #7c3aed; border-radius: 50%; animation: bounce 1.2s infinite; }
    .gen-loader-dots span:nth-child(2) { animation-delay: .2s; }
    .gen-loader-dots span:nth-child(3) { animation-delay: .4s; }
    @keyframes bounce { 0%,80%,100%{transform:scale(0)} 40%{transform:scale(1)} }
    .gen-loader p { font-size: 13px; color: #7c3aed; font-weight: 600; margin-top: 10px; }

    /* Generated result preview */
    .gen-result { display: none; }
    .gen-result.show { display: block; }
    .gen-result-title { font-size: 12px; font-weight: 700; color: #15803d; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 10px; display: flex; align-items: center; gap: 6px; }
    .gen-preview { background: #f0fdf4; border: 1.5px solid #bbf7d0; border-radius: 10px; padding: 14px; margin-bottom: 12px; }
    .gen-preview-titre { font-size: 14px; font-weight: 700; color: #0f172a; margin-bottom: 6px; }
    .gen-preview-excerpt { font-size: 12px; color: #475569; line-height: 1.6; }
    .gen-preview-meta { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 10px; }
    .gen-meta-chip { display: inline-block; background: #ede9fe; color: #5b21b6; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 10px; }
    .gen-word-count { font-size: 11px; color: #94a3b8; margin-top: 4px; }

    .btn-inject { width: 100%; padding: 11px; background: #22c55e; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 8px; }
    .btn-inject:hover { background: #16a34a; }
    .btn-regenerate { width: 100%; padding: 9px; background: #f8fafc; color: #475569; border: 1.5px solid #e2e8f0; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; cursor: pointer; transition: background .15s; }
    .btn-regenerate:hover { background: #f1f5f9; }

    .gen-error { background: #fee2e2; border: 1px solid #fecaca; border-radius: 10px; padding: 14px; font-size: 13px; color: #dc2626; display: none; }
    .gen-error.show { display: block; }

    .ai-tip { background: #faf5ff; border: 1px solid #e9d5ff; border-radius: 8px; padding: 12px 14px; font-size: 12px; color: #6b21a8; line-height: 1.6; }
    .ai-tip strong { display: block; margin-bottom: 4px; color: #4c1d95; }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"#\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"#\" class=\"nav-item\"><span>📝</span> Blog</a>
            <a href=\"{{ path('article_index') }}\" class=\"nav-item active\"><span>📰</span> Articles</a>
            <a href=\"#\" class=\"nav-item\"><span>🛍</span> Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div style=\"font-size:13px; font-weight:600; color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px; color:#64748b;\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"#\" class=\"btn-profile\">Profile</a>
                <a href=\"#\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <div class=\"main\">
        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span> /
                <a href=\"{{ path('article_index') }}\">ARTICLES</a> /
                <span>AJOUTER</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">
            <a href=\"{{ path('article_index') }}\" class=\"back-link\">← Retour à la liste</a>

            <div class=\"new-layout\">

                {# ── LEFT: Article form ── #}
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data', 'class': 'form-card', 'id': 'article-form'}}) }}

                    <div class=\"form-card-header\">
                        <div class=\"icon\">📋</div>
                        Ajouter un nouvel article
                    </div>

                    <div class=\"form-body\">

                        {% set hasErrors = false %}
                        {% for field in form %}{% if field.vars.errors|length > 0 %}{% set hasErrors = true %}{% endif %}{% endfor %}
                        {% if hasErrors %}
                        <div class=\"error-summary\">
                            <strong>⚠️ Veuillez corriger les erreurs suivantes :</strong>
                            <ul>
                                {% for field in form %}
                                    {% for error in field.vars.errors %}
                                        <li>{{ field.vars.label }} : {{ error.message }}</li>
                                    {% endfor %}
                                {% endfor %}
                            </ul>
                        </div>
                        {% endif %}

                        <div class=\"form-grid\">

                            <div class=\"form-group full\">
                                {{ form_label(form.titre) }}
                                {{ form_widget(form.titre, {'attr': {'class': form.titre.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': \"Titre de l'article\", 'id': 'field-titre'}}) }}
                                {% for error in form.titre.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.categorie) }}
                                {{ form_widget(form.categorie, {'attr': {'class': form.categorie.vars.errors|length > 0 ? 'is-invalid' : '', 'id': 'field-categorie'}}) }}
                                {% for error in form.categorie.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.statut) }}
                                {{ form_widget(form.statut, {'attr': {'class': form.statut.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                                {% for error in form.statut.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.nombre_vues) }}
                                {{ form_widget(form.nombre_vues, {'attr': {'class': form.nombre_vues.vars.errors|length > 0 ? 'is-invalid' : '', 'min': 0}}) }}
                                {% for error in form.nombre_vues.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.image_principale) }}
                                <div class=\"file-upload-wrapper\">
                                    {{ form_widget(form.image_principale) }}
                                    <div class=\"file-upload-box\">
                                        <div style=\"font-size:28px; color:#cbd5e1; margin-bottom:6px;\">📎</div>
                                        <p>Cliquez pour choisir une image</p>
                                        <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                                        <div class=\"file-name\" id=\"file-name-display\"></div>
                                    </div>
                                </div>
                                {% for error in form.image_principale.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group full\">
                                {{ form_label(form.contenu) }}
                                {{ form_widget(form.contenu, {'attr': {'class': form.contenu.vars.errors|length > 0 ? 'is-invalid' : '', 'rows': 12, 'placeholder': \"Rédigez le contenu de l'article ici, ou utilisez le générateur IA →\", 'id': 'field-contenu'}}) }}
                                {% for error in form.contenu.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                        </div>
                    </div>

                    <div class=\"form-actions\">
                        <a href=\"{{ path('article_index') }}\" class=\"btn btn-secondary\">✕ Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success\">＋ Publier l'article</button>
                    </div>

                {{ form_end(form) }}

                {# ── RIGHT: AI Generator Panel ── #}
                <div class=\"ai-panel\">
                    <div class=\"ai-panel-header\">
                        <div>
                            <div class=\"ai-panel-title\">✨ Générateur IA</div>
                            <div class=\"ai-panel-sub\">Brouillon de 300 mots en quelques secondes</div>
                        </div>
                    </div>
                    <div class=\"ai-panel-body\">

                        <div class=\"gen-field\">
                            <label class=\"gen-label\">Titre de l'article *</label>
                            <input type=\"text\" id=\"gen-titre\" class=\"gen-input\"
                                   placeholder=\"Ex: Comment financer sa startup en 2026\"
                                   maxlength=\"200\">
                        </div>

                        <div class=\"gen-field\">
                            <label class=\"gen-label\">Catégorie</label>
                            <select id=\"gen-categorie\" class=\"gen-select\">
                                <option value=\"Actualité\">Actualité</option>
                                <option value=\"Technologie\">Technologie</option>
                                <option value=\"Sport\">Sport</option>
                                <option value=\"Culture\">Culture</option>
                                <option value=\"Économie\" selected>Économie</option>
                                <option value=\"Santé\">Santé</option>
                                <option value=\"Coaching\">Coaching</option>
                                <option value=\"Lifestyle\">Lifestyle</option>
                                <option value=\"Autre\">Autre</option>
                            </select>
                        </div>

                        <div class=\"gen-field\">
                            <label class=\"gen-label\">Ton de l'article</label>
                            <select id=\"gen-tone\" class=\"gen-select\">
                                <option value=\"Informatif\">📚 Informatif — Factuel et pédagogique</option>
                                <option value=\"Motivant\">🚀 Motivant — Inspirant et dynamique</option>
                                <option value=\"Technique\">🔧 Technique — Précis et détaillé</option>
                                <option value=\"Narratif\">📖 Narratif — Storytelling</option>
                            </select>
                        </div>

                        <button class=\"btn-generate\" id=\"btnGenerate\" onclick=\"generateDraft()\">
                            ✨ Générer un brouillon
                        </button>

                        {# Loading #}
                        <div class=\"gen-loader\" id=\"genLoader\">
                            <div class=\"gen-loader-dots\">
                                <span></span><span></span><span></span>
                            </div>
                            <p id=\"genLoaderText\">L'IA rédige votre article…</p>
                        </div>

                        {# Error #}
                        <div class=\"gen-error\" id=\"genError\"></div>

                        {# Result preview #}
                        <div class=\"gen-result\" id=\"genResult\">
                            <div class=\"gen-result-title\">✅ Brouillon généré</div>
                            <div class=\"gen-preview\">
                                <div class=\"gen-preview-titre\" id=\"genPreviewTitre\"></div>
                                <div class=\"gen-preview-excerpt\" id=\"genPreviewExcerpt\"></div>
                                <div class=\"gen-preview-meta\" id=\"genPreviewTags\"></div>
                                <div class=\"gen-word-count\" id=\"genWordCount\"></div>
                            </div>
                            <button class=\"btn-inject\" onclick=\"injectDraft()\">
                                ⬅ Injecter dans le formulaire
                            </button>
                            <button class=\"btn-regenerate\" onclick=\"generateDraft()\">
                                🔄 Générer une autre version
                            </button>
                        </div>

                        <div class=\"ai-tip\">
                            <strong>💡 Comment ça marche</strong>
                            Entrez un titre, choisissez la catégorie et le ton, puis cliquez \"Générer un brouillon\". L'IA écrit ~300 mots. Cliquez \"Injecter\" pour remplir le formulaire automatiquement — vous pouvez ensuite modifier le texte avant de publier.
                        </div>

                    </div>
                </div>

            </div>{# /new-layout #}
        </div>
    </div>
</div>

<script>
const GENERATE_URL = '/api/articles/generate-draft';

// ── File upload display ────────────────────────────────────────
const fi = document.querySelector('input[type=\"file\"]');
const dn = document.getElementById('file-name-display');
if (fi && dn) {
    fi.addEventListener('change', function () {
        if (this.files && this.files[0]) { dn.textContent = '✅ ' + this.files[0].name; dn.style.display = 'block'; }
    });
}

// ── Generated draft data (held in memory) ─────────────────────
let generatedData = null;
let loadingMessages = [
    \"L'IA rédige votre article…\",
    \"Structuration du contenu…\",
    \"Optimisation SEO en cours…\",
    \"Finalisation du brouillon…\",
];
let loadingTimer = null;

// ── GENERATE DRAFT ────────────────────────────────────────────
async function generateDraft() {
    const titre     = document.getElementById('gen-titre').value.trim();
    const categorie = document.getElementById('gen-categorie').value;
    const tone      = document.getElementById('gen-tone').value;

    if (titre.length < 5) {
        showGenError('Entrez un titre d\\'au moins 5 caractères.');
        return;
    }

    // UI: loading state
    document.getElementById('btnGenerate').disabled = true;
    document.getElementById('genLoader').style.display = 'block';
    document.getElementById('genResult').classList.remove('show');
    document.getElementById('genError').classList.remove('show');

    // Rotating loading messages
    let msgIdx = 0;
    loadingTimer = setInterval(() => {
        msgIdx = (msgIdx + 1) % loadingMessages.length;
        const el = document.getElementById('genLoaderText');
        if (el) el.textContent = loadingMessages[msgIdx];
    }, 2000);

    try {
        const res = await fetch(GENERATE_URL, {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({ titre, categorie, tone }),
        });

        const json = await res.json();

        if (!json.success) {
            showGenError(json.message || 'Erreur lors de la génération.');
            return;
        }

        generatedData = json.data;

        // Show preview
        document.getElementById('genPreviewTitre').textContent = generatedData.titre;

        // Show first 180 chars of content as excerpt
        const excerpt = generatedData.contenu.slice(0, 200) + '…';
        document.getElementById('genPreviewExcerpt').textContent = excerpt;

        // Show tags
        const tags = (generatedData.mots_cles || '').split(',').filter(t => t.trim());
        document.getElementById('genPreviewTags').innerHTML =
            tags.map(t => `<span class=\"gen-meta-chip\">\${escHtml(t.trim())}</span>`).join('');

        document.getElementById('genWordCount').textContent =
            `📊 \${generatedData.word_count ?? '~300'} mots générés`;

        document.getElementById('genResult').classList.add('show');

    } catch (err) {
        showGenError('Erreur réseau : ' + err.message);
    } finally {
        clearInterval(loadingTimer);
        document.getElementById('btnGenerate').disabled = false;
        document.getElementById('genLoader').style.display = 'none';
    }
}

// ── INJECT DRAFT INTO FORM ────────────────────────────────────
function injectDraft() {
    if (!generatedData) return;

    // Set titre — try id first, fall back to name selector
    const titreField = document.getElementById('field-titre')
        || document.querySelector('[name\$=\"[titre]\"]')
        || document.querySelector('[name=\"article[titre]\"]');
    if (titreField) {
        titreField.value = generatedData.titre;
        titreField.dispatchEvent(new Event('input', { bubbles: true }));
    }

    // Set contenu — try id first, fall back to name selector
    const contenuField = document.getElementById('field-contenu')
        || document.querySelector('[name\$=\"[contenu]\"]')
        || document.querySelector('[name=\"article[contenu]\"]');
    if (contenuField) {
        contenuField.value = generatedData.contenu;
        contenuField.dispatchEvent(new Event('input', { bubbles: true }));
        // Visual flash to confirm injection
        contenuField.style.borderColor = '#22c55e';
        contenuField.style.boxShadow = '0 0 0 3px rgba(34,197,94,0.15)';
        setTimeout(() => {
            contenuField.style.borderColor = '';
            contenuField.style.boxShadow = '';
        }, 2000);
        contenuField.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    // Set categorie — case-insensitive match on value OR text
    const catField = document.getElementById('field-categorie')
        || document.querySelector('[name\$=\"[categorie]\"]')
        || document.querySelector('[name=\"article[categorie]\"]');
    if (catField && generatedData.categorie) {
        const target = generatedData.categorie.trim().toLowerCase();
        const opts = catField.options;
        let matched = false;
        for (let i = 0; i < opts.length; i++) {
            if (opts[i].value.trim().toLowerCase() === target
                || opts[i].text.trim().toLowerCase() === target) {
                catField.selectedIndex = i;
                matched = true;
                break;
            }
        }
        // If no match, keep whatever the user had selected — don't reset to blank
    }

    // Visual confirmation on the button
    const btn = document.querySelector('.btn-inject');
    if (btn) {
        const original = btn.innerHTML;
        btn.innerHTML = '✅ Injecté dans le formulaire !';
        btn.style.background = '#15803d';
        setTimeout(() => {
            btn.innerHTML = original;
            btn.style.background = '';
        }, 2500);
    }
}

// ── ERROR DISPLAY ─────────────────────────────────────────────
function showGenError(msg) {
    const el = document.getElementById('genError');
    el.textContent = '❌ ' + msg;
    el.classList.add('show');
}

// ── UTILS ─────────────────────────────────────────────────────
function escHtml(str) {
    if (!str) return '';
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}

// Sync generator titre with form titre on focus change (convenience)
document.getElementById('field-titre')?.addEventListener('blur', function () {
    const genTitre = document.getElementById('gen-titre');
    if (genTitre && !genTitre.value && this.value) {
        genTitre.value = this.value;
    }
});
document.getElementById('gen-titre')?.addEventListener('blur', function () {
    const formTitre = document.getElementById('field-titre');
    if (formTitre && !formTitre.value && this.value) {
        formTitre.value = this.value;
    }
});
</script>
{% endblock %}", "article/new.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\article\\new.html.twig");
    }
}
