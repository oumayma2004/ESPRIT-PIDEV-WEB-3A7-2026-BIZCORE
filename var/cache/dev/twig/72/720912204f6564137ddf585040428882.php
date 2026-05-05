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

/* reservation/form.html.twig */
class __TwigTemplate_438b2e3234255fa5d711eef40572d599 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Réserver — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    /* NAVBAR */
    .navbar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 40px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0; z-index: 100;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }

    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    /* BREADCRUMB */
    .breadcrumb-bar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 12px 40px;
        display: flex; align-items: center; gap: 8px;
        font-size: 13px; color: #94a3b8;
    }

    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }
    .breadcrumb-bar .current { color: #0f172a; font-weight: 500; }

    /* LAYOUT */
    .page {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 28px;
        align-items: start;
    }

    /* BACK */
    .back-link {
        display: inline-flex; align-items: center; gap: 6px;
        color: #64748b; text-decoration: none;
        font-size: 13px; font-weight: 500;
        margin-bottom: 20px; transition: color 0.15s;
    }

    .back-link:hover { color: #22c55e; }

    /* FORM CARD */
    .form-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .form-card-header {
        background: #0f172a;
        padding: 24px 28px;
        display: flex; align-items: center; gap: 14px;
    }

    .form-card-header .header-icon {
        width: 44px; height: 44px;
        background: #22c55e;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .form-card-header h2 {
        font-size: 18px; font-weight: 700; color: #fff;
        margin-bottom: 2px;
    }

    .form-card-header p { font-size: 13px; color: #94a3b8; }

    .form-card-body { padding: 28px; }

    /* FORM FIELDS */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 16px;
    }

    .form-group { display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px; }
    .form-group:last-child { margin-bottom: 0; }

    .form-group label {
        font-size: 12px; font-weight: 600;
        color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 11px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s; background: #fff;
        width: 100%;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
    }

    /* Symfony form widget error */
    .form-group .form-error,
    .form-group ul.form-errors {
        list-style: none;
        margin-top: 4px;
    }

    .form-group .form-error,
    .form-group ul.form-errors li {
        font-size: 12px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 4px 8px;
    }

    /* DIVIDER */
    .form-section-title {
        font-size: 13px; font-weight: 700;
        color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;
        margin: 24px 0 14px;
        padding-bottom: 8px;
        border-bottom: 1px solid #f1f5f9;
    }

    /* SUBMIT */
    .btn-submit {
        width: 100%; padding: 14px;
        background: #22c55e; color: #fff;
        border: none; border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-size: 15px; font-weight: 700;
        cursor: pointer; transition: all 0.2s; margin-top: 8px;
    }

    .btn-submit:hover {
        background: #16a34a;
        transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(34,197,94,0.3);
    }

    /* SUMMARY CARD */
    .summary-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        overflow: hidden;
        position: sticky;
        top: 80px;
    }

    .summary-header {
        background: linear-gradient(135deg, #0f172a, #1e3a5f);
        padding: 20px 22px;
        text-align: center;
    }

    .summary-price { font-size: 34px; font-weight: 800; color: #22c55e; }
    .summary-price-label { font-size: 12px; color: #94a3b8; margin-top: 2px; }

    .summary-body { padding: 20px; }

    .summary-img {
        width: 100%; height: 140px;
        object-fit: cover; border-radius: 10px;
        margin-bottom: 16px;
        border: 1px solid #e2e8f0;
    }

    .summary-img-placeholder {
        width: 100%; height: 140px;
        background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
        border-radius: 10px; margin-bottom: 16px;
        display: flex; align-items: center; justify-content: center;
        font-size: 40px;
        border: 1px solid #e2e8f0;
    }

    .summary-title {
        font-size: 15px; font-weight: 700; color: #0f172a;
        margin-bottom: 14px; line-height: 1.3;
    }

    .summary-row {
        display: flex; align-items: center; gap: 10px;
        font-size: 13px; color: #475569;
        padding: 9px 12px;
        background: #f8fafc; border-radius: 8px;
        border: 1px solid #e2e8f0;
        margin-bottom: 8px;
    }

    .summary-row strong { color: #0f172a; }
    .summary-row .row-icon { font-size: 15px; flex-shrink: 0; }

    .summary-divider {
        border: none; border-top: 1px solid #e2e8f0;
        margin: 16px 0;
    }

    .summary-total {
        display: flex; justify-content: space-between; align-items: center;
        font-size: 14px; font-weight: 700; color: #0f172a;
    }

    .summary-total .total-price {
        font-size: 18px; font-weight: 800; color: #22c55e;
    }

    .security-note {
        text-align: center; font-size: 12px; color: #94a3b8;
        margin-top: 14px; line-height: 1.5;
    }

    /* FLASH */
    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    /* FOOTER */
    .footer { background: #0f172a; color: #64748b; text-align: center; padding: 28px; font-size: 13px; margin-top: 60px; }
    .footer span { color: #22c55e; }

    @media (max-width: 768px) {
        .page { grid-template-columns: 1fr; }
        .summary-card { position: static; }
        .form-row { grid-template-columns: 1fr; }
    }
</style>

<!-- NAVBAR -->
<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\">Événements</a>
        <a href=\"#\">Coaching</a>
        <a href=\"#\">Blog</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

<!-- BREADCRUMB -->
<div class=\"breadcrumb-bar\">
    <a href=\"#\">Accueil</a> ›
    <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\">Événements</a> ›
    <a href=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 280, $this->source); })()), "title", [], "any", false, false, false, 280), "html", null, true);
        yield "</a> ›
    <span class=\"current\">Réservation</span>
</div>

<div style=\"max-width:1000px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "flashes", ["success"], "method", false, false, false, 285));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 286
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "flashes", ["error"], "method", false, false, false, 288));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 289
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        yield "
    <a href=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, false, 292)]), "html", null, true);
        yield "\" class=\"back-link\">← Retour à l'événement</a>
</div>

<!-- PAGE -->
<div class=\"page\">

    <!-- LEFT : FORM -->
    <div>
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"header-icon\">🎟</div>
                <div>
                    <h2>Formulaire de réservation</h2>
                    <p>Complétez vos informations pour confirmer votre place</p>
                </div>
            </div>

            <div class=\"form-card-body\">
                ";
        // line 310
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"form-section-title\">Informations personnelles</div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((((($tmp =  !(null === (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "nom", [], "any", false, false, false, 316)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "nom", [], "any", false, false, false, 316)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "name", [], "any", false, false, false, 316)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "name", [], "any", false, false, false, 316)) : (null)))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "nom", [], "any", false, false, false, 316)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "nom", [], "any", false, false, false, 316)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "name", [], "any", false, false, false, 316)))) : (null)), 'label');
        yield "
                            ";
        // line 317
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 317)) {
            // line 318
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "nom", [], "any", false, false, false, 318), 'widget', ["attr" => ["placeholder" => "Votre nom"]]);
            yield "
                                ";
            // line 319
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "nom", [], "any", false, false, false, 319), 'errors');
            yield "
                            ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 320
($context["form"] ?? null), "name", [], "any", true, true, false, 320)) {
            // line 321
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "name", [], "any", false, false, false, 321), 'widget', ["attr" => ["placeholder" => "Votre nom"]]);
            yield "
                                ";
            // line 322
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "name", [], "any", false, false, false, 322), 'errors');
            yield "
                            ";
        }
        // line 324
        yield "                        </div>
                        <div class=\"form-group\">
                            ";
        // line 326
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", true, true, false, 326)) {
            // line 327
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "prenom", [], "any", false, false, false, 327), 'label');
            yield "
                                ";
            // line 328
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "prenom", [], "any", false, false, false, 328), 'widget', ["attr" => ["placeholder" => "Votre prénom"]]);
            yield "
                                ";
            // line 329
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "prenom", [], "any", false, false, false, 329), 'errors');
            yield "
                            ";
        }
        // line 331
        yield "                        </div>
                    </div>

                    ";
        // line 334
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", true, true, false, 334)) {
            // line 335
            yield "                    <div class=\"form-group\">
                        ";
            // line 336
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "email", [], "any", false, false, false, 336), 'label');
            yield "
                        ";
            // line 337
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), "email", [], "any", false, false, false, 337), 'widget', ["attr" => ["placeholder" => "votre@email.com"]]);
            yield "
                        ";
            // line 338
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "email", [], "any", false, false, false, 338), 'errors');
            yield "
                    </div>
                    ";
        }
        // line 341
        yield "
                    ";
        // line 342
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", true, true, false, 342)) {
            // line 343
            yield "                    <div class=\"form-group\">
                        ";
            // line 344
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "telephone", [], "any", false, false, false, 344), 'label');
            yield "
                        ";
            // line 345
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "telephone", [], "any", false, false, false, 345), 'widget', ["attr" => ["placeholder" => "+216 XX XXX XXX"]]);
            yield "
                        ";
            // line 346
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "telephone", [], "any", false, false, false, 346), 'errors');
            yield "
                    </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 348
($context["form"] ?? null), "phone", [], "any", true, true, false, 348)) {
            // line 349
            yield "                    <div class=\"form-group\">
                        ";
            // line 350
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "phone", [], "any", false, false, false, 350), 'label');
            yield "
                        ";
            // line 351
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "phone", [], "any", false, false, false, 351), 'widget', ["attr" => ["placeholder" => "+216 XX XXX XXX"]]);
            yield "
                        ";
            // line 352
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "phone", [], "any", false, false, false, 352), 'errors');
            yield "
                    </div>
                    ";
        }
        // line 355
        yield "
                    <div class=\"form-section-title\">Détails de la réservation</div>

                    ";
        // line 358
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", true, true, false, 358)) {
            // line 359
            yield "                    <div class=\"form-group\">
                        ";
            // line 360
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 360), 'label');
            yield "
                        ";
            // line 361
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 361), 'widget');
            yield "
                        ";
            // line 362
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 362), 'errors');
            yield "
                    </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 364
($context["form"] ?? null), "places", [], "any", true, true, false, 364)) {
            // line 365
            yield "                    <div class=\"form-group\">
                        ";
            // line 366
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "places", [], "any", false, false, false, 366), 'label');
            yield "
                        ";
            // line 367
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "places", [], "any", false, false, false, 367), 'widget');
            yield "
                        ";
            // line 368
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "places", [], "any", false, false, false, 368), 'errors');
            yield "
                    </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 370
($context["form"] ?? null), "nbPlaces", [], "any", true, true, false, 370)) {
            // line 371
            yield "                    <div class=\"form-group\">
                        ";
            // line 372
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "nbPlaces", [], "any", false, false, false, 372), 'label');
            yield "
                        ";
            // line 373
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "nbPlaces", [], "any", false, false, false, 373), 'widget');
            yield "
                        ";
            // line 374
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "nbPlaces", [], "any", false, false, false, 374), 'errors');
            yield "
                    </div>
                    ";
        }
        // line 377
        yield "
                    ";
        // line 379
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), 'rest');
        yield "

                    <button type=\"submit\" class=\"btn-submit\">
                        🎟 Confirmer la réservation
                    </button>

                ";
        // line 385
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- RIGHT : SUMMARY -->
    <div class=\"summary-card\">
        <div class=\"summary-header\">
            <div class=\"summary-price\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 393, $this->source); })()), "price", [], "any", false, false, false, 393), "html", null, true);
        yield " DT</div>
            <div class=\"summary-price-label\">par personne</div>
        </div>

        <div class=\"summary-body\">
            ";
        // line 398
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 398, $this->source); })()), "image", [], "any", false, false, false, 398)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 399
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 399, $this->source); })()), "image", [], "any", false, false, false, 399))), "html", null, true);
            yield "\" class=\"summary-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 399, $this->source); })()), "title", [], "any", false, false, false, 399), "html", null, true);
            yield "\">
            ";
        } else {
            // line 401
            yield "                <div class=\"summary-img-placeholder\">📅</div>
            ";
        }
        // line 403
        yield "
            <div class=\"summary-title\">";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 404, $this->source); })()), "title", [], "any", false, false, false, 404), "html", null, true);
        yield "</div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">📆</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Date</div>
                    <strong>";
        // line 410
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 410, $this->source); })()), "date", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 410, $this->source); })()), "date", [], "any", false, false, false, 410), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                </div>
            </div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">👥</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Capacité</div>
                    <strong>";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 418, $this->source); })()), "capacity", [], "any", false, false, false, 418), "html", null, true);
        yield " places</strong>
                </div>
            </div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">📍</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Statut</div>
                    <strong style=\"color:#16a34a;\">✓ Disponible</strong>
                </div>
            </div>

            <hr class=\"summary-divider\">

            <div class=\"summary-total\">
                <span>Prix par place</span>
                <span class=\"total-price\">";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 434, $this->source); })()), "price", [], "any", false, false, false, 434), "html", null, true);
        yield " DT</span>
            </div>

            <div class=\"security-note\">
                🔒 Réservation sécurisée<br>Annulation gratuite avant l'événement
            </div>
        </div>
    </div>

</div>

<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>

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
        return "reservation/form.html.twig";
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
        return array (  712 => 434,  693 => 418,  682 => 410,  673 => 404,  670 => 403,  666 => 401,  658 => 399,  656 => 398,  648 => 393,  637 => 385,  627 => 379,  624 => 377,  618 => 374,  614 => 373,  610 => 372,  607 => 371,  605 => 370,  600 => 368,  596 => 367,  592 => 366,  589 => 365,  587 => 364,  582 => 362,  578 => 361,  574 => 360,  571 => 359,  569 => 358,  564 => 355,  558 => 352,  554 => 351,  550 => 350,  547 => 349,  545 => 348,  540 => 346,  536 => 345,  532 => 344,  529 => 343,  527 => 342,  524 => 341,  518 => 338,  514 => 337,  510 => 336,  507 => 335,  505 => 334,  500 => 331,  495 => 329,  491 => 328,  486 => 327,  484 => 326,  480 => 324,  475 => 322,  470 => 321,  468 => 320,  464 => 319,  459 => 318,  457 => 317,  453 => 316,  444 => 310,  423 => 292,  420 => 291,  411 => 289,  406 => 288,  397 => 286,  393 => 285,  383 => 280,  379 => 279,  366 => 269,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réserver — {{ evenement.title }}{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    /* NAVBAR */
    .navbar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 0 40px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0; z-index: 100;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }

    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    /* BREADCRUMB */
    .breadcrumb-bar {
        background: #fff;
        border-bottom: 1px solid #e2e8f0;
        padding: 12px 40px;
        display: flex; align-items: center; gap: 8px;
        font-size: 13px; color: #94a3b8;
    }

    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }
    .breadcrumb-bar .current { color: #0f172a; font-weight: 500; }

    /* LAYOUT */
    .page {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 28px;
        align-items: start;
    }

    /* BACK */
    .back-link {
        display: inline-flex; align-items: center; gap: 6px;
        color: #64748b; text-decoration: none;
        font-size: 13px; font-weight: 500;
        margin-bottom: 20px; transition: color 0.15s;
    }

    .back-link:hover { color: #22c55e; }

    /* FORM CARD */
    .form-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .form-card-header {
        background: #0f172a;
        padding: 24px 28px;
        display: flex; align-items: center; gap: 14px;
    }

    .form-card-header .header-icon {
        width: 44px; height: 44px;
        background: #22c55e;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .form-card-header h2 {
        font-size: 18px; font-weight: 700; color: #fff;
        margin-bottom: 2px;
    }

    .form-card-header p { font-size: 13px; color: #94a3b8; }

    .form-card-body { padding: 28px; }

    /* FORM FIELDS */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 16px;
    }

    .form-group { display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px; }
    .form-group:last-child { margin-bottom: 0; }

    .form-group label {
        font-size: 12px; font-weight: 600;
        color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 11px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s; background: #fff;
        width: 100%;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
    }

    /* Symfony form widget error */
    .form-group .form-error,
    .form-group ul.form-errors {
        list-style: none;
        margin-top: 4px;
    }

    .form-group .form-error,
    .form-group ul.form-errors li {
        font-size: 12px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 4px 8px;
    }

    /* DIVIDER */
    .form-section-title {
        font-size: 13px; font-weight: 700;
        color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;
        margin: 24px 0 14px;
        padding-bottom: 8px;
        border-bottom: 1px solid #f1f5f9;
    }

    /* SUBMIT */
    .btn-submit {
        width: 100%; padding: 14px;
        background: #22c55e; color: #fff;
        border: none; border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-size: 15px; font-weight: 700;
        cursor: pointer; transition: all 0.2s; margin-top: 8px;
    }

    .btn-submit:hover {
        background: #16a34a;
        transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(34,197,94,0.3);
    }

    /* SUMMARY CARD */
    .summary-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        overflow: hidden;
        position: sticky;
        top: 80px;
    }

    .summary-header {
        background: linear-gradient(135deg, #0f172a, #1e3a5f);
        padding: 20px 22px;
        text-align: center;
    }

    .summary-price { font-size: 34px; font-weight: 800; color: #22c55e; }
    .summary-price-label { font-size: 12px; color: #94a3b8; margin-top: 2px; }

    .summary-body { padding: 20px; }

    .summary-img {
        width: 100%; height: 140px;
        object-fit: cover; border-radius: 10px;
        margin-bottom: 16px;
        border: 1px solid #e2e8f0;
    }

    .summary-img-placeholder {
        width: 100%; height: 140px;
        background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
        border-radius: 10px; margin-bottom: 16px;
        display: flex; align-items: center; justify-content: center;
        font-size: 40px;
        border: 1px solid #e2e8f0;
    }

    .summary-title {
        font-size: 15px; font-weight: 700; color: #0f172a;
        margin-bottom: 14px; line-height: 1.3;
    }

    .summary-row {
        display: flex; align-items: center; gap: 10px;
        font-size: 13px; color: #475569;
        padding: 9px 12px;
        background: #f8fafc; border-radius: 8px;
        border: 1px solid #e2e8f0;
        margin-bottom: 8px;
    }

    .summary-row strong { color: #0f172a; }
    .summary-row .row-icon { font-size: 15px; flex-shrink: 0; }

    .summary-divider {
        border: none; border-top: 1px solid #e2e8f0;
        margin: 16px 0;
    }

    .summary-total {
        display: flex; justify-content: space-between; align-items: center;
        font-size: 14px; font-weight: 700; color: #0f172a;
    }

    .summary-total .total-price {
        font-size: 18px; font-weight: 800; color: #22c55e;
    }

    .security-note {
        text-align: center; font-size: 12px; color: #94a3b8;
        margin-top: 14px; line-height: 1.5;
    }

    /* FLASH */
    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    /* FOOTER */
    .footer { background: #0f172a; color: #64748b; text-align: center; padding: 28px; font-size: 13px; margin-top: 60px; }
    .footer span { color: #22c55e; }

    @media (max-width: 768px) {
        .page { grid-template-columns: 1fr; }
        .summary-card { position: static; }
        .form-row { grid-template-columns: 1fr; }
    }
</style>

<!-- NAVBAR -->
<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"{{ path('evenement_index') }}\">Événements</a>
        <a href=\"#\">Coaching</a>
        <a href=\"#\">Blog</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

<!-- BREADCRUMB -->
<div class=\"breadcrumb-bar\">
    <a href=\"#\">Accueil</a> ›
    <a href=\"{{ path('evenement_index') }}\">Événements</a> ›
    <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\">{{ evenement.title }}</a> ›
    <span class=\"current\">Réservation</span>
</div>

<div style=\"max-width:1000px; margin:0 auto; padding:32px 24px 0;\">
    {% for msg in app.flashes('success') %}
        <div class=\"flash flash-success\">✅ {{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"flash flash-error\">❌ {{ msg }}</div>
    {% endfor %}

    <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\" class=\"back-link\">← Retour à l'événement</a>
</div>

<!-- PAGE -->
<div class=\"page\">

    <!-- LEFT : FORM -->
    <div>
        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"header-icon\">🎟</div>
                <div>
                    <h2>Formulaire de réservation</h2>
                    <p>Complétez vos informations pour confirmer votre place</p>
                </div>
            </div>

            <div class=\"form-card-body\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"form-section-title\">Informations personnelles</div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.nom ?? form.name ?? null is not null ? (form.nom ?? form.name) : null) }}
                            {% if form.nom is defined %}
                                {{ form_widget(form.nom, {'attr': {'placeholder': 'Votre nom'}}) }}
                                {{ form_errors(form.nom) }}
                            {% elseif form.name is defined %}
                                {{ form_widget(form.name, {'attr': {'placeholder': 'Votre nom'}}) }}
                                {{ form_errors(form.name) }}
                            {% endif %}
                        </div>
                        <div class=\"form-group\">
                            {% if form.prenom is defined %}
                                {{ form_label(form.prenom) }}
                                {{ form_widget(form.prenom, {'attr': {'placeholder': 'Votre prénom'}}) }}
                                {{ form_errors(form.prenom) }}
                            {% endif %}
                        </div>
                    </div>

                    {% if form.email is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.email) }}
                        {{ form_widget(form.email, {'attr': {'placeholder': 'votre@email.com'}}) }}
                        {{ form_errors(form.email) }}
                    </div>
                    {% endif %}

                    {% if form.telephone is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.telephone) }}
                        {{ form_widget(form.telephone, {'attr': {'placeholder': '+216 XX XXX XXX'}}) }}
                        {{ form_errors(form.telephone) }}
                    </div>
                    {% elseif form.phone is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.phone) }}
                        {{ form_widget(form.phone, {'attr': {'placeholder': '+216 XX XXX XXX'}}) }}
                        {{ form_errors(form.phone) }}
                    </div>
                    {% endif %}

                    <div class=\"form-section-title\">Détails de la réservation</div>

                    {% if form.nombrePlaces is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.nombrePlaces) }}
                        {{ form_widget(form.nombrePlaces) }}
                        {{ form_errors(form.nombrePlaces) }}
                    </div>
                    {% elseif form.places is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.places) }}
                        {{ form_widget(form.places) }}
                        {{ form_errors(form.places) }}
                    </div>
                    {% elseif form.nbPlaces is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.nbPlaces) }}
                        {{ form_widget(form.nbPlaces) }}
                        {{ form_errors(form.nbPlaces) }}
                    </div>
                    {% endif %}

                    {# Render any remaining fields not yet rendered #}
                    {{ form_rest(form) }}

                    <button type=\"submit\" class=\"btn-submit\">
                        🎟 Confirmer la réservation
                    </button>

                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <!-- RIGHT : SUMMARY -->
    <div class=\"summary-card\">
        <div class=\"summary-header\">
            <div class=\"summary-price\">{{ evenement.price }} DT</div>
            <div class=\"summary-price-label\">par personne</div>
        </div>

        <div class=\"summary-body\">
            {% if evenement.image %}
                <img src=\"{{ asset('uploads/' ~ evenement.image) }}\" class=\"summary-img\" alt=\"{{ evenement.title }}\">
            {% else %}
                <div class=\"summary-img-placeholder\">📅</div>
            {% endif %}

            <div class=\"summary-title\">{{ evenement.title }}</div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">📆</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Date</div>
                    <strong>{{ evenement.date ? evenement.date|date('d/m/Y à H:i') : 'À confirmer' }}</strong>
                </div>
            </div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">👥</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Capacité</div>
                    <strong>{{ evenement.capacity }} places</strong>
                </div>
            </div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">📍</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Statut</div>
                    <strong style=\"color:#16a34a;\">✓ Disponible</strong>
                </div>
            </div>

            <hr class=\"summary-divider\">

            <div class=\"summary-total\">
                <span>Prix par place</span>
                <span class=\"total-price\">{{ evenement.price }} DT</span>
            </div>

            <div class=\"security-note\">
                🔒 Réservation sécurisée<br>Annulation gratuite avant l'événement
            </div>
        </div>
    </div>

</div>

<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>

{% endblock %}
", "reservation/form.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\form.html.twig");
    }
}
