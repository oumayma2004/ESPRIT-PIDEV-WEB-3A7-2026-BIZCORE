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

/* article/_form.html.twig */
class __TwigTemplate_d45ce340b8ed16b687693a095b1be41f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["hasErrors"] = false;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4)) > 0)) {
                $context["hasErrors"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        if ((($tmp = (isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 5, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "<div class=\"error-summary\">
    <strong>⚠️ Veuillez corriger les erreurs suivantes :</strong>
    <ul>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 10
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 10), "errors", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 11
                    yield "                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 11), "label", [], "any", false, false, false, 11), "html", null, true);
                    yield " : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 11), "html", null, true);
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "    </ul>
</div>
";
        }
        // line 17
        yield "
<div class=\"form-grid\">

    <div class=\"form-group full\">
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'label');
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "Titre de l'article", "required" => true, "minlength" => 5, "maxlength" => 255, "pattern" => ".{5,}"]]);
        // line 31
        yield "
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "categorie", [], "any", false, false, false, 36), 'label');
        yield "
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "categorie", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "categorie", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) ? ("is-invalid") : ("")), "required" => true]]);
        // line 42
        yield "
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "categorie", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 43), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "statut", [], "any", false, false, false, 47), 'label');
        yield "
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50)) > 0)) ? ("is-invalid") : ("")), "required" => true]]);
        // line 53
        yield "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "statut", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "nombre_vues", [], "any", false, false, false, 58), 'label');
        yield "
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "nombre_vues", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 61
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nombre_vues", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61)) > 0)) ? ("is-invalid") : ("")), "min" => 0, "required" => true]]);
        // line 65
        yield "
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nombre_vues", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 66), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "image_principale", [], "any", false, false, false, 70), 'label');
        yield "
        ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "imagePrincipale", [], "any", true, true, false, 71) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 71, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 71))) {
            // line 72
            yield "            <div class=\"current-image\">
                <img src=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 73, $this->source); })()), "imagePrincipale", [], "any", false, false, false, 73))), "html", null, true);
            yield "\" alt=\"Image actuelle\">
                <span>Image actuelle — choisissez-en une nouvelle pour remplacer</span>
            </div>
        ";
        }
        // line 77
        yield "        <div class=\"file-upload-wrapper\">
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "image_principale", [], "any", false, false, false, 78), 'widget', ["attr" => ["accept" => "image/jpeg,image/png,image/gif,image/webp"]]);
        // line 82
        yield "
            <div class=\"file-upload-box\">
                <div style=\"font-size:28px;color:#cbd5e1;margin-bottom:6px;\">📎</div>
                <p>Cliquez pour choisir une image</p>
                <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                <div class=\"file-name\" id=\"file-name-display\"></div>
            </div>
        </div>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "image_principale", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "errors", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 90), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "    </div>

    <div class=\"form-group full\">
        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "contenu", [], "any", false, false, false, 94), 'label');
        yield "
        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "contenu", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 97
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "contenu", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97)) > 0)) ? ("is-invalid") : ("")), "rows" => 12, "placeholder" => "Rédigez le contenu de l'article...", "required" => true, "minlength" => 20]]);
        // line 103
        yield "
        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "contenu", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 104), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "    </div>

</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/_form.html.twig";
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
        return array (  277 => 105,  266 => 104,  263 => 103,  261 => 97,  260 => 95,  256 => 94,  251 => 91,  240 => 90,  230 => 82,  228 => 78,  225 => 77,  218 => 73,  215 => 72,  213 => 71,  209 => 70,  204 => 67,  193 => 66,  190 => 65,  188 => 61,  187 => 59,  183 => 58,  178 => 55,  167 => 54,  164 => 53,  162 => 50,  161 => 48,  157 => 47,  152 => 44,  141 => 43,  138 => 42,  136 => 39,  135 => 37,  131 => 36,  126 => 33,  115 => 32,  112 => 31,  110 => 24,  109 => 22,  105 => 21,  99 => 17,  94 => 14,  88 => 13,  77 => 11,  72 => 10,  68 => 9,  63 => 6,  61 => 5,  50 => 4,  48 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Shared form fields for Article — included by new.html.twig and edit.html.twig #}

{% set hasErrors = false %}
{% for field in form %}{% if field.vars.errors|length > 0 %}{% set hasErrors = true %}{% endif %}{% endfor %}
{% if hasErrors %}
<div class=\"error-summary\">
    <strong>⚠️ Veuillez corriger les erreurs suivantes :</strong>
    <ul>
        {% for field in form %}
            {% for error in field.vars.errors %}
                <li>{{ field.vars.label }} : {{ error.message }}</li>
            {% endfor %}
        {% endfor %}
    </ul>
</div>
{% endif %}

<div class=\"form-grid\">

    <div class=\"form-group full\">
        {{ form_label(form.titre) }}
        {{ form_widget(form.titre, {
            'attr': {
                'class': form.titre.vars.errors|length > 0 ? 'is-invalid' : '',
                'placeholder': \"Titre de l'article\",
                'required': true,
                'minlength': 5,
                'maxlength': 255,
                'pattern': \".{5,}\"
            }
        }) }}
        {% for error in form.titre.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.categorie) }}
        {{ form_widget(form.categorie, {
            'attr': {
                'class': form.categorie.vars.errors|length > 0 ? 'is-invalid' : '',
                'required': true
            }
        }) }}
        {% for error in form.categorie.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.statut) }}
        {{ form_widget(form.statut, {
            'attr': {
                'class': form.statut.vars.errors|length > 0 ? 'is-invalid' : '',
                'required': true
            }
        }) }}
        {% for error in form.statut.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.nombre_vues) }}
        {{ form_widget(form.nombre_vues, {
            'attr': {
                'class': form.nombre_vues.vars.errors|length > 0 ? 'is-invalid' : '',
                'min': 0,
                'required': true
            }
        }) }}
        {% for error in form.nombre_vues.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.image_principale) }}
        {% if article.imagePrincipale is defined and article.imagePrincipale %}
            <div class=\"current-image\">
                <img src=\"{{ asset('uploads/' ~ article.imagePrincipale) }}\" alt=\"Image actuelle\">
                <span>Image actuelle — choisissez-en une nouvelle pour remplacer</span>
            </div>
        {% endif %}
        <div class=\"file-upload-wrapper\">
            {{ form_widget(form.image_principale, {
                'attr': {
                    'accept': 'image/jpeg,image/png,image/gif,image/webp'
                }
            }) }}
            <div class=\"file-upload-box\">
                <div style=\"font-size:28px;color:#cbd5e1;margin-bottom:6px;\">📎</div>
                <p>Cliquez pour choisir une image</p>
                <p>JPEG, PNG, GIF, WEBP — max 2 Mo</p>
                <div class=\"file-name\" id=\"file-name-display\"></div>
            </div>
        </div>
        {% for error in form.image_principale.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group full\">
        {{ form_label(form.contenu) }}
        {{ form_widget(form.contenu, {
            'attr': {
                'class': form.contenu.vars.errors|length > 0 ? 'is-invalid' : '',
                'rows': 12,
                'placeholder': \"Rédigez le contenu de l'article...\",
                'required': true,
                'minlength': 20
            }
        }) }}
        {% for error in form.contenu.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
    </div>

</div>", "article/_form.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\article\\_form.html.twig");
    }
}
