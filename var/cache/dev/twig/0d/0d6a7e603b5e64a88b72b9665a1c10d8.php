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

/* payment/index.html.twig */
class __TwigTemplate_ae798c378c2969301851adb9583af10d extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

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

        yield "Paiement Sécurisé";
        
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
        <header class=\"bc-topbar\">
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn-icon\" title=\"Retour au panier\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">💳 Paiement Sécurisé</span>
        </header>

        <div class=\"bc-content\" style=\"display:flex;justify-content:center;align-items:flex-start;padding-top:32px;\">
            <div class=\"payment-page\">

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 16
            yield "                    <div class=\"alert alert-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 19
            yield "                    <div class=\"alert alert-danger\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
                <div class=\"payment-card\">
                    <div class=\"payment-title\">Paiement Sécurisé</div>
                    <p style=\"color:var(--bc-text-light);font-size:13px;margin-bottom:24px;\">
                        Vous allez être redirigé vers la plateforme sécurisée Stripe 🔒
                    </p>

                    ";
        // line 29
        yield "                    <div class=\"payment-amount\">
                        <span class=\"label\">Montant à régler :</span>
                        <span class=\"amount\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 31, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " €</span>
                    </div>

                    ";
        // line 35
        yield "                    <div style=\"display:flex;align-items:center;justify-content:center;gap:10px;margin:20px 0 24px;background:var(--bc-bg);border-radius:var(--radius-sm);padding:14px;\">
                        <svg width=\"50\" height=\"21\" viewBox=\"0 0 50 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path fill=\"#635BFF\" d=\"M19.3 8.08c0-2.7-1.3-4.83-3.8-4.83-2.5 0-4.02 2.13-4.02 4.81 0 3.17 1.8 4.77 4.37 4.77 1.26 0 2.2-.29 2.92-.69v-2.1c-.72.36-1.55.56-2.6.56-1.03 0-1.94-.36-2.06-1.6h5.18c0-.14.01-.7.01-1zM14.1 7.3c0-1.19.73-1.68 1.4-1.68.65 0 1.33.49 1.33 1.68H14.1zM8.65 3.25l-2.1.45V1.5L4.44 2v10.57h2.11V5.7c.5-.23 1.34-.32 1.8-.18l.3-2.27zM2.11 3.69H0V12.6h2.11V3.69zM1.05 2.84c.67 0 1.2-.54 1.2-1.2C2.25.54 1.72 0 1.05 0 .37 0 0 .54 0 1.64c0 .66.37 1.2 1.05 1.2zM31.35 5.1c0-.67.55-.92 1.44-.92.64 0 1.44.2 2.08.55V2.5a5.57 5.57 0 0 0-2.08-.38c-1.72 0-2.86.9-2.86 2.4 0 2.34 3.22 1.97 3.22 2.98 0 .79-.69 1.04-1.64 1.04-.9 0-1.82-.37-2.62-.86v2.34c.88.38 1.77.54 2.62.54 1.8 0 3.03-.88 3.03-2.41 0-2.53-3.19-2.06-3.19-3.06zM22.3 1.74l-2.08.44v1.51h-1.1v1.84h1.1v3.53c0 1.56.99 2.16 2.4 2.16.57 0 1.26-.09 1.72-.26V9.22c-.32.12-.66.17-1.04.17-.55 0-.97-.18-.97-.83V5.53h2.01V3.69H22.3V1.74zM49.5 8.08c0-2.7-1.3-4.83-3.8-4.83-2.5 0-4.02 2.13-4.02 4.81 0 3.17 1.8 4.77 4.36 4.77 1.27 0 2.21-.29 2.93-.69v-2.1c-.73.36-1.55.56-2.61.56-1.02 0-1.93-.36-2.05-1.6h5.18c0-.14.01-.7.01-1zm-5.19-.78c0-1.19.72-1.68 1.39-1.68.65 0 1.33.49 1.33 1.68h-2.72z\"/>
                        </svg>
                        <span style=\"color:var(--bc-text-light);font-size:13px;\">Paiement 100% sécurisé via Stripe</span>
                    </div>

                    ";
        // line 43
        yield "                    <form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_checkout");
        yield "\" id=\"paymentForm\">
                        <input type=\"hidden\" name=\"total\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("payment"), "html", null, true);
        yield "\">

                        <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"justify-content:center;padding:15px;font-size:15px;margin-top:8px;\" id=\"payBtn\">
                            💳 Payer ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " € avec Stripe
                        </button>
                    </form>

                    <div style=\"display:flex;align-items:center;justify-content:center;gap:12px;margin-top:20px;color:var(--bc-text-light);font-size:12px;\">
                        <span>🔒 SSL sécurisé</span>
                        <span>•</span>
                        <span>Visa / Mastercard / CB</span>
                        <span>•</span>
                        <span>Données cryptées</span>
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

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.getElementById('paymentForm').addEventListener('submit', function() {
    var btn = document.getElementById('payBtn');
    btn.disabled = true;
    btn.innerHTML = '⏳ Redirection vers Stripe...';
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "payment/index.html.twig";
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
        return array (  208 => 69,  198 => 68,  171 => 48,  165 => 45,  161 => 44,  156 => 43,  147 => 35,  141 => 31,  137 => 29,  128 => 21,  119 => 19,  114 => 18,  105 => 16,  101 => 15,  91 => 8,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Paiement Sécurisé{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\">
        <header class=\"bc-topbar\">
            <a href=\"{{ path('cart_index') }}\" class=\"btn-icon\" title=\"Retour au panier\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">💳 Paiement Sécurisé</span>
        </header>

        <div class=\"bc-content\" style=\"display:flex;justify-content:center;align-items:flex-start;padding-top:32px;\">
            <div class=\"payment-page\">

                {% for msg in app.flashes('success') %}
                    <div class=\"alert alert-success\">✅ {{ msg }} <button class=\"alert-close\">×</button></div>
                {% endfor %}
                {% for msg in app.flashes('error') %}
                    <div class=\"alert alert-danger\">⚠ {{ msg }} <button class=\"alert-close\">×</button></div>
                {% endfor %}

                <div class=\"payment-card\">
                    <div class=\"payment-title\">Paiement Sécurisé</div>
                    <p style=\"color:var(--bc-text-light);font-size:13px;margin-bottom:24px;\">
                        Vous allez être redirigé vers la plateforme sécurisée Stripe 🔒
                    </p>

                    {# Amount #}
                    <div class=\"payment-amount\">
                        <span class=\"label\">Montant à régler :</span>
                        <span class=\"amount\">{{ total|number_format(2, '.', ' ') }} €</span>
                    </div>

                    {# Stripe branding #}
                    <div style=\"display:flex;align-items:center;justify-content:center;gap:10px;margin:20px 0 24px;background:var(--bc-bg);border-radius:var(--radius-sm);padding:14px;\">
                        <svg width=\"50\" height=\"21\" viewBox=\"0 0 50 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path fill=\"#635BFF\" d=\"M19.3 8.08c0-2.7-1.3-4.83-3.8-4.83-2.5 0-4.02 2.13-4.02 4.81 0 3.17 1.8 4.77 4.37 4.77 1.26 0 2.2-.29 2.92-.69v-2.1c-.72.36-1.55.56-2.6.56-1.03 0-1.94-.36-2.06-1.6h5.18c0-.14.01-.7.01-1zM14.1 7.3c0-1.19.73-1.68 1.4-1.68.65 0 1.33.49 1.33 1.68H14.1zM8.65 3.25l-2.1.45V1.5L4.44 2v10.57h2.11V5.7c.5-.23 1.34-.32 1.8-.18l.3-2.27zM2.11 3.69H0V12.6h2.11V3.69zM1.05 2.84c.67 0 1.2-.54 1.2-1.2C2.25.54 1.72 0 1.05 0 .37 0 0 .54 0 1.64c0 .66.37 1.2 1.05 1.2zM31.35 5.1c0-.67.55-.92 1.44-.92.64 0 1.44.2 2.08.55V2.5a5.57 5.57 0 0 0-2.08-.38c-1.72 0-2.86.9-2.86 2.4 0 2.34 3.22 1.97 3.22 2.98 0 .79-.69 1.04-1.64 1.04-.9 0-1.82-.37-2.62-.86v2.34c.88.38 1.77.54 2.62.54 1.8 0 3.03-.88 3.03-2.41 0-2.53-3.19-2.06-3.19-3.06zM22.3 1.74l-2.08.44v1.51h-1.1v1.84h1.1v3.53c0 1.56.99 2.16 2.4 2.16.57 0 1.26-.09 1.72-.26V9.22c-.32.12-.66.17-1.04.17-.55 0-.97-.18-.97-.83V5.53h2.01V3.69H22.3V1.74zM49.5 8.08c0-2.7-1.3-4.83-3.8-4.83-2.5 0-4.02 2.13-4.02 4.81 0 3.17 1.8 4.77 4.36 4.77 1.27 0 2.21-.29 2.93-.69v-2.1c-.73.36-1.55.56-2.61.56-1.02 0-1.93-.36-2.05-1.6h5.18c0-.14.01-.7.01-1zm-5.19-.78c0-1.19.72-1.68 1.39-1.68.65 0 1.33.49 1.33 1.68h-2.72z\"/>
                        </svg>
                        <span style=\"color:var(--bc-text-light);font-size:13px;\">Paiement 100% sécurisé via Stripe</span>
                    </div>

                    {# Checkout form — posts to /payment/checkout which creates a Stripe session #}
                    <form method=\"post\" action=\"{{ path('payment_checkout') }}\" id=\"paymentForm\">
                        <input type=\"hidden\" name=\"total\" value=\"{{ total }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('payment') }}\">

                        <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"justify-content:center;padding:15px;font-size:15px;margin-top:8px;\" id=\"payBtn\">
                            💳 Payer {{ total|number_format(2, '.', ' ') }} € avec Stripe
                        </button>
                    </form>

                    <div style=\"display:flex;align-items:center;justify-content:center;gap:12px;margin-top:20px;color:var(--bc-text-light);font-size:12px;\">
                        <span>🔒 SSL sécurisé</span>
                        <span>•</span>
                        <span>Visa / Mastercard / CB</span>
                        <span>•</span>
                        <span>Données cryptées</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.getElementById('paymentForm').addEventListener('submit', function() {
    var btn = document.getElementById('payBtn');
    btn.disabled = true;
    btn.innerHTML = '⏳ Redirection vers Stripe...';
});
</script>
{% endblock %}
", "payment/index.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\payment\\index.html.twig");
    }
}
