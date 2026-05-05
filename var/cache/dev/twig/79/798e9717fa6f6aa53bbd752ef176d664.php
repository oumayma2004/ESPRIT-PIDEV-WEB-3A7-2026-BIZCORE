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

/* admin/domaine/show.html.twig */
class __TwigTemplate_1cb484db271c3184e91fca17f7dd6bea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/domaine/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/domaine/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 2, $this->source); })()), "nomDomaine", [], "any", false, false, false, 2), "html", null, true);
        yield " — Bizcore";
        
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

        yield "GESTION COACHING — DÉTAIL DOMAINE";
        
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
        yield "<div style=\"max-width:900px;\">

    <div style=\"display:flex;align-items:center;gap:10px;margin-bottom:22px;\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_index");
        yield "\" style=\"color:#20c997;text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    ";
        // line 15
        yield "    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;\">
        <div style=\"background:linear-gradient(135deg,#1C2B3A 0%,#243447 100%);padding:28px 28px 20px;display:flex;align-items:center;gap:20px;\">
            <div style=\"width:72px;height:72px;border-radius:16px;background:#20c997;display:flex;align-items:center;justify-content:center;color:#fff;font-size:28px;flex-shrink:0;\">
                <i class=\"fas fa-layer-group\"></i>
            </div>
            <div style=\"flex:1;\">
                <h1 style=\"color:#fff;font-size:22px;font-weight:700;margin:0;\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 21, $this->source); })()), "nomDomaine", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>
                <div style=\"margin-top:6px;display:flex;flex-wrap:wrap;gap:8px;align-items:center;\">
                    ";
        // line 23
        $context["niveauColors"] = ["Débutant" => "#059669", "Intermédiaire" => "#f59e0b", "Expert" => "#dc2626"];
        // line 24
        yield "                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">
                        ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 25, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 25), "html", null, true);
        yield "
                    </span>
                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 28, $this->source); })())), "html", null, true);
        yield " coach";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 28, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                    </span>
                </div>
            </div>
            <div style=\"display:flex;gap:8px;flex-shrink:0;\">
                <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\"
                   style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                   <i class=\"fas fa-pen\"></i> Modifier
                </a>
                <form method=\"post\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" style=\"margin:0;\"
                      onsubmit=\"return confirm('Supprimer ce domaine et tous ses coaches ? Action irréversible.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39))), "html", null, true);
        yield "\">
                    <button type=\"submit\"
                            style=\"background:rgba(239,68,68,.2);color:#fca5a5;border:none;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:6px;\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>

        ";
        // line 49
        yield "        <div style=\"padding:24px;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;\">
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-signal\" style=\"margin-right:4px;\"></i> Niveau
                </div>
                <div style=\"font-size:15px;font-weight:600;color:";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["niveauColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 54, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 54), [], "array", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauColors"]) || array_key_exists("niveauColors", $context) ? $context["niveauColors"] : (function () { throw new RuntimeError('Variable "niveauColors" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 54, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 54), [], "array", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["niveauColors"]) || array_key_exists("niveauColors", $context) ? $context["niveauColors"] : (function () { throw new RuntimeError('Variable "niveauColors" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 54, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true)) : ("#111827"));
        yield ";\">
                    ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 55, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 55), "html", null, true);
        yield "
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-clock\" style=\"margin-right:4px;\"></i> Durée formation
                </div>
                <div style=\"font-size:15px;font-weight:700;color:#1d4ed8;\">
                    ";
        // line 63
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 63, $this->source); })()), "dureeFormationHeures", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 63, $this->source); })()), "dureeFormationHeures", [], "any", false, false, false, 63) . " h"), "html", null, true)) : ("—"));
        yield "
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-users\" style=\"margin-right:4px;\"></i> Coaches
                </div>
                <div style=\"font-size:15px;font-weight:700;color:#20c997;\">
                    ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 71, $this->source); })())), "html", null, true);
        yield "
                </div>
            </div>
        </div>

        ";
        // line 77
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "        <div style=\"padding:0 24px 24px;\">
            <div style=\"background:#f8fafc;border-radius:10px;padding:18px 20px;\">
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:4px;\"></i> Description
                </div>
                <p style=\"font-size:13.5px;color:#374151;line-height:1.7;margin:0;\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83), "html", null, true);
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 87
        yield "
        ";
        // line 89
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 89, $this->source); })())) > 0)) {
            // line 90
            yield "        <div style=\"padding:0 24px 24px;\">
            <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                <i class=\"fas fa-user-tie\" style=\"margin-right:4px;\"></i> Coaches dans ce domaine
            </div>
            <div class=\"table-responsive\">
                <table class=\"data-table\" style=\"margin:0;\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Disponibilité</th>
                            <th>Tarif</th>
                            <th>Expérience</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 108
                yield "                        <tr>
                            <td>
                                <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id_coach", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 110), "html", null, true);
                yield "</a>
                            </td>
                            <td>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "prenom", [], "any", false, false, false, 112), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 114
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "disponibilite", [], "any", false, false, false, 114) == "Disponible")) {
                    // line 115
                    yield "                                    <span class=\"badge-disponible\">Disponible</span>
                                ";
                } else {
                    // line 117
                    yield "                                    <span class=\"badge-indisponible\">Indisponible</span>
                                ";
                }
                // line 119
                yield "                            </td>
                            <td>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "tarif_horaire", [], "any", false, false, false, 120), "html", null, true);
                yield "</td>
                            <td>";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "experience_annees", [], "any", false, false, false, 121), "html", null, true);
                yield " ans</td>
                            <td>";
                // line 122
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "note_moyenne", [], "any", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["c"], "note_moyenne", [], "any", false, false, false, 122)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "note_moyenne", [], "any", false, false, false, 122), "html", null, true)) : ("N/A"));
                yield "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        // line 130
        yield "
        ";
        // line 132
        yield "        <div style=\"padding:14px 24px;background:#f8fafc;border-top:1px solid #e8ecf0;font-size:12px;color:#9ca3af;\">
            ID Domaine : <strong style=\"color:#374151;\">#";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 133, $this->source); })()), "idDomaine", [], "any", false, false, false, 133), "html", null, true);
        yield "</strong>
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
        return "admin/domaine/show.html.twig";
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
        return array (  342 => 133,  339 => 132,  336 => 130,  329 => 125,  320 => 122,  316 => 121,  312 => 120,  309 => 119,  305 => 117,  301 => 115,  299 => 114,  294 => 112,  287 => 110,  283 => 108,  279 => 107,  260 => 90,  257 => 89,  254 => 87,  247 => 83,  240 => 78,  237 => 77,  229 => 71,  218 => 63,  207 => 55,  203 => 54,  196 => 49,  184 => 39,  179 => 37,  172 => 33,  162 => 28,  156 => 25,  153 => 24,  151 => 23,  146 => 21,  138 => 15,  130 => 9,  125 => 6,  112 => 5,  89 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ domaine.nomDomaine }} — Bizcore{% endblock %}
{% block page_title %}GESTION COACHING — DÉTAIL DOMAINE{% endblock %}

{% block body %}
<div style=\"max-width:900px;\">

    <div style=\"display:flex;align-items:center;gap:10px;margin-bottom:22px;\">
        <a href=\"{{ path('admin_domaine_index') }}\" style=\"color:#20c997;text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    {# ── HERO CARD ── #}
    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;\">
        <div style=\"background:linear-gradient(135deg,#1C2B3A 0%,#243447 100%);padding:28px 28px 20px;display:flex;align-items:center;gap:20px;\">
            <div style=\"width:72px;height:72px;border-radius:16px;background:#20c997;display:flex;align-items:center;justify-content:center;color:#fff;font-size:28px;flex-shrink:0;\">
                <i class=\"fas fa-layer-group\"></i>
            </div>
            <div style=\"flex:1;\">
                <h1 style=\"color:#fff;font-size:22px;font-weight:700;margin:0;\">{{ domaine.nomDomaine }}</h1>
                <div style=\"margin-top:6px;display:flex;flex-wrap:wrap;gap:8px;align-items:center;\">
                    {% set niveauColors = {'Débutant': '#059669', 'Intermédiaire': '#f59e0b', 'Expert': '#dc2626'} %}
                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">
                        {{ domaine.niveauDifficulte }}
                    </span>
                    <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:3px 12px;font-size:11px;font-weight:600;\">
                        {{ coaches|length }} coach{{ coaches|length > 1 ? 's' : '' }}
                    </span>
                </div>
            </div>
            <div style=\"display:flex;gap:8px;flex-shrink:0;\">
                <a href=\"{{ path('admin_domaine_edit', {id: domaine.id}) }}\"
                   style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                   <i class=\"fas fa-pen\"></i> Modifier
                </a>
                <form method=\"post\" action=\"{{ path('admin_domaine_delete', {id: domaine.id}) }}\" style=\"margin:0;\"
                      onsubmit=\"return confirm('Supprimer ce domaine et tous ses coaches ? Action irréversible.')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ domaine.id) }}\">
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
                    <i class=\"fas fa-signal\" style=\"margin-right:4px;\"></i> Niveau
                </div>
                <div style=\"font-size:15px;font-weight:600;color:{{ niveauColors[domaine.niveauDifficulte] ?? '#111827' }};\">
                    {{ domaine.niveauDifficulte }}
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-clock\" style=\"margin-right:4px;\"></i> Durée formation
                </div>
                <div style=\"font-size:15px;font-weight:700;color:#1d4ed8;\">
                    {{ domaine.dureeFormationHeures ? domaine.dureeFormationHeures ~ ' h' : '—' }}
                </div>
            </div>
            <div>
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:6px;\">
                    <i class=\"fas fa-users\" style=\"margin-right:4px;\"></i> Coaches
                </div>
                <div style=\"font-size:15px;font-weight:700;color:#20c997;\">
                    {{ coaches|length }}
                </div>
            </div>
        </div>

        {# ── DESCRIPTION ── #}
        {% if domaine.description %}
        <div style=\"padding:0 24px 24px;\">
            <div style=\"background:#f8fafc;border-radius:10px;padding:18px 20px;\">
                <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:4px;\"></i> Description
                </div>
                <p style=\"font-size:13.5px;color:#374151;line-height:1.7;margin:0;\">{{ domaine.description }}</p>
            </div>
        </div>
        {% endif %}

        {# ── COACHES IN THIS DOMAIN ── #}
        {% if coaches|length > 0 %}
        <div style=\"padding:0 24px 24px;\">
            <div style=\"font-size:11px;font-weight:600;color:#9ca3af;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px;\">
                <i class=\"fas fa-user-tie\" style=\"margin-right:4px;\"></i> Coaches dans ce domaine
            </div>
            <div class=\"table-responsive\">
                <table class=\"data-table\" style=\"margin:0;\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Disponibilité</th>
                            <th>Tarif</th>
                            <th>Expérience</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for c in coaches %}
                        <tr>
                            <td>
                                <a href=\"{{ path('admin_coach_show', {'id': c.id_coach}) }}\">{{ c.nom }}</a>
                            </td>
                            <td>{{ c.prenom }}</td>
                            <td>
                                {% if c.disponibilite == 'Disponible' %}
                                    <span class=\"badge-disponible\">Disponible</span>
                                {% else %}
                                    <span class=\"badge-indisponible\">Indisponible</span>
                                {% endif %}
                            </td>
                            <td>{{ c.tarif_horaire }}</td>
                            <td>{{ c.experience_annees }} ans</td>
                            <td>{{ c.note_moyenne ?? 'N/A' }}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        {% endif %}

        {# ── FOOTER META ── #}
        <div style=\"padding:14px 24px;background:#f8fafc;border-top:1px solid #e8ecf0;font-size:12px;color:#9ca3af;\">
            ID Domaine : <strong style=\"color:#374151;\">#{{ domaine.idDomaine }}</strong>
        </div>
    </div>

</div>
{% endblock %}
", "admin/domaine/show.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\domaine\\show.html.twig");
    }
}
