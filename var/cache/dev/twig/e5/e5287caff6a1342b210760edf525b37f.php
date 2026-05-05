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

/* components/_front_gestion_nav.html.twig */
class __TwigTemplate_0fbdca3131eda3b35e166204e7c2297a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_front_gestion_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_front_gestion_nav.html.twig"));

        // line 1
        $context["currentRoute"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 1), "attributes", [], "any", false, true, false, 1), "get", ["_route"], "method", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1), "")) : (""));
        // line 2
        $context["userInitialSource"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "prenom", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "prenom", [], "any", false, false, false, 2), "")) : (""))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "prenom", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "prenom", [], "any", false, false, false, 2), "")) : (""))) : (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "nom", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "nom", [], "any", false, false, false, 2), "")) : (""))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "nom", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "nom", [], "any", false, false, false, 2), "")) : (""))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 2), "email", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "email", [], "any", false, false, false, 2), "")) : (""))))))) : (""));
        // line 3
        $context["userInitial"] = (((($tmp = (isset($context["userInitialSource"]) || array_key_exists("userInitialSource", $context) ? $context["userInitialSource"] : (function () { throw new RuntimeError('Variable "userInitialSource" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["userInitialSource"]) || array_key_exists("userInitialSource", $context) ? $context["userInitialSource"] : (function () { throw new RuntimeError('Variable "userInitialSource" does not exist.', 3, $this->source); })()), 0, 1))) : ("U"));
        // line 4
        yield "
<style>
    .gestion-front-nav {
        position: sticky;
        top: 0;
        z-index: 900;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        min-height: 64px;
        padding: 0 40px;
        background: #ffffff;
        border-bottom: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(15, 23, 42, 0.06);
        font-family: Inter, Arial, sans-serif;
    }

    .gestion-front-nav__brand {
        color: #0f172a;
        font-size: 20px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
    }

    .gestion-front-nav__brand span {
        color: #15803d;
    }

    .gestion-front-nav__links {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .gestion-front-nav__right {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .gestion-front-nav__link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 36px;
        padding: 8px 13px;
        border-radius: 8px;
        color: #475569;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        transition: background 0.15s, color 0.15s;
    }

    .gestion-front-nav__link:hover {
        background: #f1f5f9;
        color: #0f172a;
    }

    .gestion-front-nav__link.is-active {
        background: #dcfce7;
        color: #166534;
    }

    .gestion-front-nav__avatar {
        width: 36px;
        height: 36px;
        border: 0;
        border-radius: 50%;
        background: #15803d;
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.24);
    }

    .gestion-front-nav__notif {
        position: relative;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #f1f5f9;
        color: #334155;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: 900;
        text-decoration: none;
    }

    .gestion-front-nav__notif::after {
        content: \"\";
        position: absolute;
        top: 7px;
        right: 8px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #ef4444;
        border: 2px solid #ffffff;
    }

    .gestion-front-nav__login {
        min-height: 36px;
        padding: 8px 14px;
        border-radius: 8px;
        background: #15803d;
        color: #ffffff;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
    }

    @media (max-width: 760px) {
        .gestion-front-nav {
            align-items: flex-start;
            flex-direction: column;
            padding: 14px 18px;
        }

        .gestion-front-nav__links {
            justify-content: flex-start;
            width: 100%;
        }

        .gestion-front-nav__right {
            justify-content: space-between;
            width: 100%;
        }
    }
</style>

<nav class=\"gestion-front-nav\" aria-label=\"Gestion front navigation\">
    <a class=\"gestion-front-nav__brand\" href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Biz<span>core</span></a>

    <div class=\"gestion-front-nav__links\">
        <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 152
        yield ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 152, $this->source); })()) == "home")) ? ("is-active") : (""));
        yield "\">Accueil</a>
        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 154
        yield (((((is_string($_v0 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 154, $this->source); })())) && is_string($_v1 = "marketplace") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 154, $this->source); })())) && is_string($_v3 = "cart") && str_starts_with($_v2, $_v3))) || (is_string($_v4 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 154, $this->source); })())) && is_string($_v5 = "payment") && str_starts_with($_v4, $_v5)))) ? ("is-active") : (""));
        yield "\">Marketplace</a>
        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 156
        yield (((((is_string($_v6 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 156, $this->source); })())) && is_string($_v7 = "evenement") && str_starts_with($_v6, $_v7)) || (is_string($_v8 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 156, $this->source); })())) && is_string($_v9 = "events") && str_starts_with($_v8, $_v9))) || (is_string($_v10 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 156, $this->source); })())) && is_string($_v11 = "waitlist") && str_starts_with($_v10, $_v11)))) ? ("is-active") : (""));
        yield "\">Evenements</a>
        <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 158
        yield (((is_string($_v12 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 158, $this->source); })())) && is_string($_v13 = "app_coach") && str_starts_with($_v12, $_v13))) ? ("is-active") : (""));
        yield "\">Coaching</a>
        <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 160
        yield ((((is_string($_v14 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 160, $this->source); })())) && is_string($_v15 = "frontend_blog") && str_starts_with($_v14, $_v15)) || (is_string($_v16 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 160, $this->source); })())) && is_string($_v17 = "signalement") && str_starts_with($_v16, $_v17)))) ? ("is-active") : (""));
        yield "\">Blog</a>
        <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 162
        yield (((is_string($_v18 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 162, $this->source); })())) && is_string($_v19 = "reservation") && str_starts_with($_v18, $_v19))) ? ("is-active") : (""));
        yield "\">Reservations</a>
        <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\"
           class=\"gestion-front-nav__link ";
        // line 164
        yield (((is_string($_v20 = (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 164, $this->source); })())) && is_string($_v21 = "profile") && str_starts_with($_v20, $_v21))) ? ("is-active") : (""));
        yield "\">Profil</a>
    </div>

    <div class=\"gestion-front-nav__right\">
        ";
        // line 168
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_my");
            yield "\" class=\"gestion-front-nav__notif\" aria-label=\"Notifications\" title=\"Notifications\">!</a>
            <a href=\"";
            // line 170
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
            yield "\" class=\"gestion-front-nav__avatar\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 170), "email", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "email", [], "any", false, false, false, 170), "Profil")) : ("Profil")), "html", null, true);
            yield "\" aria-label=\"Profil\">
                ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userInitial"]) || array_key_exists("userInitial", $context) ? $context["userInitial"] : (function () { throw new RuntimeError('Variable "userInitial" does not exist.', 171, $this->source); })()), "html", null, true);
            yield "
            </a>
        ";
        } else {
            // line 174
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"gestion-front-nav__login\">Login</a>
        ";
        }
        // line 176
        yield "    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_front_gestion_nav.html.twig";
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
        return array (  290 => 176,  284 => 174,  278 => 171,  272 => 170,  267 => 169,  265 => 168,  258 => 164,  254 => 163,  250 => 162,  246 => 161,  242 => 160,  238 => 159,  234 => 158,  230 => 157,  226 => 156,  222 => 155,  218 => 154,  214 => 153,  210 => 152,  206 => 151,  200 => 148,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set currentRoute = app.request.attributes.get('_route')|default('') %}
{% set userInitialSource = app.user ? (app.user.prenom|default('') ?: app.user.nom|default('') ?: app.user.email|default('')) : '' %}
{% set userInitial = userInitialSource ? userInitialSource|slice(0, 1)|upper : 'U' %}

<style>
    .gestion-front-nav {
        position: sticky;
        top: 0;
        z-index: 900;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        min-height: 64px;
        padding: 0 40px;
        background: #ffffff;
        border-bottom: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(15, 23, 42, 0.06);
        font-family: Inter, Arial, sans-serif;
    }

    .gestion-front-nav__brand {
        color: #0f172a;
        font-size: 20px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
    }

    .gestion-front-nav__brand span {
        color: #15803d;
    }

    .gestion-front-nav__links {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .gestion-front-nav__right {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .gestion-front-nav__link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 36px;
        padding: 8px 13px;
        border-radius: 8px;
        color: #475569;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        transition: background 0.15s, color 0.15s;
    }

    .gestion-front-nav__link:hover {
        background: #f1f5f9;
        color: #0f172a;
    }

    .gestion-front-nav__link.is-active {
        background: #dcfce7;
        color: #166534;
    }

    .gestion-front-nav__avatar {
        width: 36px;
        height: 36px;
        border: 0;
        border-radius: 50%;
        background: #15803d;
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.24);
    }

    .gestion-front-nav__notif {
        position: relative;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #f1f5f9;
        color: #334155;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: 900;
        text-decoration: none;
    }

    .gestion-front-nav__notif::after {
        content: \"\";
        position: absolute;
        top: 7px;
        right: 8px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #ef4444;
        border: 2px solid #ffffff;
    }

    .gestion-front-nav__login {
        min-height: 36px;
        padding: 8px 14px;
        border-radius: 8px;
        background: #15803d;
        color: #ffffff;
        font-size: 13px;
        font-weight: 800;
        text-decoration: none;
        white-space: nowrap;
    }

    @media (max-width: 760px) {
        .gestion-front-nav {
            align-items: flex-start;
            flex-direction: column;
            padding: 14px 18px;
        }

        .gestion-front-nav__links {
            justify-content: flex-start;
            width: 100%;
        }

        .gestion-front-nav__right {
            justify-content: space-between;
            width: 100%;
        }
    }
</style>

<nav class=\"gestion-front-nav\" aria-label=\"Gestion front navigation\">
    <a class=\"gestion-front-nav__brand\" href=\"{{ path('home') }}\">Biz<span>core</span></a>

    <div class=\"gestion-front-nav__links\">
        <a href=\"{{ path('home') }}\"
           class=\"gestion-front-nav__link {{ currentRoute == 'home' ? 'is-active' : '' }}\">Accueil</a>
        <a href=\"{{ path('marketplace_index') }}\"
           class=\"gestion-front-nav__link {{ currentRoute starts with 'marketplace' or currentRoute starts with 'cart' or currentRoute starts with 'payment' ? 'is-active' : '' }}\">Marketplace</a>
        <a href=\"{{ path('evenement_front') }}\"
           class=\"gestion-front-nav__link {{ currentRoute starts with 'evenement' or currentRoute starts with 'events' or currentRoute starts with 'waitlist' ? 'is-active' : '' }}\">Evenements</a>
        <a href=\"{{ path('app_coach_index') }}\"
           class=\"gestion-front-nav__link {{ currentRoute starts with 'app_coach' ? 'is-active' : '' }}\">Coaching</a>
        <a href=\"{{ path('frontend_blog_index') }}\"
           class=\"gestion-front-nav__link {{ currentRoute starts with 'frontend_blog' or currentRoute starts with 'signalement' ? 'is-active' : '' }}\">Blog</a>
        <a href=\"{{ path('reservation_my') }}\"
           class=\"gestion-front-nav__link {{ currentRoute starts with 'reservation' ? 'is-active' : '' }}\">Reservations</a>
        <a href=\"{{ path('profile_index') }}\"
           class=\"gestion-front-nav__link {{ currentRoute starts with 'profile' ? 'is-active' : '' }}\">Profil</a>
    </div>

    <div class=\"gestion-front-nav__right\">
        {% if app.user %}
            <a href=\"{{ path('reservation_my') }}\" class=\"gestion-front-nav__notif\" aria-label=\"Notifications\" title=\"Notifications\">!</a>
            <a href=\"{{ path('profile_index') }}\" class=\"gestion-front-nav__avatar\" title=\"{{ app.user.email|default('Profil') }}\" aria-label=\"Profil\">
                {{ userInitial }}
            </a>
        {% else %}
            <a href=\"{{ path('app_login') }}\" class=\"gestion-front-nav__login\">Login</a>
        {% endif %}
    </div>
</nav>
", "components/_front_gestion_nav.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\components\\_front_gestion_nav.html.twig");
    }
}
