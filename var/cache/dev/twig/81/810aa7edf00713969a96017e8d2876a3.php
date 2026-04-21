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

/* vendor/show.html.twig */
class __TwigTemplate_e833a646a8e9834ff6905451b3890431 extends Template
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
            'breadcrumb' => [$this, 'block_breadcrumb'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " — Détail vendeur — Bizcore";
        
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

        yield "VENDEUR";
        
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
    .show-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }
    .show-header h1 { font-size: 20px; font-weight: 700; color: #111827; margin: 0; }
    .back-link {
        width: 36px; height: 36px; background: #f3f4f6; border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        color: #6b7280; text-decoration: none; font-size: 14px; transition: background 0.2s; flex-shrink: 0;
    }
    .back-link:hover { background: #e5e7eb; color: #374151; }

    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 24px;
    }
    @media (max-width: 640px) { .info-grid { grid-template-columns: 1fr; } }

    .info-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px;
    }
    .info-card .info-label {
        font-size: 10px; font-weight: 700; text-transform: uppercase;
        letter-spacing: 1px; color: #9ca3af; margin-bottom: 4px;
    }
    .info-card .info-value {
        font-size: 15px; font-weight: 600; color: #111827;
    }
    .info-card .info-value.muted { color: #6b7280; font-weight: 400; }

    .badge-actif    { background:#d1fae5; color:#065f46; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:700; }
    .badge-inactif  { background:#f3f4f6; color:#374151; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:700; }
    .badge-suspendu { background:#fee2e2; color:#991b1b; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:700; }

    .products-section-title {
        font-size: 15px; font-weight: 700; color: #374151; margin-bottom: 16px;
        display: flex; align-items: center; gap: 8px;
    }
    .product-pill {
        display: flex; align-items: center; gap: 10px;
        padding: 10px 14px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        background: #fff;
        margin-bottom: 8px;
        transition: box-shadow 0.2s;
    }
    .product-pill:hover { box-shadow: 0 2px 8px rgba(0,0,0,.06); }
    .product-pill .prod-name { font-size: 14px; font-weight: 600; color: #111827; flex: 1; }
    .product-pill .prod-price { font-size: 13px; color: #20c997; font-weight: 700; }
    .product-pill .prod-cat {
        background: #dbeafe; color: #1e40af;
        border-radius: 12px; padding: 2px 9px;
        font-size: 10px; font-weight: 700; text-transform: uppercase;
    }
    .product-pill .prod-stat {
        font-size: 11px; font-weight: 600; padding: 2px 9px; border-radius: 12px;
    }
    .prod-stat.Disponible   { background:#d1fae5; color:#065f46; }
    .prod-stat.Indisponible { background:#fee2e2; color:#991b1b; }
    .no-products { color:#9ca3af; font-size:14px; text-align:center; padding:30px; }

    .action-bar {
        display: flex; gap: 10px; margin-bottom: 24px;
    }
    .btn-edit-vendor {
        display: inline-flex; align-items: center; gap: 8px;
        background: #dbeafe; color: #1e40af;
        border: none; border-radius: 8px;
        padding: 9px 18px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .btn-edit-vendor:hover { background: #bfdbfe; color: #1e40af; }
    .btn-del-vendor {
        display: inline-flex; align-items: center; gap: 8px;
        background: #fee2e2; color: #dc2626;
        border: none; border-radius: 8px;
        padding: 9px 18px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .btn-del-vendor:hover { background: #fecaca; color: #b91c1c; }
</style>

";
        // line 99
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 104
        yield "
";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 106
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 107
                yield "        <div class=\"alert alert-";
                yield ((($context["type"] == "error")) ? ("danger") : ("success"));
                yield " alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
            <i class=\"fas fa-";
                // line 108
                yield ((($context["type"] == "error")) ? ("exclamation-circle") : ("check-circle"));
                yield "\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "
<div class=\"show-header\">
    <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
        yield "\" class=\"back-link\" title=\"Retour\"><i class=\"fas fa-arrow-left\"></i></a>
    <h1><i class=\"fas fa-store me-2\" style=\"color:var(--accent)\"></i>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 116, $this->source); })()), "nom", [], "any", false, false, false, 116), "html", null, true);
        yield "</h1>
</div>

";
        // line 120
        yield "<div class=\"action-bar\">
    <a href=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        yield "\" class=\"btn-edit-vendor\" id=\"btn-edit-vendor\">
        <i class=\"fas fa-pencil-alt\"></i> Modifier
    </a>
    <a href=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_confirm_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)]), "html", null, true);
        yield "\" class=\"btn-del-vendor\" id=\"btn-del-vendor\">
        <i class=\"fas fa-trash\"></i> Supprimer
    </a>
</div>

";
        // line 130
        yield "<div class=\"info-grid\">
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-user me-1\"></i>Nom</div>
        <div class=\"info-value\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 133, $this->source); })()), "nom", [], "any", false, false, false, 133), "html", null, true);
        yield "</div>
    </div>
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-envelope me-1\"></i>E-mail</div>
        <div class=\"info-value\"><a href=\"mailto:";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 137, $this->source); })()), "email", [], "any", false, false, false, 137), "html", null, true);
        yield "\" style=\"color:var(--accent)\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 137, $this->source); })()), "email", [], "any", false, false, false, 137), "html", null, true);
        yield "</a></div>
    </div>
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-phone me-1\"></i>Téléphone</div>
        <div class=\"info-value ";
        // line 141
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 141, $this->source); })()), "telephone", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("muted"));
        yield "\">
            ";
        // line 142
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["vendor"] ?? null), "telephone", [], "any", true, true, false, 142) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 142, $this->source); })()), "telephone", [], "any", false, false, false, 142)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 142, $this->source); })()), "telephone", [], "any", false, false, false, 142), "html", null, true)) : ("Non renseigné"));
        yield "
        </div>
    </div>
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-toggle-on me-1\"></i>Statut</div>
        <div class=\"info-value\">
            <span class=\"badge-";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 148, $this->source); })()), "statut", [], "any", false, false, false, 148), "html", null, true);
        yield "\">
                ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 149, $this->source); })()), "statut", [], "any", false, false, false, 149)), "html", null, true);
        yield "
            </span>
        </div>
    </div>
</div>

";
        // line 156
        yield "<div class=\"card-panel\">
    <div class=\"products-section-title\">
        <i class=\"fas fa-boxes\" style=\"color:var(--accent)\"></i>
        Produits associés
        <span style=\"background:#dbeafe;color:#1e40af;border-radius:20px;padding:2px 10px;font-size:11px;font-weight:700;margin-left:4px;\">
            ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 161, $this->source); })()), "products", [], "any", false, false, false, 161)), "html", null, true);
        yield "
        </span>
    </div>

    ";
        // line 165
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 165, $this->source); })()), "products", [], "any", false, false, false, 165))) {
            // line 166
            yield "        <div class=\"no-products\">
            <i class=\"fas fa-box-open\" style=\"font-size:32px;display:block;margin-bottom:10px;color:#d1d5db;\"></i>
            Aucun produit associé à ce vendeur.
        </div>
    ";
        } else {
            // line 171
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 171, $this->source); })()), "products", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 172
                yield "            <div class=\"product-pill\">
                <i class=\"fas fa-box\" style=\"color:#d1d5db;font-size:14px;flex-shrink:0;\"></i>
                <span class=\"prod-name\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 174), "html", null, true);
                yield "</span>
                ";
                // line 175
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 176
                    yield "                    <span class=\"prod-cat\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 176), "html", null, true);
                    yield "</span>
                ";
                }
                // line 178
                yield "                <span class=\"prod-stat ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 178), "html", null, true);
                yield "\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", true, true, false, 178) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 178)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "statut", [], "any", false, false, false, 178), "html", null, true)) : ("—"));
                yield "</span>
                <span class=\"prod-price\">";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 179), "html", null, true);
                yield " TND</span>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "    ";
        }
        // line 183
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 100
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
        yield "\">Vendeurs</a>
    <span class=\"sep\">/</span>
    <span class=\"current\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 102, $this->source); })()), "nom", [], "any", false, false, false, 102)), "html", null, true);
        yield "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vendor/show.html.twig";
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
        return array (  400 => 102,  394 => 100,  384 => 99,  374 => 183,  371 => 182,  362 => 179,  355 => 178,  349 => 176,  347 => 175,  343 => 174,  339 => 172,  334 => 171,  327 => 166,  325 => 165,  318 => 161,  311 => 156,  302 => 149,  298 => 148,  289 => 142,  285 => 141,  276 => 137,  269 => 133,  264 => 130,  256 => 124,  250 => 121,  247 => 120,  241 => 116,  237 => 115,  233 => 113,  217 => 108,  212 => 107,  207 => 106,  203 => 105,  200 => 104,  198 => 99,  105 => 8,  95 => 7,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ vendor.nom }} — Détail vendeur — Bizcore{% endblock %}

{% block page_title %}VENDEUR{% endblock %}

{% block body %}
<style>
    .show-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }
    .show-header h1 { font-size: 20px; font-weight: 700; color: #111827; margin: 0; }
    .back-link {
        width: 36px; height: 36px; background: #f3f4f6; border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        color: #6b7280; text-decoration: none; font-size: 14px; transition: background 0.2s; flex-shrink: 0;
    }
    .back-link:hover { background: #e5e7eb; color: #374151; }

    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 24px;
    }
    @media (max-width: 640px) { .info-grid { grid-template-columns: 1fr; } }

    .info-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px;
    }
    .info-card .info-label {
        font-size: 10px; font-weight: 700; text-transform: uppercase;
        letter-spacing: 1px; color: #9ca3af; margin-bottom: 4px;
    }
    .info-card .info-value {
        font-size: 15px; font-weight: 600; color: #111827;
    }
    .info-card .info-value.muted { color: #6b7280; font-weight: 400; }

    .badge-actif    { background:#d1fae5; color:#065f46; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:700; }
    .badge-inactif  { background:#f3f4f6; color:#374151; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:700; }
    .badge-suspendu { background:#fee2e2; color:#991b1b; border-radius:20px; padding:5px 14px; font-size:12px; font-weight:700; }

    .products-section-title {
        font-size: 15px; font-weight: 700; color: #374151; margin-bottom: 16px;
        display: flex; align-items: center; gap: 8px;
    }
    .product-pill {
        display: flex; align-items: center; gap: 10px;
        padding: 10px 14px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        background: #fff;
        margin-bottom: 8px;
        transition: box-shadow 0.2s;
    }
    .product-pill:hover { box-shadow: 0 2px 8px rgba(0,0,0,.06); }
    .product-pill .prod-name { font-size: 14px; font-weight: 600; color: #111827; flex: 1; }
    .product-pill .prod-price { font-size: 13px; color: #20c997; font-weight: 700; }
    .product-pill .prod-cat {
        background: #dbeafe; color: #1e40af;
        border-radius: 12px; padding: 2px 9px;
        font-size: 10px; font-weight: 700; text-transform: uppercase;
    }
    .product-pill .prod-stat {
        font-size: 11px; font-weight: 600; padding: 2px 9px; border-radius: 12px;
    }
    .prod-stat.Disponible   { background:#d1fae5; color:#065f46; }
    .prod-stat.Indisponible { background:#fee2e2; color:#991b1b; }
    .no-products { color:#9ca3af; font-size:14px; text-align:center; padding:30px; }

    .action-bar {
        display: flex; gap: 10px; margin-bottom: 24px;
    }
    .btn-edit-vendor {
        display: inline-flex; align-items: center; gap: 8px;
        background: #dbeafe; color: #1e40af;
        border: none; border-radius: 8px;
        padding: 9px 18px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .btn-edit-vendor:hover { background: #bfdbfe; color: #1e40af; }
    .btn-del-vendor {
        display: inline-flex; align-items: center; gap: 8px;
        background: #fee2e2; color: #dc2626;
        border: none; border-radius: 8px;
        padding: 9px 18px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .btn-del-vendor:hover { background: #fecaca; color: #b91c1c; }
</style>

{% block breadcrumb %}
    <a href=\"{{ path('vendor_index') }}\">Vendeurs</a>
    <span class=\"sep\">/</span>
    <span class=\"current\">{{ vendor.nom|upper }}</span>
{% endblock %}

{% for type, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : 'success' }} alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
            <i class=\"fas fa-{{ type == 'error' ? 'exclamation-circle' : 'check-circle' }}\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
{% endfor %}

<div class=\"show-header\">
    <a href=\"{{ path('vendor_index') }}\" class=\"back-link\" title=\"Retour\"><i class=\"fas fa-arrow-left\"></i></a>
    <h1><i class=\"fas fa-store me-2\" style=\"color:var(--accent)\"></i>{{ vendor.nom }}</h1>
</div>

{# ── Action bar ── #}
<div class=\"action-bar\">
    <a href=\"{{ path('vendor_edit', {id: vendor.id}) }}\" class=\"btn-edit-vendor\" id=\"btn-edit-vendor\">
        <i class=\"fas fa-pencil-alt\"></i> Modifier
    </a>
    <a href=\"{{ path('vendor_confirm_delete', {id: vendor.id}) }}\" class=\"btn-del-vendor\" id=\"btn-del-vendor\">
        <i class=\"fas fa-trash\"></i> Supprimer
    </a>
</div>

{# ── Infos ── #}
<div class=\"info-grid\">
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-user me-1\"></i>Nom</div>
        <div class=\"info-value\">{{ vendor.nom }}</div>
    </div>
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-envelope me-1\"></i>E-mail</div>
        <div class=\"info-value\"><a href=\"mailto:{{ vendor.email }}\" style=\"color:var(--accent)\">{{ vendor.email }}</a></div>
    </div>
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-phone me-1\"></i>Téléphone</div>
        <div class=\"info-value {{ vendor.telephone ? '' : 'muted' }}\">
            {{ vendor.telephone ?? 'Non renseigné' }}
        </div>
    </div>
    <div class=\"info-card\">
        <div class=\"info-label\"><i class=\"fas fa-toggle-on me-1\"></i>Statut</div>
        <div class=\"info-value\">
            <span class=\"badge-{{ vendor.statut }}\">
                {{ vendor.statut|capitalize }}
            </span>
        </div>
    </div>
</div>

{# ── Produits associés ── #}
<div class=\"card-panel\">
    <div class=\"products-section-title\">
        <i class=\"fas fa-boxes\" style=\"color:var(--accent)\"></i>
        Produits associés
        <span style=\"background:#dbeafe;color:#1e40af;border-radius:20px;padding:2px 10px;font-size:11px;font-weight:700;margin-left:4px;\">
            {{ vendor.products|length }}
        </span>
    </div>

    {% if vendor.products is empty %}
        <div class=\"no-products\">
            <i class=\"fas fa-box-open\" style=\"font-size:32px;display:block;margin-bottom:10px;color:#d1d5db;\"></i>
            Aucun produit associé à ce vendeur.
        </div>
    {% else %}
        {% for product in vendor.products %}
            <div class=\"product-pill\">
                <i class=\"fas fa-box\" style=\"color:#d1d5db;font-size:14px;flex-shrink:0;\"></i>
                <span class=\"prod-name\">{{ product.nomProduit }}</span>
                {% if product.categorie %}
                    <span class=\"prod-cat\">{{ product.categorie }}</span>
                {% endif %}
                <span class=\"prod-stat {{ product.statut }}\">{{ product.statut ?? '—' }}</span>
                <span class=\"prod-price\">{{ product.prix }} TND</span>
            </div>
        {% endfor %}
    {% endif %}
</div>

{% endblock %}
", "vendor/show.html.twig", "C:\\Users\\dhiaj_onolvpc\\Desktop\\FINAL\\FINAL\\templates\\vendor\\show.html.twig");
    }
}
