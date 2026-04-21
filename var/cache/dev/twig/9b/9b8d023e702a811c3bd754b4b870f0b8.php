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

/* vendor/confirm_delete.html.twig */
class __TwigTemplate_07b4e08cb6f60854da95f6d825c4cf32 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/confirm_delete.html.twig"));

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

        yield "Confirmer la suppression — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " — Bizcore";
        
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

        yield "SUPPRIMER VENDEUR";
        
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
    .confirm-wrapper {
        max-width: 680px;
        margin: 0 auto;
    }

    /* Header */
    .confirm-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }
    .confirm-header h1 {
        font-size: 20px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }
    .back-link {
        width: 36px; height: 36px; background: #f3f4f6; border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        color: #6b7280; text-decoration: none; font-size: 14px;
        transition: background 0.2s; flex-shrink: 0;
    }
    .back-link:hover { background: #e5e7eb; color: #374151; }

    /* Danger banner */
    .danger-banner {
        background: linear-gradient(135deg, #fef2f2 0%, #fff5f5 100%);
        border: 1px solid #fecaca;
        border-left: 4px solid #ef4444;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }
    .danger-banner .danger-icon {
        width: 44px; height: 44px;
        background: #fee2e2;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        color: #ef4444; font-size: 20px;
        flex-shrink: 0;
    }
    .danger-banner .danger-title {
        font-size: 16px; font-weight: 700; color: #991b1b; margin-bottom: 4px;
    }
    .danger-banner .danger-desc {
        font-size: 13px; color: #7f1d1d; line-height: 1.6;
    }

    /* Vendor info card */
    .vendor-info-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .vendor-avatar {
        width: 52px; height: 52px;
        border-radius: 50%;
        background: linear-gradient(135deg, #20c997, #1ab386);
        display: flex; align-items: center; justify-content: center;
        color: #fff; font-size: 20px; font-weight: 700;
        flex-shrink: 0;
    }
    .vendor-info-card .vname  { font-size: 17px; font-weight: 700; color: #111827; }
    .vendor-info-card .vemail { font-size: 13px; color: #6b7280; margin-top: 2px; }
    .vendor-info-card .vtel   { font-size: 12px; color: #9ca3af; margin-top: 2px; }

    .badge-actif    { background:#d1fae5; color:#065f46; border-radius:20px; padding:4px 12px; font-size:11px; font-weight:700; }
    .badge-inactif  { background:#f3f4f6; color:#374151; border-radius:20px; padding:4px 12px; font-size:11px; font-weight:700; }
    .badge-suspendu { background:#fee2e2; color:#991b1b; border-radius:20px; padding:4px 12px; font-size:11px; font-weight:700; }

    /* Products at risk */
    .products-at-risk {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 28px;
    }
    .products-at-risk .par-title {
        font-size: 13px; font-weight: 700; color: #374151;
        margin-bottom: 14px;
        display: flex; align-items: center; gap: 8px;
    }
    .par-title .count-badge {
        background: #fee2e2; color: #dc2626;
        border-radius: 20px; padding: 2px 10px; font-size: 11px; font-weight: 800;
    }

    .product-row {
        display: flex; align-items: center; gap: 10px;
        padding: 9px 0;
        border-bottom: 1px solid #f3f4f6;
    }
    .product-row:last-child { border-bottom: none; }
    .product-row .prod-icon {
        width: 30px; height: 30px; border-radius: 6px;
        background: #f3f4f6;
        display: flex; align-items: center; justify-content: center;
        color: #9ca3af; font-size: 12px; flex-shrink: 0;
    }
    .product-row .prod-name  { font-size: 13px; font-weight: 600; color: #374151; flex: 1; }
    .product-row .prod-cat   { font-size: 10px; background:#dbeafe; color:#1e40af; border-radius:10px; padding:2px 8px; font-weight:700; text-transform:uppercase; }
    .product-row .prod-price { font-size: 13px; color: #20c997; font-weight: 700; white-space: nowrap; }
    .product-row .prod-stock { font-size: 11px; color: #6b7280; white-space: nowrap; }

    .no-products-msg {
        text-align: center; padding: 20px; color: #9ca3af; font-size: 14px;
    }
    .no-products-msg i { display: block; font-size: 28px; margin-bottom: 8px; color: #d1d5db; }

    /* Cascade warning box */
    .cascade-info {
        background: #fffbeb;
        border: 1px solid #fde68a;
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 12px;
        color: #92400e;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .cascade-info i { color: #f59e0b; margin-top: 2px; flex-shrink: 0; }

    /* Action buttons */
    .action-row {
        display: flex;
        gap: 12px;
        align-items: center;
    }
    .btn-confirm-delete {
        background: #ef4444;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 11px 24px;
        font-size: 14px; font-weight: 700;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        display: inline-flex; align-items: center; gap: 8px;
    }
    .btn-confirm-delete:hover { background: #dc2626; transform: translateY(-1px); }
    .btn-cancel-delete {
        display: inline-flex; align-items: center; gap: 8px;
        background: #f3f4f6; color: #374151;
        border: none; border-radius: 8px;
        padding: 11px 20px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .btn-cancel-delete:hover { background: #e5e7eb; color: #111827; }
</style>

";
        // line 172
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 179
        yield "
<div class=\"confirm-wrapper\">

    ";
        // line 183
        yield "    <div class=\"confirm-header\">
        <a href=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, false, 184)]), "html", null, true);
        yield "\" class=\"back-link\" title=\"Annuler\">
            <i class=\"fas fa-arrow-left\"></i>
        </a>
        <h1><i class=\"fas fa-trash me-2\" style=\"color:#ef4444\"></i>Confirmer la suppression</h1>
    </div>

    ";
        // line 191
        yield "    <div class=\"danger-banner\">
        <div class=\"danger-icon\"><i class=\"fas fa-exclamation-triangle\"></i></div>
        <div>
            <div class=\"danger-title\">Action irréversible</div>
            <div class=\"danger-desc\">
                Vous êtes sur le point de supprimer définitivement le vendeur
                <strong>« ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 197, $this->source); })()), "nom", [], "any", false, false, false, 197), "html", null, true);
        yield " »</strong>.
                Cette action ne peut pas être annulée.
                ";
        // line 199
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 199, $this->source); })()), "products", [], "any", false, false, false, 199)) > 0)) {
            // line 200
            yield "                    Les <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 200, $this->source); })()), "products", [], "any", false, false, false, 200)), "html", null, true);
            yield " produit";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 200, $this->source); })()), "products", [], "any", false, false, false, 200)) > 1)) ? ("s") : (""));
            yield "</strong>
                    ci-dessous seront <strong>automatiquement supprimés</strong> de votre catalogue,
                    car ils appartiennent exclusivement à ce vendeur.
                ";
        }
        // line 204
        yield "            </div>
        </div>
    </div>

    ";
        // line 209
        yield "    <div class=\"vendor-info-card\">
        <div class=\"vendor-avatar\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 210, $this->source); })()), "nom", [], "any", false, false, false, 210), 0, 1)), "html", null, true);
        yield "</div>
        <div style=\"flex:1;\">
            <div class=\"vname\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 212, $this->source); })()), "nom", [], "any", false, false, false, 212), "html", null, true);
        yield "</div>
            <div class=\"vemail\"><i class=\"fas fa-envelope me-1\" style=\"color:#9ca3af\"></i>";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 213, $this->source); })()), "email", [], "any", false, false, false, 213), "html", null, true);
        yield "</div>
            ";
        // line 214
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 214, $this->source); })()), "telephone", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "                <div class=\"vtel\"><i class=\"fas fa-phone me-1\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 215, $this->source); })()), "telephone", [], "any", false, false, false, 215), "html", null, true);
            yield "</div>
            ";
        }
        // line 217
        yield "        </div>
        <span class=\"badge-";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 218, $this->source); })()), "statut", [], "any", false, false, false, 218), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 218, $this->source); })()), "statut", [], "any", false, false, false, 218)), "html", null, true);
        yield "</span>
    </div>

    ";
        // line 222
        yield "    <div class=\"products-at-risk\">
        <div class=\"par-title\">
            <i class=\"fas fa-boxes\" style=\"color:#f59e0b;\"></i>
            Produits associés qui seront affectés
            <span class=\"count-badge\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 226, $this->source); })()), "products", [], "any", false, false, false, 226)), "html", null, true);
        yield "</span>
        </div>

        ";
        // line 229
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 229, $this->source); })()), "products", [], "any", false, false, false, 229))) {
            // line 230
            yield "            <div class=\"no-products-msg\">
                <i class=\"fas fa-box-open\"></i>
                Aucun produit associé — la suppression n'affectera aucun produit.
            </div>
        ";
        } else {
            // line 235
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 235, $this->source); })()), "products", [], "any", false, false, false, 235));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 236
                yield "                <div class=\"product-row\">
                    <div class=\"prod-icon\"><i class=\"fas fa-box\"></i></div>
                    <span class=\"prod-name\">";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nomProduit", [], "any", false, false, false, 238), "html", null, true);
                yield "</span>
                    ";
                // line 239
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 240
                    yield "                        <span class=\"prod-cat\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "categorie", [], "any", false, false, false, 240), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 242
                yield "                    <span class=\"prod-stock\">Stock : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockDisponible", [], "any", false, false, false, 242), "html", null, true);
                yield "</span>
                    <span class=\"prod-price\">";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 243), "html", null, true);
                yield " TND</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            yield "        ";
        }
        // line 247
        yield "    </div>

    ";
        // line 250
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 250, $this->source); })()), "products", [], "any", false, false, false, 250)) > 0)) {
            // line 251
            yield "    <div class=\"cascade-info\" style=\"background:#fee2e2; border-color:#fecaca; color:#991b1b;\">
        <i class=\"fas fa-exclamation-triangle mt-1\" style=\"color:#ef4444;\"></i>
        <span>
            <strong>Attention concerning les produits associés :</strong><br>
            Contrairement à une simple dissociation, tous les produits liés à ce vendeur <strong>seront définitivement supprimés</strong> de votre catalogue en même temps que le vendeur. 
            Cette action est globale et irréversible.
        </span>
    </div>
    ";
        }
        // line 260
        yield "
    ";
        // line 262
        yield "    <div class=\"action-row\">
        <form method=\"POST\" action=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 263, $this->source); })()), "id", [], "any", false, false, false, 263)]), "html", null, true);
        yield "\" id=\"delete-form\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_vendor_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 264, $this->source); })()), "id", [], "any", false, false, false, 264))), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"btn-confirm-delete\" id=\"btn-confirm-delete\"
                    onclick=\"return confirmDelete(this)\">
                <i class=\"fas fa-trash\"></i>
                Oui, supprimer définitivement
            </button>
        </form>
        <a href=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271)]), "html", null, true);
        yield "\" class=\"btn-cancel-delete\" id=\"btn-cancel-delete\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 173
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
        yield "\">Vendeurs</a>
    <span class=\"sep\">/</span>
    <a href=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 175, $this->source); })()), "nom", [], "any", false, false, false, 175), "html", null, true);
        yield "</a>
    <span class=\"sep\">/</span>
    <span class=\"current\">SUPPRIMER</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 280
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function confirmDelete(btn) {
    // Utiliser setTimeout permet au navigateur de valider la soumission du formulaire
    // avant de désactiver le bouton, sinon la requête n'est pas envoyée !
    setTimeout(function() {
        btn.disabled = true;
        btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Suppression…';
    }, 10);
    return true;
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
        return "vendor/confirm_delete.html.twig";
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
        return array (  510 => 280,  500 => 279,  486 => 175,  480 => 173,  470 => 172,  455 => 271,  445 => 264,  441 => 263,  438 => 262,  435 => 260,  424 => 251,  421 => 250,  417 => 247,  414 => 246,  405 => 243,  400 => 242,  394 => 240,  392 => 239,  388 => 238,  384 => 236,  379 => 235,  372 => 230,  370 => 229,  364 => 226,  358 => 222,  350 => 218,  347 => 217,  341 => 215,  339 => 214,  335 => 213,  331 => 212,  326 => 210,  323 => 209,  317 => 204,  307 => 200,  305 => 199,  300 => 197,  292 => 191,  283 => 184,  280 => 183,  275 => 179,  273 => 172,  107 => 8,  97 => 7,  80 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Confirmer la suppression — {{ vendor.nom }} — Bizcore{% endblock %}

{% block page_title %}SUPPRIMER VENDEUR{% endblock %}

{% block body %}
<style>
    .confirm-wrapper {
        max-width: 680px;
        margin: 0 auto;
    }

    /* Header */
    .confirm-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }
    .confirm-header h1 {
        font-size: 20px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }
    .back-link {
        width: 36px; height: 36px; background: #f3f4f6; border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        color: #6b7280; text-decoration: none; font-size: 14px;
        transition: background 0.2s; flex-shrink: 0;
    }
    .back-link:hover { background: #e5e7eb; color: #374151; }

    /* Danger banner */
    .danger-banner {
        background: linear-gradient(135deg, #fef2f2 0%, #fff5f5 100%);
        border: 1px solid #fecaca;
        border-left: 4px solid #ef4444;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }
    .danger-banner .danger-icon {
        width: 44px; height: 44px;
        background: #fee2e2;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        color: #ef4444; font-size: 20px;
        flex-shrink: 0;
    }
    .danger-banner .danger-title {
        font-size: 16px; font-weight: 700; color: #991b1b; margin-bottom: 4px;
    }
    .danger-banner .danger-desc {
        font-size: 13px; color: #7f1d1d; line-height: 1.6;
    }

    /* Vendor info card */
    .vendor-info-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .vendor-avatar {
        width: 52px; height: 52px;
        border-radius: 50%;
        background: linear-gradient(135deg, #20c997, #1ab386);
        display: flex; align-items: center; justify-content: center;
        color: #fff; font-size: 20px; font-weight: 700;
        flex-shrink: 0;
    }
    .vendor-info-card .vname  { font-size: 17px; font-weight: 700; color: #111827; }
    .vendor-info-card .vemail { font-size: 13px; color: #6b7280; margin-top: 2px; }
    .vendor-info-card .vtel   { font-size: 12px; color: #9ca3af; margin-top: 2px; }

    .badge-actif    { background:#d1fae5; color:#065f46; border-radius:20px; padding:4px 12px; font-size:11px; font-weight:700; }
    .badge-inactif  { background:#f3f4f6; color:#374151; border-radius:20px; padding:4px 12px; font-size:11px; font-weight:700; }
    .badge-suspendu { background:#fee2e2; color:#991b1b; border-radius:20px; padding:4px 12px; font-size:11px; font-weight:700; }

    /* Products at risk */
    .products-at-risk {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px 24px;
        margin-bottom: 28px;
    }
    .products-at-risk .par-title {
        font-size: 13px; font-weight: 700; color: #374151;
        margin-bottom: 14px;
        display: flex; align-items: center; gap: 8px;
    }
    .par-title .count-badge {
        background: #fee2e2; color: #dc2626;
        border-radius: 20px; padding: 2px 10px; font-size: 11px; font-weight: 800;
    }

    .product-row {
        display: flex; align-items: center; gap: 10px;
        padding: 9px 0;
        border-bottom: 1px solid #f3f4f6;
    }
    .product-row:last-child { border-bottom: none; }
    .product-row .prod-icon {
        width: 30px; height: 30px; border-radius: 6px;
        background: #f3f4f6;
        display: flex; align-items: center; justify-content: center;
        color: #9ca3af; font-size: 12px; flex-shrink: 0;
    }
    .product-row .prod-name  { font-size: 13px; font-weight: 600; color: #374151; flex: 1; }
    .product-row .prod-cat   { font-size: 10px; background:#dbeafe; color:#1e40af; border-radius:10px; padding:2px 8px; font-weight:700; text-transform:uppercase; }
    .product-row .prod-price { font-size: 13px; color: #20c997; font-weight: 700; white-space: nowrap; }
    .product-row .prod-stock { font-size: 11px; color: #6b7280; white-space: nowrap; }

    .no-products-msg {
        text-align: center; padding: 20px; color: #9ca3af; font-size: 14px;
    }
    .no-products-msg i { display: block; font-size: 28px; margin-bottom: 8px; color: #d1d5db; }

    /* Cascade warning box */
    .cascade-info {
        background: #fffbeb;
        border: 1px solid #fde68a;
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 12px;
        color: #92400e;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }
    .cascade-info i { color: #f59e0b; margin-top: 2px; flex-shrink: 0; }

    /* Action buttons */
    .action-row {
        display: flex;
        gap: 12px;
        align-items: center;
    }
    .btn-confirm-delete {
        background: #ef4444;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 11px 24px;
        font-size: 14px; font-weight: 700;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        display: inline-flex; align-items: center; gap: 8px;
    }
    .btn-confirm-delete:hover { background: #dc2626; transform: translateY(-1px); }
    .btn-cancel-delete {
        display: inline-flex; align-items: center; gap: 8px;
        background: #f3f4f6; color: #374151;
        border: none; border-radius: 8px;
        padding: 11px 20px; font-size: 13px; font-weight: 600;
        text-decoration: none; transition: background 0.2s;
    }
    .btn-cancel-delete:hover { background: #e5e7eb; color: #111827; }
</style>

{% block breadcrumb %}
    <a href=\"{{ path('vendor_index') }}\">Vendeurs</a>
    <span class=\"sep\">/</span>
    <a href=\"{{ path('vendor_show', {id: vendor.id}) }}\">{{ vendor.nom }}</a>
    <span class=\"sep\">/</span>
    <span class=\"current\">SUPPRIMER</span>
{% endblock %}

<div class=\"confirm-wrapper\">

    {# ── Header ── #}
    <div class=\"confirm-header\">
        <a href=\"{{ path('vendor_show', {id: vendor.id}) }}\" class=\"back-link\" title=\"Annuler\">
            <i class=\"fas fa-arrow-left\"></i>
        </a>
        <h1><i class=\"fas fa-trash me-2\" style=\"color:#ef4444\"></i>Confirmer la suppression</h1>
    </div>

    {# ── Danger banner ── #}
    <div class=\"danger-banner\">
        <div class=\"danger-icon\"><i class=\"fas fa-exclamation-triangle\"></i></div>
        <div>
            <div class=\"danger-title\">Action irréversible</div>
            <div class=\"danger-desc\">
                Vous êtes sur le point de supprimer définitivement le vendeur
                <strong>« {{ vendor.nom }} »</strong>.
                Cette action ne peut pas être annulée.
                {% if vendor.products|length > 0 %}
                    Les <strong>{{ vendor.products|length }} produit{{ vendor.products|length > 1 ? 's' : '' }}</strong>
                    ci-dessous seront <strong>automatiquement supprimés</strong> de votre catalogue,
                    car ils appartiennent exclusivement à ce vendeur.
                {% endif %}
            </div>
        </div>
    </div>

    {# ── Vendor info ── #}
    <div class=\"vendor-info-card\">
        <div class=\"vendor-avatar\">{{ vendor.nom|slice(0,1)|upper }}</div>
        <div style=\"flex:1;\">
            <div class=\"vname\">{{ vendor.nom }}</div>
            <div class=\"vemail\"><i class=\"fas fa-envelope me-1\" style=\"color:#9ca3af\"></i>{{ vendor.email }}</div>
            {% if vendor.telephone %}
                <div class=\"vtel\"><i class=\"fas fa-phone me-1\"></i>{{ vendor.telephone }}</div>
            {% endif %}
        </div>
        <span class=\"badge-{{ vendor.statut }}\">{{ vendor.statut|capitalize }}</span>
    </div>

    {# ── Produits qui seront affectés ── #}
    <div class=\"products-at-risk\">
        <div class=\"par-title\">
            <i class=\"fas fa-boxes\" style=\"color:#f59e0b;\"></i>
            Produits associés qui seront affectés
            <span class=\"count-badge\">{{ vendor.products|length }}</span>
        </div>

        {% if vendor.products is empty %}
            <div class=\"no-products-msg\">
                <i class=\"fas fa-box-open\"></i>
                Aucun produit associé — la suppression n'affectera aucun produit.
            </div>
        {% else %}
            {% for product in vendor.products %}
                <div class=\"product-row\">
                    <div class=\"prod-icon\"><i class=\"fas fa-box\"></i></div>
                    <span class=\"prod-name\">{{ product.nomProduit }}</span>
                    {% if product.categorie %}
                        <span class=\"prod-cat\">{{ product.categorie }}</span>
                    {% endif %}
                    <span class=\"prod-stock\">Stock : {{ product.stockDisponible }}</span>
                    <span class=\"prod-price\">{{ product.prix }} TND</span>
                </div>
            {% endfor %}
        {% endif %}
    </div>

    {# ── Info CASCADE ── #}
    {% if vendor.products|length > 0 %}
    <div class=\"cascade-info\" style=\"background:#fee2e2; border-color:#fecaca; color:#991b1b;\">
        <i class=\"fas fa-exclamation-triangle mt-1\" style=\"color:#ef4444;\"></i>
        <span>
            <strong>Attention concerning les produits associés :</strong><br>
            Contrairement à une simple dissociation, tous les produits liés à ce vendeur <strong>seront définitivement supprimés</strong> de votre catalogue en même temps que le vendeur. 
            Cette action est globale et irréversible.
        </span>
    </div>
    {% endif %}

    {# ── Boutons d'action ── #}
    <div class=\"action-row\">
        <form method=\"POST\" action=\"{{ path('vendor_delete', {id: vendor.id}) }}\" id=\"delete-form\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_vendor_' ~ vendor.id) }}\">
            <button type=\"submit\" class=\"btn-confirm-delete\" id=\"btn-confirm-delete\"
                    onclick=\"return confirmDelete(this)\">
                <i class=\"fas fa-trash\"></i>
                Oui, supprimer définitivement
            </button>
        </form>
        <a href=\"{{ path('vendor_show', {id: vendor.id}) }}\" class=\"btn-cancel-delete\" id=\"btn-cancel-delete\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>

</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function confirmDelete(btn) {
    // Utiliser setTimeout permet au navigateur de valider la soumission du formulaire
    // avant de désactiver le bouton, sinon la requête n'est pas envoyée !
    setTimeout(function() {
        btn.disabled = true;
        btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Suppression…';
    }, 10);
    return true;
}
</script>
{% endblock %}
", "vendor/confirm_delete.html.twig", "C:\\Users\\dhiaj_onolvpc\\Desktop\\FINAL\\FINAL\\templates\\vendor\\confirm_delete.html.twig");
    }
}
