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

/* vendor/form.html.twig */
class __TwigTemplate_73f6a1794a4d9fb6f0019cd75c37ea39 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/form.html.twig"));

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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 3, $this->source); })()) == "new")) ? ("Nouveau vendeur") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3)), "html", null, true)));
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

        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 5, $this->source); })()) == "new")) ? ("NOUVEAU VENDEUR") : ("MODIFIER VENDEUR"));
        
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
    .form-page-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 28px;
    }
    .form-page-header h1 {
        font-size: 20px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }
    .form-page-header .back-link {
        width: 36px; height: 36px;
        background: #f3f4f6;
        border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        color: #6b7280;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.2s;
        flex-shrink: 0;
    }
    .form-page-header .back-link:hover { background: #e5e7eb; color: #374151; }

    .form-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 32px;
        max-width: 680px;
    }

    .form-card .section-title {
        font-size: 12px;
        font-weight: 700;
        color: #9ca3af;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid #f3f4f6;
    }

    .form-card .form-label {
        font-size: 13px;
        font-weight: 600;
        color: #374151;
        margin-bottom: 6px;
    }
    .form-card .form-label .required {
        color: #ef4444;
        margin-left: 3px;
    }
    .form-card .form-control,
    .form-card .form-select {
        font-size: 13px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        padding: 10px 14px;
        color: #111827;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-card .form-control:focus,
    .form-card .form-select:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(32,201,151,.15);
        outline: none;
    }
    .form-card .form-control.is-invalid,
    .form-card .form-select.is-invalid {
        border-color: #ef4444;
    }
    .form-card .invalid-feedback {
        font-size: 12px;
        color: #ef4444;
        margin-top: 5px;
    }
    .form-card .form-text {
        font-size: 11px;
        color: #9ca3af;
        margin-top: 5px;
    }

    .statut-preview {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        margin-top: 8px;
        transition: all 0.2s;
    }
    .preview-actif     { background: #d1fae5; color: #065f46; }
    .preview-inactif   { background: #f3f4f6; color: #374151; }
    .preview-suspendu  { background: #fee2e2; color: #991b1b; }

    .form-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 28px;
        padding-top: 24px;
        border-top: 1px solid #f3f4f6;
    }
    .btn-submit {
        background: var(--accent);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 24px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        display: inline-flex; align-items: center; gap: 8px;
    }
    .btn-submit:hover { background: var(--accent-dark); transform: translateY(-1px); }
    .btn-cancel {
        color: #6b7280;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        padding: 10px 16px;
        border-radius: 8px;
        transition: background 0.2s;
    }
    .btn-cancel:hover { background: #f3f4f6; color: #374151; }
</style>

";
        // line 140
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 145
        yield "
";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "flashes", [], "any", false, false, false, 147));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 148
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 149
                yield "        <div class=\"alert alert-";
                yield ((($context["type"] == "error")) ? ("danger") : ("success"));
                yield " alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
            <i class=\"fas fa-";
                // line 150
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
        // line 155
        yield "
<div class=\"form-page-header\">
    <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
        yield "\" class=\"back-link\" title=\"Retour à la liste\">
        <i class=\"fas fa-arrow-left\"></i>
    </a>
    <h1>
        ";
        // line 161
        if (((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 161, $this->source); })()) == "new")) {
            // line 162
            yield "            <i class=\"fas fa-store me-2\" style=\"color:var(--accent)\"></i>Nouveau vendeur
        ";
        } else {
            // line 164
            yield "            <i class=\"fas fa-pencil-alt me-2\" style=\"color:var(--accent)\"></i>Modifier « ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 164, $this->source); })()), "nom", [], "any", false, false, false, 164), "html", null, true);
            yield " »
        ";
        }
        // line 166
        yield "    </h1>
</div>

<div class=\"form-card\">
    <div class=\"section-title\">
        <i class=\"fas fa-info-circle me-2\"></i>Informations du vendeur
    </div>

    ";
        // line 174
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), 'form_start', ["action" => ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 174, $this->source); })()) == "new")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174)]))), "method" => "POST"]);
        yield "

    ";
        // line 177
        yield "    <div class=\"mb-4\">
        ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "nom", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <span class=\"required\" style=\"color:#ef4444\">*</span>
        ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "nom", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "nom", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "errors", [], "any", false, false, false, 180))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "id" => "vendor_nom"]]);
        yield "
        ";
        // line 181
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "nom", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "errors", [], "any", false, false, false, 181))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "nom", [], "any", false, false, false, 183), "vars", [], "any", false, false, false, 183), "errors", [], "any", false, false, false, 183));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 183), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            yield "            </div>
        ";
        }
        // line 186
        yield "        <div class=\"form-text\">Commencez par une majuscule, lettres uniquement.</div>
    </div>

    ";
        // line 190
        yield "    <div class=\"mb-4\">
        ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "email", [], "any", false, false, false, 191), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <span class=\"required\" style=\"color:#ef4444\">*</span>
        ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "email", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "email", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "errors", [], "any", false, false, false, 193))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "id" => "vendor_email"]]);
        yield "
        ";
        // line 194
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "email", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "errors", [], "any", false, false, false, 194))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "email", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "errors", [], "any", false, false, false, 196));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 196), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            yield "            </div>
        ";
        }
        // line 199
        yield "        <div class=\"form-text\">Doit être unique — un seul vendeur par adresse e-mail.</div>
    </div>

    ";
        // line 203
        yield "    <div class=\"mb-4\">
        ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "telephone", [], "any", false, false, false, 204), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <span style=\"font-size:11px;color:#9ca3af;margin-left:4px;\">(optionnel)</span>
        ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "telephone", [], "any", false, false, false, 206), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "telephone", [], "any", false, false, false, 206), "vars", [], "any", false, false, false, 206), "errors", [], "any", false, false, false, 206))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "id" => "vendor_telephone"]]);
        yield "
        ";
        // line 207
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "telephone", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "errors", [], "any", false, false, false, 207))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "telephone", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "errors", [], "any", false, false, false, 209));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 209), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            yield "            </div>
        ";
        }
        // line 212
        yield "        <div class=\"form-text\">Format libre, max 20 caractères (ex : +216 20 123 456).</div>
    </div>

    ";
        // line 216
        yield "    <div class=\"mb-4\">
        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "statut", [], "any", false, false, false, 217), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
        <span class=\"required\" style=\"color:#ef4444\">*</span>
        ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "statut", [], "any", false, false, false, 219), 'widget', ["attr" => ["class" => ("form-select" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "statut", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "errors", [], "any", false, false, false, 219))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "id" => "vendor_statut"]]);
        yield "
        ";
        // line 220
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "statut", [], "any", false, false, false, 220), "vars", [], "any", false, false, false, 220), "errors", [], "any", false, false, false, 220))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 221
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "statut", [], "any", false, false, false, 222), "vars", [], "any", false, false, false, 222), "errors", [], "any", false, false, false, 222));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 222), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            yield "            </div>
        ";
        }
        // line 225
        yield "        <div id=\"statut-preview\" class=\"statut-preview preview-";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["vendor"] ?? null), "statut", [], "any", true, true, false, 225) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 225, $this->source); })()), "statut", [], "any", false, false, false, 225)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 225, $this->source); })()), "statut", [], "any", false, false, false, 225), "html", null, true)) : ("actif"));
        yield "\">
            <i class=\"fas fa-circle\" style=\"font-size:8px;\"></i>
            <span id=\"statut-preview-text\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["vendor"] ?? null), "statut", [], "any", true, true, false, 227) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 227, $this->source); })()), "statut", [], "any", false, false, false, 227)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["vendor"]) || array_key_exists("vendor", $context) ? $context["vendor"] : (function () { throw new RuntimeError('Variable "vendor" does not exist.', 227, $this->source); })()), "statut", [], "any", false, false, false, 227)) : ("actif"))), "html", null, true);
        yield "</span>
        </div>
    </div>

    ";
        // line 232
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "products", [], "any", true, true, false, 232)) {
            // line 233
            yield "    <div class=\"mb-2\">
        ";
            // line 234
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "products", [], "any", false, false, false, 234), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
        ";
            // line 235
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "products", [], "any", false, false, false, 235), 'widget');
            yield "
        <div class=\"form-text\">Maintenez CTRL (Windows) ou CMD (Mac) pour sélectionner plusieurs produits. Si un produit est déjà assigné à un autre vendeur, il lui sera réassigné.</div>
    </div>
    ";
        }
        // line 239
        yield "
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-submit\" id=\"btn-submit-vendor\">
            <i class=\"fas fa-";
        // line 242
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 242, $this->source); })()) == "new")) ? ("plus") : ("save"));
        yield "\"></i>
            ";
        // line 243
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 243, $this->source); })()) == "new")) ? ("Créer le vendeur") : ("Enregistrer les modifications"));
        yield "
        </button>
        <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
        yield "\" class=\"btn-cancel\">Annuler</a>
    </div>

    ";
        // line 248
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), 'form_end');
        yield "
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 141
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vendor_index");
        yield "\">Vendeurs</a>
    <span class=\"sep\">/</span>
    <span class=\"current\">";
        // line 143
        yield ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 143, $this->source); })()) == "new")) ? ("NOUVEAU") : ("MODIFIER"));
        yield "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Aperçu dynamique du badge statut
const statutSelect  = document.getElementById('vendor_statut');
const preview       = document.getElementById('statut-preview');
const previewText   = document.getElementById('statut-preview-text');

function updatePreview(val) {
    if (!preview) return;
    preview.className = 'statut-preview preview-' + val;
    previewText.textContent = val.charAt(0).toUpperCase() + val.slice(1);
}

statutSelect?.addEventListener('change', () => updatePreview(statutSelect.value));
updatePreview(statutSelect?.value ?? 'actif');
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
        return "vendor/form.html.twig";
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
        return array (  545 => 254,  535 => 253,  525 => 143,  519 => 141,  509 => 140,  497 => 248,  491 => 245,  486 => 243,  482 => 242,  477 => 239,  470 => 235,  466 => 234,  463 => 233,  460 => 232,  453 => 227,  447 => 225,  443 => 223,  434 => 222,  431 => 221,  429 => 220,  425 => 219,  420 => 217,  417 => 216,  412 => 212,  408 => 210,  399 => 209,  396 => 208,  394 => 207,  390 => 206,  385 => 204,  382 => 203,  377 => 199,  373 => 197,  364 => 196,  361 => 195,  359 => 194,  355 => 193,  350 => 191,  347 => 190,  342 => 186,  338 => 184,  329 => 183,  326 => 182,  324 => 181,  320 => 180,  315 => 178,  312 => 177,  307 => 174,  297 => 166,  291 => 164,  287 => 162,  285 => 161,  278 => 157,  274 => 155,  258 => 150,  253 => 149,  248 => 148,  244 => 147,  241 => 145,  239 => 140,  106 => 8,  96 => 7,  79 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ mode == 'new' ? 'Nouveau vendeur' : 'Modifier ' ~ vendor.nom }} — Bizcore{% endblock %}

{% block page_title %}{{ mode == 'new' ? 'NOUVEAU VENDEUR' : 'MODIFIER VENDEUR' }}{% endblock %}

{% block body %}
<style>
    .form-page-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 28px;
    }
    .form-page-header h1 {
        font-size: 20px;
        font-weight: 700;
        color: #111827;
        margin: 0;
    }
    .form-page-header .back-link {
        width: 36px; height: 36px;
        background: #f3f4f6;
        border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        color: #6b7280;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.2s;
        flex-shrink: 0;
    }
    .form-page-header .back-link:hover { background: #e5e7eb; color: #374151; }

    .form-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 32px;
        max-width: 680px;
    }

    .form-card .section-title {
        font-size: 12px;
        font-weight: 700;
        color: #9ca3af;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid #f3f4f6;
    }

    .form-card .form-label {
        font-size: 13px;
        font-weight: 600;
        color: #374151;
        margin-bottom: 6px;
    }
    .form-card .form-label .required {
        color: #ef4444;
        margin-left: 3px;
    }
    .form-card .form-control,
    .form-card .form-select {
        font-size: 13px;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        padding: 10px 14px;
        color: #111827;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-card .form-control:focus,
    .form-card .form-select:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(32,201,151,.15);
        outline: none;
    }
    .form-card .form-control.is-invalid,
    .form-card .form-select.is-invalid {
        border-color: #ef4444;
    }
    .form-card .invalid-feedback {
        font-size: 12px;
        color: #ef4444;
        margin-top: 5px;
    }
    .form-card .form-text {
        font-size: 11px;
        color: #9ca3af;
        margin-top: 5px;
    }

    .statut-preview {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        margin-top: 8px;
        transition: all 0.2s;
    }
    .preview-actif     { background: #d1fae5; color: #065f46; }
    .preview-inactif   { background: #f3f4f6; color: #374151; }
    .preview-suspendu  { background: #fee2e2; color: #991b1b; }

    .form-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 28px;
        padding-top: 24px;
        border-top: 1px solid #f3f4f6;
    }
    .btn-submit {
        background: var(--accent);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 24px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s, transform 0.1s;
        display: inline-flex; align-items: center; gap: 8px;
    }
    .btn-submit:hover { background: var(--accent-dark); transform: translateY(-1px); }
    .btn-cancel {
        color: #6b7280;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        padding: 10px 16px;
        border-radius: 8px;
        transition: background 0.2s;
    }
    .btn-cancel:hover { background: #f3f4f6; color: #374151; }
</style>

{# ── Breadcrumb ── #}
{% block breadcrumb %}
    <a href=\"{{ path('vendor_index') }}\">Vendeurs</a>
    <span class=\"sep\">/</span>
    <span class=\"current\">{{ mode == 'new' ? 'NOUVEAU' : 'MODIFIER' }}</span>
{% endblock %}

{# ── Flash messages ── #}
{% for type, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : 'success' }} alert-dismissible fade show d-flex align-items-center gap-2 mb-3\" role=\"alert\">
            <i class=\"fas fa-{{ type == 'error' ? 'exclamation-circle' : 'check-circle' }}\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close ms-auto\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
{% endfor %}

<div class=\"form-page-header\">
    <a href=\"{{ path('vendor_index') }}\" class=\"back-link\" title=\"Retour à la liste\">
        <i class=\"fas fa-arrow-left\"></i>
    </a>
    <h1>
        {% if mode == 'new' %}
            <i class=\"fas fa-store me-2\" style=\"color:var(--accent)\"></i>Nouveau vendeur
        {% else %}
            <i class=\"fas fa-pencil-alt me-2\" style=\"color:var(--accent)\"></i>Modifier « {{ vendor.nom }} »
        {% endif %}
    </h1>
</div>

<div class=\"form-card\">
    <div class=\"section-title\">
        <i class=\"fas fa-info-circle me-2\"></i>Informations du vendeur
    </div>

    {{ form_start(form, {action: mode == 'new' ? path('vendor_new') : path('vendor_edit', {id: vendor.id}), method: 'POST'}) }}

    {# Nom #}
    <div class=\"mb-4\">
        {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
        <span class=\"required\" style=\"color:#ef4444\">*</span>
        {{ form_widget(form.nom, {'attr': {'class': 'form-control' ~ (form.nom.vars.errors|length ? ' is-invalid' : ''), 'id': 'vendor_nom'}}) }}
        {% if form.nom.vars.errors|length %}
            <div class=\"invalid-feedback d-block\">
                {% for error in form.nom.vars.errors %}{{ error.message }}{% endfor %}
            </div>
        {% endif %}
        <div class=\"form-text\">Commencez par une majuscule, lettres uniquement.</div>
    </div>

    {# Email #}
    <div class=\"mb-4\">
        {{ form_label(form.email, null, {'label_attr': {'class': 'form-label'}}) }}
        <span class=\"required\" style=\"color:#ef4444\">*</span>
        {{ form_widget(form.email, {'attr': {'class': 'form-control' ~ (form.email.vars.errors|length ? ' is-invalid' : ''), 'id': 'vendor_email'}}) }}
        {% if form.email.vars.errors|length %}
            <div class=\"invalid-feedback d-block\">
                {% for error in form.email.vars.errors %}{{ error.message }}{% endfor %}
            </div>
        {% endif %}
        <div class=\"form-text\">Doit être unique — un seul vendeur par adresse e-mail.</div>
    </div>

    {# Telephone #}
    <div class=\"mb-4\">
        {{ form_label(form.telephone, null, {'label_attr': {'class': 'form-label'}}) }}
        <span style=\"font-size:11px;color:#9ca3af;margin-left:4px;\">(optionnel)</span>
        {{ form_widget(form.telephone, {'attr': {'class': 'form-control' ~ (form.telephone.vars.errors|length ? ' is-invalid' : ''), 'id': 'vendor_telephone'}}) }}
        {% if form.telephone.vars.errors|length %}
            <div class=\"invalid-feedback d-block\">
                {% for error in form.telephone.vars.errors %}{{ error.message }}{% endfor %}
            </div>
        {% endif %}
        <div class=\"form-text\">Format libre, max 20 caractères (ex : +216 20 123 456).</div>
    </div>

    {# Statut #}
    <div class=\"mb-4\">
        {{ form_label(form.statut, null, {'label_attr': {'class': 'form-label'}}) }}
        <span class=\"required\" style=\"color:#ef4444\">*</span>
        {{ form_widget(form.statut, {'attr': {'class': 'form-select' ~ (form.statut.vars.errors|length ? ' is-invalid' : ''), 'id': 'vendor_statut'}}) }}
        {% if form.statut.vars.errors|length %}
            <div class=\"invalid-feedback d-block\">
                {% for error in form.statut.vars.errors %}{{ error.message }}{% endfor %}
            </div>
        {% endif %}
        <div id=\"statut-preview\" class=\"statut-preview preview-{{ vendor.statut ?? 'actif' }}\">
            <i class=\"fas fa-circle\" style=\"font-size:8px;\"></i>
            <span id=\"statut-preview-text\">{{ (vendor.statut ?? 'actif')|capitalize }}</span>
        </div>
    </div>

    {# Produits associés #}
    {% if form.products is defined %}
    <div class=\"mb-2\">
        {{ form_label(form.products, null, {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.products) }}
        <div class=\"form-text\">Maintenez CTRL (Windows) ou CMD (Mac) pour sélectionner plusieurs produits. Si un produit est déjà assigné à un autre vendeur, il lui sera réassigné.</div>
    </div>
    {% endif %}

    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn-submit\" id=\"btn-submit-vendor\">
            <i class=\"fas fa-{{ mode == 'new' ? 'plus' : 'save' }}\"></i>
            {{ mode == 'new' ? 'Créer le vendeur' : 'Enregistrer les modifications' }}
        </button>
        <a href=\"{{ path('vendor_index') }}\" class=\"btn-cancel\">Annuler</a>
    </div>

    {{ form_end(form) }}
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Aperçu dynamique du badge statut
const statutSelect  = document.getElementById('vendor_statut');
const preview       = document.getElementById('statut-preview');
const previewText   = document.getElementById('statut-preview-text');

function updatePreview(val) {
    if (!preview) return;
    preview.className = 'statut-preview preview-' + val;
    previewText.textContent = val.charAt(0).toUpperCase() + val.slice(1);
}

statutSelect?.addEventListener('change', () => updatePreview(statutSelect.value));
updatePreview(statutSelect?.value ?? 'actif');
</script>
{% endblock %}
", "vendor/form.html.twig", "C:\\Users\\dhiaj_onolvpc\\Desktop\\FINAL\\FINAL\\templates\\vendor\\form.html.twig");
    }
}
