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

/* components/_success_popup.html.twig */
class __TwigTemplate_0040f4d79275ec6da562760a99a6f0b8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_success_popup.html.twig"));

        // line 1
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["success"], "method", false, false, false, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<div id=\"success-overlay\" style=\"
    position:fixed;top:0;left:0;width:100%;height:100%;
    background:rgba(0,0,0,0.55);z-index:9999;
    display:flex;align-items:center;justify-content:center;
    animation:fadeInOverlay 0.25s ease;
\">
    <div style=\"
        background:#fff;border-radius:16px;padding:40px 48px;
        text-align:center;max-width:420px;width:90%;
        box-shadow:0 20px 60px rgba(0,0,0,0.3);
        animation:slideUpPopup 0.3s cubic-bezier(0.34,1.56,0.64,1);
        position:relative;
    \">
        <button onclick=\"document.getElementById('success-overlay').remove()\" style=\"
            position:absolute;top:14px;right:14px;background:none;
            border:none;color:#9ca3af;font-size:20px;cursor:pointer;
            width:32px;height:32px;display:flex;align-items:center;
            justify-content:center;border-radius:50%;transition:background 0.2s;
        \" onmouseover=\"this.style.background='#f3f4f6'\" 
           onmouseout=\"this.style.background='none'\">&times;</button>
        
        <div style=\"
            width:72px;height:72px;border-radius:50%;
            background:linear-gradient(135deg,#10b981,#059669);
            display:flex;align-items:center;justify-content:center;
            margin:0 auto 20px;font-size:32px;color:#fff;
        \">&#10003;</div>
        
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0 0 10px;\">
            Succès !
        </h2>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["success"], "method", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                yield "        <p style=\"font-size:14px;color:#6b7280;margin:0 0 24px;line-height:1.6;\">
            ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "        
        <button onclick=\"document.getElementById('success-overlay').remove()\" style=\"
            background:#10b981;color:#fff;border:none;border-radius:10px;
            padding:12px 32px;font-size:14px;font-weight:600;
            cursor:pointer;transition:background 0.2s;width:100%;
        \" onmouseover=\"this.style.background='#059669'\"
           onmouseout=\"this.style.background='#10b981'\">
            Continuer
        </button>
    </div>
</div>
<style>
@keyframes fadeInOverlay { from{opacity:0} to{opacity:1} }
@keyframes slideUpPopup  { from{opacity:0;transform:translateY(30px) scale(0.95)} 
                            to{opacity:1;transform:translateY(0) scale(1)} }
</style>
<script>
setTimeout(function() {
    var o = document.getElementById('success-overlay');
    if(o) { o.style.animation='fadeInOverlay 0.3s ease reverse'; 
             setTimeout(function(){o.remove()},280); }
}, 6000);
document.getElementById('success-overlay').addEventListener('click', function(e) {
    if(e.target === this) this.remove();
});
</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_success_popup.html.twig";
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
        return array (  96 => 38,  87 => 35,  84 => 34,  80 => 33,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if app.flashes('success') is not empty %}
<div id=\"success-overlay\" style=\"
    position:fixed;top:0;left:0;width:100%;height:100%;
    background:rgba(0,0,0,0.55);z-index:9999;
    display:flex;align-items:center;justify-content:center;
    animation:fadeInOverlay 0.25s ease;
\">
    <div style=\"
        background:#fff;border-radius:16px;padding:40px 48px;
        text-align:center;max-width:420px;width:90%;
        box-shadow:0 20px 60px rgba(0,0,0,0.3);
        animation:slideUpPopup 0.3s cubic-bezier(0.34,1.56,0.64,1);
        position:relative;
    \">
        <button onclick=\"document.getElementById('success-overlay').remove()\" style=\"
            position:absolute;top:14px;right:14px;background:none;
            border:none;color:#9ca3af;font-size:20px;cursor:pointer;
            width:32px;height:32px;display:flex;align-items:center;
            justify-content:center;border-radius:50%;transition:background 0.2s;
        \" onmouseover=\"this.style.background='#f3f4f6'\" 
           onmouseout=\"this.style.background='none'\">&times;</button>
        
        <div style=\"
            width:72px;height:72px;border-radius:50%;
            background:linear-gradient(135deg,#10b981,#059669);
            display:flex;align-items:center;justify-content:center;
            margin:0 auto 20px;font-size:32px;color:#fff;
        \">&#10003;</div>
        
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0 0 10px;\">
            Succès !
        </h2>
        {% for message in app.flashes('success') %}
        <p style=\"font-size:14px;color:#6b7280;margin:0 0 24px;line-height:1.6;\">
            {{ message }}
        </p>
        {% endfor %}
        
        <button onclick=\"document.getElementById('success-overlay').remove()\" style=\"
            background:#10b981;color:#fff;border:none;border-radius:10px;
            padding:12px 32px;font-size:14px;font-weight:600;
            cursor:pointer;transition:background 0.2s;width:100%;
        \" onmouseover=\"this.style.background='#059669'\"
           onmouseout=\"this.style.background='#10b981'\">
            Continuer
        </button>
    </div>
</div>
<style>
@keyframes fadeInOverlay { from{opacity:0} to{opacity:1} }
@keyframes slideUpPopup  { from{opacity:0;transform:translateY(30px) scale(0.95)} 
                            to{opacity:1;transform:translateY(0) scale(1)} }
</style>
<script>
setTimeout(function() {
    var o = document.getElementById('success-overlay');
    if(o) { o.style.animation='fadeInOverlay 0.3s ease reverse'; 
             setTimeout(function(){o.remove()},280); }
}, 6000);
document.getElementById('success-overlay').addEventListener('click', function(e) {
    if(e.target === this) this.remove();
});
</script>
{% endif %}
", "components/_success_popup.html.twig", "C:\\Users\\MSI\\Desktop\\bizcore\\templates\\components\\_success_popup.html.twig");
    }
}
