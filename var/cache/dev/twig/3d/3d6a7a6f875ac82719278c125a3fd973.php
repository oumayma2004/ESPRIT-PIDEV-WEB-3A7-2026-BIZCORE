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

/* coach/show.html.twig */
class __TwigTemplate_c4a6b03e1f0072385cc79e2a75285c68 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'nav_section_label' => [$this, 'block_nav_section_label'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 2, $this->source); })()), "prenom", [], "any", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        yield " — Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Profil Coach";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_section_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_section_label"));

        yield "Front Office";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        // line 7
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", ["_route"], "method", false, false, false, 7)) && is_string($_v1 = "app_coach") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
    <i class=\"fas fa-users\"></i> Coachs
</a>
<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index");
        yield "\" class=\"\">
    <i class=\"fas fa-lock\"></i> Administration
</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        yield "
<div style=\"max-width:860px;\">

    <div style=\"margin-bottom:20px;\">
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    ";
        // line 26
        yield "    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;margin-bottom:18px;\">
        <div style=\"background:linear-gradient(135deg,#1C2B3A 0%,#243447 100%);padding:32px;\">
            <div style=\"display:flex;align-items:center;gap:20px;flex-wrap:wrap;\">
                <div style=\"width:80px;height:80px;border-radius:18px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:30px;font-weight:700;flex-shrink:0;\">
                    ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 0, 1)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 0, 1)), "html", null, true);
        yield "
                </div>
                <div style=\"flex:1;\">
                    <h1 style=\"color:#fff;font-size:24px;font-weight:700;margin:0 0 8px;\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "html", null, true);
        yield "</h1>
                    <div style=\"display:flex;flex-wrap:wrap;gap:8px;\">
                        ";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 35, $this->source); })()), "domaine", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                        <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">
                            ";
            // line 37
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 37, $this->source); })()), "domaine", [], "any", false, false, false, 37) == "BRANDING")) {
                yield "🎨 Branding
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 38, $this->source); })()), "domaine", [], "any", false, false, false, 38) == "E_COMMERCE")) {
                yield "🛒 E-Commerce
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 39, $this->source); })()), "domaine", [], "any", false, false, false, 39) == "LEADERSHIP")) {
                yield "🏆 Leadership
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 40
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 40, $this->source); })()), "domaine", [], "any", false, false, false, 40) == "FINANCE")) {
                yield "💰 Finance
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 41
(isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 41, $this->source); })()), "domaine", [], "any", false, false, false, 41) == "FUNDING")) {
                yield "🚀 Financement
                            ";
            } else {
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 42, $this->source); })()), "domaine", [], "any", false, false, false, 42), "html", null, true);
            }
            // line 43
            yield "                        </span>
                        ";
        }
        // line 45
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 45, $this->source); })()), "disponibilite", [], "any", false, false, false, 45) == "Disponible")) {
            // line 46
            yield "                            <span style=\"background:#d1fae5;color:#065f46;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">✓ Disponible</span>
                        ";
        } else {
            // line 48
            yield "                            <span style=\"background:#fee2e2;color:#991b1b;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">✗ Indisponible</span>
                        ";
        }
        // line 50
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 50, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                        <span style=\"background:rgba(245,158,11,.2);color:#fbbf24;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">
                            <i class=\"fas fa-star\"></i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 52, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 52), "html", null, true);
            yield "/5
                        </span>
                        ";
        }
        // line 55
        yield "                    </div>
                </div>
                <div style=\"display:flex;flex-direction:column;gap:8px;\">
                    <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 58, $this->source); })()), "idCoach", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\"
                       style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:9px 18px;font-size:12px;font-weight:600;text-decoration:none;text-align:center;\">
                        <i class=\"fas fa-pen\"></i> Modifier
                    </a>
                </div>
            </div>
        </div>

        ";
        // line 67
        yield "        <div style=\"display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));border-bottom:1px solid #e8ecf0;\">
            <div style=\"padding:18px;text-align:center;border-right:1px solid #e8ecf0;\">
                <div style=\"font-size:22px;font-weight:700;color:#111827;\">";
        // line 69
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "experienceAnnees", [], "any", true, true, false, 69) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 69, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 69)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 69, $this->source); })()), "experienceAnnees", [], "any", false, false, false, 69), "html", null, true)) : ("—"));
        yield "</div>
                <div style=\"font-size:11px;color:#9ca3af;margin-top:2px;\">Années d'expérience</div>
            </div>
            <div style=\"padding:18px;text-align:center;border-right:1px solid #e8ecf0;\">
                <div style=\"font-size:22px;font-weight:700;color:var(--accent);\">
                    ";
        // line 74
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 74, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 74, $this->source); })()), "tarifHoraire", [], "any", false, false, false, 74), 0, "", ""), "html", null, true)) : ("—"));
        yield "
                </div>
                <div style=\"font-size:11px;color:#9ca3af;margin-top:2px;\">TND / heure</div>
            </div>
            <div style=\"padding:18px;text-align:center;\">
                <div style=\"font-size:22px;font-weight:700;color:#f59e0b;\">
                    ";
        // line 80
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "noteMoyenne", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 80, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 80)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 80, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 80), "html", null, true)) : ("—"));
        yield "
                </div>
                <div style=\"font-size:11px;color:#9ca3af;margin-top:2px;\">Note moyenne / 5</div>
            </div>
        </div>

        ";
        // line 87
        yield "        <div style=\"padding:24px;\">

            ";
        // line 90
        yield "            <div style=\"margin-bottom:20px;\">
                <h3 style=\"font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;color:#9ca3af;margin-bottom:12px;border-bottom:1px solid #f1f5f9;padding-bottom:8px;\">
                    <i class=\"fas fa-address-card\" style=\"margin-right:6px;\"></i> Contact
                </h3>
                <p style=\"font-size:14px;color:#374151;margin:0;\">
                    <i class=\"fas fa-phone\" style=\"color:var(--accent);width:18px;margin-right:8px;\"></i>
                    ";
        // line 96
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["coach"] ?? null), "numTel", [], "any", true, true, false, 96) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 96, $this->source); })()), "numTel", [], "any", false, false, false, 96)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 96, $this->source); })()), "numTel", [], "any", false, false, false, 96), "html", null, true)) : ("Non renseigné"));
        yield "
                </p>
            </div>

            ";
        // line 101
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 101, $this->source); })()), "biographie", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "            <div style=\"margin-bottom:20px;\">
                <h3 style=\"font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;color:#9ca3af;margin-bottom:12px;border-bottom:1px solid #f1f5f9;padding-bottom:8px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:6px;\"></i> Biographie
                </h3>
                <p style=\"font-size:14px;color:#374151;line-height:1.8;margin:0;\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 106, $this->source); })()), "biographie", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
            </div>
            ";
        }
        // line 109
        yield "
        </div>

        ";
        // line 113
        yield "        <div style=\"padding:16px 24px;background:#f8fafc;border-top:1px solid #e8ecf0;display:flex;gap:10px;flex-wrap:wrap;\">
            <a href=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 114, $this->source); })()), "idCoach", [], "any", false, false, false, 114)]), "html", null, true);
        yield "\" class=\"btn-teal\" style=\"text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:9px 20px;border-radius:6px;font-size:13px;\">
                <i class=\"fas fa-pen\"></i> Modifier
            </a>
            <a href=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 117, $this->source); })()), "idCoach", [], "any", false, false, false, 117)]), "html", null, true);
        yield "\" class=\"\"
               style=\"background:#fee2e2;color:#b91c1c;border:none;border-radius:6px;padding:9px 20px;font-size:13px;font-weight:600;text-decoration:none;display:inline-flex;align-items:center;gap:6px;\"
               onclick=\"return confirm('Supprimer ce coach ?')\">
                <i class=\"fas fa-trash\"></i> Supprimer
            </a>
            <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" class=\"btn-outline-teal\" style=\"text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:9px 20px;border-radius:6px;font-size:13px;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
        </div>
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
        return "coach/show.html.twig";
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
        return array (  348 => 122,  340 => 117,  334 => 114,  331 => 113,  326 => 109,  320 => 106,  314 => 102,  311 => 101,  304 => 96,  296 => 90,  292 => 87,  283 => 80,  274 => 74,  266 => 69,  262 => 67,  251 => 58,  246 => 55,  240 => 52,  237 => 51,  234 => 50,  230 => 48,  226 => 46,  223 => 45,  219 => 43,  216 => 42,  211 => 41,  207 => 40,  203 => 39,  199 => 38,  195 => 37,  192 => 36,  190 => 35,  183 => 33,  176 => 30,  170 => 26,  162 => 20,  156 => 16,  146 => 15,  134 => 10,  125 => 7,  115 => 6,  98 => 4,  81 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ coach.prenom }} {{ coach.nom }} — Profil{% endblock %}
{% block page_title %}Profil Coach{% endblock %}
{% block nav_section_label %}Front Office{% endblock %}

{% block sidebar_nav %}
<a href=\"{{ path('app_coach_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'app_coach' ? 'active' : '' }}\">
    <i class=\"fas fa-users\"></i> Coachs
</a>
<a href=\"{{ path('admin_coach_index') }}\" class=\"\">
    <i class=\"fas fa-lock\"></i> Administration
</a>
{% endblock %}

{% block body %}

<div style=\"max-width:860px;\">

    <div style=\"margin-bottom:20px;\">
        <a href=\"{{ path('app_coach_index') }}\" style=\"color:var(--accent);text-decoration:none;font-size:13px;font-weight:600;\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    {# ── HERO ── #}
    <div class=\"card-panel\" style=\"padding:0;overflow:hidden;margin-bottom:18px;\">
        <div style=\"background:linear-gradient(135deg,#1C2B3A 0%,#243447 100%);padding:32px;\">
            <div style=\"display:flex;align-items:center;gap:20px;flex-wrap:wrap;\">
                <div style=\"width:80px;height:80px;border-radius:18px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:30px;font-weight:700;flex-shrink:0;\">
                    {{ coach.prenom|slice(0,1)|upper }}{{ coach.nom|slice(0,1)|upper }}
                </div>
                <div style=\"flex:1;\">
                    <h1 style=\"color:#fff;font-size:24px;font-weight:700;margin:0 0 8px;\">{{ coach.prenom }} {{ coach.nom }}</h1>
                    <div style=\"display:flex;flex-wrap:wrap;gap:8px;\">
                        {% if coach.domaine %}
                        <span style=\"background:rgba(255,255,255,.12);color:#e2e8f0;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">
                            {% if coach.domaine == 'BRANDING' %}🎨 Branding
                            {% elseif coach.domaine == 'E_COMMERCE' %}🛒 E-Commerce
                            {% elseif coach.domaine == 'LEADERSHIP' %}🏆 Leadership
                            {% elseif coach.domaine == 'FINANCE' %}💰 Finance
                            {% elseif coach.domaine == 'FUNDING' %}🚀 Financement
                            {% else %}{{ coach.domaine }}{% endif %}
                        </span>
                        {% endif %}
                        {% if coach.disponibilite == 'Disponible' %}
                            <span style=\"background:#d1fae5;color:#065f46;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">✓ Disponible</span>
                        {% else %}
                            <span style=\"background:#fee2e2;color:#991b1b;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">✗ Indisponible</span>
                        {% endif %}
                        {% if coach.noteMoyenne %}
                        <span style=\"background:rgba(245,158,11,.2);color:#fbbf24;border-radius:20px;padding:4px 14px;font-size:12px;font-weight:600;\">
                            <i class=\"fas fa-star\"></i> {{ coach.noteMoyenne }}/5
                        </span>
                        {% endif %}
                    </div>
                </div>
                <div style=\"display:flex;flex-direction:column;gap:8px;\">
                    <a href=\"{{ path('app_coach_edit', {'id': coach.idCoach}) }}\"
                       style=\"background:rgba(255,255,255,.1);color:#fff;border-radius:8px;padding:9px 18px;font-size:12px;font-weight:600;text-decoration:none;text-align:center;\">
                        <i class=\"fas fa-pen\"></i> Modifier
                    </a>
                </div>
            </div>
        </div>

        {# ── STATS ── #}
        <div style=\"display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));border-bottom:1px solid #e8ecf0;\">
            <div style=\"padding:18px;text-align:center;border-right:1px solid #e8ecf0;\">
                <div style=\"font-size:22px;font-weight:700;color:#111827;\">{{ coach.experienceAnnees ?? '—' }}</div>
                <div style=\"font-size:11px;color:#9ca3af;margin-top:2px;\">Années d'expérience</div>
            </div>
            <div style=\"padding:18px;text-align:center;border-right:1px solid #e8ecf0;\">
                <div style=\"font-size:22px;font-weight:700;color:var(--accent);\">
                    {{ coach.tarifHoraire ? coach.tarifHoraire|number_format(0,'','') : '—' }}
                </div>
                <div style=\"font-size:11px;color:#9ca3af;margin-top:2px;\">TND / heure</div>
            </div>
            <div style=\"padding:18px;text-align:center;\">
                <div style=\"font-size:22px;font-weight:700;color:#f59e0b;\">
                    {{ coach.noteMoyenne ?? '—' }}
                </div>
                <div style=\"font-size:11px;color:#9ca3af;margin-top:2px;\">Note moyenne / 5</div>
            </div>
        </div>

        {# ── BODY ── #}
        <div style=\"padding:24px;\">

            {# Contact #}
            <div style=\"margin-bottom:20px;\">
                <h3 style=\"font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;color:#9ca3af;margin-bottom:12px;border-bottom:1px solid #f1f5f9;padding-bottom:8px;\">
                    <i class=\"fas fa-address-card\" style=\"margin-right:6px;\"></i> Contact
                </h3>
                <p style=\"font-size:14px;color:#374151;margin:0;\">
                    <i class=\"fas fa-phone\" style=\"color:var(--accent);width:18px;margin-right:8px;\"></i>
                    {{ coach.numTel ?? 'Non renseigné' }}
                </p>
            </div>

            {# Biographie #}
            {% if coach.biographie %}
            <div style=\"margin-bottom:20px;\">
                <h3 style=\"font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;color:#9ca3af;margin-bottom:12px;border-bottom:1px solid #f1f5f9;padding-bottom:8px;\">
                    <i class=\"fas fa-align-left\" style=\"margin-right:6px;\"></i> Biographie
                </h3>
                <p style=\"font-size:14px;color:#374151;line-height:1.8;margin:0;\">{{ coach.biographie }}</p>
            </div>
            {% endif %}

        </div>

        {# ── ACTIONS FOOTER ── #}
        <div style=\"padding:16px 24px;background:#f8fafc;border-top:1px solid #e8ecf0;display:flex;gap:10px;flex-wrap:wrap;\">
            <a href=\"{{ path('app_coach_edit', {'id': coach.idCoach}) }}\" class=\"btn-teal\" style=\"text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:9px 20px;border-radius:6px;font-size:13px;\">
                <i class=\"fas fa-pen\"></i> Modifier
            </a>
            <a href=\"{{ path('app_coach_delete', {'id': coach.idCoach}) }}\" class=\"\"
               style=\"background:#fee2e2;color:#b91c1c;border:none;border-radius:6px;padding:9px 20px;font-size:13px;font-weight:600;text-decoration:none;display:inline-flex;align-items:center;gap:6px;\"
               onclick=\"return confirm('Supprimer ce coach ?')\">
                <i class=\"fas fa-trash\"></i> Supprimer
            </a>
            <a href=\"{{ path('app_coach_index') }}\" class=\"btn-outline-teal\" style=\"text-decoration:none;display:inline-flex;align-items:center;gap:6px;padding:9px 20px;border-radius:6px;font-size:13px;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
        </div>
    </div>

</div>

{% endblock %}
", "coach/show.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\coach\\show.html.twig");
    }
}
