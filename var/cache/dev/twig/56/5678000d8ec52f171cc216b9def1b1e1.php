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

/* components/_error_popup.html.twig */
class __TwigTemplate_40067f1c6670ed92d535f36b87cd7b24 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_error_popup.html.twig"));

        // line 1
        $context["errorMessages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["error"], "method", false, false, false, 1), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 1));
        // line 2
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 2, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "<div id=\"error-overlay\" style=\"
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
        <button onclick=\"document.getElementById('error-overlay').remove()\" style=\"
            position:absolute;top:14px;right:14px;background:none;
            border:none;color:#9ca3af;font-size:20px;cursor:pointer;
            width:32px;height:32px;display:flex;align-items:center;
            justify-content:center;border-radius:50%;transition:background 0.2s;
        \" onmouseover=\"this.style.background='#f3f4f6'\" 
           onmouseout=\"this.style.background='none'\">&times;</button>
        
        <div style=\"
            width:72px;height:72px;border-radius:50%;
            background:linear-gradient(135deg,#ef4444,#dc2626);
            display:flex;align-items:center;justify-content:center;
            margin:0 auto 20px;font-size:32px;color:#fff;
        \">&times;</div>
        
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0 0 10px;\">
            Erreur !
        </h2>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                yield "        <p style=\"font-size:14px;color:#6b7280;margin:0 0 24px;line-height:1.6;\">
            ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "        
        <button onclick=\"document.getElementById('error-overlay').remove()\" style=\"
            background:#ef4444;color:#fff;border:none;border-radius:10px;
            padding:12px 32px;font-size:14px;font-weight:600;
            cursor:pointer;transition:background 0.2s;width:100%;
        \" onmouseover=\"this.style.background='#dc2626'\"
           onmouseout=\"this.style.background='#ef4444'\">
            Fermer
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
    var o = document.getElementById('error-overlay');
    if(o) { o.style.animation='fadeInOverlay 0.3s ease reverse'; 
             setTimeout(function(){o.remove()},280); }
}, 6000);
document.getElementById('error-overlay').addEventListener('click', function(e) {
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
        return "components/_error_popup.html.twig";
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
        return array (  98 => 39,  89 => 36,  86 => 35,  82 => 34,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set errorMessages = app.flashes('error')|merge(app.flashes('danger')) %}
{% if errorMessages is not empty %}
<div id=\"error-overlay\" style=\"
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
        <button onclick=\"document.getElementById('error-overlay').remove()\" style=\"
            position:absolute;top:14px;right:14px;background:none;
            border:none;color:#9ca3af;font-size:20px;cursor:pointer;
            width:32px;height:32px;display:flex;align-items:center;
            justify-content:center;border-radius:50%;transition:background 0.2s;
        \" onmouseover=\"this.style.background='#f3f4f6'\" 
           onmouseout=\"this.style.background='none'\">&times;</button>
        
        <div style=\"
            width:72px;height:72px;border-radius:50%;
            background:linear-gradient(135deg,#ef4444,#dc2626);
            display:flex;align-items:center;justify-content:center;
            margin:0 auto 20px;font-size:32px;color:#fff;
        \">&times;</div>
        
        <h2 style=\"font-size:20px;font-weight:700;color:#111827;margin:0 0 10px;\">
            Erreur !
        </h2>
        {% for message in errorMessages %}
        <p style=\"font-size:14px;color:#6b7280;margin:0 0 24px;line-height:1.6;\">
            {{ message }}
        </p>
        {% endfor %}
        
        <button onclick=\"document.getElementById('error-overlay').remove()\" style=\"
            background:#ef4444;color:#fff;border:none;border-radius:10px;
            padding:12px 32px;font-size:14px;font-weight:600;
            cursor:pointer;transition:background 0.2s;width:100%;
        \" onmouseover=\"this.style.background='#dc2626'\"
           onmouseout=\"this.style.background='#ef4444'\">
            Fermer
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
    var o = document.getElementById('error-overlay');
    if(o) { o.style.animation='fadeInOverlay 0.3s ease reverse'; 
             setTimeout(function(){o.remove()},280); }
}, 6000);
document.getElementById('error-overlay').addEventListener('click', function(e) {
    if(e.target === this) this.remove();
});
</script>
{% endif %}
", "components/_error_popup.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\components\\_error_popup.html.twig");
    }
}
