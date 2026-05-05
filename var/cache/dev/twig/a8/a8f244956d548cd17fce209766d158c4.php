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
class __TwigTemplate_1c9a36e691562d878a7320ac28624bfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 2, $this->source); })()) == "add")) ? ("Ajouter un produit") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "nomProduit", [], "any", false, false, false, 2)), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"stockDisponible\">Stock disponible</label>
                            <input class=\"form-control\" type=\"number\" id=\"stockDisponible\" name=\"stockDisponible\"
                                   min=\"0\" placeholder=\"0\"
                                   value=\"";
        // line 106
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 106, $this->source); })()) == "edit")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 106, $this->source); })()), "stockDisponible", [], "any", false, false, false, 106), "html", null, true)) : ("0"));
        yield "\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"vendor_id\">Vendeur</label>
                            <select class=\"form-control\" id=\"vendor_id\" name=\"vendor_id\">
                                <option value=\"\">-- Aucun vendeur --</option>
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vendors"]) || array_key_exists("vendors", $context) ? $context["vendors"] : (function () { throw new RuntimeError('Variable "vendors" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
            // line 113
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 113), "html", null, true);
            yield "\"
                                        ";
            // line 114
            if (((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 114, $this->source); })()) == "edit") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 114, $this->source); })()), "vendeur", [], "any", false, false, false, 114)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 114, $this->source); })()), "vendeur", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114) == CoreExtension::getAttribute($this->env, $this->source, $context["vendor"], "id", [], "any", false, false, false, 114)))) {
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
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 125, $this->source); })()) == "add")) ? ("*") : ("(laisser vide pour conserver)"));
        yield "
                        </label>
                        <input class=\"form-control\" type=\"file\" id=\"imageFile\" name=\"imageFile\"
                               accept=\"image/*\"
                               ";
        // line 129
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 129, $this->source); })()) == "add")) ? ("required") : (""));
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
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 139, $this->source); })()) == "add")) ? ("✅ Ajouter le produit") : ("💾 Enregistrer les modifications"));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  404 => 154,  391 => 153,  369 => 141,  364 => 139,  351 => 129,  344 => 125,  335 => 118,  326 => 115,  320 => 114,  315 => 113,  311 => 112,  302 => 106,  291 => 97,  282 => 94,  276 => 93,  271 => 92,  267 => 91,  259 => 85,  250 => 82,  244 => 81,  239 => 80,  235 => 79,  223 => 70,  210 => 60,  199 => 52,  191 => 46,  181 => 41,  178 => 40,  175 => 39,  167 => 33,  160 => 29,  154 => 26,  149 => 23,  140 => 21,  135 => 20,  126 => 18,  122 => 17,  113 => 11,  108 => 9,  104 => 7,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
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

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"stockDisponible\">Stock disponible</label>
                            <input class=\"form-control\" type=\"number\" id=\"stockDisponible\" name=\"stockDisponible\"
                                   min=\"0\" placeholder=\"0\"
                                   value=\"{{ mode == 'edit' ? product.stockDisponible : '0' }}\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"vendor_id\">Vendeur</label>
                            <select class=\"form-control\" id=\"vendor_id\" name=\"vendor_id\">
                                <option value=\"\">-- Aucun vendeur --</option>
                                {% for vendor in vendors %}
                                    <option value=\"{{ vendor.id }}\"
                                        {% if mode == 'edit' and product.vendeur and product.vendeur.id == vendor.id %}selected{% endif %}>
                                        {{ vendor.nom }}
                                    </option>
                                {% endfor %}
                            </select>
                            <small style=\"color:var(--bc-text-light);font-size:11px;\">(Optionnel)</small>
                        </div>
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
", "admin/product_form.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\product_form.html.twig");
    }
}
