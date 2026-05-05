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
class __TwigTemplate_d88e87e44b43b3e86b1a4ee1737d8f7f extends Template
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
        yield "Commande Confirmée";
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
        yield "<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    <div class=\"bc-main\">
        <div class=\"bc-content\" style=\"display:flex;align-items:center;justify-content:center;min-height:80vh;\">
            <div class=\"bc-card\" style=\"text-align:center;max-width:520px;padding:52px 40px;\">

                ";
        // line 10
        if ((($context["payment_status"] ?? null) == "paid")) {
            // line 11
            yield "                    <div style=\"font-size:72px;margin-bottom:20px;animation:bounce .6s ease;\">✅</div>
                    <h2 style=\"font-size:28px;font-weight:800;color:#1E293B;margin-bottom:8px;\">Paiement réussi !</h2>
                    <p style=\"color:var(--bc-text-light);margin-bottom:28px;font-size:15px;\">
                        Votre commande de <strong style=\"color:var(--bc-teal);\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount"] ?? null), 2, ".", ""), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount"] ?? null), 2, ".", ""), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["order_id"] ?? null), "html", null, true);
        yield "</strong>
                    </div>
                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Montant réglé</span>
                        <strong style=\"color:var(--bc-teal);\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["amount"] ?? null), 2, ".", ""), "html", null, true);
        yield " €</strong>
                    </div>
                    ";
        // line 35
        if ((($tmp = ($context["customer_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Email de confirmation</span>
                        <strong>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["customer_email"] ?? null), "html", null, true);
            yield "</strong>
                    </div>
                    ";
        }
        // line 41
        yield "                    <div style=\"display:flex;justify-content:space-between;\">
                        <span>Statut Stripe</span>
                        <strong style=\"color:";
        // line 43
        if ((($context["payment_status"] ?? null) == "paid")) {
            yield "#10B981";
        } else {
            yield "#F59E0B";
        }
        yield ";\">
                            ";
        // line 44
        yield (((($context["payment_status"] ?? null) == "paid")) ? ("✅ Payé") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("⏳ " . ($context["payment_status"] ?? null)), "html", null, true)));
        yield "
                        </strong>
                    </div>
                    <div style=\"display:flex;justify-content:space-between;margin-top:4px;\">
                        <span>Réf. Stripe</span>
                        <code style=\"font-size:11px;color:var(--bc-text-light);\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["stripe_session"] ?? null), "html", null, true);
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
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "<style>
@keyframes bounce { 0%,100%{transform:scale(1)} 50%{transform:scale(1.15)} }
</style>
";
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
        return array (  183 => 64,  176 => 63,  162 => 53,  155 => 49,  147 => 44,  139 => 43,  135 => 41,  129 => 38,  125 => 36,  123 => 35,  118 => 33,  111 => 29,  106 => 26,  103 => 24,  97 => 21,  92 => 18,  85 => 14,  80 => 11,  78 => 10,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "payment/success.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\payment\\success.html.twig");
    }
}
