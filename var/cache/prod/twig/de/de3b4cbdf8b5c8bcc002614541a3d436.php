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
class __TwigTemplate_83fe08a84bc653242ecabb4ee041050f extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (((($context["mode"] ?? null) == "add")) ? ("Ajouter un produit") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier " . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "nomProduit", [], "any", false, false, false, 2)), "html", null, true)));
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield (((($context["mode"] ?? null) == "add")) ? ("➕ Ajouter un produit") : ("✏️ Modifier le produit"));
        yield "
            </span>
        </header>

        <div class=\"bc-content\" style=\"max-width:760px;\">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 17));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 20));
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
        yield (((($context["mode"] ?? null) == "add")) ? ("Nouveau Produit") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier : " . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "nomProduit", [], "any", false, false, false, 26)), "html", null, true)));
        yield "
                </div>
                <div class=\"bc-card-sub\">
                    ";
        // line 29
        yield (((($context["mode"] ?? null) == "add")) ? ("Remplissez les informations du nouveau produit.") : ("Mettez à jour les informations du produit."));
        yield "
                </div>

                <form method=\"post\"
                      action=\"";
        // line 33
        yield (((($context["mode"] ?? null) == "add")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add")) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "idProduit", [], "any", false, false, false, 33)]), "html", null, true)));
        yield "\"
                      enctype=\"multipart/form-data\"
                      novalidate
                      id=\"productForm\">

                    ";
        // line 39
        yield "                    ";
        if (((($context["mode"] ?? null) == "edit") && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageUrl", [], "any", false, false, false, 39))) {
            // line 40
            yield "                    <div style=\"margin-bottom:20px;text-align:center;\">
                        <img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "imageUrl", [], "any", false, false, false, 41), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "nomProduit", [], "any", false, false, false, 41), "html", null, true);
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
        yield (((($context["mode"] ?? null) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "nomProduit", [], "any", false, false, false, 52), "html", null, true)) : (""));
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
        yield (((($context["mode"] ?? null) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "prix", [], "any", false, false, false, 60), "html", null, true)) : (""));
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
        yield (((($context["mode"] ?? null) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 70), "html", null, true)) : (""));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 80
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
            yield "\"
                                        ";
            // line 81
            if (((($context["mode"] ?? null) == "edit") && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "categorie", [], "any", false, false, false, 81) == $context["cat"]))) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statuts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 92
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["s"], "html", null, true);
            yield "\"
                                        ";
            // line 93
            if (((($context["mode"] ?? null) == "edit") && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "statut", [], "any", false, false, false, 93) == $context["s"]))) {
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

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"stockDisponible\">Stock disponible</label>
                            <input class=\"form-control\" type=\"number\" id=\"stockDisponible\" name=\"stockDisponible\"
                                   min=\"0\" placeholder=\"0\"
                                   value=\"";
        // line 106
        yield (((($context["mode"] ?? null) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockDisponible", [], "any", false, false, false, 106), "html", null, true)) : ("0"));
        yield "\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"vendor_id\">Vendeur</label>
                            <select class=\"form-control\" id=\"vendor_id\" name=\"vendor_id\">
                                <option value=\"\">-- Aucun vendeur --</option>
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vendors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
            // line 113
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 113), "html", null, true);
            yield "\"
                                        ";
            // line 114
            if ((((($context["mode"] ?? null) == "edit") && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "vendeur", [], "any", false, false, false, 114)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "vendeur", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114) == CoreExtension::getAttribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 114)))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vendor"], "nom", [], "any", false, false, false, 115), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vendor'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                            </select>
                            <small style=\"color:var(--bc-text-light);font-size:11px;\">(Optionnel)</small>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"imageFile\">
                            Image du produit ";
        // line 125
        yield (((($context["mode"] ?? null) == "add")) ? ("*") : ("(laisser vide pour conserver)"));
        yield "
                        </label>
                        <input class=\"form-control\" type=\"file\" id=\"imageFile\" name=\"imageFile\"
                               accept=\"image/*\"
                               ";
        // line 129
        yield (((($context["mode"] ?? null) == "add")) ? ("required") : (""));
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
        // line 139
        yield (((($context["mode"] ?? null) == "add")) ? ("✅ Ajouter le produit") : ("💾 Enregistrer les modifications"));
        yield "
                        </button>
                        <a href=\"";
        // line 141
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
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
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
        return array (  362 => 154,  355 => 153,  339 => 141,  334 => 139,  321 => 129,  314 => 125,  305 => 118,  296 => 115,  290 => 114,  285 => 113,  281 => 112,  272 => 106,  261 => 97,  252 => 94,  246 => 93,  241 => 92,  237 => 91,  229 => 85,  220 => 82,  214 => 81,  209 => 80,  205 => 79,  193 => 70,  180 => 60,  169 => 52,  161 => 46,  151 => 41,  148 => 40,  145 => 39,  137 => 33,  130 => 29,  124 => 26,  119 => 23,  110 => 21,  105 => 20,  96 => 18,  92 => 17,  83 => 11,  78 => 9,  74 => 7,  71 => 5,  64 => 4,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product_form.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\product_form.html.twig");
    }
}
