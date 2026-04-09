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

/* article/show.html.twig */
class __TwigTemplate_d638711f562019b0ea2ee34a560900b1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; font-size: 14px; }
    .topbar-right { display: flex; align-items: center; gap: 10px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); max-width: 860px; }
    .detail-header { background: #1e293b; padding: 24px 28px; display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; }
    .detail-header-left { display: flex; flex-direction: column; gap: 8px; }

    .detail-tags { display: flex; gap: 8px; flex-wrap: wrap; }
    .tag { padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .tag-green  { background: rgba(34,197,94,0.2);  color: #22c55e; }
    .tag-blue   { background: rgba(14,165,233,0.2); color: #38bdf8; }
    .tag-yellow { background: rgba(251,191,36,0.2); color: #fbbf24; }
    .tag-grey   { background: rgba(148,163,184,0.2); color: #94a3b8; }

    .detail-title { font-size: 22px; font-weight: 700; color: #f1f5f9; line-height: 1.3; }

    .detail-meta-row { display: flex; gap: 20px; flex-wrap: wrap; }
    .meta-item { font-size: 12px; color: #64748b; display: flex; align-items: center; gap: 5px; }
    .meta-item strong { color: #94a3b8; }

    .action-btns-header { display: flex; gap: 8px; flex-shrink: 0; }
    .btn-edit-h { display: inline-flex; align-items: center; gap: 6px; background: #f59e0b; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; text-decoration: none; transition: opacity 0.15s; }
    .btn-edit-h:hover { opacity: 0.85; }
    .btn-del-h  { display: inline-flex; align-items: center; gap: 6px; background: #ef4444; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; border: none; cursor: pointer; transition: opacity 0.15s; font-family: 'DM Sans', sans-serif; }
    .btn-del-h:hover { opacity: 0.85; }

    .detail-img { width: 100%; max-height: 360px; object-fit: cover; display: block; }
    .detail-img-placeholder { height: 180px; display: flex; align-items: center; justify-content: center; font-size: 64px; background: #f1f5f9; }

    .detail-body { padding: 28px; }

    .content-section-title { font-size: 12px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px; }
    .content-text { font-size: 14px; color: #475569; line-height: 1.9; white-space: pre-wrap; }

    .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 24px; padding-top: 24px; border-top: 1px solid #f1f5f9; }
    .meta-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; }
    .meta-box .label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
    .meta-box .value { font-size: 13px; font-weight: 600; color: #1e293b; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }
</style>

<div style=\"display:flex; min-height:100vh;\">

    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\"><span>⊞</span> Dashboard</a>
            <a href=\"#\" class=\"nav-item\"><span>👤</span> Utilisateurs</a>
            <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"nav-item\"><span>📅</span> Événements</a>
            <a href=\"#\" class=\"nav-item\"><span>🎯</span> Coaching</a>
            <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"nav-item\"><span>📝</span> Blog</a>
            <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"nav-item active\"><span>📰</span> Articles</a>
            <a href=\"#\" class=\"nav-item\"><span>🛍</span> Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrateur</div>
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
                <span class=\"home-icon\">⌂</span>
                <span class=\"separator\">/</span>
                <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\">ARTICLES</a>
                <span class=\"separator\">/</span>
                <span>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 122, $this->source); })()), "titre", [], "any", false, false, false, 122)), 0, 40), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 122, $this->source); })()), "titre", [], "any", false, false, false, 122)) > 40)) {
            yield "…";
        }
        yield "</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["success"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 133
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "flashes", ["error"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 136
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "
            <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"back-link\">← Retour aux articles</a>

            <div class=\"detail-card\">
                <div class=\"detail-header\">
                    <div class=\"detail-header-left\">
                        <div class=\"detail-tags\">
                            ";
        // line 145
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 145, $this->source); })()), "statut", [], "any", false, false, false, 145) == "publié")) {
            // line 146
            yield "                                <span class=\"tag tag-green\">✓ Publié</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 147
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 147, $this->source); })()), "statut", [], "any", false, false, false, 147) == "brouillon")) {
            // line 148
            yield "                                <span class=\"tag tag-yellow\">✎ Brouillon</span>
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 149
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 149, $this->source); })()), "statut", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "                                <span class=\"tag tag-grey\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 150, $this->source); })()), "statut", [], "any", false, false, false, 150)), "html", null, true);
            yield "</span>
                            ";
        }
        // line 152
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 152, $this->source); })()), "categorie", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 153
            yield "                                <span class=\"tag tag-blue\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 153, $this->source); })()), "categorie", [], "any", false, false, false, 153), "html", null, true);
            yield "</span>
                            ";
        }
        // line 155
        yield "                            <span class=\"tag tag-grey\">📰 Article #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 155, $this->source); })()), "idArticle", [], "any", false, false, false, 155), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"detail-title\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 157, $this->source); })()), "titre", [], "any", false, false, false, 157), "html", null, true);
        yield "</div>
                        <div class=\"detail-meta-row\">
                            <span class=\"meta-item\"><strong>Vues :</strong> 👁 ";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 159, $this->source); })()), "nombreVues", [], "any", false, false, false, 159), "html", null, true);
        yield "</span>
                            ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 160, $this->source); })()), "categorie", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                                <span class=\"meta-item\"><strong>Catégorie :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 161, $this->source); })()), "categorie", [], "any", false, false, false, 161), "html", null, true);
            yield "</span>
                            ";
        }
        // line 163
        yield "                        </div>
                    </div>
                    <div class=\"action-btns-header\">
                        <a href=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 166, $this->source); })()), "idArticle", [], "any", false, false, false, 166)]), "html", null, true);
        yield "\" class=\"btn-edit-h\">✏ Modifier</a>
                        <form method=\"post\" action=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 167, $this->source); })()), "idArticle", [], "any", false, false, false, 167)]), "html", null, true);
        yield "\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 168, $this->source); })()), "idArticle", [], "any", false, false, false, 168))), "html", null, true);
        yield "\">
                            <button class=\"btn-del-h\" onclick=\"return confirm('Supprimer cet article ?')\">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>

                ";
        // line 174
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 174, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 175
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 175, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 175))), "html", null, true);
            yield "\" class=\"detail-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 175, $this->source); })()), "titre", [], "any", false, false, false, 175), "html", null, true);
            yield "\">
                ";
        } else {
            // line 177
            yield "                    <div class=\"detail-img-placeholder\">📰</div>
                ";
        }
        // line 179
        yield "
                <div class=\"detail-body\">
                    <div class=\"content-section-title\">Contenu de l'article</div>
                    <div class=\"content-text\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 182, $this->source); })()), "contenu", [], "any", false, false, false, 182), "html", null, true);
        yield "</div>

                    <div class=\"meta-grid\">
                        <div class=\"meta-box\">
                            <div class=\"label\">Catégorie</div>
                            <div class=\"value\">";
        // line 187
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "categorie", [], "any", true, true, false, 187) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 187, $this->source); })()), "categorie", [], "any", false, false, false, 187)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 187, $this->source); })()), "categorie", [], "any", false, false, false, 187), "html", null, true)) : ("—"));
        yield "</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Statut</div>
                            <div class=\"value\">";
        // line 191
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 191, $this->source); })()), "statut", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 191, $this->source); })()), "statut", [], "any", false, false, false, 191)), "html", null, true)) : ("—"));
        yield "</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Nombre de vues</div>
                            <div class=\"value\">👁 ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 195, $this->source); })()), "nombreVues", [], "any", false, false, false, 195), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Identifiant</div>
                            <div class=\"value\">#";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 199, $this->source); })()), "idArticle", [], "any", false, false, false, 199), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/show.html.twig";
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
        return array (  390 => 199,  383 => 195,  376 => 191,  369 => 187,  361 => 182,  356 => 179,  352 => 177,  344 => 175,  342 => 174,  333 => 168,  329 => 167,  325 => 166,  320 => 163,  314 => 161,  312 => 160,  308 => 159,  303 => 157,  297 => 155,  291 => 153,  288 => 152,  282 => 150,  280 => 149,  277 => 148,  275 => 147,  272 => 146,  270 => 145,  261 => 139,  258 => 138,  249 => 136,  244 => 135,  235 => 133,  231 => 132,  215 => 122,  210 => 120,  183 => 96,  179 => 95,  174 => 93,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.titre }}{% endblock %}

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
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; font-size: 14px; }
    .topbar-right { display: flex; align-items: center; gap: 10px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); max-width: 860px; }
    .detail-header { background: #1e293b; padding: 24px 28px; display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; }
    .detail-header-left { display: flex; flex-direction: column; gap: 8px; }

    .detail-tags { display: flex; gap: 8px; flex-wrap: wrap; }
    .tag { padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .tag-green  { background: rgba(34,197,94,0.2);  color: #22c55e; }
    .tag-blue   { background: rgba(14,165,233,0.2); color: #38bdf8; }
    .tag-yellow { background: rgba(251,191,36,0.2); color: #fbbf24; }
    .tag-grey   { background: rgba(148,163,184,0.2); color: #94a3b8; }

    .detail-title { font-size: 22px; font-weight: 700; color: #f1f5f9; line-height: 1.3; }

    .detail-meta-row { display: flex; gap: 20px; flex-wrap: wrap; }
    .meta-item { font-size: 12px; color: #64748b; display: flex; align-items: center; gap: 5px; }
    .meta-item strong { color: #94a3b8; }

    .action-btns-header { display: flex; gap: 8px; flex-shrink: 0; }
    .btn-edit-h { display: inline-flex; align-items: center; gap: 6px; background: #f59e0b; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; text-decoration: none; transition: opacity 0.15s; }
    .btn-edit-h:hover { opacity: 0.85; }
    .btn-del-h  { display: inline-flex; align-items: center; gap: 6px; background: #ef4444; color: #fff; padding: 8px 16px; border-radius: 7px; font-size: 13px; font-weight: 600; border: none; cursor: pointer; transition: opacity 0.15s; font-family: 'DM Sans', sans-serif; }
    .btn-del-h:hover { opacity: 0.85; }

    .detail-img { width: 100%; max-height: 360px; object-fit: cover; display: block; }
    .detail-img-placeholder { height: 180px; display: flex; align-items: center; justify-content: center; font-size: 64px; background: #f1f5f9; }

    .detail-body { padding: 28px; }

    .content-section-title { font-size: 12px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 12px; }
    .content-text { font-size: 14px; color: #475569; line-height: 1.9; white-space: pre-wrap; }

    .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 24px; padding-top: 24px; border-top: 1px solid #f1f5f9; }
    .meta-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 9px; padding: 12px 16px; }
    .meta-box .label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
    .meta-box .value { font-size: 13px; font-weight: 600; color: #1e293b; }

    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }
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
                    <div class=\"user-name\">Admin</div>
                    <div class=\"user-role\">Administrateur</div>
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
                <span class=\"home-icon\">⌂</span>
                <span class=\"separator\">/</span>
                <a href=\"{{ path('article_index') }}\">ARTICLES</a>
                <span class=\"separator\">/</span>
                <span>{{ article.titre|upper|slice(0, 40) }}{% if article.titre|length > 40 %}…{% endif %}</span>
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

            <a href=\"{{ path('article_index') }}\" class=\"back-link\">← Retour aux articles</a>

            <div class=\"detail-card\">
                <div class=\"detail-header\">
                    <div class=\"detail-header-left\">
                        <div class=\"detail-tags\">
                            {% if article.statut == 'publié' %}
                                <span class=\"tag tag-green\">✓ Publié</span>
                            {% elseif article.statut == 'brouillon' %}
                                <span class=\"tag tag-yellow\">✎ Brouillon</span>
                            {% elseif article.statut %}
                                <span class=\"tag tag-grey\">{{ article.statut|capitalize }}</span>
                            {% endif %}
                            {% if article.categorie %}
                                <span class=\"tag tag-blue\">{{ article.categorie }}</span>
                            {% endif %}
                            <span class=\"tag tag-grey\">📰 Article #{{ article.idArticle }}</span>
                        </div>
                        <div class=\"detail-title\">{{ article.titre }}</div>
                        <div class=\"detail-meta-row\">
                            <span class=\"meta-item\"><strong>Vues :</strong> 👁 {{ article.nombreVues }}</span>
                            {% if article.categorie %}
                                <span class=\"meta-item\"><strong>Catégorie :</strong> {{ article.categorie }}</span>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"action-btns-header\">
                        <a href=\"{{ path('article_edit', {'id': article.idArticle}) }}\" class=\"btn-edit-h\">✏ Modifier</a>
                        <form method=\"post\" action=\"{{ path('article_delete', {'id': article.idArticle}) }}\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.idArticle) }}\">
                            <button class=\"btn-del-h\" onclick=\"return confirm('Supprimer cet article ?')\">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>

                {% if article.imagePrincipale %}
                    <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" class=\"detail-img\" alt=\"{{ article.titre }}\">
                {% else %}
                    <div class=\"detail-img-placeholder\">📰</div>
                {% endif %}

                <div class=\"detail-body\">
                    <div class=\"content-section-title\">Contenu de l'article</div>
                    <div class=\"content-text\">{{ article.contenu }}</div>

                    <div class=\"meta-grid\">
                        <div class=\"meta-box\">
                            <div class=\"label\">Catégorie</div>
                            <div class=\"value\">{{ article.categorie ?? '—' }}</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Statut</div>
                            <div class=\"value\">{{ article.statut ? article.statut|capitalize : '—' }}</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Nombre de vues</div>
                            <div class=\"value\">👁 {{ article.nombreVues }}</div>
                        </div>
                        <div class=\"meta-box\">
                            <div class=\"label\">Identifiant</div>
                            <div class=\"value\">#{{ article.idArticle }}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}
", "article/show.html.twig", "C:\\Users\\melek\\Downloads\\wetransfer_esprit-pidev-web-3a7-2026-bizcore-main-zip_2026-04-09_1330\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\templates\\article\\show.html.twig");
    }
}
