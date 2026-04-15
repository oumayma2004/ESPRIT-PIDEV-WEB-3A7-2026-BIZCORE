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

/* admin/product_form.html.twig */
class __TwigTemplate_961d32bac7d10bd04c87c1100607c6ad extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 2, $this->source); })()) == "add")) ? ("Ajouter un produit") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "nomProduit", [], "any", false, false, false, 2)), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    ";
        // line 7
        yield "    <div class=\"bc-main\">
        <header class=\"bc-topbar\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"btn-icon\" title=\"Retour\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">
                ";
        // line 11
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 11, $this->source); })()) == "add")) ? ("➕ Ajouter un produit") : ("✏️ Modifier le produit"));
        yield "
            </span>
        </header>

        <div class=\"bc-content\" style=\"max-width:760px;\">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 18
            yield "                <div class=\"alert alert-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 21
            yield "                <div class=\"alert alert-danger\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield " <button class=\"alert-close\">×</button></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
            <div class=\"bc-card\">
                <div class=\"bc-card-title\">
                    ";
        // line 26
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 26, $this->source); })()) == "add")) ? ("Nouveau Produit") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier : " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "nomProduit", [], "any", false, false, false, 26)), "html", null, true)));
        yield "
                </div>
                <div class=\"bc-card-sub\">
                    ";
        // line 29
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 29, $this->source); })()) == "add")) ? ("Remplissez les informations du nouveau produit.") : ("Mettez à jour les informations du produit."));
        yield "
                </div>

                <form method=\"post\"
                      action=\"";
        // line 33
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 33, $this->source); })()) == "add")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "idProduit", [], "any", false, false, false, 33)]), "html", null, true)));
        yield "\"
                      enctype=\"multipart/form-data\"
                      novalidate
                      id=\"productForm\">

                    ";
        // line 39
        yield "                    ";
        if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 39, $this->source); })()) == "edit") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "imageUrl", [], "any", false, false, false, 39))) {
            // line 40
            yield "                    <div style=\"margin-bottom:20px;text-align:center;\">
                        <img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "imageUrl", [], "any", false, false, false, 41), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "nomProduit", [], "any", false, false, false, 41), "html", null, true);
            yield "\"
                             style=\"max-height:140px;border-radius:var(--radius-md);border:2px solid var(--bc-border);object-fit:cover;\">
                        <p style=\"font-size:12px;color:var(--bc-text-light);margin-top:6px;\">Image actuelle</p>
                    </div>
                    ";
        }
        // line 46
        yield "
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"nomProduit\">Nom du produit *</label>
                            <input class=\"form-control\" type=\"text\" id=\"nomProduit\" name=\"nomProduit\"
                                   placeholder=\"Ex: Formation Python\"
                                   value=\"";
        // line 52
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 52, $this->source); })()) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "nomProduit", [], "any", false, false, false, 52), "html", null, true)) : (""));
        yield "\"
                                   required>
                            <small style=\"color:var(--bc-text-light);font-size:11px;\">Commence par une majuscule</small>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"prix\">Prix (€) *</label>
                            <input class=\"form-control\" type=\"text\" id=\"prix\" name=\"prix\"
                                   placeholder=\"Ex: 29.99\"
                                   value=\"";
        // line 60
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 60, $this->source); })()) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "prix", [], "any", false, false, false, 60), "html", null, true)) : (""));
        yield "\"
                                   required>
                            <small style=\"color:var(--bc-text-light);font-size:11px;\">Format : XX.XX (ex: 25.00)</small>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"description\">Description *</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\"
                                  placeholder=\"Décrivez le produit (minimum 25 caractères)...\"
                                  rows=\"4\" required>";
        // line 70
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 70, $this->source); })()) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "html", null, true)) : (""));
        yield "</textarea>
                        <small style=\"color:var(--bc-text-light);font-size:11px;\">Minimum 25 caractères</small>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"categorie\">Catégorie *</label>
                            <select class=\"form-control\" id=\"categorie\" name=\"categorie\" required>
                                <option value=\"\">-- Sélectionner --</option>
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cats"]) || array_key_exists("cats", $context) ? $context["cats"] : (function () { throw new RuntimeError('Variable "cats" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 80
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\"
                                        ";
            // line 81
            if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 81, $this->source); })()) == "edit") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "categorie", [], "any", false, false, false, 81) == $context["cat"]))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"statut\">Statut *</label>
                            <select class=\"form-control\" id=\"statut\" name=\"statut\" required>
                                <option value=\"\">-- Sélectionner --</option>
                                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 92
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["s"], "html", null, true);
            yield "\"
                                        ";
            // line 93
            if ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 93, $this->source); })()) == "edit") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "statut", [], "any", false, false, false, 93) == $context["s"]))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["s"], "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"stockDisponible\">Stock disponible</label>
                        <input class=\"form-control\" type=\"number\" id=\"stockDisponible\" name=\"stockDisponible\"
                               min=\"0\" placeholder=\"0\"
                               value=\"";
        // line 105
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 105, $this->source); })()) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 105, $this->source); })()), "stockDisponible", [], "any", false, false, false, 105), "html", null, true)) : ("0"));
        yield "\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"imageFile\">
                            Image du produit ";
        // line 110
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 110, $this->source); })()) == "add")) ? ("*") : ("(laisser vide pour conserver)"));
        yield "
                        </label>
                        <input class=\"form-control\" type=\"file\" id=\"imageFile\" name=\"imageFile\"
                               accept=\"image/*\"
                               ";
        // line 114
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 114, $this->source); })()) == "add")) ? ("required") : (""));
        yield "
                               onchange=\"previewImage(this)\">
                        <div id=\"imgPreview\" style=\"margin-top:10px;display:none;\">
                            <img id=\"previewImg\" src=\"\" alt=\"Aperçu\"
                                 style=\"max-height:120px;border-radius:var(--radius-sm);border:2px dashed var(--bc-teal);object-fit:cover;\">
                        </div>
                    </div>

                    <div class=\"d-flex gap-12 mt-24\">
                        <button type=\"submit\" class=\"btn btn-primary\" style=\"padding:12px 32px;\">
                            ";
        // line 124
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 124, $this->source); })()) == "add")) ? ("✅ Ajouter le produit") : ("💾 Enregistrer les modifications"));
        yield "
                        </button>
                        <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"btn btn-secondary\" style=\"padding:12px 32px;\">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('imgPreview').style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

/* Client-side validation */
document.getElementById('productForm').addEventListener('submit', function(e) {
    var nom    = document.getElementById('nomProduit').value.trim();
    var desc   = document.getElementById('description').value.trim();
    var prix   = document.getElementById('prix').value.trim();
    var errors = [];

    if (!/^[A-ZÀÂÇÉÈÊËÎÏÔÙÛÜŸÆŒ]/.test(nom) || nom.length < 2)
        errors.push('Le nom doit commencer par une majuscule.');
    if (desc.length < 25)
        errors.push('La description doit contenir au moins 25 caractères (actuellement ' + desc.length + ').');
    if (!/^\\d+\\.\\d{2}\$/.test(prix) || parseFloat(prix) <= 0)
        errors.push('Le prix doit être au format XX.XX (ex: 25.00).');

    if (errors.length > 0) {
        e.preventDefault();
        var alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger';
        alertDiv.innerHTML = errors.map(function(err) { return '⚠ ' + err; }).join('<br>') +
                             ' <button class=\"alert-close\" onclick=\"this.parentElement.remove()\">×</button>';
        document.querySelector('.bc-card').prepend(alertDiv);
        window.scrollTo(0, 0);
    }
});
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
        return "admin/product_form.html.twig";
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
        return array (  348 => 139,  338 => 138,  319 => 126,  314 => 124,  301 => 114,  294 => 110,  286 => 105,  276 => 97,  267 => 94,  261 => 93,  256 => 92,  252 => 91,  244 => 85,  235 => 82,  229 => 81,  224 => 80,  220 => 79,  208 => 70,  195 => 60,  184 => 52,  176 => 46,  166 => 41,  163 => 40,  160 => 39,  152 => 33,  145 => 29,  139 => 26,  134 => 23,  125 => 21,  120 => 20,  111 => 18,  107 => 17,  98 => 11,  93 => 9,  89 => 7,  86 => 5,  76 => 4,  59 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ mode == 'add' ? 'Ajouter un produit' : 'Modifier ' ~ product.nomProduit }}{% endblock %}

{% block body %}
<style>#content { padding: 0 !important; background: var(--bc-bg); }</style>
    {# MAIN #}
    <div class=\"bc-main\">
        <header class=\"bc-topbar\">
            <a href=\"{{ path('admin_dashboard') }}\" class=\"btn-icon\" title=\"Retour\" style=\"font-size:18px;margin-right:4px;\">←</a>
            <span class=\"bc-topbar-title\">
                {{ mode == 'add' ? '➕ Ajouter un produit' : '✏️ Modifier le produit' }}
            </span>
        </header>

        <div class=\"bc-content\" style=\"max-width:760px;\">

            {% for msg in app.flashes('success') %}
                <div class=\"alert alert-success\">✅ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"alert alert-danger\">⚠ {{ msg }} <button class=\"alert-close\">×</button></div>
            {% endfor %}

            <div class=\"bc-card\">
                <div class=\"bc-card-title\">
                    {{ mode == 'add' ? 'Nouveau Produit' : 'Modifier : ' ~ product.nomProduit }}
                </div>
                <div class=\"bc-card-sub\">
                    {{ mode == 'add' ? 'Remplissez les informations du nouveau produit.' : 'Mettez à jour les informations du produit.' }}
                </div>

                <form method=\"post\"
                      action=\"{{ mode == 'add' ? path('product_add') : path('product_edit', {id: product.idProduit}) }}\"
                      enctype=\"multipart/form-data\"
                      novalidate
                      id=\"productForm\">

                    {# Image actuelle #}
                    {% if mode == 'edit' and product.imageUrl %}
                    <div style=\"margin-bottom:20px;text-align:center;\">
                        <img src=\"{{ product.imageUrl }}\" alt=\"{{ product.nomProduit }}\"
                             style=\"max-height:140px;border-radius:var(--radius-md);border:2px solid var(--bc-border);object-fit:cover;\">
                        <p style=\"font-size:12px;color:var(--bc-text-light);margin-top:6px;\">Image actuelle</p>
                    </div>
                    {% endif %}

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"nomProduit\">Nom du produit *</label>
                            <input class=\"form-control\" type=\"text\" id=\"nomProduit\" name=\"nomProduit\"
                                   placeholder=\"Ex: Formation Python\"
                                   value=\"{{ mode == 'edit' ? product.nomProduit : '' }}\"
                                   required>
                            <small style=\"color:var(--bc-text-light);font-size:11px;\">Commence par une majuscule</small>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"prix\">Prix (€) *</label>
                            <input class=\"form-control\" type=\"text\" id=\"prix\" name=\"prix\"
                                   placeholder=\"Ex: 29.99\"
                                   value=\"{{ mode == 'edit' ? product.prix : '' }}\"
                                   required>
                            <small style=\"color:var(--bc-text-light);font-size:11px;\">Format : XX.XX (ex: 25.00)</small>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"description\">Description *</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\"
                                  placeholder=\"Décrivez le produit (minimum 25 caractères)...\"
                                  rows=\"4\" required>{{ mode == 'edit' ? product.description : '' }}</textarea>
                        <small style=\"color:var(--bc-text-light);font-size:11px;\">Minimum 25 caractères</small>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"categorie\">Catégorie *</label>
                            <select class=\"form-control\" id=\"categorie\" name=\"categorie\" required>
                                <option value=\"\">-- Sélectionner --</option>
                                {% for cat in cats %}
                                    <option value=\"{{ cat }}\"
                                        {% if mode == 'edit' and product.categorie == cat %}selected{% endif %}>
                                        {{ cat }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"statut\">Statut *</label>
                            <select class=\"form-control\" id=\"statut\" name=\"statut\" required>
                                <option value=\"\">-- Sélectionner --</option>
                                {% for s in statuts %}
                                    <option value=\"{{ s }}\"
                                        {% if mode == 'edit' and product.statut == s %}selected{% endif %}>
                                        {{ s }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"stockDisponible\">Stock disponible</label>
                        <input class=\"form-control\" type=\"number\" id=\"stockDisponible\" name=\"stockDisponible\"
                               min=\"0\" placeholder=\"0\"
                               value=\"{{ mode == 'edit' ? product.stockDisponible : '0' }}\">
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"imageFile\">
                            Image du produit {{ mode == 'add' ? '*' : '(laisser vide pour conserver)' }}
                        </label>
                        <input class=\"form-control\" type=\"file\" id=\"imageFile\" name=\"imageFile\"
                               accept=\"image/*\"
                               {{ mode == 'add' ? 'required' : '' }}
                               onchange=\"previewImage(this)\">
                        <div id=\"imgPreview\" style=\"margin-top:10px;display:none;\">
                            <img id=\"previewImg\" src=\"\" alt=\"Aperçu\"
                                 style=\"max-height:120px;border-radius:var(--radius-sm);border:2px dashed var(--bc-teal);object-fit:cover;\">
                        </div>
                    </div>

                    <div class=\"d-flex gap-12 mt-24\">
                        <button type=\"submit\" class=\"btn btn-primary\" style=\"padding:12px 32px;\">
                            {{ mode == 'add' ? '✅ Ajouter le produit' : '💾 Enregistrer les modifications' }}
                        </button>
                        <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-secondary\" style=\"padding:12px 32px;\">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('imgPreview').style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

/* Client-side validation */
document.getElementById('productForm').addEventListener('submit', function(e) {
    var nom    = document.getElementById('nomProduit').value.trim();
    var desc   = document.getElementById('description').value.trim();
    var prix   = document.getElementById('prix').value.trim();
    var errors = [];

    if (!/^[A-ZÀÂÇÉÈÊËÎÏÔÙÛÜŸÆŒ]/.test(nom) || nom.length < 2)
        errors.push('Le nom doit commencer par une majuscule.');
    if (desc.length < 25)
        errors.push('La description doit contenir au moins 25 caractères (actuellement ' + desc.length + ').');
    if (!/^\\d+\\.\\d{2}\$/.test(prix) || parseFloat(prix) <= 0)
        errors.push('Le prix doit être au format XX.XX (ex: 25.00).');

    if (errors.length > 0) {
        e.preventDefault();
        var alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger';
        alertDiv.innerHTML = errors.map(function(err) { return '⚠ ' + err; }).join('<br>') +
                             ' <button class=\"alert-close\" onclick=\"this.parentElement.remove()\">×</button>';
        document.querySelector('.bc-card').prepend(alertDiv);
        window.scrollTo(0, 0);
    }
});
</script>
{% endblock %}
", "admin/product_form.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\admin\\product_form.html.twig");
    }
}
