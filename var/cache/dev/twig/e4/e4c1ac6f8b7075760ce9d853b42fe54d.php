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

/* coach/delete.html.twig */
class __TwigTemplate_a9efc007c13644b0a2b5d48b098bd0c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/delete.html.twig"));

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

        yield "Supprimer — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 2, $this->source); })()), "prenom", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        
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

        yield "Supprimer Coach";
        
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
        yield "<div style=\"max-width:520px;margin:0 auto;\">

    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;\">
        <div style=\"background:#fee2e2;padding:24px;text-align:center;\">
            <div style=\"width:60px;height:60px;border-radius:50%;background:#fca5a5;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:24px;color:#dc2626;\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </div>
            <h2 style=\"font-size:18px;font-weight:700;color:#991b1b;margin:0 0 6px;\">Confirmer la suppression</h2>
            <p style=\"font-size:13px;color:#b91c1c;margin:0;\">Cette action est irréversible.</p>
        </div>

        <div style=\"padding:24px;text-align:center;\">
            <div style=\"width:56px;height:56px;border-radius:12px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;font-weight:700;margin:0 auto 12px;\">
                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 0, 1)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 0, 1)), "html", null, true);
        yield "
            </div>
            <h3 style=\"font-size:17px;font-weight:700;color:#111827;margin:0 0 4px;\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
            ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 22, $this->source); })()), "domaine", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <p style=\"font-size:13px;color:#6b7280;margin:0 0 4px;\">
                ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 24, $this->source); })()), "domaine", [], "any", false, false, false, 24) == "BRANDING")) {
                yield "🎨 Branding
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 25
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 25, $this->source); })()), "domaine", [], "any", false, false, false, 25) == "E_COMMERCE")) {
                yield "🛒 E-Commerce
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 26
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 26, $this->source); })()), "domaine", [], "any", false, false, false, 26) == "LEADERSHIP")) {
                yield "🏆 Leadership
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 27
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 27, $this->source); })()), "domaine", [], "any", false, false, false, 27) == "FINANCE")) {
                yield "💰 Finance
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 28
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 28, $this->source); })()), "domaine", [], "any", false, false, false, 28) == "FUNDING")) {
                yield "🚀 Financement
                ";
            } else {
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 29, $this->source); })()), "domaine", [], "any", false, false, false, 29), "html", null, true);
            }
            // line 30
            yield "            </p>
            ";
        }
        // line 32
        yield "            <p style=\"font-size:13px;color:#9ca3af;margin:0;\">";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 32, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 32)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 32, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 32), "html", null, true)) : ("—"));
        yield " ans d'expérience · ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 32, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 32, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 32) . " TND/h"), "html", null, true)) : (""));
        yield "</p>

            <div style=\"margin:20px 0;padding:14px;background:#f8fafc;border-radius:8px;border:1px solid #e8ecf0;\">
                <p style=\"font-size:13px;color:#374151;margin:0;\">
                    <i class=\"fas fa-info-circle\" style=\"color:#f59e0b;margin-right:6px;\"></i>
                    Toutes les données associées à ce coach (disponibilités, réservations, avis) seront également supprimées.
                </p>
            </div>

            <div style=\"display:flex;gap:10px;justify-content:center;margin-top:4px;\">
                <form method=\"post\" action=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 42, $this->source); })()), "idCoach", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\" style=\"margin:0;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 43, $this->source); })()), "idCoach", [], "any", false, false, false, 43))), "html", null, true);
        yield "\">
                    <button type=\"submit\" style=\"background:#dc2626;color:#fff;border:none;border-radius:7px;padding:10px 22px;font-size:13px;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:6px;\">
                        <i class=\"fas fa-trash\"></i> Oui, supprimer
                    </button>
                </form>
                <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 48, $this->source); })()), "idCoach", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\" class=\"btn-outline-teal\" style=\"text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:10px 22px;border-radius:7px;font-size:13px;\">
                    <i class=\"fas fa-times\"></i> Annuler
                </a>
            </div>
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
        return "coach/delete.html.twig";
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
        return array (  215 => 48,  207 => 43,  203 => 42,  187 => 32,  183 => 30,  180 => 29,  175 => 28,  171 => 27,  167 => 26,  163 => 25,  159 => 24,  156 => 23,  154 => 22,  148 => 21,  142 => 19,  127 => 6,  114 => 5,  91 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Supprimer — {{ coach.prenom }} {{ coach.nom }}{% endblock %}
{% block page_title %}Supprimer Coach{% endblock %}

{% block body %}
<div style=\"max-width:520px;margin:0 auto;\">

    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;\">
        <div style=\"background:#fee2e2;padding:24px;text-align:center;\">
            <div style=\"width:60px;height:60px;border-radius:50%;background:#fca5a5;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:24px;color:#dc2626;\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </div>
            <h2 style=\"font-size:18px;font-weight:700;color:#991b1b;margin:0 0 6px;\">Confirmer la suppression</h2>
            <p style=\"font-size:13px;color:#b91c1c;margin:0;\">Cette action est irréversible.</p>
        </div>

        <div style=\"padding:24px;text-align:center;\">
            <div style=\"width:56px;height:56px;border-radius:12px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;font-weight:700;margin:0 auto 12px;\">
                {{ coach.prenom|slice(0,1)|upper }}{{ coach.nom|slice(0,1)|upper }}
            </div>
            <h3 style=\"font-size:17px;font-weight:700;color:#111827;margin:0 0 4px;\">{{ coach.prenom }} {{ coach.nom }}</h3>
            {% if coach.domaine %}
            <p style=\"font-size:13px;color:#6b7280;margin:0 0 4px;\">
                {% if coach.domaine == 'BRANDING' %}🎨 Branding
                {% elseif coach.domaine == 'E_COMMERCE' %}🛒 E-Commerce
                {% elseif coach.domaine == 'LEADERSHIP' %}🏆 Leadership
                {% elseif coach.domaine == 'FINANCE' %}💰 Finance
                {% elseif coach.domaine == 'FUNDING' %}🚀 Financement
                {% else %}{{ coach.domaine }}{% endif %}
            </p>
            {% endif %}
            <p style=\"font-size:13px;color:#9ca3af;margin:0;\">{{ coach.experienceAnnees ?? '—' }} ans d'expérience · {{ coach.tarifHoraire ? coach.tarifHoraire ~ ' TND/h' : '' }}</p>

            <div style=\"margin:20px 0;padding:14px;background:#f8fafc;border-radius:8px;border:1px solid #e8ecf0;\">
                <p style=\"font-size:13px;color:#374151;margin:0;\">
                    <i class=\"fas fa-info-circle\" style=\"color:#f59e0b;margin-right:6px;\"></i>
                    Toutes les données associées à ce coach (disponibilités, réservations, avis) seront également supprimées.
                </p>
            </div>

            <div style=\"display:flex;gap:10px;justify-content:center;margin-top:4px;\">
                <form method=\"post\" action=\"{{ path('app_coach_delete', {'id': coach.idCoach}) }}\" style=\"margin:0;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ coach.idCoach) }}\">
                    <button type=\"submit\" style=\"background:#dc2626;color:#fff;border:none;border-radius:7px;padding:10px 22px;font-size:13px;font-weight:600;cursor:pointer;display:flex;align-items:center;gap:6px;\">
                        <i class=\"fas fa-trash\"></i> Oui, supprimer
                    </button>
                </form>
                <a href=\"{{ path('app_coach_show', {'id': coach.idCoach}) }}\" class=\"btn-outline-teal\" style=\"text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:10px 22px;border-radius:7px;font-size:13px;\">
                    <i class=\"fas fa-times\"></i> Annuler
                </a>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "coach/delete.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\coach\\delete.html.twig");
    }
}
