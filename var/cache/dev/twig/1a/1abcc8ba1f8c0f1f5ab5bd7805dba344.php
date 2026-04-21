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

/* marketplace/sell.html.twig */
class __TwigTemplate_8e25713c4f60a1d829b8baa5d920bf50 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "marketplace/sell.html.twig"));

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

        yield "Vendre un produit";
        
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
    .sell-container {
        max-width: 850px;
        margin: 50px auto;
        padding: 40px 50px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
        border: 1px solid #f1f5f9;
    }
    .sell-header {
        text-align: center;
        margin-bottom: 35px;
    }
    .sell-title {
        font-size: 32px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 8px;
        letter-spacing: -0.5px;
    }
    .sell-subtitle {
        color: #64748b;
        font-size: 16px;
    }
    
    .form-group {
        margin-bottom: 24px;
    }
    .form-group label {
        display: block;
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
        font-size: 14px;
    }
    .form-control {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 15px;
        color: #1e293b;
        transition: all 0.3s ease;
        background: #f8fafc;
    }
    .form-control:focus {
        border-color: #3b82f6;
        background: #fff;
        outline: none;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
    }
    input[type=\"file\"] {
        padding: 10px;
        background: #fff;
    }
    input[type=\"file\"]::file-selector-button {
        padding: 8px 16px;
        border-radius: 6px;
        border: none;
        background: #e2e8f0;
        color: #334155;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
        margin-right: 12px;
    }
    input[type=\"file\"]::file-selector-button:hover {
        background: #cbd5e1;
    }
    .btn-submit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: #fff;
        font-weight: 700;
        font-size: 17px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.4);
    }
    .text-danger { color: #ef4444; font-size: 13px; margin-top: 6px; display: block; font-weight: 500; }
</style>

<div class=\"sell-container\">
    <div class=\"sell-header\">
        <h1 class=\"sell-title\">🌟 Vendre un produit</h1>
        <p class=\"sell-subtitle\">Publiez votre annonce et atteignez notre communauté instantanément.</p>
    </div>

    ";
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
            <div class=\"form-group\" style=\"grid-column: span 2;\">
                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "nomProduit", [], "any", false, false, false, 110), 'label');
        yield "
                ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "nomProduit", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "nomProduit", [], "any", false, false, false, 112), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "prix", [], "any", false, false, false, 116), 'label');
        yield "
                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "prix", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "prix", [], "any", false, false, false, 118), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "stockDisponible", [], "any", false, false, false, 122), 'label');
        yield "
                ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "stockDisponible", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "stockDisponible", [], "any", false, false, false, 124), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "categorie", [], "any", false, false, false, 128), 'label');
        yield "
                ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "categorie", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "categorie", [], "any", false, false, false, 130), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vendorName", [], "any", false, false, false, 134), 'label');
        yield "
                ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "vendorName", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vendorName", [], "any", false, false, false, 136), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "telephone", [], "any", false, false, false, 140), 'label');
        yield "
                ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "telephone", [], "any", false, false, false, 141), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "telephone", [], "any", false, false, false, 142), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "rating", [], "any", false, false, false, 146), 'label');
        yield "
                ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "rating", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "rating", [], "any", false, false, false, 148), 'errors');
        yield "
            </div>

            <div class=\"form-group\">
                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "statut", [], "any", false, false, false, 152), 'label');
        yield "
                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "statut", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "statut", [], "any", false, false, false, 154), 'errors');
        yield "
            </div>

            <div class=\"form-group\" style=\"grid-column: span 2;\">
                ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "imageFile", [], "any", false, false, false, 158), 'label');
        yield "
                ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "imageFile", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "imageFile", [], "any", false, false, false, 160), 'errors');
        yield "
                <small style=\"color: #64748b; font-size: 12px; margin-top: 4px; display: block;\">Formats acceptés: JPG, PNG. Taille maxi: 2Mo.</small>
            </div>
            
            <div class=\"form-group\" style=\"grid-column: span 2;\">
                ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "description", [], "any", false, false, false, 165), 'label');
        yield "
                ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "description", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, false, 167), 'errors');
        yield "
            </div>
        </div>

        <button type=\"submit\" class=\"btn-submit\">
            <i class=\"fas fa-rocket\"></i> Publier mon annonce
        </button>
    ";
        // line 174
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), 'form_end');
        yield "
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
        return "marketplace/sell.html.twig";
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
        return array (  348 => 174,  338 => 167,  334 => 166,  330 => 165,  322 => 160,  318 => 159,  314 => 158,  307 => 154,  303 => 153,  299 => 152,  292 => 148,  288 => 147,  284 => 146,  277 => 142,  273 => 141,  269 => 140,  262 => 136,  258 => 135,  254 => 134,  247 => 130,  243 => 129,  239 => 128,  232 => 124,  228 => 123,  224 => 122,  217 => 118,  213 => 117,  209 => 116,  202 => 112,  198 => 111,  194 => 110,  188 => 107,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vendre un produit{% endblock %}

{% block body %}
<style>
    .sell-container {
        max-width: 850px;
        margin: 50px auto;
        padding: 40px 50px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
        border: 1px solid #f1f5f9;
    }
    .sell-header {
        text-align: center;
        margin-bottom: 35px;
    }
    .sell-title {
        font-size: 32px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 8px;
        letter-spacing: -0.5px;
    }
    .sell-subtitle {
        color: #64748b;
        font-size: 16px;
    }
    
    .form-group {
        margin-bottom: 24px;
    }
    .form-group label {
        display: block;
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
        font-size: 14px;
    }
    .form-control {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 15px;
        color: #1e293b;
        transition: all 0.3s ease;
        background: #f8fafc;
    }
    .form-control:focus {
        border-color: #3b82f6;
        background: #fff;
        outline: none;
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
    }
    input[type=\"file\"] {
        padding: 10px;
        background: #fff;
    }
    input[type=\"file\"]::file-selector-button {
        padding: 8px 16px;
        border-radius: 6px;
        border: none;
        background: #e2e8f0;
        color: #334155;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
        margin-right: 12px;
    }
    input[type=\"file\"]::file-selector-button:hover {
        background: #cbd5e1;
    }
    .btn-submit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: #fff;
        font-weight: 700;
        font-size: 17px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.4);
    }
    .text-danger { color: #ef4444; font-size: 13px; margin-top: 6px; display: block; font-weight: 500; }
</style>

<div class=\"sell-container\">
    <div class=\"sell-header\">
        <h1 class=\"sell-title\">🌟 Vendre un produit</h1>
        <p class=\"sell-subtitle\">Publiez votre annonce et atteignez notre communauté instantanément.</p>
    </div>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
        <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
            <div class=\"form-group\" style=\"grid-column: span 2;\">
                {{ form_label(form.nomProduit) }}
                {{ form_widget(form.nomProduit, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.nomProduit) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.prix) }}
                {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.prix) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.stockDisponible) }}
                {{ form_widget(form.stockDisponible, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.stockDisponible) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.categorie) }}
                {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.categorie) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.vendorName) }}
                {{ form_widget(form.vendorName, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.vendorName) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.telephone) }}
                {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.telephone) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.rating) }}
                {{ form_widget(form.rating, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.rating) }}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.statut) }}
                {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.statut) }}
            </div>

            <div class=\"form-group\" style=\"grid-column: span 2;\">
                {{ form_label(form.imageFile) }}
                {{ form_widget(form.imageFile, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.imageFile) }}
                <small style=\"color: #64748b; font-size: 12px; margin-top: 4px; display: block;\">Formats acceptés: JPG, PNG. Taille maxi: 2Mo.</small>
            </div>
            
            <div class=\"form-group\" style=\"grid-column: span 2;\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.description) }}
            </div>
        </div>

        <button type=\"submit\" class=\"btn-submit\">
            <i class=\"fas fa-rocket\"></i> Publier mon annonce
        </button>
    {{ form_end(form) }}
</div>
{% endblock %}
", "marketplace/sell.html.twig", "C:\\Users\\dhiaj_onolvpc\\Desktop\\FINAL\\FINAL\\templates\\marketplace\\sell.html.twig");
    }
}
