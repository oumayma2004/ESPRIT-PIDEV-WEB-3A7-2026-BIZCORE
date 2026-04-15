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

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); max-width: 860px; }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(251,191,36,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fbbf24; font-size: 16px; }
    .form-body { padding: 28px; }

    .info-banner { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; margin-bottom: 24px; display: flex; gap: 20px; font-size: 12px; color: #64748b; flex-wrap: wrap; }
    .info-banner strong { color: #1e293b; }

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
    .form-group input.is-invalid, .form-group textarea.is-invalid, .form-group select.is-invalid { border-color: #ef4444 !important; box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important; }
    .form-group textarea { resize: vertical; min-height: 200px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }
    .current-image { display: flex; align-items: center; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; margin-bottom: 10px; }
    .current-image img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 13px; color: #64748b; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
    <div class=\"sidebar-section\">Gestion</div>

    <a href=\"#\" class=\"nav-item\">
        <span>⊞</span> Dashboard
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>👤</span> Utilisateurs
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>📅</span> Événements
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>🎯</span> Coaching
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>📝</span> Blog
    </a>

    <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"nav-item active\">
        <span>📰</span> Articles
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>🛍</span> Produits/Commandes
    </a>
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
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">ARTICLES</a> /
                <span>MODIFIER #";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 140, $this->source); })()), "idArticle", [], "any", false, false, false, 140), "html", null, true);
        yield "</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "flashes", ["success"], "method", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 151
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "flashes", ["error"], "method", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 154
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "
            <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"back-link\">← Retour à la liste</a>

            ";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data", "class" => "form-card"]]);
        yield "

                <div class=\"form-card-header\">
                    <div class=\"icon\">✏️</div>
                    Modifier l'article — ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 163, $this->source); })()), "titre", [], "any", false, false, false, 163), "html", null, true);
        yield "
                </div>

                <div class=\"form-body\">

                    <div class=\"info-banner\">
                        <span><strong>ID :</strong> #";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 169, $this->source); })()), "idArticle", [], "any", false, false, false, 169), "html", null, true);
        yield "</span>
                        <span><strong>Vues actuelles :</strong> 👁 ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 170, $this->source); })()), "nombreVues", [], "any", false, false, false, 170), "html", null, true);
        yield "</span>
                        ";
        // line 171
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 171, $this->source); })()), "categorie", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span><strong>Catégorie :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 171, $this->source); })()), "categorie", [], "any", false, false, false, 171), "html", null, true);
            yield "</span>";
        }
        // line 172
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 172, $this->source); })()), "statut", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span><strong>Statut :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 172, $this->source); })()), "statut", [], "any", false, false, false, 172)), "html", null, true);
            yield "</span>";
        }
        // line 173
        yield "                    </div>

                    ";
        // line 175
        $context["hasErrors"] = false;
        // line 176
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 176), "errors", [], "any", false, false, false, 176)) > 0)) {
                $context["hasErrors"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "                    ";
        if ((($tmp = (isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 177, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "                    <div class=\"error-summary\">
                        <strong>⚠️ Veuillez corriger les erreurs suivantes :</strong>
                        <ul>
                            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 182
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 182), "errors", [], "any", false, false, false, 182));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 183
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 183), "label", [], "any", false, false, false, 183), "html", null, true);
                    yield " : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 183), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "                        </ul>
                    </div>
                    ";
        }
        // line 189
        yield "
                    <div class=\"form-grid\">

                        <div class=\"form-group full\">
                            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "titre", [], "any", false, false, false, 193), 'label');
        yield "
                            ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "titre", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "titre", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "errors", [], "any", false, false, false, 194)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "titre", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "errors", [], "any", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 195), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "categorie", [], "any", false, false, false, 199), 'label');
        yield "
                            ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "categorie", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "categorie", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "errors", [], "any", false, false, false, 200)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "categorie", [], "any", false, false, false, 201), "vars", [], "any", false, false, false, 201), "errors", [], "any", false, false, false, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 201), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "statut", [], "any", false, false, false, 205), 'label');
        yield "
                            ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "statut", [], "any", false, false, false, 206), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "statut", [], "any", false, false, false, 206), "vars", [], "any", false, false, false, 206), "errors", [], "any", false, false, false, 206)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "statut", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "errors", [], "any", false, false, false, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 207), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "nombre_vues", [], "any", false, false, false, 211), 'label');
        yield "
                            ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "nombre_vues", [], "any", false, false, false, 212), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "nombre_vues", [], "any", false, false, false, 212), "vars", [], "any", false, false, false, 212), "errors", [], "any", false, false, false, 212)) > 0)) ? ("is-invalid") : ("")), "min" => 0]]);
        yield "
                            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "nombre_vues", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "errors", [], "any", false, false, false, 213));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 213), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "image_principale", [], "any", false, false, false, 217), 'label');
        yield "
                            ";
        // line 218
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 218, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "                                <div class=\"current-image\">
                                    <img src=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 220, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 220))), "html", null, true);
            yield "\" alt=\"Image actuelle\">
                                    <span>Image actuelle — choisissez-en une nouvelle pour remplacer</span>
                                </div>
                            ";
        }
        // line 224
        yield "                            <div class=\"file-upload-wrapper\">
                                ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "image_principale", [], "any", false, false, false, 225), 'widget');
        yield "
                                <div class=\"file-upload-box\">
                                    <div style=\"font-size:28px; color:#cbd5e1; margin-bottom:6px;\">📎</div>
                                    <p>Cliquez pour choisir une image</p>
                                    <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                                    <div class=\"file-name\" id=\"file-name-display\"></div>
                                </div>
                            </div>
                            ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "image_principale", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "errors", [], "any", false, false, false, 233));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 233), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "                        </div>

                        <div class=\"form-group full\">
                            ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "contenu", [], "any", false, false, false, 237), 'label');
        yield "
                            ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "contenu", [], "any", false, false, false, 238), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "contenu", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "errors", [], "any", false, false, false, 238)) > 0)) ? ("is-invalid") : ("")), "rows" => 12]]);
        yield "
                            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "contenu", [], "any", false, false, false, 239), "vars", [], "any", false, false, false, 239), "errors", [], "any", false, false, false, 239));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 239), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                        </div>

                    </div>
                </div>

                <div class=\"form-actions\">
                    <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"btn btn-secondary\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn btn-success\">💾 Enregistrer les modifications</button>
                </div>

            ";
        // line 250
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

<script>
    const fi = document.querySelector('input[type=\"file\"]');
    const dn = document.getElementById('file-name-display');
    if (fi && dn) {
        fi.addEventListener('change', function () {
            if (this.files && this.files[0]) { dn.textContent = '✅ ' + this.files[0].name; dn.style.display = 'block'; }
        });
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
        return array (  553 => 250,  546 => 246,  538 => 240,  527 => 239,  523 => 238,  519 => 237,  514 => 234,  503 => 233,  492 => 225,  489 => 224,  482 => 220,  479 => 219,  477 => 218,  473 => 217,  468 => 214,  457 => 213,  453 => 212,  449 => 211,  444 => 208,  433 => 207,  429 => 206,  425 => 205,  420 => 202,  409 => 201,  405 => 200,  401 => 199,  396 => 196,  385 => 195,  381 => 194,  377 => 193,  371 => 189,  366 => 186,  360 => 185,  349 => 183,  344 => 182,  340 => 181,  335 => 178,  332 => 177,  320 => 176,  318 => 175,  314 => 173,  307 => 172,  301 => 171,  297 => 170,  293 => 169,  284 => 163,  277 => 159,  272 => 157,  269 => 156,  260 => 154,  255 => 153,  246 => 151,  242 => 150,  229 => 140,  225 => 139,  195 => 112,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
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

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); max-width: 860px; }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(251,191,36,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fbbf24; font-size: 16px; }
    .form-body { padding: 28px; }

    .info-banner { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; margin-bottom: 24px; display: flex; gap: 20px; font-size: 12px; color: #64748b; flex-wrap: wrap; }
    .info-banner strong { color: #1e293b; }

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
    .form-group input.is-invalid, .form-group textarea.is-invalid, .form-group select.is-invalid { border-color: #ef4444 !important; box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important; }
    .form-group textarea { resize: vertical; min-height: 200px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }
    .current-image { display: flex; align-items: center; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; margin-bottom: 10px; }
    .current-image img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 13px; color: #64748b; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }
</style>

<div style=\"display:flex; min-height:100vh;\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
    <div class=\"sidebar-section\">Gestion</div>

    <a href=\"#\" class=\"nav-item\">
        <span>⊞</span> Dashboard
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>👤</span> Utilisateurs
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>📅</span> Événements
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>🎯</span> Coaching
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>📝</span> Blog
    </a>

    <a href=\"{{ path('article_index') }}\" class=\"nav-item active\">
        <span>📰</span> Articles
    </a>

    <a href=\"#\" class=\"nav-item\">
        <span>🛍</span> Produits/Commandes
    </a>
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
                <span>MODIFIER #{{ article.idArticle }}</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            {% for msg in app.flashes('success') %}
                <div class=\"flash flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash flash-error\">❌ {{ msg }}</div>
            {% endfor %}

            <a href=\"{{ path('article_index') }}\" class=\"back-link\">← Retour à la liste</a>

            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data', 'class': 'form-card'}}) }}

                <div class=\"form-card-header\">
                    <div class=\"icon\">✏️</div>
                    Modifier l'article — {{ article.titre }}
                </div>

                <div class=\"form-body\">

                    <div class=\"info-banner\">
                        <span><strong>ID :</strong> #{{ article.idArticle }}</span>
                        <span><strong>Vues actuelles :</strong> 👁 {{ article.nombreVues }}</span>
                        {% if article.categorie %}<span><strong>Catégorie :</strong> {{ article.categorie }}</span>{% endif %}
                        {% if article.statut %}<span><strong>Statut :</strong> {{ article.statut|capitalize }}</span>{% endif %}
                    </div>

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
                            {{ form_widget(form.titre, {'attr': {'class': form.titre.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                            {% for error in form.titre.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.categorie) }}
                            {{ form_widget(form.categorie, {'attr': {'class': form.categorie.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
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
                            {% if article.imagePrincipale %}
                                <div class=\"current-image\">
                                    <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" alt=\"Image actuelle\">
                                    <span>Image actuelle — choisissez-en une nouvelle pour remplacer</span>
                                </div>
                            {% endif %}
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
                            {{ form_widget(form.contenu, {'attr': {'class': form.contenu.vars.errors|length > 0 ? 'is-invalid' : '', 'rows': 12}}) }}
                            {% for error in form.contenu.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                    </div>
                </div>

                <div class=\"form-actions\">
                    <a href=\"{{ path('article_index') }}\" class=\"btn btn-secondary\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn btn-success\">💾 Enregistrer les modifications</button>
                </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>

<script>
    const fi = document.querySelector('input[type=\"file\"]');
    const dn = document.getElementById('file-name-display');
    if (fi && dn) {
        fi.addEventListener('change', function () {
            if (this.files && this.files[0]) { dn.textContent = '✅ ' + this.files[0].name; dn.style.display = 'block'; }
        });
    }
</script>
{% endblock %}
", "article/edit.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\article\\edit.html.twig");
    }
}
