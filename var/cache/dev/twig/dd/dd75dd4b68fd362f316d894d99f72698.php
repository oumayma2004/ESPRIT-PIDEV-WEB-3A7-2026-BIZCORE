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

/* evenement/form.html.twig */
class __TwigTemplate_c15fd86f007f598c8b142b109ad52a5a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/form.html.twig"));

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

        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Ajouter"));
        yield " un Événement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    /* SIDEBAR */
    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    /* MAIN */
    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* FORM CARD */
    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); max-width: 820px; }

    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(34,197,94,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #22c55e; font-size: 16px; }

    .form-body { padding: 28px; }

    /* Error summary */
    .error-summary { background: #fee2e2; border: 1.5px solid #ef4444; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; font-weight: 700; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; display: flex; flex-direction: column; gap: 4px; font-size: 13px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }

    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }

    .form-group input,
    .form-group textarea,
    .form-group select {
        padding: 11px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        color: #0f172a;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        background: #fff;
        width: 100%;
    }

    .form-group input:focus, .form-group textarea:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group textarea.is-invalid { border-color: #ef4444 !important; box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important; }
    .form-group textarea { resize: vertical; min-height: 100px; }

    /* Inline error */
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    /* File upload */
    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }

    .current-image { display: flex; align-items: center; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; margin-bottom: 10px; }
    .current-image img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 13px; color: #64748b; }

    /* Actions */
    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }

    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    /* Flash */
    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }
</style>

<div style=\"display:flex; min-height:100vh;\">

    <!-- SIDEBAR -->
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\">⊞ Dashboard</a>
            <a href=\"#\" class=\"nav-item\">👤 Utilisateurs</a>
            <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"nav-item active\">📅 Événements</a>
            <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\" class=\"nav-item\">🎟 Réservations</a>
            <a href=\"#\" class=\"nav-item\">🎯 Coaching</a>
            <a href=\"#\" class=\"nav-item\">📝 Blog</a>
            <a href=\"#\" class=\"nav-item\">🛍 Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div style=\"font-size:13px; font-weight:600; color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px; color:#64748b;\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"#\" class=\"btn-profile\">Profile</a>
                <a href=\"#\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <!-- MAIN -->
    <div class=\"main\">
        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span> /
                <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" style=\"color:#64748b; text-decoration:none; font-weight:500;\">ÉVÉNEMENTS</a> /
                <span>";
        // line 147
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 147, $this->source); })()), "id", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("MODIFIER") : ("AJOUTER"));
        yield "</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "flashes", ["success"], "method", false, false, false, 157));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 158
            yield "                <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "flashes", ["error"], "method", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 161
            yield "                <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "
            <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"back-link\">← Retour à la liste</a>

            ";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data", "class" => "form-card"]]);
        yield "

                <div class=\"form-card-header\">
                    <div class=\"icon\">📋</div>
                    ";
        // line 170
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Modifier l'événement #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)), "html", null, true)) : ("Ajouter un nouvel événement"));
        yield "
                </div>

                <div class=\"form-body\">

                    ";
        // line 176
        yield "                    ";
        $context["hasErrors"] = false;
        // line 177
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 177), "errors", [], "any", false, false, false, 177)) > 0)) {
                $context["hasErrors"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "                    ";
        if ((($tmp = (isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 178, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "                    <div class=\"error-summary\">
                        <strong>⚠️ Veuillez corriger les erreurs suivantes :</strong>
                        <ul>
                            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 183
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 183), "errors", [], "any", false, false, false, 183));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 184
                    yield "                                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 184), "label", [], "any", false, false, false, 184), "html", null, true);
                    yield " : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 184), "html", null, true);
                    yield "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            yield "                        </ul>
                    </div>
                    ";
        }
        // line 190
        yield "
                    <div class=\"form-grid\">

                        ";
        // line 194
        yield "                        <div class=\"form-group\">
                            ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "title", [], "any", false, false, false, 195), 'label');
        yield "
                            ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "title", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "title", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "errors", [], "any", false, false, false, 196)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "Titre de l'événement"]]);
        yield "
                            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "title", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "errors", [], "any", false, false, false, 197));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 197), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                        </div>

                        ";
        // line 201
        yield "                        <div class=\"form-group\">
                            ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "price", [], "any", false, false, false, 202), 'label');
        yield "
                            ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "price", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "price", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "errors", [], "any", false, false, false, 203)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "0.00"]]);
        yield "
                            ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "price", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "errors", [], "any", false, false, false, 204));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 204), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "                        </div>

                        ";
        // line 208
        yield "                        <div class=\"form-group\">
                            ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "date", [], "any", false, false, false, 209), 'label');
        yield "
                            ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "date", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "date", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "errors", [], "any", false, false, false, 210)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "date", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "errors", [], "any", false, false, false, 211));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 211), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "                        </div>

                        ";
        // line 215
        yield "                        <div class=\"form-group\">
                            ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "capacity", [], "any", false, false, false, 216), 'label');
        yield "
                            ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "capacity", [], "any", false, false, false, 217), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "capacity", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "errors", [], "any", false, false, false, 217)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "0"]]);
        yield "
                            ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "capacity", [], "any", false, false, false, 218), "vars", [], "any", false, false, false, 218), "errors", [], "any", false, false, false, 218));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 218), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "                        </div>

                        ";
        // line 222
        yield "                        <div class=\"form-group full\">
                            ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "description", [], "any", false, false, false, 223), 'label');
        yield "
                            ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "description", [], "any", false, false, false, 224), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "description", [], "any", false, false, false, 224), "vars", [], "any", false, false, false, 224), "errors", [], "any", false, false, false, 224)) > 0)) ? ("is-invalid") : ("")), "rows" => 4, "placeholder" => "Description détaillée de l'événement..."]]);
        yield "
                            ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "description", [], "any", false, false, false, 225), "vars", [], "any", false, false, false, 225), "errors", [], "any", false, false, false, 225));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 225), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "                        </div>

                        ";
        // line 229
        yield "                        <div class=\"form-group full\">
                            ";
        // line 230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "image", [], "any", false, false, false, 230), 'label');
        yield "
                            ";
        // line 231
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 231, $this->source); })()), "image", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 232
            yield "                                <div class=\"current-image\">
                                    <img src=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 233, $this->source); })()), "image", [], "any", false, false, false, 233))), "html", null, true);
            yield "\" alt=\"Image actuelle\">
                                    <span>Image actuelle — téléchargez-en une nouvelle pour remplacer</span>
                                </div>
                            ";
        }
        // line 237
        yield "                            <div class=\"file-upload-wrapper\">
                                ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "image", [], "any", false, false, false, 238), 'widget');
        yield "
                                <div class=\"file-upload-box\">
                                    <div style=\"font-size:28px; color:#cbd5e1; margin-bottom:6px;\">📎</div>
                                    <p>Cliquez pour choisir une image</p>
                                    <p>JPEG, PNG, GIF — max 2Mo</p>
                                    <div class=\"file-name\" id=\"file-name-display\"></div>
                                </div>
                            </div>
                            ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "image", [], "any", false, false, false, 246), "vars", [], "any", false, false, false, 246), "errors", [], "any", false, false, false, 246));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 246), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "                        </div>

                    </div>
                </div>

                <div class=\"form-actions\">
                    <a href=\"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"btn btn-secondary\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn btn-success\">
                        ";
        // line 255
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 255, $this->source); })()), "id", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer les modifications") : ("＋ Ajouter l'événement"));
        yield "
                    </button>
                </div>

            ";
        // line 259
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), 'form_end');
        yield "

        </div>
    </div>
</div>

<script>
    const fileInput = document.querySelector('input[type=\"file\"]');
    const display = document.getElementById('file-name-display');
    if (fileInput && display) {
        fileInput.addEventListener('change', function () {
            if (this.files && this.files[0]) {
                display.textContent = '✅ ' + this.files[0].name;
                display.style.display = 'block';
            }
        });
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
        return "evenement/form.html.twig";
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
        return array (  554 => 259,  547 => 255,  542 => 253,  534 => 247,  523 => 246,  512 => 238,  509 => 237,  502 => 233,  499 => 232,  497 => 231,  493 => 230,  490 => 229,  486 => 226,  475 => 225,  471 => 224,  467 => 223,  464 => 222,  460 => 219,  449 => 218,  445 => 217,  441 => 216,  438 => 215,  434 => 212,  423 => 211,  419 => 210,  415 => 209,  412 => 208,  408 => 205,  397 => 204,  393 => 203,  389 => 202,  386 => 201,  382 => 198,  371 => 197,  367 => 196,  363 => 195,  360 => 194,  355 => 190,  350 => 187,  344 => 186,  333 => 184,  328 => 183,  324 => 182,  319 => 179,  316 => 178,  304 => 177,  301 => 176,  293 => 170,  286 => 166,  281 => 164,  278 => 163,  269 => 161,  264 => 160,  255 => 158,  251 => 157,  238 => 147,  234 => 146,  206 => 121,  202 => 120,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ evenement.id ? 'Modifier' : 'Ajouter' }} un Événement{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    /* SIDEBAR */
    .sidebar { width: 220px; min-height: 100vh; background: #1a1f2e; display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100; }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    /* MAIN */
    .main { margin-left: 220px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    /* FORM CARD */
    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); max-width: 820px; }

    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(34,197,94,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #22c55e; font-size: 16px; }

    .form-body { padding: 28px; }

    /* Error summary */
    .error-summary { background: #fee2e2; border: 1.5px solid #ef4444; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; font-weight: 700; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; display: flex; flex-direction: column; gap: 4px; font-size: 13px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }

    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }

    .form-group input,
    .form-group textarea,
    .form-group select {
        padding: 11px 14px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        color: #0f172a;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
        background: #fff;
        width: 100%;
    }

    .form-group input:focus, .form-group textarea:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group textarea.is-invalid { border-color: #ef4444 !important; box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important; }
    .form-group textarea { resize: vertical; min-height: 100px; }

    /* Inline error */
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    /* File upload */
    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }

    .current-image { display: flex; align-items: center; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; margin-bottom: 10px; }
    .current-image img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 13px; color: #64748b; }

    /* Actions */
    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }

    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    /* Flash */
    .flash { padding: 11px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }
</style>

<div style=\"display:flex; min-height:100vh;\">

    <!-- SIDEBAR -->
    <aside class=\"sidebar\">
        <div class=\"sidebar-brand\">Bizcore</div>
        <div class=\"sidebar-nav\">
            <div class=\"sidebar-section\">Gestion</div>
            <a href=\"#\" class=\"nav-item\">⊞ Dashboard</a>
            <a href=\"#\" class=\"nav-item\">👤 Utilisateurs</a>
            <a href=\"{{ path('evenement_index') }}\" class=\"nav-item active\">📅 Événements</a>
            <a href=\"{{ path('reservation_index') }}\" class=\"nav-item\">🎟 Réservations</a>
            <a href=\"#\" class=\"nav-item\">🎯 Coaching</a>
            <a href=\"#\" class=\"nav-item\">📝 Blog</a>
            <a href=\"#\" class=\"nav-item\">🛍 Produits/Commandes</a>
        </div>
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">A</div>
                <div>
                    <div style=\"font-size:13px; font-weight:600; color:#f1f5f9;\">Admin</div>
                    <div style=\"font-size:11px; color:#64748b;\">Administrateur</div>
                </div>
            </div>
            <div class=\"footer-btns\">
                <a href=\"#\" class=\"btn-profile\">Profile</a>
                <a href=\"#\" class=\"btn-logout\">Logout</a>
            </div>
        </div>
    </aside>

    <!-- MAIN -->
    <div class=\"main\">
        <div class=\"topbar\">
            <div class=\"topbar-left\">
                <span class=\"home-icon\">⌂</span> /
                <a href=\"{{ path('evenement_index') }}\" style=\"color:#64748b; text-decoration:none; font-weight:500;\">ÉVÉNEMENTS</a> /
                <span>{{ evenement.id ? 'MODIFIER' : 'AJOUTER' }}</span>
            </div>
            <div class=\"topbar-right\">
                <div class=\"topbar-icon\">🔔</div>
                <div class=\"topbar-icon\">⚙</div>
            </div>
        </div>

        <div class=\"content\">

            {% for msg in app.flashes('success') %}
                <div class=\"flash flash-success\">✅ {{ msg }}</div>
            {% endfor %}
            {% for msg in app.flashes('error') %}
                <div class=\"flash flash-error\">❌ {{ msg }}</div>
            {% endfor %}

            <a href=\"{{ path('evenement_index') }}\" class=\"back-link\">← Retour à la liste</a>

            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data', 'class': 'form-card'}}) }}

                <div class=\"form-card-header\">
                    <div class=\"icon\">📋</div>
                    {{ evenement.id ? \"Modifier l'événement #\" ~ evenement.id : 'Ajouter un nouvel événement' }}
                </div>

                <div class=\"form-body\">

                    {# Global error summary #}
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

                        {# TITRE #}
                        <div class=\"form-group\">
                            {{ form_label(form.title) }}
                            {{ form_widget(form.title, {'attr': {'class': form.title.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': 'Titre de l\\'événement'}}) }}
                            {% for error in form.title.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        {# PRIX #}
                        <div class=\"form-group\">
                            {{ form_label(form.price) }}
                            {{ form_widget(form.price, {'attr': {'class': form.price.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': '0.00'}}) }}
                            {% for error in form.price.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        {# DATE #}
                        <div class=\"form-group\">
                            {{ form_label(form.date) }}
                            {{ form_widget(form.date, {'attr': {'class': form.date.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                            {% for error in form.date.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        {# CAPACITÉ #}
                        <div class=\"form-group\">
                            {{ form_label(form.capacity) }}
                            {{ form_widget(form.capacity, {'attr': {'class': form.capacity.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': '0'}}) }}
                            {% for error in form.capacity.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        {# DESCRIPTION #}
                        <div class=\"form-group full\">
                            {{ form_label(form.description) }}
                            {{ form_widget(form.description, {'attr': {'class': form.description.vars.errors|length > 0 ? 'is-invalid' : '', 'rows': 4, 'placeholder': 'Description détaillée de l\\'événement...'}}) }}
                            {% for error in form.description.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        {# IMAGE #}
                        <div class=\"form-group full\">
                            {{ form_label(form.image) }}
                            {% if evenement.image %}
                                <div class=\"current-image\">
                                    <img src=\"{{ asset('uploads/' ~ evenement.image) }}\" alt=\"Image actuelle\">
                                    <span>Image actuelle — téléchargez-en une nouvelle pour remplacer</span>
                                </div>
                            {% endif %}
                            <div class=\"file-upload-wrapper\">
                                {{ form_widget(form.image) }}
                                <div class=\"file-upload-box\">
                                    <div style=\"font-size:28px; color:#cbd5e1; margin-bottom:6px;\">📎</div>
                                    <p>Cliquez pour choisir une image</p>
                                    <p>JPEG, PNG, GIF — max 2Mo</p>
                                    <div class=\"file-name\" id=\"file-name-display\"></div>
                                </div>
                            </div>
                            {% for error in form.image.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                    </div>
                </div>

                <div class=\"form-actions\">
                    <a href=\"{{ path('evenement_index') }}\" class=\"btn btn-secondary\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn btn-success\">
                        {{ evenement.id ? '💾 Enregistrer les modifications' : '＋ Ajouter l\\'événement' }}
                    </button>
                </div>

            {{ form_end(form) }}

        </div>
    </div>
</div>

<script>
    const fileInput = document.querySelector('input[type=\"file\"]');
    const display = document.getElementById('file-name-display');
    if (fileInput && display) {
        fileInput.addEventListener('change', function () {
            if (this.files && this.files[0]) {
                display.textContent = '✅ ' + this.files[0].name;
                display.style.display = 'block';
            }
        });
    }
</script>
{% endblock %}
", "evenement/form.html.twig", "C:\\Users\\MSI\\Desktop\\payment +qrcode\\bizcore\\templates\\evenement\\form.html.twig");
    }
}
