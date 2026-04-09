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

/* coach/search.html.twig */
class __TwigTemplate_73bb8594c82a3a9ec0f42b27d4c59c1b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/search.html.twig"));

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

        yield "Recherche de Coachs — GestionCoach";
        
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

        yield "Recherche";
        
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
        yield "\" class=\"\"><i class=\"fas fa-lock\"></i> Administration</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "
";
        // line 16
        yield "<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0;\">
            <i class=\"fas fa-search\" style=\"color:var(--accent);\"></i> Recherche de Coachs
        </h2>
        ";
        // line 21
        if (array_key_exists("coaches", $context)) {
            // line 22
            yield "        <p style=\"font-size:12px;color:#6b7280;margin:4px 0 0;\">
            ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 23, $this->source); })())), "html", null, true);
            yield " résultat";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 23, $this->source); })())) > 1)) ? ("s") : (""));
            yield " trouvé";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 23, $this->source); })())) > 1)) ? ("s") : (""));
            yield "
        </p>
        ";
        }
        // line 26
        yield "    </div>
    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        yield "\" style=\"font-size:13px;font-weight:600;color:var(--accent);text-decoration:none;\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

";
        // line 33
        yield "<div class=\"card-panel\" style=\"padding:20px;margin-bottom:22px;\">
    <form method=\"GET\" action=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_search");
        yield "\" class=\"d-flex flex-wrap gap-3 align-items-end\">
        <div style=\"min-width:200px;flex:1;\">
            <label style=\"font-size:11px;font-weight:600;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px;\">Domaine</label>
            <select name=\"domaine\" class=\"form-select\"
                    style=\"font-size:13px;padding:8px 12px;border:1.5px solid #d1d5db;border-radius:7px;width:100%;\">
                <option value=\"\">Tous les domaines</option>
                <option value=\"BRANDING\"   ";
        // line 40
        yield ((((isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 40, $this->source); })()) == "BRANDING")) ? ("selected") : (""));
        yield ">🎨 Branding</option>
                <option value=\"E_COMMERCE\" ";
        // line 41
        yield ((((isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 41, $this->source); })()) == "E_COMMERCE")) ? ("selected") : (""));
        yield ">🛒 E-Commerce</option>
                <option value=\"LEADERSHIP\" ";
        // line 42
        yield ((((isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 42, $this->source); })()) == "LEADERSHIP")) ? ("selected") : (""));
        yield ">🏆 Leadership</option>
                <option value=\"FINANCE\"    ";
        // line 43
        yield ((((isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 43, $this->source); })()) == "FINANCE")) ? ("selected") : (""));
        yield ">💰 Finance</option>
                <option value=\"FUNDING\"    ";
        // line 44
        yield ((((isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 44, $this->source); })()) == "FUNDING")) ? ("selected") : (""));
        yield ">🚀 Financement</option>
            </select>
        </div>
        <div style=\"min-width:160px;\">
            <label style=\"font-size:11px;font-weight:600;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px;\">Tarif max (TND)</label>
            <input type=\"number\" name=\"maxTarif\" min=\"0\" step=\"10\"
                   value=\"";
        // line 50
        yield (((array_key_exists("maxTarif", $context) &&  !(null === $context["maxTarif"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["maxTarif"], "html", null, true)) : (""));
        yield "\"
                   placeholder=\"ex: 150\"
                   style=\"width:100%;padding:8px 12px;border:1.5px solid #d1d5db;border-radius:7px;font-size:13px;outline:none;\">
        </div>
        <div style=\"display:flex;align-items:center;gap:6px;padding-bottom:2px;\">
            <input type=\"checkbox\" name=\"onlyAvailable\" value=\"1\" id=\"onlyAvail\"
                   ";
        // line 56
        yield (((($tmp = (isset($context["onlyAvailable"]) || array_key_exists("onlyAvailable", $context) ? $context["onlyAvailable"] : (function () { throw new RuntimeError('Variable "onlyAvailable" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
        yield "
                   style=\"width:15px;height:15px;accent-color:var(--accent);\">
            <label for=\"onlyAvail\" style=\"font-size:13px;color:#374151;font-weight:500;cursor:pointer;margin:0;\">
                Disponibles uniquement
            </label>
        </div>
        <div style=\"display:flex;gap:8px;\">
            <button type=\"submit\" class=\"btn-teal\" style=\"padding:8px 18px;border-radius:6px;\">
                <i class=\"fas fa-search\"></i> Chercher
            </button>
            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_search");
        yield "\"
               style=\"padding:8px 16px;border-radius:6px;background:#f3f4f6;color:#374151;font-size:13px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>

";
        // line 75
        if (( !array_key_exists("coaches", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 75, $this->source); })())))) {
            // line 76
            yield "<div style=\"text-align:center;padding:56px 20px;color:#9ca3af;\">
    <i class=\"fas fa-search\" style=\"font-size:40px;display:block;margin-bottom:16px;opacity:.4;\"></i>
    <h3 style=\"font-size:16px;font-weight:600;color:#6b7280;margin:0 0 8px;\">
        ";
            // line 79
            if (array_key_exists("coaches", $context)) {
                yield "Aucun coach trouvé pour ces critères.";
            } else {
                yield "Utilisez les filtres ci-dessus pour rechercher.";
            }
            // line 80
            yield "    </h3>
    <a href=\"";
            // line 81
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
            yield "\" style=\"color:var(--accent);font-size:13px;font-weight:600;text-decoration:none;\">
        Voir tous les coachs →
    </a>
</div>
";
        } else {
            // line 86
            yield "<div style=\"display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:18px;\">
    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                // line 88
                yield "    <div style=\"background:#fff;border:1px solid #e8ecf0;border-radius:12px;overflow:hidden;transition:box-shadow .2s,transform .2s;\"
         onmouseover=\"this.style.boxShadow='0 8px 24px rgba(0,0,0,.1)';this.style.transform='translateY(-2px)';\"
         onmouseout=\"this.style.boxShadow='none';this.style.transform='none';\">

        <div style=\"background:linear-gradient(135deg,#1C2B3A,#243447);padding:18px;display:flex;align-items:center;gap:12px;\">
            <div style=\"width:48px;height:48px;border-radius:10px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:16px;font-weight:700;flex-shrink:0;\">
                ";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 94), 0, 1)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 94), 0, 1)), "html", null, true);
                yield "
            </div>
            <div>
                <div style=\"color:#fff;font-size:14px;font-weight:700;\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 97), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 97), "html", null, true);
                yield "</div>
                ";
                // line 98
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 99
                    yield "                <span style=\"background:rgba(255,255,255,.12);color:#cbd5e1;border-radius:20px;padding:2px 9px;font-size:10.5px;font-weight:600;margin-top:4px;display:inline-block;\">
                    ";
                    // line 100
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 100) == "BRANDING")) {
                        yield "🎨 Branding
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 101
$context["coach"], "domaine", [], "any", false, false, false, 101) == "E_COMMERCE")) {
                        yield "🛒 E-Commerce
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 102
$context["coach"], "domaine", [], "any", false, false, false, 102) == "LEADERSHIP")) {
                        yield "🏆 Leadership
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 103
$context["coach"], "domaine", [], "any", false, false, false, 103) == "FINANCE")) {
                        yield "💰 Finance
                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 104
$context["coach"], "domaine", [], "any", false, false, false, 104) == "FUNDING")) {
                        yield "🚀 Financement
                    ";
                    } else {
                        // line 105
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 105), "html", null, true);
                    }
                    // line 106
                    yield "                </span>
                ";
                }
                // line 108
                yield "            </div>
        </div>

        <div style=\"display:grid;grid-template-columns:1fr 1fr 1fr;border-bottom:1px solid #f1f5f9;\">
            <div style=\"padding:10px 0;text-align:center;border-right:1px solid #f1f5f9;\">
                <div style=\"font-size:13px;font-weight:700;color:#111827;\">";
                // line 113
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", true, true, false, 113) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 113)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 113), "html", null, true)) : ("—"));
                yield "</div>
                <div style=\"font-size:9.5px;color:#9ca3af;\">ans</div>
            </div>
            <div style=\"padding:10px 0;text-align:center;border-right:1px solid #f1f5f9;\">
                <div style=\"font-size:12px;font-weight:700;color:var(--accent);\">";
                // line 117
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 117), 0, "", "") . " TND"), "html", null, true)) : ("—"));
                yield "</div>
                <div style=\"font-size:9.5px;color:#9ca3af;\">/heure</div>
            </div>
            <div style=\"padding:10px 0;text-align:center;\">
                ";
                // line 121
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "                <div style=\"font-size:13px;font-weight:700;color:#f59e0b;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 122), "html", null, true);
                    yield "</div>
                <div style=\"font-size:9.5px;color:#9ca3af;\"><i class=\"fas fa-star\" style=\"font-size:8px;color:#f59e0b;\"></i> /5</div>
                ";
                } else {
                    // line 125
                    yield "                <div style=\"font-size:12px;color:#9ca3af;\">—</div>
                <div style=\"font-size:9.5px;color:#d1d5db;\">note</div>
                ";
                }
                // line 128
                yield "            </div>
        </div>

        <div style=\"padding:12px 14px;display:flex;justify-content:space-between;align-items:center;\">
            ";
                // line 132
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 132) == "Disponible")) {
                    // line 133
                    yield "                <span class=\"badge-disponible\"><i class=\"fas fa-circle\" style=\"font-size:7px;margin-right:4px;\"></i>Disponible</span>
            ";
                } else {
                    // line 135
                    yield "                <span class=\"badge-indisponible\"><i class=\"fas fa-circle\" style=\"font-size:7px;margin-right:4px;\"></i>Indisponible</span>
            ";
                }
                // line 137
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "idCoach", [], "any", false, false, false, 137)]), "html", null, true);
                yield "\"
               style=\"font-size:12px;font-weight:600;color:var(--accent);text-decoration:none;\">
                Profil <i class=\"fas fa-arrow-right\" style=\"font-size:10px;\"></i>
            </a>
        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "</div>
";
        }
        // line 146
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "coach/search.html.twig";
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
        return array (  411 => 146,  407 => 144,  393 => 137,  389 => 135,  385 => 133,  383 => 132,  377 => 128,  372 => 125,  365 => 122,  363 => 121,  356 => 117,  349 => 113,  342 => 108,  338 => 106,  335 => 105,  330 => 104,  326 => 103,  322 => 102,  318 => 101,  314 => 100,  311 => 99,  309 => 98,  303 => 97,  296 => 94,  288 => 88,  284 => 87,  281 => 86,  273 => 81,  270 => 80,  264 => 79,  259 => 76,  257 => 75,  246 => 66,  233 => 56,  224 => 50,  215 => 44,  211 => 43,  207 => 42,  203 => 41,  199 => 40,  190 => 34,  187 => 33,  179 => 27,  176 => 26,  166 => 23,  163 => 22,  161 => 21,  154 => 16,  151 => 14,  141 => 13,  131 => 10,  122 => 7,  112 => 6,  95 => 4,  78 => 3,  61 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Recherche de Coachs — GestionCoach{% endblock %}
{% block page_title %}Recherche{% endblock %}
{% block nav_section_label %}Front Office{% endblock %}

{% block sidebar_nav %}
<a href=\"{{ path('app_coach_index') }}\" class=\"{{ app.request.attributes.get('_route') starts with 'app_coach' ? 'active' : '' }}\">
    <i class=\"fas fa-users\"></i> Coachs
</a>
<a href=\"{{ path('admin_coach_index') }}\" class=\"\"><i class=\"fas fa-lock\"></i> Administration</a>
{% endblock %}

{% block body %}

{# ── HEADER ── #}
<div class=\"d-flex justify-content-between align-items-center mb-4\">
    <div>
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0;\">
            <i class=\"fas fa-search\" style=\"color:var(--accent);\"></i> Recherche de Coachs
        </h2>
        {% if coaches is defined %}
        <p style=\"font-size:12px;color:#6b7280;margin:4px 0 0;\">
            {{ coaches|length }} résultat{{ coaches|length > 1 ? 's' : '' }} trouvé{{ coaches|length > 1 ? 's' : '' }}
        </p>
        {% endif %}
    </div>
    <a href=\"{{ path('app_coach_index') }}\" style=\"font-size:13px;font-weight:600;color:var(--accent);text-decoration:none;\">
        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
    </a>
</div>

{# ── SEARCH FORM ── #}
<div class=\"card-panel\" style=\"padding:20px;margin-bottom:22px;\">
    <form method=\"GET\" action=\"{{ path('app_coach_search') }}\" class=\"d-flex flex-wrap gap-3 align-items-end\">
        <div style=\"min-width:200px;flex:1;\">
            <label style=\"font-size:11px;font-weight:600;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px;\">Domaine</label>
            <select name=\"domaine\" class=\"form-select\"
                    style=\"font-size:13px;padding:8px 12px;border:1.5px solid #d1d5db;border-radius:7px;width:100%;\">
                <option value=\"\">Tous les domaines</option>
                <option value=\"BRANDING\"   {{ domaine == 'BRANDING'   ? 'selected' : '' }}>🎨 Branding</option>
                <option value=\"E_COMMERCE\" {{ domaine == 'E_COMMERCE' ? 'selected' : '' }}>🛒 E-Commerce</option>
                <option value=\"LEADERSHIP\" {{ domaine == 'LEADERSHIP' ? 'selected' : '' }}>🏆 Leadership</option>
                <option value=\"FINANCE\"    {{ domaine == 'FINANCE'    ? 'selected' : '' }}>💰 Finance</option>
                <option value=\"FUNDING\"    {{ domaine == 'FUNDING'    ? 'selected' : '' }}>🚀 Financement</option>
            </select>
        </div>
        <div style=\"min-width:160px;\">
            <label style=\"font-size:11px;font-weight:600;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px;\">Tarif max (TND)</label>
            <input type=\"number\" name=\"maxTarif\" min=\"0\" step=\"10\"
                   value=\"{{ maxTarif ?? '' }}\"
                   placeholder=\"ex: 150\"
                   style=\"width:100%;padding:8px 12px;border:1.5px solid #d1d5db;border-radius:7px;font-size:13px;outline:none;\">
        </div>
        <div style=\"display:flex;align-items:center;gap:6px;padding-bottom:2px;\">
            <input type=\"checkbox\" name=\"onlyAvailable\" value=\"1\" id=\"onlyAvail\"
                   {{ onlyAvailable ? 'checked' : '' }}
                   style=\"width:15px;height:15px;accent-color:var(--accent);\">
            <label for=\"onlyAvail\" style=\"font-size:13px;color:#374151;font-weight:500;cursor:pointer;margin:0;\">
                Disponibles uniquement
            </label>
        </div>
        <div style=\"display:flex;gap:8px;\">
            <button type=\"submit\" class=\"btn-teal\" style=\"padding:8px 18px;border-radius:6px;\">
                <i class=\"fas fa-search\"></i> Chercher
            </button>
            <a href=\"{{ path('app_coach_search') }}\"
               style=\"padding:8px 16px;border-radius:6px;background:#f3f4f6;color:#374151;font-size:13px;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;\">
                <i class=\"fas fa-redo\"></i> Réinitialiser
            </a>
        </div>
    </form>
</div>

{# ── RESULTS ── #}
{% if coaches is not defined or coaches is empty %}
<div style=\"text-align:center;padding:56px 20px;color:#9ca3af;\">
    <i class=\"fas fa-search\" style=\"font-size:40px;display:block;margin-bottom:16px;opacity:.4;\"></i>
    <h3 style=\"font-size:16px;font-weight:600;color:#6b7280;margin:0 0 8px;\">
        {% if coaches is defined %}Aucun coach trouvé pour ces critères.{% else %}Utilisez les filtres ci-dessus pour rechercher.{% endif %}
    </h3>
    <a href=\"{{ path('app_coach_index') }}\" style=\"color:var(--accent);font-size:13px;font-weight:600;text-decoration:none;\">
        Voir tous les coachs →
    </a>
</div>
{% else %}
<div style=\"display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:18px;\">
    {% for coach in coaches %}
    <div style=\"background:#fff;border:1px solid #e8ecf0;border-radius:12px;overflow:hidden;transition:box-shadow .2s,transform .2s;\"
         onmouseover=\"this.style.boxShadow='0 8px 24px rgba(0,0,0,.1)';this.style.transform='translateY(-2px)';\"
         onmouseout=\"this.style.boxShadow='none';this.style.transform='none';\">

        <div style=\"background:linear-gradient(135deg,#1C2B3A,#243447);padding:18px;display:flex;align-items:center;gap:12px;\">
            <div style=\"width:48px;height:48px;border-radius:10px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#fff;font-size:16px;font-weight:700;flex-shrink:0;\">
                {{ coach.prenom|slice(0,1)|upper }}{{ coach.nom|slice(0,1)|upper }}
            </div>
            <div>
                <div style=\"color:#fff;font-size:14px;font-weight:700;\">{{ coach.prenom }} {{ coach.nom }}</div>
                {% if coach.domaine %}
                <span style=\"background:rgba(255,255,255,.12);color:#cbd5e1;border-radius:20px;padding:2px 9px;font-size:10.5px;font-weight:600;margin-top:4px;display:inline-block;\">
                    {% if coach.domaine == 'BRANDING' %}🎨 Branding
                    {% elseif coach.domaine == 'E_COMMERCE' %}🛒 E-Commerce
                    {% elseif coach.domaine == 'LEADERSHIP' %}🏆 Leadership
                    {% elseif coach.domaine == 'FINANCE' %}💰 Finance
                    {% elseif coach.domaine == 'FUNDING' %}🚀 Financement
                    {% else %}{{ coach.domaine }}{% endif %}
                </span>
                {% endif %}
            </div>
        </div>

        <div style=\"display:grid;grid-template-columns:1fr 1fr 1fr;border-bottom:1px solid #f1f5f9;\">
            <div style=\"padding:10px 0;text-align:center;border-right:1px solid #f1f5f9;\">
                <div style=\"font-size:13px;font-weight:700;color:#111827;\">{{ coach.experienceAnnees ?? '—' }}</div>
                <div style=\"font-size:9.5px;color:#9ca3af;\">ans</div>
            </div>
            <div style=\"padding:10px 0;text-align:center;border-right:1px solid #f1f5f9;\">
                <div style=\"font-size:12px;font-weight:700;color:var(--accent);\">{{ coach.tarifHoraire ? coach.tarifHoraire|number_format(0,'','') ~ ' TND' : '—' }}</div>
                <div style=\"font-size:9.5px;color:#9ca3af;\">/heure</div>
            </div>
            <div style=\"padding:10px 0;text-align:center;\">
                {% if coach.noteMoyenne %}
                <div style=\"font-size:13px;font-weight:700;color:#f59e0b;\">{{ coach.noteMoyenne }}</div>
                <div style=\"font-size:9.5px;color:#9ca3af;\"><i class=\"fas fa-star\" style=\"font-size:8px;color:#f59e0b;\"></i> /5</div>
                {% else %}
                <div style=\"font-size:12px;color:#9ca3af;\">—</div>
                <div style=\"font-size:9.5px;color:#d1d5db;\">note</div>
                {% endif %}
            </div>
        </div>

        <div style=\"padding:12px 14px;display:flex;justify-content:space-between;align-items:center;\">
            {% if coach.disponibilite == 'Disponible' %}
                <span class=\"badge-disponible\"><i class=\"fas fa-circle\" style=\"font-size:7px;margin-right:4px;\"></i>Disponible</span>
            {% else %}
                <span class=\"badge-indisponible\"><i class=\"fas fa-circle\" style=\"font-size:7px;margin-right:4px;\"></i>Indisponible</span>
            {% endif %}
            <a href=\"{{ path('app_coach_show', {'id': coach.idCoach}) }}\"
               style=\"font-size:12px;font-weight:600;color:var(--accent);text-decoration:none;\">
                Profil <i class=\"fas fa-arrow-right\" style=\"font-size:10px;\"></i>
            </a>
        </div>
    </div>
    {% endfor %}
</div>
{% endif %}

{% endblock %}
", "coach/search.html.twig", "C:\\Users\\melek\\Downloads\\wetransfer_esprit-pidev-web-3a7-2026-bizcore-main-zip_2026-04-09_1330\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\templates\\coach\\search.html.twig");
    }
}
