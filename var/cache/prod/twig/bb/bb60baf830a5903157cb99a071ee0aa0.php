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

/* dashboard/_users.html.twig */
class __TwigTemplate_4f52789e6c761038eb41b04e31a47e52 extends Template
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
        // line 1
        yield "<style>
.sort-head {
    background: none;
    border: none;
    padding: 4px 6px;
    font: inherit;
    font-weight: 600;
    cursor: pointer;
    color: #333;
    border-radius: 4px;
    transition: all 0.15s ease-in-out;
}

.sort-head:hover {
    background-color: rgba(0, 0, 0, 0.05);
    text-decoration: none;
}

.sort-head:active {
    background-color: rgba(0, 0, 0, 0.08);
}

.sort-head:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
}
</style>

<div class=\"users-table-wrap\">
    <div style=\"display:flex; justify-content:space-between; align-items:center; gap:10px; margin-bottom:14px;\">
        <h2 style=\"margin:0;\">Users</h2>
        <button type=\"button\" class=\"page-btn\" onclick=\"openUserCreateModal()\">Add user</button>
    </div>

    <div class=\"users-toolbar\">
        <form class=\"users-search-form users-search\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" placeholder=\"Search users...\" autocomplete=\"off\">
        </form>
    </div>

    ";
        // line 41
        if (Twig\Extension\CoreExtension::testEmpty(($context["users"] ?? null))) {
            // line 42
            yield "        <p style=\"text-align:center; color:#777; margin-top:20px;\">No users found.</p>
    ";
        } else {
            // line 44
            yield "        <table class=\"users-table\">
            <thead>
    <tr>
        <th><button type=\"button\" class=\"sort-head\" data-sort=\"id\">ID</button></th>
        <th><button type=\"button\" class=\"sort-head\" data-sort=\"nom\">Name</button></th>
        <th><button type=\"button\" class=\"sort-head\" data-sort=\"email\">Email</button></th>
        <th><button type=\"button\" class=\"sort-head\" data-sort=\"telephone\">Phone</button></th>
        <th><button type=\"button\" class=\"sort-head\" data-sort=\"statut\">Status</button></th>
        <th><button type=\"button\" class=\"sort-head\" data-sort=\"date_inscription\">Registered</button></th>
        <th>Actions</th>
    </tr>
</thead>

            <tbody>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 59
                yield "                <tr>
                    <td>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 60), "html", null, true);
                yield "</td>
                    <td>";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 61), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
                    <td>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 62), "html", null, true);
                yield "</td>
                    <td>";
                // line 63
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 63), "html", null, true)) : ("-"));
                yield "</td>
                    <td><span class=\"users-badge\">";
                // line 64
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 64), "html", null, true)) : ("N/A"));
                yield "</span></td>
                    <td>";
                // line 65
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "date_inscription", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "date_inscription", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true)) : ("-"));
                yield "</td>
                    <td>
                        <button type=\"button\" class=\"page-btn\" onclick='openUserEditModal(";
                // line 67
                yield json_encode($context["user"], (((Twig\Extension\CoreExtension::constant("JSON_HEX_TAG") | Twig\Extension\CoreExtension::constant("JSON_HEX_APOS")) | Twig\Extension\CoreExtension::constant("JSON_HEX_QUOT")) | Twig\Extension\CoreExtension::constant("JSON_HEX_AMP")));
                yield ")'>Edit</button>
                        <button type=\"button\" class=\"page-btn\" onclick=\"deleteUser(";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 68), "html", null, true);
                yield ")\">Delete</button>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "            </tbody>
        </table>

        <div class=\"pagination\">
            <button type=\"button\" class=\"page-btn\" data-page=\"1\">First</button>
            <button type=\"button\" class=\"page-btn\" data-page=\"";
            // line 77
            yield (((($context["page"] ?? null) > 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["page"] ?? null) - 1), "html", null, true)) : (1));
            yield "\">Prev</button>

            <form class=\"users-page-form\" style=\"display:flex; align-items:center; gap:8px;\">
                <input class=\"page-input\" type=\"number\" name=\"page\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
            yield "\" min=\"1\" max=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield "\">
                <span>/ ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield "</span>
                <button type=\"submit\" class=\"page-btn\">Go</button>
            </form>

            <button type=\"button\" class=\"page-btn\" data-page=\"";
            // line 85
            yield (((($context["page"] ?? null) < ($context["totalPages"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["page"] ?? null) + 1), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true)));
            yield "\">Next</button>
            <button type=\"button\" class=\"page-btn\" data-page=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield "\">Last</button>
        </div>
    ";
        }
        // line 89
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/_users.html.twig";
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
        return array (  193 => 89,  187 => 86,  183 => 85,  176 => 81,  170 => 80,  164 => 77,  157 => 72,  147 => 68,  143 => 67,  138 => 65,  134 => 64,  130 => 63,  126 => 62,  120 => 61,  116 => 60,  113 => 59,  109 => 58,  93 => 44,  89 => 42,  87 => 41,  80 => 37,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/_users.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\dashboard\\_users.html.twig");
    }
}
