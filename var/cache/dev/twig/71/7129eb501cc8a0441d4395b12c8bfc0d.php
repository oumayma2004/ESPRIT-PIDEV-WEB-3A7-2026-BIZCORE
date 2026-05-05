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

/* admin/coach/edit.html.twig */
class __TwigTemplate_9ea2142347ead08e0c5f68d391a0fb8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/coach/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier Coach — Bizcore";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "GESTION COACHING > MODIFIER";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div style=\"max-width: 900px;\">
    <div class=\"card-panel\">
        <h2 style=\"font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 24px;\">
            Modifier : ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 11, $this->source); })()), "prenom", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "
        </h2>

        ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/coach/_form.html.twig");
        yield "
    </div>

    ";
        // line 18
        yield "    <div class=\"card-panel mt-4\">
        <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 16px;\">
            Profils des Coachs
            <span style=\"font-size: 12px; color: #9ca3af; font-weight: 400; margin-left: 8px;\">
                (";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("coaches", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 22, $this->source); })()), [])) : ([]))), "html", null, true);
        yield " coach(s))
            </span>
        </h3>

        ";
        // line 26
        if ((array_key_exists("coaches", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 26, $this->source); })())))) {
            // line 27
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 27, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 28
                yield "            <div style=\"display: flex; align-items: center; gap: 16px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; padding: 16px; margin-bottom: 12px;\">
                ";
                // line 30
                yield "                <div style=\"width: 48px; height: 48px; border-radius: 50%; background: ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) % 5) == 0)) {
                    yield "#3b82f6";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) % 4) == 0)) {
                    yield "#f59e0b";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) % 3) == 0)) {
                    yield "#20c997";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) % 2) == 0)) {
                    yield "#8b5cf6";
                } else {
                    yield "#ec4899";
                }
                yield "; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; font-weight: 700; flex-shrink: 0;\">
                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "prenom", [], "any", false, false, false, 31), 0, 1)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 31), 0, 1)), "html", null, true);
                yield "
                </div>

                ";
                // line 35
                yield "                <div style=\"flex: 1;\">
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                        ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "prenom", [], "any", false, false, false, 37), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 37), "html", null, true);
                yield "
                    </div>
                    <div style=\"font-size: 12px; color: #6b7280; margin-top: 4px;\">
                        <span><strong>Exp:</strong> ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "experienceAnnees", [], "any", false, false, false, 40), "html", null, true);
                yield " ans</span>
                        <span style=\"margin: 0 8px;\">|</span>
                        <span><strong>Tarif:</strong> ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "tarifHoraire", [], "any", false, false, false, 42), "html", null, true);
                yield " DT/H</span>
                        <span style=\"margin: 0 8px;\">|</span>
                        <span><strong>Note:</strong> ";
                // line 44
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "noteMoyenne", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["c"], "noteMoyenne", [], "any", false, false, false, 44)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "noteMoyenne", [], "any", false, false, false, 44), "html", null, true)) : ("N/A"));
                yield "/5</span>
                    </div>
                </div>

                ";
                // line 49
                yield "                <div>
                    ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "disponibilite", [], "any", false, false, false, 50) == "Disponible")) {
                    // line 51
                    yield "                        <span class=\"badge-disponible\">Disponible</span>
                    ";
                } else {
                    // line 53
                    yield "                        <span class=\"badge-indisponible\">Indisponible</span>
                    ";
                }
                // line 55
                yield "                </div>

                ";
                // line 58
                yield "                <div style=\"font-size: 12px; color: #6b7280;\">
                    <i class=\"fas fa-phone\" style=\"margin-right: 4px;\"></i>
                    ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "numTel", [], "any", false, false, false, 60), "html", null, true);
                yield "
                </div>

                ";
                // line 64
                yield "                <div style=\"display: flex; gap: 8px;\">
                    <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">
                        Modifier
                    </a>
                    <button class=\"btn btn-danger btn-sm\" 
                            onclick=\"if(confirm('Supprimer ce coach ?')) { document.getElementById('deleteForm";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 69), "html", null, true);
                yield "').submit(); }\">
                        Supprimer
                    </button>
                    <form id=\"deleteForm";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 72), "html", null, true);
                yield "\" method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 73))), "html", null, true);
                yield "\">
                    </form>
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
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "        ";
        } else {
            // line 79
            yield "            <div style=\"text-align: center; padding: 40px; color: #9ca3af;\">
                <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                Aucun coach enregistré
            </div>
        ";
        }
        // line 84
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/coach/edit.html.twig";
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
        return array (  308 => 84,  301 => 79,  298 => 78,  279 => 73,  273 => 72,  267 => 69,  260 => 65,  257 => 64,  251 => 60,  247 => 58,  243 => 55,  239 => 53,  235 => 51,  233 => 50,  230 => 49,  223 => 44,  218 => 42,  213 => 40,  205 => 37,  201 => 35,  194 => 31,  179 => 30,  176 => 28,  158 => 27,  156 => 26,  149 => 22,  143 => 18,  137 => 14,  129 => 11,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Coach — Bizcore{% endblock %}

{% block page_title %}GESTION COACHING > MODIFIER{% endblock %}

{% block body %}
<div style=\"max-width: 900px;\">
    <div class=\"card-panel\">
        <h2 style=\"font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 24px;\">
            Modifier : {{ coach.prenom }} {{ coach.nom }}
        </h2>

        {{ include('admin/coach/_form.html.twig') }}
    </div>

    {# Below the form: Coach Profiles List #}
    <div class=\"card-panel mt-4\">
        <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 16px;\">
            Profils des Coachs
            <span style=\"font-size: 12px; color: #9ca3af; font-weight: 400; margin-left: 8px;\">
                ({{ coaches|default([])|length }} coach(s))
            </span>
        </h3>

        {% if coaches is defined and coaches is not empty %}
            {% for c in coaches %}
            <div style=\"display: flex; align-items: center; gap: 16px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; padding: 16px; margin-bottom: 12px;\">
                {# Avatar with initials #}
                <div style=\"width: 48px; height: 48px; border-radius: 50%; background: {% if loop.index % 5 == 0 %}#3b82f6{% elseif loop.index % 4 == 0 %}#f59e0b{% elseif loop.index % 3 == 0 %}#20c997{% elseif loop.index % 2 == 0 %}#8b5cf6{% else %}#ec4899{% endif %}; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; font-weight: 700; flex-shrink: 0;\">
                    {{ c.prenom|slice(0,1)|upper }}{{ c.nom|slice(0,1)|upper }}
                </div>

                {# Coach Info #}
                <div style=\"flex: 1;\">
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                        {{ c.prenom }} {{ c.nom }}
                    </div>
                    <div style=\"font-size: 12px; color: #6b7280; margin-top: 4px;\">
                        <span><strong>Exp:</strong> {{ c.experienceAnnees }} ans</span>
                        <span style=\"margin: 0 8px;\">|</span>
                        <span><strong>Tarif:</strong> {{ c.tarifHoraire }} DT/H</span>
                        <span style=\"margin: 0 8px;\">|</span>
                        <span><strong>Note:</strong> {{ c.noteMoyenne ?? 'N/A' }}/5</span>
                    </div>
                </div>

                {# Disponibilité Badge #}
                <div>
                    {% if c.disponibilite == 'Disponible' %}
                        <span class=\"badge-disponible\">Disponible</span>
                    {% else %}
                        <span class=\"badge-indisponible\">Indisponible</span>
                    {% endif %}
                </div>

                {# Phone #}
                <div style=\"font-size: 12px; color: #6b7280;\">
                    <i class=\"fas fa-phone\" style=\"margin-right: 4px;\"></i>
                    {{ c.numTel }}
                </div>

                {# Action Buttons #}
                <div style=\"display: flex; gap: 8px;\">
                    <a href=\"{{ path('admin_coach_edit', {'id': c.id}) }}\" class=\"btn btn-success btn-sm\">
                        Modifier
                    </a>
                    <button class=\"btn btn-danger btn-sm\" 
                            onclick=\"if(confirm('Supprimer ce coach ?')) { document.getElementById('deleteForm{{ c.id }}').submit(); }\">
                        Supprimer
                    </button>
                    <form id=\"deleteForm{{ c.id }}\" method=\"post\" action=\"{{ path('admin_coach_delete', {'id': c.id}) }}\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ c.id) }}\">
                    </form>
                </div>
            </div>
            {% endfor %}
        {% else %}
            <div style=\"text-align: center; padding: 40px; color: #9ca3af;\">
                <i class=\"fas fa-users fa-2x mb-2\" style=\"display: block;\"></i>
                Aucun coach enregistré
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "admin/coach/edit.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\coach\\edit.html.twig");
    }
}
