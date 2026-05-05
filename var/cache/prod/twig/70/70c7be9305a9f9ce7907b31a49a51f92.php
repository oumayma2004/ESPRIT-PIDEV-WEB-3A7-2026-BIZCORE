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
class __TwigTemplate_041156916c93bc2154aa0b726469b54a extends Template
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
        yield "Coaching — Bizcore";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "COACHING — Réserver une Séance";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
            yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12)) && is_string($_v1 = "dashboard") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
            yield "\">
        <i class=\"fas fa-tachometer-alt\"></i> DASHBOARD
    </a>
    ";
        } else {
            // line 16
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_index");
            yield "\"
       class=\"";
            // line 17
            yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17)) && is_string($_v3 = "marketplace") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
            yield "\">
        <i class=\"fas fa-shopping-cart\"></i> MARKETPLACE
    </a>
    ";
        }
        // line 21
        yield "    <a href=\"";
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_front")));
        yield "\"
       class=\"";
        // line 22
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22)) && is_string($_v5 = "evenement") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-calendar-alt\"></i> ÉVÉNEMENTS
    </a>
    <a href=\"";
        // line 25
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_coach_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index")));
        yield "\"
       class=\"";
        // line 26
        yield ((((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26)) && is_string($_v7 = "app_coach") && str_starts_with($_v6, $_v7)) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26)) && is_string($_v9 = "admin_coach") && str_starts_with($_v8, $_v9)))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-user-tie\"></i> COACHING
    </a>
    <a href=\"";
        // line 29
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_index")));
        yield "\"
       class=\"";
        // line 30
        yield ((((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", ["_route"], "method", false, false, false, 30)) && is_string($_v11 = "frontend_blog") && str_starts_with($_v10, $_v11)) || (is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", ["_route"], "method", false, false, false, 30)) && is_string($_v13 = "article") && str_starts_with($_v12, $_v13)))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-blog\"></i> BLOG
    </a>
    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\"
       class=\"";
        // line 34
        yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "attributes", [], "any", false, false, false, 34), "get", ["_route"], "method", false, false, false, 34)) && is_string($_v15 = "profile") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
        yield "\">
        <i class=\"fas fa-user-circle\"></i> PROFIL
    </a>
</div>
";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "<div class=\"row\">
    ";
        // line 43
        yield "    <div class=\"col-lg-5 mb-4\">
        <div class=\"card-panel\" style=\"height: calc(100vh - 140px); overflow-y: auto; display: flex; flex-direction: column;\">

            ";
        // line 47
        yield "            <div id=\"coach-filter-bar\" style=\"flex-shrink: 0; margin-bottom: 14px;\">
                <h3 style=\"font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 12px;\">
                    Coachs
                    <span id=\"coach-count-label\" style=\"font-size: 12px; color: #9ca3af; font-weight: 400;\">
                        (";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("coaches", $context)) ? (Twig\Extension\CoreExtension::default(($context["coaches"] ?? null), [])) : ([]))), "html", null, true);
        yield " coach(s))
                    </span>
                </h3>

                ";
        // line 56
        yield "                <div class=\"d-flex gap-2 mb-2\">
                    <div style=\"flex: 1; position: relative;\">
                        <i class=\"fas fa-search\" style=\"position:absolute; left:10px; top:50%; transform:translateY(-50%); color:#9ca3af; font-size:12px; pointer-events:none;\"></i>
                        <input type=\"text\" id=\"filter-q\" placeholder=\"Nom / prénom…\"
                               style=\"width:100%; padding:7px 10px 7px 30px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; outline:none;\"
                               onfocus=\"this.style.borderColor='#20c997'\" onblur=\"this.style.borderColor='#e5e7eb'\">
                    </div>
                    <select id=\"filter-sort\"
                            style=\"padding:7px 10px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; background:#fff; color:#374151; cursor:pointer; outline:none;\">
                        <option value=\"nom_asc\">Nom A→Z</option>
                        <option value=\"tarif_asc\">Tarif ↑</option>
                        <option value=\"tarif_desc\">Tarif ↓</option>
                        <option value=\"note_desc\">Note ↓</option>
                        <option value=\"exp_desc\">Expérience ↓</option>
                    </select>
                </div>

                ";
        // line 74
        yield "                <div class=\"d-flex gap-2 mb-2\">
                    <select id=\"filter-domaine\"
                            style=\"flex:1; padding:7px 10px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; background:#fff; color:#374151; cursor:pointer; outline:none;\">
                        <option value=\"\">Tous les domaines</option>
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("domaines", $context)) ? (Twig\Extension\CoreExtension::default(($context["domaines"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 79
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                    </select>
                    <select id=\"filter-disponibilite\"
                            style=\"flex:1; padding:7px 10px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; background:#fff; color:#374151; cursor:pointer; outline:none;\">
                        <option value=\"\">Toutes disponibilités</option>
                        <option value=\"Disponible\">Disponible</option>
                        <option value=\"Indisponible\">Indisponible</option>
                    </select>
                </div>

                ";
        // line 91
        yield "                <div class=\"d-flex gap-2 mb-2\">
                    <div style=\"flex:1; position:relative;\">
                        <input type=\"number\" id=\"filter-maxTarif\" placeholder=\"Tarif max (DT/H)\" min=\"0\" step=\"5\"
                               style=\"width:100%; padding:7px 10px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; outline:none;\"
                               onfocus=\"this.style.borderColor='#20c997'\" onblur=\"this.style.borderColor='#e5e7eb'\">
                    </div>
                    <div style=\"flex:1;\">
                        <select id=\"filter-minNote\"
                                style=\"width:100%; padding:7px 10px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; background:#fff; color:#374151; cursor:pointer; outline:none;\">
                            <option value=\"\">Note min</option>
                            <option value=\"1\">★ ≥ 1</option>
                            <option value=\"2\">★★ ≥ 2</option>
                            <option value=\"3\">★★★ ≥ 3</option>
                            <option value=\"4\">★★★★ ≥ 4</option>
                        </select>
                    </div>
                    <div style=\"flex:1;\">
                        <input type=\"number\" id=\"filter-minExperience\" placeholder=\"Exp. min (ans)\" min=\"0\" step=\"1\"
                               style=\"width:100%; padding:7px 10px; border:1px solid #e5e7eb; border-radius:8px; font-size:12px; outline:none;\"
                               onfocus=\"this.style.borderColor='#20c997'\" onblur=\"this.style.borderColor='#e5e7eb'\">
                    </div>
                </div>

                ";
        // line 115
        yield "                <div class=\"d-flex align-items-center justify-content-between\">
                    <button id=\"filter-reset-btn\" onclick=\"resetFilters()\"
                            style=\"background:none; border:none; color:#9ca3af; font-size:11px; cursor:pointer; padding:0; display:none;\">
                        <i class=\"fas fa-times-circle\"></i> Réinitialiser les filtres
                    </button>
                    <div id=\"filter-spinner\" style=\"display:none; color:#20c997; font-size:12px;\">
                        <i class=\"fas fa-spinner fa-spin\"></i> Chargement…
                    </div>
                </div>
            </div>

            ";
        // line 127
        yield "            <div id=\"coach-cards-container\" style=\"flex: 1; overflow-y: auto;\">
                ";
        // line 128
        yield Twig\Extension\CoreExtension::include($this->env, $context, "coach/_coach_cards.html.twig", ["coaches" => ($context["coaches"] ?? null)]);
        yield "
            </div>
        </div>
    </div>

    ";
        // line 134
        yield "    <div class=\"col-lg-7\">
        <div class=\"card-panel\" style=\"height: calc(100vh - 140px); overflow-y: auto;\">
            ";
        // line 137
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
        // line 165
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
        // line 178
        yield "                <div id=\"loadingIndicator\" style=\"display: none; text-align: center; padding: 40px; color: #9ca3af;\">
                    <i class=\"fas fa-spinner fa-spin fa-2x mb-2\" style=\"display: block;\"></i>
                    <div style=\"font-size: 14px;\">Chargement...</div>
                </div>

                ";
        // line 184
        yield "                <div id=\"weekDays\"></div>

                ";
        // line 187
        yield "                <div id=\"selectedDayInfo\" class=\"mt-3 text-center\" style=\"font-size: 12px; color: #6b7280; display: none;\">
                    <i class=\"fas fa-info-circle\"></i> <span id=\"selectedDayText\"></span>
                </div>

                ";
        // line 192
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
        // line 209
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 210
            yield "
";
            // line 212
            yield "<div id=\"chatbot-clear-modal\">
    <div id=\"chatbot-clear-modal-card\">
        <div class=\"chatbot-clear-icon\">
            <i class=\"fas fa-trash-alt\"></i>
        </div>
        <h3 class=\"chatbot-clear-title\">Effacer la conversation ?</h3>
        <p class=\"chatbot-clear-desc\">L'historique de cette conversation sera définitivement supprimé.</p>
        <div class=\"chatbot-clear-actions\">
            <button id=\"chatbot-clear-cancel-btn\" class=\"chatbot-clear-btn chatbot-clear-btn-cancel\">Annuler</button>
            <button id=\"chatbot-clear-confirm-btn\" class=\"chatbot-clear-btn chatbot-clear-btn-confirm\">Effacer</button>
        </div>
    </div>
</div>
<style>
#chatbot-clear-modal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 10100;
    align-items: center;
    justify-content: center;
    background: rgba(0,0,0,0.45);
    opacity: 0;
    transition: opacity 0.22s ease;
}
#chatbot-clear-modal.chatbot-modal-visible {
    opacity: 1;
}
#chatbot-clear-modal-card {
    background: #fff;
    border-radius: 16px;
    padding: 28px 28px 22px;
    max-width: 320px;
    width: 90%;
    box-shadow: 0 20px 60px rgba(0,0,0,0.25);
    text-align: center;
    transform: scale(0.92);
    transition: transform 0.22s cubic-bezier(0.34,1.56,0.64,1);
}
#chatbot-clear-modal.chatbot-modal-visible #chatbot-clear-modal-card {
    transform: scale(1);
}
.chatbot-clear-icon {
    width: 52px; height: 52px; border-radius: 50%;
    background: #fef2f2;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
    font-size: 22px;
    color: #ef4444;
}
.chatbot-clear-title {
    font-size: 16px; font-weight: 700; color: #111827;
    margin: 0 0 8px;
}
.chatbot-clear-desc {
    font-size: 13px; color: #6b7280;
    margin: 0 0 22px; line-height: 1.5;
}
.chatbot-clear-actions {
    display: flex; gap: 10px; justify-content: center;
}
.chatbot-clear-btn {
    flex: 1; padding: 10px 0;
    border-radius: 10px;
    font-size: 13px; font-weight: 600;
    cursor: pointer;
    transition: opacity 0.15s, background 0.15s;
}
.chatbot-clear-btn-cancel {
    border: 1px solid #e5e7eb;
    background: #fff;
    color: #374151;
}
.chatbot-clear-btn-cancel:hover { background: #f3f4f6; }
.chatbot-clear-btn-confirm {
    border: none;
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: #fff;
}
.chatbot-clear-btn-confirm:hover { opacity: 0.88; }
</style>

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
";
        }
        // line 360
        yield "
";
        // line 362
        yield "<div id=\"confirmModal\" style=\"display:none;position:fixed;inset:0;background:rgba(0,0,0,.45);z-index:10000;align-items:center;justify-content:center;\">
    <div style=\"background:#fff;border-radius:16px;padding:28px 28px 22px;max-width:420px;width:90%;box-shadow:0 20px 60px rgba(0,0,0,.25);animation:slideIn .2s;\">
        <div style=\"text-align:center;margin-bottom:20px;\">
            <div id=\"confirmModalIcon\" style=\"width:56px;height:56px;background:#ecfdf5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;\">
                <i id=\"confirmModalIconI\" class=\"fas fa-calendar-check\" style=\"color:#20c997;font-size:24px;\"></i>
            </div>
            <h3 id=\"confirmModalTitle\" style=\"font-size:16px;font-weight:700;color:#111827;margin:0 0 10px;\">Confirmer la réservation</h3>
            <p id=\"confirmModalText\" style=\"font-size:13px;color:#6b7280;margin:0;line-height:1.5;\"></p>
        </div>
        <div style=\"display:flex;gap:10px;\">
            <button id=\"confirmModalCancel\"
                    style=\"flex:1;padding:10px;border-radius:8px;border:1px solid #d1d5db;background:#fff;font-size:13px;font-weight:600;color:#374151;cursor:pointer;\">
                <i class=\"fas fa-times\" style=\"margin-right:5px;\"></i>Non, garder
            </button>
            <button id=\"confirmModalOk\"
                    style=\"flex:1;padding:10px;border-radius:8px;border:none;background:#20c997;color:#fff;font-size:13px;font-weight:600;cursor:pointer;\">
                <i class=\"fas fa-check\" style=\"margin-right:5px;\"></i>Confirmer
            </button>
        </div>
    </div>
</div>

";
        yield from [];
    }

    // line 386
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 387
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

    const confirmed = await showConfirm(
        `Confirmer la réservation pour le <strong>\${formatDisplayDate(selectedDate)}</strong> avec <strong>\${currentCoach.name}</strong> ?`
    );
    if (!confirmed) return;

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

            // Show calendar download button if we got a reservation ID
            if (data.reservation?.id) {
                showCalendarDownloadBanner(data.reservation.id, data.reservation.dateSeance);
            }

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

    const confirmed = await showConfirm('Êtes-vous sûr de vouloir <strong>annuler</strong> cette réservation ?', 'danger');
    if (!confirmed) {
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
 * Custom confirm modal (replaces native confirm())
 */
function showConfirm(message, type = 'confirm') {
    return new Promise(resolve => {
        const modal      = document.getElementById('confirmModal');
        const icon       = document.getElementById('confirmModalIcon');
        const iconI      = document.getElementById('confirmModalIconI');
        const title      = document.getElementById('confirmModalTitle');
        const okBtn      = document.getElementById('confirmModalOk');
        const cancelBtn  = document.getElementById('confirmModalCancel');

        document.getElementById('confirmModalText').innerHTML = message;

        if (type === 'danger') {
            icon.style.background  = '#fef2f2';
            iconI.className        = 'fas fa-calendar-times';
            iconI.style.color      = '#ef4444';
            title.textContent      = 'Annuler la réservation';
            okBtn.style.background = '#ef4444';
        } else {
            icon.style.background  = '#ecfdf5';
            iconI.className        = 'fas fa-calendar-check';
            iconI.style.color      = '#20c997';
            title.textContent      = 'Confirmer la réservation';
            okBtn.style.background = '#20c997';
        }

        modal.style.display = 'flex';

        function close(result) {
            modal.style.display = 'none';
            okBtn.removeEventListener('click', onOk);
            cancelBtn.removeEventListener('click', onCancel);
            modal.removeEventListener('click', onBackdrop);
            resolve(result);
        }

        function onOk() { close(true); }
        function onCancel() { close(false); }
        function onBackdrop(e) { if (e.target === modal) close(false); }

        okBtn.addEventListener('click', onOk);
        cancelBtn.addEventListener('click', onCancel);
        modal.addEventListener('click', onBackdrop);
    });
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

        if (data.success && data.average !== null && data.average !== undefined) {
            // Use live average from rating table
            renderAverageStars(coachId, data.average);
        } else {
            // Fall back to note_moyenne stored on the card (set by server via Twig)
            const card = document.querySelector(`.coach-card[data-coach-id=\"\${coachId}\"]`);
            const fallback = card ? parseFloat(card.dataset.note) : 0;
            if (fallback > 0) {
                renderAverageStars(coachId, fallback);
            }
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

/**
 * Show a dismissible banner with a link to download the ICS calendar file.
 */
function showCalendarDownloadBanner(reservationId, dateSeance) {
    // Remove existing banner if any
    document.getElementById('calendar-download-banner')?.remove();

    const displayDate = dateSeance
        ? dateSeance.split('-').reverse().join('/')
        : '';

    const banner = document.createElement('div');
    banner.id = 'calendar-download-banner';
    banner.style.cssText = [
        'position:fixed', 'top:80px', 'right:20px', 'z-index:9998',
        'min-width:320px', 'max-width:380px',
        'background:linear-gradient(135deg,#ecfdf5,#d1fae5)',
        'border:1px solid #6ee7b7', 'border-radius:14px',
        'padding:16px 18px', 'box-shadow:0 8px 24px rgba(0,0,0,0.12)',
        'animation:slideIn 0.3s ease',
        'font-family:inherit',
    ].join(';');

    banner.innerHTML = `
        <div style=\"display:flex;align-items:flex-start;gap:12px;\">
            <div style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#20c997,#0ea5e9);
                        display:flex;align-items:center;justify-content:center;flex-shrink:0;\">
                <i class=\"fas fa-calendar-check\" style=\"color:#fff;font-size:15px;\"></i>
            </div>
            <div style=\"flex:1;\">
                <div style=\"font-weight:700;font-size:13px;color:#065f46;margin-bottom:3px;\">Réservation confirmée !</div>
                <div style=\"font-size:12px;color:#374151;margin-bottom:10px;\">
                    Séance le <strong>\${displayDate}</strong>.
                    Ajoutez-la à votre agenda.
                </div>
                <div style=\"display:flex;gap:8px;flex-wrap:wrap;\">
                    <a href=\"/reservation/\${reservationId}/calendar\"
                       style=\"display:inline-flex;align-items:center;gap:6px;padding:7px 14px;
                              background:linear-gradient(135deg,#20c997,#0ea5e9);color:#fff;
                              border-radius:8px;font-size:12px;font-weight:600;text-decoration:none;
                              transition:opacity 0.15s;\"
                       onmouseover=\"this.style.opacity='0.88'\" onmouseout=\"this.style.opacity='1'\">
                        <i class=\"fas fa-download\"></i> Télécharger .ics
                    </a>
                    <a href=\"https://calendar.google.com/calendar/r/eventedit?text=\${encodeURIComponent('Séance coaching Bizcore ' + displayDate)}&dates=\${(function(){const d=dateSeance?dateSeance.replace(/-/g,''):'';return d+'T090000/'+d+'T100000';})()}\"
                       target=\"_blank\" rel=\"noopener noreferrer\"
                       style=\"display:inline-flex;align-items:center;gap:6px;padding:7px 14px;
                              background:#fff;color:#374151;border:1px solid #d1d5db;
                              border-radius:8px;font-size:12px;font-weight:600;text-decoration:none;
                              transition:background 0.15s;\"
                       onmouseover=\"this.style.background='#f9fafb'\" onmouseout=\"this.style.background='#fff'\">
                        <i class=\"fab fa-google\" style=\"color:#4285f4;\"></i> Google Calendar
                    </a>
                </div>
            </div>
            <button onclick=\"document.getElementById('calendar-download-banner')?.remove()\"
                    style=\"background:none;border:none;color:#9ca3af;font-size:16px;cursor:pointer;padding:0;flex-shrink:0;line-height:1;\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    `;

    document.body.appendChild(banner);

    // Auto-dismiss after 15 s
    setTimeout(() => banner.remove(), 15000);
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
    initializeCalendar();
    loadCurrentWeekOverview();
    loadAllCoachRatings();
    initCoachFilter();
});

// ══════════════════════════════════════════════════════════════
//  AJAX MULTI-CRITERIA COACH FILTER
// ══════════════════════════════════════════════════════════════
(function() {
    'use strict';

    let filterDebounceTimer = null;
    const DEBOUNCE_MS = 350;

    function getFilterParams() {
        return {
            q:             document.getElementById('filter-q')?.value.trim()             ?? '',
            domaine:       document.getElementById('filter-domaine')?.value              ?? '',
            disponibilite: document.getElementById('filter-disponibilite')?.value        ?? '',
            maxTarif:      document.getElementById('filter-maxTarif')?.value             ?? '',
            minNote:       document.getElementById('filter-minNote')?.value              ?? '',
            minExperience: document.getElementById('filter-minExperience')?.value        ?? '',
            sort:          document.getElementById('filter-sort')?.value                 ?? 'nom_asc',
        };
    }

    function hasActiveFilters(params) {
        return params.q || params.domaine || params.disponibilite ||
               params.maxTarif || params.minNote || params.minExperience ||
               params.sort !== 'nom_asc';
    }

    async function applyFilters() {
        const params = getFilterParams();

        // Show / hide reset button
        const resetBtn = document.getElementById('filter-reset-btn');
        if (resetBtn) resetBtn.style.display = hasActiveFilters(params) ? 'block' : 'none';

        const spinner = document.getElementById('filter-spinner');
        if (spinner) spinner.style.display = 'block';

        const qs = new URLSearchParams(
            Object.fromEntries(Object.entries(params).filter(([, v]) => v !== ''))
        );

        try {
            const response = await fetch('/coach/filter?' + qs.toString(), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            });

            if (!response.ok) throw new Error('HTTP ' + response.status);

            const html = await response.text();
            const container = document.getElementById('coach-cards-container');
            if (container) {
                container.innerHTML = html;

                // Update count label
                const count = container.querySelectorAll('.coach-card').length;
                const label = document.getElementById('coach-count-label');
                if (label) label.textContent = '(' + count + ' coach(s))';

                // Re-wire star rating listeners and reload ratings
                initStarListeners();
                loadAllCoachRatings();
            }
        } catch (err) {
            console.error('Filter error:', err);
        } finally {
            if (spinner) spinner.style.display = 'none';
        }
    }

    function scheduleFilter() {
        clearTimeout(filterDebounceTimer);
        filterDebounceTimer = setTimeout(applyFilters, DEBOUNCE_MS);
    }

    window.resetFilters = function() {
        ['filter-q', 'filter-maxTarif', 'filter-minExperience'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = '';
        });
        ['filter-domaine', 'filter-disponibilite', 'filter-minNote', 'filter-sort'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = el.options[0]?.value ?? '';
        });
        applyFilters();
    };

    window.initCoachFilter = function() {
        ['filter-q', 'filter-maxTarif', 'filter-minExperience'].forEach(id => {
            document.getElementById(id)?.addEventListener('input', scheduleFilter);
        });
        ['filter-domaine', 'filter-disponibilite', 'filter-minNote', 'filter-sort'].forEach(id => {
            document.getElementById(id)?.addEventListener('change', applyFilters);
        });
    };
})();
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
        // line 1634
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
        const confirmed = await showClearConfirm();
        if (!confirmed) return;

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

    function showClearConfirm() {
        return new Promise((resolve) => {
            const modal = document.getElementById('chatbot-clear-modal');

            // Show modal: set display first, then trigger transition in next two frames
            modal.style.display = 'flex';
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    modal.classList.add('chatbot-modal-visible');
                });
            });

            function onConfirm() { cleanup(); resolve(true); }
            function onCancel()  { cleanup(); resolve(false); }
            function onBackdrop(e) { if (e.target === modal) onCancel(); }
            function onKey(e) { if (e.key === 'Escape') onCancel(); }

            function cleanup() {
                modal.classList.remove('chatbot-modal-visible');
                modal.addEventListener('transitionend', function hide() {
                    modal.style.display = 'none';
                    modal.removeEventListener('transitionend', hide);
                }, { once: true });
                document.getElementById('chatbot-clear-confirm-btn').removeEventListener('click', onConfirm);
                document.getElementById('chatbot-clear-cancel-btn').removeEventListener('click', onCancel);
                modal.removeEventListener('click', onBackdrop);
                document.removeEventListener('keydown', onKey);
            }

            document.getElementById('chatbot-clear-confirm-btn').addEventListener('click', onConfirm);
            document.getElementById('chatbot-clear-cancel-btn').addEventListener('click', onCancel);
            modal.addEventListener('click', onBackdrop);
            document.addEventListener('keydown', onKey);
        });
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
        return array (  1809 => 1634,  561 => 387,  554 => 386,  527 => 362,  524 => 360,  374 => 212,  371 => 210,  369 => 209,  351 => 192,  345 => 187,  341 => 184,  334 => 178,  320 => 165,  291 => 137,  287 => 134,  279 => 128,  276 => 127,  263 => 115,  238 => 91,  227 => 81,  216 => 79,  212 => 78,  206 => 74,  187 => 56,  180 => 51,  174 => 47,  169 => 43,  166 => 41,  159 => 40,  149 => 34,  145 => 33,  139 => 30,  135 => 29,  129 => 26,  125 => 25,  119 => 22,  114 => 21,  107 => 17,  102 => 16,  95 => 12,  90 => 11,  88 => 10,  84 => 8,  77 => 7,  66 => 5,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "coach/index.html.twig", "C:\\Users\\MSI\\Desktop\\final_bizcore\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE\\templates\\coach\\index.html.twig");
    }
}
