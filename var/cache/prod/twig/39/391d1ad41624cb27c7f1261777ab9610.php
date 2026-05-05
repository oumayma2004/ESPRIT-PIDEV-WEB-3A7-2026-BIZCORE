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
class __TwigTemplate_e33f23649c725062456ce840ec7d9988 extends Template
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
            'meta_description' => [$this, 'block_meta_description'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_front.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mes Reservations";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Consultez vos reservations Bizcore, suivez les paiements en attente et relancez rapidement vos reservations evenement.";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { font-size: 14px; scroll-behavior: smooth; }
body {
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background: #f8fafc;
    color: #1e293b;
    -webkit-font-smoothing: antialiased;
}
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }
input, textarea, select, button { font-family: inherit; }

.hero {
    background: linear-gradient(135deg, #0f172a, #1e3a5f);
    padding: 48px 40px;
    color: #fff;
}
.hero h1 { font-size: 32px; font-weight: 800; margin-bottom: 8px; }
.hero p { color: #dbeafe; font-size: 15px; }

.content { max-width: 960px; margin: 40px auto; padding: 0 24px; }

.section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    margin-bottom: 24px;
}
.section-title { font-size: 20px; font-weight: 700; color: #0f172a; }

.btn-browse {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 38px;
    gap: 7px;
    background: #16a34a;
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    padding: 9px 18px;
    border-radius: 8px;
    text-decoration: none;
    white-space: nowrap;
}
.btn-browse:hover { background: #15803d; }

.res-list { display: flex; flex-direction: column; gap: 16px; }

.res-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.04);
    display: flex;
    transition: box-shadow 0.2s;
}
.res-card:hover { box-shadow: 0 6px 20px rgba(0,0,0,0.08); }

.res-card-color { width: 6px; flex-shrink: 0; }
.color-amber { background: #d97706; }

.res-card-body {
    flex: 1;
    padding: 20px 24px;
    display: flex;
    align-items: center;
    gap: 20px;
    min-width: 0;
}

.res-event-img {
    width: 64px;
    height: 64px;
    object-fit: cover;
    border-radius: 10px;
    flex-shrink: 0;
    border: 1px solid #e2e8f0;
}
.res-event-placeholder {
    width: 64px;
    height: 64px;
    background: #f1f5f9;
    color: #334155;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 800;
    flex-shrink: 0;
}

.res-info { flex: 1; min-width: 0; }
.res-event-title { font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 6px; }
.res-meta { display: flex; flex-wrap: wrap; gap: 8px 14px; }
.res-meta span {
    font-size: 12px;
    color: #475569;
    display: flex;
    align-items: center;
    gap: 5px;
    line-height: 1.35;
}

.res-right {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 10px;
    flex-shrink: 0;
}

.badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
}
.badge-amber { background: #fef3c7; color: #92400e; }

.res-actions { display: flex; flex-wrap: wrap; justify-content: flex-end; gap: 8px; }

.btn-sm {
    min-height: 34px;
    padding: 7px 14px;
    border-radius: 7px;
    font-size: 12px;
    font-weight: 700;
    font-family: inherit;
    text-decoration: none;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    transition: all 0.15s;
    white-space: nowrap;
}
.btn-edit-sm { background: #fef3c7; color: #92400e; border: 1px solid #fde68a; }
.btn-edit-sm:hover { background: #fde68a; }
.btn-pay-sm  { background: #dbeafe; color: #1d4ed8; border: 1px solid #bfdbfe; }
.btn-pay-sm:hover  { background: #bfdbfe; }
.btn-del-sm  { background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; }
.btn-del-sm:hover  { background: #fecaca; }

.empty { text-align: center; padding: 80px 20px; color: #475569; }
.empty .empty-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 16px;
    border-radius: 50%;
    background: #e2e8f0;
    color: #334155;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 800;
}
.empty h3 { font-size: 18px; color: #334155; margin-bottom: 8px; }
.empty p { font-size: 14px; margin-bottom: 24px; }

.flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
.flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #166534; }
.flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #b91c1c; }

footer {
    background: #0f172a;
    color: #cbd5e1;
    text-align: center;
    padding: 24px;
    font-size: 13px;
    margin-top: 60px;
}
footer span { color: #86efac; font-weight: 700; }

@media (max-width: 760px) {
    .hero { padding: 36px 22px; }
    .hero h1 { font-size: 28px; }
    .content { margin: 28px auto; padding: 0 16px; }
    .section-header { align-items: stretch; flex-direction: column; }
    .res-card-body { align-items: stretch; flex-direction: column; }
    .res-right { align-items: flex-start; }
    .res-actions { justify-content: flex-start; }
}
</style>
";
        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 203
        yield "<div class=\"hero\">
    <h1>Mes Reservations</h1>
    <p>Suivez vos paiements et gerez vos evenements depuis un seul endroit.</p>
</div>

<div class=\"content\">
    ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 209));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 210
            yield "        <div class=\"flash flash-success\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 212));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 213
            yield "        <div class=\"flash flash-error\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "
    <div class=\"section-header\">
        <div class=\"section-title\">
            ";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pendingReservations"] ?? null)), "html", null, true);
        yield "
            reservation";
        // line 219
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pendingReservations"] ?? null)) != 1)) ? ("s") : (""));
        yield " en attente
        </div>
        <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\" class=\"btn-browse\">Voir les evenements</a>
    </div>

    <div class=\"res-list\">
        ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pendingReservations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 226
            yield "            ";
            $context["evenement"] = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "evenement", [], "any", false, false, false, 226);
            // line 227
            yield "            <div class=\"res-card\">
                <div class=\"res-card-color color-amber\"></div>
                <div class=\"res-card-body\">

                    ";
            // line 231
            if ((($context["evenement"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 231))) {
                // line 232
                yield "                        <img
                            src=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_event_thumb", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 233)]), "html", null, true);
                yield "\"
                            class=\"res-event-img\"
                            alt=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 235), "html", null, true);
                yield "\"
                            width=\"64\"
                            height=\"64\"
                            loading=\"lazy\"
                            decoding=\"async\"
                        >
                    ";
            } else {
                // line 242
                yield "                        <div class=\"res-event-placeholder\" aria-hidden=\"true\">EV</div>
                    ";
            }
            // line 244
            yield "
                    <div class=\"res-info\">
                        <div class=\"res-event-title\">
                            ";
            // line 247
            yield (((($tmp = ($context["evenement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 247), "html", null, true)) : ("Evenement"));
            yield "
                        </div>
                        <div class=\"res-meta\">
                            <span>Nom&nbsp;: ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nom", [], "any", false, false, false, 250), "html", null, true);
            yield "</span>
                            <span>Email&nbsp;: ";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "email", [], "any", false, false, false, 251), "html", null, true);
            yield "</span>
                            <span>Tel&nbsp;: ";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "telephone", [], "any", false, false, false, 252), "html", null, true);
            yield "</span>
                            <span>Places&nbsp;: ";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nombrePlaces", [], "any", false, false, false, 253), "html", null, true);
            yield "</span>
                            <span>Date&nbsp;: ";
            // line 254
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateReservation", [], "any", false, false, false, 254), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
                            <span>
                                Total&nbsp;:
                                ";
            // line 257
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 258
$context["r"], "montantTotal", [], "any", false, false, false, 258), "html", null, true)) : ((((($tmp =             // line 259
($context["evenement"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 259) * CoreExtension::getAttribute($this->env, $this->source, $context["r"], "nombrePlaces", [], "any", false, false, false, 259)), "html", null, true)) : (0))));
            // line 260
            yield "
                                ";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "devise", [], "any", false, false, false, 261)), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>

                    <div class=\"res-right\">
                        <span class=\"badge badge-amber\">En attente de paiement</span>
                        <div class=\"res-actions\">
                            
                                ";
            // line 271
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 271)]), "html", null, true);
            yield "\" class=\"btn-sm btn-edit-sm\">Modifier</a>

                            <form
                                method=\"post\"
                                action=\"";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_pay", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 275)]), "html", null, true);
            yield "\"
                                style=\"display:inline;\"
                            >
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("pay" . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 278))), "html", null, true);
            yield "\">
                                <button class=\"btn-sm btn-pay-sm\" type=\"submit\">Payer</button>
                            </form>

                            <form
                                method=\"post\"
                                action=\"";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 284)]), "html", null, true);
            yield "\"
                                style=\"display:inline;\"
                            >
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 287))), "html", null, true);
            yield "\">
                                <button
                                    class=\"btn-sm btn-del-sm\"
                                    type=\"submit\"
                                    onclick=\"return confirm('Annuler cette reservation ?')\"
                                >Annuler</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 299
        if (!$context['_iterated']) {
            // line 300
            yield "            <div class=\"empty\">
                <div class=\"empty-icon\" aria-hidden=\"true\">EV</div>
                <h3>Aucune reservation en attente</h3>
                <p>Toutes vos reservations sont payees ou vous n'avez pas encore reserve.</p>
                <a href=\"";
            // line 304
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
            yield "\" class=\"btn-browse\">
                    Decouvrir les evenements
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "    </div>
</div>

<footer>
    2026 <span>Bizcore</span> &mdash; Tous droits reserves
</footer>
";
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
        return array (  499 => 309,  488 => 304,  482 => 300,  480 => 299,  463 => 287,  457 => 284,  448 => 278,  442 => 275,  434 => 271,  422 => 261,  419 => 260,  417 => 259,  416 => 258,  415 => 257,  409 => 254,  405 => 253,  401 => 252,  397 => 251,  393 => 250,  387 => 247,  382 => 244,  378 => 242,  368 => 235,  363 => 233,  360 => 232,  358 => 231,  352 => 227,  349 => 226,  344 => 225,  337 => 221,  332 => 219,  328 => 218,  323 => 215,  314 => 213,  309 => 212,  300 => 210,  296 => 209,  288 => 203,  281 => 202,  83 => 7,  76 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/my.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\my.html.twig");
    }
}
