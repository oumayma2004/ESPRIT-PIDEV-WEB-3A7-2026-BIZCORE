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

/* security/register.html.twig */
class __TwigTemplate_5345ddb89c20212ee59ae7c57be8a128 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Register - BizCore";
        
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
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #d7d6ff, #c9caf7);
        min-height: 100vh;
        display: grid;
        place-items: center;
    }
    .card {
        width: min(520px, calc(100% - 32px));
        background: white;
        border-radius: 24px;
        padding: 28px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, .12);
    }
    h1 { margin: 0 0 8px; font-size: 28px; }
    p { margin: 0 0 18px; color: #667085; }
    .error {
        background: #fee2e2;
        color: #991b1b;
        padding: 10px 12px;
        border-radius: 12px;
        margin-bottom: 14px;
        font-size: 14px;
    }
    .grid { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
    .field { margin-bottom: 14px; }
    label { display:block; margin-bottom:6px; font-size:13px; color:#111827; }
    input {
        width:100%; box-sizing:border-box; padding:12px 14px; border-radius:12px;
        border:1px solid #d7ddf2; outline:none; font-size:14px;
    }
    input:focus { border-color:#5b7cff; box-shadow:0 0 0 3px rgba(91,124,255,.12); }
    button {
        width:100%; padding:12px 14px; border:0; border-radius:12px;
        background:#5b7cff; color:white; font-weight:700; cursor:pointer; margin-top:6px;
    }
    .bottom { margin-top:14px; font-size:14px; color:#667085; text-align:center; }
    a { color:#5b7cff; text-decoration:none; font-weight:700; }
    @media (max-width: 640px) { .grid { grid-template-columns: 1fr; } }
</style>

<div class=\"card\">
    <h1>Create account</h1>
    <p>Register a BizCore user account.</p>

    ";
        // line 53
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "        <div class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "</div>
    ";
        }
        // line 56
        yield "
    <form method=\"post\" action=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
        <div class=\"grid\">
            <div class=\"field\">
                <label>First name</label>
                <input type=\"text\" name=\"prenom\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 61, $this->source); })()), "prenom", [], "any", false, false, false, 61), "html", null, true);
        yield "\" required minlength=\"2\" maxlength=\"50\" autocomplete=\"given-name\">
            </div>
            <div class=\"field\">
                <label>Last name</label>
                <input type=\"text\" name=\"nom\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), "html", null, true);
        yield "\" required minlength=\"2\" maxlength=\"50\" autocomplete=\"family-name\">
            </div>
        </div>

        <div class=\"field\">
            <label>Email</label>
            <input type=\"email\" name=\"email\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), "html", null, true);
        yield "\" required maxlength=\"100\" autocomplete=\"email\">
        </div>

        <div class=\"grid\">
            <div class=\"field\">
                <label>Password</label>
                <input type=\"password\" name=\"password\" required minlength=\"8\" maxlength=\"100\" autocomplete=\"new-password\">
            </div>
            <div class=\"field\">
                <label>Phone</label>
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 81, $this->source); })()), "telephone", [], "any", false, false, false, 81), "html", null, true);
        yield "\" maxlength=\"20\" autocomplete=\"tel\">
            </div>
        </div>

        <div class=\"field\">
            <label>Address</label>
            <input type=\"text\" name=\"adresse\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["old"]) || array_key_exists("old", $context) ? $context["old"] : (function () { throw new RuntimeError('Variable "old" does not exist.', 87, $this->source); })()), "adresse", [], "any", false, false, false, 87), "html", null, true);
        yield "\" maxlength=\"255\" autocomplete=\"street-address\">
        </div>

        <button type=\"submit\">Register</button>
    </form>

    <div class=\"bottom\">
        Already have an account? <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/register.html.twig";
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
        return array (  200 => 94,  190 => 87,  181 => 81,  168 => 71,  159 => 65,  152 => 61,  145 => 57,  142 => 56,  136 => 54,  134 => 53,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register - BizCore{% endblock %}

{% block body %}
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #d7d6ff, #c9caf7);
        min-height: 100vh;
        display: grid;
        place-items: center;
    }
    .card {
        width: min(520px, calc(100% - 32px));
        background: white;
        border-radius: 24px;
        padding: 28px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, .12);
    }
    h1 { margin: 0 0 8px; font-size: 28px; }
    p { margin: 0 0 18px; color: #667085; }
    .error {
        background: #fee2e2;
        color: #991b1b;
        padding: 10px 12px;
        border-radius: 12px;
        margin-bottom: 14px;
        font-size: 14px;
    }
    .grid { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
    .field { margin-bottom: 14px; }
    label { display:block; margin-bottom:6px; font-size:13px; color:#111827; }
    input {
        width:100%; box-sizing:border-box; padding:12px 14px; border-radius:12px;
        border:1px solid #d7ddf2; outline:none; font-size:14px;
    }
    input:focus { border-color:#5b7cff; box-shadow:0 0 0 3px rgba(91,124,255,.12); }
    button {
        width:100%; padding:12px 14px; border:0; border-radius:12px;
        background:#5b7cff; color:white; font-weight:700; cursor:pointer; margin-top:6px;
    }
    .bottom { margin-top:14px; font-size:14px; color:#667085; text-align:center; }
    a { color:#5b7cff; text-decoration:none; font-weight:700; }
    @media (max-width: 640px) { .grid { grid-template-columns: 1fr; } }
</style>

<div class=\"card\">
    <h1>Create account</h1>
    <p>Register a BizCore user account.</p>

    {% if error %}
        <div class=\"error\">{{ error }}</div>
    {% endif %}

    <form method=\"post\" action=\"{{ path('app_register') }}\">
        <div class=\"grid\">
            <div class=\"field\">
                <label>First name</label>
                <input type=\"text\" name=\"prenom\" value=\"{{ old.prenom }}\" required minlength=\"2\" maxlength=\"50\" autocomplete=\"given-name\">
            </div>
            <div class=\"field\">
                <label>Last name</label>
                <input type=\"text\" name=\"nom\" value=\"{{ old.nom }}\" required minlength=\"2\" maxlength=\"50\" autocomplete=\"family-name\">
            </div>
        </div>

        <div class=\"field\">
            <label>Email</label>
            <input type=\"email\" name=\"email\" value=\"{{ old.email }}\" required maxlength=\"100\" autocomplete=\"email\">
        </div>

        <div class=\"grid\">
            <div class=\"field\">
                <label>Password</label>
                <input type=\"password\" name=\"password\" required minlength=\"8\" maxlength=\"100\" autocomplete=\"new-password\">
            </div>
            <div class=\"field\">
                <label>Phone</label>
                <input type=\"tel\" name=\"telephone\" value=\"{{ old.telephone }}\" maxlength=\"20\" autocomplete=\"tel\">
            </div>
        </div>

        <div class=\"field\">
            <label>Address</label>
            <input type=\"text\" name=\"adresse\" value=\"{{ old.adresse }}\" maxlength=\"255\" autocomplete=\"street-address\">
        </div>

        <button type=\"submit\">Register</button>
    </form>

    <div class=\"bottom\">
        Already have an account? <a href=\"{{ path('app_login') }}\">Login</a>
    </div>
</div>
{% endblock %}", "security/register.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\security\\register.html.twig");
    }
}
