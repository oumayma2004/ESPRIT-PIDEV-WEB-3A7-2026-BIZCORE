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

/* admin/coach/stats.html.twig */
class __TwigTemplate_bcc84bb24851286d9a42f2f6951379c1 extends Template
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

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Statistiques Coachs - Bizcore";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid\">
    <!-- Page Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 class=\"mb-0\">
            <i class=\"bi bi-graph-up me-2\"></i>Statistiques des Coachs
        </h2>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"bi bi-arrow-left me-1\"></i>Retour à la liste
        </a>
    </div>

    <!-- Summary Cards -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-people-fill text-primary fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">Total Coachs</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-check-circle-fill text-success fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disponibles", [], "any", false, false, false, 32), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">Disponibles</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-x-circle-fill text-danger fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "indisponibles", [], "any", false, false, false, 41), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">Indisponibles</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-star-fill text-warning fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "note_moyenne", [], "any", false, false, false, 50), "html", null, true);
        yield "/5</h3>
                    <p class=\"text-muted mb-0\">Note Moyenne</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Statistics -->
    <div class=\"row g-3\">
        <!-- Répartition par Domaine -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white border-0 pb-0\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-briefcase text-primary me-2\"></i>Répartition par Domaine
                    </h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Domaine</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_domaine", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["domaine"] => $context["count"]) {
            // line 78
            yield "                            <tr>
                                <td>
                                    <span class=\"badge bg-info\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domaine"], "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-end\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 84)) * 100), 1), "html", null, true);
            yield "%
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['domaine'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Répartition par Expérience -->
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white border-0 pb-0\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-award text-success me-2\"></i>Répartition par Expérience
                    </h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Expérience</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "par_experience", [], "any", false, false, false, 112));
        foreach ($context['_seq'] as $context["range"] => $context["count"]) {
            // line 113
            yield "                            <tr>
                                <td>
                                    <span class=\"badge bg-primary\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["range"], "html", null, true);
            yield "</span>
                                </td>
                                <td class=\"text-end\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</td>
                                <td class=\"text-end\">
                                    ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((($context["count"] / CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 119)) * 100), 1), "html", null, true);
            yield "%
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['range'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tarif Moyen -->
        <div class=\"col-md-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"bi bi-currency-dollar text-success fs-1 mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tarif_moyen", [], "any", false, false, false, 134), "html", null, true);
        yield " DT/H</h3>
                    <p class=\"text-muted mb-0\">Tarif Horaire Moyen</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/coach/stats.html.twig";
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
        return array (  253 => 134,  240 => 123,  230 => 119,  225 => 117,  220 => 115,  216 => 113,  212 => 112,  186 => 88,  176 => 84,  171 => 82,  166 => 80,  162 => 78,  158 => 77,  128 => 50,  116 => 41,  104 => 32,  92 => 23,  78 => 12,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/coach/stats.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\coach\\stats.html.twig");
    }
}
