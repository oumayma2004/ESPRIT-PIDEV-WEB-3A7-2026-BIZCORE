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

/* reservation/my.html.twig */
class __TwigTemplate_852c01f144e60cd2353040d88e0bd78c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/my.html.twig"));

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

        yield "Mes Reservations";
        
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
    .nav-links a:hover, .nav-links a.active { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .hero { background: linear-gradient(135deg, #0f172a, #1e3a5f); padding: 48px 40px; color: #fff; }
    .hero h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }
    .hero p { color: #94a3b8; font-size: 15px; }

    .content { max-width: 960px; margin: 40px auto; padding: 0 24px; }
    .section-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; }
    .section-title { font-size: 20px; font-weight: 700; color: #0f172a; }
    .btn-browse { display: inline-flex; align-items: center; gap: 7px; background: #22c55e; color: #fff; font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 8px; text-decoration: none; }
    .btn-browse:hover { background: #16a34a; }

    .res-list { display: flex; flex-direction: column; gap: 16px; }
    .res-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.04); display: flex; transition: box-shadow 0.2s; }
    .res-card:hover { box-shadow: 0 6px 20px rgba(0,0,0,0.08); }
    .res-card-color { width: 6px; flex-shrink: 0; }
    .color-green { background: #22c55e; }
    .color-amber { background: #f59e0b; }

    .res-card-body { flex: 1; padding: 20px 24px; display: flex; align-items: center; gap: 20px; }
    .res-event-img { width: 64px; height: 64px; object-fit: cover; border-radius: 10px; flex-shrink: 0; border: 1px solid #e2e8f0; }
    .res-event-placeholder { width: 64px; height: 64px; background: #f1f5f9; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; flex-shrink: 0; }

    .res-info { flex: 1; }
    .res-event-title { font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 6px; }
    .res-meta { display: flex; flex-wrap: wrap; gap: 14px; }
    .res-meta span { font-size: 12px; color: #64748b; display: flex; align-items: center; gap: 5px; }

    .res-right { display: flex; flex-direction: column; align-items: flex-end; gap: 10px; flex-shrink: 0; }
    .badge { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; }
    .badge-green { background: #dcfce7; color: #16a34a; }
    .badge-amber { background: #fef3c7; color: #b45309; }

    .res-actions { display: flex; gap: 8px; }
    .btn-sm { padding: 7px 14px; border-radius: 7px; font-size: 12px; font-weight: 600; font-family: 'Inter', sans-serif; text-decoration: none; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 5px; transition: all 0.15s; }
    .btn-edit-sm { background: #fef3c7; color: #b45309; border: 1px solid #fde68a; }
    .btn-edit-sm:hover { background: #fde68a; }
    .btn-pay-sm { background: #dbeafe; color: #1d4ed8; border: 1px solid #bfdbfe; }
    .btn-pay-sm:hover { background: #bfdbfe; }
    .btn-del-sm { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; }
    .btn-del-sm:hover { background: #fecaca; }

    .empty { text-align: center; padding: 80px 20px; color: #94a3b8; }
    .empty .empty-icon { font-size: 56px; margin-bottom: 16px; }
    .empty h3 { font-size: 18px; color: #64748b; margin-bottom: 8px; }
    .empty p { font-size: 14px; margin-bottom: 24px; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    footer { background: #0f172a; color: #64748b; text-align: center; padding: 24px; font-size: 13px; margin-top: 60px; }
    footer span { color: #22c55e; }
</style>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Evenements</a>
        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"active\">Mes reservations</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

<div class=\"hero\">
    <h1>Mes Reservations</h1>
    <p>Suivez vos paiements et gerez vos evenements depuis un seul endroit.</p>
</div>

<div class=\"content\">
    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", ["success"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 88
            yield "        <div class=\"flash flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["error"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 91
            yield "        <div class=\"flash flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "
    ";
        // line 95
        yield "    ";
        $context["paidReservations"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 95, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 95, $this->source); })()), "paymentStatus", [], "any", false, false, false, 95) == "paid"); });
        // line 96
        yield "    ";
        $context["pendingReservations"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 96, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 96, $this->source); })()), "paymentStatus", [], "any", false, false, false, 96) != "paid"); });
        // line 97
        yield "
    ";
        // line 98
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["paidReservations"]) || array_key_exists("paidReservations", $context) ? $context["paidReservations"] : (function () { throw new RuntimeError('Variable "paidReservations" does not exist.', 98, $this->source); })())) > 0)) {
            // line 99
            yield "        <div style=\"margin-bottom: 24px;\">
            
                
        </div>
    ";
        }
        // line 104
        yield "
    ";
        // line 106
        yield "    <div class=\"section-header\">
        <div class=\"section-title\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 107, $this->source); })())), "html", null, true);
        yield " réservation";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 107, $this->source); })())) != 1)) ? ("s") : (""));
        yield " en attente</div>
        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\" class=\"btn-browse\">Voir les événements</a>
    </div>

    <div class=\"res-list\">
        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pendingReservations"]) || array_key_exists("pendingReservations", $context) ? $context["pendingReservations"] : (function () { throw new RuntimeError('Variable "pendingReservations" does not exist.', 112, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 113
            yield "            <div class=\"res-card\">
                <div class=\"res-card-color color-amber\"></div>
                <div class=\"res-card-body\">
                    ";
            // line 116
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "evenement", [], "any", false, false, false, 116), "image", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "evenement", [], "any", false, false, false, 117), "image", [], "any", false, false, false, 117))), "html", null, true);
                yield "\" class=\"res-event-img\" alt=\"\">
                    ";
            } else {
                // line 119
                yield "                        <div class=\"res-event-placeholder\">EV</div>
                    ";
            }
            // line 121
            yield "
                    <div class=\"res-info\">
                        <div class=\"res-event-title\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "evenement", [], "any", false, false, false, 123), "title", [], "any", false, false, false, 123), "html", null, true);
            yield "</div>
                        <div class=\"res-meta\">
                            <span>Nom: ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 125), "html", null, true);
            yield "</span>
                            <span>Email: ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "email", [], "any", false, false, false, 126), "html", null, true);
            yield "</span>
                            <span>Tel: ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "telephone", [], "any", false, false, false, 127), "html", null, true);
            yield "</span>
                            <span>Places: ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nombrePlaces", [], "any", false, false, false, 128), "html", null, true);
            yield "</span>
                            <span>Date: ";
            // line 129
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 129), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
                            <span>Total: ";
            // line 130
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 130), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "evenement", [], "any", false, false, false, 130), "price", [], "any", false, false, false, 130) * CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nombrePlaces", [], "any", false, false, false, 130)), "html", null, true)));
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "devise", [], "any", false, false, false, 130)), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    <div class=\"res-right\">
                        <span class=\"badge badge-amber\">En attente de paiement</span>
                        <div class=\"res-actions\">
                            <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"btn-sm btn-edit-sm\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_pay", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("pay" . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 139))), "html", null, true);
            yield "\">
                                <button class=\"btn-sm btn-pay-sm\">💳 Payer</button>
                            </form>
                            <form method=\"post\" action=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 143))), "html", null, true);
            yield "\">
                                <button class=\"btn-sm btn-del-sm\" onclick=\"return confirm('Annuler cette reservation ?')\">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 150
        if (!$context['_iterated']) {
            // line 151
            yield "            <div class=\"empty\">
                <div class=\"empty-icon\">🎟️</div>
                <h3>Aucune réservation en attente</h3>
                <p>Toutes vos réservations sont payées ou vous n'avez pas encore réservé.</p>
                <a href=\"";
            // line 155
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
            yield "\" class=\"btn-browse\">Découvrir les événements</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "    </div>
</div>

<footer>© 2026 <span>Bizcore</span> - Tous droits reserves</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/my.html.twig";
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
        return array (  352 => 158,  343 => 155,  337 => 151,  335 => 150,  323 => 143,  319 => 142,  313 => 139,  309 => 138,  305 => 137,  293 => 130,  289 => 129,  285 => 128,  281 => 127,  277 => 126,  273 => 125,  268 => 123,  264 => 121,  260 => 119,  254 => 117,  252 => 116,  247 => 113,  242 => 112,  235 => 108,  229 => 107,  226 => 106,  223 => 104,  216 => 99,  214 => 98,  211 => 97,  208 => 96,  205 => 95,  202 => 93,  193 => 91,  188 => 90,  179 => 88,  175 => 87,  161 => 76,  157 => 75,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mes Reservations{% endblock %}

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
    .nav-links a:hover, .nav-links a.active { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .hero { background: linear-gradient(135deg, #0f172a, #1e3a5f); padding: 48px 40px; color: #fff; }
    .hero h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }
    .hero p { color: #94a3b8; font-size: 15px; }

    .content { max-width: 960px; margin: 40px auto; padding: 0 24px; }
    .section-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; }
    .section-title { font-size: 20px; font-weight: 700; color: #0f172a; }
    .btn-browse { display: inline-flex; align-items: center; gap: 7px; background: #22c55e; color: #fff; font-family: 'Inter', sans-serif; font-size: 13px; font-weight: 600; padding: 9px 18px; border-radius: 8px; text-decoration: none; }
    .btn-browse:hover { background: #16a34a; }

    .res-list { display: flex; flex-direction: column; gap: 16px; }
    .res-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.04); display: flex; transition: box-shadow 0.2s; }
    .res-card:hover { box-shadow: 0 6px 20px rgba(0,0,0,0.08); }
    .res-card-color { width: 6px; flex-shrink: 0; }
    .color-green { background: #22c55e; }
    .color-amber { background: #f59e0b; }

    .res-card-body { flex: 1; padding: 20px 24px; display: flex; align-items: center; gap: 20px; }
    .res-event-img { width: 64px; height: 64px; object-fit: cover; border-radius: 10px; flex-shrink: 0; border: 1px solid #e2e8f0; }
    .res-event-placeholder { width: 64px; height: 64px; background: #f1f5f9; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; flex-shrink: 0; }

    .res-info { flex: 1; }
    .res-event-title { font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 6px; }
    .res-meta { display: flex; flex-wrap: wrap; gap: 14px; }
    .res-meta span { font-size: 12px; color: #64748b; display: flex; align-items: center; gap: 5px; }

    .res-right { display: flex; flex-direction: column; align-items: flex-end; gap: 10px; flex-shrink: 0; }
    .badge { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 700; }
    .badge-green { background: #dcfce7; color: #16a34a; }
    .badge-amber { background: #fef3c7; color: #b45309; }

    .res-actions { display: flex; gap: 8px; }
    .btn-sm { padding: 7px 14px; border-radius: 7px; font-size: 12px; font-weight: 600; font-family: 'Inter', sans-serif; text-decoration: none; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 5px; transition: all 0.15s; }
    .btn-edit-sm { background: #fef3c7; color: #b45309; border: 1px solid #fde68a; }
    .btn-edit-sm:hover { background: #fde68a; }
    .btn-pay-sm { background: #dbeafe; color: #1d4ed8; border: 1px solid #bfdbfe; }
    .btn-pay-sm:hover { background: #bfdbfe; }
    .btn-del-sm { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; }
    .btn-del-sm:hover { background: #fecaca; }

    .empty { text-align: center; padding: 80px 20px; color: #94a3b8; }
    .empty .empty-icon { font-size: 56px; margin-bottom: 16px; }
    .empty h3 { font-size: 18px; color: #64748b; margin-bottom: 8px; }
    .empty p { font-size: 14px; margin-bottom: 24px; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    footer { background: #0f172a; color: #64748b; text-align: center; padding: 24px; font-size: 13px; margin-top: 60px; }
    footer span { color: #22c55e; }
</style>

<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"{{ path('evenement_front') }}\">Evenements</a>
        <a href=\"{{ path('reservation_my') }}\" class=\"active\">Mes reservations</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

<div class=\"hero\">
    <h1>Mes Reservations</h1>
    <p>Suivez vos paiements et gerez vos evenements depuis un seul endroit.</p>
</div>

<div class=\"content\">
    {% for msg in app.flashes('success') %}
        <div class=\"flash flash-success\">{{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"flash flash-error\">{{ msg }}</div>
    {% endfor %}

    {# Paid reservations as notifications at the top #}
    {% set paidReservations = reservations|filter(r => r.paymentStatus == 'paid') %}
    {% set pendingReservations = reservations|filter(r => r.paymentStatus != 'paid') %}

    {% if paidReservations|length > 0 %}
        <div style=\"margin-bottom: 24px;\">
            
                
        </div>
    {% endif %}

    {# Pending reservations as normal cards #}
    <div class=\"section-header\">
        <div class=\"section-title\">{{ pendingReservations|length }} réservation{{ pendingReservations|length != 1 ? 's' : '' }} en attente</div>
        <a href=\"{{ path('evenement_front') }}\" class=\"btn-browse\">Voir les événements</a>
    </div>

    <div class=\"res-list\">
        {% for r in pendingReservations %}
            <div class=\"res-card\">
                <div class=\"res-card-color color-amber\"></div>
                <div class=\"res-card-body\">
                    {% if r.evenement.image %}
                        <img src=\"{{ asset('uploads/' ~ r.evenement.image) }}\" class=\"res-event-img\" alt=\"\">
                    {% else %}
                        <div class=\"res-event-placeholder\">EV</div>
                    {% endif %}

                    <div class=\"res-info\">
                        <div class=\"res-event-title\">{{ r.evenement.title }}</div>
                        <div class=\"res-meta\">
                            <span>Nom: {{ r.nom }}</span>
                            <span>Email: {{ r.email }}</span>
                            <span>Tel: {{ r.telephone }}</span>
                            <span>Places: {{ r.nombrePlaces }}</span>
                            <span>Date: {{ r.dateReservation ? r.dateReservation|date('d/m/Y') : '-' }}</span>
                            <span>Total: {{ r.montantTotal ? r.montantTotal : (r.evenement.price * r.nombrePlaces) }} {{ r.devise|upper }}</span>
                        </div>
                    </div>

                    <div class=\"res-right\">
                        <span class=\"badge badge-amber\">En attente de paiement</span>
                        <div class=\"res-actions\">
                            <a href=\"{{ path('reservation_edit', {'id': r.id}) }}\" class=\"btn-sm btn-edit-sm\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('reservation_pay', {'id': r.id}) }}\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('pay' ~ r.id) }}\">
                                <button class=\"btn-sm btn-pay-sm\">💳 Payer</button>
                            </form>
                            <form method=\"post\" action=\"{{ path('reservation_delete', {'id': r.id}) }}\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ r.id) }}\">
                                <button class=\"btn-sm btn-del-sm\" onclick=\"return confirm('Annuler cette reservation ?')\">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"empty\">
                <div class=\"empty-icon\">🎟️</div>
                <h3>Aucune réservation en attente</h3>
                <p>Toutes vos réservations sont payées ou vous n'avez pas encore réservé.</p>
                <a href=\"{{ path('evenement_front') }}\" class=\"btn-browse\">Découvrir les événements</a>
            </div>
        {% endfor %}
    </div>
</div>

<footer>© 2026 <span>Bizcore</span> - Tous droits reserves</footer>
{% endblock %}
", "reservation/my.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\reservation\\my.html.twig");
    }
}
