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
class __TwigTemplate_e6f6c8c5802058c6fd05a5394e9e8aae extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Paiement Evenement";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if ((($context["payment_status"] ?? null) == "paid")) {
            // line 24
            yield "            <div class=\"icon\">OK</div>
            <div class=\"title\">Paiement confirme</div>
            <p class=\"subtitle\">Votre reservation pour <strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "evenement", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Evenement</span><strong>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "evenement", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Montant</span><strong>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount"] ?? null), 2, ".", " "), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "devise", [], "any", false, false, false, 36)), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Email</span><strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["customer_email"] ?? null), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Statut</span><strong>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["payment_status"] ?? null), "html", null, true);
        yield "</strong></div>
            <div class=\"row\"><span>Stripe session</span><strong>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["stripe_session"] ?? null), "html", null, true);
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
        return array (  144 => 44,  140 => 43,  133 => 39,  129 => 38,  125 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 32,  101 => 28,  96 => 26,  92 => 24,  90 => 23,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/payment_success.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\payment_success.html.twig");
    }
}
