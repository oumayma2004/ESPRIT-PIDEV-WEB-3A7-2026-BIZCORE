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

/* vendor/index.html.twig */
class __TwigTemplate_e71f9c48a135e0ebdc5cb193cf55319f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/index.html.twig"));

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

        yield "Gestion des Vendeurs — Bizcore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "VENDEURS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<style>
    .vendor-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
    }
    .vendor-header h1 {
        font-size: 22px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }
    .vendor-header .subtitle {
        font-size: 13px;
        color: #6b7280;
        margin-top: 2px;
    }

    /* Stats cards */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 16px;
        margin-bottom: 24px;
    }
    .stat-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 18px 20px;
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .stat-card .stat-icon {
        width: 42px; height: 42px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }
    .stat-icon.teal   { background: #d1fae5; color: #065f46; }
    .stat-icon.blue   { background: #dbeafe; color: #1e40af; }
    .stat-icon.orange { background: #ffedd5; color: #9a3412; }
    .stat-icon.red    { background: #fee2e2; color: #991b1b; }
    .stat-card .stat-value { font-size: 22px; font-weight: 700; color: #111827; line-height: 1; }
    .stat-card .stat-label { font-size: 11px; color: #6b7280; margin-top: 2px; text-transform: uppercase; letter-spacing: 0.5px; }

    /* Badge statut */
    .badge-actif     { background: #d1fae5; color: #065f46; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700; letter-spacing: 0.3px; }
    .badge-inactif   { background: #f3f4f6; color: #374151; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700; }
    .badge-suspendu  { background: #fee2e2; color: #991b1b; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700; }

    .product-count-pill {
        display: inline-flex; align-items: center; gap: 5px;
        background: #dbeafe; color: #1e40af;
        border-radius: 20px; padding: 3px 10px;
        font-size: 11px; font-weight: 700;
    }

    /* Action buttons */
    .btn-icon {
        width: 32px; height: 32px;
        border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        font-size: 13px;
        border: none; cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
    }
    .btn-icon.view   { background: #f3f4f6; color: #374151; }
    .btn-icon.edit   { background: #dbeafe; color: #1e40af; }
    .btn-icon.del    { background: #fee2e2; color: #dc2626; }
    .btn-icon.promo  { background: linear-gradient(135deg, #f59e0b, #ef4444); color: #fff; font-size: 14px; width: auto; padding: 0 10px; border-radius: 8px; gap: 4px; font-weight: 700; font-size: 11px; }
    .btn-icon.promo.active-promo { background: linear-gradient(135deg, #10b981, #059669); animation: pulse-promo 1.5s ease-in-out infinite; }
    .btn-icon:hover  { filter: brightness(0.9); transform: scale(1.05); }

    @keyframes pulse-promo {
        0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
        50%       { box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
    }

    .promo-status-cell { min-width: 120px; }
    .promo-badge-active {
        display: inline-flex; align-items: center; gap: 5px;
        background: linear-gradient(135deg, #fef3c7, #fde68a);
        color: #92400e; border: 1px solid #f59e0b;
        border-radius: 20px; padding: 3px 10px;
        font-size: 11px; font-weight: 700;
        animation: pulse-badge 1s ease-in-out infinite;
    }
    .promo-badge-none {
        display: inline-flex; align-items: center; gap: 4px;
        background: #f3f4f6; color: #9ca3af;
        border-radius: 20px; padding: 3px 10px;
        font-size: 11px;
    }
    @keyframes pulse-badge {
        0%, 100% { transform: scale(1); }
        50%       { transform: scale(1.03); }
    }

    .empty-state {
        text-align: center; padding: 60px 20px; color: #9ca3af;
    }
    .empty-state i { font-size: 48px; margin-bottom: 16px; color: #d1d5db; }
    .empty-state p { font-size: 15px; font-weight: 500; }

    /* Search bar */
    .search-bar {
        position: relative;
        max-width: 280px;
    }
    .search-bar input {
        width: 100%;
        padding: 8px 12px 8px 36px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 13px;
        color: #374151;
        background: #f9fafb;
        transition: border-color 0.2s;
    }
    .search-bar input:focus { outline: none; border-color: var(--accent); background: #fff; }
    .search-bar .search-icon { position: absolute; left: 11px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 12px; }

    /* ── Flash Promo Modal ── */
    .fp-overlay {
        display: none; position: fixed; inset: 0;
        background: rgba(0,0,0,.55); z-index: 9999;
        align-items: center; justify-content: center;
    }
    .fp-overlay.open { display: flex; }

    .fp-modal {
        background: #fff; border-radius: 20px;
        padding: 36px 40px; width: 440px; max-width: 95vw;
        box-shadow: 0 25px 60px rgba(0,0,0,.25);
        position: relative; animation: fp-in .25s ease;
    }
    @keyframes fp-in {
        from { transform: scale(.92) translateY(20px); opacity: 0; }
        to   { transform: scale(1) translateY(0);      opacity: 1; }
    }
    .fp-modal-close {
        position: absolute; top: 16px; right: 20px;
        background: none; border: none; font-size: 22px;
        color: #9ca3af; cursor: pointer; line-height: 1;
    }
    .fp-modal-close:hover { color: #374151; }

    .fp-title {
        font-size: 20px; font-weight: 800; color: #111827; margin: 0 0 4px;
        display: flex; align-items: center; gap: 8px;
    }
    .fp-subtitle { font-size: 13px; color: #6b7280; margin-bottom: 24px; }
    .fp-vendor-name { color: #f59e0b; font-weight: 700; }

    .fp-discount-grid {
        display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 20px;
    }
    .fp-disc-btn {
        border: 2px solid #e5e7eb; border-radius: 12px;
        padding: 14px 6px; text-align: center; cursor: pointer;
        font-size: 18px; font-weight: 800; color: #374151;
        transition: all .2s; background: #f9fafb;
    }
    .fp-disc-btn:hover { border-color: #f59e0b; background: #fef3c7; color: #92400e; transform: translateY(-2px); }
    .fp-disc-btn.selected { border-color: #ef4444; background: linear-gradient(135deg,#fff5f5,#fee2e2); color: #dc2626; box-shadow: 0 4px 12px rgba(239,68,68,.2); }
    .fp-disc-small { font-size: 10px; font-weight: 500; color: inherit; display: block; margin-top: 2px; opacity: .7; }

    .fp-custom-row {
        display: flex; align-items: center; gap: 10px; margin-bottom: 20px;
    }
    .fp-custom-row label { font-size: 13px; color: #374151; font-weight: 600; flex-shrink: 0; }
    .fp-custom-input {
        flex: 1; height: 40px; border: 2px solid #e5e7eb; border-radius: 8px;
        padding: 0 12px; font-size: 15px; font-weight: 700; color: #374151;
        outline: none; transition: border-color .2s;
    }
    .fp-custom-input:focus { border-color: #f59e0b; }

    .fp-timer-info {
        display: flex; align-items: center; gap: 8px;
        background: #fffbeb; border: 1px solid #fde68a; border-radius: 10px;
        padding: 10px 14px; margin-bottom: 20px; font-size: 13px; color: #92400e;
    }
    .fp-timer-info i { font-size: 16px; color: #f59e0b; }

    .fp-btn-activate {
        width: 100%; height: 46px;
        background: linear-gradient(135deg, #f59e0b, #ef4444);
        border: none; border-radius: 12px; cursor: pointer;
        font-size: 15px; font-weight: 800; color: #fff;
        letter-spacing: 0.3px; transition: all .2s;
        box-shadow: 0 4px 15px rgba(239,68,68,.3);
    }
    .fp-btn-activate:hover { filter: brightness(1.08); transform: translateY(-1px); box-shadow: 0 8px 20px rgba(239,68,68,.35); }
    .fp-btn-activate:disabled { background: #d1d5db; box-shadow: none; cursor: not-allowed; transform: none; }

    .fp-countdown-admin {
        margin-top: 14px; text-align: center;
        font-size: 13px; color: #6b7280;
    }
    .fp-countdown-admin strong { color: #ef4444; font-size: 15px; }
    .fp-btn-cancel {
        margin-top: 10px; width: 100%; height: 38px; border-radius: 8px;
        background: #fff; border: 1px solid #e5e7eb; color: #6b7280;
        font-size: 13px; cursor: pointer; transition: all .2s;
    }
    .fp-btn-cancel:hover { background: #fee2e2; border-color: #fca5a5; color: #dc2626; }

    /* ── Durée du bloc ── */
    .fp-duration-grid {
        display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; margin-bottom: 14px;
    }
    .fp-dur-btn {
        border: 2px solid #e5e7eb; border-radius: 10px;
        padding: 10px 4px; text-align: center; cursor: pointer;
        font-size: 13px; font-weight: 700; color: #374151;
        transition: all .2s; background: #f9fafb;
    }
    .fp-dur-btn:hover { border-color: #6366f1; background: #eef2ff; color: #4338ca; transform: translateY(-1px); }
    .fp-dur-btn.selected-dur { border-color: #6366f1; background: linear-gradient(135deg,#eef2ff,#e0e7ff); color: #4338ca; box-shadow: 0 4px 12px rgba(99,102,241,.2); }
    .fp-dur-small { font-size: 9px; display: block; margin-top: 1px; opacity: .65; font-weight: 500; }
    .fp-dur-section-label { font-size: 12px; font-weight: 700; color: #374151; margin-bottom: 8px; display: flex; align-items: center; gap: 6px; }
    .fp-dur-custom-row { display: flex; align-items: center; gap: 8px; margin-bottom: 16px; }
    .fp-dur-custom-input { flex:1; height:36px; border:2px solid #e5e7eb; border-radius:8px; padding:0 10px; font-size:14px; font-weight:700; outline:none; transition:border-color .2s; }
    .fp-dur-custom-input:focus { border-color: #6366f1; }

    /* ── Bouton IA ── */
    .fp-btn-ai {
        width: 100%; height: 42px; margin-bottom: 16px;
        background: linear-gradient(135deg, #7c3aed, #4f46e5);
        border: none; border-radius: 12px; cursor: pointer;
        font-size: 14px; font-weight: 800; color: #fff;
        display: flex; align-items: center; justify-content: center; gap: 8px;
        transition: all .2s; box-shadow: 0 4px 15px rgba(124,58,237,.3);
    }
    .fp-btn-ai:hover { filter: brightness(1.1); transform: translateY(-1px); box-shadow: 0 8px 20px rgba(124,58,237,.4); }
    .fp-btn-ai:disabled { background: #d1d5db; box-shadow: none; cursor: not-allowed; transform: none; }
    .fp-ai-result {
        background: linear-gradient(135deg, #f5f3ff, #ede9fe);
        border: 1px solid #7c3aed; border-radius: 10px;
        padding: 10px 14px; margin-bottom: 14px; font-size: 12px; color: #4c1d95;
        display: none;
    }
    .fp-ai-result strong { color: #7c3aed; }
</style>

";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "flashes", [], "any", false, false, false, 260));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 261
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 262
                yield "        ";
                if (($context["type"] == "success")) {
                    // line 263
                    yield "            <div class=\"alert alert-success alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
                <i class=\"fas fa-check-circle\"></i> ";
                    // line 264
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
                } elseif ((                // line 267
$context["type"] == "error")) {
                    // line 268
                    yield "            <div class=\"alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
                <i class=\"fas fa-exclamation-circle\"></i> ";
                    // line 269
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
                }
                // line 273
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        yield "
<div class=\"vendor-header\">
    <div>
        <h1><i class=\"fas fa-store me-2\" style=\"color:var(--accent)\"></i>Gestion des Vendeurs</h1>
        <div class=\"subtitle\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 279, $this->source); })())), "html", null, true);
        yield " vendeur";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 279, $this->source); })())) != 1)) ? ("s") : (""));
        yield " enregistré";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 279, $this->source); })())) != 1)) ? ("s") : (""));
        yield "</div>
    </div>
    <a href=\"";
        // line 281
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_new");
        yield "\" class=\"btn btn-success\" id=\"btn-add-vendor\">
        <i class=\"fas fa-plus me-2\"></i>Nouveau vendeur
    </a>
</div>

";
        // line 287
        $context["totalActifs"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 287, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 287, $this->source); })()), 0, [], "array", false, false, false, 287), "statut", [], "any", false, false, false, 287) == "actif"); }));
        // line 288
        $context["totalInactifs"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 288, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 288, $this->source); })()), 0, [], "array", false, false, false, 288), "statut", [], "any", false, false, false, 288) == "inactif"); }));
        // line 289
        $context["totalSuspendus"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 289, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 289, $this->source); })()), 0, [], "array", false, false, false, 289), "statut", [], "any", false, false, false, 289) == "suspendu"); }));
        // line 290
        yield "
<div class=\"stats-row\">
    <div class=\"stat-card\">
        <div class=\"stat-icon teal\"><i class=\"fas fa-store\"></i></div>
        <div>
            <div class=\"stat-value\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 295, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Total vendeurs</div>
        </div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-icon blue\"><i class=\"fas fa-check-circle\"></i></div>
        <div>
            <div class=\"stat-value\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalActifs"]) || array_key_exists("totalActifs", $context) ? $context["totalActifs"] : (function () { throw new RuntimeError('Variable "totalActifs" does not exist.', 302, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Actifs</div>
        </div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-icon orange\"><i class=\"fas fa-pause-circle\"></i></div>
        <div>
            <div class=\"stat-value\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalInactifs"]) || array_key_exists("totalInactifs", $context) ? $context["totalInactifs"] : (function () { throw new RuntimeError('Variable "totalInactifs" does not exist.', 309, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Inactifs</div>
        </div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-icon red\"><i class=\"fas fa-ban\"></i></div>
        <div>
            <div class=\"stat-value\">";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuspendus"]) || array_key_exists("totalSuspendus", $context) ? $context["totalSuspendus"] : (function () { throw new RuntimeError('Variable "totalSuspendus" does not exist.', 316, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Suspendus</div>
        </div>
    </div>
</div>

";
        // line 323
        yield "<div class=\"card-panel\">
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size:15px;font-weight:700;color:#374151;margin:0;\">
            <i class=\"fas fa-list me-2\" style=\"color:var(--accent)\"></i>Liste des vendeurs
        </h2>
        <div class=\"search-bar\">
            <i class=\"fas fa-search search-icon\"></i>
            <input type=\"text\" id=\"vendorSearch\" placeholder=\"Rechercher un vendeur…\">
        </div>
    </div>

    ";
        // line 334
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 334, $this->source); })()))) {
            // line 335
            yield "        <div class=\"empty-state\">
            <i class=\"fas fa-store-slash\"></i>
            <p>Aucun vendeur enregistré pour l'instant.</p>
            <a href=\"";
            // line 338
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_new");
            yield "\" class=\"btn btn-success mt-3\">
                <i class=\"fas fa-plus me-2\"></i>Ajouter le premier vendeur
            </a>
        </div>
    ";
        } else {
            // line 343
            yield "        <div class=\"table-responsive\">
            <table class=\"data-table\" id=\"vendorTable\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Statut</th>
                        <th style=\"text-align:center\">Produits</th>
                        <th style=\"text-align:center\">Promo Flash</th>
                        <th style=\"text-align:center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 358
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 358, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 359
                yield "                        ";
                $context["vendor"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], 0, [], "array", false, false, false, 359);
                // line 360
                yield "                        ";
                $context["count"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "productCount", [], "array", false, false, false, 360);
                // line 361
                yield "                        <tr class=\"vendor-row\">
                            <td style=\"color:#9ca3af;font-size:12px;\">";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 362, $this->source); })()), "id", [], "any", false, false, false, 362), "html", null, true);
                yield "</td>
                            <td>
                                <div style=\"font-weight:600;color:#111827;\">
                                    <i class=\"fas fa-user-circle me-2\" style=\"color:var(--accent)\"></i>
                                    ";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 366, $this->source); })()), "nom", [], "any", false, false, false, 366), "html", null, true);
                yield "
                                </div>
                            </td>
                            <td style=\"color:#6b7280;\">
                                <a href=\"mailto:";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 370, $this->source); })()), "email", [], "any", false, false, false, 370), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 370, $this->source); })()), "email", [], "any", false, false, false, 370), "html", null, true);
                yield "</a>
                            </td>
                            <td style=\"color:#6b7280;\">
                                ";
                // line 373
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["vendor"] ?? null), "telephone", [], "any", true, true, false, 373) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 373, $this->source); })()), "telephone", [], "any", false, false, false, 373)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 373, $this->source); })()), "telephone", [], "any", false, false, false, 373), "html", null, true)) : ("—"));
                yield "
                            </td>
                            <td>
                                <span class=\"badge-";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 376, $this->source); })()), "statut", [], "any", false, false, false, 376), "html", null, true);
                yield "\">
                                    ";
                // line 377
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 377, $this->source); })()), "statut", [], "any", false, false, false, 377) == "actif")) {
                    // line 378
                    yield "                                        <i class=\"fas fa-circle\" style=\"font-size:7px;\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 379
(isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 379, $this->source); })()), "statut", [], "any", false, false, false, 379) == "suspendu")) {
                    // line 380
                    yield "                                        <i class=\"fas fa-ban\" style=\"font-size:9px;\"></i>
                                    ";
                } else {
                    // line 382
                    yield "                                        <i class=\"fas fa-pause\" style=\"font-size:9px;\"></i>
                                    ";
                }
                // line 384
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 384, $this->source); })()), "statut", [], "any", false, false, false, 384)), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td style=\"text-align:center;\">
                                <span class=\"product-count-pill\">
                                    <i class=\"fas fa-box\"></i> ";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 389, $this->source); })()), "html", null, true);
                yield "
                                </span>
                            </td>

                            ";
                // line 394
                yield "                            <td style=\"text-align:center;\" class=\"promo-status-cell\">
                                <div id=\"promo-cell-";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 395, $this->source); })()), "id", [], "any", false, false, false, 395), "html", null, true);
                yield "\">
                                    <span class=\"promo-badge-none\" id=\"promo-badge-";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 396, $this->source); })()), "id", [], "any", false, false, false, 396), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-tag\" style=\"font-size:9px;\"></i> Aucune
                                    </span>
                                </div>
                                <button class=\"btn-icon promo mt-1\" id=\"promo-btn-";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 400, $this->source); })()), "id", [], "any", false, false, false, 400), "html", null, true);
                yield "\"
                                        onclick=\"openPromoModal(";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 401, $this->source); })()), "id", [], "any", false, false, false, 401), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 401, $this->source); })()), "nom", [], "any", false, false, false, 401), "js"), "html", null, true);
                yield "')\"
                                        title=\"Déclencher une promotion flash\">
                                    ⚡ Flash
                                </button>
                            </td>

                            <td style=\"text-align:center;\">
                                <div class=\"d-flex gap-1 justify-content-center\">
                                    <a href=\"";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 409, $this->source); })()), "id", [], "any", false, false, false, 409)]), "html", null, true);
                yield "\"
                                       class=\"btn-icon view\" title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
                // line 413
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 413, $this->source); })()), "id", [], "any", false, false, false, 413)]), "html", null, true);
                yield "\"
                                       class=\"btn-icon edit\" title=\"Modifier\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                    <a href=\"";
                // line 417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_confirm_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 417, $this->source); })()), "id", [], "any", false, false, false, 417)]), "html", null, true);
                yield "\"
                                       class=\"btn-icon del\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        // line 429
        yield "</div>

";
        // line 434
        yield "<div class=\"fp-overlay\" id=\"fp-overlay\">
    <div class=\"fp-modal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"fp-modal-title\">
        <button class=\"fp-modal-close\" onclick=\"closePromoModal()\" aria-label=\"Fermer\">×</button>

        <div class=\"fp-title\">
            <span>⚡</span>
            <span id=\"fp-modal-title\">Promotion Flash</span>
        </div>
        <p class=\"fp-subtitle\">
            Vendeur : <span class=\"fp-vendor-name\" id=\"fp-modal-vendor-name\">—</span><br>
            Tous les produits seront remisés pendant la durée choisie.
        </p>

        ";
        // line 448
        yield "        <button class=\"fp-btn-ai\" id=\"fp-btn-ai\" onclick=\"aiSuggestPromo()\">
            🤖 Suggestion automatique par IA
        </button>
        <div class=\"fp-ai-result\" id=\"fp-ai-result\"></div>

        ";
        // line 454
        yield "        <div class=\"fp-discount-grid\">
            <div class=\"fp-disc-btn\" data-discount=\"10\" onclick=\"selectDiscount(10, this)\">
                -10%
                <span class=\"fp-disc-small\">Légère</span>
            </div>
            <div class=\"fp-disc-btn\" data-discount=\"20\" onclick=\"selectDiscount(20, this)\">
                -20%
                <span class=\"fp-disc-small\">Modérée</span>
            </div>
            <div class=\"fp-disc-btn\" data-discount=\"40\" onclick=\"selectDiscount(40, this)\">
                -40%
                <span class=\"fp-disc-small\">Forte</span>
            </div>
            <div class=\"fp-disc-btn\" data-discount=\"60\" onclick=\"selectDiscount(60, this)\">
                -60%
                <span class=\"fp-disc-small\">Massive</span>
            </div>
        </div>

        ";
        // line 474
        yield "        <div class=\"fp-custom-row\">
            <label for=\"fp-custom-discount\">Autre :</label>
            <input type=\"number\" id=\"fp-custom-discount\" class=\"fp-custom-input\"
                   min=\"5\" max=\"90\" placeholder=\"ex: 35\"
                   oninput=\"onCustomDiscountInput(this.value)\">
            <span style=\"font-size:15px;font-weight:700;color:#374151;\">%</span>
        </div>

        <div class=\"fp-timer-info\">
            <i class=\"fas fa-clock\"></i>
            La promotion expire automatiquement <strong>côté serveur</strong> — indépendamment du navigateur.
        </div>

        ";
        // line 488
        yield "        <div class=\"fp-dur-section-label\">
            <i class=\"fas fa-hourglass-half\" style=\"color:#6366f1;\"></i> Durée de la promotion
        </div>
        <div class=\"fp-duration-grid\">
            <div class=\"fp-dur-btn selected-dur\" data-dur=\"60\"   onclick=\"selectDuration(60, this)\">1 min<span class=\"fp-dur-small\">rapide</span></div>
            <div class=\"fp-dur-btn\" data-dur=\"180\"  onclick=\"selectDuration(180, this)\">3 min<span class=\"fp-dur-small\">courte</span></div>
            <div class=\"fp-dur-btn\" data-dur=\"300\"  onclick=\"selectDuration(300, this)\">5 min<span class=\"fp-dur-small\">standard</span></div>
            <div class=\"fp-dur-btn\" data-dur=\"600\"  onclick=\"selectDuration(600, this)\">10 min<span class=\"fp-dur-small\">longue</span></div>
        </div>
        <div class=\"fp-dur-custom-row\">
            <label style=\"font-size:12px;font-weight:600;color:#374151;flex-shrink:0;\">Autre :</label>
            <input type=\"number\" id=\"fp-custom-dur\" class=\"fp-dur-custom-input\"
                   min=\"1\" max=\"60\" placeholder=\"ex: 7\"
                   oninput=\"onCustomDurInput(this.value)\">
            <span style=\"font-size:12px;font-weight:600;color:#374151;\">min</span>
        </div>

        <button class=\"fp-btn-activate\" id=\"fp-btn-activate\" onclick=\"activatePromo()\" disabled>
            ⚡ Activer la promotion flash
        </button>

        ";
        // line 510
        yield "        <div id=\"fp-active-zone\" style=\"display:none;\">
            <div class=\"fp-countdown-admin\">
                Promotion en cours · Expire dans <strong id=\"fp-admin-countdown\">—</strong>
            </div>
            <button class=\"fp-btn-cancel\" onclick=\"cancelPromo()\">
                <i class=\"fas fa-times-circle me-1\"></i> Annuler la promotion
            </button>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 523
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 524
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// ═══════════════════════════════════════════════════════════════════════
//  RECHERCHE CÔTÉ CLIENT
// ═══════════════════════════════════════════════════════════════════════
document.getElementById('vendorSearch')?.addEventListener('input', function () {
    const q = this.value.toLowerCase();
    document.querySelectorAll('#vendorTable .vendor-row').forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(q) ? '' : 'none';
    });
});

// ═══════════════════════════════════════════════════════════════════════
//  FLASH PROMO — ÉTAT GLOBAL
// ═══════════════════════════════════════════════════════════════════════
let currentVendorId   = null;
let selectedDiscount  = null;
let selectedDuration  = 60;          // défaut : 60 s
let adminCountdownInt = null;
let statusPollInt     = null;

// ── Polling en arrière-plan pour mettre à jour les badges du tableau ──
function pollAllStatuses() {
    const rows = document.querySelectorAll('[id^=\"promo-badge-\"]');
    rows.forEach(el => {
        const vid = el.id.replace('promo-badge-', '');
        fetchStatus(parseInt(vid));
    });
}

async function fetchStatus(vendorId) {
    try {
        const r    = await fetch(`/admin/vendors/\${vendorId}/flash-promo/status`);
        const data = await r.json();
        updateBadge(vendorId, data);
    } catch (e) { /* silencieux */ }
}

function updateBadge(vendorId, data) {
    const badge = document.getElementById('promo-badge-' + vendorId);
    const btn   = document.getElementById('promo-btn-'   + vendorId);
    if (!badge) return;

    if (data.active && data.remainingSeconds > 0) {
        const secs = Math.max(0, data.remainingSeconds);
        badge.className = 'promo-badge-active';
        badge.innerHTML = `⚡ -\${data.discountPercent}% · \${secs}s`;
        if (btn) btn.classList.add('active-promo');
    } else {
        badge.className = 'promo-badge-none';
        badge.innerHTML = '<i class=\"fas fa-tag\" style=\"font-size:9px;\"></i> Aucune';
        if (btn) btn.classList.remove('active-promo');
    }
}

// Mise à jour des badges depuis la dernière promo connue (décrémentation locale)
function tickBadges() {
    document.querySelectorAll('.promo-badge-active').forEach(badge => {
        const match = badge.textContent.match(/·\\s*(\\d+)s/);
        if (match) {
            let secs = parseInt(match[1]) - 1;
            if (secs <= 0) {
                badge.className = 'promo-badge-none';
                badge.innerHTML = '<i class=\"fas fa-tag\" style=\"font-size:9px;\"></i> Aucune';
                const vidMatch = badge.id.match(/promo-badge-(\\d+)/);
                if (vidMatch) {
                    const btn = document.getElementById('promo-btn-' + vidMatch[1]);
                    if (btn) btn.classList.remove('active-promo');
                }
            } else {
                badge.textContent = badge.textContent.replace(/·\\s*\\d+s/, `· \${secs}s`);
            }
        }
    });
}

// Démarrage
pollAllStatuses();
setInterval(tickBadges,      1000);   // décrémentation locale chaque seconde
setInterval(pollAllStatuses,  8000);  // synchronisation serveur toutes les 8 s

// ═══════════════════════════════════════════════════════════════════════
//  MODAL
// ═══════════════════════════════════════════════════════════════════════
function openPromoModal(vendorId, vendorName) {
    currentVendorId  = vendorId;
    selectedDiscount = null;
    selectedDuration = 60;
    document.getElementById('fp-modal-vendor-name').textContent = vendorName;
    document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
    document.getElementById('fp-custom-discount').value = '';
    // Reset durée
    document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
    const firstDur = document.querySelector('.fp-dur-btn[data-dur=\"60\"]');
    if (firstDur) firstDur.classList.add('selected-dur');
    document.getElementById('fp-custom-dur').value = '';
    document.getElementById('fp-btn-activate').disabled = true;
    document.getElementById('fp-btn-activate').style.display = '';
    document.getElementById('fp-active-zone').style.display = 'none';
    clearInterval(adminCountdownInt);
    document.querySelectorAll('.fp-disc-btn, .fp-custom-input, .fp-dur-btn, .fp-dur-custom-input').forEach(el => el.style.pointerEvents = '');

    // Charger le statut actuel
    fetchStatus(vendorId).then(() => {
        fetch(`/admin/vendors/\${vendorId}/flash-promo/status`)
            .then(r => r.json())
            .then(data => {
                if (data.active && data.remainingSeconds > 0) {
                    showActiveZone(data.remainingSeconds);
                }
            });
    });

    document.getElementById('fp-overlay').classList.add('open');
}

function closePromoModal() {
    document.getElementById('fp-overlay').classList.remove('open');
    clearInterval(adminCountdownInt);
    currentVendorId = null;
}

// Fermeture en cliquant en dehors
document.getElementById('fp-overlay').addEventListener('click', function(e) {
    if (e.target === this) closePromoModal();
});

// ── Suggestion IA ──
async function aiSuggestPromo() {
    if (!currentVendorId) return;
    const btn = document.getElementById('fp-btn-ai');
    const res = document.getElementById('fp-ai-result');

    btn.disabled = true;
    btn.innerHTML = '⏳ L\\'IA analyse les produits...';
    res.style.display = 'none';

    try {
        const r    = await fetch(`/admin/vendors/\${currentVendorId}/flash-promo/ai-suggest`, { method: 'POST' });
        const data = await r.json();

        if (data.success) {
            // Auto-remplir le formulaire avec les suggestions IA
            const disc = data.discount;
            const dur  = data.duration_seconds;

            // Sélectionner la remise
            document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
            const discBtn = document.querySelector(`.fp-disc-btn[data-discount=\"\${disc}\"]`);
            if (discBtn) {
                discBtn.classList.add('selected');
            } else {
                document.getElementById('fp-custom-discount').value = disc;
            }
            selectedDiscount = disc;

            // Sélectionner la durée
            document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
            const durBtn = document.querySelector(`.fp-dur-btn[data-dur=\"\${dur}\"]`);
            if (durBtn) {
                durBtn.classList.add('selected-dur');
                document.getElementById('fp-custom-dur').value = '';
            } else {
                document.getElementById('fp-custom-dur').value = Math.round(dur / 60);
            }
            selectedDuration = dur;

            // Afficher la raison IA
            res.style.display = 'block';
            res.innerHTML = `🤖 <strong>IA recommande :</strong> -\${disc}% pendant \${data.durationLabel}<br><em>\${data.reason}</em>`;

            // Activer le bouton principale
            document.getElementById('fp-btn-activate').disabled = false;

            // Mettre à jour le badge + countdown (promo déjà activée côté serveur)
            showActiveZone(data.remainingSeconds);
            updateBadge(currentVendorId, {
                active: true,
                discountPercent: disc,
                remainingSeconds: data.remainingSeconds
            });

        } else {
            res.style.display = 'block';
            res.style.background = '#fee2e2';
            res.style.borderColor = '#ef4444';
            res.style.color = '#991b1b';
            res.textContent = '❌ ' + (data.message || 'Erreur IA.');
        }
    } catch (e) {
        res.style.display = 'block';
        res.textContent = '❌ Erreur réseau.';
    }

    btn.disabled = false;
    btn.innerHTML = '🤖 Suggestion automatique par IA';
}

// Sélection d'un preset de remise
function selectDiscount(pct, el) {
    document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
    el.classList.add('selected');
    document.getElementById('fp-custom-discount').value = '';
    selectedDiscount = pct;
    document.getElementById('fp-btn-activate').disabled = false;
}

// Remise personnalisée
function onCustomDiscountInput(val) {
    document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
    const v = parseInt(val);
    if (v >= 5 && v <= 90) {
        selectedDiscount = v;
        document.getElementById('fp-btn-activate').disabled = false;
    } else {
        selectedDiscount = null;
        document.getElementById('fp-btn-activate').disabled = true;
    }
}

// Sélection de la durée (preset)
function selectDuration(secs, el) {
    document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
    el.classList.add('selected-dur');
    document.getElementById('fp-custom-dur').value = '';
    selectedDuration = secs;
}

// Durée personnalisée
function onCustomDurInput(val) {
    document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
    const mins = parseInt(val);
    if (mins >= 1 && mins <= 60) {
        selectedDuration = mins * 60;
    } else {
        selectedDuration = 60; // fallback
    }
}

// ── Activation ──
async function activatePromo() {
    if (!currentVendorId || !selectedDiscount) return;

    const btn = document.getElementById('fp-btn-activate');
    btn.disabled = true;
    btn.textContent = '⏳ Activation…';

    try {
        const r    = await fetch(`/admin/vendors/\${currentVendorId}/flash-promo`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ discount: selectedDiscount, duration_seconds: selectedDuration })
        });
        const data = await r.json();

        if (data.success) {
            showActiveZone(data.remainingSeconds || selectedDuration);
            updateBadge(currentVendorId, {
                active: true,
                discountPercent: selectedDiscount,
                remainingSeconds: data.remainingSeconds || selectedDuration
            });
        } else {
            alert('❌ ' + (data.message || 'Erreur inattendue'));
            btn.disabled = false;
            btn.textContent = '⚡ Activer la promotion flash';
        }
    } catch (e) {
        alert('❌ Erreur réseau.');
        btn.disabled = false;
        btn.textContent = '⚡ Activer la promotion flash';
    }
}

function showActiveZone(seconds) {
    document.getElementById('fp-btn-activate').style.display = 'none';
    document.getElementById('fp-active-zone').style.display  = 'block';
    document.querySelectorAll('.fp-disc-btn, .fp-custom-input, .fp-dur-btn, .fp-dur-custom-input').forEach(el => el.style.pointerEvents = 'none');

    let rem = seconds;
    const cd = document.getElementById('fp-admin-countdown');
    // Format affichage : mm:ss si > 60s
    function fmtTime(s) {
        if (s >= 60) {
            const m = Math.floor(s / 60), sec = s % 60;
            return sec > 0 ? `\${m} min \${sec} s` : `\${m} min`;
        }
        return s + ' s';
    }
    cd.textContent = fmtTime(rem);
    clearInterval(adminCountdownInt);
    adminCountdownInt = setInterval(() => {
        rem--;
        if (rem <= 0) {
            clearInterval(adminCountdownInt);
            closePromoModal();
            updateBadge(currentVendorId, { active: false });
        } else {
            cd.textContent = fmtTime(rem);
        }
    }, 1000);
}

// ── Annulation ──
async function cancelPromo() {
    if (!currentVendorId) return;
    try {
        await fetch(`/admin/vendors/\${currentVendorId}/flash-promo/cancel`, { method: 'POST' });
        clearInterval(adminCountdownInt);
        updateBadge(currentVendorId, { active: false });
        closePromoModal();
    } catch (e) {
        alert('❌ Erreur réseau.');
    }
}
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
        return "vendor/index.html.twig";
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
        return array (  775 => 524,  765 => 523,  746 => 510,  723 => 488,  708 => 474,  687 => 454,  680 => 448,  665 => 434,  661 => 429,  655 => 425,  641 => 417,  634 => 413,  627 => 409,  614 => 401,  610 => 400,  603 => 396,  599 => 395,  596 => 394,  589 => 389,  580 => 384,  576 => 382,  572 => 380,  570 => 379,  567 => 378,  565 => 377,  561 => 376,  555 => 373,  547 => 370,  540 => 366,  533 => 362,  530 => 361,  527 => 360,  524 => 359,  520 => 358,  503 => 343,  495 => 338,  490 => 335,  488 => 334,  475 => 323,  466 => 316,  456 => 309,  446 => 302,  436 => 295,  429 => 290,  427 => 289,  425 => 288,  423 => 287,  415 => 281,  406 => 279,  400 => 275,  390 => 273,  383 => 269,  380 => 268,  378 => 267,  372 => 264,  369 => 263,  366 => 262,  361 => 261,  357 => 260,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Vendeurs — Bizcore{% endblock %}

{% block page_title %}VENDEURS{% endblock %}

{% block body %}
<style>
    .vendor-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 24px;
    }
    .vendor-header h1 {
        font-size: 22px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }
    .vendor-header .subtitle {
        font-size: 13px;
        color: #6b7280;
        margin-top: 2px;
    }

    /* Stats cards */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 16px;
        margin-bottom: 24px;
    }
    .stat-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 18px 20px;
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .stat-card .stat-icon {
        width: 42px; height: 42px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }
    .stat-icon.teal   { background: #d1fae5; color: #065f46; }
    .stat-icon.blue   { background: #dbeafe; color: #1e40af; }
    .stat-icon.orange { background: #ffedd5; color: #9a3412; }
    .stat-icon.red    { background: #fee2e2; color: #991b1b; }
    .stat-card .stat-value { font-size: 22px; font-weight: 700; color: #111827; line-height: 1; }
    .stat-card .stat-label { font-size: 11px; color: #6b7280; margin-top: 2px; text-transform: uppercase; letter-spacing: 0.5px; }

    /* Badge statut */
    .badge-actif     { background: #d1fae5; color: #065f46; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700; letter-spacing: 0.3px; }
    .badge-inactif   { background: #f3f4f6; color: #374151; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700; }
    .badge-suspendu  { background: #fee2e2; color: #991b1b; border-radius: 20px; padding: 4px 12px; font-size: 11px; font-weight: 700; }

    .product-count-pill {
        display: inline-flex; align-items: center; gap: 5px;
        background: #dbeafe; color: #1e40af;
        border-radius: 20px; padding: 3px 10px;
        font-size: 11px; font-weight: 700;
    }

    /* Action buttons */
    .btn-icon {
        width: 32px; height: 32px;
        border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        font-size: 13px;
        border: none; cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
    }
    .btn-icon.view   { background: #f3f4f6; color: #374151; }
    .btn-icon.edit   { background: #dbeafe; color: #1e40af; }
    .btn-icon.del    { background: #fee2e2; color: #dc2626; }
    .btn-icon.promo  { background: linear-gradient(135deg, #f59e0b, #ef4444); color: #fff; font-size: 14px; width: auto; padding: 0 10px; border-radius: 8px; gap: 4px; font-weight: 700; font-size: 11px; }
    .btn-icon.promo.active-promo { background: linear-gradient(135deg, #10b981, #059669); animation: pulse-promo 1.5s ease-in-out infinite; }
    .btn-icon:hover  { filter: brightness(0.9); transform: scale(1.05); }

    @keyframes pulse-promo {
        0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
        50%       { box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
    }

    .promo-status-cell { min-width: 120px; }
    .promo-badge-active {
        display: inline-flex; align-items: center; gap: 5px;
        background: linear-gradient(135deg, #fef3c7, #fde68a);
        color: #92400e; border: 1px solid #f59e0b;
        border-radius: 20px; padding: 3px 10px;
        font-size: 11px; font-weight: 700;
        animation: pulse-badge 1s ease-in-out infinite;
    }
    .promo-badge-none {
        display: inline-flex; align-items: center; gap: 4px;
        background: #f3f4f6; color: #9ca3af;
        border-radius: 20px; padding: 3px 10px;
        font-size: 11px;
    }
    @keyframes pulse-badge {
        0%, 100% { transform: scale(1); }
        50%       { transform: scale(1.03); }
    }

    .empty-state {
        text-align: center; padding: 60px 20px; color: #9ca3af;
    }
    .empty-state i { font-size: 48px; margin-bottom: 16px; color: #d1d5db; }
    .empty-state p { font-size: 15px; font-weight: 500; }

    /* Search bar */
    .search-bar {
        position: relative;
        max-width: 280px;
    }
    .search-bar input {
        width: 100%;
        padding: 8px 12px 8px 36px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 13px;
        color: #374151;
        background: #f9fafb;
        transition: border-color 0.2s;
    }
    .search-bar input:focus { outline: none; border-color: var(--accent); background: #fff; }
    .search-bar .search-icon { position: absolute; left: 11px; top: 50%; transform: translateY(-50%); color: #9ca3af; font-size: 12px; }

    /* ── Flash Promo Modal ── */
    .fp-overlay {
        display: none; position: fixed; inset: 0;
        background: rgba(0,0,0,.55); z-index: 9999;
        align-items: center; justify-content: center;
    }
    .fp-overlay.open { display: flex; }

    .fp-modal {
        background: #fff; border-radius: 20px;
        padding: 36px 40px; width: 440px; max-width: 95vw;
        box-shadow: 0 25px 60px rgba(0,0,0,.25);
        position: relative; animation: fp-in .25s ease;
    }
    @keyframes fp-in {
        from { transform: scale(.92) translateY(20px); opacity: 0; }
        to   { transform: scale(1) translateY(0);      opacity: 1; }
    }
    .fp-modal-close {
        position: absolute; top: 16px; right: 20px;
        background: none; border: none; font-size: 22px;
        color: #9ca3af; cursor: pointer; line-height: 1;
    }
    .fp-modal-close:hover { color: #374151; }

    .fp-title {
        font-size: 20px; font-weight: 800; color: #111827; margin: 0 0 4px;
        display: flex; align-items: center; gap: 8px;
    }
    .fp-subtitle { font-size: 13px; color: #6b7280; margin-bottom: 24px; }
    .fp-vendor-name { color: #f59e0b; font-weight: 700; }

    .fp-discount-grid {
        display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 20px;
    }
    .fp-disc-btn {
        border: 2px solid #e5e7eb; border-radius: 12px;
        padding: 14px 6px; text-align: center; cursor: pointer;
        font-size: 18px; font-weight: 800; color: #374151;
        transition: all .2s; background: #f9fafb;
    }
    .fp-disc-btn:hover { border-color: #f59e0b; background: #fef3c7; color: #92400e; transform: translateY(-2px); }
    .fp-disc-btn.selected { border-color: #ef4444; background: linear-gradient(135deg,#fff5f5,#fee2e2); color: #dc2626; box-shadow: 0 4px 12px rgba(239,68,68,.2); }
    .fp-disc-small { font-size: 10px; font-weight: 500; color: inherit; display: block; margin-top: 2px; opacity: .7; }

    .fp-custom-row {
        display: flex; align-items: center; gap: 10px; margin-bottom: 20px;
    }
    .fp-custom-row label { font-size: 13px; color: #374151; font-weight: 600; flex-shrink: 0; }
    .fp-custom-input {
        flex: 1; height: 40px; border: 2px solid #e5e7eb; border-radius: 8px;
        padding: 0 12px; font-size: 15px; font-weight: 700; color: #374151;
        outline: none; transition: border-color .2s;
    }
    .fp-custom-input:focus { border-color: #f59e0b; }

    .fp-timer-info {
        display: flex; align-items: center; gap: 8px;
        background: #fffbeb; border: 1px solid #fde68a; border-radius: 10px;
        padding: 10px 14px; margin-bottom: 20px; font-size: 13px; color: #92400e;
    }
    .fp-timer-info i { font-size: 16px; color: #f59e0b; }

    .fp-btn-activate {
        width: 100%; height: 46px;
        background: linear-gradient(135deg, #f59e0b, #ef4444);
        border: none; border-radius: 12px; cursor: pointer;
        font-size: 15px; font-weight: 800; color: #fff;
        letter-spacing: 0.3px; transition: all .2s;
        box-shadow: 0 4px 15px rgba(239,68,68,.3);
    }
    .fp-btn-activate:hover { filter: brightness(1.08); transform: translateY(-1px); box-shadow: 0 8px 20px rgba(239,68,68,.35); }
    .fp-btn-activate:disabled { background: #d1d5db; box-shadow: none; cursor: not-allowed; transform: none; }

    .fp-countdown-admin {
        margin-top: 14px; text-align: center;
        font-size: 13px; color: #6b7280;
    }
    .fp-countdown-admin strong { color: #ef4444; font-size: 15px; }
    .fp-btn-cancel {
        margin-top: 10px; width: 100%; height: 38px; border-radius: 8px;
        background: #fff; border: 1px solid #e5e7eb; color: #6b7280;
        font-size: 13px; cursor: pointer; transition: all .2s;
    }
    .fp-btn-cancel:hover { background: #fee2e2; border-color: #fca5a5; color: #dc2626; }

    /* ── Durée du bloc ── */
    .fp-duration-grid {
        display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; margin-bottom: 14px;
    }
    .fp-dur-btn {
        border: 2px solid #e5e7eb; border-radius: 10px;
        padding: 10px 4px; text-align: center; cursor: pointer;
        font-size: 13px; font-weight: 700; color: #374151;
        transition: all .2s; background: #f9fafb;
    }
    .fp-dur-btn:hover { border-color: #6366f1; background: #eef2ff; color: #4338ca; transform: translateY(-1px); }
    .fp-dur-btn.selected-dur { border-color: #6366f1; background: linear-gradient(135deg,#eef2ff,#e0e7ff); color: #4338ca; box-shadow: 0 4px 12px rgba(99,102,241,.2); }
    .fp-dur-small { font-size: 9px; display: block; margin-top: 1px; opacity: .65; font-weight: 500; }
    .fp-dur-section-label { font-size: 12px; font-weight: 700; color: #374151; margin-bottom: 8px; display: flex; align-items: center; gap: 6px; }
    .fp-dur-custom-row { display: flex; align-items: center; gap: 8px; margin-bottom: 16px; }
    .fp-dur-custom-input { flex:1; height:36px; border:2px solid #e5e7eb; border-radius:8px; padding:0 10px; font-size:14px; font-weight:700; outline:none; transition:border-color .2s; }
    .fp-dur-custom-input:focus { border-color: #6366f1; }

    /* ── Bouton IA ── */
    .fp-btn-ai {
        width: 100%; height: 42px; margin-bottom: 16px;
        background: linear-gradient(135deg, #7c3aed, #4f46e5);
        border: none; border-radius: 12px; cursor: pointer;
        font-size: 14px; font-weight: 800; color: #fff;
        display: flex; align-items: center; justify-content: center; gap: 8px;
        transition: all .2s; box-shadow: 0 4px 15px rgba(124,58,237,.3);
    }
    .fp-btn-ai:hover { filter: brightness(1.1); transform: translateY(-1px); box-shadow: 0 8px 20px rgba(124,58,237,.4); }
    .fp-btn-ai:disabled { background: #d1d5db; box-shadow: none; cursor: not-allowed; transform: none; }
    .fp-ai-result {
        background: linear-gradient(135deg, #f5f3ff, #ede9fe);
        border: 1px solid #7c3aed; border-radius: 10px;
        padding: 10px 14px; margin-bottom: 14px; font-size: 12px; color: #4c1d95;
        display: none;
    }
    .fp-ai-result strong { color: #7c3aed; }
</style>

{# ── Flash messages ── #}
{% for type, messages in app.flashes %}
    {% for message in messages %}
        {% if type == 'success' %}
            <div class=\"alert alert-success alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
                <i class=\"fas fa-check-circle\"></i> {{ message }}
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% elseif type == 'error' %}
            <div class=\"alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
                <i class=\"fas fa-exclamation-circle\"></i> {{ message }}
                <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endif %}
    {% endfor %}
{% endfor %}

<div class=\"vendor-header\">
    <div>
        <h1><i class=\"fas fa-store me-2\" style=\"color:var(--accent)\"></i>Gestion des Vendeurs</h1>
        <div class=\"subtitle\">{{ rows|length }} vendeur{{ rows|length != 1 ? 's' : '' }} enregistré{{ rows|length != 1 ? 's' : '' }}</div>
    </div>
    <a href=\"{{ path('vendor_new') }}\" class=\"btn btn-success\" id=\"btn-add-vendor\">
        <i class=\"fas fa-plus me-2\"></i>Nouveau vendeur
    </a>
</div>

{# ── Statistiques rapides ── #}
{% set totalActifs    = rows|filter(r => r[0].statut == 'actif')|length %}
{% set totalInactifs  = rows|filter(r => r[0].statut == 'inactif')|length %}
{% set totalSuspendus = rows|filter(r => r[0].statut == 'suspendu')|length %}

<div class=\"stats-row\">
    <div class=\"stat-card\">
        <div class=\"stat-icon teal\"><i class=\"fas fa-store\"></i></div>
        <div>
            <div class=\"stat-value\">{{ rows|length }}</div>
            <div class=\"stat-label\">Total vendeurs</div>
        </div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-icon blue\"><i class=\"fas fa-check-circle\"></i></div>
        <div>
            <div class=\"stat-value\">{{ totalActifs }}</div>
            <div class=\"stat-label\">Actifs</div>
        </div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-icon orange\"><i class=\"fas fa-pause-circle\"></i></div>
        <div>
            <div class=\"stat-value\">{{ totalInactifs }}</div>
            <div class=\"stat-label\">Inactifs</div>
        </div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-icon red\"><i class=\"fas fa-ban\"></i></div>
        <div>
            <div class=\"stat-value\">{{ totalSuspendus }}</div>
            <div class=\"stat-label\">Suspendus</div>
        </div>
    </div>
</div>

{# ── Table ── #}
<div class=\"card-panel\">
    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <h2 style=\"font-size:15px;font-weight:700;color:#374151;margin:0;\">
            <i class=\"fas fa-list me-2\" style=\"color:var(--accent)\"></i>Liste des vendeurs
        </h2>
        <div class=\"search-bar\">
            <i class=\"fas fa-search search-icon\"></i>
            <input type=\"text\" id=\"vendorSearch\" placeholder=\"Rechercher un vendeur…\">
        </div>
    </div>

    {% if rows is empty %}
        <div class=\"empty-state\">
            <i class=\"fas fa-store-slash\"></i>
            <p>Aucun vendeur enregistré pour l'instant.</p>
            <a href=\"{{ path('vendor_new') }}\" class=\"btn btn-success mt-3\">
                <i class=\"fas fa-plus me-2\"></i>Ajouter le premier vendeur
            </a>
        </div>
    {% else %}
        <div class=\"table-responsive\">
            <table class=\"data-table\" id=\"vendorTable\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Statut</th>
                        <th style=\"text-align:center\">Produits</th>
                        <th style=\"text-align:center\">Promo Flash</th>
                        <th style=\"text-align:center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for row in rows %}
                        {% set vendor = row[0] %}
                        {% set count  = row['productCount'] %}
                        <tr class=\"vendor-row\">
                            <td style=\"color:#9ca3af;font-size:12px;\">{{ vendor.id }}</td>
                            <td>
                                <div style=\"font-weight:600;color:#111827;\">
                                    <i class=\"fas fa-user-circle me-2\" style=\"color:var(--accent)\"></i>
                                    {{ vendor.nom }}
                                </div>
                            </td>
                            <td style=\"color:#6b7280;\">
                                <a href=\"mailto:{{ vendor.email }}\">{{ vendor.email }}</a>
                            </td>
                            <td style=\"color:#6b7280;\">
                                {{ vendor.telephone ?? '—' }}
                            </td>
                            <td>
                                <span class=\"badge-{{ vendor.statut }}\">
                                    {% if vendor.statut == 'actif' %}
                                        <i class=\"fas fa-circle\" style=\"font-size:7px;\"></i>
                                    {% elseif vendor.statut == 'suspendu' %}
                                        <i class=\"fas fa-ban\" style=\"font-size:9px;\"></i>
                                    {% else %}
                                        <i class=\"fas fa-pause\" style=\"font-size:9px;\"></i>
                                    {% endif %}
                                    {{ vendor.statut|capitalize }}
                                </span>
                            </td>
                            <td style=\"text-align:center;\">
                                <span class=\"product-count-pill\">
                                    <i class=\"fas fa-box\"></i> {{ count }}
                                </span>
                            </td>

                            {# ── Colonne Promo Flash ── #}
                            <td style=\"text-align:center;\" class=\"promo-status-cell\">
                                <div id=\"promo-cell-{{ vendor.id }}\">
                                    <span class=\"promo-badge-none\" id=\"promo-badge-{{ vendor.id }}\">
                                        <i class=\"fas fa-tag\" style=\"font-size:9px;\"></i> Aucune
                                    </span>
                                </div>
                                <button class=\"btn-icon promo mt-1\" id=\"promo-btn-{{ vendor.id }}\"
                                        onclick=\"openPromoModal({{ vendor.id }}, '{{ vendor.nom|e('js') }}')\"
                                        title=\"Déclencher une promotion flash\">
                                    ⚡ Flash
                                </button>
                            </td>

                            <td style=\"text-align:center;\">
                                <div class=\"d-flex gap-1 justify-content-center\">
                                    <a href=\"{{ path('vendor_show', {id: vendor.id}) }}\"
                                       class=\"btn-icon view\" title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('vendor_edit', {id: vendor.id}) }}\"
                                       class=\"btn-icon edit\" title=\"Modifier\">
                                        <i class=\"fas fa-pencil-alt\"></i>
                                    </a>
                                    <a href=\"{{ path('vendor_confirm_delete', {id: vendor.id}) }}\"
                                       class=\"btn-icon del\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
</div>

{# ══════════════════════════════════════════════
   FLASH PROMO MODAL
══════════════════════════════════════════════ #}
<div class=\"fp-overlay\" id=\"fp-overlay\">
    <div class=\"fp-modal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"fp-modal-title\">
        <button class=\"fp-modal-close\" onclick=\"closePromoModal()\" aria-label=\"Fermer\">×</button>

        <div class=\"fp-title\">
            <span>⚡</span>
            <span id=\"fp-modal-title\">Promotion Flash</span>
        </div>
        <p class=\"fp-subtitle\">
            Vendeur : <span class=\"fp-vendor-name\" id=\"fp-modal-vendor-name\">—</span><br>
            Tous les produits seront remisés pendant la durée choisie.
        </p>

        {# Bouton IA #}
        <button class=\"fp-btn-ai\" id=\"fp-btn-ai\" onclick=\"aiSuggestPromo()\">
            🤖 Suggestion automatique par IA
        </button>
        <div class=\"fp-ai-result\" id=\"fp-ai-result\"></div>

        {# Grille de remises rapides #}
        <div class=\"fp-discount-grid\">
            <div class=\"fp-disc-btn\" data-discount=\"10\" onclick=\"selectDiscount(10, this)\">
                -10%
                <span class=\"fp-disc-small\">Légère</span>
            </div>
            <div class=\"fp-disc-btn\" data-discount=\"20\" onclick=\"selectDiscount(20, this)\">
                -20%
                <span class=\"fp-disc-small\">Modérée</span>
            </div>
            <div class=\"fp-disc-btn\" data-discount=\"40\" onclick=\"selectDiscount(40, this)\">
                -40%
                <span class=\"fp-disc-small\">Forte</span>
            </div>
            <div class=\"fp-disc-btn\" data-discount=\"60\" onclick=\"selectDiscount(60, this)\">
                -60%
                <span class=\"fp-disc-small\">Massive</span>
            </div>
        </div>

        {# Remise personnalisée #}
        <div class=\"fp-custom-row\">
            <label for=\"fp-custom-discount\">Autre :</label>
            <input type=\"number\" id=\"fp-custom-discount\" class=\"fp-custom-input\"
                   min=\"5\" max=\"90\" placeholder=\"ex: 35\"
                   oninput=\"onCustomDiscountInput(this.value)\">
            <span style=\"font-size:15px;font-weight:700;color:#374151;\">%</span>
        </div>

        <div class=\"fp-timer-info\">
            <i class=\"fas fa-clock\"></i>
            La promotion expire automatiquement <strong>côté serveur</strong> — indépendamment du navigateur.
        </div>

        {# Durée de la promotion #}
        <div class=\"fp-dur-section-label\">
            <i class=\"fas fa-hourglass-half\" style=\"color:#6366f1;\"></i> Durée de la promotion
        </div>
        <div class=\"fp-duration-grid\">
            <div class=\"fp-dur-btn selected-dur\" data-dur=\"60\"   onclick=\"selectDuration(60, this)\">1 min<span class=\"fp-dur-small\">rapide</span></div>
            <div class=\"fp-dur-btn\" data-dur=\"180\"  onclick=\"selectDuration(180, this)\">3 min<span class=\"fp-dur-small\">courte</span></div>
            <div class=\"fp-dur-btn\" data-dur=\"300\"  onclick=\"selectDuration(300, this)\">5 min<span class=\"fp-dur-small\">standard</span></div>
            <div class=\"fp-dur-btn\" data-dur=\"600\"  onclick=\"selectDuration(600, this)\">10 min<span class=\"fp-dur-small\">longue</span></div>
        </div>
        <div class=\"fp-dur-custom-row\">
            <label style=\"font-size:12px;font-weight:600;color:#374151;flex-shrink:0;\">Autre :</label>
            <input type=\"number\" id=\"fp-custom-dur\" class=\"fp-dur-custom-input\"
                   min=\"1\" max=\"60\" placeholder=\"ex: 7\"
                   oninput=\"onCustomDurInput(this.value)\">
            <span style=\"font-size:12px;font-weight:600;color:#374151;\">min</span>
        </div>

        <button class=\"fp-btn-activate\" id=\"fp-btn-activate\" onclick=\"activatePromo()\" disabled>
            ⚡ Activer la promotion flash
        </button>

        {# Zone affichée quand une promo est déjà active #}
        <div id=\"fp-active-zone\" style=\"display:none;\">
            <div class=\"fp-countdown-admin\">
                Promotion en cours · Expire dans <strong id=\"fp-admin-countdown\">—</strong>
            </div>
            <button class=\"fp-btn-cancel\" onclick=\"cancelPromo()\">
                <i class=\"fas fa-times-circle me-1\"></i> Annuler la promotion
            </button>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// ═══════════════════════════════════════════════════════════════════════
//  RECHERCHE CÔTÉ CLIENT
// ═══════════════════════════════════════════════════════════════════════
document.getElementById('vendorSearch')?.addEventListener('input', function () {
    const q = this.value.toLowerCase();
    document.querySelectorAll('#vendorTable .vendor-row').forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(q) ? '' : 'none';
    });
});

// ═══════════════════════════════════════════════════════════════════════
//  FLASH PROMO — ÉTAT GLOBAL
// ═══════════════════════════════════════════════════════════════════════
let currentVendorId   = null;
let selectedDiscount  = null;
let selectedDuration  = 60;          // défaut : 60 s
let adminCountdownInt = null;
let statusPollInt     = null;

// ── Polling en arrière-plan pour mettre à jour les badges du tableau ──
function pollAllStatuses() {
    const rows = document.querySelectorAll('[id^=\"promo-badge-\"]');
    rows.forEach(el => {
        const vid = el.id.replace('promo-badge-', '');
        fetchStatus(parseInt(vid));
    });
}

async function fetchStatus(vendorId) {
    try {
        const r    = await fetch(`/admin/vendors/\${vendorId}/flash-promo/status`);
        const data = await r.json();
        updateBadge(vendorId, data);
    } catch (e) { /* silencieux */ }
}

function updateBadge(vendorId, data) {
    const badge = document.getElementById('promo-badge-' + vendorId);
    const btn   = document.getElementById('promo-btn-'   + vendorId);
    if (!badge) return;

    if (data.active && data.remainingSeconds > 0) {
        const secs = Math.max(0, data.remainingSeconds);
        badge.className = 'promo-badge-active';
        badge.innerHTML = `⚡ -\${data.discountPercent}% · \${secs}s`;
        if (btn) btn.classList.add('active-promo');
    } else {
        badge.className = 'promo-badge-none';
        badge.innerHTML = '<i class=\"fas fa-tag\" style=\"font-size:9px;\"></i> Aucune';
        if (btn) btn.classList.remove('active-promo');
    }
}

// Mise à jour des badges depuis la dernière promo connue (décrémentation locale)
function tickBadges() {
    document.querySelectorAll('.promo-badge-active').forEach(badge => {
        const match = badge.textContent.match(/·\\s*(\\d+)s/);
        if (match) {
            let secs = parseInt(match[1]) - 1;
            if (secs <= 0) {
                badge.className = 'promo-badge-none';
                badge.innerHTML = '<i class=\"fas fa-tag\" style=\"font-size:9px;\"></i> Aucune';
                const vidMatch = badge.id.match(/promo-badge-(\\d+)/);
                if (vidMatch) {
                    const btn = document.getElementById('promo-btn-' + vidMatch[1]);
                    if (btn) btn.classList.remove('active-promo');
                }
            } else {
                badge.textContent = badge.textContent.replace(/·\\s*\\d+s/, `· \${secs}s`);
            }
        }
    });
}

// Démarrage
pollAllStatuses();
setInterval(tickBadges,      1000);   // décrémentation locale chaque seconde
setInterval(pollAllStatuses,  8000);  // synchronisation serveur toutes les 8 s

// ═══════════════════════════════════════════════════════════════════════
//  MODAL
// ═══════════════════════════════════════════════════════════════════════
function openPromoModal(vendorId, vendorName) {
    currentVendorId  = vendorId;
    selectedDiscount = null;
    selectedDuration = 60;
    document.getElementById('fp-modal-vendor-name').textContent = vendorName;
    document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
    document.getElementById('fp-custom-discount').value = '';
    // Reset durée
    document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
    const firstDur = document.querySelector('.fp-dur-btn[data-dur=\"60\"]');
    if (firstDur) firstDur.classList.add('selected-dur');
    document.getElementById('fp-custom-dur').value = '';
    document.getElementById('fp-btn-activate').disabled = true;
    document.getElementById('fp-btn-activate').style.display = '';
    document.getElementById('fp-active-zone').style.display = 'none';
    clearInterval(adminCountdownInt);
    document.querySelectorAll('.fp-disc-btn, .fp-custom-input, .fp-dur-btn, .fp-dur-custom-input').forEach(el => el.style.pointerEvents = '');

    // Charger le statut actuel
    fetchStatus(vendorId).then(() => {
        fetch(`/admin/vendors/\${vendorId}/flash-promo/status`)
            .then(r => r.json())
            .then(data => {
                if (data.active && data.remainingSeconds > 0) {
                    showActiveZone(data.remainingSeconds);
                }
            });
    });

    document.getElementById('fp-overlay').classList.add('open');
}

function closePromoModal() {
    document.getElementById('fp-overlay').classList.remove('open');
    clearInterval(adminCountdownInt);
    currentVendorId = null;
}

// Fermeture en cliquant en dehors
document.getElementById('fp-overlay').addEventListener('click', function(e) {
    if (e.target === this) closePromoModal();
});

// ── Suggestion IA ──
async function aiSuggestPromo() {
    if (!currentVendorId) return;
    const btn = document.getElementById('fp-btn-ai');
    const res = document.getElementById('fp-ai-result');

    btn.disabled = true;
    btn.innerHTML = '⏳ L\\'IA analyse les produits...';
    res.style.display = 'none';

    try {
        const r    = await fetch(`/admin/vendors/\${currentVendorId}/flash-promo/ai-suggest`, { method: 'POST' });
        const data = await r.json();

        if (data.success) {
            // Auto-remplir le formulaire avec les suggestions IA
            const disc = data.discount;
            const dur  = data.duration_seconds;

            // Sélectionner la remise
            document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
            const discBtn = document.querySelector(`.fp-disc-btn[data-discount=\"\${disc}\"]`);
            if (discBtn) {
                discBtn.classList.add('selected');
            } else {
                document.getElementById('fp-custom-discount').value = disc;
            }
            selectedDiscount = disc;

            // Sélectionner la durée
            document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
            const durBtn = document.querySelector(`.fp-dur-btn[data-dur=\"\${dur}\"]`);
            if (durBtn) {
                durBtn.classList.add('selected-dur');
                document.getElementById('fp-custom-dur').value = '';
            } else {
                document.getElementById('fp-custom-dur').value = Math.round(dur / 60);
            }
            selectedDuration = dur;

            // Afficher la raison IA
            res.style.display = 'block';
            res.innerHTML = `🤖 <strong>IA recommande :</strong> -\${disc}% pendant \${data.durationLabel}<br><em>\${data.reason}</em>`;

            // Activer le bouton principale
            document.getElementById('fp-btn-activate').disabled = false;

            // Mettre à jour le badge + countdown (promo déjà activée côté serveur)
            showActiveZone(data.remainingSeconds);
            updateBadge(currentVendorId, {
                active: true,
                discountPercent: disc,
                remainingSeconds: data.remainingSeconds
            });

        } else {
            res.style.display = 'block';
            res.style.background = '#fee2e2';
            res.style.borderColor = '#ef4444';
            res.style.color = '#991b1b';
            res.textContent = '❌ ' + (data.message || 'Erreur IA.');
        }
    } catch (e) {
        res.style.display = 'block';
        res.textContent = '❌ Erreur réseau.';
    }

    btn.disabled = false;
    btn.innerHTML = '🤖 Suggestion automatique par IA';
}

// Sélection d'un preset de remise
function selectDiscount(pct, el) {
    document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
    el.classList.add('selected');
    document.getElementById('fp-custom-discount').value = '';
    selectedDiscount = pct;
    document.getElementById('fp-btn-activate').disabled = false;
}

// Remise personnalisée
function onCustomDiscountInput(val) {
    document.querySelectorAll('.fp-disc-btn').forEach(b => b.classList.remove('selected'));
    const v = parseInt(val);
    if (v >= 5 && v <= 90) {
        selectedDiscount = v;
        document.getElementById('fp-btn-activate').disabled = false;
    } else {
        selectedDiscount = null;
        document.getElementById('fp-btn-activate').disabled = true;
    }
}

// Sélection de la durée (preset)
function selectDuration(secs, el) {
    document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
    el.classList.add('selected-dur');
    document.getElementById('fp-custom-dur').value = '';
    selectedDuration = secs;
}

// Durée personnalisée
function onCustomDurInput(val) {
    document.querySelectorAll('.fp-dur-btn').forEach(b => b.classList.remove('selected-dur'));
    const mins = parseInt(val);
    if (mins >= 1 && mins <= 60) {
        selectedDuration = mins * 60;
    } else {
        selectedDuration = 60; // fallback
    }
}

// ── Activation ──
async function activatePromo() {
    if (!currentVendorId || !selectedDiscount) return;

    const btn = document.getElementById('fp-btn-activate');
    btn.disabled = true;
    btn.textContent = '⏳ Activation…';

    try {
        const r    = await fetch(`/admin/vendors/\${currentVendorId}/flash-promo`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ discount: selectedDiscount, duration_seconds: selectedDuration })
        });
        const data = await r.json();

        if (data.success) {
            showActiveZone(data.remainingSeconds || selectedDuration);
            updateBadge(currentVendorId, {
                active: true,
                discountPercent: selectedDiscount,
                remainingSeconds: data.remainingSeconds || selectedDuration
            });
        } else {
            alert('❌ ' + (data.message || 'Erreur inattendue'));
            btn.disabled = false;
            btn.textContent = '⚡ Activer la promotion flash';
        }
    } catch (e) {
        alert('❌ Erreur réseau.');
        btn.disabled = false;
        btn.textContent = '⚡ Activer la promotion flash';
    }
}

function showActiveZone(seconds) {
    document.getElementById('fp-btn-activate').style.display = 'none';
    document.getElementById('fp-active-zone').style.display  = 'block';
    document.querySelectorAll('.fp-disc-btn, .fp-custom-input, .fp-dur-btn, .fp-dur-custom-input').forEach(el => el.style.pointerEvents = 'none');

    let rem = seconds;
    const cd = document.getElementById('fp-admin-countdown');
    // Format affichage : mm:ss si > 60s
    function fmtTime(s) {
        if (s >= 60) {
            const m = Math.floor(s / 60), sec = s % 60;
            return sec > 0 ? `\${m} min \${sec} s` : `\${m} min`;
        }
        return s + ' s';
    }
    cd.textContent = fmtTime(rem);
    clearInterval(adminCountdownInt);
    adminCountdownInt = setInterval(() => {
        rem--;
        if (rem <= 0) {
            clearInterval(adminCountdownInt);
            closePromoModal();
            updateBadge(currentVendorId, { active: false });
        } else {
            cd.textContent = fmtTime(rem);
        }
    }, 1000);
}

// ── Annulation ──
async function cancelPromo() {
    if (!currentVendorId) return;
    try {
        await fetch(`/admin/vendors/\${currentVendorId}/flash-promo/cancel`, { method: 'POST' });
        clearInterval(adminCountdownInt);
        updateBadge(currentVendorId, { active: false });
        closePromoModal();
    } catch (e) {
        alert('❌ Erreur réseau.');
    }
}
</script>
{% endblock %}
", "vendor/index.html.twig", "C:\\Users\\dhiaj_onolvpc\\Desktop\\FINAL\\FINAL\\templates\\vendor\\index.html.twig");
    }
}
