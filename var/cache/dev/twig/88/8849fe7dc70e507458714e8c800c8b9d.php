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

/* components/_delete_confirm_popup.html.twig */
class __TwigTemplate_47e443261d9c91bd0824e4695da55d03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_delete_confirm_popup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_delete_confirm_popup.html.twig"));

        // line 2
        yield "<div id=\"delete-confirm-overlay\" style=\"
    position:fixed;top:0;left:0;width:100%;height:100%;
    background:rgba(0,0,0,0.55);z-index:9999;
    display:none;align-items:center;justify-content:center;
    animation:fadeInOverlay 0.25s ease;
\">
    <div style=\"
        background:#fff;border-radius:16px;padding:40px 48px;
        text-align:center;max-width:420px;width:90%;
        box-shadow:0 20px 60px rgba(0,0,0,0.3);
        animation:slideUpPopup 0.3s cubic-bezier(0.34,1.56,0.64,1);
        position:relative;
    \">
        <button onclick=\"closeDeleteConfirm()\" style=\"
            position:absolute;top:14px;right:14px;background:none;
            border:none;color:#9ca3af;font-size:20px;cursor:pointer;
            width:32px;height:32px;display:flex;align-items:center;
            justify-content:center;border-radius:50%;transition:background 0.2s;
        \" onmouseover=\"this.style.background='#f3f4f6'\" 
           onmouseout=\"this.style.background='none'\">&times;</button>
        
        <div style=\"
            width:72px;height:72px;border-radius:50%;
            background:linear-gradient(135deg,#ef4444,#dc2626);
            display:flex;align-items:center;justify-content:center;
            margin:0 auto 20px;font-size:32px;color:#fff;
        \"><i class=\"fas fa-trash-alt\" style=\"font-size:28px;\"></i></div>
        
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0 0 10px;\">
            Confirmer la suppression
        </h2>
        <p id=\"delete-confirm-message\" style=\"font-size:14px;color:#6b7280;margin:0 0 24px;line-height:1.6;\">
            Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.
        </p>
        
        <div style=\"display:flex;gap:12px;\">
            <button onclick=\"closeDeleteConfirm()\" style=\"
                flex:1;background:#f3f4f6;color:#374151;border:none;border-radius:10px;
                padding:12px 24px;font-size:14px;font-weight:600;
                cursor:pointer;transition:background 0.2s;
            \" onmouseover=\"this.style.background='#e5e7eb'\"
               onmouseout=\"this.style.background='#f3f4f6'\">
                Annuler
            </button>
            <button id=\"delete-confirm-btn\" onclick=\"executeDelete()\" style=\"
                flex:1;background:#ef4444;color:#fff;border:none;border-radius:10px;
                padding:12px 24px;font-size:14px;font-weight:600;
                cursor:pointer;transition:background 0.2s;
            \" onmouseover=\"this.style.background='#dc2626'\"
               onmouseout=\"this.style.background='#ef4444'\">
                <i class=\"fas fa-trash-alt\" style=\"margin-right:6px;\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

<style>
@keyframes fadeInOverlay { from{opacity:0} to{opacity:1} }
@keyframes slideUpPopup  { from{opacity:0;transform:translateY(30px) scale(0.95)} 
                            to{opacity:1;transform:translateY(0) scale(1)} }
</style>

<script>
var _deleteFormId = null;

function showDeleteConfirm(formId, name) {
    _deleteFormId = formId;
    var msg = name 
        ? 'Êtes-vous sûr de vouloir supprimer <strong>' + name + '</strong> ? Cette action est irréversible.'
        : 'Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.';
    document.getElementById('delete-confirm-message').innerHTML = msg;
    var overlay = document.getElementById('delete-confirm-overlay');
    overlay.style.display = 'flex';
}

function closeDeleteConfirm() {
    var overlay = document.getElementById('delete-confirm-overlay');
    overlay.style.display = 'none';
    _deleteFormId = null;
}

function executeDelete() {
    if (_deleteFormId) {
        var form = document.getElementById(_deleteFormId);
        if (form) form.submit();
    }
    closeDeleteConfirm();
}

// Close on overlay click
document.getElementById('delete-confirm-overlay').addEventListener('click', function(e) {
    if (e.target === this) closeDeleteConfirm();
});

// Close on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDeleteConfirm();
});
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_delete_confirm_popup.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# ── Custom styled delete confirmation popup (matches success/error popup style) ── #}
<div id=\"delete-confirm-overlay\" style=\"
    position:fixed;top:0;left:0;width:100%;height:100%;
    background:rgba(0,0,0,0.55);z-index:9999;
    display:none;align-items:center;justify-content:center;
    animation:fadeInOverlay 0.25s ease;
\">
    <div style=\"
        background:#fff;border-radius:16px;padding:40px 48px;
        text-align:center;max-width:420px;width:90%;
        box-shadow:0 20px 60px rgba(0,0,0,0.3);
        animation:slideUpPopup 0.3s cubic-bezier(0.34,1.56,0.64,1);
        position:relative;
    \">
        <button onclick=\"closeDeleteConfirm()\" style=\"
            position:absolute;top:14px;right:14px;background:none;
            border:none;color:#9ca3af;font-size:20px;cursor:pointer;
            width:32px;height:32px;display:flex;align-items:center;
            justify-content:center;border-radius:50%;transition:background 0.2s;
        \" onmouseover=\"this.style.background='#f3f4f6'\" 
           onmouseout=\"this.style.background='none'\">&times;</button>
        
        <div style=\"
            width:72px;height:72px;border-radius:50%;
            background:linear-gradient(135deg,#ef4444,#dc2626);
            display:flex;align-items:center;justify-content:center;
            margin:0 auto 20px;font-size:32px;color:#fff;
        \"><i class=\"fas fa-trash-alt\" style=\"font-size:28px;\"></i></div>
        
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0 0 10px;\">
            Confirmer la suppression
        </h2>
        <p id=\"delete-confirm-message\" style=\"font-size:14px;color:#6b7280;margin:0 0 24px;line-height:1.6;\">
            Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.
        </p>
        
        <div style=\"display:flex;gap:12px;\">
            <button onclick=\"closeDeleteConfirm()\" style=\"
                flex:1;background:#f3f4f6;color:#374151;border:none;border-radius:10px;
                padding:12px 24px;font-size:14px;font-weight:600;
                cursor:pointer;transition:background 0.2s;
            \" onmouseover=\"this.style.background='#e5e7eb'\"
               onmouseout=\"this.style.background='#f3f4f6'\">
                Annuler
            </button>
            <button id=\"delete-confirm-btn\" onclick=\"executeDelete()\" style=\"
                flex:1;background:#ef4444;color:#fff;border:none;border-radius:10px;
                padding:12px 24px;font-size:14px;font-weight:600;
                cursor:pointer;transition:background 0.2s;
            \" onmouseover=\"this.style.background='#dc2626'\"
               onmouseout=\"this.style.background='#ef4444'\">
                <i class=\"fas fa-trash-alt\" style=\"margin-right:6px;\"></i> Supprimer
            </button>
        </div>
    </div>
</div>

<style>
@keyframes fadeInOverlay { from{opacity:0} to{opacity:1} }
@keyframes slideUpPopup  { from{opacity:0;transform:translateY(30px) scale(0.95)} 
                            to{opacity:1;transform:translateY(0) scale(1)} }
</style>

<script>
var _deleteFormId = null;

function showDeleteConfirm(formId, name) {
    _deleteFormId = formId;
    var msg = name 
        ? 'Êtes-vous sûr de vouloir supprimer <strong>' + name + '</strong> ? Cette action est irréversible.'
        : 'Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.';
    document.getElementById('delete-confirm-message').innerHTML = msg;
    var overlay = document.getElementById('delete-confirm-overlay');
    overlay.style.display = 'flex';
}

function closeDeleteConfirm() {
    var overlay = document.getElementById('delete-confirm-overlay');
    overlay.style.display = 'none';
    _deleteFormId = null;
}

function executeDelete() {
    if (_deleteFormId) {
        var form = document.getElementById(_deleteFormId);
        if (form) form.submit();
    }
    closeDeleteConfirm();
}

// Close on overlay click
document.getElementById('delete-confirm-overlay').addEventListener('click', function(e) {
    if (e.target === this) closeDeleteConfirm();
});

// Close on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDeleteConfirm();
});
</script>
", "components/_delete_confirm_popup.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\components\\_delete_confirm_popup.html.twig");
    }
}
