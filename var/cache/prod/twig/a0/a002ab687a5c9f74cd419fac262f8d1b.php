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

/* reservation/edit.html.twig */
class __TwigTemplate_c34ca9feeea48de1440785e1c908b081 extends Template
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
        yield "Modifier la réservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
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
        yield "<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #1e293b; }

    .navbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 0 40px; height: 64px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 100; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
    .nav-brand { font-size: 20px; font-weight: 800; color: #0f172a; }
    .nav-brand span { color: #22c55e; }
    .nav-links { display: flex; align-items: center; gap: 28px; }
    .nav-links a { font-size: 14px; font-weight: 500; color: #64748b; text-decoration: none; }
    .nav-links a:hover { color: #0f172a; }
    .nav-cta { background: #22c55e; color: #fff !important; padding: 8px 18px; border-radius: 8px; font-weight: 600 !important; }

    .breadcrumb-bar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 12px 40px; display: flex; align-items: center; gap: 8px; font-size: 13px; color: #94a3b8; }
    .breadcrumb-bar a { color: #64748b; text-decoration: none; }
    .breadcrumb-bar a:hover { color: #22c55e; }
    .breadcrumb-bar .current { color: #0f172a; font-weight: 500; }

    .page { max-width: 1000px; margin: 40px auto; padding: 0 24px; display: grid; grid-template-columns: 1fr 320px; gap: 28px; align-items: start; }

    .back-link { display: inline-flex; align-items: center; gap: 6px; color: #64748b; text-decoration: none; font-size: 13px; font-weight: 500; margin-bottom: 20px; transition: color 0.15s; }
    .back-link:hover { color: #22c55e; }

    .edit-badge { display: inline-flex; align-items: center; gap: 6px; background: #fef3c7; color: #b45309; border: 1px solid #fde68a; border-radius: 20px; font-size: 12px; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; }

    .form-card { background: #fff; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 2px 8px rgba(0,0,0,0.05); overflow: hidden; }
    .form-card-header { background: #0f172a; padding: 24px 28px; display: flex; align-items: center; gap: 14px; }
    .form-card-header .header-icon { width: 44px; height: 44px; background: #f59e0b; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0; }
    .form-card-header h2 { font-size: 18px; font-weight: 700; color: #fff; margin-bottom: 2px; }
    .form-card-header p { font-size: 13px; color: #94a3b8; }
    .form-card-body { padding: 28px; }

    .form-section-title { font-size: 13px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin: 0 0 16px; padding-bottom: 8px; border-bottom: 1px solid #f1f5f9; }

    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
    .form-group { display: flex; flex-direction: column; gap: 5px; margin-bottom: 16px; }

    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px;
        font-family: 'Inter', sans-serif; font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s, box-shadow 0.2s;
        background: #fff; width: 100%;
    }
    .form-group input:focus,
    .form-group select:focus { border-color: #f59e0b; box-shadow: 0 0 0 3px rgba(245,158,11,0.12); }
    .form-group input.is-invalid,
    .form-group select.is-invalid { border-color: #ef4444 !important; background: #fff8f8; box-shadow: 0 0 0 3px rgba(239,68,68,0.08); }
    .form-group input.is-valid,
    .form-group select.is-valid { border-color: #22c55e !important; box-shadow: 0 0 0 3px rgba(34,197,94,0.08); }

    .field-error { font-size: 12px; color: #dc2626; background: #fee2e2; border-radius: 4px; padding: 4px 8px; display: none; margin-top: 2px; }
    .field-error.visible { display: block; }

    .form-group ul.form-errors { list-style: none; padding: 0; margin-top: 2px; }
    .form-group ul.form-errors li { font-size: 12px; color: #dc2626; background: #fee2e2; border-radius: 4px; padding: 4px 8px; }

    .btn-group { display: flex; gap: 12px; margin-top: 24px; }
    .btn-submit { flex: 1; padding: 14px; background: #f59e0b; color: #fff; border: none; border-radius: 10px; font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; transition: all 0.2s; }
    .btn-submit:hover { background: #d97706; transform: translateY(-1px); box-shadow: 0 6px 16px rgba(245,158,11,0.3); }
    .btn-cancel { flex: 1; padding: 14px; background: #f1f5f9; color: #475569; border: none; border-radius: 10px; font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; text-decoration: none; display: flex; align-items: center; justify-content: center; transition: background 0.2s; }
    .btn-cancel:hover { background: #e2e8f0; }

    .summary-card { background: #fff; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 2px 8px rgba(0,0,0,0.05); overflow: hidden; position: sticky; top: 80px; }
    .summary-header { background: linear-gradient(135deg, #0f172a, #1e3a5f); padding: 20px 22px; text-align: center; }
    .summary-price { font-size: 34px; font-weight: 800; color: #22c55e; }
    .summary-price-label { font-size: 12px; color: #94a3b8; margin-top: 2px; }
    .summary-body { padding: 20px; }
    .summary-img { width: 100%; height: 140px; object-fit: cover; border-radius: 10px; margin-bottom: 16px; border: 1px solid #e2e8f0; }
    .summary-img-placeholder { width: 100%; height: 140px; background: linear-gradient(135deg, #e0f2fe, #f0fdf4); border-radius: 10px; margin-bottom: 16px; display: flex; align-items: center; justify-content: center; font-size: 40px; border: 1px solid #e2e8f0; }
    .summary-title { font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 14px; line-height: 1.3; }
    .summary-row { display: flex; align-items: center; gap: 10px; font-size: 13px; color: #475569; padding: 9px 12px; background: #f8fafc; border-radius: 8px; border: 1px solid #e2e8f0; margin-bottom: 8px; }
    .summary-row strong { color: #0f172a; }
    .summary-divider { border: none; border-top: 1px solid #e2e8f0; margin: 16px 0; }
    .summary-total { display: flex; justify-content: space-between; align-items: center; font-size: 14px; font-weight: 700; color: #0f172a; }
    .summary-total .total-price { font-size: 18px; font-weight: 800; color: #22c55e; }
    .security-note { text-align: center; font-size: 12px; color: #94a3b8; margin-top: 14px; line-height: 1.5; }

    .flash { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 12px; }
    .flash-success { background: #dcfce7; border: 1px solid #bbf7d0; color: #15803d; }
    .flash-error   { background: #fee2e2; border: 1px solid #fecaca; color: #dc2626; }

    .footer { background: #0f172a; color: #64748b; text-align: center; padding: 28px; font-size: 13px; margin-top: 60px; }
    .footer span { color: #22c55e; }

    @media (max-width: 768px) {
        .page { grid-template-columns: 1fr; }
        .summary-card { position: static; }
        .form-row { grid-template-columns: 1fr; }
    }
</style>

";
        // line 101
        yield "<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a>
        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\">Mes Réservations</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

";
        // line 112
        yield "<div class=\"breadcrumb-bar\">
    <a href=\"#\">Accueil</a> ›
    <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a> ›
    <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\">Mes Réservations</a> ›
    <span class=\"current\">Modifier #";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 116), "html", null, true);
        yield "</span>
</div>

";
        // line 120
        yield "<div style=\"max-width:1000px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 122
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 125
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"back-link\">← Retour à mes réservations</a>
</div>

<div class=\"page\">

    ";
        // line 133
        yield "    <div>
        <div class=\"edit-badge\">✏️ Modification de réservation #";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 134), "html", null, true);
        yield "</div>

        <div class=\"form-card\">
            <div class=\"form-card-header\">
                <div class=\"header-icon\">✏️</div>
                <div>
                    <h2>Modifier la réservation</h2>
                    <p>Mettez à jour vos informations ci-dessous</p>
                </div>
            </div>

            <div class=\"form-card-body\">

                ";
        // line 147
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 148
($context["reservation"] ?? null), "id", [], "any", false, false, false, 148)]), "attr" => ["id" => "editForm", "novalidate" => "novalidate"]]);
        // line 150
        yield "

                ";
        // line 153
        yield "                <div class=\"form-section-title\">Informations personnelles</div>

                <div class=\"form-row\">

                    ";
        // line 158
        yield "                    <div class=\"form-group\">
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 159), 'label');
        yield "
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 160), 'widget', ["attr" => ["id" => "field_nom", "placeholder" => "Votre nom complet"]]);
        yield "
                        ";
        // line 161
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "errors", [], "any", false, false, false, 161)) > 0)) {
            // line 162
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "errors", [], "any", false, false, false, 163));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 164
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 164), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "                            </ul>
                        ";
        }
        // line 168
        yield "                        <div class=\"field-error\" id=\"err_nom\"></div>
                    </div>

                    ";
        // line 172
        yield "                    <div class=\"form-group\">
                        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 173), 'label');
        yield "
                        ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 174), 'widget', ["attr" => ["id" => "field_email", "placeholder" => "votre@email.com"]]);
        yield "
                        ";
        // line 175
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 175), "vars", [], "any", false, false, false, 175), "errors", [], "any", false, false, false, 175)) > 0)) {
            // line 176
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "errors", [], "any", false, false, false, 177));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 178
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 178), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            yield "                            </ul>
                        ";
        }
        // line 182
        yield "                        <div class=\"field-error\" id=\"err_email\"></div>
                    </div>

                </div>

                <div class=\"form-row\">

                    ";
        // line 190
        yield "                    <div class=\"form-group\">
                        ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 191), 'label');
        yield "
                        ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 192), 'widget', ["attr" => ["id" => "field_telephone", "placeholder" => "+216 XX XXX XXX"]]);
        yield "
                        ";
        // line 193
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "errors", [], "any", false, false, false, 193)) > 0)) {
            // line 194
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "errors", [], "any", false, false, false, 195));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 196
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 196), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            yield "                            </ul>
                        ";
        }
        // line 200
        yield "                        <div class=\"field-error\" id=\"err_telephone\"></div>
                    </div>

                    ";
        // line 204
        yield "                    <div class=\"form-group\">
                        ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 205), 'label');
        yield "
                        ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 206), 'widget', ["attr" => ["id" => "field_places", "placeholder" => "1", "min" => "1", "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 211
($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 211)]]);
        // line 213
        yield "
                        ";
        // line 214
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 214), "vars", [], "any", false, false, false, 214), "errors", [], "any", false, false, false, 214)) > 0)) {
            // line 215
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 216), "vars", [], "any", false, false, false, 216), "errors", [], "any", false, false, false, 216));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 217
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 217), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "                            </ul>
                        ";
        }
        // line 221
        yield "                        <div class=\"field-error\" id=\"err_places\"></div>
                    </div>

                </div>

                ";
        // line 227
        yield "                <div class=\"form-section-title\">Statut de la réservation</div>

                <div class=\"form-group\">
    <label>Statut</label>
    <input type=\"text\" value=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "statut", [], "any", false, false, false, 231), "html", null, true);
        yield "\" disabled style=\"background:#f8fafc; color:#64748b;\">
</div>

                ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "

                <div class=\"btn-group\">
                    <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"btn-cancel\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn-submit\">✔ Enregistrer les modifications</button>
                </div>

                ";
        // line 241
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

            </div>
        </div>
    </div>

    ";
        // line 248
        yield "    <div class=\"summary-card\">
        <div class=\"summary-header\">
            <div class=\"summary-price\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 250), "html", null, true);
        yield " DT</div>
            <div class=\"summary-price-label\">par personne</div>
        </div>
        <div class=\"summary-body\">
            ";
        // line 254
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 255))), "html", null, true);
            yield "\" class=\"summary-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 255), "html", null, true);
            yield "\">
            ";
        } else {
            // line 257
            yield "                <div class=\"summary-img-placeholder\">📅</div>
            ";
        }
        // line 259
        yield "
            <div class=\"summary-title\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 260), "html", null, true);
        yield "</div>

            <div class=\"summary-row\">
                <span>📆</span>
                <div>
                    <div style=\"font-size:10px;color:#94a3b8;font-weight:600;text-transform:uppercase;\">Date</div>
                    <strong>";
        // line 266
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 266), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                </div>
            </div>
            <div class=\"summary-row\">
                <span>👥</span>
                <div>
                    <div style=\"font-size:10px;color:#94a3b8;font-weight:600;text-transform:uppercase;\">Capacité max</div>
                    <strong>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 273), "html", null, true);
        yield " places</strong>
                </div>
            </div>
            <div class=\"summary-row\">
                <span>🎟</span>
                <div>
                    <div style=\"font-size:10px;color:#94a3b8;font-weight:600;text-transform:uppercase;\">Réservation</div>
                    <strong>#";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 280), "html", null, true);
        yield "</strong>
                </div>
            </div>

            <hr class=\"summary-divider\">

            <div class=\"summary-total\">
                <span>Prix par place</span>
                <span class=\"total-price\">";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 288), "html", null, true);
        yield " DT</span>
            </div>
            <div class=\"security-note\">🔒 Modification sécurisée<br>Vos données sont protégées</div>
        </div>
    </div>

</div>

<footer class=\"footer\">© 2026 <span>Bizcore</span> — Tous droits réservés</footer>

";
        // line 301
        yield "<script>
(function () {
    const capacity = ";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 303), "js"), "html", null, true);
        yield ";

    const rules = {
        field_nom: {
            errId: 'err_nom',
            validate(v) {
                if (!v)           return 'Le nom est obligatoire.';
                if (v.length < 2) return 'Le nom doit contenir au moins 2 caractères.';
                if (!/^[a-zA-ZÀ-ÿ '\\-]+\$/u.test(v))
                                  return 'Lettres, espaces et tirets uniquement.';
                return null;
            }
        },
        field_email: {
            errId: 'err_email',
            validate(v) {
                if (!v) return \"L'email est obligatoire.\";
                if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]{2,}\$/.test(v))
                        return \"Adresse email invalide.\";
                return null;
            }
        },
        field_telephone: {
            errId: 'err_telephone',
            validate(v) {
                if (!v) return 'Le téléphone est obligatoire.';
                if (!/^[0-9+\\s\\-]{8,15}\$/.test(v))
                        return 'Téléphone invalide (8 à 15 chiffres).';
                return null;
            }
        },
        field_places: {
            errId: 'err_places',
            validate(v) {
                const n = parseInt(v, 10);
                if (!v || isNaN(n)) return 'Le nombre de places est obligatoire.';
                if (n <= 0)         return 'Le nombre de places doit être supérieur à 0.';
                if (n > capacity)   return `Maximum \${capacity} place(s) disponible(s).`;
                return null;
            }
        }
    };

    function showError(fieldId, errId, msg) {
        const f = document.getElementById(fieldId);
        const e = document.getElementById(errId);
        if (f) { f.classList.add('is-invalid'); f.classList.remove('is-valid'); }
        if (e) { e.textContent = msg; e.classList.add('visible'); }
    }

    function clearError(fieldId, errId) {
        const f = document.getElementById(fieldId);
        const e = document.getElementById(errId);
        if (f) { f.classList.remove('is-invalid'); f.classList.add('is-valid'); }
        if (e) { e.textContent = ''; e.classList.remove('visible'); }
    }

    function validateField(id) {
        const rule  = rules[id];
        const field = document.getElementById(id);
        if (!rule || !field) return true;
        const msg = rule.validate(field.value.trim());
        if (msg) { showError(id, rule.errId, msg); return false; }
        clearError(id, rule.errId);
        return true;
    }

    // Validation en temps réel (blur + correction live)
    Object.keys(rules).forEach(id => {
        const el = document.getElementById(id);
        if (!el) return;
        el.addEventListener('blur',  () => validateField(id));
        el.addEventListener('input', () => {
            if (el.classList.contains('is-invalid')) validateField(id);
        });
    });

    // Blocage de la soumission si erreurs JS
    document.getElementById('editForm').addEventListener('submit', function (e) {
        let valid = true;
        Object.keys(rules).forEach(id => { if (!validateField(id)) valid = false; });
        if (!valid) {
            e.preventDefault();
            const first = document.querySelector('.is-invalid');
            if (first) first.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });
})();
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reservation/edit.html.twig";
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
        return array (  554 => 303,  550 => 301,  537 => 288,  526 => 280,  516 => 273,  506 => 266,  497 => 260,  494 => 259,  490 => 257,  482 => 255,  480 => 254,  473 => 250,  469 => 248,  460 => 241,  453 => 237,  447 => 234,  441 => 231,  435 => 227,  428 => 221,  424 => 219,  415 => 217,  411 => 216,  408 => 215,  406 => 214,  403 => 213,  401 => 211,  400 => 206,  396 => 205,  393 => 204,  388 => 200,  384 => 198,  375 => 196,  371 => 195,  368 => 194,  366 => 193,  362 => 192,  358 => 191,  355 => 190,  346 => 182,  342 => 180,  333 => 178,  329 => 177,  326 => 176,  324 => 175,  320 => 174,  316 => 173,  313 => 172,  308 => 168,  304 => 166,  295 => 164,  291 => 163,  288 => 162,  286 => 161,  282 => 160,  278 => 159,  275 => 158,  269 => 153,  265 => 150,  263 => 148,  262 => 147,  246 => 134,  243 => 133,  234 => 127,  225 => 125,  220 => 124,  211 => 122,  207 => 121,  204 => 120,  198 => 116,  194 => 115,  190 => 114,  186 => 112,  178 => 106,  174 => 105,  168 => 101,  71 => 5,  64 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/edit.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\edit.html.twig");
    }
}
