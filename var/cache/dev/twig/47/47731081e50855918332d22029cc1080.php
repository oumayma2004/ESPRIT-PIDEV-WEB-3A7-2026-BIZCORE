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

/* home/choice.html.twig */
class __TwigTemplate_a4ebf5843aad822fb500a95f0c59a85d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/choice.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:#0f172a;
            font-family:sans-serif;
        }
        .box {
            text-align:center;
        }
        a {
            display:block;
            margin:20px;
            padding:15px 30px;
            background:#22c55e;
            color:white;
            text-decoration:none;
            border-radius:10px;
            font-size:18px;
        }
        a.admin { background:#3b82f6; }
    </style>
</head>
<body>
<div class=\"box\">
    <h1 style=\"color:white;\">Choose Mode</h1>

    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        yield "\" class=\"admin\">
        Enter Admin Dashboard
    </a>

    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index");
        yield "\">
        Enter Blog (User)
    </a>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/choice.html.twig";
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
        return array (  90 => 38,  83 => 34,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background:#0f172a;
            font-family:sans-serif;
        }
        .box {
            text-align:center;
        }
        a {
            display:block;
            margin:20px;
            padding:15px 30px;
            background:#22c55e;
            color:white;
            text-decoration:none;
            border-radius:10px;
            font-size:18px;
        }
        a.admin { background:#3b82f6; }
    </style>
</head>
<body>
<div class=\"box\">
    <h1 style=\"color:white;\">Choose Mode</h1>

    <a href=\"{{ path('article_index') }}\" class=\"admin\">
        Enter Admin Dashboard
    </a>

    <a href=\"{{ path('frontend_blog_index') }}\">
        Enter Blog (User)
    </a>
</div>
</body>
</html>", "home/choice.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\home\\choice.html.twig");
    }
}
