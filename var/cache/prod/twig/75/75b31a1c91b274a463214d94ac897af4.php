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
class __TwigTemplate_792a7170b64ebfab89494a3a7b0f7013 extends Template
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
        if ((array_key_exists("coaches", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["coaches"] ?? null)))) {
            // line 2
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["coaches"] ?? null));
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
                if ((($context["colorIndex"] ?? null) == 0)) {
                    yield "#3b82f6";
                } elseif ((($context["colorIndex"] ?? null) == 4)) {
                    yield "#f59e0b";
                } elseif ((($context["colorIndex"] ?? null) == 3)) {
                    yield "#20c997";
                } elseif ((($context["colorIndex"] ?? null) == 2)) {
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
                        yield ((($context["i"] <= ($context["avgRound"] ?? null))) ? ("#f59e0b") : ("#d1d5db"));
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avg"] ?? null), "html", null, true);
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
        return array (  298 => 84,  269 => 77,  265 => 75,  261 => 72,  256 => 69,  247 => 67,  243 => 66,  239 => 65,  236 => 64,  234 => 63,  230 => 61,  226 => 59,  219 => 57,  214 => 56,  208 => 53,  205 => 52,  196 => 50,  191 => 49,  188 => 48,  185 => 47,  183 => 46,  179 => 45,  174 => 44,  168 => 40,  164 => 39,  160 => 38,  157 => 37,  153 => 34,  149 => 32,  145 => 30,  143 => 29,  140 => 28,  135 => 24,  129 => 21,  126 => 20,  124 => 19,  117 => 17,  109 => 13,  94 => 12,  91 => 11,  78 => 8,  73 => 6,  69 => 5,  65 => 4,  62 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "coach/_coach_cards.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\coach\\_coach_cards.html.twig");
    }
}
