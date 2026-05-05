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

/* reservation/reservation_new.html.twig */
class __TwigTemplate_7f7b3cb777279828e8183b7f5ba9f314 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_new.html.twig"));

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

    /* Symfony form errors */
    .form-group ul.form-errors,
    .form-group .form-errors {
        list-style: none;
        margin-top: 4px;
        padding: 0;
    }

    .form-group ul.form-errors li,
    .form-group .form-errors li {
        font-size: 12px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 4px 8px;
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
        // line 261
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
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\">Événements</a> ›
    <a href=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 272, $this->source); })()), "id", [], "any", false, false, false, 272)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 272, $this->source); })()), "title", [], "any", false, false, false, 272), "html", null, true);
        yield "</a> ›
    <span class=\"current\">Réservation</span>
</div>

<div style=\"max-width:1000px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "flashes", ["success"], "method", false, false, false, 277));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 278
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "flashes", ["error"], "method", false, false, false, 280));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 281
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "
    <a href=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 284, $this->source); })()), "id", [], "any", false, false, false, 284)]), "html", null, true);
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
        // line 302
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 302, $this->source); })()), "id", [], "any", false, false, false, 302)]), "attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 306
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "nom", [], "any", false, false, false, 306), 'label');
        yield "
                            ";
        // line 307
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "nom", [], "any", false, false, false, 307), 'widget', ["attr" => ["placeholder" => "Votre nom complet"]]);
        yield "
                            ";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "nom", [], "any", false, false, false, 308), 'errors');
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "email", [], "any", false, false, false, 311), 'label');
        yield "
                            ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "email", [], "any", false, false, false, 312), 'widget', ["attr" => ["placeholder" => "votre@email.com"]]);
        yield "
                            ";
        // line 313
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "email", [], "any", false, false, false, 313), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "telephone", [], "any", false, false, false, 319), 'label');
        yield "
                            ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "telephone", [], "any", false, false, false, 320), 'widget', ["attr" => ["placeholder" => "+216 XX XXX XXX"]]);
        yield "
                            ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "telephone", [], "any", false, false, false, 321), 'errors');
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 324
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 324), 'label');
        yield "
                            ";
        // line 325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 325), 'widget', ["attr" => ["placeholder" => "1", "min" => "1"]]);
        yield "
                            ";
        // line 326
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 326), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 330
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), 'rest');
        yield "

                    <button type=\"submit\" class=\"btn-submit\" id=\"payment-submit-btn\">Passer au paiement</button>

                ";
        // line 334
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- RIGHT : SUMMARY -->
    <div class=\"summary-card\">
        <div class=\"summary-header\">
            <div class=\"summary-price\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 342, $this->source); })()), "price", [], "any", false, false, false, 342), "html", null, true);
        yield " DT</div>
            <div class=\"summary-price-label\">par personne</div>
        </div>

        <div class=\"summary-body\">
            ";
        // line 347
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 347, $this->source); })()), "image", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 348
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 348, $this->source); })()), "image", [], "any", false, false, false, 348))), "html", null, true);
            yield "\" class=\"summary-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 348, $this->source); })()), "title", [], "any", false, false, false, 348), "html", null, true);
            yield "\">
            ";
        } else {
            // line 350
            yield "                <div class=\"summary-img-placeholder\">📅</div>
            ";
        }
        // line 352
        yield "
            <div class=\"summary-title\">";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 353, $this->source); })()), "title", [], "any", false, false, false, 353), "html", null, true);
        yield "</div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">📆</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Date</div>
                    <strong>";
        // line 359
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 359, $this->source); })()), "date", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 359, $this->source); })()), "date", [], "any", false, false, false, 359), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                </div>
            </div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">👥</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Capacité</div>
                    <strong>";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 367, $this->source); })()), "capacity", [], "any", false, false, false, 367), "html", null, true);
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
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 383, $this->source); })()), "price", [], "any", false, false, false, 383), "html", null, true);
        yield " DT</span>
            </div>

            <div class=\"summary-total\" style=\"margin-top:10px;\">
                <span>Total estime</span>
                <span class=\"total-price\" id=\"reservation-total\">";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 388, $this->source); })()), "price", [], "any", false, false, false, 388), "html", null, true);
        yield " DT</span>
            </div>

            <div class=\"security-note\">
                Paiement securise via Stripe<br>Le total depend du nombre de places
            </div>
        </div>
    </div>

</div>

<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>

<script>
(function () {
    const price = parseFloat('";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", true, true, false, 405)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 405, $this->source); })()), "price", [], "any", false, false, false, 405), 0)) : (0)), "html", null, true);
        yield "') || 0;
    const placesInput = document.getElementById('";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 406), "vars", [], "any", false, false, false, 406), "id", [], "any", false, false, false, 406), "html", null, true);
        yield "');
    const totalNode = document.getElementById('reservation-total');
    const submitBtn = document.getElementById('payment-submit-btn');

    function refreshTotal() {
        const places = Math.max(parseInt(placesInput?.value || '1', 10) || 1, 1);
        const total = (price * places).toFixed(2);

        if (totalNode) {
            totalNode.textContent = total + ' DT';
        }

        if (submitBtn) {
            submitBtn.textContent = 'Payer ' + total + ' DT avec Stripe';
        }
    }

    if (placesInput) {
        placesInput.addEventListener('input', refreshTotal);
        refreshTotal();
    }
})();
</script>

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
        return "reservation/reservation_new.html.twig";
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
        return array (  617 => 406,  613 => 405,  593 => 388,  585 => 383,  566 => 367,  555 => 359,  546 => 353,  543 => 352,  539 => 350,  531 => 348,  529 => 347,  521 => 342,  510 => 334,  503 => 330,  496 => 326,  492 => 325,  488 => 324,  482 => 321,  478 => 320,  474 => 319,  465 => 313,  461 => 312,  457 => 311,  451 => 308,  447 => 307,  443 => 306,  436 => 302,  415 => 284,  412 => 283,  403 => 281,  398 => 280,  389 => 278,  385 => 277,  375 => 272,  371 => 271,  358 => 261,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
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

    /* Symfony form errors */
    .form-group ul.form-errors,
    .form-group .form-errors {
        list-style: none;
        margin-top: 4px;
        padding: 0;
    }

    .form-group ul.form-errors li,
    .form-group .form-errors li {
        font-size: 12px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 4px 8px;
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
                {{ form_start(form, {'action': path('reservation_new', {'id': evenement.id}), 'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.nom) }}
                            {{ form_widget(form.nom, {'attr': {'placeholder': 'Votre nom complet'}}) }}
                            {{ form_errors(form.nom) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.email) }}
                            {{ form_widget(form.email, {'attr': {'placeholder': 'votre@email.com'}}) }}
                            {{ form_errors(form.email) }}
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            {{ form_label(form.telephone) }}
                            {{ form_widget(form.telephone, {'attr': {'placeholder': '+216 XX XXX XXX'}}) }}
                            {{ form_errors(form.telephone) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.nombrePlaces) }}
                            {{ form_widget(form.nombrePlaces, {'attr': {'placeholder': '1', 'min': '1'}}) }}
                            {{ form_errors(form.nombrePlaces) }}
                        </div>
                    </div>

                    {{ form_rest(form) }}

                    <button type=\"submit\" class=\"btn-submit\" id=\"payment-submit-btn\">Passer au paiement</button>

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

            <div class=\"summary-total\" style=\"margin-top:10px;\">
                <span>Total estime</span>
                <span class=\"total-price\" id=\"reservation-total\">{{ evenement.price }} DT</span>
            </div>

            <div class=\"security-note\">
                Paiement securise via Stripe<br>Le total depend du nombre de places
            </div>
        </div>
    </div>

</div>

<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>

<script>
(function () {
    const price = parseFloat('{{ evenement.price|default(0) }}') || 0;
    const placesInput = document.getElementById('{{ form.nombrePlaces.vars.id }}');
    const totalNode = document.getElementById('reservation-total');
    const submitBtn = document.getElementById('payment-submit-btn');

    function refreshTotal() {
        const places = Math.max(parseInt(placesInput?.value || '1', 10) || 1, 1);
        const total = (price * places).toFixed(2);

        if (totalNode) {
            totalNode.textContent = total + ' DT';
        }

        if (submitBtn) {
            submitBtn.textContent = 'Payer ' + total + ' DT avec Stripe';
        }
    }

    if (placesInput) {
        placesInput.addEventListener('input', refreshTotal);
        refreshTotal();
    }
})();
</script>

{% endblock %}
", "reservation/reservation_new.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\reservation_new.html.twig");
    }
}
