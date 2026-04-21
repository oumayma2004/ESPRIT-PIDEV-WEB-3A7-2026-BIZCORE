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

/* admin/domaine/_form.html.twig */
class __TwigTemplate_82750cce58b6e4a2913317f9421f7170 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/domaine/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "domaineForm"]]);
        yield "

";
        // line 4
        yield "<div id=\"validationAlert\" role=\"alert\"
     style=\"display:none; margin-bottom:18px; padding:14px 18px; border-radius:10px;
            border-left:5px solid #dc3545; background:#fff5f5; color:#b91c1c;
            animation: slideIn 0.3s ease-out;\">
    <div style=\"display:flex; align-items:flex-start; gap:10px;\">
        <i class=\"fas fa-exclamation-circle\" style=\"font-size:20px; margin-top:2px; flex-shrink:0;\"></i>
        <div>
            <strong id=\"validationAlertTitle\" style=\"font-size:14px;\">Les champs sont vides</strong>
            <ul id=\"validationErrors\" style=\"margin:6px 0 0; padding-left:18px; font-size:13px; line-height:1.6;\"></ul>
        </div>
        <button type=\"button\" onclick=\"document.getElementById('validationAlert').style.display='none'\"
                style=\"margin-left:auto; background:none; border:none; color:#b91c1c; font-size:20px; cursor:pointer; line-height:1; padding:0;\">×</button>
    </div>
</div>

<div class=\"row g-3 mb-4\">

    <div class=\"col-md-6\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Nom du domaine</label>
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nomDomaine", [], "any", false, false, false, 23), 'widget');
        yield "
        <div class=\"field-hint\" data-field=\"domaine_coaching[nomDomaine]\" style=\"display:none;color:#dc3545;font-size:11px;margin-top:3px;\"></div>
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nomDomaine", [], "any", false, false, false, 25), 'errors');
        yield "
    </div>

    <div class=\"col-md-3\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Niveau de difficulté</label>
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 30), 'widget');
        yield "
        <div class=\"field-hint\" data-field=\"domaine_coaching[niveauDifficulte]\" style=\"display:none;color:#dc3545;font-size:11px;margin-top:3px;\"></div>
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 32), 'errors');
        yield "
    </div>

    <div class=\"col-md-3\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Durée formation (h)</label>
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dureeFormationHeures", [], "any", false, false, false, 37), 'widget');
        yield "
        <div class=\"field-hint\" data-field=\"domaine_coaching[dureeFormationHeures]\" style=\"display:none;color:#dc3545;font-size:11px;margin-top:3px;\"></div>
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dureeFormationHeures", [], "any", false, false, false, 39), 'errors');
        yield "
    </div>

    <div class=\"col-12\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Description</label>
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'widget');
        yield "
        <div style=\"display:flex;justify-content:space-between;margin-top:3px;\">
            <div class=\"field-hint\" data-field=\"domaine_coaching[description]\" style=\"display:none;color:#dc3545;font-size:11px;\"></div>
            <span id=\"descCounter\" style=\"font-size:11px;color:#9ca3af;margin-left:auto;\">0 / 1000 caractères</span>
        </div>
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'errors');
        yield "
    </div>

</div>

<div class=\"d-flex gap-2\">
    <button type=\"submit\" class=\"btn btn-success\" id=\"submitBtn\">
        <i class=\"fas fa-check\"></i> Enregistrer
    </button>
    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_domaine_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"fas fa-times\"></i> Annuler
    </a>
</div>

";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "

";
        // line 66
        yield "<style>
@keyframes slideIn {
    from { opacity: 0; transform: translateY(-10px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes shake {
    0%,100% { transform: translateX(0); }
    25%      { transform: translateX(-5px); }
    75%      { transform: translateX(5px); }
}
.is-invalid-custom {
    border-color: #dc3545 !important;
    box-shadow: 0 0 0 0.2rem rgba(220,53,69,.2) !important;
    animation: shake 0.3s ease-in-out;
}
.is-valid-custom {
    border-color: #20c997 !important;
    box-shadow: 0 0 0 0.2rem rgba(32,201,151,.15) !important;
}
</style>

";
        // line 88
        yield "<script>
document.addEventListener('DOMContentLoaded', function () {

    var form       = document.getElementById('domaineForm');
    var alertBox   = document.getElementById('validationAlert');
    var alertTitle = document.getElementById('validationAlertTitle');
    var errorList  = document.getElementById('validationErrors');
    var submitBtn  = document.getElementById('submitBtn');

    /* ═══════════════════════════════════════════════
       DESCRIPTION COUNTER
       ═══════════════════════════════════════════════ */
    var descField = form.querySelector('[name=\"domaine_coaching[description]\"]');
    var descCtrl  = document.getElementById('descCounter');
    if (descField && descCtrl) {
        function updateDescCounter() {
            var len = descField.value.length;
            descCtrl.textContent = len + ' / 1000 caractères';
            descCtrl.style.color = len > 900 ? '#dc3545' : '#9ca3af';
        }
        descField.addEventListener('input', updateDescCounter);
        updateDescCounter();
    }

    /* ═══════════════════════════════════════════════
       FIELD VALIDATION RULES
       ═══════════════════════════════════════════════ */
    var fields = {
        'domaine_coaching[nomDomaine]': {
            label: 'Nom du domaine',
            required: true,
            minLen: 2,
            maxLen: 100,
            pattern: /^[a-zA-ZÀ-ÿ][a-zA-ZÀ-ÿ0-9\\s\\-\\&\\'\\. \\,]*\$/,
            msg: 'Doit commencer par une lettre (2–100 caractères, lettres, chiffres, espaces, tirets)'
        },
        'domaine_coaching[niveauDifficulte]': {
            label: 'Niveau de difficulté',
            required: true,
            select: true,
            msg: 'Veuillez sélectionner un niveau'
        },
        'domaine_coaching[dureeFormationHeures]': {
            label: 'Durée formation (h)',
            required: false,
            numeric: true,
            min: 0,
            max: 10000,
            integer: true,
            msg: 'Nombre entier positif (max 10 000)'
        },
        'domaine_coaching[description]': {
            label: 'Description',
            required: false,
            minLen: 10,
            maxLen: 1000,
            msg: 'Au moins 10 caractères si renseigné (max 1000)'
        }
    };

    /* ── Helpers ── */
    function setFieldState(el, valid) {
        el.classList.remove('is-invalid-custom', 'is-valid-custom');
        if (valid)  el.classList.add('is-valid-custom');
        else        el.classList.add('is-invalid-custom');
    }

    function setHint(fieldName, msg) {
        var hint = form.querySelector('.field-hint[data-field=\"' + fieldName + '\"]');
        if (!hint) return;
        if (msg) { hint.textContent = '⚠ ' + msg; hint.style.display = 'block'; }
        else     { hint.textContent = '';          hint.style.display = 'none';  }
    }

    function validateOne(fieldName, rule) {
        var el = form.querySelector('[name=\"' + fieldName + '\"]');
        if (!el) return { ok: true };
        var val = el.value.trim();

        /* Required check */
        if (rule.required && !val) return { ok: false, msg: 'Ce champ est obligatoire' };

        /* Optional field that is empty — always valid */
        if (!rule.required && !val) return { ok: true };

        /* Length checks */
        if (rule.minLen && val.length < rule.minLen) return { ok: false, msg: rule.msg };
        if (rule.maxLen && val.length > rule.maxLen) return { ok: false, msg: rule.msg };

        /* Pattern check */
        if (rule.pattern && !rule.pattern.test(val)) return { ok: false, msg: rule.msg };

        /* Numeric check */
        if (rule.numeric) {
            var n = parseFloat(val);
            if (isNaN(n))                                    return { ok: false, msg: rule.msg };
            if (rule.integer && n !== Math.floor(n))         return { ok: false, msg: rule.msg };
            if (rule.min !== undefined && n < rule.min)      return { ok: false, msg: rule.msg };
            if (rule.max !== undefined && n > rule.max)      return { ok: false, msg: rule.msg };
        }

        return { ok: true };
    }

    /* ── Real-time validation on blur / input ── */
    Object.keys(fields).forEach(function(name) {
        var rule = fields[name];
        var el   = form.querySelector('[name=\"' + name + '\"]');
        if (!el) return;

        el.addEventListener('blur', function() {
            var res = validateOne(name, rule);
            /* Only mark valid/invalid if value was touched */
            if (el.value.trim() !== '' || rule.required) {
                setFieldState(el, res.ok);
            }
            setHint(name, res.ok ? null : res.msg);
        });

        el.addEventListener('input', function() {
            if (el.classList.contains('is-invalid-custom')) {
                var res = validateOne(name, rule);
                setFieldState(el, res.ok);
                setHint(name, res.ok ? null : res.msg);
            }
        });

        /* For select fields, also listen to change */
        if (rule.select) {
            el.addEventListener('change', function() {
                var res = validateOne(name, rule);
                setFieldState(el, res.ok);
                setHint(name, res.ok ? null : res.msg);
            });
        }
    });

    /* ══════════════════════════════════════
       UNIFIED SUBMIT HANDLER
       ══════════════════════════════════════ */
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        var emptyLabels  = [];
        var invalidLines = [];
        var firstBad     = null;

        Object.keys(fields).forEach(function(name) {
            var rule = fields[name];
            var el   = form.querySelector('[name=\"' + name + '\"]');
            if (!el) return;

            var val = el.value.trim();

            /* Required but empty */
            if (rule.required && !val) {
                emptyLabels.push(rule.label);
                setFieldState(el, false);
                setHint(name, 'Ce champ est obligatoire');
                if (!firstBad) firstBad = el;
                return;
            }

            /* Optional and empty — skip validation */
            if (!rule.required && !val) {
                el.classList.remove('is-invalid-custom', 'is-valid-custom');
                setHint(name, null);
                return;
            }

            var res = validateOne(name, rule);
            setFieldState(el, res.ok);
            setHint(name, res.ok ? null : res.msg);
            if (!res.ok) {
                invalidLines.push('<strong>' + rule.label + ' :</strong> ' + res.msg);
                if (!firstBad) firstBad = el;
            }
        });

        /* Build final message list */
        var lines = [];
        if (emptyLabels.length > 0) {
            lines.push('Les champs suivants sont vides : <strong>' + emptyLabels.join(', ') + '</strong>');
        }
        invalidLines.forEach(function(l) { lines.push(l); });

        if (lines.length > 0) {
            alertTitle.textContent = emptyLabels.length > 0
                ? '⚠️ Les champs sont vides'
                : '⚠️ Erreurs de validation';

            errorList.innerHTML = lines.map(function(l) { return '<li>' + l + '</li>'; }).join('');
            alertBox.style.display  = 'block';
            alertBox.style.animation = 'none';
            void alertBox.offsetWidth;
            alertBox.style.animation = 'slideIn 0.3s ease-out';
            alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            if (firstBad) firstBad.focus();

            clearTimeout(alertBox._timer);
            alertBox._timer = setTimeout(function() { alertBox.style.display = 'none'; }, 8000);

        } else {
            /* All valid — submit */
            alertBox.style.display = 'none';
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Envoi en cours...';
            form.submit();
        }
    });
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
        return "admin/domaine/_form.html.twig";
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
        return array (  166 => 88,  143 => 66,  138 => 63,  130 => 58,  118 => 49,  110 => 44,  102 => 39,  97 => 37,  89 => 32,  84 => 30,  76 => 25,  71 => 23,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'domaineForm'}}) }}

{# ── Dynamic validation alert ── #}
<div id=\"validationAlert\" role=\"alert\"
     style=\"display:none; margin-bottom:18px; padding:14px 18px; border-radius:10px;
            border-left:5px solid #dc3545; background:#fff5f5; color:#b91c1c;
            animation: slideIn 0.3s ease-out;\">
    <div style=\"display:flex; align-items:flex-start; gap:10px;\">
        <i class=\"fas fa-exclamation-circle\" style=\"font-size:20px; margin-top:2px; flex-shrink:0;\"></i>
        <div>
            <strong id=\"validationAlertTitle\" style=\"font-size:14px;\">Les champs sont vides</strong>
            <ul id=\"validationErrors\" style=\"margin:6px 0 0; padding-left:18px; font-size:13px; line-height:1.6;\"></ul>
        </div>
        <button type=\"button\" onclick=\"document.getElementById('validationAlert').style.display='none'\"
                style=\"margin-left:auto; background:none; border:none; color:#b91c1c; font-size:20px; cursor:pointer; line-height:1; padding:0;\">×</button>
    </div>
</div>

<div class=\"row g-3 mb-4\">

    <div class=\"col-md-6\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Nom du domaine</label>
        {{ form_widget(form.nomDomaine) }}
        <div class=\"field-hint\" data-field=\"domaine_coaching[nomDomaine]\" style=\"display:none;color:#dc3545;font-size:11px;margin-top:3px;\"></div>
        {{ form_errors(form.nomDomaine) }}
    </div>

    <div class=\"col-md-3\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Niveau de difficulté</label>
        {{ form_widget(form.niveauDifficulte) }}
        <div class=\"field-hint\" data-field=\"domaine_coaching[niveauDifficulte]\" style=\"display:none;color:#dc3545;font-size:11px;margin-top:3px;\"></div>
        {{ form_errors(form.niveauDifficulte) }}
    </div>

    <div class=\"col-md-3\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Durée formation (h)</label>
        {{ form_widget(form.dureeFormationHeures) }}
        <div class=\"field-hint\" data-field=\"domaine_coaching[dureeFormationHeures]\" style=\"display:none;color:#dc3545;font-size:11px;margin-top:3px;\"></div>
        {{ form_errors(form.dureeFormationHeures) }}
    </div>

    <div class=\"col-12\">
        <label class=\"form-label\" style=\"font-size:13px;font-weight:600;color:#374151;\">Description</label>
        {{ form_widget(form.description) }}
        <div style=\"display:flex;justify-content:space-between;margin-top:3px;\">
            <div class=\"field-hint\" data-field=\"domaine_coaching[description]\" style=\"display:none;color:#dc3545;font-size:11px;\"></div>
            <span id=\"descCounter\" style=\"font-size:11px;color:#9ca3af;margin-left:auto;\">0 / 1000 caractères</span>
        </div>
        {{ form_errors(form.description) }}
    </div>

</div>

<div class=\"d-flex gap-2\">
    <button type=\"submit\" class=\"btn btn-success\" id=\"submitBtn\">
        <i class=\"fas fa-check\"></i> Enregistrer
    </button>
    <a href=\"{{ path('admin_domaine_index') }}\" class=\"btn btn-secondary\">
        <i class=\"fas fa-times\"></i> Annuler
    </a>
</div>

{{ form_end(form) }}

{# ── Styles ── #}
<style>
@keyframes slideIn {
    from { opacity: 0; transform: translateY(-10px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes shake {
    0%,100% { transform: translateX(0); }
    25%      { transform: translateX(-5px); }
    75%      { transform: translateX(5px); }
}
.is-invalid-custom {
    border-color: #dc3545 !important;
    box-shadow: 0 0 0 0.2rem rgba(220,53,69,.2) !important;
    animation: shake 0.3s ease-in-out;
}
.is-valid-custom {
    border-color: #20c997 !important;
    box-shadow: 0 0 0 0.2rem rgba(32,201,151,.15) !important;
}
</style>

{# ── Client-side validation script ── #}
<script>
document.addEventListener('DOMContentLoaded', function () {

    var form       = document.getElementById('domaineForm');
    var alertBox   = document.getElementById('validationAlert');
    var alertTitle = document.getElementById('validationAlertTitle');
    var errorList  = document.getElementById('validationErrors');
    var submitBtn  = document.getElementById('submitBtn');

    /* ═══════════════════════════════════════════════
       DESCRIPTION COUNTER
       ═══════════════════════════════════════════════ */
    var descField = form.querySelector('[name=\"domaine_coaching[description]\"]');
    var descCtrl  = document.getElementById('descCounter');
    if (descField && descCtrl) {
        function updateDescCounter() {
            var len = descField.value.length;
            descCtrl.textContent = len + ' / 1000 caractères';
            descCtrl.style.color = len > 900 ? '#dc3545' : '#9ca3af';
        }
        descField.addEventListener('input', updateDescCounter);
        updateDescCounter();
    }

    /* ═══════════════════════════════════════════════
       FIELD VALIDATION RULES
       ═══════════════════════════════════════════════ */
    var fields = {
        'domaine_coaching[nomDomaine]': {
            label: 'Nom du domaine',
            required: true,
            minLen: 2,
            maxLen: 100,
            pattern: /^[a-zA-ZÀ-ÿ][a-zA-ZÀ-ÿ0-9\\s\\-\\&\\'\\. \\,]*\$/,
            msg: 'Doit commencer par une lettre (2–100 caractères, lettres, chiffres, espaces, tirets)'
        },
        'domaine_coaching[niveauDifficulte]': {
            label: 'Niveau de difficulté',
            required: true,
            select: true,
            msg: 'Veuillez sélectionner un niveau'
        },
        'domaine_coaching[dureeFormationHeures]': {
            label: 'Durée formation (h)',
            required: false,
            numeric: true,
            min: 0,
            max: 10000,
            integer: true,
            msg: 'Nombre entier positif (max 10 000)'
        },
        'domaine_coaching[description]': {
            label: 'Description',
            required: false,
            minLen: 10,
            maxLen: 1000,
            msg: 'Au moins 10 caractères si renseigné (max 1000)'
        }
    };

    /* ── Helpers ── */
    function setFieldState(el, valid) {
        el.classList.remove('is-invalid-custom', 'is-valid-custom');
        if (valid)  el.classList.add('is-valid-custom');
        else        el.classList.add('is-invalid-custom');
    }

    function setHint(fieldName, msg) {
        var hint = form.querySelector('.field-hint[data-field=\"' + fieldName + '\"]');
        if (!hint) return;
        if (msg) { hint.textContent = '⚠ ' + msg; hint.style.display = 'block'; }
        else     { hint.textContent = '';          hint.style.display = 'none';  }
    }

    function validateOne(fieldName, rule) {
        var el = form.querySelector('[name=\"' + fieldName + '\"]');
        if (!el) return { ok: true };
        var val = el.value.trim();

        /* Required check */
        if (rule.required && !val) return { ok: false, msg: 'Ce champ est obligatoire' };

        /* Optional field that is empty — always valid */
        if (!rule.required && !val) return { ok: true };

        /* Length checks */
        if (rule.minLen && val.length < rule.minLen) return { ok: false, msg: rule.msg };
        if (rule.maxLen && val.length > rule.maxLen) return { ok: false, msg: rule.msg };

        /* Pattern check */
        if (rule.pattern && !rule.pattern.test(val)) return { ok: false, msg: rule.msg };

        /* Numeric check */
        if (rule.numeric) {
            var n = parseFloat(val);
            if (isNaN(n))                                    return { ok: false, msg: rule.msg };
            if (rule.integer && n !== Math.floor(n))         return { ok: false, msg: rule.msg };
            if (rule.min !== undefined && n < rule.min)      return { ok: false, msg: rule.msg };
            if (rule.max !== undefined && n > rule.max)      return { ok: false, msg: rule.msg };
        }

        return { ok: true };
    }

    /* ── Real-time validation on blur / input ── */
    Object.keys(fields).forEach(function(name) {
        var rule = fields[name];
        var el   = form.querySelector('[name=\"' + name + '\"]');
        if (!el) return;

        el.addEventListener('blur', function() {
            var res = validateOne(name, rule);
            /* Only mark valid/invalid if value was touched */
            if (el.value.trim() !== '' || rule.required) {
                setFieldState(el, res.ok);
            }
            setHint(name, res.ok ? null : res.msg);
        });

        el.addEventListener('input', function() {
            if (el.classList.contains('is-invalid-custom')) {
                var res = validateOne(name, rule);
                setFieldState(el, res.ok);
                setHint(name, res.ok ? null : res.msg);
            }
        });

        /* For select fields, also listen to change */
        if (rule.select) {
            el.addEventListener('change', function() {
                var res = validateOne(name, rule);
                setFieldState(el, res.ok);
                setHint(name, res.ok ? null : res.msg);
            });
        }
    });

    /* ══════════════════════════════════════
       UNIFIED SUBMIT HANDLER
       ══════════════════════════════════════ */
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        var emptyLabels  = [];
        var invalidLines = [];
        var firstBad     = null;

        Object.keys(fields).forEach(function(name) {
            var rule = fields[name];
            var el   = form.querySelector('[name=\"' + name + '\"]');
            if (!el) return;

            var val = el.value.trim();

            /* Required but empty */
            if (rule.required && !val) {
                emptyLabels.push(rule.label);
                setFieldState(el, false);
                setHint(name, 'Ce champ est obligatoire');
                if (!firstBad) firstBad = el;
                return;
            }

            /* Optional and empty — skip validation */
            if (!rule.required && !val) {
                el.classList.remove('is-invalid-custom', 'is-valid-custom');
                setHint(name, null);
                return;
            }

            var res = validateOne(name, rule);
            setFieldState(el, res.ok);
            setHint(name, res.ok ? null : res.msg);
            if (!res.ok) {
                invalidLines.push('<strong>' + rule.label + ' :</strong> ' + res.msg);
                if (!firstBad) firstBad = el;
            }
        });

        /* Build final message list */
        var lines = [];
        if (emptyLabels.length > 0) {
            lines.push('Les champs suivants sont vides : <strong>' + emptyLabels.join(', ') + '</strong>');
        }
        invalidLines.forEach(function(l) { lines.push(l); });

        if (lines.length > 0) {
            alertTitle.textContent = emptyLabels.length > 0
                ? '⚠️ Les champs sont vides'
                : '⚠️ Erreurs de validation';

            errorList.innerHTML = lines.map(function(l) { return '<li>' + l + '</li>'; }).join('');
            alertBox.style.display  = 'block';
            alertBox.style.animation = 'none';
            void alertBox.offsetWidth;
            alertBox.style.animation = 'slideIn 0.3s ease-out';
            alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            if (firstBad) firstBad.focus();

            clearTimeout(alertBox._timer);
            alertBox._timer = setTimeout(function() { alertBox.style.display = 'none'; }, 8000);

        } else {
            /* All valid — submit */
            alertBox.style.display = 'none';
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Envoi en cours...';
            form.submit();
        }
    });
});
</script>
", "admin/domaine/_form.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\admin\\domaine\\_form.html.twig");
    }
}
