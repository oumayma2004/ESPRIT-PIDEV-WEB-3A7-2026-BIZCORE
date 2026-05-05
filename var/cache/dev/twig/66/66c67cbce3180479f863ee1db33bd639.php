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

/* evenement/waitlist.html.twig */
class __TwigTemplate_7b7e2026b039e70d60465f2fd115b3ef extends Template
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
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/waitlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/waitlist.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste d'attente — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "LISTE D'ATTENTE";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; }
    .main { padding: 32px; max-width: 1000px; margin: 0 auto; }
    .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 28px; flex-wrap: wrap; gap: 12px; }
    .page-header h1 { font-size: 22px; font-weight: 700; color: #0f172a; }
    .back-btn { display: inline-flex; align-items: center; gap: 6px; background: #f1f5f9; color: #475569; padding: 9px 16px; border-radius: 8px; text-decoration: none; font-size: 13px; font-weight: 600; }
    .back-btn:hover { background: #e2e8f0; }

    .event-card { background: #fff; border-radius: 14px; border: 1px solid #e2e8f0; padding: 20px 24px; margin-bottom: 24px; display: flex; align-items: center; gap: 20px; }
    .event-info h2 { font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 4px; }
    .event-info p  { font-size: 13px; color: #64748b; }
    .badge { display: inline-flex; align-items: center; gap: 6px; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 700; }
    .badge-orange { background: #fef3c7; color: #d97706; }
    .badge-green  { background: #dcfce7; color: #16a34a; }
    .badge-red    { background: #fee2e2; color: #dc2626; }

    .stats-row { display: flex; gap: 16px; margin-bottom: 24px; flex-wrap: wrap; }
    .stat-box { background: #fff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 16px 20px; flex: 1; min-width: 140px; text-align: center; }
    .stat-box .num { font-size: 28px; font-weight: 800; color: #0f172a; }
    .stat-box .lbl { font-size: 12px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: .5px; margin-top: 4px; }

    .actions-bar { display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap; }
    .btn-promote { background: #22c55e; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; font-size: 14px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; }
    .btn-promote:hover { background: #16a34a; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; }
    thead { background: #1a1f2e; }
    th { padding: 13px 16px; text-align: left; font-size: 12px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: .5px; }
    td { padding: 13px 16px; font-size: 13px; color: #334155; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }
    tr:last-child td { border-bottom: none; }
    tr:hover td { background: #f8fafc; }

    .position-badge { width: 32px; height: 32px; border-radius: 50%; background: #f59e0b; color: #fff; font-weight: 800; font-size: 14px; display: flex; align-items: center; justify-content: center; }
    .position-badge.first { background: #22c55e; }

    .btn-remove { background: #fee2e2; color: #dc2626; border: none; padding: 5px 10px; border-radius: 6px; font-size: 12px; cursor: pointer; font-weight: 600; }
    .btn-remove:hover { background: #fecaca; }

    .empty-state { text-align: center; padding: 60px 20px; color: #94a3b8; }
    .empty-state .icon { font-size: 48px; margin-bottom: 12px; }
    .empty-state h3 { font-size: 18px; font-weight: 700; color: #475569; margin-bottom: 6px; }
</style>

<div class=\"main\">

    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["success"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 58
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 61
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
    <div class=\"page-header\">
        <h1>⏳ Liste d'attente</h1>
        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"back-btn\">← Retour aux événements</a>
    </div>

    <div class=\"event-card\">
        <div style=\"font-size:40px;\">📅</div>
        <div class=\"event-info\" style=\"flex:1;\">
            <h2>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 72, $this->source); })()), "title", [], "any", false, false, false, 72), "html", null, true);
        yield "</h2>
            <p>";
        // line 73
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "date", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "date", [], "any", false, false, false, 73), "d/m/Y à H:i"), "html", null, true)) : (""));
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "lieu", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
        </div>
        <span class=\"badge badge-";
        // line 75
        yield ((((isset($context["placesDisponibles"]) || array_key_exists("placesDisponibles", $context) ? $context["placesDisponibles"] : (function () { throw new RuntimeError('Variable "placesDisponibles" does not exist.', 75, $this->source); })()) > 0)) ? ("green") : ("red"));
        yield "\">
            ";
        // line 76
        yield ((((isset($context["placesDisponibles"]) || array_key_exists("placesDisponibles", $context) ? $context["placesDisponibles"] : (function () { throw new RuntimeError('Variable "placesDisponibles" does not exist.', 76, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("✅ " . (isset($context["placesDisponibles"]) || array_key_exists("placesDisponibles", $context) ? $context["placesDisponibles"] : (function () { throw new RuntimeError('Variable "placesDisponibles" does not exist.', 76, $this->source); })())) . " place(s) libre(s)"), "html", null, true)) : ("🔴 Complet"));
        yield "
        </span>
    </div>

    <div class=\"stats-row\">
        <div class=\"stat-box\">
            <div class=\"num\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["waitlist"]) || array_key_exists("waitlist", $context) ? $context["waitlist"] : (function () { throw new RuntimeError('Variable "waitlist" does not exist.', 82, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"lbl\">En attente</div>
        </div>
        <div class=\"stat-box\">
            <div class=\"num\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 86, $this->source); })()), "capacity", [], "any", false, false, false, 86), "html", null, true);
        yield "</div>
            <div class=\"lbl\">Capacité max</div>
        </div>
        <div class=\"stat-box\">
            <div class=\"num\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placesDisponibles"]) || array_key_exists("placesDisponibles", $context) ? $context["placesDisponibles"] : (function () { throw new RuntimeError('Variable "placesDisponibles" does not exist.', 90, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"lbl\">Places libres</div>
        </div>
    </div>

    ";
        // line 95
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["waitlist"]) || array_key_exists("waitlist", $context) ? $context["waitlist"] : (function () { throw new RuntimeError('Variable "waitlist" does not exist.', 95, $this->source); })())) > 0)) {
            // line 96
            yield "    <div class=\"actions-bar\">
        <form method=\"post\" action=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_promote", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn-promote\" onclick=\"return confirm('Promouvoir le prochain sur la liste ?')\">
                🚀 Promouvoir le suivant
            </button>
        </form>
        <span style=\"font-size:13px;color:#64748b;align-self:center;\">
            Promeut automatiquement #1 et lui envoie un email de confirmation.
        </span>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Places</th>
                <th>Inscrit le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["waitlist"]) || array_key_exists("waitlist", $context) ? $context["waitlist"] : (function () { throw new RuntimeError('Variable "waitlist" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["i"] => $context["entry"]) {
                // line 122
                yield "            <tr>
                <td>
                    <div class=\"position-badge ";
                // line 124
                yield ((($context["i"] == 0)) ? ("first") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] + 1), "html", null, true);
                yield "</div>
                </td>
                <td><strong>";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "nom", [], "any", false, false, false, 126), "html", null, true);
                yield "</strong></td>
                <td>";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "email", [], "any", false, false, false, 127), "html", null, true);
                yield "</td>
                <td>";
                // line 128
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "telephone", [], "any", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "telephone", [], "any", false, false, false, 128)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "telephone", [], "any", false, false, false, 128), "html", null, true)) : ("—"));
                yield "</td>
                <td><span class=\"badge badge-orange\">";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "nombrePlaces", [], "any", false, false, false, 129), "html", null, true);
                yield " place(s)</span></td>
                <td>";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "dateReservation", [], "any", false, false, false, 130), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                <td>
                    <form method=\"post\" action=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_waitlist_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\" style=\"display:inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("remove" . CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "any", false, false, false, 133))), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"btn-remove\" onclick=\"return confirm('Supprimer cette entrée ?')\">🗑 Retirer</button>
                    </form>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['i'], $context['entry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "        </tbody>
    </table>

    ";
        } else {
            // line 143
            yield "    <div class=\"empty-state\">
        <div class=\"icon\">🎉</div>
        <h3>Liste d'attente vide</h3>
        <p>Personne n'est en attente pour cet événement.</p>
    </div>
    ";
        }
        // line 149
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "evenement/waitlist.html.twig";
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
        return array (  366 => 149,  358 => 143,  352 => 139,  340 => 133,  336 => 132,  331 => 130,  327 => 129,  323 => 128,  319 => 127,  315 => 126,  308 => 124,  304 => 122,  300 => 121,  274 => 98,  270 => 97,  267 => 96,  265 => 95,  257 => 90,  250 => 86,  243 => 82,  234 => 76,  230 => 75,  223 => 73,  219 => 72,  210 => 66,  205 => 63,  196 => 61,  191 => 60,  182 => 58,  178 => 57,  125 => 6,  112 => 5,  89 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Liste d'attente — {{ evenement.title }}{% endblock %}
{% block page_title %}LISTE D'ATTENTE{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; }
    .main { padding: 32px; max-width: 1000px; margin: 0 auto; }
    .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 28px; flex-wrap: wrap; gap: 12px; }
    .page-header h1 { font-size: 22px; font-weight: 700; color: #0f172a; }
    .back-btn { display: inline-flex; align-items: center; gap: 6px; background: #f1f5f9; color: #475569; padding: 9px 16px; border-radius: 8px; text-decoration: none; font-size: 13px; font-weight: 600; }
    .back-btn:hover { background: #e2e8f0; }

    .event-card { background: #fff; border-radius: 14px; border: 1px solid #e2e8f0; padding: 20px 24px; margin-bottom: 24px; display: flex; align-items: center; gap: 20px; }
    .event-info h2 { font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 4px; }
    .event-info p  { font-size: 13px; color: #64748b; }
    .badge { display: inline-flex; align-items: center; gap: 6px; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 700; }
    .badge-orange { background: #fef3c7; color: #d97706; }
    .badge-green  { background: #dcfce7; color: #16a34a; }
    .badge-red    { background: #fee2e2; color: #dc2626; }

    .stats-row { display: flex; gap: 16px; margin-bottom: 24px; flex-wrap: wrap; }
    .stat-box { background: #fff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 16px 20px; flex: 1; min-width: 140px; text-align: center; }
    .stat-box .num { font-size: 28px; font-weight: 800; color: #0f172a; }
    .stat-box .lbl { font-size: 12px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: .5px; margin-top: 4px; }

    .actions-bar { display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap; }
    .btn-promote { background: #22c55e; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; font-size: 14px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; }
    .btn-promote:hover { background: #16a34a; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; }
    thead { background: #1a1f2e; }
    th { padding: 13px 16px; text-align: left; font-size: 12px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: .5px; }
    td { padding: 13px 16px; font-size: 13px; color: #334155; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }
    tr:last-child td { border-bottom: none; }
    tr:hover td { background: #f8fafc; }

    .position-badge { width: 32px; height: 32px; border-radius: 50%; background: #f59e0b; color: #fff; font-weight: 800; font-size: 14px; display: flex; align-items: center; justify-content: center; }
    .position-badge.first { background: #22c55e; }

    .btn-remove { background: #fee2e2; color: #dc2626; border: none; padding: 5px 10px; border-radius: 6px; font-size: 12px; cursor: pointer; font-weight: 600; }
    .btn-remove:hover { background: #fecaca; }

    .empty-state { text-align: center; padding: 60px 20px; color: #94a3b8; }
    .empty-state .icon { font-size: 48px; margin-bottom: 12px; }
    .empty-state h3 { font-size: 18px; font-weight: 700; color: #475569; margin-bottom: 6px; }
</style>

<div class=\"main\">

    {% for msg in app.flashes('success') %}
        <div class=\"flash flash-success\">✅ {{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"flash flash-error\">❌ {{ msg }}</div>
    {% endfor %}

    <div class=\"page-header\">
        <h1>⏳ Liste d'attente</h1>
        <a href=\"{{ path('evenement_index') }}\" class=\"back-btn\">← Retour aux événements</a>
    </div>

    <div class=\"event-card\">
        <div style=\"font-size:40px;\">📅</div>
        <div class=\"event-info\" style=\"flex:1;\">
            <h2>{{ evenement.title }}</h2>
            <p>{{ evenement.date ? evenement.date|date('d/m/Y à H:i') : '' }} — {{ evenement.lieu }}</p>
        </div>
        <span class=\"badge badge-{{ placesDisponibles > 0 ? 'green' : 'red' }}\">
            {{ placesDisponibles > 0 ? '✅ ' ~ placesDisponibles ~ ' place(s) libre(s)' : '🔴 Complet' }}
        </span>
    </div>

    <div class=\"stats-row\">
        <div class=\"stat-box\">
            <div class=\"num\">{{ waitlist|length }}</div>
            <div class=\"lbl\">En attente</div>
        </div>
        <div class=\"stat-box\">
            <div class=\"num\">{{ evenement.capacity }}</div>
            <div class=\"lbl\">Capacité max</div>
        </div>
        <div class=\"stat-box\">
            <div class=\"num\">{{ placesDisponibles }}</div>
            <div class=\"lbl\">Places libres</div>
        </div>
    </div>

    {% if waitlist|length > 0 %}
    <div class=\"actions-bar\">
        <form method=\"post\" action=\"{{ path('admin_waitlist_promote', {'id': evenement.id}) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote' ~ evenement.id) }}\">
            <button type=\"submit\" class=\"btn-promote\" onclick=\"return confirm('Promouvoir le prochain sur la liste ?')\">
                🚀 Promouvoir le suivant
            </button>
        </form>
        <span style=\"font-size:13px;color:#64748b;align-self:center;\">
            Promeut automatiquement #1 et lui envoie un email de confirmation.
        </span>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Places</th>
                <th>Inscrit le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {% for i, entry in waitlist %}
            <tr>
                <td>
                    <div class=\"position-badge {{ i == 0 ? 'first' : '' }}\">{{ i + 1 }}</div>
                </td>
                <td><strong>{{ entry.nom }}</strong></td>
                <td>{{ entry.email }}</td>
                <td>{{ entry.telephone ?? '—' }}</td>
                <td><span class=\"badge badge-orange\">{{ entry.nombrePlaces }} place(s)</span></td>
                <td>{{ entry.dateReservation|date('d/m/Y H:i') }}</td>
                <td>
                    <form method=\"post\" action=\"{{ path('admin_waitlist_remove', {'id': entry.id}) }}\" style=\"display:inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('remove' ~ entry.id) }}\">
                        <button type=\"submit\" class=\"btn-remove\" onclick=\"return confirm('Supprimer cette entrée ?')\">🗑 Retirer</button>
                    </form>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    {% else %}
    <div class=\"empty-state\">
        <div class=\"icon\">🎉</div>
        <h3>Liste d'attente vide</h3>
        <p>Personne n'est en attente pour cet événement.</p>
    </div>
    {% endif %}

</div>
{% endblock %}
", "evenement/waitlist.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\evenement\\waitlist.html.twig");
    }
}
