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
class __TwigTemplate_bd9939401d128705e11c5a13680ab61f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 2, $this->source); })()), "prenom", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        yield " — Profil Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Profil Coach";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 0, 1)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 0, 1)), "html", null, true);
        yield "
            </div>
            <div style=\"flex:1;\">
                <h1 style=\"color:#fff;font-size:22px;font-weight:700;margin:0;\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
                <div style=\"margin-top:6px;display:flex;flex-wrap:wrap;gap:8px;align-items:center;\">
                    ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 24, $this->source); })()), "domaine", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;letter-spacing:.3px;\">
                        ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 26, $this->source); })()), "domaine", [], "any", false, false, false, 26) == "BRANDING")) {
                yield "🎨 Branding
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 27
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 27, $this->source); })()), "domaine", [], "any", false, false, false, 27) == "E_COMMERCE")) {
                yield "🛒 E-Commerce
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 28
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 28, $this->source); })()), "domaine", [], "any", false, false, false, 28) == "LEADERSHIP")) {
                yield "🏆 Leadership
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 29
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 29, $this->source); })()), "domaine", [], "any", false, false, false, 29) == "FINANCE")) {
                yield "💰 Finance
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 30, $this->source); })()), "domaine", [], "any", false, false, false, 30) == "FUNDING")) {
                yield "🚀 Financement
                        ";
            } else {
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 31, $this->source); })()), "domaine", [], "any", false, false, false, 31), "html", null, true);
            }
            // line 32
            yield "                    </span>
                    ";
        }
        // line 34
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 34, $this->source); })()), "disponibilite", [], "any", false, false, false, 34) == "Disponible")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\"
                   style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                   <i class=\"fas fa-pen\"></i> Modifier
                </a>
                <form method=\"post\" action=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" style=\"margin:0;\"
                      onsubmit=\"return confirm('Supprimer ce coach ? Action irréversible.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48))), "html", null, true);
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "numTel", [], "any", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 63, $this->source); })()), "numTel", [], "any", false, false, false, 63)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 63, $this->source); })()), "numTel", [], "any", false, false, false, 63), "html", null, true)) : ("—"));
        yield "</div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-clock\" style=\"margin-right:4px;\"></i> Expérience
                </div>
                <div style=\"font-size:15px;font-weight:600;color:#111827;\">
                    ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 70, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 70, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 70), "html", null, true)) : ("—"));
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 70, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " an";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 70, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 70) > 1)) ? ("s") : (""));
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 78, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 78, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 78), 2, ",", " ") . " TND"), "html", null, true)) : ("—"));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 86, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 87, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 87), "html", null, true);
            yield " / 5
                        <span style=\"display:block;margin-top:3px;\">
                            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 90
                yield "                                <i class=\"fas fa-star\" style=\"font-size:12px;color:";
                yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 90, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 90))) ? ("#f59e0b") : ("#e5e7eb"));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 101, $this->source); })()), "biographie", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "        <div style=\"padding:0 24px 24px;\">
            <div style=\"background:#f8fafc;border-radius:10px;padding:18px 20px;\">
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:4px;\"></i> Biographie
                </div>
                <p style=\"font-size:13.5px;color:#374151;line-height:1.7;margin:0;\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 107, $this->source); })()), "biographie", [], "any", false, false, false, 107), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 114, $this->source); })()), "idCoach", [], "any", false, false, false, 114), "html", null, true);
        yield "</strong></span>
        </div>
    </div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  313 => 114,  310 => 113,  307 => 111,  300 => 107,  293 => 102,  290 => 101,  284 => 96,  280 => 94,  276 => 92,  267 => 90,  263 => 89,  257 => 87,  255 => 86,  244 => 78,  235 => 71,  229 => 70,  219 => 63,  212 => 58,  200 => 48,  195 => 46,  188 => 42,  183 => 39,  179 => 37,  175 => 35,  172 => 34,  168 => 32,  165 => 31,  160 => 30,  156 => 29,  152 => 28,  148 => 27,  144 => 26,  141 => 25,  139 => 24,  132 => 22,  125 => 19,  120 => 16,  112 => 10,  106 => 6,  96 => 5,  79 => 3,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ coach.prenom }} {{ coach.nom }} — Profil Admin{% endblock %}
{% block page_title %}Profil Coach{% endblock %}

{% block body %}

<div style=\"max-width:900px;\">

    <div style=\"display:flex;align-items:center;gap:10px;margin-bottom:22px;\">
        <a href=\"{{ path('admin_coach_index') }}\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    {# ── HERO CARD ── #}
    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;\">
        <div style=\"background:linear-gradient(135deg,#1C2B3A 0%,#243447 100%);padding:28px 28px 20px;display:flex;align-items:center;gap:20px;\">
            <div style=\"width:72px;height:72px;border-radius:16px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:26px;font-weight:700;flex-shrink:0;\">
                {{ coach.prenom|slice(0,1)|upper }}{{ coach.nom|slice(0,1)|upper }}
            </div>
            <div style=\"flex:1;\">
                <h1 style=\"color:#fff;font-size:22px;font-weight:700;margin:0;\">{{ coach.prenom }} {{ coach.nom }}</h1>
                <div style=\"margin-top:6px;display:flex;flex-wrap:wrap;gap:8px;align-items:center;\">
                    {% if coach.domaine %}
                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;letter-spacing:.3px;\">
                        {% if coach.domaine == 'BRANDING' %}🎨 Branding
                        {% elseif coach.domaine == 'E_COMMERCE' %}🛒 E-Commerce
                        {% elseif coach.domaine == 'LEADERSHIP' %}🏆 Leadership
                        {% elseif coach.domaine == 'FINANCE' %}💰 Finance
                        {% elseif coach.domaine == 'FUNDING' %}🚀 Financement
                        {% else %}{{ coach.domaine }}{% endif %}
                    </span>
                    {% endif %}
                    {% if coach.disponibilite == 'Disponible' %}
                        <span style=\"background:#d1fae5;color:#065f46;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">✓ Disponible</span>
                    {% else %}
                        <span style=\"background:#fee2e2;color:#991b1b;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">✗ Indisponible</span>
                    {% endif %}
                </div>
            </div>
            <div style=\"display:flex;gap:8px;flex-shrink:0;\">
                <a href=\"{{ path('admin_coach_edit', {id: coach.id}) }}\"
                   style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                   <i class=\"fas fa-pen\"></i> Modifier
                </a>
                <form method=\"post\" action=\"{{ path('admin_coach_delete', {id: coach.id}) }}\" style=\"margin:0;\"
                      onsubmit=\"return confirm('Supprimer ce coach ? Action irréversible.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coach.id) }}\">
                    <button type=\"submit\"
                            style=\"background:rgba(239,68,68,.2);color:#fca5a5;border:none;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:6px;\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>

        {# ── INFO GRID ── #}
        <div style=\"padding:24px;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;\">
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-phone\" style=\"margin-right:4px;\"></i> Téléphone
                </div>
                <div style=\"font-size:15px;font-weight:600;color:#111827;\">{{ coach.numTel ?? '—' }}</div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-clock\" style=\"margin-right:4px;\"></i> Expérience
                </div>
                <div style=\"font-size:15px;font-weight:600;color:#111827;\">
                    {{ coach.experienceAnnees ?? '—' }}{% if coach.experienceAnnees %} an{{ coach.experienceAnnees > 1 ? 's' : '' }}{% endif %}
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-tag\" style=\"margin-right:4px;\"></i> Tarif horaire
                </div>
                <div style=\"font-size:15px;font-weight:700;color:var(--accent);\">
                    {{ coach.tarifHoraire ? coach.tarifHoraire|number_format(2, ',', ' ') ~ ' TND' : '—' }}
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-star\" style=\"margin-right:4px;\"></i> Note moyenne
                </div>
                <div style=\"font-size:15px;font-weight:700;color:#f59e0b;\">
                    {% if coach.noteMoyenne %}
                        {{ coach.noteMoyenne }} / 5
                        <span style=\"display:block;margin-top:3px;\">
                            {% for i in 1..5 %}
                                <i class=\"fas fa-star\" style=\"font-size:12px;color:{{ i <= coach.noteMoyenne ? '#f59e0b' : '#e5e7eb' }};\"></i>
                            {% endfor %}
                        </span>
                    {% else %}
                        <span style=\"color:#9ca3af;font-size:13px;font-weight:400;\">Non évaluée</span>
                    {% endif %}
                </div>
            </div>
        </div>

        {# ── BIOGRAPHIE ── #}
        {% if coach.biographie %}
        <div style=\"padding:0 24px 24px;\">
            <div style=\"background:#f8fafc;border-radius:10px;padding:18px 20px;\">
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:4px;\"></i> Biographie
                </div>
                <p style=\"font-size:13.5px;color:#374151;line-height:1.7;margin:0;\">{{ coach.biographie }}</p>
            </div>
        </div>
        {% endif %}

        {# ── FOOTER META ── #}
        <div style=\"padding:14px 24px;background:#f8fafc;border-top:1px solid #e8ecf0;font-size:12px;color:#9ca3af;display:flex;justify-content:space-between;align-items:center;\">
            <span>ID Coach : <strong style=\"color:#374151;\">#{{ coach.idCoach }}</strong></span>
        </div>
    </div>

</div>

{% endblock %}
", "admin/coach/show.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\admin\\coach\\show.html.twig");
    }
}
