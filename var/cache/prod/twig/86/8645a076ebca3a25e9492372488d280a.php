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
class __TwigTemplate_888881b24664ce67218ce42540698d0b extends Template
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

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Réserver — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 280)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 280), "html", null, true);
        yield "</a> ›
    <span class=\"current\">Réservation</span>
</div>

<div style=\"max-width:1000px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 285));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 288));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 292)]), "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"form-section-title\">Informations personnelles</div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((((($tmp =  !(null === (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 316)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 316)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 316)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 316)) : (null)))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 316)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 316)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 316)))) : (null)), 'label');
        yield "
                            ";
        // line 317
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", true, true, false, 317)) {
            // line 318
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 318), 'widget', ["attr" => ["placeholder" => "Votre nom"]]);
            yield "
                                ";
            // line 319
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 319), 'errors');
            yield "
                            ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 320
($context["form"] ?? null), "name", [], "any", true, true, false, 320)) {
            // line 321
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 321), 'widget', ["attr" => ["placeholder" => "Votre nom"]]);
            yield "
                                ";
            // line 322
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 322), 'errors');
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 327), 'label');
            yield "
                                ";
            // line 328
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 328), 'widget', ["attr" => ["placeholder" => "Votre prénom"]]);
            yield "
                                ";
            // line 329
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 329), 'errors');
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 336), 'label');
            yield "
                        ";
            // line 337
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 337), 'widget', ["attr" => ["placeholder" => "votre@email.com"]]);
            yield "
                        ";
            // line 338
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 338), 'errors');
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 344), 'label');
            yield "
                        ";
            // line 345
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 345), 'widget', ["attr" => ["placeholder" => "+216 XX XXX XXX"]]);
            yield "
                        ";
            // line 346
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 346), 'errors');
            yield "
                    </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 348
($context["form"] ?? null), "phone", [], "any", true, true, false, 348)) {
            // line 349
            yield "                    <div class=\"form-group\">
                        ";
            // line 350
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 350), 'label');
            yield "
                        ";
            // line 351
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 351), 'widget', ["attr" => ["placeholder" => "+216 XX XXX XXX"]]);
            yield "
                        ";
            // line 352
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 352), 'errors');
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
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 360), 'label');
            yield "
                        ";
            // line 361
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 361), 'widget');
            yield "
                        ";
            // line 362
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 362), 'errors');
            yield "
                    </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 364
($context["form"] ?? null), "places", [], "any", true, true, false, 364)) {
            // line 365
            yield "                    <div class=\"form-group\">
                        ";
            // line 366
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "places", [], "any", false, false, false, 366), 'label');
            yield "
                        ";
            // line 367
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "places", [], "any", false, false, false, 367), 'widget');
            yield "
                        ";
            // line 368
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "places", [], "any", false, false, false, 368), 'errors');
            yield "
                    </div>
                    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 370
($context["form"] ?? null), "nbPlaces", [], "any", true, true, false, 370)) {
            // line 371
            yield "                    <div class=\"form-group\">
                        ";
            // line 372
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nbPlaces", [], "any", false, false, false, 372), 'label');
            yield "
                        ";
            // line 373
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nbPlaces", [], "any", false, false, false, 373), 'widget');
            yield "
                        ";
            // line 374
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nbPlaces", [], "any", false, false, false, 374), 'errors');
            yield "
                    </div>
                    ";
        }
        // line 377
        yield "
                    ";
        // line 379
        yield "                    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "

                    <button type=\"submit\" class=\"btn-submit\">
                        🎟 Confirmer la réservation
                    </button>

                ";
        // line 385
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- RIGHT : SUMMARY -->
    <div class=\"summary-card\">
        <div class=\"summary-header\">
            <div class=\"summary-price\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 393), "html", null, true);
        yield " DT</div>
            <div class=\"summary-price-label\">par personne</div>
        </div>

        <div class=\"summary-body\">
            ";
        // line 398
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 398)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 399
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 399))), "html", null, true);
            yield "\" class=\"summary-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 399), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 404), "html", null, true);
        yield "</div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">📆</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Date</div>
                    <strong>";
        // line 410
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 410), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                </div>
            </div>

            <div class=\"summary-row\">
                <span class=\"row-icon\">👥</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Capacité</div>
                    <strong>";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 418), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 434), "html", null, true);
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
        return array (  682 => 434,  663 => 418,  652 => 410,  643 => 404,  640 => 403,  636 => 401,  628 => 399,  626 => 398,  618 => 393,  607 => 385,  597 => 379,  594 => 377,  588 => 374,  584 => 373,  580 => 372,  577 => 371,  575 => 370,  570 => 368,  566 => 367,  562 => 366,  559 => 365,  557 => 364,  552 => 362,  548 => 361,  544 => 360,  541 => 359,  539 => 358,  534 => 355,  528 => 352,  524 => 351,  520 => 350,  517 => 349,  515 => 348,  510 => 346,  506 => 345,  502 => 344,  499 => 343,  497 => 342,  494 => 341,  488 => 338,  484 => 337,  480 => 336,  477 => 335,  475 => 334,  470 => 331,  465 => 329,  461 => 328,  456 => 327,  454 => 326,  450 => 324,  445 => 322,  440 => 321,  438 => 320,  434 => 319,  429 => 318,  427 => 317,  423 => 316,  414 => 310,  393 => 292,  390 => 291,  381 => 289,  376 => 288,  367 => 286,  363 => 285,  353 => 280,  349 => 279,  336 => 269,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/form.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\form.html.twig");
    }
}
