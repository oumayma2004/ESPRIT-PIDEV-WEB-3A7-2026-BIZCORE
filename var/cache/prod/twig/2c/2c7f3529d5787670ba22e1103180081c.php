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
class __TwigTemplate_238d9a1d147f89ab9a8db8f528b039ba extends Template
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
        yield "Register - BizCore";
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
    <div id=\"captchaStatus\" style=\"display:none; margin-bottom:14px; padding:10px 12px; border-radius:12px; font-size:14px; font-weight:700;\"></div>

    ";
        // line 54
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "        <div class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</div>
    ";
        }
        // line 57
        yield "
    <form method=\"post\" action=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" id=\"registerForm\">
        <input type=\"hidden\" name=\"recaptcha_token\" id=\"recaptcha_token\">

        <div class=\"grid\">
            <div class=\"field\">
                <label>First name</label>
                <input type=\"text\" name=\"prenom\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "prenom", [], "any", false, false, false, 64), "html", null, true);
        yield "\" required minlength=\"2\" maxlength=\"50\" autocomplete=\"given-name\">
            </div>
            <div class=\"field\">
                <label>Last name</label>
                <input type=\"text\" name=\"nom\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "nom", [], "any", false, false, false, 68), "html", null, true);
        yield "\" required minlength=\"2\" maxlength=\"50\" autocomplete=\"family-name\">
            </div>
        </div>

        <div class=\"field\">
            <label>Email</label>
            <input type=\"email\" name=\"email\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 74), "html", null, true);
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
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "telephone", [], "any", false, false, false, 84), "html", null, true);
        yield "\" maxlength=\"20\" autocomplete=\"tel\">
            </div>
        </div>

        <div class=\"field\">
            <label>Address</label>
            <input type=\"text\" name=\"adresse\" value=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "adresse", [], "any", false, false, false, 90), "html", null, true);
        yield "\" maxlength=\"255\" autocomplete=\"street-address\">
        </div>

        <button type=\"submit\">Register</button>
    </form>

    <div class=\"bottom\">
        Already have an account? <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
    </div>
</div>

";
        // line 101
        if ((($tmp = ($context["recaptchaEnabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "<script src=\"https://www.google.com/recaptcha/api.js?render=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptchaSiteKey"] ?? null), "html", null, true);
            yield "\"></script>
<script>
    const form = document.getElementById('registerForm');
    const tokenInput = document.getElementById('recaptcha_token');
    const statusBox = document.getElementById('captchaStatus');

    function showStatus(message, ok) {
        statusBox.style.display = 'block';
        statusBox.textContent = message;
        statusBox.style.background = ok ? '#dcfce7' : '#fee2e2';
        statusBox.style.color = ok ? '#166534' : '#991b1b';
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (typeof grecaptcha === 'undefined') {
            showStatus('Captcha not loaded. Please refresh the page.', false);
            return;
        }

        grecaptcha.ready(function () {
            grecaptcha.execute('";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recaptchaSiteKey"] ?? null), "html", null, true);
            yield "', { action: 'register' })
                .then(function (token) {
                    tokenInput.value = token;
                    showStatus('Captcha verified ✓', true);

                    setTimeout(function () {
                        form.submit();
                    }, 500);
                })
                .catch(function () {
                    showStatus('Captcha verification failed. Please try again.', false);
                });
        });
    });
</script>
";
        }
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
        return array (  223 => 124,  197 => 102,  195 => 101,  188 => 97,  178 => 90,  169 => 84,  156 => 74,  147 => 68,  140 => 64,  131 => 58,  128 => 57,  122 => 55,  120 => 54,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/register.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\security\\register.html.twig");
    }
}
