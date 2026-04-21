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

/* components/_notification_bell.html.twig */
class __TwigTemplate_55a053262fd6de4582a166b61b5eb498 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_notification_bell.html.twig"));

        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "<div class=\"notif-bell-wrapper\" id=\"notifBellWrapper\" style=\"position:relative;\">

    ";
            // line 11
            yield "    <button id=\"notifBellBtn\"
            onclick=\"toggleNotifDropdown()\"
            title=\"Notifications\"
            style=\"
                width:36px;height:36px;border-radius:50%;
                background:#f3f4f6;border:none;
                display:flex;align-items:center;justify-content:center;
                color:#6b7280;font-size:15px;cursor:pointer;
                transition:background 0.2s;position:relative;
            \"
            onmouseover=\"this.style.background='#e5e7eb'\"
            onmouseout=\"this.style.background='#f3f4f6'\">
        <i class=\"far fa-bell\"></i>
        <span id=\"notifBadge\" style=\"
            position:absolute;top:-4px;right:-4px;
            background:#ef4444;color:#fff;
            font-size:9px;font-weight:700;
            min-width:16px;height:16px;border-radius:50%;
            display:none;align-items:center;justify-content:center;
            border:2px solid #fff;
        \">0</span>
    </button>

    ";
            // line 35
            yield "    <div id=\"notifDropdown\" style=\"
        position:absolute;top:46px;right:0;
        width:340px;background:#fff;
        border-radius:12px;
        box-shadow:0 8px 32px rgba(0,0,0,0.18);
        border:1px solid #e5e7eb;
        z-index:10000;display:none;
        overflow:hidden;
        animation:slideDownNotif 0.2s ease;
    \">
        ";
            // line 46
            yield "        <div style=\"
            padding:14px 18px;
            border-bottom:1px solid #f3f4f6;
            display:flex;align-items:center;
            justify-content:space-between;
        \">
            <span style=\"font-weight:700;font-size:13px;color:#111827;\">
                <i class=\"far fa-bell\" style=\"color:#20c997;margin-right:6px;\"></i>
                Notifications
            </span>
            <button onclick=\"markAllNotificationsRead()\" style=\"
                font-size:11px;color:#6b7280;
                background:none;border:none;cursor:pointer;
                padding:4px 8px;border-radius:6px;
                transition:background 0.2s;
            \" onmouseover=\"this.style.background='#f3f4f6'\"
               onmouseout=\"this.style.background='none'\">
                Tout marquer lu
            </button>
        </div>

        ";
            // line 68
            yield "        <div id=\"notifList\" style=\"max-height:360px;overflow-y:auto;\">
            <div id=\"notifEmpty\" style=\"
                padding:32px 18px;text-align:center;color:#9ca3af;font-size:13px;
            \">
                <i class=\"far fa-bell-slash fa-2x\" style=\"display:block;margin-bottom:8px;\"></i>
                Aucune notification
            </div>
        </div>

        ";
            // line 78
            yield "        <div style=\"
            padding:10px 18px;border-top:1px solid #f3f4f6;
            text-align:center;
        \">
            <span style=\"font-size:11px;color:#9ca3af;\">
                Affichage des 20 dernières notifications
            </span>
        </div>
    </div>
</div>

<style>
@keyframes slideDownNotif {
    from { opacity:0; transform:translateY(-8px); }
    to   { opacity:1; transform:translateY(0); }
}
</style>

<script>
// ── Notification Bell JS ──────────────────────────────────────────────────

let notifOpen = false;

/**
 * Toggle the dropdown open/closed.
 */
function toggleNotifDropdown() {
    const dropdown = document.getElementById('notifDropdown');
    notifOpen = !notifOpen;
    dropdown.style.display = notifOpen ? 'block' : 'none';
    if (notifOpen) {
        loadNotifications();
    }
}

/**
 * Close the dropdown when clicking outside.
 */
document.addEventListener('click', function(e) {
    const wrapper = document.getElementById('notifBellWrapper');
    if (wrapper && !wrapper.contains(e.target)) {
        document.getElementById('notifDropdown').style.display = 'none';
        notifOpen = false;
    }
});

/**
 * Fetch notifications from the API and update the UI.
 */
async function loadNotifications() {
    try {
        const resp = await fetch('/reservation/api/notifications');
        if (!resp.ok) return;
        const data = await resp.json();
        if (!data.success) return;

        updateBadge(data.unreadCount);
        renderNotifications(data.notifications);
    } catch (e) {
        console.error('[Notif] Error loading notifications:', e);
    }
}

/**
 * Update the red badge number.
 */
function updateBadge(count) {
    const badge = document.getElementById('notifBadge');
    if (!badge) return;
    if (count > 0) {
        badge.textContent = count > 99 ? '99+' : count;
        badge.style.display = 'flex';
    } else {
        badge.style.display = 'none';
    }
}

/**
 * Refresh only the badge count (called after a reservation).
 */
async function refreshNotificationBell() {
    try {
        const resp = await fetch('/reservation/api/notifications');
        if (!resp.ok) return;
        const data = await resp.json();
        if (data.success) updateBadge(data.unreadCount);
    } catch (e) { /* silent */ }
}

/**
 * Render notifications list inside the dropdown.
 */
function renderNotifications(notifications) {
    const list  = document.getElementById('notifList');
    const empty = document.getElementById('notifEmpty');

    if (!notifications || notifications.length === 0) {
        empty.style.display = 'block';
        return;
    }

    empty.style.display = 'none';

    // Build HTML
    const icons = {
        reservation: { icon: 'fa-calendar-check', color: '#10b981' },
        annulation:  { icon: 'fa-calendar-times',  color: '#ef4444' },
        info:        { icon: 'fa-info-circle',      color: '#3b82f6' },
    };

    const items = notifications.map(n => {
        const meta = icons[n.type] || icons.info;
        const bg   = n.isRead ? '#fff' : '#f0fdf4';
        const weight = n.isRead ? '400' : '600';

        return `
        <div onclick=\"markOneRead(\${n.id}, this)\"
             style=\"
                 padding:12px 18px;border-bottom:1px solid #f9fafb;
                 background:\${bg};cursor:pointer;transition:background 0.15s;
                 display:flex;gap:12px;align-items:flex-start;
             \"
             onmouseover=\"this.style.background='#f9fafb'\"
             onmouseout=\"this.style.background='\${bg}'\"
             data-read=\"\${n.isRead ? '1' : '0'}\">
            <div style=\"
                width:32px;height:32px;border-radius:50%;
                background:\${meta.color}22;flex-shrink:0;
                display:flex;align-items:center;justify-content:center;
            \">
                <i class=\"fas \${meta.icon}\" style=\"color:\${meta.color};font-size:13px;\"></i>
            </div>
            <div style=\"flex:1;min-width:0;\">
                <div style=\"font-size:12px;color:#374151;font-weight:\${weight};line-height:1.4;\">
                    \${n.message}
                </div>
                <div style=\"font-size:10px;color:#9ca3af;margin-top:3px;\">
                    \${n.timeAgo}
                </div>
            </div>
            \${!n.isRead ? '<div style=\"width:8px;height:8px;border-radius:50%;background:#10b981;flex-shrink:0;margin-top:4px;\"></div>' : ''}
        </div>`;
    });

    // Replace everything after the empty div
    const existingItems = list.querySelectorAll('.notif-item');
    existingItems.forEach(el => el.remove());

    const wrapper = document.createElement('div');
    wrapper.innerHTML = items.join('');
    Array.from(wrapper.children).forEach(el => {
        el.classList.add('notif-item');
        list.appendChild(el);
    });
}

/**
 * Mark a single notification as read.
 */
async function markOneRead(notifId, element) {
    if (element.dataset.read === '1') return; // already read

    try {
        const resp = await fetch(`/reservation/api/notifications/\${notifId}/read`, { method: 'POST' });
        if (!resp.ok) return;
        const data = await resp.json();

        element.dataset.read = '1';
        element.style.background = '#fff';
        element.style.fontWeight = '400';
        const dot = element.querySelector('div[style*=\"border-radius:50%\"][style*=\"background:#10b981\"]');
        if (dot) dot.remove();

        updateBadge(data.unreadCount);
    } catch (e) {
        console.error('[Notif] Error marking read:', e);
    }
}

/**
 * Mark ALL notifications as read.
 */
async function markAllNotificationsRead() {
    try {
        const resp = await fetch('/reservation/api/notifications/read-all', { method: 'POST' });
        if (!resp.ok) return;
        const data = await resp.json();

        updateBadge(0);
        loadNotifications(); // refresh list
    } catch (e) {
        console.error('[Notif] Error marking all read:', e);
    }
}

// Load badge count on page load (lightweight — just the count)
document.addEventListener('DOMContentLoaded', refreshNotificationBell);
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
        return "components/_notification_bell.html.twig";
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
        return array (  122 => 78,  111 => 68,  88 => 46,  76 => 35,  51 => 11,  47 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# ─────────────────────────────────────────────────────────────────────────
   Notification Bell Component
   Shows a bell icon with unread count badge in the topbar.
   Clicking opens a dropdown panel listing recent notifications.
   Requires: the user must be authenticated (app.user != null).
───────────────────────────────────────────────────────────────────────── #}
{% if app.user %}
<div class=\"notif-bell-wrapper\" id=\"notifBellWrapper\" style=\"position:relative;\">

    {# Bell button #}
    <button id=\"notifBellBtn\"
            onclick=\"toggleNotifDropdown()\"
            title=\"Notifications\"
            style=\"
                width:36px;height:36px;border-radius:50%;
                background:#f3f4f6;border:none;
                display:flex;align-items:center;justify-content:center;
                color:#6b7280;font-size:15px;cursor:pointer;
                transition:background 0.2s;position:relative;
            \"
            onmouseover=\"this.style.background='#e5e7eb'\"
            onmouseout=\"this.style.background='#f3f4f6'\">
        <i class=\"far fa-bell\"></i>
        <span id=\"notifBadge\" style=\"
            position:absolute;top:-4px;right:-4px;
            background:#ef4444;color:#fff;
            font-size:9px;font-weight:700;
            min-width:16px;height:16px;border-radius:50%;
            display:none;align-items:center;justify-content:center;
            border:2px solid #fff;
        \">0</span>
    </button>

    {# Dropdown panel #}
    <div id=\"notifDropdown\" style=\"
        position:absolute;top:46px;right:0;
        width:340px;background:#fff;
        border-radius:12px;
        box-shadow:0 8px 32px rgba(0,0,0,0.18);
        border:1px solid #e5e7eb;
        z-index:10000;display:none;
        overflow:hidden;
        animation:slideDownNotif 0.2s ease;
    \">
        {# Header #}
        <div style=\"
            padding:14px 18px;
            border-bottom:1px solid #f3f4f6;
            display:flex;align-items:center;
            justify-content:space-between;
        \">
            <span style=\"font-weight:700;font-size:13px;color:#111827;\">
                <i class=\"far fa-bell\" style=\"color:#20c997;margin-right:6px;\"></i>
                Notifications
            </span>
            <button onclick=\"markAllNotificationsRead()\" style=\"
                font-size:11px;color:#6b7280;
                background:none;border:none;cursor:pointer;
                padding:4px 8px;border-radius:6px;
                transition:background 0.2s;
            \" onmouseover=\"this.style.background='#f3f4f6'\"
               onmouseout=\"this.style.background='none'\">
                Tout marquer lu
            </button>
        </div>

        {# List #}
        <div id=\"notifList\" style=\"max-height:360px;overflow-y:auto;\">
            <div id=\"notifEmpty\" style=\"
                padding:32px 18px;text-align:center;color:#9ca3af;font-size:13px;
            \">
                <i class=\"far fa-bell-slash fa-2x\" style=\"display:block;margin-bottom:8px;\"></i>
                Aucune notification
            </div>
        </div>

        {# Footer #}
        <div style=\"
            padding:10px 18px;border-top:1px solid #f3f4f6;
            text-align:center;
        \">
            <span style=\"font-size:11px;color:#9ca3af;\">
                Affichage des 20 dernières notifications
            </span>
        </div>
    </div>
</div>

<style>
@keyframes slideDownNotif {
    from { opacity:0; transform:translateY(-8px); }
    to   { opacity:1; transform:translateY(0); }
}
</style>

<script>
// ── Notification Bell JS ──────────────────────────────────────────────────

let notifOpen = false;

/**
 * Toggle the dropdown open/closed.
 */
function toggleNotifDropdown() {
    const dropdown = document.getElementById('notifDropdown');
    notifOpen = !notifOpen;
    dropdown.style.display = notifOpen ? 'block' : 'none';
    if (notifOpen) {
        loadNotifications();
    }
}

/**
 * Close the dropdown when clicking outside.
 */
document.addEventListener('click', function(e) {
    const wrapper = document.getElementById('notifBellWrapper');
    if (wrapper && !wrapper.contains(e.target)) {
        document.getElementById('notifDropdown').style.display = 'none';
        notifOpen = false;
    }
});

/**
 * Fetch notifications from the API and update the UI.
 */
async function loadNotifications() {
    try {
        const resp = await fetch('/reservation/api/notifications');
        if (!resp.ok) return;
        const data = await resp.json();
        if (!data.success) return;

        updateBadge(data.unreadCount);
        renderNotifications(data.notifications);
    } catch (e) {
        console.error('[Notif] Error loading notifications:', e);
    }
}

/**
 * Update the red badge number.
 */
function updateBadge(count) {
    const badge = document.getElementById('notifBadge');
    if (!badge) return;
    if (count > 0) {
        badge.textContent = count > 99 ? '99+' : count;
        badge.style.display = 'flex';
    } else {
        badge.style.display = 'none';
    }
}

/**
 * Refresh only the badge count (called after a reservation).
 */
async function refreshNotificationBell() {
    try {
        const resp = await fetch('/reservation/api/notifications');
        if (!resp.ok) return;
        const data = await resp.json();
        if (data.success) updateBadge(data.unreadCount);
    } catch (e) { /* silent */ }
}

/**
 * Render notifications list inside the dropdown.
 */
function renderNotifications(notifications) {
    const list  = document.getElementById('notifList');
    const empty = document.getElementById('notifEmpty');

    if (!notifications || notifications.length === 0) {
        empty.style.display = 'block';
        return;
    }

    empty.style.display = 'none';

    // Build HTML
    const icons = {
        reservation: { icon: 'fa-calendar-check', color: '#10b981' },
        annulation:  { icon: 'fa-calendar-times',  color: '#ef4444' },
        info:        { icon: 'fa-info-circle',      color: '#3b82f6' },
    };

    const items = notifications.map(n => {
        const meta = icons[n.type] || icons.info;
        const bg   = n.isRead ? '#fff' : '#f0fdf4';
        const weight = n.isRead ? '400' : '600';

        return `
        <div onclick=\"markOneRead(\${n.id}, this)\"
             style=\"
                 padding:12px 18px;border-bottom:1px solid #f9fafb;
                 background:\${bg};cursor:pointer;transition:background 0.15s;
                 display:flex;gap:12px;align-items:flex-start;
             \"
             onmouseover=\"this.style.background='#f9fafb'\"
             onmouseout=\"this.style.background='\${bg}'\"
             data-read=\"\${n.isRead ? '1' : '0'}\">
            <div style=\"
                width:32px;height:32px;border-radius:50%;
                background:\${meta.color}22;flex-shrink:0;
                display:flex;align-items:center;justify-content:center;
            \">
                <i class=\"fas \${meta.icon}\" style=\"color:\${meta.color};font-size:13px;\"></i>
            </div>
            <div style=\"flex:1;min-width:0;\">
                <div style=\"font-size:12px;color:#374151;font-weight:\${weight};line-height:1.4;\">
                    \${n.message}
                </div>
                <div style=\"font-size:10px;color:#9ca3af;margin-top:3px;\">
                    \${n.timeAgo}
                </div>
            </div>
            \${!n.isRead ? '<div style=\"width:8px;height:8px;border-radius:50%;background:#10b981;flex-shrink:0;margin-top:4px;\"></div>' : ''}
        </div>`;
    });

    // Replace everything after the empty div
    const existingItems = list.querySelectorAll('.notif-item');
    existingItems.forEach(el => el.remove());

    const wrapper = document.createElement('div');
    wrapper.innerHTML = items.join('');
    Array.from(wrapper.children).forEach(el => {
        el.classList.add('notif-item');
        list.appendChild(el);
    });
}

/**
 * Mark a single notification as read.
 */
async function markOneRead(notifId, element) {
    if (element.dataset.read === '1') return; // already read

    try {
        const resp = await fetch(`/reservation/api/notifications/\${notifId}/read`, { method: 'POST' });
        if (!resp.ok) return;
        const data = await resp.json();

        element.dataset.read = '1';
        element.style.background = '#fff';
        element.style.fontWeight = '400';
        const dot = element.querySelector('div[style*=\"border-radius:50%\"][style*=\"background:#10b981\"]');
        if (dot) dot.remove();

        updateBadge(data.unreadCount);
    } catch (e) {
        console.error('[Notif] Error marking read:', e);
    }
}

/**
 * Mark ALL notifications as read.
 */
async function markAllNotificationsRead() {
    try {
        const resp = await fetch('/reservation/api/notifications/read-all', { method: 'POST' });
        if (!resp.ok) return;
        const data = await resp.json();

        updateBadge(0);
        loadNotifications(); // refresh list
    } catch (e) {
        console.error('[Notif] Error marking all read:', e);
    }
}

// Load badge count on page load (lightweight — just the count)
document.addEventListener('DOMContentLoaded', refreshNotificationBell);
</script>
{% endif %}
", "components/_notification_bell.html.twig", "C:\\xampp\\htdocs\\bizcore-main\\templates\\components\\_notification_bell.html.twig");
    }
}
