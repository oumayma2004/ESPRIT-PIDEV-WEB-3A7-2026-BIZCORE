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

/* admin/coach/show.html.twig */
class __TwigTemplate_6dd2156a9f50370e7089616d0eb0a7c6 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "prenom", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "nom", [], "any", false, false, false, 2), "html", null, true);
        yield " — Profil Admin";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Profil Coach";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
<div style=\"max-width:900px;\">

    <div style=\"display:flex;align-items:center;gap:10px;margin-bottom:22px;\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    ";
        // line 16
        yield "    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;\">
        <div style=\"background:linear-gradient(135deg,#1C2B3A 0%,#243447 100%);padding:28px 28px 20px;display:flex;align-items:center;gap:20px;\">
            <div style=\"width:72px;height:72px;border-radius:16px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:26px;font-weight:700;flex-shrink:0;\">
                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "prenom", [], "any", false, false, false, 19), 0, 1)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "nom", [], "any", false, false, false, 19), 0, 1)), "html", null, true);
        yield "
            </div>
            <div style=\"flex:1;\">
                <h1 style=\"color:#fff;font-size:22px;font-weight:700;margin:0;\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "prenom", [], "any", false, false, false, 22), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
                <div style=\"margin-top:6px;display:flex;flex-wrap:wrap;gap:8px;align-items:center;\">
                    ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "domaine", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;letter-spacing:.3px;\">
                        ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "domaine", [], "any", false, false, false, 26) == "BRANDING")) {
                yield "🎨 Branding
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 27
($context["coach"] ?? null), "domaine", [], "any", false, false, false, 27) == "E_COMMERCE")) {
                yield "🛒 E-Commerce
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 28
($context["coach"] ?? null), "domaine", [], "any", false, false, false, 28) == "LEADERSHIP")) {
                yield "🏆 Leadership
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 29
($context["coach"] ?? null), "domaine", [], "any", false, false, false, 29) == "FINANCE")) {
                yield "💰 Finance
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 30
($context["coach"] ?? null), "domaine", [], "any", false, false, false, 30) == "FUNDING")) {
                yield "🚀 Financement
                        ";
            } else {
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "domaine", [], "any", false, false, false, 31), "html", null, true);
            }
            // line 32
            yield "                    </span>
                    ";
        }
        // line 34
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "disponibilite", [], "any", false, false, false, 34) == "Disponible")) {
            // line 35
            yield "                        <span style=\"background:#d1fae5;color:#065f46;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">✓ Disponible</span>
                    ";
        } else {
            // line 37
            yield "                        <span style=\"background:#fee2e2;color:#991b1b;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">✗ Indisponible</span>
                    ";
        }
        // line 39
        yield "                </div>
            </div>
            <div style=\"display:flex;gap:8px;flex-shrink:0;\">
                <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\"
                   style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                   <i class=\"fas fa-pen\"></i> Modifier
                </a>
                <form method=\"post\" action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" style=\"margin:0;\"
                      onsubmit=\"return confirm('Supprimer ce coach ? Action irréversible.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "id", [], "any", false, false, false, 48))), "html", null, true);
        yield "\">
                    <button type=\"submit\"
                            style=\"background:rgba(239,68,68,.2);color:#fca5a5;border:none;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:6px;\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>

        ";
        // line 58
        yield "        <div style=\"padding:24px;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;\">
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-phone\" style=\"margin-right:4px;\"></i> Téléphone
                </div>
                <div style=\"font-size:15px;font-weight:600;color:#111827;\">";
        // line 63
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "numTel", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "numTel", [], "any", false, false, false, 63)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "numTel", [], "any", false, false, false, 63), "html", null, true)) : ("—"));
        yield "</div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-clock\" style=\"margin-right:4px;\"></i> Expérience
                </div>
                <div style=\"font-size:15px;font-weight:600;color:#111827;\">
                    ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", false, false, false, 70), "html", null, true)) : ("—"));
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " an";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", false, false, false, 70) > 1)) ? ("s") : (""));
        }
        // line 71
        yield "                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-tag\" style=\"margin-right:4px;\"></i> Tarif horaire
                </div>
                <div style=\"font-size:15px;font-weight:700;color:var(--accent);\">
                    ";
        // line 78
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "tarifHoraire", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "tarifHoraire", [], "any", false, false, false, 78), 2, ",", " ") . " TND"), "html", null, true)) : ("—"));
        yield "
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-star\" style=\"margin-right:4px;\"></i> Note moyenne
                </div>
                <div style=\"font-size:15px;font-weight:700;color:#f59e0b;\">
                    ";
        // line 86
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "noteMoyenne", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "noteMoyenne", [], "any", false, false, false, 87), "html", null, true);
            yield " / 5
                        <span style=\"display:block;margin-top:3px;\">
                            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 90
                yield "                                <i class=\"fas fa-star\" style=\"font-size:12px;color:";
                yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "noteMoyenne", [], "any", false, false, false, 90))) ? ("#f59e0b") : ("#e5e7eb"));
                yield ";\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "                        </span>
                    ";
        } else {
            // line 94
            yield "                        <span style=\"color:#9ca3af;font-size:13px;font-weight:400;\">Non évaluée</span>
                    ";
        }
        // line 96
        yield "                </div>
            </div>
        </div>

        ";
        // line 101
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "biographie", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "        <div style=\"padding:0 24px 24px;\">
            <div style=\"background:#f8fafc;border-radius:10px;padding:18px 20px;\">
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:4px;\"></i> Biographie
                </div>
                <p style=\"font-size:13.5px;color:#374151;line-height:1.7;margin:0;\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "biographie", [], "any", false, false, false, 107), "html", null, true);
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 111
        yield "
        ";
        // line 113
        yield "        <div style=\"padding:14px 24px;background:#f8fafc;border-top:1px solid #e8ecf0;font-size:12px;color:#9ca3af;display:flex;justify-content:space-between;align-items:center;\">
            <span>ID Coach : <strong style=\"color:#374151;\">#";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "idCoach", [], "any", false, false, false, 114), "html", null, true);
        yield "</strong></span>
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
        return "admin/coach/show.html.twig";
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
        return array (  292 => 114,  289 => 113,  286 => 111,  279 => 107,  272 => 102,  269 => 101,  263 => 96,  259 => 94,  255 => 92,  246 => 90,  242 => 89,  236 => 87,  234 => 86,  223 => 78,  214 => 71,  208 => 70,  198 => 63,  191 => 58,  179 => 48,  174 => 46,  167 => 42,  162 => 39,  158 => 37,  154 => 35,  151 => 34,  147 => 32,  144 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  120 => 25,  118 => 24,  111 => 22,  104 => 19,  99 => 16,  91 => 10,  85 => 6,  78 => 5,  67 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/coach/show.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\coach\\show.html.twig");
    }
}
