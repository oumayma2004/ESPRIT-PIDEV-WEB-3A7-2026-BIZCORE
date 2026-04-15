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
class __TwigTemplate_52b1999fdfe241a047d32744d7fbddec extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Connexion — Bizcore</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: #fff;
            border-radius: 16px;
            padding: 48px 42px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 40px rgba(0,0,0,.08);
        }
        .logo-section {
            text-align: center;
            margin-bottom: 32px;
        }
        .logo-icon {
            width: 68px;
            height: 68px;
            background: #20c997;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .logo-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a2332;
            margin-bottom: 6px;
        }
        .logo-subtitle {
            font-size: 14px;
            color: #6b7280;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }
        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #111827;
            outline: none;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #20c997;
            box-shadow: 0 0 0 3px rgba(32,201,151,.1);
        }
        .btn-login {
            width: 100%;
            padding: 13px;
            background: #20c997;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }
        .btn-login:hover {
            background: #1ab386;
        }
        .alert-error {
            background: #fee2e2;
            border: 1px solid #fca5a5;
            color: #991b1b;
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 13px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
<div class=\"login-container\">
    <div class=\"logo-section\">
        <div class=\"logo-icon\">B</div>
        <div class=\"logo-title\">Bizcore</div>
        <div class=\"logo-subtitle\">Connectez-vous à votre compte</div>
    </div>

    ";
        // line 117
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "    <div class=\"alert-error\">
        <i class=\"fas fa-exclamation-circle\"></i>
        <span>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 120, $this->source); })()), "messageKey", [], "any", false, false, false, 120), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 120, $this->source); })()), "messageData", [], "any", false, false, false, 120), "security"), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 123
        yield "
    <form method=\"post\" action=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"email\">Email</label>
            <input type=\"email\" 
                   id=\"email\" 
                   name=\"_username\"
                   value=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "\"
                   class=\"form-control\"
                   placeholder=\"votre-email@exemple.com\"
                   required 
                   autofocus>
        </div>

        <div class=\"form-group\">
            <label class=\"form-label\" for=\"password\">Mot de passe</label>
            <input type=\"password\" 
                   id=\"password\" 
                   name=\"_password\"
                   class=\"form-control\"
                   placeholder=\"••••••••\"
                   required>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <button type=\"submit\" class=\"btn-login\">
            Se connecter
        </button>

        <p style=\"text-align:center; margin-top:16px; font-size:13px; color:#667085;\">
            No account yet? <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" style=\"color:#20c997; font-weight:600;\">Create one</a>
        </p>
    </form>
</div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  217 => 154,  207 => 147,  187 => 130,  178 => 124,  175 => 123,  169 => 120,  165 => 118,  163 => 117,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Connexion — Bizcore</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: #fff;
            border-radius: 16px;
            padding: 48px 42px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 40px rgba(0,0,0,.08);
        }
        .logo-section {
            text-align: center;
            margin-bottom: 32px;
        }
        .logo-icon {
            width: 68px;
            height: 68px;
            background: #20c997;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .logo-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a2332;
            margin-bottom: 6px;
        }
        .logo-subtitle {
            font-size: 14px;
            color: #6b7280;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }
        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #111827;
            outline: none;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #20c997;
            box-shadow: 0 0 0 3px rgba(32,201,151,.1);
        }
        .btn-login {
            width: 100%;
            padding: 13px;
            background: #20c997;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }
        .btn-login:hover {
            background: #1ab386;
        }
        .alert-error {
            background: #fee2e2;
            border: 1px solid #fca5a5;
            color: #991b1b;
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 13px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
<div class=\"login-container\">
    <div class=\"logo-section\">
        <div class=\"logo-icon\">B</div>
        <div class=\"logo-title\">Bizcore</div>
        <div class=\"logo-subtitle\">Connectez-vous à votre compte</div>
    </div>

    {% if error %}
    <div class=\"alert-error\">
        <i class=\"fas fa-exclamation-circle\"></i>
        <span>{{ error.messageKey|trans(error.messageData, 'security') }}</span>
    </div>
    {% endif %}

    <form method=\"post\" action=\"{{ path('app_login') }}\">
        <div class=\"form-group\">
            <label class=\"form-label\" for=\"email\">Email</label>
            <input type=\"email\" 
                   id=\"email\" 
                   name=\"_username\"
                   value=\"{{ last_username }}\"
                   class=\"form-control\"
                   placeholder=\"votre-email@exemple.com\"
                   required 
                   autofocus>
        </div>

        <div class=\"form-group\">
            <label class=\"form-label\" for=\"password\">Mot de passe</label>
            <input type=\"password\" 
                   id=\"password\" 
                   name=\"_password\"
                   class=\"form-control\"
                   placeholder=\"••••••••\"
                   required>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <button type=\"submit\" class=\"btn-login\">
            Se connecter
        </button>

        <p style=\"text-align:center; margin-top:16px; font-size:13px; color:#667085;\">
            No account yet? <a href=\"{{ path('app_register') }}\" style=\"color:#20c997; font-weight:600;\">Create one</a>
        </p>
    </form>
</div>
</body>
</html>
", "security/login.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\security\\login.html.twig");
    }
}
