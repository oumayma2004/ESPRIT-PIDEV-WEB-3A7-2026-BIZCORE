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

/* reservation/admin_index.html.twig */
class __TwigTemplate_de16f37e92068cc3a9512e334b3a87c7 extends Template
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
    .form-section-title + .form-row,
    .form-section-title + .form-group { margin-top: 0; }

    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
    .form-group { display: flex; flex-direction: column; gap: 5px; margin-bottom: 16px; }

    .form-group label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 11px 14px; border: 1.5px solid #e2e8f0; border-radius: 8px;
        font-family: 'Inter', sans-serif; font-size: 14px; color: #0f172a;
        outline: none; transition: border-color 0.2s, box-shadow 0.2s; background: #fff; width: 100%;
    }
    .form-group input:focus,
    .form-group select:focus { border-color: #f59e0b; box-shadow: 0 0 0 3px rgba(245,158,11,0.12); }

    /* Validation states */
    .form-group input.is-invalid,
    .form-group select.is-invalid { border-color: #ef4444 !important; background: #fff8f8; box-shadow: 0 0 0 3px rgba(239,68,68,0.08); }
    .form-group input.is-valid,
    .form-group select.is-valid { border-color: #22c55e !important; box-shadow: 0 0 0 3px rgba(34,197,94,0.08); }

    /* PHP flash errors */
    .php-errors { margin-bottom: 20px; }
    .php-error-item { display: flex; align-items: center; gap: 8px; background: #fee2e2; border: 1px solid #fecaca; border-radius: 8px; padding: 10px 14px; font-size: 13px; color: #dc2626; margin-bottom: 6px; }

    /* Inline field errors (JS) */
    .field-error { font-size: 12px; color: #dc2626; background: #fee2e2; border-radius: 4px; padding: 4px 8px; display: none; }
    .field-error.visible { display: block; }

    /* Symfony form errors */
    .form-group ul.form-errors { list-style: none; padding: 0; margin-top: 2px; }
    .form-group ul.form-errors li { font-size: 12px; color: #dc2626; background: #fee2e2; border-radius: 4px; padding: 4px 8px; }

    .btn-group { display: flex; gap: 12px; margin-top: 24px; }
    .btn-submit { flex: 1; padding: 14px; background: #f59e0b; color: #fff; border: none; border-radius: 10px; font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; transition: all 0.2s; }
    .btn-submit:hover { background: #d97706; transform: translateY(-1px); box-shadow: 0 6px 16px rgba(245,158,11,0.3); }
    .btn-cancel { flex: 1; padding: 14px; background: #f1f5f9; color: #475569; border: none; border-radius: 10px; font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; text-decoration: none; display: flex; align-items: center; justify-content: center; transition: background 0.2s; }
    .btn-cancel:hover { background: #e2e8f0; }

    /* SUMMARY CARD */
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
        // line 111
        yield "<nav class=\"navbar\">
    <div class=\"nav-brand\">Biz<span>core</span></div>
    <div class=\"nav-links\">
        <a href=\"#\">Accueil</a>
        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a>
        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\">Mes Réservations</a>
        <a href=\"#\" class=\"nav-cta\">Se connecter</a>
    </div>
</nav>

";
        // line 122
        yield "<div class=\"breadcrumb-bar\">
    <a href=\"#\">Accueil</a> ›
    <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\">Événements</a> ›
    <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\">Mes Réservations</a> ›
    <span class=\"current\">Modifier #";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 126), "html", null, true);
        yield "</span>
</div>

";
        // line 130
        yield "<div style=\"max-width:1000px; margin:0 auto; padding:32px 24px 0;\">
    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 132
            yield "        <div class=\"flash flash-success\">✅ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 135
            yield "        <div class=\"flash flash-error\">❌ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"back-link\">← Retour à mes réservations</a>
</div>

<div class=\"page\">

    ";
        // line 143
        yield "    <div>
        <div class=\"edit-badge\">✏️ Modification de réservation #";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 144), "html", null, true);
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
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 158
($context["reservation"] ?? null), "id", [], "any", false, false, false, 158)]), "attr" => ["id" => "editForm", "novalidate" => "novalidate"]]);
        // line 160
        yield "

                ";
        // line 163
        yield "                <div class=\"form-section-title\">Informations personnelles</div>

                <div class=\"form-row\">
                    ";
        // line 167
        yield "                    <div class=\"form-group\">
                        ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 168), 'label');
        yield "
                        ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 169), 'widget', ["attr" => ["id" => "field_nom", "placeholder" => "Votre nom complet"]]);
        // line 174
        yield "
                        ";
        // line 176
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "errors", [], "any", false, false, false, 176)) > 0)) {
            // line 177
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 178), "vars", [], "any", false, false, false, 178), "errors", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 179), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "                            </ul>
                        ";
        }
        // line 183
        yield "                        ";
        // line 184
        yield "                        <div class=\"field-error\" id=\"err_nom\"></div>
                    </div>

                    ";
        // line 188
        yield "                    <div class=\"form-group\">
                        ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 189), 'label');
        yield "
                        ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 190), 'widget', ["attr" => ["id" => "field_email", "placeholder" => "votre@email.com"]]);
        // line 195
        yield "
                        ";
        // line 196
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "errors", [], "any", false, false, false, 196)) > 0)) {
            // line 197
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 198), "vars", [], "any", false, false, false, 198), "errors", [], "any", false, false, false, 198));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 199
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 199), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "                            </ul>
                        ";
        }
        // line 203
        yield "                        <div class=\"field-error\" id=\"err_email\"></div>
                    </div>
                </div>

                <div class=\"form-row\">
                    ";
        // line 209
        yield "                    <div class=\"form-group\">
                        ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 210), 'label');
        yield "
                        ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 211), 'widget', ["attr" => ["id" => "field_telephone", "placeholder" => "+216 XX XXX XXX"]]);
        // line 216
        yield "
                        ";
        // line 217
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "errors", [], "any", false, false, false, 217)) > 0)) {
            // line 218
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "errors", [], "any", false, false, false, 219));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 220
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 220), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "                            </ul>
                        ";
        }
        // line 224
        yield "                        <div class=\"field-error\" id=\"err_telephone\"></div>
                    </div>

                    ";
        // line 228
        yield "                    <div class=\"form-group\">
                        ";
        // line 229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 229), 'label');
        yield "
                        ";
        // line 230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 230), 'widget', ["attr" => ["id" => "field_places", "placeholder" => "1", "min" => "1", "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 235
($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 235)]]);
        // line 237
        yield "
                        ";
        // line 238
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "errors", [], "any", false, false, false, 238)) > 0)) {
            // line 239
            yield "                            <ul class=\"form-errors\">
                                ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nombrePlaces", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "errors", [], "any", false, false, false, 240));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 241
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 241), "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            yield "                            </ul>
                        ";
        }
        // line 245
        yield "                        <div class=\"field-error\" id=\"err_places\"></div>
                    </div>
                </div>

                ";
        // line 250
        yield "                <div class=\"form-section-title\">Statut de la réservation</div>
                <div class=\"form-group\">
                    ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 252), 'label');
        yield "
                    ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 253), 'widget', ["attr" => ["id" => "field_statut"]]);
        yield "
                    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 254), "vars", [], "any", false, false, false, 254), "errors", [], "any", false, false, false, 254)) > 0)) {
            // line 255
            yield "                        <ul class=\"form-errors\">
                            ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 256), "vars", [], "any", false, false, false, 256), "errors", [], "any", false, false, false, 256));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 257
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 257), "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "                        </ul>
                    ";
        }
        // line 261
        yield "                </div>

                ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "

                <div class=\"btn-group\">
                    <a href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\" class=\"btn-cancel\">✕ Annuler</a>
                    <button type=\"submit\" class=\"btn-submit\">✔ Enregistrer les modifications</button>
                </div>

                ";
        // line 270
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

            </div>
        </div>
    </div>

    ";
        // line 277
        yield "    <div class=\"summary-card\">
        <div class=\"summary-header\">
            <div class=\"summary-price\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 279), "html", null, true);
        yield " DT</div>
            <div class=\"summary-price-label\">par personne</div>
        </div>
        <div class=\"summary-body\">
            ";
        // line 283
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 284
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 284))), "html", null, true);
            yield "\" class=\"summary-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 284), "html", null, true);
            yield "\">
            ";
        } else {
            // line 286
            yield "                <div class=\"summary-img-placeholder\">📅</div>
            ";
        }
        // line 288
        yield "
            <div class=\"summary-title\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 289), "html", null, true);
        yield "</div>

            <div class=\"summary-row\">
                <span>📆</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Date</div>
                    <strong>";
        // line 295
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 295), "d/m/Y à H:i"), "html", null, true)) : ("À confirmer"));
        yield "</strong>
                </div>
            </div>
            <div class=\"summary-row\">
                <span>👥</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Capacité max</div>
                    <strong>";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 302), "html", null, true);
        yield " places</strong>
                </div>
            </div>
            <div class=\"summary-row\">
                <span>🎟</span>
                <div>
                    <div style=\"font-size:10px; color:#94a3b8; font-weight:600; text-transform:uppercase;\">Réservation</div>
                    <strong>#";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 309), "html", null, true);
        yield "</strong>
                </div>
            </div>

            <hr class=\"summary-divider\">

            <div class=\"summary-total\">
                <span>Prix par place</span>
                <span class=\"total-price\">";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "price", [], "any", false, false, false, 317), "html", null, true);
        yield " DT</span>
            </div>
            <div class=\"security-note\">🔒 Modification sécurisée<br>Vos données sont protégées</div>
        </div>
    </div>

</div>

<footer class=\"footer\">© 2026 <span>Bizcore</span> — Tous droits réservés</footer>

";
        // line 330
        yield "<script>
(function () {
    const capacity = ";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "capacity", [], "any", false, false, false, 332), "js"), "html", null, true);
        yield ";

    const rules = {
        field_nom: {
            errId : 'err_nom',
            validate(v) {
                if (!v) return 'Le nom est obligatoire.';
                if (!/^[a-zA-ZÀ-ÿ '\\-]+\$/u.test(v)) return 'Lettres, espaces et tirets uniquement.';
                if (v.length < 2) return 'Le nom doit contenir au moins 2 caractères.';
                return null;
            }
        },
        field_email: {
            errId : 'err_email',
            validate(v) {
                if (!v) return 'L\\'email est obligatoire.';
                if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]{2,}\$/.test(v)) return 'Adresse email invalide.';
                return null;
            }
        },
        field_telephone: {
            errId : 'err_telephone',
            validate(v) {
                if (!v) return 'Le téléphone est obligatoire.';
                if (!/^[0-9+\\s\\-]{8,15}\$/.test(v)) return 'Téléphone invalide (8 à 15 chiffres).';
                return null;
            }
        },
        field_places: {
            errId : 'err_places',
            validate(v) {
                const n = parseInt(v, 10);
                if (!v || isNaN(n)) return 'Le nombre de places est obligatoire.';
                if (n <= 0) return 'Le nombre de places doit être supérieur à 0.';
                if (n > capacity) return `Maximum \${capacity} place(s) disponible(s).`;
                return null;
            }
        }
    };

    function showError(fieldId, errId, msg) {
        const field = document.getElementById(fieldId);
        const err   = document.getElementById(errId);
        if (field) { field.classList.add('is-invalid'); field.classList.remove('is-valid'); }
        if (err)   { err.textContent = msg; err.classList.add('visible'); }
    }

    function clearError(fieldId, errId) {
        const field = document.getElementById(fieldId);
        const err   = document.getElementById(errId);
        if (field) { field.classList.remove('is-invalid'); field.classList.add('is-valid'); }
        if (err)   { err.textContent = ''; err.classList.remove('visible'); }
    }

    function validateField(fieldId) {
        const rule  = rules[fieldId];
        const field = document.getElementById(fieldId);
        if (!rule || !field) return true;
        const msg = rule.validate(field.value.trim());
        if (msg) { showError(fieldId, rule.errId, msg); return false; }
        clearError(fieldId, rule.errId);
        return true;
    }

    // Live validation on blur
    Object.keys(rules).forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            el.addEventListener('blur',  () => validateField(id));
            el.addEventListener('input', () => {
                if (el.classList.contains('is-invalid')) validateField(id);
            });
        }
    });

    // Block submit if JS validation fails
    document.getElementById('editForm').addEventListener('submit', function (e) {
        let valid = true;
        Object.keys(rules).forEach(id => { if (!validateField(id)) valid = false; });
        if (!valid) {
            e.preventDefault();
            // Scroll to first error
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
        return "reservation/admin_index.html.twig";
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
        return array (  592 => 332,  588 => 330,  575 => 317,  564 => 309,  554 => 302,  544 => 295,  535 => 289,  532 => 288,  528 => 286,  520 => 284,  518 => 283,  511 => 279,  507 => 277,  498 => 270,  491 => 266,  485 => 263,  481 => 261,  477 => 259,  468 => 257,  464 => 256,  461 => 255,  459 => 254,  455 => 253,  451 => 252,  447 => 250,  441 => 245,  437 => 243,  428 => 241,  424 => 240,  421 => 239,  419 => 238,  416 => 237,  414 => 235,  413 => 230,  409 => 229,  406 => 228,  401 => 224,  397 => 222,  388 => 220,  384 => 219,  381 => 218,  379 => 217,  376 => 216,  374 => 211,  370 => 210,  367 => 209,  360 => 203,  356 => 201,  347 => 199,  343 => 198,  340 => 197,  338 => 196,  335 => 195,  333 => 190,  329 => 189,  326 => 188,  321 => 184,  319 => 183,  315 => 181,  306 => 179,  302 => 178,  299 => 177,  296 => 176,  293 => 174,  291 => 169,  287 => 168,  284 => 167,  279 => 163,  275 => 160,  273 => 158,  272 => 157,  256 => 144,  253 => 143,  244 => 137,  235 => 135,  230 => 134,  221 => 132,  217 => 131,  214 => 130,  208 => 126,  204 => 125,  200 => 124,  196 => 122,  188 => 116,  184 => 115,  178 => 111,  71 => 5,  64 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/admin_index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\reservation\\admin_index.html.twig");
    }
}
