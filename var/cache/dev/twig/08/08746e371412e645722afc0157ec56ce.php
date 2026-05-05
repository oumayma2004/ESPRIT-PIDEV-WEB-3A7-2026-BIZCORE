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

/* signalement/show.html.twig */
class __TwigTemplate_e0c2776cf5d7513a61d2c9892ceec288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mon signalement — Bizcore</title>
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

        .page { max-width:660px; margin:0 auto; padding:40px 24px 80px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:24px; }
        .back-link:hover { color:#22c55e; }

        .detail-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .card-header { background:#1e293b; padding:24px 28px; }
        .card-header-top { display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap; margin-bottom:10px; }
        .card-id { font-size:12px; color:#64748b; }
        .statut-badge { display:inline-flex; align-items:center; gap:5px; font-size:12px; font-weight:700; padding:5px 13px; border-radius:20px; }
        .statut-en_attente { background:rgba(253,224,71,.15); color:#fde047; border:1px solid rgba(253,224,71,.3); }
        .statut-traite     { background:rgba(34,197,94,.15); color:#22c55e; border:1px solid rgba(34,197,94,.3); }
        .statut-rejete     { background:rgba(239,68,68,.15); color:#f87171; border:1px solid rgba(239,68,68,.3); }
        .card-article-title { font-size:17px; font-weight:700; color:#f1f5f9; }

        .card-body { padding:28px; display:flex; flex-direction:column; gap:20px; }

        .info-row { display:grid; grid-template-columns:1fr 1fr; gap:14px; }
        .info-box { background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:14px 16px; }
        .info-box .lbl { font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.5px; margin-bottom:5px; }
        .info-box .val { font-size:14px; font-weight:600; color:#1e293b; }

        .desc-box { background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:16px; }
        .desc-box .lbl { font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.5px; margin-bottom:8px; }
        .desc-box p { font-size:14px; color:#475569; line-height:1.7; font-style:italic; }
        .desc-box .no-desc { font-size:13px; color:#cbd5e1; }

        .admin-note { background:#f0fdf4; border:1.5px solid #bbf7d0; border-radius:10px; padding:16px; }
        .admin-note .lbl { font-size:10px; font-weight:700; color:#15803d; text-transform:uppercase; letter-spacing:.5px; margin-bottom:8px; }
        .admin-note p { font-size:14px; color:#166534; line-height:1.7; }

        .card-footer { padding:20px 28px; border-top:1px solid #f1f5f9; display:flex; gap:10px; flex-wrap:wrap; }
        .btn { display:inline-flex; align-items:center; gap:6px; padding:10px 20px; border-radius:9px; font-size:13px; font-weight:700; text-decoration:none; border:none; cursor:pointer; font-family:'Inter',sans-serif; transition:opacity .15s; }
        .btn:hover { opacity:.85; }
        .btn-edit   { background:#dbeafe; color:#1d4ed8; }
        .btn-delete { background:#fee2e2; color:#dc2626; }
        .btn-back   { background:#f1f5f9; color:#475569; }

        footer { background:#0f172a; color:#64748b; text-align:center; padding:24px; font-size:13px; margin-top:60px; }
        footer span { color:#22c55e; }
    </style>
</head>
<body>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\">Blog</a>
        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        yield "\">Mes signalements</a>
    </div>
</nav>

<div class=\"page\">
    <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        yield "\" class=\"back-link\">← Mes signalements</a>

    <div class=\"detail-card\">
        <div class=\"card-header\">
            <div class=\"card-header-top\">
                <span class=\"card-id\">Signalement #";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 75, $this->source); })()), "idSignalement", [], "any", false, false, false, 75), "html", null, true);
        yield "</span>
                <span class=\"statut-badge statut-";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 76, $this->source); })()), "statut", [], "any", false, false, false, 76), "html", null, true);
        yield "\">
                    ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 77, $this->source); })()), "statut", [], "any", false, false, false, 77) == "en_attente")) {
            yield "⏳ En attente
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 78, $this->source); })()), "statut", [], "any", false, false, false, 78) == "traite")) {
            yield "✅ Traité
                    ";
        } else {
            // line 79
            yield "❌ Rejeté
                    ";
        }
        // line 81
        yield "                </span>
            </div>
            <div class=\"card-article-title\">
                ";
        // line 84
        if ((($tmp = (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                    📰 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 85, $this->source); })()), "titre", [], "any", false, false, false, 85), "html", null, true);
            yield "
                ";
        } else {
            // line 87
            yield "                    📰 (Article supprimé)
                ";
        }
        // line 89
        yield "            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"info-row\">
                <div class=\"info-box\">
                    <div class=\"lbl\">Motif</div>
                    <div class=\"val\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 96, $this->source); })()), "motif", [], "any", false, false, false, 96), ["_" => " "])), "html", null, true);
        yield "</div>
                </div>
                <div class=\"info-box\">
                    <div class=\"lbl\">Date du signalement</div>
                    <div class=\"val\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 100, $this->source); })()), "dateSignalement", [], "any", false, false, false, 100), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
                </div>
            </div>

            ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 104, $this->source); })()), "dateTraitement", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "            <div class=\"info-row\">
                <div class=\"info-box\">
                    <div class=\"lbl\">Date de traitement</div>
                    <div class=\"val\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 108, $this->source); })()), "dateTraitement", [], "any", false, false, false, 108), "d/m/Y à H:i"), "html", null, true);
            yield "</div>
                </div>
                <div class=\"info-box\">
                    <div class=\"lbl\">Statut final</div>
                    <div class=\"val\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 112, $this->source); })()), "statut", [], "any", false, false, false, 112)), "html", null, true);
            yield "</div>
                </div>
            </div>
            ";
        }
        // line 116
        yield "
            <div class=\"desc-box\">
                <div class=\"lbl\">Votre description</div>
                ";
        // line 119
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 120, $this->source); })()), "description", [], "any", false, false, false, 120), "html", null, true);
            yield "</p>
                ";
        } else {
            // line 122
            yield "                    <span class=\"no-desc\">Aucune description fournie.</span>
                ";
        }
        // line 124
        yield "            </div>

            ";
        // line 126
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 126, $this->source); })()), "remarqueAdmin", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "            <div class=\"admin-note\">
                <div class=\"lbl\">📝 Réponse de l'équipe Bizcore</div>
                <p>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 129, $this->source); })()), "remarqueAdmin", [], "any", false, false, false, 129), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 132
        yield "        </div>

        <div class=\"card-footer\">
            <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        yield "\" class=\"btn btn-back\">← Retour</a>
            ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 136, $this->source); })()), "enAttente", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 137, $this->source); })()), "idSignalement", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">✏ Modifier</a>
                <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 138, $this->source); })()), "idSignalement", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Retirer ce signalement ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 139, $this->source); })()), "idSignalement", [], "any", false, false, false, 139))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-delete\">🗑 Retirer</button>
                </form>
            ";
        }
        // line 143
        yield "            ";
        if ((($tmp = (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 143, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 144, $this->source); })()), "idArticle", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\" class=\"btn btn-back\" style=\"margin-left:auto\">Voir l'article →</a>
            ";
        }
        // line 146
        yield "        </div>
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
        return "signalement/show.html.twig";
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
        return array (  284 => 146,  278 => 144,  275 => 143,  268 => 139,  264 => 138,  259 => 137,  257 => 136,  253 => 135,  248 => 132,  242 => 129,  238 => 127,  236 => 126,  232 => 124,  228 => 122,  222 => 120,  220 => 119,  215 => 116,  208 => 112,  201 => 108,  196 => 105,  194 => 104,  187 => 100,  180 => 96,  171 => 89,  167 => 87,  161 => 85,  159 => 84,  154 => 81,  150 => 79,  145 => 78,  141 => 77,  137 => 76,  133 => 75,  125 => 70,  117 => 65,  113 => 64,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mon signalement — Bizcore</title>
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

        .page { max-width:660px; margin:0 auto; padding:40px 24px 80px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:24px; }
        .back-link:hover { color:#22c55e; }

        .detail-card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .card-header { background:#1e293b; padding:24px 28px; }
        .card-header-top { display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap; margin-bottom:10px; }
        .card-id { font-size:12px; color:#64748b; }
        .statut-badge { display:inline-flex; align-items:center; gap:5px; font-size:12px; font-weight:700; padding:5px 13px; border-radius:20px; }
        .statut-en_attente { background:rgba(253,224,71,.15); color:#fde047; border:1px solid rgba(253,224,71,.3); }
        .statut-traite     { background:rgba(34,197,94,.15); color:#22c55e; border:1px solid rgba(34,197,94,.3); }
        .statut-rejete     { background:rgba(239,68,68,.15); color:#f87171; border:1px solid rgba(239,68,68,.3); }
        .card-article-title { font-size:17px; font-weight:700; color:#f1f5f9; }

        .card-body { padding:28px; display:flex; flex-direction:column; gap:20px; }

        .info-row { display:grid; grid-template-columns:1fr 1fr; gap:14px; }
        .info-box { background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:14px 16px; }
        .info-box .lbl { font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.5px; margin-bottom:5px; }
        .info-box .val { font-size:14px; font-weight:600; color:#1e293b; }

        .desc-box { background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:16px; }
        .desc-box .lbl { font-size:10px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.5px; margin-bottom:8px; }
        .desc-box p { font-size:14px; color:#475569; line-height:1.7; font-style:italic; }
        .desc-box .no-desc { font-size:13px; color:#cbd5e1; }

        .admin-note { background:#f0fdf4; border:1.5px solid #bbf7d0; border-radius:10px; padding:16px; }
        .admin-note .lbl { font-size:10px; font-weight:700; color:#15803d; text-transform:uppercase; letter-spacing:.5px; margin-bottom:8px; }
        .admin-note p { font-size:14px; color:#166534; line-height:1.7; }

        .card-footer { padding:20px 28px; border-top:1px solid #f1f5f9; display:flex; gap:10px; flex-wrap:wrap; }
        .btn { display:inline-flex; align-items:center; gap:6px; padding:10px 20px; border-radius:9px; font-size:13px; font-weight:700; text-decoration:none; border:none; cursor:pointer; font-family:'Inter',sans-serif; transition:opacity .15s; }
        .btn:hover { opacity:.85; }
        .btn-edit   { background:#dbeafe; color:#1d4ed8; }
        .btn-delete { background:#fee2e2; color:#dc2626; }
        .btn-back   { background:#f1f5f9; color:#475569; }

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
    <a href=\"{{ path('signalement_index') }}\" class=\"back-link\">← Mes signalements</a>

    <div class=\"detail-card\">
        <div class=\"card-header\">
            <div class=\"card-header-top\">
                <span class=\"card-id\">Signalement #{{ signalement.idSignalement }}</span>
                <span class=\"statut-badge statut-{{ signalement.statut }}\">
                    {% if signalement.statut == 'en_attente' %}⏳ En attente
                    {% elseif signalement.statut == 'traite' %}✅ Traité
                    {% else %}❌ Rejeté
                    {% endif %}
                </span>
            </div>
            <div class=\"card-article-title\">
                {% if article %}
                    📰 {{ article.titre }}
                {% else %}
                    📰 (Article supprimé)
                {% endif %}
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"info-row\">
                <div class=\"info-box\">
                    <div class=\"lbl\">Motif</div>
                    <div class=\"val\">{{ signalement.motif|replace({'_': ' '})|capitalize }}</div>
                </div>
                <div class=\"info-box\">
                    <div class=\"lbl\">Date du signalement</div>
                    <div class=\"val\">{{ signalement.dateSignalement|date('d/m/Y à H:i') }}</div>
                </div>
            </div>

            {% if signalement.dateTraitement %}
            <div class=\"info-row\">
                <div class=\"info-box\">
                    <div class=\"lbl\">Date de traitement</div>
                    <div class=\"val\">{{ signalement.dateTraitement|date('d/m/Y à H:i') }}</div>
                </div>
                <div class=\"info-box\">
                    <div class=\"lbl\">Statut final</div>
                    <div class=\"val\">{{ signalement.statut|capitalize }}</div>
                </div>
            </div>
            {% endif %}

            <div class=\"desc-box\">
                <div class=\"lbl\">Votre description</div>
                {% if signalement.description %}
                    <p>{{ signalement.description }}</p>
                {% else %}
                    <span class=\"no-desc\">Aucune description fournie.</span>
                {% endif %}
            </div>

            {% if signalement.remarqueAdmin %}
            <div class=\"admin-note\">
                <div class=\"lbl\">📝 Réponse de l'équipe Bizcore</div>
                <p>{{ signalement.remarqueAdmin }}</p>
            </div>
            {% endif %}
        </div>

        <div class=\"card-footer\">
            <a href=\"{{ path('signalement_index') }}\" class=\"btn btn-back\">← Retour</a>
            {% if signalement.enAttente %}
                <a href=\"{{ path('signalement_edit', {id: signalement.idSignalement}) }}\" class=\"btn btn-edit\">✏ Modifier</a>
                <form method=\"post\" action=\"{{ path('signalement_delete', {id: signalement.idSignalement}) }}\" onsubmit=\"return confirm('Retirer ce signalement ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ signalement.idSignalement) }}\">
                    <button type=\"submit\" class=\"btn btn-delete\">🗑 Retirer</button>
                </form>
            {% endif %}
            {% if article %}
                <a href=\"{{ path('frontend_blog_show', {id: signalement.idArticle}) }}\" class=\"btn btn-back\" style=\"margin-left:auto\">Voir l'article →</a>
            {% endif %}
        </div>
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
</body>
</html>", "signalement/show.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\signalement\\show.html.twig");
    }
}
