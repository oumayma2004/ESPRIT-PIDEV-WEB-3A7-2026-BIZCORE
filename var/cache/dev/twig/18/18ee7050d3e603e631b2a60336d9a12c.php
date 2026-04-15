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
class __TwigTemplate_7a65f0aedf502c2b7397a4e5bf1855c7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "DÉTAIL ÉVÉNEMENT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
    .tag-green { background: #dcfce7; color: #16a34a; }
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
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a> ›
    <span class=\"current\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 220, $this->source); })()), "title", [], "any", false, false, false, 220), "html", null, true);
        yield "</span>
</div>

<div style=\"max-width:1100px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "flashes", ["success"], "method", false, false, false, 224));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 225
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "flashes", ["error"], "method", false, false, false, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 228
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\" class=\"back-link\">← Retour aux événements</a>
</div>

<div class=\"page\">

    <!-- LEFT -->
    <div>
        <div class=\"detail-card\">
            ";
        // line 238
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 238, $this->source); })()), "image", [], "any", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 239
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 239, $this->source); })()), "image", [], "any", false, false, false, 239))), "html", null, true);
            yield "\" class=\"detail-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 239, $this->source); })()), "title", [], "any", false, false, false, 239), "html", null, true);
            yield "\">
            ";
        } else {
            // line 241
            yield "                <div class=\"detail-img-placeholder\">📅</div>
            ";
        }
        // line 243
        yield "
            <div class=\"detail-body\">
                <div class=\"detail-tags\">
                    <span class=\"tag tag-green\">✓ Disponible</span>
                    <span class=\"tag tag-blue\">📅 Événement</span>
                </div>

                <h1 class=\"detail-title\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 250, $this->source); })()), "title", [], "any", false, false, false, 250), "html", null, true);
        yield "</h1>

                <div class=\"detail-meta\">
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Prix</span>
                        <span class=\"meta-value green\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 255, $this->source); })()), "price", [], "any", false, false, false, 255), "html", null, true);
        yield " DT</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Capacité</span>
                        <span class=\"meta-value\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 259, $this->source); })()), "capacity", [], "any", false, false, false, 259), "html", null, true);
        yield " places</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Date</span>
                        <span class=\"meta-value\">";
        // line 263
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 263, $this->source); })()), "date", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 263, $this->source); })()), "date", [], "any", false, false, false, 263), "d/m/Y"), "html", null, true)) : ("À confirmer"));
        yield "</span>
                    </div>
                    <div class=\"meta-box\">
                        <span class=\"meta-label\">Heure</span>
                        <span class=\"meta-value\">";
        // line 267
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 267, $this->source); })()), "date", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 267, $this->source); })()), "date", [], "any", false, false, false, 267), "H:i"), "html", null, true)) : ("-"));
        yield "</span>
                    </div>
                </div>

                <div class=\"detail-desc-title\">À propos de cet événement</div>
                <div class=\"detail-desc\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 272, $this->source); })()), "description", [], "any", false, false, false, 272), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>

    <!-- RIGHT: inline Symfony form -->
    <div class=\"reserve-card\">
        <div class=\"reserve-header\">
            <div class=\"reserve-price\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 280, $this->source); })()), "price", [], "any", false, false, false, 280), "html", null, true);
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
        // line 290
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 290, $this->source); })()), "date", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 290, $this->source); })()), "date", [], "any", false, false, false, 290), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                    </div>
                </div>
                <div class=\"info-row\">
                    <span class=\"info-icon\">👥</span>
                    <div>
                        <div style=\"font-size:11px;color:#94a3b8;font-weight:600;\">PLACES DISPONIBLES</div>
                        <strong>";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 297, $this->source); })()), "capacity", [], "any", false, false, false, 297), "html", null, true);
        yield " places</strong>
                    </div>
                </div>
            </div>

            ";
        // line 303
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["id" => "reserveForm", "class" => "reserve-form", "novalidate" => "novalidate"]]);
        // line 306
        yield "

    <div class=\"form-group\">
        ";
        // line 309
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "nom", [], "any", false, false, false, 309), 'label');
        yield "
        ";
        // line 310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "nom", [], "any", false, false, false, 310), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "nom", [], "any", false, false, false, 310), "vars", [], "any", false, false, false, 310), "errors", [], "any", false, false, false, 310)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "nom", [], "any", false, false, false, 311), "vars", [], "any", false, false, false, 311), "errors", [], "any", false, false, false, 311));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 312
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 312), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "email", [], "any", false, false, false, 317), 'label');
        yield "
        ";
        // line 318
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "email", [], "any", false, false, false, 318), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "email", [], "any", false, false, false, 318), "vars", [], "any", false, false, false, 318), "errors", [], "any", false, false, false, 318)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "email", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "errors", [], "any", false, false, false, 319));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 320
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 320), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "telephone", [], "any", false, false, false, 325), 'label');
        yield "
        ";
        // line 326
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "telephone", [], "any", false, false, false, 326), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "telephone", [], "any", false, false, false, 326), "vars", [], "any", false, false, false, 326), "errors", [], "any", false, false, false, 326)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "telephone", [], "any", false, false, false, 327), "vars", [], "any", false, false, false, 327), "errors", [], "any", false, false, false, 327));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 328
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 328), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 333), 'label');
        yield "
        ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 334), "vars", [], "any", false, false, false, 334), "errors", [], "any", false, false, false, 334)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
        ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "errors", [], "any", false, false, false, 335));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 336
            yield "            <div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 336), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        yield "    </div>

    ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), 'rest');
        yield "

    <button type=\"submit\" class=\"btn-submit\">🎟 Réserver maintenant</button>

";
        // line 344
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), 'form_end');
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
        return array (  587 => 344,  580 => 340,  576 => 338,  567 => 336,  563 => 335,  559 => 334,  555 => 333,  550 => 330,  541 => 328,  537 => 327,  533 => 326,  529 => 325,  524 => 322,  515 => 320,  511 => 319,  507 => 318,  503 => 317,  498 => 314,  489 => 312,  485 => 311,  481 => 310,  477 => 309,  472 => 306,  469 => 303,  461 => 297,  451 => 290,  438 => 280,  427 => 272,  419 => 267,  412 => 263,  405 => 259,  398 => 255,  390 => 250,  381 => 243,  377 => 241,  369 => 239,  367 => 238,  355 => 230,  346 => 228,  341 => 227,  332 => 225,  328 => 224,  321 => 220,  317 => 219,  103 => 7,  93 => 6,  76 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
    .tag-green { background: #dcfce7; color: #16a34a; }
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
                    <span class=\"tag tag-green\">✓ Disponible</span>
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
                        <strong>{{ evenement.capacity }} places</strong>
                    </div>
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

    <button type=\"submit\" class=\"btn-submit\">🎟 Réserver maintenant</button>

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
", "events/show.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\events\\show.html.twig");
    }
}
