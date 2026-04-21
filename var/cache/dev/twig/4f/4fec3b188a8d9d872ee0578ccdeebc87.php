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

/* reservation/reservation_form.html.twig */
class __TwigTemplate_d5071a487886fe59c8c3766cfd884344 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_form.html.twig"));

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

        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvelle"));
        yield " Réservation";
        
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
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    .navbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 40px; height: 64px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 100; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .breadcrumb-bar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 12px 40px; display: flex; align-items: center; gap: 8px; font-size: 13px; color: #94a3b8; }
    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }

    .page { max-width: 860px; margin: 40px auto; padding: 0 24px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; }
    .back-link:hover { color: #22c55e; }

    /* Event summary card */
    .event-summary {
        background: linear-gradient(135deg, #0f172a, #1e3a5f);
        border-radius: 14px;
        padding: 24px;
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 24px;
        color: #fff;
    }

    .event-summary img { width: 72px; height: 72px; object-fit: cover; border-radius: 10px; flex-shrink: 0; }
    .event-summary .placeholder { width: 72px; height: 72px; background: rgba(255,255,255,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 28px; flex-shrink: 0; }
    .event-summary-info h3 { font-size: 18px; font-weight: 700; margin-bottom: 6px; }
    .event-summary-meta { display: flex; gap: 16px; flex-wrap: wrap; }
    .event-summary-meta span { font-size: 13px; color: #94a3b8; }
    .event-summary-meta strong { color: #22c55e; }

    /* Form card */
    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }

    .form-card-header { background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 20px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 700; color: #0f172a; }

    .form-body { padding: 28px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }

    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }

    .form-group input,
    .form-group select {
        padding: 11px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #0f172a;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        background: #fff;
        width: 100%;
    }

    .form-group input:focus, .form-group select:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group select.is-invalid { border-color: #ef4444; box-shadow: 0 0 0 3px rgba(239,68,68,0.1); }

    .form-error {
        font-size: 12px;
        font-weight: 600;
        color: #dc2626;
        background: #fee2e2;
        border: 1px solid #fecaca;
        border-radius: 6px;
        padding: 7px 11px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .error-summary {
        background: #fee2e2;
        border: 1.5px solid #ef4444;
        border-radius: 10px;
        padding: 16px 20px;
        margin-bottom: 20px;
        font-size: 14px;
    }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }

    .btn { padding: 11px 24px; border-radius: 9px; font-size: 14px; font-weight: 600; font-family: 'Inter', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }

    footer { background: #0f172a; color: #64748b; text-align: center; padding: 24px; font-size: 13px; margin-top: 60px; }
    footer span { color: #22c55e; }
</style>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a>
        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\">Mes Réservations</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

<div class=\"breadcrumb-bar\">
    <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a> ›
    <a href=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 127, $this->source); })()), "title", [], "any", false, false, false, 127), "html", null, true);
        yield "</a> ›
    <span>";
        // line 128
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la réservation") : ("Réserver"));
        yield "</span>
</div>

<div class=\"page\">
    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["success"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 133
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
    <a href=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour à l'événement</a>

    <!-- Event summary -->
    <div class=\"event-summary\">
        ";
        // line 140
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 140, $this->source); })()), "image", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 141, $this->source); })()), "image", [], "any", false, false, false, 141))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 141, $this->source); })()), "title", [], "any", false, false, false, 141), "html", null, true);
            yield "\">
        ";
        } else {
            // line 143
            yield "            <div class=\"placeholder\">📅</div>
        ";
        }
        // line 145
        yield "        <div class=\"event-summary-info\">
            <h3>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 146, $this->source); })()), "title", [], "any", false, false, false, 146), "html", null, true);
        yield "</h3>
            <div class=\"event-summary-meta\">
                <span>📆 ";
        // line 148
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 148, $this->source); })()), "date", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 148, $this->source); })()), "date", [], "any", false, false, false, 148), "d/m/Y à H:i"), "html", null, true)) : ("Date à confirmer"));
        yield "</span>
                <span>👥 ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 149, $this->source); })()), "capacity", [], "any", false, false, false, 149), "html", null, true);
        yield " places</span>
                <span>Prix : <strong>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 150, $this->source); })()), "price", [], "any", false, false, false, 150), "html", null, true);
        yield " DT</strong></span>
            </div>
        </div>
    </div>

    <!-- Form -->
    ";
        // line 156
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-card"]]);
        yield "

        <div class=\"form-card-header\">
            🎟 ";
        // line 159
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier la réservation") : ("Confirmer votre réservation"));
        yield "
        </div>

        <div class=\"form-body\">

            ";
        // line 165
        yield "            ";
        $context["hasErrors"] = false;
        // line 166
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166)) > 0)) {
                $context["hasErrors"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "            ";
        if ((($tmp = (isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 167, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "            <div class=\"error-summary\">
                <strong>⚠️ Veuillez corriger les erreurs :</strong>
                <ul>
                    ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 172
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 172), "errors", [], "any", false, false, false, 172));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 173
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 173), "label", [], "any", false, false, false, 173), "html", null, true);
                    yield " : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 173), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "                </ul>
            </div>
            ";
        }
        // line 179
        yield "
            <div class=\"form-grid\">

                <div class=\"form-group\">
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "nom", [], "any", false, false, false, 183), 'label');
        yield "
                    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "nom", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "nom", [], "any", false, false, false, 184), "vars", [], "any", false, false, false, 184), "errors", [], "any", false, false, false, 184)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "Votre nom complet"]]);
        yield "
                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "nom", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 185), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "email", [], "any", false, false, false, 189), 'label');
        yield "
                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "email", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "email", [], "any", false, false, false, 190), "vars", [], "any", false, false, false, 190), "errors", [], "any", false, false, false, 190)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "votre@email.com"]]);
        yield "
                    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "email", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "errors", [], "any", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 191), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "telephone", [], "any", false, false, false, 195), 'label');
        yield "
                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "telephone", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "telephone", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "errors", [], "any", false, false, false, 196)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "+216 XX XXX XXX"]]);
        yield "
                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "telephone", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "errors", [], "any", false, false, false, 197));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 197), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                </div>

                <div class=\"form-group\">
                    ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 201), 'label');
        yield "
                    ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "errors", [], "any", false, false, false, 202)) > 0)) ? ("is-invalid") : ("")), "min" => "1", "placeholder" => "1"]]);
        yield "
                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "errors", [], "any", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 203), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        yield "                </div>

                ";
        // line 206
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
            yield "                <div class=\"form-group full\">
                    ";
            // line 208
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "statut", [], "any", false, false, false, 208), 'label');
            yield "
                    ";
            // line 209
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "statut", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "statut", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "errors", [], "any", false, false, false, 209)) > 0)) ? ("is-invalid") : (""))]]);
            yield "
                    ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "statut", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "errors", [], "any", false, false, false, 210));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield "<div class=\"form-error\">⚠ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 210), "html", null, true);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "                </div>
                ";
        }
        // line 213
        yield "
            </div>
        </div>

        <div class=\"form-actions\">
            <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"btn btn-secondary\">✕ Annuler</a>
            <button type=\"submit\" class=\"btn btn-success\">
                ";
        // line 220
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 220, $this->source); })()), "id", [], "any", false, false, false, 220)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer") : ("🎟 Confirmer la réservation"));
        yield "
            </button>
        </div>

    ";
        // line 224
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'form_end');
        yield "
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/reservation_form.html.twig";
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
        return array (  510 => 224,  503 => 220,  498 => 218,  491 => 213,  487 => 211,  476 => 210,  472 => 209,  468 => 208,  465 => 207,  463 => 206,  459 => 204,  448 => 203,  444 => 202,  440 => 201,  435 => 198,  424 => 197,  420 => 196,  416 => 195,  411 => 192,  400 => 191,  396 => 190,  392 => 189,  387 => 186,  376 => 185,  372 => 184,  368 => 183,  362 => 179,  357 => 176,  351 => 175,  340 => 173,  335 => 172,  331 => 171,  326 => 168,  323 => 167,  311 => 166,  308 => 165,  300 => 159,  294 => 156,  285 => 150,  281 => 149,  277 => 148,  272 => 146,  269 => 145,  265 => 143,  257 => 141,  255 => 140,  248 => 136,  245 => 135,  236 => 133,  232 => 132,  225 => 128,  219 => 127,  215 => 126,  206 => 120,  202 => 119,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ reservation.id ? 'Modifier' : 'Nouvelle' }} Réservation{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    .navbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 40px; height: 64px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 100; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .breadcrumb-bar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 12px 40px; display: flex; align-items: center; gap: 8px; font-size: 13px; color: #94a3b8; }
    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }

    .page { max-width: 860px; margin: 40px auto; padding: 0 24px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; }
    .back-link:hover { color: #22c55e; }

    /* Event summary card */
    .event-summary {
        background: linear-gradient(135deg, #0f172a, #1e3a5f);
        border-radius: 14px;
        padding: 24px;
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 24px;
        color: #fff;
    }

    .event-summary img { width: 72px; height: 72px; object-fit: cover; border-radius: 10px; flex-shrink: 0; }
    .event-summary .placeholder { width: 72px; height: 72px; background: rgba(255,255,255,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 28px; flex-shrink: 0; }
    .event-summary-info h3 { font-size: 18px; font-weight: 700; margin-bottom: 6px; }
    .event-summary-meta { display: flex; gap: 16px; flex-wrap: wrap; }
    .event-summary-meta span { font-size: 13px; color: #94a3b8; }
    .event-summary-meta strong { color: #22c55e; }

    /* Form card */
    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }

    .form-card-header { background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 20px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 700; color: #0f172a; }

    .form-body { padding: 28px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }

    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }

    .form-group input,
    .form-group select {
        padding: 11px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #0f172a;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        background: #fff;
        width: 100%;
    }

    .form-group input:focus, .form-group select:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group select.is-invalid { border-color: #ef4444; box-shadow: 0 0 0 3px rgba(239,68,68,0.1); }

    .form-error {
        font-size: 12px;
        font-weight: 600;
        color: #dc2626;
        background: #fee2e2;
        border: 1px solid #fecaca;
        border-radius: 6px;
        padding: 7px 11px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .error-summary {
        background: #fee2e2;
        border: 1.5px solid #ef4444;
        border-radius: 10px;
        padding: 16px 20px;
        margin-bottom: 20px;
        font-size: 14px;
    }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }

    .btn { padding: 11px 24px; border-radius: 9px; font-size: 14px; font-weight: 600; font-family: 'Inter', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }

    footer { background: #0f172a; color: #64748b; text-align: center; padding: 24px; font-size: 13px; margin-top: 60px; }
    footer span { color: #22c55e; }
</style>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"{{ path('evenement_front') }}\">Événements</a>
        <a href=\"{{ path('reservation_my') }}\">Mes Réservations</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

<div class=\"breadcrumb-bar\">
    <a href=\"{{ path('evenement_front') }}\">Événements</a> ›
    <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\">{{ evenement.title }}</a> ›
    <span>{{ reservation.id ? 'Modifier la réservation' : 'Réserver' }}</span>
</div>

<div class=\"page\">
    {% for msg in app.flashes('success') %}
        <div class=\"flash flash-success\">✅ {{ msg }}</div>
    {% endfor %}

    <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\" class=\"back-link\">← Retour à l'événement</a>

    <!-- Event summary -->
    <div class=\"event-summary\">
        {% if evenement.image %}
            <img src=\"{{ asset('uploads/' ~ evenement.image) }}\" alt=\"{{ evenement.title }}\">
        {% else %}
            <div class=\"placeholder\">📅</div>
        {% endif %}
        <div class=\"event-summary-info\">
            <h3>{{ evenement.title }}</h3>
            <div class=\"event-summary-meta\">
                <span>📆 {{ evenement.date ? evenement.date|date('d/m/Y à H:i') : 'Date à confirmer' }}</span>
                <span>👥 {{ evenement.capacity }} places</span>
                <span>Prix : <strong>{{ evenement.price }} DT</strong></span>
            </div>
        </div>
    </div>

    <!-- Form -->
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'form-card'}}) }}

        <div class=\"form-card-header\">
            🎟 {{ reservation.id ? 'Modifier la réservation' : 'Confirmer votre réservation' }}
        </div>

        <div class=\"form-body\">

            {# Error summary #}
            {% set hasErrors = false %}
            {% for field in form %}{% if field.vars.errors|length > 0 %}{% set hasErrors = true %}{% endif %}{% endfor %}
            {% if hasErrors %}
            <div class=\"error-summary\">
                <strong>⚠️ Veuillez corriger les erreurs :</strong>
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

                <div class=\"form-group\">
                    {{ form_label(form.nom) }}
                    {{ form_widget(form.nom, {'attr': {'class': form.nom.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': 'Votre nom complet'}}) }}
                    {% for error in form.nom.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'attr': {'class': form.email.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': 'votre@email.com'}}) }}
                    {% for error in form.email.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.telephone) }}
                    {{ form_widget(form.telephone, {'attr': {'class': form.telephone.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': '+216 XX XXX XXX'}}) }}
                    {% for error in form.telephone.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.nombrePlaces) }}
                    {{ form_widget(form.nombrePlaces, {'attr': {'class': form.nombrePlaces.vars.errors|length > 0 ? 'is-invalid' : '', 'min': '1', 'placeholder': '1'}}) }}
                    {% for error in form.nombrePlaces.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                </div>

                {% if reservation.id %}
                <div class=\"form-group full\">
                    {{ form_label(form.statut) }}
                    {{ form_widget(form.statut, {'attr': {'class': form.statut.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                    {% for error in form.statut.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                </div>
                {% endif %}

            </div>
        </div>

        <div class=\"form-actions\">
            <a href=\"{{ path('reservation_my') }}\" class=\"btn btn-secondary\">✕ Annuler</a>
            <button type=\"submit\" class=\"btn btn-success\">
                {{ reservation.id ? '💾 Enregistrer' : '🎟 Confirmer la réservation' }}
            </button>
        </div>

    {{ form_end(form) }}
</div>

<footer>© 2026 <span>Bizcore</span> — Tous droits réservés</footer>
{% endblock %}
", "reservation/reservation_form.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\reservation\\reservation_form.html.twig");
    }
}
