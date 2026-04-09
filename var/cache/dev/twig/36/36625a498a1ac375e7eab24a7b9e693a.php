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

/* blog/index.html.twig */
class __TwigTemplate_6bb852517e69b70adee05626316680cf extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

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

        yield "Blog — Bizcore";
        
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

        yield "BLOG";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* ── Stat pills ── */
    .stat-pills { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; flex-wrap: wrap; }
    .pill { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 10px 18px; display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; color: #1e293b; }
    .pill-num { font-size: 17px; font-weight: 700; }
    .pill-label { font-size: 12px; color: #64748b; font-weight: 500; }

    /* ── Action bar ── */
    .blog-action-bar { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; flex-wrap: wrap; }
    .blog-search-box { display: flex; align-items: center; gap: 8px; background: #fff; border: 1px solid #e2e8f0; border-radius: 7px; padding: 8px 14px; width: 240px; }
    .blog-search-box input { border: none; outline: none; font-size: 13px; color: #475569; width: 100%; background: transparent; }

    /* ── Cards grid ── */
    .cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
    @media (max-width: 1100px) { .cards-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 700px)  { .cards-grid { grid-template-columns: 1fr; } }

    /* ── Card ── */
    .article-card {
        background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 0;
        display: flex; flex-direction: column; overflow: hidden;
        transition: transform 0.18s, box-shadow 0.18s; box-shadow: 0 1px 4px rgba(0,0,0,0.05);
    }
    .article-card:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(0,0,0,0.10); }

    .card-accent { height: 4px; background: #22c55e; }
    .card-accent.accent-brouillon { background: #f59e0b; }
    .card-accent.accent-archivé   { background: #94a3b8; }

    .card-body { padding: 18px 18px 14px; flex: 1; display: flex; flex-direction: column; gap: 10px; }
    .card-badges { display: flex; align-items: center; gap: 6px; flex-wrap: wrap; }
    .cat-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; background: #dbeafe; color: #1d4ed8; }
    .status-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .status-publié    { background: #dcfce7; color: #16a34a; }
    .status-brouillon { background: #fef9c3; color: #a16207; }
    .status-archivé   { background: #f1f5f9; color: #64748b; }

    .card-title { font-size: 15px; font-weight: 700; color: #1e293b; line-height: 1.35; }
    .card-excerpt { font-size: 13px; color: #64748b; line-height: 1.6; flex: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

    .card-footer { display: flex; align-items: center; justify-content: space-between; padding: 12px 18px; border-top: 1px solid #f1f5f9; }
    .card-views { font-size: 12px; font-weight: 600; color: #94a3b8; display: flex; align-items: center; gap: 5px; }
    .btn-voir { display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #fff; font-size: 12px; font-weight: 700; padding: 7px 16px; border-radius: 7px; text-decoration: none; transition: background 0.15s; }
    .btn-voir:hover { background: #16a34a; }

    .empty-state { text-align: center; padding: 80px 20px; color: #94a3b8; }
    .empty-state .empty-icon { font-size: 48px; margin-bottom: 12px; }
    .empty-state p { font-size: 15px; }

    .blog-bottom-bar { margin-top: 24px; display: flex; align-items: center; justify-content: space-between; }
    .results-count { font-size: 13px; color: #94a3b8; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        yield "
        ";
        // line 65
        if ((array_key_exists("articles", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 65, $this->source); })())) > 0))) {
            // line 66
            yield "            ";
            $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 66, $this->source); })()));
            // line 67
            yield "            ";
            $context["published"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 67, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 67, $this->source); })()), "statut", [], "any", false, false, false, 67) == "publié"); }));
            // line 68
            yield "            ";
            $context["drafts"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 68, $this->source); })()), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 68, $this->source); })()), "statut", [], "any", false, false, false, 68) == "brouillon"); }));
            // line 69
            yield "
            <div class=\"stat-pills\">
                <div class=\"pill\">
                    <span class=\"pill-num\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })()), "html", null, true);
            yield "</span>
                    <span class=\"pill-label\">Articles</span>
                </div>
                <div class=\"pill\">
                    <span class=\"pill-num\" style=\"color:#16a34a;\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["published"]) || array_key_exists("published", $context) ? $context["published"] : (function () { throw new RuntimeError('Variable "published" does not exist.', 76, $this->source); })()), "html", null, true);
            yield "</span>
                    <span class=\"pill-label\">Publiés</span>
                </div>
                <div class=\"pill\">
                    <span class=\"pill-num\" style=\"color:#a16207;\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["drafts"]) || array_key_exists("drafts", $context) ? $context["drafts"] : (function () { throw new RuntimeError('Variable "drafts" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "</span>
                    <span class=\"pill-label\">Brouillons</span>
                </div>
            </div>
        ";
        }
        // line 85
        yield "
        <div class=\"blog-action-bar\">
            <div style=\"flex:1;\"></div>
            <div class=\"blog-search-box\">
                <span>🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un article...\" onkeyup=\"filterCards()\">
            </div>
        </div>

        ";
        // line 94
        if ((array_key_exists("articles", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 94, $this->source); })())) > 0))) {
            // line 95
            yield "
            <div class=\"cards-grid\" id=\"cardsGrid\">
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 98
                yield "                <div class=\"article-card\" data-search=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 98) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 98)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 98))), "html", null, true);
                yield "\">

                    <div class=\"card-accent accent-";
                // line 100
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 100)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 100), "html", null, true)) : ("default"));
                yield "\"></div>

                    <div class=\"card-body\">
                        <div class=\"card-badges\">
                            ";
                // line 104
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 105
                    yield "                                <span class=\"cat-badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 105), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 107
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "                                <span class=\"status-badge status-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 108), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 108)), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 110
                yield "                        </div>

                        <div class=\"card-title\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 112), "html", null, true);
                yield "</div>

                        <div class=\"card-excerpt\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 114)), 0, 120), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 114))) > 120)) {
                    yield "…";
                }
                yield "</div>
                    </div>

                    <div class=\"card-footer\">
                        <span class=\"card-views\">👁 ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nombreVues", [], "any", false, false, false, 118), "html", null, true);
                yield " vues</span>
                        <a href=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "idArticle", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" class=\"btn-voir\">Voir →</a>
                    </div>

                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "            </div>

            <div class=\"blog-bottom-bar\">
                <span class=\"results-count\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 127, $this->source); })())), "html", null, true);
            yield " article";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 127, $this->source); })())) != 1)) ? ("s") : (""));
            yield "</span>
            </div>

        ";
        } else {
            // line 131
            yield "            <div class=\"empty-state\">
                <div class=\"empty-icon\">📭</div>
                <p>Aucun article disponible pour le moment.</p>
            </div>
        ";
        }
        // line 136
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function filterCards() {
    const q = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#cardsGrid .article-card').forEach(card => {
        card.style.display = card.dataset.search.includes(q) ? '' : 'none';
    });
}
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
        return "blog/index.html.twig";
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
        return array (  345 => 140,  335 => 139,  326 => 136,  319 => 131,  310 => 127,  305 => 124,  294 => 119,  290 => 118,  280 => 114,  275 => 112,  271 => 110,  263 => 108,  260 => 107,  254 => 105,  252 => 104,  245 => 100,  239 => 98,  235 => 97,  231 => 95,  229 => 94,  218 => 85,  210 => 80,  203 => 76,  196 => 72,  191 => 69,  188 => 68,  185 => 67,  182 => 66,  180 => 65,  177 => 64,  167 => 63,  105 => 8,  95 => 7,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog — Bizcore{% endblock %}

{% block page_title %}BLOG{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* ── Stat pills ── */
    .stat-pills { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; flex-wrap: wrap; }
    .pill { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 10px 18px; display: flex; align-items: center; gap: 8px; font-size: 13px; font-weight: 600; color: #1e293b; }
    .pill-num { font-size: 17px; font-weight: 700; }
    .pill-label { font-size: 12px; color: #64748b; font-weight: 500; }

    /* ── Action bar ── */
    .blog-action-bar { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; flex-wrap: wrap; }
    .blog-search-box { display: flex; align-items: center; gap: 8px; background: #fff; border: 1px solid #e2e8f0; border-radius: 7px; padding: 8px 14px; width: 240px; }
    .blog-search-box input { border: none; outline: none; font-size: 13px; color: #475569; width: 100%; background: transparent; }

    /* ── Cards grid ── */
    .cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
    @media (max-width: 1100px) { .cards-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 700px)  { .cards-grid { grid-template-columns: 1fr; } }

    /* ── Card ── */
    .article-card {
        background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 0;
        display: flex; flex-direction: column; overflow: hidden;
        transition: transform 0.18s, box-shadow 0.18s; box-shadow: 0 1px 4px rgba(0,0,0,0.05);
    }
    .article-card:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(0,0,0,0.10); }

    .card-accent { height: 4px; background: #22c55e; }
    .card-accent.accent-brouillon { background: #f59e0b; }
    .card-accent.accent-archivé   { background: #94a3b8; }

    .card-body { padding: 18px 18px 14px; flex: 1; display: flex; flex-direction: column; gap: 10px; }
    .card-badges { display: flex; align-items: center; gap: 6px; flex-wrap: wrap; }
    .cat-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; background: #dbeafe; color: #1d4ed8; }
    .status-badge { display: inline-block; padding: 3px 9px; border-radius: 20px; font-size: 11px; font-weight: 700; }
    .status-publié    { background: #dcfce7; color: #16a34a; }
    .status-brouillon { background: #fef9c3; color: #a16207; }
    .status-archivé   { background: #f1f5f9; color: #64748b; }

    .card-title { font-size: 15px; font-weight: 700; color: #1e293b; line-height: 1.35; }
    .card-excerpt { font-size: 13px; color: #64748b; line-height: 1.6; flex: 1; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

    .card-footer { display: flex; align-items: center; justify-content: space-between; padding: 12px 18px; border-top: 1px solid #f1f5f9; }
    .card-views { font-size: 12px; font-weight: 600; color: #94a3b8; display: flex; align-items: center; gap: 5px; }
    .btn-voir { display: inline-flex; align-items: center; gap: 6px; background: #22c55e; color: #fff; font-size: 12px; font-weight: 700; padding: 7px 16px; border-radius: 7px; text-decoration: none; transition: background 0.15s; }
    .btn-voir:hover { background: #16a34a; }

    .empty-state { text-align: center; padding: 80px 20px; color: #94a3b8; }
    .empty-state .empty-icon { font-size: 48px; margin-bottom: 12px; }
    .empty-state p { font-size: 15px; }

    .blog-bottom-bar { margin-top: 24px; display: flex; align-items: center; justify-content: space-between; }
    .results-count { font-size: 13px; color: #94a3b8; }
</style>
{% endblock %}

{% block body %}

        {% if articles is defined and articles|length > 0 %}
            {% set total     = articles|length %}
            {% set published = articles|filter(a => a.statut == 'publié')|length %}
            {% set drafts    = articles|filter(a => a.statut == 'brouillon')|length %}

            <div class=\"stat-pills\">
                <div class=\"pill\">
                    <span class=\"pill-num\">{{ total }}</span>
                    <span class=\"pill-label\">Articles</span>
                </div>
                <div class=\"pill\">
                    <span class=\"pill-num\" style=\"color:#16a34a;\">{{ published }}</span>
                    <span class=\"pill-label\">Publiés</span>
                </div>
                <div class=\"pill\">
                    <span class=\"pill-num\" style=\"color:#a16207;\">{{ drafts }}</span>
                    <span class=\"pill-label\">Brouillons</span>
                </div>
            </div>
        {% endif %}

        <div class=\"blog-action-bar\">
            <div style=\"flex:1;\"></div>
            <div class=\"blog-search-box\">
                <span>🔍</span>
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un article...\" onkeyup=\"filterCards()\">
            </div>
        </div>

        {% if articles is defined and articles|length > 0 %}

            <div class=\"cards-grid\" id=\"cardsGrid\">
                {% for article in articles %}
                <div class=\"article-card\" data-search=\"{{ (article.titre ~ ' ' ~ article.categorie ~ ' ' ~ article.statut)|lower }}\">

                    <div class=\"card-accent accent-{{ article.statut ?? 'default' }}\"></div>

                    <div class=\"card-body\">
                        <div class=\"card-badges\">
                            {% if article.categorie %}
                                <span class=\"cat-badge\">{{ article.categorie }}</span>
                            {% endif %}
                            {% if article.statut %}
                                <span class=\"status-badge status-{{ article.statut }}\">{{ article.statut|capitalize }}</span>
                            {% endif %}
                        </div>

                        <div class=\"card-title\">{{ article.titre }}</div>

                        <div class=\"card-excerpt\">{{ article.contenu|striptags|slice(0, 120) }}{% if article.contenu|striptags|length > 120 %}…{% endif %}</div>
                    </div>

                    <div class=\"card-footer\">
                        <span class=\"card-views\">👁 {{ article.nombreVues }} vues</span>
                        <a href=\"{{ path('frontend_blog_show', {'id': article.idArticle}) }}\" class=\"btn-voir\">Voir →</a>
                    </div>

                </div>
                {% endfor %}
            </div>

            <div class=\"blog-bottom-bar\">
                <span class=\"results-count\">{{ articles|length }} article{{ articles|length != 1 ? 's' : '' }}</span>
            </div>

        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-icon\">📭</div>
                <p>Aucun article disponible pour le moment.</p>
            </div>
        {% endif %}

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function filterCards() {
    const q = document.getElementById('searchInput').value.toLowerCase();
    document.querySelectorAll('#cardsGrid .article-card').forEach(card => {
        card.style.display = card.dataset.search.includes(q) ? '' : 'none';
    });
}
</script>
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\melek\\Downloads\\wetransfer_esprit-pidev-web-3a7-2026-bizcore-main-zip_2026-04-09_1330\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\ESPRIT-PIDEV-WEB-3A7-2026-BIZCORE-main\\templates\\blog\\index.html.twig");
    }
}
