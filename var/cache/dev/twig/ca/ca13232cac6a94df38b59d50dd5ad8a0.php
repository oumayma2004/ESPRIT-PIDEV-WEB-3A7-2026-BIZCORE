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

/* profile/index.html.twig */
class __TwigTemplate_21319e65c265c5043969c1a0f204c981 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "Profile - BizCore";
        
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
        background: #f4f6ff;
        min-height: 100vh;
        display: grid;
        place-items: center;
    }
    .card {
        width: min(640px, calc(100% - 32px));
        background: white;
        border-radius: 24px;
        padding: 28px;
        box-shadow: 0 20px 60px rgba(0,0,0,.10);
    }
    .head {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 22px;
    }
    .avatar {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, #ffb199, #ff6a88);
        color: white;
        font-size: 28px;
        font-weight: 800;
    }
    h1 {
        margin: 0;
        font-size: 28px;
    }
    .role {
        color: #667085;
        margin-top: 4px;
    }
    .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }
    .item {
        padding: 14px;
        border: 1px solid #e5e7ef;
        border-radius: 16px;
        background: #fafbff;
    }
    .label {
        font-size: 12px;
        color: #667085;
        margin-bottom: 6px;
    }
    .value {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
        word-break: break-word;
    }
    .actions {
        margin-top: 18px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    a {
        display: inline-block;
        padding: 11px 14px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
    }
    .primary {
        background: #5b7cff;
        color: white;
    }
    .secondary {
        background: #eef2ff;
        color: #111827;
    }
    @media (max-width: 640px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }
</style>

";
        // line 97
        $context["fullName"] = Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 97, $this->source); })()), "prenom", [], "any", false, false, false, 97) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97)));
        // line 98
        $context["roleName"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 98, $this->source); })()), "roleEntity", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 98, $this->source); })()), "roleEntity", [], "any", false, false, false, 98), "nomRole", [], "any", false, false, false, 98)) : ("User"));
        // line 99
        $context["avatarLetter"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 99, $this->source); })()), "prenom", [], "any", false, false, false, 99)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 99, $this->source); })()), "prenom", [], "any", false, false, false, 99)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 99, $this->source); })()), "nom", [], "any", false, false, false, 99)))));
        // line 100
        yield "
<div class=\"card\">
    <div class=\"head\">
        <div class=\"avatar\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarLetter"]) || array_key_exists("avatarLetter", $context) ? $context["avatarLetter"] : (function () { throw new RuntimeError('Variable "avatarLetter" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "</div>
        <div>
            <h1>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fullName"]) || array_key_exists("fullName", $context) ? $context["fullName"] : (function () { throw new RuntimeError('Variable "fullName" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</h1>
            <div class=\"role\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</div>
        </div>
    </div>

    <div class=\"grid\">
        <div class=\"item\">
            <div class=\"label\">Email</div>
            <div class=\"value\">";
        // line 113
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 113, $this->source); })()), "email", [], "any", false, false, false, 113)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 113, $this->source); })()), "email", [], "any", false, false, false, 113), "html", null, true)) : ("-"));
        yield "</div>
        </div>

        <div class=\"item\">
            <div class=\"label\">Phone</div>
            <div class=\"value\">";
        // line 118
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 118, $this->source); })()), "telephone", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 118, $this->source); })()), "telephone", [], "any", false, false, false, 118), "html", null, true)) : ("-"));
        yield "</div>
        </div>

        <div class=\"item\">
            <div class=\"label\">Address</div>
            <div class=\"value\">";
        // line 123
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 123, $this->source); })()), "adresse", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 123, $this->source); })()), "adresse", [], "any", false, false, false, 123), "html", null, true)) : ("-"));
        yield "</div>
        </div>

        <div class=\"item\">
            <div class=\"label\">Status</div>
            <div class=\"value\">";
        // line 128
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 128, $this->source); })()), "statut", [], "any", false, false, false, 128)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 128, $this->source); })()), "statut", [], "any", false, false, false, 128), "html", null, true)) : ("-"));
        yield "</div>
        </div>
    </div>

    <div class=\"actions\">
        <a class=\"primary\" href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">Back to dashboard</a>
        <a class=\"secondary\" href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
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
        return "profile/index.html.twig";
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
        return array (  244 => 134,  240 => 133,  232 => 128,  224 => 123,  216 => 118,  208 => 113,  198 => 106,  194 => 105,  189 => 103,  184 => 100,  182 => 99,  180 => 98,  178 => 97,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile - BizCore{% endblock %}

{% block body %}
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f6ff;
        min-height: 100vh;
        display: grid;
        place-items: center;
    }
    .card {
        width: min(640px, calc(100% - 32px));
        background: white;
        border-radius: 24px;
        padding: 28px;
        box-shadow: 0 20px 60px rgba(0,0,0,.10);
    }
    .head {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 22px;
    }
    .avatar {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, #ffb199, #ff6a88);
        color: white;
        font-size: 28px;
        font-weight: 800;
    }
    h1 {
        margin: 0;
        font-size: 28px;
    }
    .role {
        color: #667085;
        margin-top: 4px;
    }
    .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }
    .item {
        padding: 14px;
        border: 1px solid #e5e7ef;
        border-radius: 16px;
        background: #fafbff;
    }
    .label {
        font-size: 12px;
        color: #667085;
        margin-bottom: 6px;
    }
    .value {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
        word-break: break-word;
    }
    .actions {
        margin-top: 18px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    a {
        display: inline-block;
        padding: 11px 14px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
    }
    .primary {
        background: #5b7cff;
        color: white;
    }
    .secondary {
        background: #eef2ff;
        color: #111827;
    }
    @media (max-width: 640px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }
</style>

{% set fullName = (profile.prenom ~ ' ' ~ profile.nom)|trim %}
{% set roleName = profile.roleEntity ? profile.roleEntity.nomRole : 'User' %}
{% set avatarLetter = (profile.prenom ?: profile.nom)|first|upper %}

<div class=\"card\">
    <div class=\"head\">
        <div class=\"avatar\">{{ avatarLetter }}</div>
        <div>
            <h1>{{ fullName }}</h1>
            <div class=\"role\">{{ roleName }}</div>
        </div>
    </div>

    <div class=\"grid\">
        <div class=\"item\">
            <div class=\"label\">Email</div>
            <div class=\"value\">{{ profile.email ?: '-' }}</div>
        </div>

        <div class=\"item\">
            <div class=\"label\">Phone</div>
            <div class=\"value\">{{ profile.telephone ?: '-' }}</div>
        </div>

        <div class=\"item\">
            <div class=\"label\">Address</div>
            <div class=\"value\">{{ profile.adresse ?: '-' }}</div>
        </div>

        <div class=\"item\">
            <div class=\"label\">Status</div>
            <div class=\"value\">{{ profile.statut ?: '-' }}</div>
        </div>
    </div>

    <div class=\"actions\">
        <a class=\"primary\" href=\"{{ path('dashboard') }}\">Back to dashboard</a>
        <a class=\"secondary\" href=\"{{ path('app_logout') }}\">Logout</a>
    </div>
</div>
{% endblock %}", "profile/index.html.twig", "C:\\Users\\melek\\Downloads\\wetransfer_esprit-pidev-web-3a7-2026-bizcore-main-zip_2026-04-09_1330\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\templates\\profile\\index.html.twig");
    }
}
