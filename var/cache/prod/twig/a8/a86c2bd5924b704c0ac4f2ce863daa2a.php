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

/* security/login.html.twig */
class __TwigTemplate_893b170d870ad8a5b93912a1a5e53543 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Connexion a votre compte Bizcore pour acceder a votre tableau de bord et gerer vos activites.\">
    <title>Connexion - Bizcore</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            background: #f3f6f8;
            color: #111827;
            font-family: Arial, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", sans-serif;
        }

        .login-container {
            width: min(100%, 420px);
            padding: 42px 38px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
        }

        .logo-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 12px;
            border-radius: 50%;
            background: #148765;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 31px;
            font-weight: 800;
        }

        h1 {
            margin: 0 0 6px;
            color: #1a2332;
            font-size: 24px;
            line-height: 1.2;
        }

        .logo-subtitle {
            margin: 0;
            color: #4b5563;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            color: #374151;
            font-size: 13px;
            font-weight: 700;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #cbd5e1;
            border-radius: 8px;
            color: #111827;
            font-size: 15px;
            outline: none;
        }

        .form-control:focus {
            border-color: #148765;
            box-shadow: 0 0 0 3px rgba(20, 135, 101, 0.15);
        }

        .btn-login {
            width: 100%;
            min-height: 45px;
            margin-top: 8px;
            border: 0;
            border-radius: 8px;
            background: #148765;
            color: #ffffff;
            cursor: pointer;
            font-size: 15px;
            font-weight: 800;
        }

        .btn-login:hover,
        .btn-login:focus {
            background: #0f6f53;
        }

        .alert-error {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            padding: 12px 14px;
            border: 1px solid #fca5a5;
            border-radius: 8px;
            background: #fee2e2;
            color: #7f1d1d;
            font-size: 13px;
            line-height: 1.4;
        }

        .auth-switch {
            margin: 16px 0 0;
            text-align: center;
            color: #4b5563;
            font-size: 13px;
        }

        .auth-switch a {
            color: #11694f;
            font-weight: 800;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        @media (max-width: 520px) {
            body {
                padding: 16px;
            }

            .login-container {
                padding: 32px 24px;
            }
        }
    </style>
</head>
<body>
<main class=\"login-container\">
    <section class=\"logo-section\" aria-labelledby=\"login-title\">
        <div class=\"logo-icon\" aria-hidden=\"true\">B</div>
        <h1 id=\"login-title\">Bizcore</h1>
        <p class=\"logo-subtitle\">Connectez-vous a votre compte</p>
    </section>

    ";
        // line 161
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "        <div class=\"alert-error\" role=\"alert\">
            <span aria-hidden=\"true\">!</span>
            <span>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 164), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 164), "security"), "html", null, true);
            yield "</span>
        </div>
    ";
        }
        // line 167
        yield "
    <form method=\"post\" action=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"email\">Email</label>
            <input type=\"email\"
                   id=\"email\"
                   name=\"_username\"
                   value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\"
                   class=\"form-control\"
                   placeholder=\"votre-email@exemple.com\"
                   autocomplete=\"email\"
                   required
                   autofocus>
        </div>

        <div class=\"form-group\">
            <label class=\"form-label\" for=\"password\">Mot de passe</label>
            <input type=\"password\"
                   id=\"password\"
                   name=\"_password\"
                   class=\"form-control\"
                   placeholder=\"Mot de passe\"
                   autocomplete=\"current-password\"
                   required>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <button type=\"submit\" class=\"btn-login\">Se connecter</button>

        <p class=\"auth-switch\">
            Pas encore de compte ?
            <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Creer un compte</a>
        </p>
    </form>
</main>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  259 => 199,  250 => 193,  228 => 174,  219 => 168,  216 => 167,  210 => 164,  206 => 162,  204 => 161,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\security\\login.html.twig");
    }
}
