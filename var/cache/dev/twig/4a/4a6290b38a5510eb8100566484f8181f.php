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

/* evenement/show.html.twig */
class __TwigTemplate_ecc058c66df9ac9a47512303de3b0b2f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

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
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: 'DM Sans', sans-serif;
        background: #f0f4f8;
        display: flex;
        min-height: 100vh;
    }

    /* ===== SIDEBAR ===== */
    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }

    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; letter-spacing: 0.5px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }

    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }

    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    /* ===== MAIN ===== */
    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
    /* ===== TOPBAR ===== */
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; font-size: 14px; }
    .topbar-right { display: flex; align-items: center; gap: 10px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    /* ===== CONTENT ===== */
    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* ===== TWO-COLUMN LAYOUT ===== */
    .page-grid { display: grid; grid-template-columns: 1fr 360px; gap: 20px; align-items: start; }

    /* ===== DETAIL CARD ===== */
    .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }

    .detail-img { width: 100%; height: 280px; object-fit: cover; display: block; }
    .detail-img-placeholder { height: 280px; display: flex; align-items: center; justify-content: center; font-size: 64px; background: #f1f5f9; }

    .detail-body { padding: 24px; }

    .detail-tags { display: flex; gap: 8px; margin-bottom: 14px; }
    .tag { padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .tag-green { background: #dcfce7; color: #16a34a; }
    .tag-blue  { background: #dbeafe; color: #1d4ed8; }

    .detail-title { font-size: 22px; font-weight: 700; color: #1e293b; line-height: 1.3; margin-bottom: 16px; }

    .detail-meta { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 20px; padding: 16px; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; }
    .meta-box { display: flex; flex-direction: column; gap: 3px; }
    .meta-label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
    .meta-value { font-size: 13px; font-weight: 600; color: #1e293b; }
    .meta-value.green { color: #16a34a; font-size: 17px; font-weight: 700; }

    .detail-desc-title { font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
    .detail-desc { font-size: 13px; color: #475569; line-height: 1.8; }

    /* ===== RESERVE CARD ===== */
    .reserve-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); position: sticky; top: 80px; }

    .reserve-header { background: #1e293b; padding: 20px 22px; text-align: center; }
    .reserve-price { font-size: 32px; font-weight: 700; color: #22c55e; margin-bottom: 3px; }
    .reserve-price-label { font-size: 12px; color: #64748b; }

    .reserve-body { padding: 20px; }

    .reserve-info { display: flex; flex-direction: column; gap: 8px; margin-bottom: 18px; }
    .info-row { display: flex; align-items: center; gap: 10px; font-size: 12px; color: #475569; padding: 9px 12px; background: #f8fafc; border-radius: 8px; border: 1px solid #e2e8f0; }
    .info-row strong { color: #1e293b; }

    /* ===== FORM FIELDS — backend style ===== */
    .reserve-form { display: flex; flex-direction: column; gap: 10px; }
    .reserve-form .form-group { display: flex; flex-direction: column; gap: 5px; }

    .reserve-form label {
        font-size: 11px; font-weight: 700;
        color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;
    }

    .reserve-form input,
    .reserve-form select,
    .reserve-form textarea {
        width: 100%; padding: 9px 12px;
        border: 1px solid #e2e8f0; border-radius: 7px;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px; color: #1e293b;
        outline: none; transition: border-color 0.2s; background: #fff;
    }

    .reserve-form input:focus,
    .reserve-form select:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
    }

    .reserve-form ul { list-style: none; }
    .reserve-form ul li,
    .reserve-form .form-error {
        font-size: 11px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 3px 8px; margin-top: 3px; display: block;
    }

    .btn-submit {
        width: 100%; padding: 11px;
        background: #22c55e; color: #fff;
        border: none; border-radius: 7px;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px; font-weight: 700;
        cursor: pointer; transition: all 0.2s; margin-top: 4px;
    }
    .btn-submit:hover { background: #16a34a; }

    .reserve-note { text-align: center; font-size: 11px; color: #94a3b8; margin-top: 10px; }

    /* ===== FLASH ===== */
    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    /* ===== MODAL ===== */
    .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(15,23,42,0.6); z-index: 200; align-items: center; justify-content: center; }
    .modal-overlay.active { display: flex; }
    .modal { background: #fff; border-radius: 12px; padding: 32px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 20px 60px rgba(0,0,0,0.2); }
    .modal-icon { font-size: 44px; margin-bottom: 12px; }
    .modal h3 { font-size: 18px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
    .modal p  { font-size: 13px; color: #64748b; margin-bottom: 20px; line-height: 1.6; }
    .modal-btns { display: flex; gap: 10px; }
    .modal-btn { flex: 1; padding: 10px; border-radius: 7px; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; cursor: pointer; border: none; transition: all 0.15s; }
    .modal-cancel  { background: #f1f5f9; color: #475569; }
    .modal-cancel:hover  { background: #e2e8f0; }
    .modal-confirm { background: #22c55e; color: #fff; }
    .modal-confirm:hover { background: #16a34a; }

    @media (max-width: 900px) {
        .page-grid { grid-template-columns: 1fr; }
        .reserve-card { position: static; }
    }
</style>

<div style=\"display:flex; min-height:100vh; width:100vw;\">

    <!-- SIDEBAR -->
    

    <!-- MAIN -->
    <div class=\"main\">

        <!-- TOPBAR -->

        <!-- CONTENT -->
        <div class=\"content\">

            ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "flashes", ["success"], "method", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 187
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "flashes", ["error"], "method", false, false, false, 189));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 190
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "
            <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"back-link\">← Retour aux événements</a>

            <div class=\"page-grid\">

                <!-- LEFT: detail -->
                <div class=\"detail-card\">
                    ";
        // line 199
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 199, $this->source); })()), "image", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 200
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 200, $this->source); })()), "image", [], "any", false, false, false, 200))), "html", null, true);
            yield "\" class=\"detail-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 200, $this->source); })()), "title", [], "any", false, false, false, 200), "html", null, true);
            yield "\">
                    ";
        } else {
            // line 202
            yield "                        <div class=\"detail-img-placeholder\">📅</div>
                    ";
        }
        // line 204
        yield "
                    <div class=\"detail-body\">
                        <div class=\"detail-tags\">
                            <span class=\"tag tag-green\">✓ Disponible</span>
                            <span class=\"tag tag-blue\">📅 Événement</span>
                        </div>

                        <h1 class=\"detail-title\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 211, $this->source); })()), "title", [], "any", false, false, false, 211), "html", null, true);
        yield "</h1>

                        <div class=\"detail-meta\">
                            <div class=\"meta-box\">
                                <span class=\"meta-label\">Prix</span>
                                <span class=\"meta-value green\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 216, $this->source); })()), "price", [], "any", false, false, false, 216), "html", null, true);
        yield " DT</span>
                            </div>
                            <div class=\"meta-box\">
                                <span class=\"meta-label\">Capacité</span>
                                <span class=\"meta-value\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 220, $this->source); })()), "capacity", [], "any", false, false, false, 220), "html", null, true);
        yield " places</span>
                            </div>
                            <div class=\"meta-box\">
                                <span class=\"meta-label\">Date</span>
                                <span class=\"meta-value\">";
        // line 224
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 224, $this->source); })()), "date", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 224, $this->source); })()), "date", [], "any", false, false, false, 224), "d/m/Y"), "html", null, true)) : ("À confirmer"));
        yield "</span>
                            </div>
                            <div class=\"meta-box\">
                                <span class=\"meta-label\">Heure</span>
                                <span class=\"meta-value\">";
        // line 228
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 228, $this->source); })()), "date", [], "any", false, false, false, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 228, $this->source); })()), "date", [], "any", false, false, false, 228), "H:i"), "html", null, true)) : ("-"));
        yield "</span>
                            </div>
                        </div>

                        <div class=\"detail-desc-title\">À propos de cet événement</div>
                        <div class=\"detail-desc\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 233, $this->source); })()), "description", [], "any", false, false, false, 233), "html", null, true);
        yield "</div>
                        <div style=\"margin-top: 20px; border-radius: 10px; overflow: hidden; border: 1px solid #e2e8f0;\">
                            <iframe
                                width=\"100%\"
                                height=\"200\"
                                style=\"border: 0; display: block;\"
                                loading=\"lazy\"
                                referrerpolicy=\"no-referrer-when-downgrade\"
                                src=\"https://maps.google.com/maps?q=";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 241, $this->source); })()), "lieu", [], "any", false, false, false, 241)), "html", null, true);
        yield "&output=embed\">
                            </iframe>
                            <div style=\"padding: 12px 14px; display: flex; align-items: center; gap: 10px; background: #f8fafc; border-top: 1px solid #e2e8f0;\">
                                <div style=\"flex: 1;\">
                                    <div style=\"font-size: 10px; color: #94a3b8; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;\">LIEU</div>
                                    <div style=\"font-size: 13px; font-weight: 600; color: #0f172a;\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 246, $this->source); })()), "lieu", [], "any", false, false, false, 246), "html", null, true);
        yield "</div>
                                </div>
                                <a href=\"https://www.google.com/maps/dir/?api=1&destination=";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 248, $this->source); })()), "lieu", [], "any", false, false, false, 248)), "html", null, true);
        yield "\"
                                   target=\"_blank\" rel=\"noopener\"
                                   style=\"display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #fff;
                                          padding: 9px 14px; border-radius: 8px; font-size: 13px; font-weight: 700;
                                          text-decoration: none; white-space: nowrap;\">
                                    📍 Itinéraire
                                </a>
                            </div>
                        </div>
                    </div>
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
        return "evenement/show.html.twig";
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
        return array (  390 => 248,  385 => 246,  377 => 241,  366 => 233,  358 => 228,  351 => 224,  344 => 220,  337 => 216,  329 => 211,  320 => 204,  316 => 202,  308 => 200,  306 => 199,  297 => 193,  294 => 192,  285 => 190,  280 => 189,  271 => 187,  267 => 186,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ evenement.title }}{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        font-family: 'DM Sans', sans-serif;
        background: #f0f4f8;
        display: flex;
        min-height: 100vh;
    }

    /* ===== SIDEBAR ===== */
    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }

    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; letter-spacing: 0.5px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }

    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover { background: #242a38; color: #e2e8f0; }
    .nav-item.active { background: #242a38; color: #fff; }

    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .user-name { font-size: 13px; font-weight: 600; color: #f1f5f9; }
    .user-role { font-size: 11px; color: #64748b; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout  { background: #ef4444; color: #fff; }

    /* ===== MAIN ===== */
    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
    /* ===== TOPBAR ===== */
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 50; }
    .topbar-left { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #1e293b; }
    .topbar-left .home-icon { color: #22c55e; font-size: 18px; }
    .topbar-left .separator { color: #cbd5e1; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; font-size: 14px; }
    .topbar-right { display: flex; align-items: center; gap: 10px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; cursor: pointer; font-size: 15px; }

    /* ===== CONTENT ===== */
    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* ===== TWO-COLUMN LAYOUT ===== */
    .page-grid { display: grid; grid-template-columns: 1fr 360px; gap: 20px; align-items: start; }

    /* ===== DETAIL CARD ===== */
    .detail-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); }

    .detail-img { width: 100%; height: 280px; object-fit: cover; display: block; }
    .detail-img-placeholder { height: 280px; display: flex; align-items: center; justify-content: center; font-size: 64px; background: #f1f5f9; }

    .detail-body { padding: 24px; }

    .detail-tags { display: flex; gap: 8px; margin-bottom: 14px; }
    .tag { padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .tag-green { background: #dcfce7; color: #16a34a; }
    .tag-blue  { background: #dbeafe; color: #1d4ed8; }

    .detail-title { font-size: 22px; font-weight: 700; color: #1e293b; line-height: 1.3; margin-bottom: 16px; }

    .detail-meta { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 20px; padding: 16px; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; }
    .meta-box { display: flex; flex-direction: column; gap: 3px; }
    .meta-label { font-size: 10px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
    .meta-value { font-size: 13px; font-weight: 600; color: #1e293b; }
    .meta-value.green { color: #16a34a; font-size: 17px; font-weight: 700; }

    .detail-desc-title { font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
    .detail-desc { font-size: 13px; color: #475569; line-height: 1.8; }

    /* ===== RESERVE CARD ===== */
    .reserve-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.06); position: sticky; top: 80px; }

    .reserve-header { background: #1e293b; padding: 20px 22px; text-align: center; }
    .reserve-price { font-size: 32px; font-weight: 700; color: #22c55e; margin-bottom: 3px; }
    .reserve-price-label { font-size: 12px; color: #64748b; }

    .reserve-body { padding: 20px; }

    .reserve-info { display: flex; flex-direction: column; gap: 8px; margin-bottom: 18px; }
    .info-row { display: flex; align-items: center; gap: 10px; font-size: 12px; color: #475569; padding: 9px 12px; background: #f8fafc; border-radius: 8px; border: 1px solid #e2e8f0; }
    .info-row strong { color: #1e293b; }

    /* ===== FORM FIELDS — backend style ===== */
    .reserve-form { display: flex; flex-direction: column; gap: 10px; }
    .reserve-form .form-group { display: flex; flex-direction: column; gap: 5px; }

    .reserve-form label {
        font-size: 11px; font-weight: 700;
        color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;
    }

    .reserve-form input,
    .reserve-form select,
    .reserve-form textarea {
        width: 100%; padding: 9px 12px;
        border: 1px solid #e2e8f0; border-radius: 7px;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px; color: #1e293b;
        outline: none; transition: border-color 0.2s; background: #fff;
    }

    .reserve-form input:focus,
    .reserve-form select:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
    }

    .reserve-form ul { list-style: none; }
    .reserve-form ul li,
    .reserve-form .form-error {
        font-size: 11px; color: #dc2626;
        background: #fee2e2; border-radius: 4px;
        padding: 3px 8px; margin-top: 3px; display: block;
    }

    .btn-submit {
        width: 100%; padding: 11px;
        background: #22c55e; color: #fff;
        border: none; border-radius: 7px;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px; font-weight: 700;
        cursor: pointer; transition: all 0.2s; margin-top: 4px;
    }
    .btn-submit:hover { background: #16a34a; }

    .reserve-note { text-align: center; font-size: 11px; color: #94a3b8; margin-top: 10px; }

    /* ===== FLASH ===== */
    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    /* ===== MODAL ===== */
    .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(15,23,42,0.6); z-index: 200; align-items: center; justify-content: center; }
    .modal-overlay.active { display: flex; }
    .modal { background: #fff; border-radius: 12px; padding: 32px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 20px 60px rgba(0,0,0,0.2); }
    .modal-icon { font-size: 44px; margin-bottom: 12px; }
    .modal h3 { font-size: 18px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
    .modal p  { font-size: 13px; color: #64748b; margin-bottom: 20px; line-height: 1.6; }
    .modal-btns { display: flex; gap: 10px; }
    .modal-btn { flex: 1; padding: 10px; border-radius: 7px; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; cursor: pointer; border: none; transition: all 0.15s; }
    .modal-cancel  { background: #f1f5f9; color: #475569; }
    .modal-cancel:hover  { background: #e2e8f0; }
    .modal-confirm { background: #22c55e; color: #fff; }
    .modal-confirm:hover { background: #16a34a; }

    @media (max-width: 900px) {
        .page-grid { grid-template-columns: 1fr; }
        .reserve-card { position: static; }
    }
</style>

<div style=\"display:flex; min-height:100vh; width:100vw;\">

    <!-- SIDEBAR -->
    

    <!-- MAIN -->
    <div class=\"main\">

        <!-- TOPBAR -->

        <!-- CONTENT -->
        <div class=\"content\">

            {% for msg in app.flashes('success') %}
                <div class=\"flash flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash flash-error\">❌ {{ msg }}</div>
            {% endfor %}

            <a href=\"{{ path('evenement_index') }}\" class=\"back-link\">← Retour aux événements</a>

            <div class=\"page-grid\">

                <!-- LEFT: detail -->
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
                        <div style=\"margin-top: 20px; border-radius: 10px; overflow: hidden; border: 1px solid #e2e8f0;\">
                            <iframe
                                width=\"100%\"
                                height=\"200\"
                                style=\"border: 0; display: block;\"
                                loading=\"lazy\"
                                referrerpolicy=\"no-referrer-when-downgrade\"
                                src=\"https://maps.google.com/maps?q={{ evenement.lieu|url_encode }}&output=embed\">
                            </iframe>
                            <div style=\"padding: 12px 14px; display: flex; align-items: center; gap: 10px; background: #f8fafc; border-top: 1px solid #e2e8f0;\">
                                <div style=\"flex: 1;\">
                                    <div style=\"font-size: 10px; color: #94a3b8; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;\">LIEU</div>
                                    <div style=\"font-size: 13px; font-weight: 600; color: #0f172a;\">{{ evenement.lieu }}</div>
                                </div>
                                <a href=\"https://www.google.com/maps/dir/?api=1&destination={{ evenement.lieu|url_encode }}\"
                                   target=\"_blank\" rel=\"noopener\"
                                   style=\"display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #fff;
                                          padding: 9px 14px; border-radius: 8px; font-size: 13px; font-weight: 700;
                                          text-decoration: none; white-space: nowrap;\">
                                    📍 Itinéraire
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>



{% endblock %}
", "evenement/show.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\evenement\\show.html.twig");
    }
}
