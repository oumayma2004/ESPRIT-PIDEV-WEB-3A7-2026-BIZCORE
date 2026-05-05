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

/* admin/coach/new.html.twig */
class __TwigTemplate_708556b064cbf628d91087e3d35dc49a extends Template
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
        yield "Ajouter un Coach — Bizcore";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "GESTION COACHING > AJOUTER";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div style=\"max-width: 900px;\">
    <div class=\"card-panel\">
        <h2 style=\"font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 24px;\">
            Ajouter un Coach
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("coaches", $context)) ? (Twig\Extension\CoreExtension::default(($context["coaches"] ?? null), [])) : ([]))), "html", null, true);
        yield " coach(s))
            </span>
        </h3>

        ";
        // line 26
        if ((array_key_exists("coaches", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["coaches"] ?? null)))) {
            // line 27
            yield "            ";
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 31), 0, 1)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 31), 0, 1)), "html", null, true);
                yield "
                </div>

                ";
                // line 35
                yield "                <div style=\"flex: 1;\">
                    <div style=\"font-weight: 700; font-size: 14px; color: #111827;\">
                        ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 37), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 37), "html", null, true);
                yield "
                    </div>
                    <div style=\"font-size: 12px; color: #6b7280; margin-top: 4px;\">
                        <span><strong>Exp:</strong> ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "experienceAnnees", [], "any", false, false, false, 40), "html", null, true);
                yield " ans</span>
                        <span style=\"margin: 0 8px;\">|</span>
                        <span><strong>Tarif:</strong> ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "tarifHoraire", [], "any", false, false, false, 42), "html", null, true);
                yield " DT/H</span>
                        <span style=\"margin: 0 8px;\">|</span>
                        <span><strong>Note:</strong> ";
                // line 44
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 44)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "noteMoyenne", [], "any", false, false, false, 44), "html", null, true)) : ("N/A"));
                yield "/5</span>
                    </div>
                </div>

                ";
                // line 49
                yield "                <div>
                    ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "disponibilite", [], "any", false, false, false, 50) == "Disponible")) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "numTel", [], "any", false, false, false, 60), "html", null, true);
                yield "
                </div>

                ";
                // line 64
                yield "                <div style=\"display: flex; gap: 8px;\">
                    <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">
                        Modifier
                    </a>
                    <button class=\"btn btn-danger btn-sm\" 
                            onclick=\"if(confirm('Supprimer ce coach ?')) { document.getElementById('deleteForm";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 69), "html", null, true);
                yield "').submit(); }\">
                        Supprimer
                    </button>
                    <form id=\"deleteForm";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 72), "html", null, true);
                yield "\" method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 73))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/coach/new.html.twig";
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
        return array (  261 => 84,  254 => 79,  251 => 78,  232 => 73,  226 => 72,  220 => 69,  213 => 65,  210 => 64,  204 => 60,  200 => 58,  196 => 55,  192 => 53,  188 => 51,  186 => 50,  183 => 49,  176 => 44,  171 => 42,  166 => 40,  158 => 37,  154 => 35,  147 => 31,  132 => 30,  129 => 28,  111 => 27,  109 => 26,  102 => 22,  96 => 18,  90 => 14,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/coach/new.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\admin\\coach\\new.html.twig");
    }
}
