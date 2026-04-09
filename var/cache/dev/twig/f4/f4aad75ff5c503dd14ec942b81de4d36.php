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

/* payment/success.html.twig */
class __TwigTemplate_d896882fdba538eaef29f3132a3a5d6c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

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

        yield "Commande Confirmée";
        
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
        yield "<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\">
        <div class=\"bc-content\" style=\"display:flex;align-items:center;justify-content:center;min-height:80vh;\">
            <div class=\"bc-card\" style=\"text-align:center;max-width:520px;padding:52px 40px;\">

                ";
        // line 10
        if (((isset($context["payment_status"]) || array_key_exists("payment_status", $context) ? $context["payment_status"] : (function () { throw new RuntimeError('Variable "payment_status" does not exist.', 10, $this->source); })()) == "paid")) {
            // line 11
            yield "                    <div style=\"font-size:72px;margin-bottom:20px;animation:bounce .6s ease;\">✅</div>
                    <h2 style=\"font-size:28px;font-weight:800;color:#1E293B;margin-bottom:8px;\">Paiement réussi !</h2>
                    <p style=\"color:var(--bc-text-light);margin-bottom:28px;font-size:15px;\">
                        Votre commande de <strong style=\"color:var(--bc-teal);\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 14, $this->source); })()), 2, ".", ""), "html", null, true);
            yield " €</strong> a été confirmée.<br>
                        Merci pour votre achat !
                    </p>
                ";
        } else {
            // line 18
            yield "                    <div style=\"font-size:72px;margin-bottom:20px;\">⏳</div>
                    <h2 style=\"font-size:28px;font-weight:800;color:#F59E0B;margin-bottom:8px;\">Paiement en attente</h2>
                    <p style=\"color:var(--bc-text-light);margin-bottom:28px;font-size:15px;\">
                        Votre paiement de <strong>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 21, $this->source); })()), 2, ".", ""), "html", null, true);
            yield " €</strong> est en cours de traitement.
                    </p>
                ";
        }
        // line 24
        yield "
                ";
        // line 26
        yield "                <div style=\"background:var(--bc-bg);border-radius:var(--radius-sm);padding:20px;margin-bottom:28px;font-size:13px;color:var(--bc-text-mid);text-align:left;line-height:2;\">
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Numéro de commande</span>
                        <strong style=\"color:var(--bc-text);\">#";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["order_id"]) || array_key_exists("order_id", $context) ? $context["order_id"] : (function () { throw new RuntimeError('Variable "order_id" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</strong>
                    </div>
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Montant réglé</span>
                        <strong style=\"color:var(--bc-teal);\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 33, $this->source); })()), 2, ".", ""), "html", null, true);
        yield " €</strong>
                    </div>
                    ";
        // line 35
        if ((($tmp = (isset($context["customer_email"]) || array_key_exists("customer_email", $context) ? $context["customer_email"] : (function () { throw new RuntimeError('Variable "customer_email" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Email de confirmation</span>
                        <strong>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customer_email"]) || array_key_exists("customer_email", $context) ? $context["customer_email"] : (function () { throw new RuntimeError('Variable "customer_email" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "</strong>
                    </div>
                    ";
        }
        // line 41
        yield "                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Statut Stripe</span>
                        <strong style=\"color:";
        // line 43
        if (((isset($context["payment_status"]) || array_key_exists("payment_status", $context) ? $context["payment_status"] : (function () { throw new RuntimeError('Variable "payment_status" does not exist.', 43, $this->source); })()) == "paid")) {
            yield "#10B981";
        } else {
            yield "#F59E0B";
        }
        yield ";\">
                            ";
        // line 44
        yield ((((isset($context["payment_status"]) || array_key_exists("payment_status", $context) ? $context["payment_status"] : (function () { throw new RuntimeError('Variable "payment_status" does not exist.', 44, $this->source); })()) == "paid")) ? ("✅ Payé") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("⏳ " . (isset($context["payment_status"]) || array_key_exists("payment_status", $context) ? $context["payment_status"] : (function () { throw new RuntimeError('Variable "payment_status" does not exist.', 44, $this->source); })())), "html", null, true)));
        yield "
                        </strong>
                    </div>
                    <div style=\"display:flex;justify-content:space-between;margin-top:4px;\">
                        <span>Réf. Stripe</span>
                        <code style=\"font-size:11px;color:var(--bc-text-light);\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_session"]) || array_key_exists("stripe_session", $context) ? $context["stripe_session"] : (function () { throw new RuntimeError('Variable "stripe_session" does not exist.', 49, $this->source); })()), "html", null, true);
        yield "</code>
                    </div>
                </div>

                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
        yield "\" class=\"btn btn-primary\" style=\"padding:13px 32px;font-size:14px;\">
                    🛍 Continuer mes achats
                </a>
            </div>
        </div>
    </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 64
        yield "<style>
@keyframes bounce { 0%,100%{transform:scale(1)} 50%{transform:scale(1.15)} }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "payment/success.html.twig";
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
        return array (  204 => 64,  194 => 63,  177 => 53,  170 => 49,  162 => 44,  154 => 43,  150 => 41,  144 => 38,  140 => 36,  138 => 35,  133 => 33,  126 => 29,  121 => 26,  118 => 24,  112 => 21,  107 => 18,  100 => 14,  95 => 11,  93 => 10,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Commande Confirmée{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\">
        <div class=\"bc-content\" style=\"display:flex;align-items:center;justify-content:center;min-height:80vh;\">
            <div class=\"bc-card\" style=\"text-align:center;max-width:520px;padding:52px 40px;\">

                {% if payment_status == 'paid' %}
                    <div style=\"font-size:72px;margin-bottom:20px;animation:bounce .6s ease;\">✅</div>
                    <h2 style=\"font-size:28px;font-weight:800;color:#1E293B;margin-bottom:8px;\">Paiement réussi !</h2>
                    <p style=\"color:var(--bc-text-light);margin-bottom:28px;font-size:15px;\">
                        Votre commande de <strong style=\"color:var(--bc-teal);\">{{ amount|number_format(2, '.', '') }} €</strong> a été confirmée.<br>
                        Merci pour votre achat !
                    </p>
                {% else %}
                    <div style=\"font-size:72px;margin-bottom:20px;\">⏳</div>
                    <h2 style=\"font-size:28px;font-weight:800;color:#F59E0B;margin-bottom:8px;\">Paiement en attente</h2>
                    <p style=\"color:var(--bc-text-light);margin-bottom:28px;font-size:15px;\">
                        Votre paiement de <strong>{{ amount|number_format(2, '.', '') }} €</strong> est en cours de traitement.
                    </p>
                {% endif %}

                {# Order details #}
                <div style=\"background:var(--bc-bg);border-radius:var(--radius-sm);padding:20px;margin-bottom:28px;font-size:13px;color:var(--bc-text-mid);text-align:left;line-height:2;\">
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Numéro de commande</span>
                        <strong style=\"color:var(--bc-text);\">#{{ order_id }}</strong>
                    </div>
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Montant réglé</span>
                        <strong style=\"color:var(--bc-teal);\">{{ amount|number_format(2, '.', '') }} €</strong>
                    </div>
                    {% if customer_email %}
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Email de confirmation</span>
                        <strong>{{ customer_email }}</strong>
                    </div>
                    {% endif %}
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Statut Stripe</span>
                        <strong style=\"color:{% if payment_status == 'paid' %}#10B981{% else %}#F59E0B{% endif %};\">
                            {{ payment_status == 'paid' ? '✅ Payé' : '⏳ ' ~ payment_status }}
                        </strong>
                    </div>
                    <div style=\"display:flex;justify-content:space-between;margin-top:4px;\">
                        <span>Réf. Stripe</span>
                        <code style=\"font-size:11px;color:var(--bc-text-light);\">{{ stripe_session }}</code>
                    </div>
                </div>

                <a href=\"{{ path('marketplace_index') }}\" class=\"btn btn-primary\" style=\"padding:13px 32px;font-size:14px;\">
                    🛍 Continuer mes achats
                </a>
            </div>
        </div>
    </div>
    </div>

{% endblock %}

{% block stylesheets %}
<style>
@keyframes bounce { 0%,100%{transform:scale(1)} 50%{transform:scale(1.15)} }
</style>
{% endblock %}
", "payment/success.html.twig", "C:\\Users\\dhiaj_onolvpc\\Downloads\\FINAL\\FINAL\\templates\\payment\\success.html.twig");
    }
}
