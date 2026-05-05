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

/* coach/_coach_cards.html.twig */
class __TwigTemplate_419f7e3253db28b917e7705ba97b7d9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/_coach_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/_coach_cards.html.twig"));

        // line 1
        if ((array_key_exists("coaches", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 2, $this->source); })()));
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
                // line 3
                yield "    <div class=\"coach-card mb-3\"
         data-coach-id=\"";
                // line 4
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 4), "html", null, true);
                yield "\"
         data-disponible=\"";
                // line 5
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 5) == "Disponible")) ? ("1") : ("0"));
                yield "\"
         data-note=\"";
                // line 6
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 6)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 6), "html", null, true)) : (0));
                yield "\"
         style=\"background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; cursor: pointer; transition: all 0.2s;\"
         onclick=\"selectCoach(";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 8), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 8), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 8), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 8), "html", null, true);
                yield "', ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 8) == "Disponible")) ? ("true") : ("false"));
                yield ")\">

        ";
                // line 11
                yield "        <div class=\"d-flex align-items-center gap-3 mb-2\">
            <div style=\"width: 48px; height: 48px; border-radius: 50%; background: ";
                // line 12
                $context["colorIndex"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12) % 5);
                if (((isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 12, $this->source); })()) == 0)) {
                    yield "#3b82f6";
                } elseif (((isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 12, $this->source); })()) == 4)) {
                    yield "#f59e0b";
                } elseif (((isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 12, $this->source); })()) == 3)) {
                    yield "#20c997";
                } elseif (((isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 12, $this->source); })()) == 2)) {
                    yield "#8b5cf6";
                } else {
                    yield "#ec4899";
                }
                yield "; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; font-weight: 700;\">
                ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 13), 0, 1)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 13), 0, 1)), "html", null, true);
                yield "
            </div>
            <div style=\"flex: 1;\">
                <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                    ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 17), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 17), "html", null, true);
                yield "
                </div>
                ";
                // line 19
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "                <span class=\"badge-domain\" style=\"font-size: 9px; padding: 2px 8px; margin-top: 4px; display: inline-block;\">
                    ";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 21), "html", null, true);
                    yield "
                </span>
                ";
                }
                // line 24
                yield "            </div>
        </div>

        ";
                // line 28
                yield "        <div class=\"mb-2\">
            ";
                // line 29
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 29) == "Disponible")) {
                    // line 30
                    yield "                <span class=\"badge-disponible\">✓ Disponible</span>
            ";
                } else {
                    // line 32
                    yield "                <span class=\"badge-indisponible\">✗ Indisponible</span>
            ";
                }
                // line 34
                yield "        </div>

        ";
                // line 37
                yield "        <div style=\"font-size: 12px; color: #6b7280; margin-bottom: 8px;\">
            <div><strong>Tarif:</strong> ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 38), "html", null, true);
                yield " DT/H</div>
            <div><strong>Expérience:</strong> ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 39), "html", null, true);
                yield " ans</div>
            <div><strong>Tél:</strong> ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "numTel", [], "any", false, false, false, 40), "html", null, true);
                yield "</div>
        </div>

        ";
                // line 44
                yield "        <div class=\"rating-component\" data-coach-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "\" style=\"margin-bottom: 12px;\">
            <div style=\"display: flex; align-items: center; gap: 4px; margin-bottom: 8px;\" id=\"avg-stars-";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\">
                ";
                // line 46
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 46)) && (CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 46) > 0))) {
                    // line 47
                    yield "                    ";
                    $context["avg"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 47), 1);
                    // line 48
                    yield "                    ";
                    $context["avgRound"] = Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 48), 0, "common");
                    // line 49
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 50
                        yield "                        <i class=\"fas fa-star\" style=\"color: ";
                        yield ((($context["i"] <= (isset($context["avgRound"]) || array_key_exists("avgRound", $context) ? $context["avgRound"] : (function () { throw new RuntimeError('Variable "avgRound" does not exist.', 50, $this->source); })()))) ? ("#f59e0b") : ("#d1d5db"));
                        yield "; font-size: 14px;\"></i>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    yield "                    <span style=\"font-size:12px; color:#374151; margin-left:6px;\">
                        <strong>";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 53, $this->source); })()), "html", null, true);
                    yield "</strong>/5
                    </span>
                ";
                } else {
                    // line 56
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 57
                        yield "                        <i class=\"fas fa-star\" style=\"color: #d1d5db; font-size: 14px;\"></i>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "                    <span style=\"font-size:12px; color:#9ca3af; margin-left:6px;\">Pas d'évaluation encore</span>
                ";
                }
                // line 61
                yield "            </div>

            ";
                // line 63
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "            <div style=\"display: flex; align-items: center; gap: 8px; margin-bottom: 6px;\">
                <div id=\"stars-";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 65), "html", null, true);
                    yield "\" class=\"star-rating\" style=\"display: flex; gap: 4px; cursor: pointer;\">
                    ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 67
                        yield "                        <i class=\"fas fa-star\" data-value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "\" style=\"color: #d1d5db; font-size: 14px; cursor: pointer; transition: color 0.2s;\"></i>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    yield "                </div>
            </div>
            ";
                }
                // line 72
                yield "        </div>

        ";
                // line 75
                yield "        <div class=\"d-flex gap-2\">
            <button class=\"btn btn-sm\" style=\"background: #20c997; color: #fff; border: none; flex: 1;\"
                    onclick=\"event.stopPropagation(); selectCoach(";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 77), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 77), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 77), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "domaine", [], "any", false, false, false, 77), "html", null, true);
                yield "', ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 77) == "Disponible")) ? ("true") : ("false"));
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
        } else {
            // line 84
            yield "    <div style=\"text-align: center; padding: 40px; color: #9ca3af;\">
        <i class=\"fas fa-search fa-2x mb-2\" style=\"display: block;\"></i>
        <div style=\"font-size: 14px; font-weight: 600;\">Aucun coach trouvé</div>
        <div style=\"font-size: 12px; margin-top: 4px;\">Essayez d'ajuster vos filtres</div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "coach/_coach_cards.html.twig";
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
        return array (  304 => 84,  275 => 77,  271 => 75,  267 => 72,  262 => 69,  253 => 67,  249 => 66,  245 => 65,  242 => 64,  240 => 63,  236 => 61,  232 => 59,  225 => 57,  220 => 56,  214 => 53,  211 => 52,  202 => 50,  197 => 49,  194 => 48,  191 => 47,  189 => 46,  185 => 45,  180 => 44,  174 => 40,  170 => 39,  166 => 38,  163 => 37,  159 => 34,  155 => 32,  151 => 30,  149 => 29,  146 => 28,  141 => 24,  135 => 21,  132 => 20,  130 => 19,  123 => 17,  115 => 13,  100 => 12,  97 => 11,  84 => 8,  79 => 6,  75 => 5,  71 => 4,  68 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if coaches is defined and coaches is not empty %}
    {% for coach in coaches %}
    <div class=\"coach-card mb-3\"
         data-coach-id=\"{{ coach.id }}\"
         data-disponible=\"{{ coach.disponibilite == 'Disponible' ? '1' : '0' }}\"
         data-note=\"{{ coach.noteMoyenne ?? 0 }}\"
         style=\"background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 16px; cursor: pointer; transition: all 0.2s;\"
         onclick=\"selectCoach({{ coach.id }}, '{{ coach.prenom }} {{ coach.nom }}', '{{ coach.domaine }}', {{ coach.disponibilite == 'Disponible' ? 'true' : 'false' }})\">

        {# Avatar and Name #}
        <div class=\"d-flex align-items-center gap-3 mb-2\">
            <div style=\"width: 48px; height: 48px; border-radius: 50%; background: {% set colorIndex = loop.index % 5 %}{% if colorIndex == 0 %}#3b82f6{% elseif colorIndex == 4 %}#f59e0b{% elseif colorIndex == 3 %}#20c997{% elseif colorIndex == 2 %}#8b5cf6{% else %}#ec4899{% endif %}; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; font-weight: 700;\">
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

        {# Star Rating #}
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

        {# Action Button #}
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
        <i class=\"fas fa-search fa-2x mb-2\" style=\"display: block;\"></i>
        <div style=\"font-size: 14px; font-weight: 600;\">Aucun coach trouvé</div>
        <div style=\"font-size: 12px; margin-top: 4px;\">Essayez d'ajuster vos filtres</div>
    </div>
{% endif %}
", "coach/_coach_cards.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\coach\\_coach_cards.html.twig");
    }
}
