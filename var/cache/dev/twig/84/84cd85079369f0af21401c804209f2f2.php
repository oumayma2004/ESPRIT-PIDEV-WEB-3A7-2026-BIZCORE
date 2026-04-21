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

/* signalement/index.html.twig */
class __TwigTemplate_ed3fb8be17e68ff330246ec1910ebe49 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mes signalements — Bizcore</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing:border-box; margin:0; padding:0; }
        body { font-family:'Inter',sans-serif; background:#f8fafc; color:#1e293b; }
        .navbar { background:#fff; border-bottom:1px solid #e2e8f0; padding:0 40px; height:64px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; box-shadow:0 1px 3px rgba(0,0,0,.06); }
        .nav-brand { font-size:20px; font-weight:800; color:#0f172a; }
        .nav-brand span { color:#22c55e; }
        .nav-links a { font-size:14px; font-weight:500; color:#64748b; text-decoration:none; margin-left:28px; }
        .nav-links a:hover,.nav-links a.active { color:#0f172a; }
        .nav-cta { background:#22c55e; color:#fff !important; padding:8px 18px; border-radius:8px; font-weight:600 !important; }

        .page { max-width:900px; margin:0 auto; padding:40px 24px 80px; }
        .page-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:32px; flex-wrap:wrap; gap:12px; }
        .page-title { font-size:24px; font-weight:800; color:#0f172a; }
        .page-subtitle { font-size:14px; color:#64748b; margin-top:4px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:20px; }
        .back-link:hover { color:#22c55e; }

        .flash { padding:12px 16px; border-radius:10px; font-size:13px; margin-bottom:18px; }
        .flash-success { background:#dcfce7; border:1px solid #bbf7d0; color:#15803d; }
        .flash-error   { background:#fee2e2; border:1px solid #fecaca; color:#dc2626; }
        .flash-warning { background:#fef9c3; border:1px solid #fde047; color:#854d0e; }

        /* Stats row */
        .stats-row { display:flex; gap:12px; margin-bottom:28px; flex-wrap:wrap; }
        .stat-chip { background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:14px 20px; display:flex; align-items:center; gap:10px; flex:1; min-width:140px; }
        .stat-icon { font-size:22px; }
        .stat-val  { font-size:22px; font-weight:800; color:#0f172a; line-height:1; }
        .stat-lbl  { font-size:11px; font-weight:600; color:#94a3b8; text-transform:uppercase; letter-spacing:.4px; }

        /* Table */
        .card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .table-wrap { overflow-x:auto; }
        table { width:100%; border-collapse:collapse; font-size:13px; }
        th { text-align:left; padding:11px 16px; font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.5px; border-bottom:1px solid #e2e8f0; background:#f8fafc; white-space:nowrap; }
        td { padding:14px 16px; border-bottom:1px solid #f1f5f9; vertical-align:middle; color:#334155; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:#f8fafc; }

        .article-title { font-weight:600; color:#0f172a; max-width:240px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
        .article-title a { color:#0f172a; text-decoration:none; }
        .article-title a:hover { color:#22c55e; }

        .motif-badge { display:inline-block; background:#f1f5f9; color:#475569; font-size:11px; font-weight:700; padding:3px 10px; border-radius:20px; }

        .statut-badge { display:inline-flex; align-items:center; gap:5px; font-size:11px; font-weight:700; padding:4px 11px; border-radius:20px; }
        .statut-en_attente { background:#fef9c3; color:#854d0e; border:1px solid #fde047; }
        .statut-traite     { background:#dcfce7; color:#15803d; border:1px solid #bbf7d0; }
        .statut-rejete     { background:#fee2e2; color:#dc2626; border:1px solid #fecaca; }

        .date-cell { font-size:12px; color:#94a3b8; white-space:nowrap; }

        .actions { display:flex; gap:6px; flex-shrink:0; }
        .btn-sm { display:inline-flex; align-items:center; gap:4px; padding:6px 12px; border-radius:7px; font-size:12px; font-weight:600; text-decoration:none; border:none; cursor:pointer; font-family:'Inter',sans-serif; transition:opacity .15s; }
        .btn-view   { background:#f1f5f9; color:#475569; }
        .btn-edit   { background:#dbeafe; color:#1d4ed8; }
        .btn-delete { background:#fee2e2; color:#dc2626; }
        .btn-sm:hover { opacity:.8; }
        .btn-sm:disabled, .btn-sm.disabled { opacity:.4; cursor:not-allowed; pointer-events:none; }

        .empty-state { text-align:center; padding:60px 24px; }
        .empty-icon  { font-size:52px; margin-bottom:14px; }
        .empty-title { font-size:18px; font-weight:700; color:#64748b; margin-bottom:8px; }
        .empty-sub   { font-size:14px; color:#94a3b8; }

        .btn-primary { display:inline-flex; align-items:center; gap:8px; background:#22c55e; color:#fff; padding:10px 22px; border-radius:10px; font-size:14px; font-weight:700; text-decoration:none; transition:background .15s; }
        .btn-primary:hover { background:#16a34a; }

        footer { background:#0f172a; color:#64748b; text-align:center; padding:24px; font-size:13px; margin-top:60px; }
        footer span { color:#22c55e; }
    </style>
</head>
<body>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\">Blog</a>
        <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_index");
        yield "\" class=\"active\">Mes signalements</a>
    </div>
</nav>

<div class=\"page\">
    <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\" class=\"back-link\">← Retour au blog</a>

    <div class=\"page-header\">
        <div>
            <div class=\"page-title\">🚩 Mes signalements</div>
            <div class=\"page-subtitle\">Suivez l'état de vos signalements d'articles</div>
        </div>
    </div>

    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", ["success"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            yield "<div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", ["error"], "method", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            yield "<div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            yield "<div class=\"flash flash-warning\">⚠️ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "
    ";
        // line 106
        yield "    ";
        $context["nb_attente"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 106, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 106, $this->source); })()), "statut", [], "any", false, false, false, 106) == "en_attente"); }));
        // line 107
        yield "    ";
        $context["nb_traite"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 107, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 107, $this->source); })()), "statut", [], "any", false, false, false, 107) == "traite"); }));
        // line 108
        yield "    ";
        $context["nb_rejete"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 108, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 108, $this->source); })()), "statut", [], "any", false, false, false, 108) == "rejete"); }));
        // line 109
        yield "
    <div class=\"stats-row\">
        <div class=\"stat-chip\"><span class=\"stat-icon\">📋</span><div><div class=\"stat-val\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 111, $this->source); })())), "html", null, true);
        yield "</div><div class=\"stat-lbl\">Total</div></div></div>
        <div class=\"stat-chip\"><span class=\"stat-icon\">⏳</span><div><div class=\"stat-val\" style=\"color:#854d0e\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_attente"]) || array_key_exists("nb_attente", $context) ? $context["nb_attente"] : (function () { throw new RuntimeError('Variable "nb_attente" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-lbl\">En attente</div></div></div>
        <div class=\"stat-chip\"><span class=\"stat-icon\">✅</span><div><div class=\"stat-val\" style=\"color:#15803d\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_traite"]) || array_key_exists("nb_traite", $context) ? $context["nb_traite"] : (function () { throw new RuntimeError('Variable "nb_traite" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-lbl\">Traités</div></div></div>
        <div class=\"stat-chip\"><span class=\"stat-icon\">❌</span><div><div class=\"stat-val\" style=\"color:#dc2626\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_rejete"]) || array_key_exists("nb_rejete", $context) ? $context["nb_rejete"] : (function () { throw new RuntimeError('Variable "nb_rejete" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-lbl\">Rejetés</div></div></div>
    </div>

    <div class=\"card\">
        ";
        // line 118
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 118, $this->source); })()))) {
            // line 119
            yield "            <div class=\"empty-state\">
                <div class=\"empty-icon\">🚩</div>
                <div class=\"empty-title\">Aucun signalement</div>
                <div class=\"empty-sub\">Vous n'avez pas encore signalé d'article. Si vous trouvez du contenu inapproprié, utilisez le bouton \"Signaler\" sur la page de l'article.</div>
            </div>
        ";
        } else {
            // line 125
            yield "            <div class=\"table-wrap\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Article</th>
                            <th>Motif</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 139
                yield "                        <tr>
                            <td style=\"color:#94a3b8;font-size:12px\">#";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idSignalement", [], "any", false, false, false, 140), "html", null, true);
                yield "</td>
                            <td>
                                <div class=\"article-title\">
                                    <a href=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idArticle", [], "any", false, false, false, 143)]), "html", null, true);
                yield "\">
                                        ";
                // line 144
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["article_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idArticle", [], "any", false, false, false, 144), [], "array", true, true, false, 144) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["article_map"]) || array_key_exists("article_map", $context) ? $context["article_map"] : (function () { throw new RuntimeError('Variable "article_map" does not exist.', 144, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idArticle", [], "any", false, false, false, 144), [], "array", false, false, false, 144)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article_map"]) || array_key_exists("article_map", $context) ? $context["article_map"] : (function () { throw new RuntimeError('Variable "article_map" does not exist.', 144, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idArticle", [], "any", false, false, false, 144), [], "array", false, false, false, 144), "html", null, true)) : ("(supprimé)"));
                yield "
                                    </a>
                                </div>
                            </td>
                            <td><span class=\"motif-badge\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "motif", [], "any", false, false, false, 148), ["_" => " "])), "html", null, true);
                yield "</span></td>
                            <td>
                                <span class=\"statut-badge statut-";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "statut", [], "any", false, false, false, 150), "html", null, true);
                yield "\">
                                    ";
                // line 151
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "statut", [], "any", false, false, false, 151) == "en_attente")) {
                    yield "⏳ En attente
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 152
$context["s"], "statut", [], "any", false, false, false, 152) == "traite")) {
                    yield "✅ Traité
                                    ";
                } else {
                    // line 153
                    yield "❌ Rejeté
                                    ";
                }
                // line 155
                yield "                                </span>
                            </td>
                            <td class=\"date-cell\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "dateSignalement", [], "any", false, false, false, 157), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                            <td>
                                <div class=\"actions\">
                                    <a href=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idSignalement", [], "any", false, false, false, 160)]), "html", null, true);
                yield "\" class=\"btn-sm btn-view\">👁 Voir</a>
                                    ";
                // line 161
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "enAttente", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 162
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idSignalement", [], "any", false, false, false, 162)]), "html", null, true);
                    yield "\" class=\"btn-sm btn-edit\">✏ Modifier</a>
                                        <form method=\"post\" action=\"";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idSignalement", [], "any", false, false, false, 163)]), "html", null, true);
                    yield "\" style=\"display:inline\" onsubmit=\"return confirm('Retirer ce signalement ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["s"], "idSignalement", [], "any", false, false, false, 164))), "html", null, true);
                    yield "\">
                                            <button type=\"submit\" class=\"btn-sm btn-delete\">🗑</button>
                                        </form>
                                    ";
                } else {
                    // line 168
                    yield "                                        <span class=\"btn-sm btn-edit disabled\">✏</span>
                                        <span class=\"btn-sm btn-delete disabled\">🗑</span>
                                    ";
                }
                // line 171
                yield "                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 179
        yield "    </div>
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
        return "signalement/index.html.twig";
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
        return array (  349 => 179,  343 => 175,  334 => 171,  329 => 168,  322 => 164,  318 => 163,  313 => 162,  311 => 161,  307 => 160,  301 => 157,  297 => 155,  293 => 153,  288 => 152,  284 => 151,  280 => 150,  275 => 148,  268 => 144,  264 => 143,  258 => 140,  255 => 139,  251 => 138,  236 => 125,  228 => 119,  226 => 118,  219 => 114,  215 => 113,  211 => 112,  207 => 111,  203 => 109,  200 => 108,  197 => 107,  194 => 106,  191 => 104,  179 => 103,  167 => 102,  156 => 101,  144 => 92,  136 => 87,  132 => 86,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mes signalements — Bizcore</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing:border-box; margin:0; padding:0; }
        body { font-family:'Inter',sans-serif; background:#f8fafc; color:#1e293b; }
        .navbar { background:#fff; border-bottom:1px solid #e2e8f0; padding:0 40px; height:64px; display:flex; align-items:center; justify-content:space-between; position:sticky; top:0; z-index:100; box-shadow:0 1px 3px rgba(0,0,0,.06); }
        .nav-brand { font-size:20px; font-weight:800; color:#0f172a; }
        .nav-brand span { color:#22c55e; }
        .nav-links a { font-size:14px; font-weight:500; color:#64748b; text-decoration:none; margin-left:28px; }
        .nav-links a:hover,.nav-links a.active { color:#0f172a; }
        .nav-cta { background:#22c55e; color:#fff !important; padding:8px 18px; border-radius:8px; font-weight:600 !important; }

        .page { max-width:900px; margin:0 auto; padding:40px 24px 80px; }
        .page-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:32px; flex-wrap:wrap; gap:12px; }
        .page-title { font-size:24px; font-weight:800; color:#0f172a; }
        .page-subtitle { font-size:14px; color:#64748b; margin-top:4px; }
        .back-link { display:inline-flex; align-items:center; gap:6px; color:#64748b; text-decoration:none; font-size:13px; font-weight:500; margin-bottom:20px; }
        .back-link:hover { color:#22c55e; }

        .flash { padding:12px 16px; border-radius:10px; font-size:13px; margin-bottom:18px; }
        .flash-success { background:#dcfce7; border:1px solid #bbf7d0; color:#15803d; }
        .flash-error   { background:#fee2e2; border:1px solid #fecaca; color:#dc2626; }
        .flash-warning { background:#fef9c3; border:1px solid #fde047; color:#854d0e; }

        /* Stats row */
        .stats-row { display:flex; gap:12px; margin-bottom:28px; flex-wrap:wrap; }
        .stat-chip { background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:14px 20px; display:flex; align-items:center; gap:10px; flex:1; min-width:140px; }
        .stat-icon { font-size:22px; }
        .stat-val  { font-size:22px; font-weight:800; color:#0f172a; line-height:1; }
        .stat-lbl  { font-size:11px; font-weight:600; color:#94a3b8; text-transform:uppercase; letter-spacing:.4px; }

        /* Table */
        .card { background:#fff; border:1px solid #e2e8f0; border-radius:16px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,.04); }
        .table-wrap { overflow-x:auto; }
        table { width:100%; border-collapse:collapse; font-size:13px; }
        th { text-align:left; padding:11px 16px; font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:.5px; border-bottom:1px solid #e2e8f0; background:#f8fafc; white-space:nowrap; }
        td { padding:14px 16px; border-bottom:1px solid #f1f5f9; vertical-align:middle; color:#334155; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:#f8fafc; }

        .article-title { font-weight:600; color:#0f172a; max-width:240px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
        .article-title a { color:#0f172a; text-decoration:none; }
        .article-title a:hover { color:#22c55e; }

        .motif-badge { display:inline-block; background:#f1f5f9; color:#475569; font-size:11px; font-weight:700; padding:3px 10px; border-radius:20px; }

        .statut-badge { display:inline-flex; align-items:center; gap:5px; font-size:11px; font-weight:700; padding:4px 11px; border-radius:20px; }
        .statut-en_attente { background:#fef9c3; color:#854d0e; border:1px solid #fde047; }
        .statut-traite     { background:#dcfce7; color:#15803d; border:1px solid #bbf7d0; }
        .statut-rejete     { background:#fee2e2; color:#dc2626; border:1px solid #fecaca; }

        .date-cell { font-size:12px; color:#94a3b8; white-space:nowrap; }

        .actions { display:flex; gap:6px; flex-shrink:0; }
        .btn-sm { display:inline-flex; align-items:center; gap:4px; padding:6px 12px; border-radius:7px; font-size:12px; font-weight:600; text-decoration:none; border:none; cursor:pointer; font-family:'Inter',sans-serif; transition:opacity .15s; }
        .btn-view   { background:#f1f5f9; color:#475569; }
        .btn-edit   { background:#dbeafe; color:#1d4ed8; }
        .btn-delete { background:#fee2e2; color:#dc2626; }
        .btn-sm:hover { opacity:.8; }
        .btn-sm:disabled, .btn-sm.disabled { opacity:.4; cursor:not-allowed; pointer-events:none; }

        .empty-state { text-align:center; padding:60px 24px; }
        .empty-icon  { font-size:52px; margin-bottom:14px; }
        .empty-title { font-size:18px; font-weight:700; color:#64748b; margin-bottom:8px; }
        .empty-sub   { font-size:14px; color:#94a3b8; }

        .btn-primary { display:inline-flex; align-items:center; gap:8px; background:#22c55e; color:#fff; padding:10px 22px; border-radius:10px; font-size:14px; font-weight:700; text-decoration:none; transition:background .15s; }
        .btn-primary:hover { background:#16a34a; }

        footer { background:#0f172a; color:#64748b; text-align:center; padding:24px; font-size:13px; margin-top:60px; }
        footer span { color:#22c55e; }
    </style>
</head>
<body>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"{{ path('frontend_blog_index') }}\">Blog</a>
        <a href=\"{{ path('signalement_index') }}\" class=\"active\">Mes signalements</a>
    </div>
</nav>

<div class=\"page\">
    <a href=\"{{ path('frontend_blog_index') }}\" class=\"back-link\">← Retour au blog</a>

    <div class=\"page-header\">
        <div>
            <div class=\"page-title\">🚩 Mes signalements</div>
            <div class=\"page-subtitle\">Suivez l'état de vos signalements d'articles</div>
        </div>
    </div>

    {% for msg in app.flashes('success') %}<div class=\"flash flash-success\">✅ {{ msg }}</div>{% endfor %}
    {% for msg in app.flashes('error') %}<div class=\"flash flash-error\">❌ {{ msg }}</div>{% endfor %}
    {% for msg in app.flashes('warning') %}<div class=\"flash flash-warning\">⚠️ {{ msg }}</div>{% endfor %}

    {# Stats #}
    {% set nb_attente = signalements|filter(s => s.statut == 'en_attente')|length %}
    {% set nb_traite  = signalements|filter(s => s.statut == 'traite')|length %}
    {% set nb_rejete  = signalements|filter(s => s.statut == 'rejete')|length %}

    <div class=\"stats-row\">
        <div class=\"stat-chip\"><span class=\"stat-icon\">📋</span><div><div class=\"stat-val\">{{ signalements|length }}</div><div class=\"stat-lbl\">Total</div></div></div>
        <div class=\"stat-chip\"><span class=\"stat-icon\">⏳</span><div><div class=\"stat-val\" style=\"color:#854d0e\">{{ nb_attente }}</div><div class=\"stat-lbl\">En attente</div></div></div>
        <div class=\"stat-chip\"><span class=\"stat-icon\">✅</span><div><div class=\"stat-val\" style=\"color:#15803d\">{{ nb_traite }}</div><div class=\"stat-lbl\">Traités</div></div></div>
        <div class=\"stat-chip\"><span class=\"stat-icon\">❌</span><div><div class=\"stat-val\" style=\"color:#dc2626\">{{ nb_rejete }}</div><div class=\"stat-lbl\">Rejetés</div></div></div>
    </div>

    <div class=\"card\">
        {% if signalements is empty %}
            <div class=\"empty-state\">
                <div class=\"empty-icon\">🚩</div>
                <div class=\"empty-title\">Aucun signalement</div>
                <div class=\"empty-sub\">Vous n'avez pas encore signalé d'article. Si vous trouvez du contenu inapproprié, utilisez le bouton \"Signaler\" sur la page de l'article.</div>
            </div>
        {% else %}
            <div class=\"table-wrap\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Article</th>
                            <th>Motif</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for s in signalements %}
                        <tr>
                            <td style=\"color:#94a3b8;font-size:12px\">#{{ s.idSignalement }}</td>
                            <td>
                                <div class=\"article-title\">
                                    <a href=\"{{ path('frontend_blog_show', {id: s.idArticle}) }}\">
                                        {{ article_map[s.idArticle] ?? '(supprimé)' }}
                                    </a>
                                </div>
                            </td>
                            <td><span class=\"motif-badge\">{{ s.motif|replace({'_': ' '})|capitalize }}</span></td>
                            <td>
                                <span class=\"statut-badge statut-{{ s.statut }}\">
                                    {% if s.statut == 'en_attente' %}⏳ En attente
                                    {% elseif s.statut == 'traite' %}✅ Traité
                                    {% else %}❌ Rejeté
                                    {% endif %}
                                </span>
                            </td>
                            <td class=\"date-cell\">{{ s.dateSignalement|date('d/m/Y H:i') }}</td>
                            <td>
                                <div class=\"actions\">
                                    <a href=\"{{ path('signalement_show', {id: s.idSignalement}) }}\" class=\"btn-sm btn-view\">👁 Voir</a>
                                    {% if s.enAttente %}
                                        <a href=\"{{ path('signalement_edit', {id: s.idSignalement}) }}\" class=\"btn-sm btn-edit\">✏ Modifier</a>
                                        <form method=\"post\" action=\"{{ path('signalement_delete', {id: s.idSignalement}) }}\" style=\"display:inline\" onsubmit=\"return confirm('Retirer ce signalement ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ s.idSignalement) }}\">
                                            <button type=\"submit\" class=\"btn-sm btn-delete\">🗑</button>
                                        </form>
                                    {% else %}
                                        <span class=\"btn-sm btn-edit disabled\">✏</span>
                                        <span class=\"btn-sm btn-delete disabled\">🗑</span>
                                    {% endif %}
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
</body>
</html>", "signalement/index.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\signalement\\index.html.twig");
    }
}
