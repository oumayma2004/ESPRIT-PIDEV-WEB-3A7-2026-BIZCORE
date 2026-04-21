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

/* evenement/edit.html.twig */
class __TwigTemplate_39b99d5463fa35b30359afd778d9b7e7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

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

        yield "Modifier l'Événement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); max-width: 820px; }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(251,191,36,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fbbf24; font-size: 16px; }

    .form-body { padding: 28px; }

    .error-summary { background: #fee2e2; border: 1.5px solid #ef4444; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; font-weight: 700; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; display: flex; flex-direction: column; gap: 4px; font-size: 13px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }
    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }
    .form-group input, .form-group textarea, .form-group select { padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #0f172a; outline: none; transition: border-color 0.2s, box-shadow 0.2s; background: #fff; width: 100%; }
    .form-group input:focus, .form-group textarea:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group textarea.is-invalid { border-color: #ef4444 !important; box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important; }
    .form-group textarea { resize: vertical; min-height: 100px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }

    .current-image { display: flex; align-items: center; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; margin-bottom: 10px; }
    .current-image img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 13px; color: #64748b; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }
</style>

<div style=\"display:flex; min-height:100vh; width:100vw;\">
    

    <div class=\"main\">
        

        <div class=\"content\">
            <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"back-link\">← Retour à la liste</a>

            ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data", "class" => "form-card"]]);
        yield "

                <div class=\"form-card-header\">
                    <div class=\"icon\">✏️</div>
                    Modifier l'événement — ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), "html", null, true);
        yield "
                </div>

                <div class=\"form-body\">
                    ";
        // line 101
        $context["hasErrors"] = false;
        // line 102
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102)) > 0)) {
                $context["hasErrors"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                   

                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "title", [], "any", false, false, false, 107), 'label');
        yield "
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "title", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "title", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "errors", [], "any", false, false, false, 108)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "title", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "errors", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 109), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "price", [], "any", false, false, false, 113), 'label');
        yield "
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "price", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "price", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "errors", [], "any", false, false, false, 114)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "price", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 115), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "date", [], "any", false, false, false, 119), 'label');
        yield "
                            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "date", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "date", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "errors", [], "any", false, false, false, 120)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "date", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "errors", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 121), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                        </div>

                        <div class=\"form-group\">
                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "capacity", [], "any", false, false, false, 125), 'label');
        yield "
                            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "capacity", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "capacity", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126)) > 0)) ? ("is-invalid") : (""))]]);
        yield "
                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "capacity", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 127), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "                        </div>

                        <div class=\"form-group full\">
                            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "description", [], "any", false, false, false, 131), 'label');
        yield "
                            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "description", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "description", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "errors", [], "any", false, false, false, 132)) > 0)) ? ("is-invalid") : ("")), "rows" => 4]]);
        yield "
                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "description", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "errors", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 133), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                        </div>
                        <div class=\"form-group full\">
    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "lieu", [], "any", false, false, false, 136), 'label');
        yield "
    ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "lieu", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "lieu", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "errors", [], "any", false, false, false, 137)) > 0)) ? ("is-invalid") : ("")), "placeholder" => "Ex: Avenue Habib Bourguiba, Tunis"]]);
        yield "
    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "lieu", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "errors", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 138), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "</div>

                        <div class=\"form-group full\">
                            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "image", [], "any", false, false, false, 142), 'label');
        yield "
                            ";
        // line 143
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 143, $this->source); })()), "image", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "                                <div class=\"current-image\">
                                    <img src=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 145, $this->source); })()), "image", [], "any", false, false, false, 145))), "html", null, true);
            yield "\" alt=\"Image actuelle\">
                                    <span>Image actuelle — téléchargez-en une nouvelle pour remplacer</span>
                                </div>
                            ";
        }
        // line 149
        yield "                            <div class=\"file-upload-wrapper\">
                                ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "image", [], "any", false, false, false, 150), 'widget');
        yield "
                                <div class=\"file-upload-box\">
                                    <div style=\"font-size:28px; color:#cbd5e1; margin-bottom:6px;\">📎</div>
                                    <p>Cliquez pour choisir une nouvelle image</p>
                                    <p>JPEG, PNG, GIF — max 2Mo</p>
                                    <div class=\"file-name\" id=\"file-name-display\"></div>
                                </div>
                            </div>
                            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "image", [], "any", false, false, false, 158), "vars", [], "any", false, false, false, 158), "errors", [], "any", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">⚠ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 158), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "                        </div>
                    </div>
                </div>

                <div class=\"form-actions\">
                    <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        yield "\" class=\"btn btn-secondary\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn btn-success\">💾 Enregistrer les modifications</button>
                </div>

            ";
        // line 168
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'form_end');
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
        return "evenement/edit.html.twig";
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
        return array (  411 => 168,  404 => 164,  397 => 159,  386 => 158,  375 => 150,  372 => 149,  365 => 145,  362 => 144,  360 => 143,  356 => 142,  351 => 139,  340 => 138,  336 => 137,  332 => 136,  328 => 134,  317 => 133,  313 => 132,  309 => 131,  304 => 128,  293 => 127,  289 => 126,  285 => 125,  280 => 122,  269 => 121,  265 => 120,  261 => 119,  256 => 116,  245 => 115,  241 => 114,  237 => 113,  232 => 110,  221 => 109,  217 => 108,  213 => 107,  207 => 103,  195 => 102,  193 => 101,  186 => 97,  179 => 93,  174 => 91,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier l'Événement #{{ evenement.id }}{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'DM Sans', sans-serif; background: #f0f4f8; display: flex; min-height: 100vh; }

    .sidebar {
        width: 220px;
        min-height: 100vh;
        background: #1a1f2e;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }
    .sidebar-brand { padding: 24px 20px 20px; font-size: 22px; font-weight: 700; color: #fff; border-bottom: 1px solid #2a3347; }
    .sidebar-nav { flex: 1; padding: 6px 10px; }
    .sidebar-section { padding: 16px 16px 6px; font-size: 10px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 1px; }
    .nav-item { display: flex; align-items: center; gap: 10px; padding: 10px 12px; border-radius: 8px; color: #94a3b8; text-decoration: none; font-size: 13px; font-weight: 500; transition: all 0.15s; margin-bottom: 2px; }
    .nav-item:hover, .nav-item.active { background: #242a38; color: #fff; }
    .sidebar-footer { padding: 16px; border-top: 1px solid #2a3347; }
    .user-info { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .user-avatar { width: 34px; height: 34px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; color: #0f1117; font-weight: 700; }
    .footer-btns { display: flex; gap: 6px; }
    .btn-profile, .btn-logout { flex: 1; padding: 6px; border-radius: 6px; font-size: 11px; font-weight: 600; text-align: center; text-decoration: none; display: block; }
    .btn-profile { background: #242a38; color: #94a3b8; }
    .btn-logout { background: #ef4444; color: #fff; }

    .main { flex: 1; display: flex; flex-direction: column; min-height: 100vh; min-width: 0; }
    .topbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 28px; height: 60px; display: flex; align-items: center; justify-content: space-between; }
    .topbar-left { font-size: 15px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 10px; }
    .topbar-left .home-icon { color: #22c55e; }
    .topbar-left a { color: #64748b; text-decoration: none; font-weight: 500; }
    .topbar-right { display: flex; gap: 12px; }
    .topbar-icon { width: 36px; height: 36px; border-radius: 8px; background: #f8fafc; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 15px; }

    .content { padding: 28px; }
    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    .form-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); max-width: 820px; }
    .form-card-header { background: #1e293b; padding: 18px 28px; display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #f1f5f9; }
    .form-card-header .icon { width: 32px; height: 32px; background: rgba(251,191,36,0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fbbf24; font-size: 16px; }

    .form-body { padding: 28px; }

    .error-summary { background: #fee2e2; border: 1.5px solid #ef4444; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px; }
    .error-summary strong { display: block; color: #dc2626; font-size: 15px; font-weight: 700; margin-bottom: 8px; }
    .error-summary ul { padding-left: 20px; color: #b91c1c; display: flex; flex-direction: column; gap: 4px; font-size: 13px; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; }
    .form-group.full { grid-column: 1 / -1; }
    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }
    .form-group input, .form-group textarea, .form-group select { padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px; font-family: 'DM Sans', sans-serif; font-size: 14px; color: #0f172a; outline: none; transition: border-color 0.2s, box-shadow 0.2s; background: #fff; width: 100%; }
    .form-group input:focus, .form-group textarea:focus { border-color: #22c55e; box-shadow: 0 0 0 3px rgba(34,197,94,0.1); }
    .form-group input.is-invalid, .form-group textarea.is-invalid { border-color: #ef4444 !important; box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important; }
    .form-group textarea { resize: vertical; min-height: 100px; }
    .form-error { font-size: 12px; font-weight: 600; color: #dc2626; background: #fee2e2; border: 1px solid #fecaca; border-radius: 6px; padding: 7px 11px; display: flex; align-items: center; gap: 5px; margin-top: 2px; }

    .file-upload-wrapper { position: relative; }
    .file-upload-wrapper input[type=\"file\"] { opacity: 0; position: absolute; width: 100%; height: 100%; cursor: pointer; z-index: 2; top: 0; left: 0; }
    .file-upload-box { background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 8px; padding: 20px; text-align: center; transition: border-color 0.2s; cursor: pointer; }
    .file-upload-box:hover { border-color: #22c55e; background: #f0fdf4; }
    .file-upload-box p { font-size: 13px; color: #94a3b8; margin-top: 4px; }
    .file-name { margin-top: 6px; font-size: 13px; color: #16a34a; font-weight: 600; display: none; }

    .current-image { display: flex; align-items: center; gap: 12px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 14px; margin-bottom: 10px; }
    .current-image img { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; }
    .current-image span { font-size: 13px; color: #64748b; }

    .form-actions { padding: 20px 28px; border-top: 1px solid #f1f5f9; background: #f8fafc; display: flex; gap: 12px; justify-content: flex-end; }
    .btn { padding: 10px 24px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif; cursor: pointer; border: none; text-decoration: none; display: inline-flex; align-items: center; gap: 7px; transition: all 0.2s; }
    .btn-success { background: #22c55e; color: #fff; }
    .btn-success:hover { background: #16a34a; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(34,197,94,0.3); }
    .btn-secondary { background: #fff; color: #475569; border: 1.5px solid #e2e8f0; }
    .btn-secondary:hover { background: #f8fafc; }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; }
</style>

<div style=\"display:flex; min-height:100vh; width:100vw;\">
    

    <div class=\"main\">
        

        <div class=\"content\">
            <a href=\"{{ path('evenement_index') }}\" class=\"back-link\">← Retour à la liste</a>

            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data', 'class': 'form-card'}}) }}

                <div class=\"form-card-header\">
                    <div class=\"icon\">✏️</div>
                    Modifier l'événement — {{ evenement.title }}
                </div>

                <div class=\"form-body\">
                    {% set hasErrors = false %}
                    {% for field in form %}{% if field.vars.errors|length > 0 %}{% set hasErrors = true %}{% endif %}{% endfor %}
                   

                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            {{ form_label(form.title) }}
                            {{ form_widget(form.title, {'attr': {'class': form.title.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                            {% for error in form.title.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.price) }}
                            {{ form_widget(form.price, {'attr': {'class': form.price.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                            {% for error in form.price.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.date) }}
                            {{ form_widget(form.date, {'attr': {'class': form.date.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                            {% for error in form.date.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.capacity) }}
                            {{ form_widget(form.capacity, {'attr': {'class': form.capacity.vars.errors|length > 0 ? 'is-invalid' : ''}}) }}
                            {% for error in form.capacity.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>

                        <div class=\"form-group full\">
                            {{ form_label(form.description) }}
                            {{ form_widget(form.description, {'attr': {'class': form.description.vars.errors|length > 0 ? 'is-invalid' : '', 'rows': 4}}) }}
                            {% for error in form.description.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
                        </div>
                        <div class=\"form-group full\">
    {{ form_label(form.lieu) }}
    {{ form_widget(form.lieu, {'attr': {'class': form.lieu.vars.errors|length > 0 ? 'is-invalid' : '', 'placeholder': 'Ex: Avenue Habib Bourguiba, Tunis'}}) }}
    {% for error in form.lieu.vars.errors %}<div class=\"form-error\">⚠ {{ error.message }}</div>{% endfor %}
</div>

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
                                    <p>Cliquez pour choisir une nouvelle image</p>
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
                    <button type=\"submit\" class=\"btn btn-success\">💾 Enregistrer les modifications</button>
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
", "evenement/edit.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\evenement\\edit.html.twig");
    }
}
