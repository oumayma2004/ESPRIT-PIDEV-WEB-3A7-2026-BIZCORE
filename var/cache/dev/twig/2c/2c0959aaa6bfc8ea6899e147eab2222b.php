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

/* article/edit.html.twig */
class __TwigTemplate_42012c15a79b492d4454ba40cf2b3a17 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

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

        yield "Modifier l'Article #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "idArticle", [], "any", false, false, false, 2), "html", null, true);
        
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

    .edit-layout { display: grid; grid-template-columns: 1fr 380px; gap: 24px; align-items: start; max-width: 1300px; }

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(251,191,36,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fbbf24; font-size: 16px; }
    .form-body { padding: 28px; }

    .info-banner { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; margin-bottom: 24px; display: flex; gap: 20px; font-size: 12px; color: #64748b; flex-wrap: wrap; }
    .info-banner strong { color: #1e293b; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }
    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }
    .form-group input, .form-group textarea, .form-group select { padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #0f172a; outline: none; transition: border-color 0.2s; background: #fff; width: 100%; }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group textarea { resize: vertical; min-height: 220px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; margin-top: 2px; }

    .current-image { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px; margin-bottom: 10px; display: flex; align-items: center; gap: 12px; }
    .current-image img { width: 70px; height: 50px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 12px; color: #64748b; }
    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 16px; text-align: center; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 12px; color: #94a3b8; margin-top: 4px; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }

    .right-panels { display: flex; flex-direction: column; gap: 20px; }
    .panel { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.04); }
    .panel-header { padding: 14px 18px; font-size: 13px; font-weight: 700; color: #fff; display: flex; align-items: center; gap: 8px; }
    .panel-header.purple { background: #7c3aed; }
    .panel-header.blue   { background: #2563eb; }
    .panel-header.green  { background: #15803d; }
    .panel-body { padding: 18px; }

    .btn-ai { width: 100%; padding: 11px; background: #7c3aed; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 14px; }
    .btn-ai:hover { background: #6d28d9; }
    .btn-ai:disabled { opacity: .6; cursor: not-allowed; }
    .ai-result { display: none; }
    .ai-result.show { display: block; }
    .ai-field { margin-bottom: 12px; }
    .ai-label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 5px; }
    .ai-val { font-size: 13px; color: #1e293b; font-weight: 500; line-height: 1.5; }
    .tag-list { display: flex; flex-wrap: wrap; gap: 6px; }
    .tag { display: inline-block; background: #ede9fe; color: #5b21b6; font-size: 11px; font-weight: 700; padding: 3px 10px; border-radius: 20px; }
    .tone-badge { display: inline-block; background: #dbeafe; color: #1d4ed8; font-size: 12px; font-weight: 700; padding: 4px 12px; border-radius: 20px; }
    .btn-save-ai { width: 100%; padding: 9px; background: #15803d; color: #fff; border: none; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700; cursor: pointer; margin-top: 12px; display: none; transition: background .15s; }
    .btn-save-ai:hover { background: #166534; }
    .ai-spinner { display: none; text-align: center; padding: 16px; color: #7c3aed; font-size: 13px; }

    .btn-unsplash { width: 100%; padding: 11px; background: #2563eb; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 14px; }
    .btn-unsplash:hover { background: #1d4ed8; }
    .btn-unsplash:disabled { opacity: .6; cursor: not-allowed; }
    .unsplash-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; display: none; }
    .unsplash-grid.show { display: grid; }
    .unsplash-img { position: relative; cursor: pointer; border-radius: 8px; overflow: hidden; border: 2.5px solid transparent; transition: border-color .15s, transform .15s; }
    .unsplash-img:hover { border-color: #2563eb; transform: scale(1.02); }
    .unsplash-img.selected { border-color: #22c55e; }
    .unsplash-img img { width: 100%; height: 80px; object-fit: cover; display: block; }
    .unsplash-check { position: absolute; top: 4px; right: 4px; background: #22c55e; color: #fff; border-radius: 50%; width: 20px; height: 20px; display: none; align-items: center; justify-content: center; font-size: 11px; font-weight: 800; }
    .unsplash-img.selected .unsplash-check { display: flex; }
    .unsplash-credit { font-size: 10px; color: #94a3b8; margin-top: 8px; }
    .unsplash-spinner { display: none; text-align: center; padding: 16px; color: #2563eb; font-size: 13px; }

    .btn-readability { width: 100%; padding: 11px; background: #15803d; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 14px; }
    .btn-readability:hover { background: #166534; }
    .read-result { display: none; }
    .read-result.show { display: block; }
    .score-circle { text-align: center; margin-bottom: 16px; }
    .score-big { font-size: 44px; font-weight: 800; line-height: 1; }
    .score-level { font-size: 13px; font-weight: 700; margin-top: 4px; }
    .read-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 14px; }
    .read-stat { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 12px; text-align: center; }
    .read-stat .val { font-size: 18px; font-weight: 800; color: #0f172a; }
    .read-stat .lbl { font-size: 10px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: .4px; }
    .rec { display: flex; gap: 8px; align-items: flex-start; padding: 9px 11px; border-radius: 8px; font-size: 12px; line-height: 1.5; margin-bottom: 6px; }
    .rec.success { background: #dcfce7; color: #15803d; }
    .rec.warning { background: #fef9c3; color: #854d0e; }
    .rec.info    { background: #eff6ff; color: #1d4ed8; }
    .read-spinner { display: none; text-align: center; padding: 16px; color: #15803d; font-size: 13px; }

    .ai-existing { background: #f5f3ff; border: 1px solid #ddd6fe; border-radius: 10px; padding: 14px 16px; margin-bottom: 12px; }
    .ai-existing-title { font-size: 11px; font-weight: 700; color: #7c3aed; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 8px; }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"nav-item\"><span>📝</span> Blog</a>
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
                    <div style=\"font-size:13px;font-weight:600;color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px;color:#64748b;\">Administrateur</div>
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
                <span>MODIFIER #";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 161, $this->source); })()), "idArticle", [], "any", false, false, false, 161), "html", null, true);
        yield "</span>
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

            <div class=\"edit-layout\">

                ";
        // line 175
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data", "class" => "form-card"]]);
        yield "

                    <div class=\"form-card-header\">
                        <div class=\"icon\">✏</div>
                        Modifier l'article #";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 179, $this->source); })()), "idArticle", [], "any", false, false, false, 179), "html", null, true);
        yield "
                    </div>

                    <div class=\"form-body\">

                        <div class=\"info-banner\">
                            <span>📰 <strong>ID :</strong> #";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 185, $this->source); })()), "idArticle", [], "any", false, false, false, 185), "html", null, true);
        yield "</span>
                            <span>👁 <strong>Vues :</strong> ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 186, $this->source); })()), "nombreVues", [], "any", false, false, false, 186), "html", null, true);
        yield "</span>
                            ";
        // line 187
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 187, $this->source); })()), "tonIa", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span>🎭 <strong>Ton IA :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 187, $this->source); })()), "tonIa", [], "any", false, false, false, 187), "html", null, true);
            yield "</span>";
        }
        // line 188
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 188, $this->source); })()), "isTrending", [], "method", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span>🔥 <strong>Trending !</strong></span>";
        }
        // line 189
        yield "                        </div>

                        <div class=\"form-grid\">

                            <div class=\"form-group full\">
                                ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "titre", [], "any", false, false, false, 194), 'label');
        yield "
                                ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "titre", [], "any", false, false, false, 195), 'widget', ["attr" => ["id" => "field-titre"]]);
        yield "
                                ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "titre", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "errors", [], "any", false, false, false, 196));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 196), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "categorie", [], "any", false, false, false, 200), 'label');
        yield "
                                ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "categorie", [], "any", false, false, false, 201), 'widget', ["attr" => ["id" => "field-categorie"]]);
        yield "
                                ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "categorie", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "errors", [], "any", false, false, false, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 202), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "statut", [], "any", false, false, false, 206), 'label');
        yield "
                                ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "statut", [], "any", false, false, false, 207), 'widget');
        yield "
                                ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "statut", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "errors", [], "any", false, false, false, 208));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 208), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "nombre_vues", [], "any", false, false, false, 212), 'label');
        yield "
                                ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "nombre_vues", [], "any", false, false, false, 213), 'widget', ["attr" => ["min" => 0]]);
        yield "
                                ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "nombre_vues", [], "any", false, false, false, 214), "vars", [], "any", false, false, false, 214), "errors", [], "any", false, false, false, 214));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 214), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "                            </div>

                            <div class=\"form-group\">
                                ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "image_principale", [], "any", false, false, false, 218), 'label');
        yield "
                                ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 219, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "                                    <div class=\"current-image\">
                                        <img src=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 221, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 221))), "html", null, true);
            yield "\" alt=\"Image actuelle\">
                                        <span>Image actuelle — choisissez-en une nouvelle pour remplacer</span>
                                    </div>
                                ";
        }
        // line 225
        yield "                                <input type=\"hidden\" id=\"unsplash-chosen-url\" name=\"unsplash_image_url\" value=\"\">
                                <div class=\"file-upload-wrapper\">
                                    ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "image_principale", [], "any", false, false, false, 227), 'widget', ["attr" => ["id" => "file-input"]]);
        yield "
                                    <div class=\"file-upload-box\">
                                        <div style=\"font-size:24px;color:#cbd5e1;margin-bottom:4px;\">📎</div>
                                        <p>Cliquez pour choisir une image</p>
                                        <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                                        <div id=\"file-name-display\" style=\"margin-top:6px;font-size:13px;color:#16a34a;font-weight:600;display:none;\"></div>
                                    </div>
                                </div>
                                ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "image_principale", [], "any", false, false, false, 235), "vars", [], "any", false, false, false, 235), "errors", [], "any", false, false, false, 235));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 235), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "                            </div>

                            <div class=\"form-group full\">
                                ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "contenu", [], "any", false, false, false, 239), 'label');
        yield "
                                ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "contenu", [], "any", false, false, false, 240), 'widget', ["attr" => ["rows" => 14, "id" => "field-contenu"]]);
        yield "
                                ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "contenu", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "errors", [], "any", false, false, false, 241));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 241), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        yield "                            </div>

                        </div>
                    </div>

                    <div class=\"form-actions\">
                        <a href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"btn btn-secondary\">✕ Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success\">💾 Enregistrer</button>
                    </div>

                ";
        // line 252
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), 'form_end');
        yield "

                ";
        // line 255
        yield "                <div class=\"right-panels\">

                    ";
        // line 258
        yield "                    <div class=\"panel\">
                        <div class=\"panel-header purple\">✨ Analyse IA</div>
                        <div class=\"panel-body\">

                            ";
        // line 262
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 262, $this->source); })()), "motsCles", [], "any", false, false, false, 262) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 262, $this->source); })()), "tonIa", [], "any", false, false, false, 262)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 262, $this->source); })()), "resumeIa", [], "any", false, false, false, 262))) {
            // line 263
            yield "                            <div class=\"ai-existing\">
                                <div class=\"ai-existing-title\">✅ Dernière analyse IA enregistrée</div>
                                ";
            // line 265
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 265, $this->source); })()), "motsClesArray", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 266
                yield "                                    <div class=\"tag-list\" style=\"margin-bottom:8px\">
                                        ";
                // line 267
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 267, $this->source); })()), "motsClesArray", [], "any", false, false, false, 267));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 268
                    yield "                                            <span class=\"tag\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                    yield "</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                yield "                                    </div>
                                ";
            }
            // line 272
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 272, $this->source); })()), "tonIa", [], "any", false, false, false, 272)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"tone-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 272, $this->source); })()), "tonIa", [], "any", false, false, false, 272), "html", null, true);
                yield "</span>";
            }
            // line 273
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 273, $this->source); })()), "resumeIa", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div style=\"font-size:12px;color:#475569;margin-top:8px;font-style:italic\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 273, $this->source); })()), "resumeIa", [], "any", false, false, false, 273), "html", null, true);
                yield "</div>";
            }
            // line 274
            yield "                            </div>
                            ";
        }
        // line 276
        yield "
                            <button class=\"btn-ai\" id=\"btnAiAnalyze\" onclick=\"runAiAnalysis()\">
                                ✨ Analyser avec l'IA
                            </button>
                            <div class=\"ai-spinner\" id=\"aiSpinner\">⏳ Analyse en cours…</div>

                            <div class=\"ai-result\" id=\"aiResult\">
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">🏷 Mots-clés détectés</div>
                                    <div class=\"tag-list\" id=\"aiTags\"></div>
                                </div>
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">🎭 Ton de l'article</div>
                                    <div class=\"ai-val\" id=\"aiTon\"></div>
                                </div>
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">📁 Catégorie suggérée</div>
                                    <div class=\"ai-val\" id=\"aiCat\"></div>
                                </div>
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">📝 Résumé SEO</div>
                                    <div class=\"ai-val\" id=\"aiResume\"></div>
                                </div>
                                <button class=\"btn-save-ai\" id=\"btnSaveAi\" onclick=\"saveAiResults()\">
                                    💾 Sauvegarder l'analyse
                                </button>
                            </div>
                        </div>
                    </div>

                    ";
        // line 307
        yield "                    <div class=\"panel\">
                        <div class=\"panel-header blue\">🖼 Suggestions d'images (Unsplash)</div>
                        <div class=\"panel-body\">
                            <button class=\"btn-unsplash\" id=\"btnUnsplash\" onclick=\"fetchUnsplash()\">
                                🔍 Suggérer des images
                            </button>
                            <div class=\"unsplash-spinner\" id=\"unsplashSpinner\">⏳ Recherche en cours…</div>
                            <div class=\"unsplash-grid\" id=\"unsplashGrid\"></div>
                            <div class=\"unsplash-credit\" id=\"unsplashCredit\"></div>
                        </div>
                    </div>

                    ";
        // line 320
        yield "                    <div class=\"panel\">
                        <div class=\"panel-header green\">📊 Score de lisibilité</div>
                        <div class=\"panel-body\">
                            <button class=\"btn-readability\" id=\"btnReadability\" onclick=\"fetchReadability()\">
                                📊 Analyser la lisibilité
                            </button>
                            <div class=\"read-spinner\" id=\"readSpinner\">⏳ Analyse en cours…</div>
                            <div class=\"read-result\" id=\"readResult\"></div>
                        </div>
                    </div>

                </div>";
        // line 332
        yield "            </div>";
        // line 333
        yield "        </div>
    </div>
</div>

<script>
const ARTICLE_ID     = ";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 338, $this->source); })()), "idArticle", [], "any", false, false, false, 338), "html", null, true);
        yield ";
// ─────────────────────────────────────────────────────────────────────────
// UNSPLASH KEY — Go to https://unsplash.com/developers → create a free app
// → copy your \"Access Key\" and paste it below replacing YOUR_UNSPLASH_KEY
// ─────────────────────────────────────────────────────────────────────────
const UNSPLASH_KEY   = 'ju1zHTR4DFJ0ddp-EtIhQGX2ysUCgrFIXeAgIlARWxw';
const AI_ANALYZE_URL = `/api/articles/\${ARTICLE_ID}/ai-analyze`;
const CALL_AI_URL    = `/api/articles/\${ARTICLE_ID}/call-ai`;
const READ_URL       = `/api/articles/\${ARTICLE_ID}/readability`;
const UNSPLASH_URL   = (q, page) => `https://api.unsplash.com/search/photos?query=\${encodeURIComponent(q)}&per_page=6&page=\${page}&orientation=landscape&client_id=\${UNSPLASH_KEY}`;

// ── File upload display ───────────────────────────────────────
const fi = document.getElementById('file-input');
const dn = document.getElementById('file-name-display');
if (fi && dn) {
    fi.addEventListener('change', () => {
        if (fi.files[0]) { dn.textContent = '✅ ' + fi.files[0].name; dn.style.display = 'block'; }
    });
}

// ─────────────────────────────────────────────────────────────
// PANEL 1 — AI ANALYSIS
// HOW IT WORKS:
//   1. User clicks \"Analyser avec l'IA\"
//   2. This function calls /api/articles/{id}/call-ai (your PHP server)
//   3. The PHP server calls Claude API with your ANTHROPIC_API_KEY from .env
//   4. Claude returns keywords, tone, category, SEO summary
//   5. Results are displayed in the panel
//   6. User clicks \"Sauvegarder\" → results are saved to the database
// ─────────────────────────────────────────────────────────────
let aiData = null;

async function runAiAnalysis() {
    // PHP reads content from the database directly — just click Analyze.

    document.getElementById('btnAiAnalyze').disabled = true;
    document.getElementById('aiSpinner').style.display = 'block';
    document.getElementById('aiResult').classList.remove('show');
    document.getElementById('btnSaveAi').style.display = 'none';

    try {
        // This now calls your PHP endpoint instead of Claude directly.
        // The PHP endpoint (callAi in ArticleApiController) handles the Claude API call
        // using the ANTHROPIC_API_KEY from your .env file.
        const res  = await fetch(CALL_AI_URL, { method: 'POST' });
        const json = await res.json();

        if (!json.success) {
            alert('AI Error: ' + json.message);
            return;
        }

        aiData = json.data;

        document.getElementById('aiTags').innerHTML =
            aiData.mots_cles.split(',').map(t => `<span class=\"tag\">\${t.trim()}</span>`).join('');
        document.getElementById('aiTon').innerHTML =
            `<span class=\"tone-badge\">\${aiData.ton_ia}</span>`;
        document.getElementById('aiCat').textContent   = aiData.categorie_ia;
        document.getElementById('aiResume').textContent = aiData.resume_ia;

        document.getElementById('aiResult').classList.add('show');
        document.getElementById('btnSaveAi').style.display = 'block';

    } catch (err) {
        alert('Network error: ' + err.message);
    } finally {
        document.getElementById('btnAiAnalyze').disabled = false;
        document.getElementById('aiSpinner').style.display = 'none';
    }
}

async function saveAiResults() {
    if (!aiData) return;
    try {
        const res  = await fetch(AI_ANALYZE_URL, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(aiData),
        });
        const json = await res.json();
        if (json.success) {
            document.getElementById('btnSaveAi').textContent = '✅ Sauvegardé !';
            document.getElementById('btnSaveAi').style.background = '#15803d';
            setTimeout(() => {
                document.getElementById('btnSaveAi').textContent = '💾 Sauvegarder l\\'analyse';
                document.getElementById('btnSaveAi').style.background = '';
            }, 2500);
        }
    } catch (err) { alert('Save error: ' + err.message); }
}

// ─────────────────────────────────────────────────────────────
// PANEL 2 — UNSPLASH
// HOW IT WORKS:
//   1. User clicks \"Suggérer des images\"
//   2. This function reads the article title + category from the form
//   3. It searches Unsplash using those words as keywords
//   4. 6 photos appear in a grid — user clicks one to select it
//   5. The selected photo URL is stored in a hidden input field
//   6. When the article form is saved, the URL is sent to the server
//
// REQUIREMENT: Replace YOUR_UNSPLASH_KEY at the top of this script
//   with your real Unsplash Access Key from unsplash.com/developers
// ─────────────────────────────────────────────────────────────
let selectedUnsplashUrl = '';

async function fetchUnsplash() {
    if (UNSPLASH_KEY === 'YOUR_UNSPLASH_KEY') {
        alert('Unsplash key not configured.\\n\\nOpen templates/article/edit.html.twig\\nFind the line: const UNSPLASH_KEY = \\'YOUR_UNSPLASH_KEY\\';\\nReplace YOUR_UNSPLASH_KEY with your real key from unsplash.com/developers');
        return;
    }

    const titre     = document.getElementById('field-titre')?.value?.trim() || 'business';
    const categorie = document.getElementById('field-categorie')?.value?.trim() || '';

    // Use meaningful words only — skip short stop words for a better Unsplash query
    const stopWords = ['de','du','des','le','la','les','un','une','the','a','an','and','or','for','of','in','to','with'];
    const titleWords = titre.split(' ').filter(w => w.length > 3 && !stopWords.includes(w.toLowerCase())).slice(0, 2).join(' ');
    const query = [titleWords || titre.split(' ')[0], categorie].filter(Boolean).join(' ');

    // Random page 1-5 so photos are different every click
    const randomPage = Math.floor(Math.random() * 5) + 1;

    document.getElementById('btnUnsplash').disabled = true;
    document.getElementById('unsplashSpinner').style.display = 'block';
    document.getElementById('unsplashGrid').classList.remove('show');

    try {
        const res  = await fetch(UNSPLASH_URL(query, randomPage));
        const json = await res.json();
        const photos = json.results || [];

        if (!photos.length) { alert('No images found for \"' + query + '\". Try changing the article title to something more descriptive.'); return; }

        const grid = document.getElementById('unsplashGrid');
        grid.innerHTML = photos.map((p, i) => `
            <div class=\"unsplash-img\" id=\"uimg-\${i}\" onclick=\"selectUnsplash('\${p.urls.regular}', \${i})\">
                <img src=\"\${p.urls.small}\" alt=\"\${p.alt_description || ''}\">
                <div class=\"unsplash-check\">✓</div>
            </div>`).join('');

        document.getElementById('unsplashCredit').textContent = 'Photos par Unsplash — libres de droits';
        grid.classList.add('show');

    } catch (err) {
        alert('Unsplash error: ' + err.message + '\\nCheck that your UNSPLASH_KEY is correct.');
    } finally {
        document.getElementById('btnUnsplash').disabled = false;
        document.getElementById('unsplashSpinner').style.display = 'none';
    }
}

function selectUnsplash(url, idx) {
    document.querySelectorAll('.unsplash-img').forEach(el => el.classList.remove('selected'));
    document.getElementById('uimg-' + idx).classList.add('selected');
    selectedUnsplashUrl = url;
    document.getElementById('unsplash-chosen-url').value = url;

    const fi = document.getElementById('file-input');
    if (fi) fi.value = '';

    const dn = document.getElementById('file-name-display');
    if (dn) { dn.textContent = '🖼 Image Unsplash sélectionnée'; dn.style.display = 'block'; }
}

// ─────────────────────────────────────────────────────────────
// PANEL 3 — READABILITY
// HOW IT WORKS:
//   1. User clicks \"Analyser la lisibilité\"
//   2. This calls /api/articles/{id}/readability (your PHP server)
//   3. The PHP ReadabilityService calculates a score using Flesch-Kincaid formula
//   4. Score + recommendations are displayed in the panel
//   No external API key needed — everything is calculated in PHP.
// ─────────────────────────────────────────────────────────────
async function fetchReadability() {
    document.getElementById('btnReadability').disabled = true;
    document.getElementById('readSpinner').style.display = 'block';
    document.getElementById('readResult').classList.remove('show');

    try {
        const res  = await fetch(READ_URL);
        const json = await res.json();
        if (!json.success) throw new Error(json.message);
        const d = json.data;

        const recs = (d.recommendations || []).map(r =>
            `<div class=\"rec \${r.type}\"><span>\${r.icon}</span><span>\${r.message}</span></div>`
        ).join('');

        document.getElementById('readResult').innerHTML = `
            <div class=\"score-circle\">
                <div class=\"score-big\" style=\"color:\${d.level_color}\">\${d.level_icon} \${d.score ?? '—'}</div>
                <div class=\"score-level\" style=\"color:\${d.level_color}\">\${d.level}</div>
            </div>
            <div class=\"read-stats\">
                <div class=\"read-stat\"><div class=\"val\">\${d.word_count}</div><div class=\"lbl\">Mots</div></div>
                <div class=\"read-stat\"><div class=\"val\">\${d.sentence_count}</div><div class=\"lbl\">Phrases</div></div>
                <div class=\"read-stat\"><div class=\"val\">\${d.avg_words_per_sentence}</div><div class=\"lbl\">Mots/phrase</div></div>
                <div class=\"read-stat\"><div class=\"val\">\${d.avg_syllables_per_word}</div><div class=\"lbl\">Syl/mot</div></div>
            </div>
            \${recs}`;

        document.getElementById('readResult').classList.add('show');

    } catch (err) {
        document.getElementById('readResult').innerHTML = `<div class=\"rec warning\"><span>⚠️</span><span>Error: \${err.message}</span></div>`;
        document.getElementById('readResult').classList.add('show');
    } finally {
        document.getElementById('btnReadability').disabled = false;
        document.getElementById('readSpinner').style.display = 'none';
    }
}
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
        return "article/edit.html.twig";
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
        return array (  624 => 338,  617 => 333,  615 => 332,  602 => 320,  588 => 307,  556 => 276,  552 => 274,  545 => 273,  538 => 272,  534 => 270,  525 => 268,  521 => 267,  518 => 266,  516 => 265,  512 => 263,  510 => 262,  504 => 258,  500 => 255,  495 => 252,  488 => 248,  480 => 242,  469 => 241,  465 => 240,  461 => 239,  456 => 236,  445 => 235,  434 => 227,  430 => 225,  423 => 221,  420 => 220,  418 => 219,  414 => 218,  409 => 215,  398 => 214,  394 => 213,  390 => 212,  385 => 209,  374 => 208,  370 => 207,  366 => 206,  361 => 203,  350 => 202,  346 => 201,  342 => 200,  337 => 197,  326 => 196,  322 => 195,  318 => 194,  311 => 189,  306 => 188,  300 => 187,  296 => 186,  292 => 185,  283 => 179,  275 => 175,  268 => 170,  256 => 161,  252 => 160,  227 => 138,  223 => 137,  218 => 135,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier l'Article #{{ article.idArticle }}{% endblock %}

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

    .edit-layout { display: grid; grid-template-columns: 1fr 380px; gap: 24px; align-items: start; max-width: 1300px; }

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(251,191,36,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fbbf24; font-size: 16px; }
    .form-body { padding: 28px; }

    .info-banner { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; margin-bottom: 24px; display: flex; gap: 20px; font-size: 12px; color: #64748b; flex-wrap: wrap; }
    .info-banner strong { color: #1e293b; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }
    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }
    .form-group input, .form-group textarea, .form-group select { padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #0f172a; outline: none; transition: border-color 0.2s; background: #fff; width: 100%; }
    .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group textarea { resize: vertical; min-height: 220px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; margin-top: 2px; }

    .current-image { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px; margin-bottom: 10px; display: flex; align-items: center; gap: 12px; }
    .current-image img { width: 70px; height: 50px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 12px; color: #64748b; }
    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 16px; text-align: center; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 12px; color: #94a3b8; margin-top: 4px; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }

    .right-panels { display: flex; flex-direction: column; gap: 20px; }
    .panel { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.04); }
    .panel-header { padding: 14px 18px; font-size: 13px; font-weight: 700; color: #fff; display: flex; align-items: center; gap: 8px; }
    .panel-header.purple { background: #7c3aed; }
    .panel-header.blue   { background: #2563eb; }
    .panel-header.green  { background: #15803d; }
    .panel-body { padding: 18px; }

    .btn-ai { width: 100%; padding: 11px; background: #7c3aed; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 14px; }
    .btn-ai:hover { background: #6d28d9; }
    .btn-ai:disabled { opacity: .6; cursor: not-allowed; }
    .ai-result { display: none; }
    .ai-result.show { display: block; }
    .ai-field { margin-bottom: 12px; }
    .ai-label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 5px; }
    .ai-val { font-size: 13px; color: #1e293b; font-weight: 500; line-height: 1.5; }
    .tag-list { display: flex; flex-wrap: wrap; gap: 6px; }
    .tag { display: inline-block; background: #ede9fe; color: #5b21b6; font-size: 11px; font-weight: 700; padding: 3px 10px; border-radius: 20px; }
    .tone-badge { display: inline-block; background: #dbeafe; color: #1d4ed8; font-size: 12px; font-weight: 700; padding: 4px 12px; border-radius: 20px; }
    .btn-save-ai { width: 100%; padding: 9px; background: #15803d; color: #fff; border: none; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700; cursor: pointer; margin-top: 12px; display: none; transition: background .15s; }
    .btn-save-ai:hover { background: #166534; }
    .ai-spinner { display: none; text-align: center; padding: 16px; color: #7c3aed; font-size: 13px; }

    .btn-unsplash { width: 100%; padding: 11px; background: #2563eb; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 14px; }
    .btn-unsplash:hover { background: #1d4ed8; }
    .btn-unsplash:disabled { opacity: .6; cursor: not-allowed; }
    .unsplash-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; display: none; }
    .unsplash-grid.show { display: grid; }
    .unsplash-img { position: relative; cursor: pointer; border-radius: 8px; overflow: hidden; border: 2.5px solid transparent; transition: border-color .15s, transform .15s; }
    .unsplash-img:hover { border-color: #2563eb; transform: scale(1.02); }
    .unsplash-img.selected { border-color: #22c55e; }
    .unsplash-img img { width: 100%; height: 80px; object-fit: cover; display: block; }
    .unsplash-check { position: absolute; top: 4px; right: 4px; background: #22c55e; color: #fff; border-radius: 50%; width: 20px; height: 20px; display: none; align-items: center; justify-content: center; font-size: 11px; font-weight: 800; }
    .unsplash-img.selected .unsplash-check { display: flex; }
    .unsplash-credit { font-size: 10px; color: #94a3b8; margin-top: 8px; }
    .unsplash-spinner { display: none; text-align: center; padding: 16px; color: #2563eb; font-size: 13px; }

    .btn-readability { width: 100%; padding: 11px; background: #15803d; color: #fff; border: none; border-radius: 9px; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background .15s; margin-bottom: 14px; }
    .btn-readability:hover { background: #166534; }
    .read-result { display: none; }
    .read-result.show { display: block; }
    .score-circle { text-align: center; margin-bottom: 16px; }
    .score-big { font-size: 44px; font-weight: 800; line-height: 1; }
    .score-level { font-size: 13px; font-weight: 700; margin-top: 4px; }
    .read-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 14px; }
    .read-stat { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 12px; text-align: center; }
    .read-stat .val { font-size: 18px; font-weight: 800; color: #0f172a; }
    .read-stat .lbl { font-size: 10px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: .4px; }
    .rec { display: flex; gap: 8px; align-items: flex-start; padding: 9px 11px; border-radius: 8px; font-size: 12px; line-height: 1.5; margin-bottom: 6px; }
    .rec.success { background: #dcfce7; color: #15803d; }
    .rec.warning { background: #fef9c3; color: #854d0e; }
    .rec.info    { background: #eff6ff; color: #1d4ed8; }
    .read-spinner { display: none; text-align: center; padding: 16px; color: #15803d; font-size: 13px; }

    .ai-existing { background: #f5f3ff; border: 1px solid #ddd6fe; border-radius: 10px; padding: 14px 16px; margin-bottom: 12px; }
    .ai-existing-title { font-size: 11px; font-weight: 700; color: #7c3aed; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 8px; }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"{{ path('evenement_index') }}\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"{{ path('frontend_blog_index') }}\" class=\"nav-item\"><span>📝</span> Blog</a>
            <a href=\"{{ path('article_index') }}\" class=\"nav-item active\"><span>📰</span> Articles</a>
            <a href=\"#\" class=\"nav-item\"><span>🛍</span> Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div style=\"font-size:13px;font-weight:600;color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px;color:#64748b;\">Administrateur</div>
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
                <span>MODIFIER #{{ article.idArticle }}</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">
            <a href=\"{{ path('article_index') }}\" class=\"back-link\">← Retour à la liste</a>

            <div class=\"edit-layout\">

                {# ── LEFT: Article form ── #}
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data', 'class': 'form-card'}}) }}

                    <div class=\"form-card-header\">
                        <div class=\"icon\">✏</div>
                        Modifier l'article #{{ article.idArticle }}
                    </div>

                    <div class=\"form-body\">

                        <div class=\"info-banner\">
                            <span>📰 <strong>ID :</strong> #{{ article.idArticle }}</span>
                            <span>👁 <strong>Vues :</strong> {{ article.nombreVues }}</span>
                            {% if article.tonIa %}<span>🎭 <strong>Ton IA :</strong> {{ article.tonIa }}</span>{% endif %}
                            {% if article.isTrending() %}<span>🔥 <strong>Trending !</strong></span>{% endif %}
                        </div>

                        <div class=\"form-grid\">

                            <div class=\"form-group full\">
                                {{ form_label(form.titre) }}
                                {{ form_widget(form.titre, {'attr': {'id': 'field-titre'}}) }}
                                {% for error in form.titre.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.categorie) }}
                                {{ form_widget(form.categorie, {'attr': {'id': 'field-categorie'}}) }}
                                {% for error in form.categorie.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.statut) }}
                                {{ form_widget(form.statut) }}
                                {% for error in form.statut.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.nombre_vues) }}
                                {{ form_widget(form.nombre_vues, {'attr': {'min': 0}}) }}
                                {% for error in form.nombre_vues.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.image_principale) }}
                                {% if article.imagePrincipale %}
                                    <div class=\"current-image\">
                                        <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" alt=\"Image actuelle\">
                                        <span>Image actuelle — choisissez-en une nouvelle pour remplacer</span>
                                    </div>
                                {% endif %}
                                <input type=\"hidden\" id=\"unsplash-chosen-url\" name=\"unsplash_image_url\" value=\"\">
                                <div class=\"file-upload-wrapper\">
                                    {{ form_widget(form.image_principale, {'attr': {'id': 'file-input'}}) }}
                                    <div class=\"file-upload-box\">
                                        <div style=\"font-size:24px;color:#cbd5e1;margin-bottom:4px;\">📎</div>
                                        <p>Cliquez pour choisir une image</p>
                                        <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                                        <div id=\"file-name-display\" style=\"margin-top:6px;font-size:13px;color:#16a34a;font-weight:600;display:none;\"></div>
                                    </div>
                                </div>
                                {% for error in form.image_principale.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                            <div class=\"form-group full\">
                                {{ form_label(form.contenu) }}
                                {{ form_widget(form.contenu, {'attr': {'rows': 14, 'id': 'field-contenu'}}) }}
                                {% for error in form.contenu.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                            </div>

                        </div>
                    </div>

                    <div class=\"form-actions\">
                        <a href=\"{{ path('article_index') }}\" class=\"btn btn-secondary\">✕ Annuler</a>
                        <button type=\"submit\" class=\"btn btn-success\">💾 Enregistrer</button>
                    </div>

                {{ form_end(form) }}

                {# ── RIGHT: Smart Panels ── #}
                <div class=\"right-panels\">

                    {# ══ PANEL 1: AI Analysis ══════════════════════════ #}
                    <div class=\"panel\">
                        <div class=\"panel-header purple\">✨ Analyse IA</div>
                        <div class=\"panel-body\">

                            {% if article.motsCles or article.tonIa or article.resumeIa %}
                            <div class=\"ai-existing\">
                                <div class=\"ai-existing-title\">✅ Dernière analyse IA enregistrée</div>
                                {% if article.motsClesArray %}
                                    <div class=\"tag-list\" style=\"margin-bottom:8px\">
                                        {% for tag in article.motsClesArray %}
                                            <span class=\"tag\">{{ tag }}</span>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                                {% if article.tonIa %}<span class=\"tone-badge\">{{ article.tonIa }}</span>{% endif %}
                                {% if article.resumeIa %}<div style=\"font-size:12px;color:#475569;margin-top:8px;font-style:italic\">{{ article.resumeIa }}</div>{% endif %}
                            </div>
                            {% endif %}

                            <button class=\"btn-ai\" id=\"btnAiAnalyze\" onclick=\"runAiAnalysis()\">
                                ✨ Analyser avec l'IA
                            </button>
                            <div class=\"ai-spinner\" id=\"aiSpinner\">⏳ Analyse en cours…</div>

                            <div class=\"ai-result\" id=\"aiResult\">
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">🏷 Mots-clés détectés</div>
                                    <div class=\"tag-list\" id=\"aiTags\"></div>
                                </div>
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">🎭 Ton de l'article</div>
                                    <div class=\"ai-val\" id=\"aiTon\"></div>
                                </div>
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">📁 Catégorie suggérée</div>
                                    <div class=\"ai-val\" id=\"aiCat\"></div>
                                </div>
                                <div class=\"ai-field\">
                                    <div class=\"ai-label\">📝 Résumé SEO</div>
                                    <div class=\"ai-val\" id=\"aiResume\"></div>
                                </div>
                                <button class=\"btn-save-ai\" id=\"btnSaveAi\" onclick=\"saveAiResults()\">
                                    💾 Sauvegarder l'analyse
                                </button>
                            </div>
                        </div>
                    </div>

                    {# ══ PANEL 2: Unsplash Image Suggestions ═══════════ #}
                    <div class=\"panel\">
                        <div class=\"panel-header blue\">🖼 Suggestions d'images (Unsplash)</div>
                        <div class=\"panel-body\">
                            <button class=\"btn-unsplash\" id=\"btnUnsplash\" onclick=\"fetchUnsplash()\">
                                🔍 Suggérer des images
                            </button>
                            <div class=\"unsplash-spinner\" id=\"unsplashSpinner\">⏳ Recherche en cours…</div>
                            <div class=\"unsplash-grid\" id=\"unsplashGrid\"></div>
                            <div class=\"unsplash-credit\" id=\"unsplashCredit\"></div>
                        </div>
                    </div>

                    {# ══ PANEL 3: Readability Score ════════════════════ #}
                    <div class=\"panel\">
                        <div class=\"panel-header green\">📊 Score de lisibilité</div>
                        <div class=\"panel-body\">
                            <button class=\"btn-readability\" id=\"btnReadability\" onclick=\"fetchReadability()\">
                                📊 Analyser la lisibilité
                            </button>
                            <div class=\"read-spinner\" id=\"readSpinner\">⏳ Analyse en cours…</div>
                            <div class=\"read-result\" id=\"readResult\"></div>
                        </div>
                    </div>

                </div>{# /right-panels #}
            </div>{# /edit-layout #}
        </div>
    </div>
</div>

<script>
const ARTICLE_ID     = {{ article.idArticle }};
// ─────────────────────────────────────────────────────────────────────────
// UNSPLASH KEY — Go to https://unsplash.com/developers → create a free app
// → copy your \"Access Key\" and paste it below replacing YOUR_UNSPLASH_KEY
// ─────────────────────────────────────────────────────────────────────────
const UNSPLASH_KEY   = 'ju1zHTR4DFJ0ddp-EtIhQGX2ysUCgrFIXeAgIlARWxw';
const AI_ANALYZE_URL = `/api/articles/\${ARTICLE_ID}/ai-analyze`;
const CALL_AI_URL    = `/api/articles/\${ARTICLE_ID}/call-ai`;
const READ_URL       = `/api/articles/\${ARTICLE_ID}/readability`;
const UNSPLASH_URL   = (q, page) => `https://api.unsplash.com/search/photos?query=\${encodeURIComponent(q)}&per_page=6&page=\${page}&orientation=landscape&client_id=\${UNSPLASH_KEY}`;

// ── File upload display ───────────────────────────────────────
const fi = document.getElementById('file-input');
const dn = document.getElementById('file-name-display');
if (fi && dn) {
    fi.addEventListener('change', () => {
        if (fi.files[0]) { dn.textContent = '✅ ' + fi.files[0].name; dn.style.display = 'block'; }
    });
}

// ─────────────────────────────────────────────────────────────
// PANEL 1 — AI ANALYSIS
// HOW IT WORKS:
//   1. User clicks \"Analyser avec l'IA\"
//   2. This function calls /api/articles/{id}/call-ai (your PHP server)
//   3. The PHP server calls Claude API with your ANTHROPIC_API_KEY from .env
//   4. Claude returns keywords, tone, category, SEO summary
//   5. Results are displayed in the panel
//   6. User clicks \"Sauvegarder\" → results are saved to the database
// ─────────────────────────────────────────────────────────────
let aiData = null;

async function runAiAnalysis() {
    // PHP reads content from the database directly — just click Analyze.

    document.getElementById('btnAiAnalyze').disabled = true;
    document.getElementById('aiSpinner').style.display = 'block';
    document.getElementById('aiResult').classList.remove('show');
    document.getElementById('btnSaveAi').style.display = 'none';

    try {
        // This now calls your PHP endpoint instead of Claude directly.
        // The PHP endpoint (callAi in ArticleApiController) handles the Claude API call
        // using the ANTHROPIC_API_KEY from your .env file.
        const res  = await fetch(CALL_AI_URL, { method: 'POST' });
        const json = await res.json();

        if (!json.success) {
            alert('AI Error: ' + json.message);
            return;
        }

        aiData = json.data;

        document.getElementById('aiTags').innerHTML =
            aiData.mots_cles.split(',').map(t => `<span class=\"tag\">\${t.trim()}</span>`).join('');
        document.getElementById('aiTon').innerHTML =
            `<span class=\"tone-badge\">\${aiData.ton_ia}</span>`;
        document.getElementById('aiCat').textContent   = aiData.categorie_ia;
        document.getElementById('aiResume').textContent = aiData.resume_ia;

        document.getElementById('aiResult').classList.add('show');
        document.getElementById('btnSaveAi').style.display = 'block';

    } catch (err) {
        alert('Network error: ' + err.message);
    } finally {
        document.getElementById('btnAiAnalyze').disabled = false;
        document.getElementById('aiSpinner').style.display = 'none';
    }
}

async function saveAiResults() {
    if (!aiData) return;
    try {
        const res  = await fetch(AI_ANALYZE_URL, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(aiData),
        });
        const json = await res.json();
        if (json.success) {
            document.getElementById('btnSaveAi').textContent = '✅ Sauvegardé !';
            document.getElementById('btnSaveAi').style.background = '#15803d';
            setTimeout(() => {
                document.getElementById('btnSaveAi').textContent = '💾 Sauvegarder l\\'analyse';
                document.getElementById('btnSaveAi').style.background = '';
            }, 2500);
        }
    } catch (err) { alert('Save error: ' + err.message); }
}

// ─────────────────────────────────────────────────────────────
// PANEL 2 — UNSPLASH
// HOW IT WORKS:
//   1. User clicks \"Suggérer des images\"
//   2. This function reads the article title + category from the form
//   3. It searches Unsplash using those words as keywords
//   4. 6 photos appear in a grid — user clicks one to select it
//   5. The selected photo URL is stored in a hidden input field
//   6. When the article form is saved, the URL is sent to the server
//
// REQUIREMENT: Replace YOUR_UNSPLASH_KEY at the top of this script
//   with your real Unsplash Access Key from unsplash.com/developers
// ─────────────────────────────────────────────────────────────
let selectedUnsplashUrl = '';

async function fetchUnsplash() {
    if (UNSPLASH_KEY === 'YOUR_UNSPLASH_KEY') {
        alert('Unsplash key not configured.\\n\\nOpen templates/article/edit.html.twig\\nFind the line: const UNSPLASH_KEY = \\'YOUR_UNSPLASH_KEY\\';\\nReplace YOUR_UNSPLASH_KEY with your real key from unsplash.com/developers');
        return;
    }

    const titre     = document.getElementById('field-titre')?.value?.trim() || 'business';
    const categorie = document.getElementById('field-categorie')?.value?.trim() || '';

    // Use meaningful words only — skip short stop words for a better Unsplash query
    const stopWords = ['de','du','des','le','la','les','un','une','the','a','an','and','or','for','of','in','to','with'];
    const titleWords = titre.split(' ').filter(w => w.length > 3 && !stopWords.includes(w.toLowerCase())).slice(0, 2).join(' ');
    const query = [titleWords || titre.split(' ')[0], categorie].filter(Boolean).join(' ');

    // Random page 1-5 so photos are different every click
    const randomPage = Math.floor(Math.random() * 5) + 1;

    document.getElementById('btnUnsplash').disabled = true;
    document.getElementById('unsplashSpinner').style.display = 'block';
    document.getElementById('unsplashGrid').classList.remove('show');

    try {
        const res  = await fetch(UNSPLASH_URL(query, randomPage));
        const json = await res.json();
        const photos = json.results || [];

        if (!photos.length) { alert('No images found for \"' + query + '\". Try changing the article title to something more descriptive.'); return; }

        const grid = document.getElementById('unsplashGrid');
        grid.innerHTML = photos.map((p, i) => `
            <div class=\"unsplash-img\" id=\"uimg-\${i}\" onclick=\"selectUnsplash('\${p.urls.regular}', \${i})\">
                <img src=\"\${p.urls.small}\" alt=\"\${p.alt_description || ''}\">
                <div class=\"unsplash-check\">✓</div>
            </div>`).join('');

        document.getElementById('unsplashCredit').textContent = 'Photos par Unsplash — libres de droits';
        grid.classList.add('show');

    } catch (err) {
        alert('Unsplash error: ' + err.message + '\\nCheck that your UNSPLASH_KEY is correct.');
    } finally {
        document.getElementById('btnUnsplash').disabled = false;
        document.getElementById('unsplashSpinner').style.display = 'none';
    }
}

function selectUnsplash(url, idx) {
    document.querySelectorAll('.unsplash-img').forEach(el => el.classList.remove('selected'));
    document.getElementById('uimg-' + idx).classList.add('selected');
    selectedUnsplashUrl = url;
    document.getElementById('unsplash-chosen-url').value = url;

    const fi = document.getElementById('file-input');
    if (fi) fi.value = '';

    const dn = document.getElementById('file-name-display');
    if (dn) { dn.textContent = '🖼 Image Unsplash sélectionnée'; dn.style.display = 'block'; }
}

// ─────────────────────────────────────────────────────────────
// PANEL 3 — READABILITY
// HOW IT WORKS:
//   1. User clicks \"Analyser la lisibilité\"
//   2. This calls /api/articles/{id}/readability (your PHP server)
//   3. The PHP ReadabilityService calculates a score using Flesch-Kincaid formula
//   4. Score + recommendations are displayed in the panel
//   No external API key needed — everything is calculated in PHP.
// ─────────────────────────────────────────────────────────────
async function fetchReadability() {
    document.getElementById('btnReadability').disabled = true;
    document.getElementById('readSpinner').style.display = 'block';
    document.getElementById('readResult').classList.remove('show');

    try {
        const res  = await fetch(READ_URL);
        const json = await res.json();
        if (!json.success) throw new Error(json.message);
        const d = json.data;

        const recs = (d.recommendations || []).map(r =>
            `<div class=\"rec \${r.type}\"><span>\${r.icon}</span><span>\${r.message}</span></div>`
        ).join('');

        document.getElementById('readResult').innerHTML = `
            <div class=\"score-circle\">
                <div class=\"score-big\" style=\"color:\${d.level_color}\">\${d.level_icon} \${d.score ?? '—'}</div>
                <div class=\"score-level\" style=\"color:\${d.level_color}\">\${d.level}</div>
            </div>
            <div class=\"read-stats\">
                <div class=\"read-stat\"><div class=\"val\">\${d.word_count}</div><div class=\"lbl\">Mots</div></div>
                <div class=\"read-stat\"><div class=\"val\">\${d.sentence_count}</div><div class=\"lbl\">Phrases</div></div>
                <div class=\"read-stat\"><div class=\"val\">\${d.avg_words_per_sentence}</div><div class=\"lbl\">Mots/phrase</div></div>
                <div class=\"read-stat\"><div class=\"val\">\${d.avg_syllables_per_word}</div><div class=\"lbl\">Syl/mot</div></div>
            </div>
            \${recs}`;

        document.getElementById('readResult').classList.add('show');

    } catch (err) {
        document.getElementById('readResult').innerHTML = `<div class=\"rec warning\"><span>⚠️</span><span>Error: \${err.message}</span></div>`;
        document.getElementById('readResult').classList.add('show');
    } finally {
        document.getElementById('btnReadability').disabled = false;
        document.getElementById('readSpinner').style.display = 'none';
    }
}
</script>
{% endblock %}", "article/edit.html.twig", "C:\\Users\\MSI\\Desktop\\payment +qrcode\\bizcore\\templates\\article\\edit.html.twig");
    }
}
