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

/* reservation/payment_success.html.twig */
class __TwigTemplate_b8ce7e01c10f9c2c3782e05850b9e27b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/payment_success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/payment_success.html.twig"));

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

        yield "Paiement Evenement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<style>
    #content { padding: 0 !important; background: #f8fafc; }
    .page { min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px; }
    .card { width: 100%; max-width: 560px; background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08); padding: 40px; text-align: center; }
    .icon { font-size: 60px; margin-bottom: 16px; }
    .title { font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 8px; }
    .subtitle { color: #64748b; line-height: 1.6; margin-bottom: 24px; }
    .summary { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 18px; text-align: left; margin-bottom: 24px; }
    .row { display: flex; justify-content: space-between; gap: 16px; padding: 8px 0; font-size: 14px; color: #475569; }
    .row strong { color: #0f172a; }
    .actions { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; }
    .btn { display: inline-flex; align-items: center; justify-content: center; padding: 12px 18px; border-radius: 10px; font-weight: 700; text-decoration: none; border: 1px solid #e2e8f0; }
    .btn-primary { background: #22c55e; color: #fff; border-color: #22c55e; }
    .btn-secondary { background: #fff; color: #0f172a; }
</style>

<div class=\"page\">
    <div class=\"card\">
        ";
        // line 23
        if (((isset($context["payment_status"]) || array_key_exists("payment_status", $context) ? $context["payment_status"] : (function () { throw new RuntimeError('Variable "payment_status" does not exist.', 23, $this->source); })()) == "paid")) {
            // line 24
            yield "            <div class=\"icon\">OK</div>
            <div class=\"title\">Paiement confirme</div>
            <p class=\"subtitle\">Votre reservation pour <strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "evenement", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
            yield "</strong> est maintenant valide.</p>
        ";
        } else {
            // line 28
            yield "            <div class=\"icon\">...</div>
            <div class=\"title\">Paiement en attente</div>
            <p class=\"subtitle\">Stripe a bien cree la session, mais le paiement n'est pas encore confirme.</p>
        ";
        }
        // line 32
        yield "
        <div class=\"summary\">
            <div class=\"row\"><span>Reservation</span><strong>#";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Evenement</span><strong>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "evenement", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Montant</span><strong>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 36, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 36, $this->source); })()), "devise", [], "any", false, false, false, 36)), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Email</span><strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customer_email"]) || array_key_exists("customer_email", $context) ? $context["customer_email"] : (function () { throw new RuntimeError('Variable "customer_email" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Statut</span><strong>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_status"]) || array_key_exists("payment_status", $context) ? $context["payment_status"] : (function () { throw new RuntimeError('Variable "payment_status" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Stripe session</span><strong>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_session"]) || array_key_exists("stripe_session", $context) ? $context["stripe_session"] : (function () { throw new RuntimeError('Variable "stripe_session" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</strong></div>
        </div>

        <div class=\"actions\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"btn btn-primary\">Mes reservations</a>
            <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\" class=\"btn btn-secondary\">Retour aux evenements</a>
        </div>
    </div>
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
        return "reservation/payment_success.html.twig";
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
        return array (  174 => 44,  170 => 43,  163 => 39,  159 => 38,  155 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 32,  131 => 28,  126 => 26,  122 => 24,  120 => 23,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Paiement Evenement{% endblock %}

{% block body %}
<style>
    #content { padding: 0 !important; background: #f8fafc; }
    .page { min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px; }
    .card { width: 100%; max-width: 560px; background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08); padding: 40px; text-align: center; }
    .icon { font-size: 60px; margin-bottom: 16px; }
    .title { font-size: 28px; font-weight: 800; color: #0f172a; margin-bottom: 8px; }
    .subtitle { color: #64748b; line-height: 1.6; margin-bottom: 24px; }
    .summary { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 18px; text-align: left; margin-bottom: 24px; }
    .row { display: flex; justify-content: space-between; gap: 16px; padding: 8px 0; font-size: 14px; color: #475569; }
    .row strong { color: #0f172a; }
    .actions { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; }
    .btn { display: inline-flex; align-items: center; justify-content: center; padding: 12px 18px; border-radius: 10px; font-weight: 700; text-decoration: none; border: 1px solid #e2e8f0; }
    .btn-primary { background: #22c55e; color: #fff; border-color: #22c55e; }
    .btn-secondary { background: #fff; color: #0f172a; }
</style>

<div class=\"page\">
    <div class=\"card\">
        {% if payment_status == 'paid' %}
            <div class=\"icon\">OK</div>
            <div class=\"title\">Paiement confirme</div>
            <p class=\"subtitle\">Votre reservation pour <strong>{{ reservation.evenement.title }}</strong> est maintenant valide.</p>
        {% else %}
            <div class=\"icon\">...</div>
            <div class=\"title\">Paiement en attente</div>
            <p class=\"subtitle\">Stripe a bien cree la session, mais le paiement n'est pas encore confirme.</p>
        {% endif %}

        <div class=\"summary\">
            <div class=\"row\"><span>Reservation</span><strong>#{{ reservation.id }}</strong></div>
            <div class=\"row\"><span>Evenement</span><strong>{{ reservation.evenement.title }}</strong></div>
            <div class=\"row\"><span>Montant</span><strong>{{ amount|number_format(2, '.', ' ') }} {{ reservation.devise|upper }}</strong></div>
            <div class=\"row\"><span>Email</span><strong>{{ customer_email }}</strong></div>
            <div class=\"row\"><span>Statut</span><strong>{{ payment_status }}</strong></div>
            <div class=\"row\"><span>Stripe session</span><strong>{{ stripe_session }}</strong></div>
        </div>

        <div class=\"actions\">
            <a href=\"{{ path('reservation_my') }}\" class=\"btn btn-primary\">Mes reservations</a>
            <a href=\"{{ path('evenement_front') }}\" class=\"btn btn-secondary\">Retour aux evenements</a>
        </div>
    </div>
</div>
{% endblock %}
", "reservation/payment_success.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\payment_success.html.twig");
    }
}
