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

/* coach/new.html.twig */
class __TwigTemplate_36eddc009156ba6e5a8778fb57d801a8 extends Template
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
            'nav_section_label' => [$this, 'block_nav_section_label'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
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
        yield "Nouveau Coach — GestionCoach";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nouveau Coach";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_section_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Front Office";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", ["_route"], "method", false, false, false, 7)) && is_string($_v1 = "app_coach") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
    <i class=\"fas fa-users\"></i> Coachs
</a>
<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"\"><i class=\"fas fa-lock\"></i> Administration</a>
";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "<div style=\"max-width:820px;\">

    <div style=\"margin-bottom:20px;\">
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"card-panel\">
        <div style=\"border-bottom:1px solid #f1f5f9;padding-bottom:16px;margin-bottom:24px;display:flex;align-items:center;gap:12px;\">
            <div style=\"width:42px;height:42px;border-radius:10px;background:linear-gradient(135deg,#0fb8a9,#0d9e90);display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;\">
                <i class=\"fas fa-user-plus\"></i>
            </div>
            <div>
                <h2 style=\"font-size:17px;font-weight:700;color:#111827;margin:0;\">Ajouter un nouveau coach</h2>
                <p style=\"font-size:12px;color:#6b7280;margin:2px 0 0;\">Tous les champs sont obligatoires</p>
            </div>
        </div>

        ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div class=\"row g-3\">
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Nom <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 39), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Prénom <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 44), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Domaine <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "domaine", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-select-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "domaine", [], "any", false, false, false, 49), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Disponibilité <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "disponibilite", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-select-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "disponibilite", [], "any", false, false, false, 54), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Années d'expérience <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "experienceAnnees", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "experienceAnnees", [], "any", false, false, false, 59), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Tarif horaire (TND) <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tarifHoraire", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tarifHoraire", [], "any", false, false, false, 64), 'errors');
        yield "</div>
            </div>
            <div class=\"col-md-6\">
                <label class=\"form-label-custom\">Numéro de téléphone <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numTel", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control-custom"]]);
        yield "
                <div class=\"field-error\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numTel", [], "any", false, false, false, 69), 'errors');
        yield "</div>
            </div>
            <div class=\"col-12\">
                <label class=\"form-label-custom\">Biographie <span style=\"color:#ef4444;\">*</span></label>
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "biographie", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control-custom", "id" => "biographie"]]);
        yield "
                <div style=\"display:flex;justify-content:space-between;margin-top:3px;\">
                    <div class=\"field-error\">";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "biographie", [], "any", false, false, false, 75), 'errors');
        yield "</div>
                    <span style=\"font-size:11px;color:#9ca3af;\" id=\"bioCounter\">0 / 2000 caractères</span>
                </div>
            </div>
        </div>

        <div style=\"margin-top:24px;padding-top:20px;border-top:1px solid #f1f5f9;display:flex;gap:10px;\">
            <button type=\"submit\" class=\"btn-teal\" style=\"padding:10px 24px;\">
                <i class=\"fas fa-save\"></i> Enregistrer
            </button>
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" class=\"btn-outline-teal\" style=\"padding:10px 20px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;\">
                <i class=\"fas fa-times\"></i> Annuler
            </a>
        </div>

        ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "<script>
const b = document.getElementById('biographie'), c = document.getElementById('bioCounter');
if (b && c) { const u = () => { const l = b.value.length; c.textContent = `\${l} / 2000 caractères`; c.style.color = l > 1800 ? '#ef4444' : '#9ca3af'; }; b.addEventListener('input', u); u(); }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "coach/new.html.twig";
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
        return array (  270 => 96,  263 => 95,  254 => 90,  246 => 85,  233 => 75,  228 => 73,  221 => 69,  217 => 68,  210 => 64,  206 => 63,  199 => 59,  195 => 58,  188 => 54,  184 => 53,  177 => 49,  173 => 48,  166 => 44,  162 => 43,  155 => 39,  151 => 38,  143 => 33,  124 => 17,  119 => 14,  112 => 13,  105 => 10,  96 => 7,  89 => 6,  78 => 4,  67 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "coach/new.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\coach\\new.html.twig");
    }
}
