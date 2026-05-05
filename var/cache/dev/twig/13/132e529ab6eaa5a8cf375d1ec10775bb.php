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
class __TwigTemplate_535d7fee653c84f7820fe52e23118f66 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_users.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search users...\" autocomplete=\"off\">
        </form>
    </div>

    ";
        // line 41
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 41, $this->source); })()))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()));
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
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 77, $this->source); })()) > 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 77, $this->source); })()) - 1), "html", null, true)) : (1));
            yield "\">Prev</button>

            <form class=\"users-page-form\" style=\"display:flex; align-items:center; gap:8px;\">
                <input class=\"page-input\" type=\"number\" name=\"page\" value=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "\" min=\"1\" max=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "\">
                <span>/ ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 81, $this->source); })()), "html", null, true);
            yield "</span>
                <button type=\"submit\" class=\"page-btn\">Go</button>
            </form>

            <button type=\"button\" class=\"page-btn\" data-page=\"";
            // line 85
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 85, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 85, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 85, $this->source); })()) + 1), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 85, $this->source); })()), "html", null, true)));
            yield "\">Next</button>
            <button type=\"button\" class=\"page-btn\" data-page=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "\">Last</button>
        </div>
    ";
        }
        // line 89
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  199 => 89,  193 => 86,  189 => 85,  182 => 81,  176 => 80,  170 => 77,  163 => 72,  153 => 68,  149 => 67,  144 => 65,  140 => 64,  136 => 63,  132 => 62,  126 => 61,  122 => 60,  119 => 59,  115 => 58,  99 => 44,  95 => 42,  93 => 41,  86 => 37,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
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
            <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Search users...\" autocomplete=\"off\">
        </form>
    </div>

    {% if users is empty %}
        <p style=\"text-align:center; color:#777; margin-top:20px;\">No users found.</p>
    {% else %}
        <table class=\"users-table\">
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
            {% for user in users %}
                <tr>
                    <td>{{ user.id_user }}</td>
                    <td>{{ user.nom }} {{ user.prenom }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.telephone ?: '-' }}</td>
                    <td><span class=\"users-badge\">{{ user.statut ?: 'N/A' }}</span></td>
                    <td>{{ user.date_inscription ? user.date_inscription|date('Y-m-d') : '-' }}</td>
                    <td>
                        <button type=\"button\" class=\"page-btn\" onclick='openUserEditModal({{ user|json_encode(constant(\"JSON_HEX_TAG\") b-or constant(\"JSON_HEX_APOS\") b-or constant(\"JSON_HEX_QUOT\") b-or constant(\"JSON_HEX_AMP\"))|raw }})'>Edit</button>
                        <button type=\"button\" class=\"page-btn\" onclick=\"deleteUser({{ user.id_user }})\">Delete</button>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div class=\"pagination\">
            <button type=\"button\" class=\"page-btn\" data-page=\"1\">First</button>
            <button type=\"button\" class=\"page-btn\" data-page=\"{{ page > 1 ? page - 1 : 1 }}\">Prev</button>

            <form class=\"users-page-form\" style=\"display:flex; align-items:center; gap:8px;\">
                <input class=\"page-input\" type=\"number\" name=\"page\" value=\"{{ page }}\" min=\"1\" max=\"{{ totalPages }}\">
                <span>/ {{ totalPages }}</span>
                <button type=\"submit\" class=\"page-btn\">Go</button>
            </form>

            <button type=\"button\" class=\"page-btn\" data-page=\"{{ page < totalPages ? page + 1 : totalPages }}\">Next</button>
            <button type=\"button\" class=\"page-btn\" data-page=\"{{ totalPages }}\">Last</button>
        </div>
    {% endif %}
</div>", "dashboard/_users.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\dashboard\\_users.html.twig");
    }
}
