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

/* coach/new.html.twig */
class __TwigTemplate_fbf9f34a6e4469ce5ce060070aecb09e extends Template
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
            'nav_section_label' => [$this, 'block_nav_section_label'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/new.html.twig"));

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

        yield "Nouveau Coach — GestionCoach";
        
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

        yield "Nouveau Coach";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_section_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_section_label"));

        yield "Front Office";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        // line 7
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", ["_route"], "method", false, false, false, 7)) && is_string($_v1 = "app_coach") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
    <i class=\"fas fa-users\"></i> Coachs
</a>
<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"\"><i class=\"fas fa-lock\"></i> Administration</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "<div style=\"max-width:820px;\">

    <div style=\"margin-bottom:20px;\">
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"card-panel\">
        <div style=\"border-bottom:1px solid #f1f5f9;padding-bottom:16px;margin-bottom:24px;display:flex;align-items:center;gap:12px;\">
            <div style=\"width:42px;height:42px;border-radius:10px;background:linear-gradient(135deg,#0fb8a9,#0d9e90);display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;\">
                <i class=\"fas fa-user-plus\"></i>
            </div>
            <div>
                <h2 style=\"font-size:17px;font-weight:700;color:#111827;margin:0;\">Ajouter un nouveau coach</h2>
                <p style=\"font-size:12px;color:#6b7280;margin:2px 0 0;\">Tous les champs sont obligatoires</p>
            </div>
        </div>

        ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"row g-3\">
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Nom <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Prénom <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Domaine <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "domaine", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-select-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "domaine", [], "any", false, false, false, 49), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Disponibilité <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "disponibilite", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-select-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "disponibilite", [], "any", false, false, false, 54), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Années d'expérience <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 59), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Tarif horaire (TND) <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 64), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Numéro de téléphone <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "numTel", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "numTel", [], "any", false, false, false, 69), 'errors');
        yield "</div>
            </div>
            <div class=\"col-12\">
                <label class=\"form-label-custom\">Biographie <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "biographie", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control-custom", "id" => "biographie"]]);
        yield "
                <div style=\"display:flex;justify-content:space-between;margin-top:3px;\">
                    <div class=\"field-error\">";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "biographie", [], "any", false, false, false, 75), 'errors');
        yield "</div>
                    <span style=\"font-size:11px;color:#9ca3af;\" id=\"bioCounter\">0 / 2000 caractères</span>
                </div>
            </div>
        </div>

        <div style=\"margin-top:24px;padding-top:20px;border-top:1px solid #f1f5f9;display:flex;gap:10px;\">
            <button type=\"submit\" class=\"btn-teal\" style=\"padding:10px 24px;\">
                <i class=\"fas fa-save\"></i> Enregistrer
            </button>
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" class=\"btn-outline-teal\" style=\"padding:10px 20px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;\">
                <i class=\"fas fa-times\"></i> Annuler
            </a>
        </div>

        ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        yield "<script>
const b = document.getElementById('biographie'), c = document.getElementById('bioCounter');
if (b && c) { const u = () => { const l = b.value.length; c.textContent = `\${l} / 2000 caractères`; c.style.color = l > 1800 ? '#ef4444' : '#9ca3af'; }; b.addEventListener('input', u); u(); }
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
        return "coach/new.html.twig";
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
        return array (  309 => 96,  299 => 95,  287 => 90,  279 => 85,  266 => 75,  261 => 73,  254 => 69,  250 => 68,  243 => 64,  239 => 63,  232 => 59,  228 => 58,  221 => 54,  217 => 53,  210 => 49,  206 => 48,  199 => 44,  195 => 43,  188 => 39,  184 => 38,  176 => 33,  157 => 17,  152 => 14,  142 => 13,  132 => 10,  123 => 7,  113 => 6,  96 => 4,  79 => 3,  62 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Nouveau Coach — GestionCoach{% endblock %}
{% block page_title %}Nouveau Coach{% endblock %}
{% block nav_section_label %}Front Office{% endblock %}

{% block sidebar_nav %}
<a href=\"{{ path('app_coach_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'app_coach' ? 'active' : '' }}\">
    <i class=\"fas fa-users\"></i> Coachs
</a>
<a href=\"{{ path('admin_coach_index') }}\" class=\"\"><i class=\"fas fa-lock\"></i> Administration</a>
{% endblock %}

{% block body %}
<div style=\"max-width:820px;\">

    <div style=\"margin-bottom:20px;\">
        <a href=\"{{ path('app_coach_index') }}\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"card-panel\">
        <div style=\"border-bottom:1px solid #f1f5f9;padding-bottom:16px;margin-bottom:24px;display:flex;align-items:center;gap:12px;\">
            <div style=\"width:42px;height:42px;border-radius:10px;background:linear-gradient(135deg,#0fb8a9,#0d9e90);display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;\">
                <i class=\"fas fa-user-plus\"></i>
            </div>
            <div>
                <h2 style=\"font-size:17px;font-weight:700;color:#111827;margin:0;\">Ajouter un nouveau coach</h2>
                <p style=\"font-size:12px;color:#6b7280;margin:2px 0 0;\">Tous les champs sont obligatoires</p>
            </div>
        </div>

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <div class=\"row g-3\">
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Nom <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.nom, {'attr': {'class': 'form-control-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.nom) }}</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Prénom <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.prenom, {'attr': {'class': 'form-control-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.prenom) }}</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Domaine <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.domaine, {'attr': {'class': 'form-select-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.domaine) }}</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Disponibilité <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.disponibilite, {'attr': {'class': 'form-select-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.disponibilite) }}</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Années d'expérience <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.experienceAnnees, {'attr': {'class': 'form-control-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.experienceAnnees) }}</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Tarif horaire (TND) <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.tarifHoraire, {'attr': {'class': 'form-control-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.tarifHoraire) }}</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Numéro de téléphone <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.numTel, {'attr': {'class': 'form-control-custom'}}) }}
                <div class=\"field-error\">{{ form_errors(form.numTel) }}</div>
            </div>
            <div class=\"col-12\">
                <label class=\"form-label-custom\">Biographie <span style=\"color:#ef4444;\">*</span></label>
                {{ form_widget(form.biographie, {'attr': {'class': 'form-control-custom', 'id': 'biographie'}}) }}
                <div style=\"display:flex;justify-content:space-between;margin-top:3px;\">
                    <div class=\"field-error\">{{ form_errors(form.biographie) }}</div>
                    <span style=\"font-size:11px;color:#9ca3af;\" id=\"bioCounter\">0 / 2000 caractères</span>
                </div>
            </div>
        </div>

        <div style=\"margin-top:24px;padding-top:20px;border-top:1px solid #f1f5f9;display:flex;gap:10px;\">
            <button type=\"submit\" class=\"btn-teal\" style=\"padding:10px 24px;\">
                <i class=\"fas fa-save\"></i> Enregistrer
            </button>
            <a href=\"{{ path('app_coach_index') }}\" class=\"btn-outline-teal\" style=\"padding:10px 20px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;\">
                <i class=\"fas fa-times\"></i> Annuler
            </a>
        </div>

        {{ form_end(form) }}
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
const b = document.getElementById('biographie'), c = document.getElementById('bioCounter');
if (b && c) { const u = () => { const l = b.value.length; c.textContent = `\${l} / 2000 caractères`; c.style.color = l > 1800 ? '#ef4444' : '#9ca3af'; }; b.addEventListener('input', u); u(); }
</script>
{% endblock %}
", "coach/new.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\coach\\new.html.twig");
    }
}
