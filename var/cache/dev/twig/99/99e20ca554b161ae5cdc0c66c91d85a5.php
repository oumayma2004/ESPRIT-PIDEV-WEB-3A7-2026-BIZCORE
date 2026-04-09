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

/* coach/index.html.twig */
class __TwigTemplate_493e69e46c0f32353a33dfe1e87dc9d0 extends Template
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
            'sidebar_content' => [$this, 'block_sidebar_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

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

        yield "Coaching — Bizcore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "COACHING — Réserver une Séance";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_content"));

        // line 8
        yield "<div class=\"sidebar-section\">
    <div class=\"sidebar-section-label\">NAVIGATION</div>
    ";
        // line 10
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            yield "\"
       class=\"";
            // line 12
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12)) && is_string($_v1 = "dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\">
        <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
    </a>
    ";
        }
        // line 16
        yield "    <a href=\"";
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front")));
        yield "\"
       class=\"";
        // line 17
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17)) && is_string($_v3 = "evenement") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
    </a>
    <a href=\"";
        // line 20
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
        yield "\"
       class=\"";
        // line 21
        yield ((((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21)) && is_string($_v5 = "app_coach") && str_starts_with($_v4, $_v5)) || (is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21)) && is_string($_v7 = "admin_coach") && str_starts_with($_v6, $_v7)))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-user-tie\"></i> COACHING
    </a>
    <a href=\"";
        // line 24
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index")));
        yield "\"
       class=\"";
        // line 25
        yield ((((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v9 = "frontend_blog") && str_starts_with($_v8, $_v9)) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25)) && is_string($_v11 = "article") && str_starts_with($_v10, $_v11)))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-blog\"></i> BLOG
    </a>
    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\"
       class=\"";
        // line 29
        yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29)) && is_string($_v13 = "profile") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-user-circle\"></i> PROFIL
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        yield "<div class=\"row\">
    ";
        // line 38
        yield "    <div class=\"col-lg-5 mb-4\">
        <div class=\"card-panel\" style=\"height: calc(100vh - 140px); overflow-y: auto;\">
            <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 16px;\">
                Coachs Disponibles
                <span style=\"font-size: 12px; color: #9ca3af; font-weight: 400;\">
                    (";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("coaches", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 43, $this->source); })()), [])) : ([]))), "html", null, true);
        yield " coach(s))
                </span>
            </h3>

            ";
        // line 47
        if ((array_key_exists("coaches", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 47, $this->source); })())))) {
            // line 48
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 48, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                // line 49
                yield "                <div class=\"coach-card mb-3\" data-coach-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 49), "html", null, true);
                yield "\" data-disponible=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 49) == "Disponible")) ? ("1") : ("0"));
                yield "\"
                     style=\"background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; cursor: pointer; transition: all 0.2s;\"
                     onclick=\"selectCoach(";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 51), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 51), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 51), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 51), "html", null, true);
                yield "', ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 51) == "Disponible")) ? ("true") : ("false"));
                yield ")\">
                    ";
                // line 53
                yield "                    <div class=\"d-flex align-items-center gap-3 mb-2\">
                        <div style=\"width: 48px; height: 48px; border-radius: 50%; background: ";
                // line 54
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54) % 5) == 0)) {
                    yield "#3b82f6";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54) % 4) == 0)) {
                    yield "#f59e0b";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54) % 3) == 0)) {
                    yield "#20c997";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54) % 2) == 0)) {
                    yield "#8b5cf6";
                } else {
                    yield "#ec4899";
                }
                yield "; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; font-weight: 700;\">
                            ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 55), 0, 1)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 55), 0, 1)), "html", null, true);
                yield "
                        </div>
                        <div style=\"flex: 1;\">
                            <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                                ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 59), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 59), "html", null, true);
                yield "
                            </div>
                            ";
                // line 61
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 62
                    yield "                            <span class=\"badge-domain\" style=\"font-size: 9px; padding: 2px 8px; margin-top: 4px; display: inline-block;\">
                                ";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 63), "html", null, true);
                    yield "
                            </span>
                            ";
                }
                // line 66
                yield "                        </div>
                    </div>

                    ";
                // line 70
                yield "                    <div class=\"mb-2\">
                        ";
                // line 71
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 71) == "Disponible")) {
                    // line 72
                    yield "                            <span class=\"badge-disponible\">✓ Disponible</span>
                        ";
                } else {
                    // line 74
                    yield "                            <span class=\"badge-indisponible\">✗ Indisponible</span>
                        ";
                }
                // line 76
                yield "                    </div>

                    ";
                // line 79
                yield "                    <div style=\"font-size: 12px; color: #6b7280; margin-bottom: 8px;\">
                        <div><strong>Tarif:</strong> ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 80), "html", null, true);
                yield " DT/H</div>
                        <div><strong>Expérience:</strong> ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 81), "html", null, true);
                yield " ans</div>
                        <div><strong>Tél:</strong> ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "numTel", [], "any", false, false, false, 82), "html", null, true);
                yield "</div>
                    </div>

                    ";
                // line 86
                yield "                    <div class=\"rating-component\" data-coach-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "\" style=\"margin-bottom: 12px;\">
                        <div style=\"display: flex; align-items: center; gap: 4px; margin-bottom: 8px;\" id=\"avg-stars-";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 87), "html", null, true);
                yield "\">
                            ";
                // line 88
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 88)) && (CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 88) > 0))) {
                    // line 89
                    yield "                                ";
                    $context["avg"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 89), 1);
                    // line 90
                    yield "                                ";
                    $context["avgRound"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 90), 0, "common");
                    // line 91
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 92
                        yield "                                    <i class=\"fas fa-star\" style=\"color: ";
                        yield ((($context["i"] <= (isset($context["avgRound"]) || array_key_exists("avgRound", $context) ? $context["avgRound"] : (function () { throw new RuntimeError('Variable "avgRound" does not exist.', 92, $this->source); })()))) ? ("#f59e0b") : ("#d1d5db"));
                        yield "; font-size: 14px;\"></i>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    yield "                                <span style=\"font-size:12px; color:#374151; margin-left:6px;\">
                                    <strong>";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 95, $this->source); })()), "html", null, true);
                    yield "</strong>/5
                                </span>
                            ";
                } else {
                    // line 98
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 99
                        yield "                                    <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    yield "                                <span style=\"font-size:12px; color:#9ca3af; margin-left:6px;\">Pas d'évaluation encore</span>
                            ";
                }
                // line 103
                yield "                        </div>

                        ";
                // line 105
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 106
                    yield "                        <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 6px;\">
                            <div id=\"stars-";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 107), "html", null, true);
                    yield "\" class=\"star-rating\" style=\"display: flex; gap: 4px; cursor: pointer;\">
                                ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 109
                        yield "                                    <i class=\"fas fa-star\" data-value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "\" style=\"color: #d1d5db; font-size: 14px; cursor: pointer; transition: color 0.2s;\"></i>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    yield "                            </div>
                        </div>
                        ";
                }
                // line 114
                yield "                    </div>

                    ";
                // line 117
                yield "                    <div class=\"d-flex gap-2\">
                        <button class=\"btn btn-sm\" style=\"background: #20c997; color: #fff; border: none; flex: 1;\"
                                onclick=\"event.stopPropagation(); selectCoach(";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 119), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 119), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 119), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 119), "html", null, true);
                yield "', ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 119) == "Disponible")) ? ("true") : ("false"));
                yield ")\">
                            <i class=\"fas fa-calendar\"></i> Disponibilité
                        </button>
                    </div>
                </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "            ";
        } else {
            // line 126
            yield "                <div style=\"text-align: center; padding: 40px; color: #9ca3af;\">
                    <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                    Aucun coach disponible
                </div>
            ";
        }
        // line 131
        yield "        </div>
    </div>

    ";
        // line 135
        yield "    <div class=\"col-lg-7\">
        <div class=\"card-panel\" style=\"height: calc(100vh - 140px); overflow-y: auto;\">
            ";
        // line 138
        yield "            <div id=\"currentWeekOverview\">
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin: 0;\">
                        <i class=\"fas fa-calendar-week\" style=\"color: #20c997; margin-right: 8px;\"></i>
                        Semaine en cours
                    </h3>
                    <span style=\"font-size: 12px; color: #9ca3af; font-weight: 500;\">Sélectionnez un coach pour réserver</span>
                </div>
                <div style=\"font-size: 14px; font-weight: 600; color: #374151; text-align: center; margin-bottom: 16px;\">
                    Semaine du <span id=\"overviewWeekStart\"></span> au <span id=\"overviewWeekEnd\"></span>
                </div>
                <div id=\"overviewWeekDays\"></div>
                <div style=\"text-align: center; margin-top: 20px; padding: 16px; background: #f0fdf4; border-radius: 10px; border: 1px dashed #86efac;\">
                    <i class=\"fas fa-hand-pointer\" style=\"color: #20c997; font-size: 20px; display: block; margin-bottom: 8px;\"></i>
                    <div style=\"font-size: 13px; font-weight: 600; color: #166534;\">Cliquez sur un coach à gauche</div>
                    <div style=\"font-size: 11px; color: #6b7280; margin-top: 4px;\">pour voir sa disponibilité et réserver une séance</div>
                </div>
            </div>

            <div id=\"calendarView\" style=\"display: none;\">
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin: 0;\">
                        <span id=\"coachName\"></span> — <span id=\"coachDomain\" class=\"badge-domain\" style=\"font-size: 11px;\"></span>
                    </h3>
                    <span id=\"coachStatus\" class=\"badge-disponible\"></span>
                </div>

                ";
        // line 166
        yield "                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"navigateWeek(-1)\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </button>
                    <div style=\"font-size: 14px; font-weight: 600; color: #374151;\">
                        Semaine du <span id=\"weekStart\"></span> au <span id=\"weekEnd\"></span>
                    </div>
                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"navigateWeek(1)\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </button>
                </div>

                ";
        // line 179
        yield "                <div id=\"loadingIndicator\" style=\"display: none; text-align: center; padding: 40px; color: #9ca3af;\">
                    <i class=\"fas fa-spinner fa-spin fa-2x mb-2\" style=\"display: block;\"></i>
                    <div style=\"font-size: 14px;\">Chargement...</div>
                </div>

                ";
        // line 185
        yield "                <div id=\"weekDays\"></div>

                ";
        // line 188
        yield "                <div id=\"selectedDayInfo\" class=\"mt-3 text-center\" style=\"font-size: 12px; color: #6b7280; display: none;\">
                    <i class=\"fas fa-info-circle\"></i> <span id=\"selectedDayText\"></span>
                </div>

                ";
        // line 193
        yield "                <div class=\"mt-4\">
                    <button id=\"reserveBtn\" class=\"btn btn-success w-100\" style=\"padding: 12px; display: none;\" onclick=\"reserveSession()\">
                        <i class=\"fas fa-calendar-check\"></i> Réserver cette séance
                    </button>
                    <button id=\"cancelBtn\" class=\"btn btn-danger w-100\" style=\"padding: 12px; display: none;\" onclick=\"cancelReservation()\">
                        <i class=\"fas fa-times\"></i> Annuler la réservation
                    </button>
                    <div id=\"unavailableMsg\" class=\"alert alert-warning\" style=\"display: none; margin: 0;\">
                        <i class=\"fas fa-exclamation-triangle\"></i> Ce coach est actuellement indisponible
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 210
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "<div id=\"chatbot-fab\" class=\"chatbot-fab\" title=\"Assistant IA\" onclick=\"ChatbotWidget.toggle()\">
    <i class=\"fas fa-robot\" id=\"chatbot-fab-icon\"></i>
    <span class=\"chatbot-fab-pulse\"></span>
</div>

<div id=\"chatbot-panel\" class=\"chatbot-panel\">
    <div class=\"chatbot-header\">
        <div class=\"chatbot-header-left\">
            <div class=\"chatbot-header-avatar\">
                <i class=\"fas fa-robot\"></i>
            </div>
            <div>
                <div class=\"chatbot-header-title\">Assistant IA</div>
                <div class=\"chatbot-header-subtitle\">Coaching & Entrepreneuriat</div>
            </div>
        </div>
        <div class=\"chatbot-header-actions\">
            <button class=\"chatbot-header-btn\" onclick=\"ChatbotWidget.clearChat()\" title=\"Nouvelle conversation\">
                <i class=\"fas fa-trash-alt\"></i>
            </button>
            <button class=\"chatbot-header-btn\" onclick=\"ChatbotWidget.toggle()\" title=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>

    <div id=\"chatbot-messages\" class=\"chatbot-messages\">
        <div class=\"chatbot-welcome\">
            <div class=\"chatbot-welcome-icon\">🤖</div>
            <div class=\"chatbot-welcome-text\">
                Bonjour 👋 Je suis votre assistant IA.<br>
                Je peux vous aider à <strong>trouver le coach idéal</strong> ou répondre à vos questions sur <strong>l'entrepreneuriat</strong>.
            </div>
            <div class=\"chatbot-suggestions\">
                <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je cherche un coach en finance')\">
                    💰 Coach en finance
                </button>
                <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Quel coach est le mieux noté ?')\">
                    ⭐ Meilleur coach
                </button>
                <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je veux lancer un petit business, par quoi commencer ?')\">
                    🚀 Lancer un business
                </button>
            </div>
        </div>
    </div>

    <div id=\"chatbot-typing\" class=\"chatbot-typing\" style=\"display: none;\">
        <div class=\"chatbot-typing-indicator\">
            <span></span><span></span><span></span>
        </div>
        <span class=\"chatbot-typing-text\">L'assistant réfléchit...</span>
    </div>

    <div class=\"chatbot-input-area\">
        <input type=\"text\" id=\"chatbot-input\" class=\"chatbot-input\"
               placeholder=\"Posez votre question...\"
               maxlength=\"1000\"
               autocomplete=\"off\"
               onkeydown=\"if(event.key==='Enter')ChatbotWidget.send()\">
        <button id=\"chatbot-send-btn\" class=\"chatbot-send-btn\" onclick=\"ChatbotWidget.send()\" title=\"Envoyer\">
            <i class=\"fas fa-paper-plane\"></i>
        </button>
    </div>
</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 280
        yield "<script>
// Global state
let currentCoach = null;
let currentWeekStart = null;
let selectedDate = null;
let availabilityData = [];
let currentReservationId = null;

/**
 * Initialize calendar for current week
 */
function initializeCalendar() {
    const today = new Date();
    const dayOfWeek = today.getDay();
    const diff = dayOfWeek === 0 ? -6 : 1 - dayOfWeek; // Get Monday
    const monday = new Date(today);
    monday.setDate(today.getDate() + diff);
    currentWeekStart = formatDate(monday);
}

/**
 * Select a coach and load their availability
 */
async function selectCoach(id, name, domain, isAvailable) {
    currentCoach = { id, name, domain, isAvailable };
    selectedDate = null;
    currentReservationId = null;

    // Update UI — hide overview, show coach calendar
    document.getElementById('currentWeekOverview').style.display = 'none';
    document.getElementById('calendarView').style.display = 'block';
    document.getElementById('coachName').textContent = name;
    document.getElementById('coachDomain').textContent = domain;

    // Update status badge
    const statusBadge = document.getElementById('coachStatus');
    if (isAvailable) {
        statusBadge.className = 'badge-disponible';
        statusBadge.textContent = '✓ Disponible';
    } else {
        statusBadge.className = 'badge-indisponible';
        statusBadge.textContent = '✗ Indisponible';
    }

    // Highlight selected coach
    document.querySelectorAll('.coach-card').forEach(card => {
        card.style.borderColor = card.dataset.coachId == id ? '#20c997' : '#e5e7eb';
        card.style.borderWidth = card.dataset.coachId == id ? '2px' : '1px';
    });

    // Load availability
    await loadAvailability();
}

/**
 * Load coach availability from API
 */
async function loadAvailability() {
    if (!currentCoach) return;

    showLoading(true);

    try {
        const url = `/reservation/api/coach/\${currentCoach.id}/availability?weekStart=\${currentWeekStart}`;
        const response = await fetch(url);

        // CHECK response.ok FIRST
        if (!response.ok) {
            console.error('HTTP error:', response.status);
            showError(`Erreur serveur: \${response.status}`);
            return;
        }

        let data;
        try {
            data = await response.json();
        } catch (jsonError) {
            console.error('JSON parse error:', jsonError);
            showError('Erreur: réponse serveur invalide');
            return;
        }

        if (data.success) {
            availabilityData = data.availability;
            renderWeeklyCalendar(data);
        } else {
            showError(data.message || 'Erreur lors du chargement des disponibilités');
        }
    } catch (error) {
        console.error('Error loading availability:', error);
        showError('Erreur de connexion au serveur: ' + error.message);
    } finally {
        showLoading(false);
    }
}

/**
 * Render the weekly calendar (7 DAYS NOW)
 */
function renderWeeklyCalendar(data) {
    // Update week display
    document.getElementById('weekStart').textContent = formatDisplayDate(data.weekStart);
    document.getElementById('weekEnd').textContent = formatDisplayDate(data.weekEnd);

    // Render days
    const container = document.getElementById('weekDays');
    container.innerHTML = '';

    data.availability.forEach((day, index) => {
        const dayDiv = document.createElement('div');
        const canSelectDay = (day.isAvailable && !day.isReserved) || day.isMyReservation;
        let statusBadge = '';

        if (day.isReserved && day.isMyReservation) {
            statusBadge = '<span style=\"background:#20c997;color:#fff;border-radius:12px;padding:4px 12px;font-size:11px;font-weight:600;\">Ma réservation</span>';
        } else if (day.isReserved) {
            statusBadge = '<span style=\"background:#f59e0b;color:#fff;border-radius:12px;padding:4px 12px;font-size:11px;font-weight:600;\">Réservé</span>';
        } else if (day.isAvailable) {
            statusBadge = '<span class=\"badge-disponible\">Disponible</span>';
        } else {
            statusBadge = '<span class=\"badge-indisponible\">Indisponible</span>';
        }

        dayDiv.className = 'day-card';
        dayDiv.style.cssText = `
            background: \${day.isReserved ? '#fef3c7' : (day.isAvailable ? '#f9fafb' : '#fee2e2')};
            border: 2px solid \${day.isReserved ? '#f59e0b' : (day.isAvailable ? '#e5e7eb' : '#fca5a5')};
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 10px;
            cursor: \${canSelectDay ? 'pointer' : 'not-allowed'};
            transition: all 0.2s;
        `;

        if (canSelectDay) {
            dayDiv.onclick = () => selectDay(day);
            dayDiv.onmouseover = () => {
                if (selectedDate !== day.date) {
                    dayDiv.style.borderColor = '#20c997';
                    dayDiv.style.transform = 'translateX(5px)';
                }
            };
            dayDiv.onmouseout = () => {
                if (selectedDate !== day.date) {
                    dayDiv.style.borderColor = '#e5e7eb';
                    dayDiv.style.transform = 'translateY(0)';
                }
            };
        }

        // Highlight selected day
        if (selectedDate === day.date) {
            dayDiv.style.borderColor = '#20c997';
            dayDiv.style.borderWidth = '3px';
            dayDiv.style.background = '#d1fae5';
        }

        dayDiv.innerHTML = `
            <div class=\"d-flex align-items-center justify-content-between\">
                <div>
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">\${day.dayName}</div>
                    <div style=\"font-size: 12px; color: #6b7280;\">\${day.dayNumber}/\${day.month}/\${day.year}</div>
                </div>
                \${statusBadge}
            </div>
        `;

        container.appendChild(dayDiv);
    });
}

/**
 * Select a specific day
 */
function selectDay(day) {
    if (!day.isAvailable && !day.isMyReservation) return;

    selectedDate = day.date;
    currentReservationId = day.reservationId || null;

    // Update UI
    document.getElementById('selectedDayInfo').style.display = 'block';
    document.getElementById('selectedDayText').textContent =
        `\${day.dayName} \${day.dayNumber}/\${day.month}/\${day.year} sélectionné`;

    if (day.isMyReservation) {
        document.getElementById('reserveBtn').style.display = 'none';
        document.getElementById('cancelBtn').style.display = 'block';
        document.getElementById('unavailableMsg').style.display = 'none';
    } else if (day.isReserved) {
        // Reserved by another user: no action available
        document.getElementById('reserveBtn').style.display = 'none';
        document.getElementById('cancelBtn').style.display = 'none';
        document.getElementById('unavailableMsg').style.display = 'none';
    } else if (!currentCoach.isAvailable) {
        document.getElementById('reserveBtn').style.display = 'none';
        document.getElementById('cancelBtn').style.display = 'none';
        document.getElementById('unavailableMsg').style.display = 'block';
    } else {
        document.getElementById('reserveBtn').style.display = 'block';
        document.getElementById('cancelBtn').style.display = 'none';
        document.getElementById('unavailableMsg').style.display = 'none';
    }

    // Re-render to highlight selection
    loadAvailability();
}

/**
 * Reserve a session - PROPERLY HANDLES ERRORS
 */
async function reserveSession() {
    if (!selectedDate || !currentCoach) {
        showAlert('Veuillez sélectionner une date', 'warning');
        return;
    }

    if (!currentCoach.isAvailable) {
        showAlert('Ce coach est actuellement indisponible.', 'error');
        return;
    }

    // Validation client: date sélectionnée non passée
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    const selected = new Date(selectedDate);
    selected.setHours(0, 0, 0, 0);

    if (selected < today) {
        showAlert('Impossible de réserver une date passée. Veuillez choisir une date a partir d\\'aujourd\\'hui.', 'error');
        return;
    }

    if (!confirm(`Confirmer la réservation pour le \${formatDisplayDate(selectedDate)} avec \${currentCoach.name} ?`)) {
        return;
    }

    showLoading(true);

    try {
        const response = await fetch('/reservation/api/reserve', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                coachId: currentCoach.id,
                dateSeance: selectedDate
            })
        });

        if (!response.ok) {
            try {
                const errData = await response.json();
                showAlert(errData.message || `Erreur serveur \${response.status}`, 'error');
            } catch {
                showAlert(`Erreur serveur \${response.status}. Veuillez reessayer.`, 'error');
            }
            return;
        }

        let data;
        try {
            data = await response.json();
        } catch (jsonError) {
            console.error('JSON parse error:', jsonError);
            showAlert('Erreur: réponse serveur invalide', 'error');
            return;
        }

        if (data.success) {
            // Show the notification message (more personal than generic message)
            const displayMsg = data.notification?.message || data.message;
            showAlert(displayMsg, 'success');
            selectedDate = null;
            // Refresh the notification bell badge
            if (typeof refreshNotificationBell === 'function') {
                refreshNotificationBell();
            }
            await loadAvailability(); // Reload to show reservation
        } else {
            showAlert(data.message || 'Erreur lors de la réservation', 'error');
        }
    } catch (error) {
        console.error('Network or parsing error creating reservation:', error);
        showAlert('Erreur réseau: ' + error.message, 'error');
    } finally {
        showLoading(false);
    }
}

/**
 * Cancel a reservation
 */
async function cancelReservation() {
    if (!currentReservationId) {
        showAlert('Aucune réservation à annuler', 'warning');
        return;
    }

    if (!confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')) {
        return;
    }

    showLoading(true);

    try {
        const response = await fetch(`/reservation/api/cancel/\${currentReservationId}`, {
            method: 'POST'
        });

        if (!response.ok) {
            console.error('HTTP error during cancellation:', response.status);
            showAlert(`Erreur serveur \${response.status}`, 'error');
            return;
        }

        let data;
        try {
            data = await response.json();
        } catch (jsonError) {
            console.error('JSON parse error:', jsonError);
            showAlert('Erreur: réponse serveur invalide', 'error');
            return;
        }

        if (data.success) {
            showAlert(data.message, 'success');
            selectedDate = null;
            currentReservationId = null;
            // Refresh the notification bell badge
            if (typeof refreshNotificationBell === 'function') {
                refreshNotificationBell();
            }
            await loadAvailability(); // Reload calendar
        } else {
            showAlert(data.message || 'Erreur lors de l\\'annulation', 'error');
        }
    } catch (error) {
        console.error('Network or parsing error canceling reservation:', error);
        showAlert('Erreur réseau: ' + error.message, 'error');
    } finally {
        showLoading(false);
    }
}

/**
 * Navigate to previous/next week
 */
function navigateWeek(direction) {
    const date = new Date(currentWeekStart);
    date.setDate(date.getDate() + (direction * 7));
    currentWeekStart = formatDate(date);
    selectedDate = null;
    loadAvailability();
}

/**
 * Show/hide loading indicator
 */
function showLoading(show) {
    document.getElementById('loadingIndicator').style.display = show ? 'block' : 'none';
    document.getElementById('weekDays').style.display = show ? 'none' : 'block';
}

/**
 * Show alert message
 */
function showAlert(message, type) {
    const alertClass = type === 'success' ? 'alert-success' : type === 'error' ? 'alert-danger' : 'alert-warning';
    const alertHtml = `
        <div class=\"alert \${alertClass} alert-dismissible fade show\" role=\"alert\"
             style=\"position: fixed; top: 80px; right: 20px; z-index: 9999; min-width: 300px; animation: slideIn 0.3s;\">
            <i class=\"fas fa-\${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'exclamation-triangle'}\"></i>
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    `;

    const temp = document.createElement('div');
    temp.innerHTML = alertHtml;
    document.body.appendChild(temp.firstElementChild);

    setTimeout(() => {
        temp.firstElementChild?.remove();
    }, 5000);
}

/**
 * Format date for API (YYYY-MM-DD)
 */
function formatDate(date) {
    const d = new Date(date);
    const year = d.getFullYear();
    const month = String(d.getMonth() + 1).padStart(2, '0');
    const day = String(d.getDate()).padStart(2, '0');
    return `\${year}-\${month}-\${day}`;
}

/**
 * Format date for display (DD/MM/YYYY)
 */
function formatDisplayDate(dateStr) {
    const [year, month, day] = dateStr.split('-');
    return `\${day}/\${month}/\${year}`;
}

/**
 * Show error message
 */
function showError(message) {
    showAlert(message, 'error');
}

/**
 * Load and show current week overview on page load (7 DAYS NOW, Mon-Sun)
 */
function loadCurrentWeekOverview() {
    const frenchDays = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']; // 7 jours
    const today = new Date();
    const dayOfWeek = today.getDay();
    const diff = dayOfWeek === 0 ? -6 : 1 - dayOfWeek;
    const monday = new Date(today);
    monday.setDate(today.getDate() + diff);

    // Set week range display (7 days: Mon-Sun)
    const sunday = new Date(monday);
    sunday.setDate(monday.getDate() + 6);
    document.getElementById('overviewWeekStart').textContent = formatDisplayDate(formatDate(monday));
    document.getElementById('overviewWeekEnd').textContent = formatDisplayDate(formatDate(sunday));

    // Render 7 weekday cards (Mon-Sun)
    const container = document.getElementById('overviewWeekDays');
    container.innerHTML = '';

    for (let i = 0; i < 7; i++) { // 7 iterations now
        const currentDate = new Date(monday);
        currentDate.setDate(monday.getDate() + i);

        const isToday = currentDate.toDateString() === today.toDateString();
        const isPast = currentDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());

        const dayDiv = document.createElement('div');
        dayDiv.style.cssText = `
            background: \${isToday ? 'linear-gradient(135deg, #d1fae5, #a7f3d0)' : isPast ? '#f9fafb' : '#fff'};
            border: 2px solid \${isToday ? '#20c997' : '#e5e7eb'};
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 10px;
            transition: all 0.2s;
            opacity: \${isPast ? 0.6 : 1};
            \${isToday ? 'box-shadow: 0 2px 8px rgba(32,201,151,0.2);' : ''}
        `;

        const dd = String(currentDate.getDate()).padStart(2, '0');
        const mm = String(currentDate.getMonth() + 1).padStart(2, '0');
        const yyyy = currentDate.getFullYear();

        dayDiv.innerHTML = `
            <div class=\"d-flex align-items-center justify-content-between\">
                <div>
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                        \${frenchDays[i]}
                        \${isToday ? '<span style=\"background:#20c997;color:#fff;border-radius:8px;padding:2px 8px;font-size:10px;font-weight:600;margin-left:8px;\">Aujourd\\'hui</span>' : ''}
                    </div>
                    <div style=\"font-size: 12px; color: #6b7280;\">\${dd}/\${mm}/\${yyyy}</div>
                </div>
                <span style=\"color: \${isPast ? '#d1d5db' : '#9ca3af'}; font-size: 11px; font-weight: 500;\">
                    \${isPast ? 'Passé' : '<i class=\"fas fa-arrow-left\" style=\"margin-right:4px;\"></i> Choisir'}
                </span>
            </div>
        `;

        container.appendChild(dayDiv);
    }
}

/**
 * RATING SYSTEM - Load ratings for all coaches and handle submission
 */
let selectedRatings = {};

function renderAverageStars(coachId, average) {
    const avgDiv = document.getElementById(`avg-stars-\${coachId}`);
    if (!avgDiv) return;

    const avgValue = parseFloat(average);
    if (!isNaN(avgValue) && avgValue > 0) {
        const roundedAvg = Math.round(avgValue);
        let starsHtml = '';

        for (let i = 1; i <= 5; i++) {
            starsHtml += `<i class=\"fas fa-star\" style=\"color: \${i <= roundedAvg ? '#f59e0b' : '#d1d5db'}; font-size: 14px;\"></i>`;
        }

        starsHtml += `<span style=\"font-size:12px; color:#374151; margin-left:6px;\"><strong>\${avgValue.toFixed(1)}</strong>/5</span>`;
        avgDiv.innerHTML = starsHtml;
        return;
    }

    avgDiv.innerHTML = `
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <span style=\"font-size:12px; color:#9ca3af; margin-left:6px;\">Pas d'évaluation encore</span>
    `;
}

async function loadAllCoachRatings() {
    const coachCards = document.querySelectorAll('.coach-card');
    
    for (const card of coachCards) {
        const coachId = card.dataset.coachId;
        if (coachId) {
            await loadCoachRatingStats(coachId);
        }
    }
}

async function loadCoachRatingStats(coachId) {
    try {
        const response = await fetch(`/api/rating/coach/\${coachId}/stats`);
        if (!response.ok) return;

        const data = await response.json();

        if (data.success) {
            renderAverageStars(coachId, data.average);
        }

        // Pre-select user's rating if exists
        if (data.userNote && data.userNote > 0) {
            selectedRatings[coachId] = data.userNote;
            updateStarDisplay(coachId);
        }
    } catch (error) {
        console.error('Erreur chargement stats rating coach', coachId, ':', error);
    }
}

function updateStarDisplay(coachId) {
    const starsDiv = document.getElementById(`stars-\${coachId}`);
    if (!starsDiv) return;

    const stars = starsDiv.querySelectorAll('i');
    const rating = selectedRatings[coachId] || 0;

    stars.forEach((star, index) => {
        star.style.color = index < rating ? '#f59e0b' : '#d1d5db';
    });
}

// Star hover effect
document.addEventListener('mouseover', (e) => {
    if (e.target.classList.contains('fa-star')) {
        const star = e.target;
        const starsDiv = star.parentElement;
        if (!starsDiv || !starsDiv.classList.contains('star-rating')) return;

        const value = parseInt(star.dataset.value);
        if (isNaN(value)) return;
        
        const stars = starsDiv.querySelectorAll('i');
        stars.forEach((s, index) => {
            s.style.color = index < value ? '#fbbf24' : '#d1d5db';
        });
    }
});

// Star click - select and submit rating
document.addEventListener('click', async (e) => {
    if (e.target.classList.contains('fa-star')) {
        const star = e.target;
        const starsDiv = star.parentElement;
        if (!starsDiv || !starsDiv.classList.contains('star-rating')) return;

        const ratingComponent = starsDiv.closest('.rating-component');
        if (!ratingComponent) return;
        const coachId = parseInt(ratingComponent.dataset.coachId);
        const value = parseInt(star.dataset.value);

        if (!isNaN(value) && !isNaN(coachId)) {
            selectedRatings[coachId] = value;
            updateStarDisplay(coachId);
            await submitRating(coachId);
        }
    }
});

// Star mouseout - reset to selected rating
document.addEventListener('mouseout', (e) => {
    if (e.target.classList.contains('fa-star')) {
        const star = e.target;
        const starsDiv = star.parentElement;
        if (!starsDiv || !starsDiv.classList.contains('star-rating')) return;

        const ratingComponent = starsDiv.closest('.rating-component');
        const coachId = parseInt(ratingComponent.dataset.coachId);
        
        if (!isNaN(coachId)) {
            updateStarDisplay(coachId);
        }
    }
});

/**
 * Submit rating for a coach
 */
async function submitRating(coachId) {
    const note = selectedRatings[coachId];

    if (!note || note < 1 || note > 5) {
        return;
    }

    try {
        showLoading(true);
        
        const response = await fetch(`/api/rating/coach/\${coachId}/rate`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                note: note,
                commentaire: ''
            })
        });

        if (!response.ok) {
            console.error('HTTP error submitting rating:', response.status);
            showAlert(`Erreur serveur \${response.status}`, 'error');
            return;
        }

        const data = await response.json();

        if (data.success) {
            // 1) Immediate UI update with server-returned global average from /rate
            renderAverageStars(coachId, data.stats?.average);

            // 2) Re-validate with /stats to guarantee displayed value is global persisted average
            await loadCoachRatingStats(coachId);

            updateStarDisplay(coachId);

            showAlert('Merci pour votre évaluation !', 'success');
        } else {
            showAlert(data.message || 'Erreur lors de l\\'enregistrement', 'error');
        }
    } catch (error) {
        console.error('Error submitting rating:', error);
        showAlert('Erreur réseau: ' + error.message, 'error');
    } finally {
        showLoading(false);
    }
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
    initializeCalendar();
    loadCurrentWeekOverview();
    loadAllCoachRatings();
});
</script>

<style>
@keyframes slideIn {
    from { opacity: 0; transform: translateX(100px); }
    to { opacity: 1; transform: translateX(0); }
}

.coach-card:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.day-card {
    transition: all 0.2s ease;
}

/* ═══════════════════════════════════════════════════════════════
   CHATBOT WIDGET STYLES — fully isolated with chatbot- prefix
   ═══════════════════════════════════════════════════════════════ */

/* Floating Action Button */
.chatbot-fab {
    position: fixed;
    bottom: 28px;
    right: 28px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(32, 201, 151, 0.4);
    z-index: 10000;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
}
.chatbot-fab:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 28px rgba(32, 201, 151, 0.55);
}
.chatbot-fab-pulse {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(32, 201, 151, 0.3);
    animation: chatbot-pulse 2s infinite;
    pointer-events: none;
}
@keyframes chatbot-pulse {
    0% { transform: scale(1); opacity: 0.6; }
    100% { transform: scale(1.6); opacity: 0; }
}

/* Panel */
.chatbot-panel {
    position: fixed;
    bottom: 100px;
    right: 28px;
    width: 400px;
    max-height: 560px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 12px 48px rgba(0,0,0,0.15), 0 0 0 1px rgba(0,0,0,0.04);
    display: none;
    flex-direction: column;
    z-index: 10001;
    overflow: hidden;
    animation: chatbot-slideUp 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}
.chatbot-panel.chatbot-open {
    display: flex;
}
@keyframes chatbot-slideUp {
    from { opacity: 0; transform: translateY(20px) scale(0.96); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

/* Header */
.chatbot-header {
    background: linear-gradient(135deg, #1a2332, #243447);
    padding: 16px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
}
.chatbot-header-left {
    display: flex;
    align-items: center;
    gap: 12px;
}
.chatbot-header-avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
}
.chatbot-header-title {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
}
.chatbot-header-subtitle {
    color: #8a9aaf;
    font-size: 11px;
    font-weight: 500;
}
.chatbot-header-actions {
    display: flex;
    gap: 6px;
}
.chatbot-header-btn {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: rgba(255,255,255,0.1);
    color: #8a9aaf;
    font-size: 13px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}
.chatbot-header-btn:hover {
    background: rgba(255,255,255,0.2);
    color: #fff;
}

/* Messages Area */
.chatbot-messages {
    flex: 1;
    overflow-y: auto;
    padding: 18px;
    min-height: 280px;
    max-height: 360px;
    scroll-behavior: smooth;
}

/* Welcome */
.chatbot-welcome {
    text-align: center;
    padding: 12px 0;
}
.chatbot-welcome-icon {
    font-size: 36px;
    margin-bottom: 10px;
}
.chatbot-welcome-text {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 16px;
}
.chatbot-suggestions {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.chatbot-suggestion {
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
    border-radius: 12px;
    padding: 10px 14px;
    font-size: 12px;
    font-weight: 500;
    color: #166534;
    cursor: pointer;
    transition: all 0.2s;
    text-align: left;
}
.chatbot-suggestion:hover {
    background: #dcfce7;
    border-color: #86efac;
    transform: translateX(4px);
}

/* Message Bubbles */
.chatbot-msg {
    display: flex;
    gap: 8px;
    margin-bottom: 14px;
    animation: chatbot-msgFade 0.3s ease;
}
@keyframes chatbot-msgFade {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}
.chatbot-msg-user {
    flex-direction: row-reverse;
}
.chatbot-msg-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    flex-shrink: 0;
    margin-top: 2px;
}
.chatbot-msg-bot .chatbot-msg-avatar {
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    color: #fff;
}
.chatbot-msg-user .chatbot-msg-avatar {
    background: #e5e7eb;
    color: #374151;
}
.chatbot-msg-bubble {
    max-width: 78%;
    padding: 10px 14px;
    border-radius: 16px;
    font-size: 13px;
    line-height: 1.55;
    word-wrap: break-word;
    white-space: pre-wrap;
}
.chatbot-msg-bot .chatbot-msg-bubble {
    background: #f3f4f6;
    color: #1f2937;
    border-bottom-left-radius: 4px;
}
.chatbot-msg-user .chatbot-msg-bubble {
    background: linear-gradient(135deg, #20c997, #17b890);
    color: #fff;
    border-bottom-right-radius: 4px;
}
.chatbot-msg-error .chatbot-msg-bubble {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
}

/* Typing Indicator */
.chatbot-typing {
    padding: 8px 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
}
.chatbot-typing-indicator {
    display: flex;
    gap: 4px;
}
.chatbot-typing-indicator span {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #20c997;
    animation: chatbot-bounce 1.3s infinite;
}
.chatbot-typing-indicator span:nth-child(2) { animation-delay: 0.15s; }
.chatbot-typing-indicator span:nth-child(3) { animation-delay: 0.3s; }
@keyframes chatbot-bounce {
    0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
    30% { transform: translateY(-6px); opacity: 1; }
}
.chatbot-typing-text {
    font-size: 11px;
    color: #9ca3af;
    font-style: italic;
}

/* Input Area */
.chatbot-input-area {
    padding: 14px 16px;
    border-top: 1px solid #f3f4f6;
    display: flex;
    gap: 8px;
    align-items: center;
    flex-shrink: 0;
    background: #fafafa;
}
.chatbot-input {
    flex: 1;
    padding: 10px 16px;
    border: 1px solid #e5e7eb;
    border-radius: 24px;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
    outline: none;
    transition: border-color 0.2s;
    background: #fff;
}
.chatbot-input:focus {
    border-color: #20c997;
    box-shadow: 0 0 0 3px rgba(32, 201, 151, 0.1);
}
.chatbot-input::placeholder {
    color: #9ca3af;
}
.chatbot-send-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    flex-shrink: 0;
}
.chatbot-send-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 4px 12px rgba(32, 201, 151, 0.35);
}
.chatbot-send-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

/* Responsive */
@media (max-width: 768px) {
    .chatbot-panel {
        width: calc(100vw - 24px);
        right: 12px;
        bottom: 90px;
        max-height: 70vh;
    }
    .chatbot-fab {
        bottom: 16px;
        right: 16px;
        width: 52px;
        height: 52px;
        font-size: 20px;
    }
}
</style>

";
        // line 1298
        yield "<script>
const ChatbotWidget = (function() {
    'use strict';

    let isOpen = false;
    let isSending = false;

    function toggle() {
        const panel = document.getElementById('chatbot-panel');
        const fab = document.getElementById('chatbot-fab');
        const fabIcon = document.getElementById('chatbot-fab-icon');

        isOpen = !isOpen;

        if (isOpen) {
            panel.classList.add('chatbot-open');
            fabIcon.className = 'fas fa-times';
            fab.style.background = 'linear-gradient(135deg, #374151, #1f2937)';
            // Focus input
            setTimeout(() => document.getElementById('chatbot-input').focus(), 100);
        } else {
            panel.classList.remove('chatbot-open');
            fabIcon.className = 'fas fa-robot';
            fab.style.background = 'linear-gradient(135deg, #20c997, #0ea5e9)';
        }
    }

    function appendMessage(role, text) {
        const container = document.getElementById('chatbot-messages');

        // Remove welcome on first real message
        const welcome = container.querySelector('.chatbot-welcome');
        if (welcome) welcome.remove();

        const msgDiv = document.createElement('div');
        msgDiv.className = `chatbot-msg chatbot-msg-\${role}`;

        const avatarContent = role === 'bot'
            ? '<i class=\"fas fa-robot\"></i>'
            : '<i class=\"fas fa-user\"></i>';

        msgDiv.innerHTML = `
            <div class=\"chatbot-msg-avatar\">\${avatarContent}</div>
            <div class=\"chatbot-msg-bubble\">\${escapeHtml(text)}</div>
        `;

        container.appendChild(msgDiv);
        scrollToBottom();
    }

    function appendError(text) {
        const container = document.getElementById('chatbot-messages');
        const welcome = container.querySelector('.chatbot-welcome');
        if (welcome) welcome.remove();

        const msgDiv = document.createElement('div');
        msgDiv.className = 'chatbot-msg chatbot-msg-bot chatbot-msg-error';
        msgDiv.innerHTML = `
            <div class=\"chatbot-msg-avatar\"><i class=\"fas fa-exclamation-triangle\"></i></div>
            <div class=\"chatbot-msg-bubble\"><i class=\"fas fa-exclamation-circle\"></i> \${escapeHtml(text)}</div>
        `;
        container.appendChild(msgDiv);
        scrollToBottom();
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function scrollToBottom() {
        const container = document.getElementById('chatbot-messages');
        setTimeout(() => { container.scrollTop = container.scrollHeight; }, 50);
    }

    function setLoading(loading) {
        isSending = loading;
        const btn = document.getElementById('chatbot-send-btn');
        const input = document.getElementById('chatbot-input');
        const typing = document.getElementById('chatbot-typing');

        btn.disabled = loading;
        input.disabled = loading;
        typing.style.display = loading ? 'flex' : 'none';

        if (!loading) {
            input.focus();
        }
    }

    async function send() {
        if (isSending) return;

        const input = document.getElementById('chatbot-input');
        const message = input.value.trim();

        if (!message) return;

        if (message.length > 1000) {
            appendError('Votre message est trop long (maximum 1000 caractères).');
            return;
        }

        // Show user message immediately
        appendMessage('user', message);
        input.value = '';

        setLoading(true);

        try {
            const response = await fetch('/chatbot/message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: message })
            });

            let data;
            try {
                data = await response.json();
            } catch (e) {
                appendError('Réponse invalide du serveur.');
                setLoading(false);
                return;
            }

            if (data.success) {
                appendMessage('bot', data.response);
            } else {
                appendError(data.message || 'Une erreur est survenue.');
            }
        } catch (error) {
            console.error('Chatbot network error:', error);
            appendError('Impossible de contacter le serveur. Vérifiez votre connexion.');
        } finally {
            setLoading(false);
        }
    }

    function sendSuggestion(text) {
        const input = document.getElementById('chatbot-input');
        input.value = text;
        send();
    }

    async function clearChat() {
        if (!confirm('Effacer la conversation ?')) return;

        try {
            await fetch('/chatbot/clear', { method: 'POST' });
        } catch (e) {
            // Ignore network errors on clear
        }

        const container = document.getElementById('chatbot-messages');
        container.innerHTML = `
            <div class=\"chatbot-welcome\">
                <div class=\"chatbot-welcome-icon\">🤖</div>
                <div class=\"chatbot-welcome-text\">
                    Bonjour 👋 Je suis votre assistant IA.<br>
                    Je peux vous aider à <strong>trouver le coach idéal</strong> ou répondre à vos questions sur <strong>l'entrepreneuriat</strong>.
                </div>
                <div class=\"chatbot-suggestions\">
                    <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je cherche un coach en finance')\">
                        💰 Coach en finance
                    </button>
                    <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Quel coach est le mieux noté ?')\">
                        ⭐ Meilleur coach
                    </button>
                    <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je veux lancer un petit business, par quoi commencer ?')\">
                        🚀 Lancer un business
                    </button>
                </div>
            </div>
        `;
    }

    // Public API
    return {
        toggle: toggle,
        send: send,
        sendSuggestion: sendSuggestion,
        clearChat: clearChat
    };
})();
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "coach/index.html.twig";
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
        return array (  1645 => 1298,  626 => 280,  616 => 279,  542 => 211,  540 => 210,  522 => 193,  516 => 188,  512 => 185,  505 => 179,  491 => 166,  462 => 138,  458 => 135,  453 => 131,  446 => 126,  443 => 125,  415 => 119,  411 => 117,  407 => 114,  402 => 111,  393 => 109,  389 => 108,  385 => 107,  382 => 106,  380 => 105,  376 => 103,  372 => 101,  365 => 99,  360 => 98,  354 => 95,  351 => 94,  342 => 92,  337 => 91,  334 => 90,  331 => 89,  329 => 88,  325 => 87,  320 => 86,  314 => 82,  310 => 81,  306 => 80,  303 => 79,  299 => 76,  295 => 74,  291 => 72,  289 => 71,  286 => 70,  281 => 66,  275 => 63,  272 => 62,  270 => 61,  263 => 59,  255 => 55,  241 => 54,  238 => 53,  226 => 51,  218 => 49,  200 => 48,  198 => 47,  191 => 43,  184 => 38,  181 => 36,  171 => 35,  158 => 29,  154 => 28,  148 => 25,  144 => 24,  138 => 21,  134 => 20,  128 => 17,  123 => 16,  116 => 12,  111 => 11,  109 => 10,  105 => 8,  95 => 7,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Coaching — Bizcore{% endblock %}

{% block page_title %}COACHING — Réserver une Séance{% endblock %}

{% block sidebar_content %}
<div class=\"sidebar-section\">
    <div class=\"sidebar-section-label\">NAVIGATION</div>
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('dashboard') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'dashboard' ? 'active' : '' }}\">
        <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
    </a>
    {% endif %}
    <a href=\"{{ is_granted('ROLE_ADMIN') ? path('evenement_index') : path('evenement_front') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'evenement' ? 'active' : '' }}\">
        <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
    </a>
    <a href=\"{{ is_granted('ROLE_ADMIN') ? path('admin_coach_index') : path('app_coach_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'app_coach' or app.request.attributes.get('_route') starts with 'admin_coach' ? 'active' : '' }}\">
        <i class=\"fas fa-user-tie\"></i> COACHING
    </a>
    <a href=\"{{ is_granted('ROLE_ADMIN') ? path('article_index') : path('frontend_blog_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'frontend_blog' or app.request.attributes.get('_route') starts with 'article' ? 'active' : '' }}\">
        <i class=\"fas fa-blog\"></i> BLOG
    </a>
    <a href=\"{{ path('profile_index') }}\"
       class=\"{{ app.request.attributes.get('_route') starts with 'profile' ? 'active' : '' }}\">
        <i class=\"fas fa-user-circle\"></i> PROFIL
    </a>
</div>
{% endblock %}

{% block body %}
<div class=\"row\">
    {# Left Panel: Coachs Disponibles #}
    <div class=\"col-lg-5 mb-4\">
        <div class=\"card-panel\" style=\"height: calc(100vh - 140px); overflow-y: auto;\">
            <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 16px;\">
                Coachs Disponibles
                <span style=\"font-size: 12px; color: #9ca3af; font-weight: 400;\">
                    ({{ coaches|default([])|length }} coach(s))
                </span>
            </h3>

            {% if coaches is defined and coaches is not empty %}
                {% for coach in coaches %}
                <div class=\"coach-card mb-3\" data-coach-id=\"{{ coach.id }}\" data-disponible=\"{{ coach.disponibilite == 'Disponible' ? '1' : '0' }}\"
                     style=\"background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; cursor: pointer; transition: all 0.2s;\"
                     onclick=\"selectCoach({{ coach.id }}, '{{ coach.prenom }} {{ coach.nom }}', '{{ coach.domaine }}', {{ coach.disponibilite == 'Disponible' ? 'true' : 'false' }})\">
                    {# Avatar and Name #}
                    <div class=\"d-flex align-items-center gap-3 mb-2\">
                        <div style=\"width: 48px; height: 48px; border-radius: 50%; background: {% if loop.index % 5 == 0 %}#3b82f6{% elseif loop.index % 4 == 0 %}#f59e0b{% elseif loop.index % 3 == 0 %}#20c997{% elseif loop.index % 2 == 0 %}#8b5cf6{% else %}#ec4899{% endif %}; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; font-weight: 700;\">
                            {{ coach.prenom|slice(0,1)|upper }}{{ coach.nom|slice(0,1)|upper }}
                        </div>
                        <div style=\"flex: 1;\">
                            <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                                {{ coach.prenom }} {{ coach.nom }}
                            </div>
                            {% if coach.domaine %}
                            <span class=\"badge-domain\" style=\"font-size: 9px; padding: 2px 8px; margin-top: 4px; display: inline-block;\">
                                {{ coach.domaine }}
                            </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Availability Badge #}
                    <div class=\"mb-2\">
                        {% if coach.disponibilite == 'Disponible' %}
                            <span class=\"badge-disponible\">✓ Disponible</span>
                        {% else %}
                            <span class=\"badge-indisponible\">✗ Indisponible</span>
                        {% endif %}
                    </div>

                    {# Stats #}
                    <div style=\"font-size: 12px; color: #6b7280; margin-bottom: 8px;\">
                        <div><strong>Tarif:</strong> {{ coach.tarifHoraire }} DT/H</div>
                        <div><strong>Expérience:</strong> {{ coach.experienceAnnees }} ans</div>
                        <div><strong>Tél:</strong> {{ coach.numTel }}</div>
                    </div>

                    {# Star Rating with Dynamic Component #}
                    <div class=\"rating-component\" data-coach-id=\"{{ coach.id }}\" style=\"margin-bottom: 12px;\">
                        <div style=\"display: flex; align-items: center; gap: 4px; margin-bottom: 8px;\" id=\"avg-stars-{{ coach.id }}\">
                            {% if coach.noteMoyenne is not null and coach.noteMoyenne > 0 %}
                                {% set avg = coach.noteMoyenne|number_format(1) %}
                                {% set avgRound = coach.noteMoyenne|round(0, 'common') %}
                                {% for i in 1..5 %}
                                    <i class=\"fas fa-star\" style=\"color: {{ i <= avgRound ? '#f59e0b' : '#d1d5db' }}; font-size: 14px;\"></i>
                                {% endfor %}
                                <span style=\"font-size:12px; color:#374151; margin-left:6px;\">
                                    <strong>{{ avg }}</strong>/5
                                </span>
                            {% else %}
                                {% for i in 1..5 %}
                                    <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
                                {% endfor %}
                                <span style=\"font-size:12px; color:#9ca3af; margin-left:6px;\">Pas d'évaluation encore</span>
                            {% endif %}
                        </div>

                        {% if is_granted('ROLE_USER') %}
                        <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 6px;\">
                            <div id=\"stars-{{ coach.id }}\" class=\"star-rating\" style=\"display: flex; gap: 4px; cursor: pointer;\">
                                {% for i in 1..5 %}
                                    <i class=\"fas fa-star\" data-value=\"{{ i }}\" style=\"color: #d1d5db; font-size: 14px; cursor: pointer; transition: color 0.2s;\"></i>
                                {% endfor %}
                            </div>
                        </div>
                        {% endif %}
                    </div>

                    {# Action Buttons #}
                    <div class=\"d-flex gap-2\">
                        <button class=\"btn btn-sm\" style=\"background: #20c997; color: #fff; border: none; flex: 1;\"
                                onclick=\"event.stopPropagation(); selectCoach({{ coach.id }}, '{{ coach.prenom }} {{ coach.nom }}', '{{ coach.domaine }}', {{ coach.disponibilite == 'Disponible' ? 'true' : 'false' }})\">
                            <i class=\"fas fa-calendar\"></i> Disponibilité
                        </button>
                    </div>
                </div>
                {% endfor %}
            {% else %}
                <div style=\"text-align: center; padding: 40px; color: #9ca3af;\">
                    <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                    Aucun coach disponible
                </div>
            {% endif %}
        </div>
    </div>

    {# Right Panel: Weekly Calendar View #}
    <div class=\"col-lg-7\">
        <div class=\"card-panel\" style=\"height: calc(100vh - 140px); overflow-y: auto;\">
            {# Current Week Overview (shown on load before coach is selected) #}
            <div id=\"currentWeekOverview\">
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin: 0;\">
                        <i class=\"fas fa-calendar-week\" style=\"color: #20c997; margin-right: 8px;\"></i>
                        Semaine en cours
                    </h3>
                    <span style=\"font-size: 12px; color: #9ca3af; font-weight: 500;\">Sélectionnez un coach pour réserver</span>
                </div>
                <div style=\"font-size: 14px; font-weight: 600; color: #374151; text-align: center; margin-bottom: 16px;\">
                    Semaine du <span id=\"overviewWeekStart\"></span> au <span id=\"overviewWeekEnd\"></span>
                </div>
                <div id=\"overviewWeekDays\"></div>
                <div style=\"text-align: center; margin-top: 20px; padding: 16px; background: #f0fdf4; border-radius: 10px; border: 1px dashed #86efac;\">
                    <i class=\"fas fa-hand-pointer\" style=\"color: #20c997; font-size: 20px; display: block; margin-bottom: 8px;\"></i>
                    <div style=\"font-size: 13px; font-weight: 600; color: #166534;\">Cliquez sur un coach à gauche</div>
                    <div style=\"font-size: 11px; color: #6b7280; margin-top: 4px;\">pour voir sa disponibilité et réserver une séance</div>
                </div>
            </div>

            <div id=\"calendarView\" style=\"display: none;\">
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin: 0;\">
                        <span id=\"coachName\"></span> — <span id=\"coachDomain\" class=\"badge-domain\" style=\"font-size: 11px;\"></span>
                    </h3>
                    <span id=\"coachStatus\" class=\"badge-disponible\"></span>
                </div>

                {# Week Navigation #}
                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"navigateWeek(-1)\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </button>
                    <div style=\"font-size: 14px; font-weight: 600; color: #374151;\">
                        Semaine du <span id=\"weekStart\"></span> au <span id=\"weekEnd\"></span>
                    </div>
                    <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"navigateWeek(1)\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </button>
                </div>

                {# Loading Indicator #}
                <div id=\"loadingIndicator\" style=\"display: none; text-align: center; padding: 40px; color: #9ca3af;\">
                    <i class=\"fas fa-spinner fa-spin fa-2x mb-2\" style=\"display: block;\"></i>
                    <div style=\"font-size: 14px;\">Chargement...</div>
                </div>

                {# Days of the Week #}
                <div id=\"weekDays\"></div>

                {# Selected Day Info #}
                <div id=\"selectedDayInfo\" class=\"mt-3 text-center\" style=\"font-size: 12px; color: #6b7280; display: none;\">
                    <i class=\"fas fa-info-circle\"></i> <span id=\"selectedDayText\"></span>
                </div>

                {# Reserve Button #}
                <div class=\"mt-4\">
                    <button id=\"reserveBtn\" class=\"btn btn-success w-100\" style=\"padding: 12px; display: none;\" onclick=\"reserveSession()\">
                        <i class=\"fas fa-calendar-check\"></i> Réserver cette séance
                    </button>
                    <button id=\"cancelBtn\" class=\"btn btn-danger w-100\" style=\"padding: 12px; display: none;\" onclick=\"cancelReservation()\">
                        <i class=\"fas fa-times\"></i> Annuler la réservation
                    </button>
                    <div id=\"unavailableMsg\" class=\"alert alert-warning\" style=\"display: none; margin: 0;\">
                        <i class=\"fas fa-exclamation-triangle\"></i> Ce coach est actuellement indisponible
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{# ═══ AI CHATBOT WIDGET ═══ #}
{% if is_granted('ROLE_USER') %}
<div id=\"chatbot-fab\" class=\"chatbot-fab\" title=\"Assistant IA\" onclick=\"ChatbotWidget.toggle()\">
    <i class=\"fas fa-robot\" id=\"chatbot-fab-icon\"></i>
    <span class=\"chatbot-fab-pulse\"></span>
</div>

<div id=\"chatbot-panel\" class=\"chatbot-panel\">
    <div class=\"chatbot-header\">
        <div class=\"chatbot-header-left\">
            <div class=\"chatbot-header-avatar\">
                <i class=\"fas fa-robot\"></i>
            </div>
            <div>
                <div class=\"chatbot-header-title\">Assistant IA</div>
                <div class=\"chatbot-header-subtitle\">Coaching & Entrepreneuriat</div>
            </div>
        </div>
        <div class=\"chatbot-header-actions\">
            <button class=\"chatbot-header-btn\" onclick=\"ChatbotWidget.clearChat()\" title=\"Nouvelle conversation\">
                <i class=\"fas fa-trash-alt\"></i>
            </button>
            <button class=\"chatbot-header-btn\" onclick=\"ChatbotWidget.toggle()\" title=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>

    <div id=\"chatbot-messages\" class=\"chatbot-messages\">
        <div class=\"chatbot-welcome\">
            <div class=\"chatbot-welcome-icon\">🤖</div>
            <div class=\"chatbot-welcome-text\">
                Bonjour 👋 Je suis votre assistant IA.<br>
                Je peux vous aider à <strong>trouver le coach idéal</strong> ou répondre à vos questions sur <strong>l'entrepreneuriat</strong>.
            </div>
            <div class=\"chatbot-suggestions\">
                <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je cherche un coach en finance')\">
                    💰 Coach en finance
                </button>
                <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Quel coach est le mieux noté ?')\">
                    ⭐ Meilleur coach
                </button>
                <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je veux lancer un petit business, par quoi commencer ?')\">
                    🚀 Lancer un business
                </button>
            </div>
        </div>
    </div>

    <div id=\"chatbot-typing\" class=\"chatbot-typing\" style=\"display: none;\">
        <div class=\"chatbot-typing-indicator\">
            <span></span><span></span><span></span>
        </div>
        <span class=\"chatbot-typing-text\">L'assistant réfléchit...</span>
    </div>

    <div class=\"chatbot-input-area\">
        <input type=\"text\" id=\"chatbot-input\" class=\"chatbot-input\"
               placeholder=\"Posez votre question...\"
               maxlength=\"1000\"
               autocomplete=\"off\"
               onkeydown=\"if(event.key==='Enter')ChatbotWidget.send()\">
        <button id=\"chatbot-send-btn\" class=\"chatbot-send-btn\" onclick=\"ChatbotWidget.send()\" title=\"Envoyer\">
            <i class=\"fas fa-paper-plane\"></i>
        </button>
    </div>
</div>
{% endif %}
{% endblock %}

{% block javascripts %}
<script>
// Global state
let currentCoach = null;
let currentWeekStart = null;
let selectedDate = null;
let availabilityData = [];
let currentReservationId = null;

/**
 * Initialize calendar for current week
 */
function initializeCalendar() {
    const today = new Date();
    const dayOfWeek = today.getDay();
    const diff = dayOfWeek === 0 ? -6 : 1 - dayOfWeek; // Get Monday
    const monday = new Date(today);
    monday.setDate(today.getDate() + diff);
    currentWeekStart = formatDate(monday);
}

/**
 * Select a coach and load their availability
 */
async function selectCoach(id, name, domain, isAvailable) {
    currentCoach = { id, name, domain, isAvailable };
    selectedDate = null;
    currentReservationId = null;

    // Update UI — hide overview, show coach calendar
    document.getElementById('currentWeekOverview').style.display = 'none';
    document.getElementById('calendarView').style.display = 'block';
    document.getElementById('coachName').textContent = name;
    document.getElementById('coachDomain').textContent = domain;

    // Update status badge
    const statusBadge = document.getElementById('coachStatus');
    if (isAvailable) {
        statusBadge.className = 'badge-disponible';
        statusBadge.textContent = '✓ Disponible';
    } else {
        statusBadge.className = 'badge-indisponible';
        statusBadge.textContent = '✗ Indisponible';
    }

    // Highlight selected coach
    document.querySelectorAll('.coach-card').forEach(card => {
        card.style.borderColor = card.dataset.coachId == id ? '#20c997' : '#e5e7eb';
        card.style.borderWidth = card.dataset.coachId == id ? '2px' : '1px';
    });

    // Load availability
    await loadAvailability();
}

/**
 * Load coach availability from API
 */
async function loadAvailability() {
    if (!currentCoach) return;

    showLoading(true);

    try {
        const url = `/reservation/api/coach/\${currentCoach.id}/availability?weekStart=\${currentWeekStart}`;
        const response = await fetch(url);

        // CHECK response.ok FIRST
        if (!response.ok) {
            console.error('HTTP error:', response.status);
            showError(`Erreur serveur: \${response.status}`);
            return;
        }

        let data;
        try {
            data = await response.json();
        } catch (jsonError) {
            console.error('JSON parse error:', jsonError);
            showError('Erreur: réponse serveur invalide');
            return;
        }

        if (data.success) {
            availabilityData = data.availability;
            renderWeeklyCalendar(data);
        } else {
            showError(data.message || 'Erreur lors du chargement des disponibilités');
        }
    } catch (error) {
        console.error('Error loading availability:', error);
        showError('Erreur de connexion au serveur: ' + error.message);
    } finally {
        showLoading(false);
    }
}

/**
 * Render the weekly calendar (7 DAYS NOW)
 */
function renderWeeklyCalendar(data) {
    // Update week display
    document.getElementById('weekStart').textContent = formatDisplayDate(data.weekStart);
    document.getElementById('weekEnd').textContent = formatDisplayDate(data.weekEnd);

    // Render days
    const container = document.getElementById('weekDays');
    container.innerHTML = '';

    data.availability.forEach((day, index) => {
        const dayDiv = document.createElement('div');
        const canSelectDay = (day.isAvailable && !day.isReserved) || day.isMyReservation;
        let statusBadge = '';

        if (day.isReserved && day.isMyReservation) {
            statusBadge = '<span style=\"background:#20c997;color:#fff;border-radius:12px;padding:4px 12px;font-size:11px;font-weight:600;\">Ma réservation</span>';
        } else if (day.isReserved) {
            statusBadge = '<span style=\"background:#f59e0b;color:#fff;border-radius:12px;padding:4px 12px;font-size:11px;font-weight:600;\">Réservé</span>';
        } else if (day.isAvailable) {
            statusBadge = '<span class=\"badge-disponible\">Disponible</span>';
        } else {
            statusBadge = '<span class=\"badge-indisponible\">Indisponible</span>';
        }

        dayDiv.className = 'day-card';
        dayDiv.style.cssText = `
            background: \${day.isReserved ? '#fef3c7' : (day.isAvailable ? '#f9fafb' : '#fee2e2')};
            border: 2px solid \${day.isReserved ? '#f59e0b' : (day.isAvailable ? '#e5e7eb' : '#fca5a5')};
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 10px;
            cursor: \${canSelectDay ? 'pointer' : 'not-allowed'};
            transition: all 0.2s;
        `;

        if (canSelectDay) {
            dayDiv.onclick = () => selectDay(day);
            dayDiv.onmouseover = () => {
                if (selectedDate !== day.date) {
                    dayDiv.style.borderColor = '#20c997';
                    dayDiv.style.transform = 'translateX(5px)';
                }
            };
            dayDiv.onmouseout = () => {
                if (selectedDate !== day.date) {
                    dayDiv.style.borderColor = '#e5e7eb';
                    dayDiv.style.transform = 'translateY(0)';
                }
            };
        }

        // Highlight selected day
        if (selectedDate === day.date) {
            dayDiv.style.borderColor = '#20c997';
            dayDiv.style.borderWidth = '3px';
            dayDiv.style.background = '#d1fae5';
        }

        dayDiv.innerHTML = `
            <div class=\"d-flex align-items-center justify-content-between\">
                <div>
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">\${day.dayName}</div>
                    <div style=\"font-size: 12px; color: #6b7280;\">\${day.dayNumber}/\${day.month}/\${day.year}</div>
                </div>
                \${statusBadge}
            </div>
        `;

        container.appendChild(dayDiv);
    });
}

/**
 * Select a specific day
 */
function selectDay(day) {
    if (!day.isAvailable && !day.isMyReservation) return;

    selectedDate = day.date;
    currentReservationId = day.reservationId || null;

    // Update UI
    document.getElementById('selectedDayInfo').style.display = 'block';
    document.getElementById('selectedDayText').textContent =
        `\${day.dayName} \${day.dayNumber}/\${day.month}/\${day.year} sélectionné`;

    if (day.isMyReservation) {
        document.getElementById('reserveBtn').style.display = 'none';
        document.getElementById('cancelBtn').style.display = 'block';
        document.getElementById('unavailableMsg').style.display = 'none';
    } else if (day.isReserved) {
        // Reserved by another user: no action available
        document.getElementById('reserveBtn').style.display = 'none';
        document.getElementById('cancelBtn').style.display = 'none';
        document.getElementById('unavailableMsg').style.display = 'none';
    } else if (!currentCoach.isAvailable) {
        document.getElementById('reserveBtn').style.display = 'none';
        document.getElementById('cancelBtn').style.display = 'none';
        document.getElementById('unavailableMsg').style.display = 'block';
    } else {
        document.getElementById('reserveBtn').style.display = 'block';
        document.getElementById('cancelBtn').style.display = 'none';
        document.getElementById('unavailableMsg').style.display = 'none';
    }

    // Re-render to highlight selection
    loadAvailability();
}

/**
 * Reserve a session - PROPERLY HANDLES ERRORS
 */
async function reserveSession() {
    if (!selectedDate || !currentCoach) {
        showAlert('Veuillez sélectionner une date', 'warning');
        return;
    }

    if (!currentCoach.isAvailable) {
        showAlert('Ce coach est actuellement indisponible.', 'error');
        return;
    }

    // Validation client: date sélectionnée non passée
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    const selected = new Date(selectedDate);
    selected.setHours(0, 0, 0, 0);

    if (selected < today) {
        showAlert('Impossible de réserver une date passée. Veuillez choisir une date a partir d\\'aujourd\\'hui.', 'error');
        return;
    }

    if (!confirm(`Confirmer la réservation pour le \${formatDisplayDate(selectedDate)} avec \${currentCoach.name} ?`)) {
        return;
    }

    showLoading(true);

    try {
        const response = await fetch('/reservation/api/reserve', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                coachId: currentCoach.id,
                dateSeance: selectedDate
            })
        });

        if (!response.ok) {
            try {
                const errData = await response.json();
                showAlert(errData.message || `Erreur serveur \${response.status}`, 'error');
            } catch {
                showAlert(`Erreur serveur \${response.status}. Veuillez reessayer.`, 'error');
            }
            return;
        }

        let data;
        try {
            data = await response.json();
        } catch (jsonError) {
            console.error('JSON parse error:', jsonError);
            showAlert('Erreur: réponse serveur invalide', 'error');
            return;
        }

        if (data.success) {
            // Show the notification message (more personal than generic message)
            const displayMsg = data.notification?.message || data.message;
            showAlert(displayMsg, 'success');
            selectedDate = null;
            // Refresh the notification bell badge
            if (typeof refreshNotificationBell === 'function') {
                refreshNotificationBell();
            }
            await loadAvailability(); // Reload to show reservation
        } else {
            showAlert(data.message || 'Erreur lors de la réservation', 'error');
        }
    } catch (error) {
        console.error('Network or parsing error creating reservation:', error);
        showAlert('Erreur réseau: ' + error.message, 'error');
    } finally {
        showLoading(false);
    }
}

/**
 * Cancel a reservation
 */
async function cancelReservation() {
    if (!currentReservationId) {
        showAlert('Aucune réservation à annuler', 'warning');
        return;
    }

    if (!confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')) {
        return;
    }

    showLoading(true);

    try {
        const response = await fetch(`/reservation/api/cancel/\${currentReservationId}`, {
            method: 'POST'
        });

        if (!response.ok) {
            console.error('HTTP error during cancellation:', response.status);
            showAlert(`Erreur serveur \${response.status}`, 'error');
            return;
        }

        let data;
        try {
            data = await response.json();
        } catch (jsonError) {
            console.error('JSON parse error:', jsonError);
            showAlert('Erreur: réponse serveur invalide', 'error');
            return;
        }

        if (data.success) {
            showAlert(data.message, 'success');
            selectedDate = null;
            currentReservationId = null;
            // Refresh the notification bell badge
            if (typeof refreshNotificationBell === 'function') {
                refreshNotificationBell();
            }
            await loadAvailability(); // Reload calendar
        } else {
            showAlert(data.message || 'Erreur lors de l\\'annulation', 'error');
        }
    } catch (error) {
        console.error('Network or parsing error canceling reservation:', error);
        showAlert('Erreur réseau: ' + error.message, 'error');
    } finally {
        showLoading(false);
    }
}

/**
 * Navigate to previous/next week
 */
function navigateWeek(direction) {
    const date = new Date(currentWeekStart);
    date.setDate(date.getDate() + (direction * 7));
    currentWeekStart = formatDate(date);
    selectedDate = null;
    loadAvailability();
}

/**
 * Show/hide loading indicator
 */
function showLoading(show) {
    document.getElementById('loadingIndicator').style.display = show ? 'block' : 'none';
    document.getElementById('weekDays').style.display = show ? 'none' : 'block';
}

/**
 * Show alert message
 */
function showAlert(message, type) {
    const alertClass = type === 'success' ? 'alert-success' : type === 'error' ? 'alert-danger' : 'alert-warning';
    const alertHtml = `
        <div class=\"alert \${alertClass} alert-dismissible fade show\" role=\"alert\"
             style=\"position: fixed; top: 80px; right: 20px; z-index: 9999; min-width: 300px; animation: slideIn 0.3s;\">
            <i class=\"fas fa-\${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'exclamation-triangle'}\"></i>
            \${message}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    `;

    const temp = document.createElement('div');
    temp.innerHTML = alertHtml;
    document.body.appendChild(temp.firstElementChild);

    setTimeout(() => {
        temp.firstElementChild?.remove();
    }, 5000);
}

/**
 * Format date for API (YYYY-MM-DD)
 */
function formatDate(date) {
    const d = new Date(date);
    const year = d.getFullYear();
    const month = String(d.getMonth() + 1).padStart(2, '0');
    const day = String(d.getDate()).padStart(2, '0');
    return `\${year}-\${month}-\${day}`;
}

/**
 * Format date for display (DD/MM/YYYY)
 */
function formatDisplayDate(dateStr) {
    const [year, month, day] = dateStr.split('-');
    return `\${day}/\${month}/\${year}`;
}

/**
 * Show error message
 */
function showError(message) {
    showAlert(message, 'error');
}

/**
 * Load and show current week overview on page load (7 DAYS NOW, Mon-Sun)
 */
function loadCurrentWeekOverview() {
    const frenchDays = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']; // 7 jours
    const today = new Date();
    const dayOfWeek = today.getDay();
    const diff = dayOfWeek === 0 ? -6 : 1 - dayOfWeek;
    const monday = new Date(today);
    monday.setDate(today.getDate() + diff);

    // Set week range display (7 days: Mon-Sun)
    const sunday = new Date(monday);
    sunday.setDate(monday.getDate() + 6);
    document.getElementById('overviewWeekStart').textContent = formatDisplayDate(formatDate(monday));
    document.getElementById('overviewWeekEnd').textContent = formatDisplayDate(formatDate(sunday));

    // Render 7 weekday cards (Mon-Sun)
    const container = document.getElementById('overviewWeekDays');
    container.innerHTML = '';

    for (let i = 0; i < 7; i++) { // 7 iterations now
        const currentDate = new Date(monday);
        currentDate.setDate(monday.getDate() + i);

        const isToday = currentDate.toDateString() === today.toDateString();
        const isPast = currentDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());

        const dayDiv = document.createElement('div');
        dayDiv.style.cssText = `
            background: \${isToday ? 'linear-gradient(135deg, #d1fae5, #a7f3d0)' : isPast ? '#f9fafb' : '#fff'};
            border: 2px solid \${isToday ? '#20c997' : '#e5e7eb'};
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 10px;
            transition: all 0.2s;
            opacity: \${isPast ? 0.6 : 1};
            \${isToday ? 'box-shadow: 0 2px 8px rgba(32,201,151,0.2);' : ''}
        `;

        const dd = String(currentDate.getDate()).padStart(2, '0');
        const mm = String(currentDate.getMonth() + 1).padStart(2, '0');
        const yyyy = currentDate.getFullYear();

        dayDiv.innerHTML = `
            <div class=\"d-flex align-items-center justify-content-between\">
                <div>
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                        \${frenchDays[i]}
                        \${isToday ? '<span style=\"background:#20c997;color:#fff;border-radius:8px;padding:2px 8px;font-size:10px;font-weight:600;margin-left:8px;\">Aujourd\\'hui</span>' : ''}
                    </div>
                    <div style=\"font-size: 12px; color: #6b7280;\">\${dd}/\${mm}/\${yyyy}</div>
                </div>
                <span style=\"color: \${isPast ? '#d1d5db' : '#9ca3af'}; font-size: 11px; font-weight: 500;\">
                    \${isPast ? 'Passé' : '<i class=\"fas fa-arrow-left\" style=\"margin-right:4px;\"></i> Choisir'}
                </span>
            </div>
        `;

        container.appendChild(dayDiv);
    }
}

/**
 * RATING SYSTEM - Load ratings for all coaches and handle submission
 */
let selectedRatings = {};

function renderAverageStars(coachId, average) {
    const avgDiv = document.getElementById(`avg-stars-\${coachId}`);
    if (!avgDiv) return;

    const avgValue = parseFloat(average);
    if (!isNaN(avgValue) && avgValue > 0) {
        const roundedAvg = Math.round(avgValue);
        let starsHtml = '';

        for (let i = 1; i <= 5; i++) {
            starsHtml += `<i class=\"fas fa-star\" style=\"color: \${i <= roundedAvg ? '#f59e0b' : '#d1d5db'}; font-size: 14px;\"></i>`;
        }

        starsHtml += `<span style=\"font-size:12px; color:#374151; margin-left:6px;\"><strong>\${avgValue.toFixed(1)}</strong>/5</span>`;
        avgDiv.innerHTML = starsHtml;
        return;
    }

    avgDiv.innerHTML = `
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
        <span style=\"font-size:12px; color:#9ca3af; margin-left:6px;\">Pas d'évaluation encore</span>
    `;
}

async function loadAllCoachRatings() {
    const coachCards = document.querySelectorAll('.coach-card');
    
    for (const card of coachCards) {
        const coachId = card.dataset.coachId;
        if (coachId) {
            await loadCoachRatingStats(coachId);
        }
    }
}

async function loadCoachRatingStats(coachId) {
    try {
        const response = await fetch(`/api/rating/coach/\${coachId}/stats`);
        if (!response.ok) return;

        const data = await response.json();

        if (data.success) {
            renderAverageStars(coachId, data.average);
        }

        // Pre-select user's rating if exists
        if (data.userNote && data.userNote > 0) {
            selectedRatings[coachId] = data.userNote;
            updateStarDisplay(coachId);
        }
    } catch (error) {
        console.error('Erreur chargement stats rating coach', coachId, ':', error);
    }
}

function updateStarDisplay(coachId) {
    const starsDiv = document.getElementById(`stars-\${coachId}`);
    if (!starsDiv) return;

    const stars = starsDiv.querySelectorAll('i');
    const rating = selectedRatings[coachId] || 0;

    stars.forEach((star, index) => {
        star.style.color = index < rating ? '#f59e0b' : '#d1d5db';
    });
}

// Star hover effect
document.addEventListener('mouseover', (e) => {
    if (e.target.classList.contains('fa-star')) {
        const star = e.target;
        const starsDiv = star.parentElement;
        if (!starsDiv || !starsDiv.classList.contains('star-rating')) return;

        const value = parseInt(star.dataset.value);
        if (isNaN(value)) return;
        
        const stars = starsDiv.querySelectorAll('i');
        stars.forEach((s, index) => {
            s.style.color = index < value ? '#fbbf24' : '#d1d5db';
        });
    }
});

// Star click - select and submit rating
document.addEventListener('click', async (e) => {
    if (e.target.classList.contains('fa-star')) {
        const star = e.target;
        const starsDiv = star.parentElement;
        if (!starsDiv || !starsDiv.classList.contains('star-rating')) return;

        const ratingComponent = starsDiv.closest('.rating-component');
        if (!ratingComponent) return;
        const coachId = parseInt(ratingComponent.dataset.coachId);
        const value = parseInt(star.dataset.value);

        if (!isNaN(value) && !isNaN(coachId)) {
            selectedRatings[coachId] = value;
            updateStarDisplay(coachId);
            await submitRating(coachId);
        }
    }
});

// Star mouseout - reset to selected rating
document.addEventListener('mouseout', (e) => {
    if (e.target.classList.contains('fa-star')) {
        const star = e.target;
        const starsDiv = star.parentElement;
        if (!starsDiv || !starsDiv.classList.contains('star-rating')) return;

        const ratingComponent = starsDiv.closest('.rating-component');
        const coachId = parseInt(ratingComponent.dataset.coachId);
        
        if (!isNaN(coachId)) {
            updateStarDisplay(coachId);
        }
    }
});

/**
 * Submit rating for a coach
 */
async function submitRating(coachId) {
    const note = selectedRatings[coachId];

    if (!note || note < 1 || note > 5) {
        return;
    }

    try {
        showLoading(true);
        
        const response = await fetch(`/api/rating/coach/\${coachId}/rate`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                note: note,
                commentaire: ''
            })
        });

        if (!response.ok) {
            console.error('HTTP error submitting rating:', response.status);
            showAlert(`Erreur serveur \${response.status}`, 'error');
            return;
        }

        const data = await response.json();

        if (data.success) {
            // 1) Immediate UI update with server-returned global average from /rate
            renderAverageStars(coachId, data.stats?.average);

            // 2) Re-validate with /stats to guarantee displayed value is global persisted average
            await loadCoachRatingStats(coachId);

            updateStarDisplay(coachId);

            showAlert('Merci pour votre évaluation !', 'success');
        } else {
            showAlert(data.message || 'Erreur lors de l\\'enregistrement', 'error');
        }
    } catch (error) {
        console.error('Error submitting rating:', error);
        showAlert('Erreur réseau: ' + error.message, 'error');
    } finally {
        showLoading(false);
    }
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
    initializeCalendar();
    loadCurrentWeekOverview();
    loadAllCoachRatings();
});
</script>

<style>
@keyframes slideIn {
    from { opacity: 0; transform: translateX(100px); }
    to { opacity: 1; transform: translateX(0); }
}

.coach-card:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.day-card {
    transition: all 0.2s ease;
}

/* ═══════════════════════════════════════════════════════════════
   CHATBOT WIDGET STYLES — fully isolated with chatbot- prefix
   ═══════════════════════════════════════════════════════════════ */

/* Floating Action Button */
.chatbot-fab {
    position: fixed;
    bottom: 28px;
    right: 28px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(32, 201, 151, 0.4);
    z-index: 10000;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: none;
}
.chatbot-fab:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 28px rgba(32, 201, 151, 0.55);
}
.chatbot-fab-pulse {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(32, 201, 151, 0.3);
    animation: chatbot-pulse 2s infinite;
    pointer-events: none;
}
@keyframes chatbot-pulse {
    0% { transform: scale(1); opacity: 0.6; }
    100% { transform: scale(1.6); opacity: 0; }
}

/* Panel */
.chatbot-panel {
    position: fixed;
    bottom: 100px;
    right: 28px;
    width: 400px;
    max-height: 560px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 12px 48px rgba(0,0,0,0.15), 0 0 0 1px rgba(0,0,0,0.04);
    display: none;
    flex-direction: column;
    z-index: 10001;
    overflow: hidden;
    animation: chatbot-slideUp 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}
.chatbot-panel.chatbot-open {
    display: flex;
}
@keyframes chatbot-slideUp {
    from { opacity: 0; transform: translateY(20px) scale(0.96); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

/* Header */
.chatbot-header {
    background: linear-gradient(135deg, #1a2332, #243447);
    padding: 16px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
}
.chatbot-header-left {
    display: flex;
    align-items: center;
    gap: 12px;
}
.chatbot-header-avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 16px;
}
.chatbot-header-title {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
}
.chatbot-header-subtitle {
    color: #8a9aaf;
    font-size: 11px;
    font-weight: 500;
}
.chatbot-header-actions {
    display: flex;
    gap: 6px;
}
.chatbot-header-btn {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: rgba(255,255,255,0.1);
    color: #8a9aaf;
    font-size: 13px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}
.chatbot-header-btn:hover {
    background: rgba(255,255,255,0.2);
    color: #fff;
}

/* Messages Area */
.chatbot-messages {
    flex: 1;
    overflow-y: auto;
    padding: 18px;
    min-height: 280px;
    max-height: 360px;
    scroll-behavior: smooth;
}

/* Welcome */
.chatbot-welcome {
    text-align: center;
    padding: 12px 0;
}
.chatbot-welcome-icon {
    font-size: 36px;
    margin-bottom: 10px;
}
.chatbot-welcome-text {
    font-size: 13px;
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 16px;
}
.chatbot-suggestions {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.chatbot-suggestion {
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
    border-radius: 12px;
    padding: 10px 14px;
    font-size: 12px;
    font-weight: 500;
    color: #166534;
    cursor: pointer;
    transition: all 0.2s;
    text-align: left;
}
.chatbot-suggestion:hover {
    background: #dcfce7;
    border-color: #86efac;
    transform: translateX(4px);
}

/* Message Bubbles */
.chatbot-msg {
    display: flex;
    gap: 8px;
    margin-bottom: 14px;
    animation: chatbot-msgFade 0.3s ease;
}
@keyframes chatbot-msgFade {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}
.chatbot-msg-user {
    flex-direction: row-reverse;
}
.chatbot-msg-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    flex-shrink: 0;
    margin-top: 2px;
}
.chatbot-msg-bot .chatbot-msg-avatar {
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    color: #fff;
}
.chatbot-msg-user .chatbot-msg-avatar {
    background: #e5e7eb;
    color: #374151;
}
.chatbot-msg-bubble {
    max-width: 78%;
    padding: 10px 14px;
    border-radius: 16px;
    font-size: 13px;
    line-height: 1.55;
    word-wrap: break-word;
    white-space: pre-wrap;
}
.chatbot-msg-bot .chatbot-msg-bubble {
    background: #f3f4f6;
    color: #1f2937;
    border-bottom-left-radius: 4px;
}
.chatbot-msg-user .chatbot-msg-bubble {
    background: linear-gradient(135deg, #20c997, #17b890);
    color: #fff;
    border-bottom-right-radius: 4px;
}
.chatbot-msg-error .chatbot-msg-bubble {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
}

/* Typing Indicator */
.chatbot-typing {
    padding: 8px 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
}
.chatbot-typing-indicator {
    display: flex;
    gap: 4px;
}
.chatbot-typing-indicator span {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #20c997;
    animation: chatbot-bounce 1.3s infinite;
}
.chatbot-typing-indicator span:nth-child(2) { animation-delay: 0.15s; }
.chatbot-typing-indicator span:nth-child(3) { animation-delay: 0.3s; }
@keyframes chatbot-bounce {
    0%, 60%, 100% { transform: translateY(0); opacity: 0.4; }
    30% { transform: translateY(-6px); opacity: 1; }
}
.chatbot-typing-text {
    font-size: 11px;
    color: #9ca3af;
    font-style: italic;
}

/* Input Area */
.chatbot-input-area {
    padding: 14px 16px;
    border-top: 1px solid #f3f4f6;
    display: flex;
    gap: 8px;
    align-items: center;
    flex-shrink: 0;
    background: #fafafa;
}
.chatbot-input {
    flex: 1;
    padding: 10px 16px;
    border: 1px solid #e5e7eb;
    border-radius: 24px;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
    outline: none;
    transition: border-color 0.2s;
    background: #fff;
}
.chatbot-input:focus {
    border-color: #20c997;
    box-shadow: 0 0 0 3px rgba(32, 201, 151, 0.1);
}
.chatbot-input::placeholder {
    color: #9ca3af;
}
.chatbot-send-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    background: linear-gradient(135deg, #20c997, #0ea5e9);
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    flex-shrink: 0;
}
.chatbot-send-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 4px 12px rgba(32, 201, 151, 0.35);
}
.chatbot-send-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

/* Responsive */
@media (max-width: 768px) {
    .chatbot-panel {
        width: calc(100vw - 24px);
        right: 12px;
        bottom: 90px;
        max-height: 70vh;
    }
    .chatbot-fab {
        bottom: 16px;
        right: 16px;
        width: 52px;
        height: 52px;
        font-size: 20px;
    }
}
</style>

{# ═══ Chatbot JavaScript — isolated in IIFE namespace ═══ #}
<script>
const ChatbotWidget = (function() {
    'use strict';

    let isOpen = false;
    let isSending = false;

    function toggle() {
        const panel = document.getElementById('chatbot-panel');
        const fab = document.getElementById('chatbot-fab');
        const fabIcon = document.getElementById('chatbot-fab-icon');

        isOpen = !isOpen;

        if (isOpen) {
            panel.classList.add('chatbot-open');
            fabIcon.className = 'fas fa-times';
            fab.style.background = 'linear-gradient(135deg, #374151, #1f2937)';
            // Focus input
            setTimeout(() => document.getElementById('chatbot-input').focus(), 100);
        } else {
            panel.classList.remove('chatbot-open');
            fabIcon.className = 'fas fa-robot';
            fab.style.background = 'linear-gradient(135deg, #20c997, #0ea5e9)';
        }
    }

    function appendMessage(role, text) {
        const container = document.getElementById('chatbot-messages');

        // Remove welcome on first real message
        const welcome = container.querySelector('.chatbot-welcome');
        if (welcome) welcome.remove();

        const msgDiv = document.createElement('div');
        msgDiv.className = `chatbot-msg chatbot-msg-\${role}`;

        const avatarContent = role === 'bot'
            ? '<i class=\"fas fa-robot\"></i>'
            : '<i class=\"fas fa-user\"></i>';

        msgDiv.innerHTML = `
            <div class=\"chatbot-msg-avatar\">\${avatarContent}</div>
            <div class=\"chatbot-msg-bubble\">\${escapeHtml(text)}</div>
        `;

        container.appendChild(msgDiv);
        scrollToBottom();
    }

    function appendError(text) {
        const container = document.getElementById('chatbot-messages');
        const welcome = container.querySelector('.chatbot-welcome');
        if (welcome) welcome.remove();

        const msgDiv = document.createElement('div');
        msgDiv.className = 'chatbot-msg chatbot-msg-bot chatbot-msg-error';
        msgDiv.innerHTML = `
            <div class=\"chatbot-msg-avatar\"><i class=\"fas fa-exclamation-triangle\"></i></div>
            <div class=\"chatbot-msg-bubble\"><i class=\"fas fa-exclamation-circle\"></i> \${escapeHtml(text)}</div>
        `;
        container.appendChild(msgDiv);
        scrollToBottom();
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function scrollToBottom() {
        const container = document.getElementById('chatbot-messages');
        setTimeout(() => { container.scrollTop = container.scrollHeight; }, 50);
    }

    function setLoading(loading) {
        isSending = loading;
        const btn = document.getElementById('chatbot-send-btn');
        const input = document.getElementById('chatbot-input');
        const typing = document.getElementById('chatbot-typing');

        btn.disabled = loading;
        input.disabled = loading;
        typing.style.display = loading ? 'flex' : 'none';

        if (!loading) {
            input.focus();
        }
    }

    async function send() {
        if (isSending) return;

        const input = document.getElementById('chatbot-input');
        const message = input.value.trim();

        if (!message) return;

        if (message.length > 1000) {
            appendError('Votre message est trop long (maximum 1000 caractères).');
            return;
        }

        // Show user message immediately
        appendMessage('user', message);
        input.value = '';

        setLoading(true);

        try {
            const response = await fetch('/chatbot/message', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: message })
            });

            let data;
            try {
                data = await response.json();
            } catch (e) {
                appendError('Réponse invalide du serveur.');
                setLoading(false);
                return;
            }

            if (data.success) {
                appendMessage('bot', data.response);
            } else {
                appendError(data.message || 'Une erreur est survenue.');
            }
        } catch (error) {
            console.error('Chatbot network error:', error);
            appendError('Impossible de contacter le serveur. Vérifiez votre connexion.');
        } finally {
            setLoading(false);
        }
    }

    function sendSuggestion(text) {
        const input = document.getElementById('chatbot-input');
        input.value = text;
        send();
    }

    async function clearChat() {
        if (!confirm('Effacer la conversation ?')) return;

        try {
            await fetch('/chatbot/clear', { method: 'POST' });
        } catch (e) {
            // Ignore network errors on clear
        }

        const container = document.getElementById('chatbot-messages');
        container.innerHTML = `
            <div class=\"chatbot-welcome\">
                <div class=\"chatbot-welcome-icon\">🤖</div>
                <div class=\"chatbot-welcome-text\">
                    Bonjour 👋 Je suis votre assistant IA.<br>
                    Je peux vous aider à <strong>trouver le coach idéal</strong> ou répondre à vos questions sur <strong>l'entrepreneuriat</strong>.
                </div>
                <div class=\"chatbot-suggestions\">
                    <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je cherche un coach en finance')\">
                        💰 Coach en finance
                    </button>
                    <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Quel coach est le mieux noté ?')\">
                        ⭐ Meilleur coach
                    </button>
                    <button class=\"chatbot-suggestion\" onclick=\"ChatbotWidget.sendSuggestion('Je veux lancer un petit business, par quoi commencer ?')\">
                        🚀 Lancer un business
                    </button>
                </div>
            </div>
        `;
    }

    // Public API
    return {
        toggle: toggle,
        send: send,
        sendSuggestion: sendSuggestion,
        clearChat: clearChat
    };
})();
</script>
{% endblock %}
", "coach/index.html.twig", "C:\\Users\\melek\\Downloads\\wetransfer_esprit-pidev-web-3a7-2026-bizcore-main-zip_2026-04-09_1330\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\templates\\coach\\index.html.twig");
    }
}
