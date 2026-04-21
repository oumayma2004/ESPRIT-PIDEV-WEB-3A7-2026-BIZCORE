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

/* signalement/new.html.twig */
class __TwigTemplate_abbb534c02b6653469db1a1377ca3574 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Signaler un article — Bizcore</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing:border-box; margin:0; padding:0; }
        body { font-family:'Inter',sans-serif; background:#f8fafc; color:#1e293b; }
        .navbar { background:#fff; border-bottom:1px solid #e2e8f0; padding:0 40px; height:64px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; box-shadow:0 1px 3px rgba(0,0,0,.06); }
        .nav-brand { font-size:20px; font-weight:800; color:#0f172a; }
        .nav-brand span { color:#22c55e; }
        .nav-links a { font-size:14px; font-weight:500; color:#64748b; text-decoration:none; margin-left:28px; }
        .nav-links a:hover { color:#0f172a; }

        .page { max-width:620px; margin:0 auto; padding:40px 24px 80px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:24px; }
        .back-link:hover { color:#22c55e; }

        /* Article preview banner */
        .article-banner { background:#1e293b; border-radius:14px; padding:18px 22px; margin-bottom:28px; display:flex; align-items:center; gap:14px; }
        .article-banner-icon { font-size:28px; flex-shrink:0; }
        .article-banner-label { font-size:11px; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.5px; margin-bottom:4px; }
        .article-banner-title { font-size:15px; font-weight:700; color:#f1f5f9; }
        ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "categorie", [], "any", true, true, false, 27) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27))) {
            // line 28
            yield "        .article-banner-cat { display:inline-block; background:rgba(34,197,94,.15); color:#22c55e; font-size:11px; font-weight:700; padding:2px 9px; border-radius:20px; margin-top:6px; }
        ";
        }
        // line 30
        yield "
        /* Warning box */
        .warning-box { background:#fef9c3; border:1.5px solid #fde047; border-radius:12px; padding:14px 18px; margin-bottom:24px; display:flex; gap:12px; align-items:flex-start; }
        .warning-box p { font-size:13px; color:#854d0e; line-height:1.6; }

        /* Form card */
        .form-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; padding:32px; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .form-card-title { font-size:18px; font-weight:800; color:#0f172a; margin-bottom:24px; display:flex; align-items:center; gap:10px; }

        .field { margin-bottom:20px; }
        .field label { display:block; font-size:13px; font-weight:600; color:#374151; margin-bottom:7px; }
        .field select, .field textarea {
            width:100%; padding:11px 14px;
            border:1.5px solid #e2e8f0; border-radius:10px;
            font-family:'Inter',sans-serif; font-size:14px; color:#1e293b;
            background:#f8fafc; outline:none; transition:border-color .15s;
        }
        .field select:focus, .field textarea:focus { border-color:#22c55e; background:#fff; }
        .field textarea { resize:vertical; }
        .field .error { color:#dc2626; font-size:12px; margin-top:5px; }
        .field .hint  { color:#94a3b8; font-size:12px; margin-top:5px; }

        .form-footer { display:flex; gap:12px; margin-top:28px; flex-wrap:wrap; }
        .btn-submit { flex:1; padding:12px 24px; background:#ef4444; color:#fff; border:none; border-radius:10px; font-family:'Inter',sans-serif; font-size:15px; font-weight:700; cursor:pointer; transition:background .15s; }
        .btn-submit:hover { background:#dc2626; }
        .btn-cancel { padding:12px 24px; background:#f1f5f9; color:#475569; border:none; border-radius:10px; font-family:'Inter',sans-serif; font-size:15px; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; transition:background .15s; }
        .btn-cancel:hover { background:#e2e8f0; }

        footer { background:#0f172a; color:#64748b; text-align:center; padding:24px; font-size:13px; margin-top:60px; }
        footer span { color:#22c55e; }
    </style>
</head>
<body>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\">Blog</a>
        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        yield "\">Mes signalements</a>
    </div>
</nav>

<div class=\"page\">
    <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 73, $this->source); })()), "idArticle", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour à l'article</a>

    ";
        // line 76
        yield "    <div class=\"article-banner\">
        <span class=\"article-banner-icon\">📰</span>
        <div>
            <div class=\"article-banner-label\">Article signalé</div>
            <div class=\"article-banner-title\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 80, $this->source); })()), "titre", [], "any", false, false, false, 80), "html", null, true);
        yield "</div>
            ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 81, $this->source); })()), "categorie", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                <span class=\"article-banner-cat\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 82, $this->source); })()), "categorie", [], "any", false, false, false, 82), "html", null, true);
            yield "</span>
            ";
        }
        // line 84
        yield "        </div>
    </div>

    <div class=\"warning-box\">
        <span style=\"font-size:20px;flex-shrink:0\">⚠️</span>
        <p>Les signalements abusifs ou répétés peuvent entraîner la suspension de votre compte. Merci de n'utiliser cette fonctionnalité que pour du contenu réellement problématique.</p>
    </div>

    <div class=\"form-card\">
        <div class=\"form-card-title\">🚩 Signaler cet article</div>

        ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start');
        yield "

            <div class=\"field\">
                ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "motif", [], "any", false, false, false, 98), 'label');
        yield "
                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "motif", [], "any", false, false, false, 99), 'widget');
        yield "
                ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "motif", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "                    <div class=\"error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "motif", [], "any", false, false, false, 101), 'errors');
            yield "</div>
                ";
        }
        // line 103
        yield "            </div>

            <div class=\"field\">
                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "description", [], "any", false, false, false, 106), 'label');
        yield "
                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "description", [], "any", false, false, false, 107), 'widget', ["attr" => ["rows" => 5]]);
        yield "
                <div class=\"hint\">Optionnel — Expliquez en détail le problème que vous avez constaté (max. 1000 caractères).</div>
                ";
        // line 109
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "description", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "errors", [], "any", false, false, false, 109)) > 0)) {
            // line 110
            yield "                    <div class=\"error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "description", [], "any", false, false, false, 110), 'errors');
            yield "</div>
                ";
        }
        // line 112
        yield "            </div>

            <div class=\"form-footer\">
                <a href=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 115, $this->source); })()), "idArticle", [], "any", false, false, false, 115)]), "html", null, true);
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">🚩 Soumettre le signalement</button>
            </div>

        ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signalement/new.html.twig";
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
        return array (  222 => 119,  215 => 115,  210 => 112,  204 => 110,  202 => 109,  197 => 107,  193 => 106,  188 => 103,  182 => 101,  180 => 100,  176 => 99,  172 => 98,  166 => 95,  153 => 84,  147 => 82,  145 => 81,  141 => 80,  135 => 76,  130 => 73,  122 => 68,  118 => 67,  79 => 30,  75 => 28,  73 => 27,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Signaler un article — Bizcore</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing:border-box; margin:0; padding:0; }
        body { font-family:'Inter',sans-serif; background:#f8fafc; color:#1e293b; }
        .navbar { background:#fff; border-bottom:1px solid #e2e8f0; padding:0 40px; height:64px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; box-shadow:0 1px 3px rgba(0,0,0,.06); }
        .nav-brand { font-size:20px; font-weight:800; color:#0f172a; }
        .nav-brand span { color:#22c55e; }
        .nav-links a { font-size:14px; font-weight:500; color:#64748b; text-decoration:none; margin-left:28px; }
        .nav-links a:hover { color:#0f172a; }

        .page { max-width:620px; margin:0 auto; padding:40px 24px 80px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:24px; }
        .back-link:hover { color:#22c55e; }

        /* Article preview banner */
        .article-banner { background:#1e293b; border-radius:14px; padding:18px 22px; margin-bottom:28px; display:flex; align-items:center; gap:14px; }
        .article-banner-icon { font-size:28px; flex-shrink:0; }
        .article-banner-label { font-size:11px; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.5px; margin-bottom:4px; }
        .article-banner-title { font-size:15px; font-weight:700; color:#f1f5f9; }
        {% if article.categorie is defined and article.categorie %}
        .article-banner-cat { display:inline-block; background:rgba(34,197,94,.15); color:#22c55e; font-size:11px; font-weight:700; padding:2px 9px; border-radius:20px; margin-top:6px; }
        {% endif %}

        /* Warning box */
        .warning-box { background:#fef9c3; border:1.5px solid #fde047; border-radius:12px; padding:14px 18px; margin-bottom:24px; display:flex; gap:12px; align-items:flex-start; }
        .warning-box p { font-size:13px; color:#854d0e; line-height:1.6; }

        /* Form card */
        .form-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; padding:32px; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .form-card-title { font-size:18px; font-weight:800; color:#0f172a; margin-bottom:24px; display:flex; align-items:center; gap:10px; }

        .field { margin-bottom:20px; }
        .field label { display:block; font-size:13px; font-weight:600; color:#374151; margin-bottom:7px; }
        .field select, .field textarea {
            width:100%; padding:11px 14px;
            border:1.5px solid #e2e8f0; border-radius:10px;
            font-family:'Inter',sans-serif; font-size:14px; color:#1e293b;
            background:#f8fafc; outline:none; transition:border-color .15s;
        }
        .field select:focus, .field textarea:focus { border-color:#22c55e; background:#fff; }
        .field textarea { resize:vertical; }
        .field .error { color:#dc2626; font-size:12px; margin-top:5px; }
        .field .hint  { color:#94a3b8; font-size:12px; margin-top:5px; }

        .form-footer { display:flex; gap:12px; margin-top:28px; flex-wrap:wrap; }
        .btn-submit { flex:1; padding:12px 24px; background:#ef4444; color:#fff; border:none; border-radius:10px; font-family:'Inter',sans-serif; font-size:15px; font-weight:700; cursor:pointer; transition:background .15s; }
        .btn-submit:hover { background:#dc2626; }
        .btn-cancel { padding:12px 24px; background:#f1f5f9; color:#475569; border:none; border-radius:10px; font-family:'Inter',sans-serif; font-size:15px; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; transition:background .15s; }
        .btn-cancel:hover { background:#e2e8f0; }

        footer { background:#0f172a; color:#64748b; text-align:center; padding:24px; font-size:13px; margin-top:60px; }
        footer span { color:#22c55e; }
    </style>
</head>
<body>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"{{ path('frontend_blog_index') }}\">Blog</a>
        <a href=\"{{ path('signalement_index') }}\">Mes signalements</a>
    </div>
</nav>

<div class=\"page\">
    <a href=\"{{ path('frontend_blog_show', {id: article.idArticle}) }}\" class=\"back-link\">← Retour à l'article</a>

    {# Article preview #}
    <div class=\"article-banner\">
        <span class=\"article-banner-icon\">📰</span>
        <div>
            <div class=\"article-banner-label\">Article signalé</div>
            <div class=\"article-banner-title\">{{ article.titre }}</div>
            {% if article.categorie %}
                <span class=\"article-banner-cat\">{{ article.categorie }}</span>
            {% endif %}
        </div>
    </div>

    <div class=\"warning-box\">
        <span style=\"font-size:20px;flex-shrink:0\">⚠️</span>
        <p>Les signalements abusifs ou répétés peuvent entraîner la suspension de votre compte. Merci de n'utiliser cette fonctionnalité que pour du contenu réellement problématique.</p>
    </div>

    <div class=\"form-card\">
        <div class=\"form-card-title\">🚩 Signaler cet article</div>

        {{ form_start(form) }}

            <div class=\"field\">
                {{ form_label(form.motif) }}
                {{ form_widget(form.motif) }}
                {% if form.motif.vars.errors|length > 0 %}
                    <div class=\"error\">{{ form_errors(form.motif) }}</div>
                {% endif %}
            </div>

            <div class=\"field\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description, {attr: {rows: 5}}) }}
                <div class=\"hint\">Optionnel — Expliquez en détail le problème que vous avez constaté (max. 1000 caractères).</div>
                {% if form.description.vars.errors|length > 0 %}
                    <div class=\"error\">{{ form_errors(form.description) }}</div>
                {% endif %}
            </div>

            <div class=\"form-footer\">
                <a href=\"{{ path('frontend_blog_show', {id: article.idArticle}) }}\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">🚩 Soumettre le signalement</button>
            </div>

        {{ form_end(form) }}
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
</body>
</html>", "signalement/new.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\signalement\\new.html.twig");
    }
}
