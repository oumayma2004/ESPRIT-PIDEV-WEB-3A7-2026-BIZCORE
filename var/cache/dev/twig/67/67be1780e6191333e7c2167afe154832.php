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

/* events/show.html.twig */
class __TwigTemplate_e7b62b7c56f5ce6d69d001b89e31a03a extends Template
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
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/show.html.twig"));

        $this->parent = $this->load("base_front.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "DÉTAIL ÉVÉNEMENT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    .navbar {
        background: #fff; border-bottom: 1px solid #e2e8f0;
        padding: 0 40px; height: 64px;
        display: flex; align-items: center; justify-content: space-between;
        position: sticky; top: 0; z-index: 100;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }
    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .breadcrumb-bar {
        background: #fff; border-bottom: 1px solid #e2e8f0;
        padding: 12px 40px; display: flex; align-items: center; gap: 8px;
        font-size: 13px; color: #94a3b8;
    }
    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }
    .breadcrumb-bar .current { color: #0f172a; font-weight: 500; }

    .page {
        max-width: 1100px; margin: 40px auto; padding: 0 24px;
        display: grid; grid-template-columns: 1fr 360px;
        gap: 28px; align-items: start;
    }

    /* LEFT */
    .detail-card {
        background: #fff; border-radius: 16px;
        border: 1px solid #e2e8f0; overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .detail-img { width: 100%; height: 340px; object-fit: cover; display: block; }
    .detail-img-placeholder {
        height: 340px; display: flex; align-items: center; justify-content: center;
        font-size: 72px; background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
    }
    .detail-body { padding: 28px; }
    .detail-tags { display: flex; gap: 8px; margin-bottom: 16px; }
    .tag { padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
    .tag-green {
    background: #dcfce7;
    color: #166534;
}
.tag-red {
    background: #fee2e2;
    color: #991b1b;
}
    .tag-blue  { background: #dbeafe; color: #1d4ed8; }
    .detail-title { font-size: 28px; font-weight: 800; color: #0f172a; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
    .detail-meta {
        display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
        margin-bottom: 24px; padding: 20px;
        background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;
    }
    .meta-box { display: flex; flex-direction: column; gap: 4px; }
    .meta-label { font-size: 11px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
    .meta-value { font-size: 14px; font-weight: 600; color: #0f172a; }
    .meta-value.green { color: #16a34a; font-size: 18px; font-weight: 800; }
    .detail-desc-title { font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
    .detail-desc { font-size: 14px; color: #475569; line-height: 1.8; }

    /* RIGHT */
    .reserve-card {
        background: #fff; border-radius: 16px;
        border: 1px solid #e2e8f0; box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        overflow: hidden; position: sticky; top: 80px;
    }
    .reserve-header {
        background: linear-gradient(135deg, #0f172a, #1e3a5f);
        padding: 24px; color: #fff; text-align: center;
    }
    .reserve-price { font-size: 36px; font-weight: 800; color: #22c55e; margin-bottom: 4px; }
    .reserve-price-label { font-size: 13px; color: #94a3b8; }
    .reserve-body { padding: 24px; }
    .reserve-info { display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px; }
    .info-row {
        display: flex; align-items: center; gap: 10px;
        font-size: 13px; color: #475569;
        padding: 10px 14px; background: #f8fafc;
        border-radius: 8px; border: 1px solid #e2e8f0;
    }
    .info-row .info-icon { font-size: 16px; }
    .info-row strong { color: #0f172a; }

    /* ===== SYMFONY FORM STYLES ===== */
    .reserve-form { display: flex; flex-direction: column; gap: 12px; }

    .reserve-form .form-group { display: flex; flex-direction: column; gap: 5px; }

    .reserve-form label {
        font-size: 11px; font-weight: 700;
        color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;
        display: block;
    }

    .reserve-form input,
    .reserve-form select,
    .reserve-form textarea {
        width: 100%;
        padding: 10px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s; background: #fff;
    }

    .reserve-form input:focus,
    .reserve-form select:focus,
    .reserve-form textarea:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
    }

    .reserve-form .form-error {
        font-size: 11px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 3px 8px; margin-top: 3px; display: block;
    }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }


    .btn-submit {
        width: 100%; padding: 14px;
        background: #22c55e; color: #fff;
        border: none; border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-size: 15px; font-weight: 700;
        cursor: pointer; transition: all 0.2s; margin-top: 4px;
    }
    .btn-submit:hover {
        background: #16a34a; transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(34,197,94,0.3);
    }

    .reserve-note { text-align: center; font-size: 12px; color: #94a3b8; margin-top: 12px; }
    .reserve-form input.is-invalid,
    .reserve-form input.is-invalid,
    .reserve-form select.is-invalid,
    .reserve-form textarea.is-invalid {
        border-color: #ef4444 !important;
        box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important;
    }

    .back-link {
        display: inline-flex; align-items: center; gap: 6px;
        color: #64748b; text-decoration: none;
        font-size: 13px; font-weight: 500;
        margin-bottom: 20px; transition: color 0.15s;
    }
    .back-link:hover { color: #22c55e; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    /* MODAL */
    .modal-overlay {
        display: none; position: fixed; inset: 0;
        background: rgba(15,23,42,0.6); backdrop-filter: blur(4px);
        z-index: 200; align-items: center; justify-content: center;
    }
    .modal-overlay.active { display: flex; }
    .modal {
        background: #fff; border-radius: 16px; padding: 36px;
        max-width: 420px; width: 90%; text-align: center;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    }
    .modal-icon { font-size: 48px; margin-bottom: 14px; }
    .modal h3 { font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
    .modal p  { font-size: 14px; color: #64748b; margin-bottom: 24px; line-height: 1.6; }
    .modal-btns { display: flex; gap: 10px; }
    .modal-btn {
        flex: 1; padding: 12px; border-radius: 8px;
        font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 600;
        cursor: pointer; border: none; transition: all 0.15s;
    }
    .modal-cancel  { background: #f1f5f9; color: #475569; }
    .modal-cancel:hover  { background: #e2e8f0; }
    .modal-confirm { background: #22c55e; color: #fff; }
    .modal-confirm:hover { background: #16a34a; }

    .footer { background: #0f172a; color: #64748b; text-align: center; padding: 28px; font-size: 13px; margin-top: 60px; }
    .footer span { color: #22c55e; }

    @media (max-width: 768px) {
        .page { grid-template-columns: 1fr; }
        .reserve-card { position: static; }
    }
    /* Add inside your <style> block */
.reserve-form ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.reserve-form ul li {
    font-size: 11px;
    color: #dc2626;
    background: #fee2e2;
    border-radius: 4px;
    padding: 3px 8px;
    margin-top: 3px;
    display: block;
}
</style>

<div class=\"breadcrumb-bar\">
    <a href=\"#\">Accueil</a> ›
    <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a> ›
    <span class=\"current\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 227, $this->source); })()), "title", [], "any", false, false, false, 227), "html", null, true);
        yield "</span>
</div>

<div style=\"max-width:1100px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "flashes", ["success"], "method", false, false, false, 231));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 232
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "flashes", ["error"], "method", false, false, false, 234));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 235
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\" class=\"back-link\">← Retour aux événements</a>
</div>

<div class=\"page\">

    <!-- LEFT -->
    <div>
        <div class=\"detail-card\">
            ";
        // line 245
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 245, $this->source); })()), "image", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 246
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 246, $this->source); })()), "image", [], "any", false, false, false, 246))), "html", null, true);
            yield "\" class=\"detail-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 246, $this->source); })()), "title", [], "any", false, false, false, 246), "html", null, true);
            yield "\">
            ";
        } else {
            // line 248
            yield "                <div class=\"detail-img-placeholder\">📅</div>
            ";
        }
        // line 250
        yield "
            <div class=\"detail-body\">
                <div class=\"detail-tags\">
                   ";
        // line 253
        if (((isset($context["availablePlaces"]) || array_key_exists("availablePlaces", $context) ? $context["availablePlaces"] : (function () { throw new RuntimeError('Variable "availablePlaces" does not exist.', 253, $this->source); })()) == 0)) {
            // line 254
            yield "    <span class=\"tag tag-red\">❌ Complet</span>
";
        } else {
            // line 256
            yield "    <span class=\"tag tag-green\">✓ Disponible</span>
";
        }
        // line 258
        yield "                    <span class=\"tag tag-blue\">📅 Événement</span>
                </div>

                <h1 class=\"detail-title\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 261, $this->source); })()), "title", [], "any", false, false, false, 261), "html", null, true);
        yield "</h1>

                <div class=\"detail-meta\">
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Prix</span>
                        <span class=\"meta-value green\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 266, $this->source); })()), "price", [], "any", false, false, false, 266), "html", null, true);
        yield " DT</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Capacité</span>
                        <span class=\"meta-value\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 270, $this->source); })()), "capacity", [], "any", false, false, false, 270), "html", null, true);
        yield " places</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Date</span>
                        <span class=\"meta-value\">";
        // line 274
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 274, $this->source); })()), "date", [], "any", false, false, false, 274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 274, $this->source); })()), "date", [], "any", false, false, false, 274), "d/m/Y"), "html", null, true)) : ("À confirmer"));
        yield "</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Heure</span>
                        <span class=\"meta-value\">";
        // line 278
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 278, $this->source); })()), "date", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 278, $this->source); })()), "date", [], "any", false, false, false, 278), "H:i"), "html", null, true)) : ("-"));
        yield "</span>
                    </div>
                    <div class=\"meta-box\" style=\"grid-column: span 2;\">
    <span class=\"meta-label\">Lieu</span>
    <span class=\"meta-value\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 282, $this->source); })()), "lieu", [], "any", false, false, false, 282), "html", null, true);
        yield "</span>
</div>
                </div>

                <div class=\"detail-desc-title\">À propos de cet événement</div>
                <div class=\"detail-desc\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 287, $this->source); })()), "description", [], "any", false, false, false, 287), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>

    <!-- RIGHT: inline Symfony form -->
    <div class=\"reserve-card\">
        <div class=\"reserve-header\">
            <div class=\"reserve-price\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 295, $this->source); })()), "price", [], "any", false, false, false, 295), "html", null, true);
        yield " DT</div>
            <div class=\"reserve-price-label\">par personne</div>
        </div>

        <div class=\"reserve-body\">
            <div class=\"reserve-info\">
                <div class=\"info-row\">
                    <span class=\"info-icon\">📆</span>
                    <div>
                        <div style=\"font-size:11px;color:#94a3b8;font-weight:600;\">DATE</div>
                        <strong>";
        // line 305
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 305, $this->source); })()), "date", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 305, $this->source); })()), "date", [], "any", false, false, false, 305), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                    </div>
                </div>
                <div class=\"info-row\">
                    <span class=\"info-icon\">👥</span>
                    <div>
                        <div style=\"font-size:11px;color:#94a3b8;font-weight:600;\">PLACES DISPONIBLES</div>
                        <strong>";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["availablePlaces"]) || array_key_exists("availablePlaces", $context) ? $context["availablePlaces"] : (function () { throw new RuntimeError('Variable "availablePlaces" does not exist.', 312, $this->source); })()), "html", null, true);
        yield " places</strong>
                    </div>
                </div>
                ";
        // line 316
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 316, $this->source); })()), "aiRating", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 317
            yield "<div style=\"max-width:1100px;margin:24px auto;padding:0 24px;\">
    <div style=\"background:#fff;border-radius:16px;border:1px solid #e2e8f0;padding:24px;box-shadow:0 2px 8px rgba(0,0,0,.05);\">
        <div style=\"font-size:16px;font-weight:700;color:#0f172a;margin-bottom:12px;\">🤖 Analyse IA des commentaires</div>
        <div style=\"display:flex;align-items:center;gap:12px;margin-bottom:12px;\">
            <span style=\"font-size:32px;\">
                ";
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield ((($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 322, $this->source); })()), "aiRating", [], "any", false, false, false, 322)))) ? ("⭐") : ("☆"));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            yield "            </span>
            <span style=\"font-size:22px;font-weight:800;color:#0f172a;\">";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 324, $this->source); })()), "aiRating", [], "any", false, false, false, 324), 1), "html", null, true);
            yield "/5</span>
        </div>
        ";
            // line 326
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 326, $this->source); })()), "aiSummary", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 327
                yield "            <p style=\"font-size:14px;color:#475569;font-style:italic;\">\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 327, $this->source); })()), "aiSummary", [], "any", false, false, false, 327), "html", null, true);
                yield "\"</p>
        ";
            }
            // line 329
            yield "        <div style=\"display:flex;gap:16px;margin-top:12px;\">
            <span style=\"background:#dcfce7;color:#166534;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;\">👍 ";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 330, $this->source); })()), "aiPositive", [], "any", false, false, false, 330), "html", null, true);
            yield "% positifs</span>
            <span style=\"background:#fef9c3;color:#854d0e;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;\">😐 ";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 331, $this->source); })()), "aiNeutral", [], "any", false, false, false, 331), "html", null, true);
            yield "% neutres</span>
            <span style=\"background:#fee2e2;color:#991b1b;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;\">👎 ";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 332, $this->source); })()), "aiNegative", [], "any", false, false, false, 332), "html", null, true);
            yield "% négatifs</span>
        </div>
    </div>
</div>
";
        }
        // line 337
        yield "
";
        // line 339
        yield "<div style=\"max-width:1100px;margin:0 auto 40px;padding:0 24px;\">
    <div style=\"background:#fff;border-radius:16px;border:1px solid #e2e8f0;padding:28px;box-shadow:0 2px 8px rgba(0,0,0,.05);\">
        <h2 style=\"font-size:18px;font-weight:700;color:#0f172a;margin-bottom:20px;\">💬 Commentaires (";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 341, $this->source); })())), "html", null, true);
        yield ")</h2>

        ";
        // line 344
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 344, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 345
            yield "        <div style=\"border-bottom:1px solid #f1f5f9;padding:14px 0;\">
            <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;\">
                <span style=\"font-size:12px;color:#94a3b8;\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "dateCreation", [], "any", false, false, false, 347), "d/m/Y à H:i"), "html", null, true);
            yield "</span>
                ";
            // line 348
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "note", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 349
                yield "                    <span>";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["c"], "note", [], "any", false, false, false, 349))) ? ("⭐") : ("☆"));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "</span>
                ";
            }
            // line 351
            yield "            </div>
            <p style=\"font-size:14px;color:#475569;margin:0;\">";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 352), "html", null, true);
            yield "</p>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 354
        if (!$context['_iterated']) {
            // line 355
            yield "        <p style=\"color:#94a3b8;font-size:14px;\">Aucun commentaire pour le moment. Soyez le premier !</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        yield "
        ";
        // line 359
        yield "        <div style=\"margin-top:24px;padding-top:20px;border-top:1px solid #e2e8f0;\">
            <h3 style=\"font-size:15px;font-weight:700;color:#0f172a;margin-bottom:16px;\">✍️ Laisser un commentaire</h3>
            ";
        // line 361
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 361, $this->source); })()), 'form_start', ["attr" => ["style" => "display:flex;flex-direction:column;gap:12px;"]]);
        yield "
                <div>
                    ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 363, $this->source); })()), "contenu", [], "any", false, false, false, 363), 'label', ["label_attr" => ["style" => "font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:5px;"]]);
        yield "
                    ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 364, $this->source); })()), "contenu", [], "any", false, false, false, 364), 'widget', ["attr" => ["style" => "width:100%;padding:10px 14px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;outline:none;resize:vertical;"]]);
        yield "
                    ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 365, $this->source); })()), "contenu", [], "any", false, false, false, 365), "vars", [], "any", false, false, false, 365), "errors", [], "any", false, false, false, 365));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 366
            yield "                        <div style=\"font-size:12px;color:#dc2626;background:#fee2e2;border-radius:4px;padding:4px 8px;margin-top:3px;\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 366), "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        yield "                </div>
                <div>
                    ";
        // line 370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 370, $this->source); })()), "note", [], "any", false, false, false, 370), 'label', ["label_attr" => ["style" => "font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:5px;"]]);
        yield "
                    ";
        // line 371
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 371, $this->source); })()), "note", [], "any", false, false, false, 371), 'widget', ["attr" => ["style" => "width:100%;padding:10px 14px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;"]]);
        yield "
                </div>
                <button type=\"submit\" style=\"background:#22c55e;color:#fff;border:none;border-radius:10px;padding:12px 24px;font-size:14px;font-weight:700;cursor:pointer;align-self:flex-start;\">
                    💬 Publier le commentaire
                </button>
            ";
        // line 376
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 376, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
            </div>
 ";
        // line 382
        yield "<div style=\"margin-bottom: 20px; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0;\">

    <iframe
        width=\"100%\"
        height=\"220\"
        style=\"border: 0; display: block;\"
        loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\"
        src=\"https://maps.google.com/maps?q=";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 390, $this->source); })()), "lieu", [], "any", false, false, false, 390)), "html", null, true);
        yield "&output=embed\">
    </iframe>

    <div style=\"padding: 12px 14px; display: flex; align-items: center; gap: 10px; background: #fff;\">
        <div style=\"flex: 1;\">
            <div style=\"font-size: 11px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;\">LIEU</div>
            <div style=\"font-size: 13px; font-weight: 600; color: #0f172a;\">";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 396, $this->source); })()), "lieu", [], "any", false, false, false, 396), "html", null, true);
        yield "</div>
        </div>
        <a href=\"https://www.google.com/maps/dir/?api=1&destination=";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 398, $this->source); })()), "lieu", [], "any", false, false, false, 398)), "html", null, true);
        yield "\"
           target=\"_blank\"
           rel=\"noopener\"
           style=\"display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #fff;
                  padding: 9px 14px; border-radius: 8px; font-size: 13px; font-weight: 700;
                  text-decoration: none; white-space: nowrap;\">
            📍 Itinéraire
        </a>
    </div>
</div>
            ";
        // line 409
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["id" => "reserveForm", "class" => "reserve-form", "novalidate" => "novalidate"]]);
        // line 412
        yield "

    <div class=\"form-group\">
        ";
        // line 415
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 415, $this->source); })()), "nom", [], "any", false, false, false, 415), 'label');
        yield "
        ";
        // line 416
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "nom", [], "any", false, false, false, 416), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 416, $this->source); })()), "nom", [], "any", false, false, false, 416), "vars", [], "any", false, false, false, 416), "errors", [], "any", false, false, false, 416)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "nom", [], "any", false, false, false, 417), "vars", [], "any", false, false, false, 417), "errors", [], "any", false, false, false, 417));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 418
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 418), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 423
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "email", [], "any", false, false, false, 423), 'label');
        yield "
        ";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "email", [], "any", false, false, false, 424), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "email", [], "any", false, false, false, 424), "vars", [], "any", false, false, false, 424), "errors", [], "any", false, false, false, 424)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "email", [], "any", false, false, false, 425), "vars", [], "any", false, false, false, 425), "errors", [], "any", false, false, false, 425));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 426
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 426), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 431
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "telephone", [], "any", false, false, false, 431), 'label');
        yield "
        ";
        // line 432
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "telephone", [], "any", false, false, false, 432), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "telephone", [], "any", false, false, false, 432), "vars", [], "any", false, false, false, 432), "errors", [], "any", false, false, false, 432)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), "telephone", [], "any", false, false, false, 433), "vars", [], "any", false, false, false, 433), "errors", [], "any", false, false, false, 433));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 434
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 434), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 439
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 439), 'label');
        yield "
        ";
        // line 440
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 440), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 440), "vars", [], "any", false, false, false, 440), "errors", [], "any", false, false, false, 440)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 441), "vars", [], "any", false, false, false, 441), "errors", [], "any", false, false, false, 441));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 442
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 442), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        yield "    </div>

                ";
        // line 446
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), 'rest');
        yield "
                

                <button type=\"submit\" class=\"btn-submit\" id=\"reserveBtn\">
                    🎟 Réserver maintenant
                </button>

            ";
        // line 453
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), 'form_end');
        yield "

            <div class=\"reserve-note\">🔒 Réservation sécurisée — Annulation gratuite</div>
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
        return "events/show.html.twig";
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
        return array (  841 => 453,  831 => 446,  827 => 444,  818 => 442,  814 => 441,  810 => 440,  806 => 439,  801 => 436,  792 => 434,  788 => 433,  784 => 432,  780 => 431,  775 => 428,  766 => 426,  762 => 425,  758 => 424,  754 => 423,  749 => 420,  740 => 418,  736 => 417,  732 => 416,  728 => 415,  723 => 412,  720 => 409,  707 => 398,  702 => 396,  693 => 390,  683 => 382,  675 => 376,  667 => 371,  663 => 370,  659 => 368,  650 => 366,  646 => 365,  642 => 364,  638 => 363,  633 => 361,  629 => 359,  626 => 357,  619 => 355,  617 => 354,  610 => 352,  607 => 351,  594 => 349,  592 => 348,  588 => 347,  584 => 345,  578 => 344,  573 => 341,  569 => 339,  566 => 337,  558 => 332,  554 => 331,  550 => 330,  547 => 329,  541 => 327,  539 => 326,  534 => 324,  531 => 323,  522 => 322,  515 => 317,  513 => 316,  507 => 312,  497 => 305,  484 => 295,  473 => 287,  465 => 282,  458 => 278,  451 => 274,  444 => 270,  437 => 266,  429 => 261,  424 => 258,  420 => 256,  416 => 254,  414 => 253,  409 => 250,  405 => 248,  397 => 246,  395 => 245,  383 => 237,  374 => 235,  369 => 234,  360 => 232,  356 => 231,  349 => 227,  345 => 226,  124 => 7,  111 => 6,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}{{ evenement.title }}{% endblock %}
{% block page_title %}DÉTAIL ÉVÉNEMENT{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    .navbar {
        background: #fff; border-bottom: 1px solid #e2e8f0;
        padding: 0 40px; height: 64px;
        display: flex; align-items: center; justify-content: space-between;
        position: sticky; top: 0; z-index: 100;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }
    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .breadcrumb-bar {
        background: #fff; border-bottom: 1px solid #e2e8f0;
        padding: 12px 40px; display: flex; align-items: center; gap: 8px;
        font-size: 13px; color: #94a3b8;
    }
    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }
    .breadcrumb-bar .current { color: #0f172a; font-weight: 500; }

    .page {
        max-width: 1100px; margin: 40px auto; padding: 0 24px;
        display: grid; grid-template-columns: 1fr 360px;
        gap: 28px; align-items: start;
    }

    /* LEFT */
    .detail-card {
        background: #fff; border-radius: 16px;
        border: 1px solid #e2e8f0; overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .detail-img { width: 100%; height: 340px; object-fit: cover; display: block; }
    .detail-img-placeholder {
        height: 340px; display: flex; align-items: center; justify-content: center;
        font-size: 72px; background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
    }
    .detail-body { padding: 28px; }
    .detail-tags { display: flex; gap: 8px; margin-bottom: 16px; }
    .tag { padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
    .tag-green {
    background: #dcfce7;
    color: #166534;
}
.tag-red {
    background: #fee2e2;
    color: #991b1b;
}
    .tag-blue  { background: #dbeafe; color: #1d4ed8; }
    .detail-title { font-size: 28px; font-weight: 800; color: #0f172a; line-height: 1.25; margin-bottom: 18px; letter-spacing: -0.5px; }
    .detail-meta {
        display: grid; grid-template-columns: 1fr 1fr; gap: 14px;
        margin-bottom: 24px; padding: 20px;
        background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;
    }
    .meta-box { display: flex; flex-direction: column; gap: 4px; }
    .meta-label { font-size: 11px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
    .meta-value { font-size: 14px; font-weight: 600; color: #0f172a; }
    .meta-value.green { color: #16a34a; font-size: 18px; font-weight: 800; }
    .detail-desc-title { font-size: 16px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
    .detail-desc { font-size: 14px; color: #475569; line-height: 1.8; }

    /* RIGHT */
    .reserve-card {
        background: #fff; border-radius: 16px;
        border: 1px solid #e2e8f0; box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        overflow: hidden; position: sticky; top: 80px;
    }
    .reserve-header {
        background: linear-gradient(135deg, #0f172a, #1e3a5f);
        padding: 24px; color: #fff; text-align: center;
    }
    .reserve-price { font-size: 36px; font-weight: 800; color: #22c55e; margin-bottom: 4px; }
    .reserve-price-label { font-size: 13px; color: #94a3b8; }
    .reserve-body { padding: 24px; }
    .reserve-info { display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px; }
    .info-row {
        display: flex; align-items: center; gap: 10px;
        font-size: 13px; color: #475569;
        padding: 10px 14px; background: #f8fafc;
        border-radius: 8px; border: 1px solid #e2e8f0;
    }
    .info-row .info-icon { font-size: 16px; }
    .info-row strong { color: #0f172a; }

    /* ===== SYMFONY FORM STYLES ===== */
    .reserve-form { display: flex; flex-direction: column; gap: 12px; }

    .reserve-form .form-group { display: flex; flex-direction: column; gap: 5px; }

    .reserve-form label {
        font-size: 11px; font-weight: 700;
        color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;
        display: block;
    }

    .reserve-form input,
    .reserve-form select,
    .reserve-form textarea {
        width: 100%;
        padding: 10px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'Inter', sans-serif;
        font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s; background: #fff;
    }

    .reserve-form input:focus,
    .reserve-form select:focus,
    .reserve-form textarea:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
    }

    .reserve-form .form-error {
        font-size: 11px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 3px 8px; margin-top: 3px; display: block;
    }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }


    .btn-submit {
        width: 100%; padding: 14px;
        background: #22c55e; color: #fff;
        border: none; border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-size: 15px; font-weight: 700;
        cursor: pointer; transition: all 0.2s; margin-top: 4px;
    }
    .btn-submit:hover {
        background: #16a34a; transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(34,197,94,0.3);
    }

    .reserve-note { text-align: center; font-size: 12px; color: #94a3b8; margin-top: 12px; }
    .reserve-form input.is-invalid,
    .reserve-form input.is-invalid,
    .reserve-form select.is-invalid,
    .reserve-form textarea.is-invalid {
        border-color: #ef4444 !important;
        box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important;
    }

    .back-link {
        display: inline-flex; align-items: center; gap: 6px;
        color: #64748b; text-decoration: none;
        font-size: 13px; font-weight: 500;
        margin-bottom: 20px; transition: color 0.15s;
    }
    .back-link:hover { color: #22c55e; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    /* MODAL */
    .modal-overlay {
        display: none; position: fixed; inset: 0;
        background: rgba(15,23,42,0.6); backdrop-filter: blur(4px);
        z-index: 200; align-items: center; justify-content: center;
    }
    .modal-overlay.active { display: flex; }
    .modal {
        background: #fff; border-radius: 16px; padding: 36px;
        max-width: 420px; width: 90%; text-align: center;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    }
    .modal-icon { font-size: 48px; margin-bottom: 14px; }
    .modal h3 { font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 10px; }
    .modal p  { font-size: 14px; color: #64748b; margin-bottom: 24px; line-height: 1.6; }
    .modal-btns { display: flex; gap: 10px; }
    .modal-btn {
        flex: 1; padding: 12px; border-radius: 8px;
        font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 600;
        cursor: pointer; border: none; transition: all 0.15s;
    }
    .modal-cancel  { background: #f1f5f9; color: #475569; }
    .modal-cancel:hover  { background: #e2e8f0; }
    .modal-confirm { background: #22c55e; color: #fff; }
    .modal-confirm:hover { background: #16a34a; }

    .footer { background: #0f172a; color: #64748b; text-align: center; padding: 28px; font-size: 13px; margin-top: 60px; }
    .footer span { color: #22c55e; }

    @media (max-width: 768px) {
        .page { grid-template-columns: 1fr; }
        .reserve-card { position: static; }
    }
    /* Add inside your <style> block */
.reserve-form ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.reserve-form ul li {
    font-size: 11px;
    color: #dc2626;
    background: #fee2e2;
    border-radius: 4px;
    padding: 3px 8px;
    margin-top: 3px;
    display: block;
}
</style>

<div class=\"breadcrumb-bar\">
    <a href=\"#\">Accueil</a> ›
    <a href=\"{{ path('evenement_front') }}\">Événements</a> ›
    <span class=\"current\">{{ evenement.title }}</span>
</div>

<div style=\"max-width:1100px; margin:0 auto; padding:32px 24px 0;\">
    {% for msg in app.flashes('success') %}
        <div class=\"flash flash-success\">✅ {{ msg }}</div>
    {% endfor %}
    {% for msg in app.flashes('error') %}
        <div class=\"flash flash-error\">❌ {{ msg }}</div>
    {% endfor %}
    <a href=\"{{ path('evenement_front') }}\" class=\"back-link\">← Retour aux événements</a>
</div>

<div class=\"page\">

    <!-- LEFT -->
    <div>
        <div class=\"detail-card\">
            {% if evenement.image %}
                <img src=\"{{ asset('uploads/' ~ evenement.image) }}\" class=\"detail-img\" alt=\"{{ evenement.title }}\">
            {% else %}
                <div class=\"detail-img-placeholder\">📅</div>
            {% endif %}

            <div class=\"detail-body\">
                <div class=\"detail-tags\">
                   {% if availablePlaces == 0 %}
    <span class=\"tag tag-red\">❌ Complet</span>
{% else %}
    <span class=\"tag tag-green\">✓ Disponible</span>
{% endif %}
                    <span class=\"tag tag-blue\">📅 Événement</span>
                </div>

                <h1 class=\"detail-title\">{{ evenement.title }}</h1>

                <div class=\"detail-meta\">
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Prix</span>
                        <span class=\"meta-value green\">{{ evenement.price }} DT</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Capacité</span>
                        <span class=\"meta-value\">{{ evenement.capacity }} places</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Date</span>
                        <span class=\"meta-value\">{{ evenement.date ? evenement.date|date('d/m/Y') : 'À confirmer' }}</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Heure</span>
                        <span class=\"meta-value\">{{ evenement.date ? evenement.date|date('H:i') : '-' }}</span>
                    </div>
                    <div class=\"meta-box\" style=\"grid-column: span 2;\">
    <span class=\"meta-label\">Lieu</span>
    <span class=\"meta-value\">{{ evenement.lieu }}</span>
</div>
                </div>

                <div class=\"detail-desc-title\">À propos de cet événement</div>
                <div class=\"detail-desc\">{{ evenement.description }}</div>
            </div>
        </div>
    </div>

    <!-- RIGHT: inline Symfony form -->
    <div class=\"reserve-card\">
        <div class=\"reserve-header\">
            <div class=\"reserve-price\">{{ evenement.price }} DT</div>
            <div class=\"reserve-price-label\">par personne</div>
        </div>

        <div class=\"reserve-body\">
            <div class=\"reserve-info\">
                <div class=\"info-row\">
                    <span class=\"info-icon\">📆</span>
                    <div>
                        <div style=\"font-size:11px;color:#94a3b8;font-weight:600;\">DATE</div>
                        <strong>{{ evenement.date ? evenement.date|date('d/m/Y à H:i') : 'À confirmer' }}</strong>
                    </div>
                </div>
                <div class=\"info-row\">
                    <span class=\"info-icon\">👥</span>
                    <div>
                        <div style=\"font-size:11px;color:#94a3b8;font-weight:600;\">PLACES DISPONIBLES</div>
                        <strong>{{ availablePlaces }} places</strong>
                    </div>
                </div>
                {# ===== AI RATING DISPLAY ===== #}
{% if evenement.aiRating %}
<div style=\"max-width:1100px;margin:24px auto;padding:0 24px;\">
    <div style=\"background:#fff;border-radius:16px;border:1px solid #e2e8f0;padding:24px;box-shadow:0 2px 8px rgba(0,0,0,.05);\">
        <div style=\"font-size:16px;font-weight:700;color:#0f172a;margin-bottom:12px;\">🤖 Analyse IA des commentaires</div>
        <div style=\"display:flex;align-items:center;gap:12px;margin-bottom:12px;\">
            <span style=\"font-size:32px;\">
                {% for i in 1..5 %}{{ i <= evenement.aiRating|round ? '⭐' : '☆' }}{% endfor %}
            </span>
            <span style=\"font-size:22px;font-weight:800;color:#0f172a;\">{{ evenement.aiRating|number_format(1) }}/5</span>
        </div>
        {% if evenement.aiSummary %}
            <p style=\"font-size:14px;color:#475569;font-style:italic;\">\"{{ evenement.aiSummary }}\"</p>
        {% endif %}
        <div style=\"display:flex;gap:16px;margin-top:12px;\">
            <span style=\"background:#dcfce7;color:#166534;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;\">👍 {{ evenement.aiPositive }}% positifs</span>
            <span style=\"background:#fef9c3;color:#854d0e;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;\">😐 {{ evenement.aiNeutral }}% neutres</span>
            <span style=\"background:#fee2e2;color:#991b1b;padding:4px 12px;border-radius:20px;font-size:12px;font-weight:600;\">👎 {{ evenement.aiNegative }}% négatifs</span>
        </div>
    </div>
</div>
{% endif %}

{# ===== COMMENTAIRES SECTION ===== #}
<div style=\"max-width:1100px;margin:0 auto 40px;padding:0 24px;\">
    <div style=\"background:#fff;border-radius:16px;border:1px solid #e2e8f0;padding:28px;box-shadow:0 2px 8px rgba(0,0,0,.05);\">
        <h2 style=\"font-size:18px;font-weight:700;color:#0f172a;margin-bottom:20px;\">💬 Commentaires ({{ commentaires|length }})</h2>

        {# List existing comments #}
        {% for c in commentaires %}
        <div style=\"border-bottom:1px solid #f1f5f9;padding:14px 0;\">
            <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;\">
                <span style=\"font-size:12px;color:#94a3b8;\">{{ c.dateCreation|date('d/m/Y à H:i') }}</span>
                {% if c.note %}
                    <span>{% for i in 1..5 %}{{ i <= c.note ? '⭐' : '☆' }}{% endfor %}</span>
                {% endif %}
            </div>
            <p style=\"font-size:14px;color:#475569;margin:0;\">{{ c.contenu }}</p>
        </div>
        {% else %}
        <p style=\"color:#94a3b8;font-size:14px;\">Aucun commentaire pour le moment. Soyez le premier !</p>
        {% endfor %}

        {# Add comment form #}
        <div style=\"margin-top:24px;padding-top:20px;border-top:1px solid #e2e8f0;\">
            <h3 style=\"font-size:15px;font-weight:700;color:#0f172a;margin-bottom:16px;\">✍️ Laisser un commentaire</h3>
            {{ form_start(commentaireForm, {'attr': {'style': 'display:flex;flex-direction:column;gap:12px;'}}) }}
                <div>
                    {{ form_label(commentaireForm.contenu, null, {'label_attr': {'style': 'font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:5px;'}}) }}
                    {{ form_widget(commentaireForm.contenu, {'attr': {'style': 'width:100%;padding:10px 14px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;outline:none;resize:vertical;'}}) }}
                    {% for error in commentaireForm.contenu.vars.errors %}
                        <div style=\"font-size:12px;color:#dc2626;background:#fee2e2;border-radius:4px;padding:4px 8px;margin-top:3px;\">⚠ {{ error.message }}</div>
                    {% endfor %}
                </div>
                <div>
                    {{ form_label(commentaireForm.note, null, {'label_attr': {'style': 'font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:5px;'}}) }}
                    {{ form_widget(commentaireForm.note, {'attr': {'style': 'width:100%;padding:10px 14px;border:1.5px solid #e2e8f0;border-radius:8px;font-size:14px;'}}) }}
                </div>
                <button type=\"submit\" style=\"background:#22c55e;color:#fff;border:none;border-radius:10px;padding:12px 24px;font-size:14px;font-weight:700;cursor:pointer;align-self:flex-start;\">
                    💬 Publier le commentaire
                </button>
            {{ form_end(commentaireForm) }}
        </div>
    </div>
</div>
            </div>
 {# Google Maps embed — FREE, no API key needed #}
<div style=\"margin-bottom: 20px; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0;\">

    <iframe
        width=\"100%\"
        height=\"220\"
        style=\"border: 0; display: block;\"
        loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\"
        src=\"https://maps.google.com/maps?q={{ evenement.lieu|url_encode }}&output=embed\">
    </iframe>

    <div style=\"padding: 12px 14px; display: flex; align-items: center; gap: 10px; background: #fff;\">
        <div style=\"flex: 1;\">
            <div style=\"font-size: 11px; color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;\">LIEU</div>
            <div style=\"font-size: 13px; font-weight: 600; color: #0f172a;\">{{ evenement.lieu }}</div>
        </div>
        <a href=\"https://www.google.com/maps/dir/?api=1&destination={{ evenement.lieu|url_encode }}\"
           target=\"_blank\"
           rel=\"noopener\"
           style=\"display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #fff;
                  padding: 9px 14px; border-radius: 8px; font-size: 13px; font-weight: 700;
                  text-decoration: none; white-space: nowrap;\">
            📍 Itinéraire
        </a>
    </div>
</div>
            {# ── Symfony form — pointe vers reservation_new ── #}
            {{ form_start(form, {
    'method': 'POST',
    'attr': {'id': 'reserveForm', 'class': 'reserve-form', 'novalidate': 'novalidate'}
}) }}

    <div class=\"form-group\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom, {'attr': {'class': form.nom.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
        {% for error in form.nom.vars.errors %}
            <div class=\"form-error\">⚠ {{ error.message }}</div>
        {% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email, {'attr': {'class': form.email.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
        {% for error in form.email.vars.errors %}
            <div class=\"form-error\">⚠ {{ error.message }}</div>
        {% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.telephone) }}
        {{ form_widget(form.telephone, {'attr': {'class': form.telephone.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
        {% for error in form.telephone.vars.errors %}
            <div class=\"form-error\">⚠ {{ error.message }}</div>
        {% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.nombrePlaces) }}
        {{ form_widget(form.nombrePlaces, {'attr': {'class': form.nombrePlaces.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
        {% for error in form.nombrePlaces.vars.errors %}
            <div class=\"form-error\">⚠ {{ error.message }}</div>
        {% endfor %}
    </div>

                {{ form_rest(form) }}
                

                <button type=\"submit\" class=\"btn-submit\" id=\"reserveBtn\">
                    🎟 Réserver maintenant
                </button>

            {{ form_end(form) }}

            <div class=\"reserve-note\">🔒 Réservation sécurisée — Annulation gratuite</div>
        </div>
    </div>
    
</div>
    

</div>



<footer class=\"footer\">
    © 2026 <span>Bizcore</span> — Tous droits réservés
</footer>



{% endblock %}
", "events/show.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\events\\show.html.twig");
    }
}
