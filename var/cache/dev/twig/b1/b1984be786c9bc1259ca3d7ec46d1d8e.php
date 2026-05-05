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
class __TwigTemplate_f807d09aa28943afb9137efb42ee8ad1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/index.html.twig"));

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

        yield "Gestion des Vendeurs";
        
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

        yield "VENDEURS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "<style>
    .vendor-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:12px; }
    .vendor-header h2 { font-size:18px; font-weight:700; color:#111827; }
    .vendor-header .muted { font-size:13px; color:#6b7280; margin-top:4px; }
    .btn-new { background:#20c997; color:#fff; padding:9px 18px; border-radius:8px; font-size:13px; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:8px; transition:background .15s; border:none; }
    .btn-new:hover { background:#1ab386; color:#fff; }
    .vendor-grid { display:grid; grid-template-columns:repeat(auto-fill, minmax(310px, 1fr)); gap:18px; }
    .vendor-card { background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:20px; transition:box-shadow .15s, transform .15s; }
    .vendor-card:hover { box-shadow:0 6px 18px rgba(0,0,0,.07); transform:translateY(-2px); }
    .vendor-top { display:flex; align-items:center; gap:12px; margin-bottom:12px; }
    .vendor-avatar { width:44px; height:44px; border-radius:50%; background:#20c997; color:#fff; font-weight:700; font-size:16px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
    .vendor-name { font-size:15px; font-weight:700; color:#111827; }
    .vendor-email { font-size:12px; color:#6b7280; }
    .vendor-meta { display:flex; flex-wrap:wrap; gap:6px; margin:10px 0; }
    .chip { font-size:11px; font-weight:600; padding:3px 10px; border-radius:20px; }
    .chip-actif     { background:#d1fae5; color:#065f46; }
    .chip-inactif   { background:#fee2e2; color:#991b1b; }
    .chip-suspendu  { background:#fef3c7; color:#92400e; }
    .chip-products  { background:#dbeafe; color:#1e40af; }
    .chip-rating    { background:#fef3c7; color:#92400e; }
    .vendor-info-row { font-size:13px; color:#374151; display:flex; align-items:center; gap:8px; margin-bottom:6px; }
    .vendor-info-row i { color:#9ca3af; width:14px; text-align:center; }
    .vendor-actions { display:flex; gap:8px; margin-top:14px; padding-top:14px; border-top:1px solid #f3f4f6; }
    .vendor-actions a, .vendor-actions button { flex:1; padding:8px; font-size:12px; font-weight:600; border-radius:6px; text-decoration:none; text-align:center; border:1px solid transparent; cursor:pointer; transition:all .15s; display:inline-flex; align-items:center; justify-content:center; gap:6px; }
    .btn-view   { background:#f3f4f6; color:#374151; }
    .btn-view:hover   { background:#e5e7eb; color:#111827; }
    .btn-edit   { background:#dbeafe; color:#1e40af; }
    .btn-edit:hover   { background:#bfdbfe; color:#1e3a8a; }
    .btn-delete { background:#fee2e2; color:#991b1b; }
    .btn-delete:hover { background:#fecaca; color:#7f1d1d; }
    .empty-state { text-align:center; padding:60px 20px; color:#9ca3af; }
    .empty-state i { font-size:42px; color:#d1d5db; margin-bottom:14px; }
    .empty-state h3 { font-size:16px; color:#6b7280; margin-bottom:8px; }

    .flash { padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:14px; display:flex; align-items:center; gap:10px; }
    .flash-success { background:#d1fae5; color:#065f46; border:1px solid #a7f3d0; }
    .flash-error   { background:#fee2e2; color:#991b1b; border:1px solid #fecaca; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "<div class=\"vendor-header\">
    <div>
        <h2>Liste des Vendeurs</h2>
        <div class=\"muted\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 51, $this->source); })())), "html", null, true);
        yield " vendeur";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 51, $this->source); })())) != 1)) ? ("s") : (""));
        yield " au total</div>
    </div>
    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_new");
        yield "\" class=\"btn-new\">
        <i class=\"fas fa-plus\"></i> Nouveau vendeur
    </a>
</div>

";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", ["success"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 59
            yield "    <div class=\"flash flash-success\"><i class=\"fas fa-check-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", ["error"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 62
            yield "    <div class=\"flash flash-error\"><i class=\"fas fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "
";
        // line 65
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-store-slash\"></i>
        <h3>Aucun vendeur enregistré</h3>
        <p>Commencez par créer votre premier vendeur.</p>
    </div>
";
        } else {
            // line 72
            yield "    <div class=\"vendor-grid\">
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 74
                yield "            ";
                $context["vendor"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], 0, [], "array", false, false, false, 74);
                // line 75
                yield "            ";
                $context["productCount"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "productCount", [], "any", true, true, false, 75) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "productCount", [], "any", false, false, false, 75)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "productCount", [], "any", false, false, false, 75)) : (0));
                // line 76
                yield "            <div class=\"vendor-card\">
                <div class=\"vendor-top\">
                    <div class=\"vendor-avatar\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 78, $this->source); })()), "nom", [], "any", false, false, false, 78))), "html", null, true);
                yield "</div>
                    <div style=\"flex:1; min-width:0;\">
                        <div class=\"vendor-name\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 80, $this->source); })()), "nom", [], "any", false, false, false, 80), "html", null, true);
                yield "</div>
                        <div class=\"vendor-email\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), "html", null, true);
                yield "</div>
                    </div>
                </div>

                <div class=\"vendor-meta\">
                    <span class=\"chip chip-";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 86, $this->source); })()), "statut", [], "any", false, false, false, 86)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 86, $this->source); })()), "statut", [], "any", false, false, false, 86)), "html", null, true);
                yield "</span>
                    <span class=\"chip chip-products\">
                        <i class=\"fas fa-box\"></i> ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["productCount"]) || array_key_exists("productCount", $context) ? $context["productCount"] : (function () { throw new RuntimeError('Variable "productCount" does not exist.', 88, $this->source); })()), "html", null, true);
                yield " produit";
                yield ((((isset($context["productCount"]) || array_key_exists("productCount", $context) ? $context["productCount"] : (function () { throw new RuntimeError('Variable "productCount" does not exist.', 88, $this->source); })()) != 1)) ? ("s") : (""));
                yield "
                    </span>
                    ";
                // line 90
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 90, $this->source); })()), "rating", [], "any", false, false, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 90, $this->source); })()), "rating", [], "any", false, false, false, 90) > 0))) {
                    // line 91
                    yield "                        <span class=\"chip chip-rating\">
                            <i class=\"fas fa-star\"></i> ";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 92, $this->source); })()), "rating", [], "any", false, false, false, 92), 1), "html", null, true);
                    yield "
                            ";
                    // line 93
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 93, $this->source); })()), "ratingCount", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 93, $this->source); })()), "ratingCount", [], "any", false, false, false, 93), "html", null, true);
                        yield ")";
                    }
                    // line 94
                    yield "                        </span>
                    ";
                }
                // line 96
                yield "                </div>

                ";
                // line 98
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 98, $this->source); })()), "telephone", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 99
                    yield "                    <div class=\"vendor-info-row\">
                        <i class=\"fas fa-phone\"></i> ";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 100, $this->source); })()), "telephone", [], "any", false, false, false, 100), "html", null, true);
                    yield "
                    </div>
                ";
                }
                // line 103
                yield "
                <div class=\"vendor-actions\">
                    <a href=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" class=\"btn-view\">
                        <i class=\"fas fa-eye\"></i> Voir
                    </a>
                    <a href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
                yield "\" class=\"btn-edit\">
                        <i class=\"fas fa-pen\"></i> Modifier
                    </a>
                    <a href=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_confirm_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\" class=\"btn-delete\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </a>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  356 => 117,  344 => 111,  338 => 108,  332 => 105,  328 => 103,  322 => 100,  319 => 99,  317 => 98,  313 => 96,  309 => 94,  303 => 93,  299 => 92,  296 => 91,  294 => 90,  287 => 88,  280 => 86,  272 => 81,  268 => 80,  263 => 78,  259 => 76,  256 => 75,  253 => 74,  249 => 73,  246 => 72,  238 => 66,  236 => 65,  233 => 64,  224 => 62,  220 => 61,  211 => 59,  207 => 58,  199 => 53,  192 => 51,  187 => 48,  174 => 47,  125 => 7,  112 => 6,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Vendeurs{% endblock %}
{% block page_title %}VENDEURS{% endblock %}

{% block stylesheets %}
<style>
    .vendor-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; flex-wrap:wrap; gap:12px; }
    .vendor-header h2 { font-size:18px; font-weight:700; color:#111827; }
    .vendor-header .muted { font-size:13px; color:#6b7280; margin-top:4px; }
    .btn-new { background:#20c997; color:#fff; padding:9px 18px; border-radius:8px; font-size:13px; font-weight:600; text-decoration:none; display:inline-flex; align-items:center; gap:8px; transition:background .15s; border:none; }
    .btn-new:hover { background:#1ab386; color:#fff; }
    .vendor-grid { display:grid; grid-template-columns:repeat(auto-fill, minmax(310px, 1fr)); gap:18px; }
    .vendor-card { background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:20px; transition:box-shadow .15s, transform .15s; }
    .vendor-card:hover { box-shadow:0 6px 18px rgba(0,0,0,.07); transform:translateY(-2px); }
    .vendor-top { display:flex; align-items:center; gap:12px; margin-bottom:12px; }
    .vendor-avatar { width:44px; height:44px; border-radius:50%; background:#20c997; color:#fff; font-weight:700; font-size:16px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
    .vendor-name { font-size:15px; font-weight:700; color:#111827; }
    .vendor-email { font-size:12px; color:#6b7280; }
    .vendor-meta { display:flex; flex-wrap:wrap; gap:6px; margin:10px 0; }
    .chip { font-size:11px; font-weight:600; padding:3px 10px; border-radius:20px; }
    .chip-actif     { background:#d1fae5; color:#065f46; }
    .chip-inactif   { background:#fee2e2; color:#991b1b; }
    .chip-suspendu  { background:#fef3c7; color:#92400e; }
    .chip-products  { background:#dbeafe; color:#1e40af; }
    .chip-rating    { background:#fef3c7; color:#92400e; }
    .vendor-info-row { font-size:13px; color:#374151; display:flex; align-items:center; gap:8px; margin-bottom:6px; }
    .vendor-info-row i { color:#9ca3af; width:14px; text-align:center; }
    .vendor-actions { display:flex; gap:8px; margin-top:14px; padding-top:14px; border-top:1px solid #f3f4f6; }
    .vendor-actions a, .vendor-actions button { flex:1; padding:8px; font-size:12px; font-weight:600; border-radius:6px; text-decoration:none; text-align:center; border:1px solid transparent; cursor:pointer; transition:all .15s; display:inline-flex; align-items:center; justify-content:center; gap:6px; }
    .btn-view   { background:#f3f4f6; color:#374151; }
    .btn-view:hover   { background:#e5e7eb; color:#111827; }
    .btn-edit   { background:#dbeafe; color:#1e40af; }
    .btn-edit:hover   { background:#bfdbfe; color:#1e3a8a; }
    .btn-delete { background:#fee2e2; color:#991b1b; }
    .btn-delete:hover { background:#fecaca; color:#7f1d1d; }
    .empty-state { text-align:center; padding:60px 20px; color:#9ca3af; }
    .empty-state i { font-size:42px; color:#d1d5db; margin-bottom:14px; }
    .empty-state h3 { font-size:16px; color:#6b7280; margin-bottom:8px; }

    .flash { padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:14px; display:flex; align-items:center; gap:10px; }
    .flash-success { background:#d1fae5; color:#065f46; border:1px solid #a7f3d0; }
    .flash-error   { background:#fee2e2; color:#991b1b; border:1px solid #fecaca; }
</style>
{% endblock %}

{% block body %}
<div class=\"vendor-header\">
    <div>
        <h2>Liste des Vendeurs</h2>
        <div class=\"muted\">{{ rows|length }} vendeur{{ rows|length != 1 ? 's' : '' }} au total</div>
    </div>
    <a href=\"{{ path('vendor_new') }}\" class=\"btn-new\">
        <i class=\"fas fa-plus\"></i> Nouveau vendeur
    </a>
</div>

{% for msg in app.flashes('success') %}
    <div class=\"flash flash-success\"><i class=\"fas fa-check-circle\"></i> {{ msg }}</div>
{% endfor %}
{% for msg in app.flashes('error') %}
    <div class=\"flash flash-error\"><i class=\"fas fa-exclamation-circle\"></i> {{ msg }}</div>
{% endfor %}

{% if rows is empty %}
    <div class=\"empty-state\">
        <i class=\"fas fa-store-slash\"></i>
        <h3>Aucun vendeur enregistré</h3>
        <p>Commencez par créer votre premier vendeur.</p>
    </div>
{% else %}
    <div class=\"vendor-grid\">
        {% for row in rows %}
            {% set vendor = row[0] %}
            {% set productCount = row.productCount ?? 0 %}
            <div class=\"vendor-card\">
                <div class=\"vendor-top\">
                    <div class=\"vendor-avatar\">{{ vendor.nom|first|upper }}</div>
                    <div style=\"flex:1; min-width:0;\">
                        <div class=\"vendor-name\">{{ vendor.nom }}</div>
                        <div class=\"vendor-email\">{{ vendor.email }}</div>
                    </div>
                </div>

                <div class=\"vendor-meta\">
                    <span class=\"chip chip-{{ vendor.statut|lower }}\">{{ vendor.statut|capitalize }}</span>
                    <span class=\"chip chip-products\">
                        <i class=\"fas fa-box\"></i> {{ productCount }} produit{{ productCount != 1 ? 's' : '' }}
                    </span>
                    {% if vendor.rating and vendor.rating > 0 %}
                        <span class=\"chip chip-rating\">
                            <i class=\"fas fa-star\"></i> {{ vendor.rating|number_format(1) }}
                            {% if vendor.ratingCount %}({{ vendor.ratingCount }}){% endif %}
                        </span>
                    {% endif %}
                </div>

                {% if vendor.telephone %}
                    <div class=\"vendor-info-row\">
                        <i class=\"fas fa-phone\"></i> {{ vendor.telephone }}
                    </div>
                {% endif %}

                <div class=\"vendor-actions\">
                    <a href=\"{{ path('vendor_show', {id: vendor.id}) }}\" class=\"btn-view\">
                        <i class=\"fas fa-eye\"></i> Voir
                    </a>
                    <a href=\"{{ path('vendor_edit', {id: vendor.id}) }}\" class=\"btn-edit\">
                        <i class=\"fas fa-pen\"></i> Modifier
                    </a>
                    <a href=\"{{ path('vendor_confirm_delete', {id: vendor.id}) }}\" class=\"btn-delete\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </a>
                </div>
            </div>
        {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "vendor/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\vendor\\index.html.twig");
    }
}
