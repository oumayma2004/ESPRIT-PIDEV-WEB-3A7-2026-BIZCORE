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

/* signalement/edit.html.twig */
class __TwigTemplate_5eab796f639b51efb73af4def80111f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier mon signalement — Bizcore</title>
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
        .article-banner { background:#1e293b; border-radius:14px; padding:18px 22px; margin-bottom:28px; display:flex; align-items:center; gap:14px; }
        .article-banner-icon { font-size:28px; flex-shrink:0; }
        .article-banner-label { font-size:11px; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.5px; margin-bottom:4px; }
        .article-banner-title { font-size:15px; font-weight:700; color:#f1f5f9; }
        .form-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; padding:32px; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .form-card-title { font-size:18px; font-weight:800; color:#0f172a; margin-bottom:24px; display:flex; align-items:center; gap:10px; }
        .field { margin-bottom:20px; }
        .field label { display:block; font-size:13px; font-weight:600; color:#374151; margin-bottom:7px; }
        .field select, .field textarea { width:100%; padding:11px 14px; border:1.5px solid #e2e8f0; border-radius:10px; font-family:'Inter',sans-serif; font-size:14px; color:#1e293b; background:#f8fafc; outline:none; transition:border-color .15s; }
        .field select:focus, .field textarea:focus { border-color:#22c55e; background:#fff; }
        .field textarea { resize:vertical; }
        .field .error { color:#dc2626; font-size:12px; margin-top:5px; }
        .field .hint  { color:#94a3b8; font-size:12px; margin-top:5px; }
        .form-footer { display:flex; gap:12px; margin-top:28px; flex-wrap:wrap; }
        .btn-submit { flex:1; padding:12px 24px; background:#f59e0b; color:#fff; border:none; border-radius:10px; font-family:'Inter',sans-serif; font-size:15px; font-weight:700; cursor:pointer; transition:background .15s; }
        .btn-submit:hover { background:#d97706; }
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
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\">Blog</a>
        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        yield "\">Mes signalements</a>
    </div>
</nav>

<div class=\"page\">
    <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 53, $this->source); })()), "idSignalement", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour au signalement</a>

    <div class=\"article-banner\">
        <span class=\"article-banner-icon\">📰</span>
        <div>
            <div class=\"article-banner-label\">Article concerné</div>
            <div class=\"article-banner-title\">";
        // line 59
        yield (((($tmp = (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "titre", [], "any", false, false, false, 59), "html", null, true)) : ("(Article supprimé)"));
        yield "</div>
        </div>
    </div>

    <div class=\"form-card\">
        <div class=\"form-card-title\">✏️ Modifier le signalement</div>

        ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
        yield "

            <div class=\"field\">
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "motif", [], "any", false, false, false, 69), 'label');
        yield "
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "motif", [], "any", false, false, false, 70), 'widget');
        yield "
                ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "motif", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                    <div class=\"error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "motif", [], "any", false, false, false, 72), 'errors');
            yield "</div>
                ";
        }
        // line 74
        yield "            </div>

            <div class=\"field\">
                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'label');
        yield "
                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'widget', ["attr" => ["rows" => 5]]);
        yield "
                <div class=\"hint\">Optionnel — Précisez le problème constaté (max. 1000 caractères).</div>
                ";
        // line 80
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80)) > 0)) {
            // line 81
            yield "                    <div class=\"error\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), 'errors');
            yield "</div>
                ";
        }
        // line 83
        yield "            </div>

            <div class=\"form-footer\">
                <a href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 86, $this->source); })()), "idSignalement", [], "any", false, false, false, 86)]), "html", null, true);
        yield "\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">💾 Enregistrer les modifications</button>
            </div>

        ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signalement/edit.html.twig";
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
        return array (  183 => 90,  176 => 86,  171 => 83,  165 => 81,  163 => 80,  158 => 78,  154 => 77,  149 => 74,  143 => 72,  141 => 71,  137 => 70,  133 => 69,  127 => 66,  117 => 59,  108 => 53,  100 => 48,  96 => 47,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Modifier mon signalement — Bizcore</title>
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
        .article-banner { background:#1e293b; border-radius:14px; padding:18px 22px; margin-bottom:28px; display:flex; align-items:center; gap:14px; }
        .article-banner-icon { font-size:28px; flex-shrink:0; }
        .article-banner-label { font-size:11px; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.5px; margin-bottom:4px; }
        .article-banner-title { font-size:15px; font-weight:700; color:#f1f5f9; }
        .form-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; padding:32px; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .form-card-title { font-size:18px; font-weight:800; color:#0f172a; margin-bottom:24px; display:flex; align-items:center; gap:10px; }
        .field { margin-bottom:20px; }
        .field label { display:block; font-size:13px; font-weight:600; color:#374151; margin-bottom:7px; }
        .field select, .field textarea { width:100%; padding:11px 14px; border:1.5px solid #e2e8f0; border-radius:10px; font-family:'Inter',sans-serif; font-size:14px; color:#1e293b; background:#f8fafc; outline:none; transition:border-color .15s; }
        .field select:focus, .field textarea:focus { border-color:#22c55e; background:#fff; }
        .field textarea { resize:vertical; }
        .field .error { color:#dc2626; font-size:12px; margin-top:5px; }
        .field .hint  { color:#94a3b8; font-size:12px; margin-top:5px; }
        .form-footer { display:flex; gap:12px; margin-top:28px; flex-wrap:wrap; }
        .btn-submit { flex:1; padding:12px 24px; background:#f59e0b; color:#fff; border:none; border-radius:10px; font-family:'Inter',sans-serif; font-size:15px; font-weight:700; cursor:pointer; transition:background .15s; }
        .btn-submit:hover { background:#d97706; }
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
    <a href=\"{{ path('signalement_show', {id: signalement.idSignalement}) }}\" class=\"back-link\">← Retour au signalement</a>

    <div class=\"article-banner\">
        <span class=\"article-banner-icon\">📰</span>
        <div>
            <div class=\"article-banner-label\">Article concerné</div>
            <div class=\"article-banner-title\">{{ article ? article.titre : '(Article supprimé)' }}</div>
        </div>
    </div>

    <div class=\"form-card\">
        <div class=\"form-card-title\">✏️ Modifier le signalement</div>

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
                <div class=\"hint\">Optionnel — Précisez le problème constaté (max. 1000 caractères).</div>
                {% if form.description.vars.errors|length > 0 %}
                    <div class=\"error\">{{ form_errors(form.description) }}</div>
                {% endif %}
            </div>

            <div class=\"form-footer\">
                <a href=\"{{ path('signalement_show', {id: signalement.idSignalement}) }}\" class=\"btn-cancel\">Annuler</a>
                <button type=\"submit\" class=\"btn-submit\">💾 Enregistrer les modifications</button>
            </div>

        {{ form_end(form) }}
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
</body>
</html>", "signalement/edit.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\signalement\\edit.html.twig");
    }
}
