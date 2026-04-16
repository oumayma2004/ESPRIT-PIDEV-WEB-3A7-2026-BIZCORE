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

/* dashboard/index.html.twig */
class __TwigTemplate_d594e34b6a1abe4c8aca588191feaef2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        // line 4
        yield "  BizCore Dashboard
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "GESTION UTILISATEURS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "  <style>
    :root {
      --bg-page: #d1d1ff;
      --bg-app: #ffffff;
      --bg-card: #f6f7fb;
      --text-main: #111827;
      --text-soft: #667085;
      --line: #e5e7ef;
      --accent: #5b7cff;
      --shadow: 0 26px 70px rgba(17, 24, 39, 0.14);
    }
    
    .dashboard-shell *,
    .dashboard-shell *::before,
    .dashboard-shell *::after {
      box-sizing: border-box;
    }
    .dashboard-shell a {
      color: inherit;
      text-decoration: none;
    }
    .dashboard-shell {
      padding: 16px;
      display: flex;
      align-items: flex-start;
      justify-content: center;
    }
    .dashboard-app {
      width: 100%;
      background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
      border-radius: 28px;
      box-shadow: var(--shadow);
      display: grid;
      grid-template-columns: 300px minmax(0, 1fr) 350px;
      overflow: hidden;
    }
    .dashboard-sidebar,
    .dashboard-main,
    .dashboard-rightbar {
      padding: 20px;
    }
    .dashboard-main {
      border-left: 1px solid var(--line);
      border-right: 1px solid var(--line);
      background: linear-gradient(180deg, #ffffff 0%, #fafbff 100%);
    }
    .card {
      background: var(--bg-app);
      border: 1px solid var(--line);
      border-radius: 22px;
      box-shadow: 0 10px 28px rgba(17, 24, 39, 0.04);
    }
    .card-pad {
      padding: 18px;
    }
    .section-title {
      margin: 0 0 14px;
      font-size: 14px;
      letter-spacing: 0.08em;
      color: var(--text-soft);
    }
    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 18px;
    }
    .brand strong {
      display: block;
      font-size: 22px;
    }
    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 16px 18px;
      margin-bottom: 16px;
    }
    .topbar .title strong {
      font-size: 20px;
      display: block;
    }
    .topbar .title span {
      color: var(--text-soft);
      font-size: 12px;
    }
    .clock {
      padding: 10px 14px;
      border-radius: 14px;
      background: #f2f4fb;
      font-weight: 800;
      letter-spacing: 0.04em;
    }
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
      margin-bottom: 16px;
    }
    .kpi {
      padding: 18px;
      min-height: 118px;
    }
    .kpi .label {
      color: var(--text-soft);
      font-size: 12px;
    }
    .kpi .value {
      margin-top: 12px;
      font-size: 28px;
      font-weight: 800;
      letter-spacing: -0.04em;
    }
    .kpi .sub {
      margin-top: 6px;
      font-size: 12px;
      color: var(--text-soft);
    }
    .kpi .accent-line {
      height: 4px;
      border-radius: 999px;
      background: #edf1f8;
      margin-top: 14px;
      overflow: hidden;
    }
    .kpi .accent-line i {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, #25c18f, #51a9ff);
    }
    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
    }
    .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 6px;
    }
    .weekday {
      text-align: center;
      font-size: 11px;
      color: var(--text-soft);
    }
    .day {
      aspect-ratio: 1;
      border-radius: 12px;
      display: grid;
      place-items: center;
      font-size: 12px;
      background: #f6f7fb;
    }
    .day.today {
      border: 2px solid #5b7cff;
      font-weight: bold;
    }
    .profile-head {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .profile-meta strong {
      display: block;
      font-size: 14px;
    }
    .profile-meta span {
      font-size: 12px;
      color: var(--text-soft);
    }
    .icon-btn {
      width: 40px;
      height: 40px;
      border-radius: 14px;
      border: 1px solid var(--line);
      background: #f6f7fb;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: linear-gradient(135deg, #ffb199, #ff6a88);
      display: grid;
      place-items: center;
      flex: 0 0 auto;
    }
    .avatar span {
      color: #fff;
      font-weight: 800;
      font-size: 18px;
      line-height: 1;
    }
    .avatar-lg {
      width: 72px;
      height: 72px;
    }
    .avatar-lg span {
      font-size: 28px;
    }
    .profile-menu-wrap {
      position: relative;
    }
    .profile-menu {
      position: absolute;
      top: 45px;
      right: 0;
      width: 180px;
      background: white;
      border: 1px solid var(--line);
      border-radius: 14px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      display: none;
    }
    .profile-menu a,
    .profile-menu button {
      width: 100%;
      padding: 10px 12px;
      border: none;
      background: transparent;
      display: flex;
      justify-content: space-between;
      cursor: pointer;
      font-size: 13px;
    }
    .profile-menu a:hover,
    .profile-menu button:hover {
      background: #f5f7ff;
    }
    .section-card {
      padding: 14px;
      border-radius: 20px;
      background: var(--bg-app);
      border: 1px solid var(--line);
    }
    .quick-icons {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
      margin-top: 8px;
    }
    .quick-icon {
      height: 65px;
      border-radius: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 4px;
      background: #f4f6ff;
      border: 1px solid var(--line);
      transition: 0.2s ease;
      font-size: 11px;
      color: var(--text-soft);
    }
    .quick-icon:hover {
      transform: translateY(-4px);
      background: #eef2ff;
      color: var(--text-main);
    }
    .quick-icon.active {
      background: #5b7cff;
      color: white;
    }
    .overview-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
    }
    .overview-kpi {
      padding: 12px;
      border-radius: 16px;
      background: #fafbff;
      border: 1px solid #e5e7ef;
    }
    .overview-kpi span {
      display: block;
      font-size: 11px;
      color: #667085;
      margin-bottom: 6px;
    }
    .overview-kpi strong {
      font-size: 20px;
    }
    .overview-alerts {
      margin-top: 12px;
      display: grid;
      gap: 8px;
    }
    .alert-box {
      padding: 10px 12px;
      border-radius: 14px;
      font-size: 12px;
      font-weight: 700;
    }
    .alert-box.warning {
      background: #fff7e6;
      color: #9a6700;
      border: 1px solid #ffd88a;
    }
    .alert-box.danger {
      background: #fee2e2;
      color: #991b1b;
      border: 1px solid #fca5a5;
    }
    .alert-box.info {
      background: #e0f2fe;
      color: #075985;
      border: 1px solid #7dd3fc;
    }
    .modal {
      position: fixed;
      inset: 0;
      display: none;
      z-index: 10000;
    }
    .modal.open {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(17, 24, 39, 0.45);
      backdrop-filter: blur(3px);
      z-index: 10000;
    }
    .modal-card {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: min(760px, calc(100% - 24px));
      max-height: calc(100vh - 24px);
      z-index: 10001;
      background: #fff;
      border-radius: 24px;
      overflow: auto;
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.22);
    }
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 18px 20px;
      border-bottom: 1px solid #e5e7ef;
    }
    .modal-body {
      padding: 20px;
    }
    .modal-close {
      border: 0;
      background: #f4f6ff;
      width: 36px;
      height: 36px;
      border-radius: 12px;
      cursor: pointer;
      font-size: 22px;
      line-height: 1;
    }
    .profile-summary {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 18px;
    }
    .profile-field {
      padding: 10px 12px;
      background: #fafbff;
      border: 1px solid #e5e7ef;
      border-radius: 14px;
      margin-bottom: 10px;
    }
    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .field.full {
      grid-column: 1 / -1;
    }
    .field input,
    .field select {
      padding: 11px 12px;
      border-radius: 12px;
      border: 1px solid #d7ddf2;
      outline: none;
      background: #fff;
    }
    .field input:focus,
    .field select:focus {
      border-color: #5b7cff;
      box-shadow: 0 0 0 3px rgba(91, 124, 255, 0.12);
    }
    .modal-actions {
      display: flex;
      gap: 10px;
      padding: 0 20px 20px;
    }
    .modal-footer {
      border-top: 1px solid #e5e7ef;
      padding-top: 16px;
    }
    .btn-primary,
    .btn-secondary,
    .btn-danger {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      padding: 10px 14px;
      font-weight: 700;
      text-decoration: none;
      border: 0;
      cursor: pointer;
    }
    .btn-primary {
      background: #5b7cff;
      color: #fff;
    }
    .btn-secondary {
      background: #eef2ff;
      color: #111827;
    }
    .btn-danger {
      background: #fee2e2;
      color: #991b1b;
    }
    .users-table-wrap {
      width: 100%;
      overflow-x: auto;
    }
    .users-toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 14px;
    }
    .users-search {
      display: flex;
      align-items: center;
      gap: 10px;
      flex: 1;
      min-width: 240px;
    }
    .users-search input {
      width: 100%;
      padding: 10px 12px;
      border-radius: 10px;
      border: 1px solid #ddd;
      outline: none;
      font-size: 13px;
      background: #fff;
    }
    .users-search input:focus {
      border-color: #5b7cff;
      box-shadow: 0 0 0 3px rgba(91, 124, 255, 0.12);
    }
    .users-table {
      width: 100%;
      min-width: 1020px;
      border-collapse: collapse;
      font-size: 13px;
      table-layout: fixed;
      border-radius: 12px;
      overflow: hidden;
    }
    .users-table th,
    .users-table td {
      padding: 11px 10px;
      border-bottom: 1px solid #eee;
      vertical-align: middle;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      text-align: left;
    }
    .users-badge {
      display: inline-block;
      padding: 4px 8px;
      border-radius: 999px;
      background: #eef2ff;
      font-size: 11px;
    }
    .pagination {
      margin-top: 16px;
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .page-btn {
      border: 1px solid #d7ddf2;
      background: #fff;
      color: #111827;
      padding: 8px 11px;
      border-radius: 10px;
      cursor: pointer;
      font-size: 13px;
      transition: 0.15s ease;
    }
    .page-btn:hover {
      background: #f5f7ff;
      transform: translateY(-1px);
    }
    .page-input {
      width: 70px;
      padding: 8px 10px;
      border-radius: 10px;
      border: 1px solid #ddd;
    }
    
    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }
    
    .calendar-nav {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .nav-btn {
      width: 34px;
      height: 34px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      background: #f6f7fb;
      border: 1px solid var(--line);
      color: var(--text-main);
      padding: 0;
      flex: 0 0 auto;
    }
    
    .nav-btn svg {
      width: 18px;
      height: 18px;
    }
    
    .nav-btn:hover {
      background: #eef2ff;
    }
    
    .quick-icons {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
      margin-top: 8px;
    }
    
    .quick-icon {
      height: 56px;
      border-radius: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 3px;
      background: #f4f6ff;
      border: 1px solid var(--line);
      transition: 0.2s ease;
      font-size: 10px;
      color: var(--text-soft);
    }
    
    .quick-icon svg {
      width: 16px;
      height: 16px;
    }
    
    .quick-icon:hover {
      transform: translateY(-3px);
      background: #eef2ff;
      color: var(--text-main);
    }
    
    .stats-vertical {
      margin-top: 14px;
    }
    
    .vertical-bars {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      gap: 14px;
      height: 150px;
      margin-top: 12px;
    }
    
    .v-item {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      gap: 6px;
      height: 100%;
    }
    
    .v-bar {
      width: 12px;
      border-radius: 999px;
      min-height: 8px;
    }
    
    .v-bar.blue {
      background: #5b7cff;
    }
    
    .v-bar.green {
      background: #25c18f;
    }
    
    .v-bar.orange {
      background: #ff9800;
    }
    
    .v-bar.purple {
      background: #8b5cf6;
    }
    
    .v-item span {
      font-size: 11px;
      font-weight: 700;
    }
    
    .v-item small {
      font-size: 10px;
      color: var(--text-soft);
    }
    
    @media (max-width: 1280px) {
      .dashboard-app {
        grid-template-columns: 1fr;
      }
      .dashboard-main {
        border-left: 0;
        border-right: 0;
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
      }
      .kpi-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 720px) {
      .dashboard-shell {
        padding: 10px;
      }
      .dashboard-sidebar,
      .dashboard-main,
      .dashboard-rightbar {
        padding: 14px;
      }
      .kpi-grid {
        grid-template-columns: 1fr;
      }
      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  ";
        // line 692
        $context["auth"] = (isset($context["authUser"]) || array_key_exists("authUser", $context) ? $context["authUser"] : (function () { throw new RuntimeError('Variable "authUser" does not exist.', 692, $this->source); })());
        // line 693
        yield "  ";
        $context["displayName"] = (((($tmp = (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 693, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 693, $this->source); })()), "prenom", [], "any", false, false, false, 693) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 693, $this->source); })()), "nom", [], "any", false, false, false, 693)))) : ("Guest"));
        // line 694
        yield "  ";
        $context["displayRole"] = ((((isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 694, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 694, $this->source); })()), "roleEntity", [], "any", false, false, false, 694))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 694, $this->source); })()), "roleEntity", [], "any", false, false, false, 694), "nomRole", [], "any", false, false, false, 694)) : ("Visitor"));
        // line 695
        yield "  ";
        $context["avatarLetter"] = (((($tmp = (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 695, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 695, $this->source); })()), "prenom", [], "any", false, false, false, 695)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 695, $this->source); })()), "prenom", [], "any", false, false, false, 695)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 695, $this->source); })()), "nom", [], "any", false, false, false, 695)))))) : ("G"));
        // line 696
        yield "  ";
        $context["maxKpi"] = max([CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 696, $this->source); })()), "users", [], "any", false, false, false, 696), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 696, $this->source); })()), "products", [], "any", false, false, false, 696), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 696, $this->source); })()), "orders", [], "any", false, false, false, 696), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 696, $this->source); })()), "events", [], "any", false, false, false, 696), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 696, $this->source); })()), "articles", [], "any", false, false, false, 696), 1]);
        // line 697
        yield "
  <div class=\"dashboard-shell\">
    <div class=\"dashboard-app\">
      <aside class=\"dashboard-sidebar\">
        <div class=\"brand\">
          <strong>BiZCoRE</strong>
        </div>

        <section class=\"card card-pad\">
          <div class=\"section-title\">Calendar</div>
          <div class=\"calendar-header\">
            <span>";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentMonthLabel"]) || array_key_exists("currentMonthLabel", $context) ? $context["currentMonthLabel"] : (function () { throw new RuntimeError('Variable "currentMonthLabel" does not exist.', 708, $this->source); })()), "html", null, true);
        yield "</span>

            <div class=\"calendar-nav\">
              <a class=\"nav-btn prev\" href=\"";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["month" => (isset($context["prevMonth"]) || array_key_exists("prevMonth", $context) ? $context["prevMonth"] : (function () { throw new RuntimeError('Variable "prevMonth" does not exist.', 711, $this->source); })()), "year" => (isset($context["prevYear"]) || array_key_exists("prevYear", $context) ? $context["prevYear"] : (function () { throw new RuntimeError('Variable "prevYear" does not exist.', 711, $this->source); })())]), "html", null, true);
        yield "\" title=\"Previous month\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M15 18l-6-6 6-6\" />
                </svg>
              </a>

              <a class=\"nav-btn today\" href=\"";
        // line 717
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" title=\"Current month\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <rect x=\"3\" y=\"5\" width=\"18\" height=\"16\" rx=\"3\" />
                  <path d=\"M8 3v4M16 3v4M3 10h18\" />
                </svg>
              </a>

              <a class=\"nav-btn next\" href=\"";
        // line 724
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard", ["month" => (isset($context["nextMonth"]) || array_key_exists("nextMonth", $context) ? $context["nextMonth"] : (function () { throw new RuntimeError('Variable "nextMonth" does not exist.', 724, $this->source); })()), "year" => (isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 724, $this->source); })())]), "html", null, true);
        yield "\" title=\"Next month\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M9 18l6-6-6-6\" />
                </svg>
              </a>
            </div>
          </div>

          <div class=\"calendar-grid\">
            ";
        // line 733
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]);
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 734
            yield "              <div class=\"weekday\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        yield "
            ";
        // line 737
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ((isset($context["firstDayOfMonth"]) || array_key_exists("firstDayOfMonth", $context) ? $context["firstDayOfMonth"] : (function () { throw new RuntimeError('Variable "firstDayOfMonth" does not exist.', 737, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 738
            yield "              <div></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 740
        yield "
            ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["daysInMonth"]) || array_key_exists("daysInMonth", $context) ? $context["daysInMonth"] : (function () { throw new RuntimeError('Variable "daysInMonth" does not exist.', 741, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 742
            yield "              ";
            $context["isToday"] = ((($context["day"] == CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "format", ["j"], "method", false, false, false, 742)) && ((isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 742, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "format", ["n"], "method", false, false, false, 742))) && ((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 742, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "format", ["Y"], "method", false, false, false, 742)));
            // line 743
            yield "              <div class=\"day ";
            yield (((($tmp = (isset($context["isToday"]) || array_key_exists("isToday", $context) ? $context["isToday"] : (function () { throw new RuntimeError('Variable "isToday" does not exist.', 743, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("today") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 745
        yield "          </div>
        </section>

        <section class=\"card card-pad\" style=\"margin-top:16px;\">
          <div class=\"section-title\">Overview</div>
          <div class=\"overview-grid\">
            <div class=\"overview-kpi\">
              <span>Total</span>
              <strong>";
        // line 753
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 753, $this->source); })()), "users", [], "any", false, false, false, 753), "html", null, true);
        yield "</strong>
            </div>
            <div class=\"overview-kpi\">
              <span>Active</span>
              <strong>";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 757, $this->source); })()), "active_users", [], "any", false, false, false, 757), "html", null, true);
        yield "</strong>
            </div>
            <div class=\"overview-kpi\">
              <span>New 7d</span>
              <strong>";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 761, $this->source); })()), "recent_users", [], "any", false, false, false, 761), "html", null, true);
        yield "</strong>
            </div>
            <div class=\"overview-kpi\">
              <span>Dormant</span>
              <strong>";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 765, $this->source); })()), "dormant_users", [], "any", false, false, false, 765), "html", null, true);
        yield "</strong>
            </div>
          </div>

          <div class=\"overview-alerts\">
            ";
        // line 770
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 770, $this->source); })()), "without_role", [], "any", false, false, false, 770) > 0)) {
            // line 771
            yield "              <div class=\"alert-box warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 771, $this->source); })()), "without_role", [], "any", false, false, false, 771), "html", null, true);
            yield "
                user(s) without role</div>
            ";
        }
        // line 774
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 774, $this->source); })()), "incomplete_profiles", [], "any", false, false, false, 774) > 0)) {
            // line 775
            yield "              <div class=\"alert-box danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 775, $this->source); })()), "incomplete_profiles", [], "any", false, false, false, 775), "html", null, true);
            yield "
                incomplete profile(s)</div>
            ";
        }
        // line 778
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 778, $this->source); })()), "dormant_users", [], "any", false, false, false, 778) > 0)) {
            // line 779
            yield "              <div class=\"alert-box info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 779, $this->source); })()), "dormant_users", [], "any", false, false, false, 779), "html", null, true);
            yield "
                dormant account(s)</div>
            ";
        }
        // line 782
        yield "          </div>
        </section>
      </aside>

      <main class=\"dashboard-main\">
        <div class=\"topbar card\">
          <div class=\"title\">
            <strong>Dashboard</strong>
            <span>
              Welcome back,
              ";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 792, $this->source); })()), "html", null, true);
        yield "
            </span>
          </div>
          <div class=\"clock\" id=\"liveClock\">00:00:00</div>
        </div>

        <section class=\"kpi-grid\">
          <div class=\"card kpi\">
            <div class=\"label\">Total users</div>
            <div class=\"value\">";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 801, $this->source); })()), "users", [], "any", false, false, false, 801), "html", null, true);
        yield "</div>
            <div class=\"sub\">Registered accounts</div>
            <div class=\"accent-line\">
              <i style=\"width: ";
        // line 804
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 804, $this->source); })()), "users", [], "any", false, false, false, 804) / (isset($context["maxKpi"]) || array_key_exists("maxKpi", $context) ? $context["maxKpi"] : (function () { throw new RuntimeError('Variable "maxKpi" does not exist.', 804, $this->source); })())) * 100), "html", null, true);
        yield "%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Products</div>
            <div class=\"value\">";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 809, $this->source); })()), "products", [], "any", false, false, false, 809), "html", null, true);
        yield "</div>
            <div class=\"sub\">Catalog items</div>
            <div class=\"accent-line\">
              <i style=\"width: ";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 812, $this->source); })()), "products", [], "any", false, false, false, 812) / (isset($context["maxKpi"]) || array_key_exists("maxKpi", $context) ? $context["maxKpi"] : (function () { throw new RuntimeError('Variable "maxKpi" does not exist.', 812, $this->source); })())) * 100), "html", null, true);
        yield "%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Orders</div>
            <div class=\"value\">";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 817, $this->source); })()), "orders", [], "any", false, false, false, 817), "html", null, true);
        yield "</div>
            <div class=\"sub\">Sales activity</div>
            <div class=\"accent-line\">
              <i style=\"width: ";
        // line 820
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 820, $this->source); })()), "orders", [], "any", false, false, false, 820) / (isset($context["maxKpi"]) || array_key_exists("maxKpi", $context) ? $context["maxKpi"] : (function () { throw new RuntimeError('Variable "maxKpi" does not exist.', 820, $this->source); })())) * 100), "html", null, true);
        yield "%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Events</div>
            <div class=\"value\">";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 825, $this->source); })()), "events", [], "any", false, false, false, 825), "html", null, true);
        yield "</div>
            <div class=\"sub\">Upcoming sessions</div>
            <div class=\"accent-line\">
              <i style=\"width: ";
        // line 828
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 828, $this->source); })()), "events", [], "any", false, false, false, 828) / (isset($context["maxKpi"]) || array_key_exists("maxKpi", $context) ? $context["maxKpi"] : (function () { throw new RuntimeError('Variable "maxKpi" does not exist.', 828, $this->source); })())) * 100), "html", null, true);
        yield "%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Articles</div>
            <div class=\"value\">";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 833, $this->source); })()), "articles", [], "any", false, false, false, 833), "html", null, true);
        yield "</div>
            <div class=\"sub\">Blog posts</div>
            <div class=\"accent-line\">
              <i style=\"width: ";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 836, $this->source); })()), "articles", [], "any", false, false, false, 836) / (isset($context["maxKpi"]) || array_key_exists("maxKpi", $context) ? $context["maxKpi"] : (function () { throw new RuntimeError('Variable "maxKpi" does not exist.', 836, $this->source); })())) * 100), "html", null, true);
        yield "%\"></i>
            </div>
          </div>
        </section>

        <div id=\"dynamicContent\" class=\"card\" style=\"padding:20px; margin-top:16px;\"></div>
      </main>

      <aside class=\"dashboard-rightbar\">
        <div class=\"card\" style=\"padding:18px;\">
          <div style=\"display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;\">
            <div class=\"profile-head\">
              <div class=\"avatar\">
                <span>";
        // line 849
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarLetter"]) || array_key_exists("avatarLetter", $context) ? $context["avatarLetter"] : (function () { throw new RuntimeError('Variable "avatarLetter" does not exist.', 849, $this->source); })()), "html", null, true);
        yield "</span>
              </div>
              <div class=\"profile-meta\">
                <strong>";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 852, $this->source); })()), "html", null, true);
        yield "</strong>
                <span>";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayRole"]) || array_key_exists("displayRole", $context) ? $context["displayRole"] : (function () { throw new RuntimeError('Variable "displayRole" does not exist.', 853, $this->source); })()), "html", null, true);
        yield "</span>
              </div>
            </div>

            <div class=\"profile-menu-wrap\">
              <button class=\"icon-btn\" id=\"menuBtn\">☰</button>
              <div class=\"profile-menu\" id=\"menu\">
                <a href=\"#\" onclick=\"openProfileModal(); return false;\">
                  Profile
                  <span>›</span>
                </a>
                <a href=\"";
        // line 864
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  Logout
                  <span>↩</span>
                </a>
              </div>
            </div>
          </div>

          <div class=\"section-card\" style=\"margin-top:14px;\">
            <div class=\"section-title\">
              <strong>Shortcuts</strong>
            </div>

            <div class=\"quick-icons\">
              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('users'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <circle cx=\"12\" cy=\"7\" r=\"4\" />
                  <path d=\"M4 20c1.8-3.5 5-5 8-5s6.2 1.5 8 5\" />
                </svg>
                <span>Users</span>
              </a>

              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('products'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M4 7h16v13H4z\" />
                  <path d=\"M8 7V5a4 4 0 0 1 8 0v2\" />
                </svg>
                <span>Products</span>
              </a>

              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('orders'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <rect x=\"4\" y=\"5\" width=\"16\" height=\"14\" rx=\"3\" />
                  <path d=\"M8 9h8M8 13h5\" />
                </svg>
                <span>Orders</span>
              </a>

              <a href=\"/evenement/\" class=\"quick-icon\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <rect x=\"3\" y=\"5\" width=\"18\" height=\"16\" rx=\"3\" />
                  <path d=\"M8 3v4M16 3v4M3 10h18\" />
                </svg>
                <span>Events</span>
              </a>

              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('article'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M4 4h16v16H4z\" />
                  <path d=\"M8 8h8M8 12h8M8 16h5\" />
                </svg>
                <span>Article</span>
              </a>
            </div>
          </div>

          <div class=\"section-card\" style=\"margin-top:14px;\">
            <a href=\"";
        // line 921
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_report");
        yield "\" target=\"_blank\" class=\"btn-primary\" style=\"width:100%; gap:8px;\">
              <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"width:16px;height:16px;\">
                <path d=\"M6 2h9l5 5v15H6z\" />
                <path d=\"M14 2v6h6\" />
                <path d=\"M8 13h8M8 17h8M8 9h2\" />
              </svg>Report PDF
            </a>
          </div>

          <div class=\"section-card stats-vertical\" style=\"margin-top:14px;\">
            <div class=\"section-title\">
              <strong>Statistics</strong>
            </div>

            ";
        // line 935
        $context["maxStat"] = max([CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 935, $this->source); })()), "users", [], "any", false, false, false, 935), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 935, $this->source); })()), "products", [], "any", false, false, false, 935), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 935, $this->source); })()), "orders", [], "any", false, false, false, 935), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 935, $this->source); })()), "events", [], "any", false, false, false, 935), 1]);
        // line 936
        yield "
            <div class=\"vertical-bars\">
              <div class=\"v-item\">
                <div class=\"v-bar blue\" style=\"height: ";
        // line 939
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 939, $this->source); })()), "users", [], "any", false, false, false, 939) / (isset($context["maxStat"]) || array_key_exists("maxStat", $context) ? $context["maxStat"] : (function () { throw new RuntimeError('Variable "maxStat" does not exist.', 939, $this->source); })())) * 120), "html", null, true);
        yield "px\"></div>
                <span>";
        // line 940
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 940, $this->source); })()), "users", [], "any", false, false, false, 940), "html", null, true);
        yield "</span>
                <small>Users</small>
              </div>

              <div class=\"v-item\">
                <div class=\"v-bar green\" style=\"height: ";
        // line 945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 945, $this->source); })()), "products", [], "any", false, false, false, 945) / (isset($context["maxStat"]) || array_key_exists("maxStat", $context) ? $context["maxStat"] : (function () { throw new RuntimeError('Variable "maxStat" does not exist.', 945, $this->source); })())) * 120), "html", null, true);
        yield "px\"></div>
                <span>";
        // line 946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 946, $this->source); })()), "products", [], "any", false, false, false, 946), "html", null, true);
        yield "</span>
                <small>Products</small>
              </div>

              <div class=\"v-item\">
                <div class=\"v-bar orange\" style=\"height: ";
        // line 951
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 951, $this->source); })()), "orders", [], "any", false, false, false, 951) / (isset($context["maxStat"]) || array_key_exists("maxStat", $context) ? $context["maxStat"] : (function () { throw new RuntimeError('Variable "maxStat" does not exist.', 951, $this->source); })())) * 120), "html", null, true);
        yield "px\"></div>
                <span>";
        // line 952
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 952, $this->source); })()), "orders", [], "any", false, false, false, 952), "html", null, true);
        yield "</span>
                <small>Orders</small>
              </div>

              <div class=\"v-item\">
                <div class=\"v-bar purple\" style=\"height: ";
        // line 957
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 957, $this->source); })()), "events", [], "any", false, false, false, 957) / (isset($context["maxStat"]) || array_key_exists("maxStat", $context) ? $context["maxStat"] : (function () { throw new RuntimeError('Variable "maxStat" does not exist.', 957, $this->source); })())) * 120), "html", null, true);
        yield "px\"></div>
                <span>";
        // line 958
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 958, $this->source); })()), "events", [], "any", false, false, false, 958), "html", null, true);
        yield "</span>
                <small>Events</small>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>

  <div id=\"profileModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeProfileModal()\"></div>

    <div class=\"modal-card\">
      <div class=\"modal-header\">
        <h3>My Profile</h3>
        <button type=\"button\" class=\"modal-close\" onclick=\"closeProfileModal()\">×</button>
      </div>

      <div class=\"modal-body\">
        <div class=\"profile-summary\">
          <div class=\"avatar avatar-lg\">
            <span>";
        // line 980
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarLetter"]) || array_key_exists("avatarLetter", $context) ? $context["avatarLetter"] : (function () { throw new RuntimeError('Variable "avatarLetter" does not exist.', 980, $this->source); })()), "html", null, true);
        yield "</span>
          </div>
          <div>
            <div style=\"font-weight:800; font-size:18px;\">";
        // line 983
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 983, $this->source); })()), "html", null, true);
        yield "</div>
            <div style=\"color:#667085;\">";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayRole"]) || array_key_exists("displayRole", $context) ? $context["displayRole"] : (function () { throw new RuntimeError('Variable "displayRole" does not exist.', 984, $this->source); })()), "html", null, true);
        yield "</div>
          </div>
        </div>

        <div id=\"profileViewBox\">
          <div class=\"profile-field\">
            <strong>Email:</strong>
            ";
        // line 991
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "email", [], "any", true, true, false, 991) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 991, $this->source); })()), "email", [], "any", false, false, false, 991)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 991, $this->source); })()), "email", [], "any", false, false, false, 991), "html", null, true)) : ("-"));
        yield "
          </div>
          <div class=\"profile-field\">
            <strong>Phone:</strong>
            ";
        // line 995
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "telephone", [], "any", true, true, false, 995) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 995, $this->source); })()), "telephone", [], "any", false, false, false, 995)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 995, $this->source); })()), "telephone", [], "any", false, false, false, 995), "html", null, true)) : ("-"));
        yield "
          </div>
          <div class=\"profile-field\">
            <strong>Address:</strong>
            ";
        // line 999
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "adresse", [], "any", true, true, false, 999) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 999, $this->source); })()), "adresse", [], "any", false, false, false, 999)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 999, $this->source); })()), "adresse", [], "any", false, false, false, 999), "html", null, true)) : ("-"));
        yield "
          </div>
          <div class=\"profile-field\">
            <strong>Status:</strong>
            ";
        // line 1003
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "statut", [], "any", true, true, false, 1003) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1003, $this->source); })()), "statut", [], "any", false, false, false, 1003)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1003, $this->source); })()), "statut", [], "any", false, false, false, 1003), "html", null, true)) : ("-"));
        yield "
          </div>
        </div>

        <form id=\"profileEditForm\" method=\"POST\" action=\"";
        // line 1007
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_update");
        yield "\" style=\"display:none;\">
          <div class=\"form-grid\">
            <div class=\"field\">
              <label>First name</label>
              <input type=\"text\" name=\"prenom\" value=\"";
        // line 1011
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "prenom", [], "any", true, true, false, 1011) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1011, $this->source); })()), "prenom", [], "any", false, false, false, 1011)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1011, $this->source); })()), "prenom", [], "any", false, false, false, 1011), "html", null, true)) : (""));
        yield "\" required minlength=\"2\" maxlength=\"50\" />
            </div>

            <div class=\"field\">
              <label>Last name</label>
              <input type=\"text\" name=\"nom\" value=\"";
        // line 1016
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "nom", [], "any", true, true, false, 1016) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1016, $this->source); })()), "nom", [], "any", false, false, false, 1016)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1016, $this->source); })()), "nom", [], "any", false, false, false, 1016), "html", null, true)) : (""));
        yield "\" required minlength=\"2\" maxlength=\"50\" />
            </div>

            <div class=\"field full\">
              <label>Email</label>
              <input type=\"email\" name=\"email\" value=\"";
        // line 1021
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "email", [], "any", true, true, false, 1021) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1021, $this->source); })()), "email", [], "any", false, false, false, 1021)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1021, $this->source); })()), "email", [], "any", false, false, false, 1021), "html", null, true)) : (""));
        yield "\" required maxlength=\"100\" />
            </div>

            <div class=\"field\">
              <label>Phone</label>
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 1026
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "telephone", [], "any", true, true, false, 1026) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1026, $this->source); })()), "telephone", [], "any", false, false, false, 1026)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1026, $this->source); })()), "telephone", [], "any", false, false, false, 1026), "html", null, true)) : (""));
        yield "\" maxlength=\"20\" inputmode=\"tel\" autocomplete=\"tel\" />
            </div>

            <div class=\"field full\">
              <label>Address</label>
              <input type=\"text\" name=\"adresse\" value=\"";
        // line 1031
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["auth"] ?? null), "adresse", [], "any", true, true, false, 1031) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1031, $this->source); })()), "adresse", [], "any", false, false, false, 1031)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auth"]) || array_key_exists("auth", $context) ? $context["auth"] : (function () { throw new RuntimeError('Variable "auth" does not exist.', 1031, $this->source); })()), "adresse", [], "any", false, false, false, 1031), "html", null, true)) : (""));
        yield "\" maxlength=\"255\" autocomplete=\"street-address\" />
            </div>

            <div class=\"field full\">
              <label>Current password</label>
              <input type=\"password\" name=\"current_password\" minlength=\"6\" autocomplete=\"current-password\" />
            </div>

            <div class=\"field\">
              <label>New password</label>
              <input type=\"password\" name=\"new_password\" minlength=\"8\" autocomplete=\"new-password\" />
            </div>

            <div class=\"field\">
              <label>Confirm password</label>
              <input type=\"password\" name=\"confirm_password\" minlength=\"8\" autocomplete=\"new-password\" />
            </div>
          </div>

          <div class=\"field full\">
            <label>Role</label>
            <input type=\"text\" value=\"";
        // line 1052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["displayRole"]) || array_key_exists("displayRole", $context) ? $context["displayRole"] : (function () { throw new RuntimeError('Variable "displayRole" does not exist.', 1052, $this->source); })()), "html", null, true);
        yield "\" readonly />
          </div>

          <div class=\"modal-actions\" style=\"padding:18px 0 0; justify-content:flex-end;\">
            <button type=\"submit\" class=\"btn-primary\">Save changes</button>
          </div>
        </form>
      </div>

      <div class=\"modal-actions modal-footer\">
        <button type=\"button\" class=\"btn-secondary\" id=\"profileEditBtn\" onclick=\"toggleProfileEdit()\">Edit</button>
        <a class=\"btn-danger\" href=\"";
        // line 1063
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
      </div>
    </div>
  </div>

  <script>
    const LOAD_URL = \"";
        // line 1069
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_load");
        yield "\"
    const liveClock = document.getElementById('liveClock')
    let currentView = null
    let currentSearch = ''
    let currentSort = 'id'
    let currentDir = 'ASC'
    
    function updateClock() {
      const now = new Date()
      liveClock.textContent = now.toLocaleTimeString([], {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
      })
    }
    
    updateClock()
    setInterval(updateClock, 1000)
    
    function initMenu() {
      const btn = document.getElementById('menuBtn')
      const menu = document.getElementById('menu')
    
      if (!btn || !menu) return
    
      btn.addEventListener('click', (e) => {
        e.stopPropagation()
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block'
      })
    
      document.addEventListener('click', () => {
        menu.style.display = 'none'
      })
    }
    
    function loadView(view, page = 1, search = '', sort = currentSort, dir = currentDir) {
      const container = document.getElementById('dynamicContent')
      currentSearch = search ?? ''
      currentSort = sort ?? 'id'
      currentDir = dir ?? 'ASC'
    
      fetch(`\${LOAD_URL}?view=\${encodeURIComponent(view)}&page=\${encodeURIComponent(page)}&search=\${encodeURIComponent(currentSearch)}&sort=\${encodeURIComponent(currentSort)}&dir=\${encodeURIComponent(currentDir)}`)
        .then((res) => {
          if (res.status === 401) {
            window.location.href = \"";
        // line 1113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"
            return null
          }
          return res.text()
        })
        .then((html) => {
          if (html === null) return
          container.innerHTML = html
          container.style.display = 'block'
          currentView = view
        })
        .catch(() => {
          container.innerHTML = '<p style=\"padding:12px; color:#b91c1c;\">Failed to load content.</p>'
          container.style.display = 'block'
        })
    }
    
    function toggleView(view) {
      const container = document.getElementById('dynamicContent')
    
      if (currentView === view && container.style.display === 'block') {
        container.innerHTML = ''
        container.style.display = 'none'
        currentView = null
        return
      }
    
      if (view === 'users') {
        loadView('users', 1, currentSearch, currentSort, currentDir)
      } else {
        loadView(view)
      }
    }
    
    function submitUsersSearch(form) {
      const search = form.search.value.trim()
      loadView('users', 1, search, currentSort, currentDir)
      return false
    }
    
    function goToUsersPage(page) {
      const safePage = Math.max(1, parseInt(page, 10) || 1)
      loadView('users', safePage, currentSearch, currentSort, currentDir)
    }
    
    function toggleSort(sortKey) {
      const nextDir = currentSort === sortKey && currentDir === 'ASC' ? 'DESC' : 'ASC'
      loadView('users', 1, currentSearch, sortKey, nextDir)
    }
    
    function openProfileModal() {
      document.getElementById('profileModal').classList.add('open')
      document.getElementById('profileViewBox').style.display = 'block'
      document.getElementById('profileEditForm').style.display = 'none'
      document.getElementById('profileEditBtn').textContent = 'Edit'
    }
    
    function closeProfileModal() {
      document.getElementById('profileModal').classList.remove('open')
    }
    
    function toggleProfileEdit() {
      const view = document.getElementById('profileViewBox')
      const form = document.getElementById('profileEditForm')
      const btn = document.getElementById('profileEditBtn')
      const editing = form.style.display === 'block'
    
      form.style.display = editing ? 'none' : 'block'
      view.style.display = editing ? 'block' : 'none'
      btn.textContent = editing ? 'Edit' : 'Back'
    }
    
    function openUserCreateModal() {
      const modal = document.getElementById('userModal')
      const form = document.getElementById('userForm')
      document.getElementById('userModalTitle').textContent = 'Add user'
      form.action = \"";
        // line 1189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_store");
        yield "\"
      form.reset()
      document.getElementById('user_password').required = true
      modal.classList.add('open')
    }
    
    function openUserEditModal(user) {
      const modal = document.getElementById('userModal')
      const form = document.getElementById('userForm')
      document.getElementById('userModalTitle').textContent = 'Edit user'
      form.action = \"";
        // line 1199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update");
        yield "\"
    
      document.getElementById('user_id').value = user.id_user || ''
      document.getElementById('user_prenom').value = user.prenom || ''
      document.getElementById('user_nom').value = user.nom || ''
      document.getElementById('user_email').value = user.email || ''
      document.getElementById('user_telephone').value = user.telephone || ''
      document.getElementById('user_adresse').value = user.adresse || ''
      document.getElementById('user_statut').value = user.statut || 'actif'
      document.getElementById('user_role').value = user.id_role || ''
      document.getElementById('user_password').required = false
      document.getElementById('user_password').value = ''
    
      modal.classList.add('open')
    }
    
    function closeUserModal() {
      document.getElementById('userModal').classList.remove('open')
    }
    
    function deleteUser(id) {
      if (!confirm('Delete this user?')) return
      window.location.href = \"";
        // line 1221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => 0]);
        yield "\".replace('/0', '/' + id)
    }
    
    document.addEventListener('DOMContentLoaded', () => {
      initMenu()
      const params = new URLSearchParams(window.location.search)
      if (params.get('view')) toggleView(params.get('view'))
    
      const container = document.getElementById('dynamicContent')
    
      container.addEventListener('click', (e) => {
        const sortBtn = e.target.closest('[data-sort]')
        if (sortBtn) {
          e.preventDefault()
          toggleSort(sortBtn.dataset.sort)
          return
        }
    
        const btn = e.target.closest('[data-page]')
        if (!btn) return
    
        e.preventDefault()
        goToUsersPage(btn.dataset.page)
      })
    
      container.addEventListener('submit', (e) => {
        const form = e.target
    
        if (form.classList.contains('users-search-form')) {
          e.preventDefault()
          submitUsersSearch(form)
          return
        }
    
        if (form.classList.contains('users-page-form')) {
          e.preventDefault()
          const input = form.querySelector('input[name=\"page\"]')
          goToUsersPage(input ? input.value : 1)
        }
      })
    })
  </script>

  <div id=\"userModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeUserModal()\"></div>

    <div class=\"modal-card\">
      <div class=\"modal-header\">
        <h3 id=\"userModalTitle\">Add user</h3>
        <button type=\"button\" class=\"modal-close\" onclick=\"closeUserModal()\">×</button>
      </div>

      <div class=\"modal-body\">
        <form id=\"userForm\" method=\"POST\" action=\"";
        // line 1274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_store");
        yield "\">
          <input type=\"hidden\" name=\"id_user\" id=\"user_id\" />

          <div class=\"form-grid\">
            <div class=\"field\">
              <label>First name</label>
              <input type=\"text\" name=\"prenom\" id=\"user_prenom\" required minlength=\"2\" maxlength=\"50\" />
            </div>
            <div class=\"field\">
              <label>Last name</label>
              <input type=\"text\" name=\"nom\" id=\"user_nom\" required minlength=\"2\" maxlength=\"50\" />
            </div>
            <div class=\"field full\">
              <label>Email</label>
              <input type=\"email\" name=\"email\" id=\"user_email\" required maxlength=\"100\" />
            </div>
            <div class=\"field\">
              <label>Password</label>
              <input type=\"password\" name=\"password\" id=\"user_password\" minlength=\"8\" maxlength=\"100\" />
            </div>
            <div class=\"field\">
              <label>Phone</label>
              <input type=\"tel\" name=\"telephone\" id=\"user_telephone\" maxlength=\"20\" inputmode=\"tel\" autocomplete=\"tel\" placeholder=\"+216 00 000 000\" />
            </div>
            <div class=\"field full\">
              <label>Address</label>
              <input type=\"text\" name=\"adresse\" id=\"user_adresse\" maxlength=\"255\" autocomplete=\"street-address\" placeholder=\"Street, city, country\" />
            </div>
            <div class=\"field full\">
              <label>Status</label>
              <input type=\"text\" name=\"statut\" id=\"user_statut\" maxlength=\"20\" value=\"actif\" />
            </div>
            <div class=\"field full\">
              <label>Role</label>
              <select name=\"id_role\" id=\"user_role\">
                <option value=\"\">No role</option>
                ";
        // line 1310
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((((array_key_exists("roles", $context) &&  !(null === $context["roles"]))) ? ($context["roles"]) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 1311
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id_role", [], "any", false, false, false, 1311), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "nom_role", [], "any", false, false, false, 1311), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1313
        yield "              </select>
            </div>
          </div>

          <div class=\"modal-actions\" style=\"padding:0; margin-top:16px;\">
            <button type=\"submit\" class=\"btn-primary\">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  1652 => 1313,  1641 => 1311,  1637 => 1310,  1598 => 1274,  1542 => 1221,  1517 => 1199,  1504 => 1189,  1425 => 1113,  1378 => 1069,  1369 => 1063,  1355 => 1052,  1331 => 1031,  1323 => 1026,  1315 => 1021,  1307 => 1016,  1299 => 1011,  1292 => 1007,  1285 => 1003,  1278 => 999,  1271 => 995,  1264 => 991,  1254 => 984,  1250 => 983,  1244 => 980,  1219 => 958,  1215 => 957,  1207 => 952,  1203 => 951,  1195 => 946,  1191 => 945,  1183 => 940,  1179 => 939,  1174 => 936,  1172 => 935,  1155 => 921,  1095 => 864,  1081 => 853,  1077 => 852,  1071 => 849,  1055 => 836,  1049 => 833,  1041 => 828,  1035 => 825,  1027 => 820,  1021 => 817,  1013 => 812,  1007 => 809,  999 => 804,  993 => 801,  981 => 792,  969 => 782,  962 => 779,  959 => 778,  952 => 775,  949 => 774,  942 => 771,  940 => 770,  932 => 765,  925 => 761,  918 => 757,  911 => 753,  901 => 745,  890 => 743,  887 => 742,  883 => 741,  880 => 740,  873 => 738,  869 => 737,  866 => 736,  857 => 734,  853 => 733,  841 => 724,  831 => 717,  822 => 711,  816 => 708,  803 => 697,  800 => 696,  797 => 695,  794 => 694,  791 => 693,  789 => 692,  105 => 10,  95 => 9,  78 => 7,  69 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  BizCore Dashboard
{% endblock %}

{% block page_title %}GESTION UTILISATEURS{% endblock %}

{% block body %}
  <style>
    :root {
      --bg-page: #d1d1ff;
      --bg-app: #ffffff;
      --bg-card: #f6f7fb;
      --text-main: #111827;
      --text-soft: #667085;
      --line: #e5e7ef;
      --accent: #5b7cff;
      --shadow: 0 26px 70px rgba(17, 24, 39, 0.14);
    }
    
    .dashboard-shell *,
    .dashboard-shell *::before,
    .dashboard-shell *::after {
      box-sizing: border-box;
    }
    .dashboard-shell a {
      color: inherit;
      text-decoration: none;
    }
    .dashboard-shell {
      padding: 16px;
      display: flex;
      align-items: flex-start;
      justify-content: center;
    }
    .dashboard-app {
      width: 100%;
      background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
      border-radius: 28px;
      box-shadow: var(--shadow);
      display: grid;
      grid-template-columns: 300px minmax(0, 1fr) 350px;
      overflow: hidden;
    }
    .dashboard-sidebar,
    .dashboard-main,
    .dashboard-rightbar {
      padding: 20px;
    }
    .dashboard-main {
      border-left: 1px solid var(--line);
      border-right: 1px solid var(--line);
      background: linear-gradient(180deg, #ffffff 0%, #fafbff 100%);
    }
    .card {
      background: var(--bg-app);
      border: 1px solid var(--line);
      border-radius: 22px;
      box-shadow: 0 10px 28px rgba(17, 24, 39, 0.04);
    }
    .card-pad {
      padding: 18px;
    }
    .section-title {
      margin: 0 0 14px;
      font-size: 14px;
      letter-spacing: 0.08em;
      color: var(--text-soft);
    }
    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 18px;
    }
    .brand strong {
      display: block;
      font-size: 22px;
    }
    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 16px 18px;
      margin-bottom: 16px;
    }
    .topbar .title strong {
      font-size: 20px;
      display: block;
    }
    .topbar .title span {
      color: var(--text-soft);
      font-size: 12px;
    }
    .clock {
      padding: 10px 14px;
      border-radius: 14px;
      background: #f2f4fb;
      font-weight: 800;
      letter-spacing: 0.04em;
    }
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
      margin-bottom: 16px;
    }
    .kpi {
      padding: 18px;
      min-height: 118px;
    }
    .kpi .label {
      color: var(--text-soft);
      font-size: 12px;
    }
    .kpi .value {
      margin-top: 12px;
      font-size: 28px;
      font-weight: 800;
      letter-spacing: -0.04em;
    }
    .kpi .sub {
      margin-top: 6px;
      font-size: 12px;
      color: var(--text-soft);
    }
    .kpi .accent-line {
      height: 4px;
      border-radius: 999px;
      background: #edf1f8;
      margin-top: 14px;
      overflow: hidden;
    }
    .kpi .accent-line i {
      display: block;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, #25c18f, #51a9ff);
    }
    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
    }
    .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 6px;
    }
    .weekday {
      text-align: center;
      font-size: 11px;
      color: var(--text-soft);
    }
    .day {
      aspect-ratio: 1;
      border-radius: 12px;
      display: grid;
      place-items: center;
      font-size: 12px;
      background: #f6f7fb;
    }
    .day.today {
      border: 2px solid #5b7cff;
      font-weight: bold;
    }
    .profile-head {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .profile-meta strong {
      display: block;
      font-size: 14px;
    }
    .profile-meta span {
      font-size: 12px;
      color: var(--text-soft);
    }
    .icon-btn {
      width: 40px;
      height: 40px;
      border-radius: 14px;
      border: 1px solid var(--line);
      background: #f6f7fb;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: linear-gradient(135deg, #ffb199, #ff6a88);
      display: grid;
      place-items: center;
      flex: 0 0 auto;
    }
    .avatar span {
      color: #fff;
      font-weight: 800;
      font-size: 18px;
      line-height: 1;
    }
    .avatar-lg {
      width: 72px;
      height: 72px;
    }
    .avatar-lg span {
      font-size: 28px;
    }
    .profile-menu-wrap {
      position: relative;
    }
    .profile-menu {
      position: absolute;
      top: 45px;
      right: 0;
      width: 180px;
      background: white;
      border: 1px solid var(--line);
      border-radius: 14px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      display: none;
    }
    .profile-menu a,
    .profile-menu button {
      width: 100%;
      padding: 10px 12px;
      border: none;
      background: transparent;
      display: flex;
      justify-content: space-between;
      cursor: pointer;
      font-size: 13px;
    }
    .profile-menu a:hover,
    .profile-menu button:hover {
      background: #f5f7ff;
    }
    .section-card {
      padding: 14px;
      border-radius: 20px;
      background: var(--bg-app);
      border: 1px solid var(--line);
    }
    .quick-icons {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
      margin-top: 8px;
    }
    .quick-icon {
      height: 65px;
      border-radius: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 4px;
      background: #f4f6ff;
      border: 1px solid var(--line);
      transition: 0.2s ease;
      font-size: 11px;
      color: var(--text-soft);
    }
    .quick-icon:hover {
      transform: translateY(-4px);
      background: #eef2ff;
      color: var(--text-main);
    }
    .quick-icon.active {
      background: #5b7cff;
      color: white;
    }
    .overview-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
    }
    .overview-kpi {
      padding: 12px;
      border-radius: 16px;
      background: #fafbff;
      border: 1px solid #e5e7ef;
    }
    .overview-kpi span {
      display: block;
      font-size: 11px;
      color: #667085;
      margin-bottom: 6px;
    }
    .overview-kpi strong {
      font-size: 20px;
    }
    .overview-alerts {
      margin-top: 12px;
      display: grid;
      gap: 8px;
    }
    .alert-box {
      padding: 10px 12px;
      border-radius: 14px;
      font-size: 12px;
      font-weight: 700;
    }
    .alert-box.warning {
      background: #fff7e6;
      color: #9a6700;
      border: 1px solid #ffd88a;
    }
    .alert-box.danger {
      background: #fee2e2;
      color: #991b1b;
      border: 1px solid #fca5a5;
    }
    .alert-box.info {
      background: #e0f2fe;
      color: #075985;
      border: 1px solid #7dd3fc;
    }
    .modal {
      position: fixed;
      inset: 0;
      display: none;
      z-index: 10000;
    }
    .modal.open {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(17, 24, 39, 0.45);
      backdrop-filter: blur(3px);
      z-index: 10000;
    }
    .modal-card {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: min(760px, calc(100% - 24px));
      max-height: calc(100vh - 24px);
      z-index: 10001;
      background: #fff;
      border-radius: 24px;
      overflow: auto;
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.22);
    }
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 18px 20px;
      border-bottom: 1px solid #e5e7ef;
    }
    .modal-body {
      padding: 20px;
    }
    .modal-close {
      border: 0;
      background: #f4f6ff;
      width: 36px;
      height: 36px;
      border-radius: 12px;
      cursor: pointer;
      font-size: 22px;
      line-height: 1;
    }
    .profile-summary {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 18px;
    }
    .profile-field {
      padding: 10px 12px;
      background: #fafbff;
      border: 1px solid #e5e7ef;
      border-radius: 14px;
      margin-bottom: 10px;
    }
    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .field.full {
      grid-column: 1 / -1;
    }
    .field input,
    .field select {
      padding: 11px 12px;
      border-radius: 12px;
      border: 1px solid #d7ddf2;
      outline: none;
      background: #fff;
    }
    .field input:focus,
    .field select:focus {
      border-color: #5b7cff;
      box-shadow: 0 0 0 3px rgba(91, 124, 255, 0.12);
    }
    .modal-actions {
      display: flex;
      gap: 10px;
      padding: 0 20px 20px;
    }
    .modal-footer {
      border-top: 1px solid #e5e7ef;
      padding-top: 16px;
    }
    .btn-primary,
    .btn-secondary,
    .btn-danger {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
      padding: 10px 14px;
      font-weight: 700;
      text-decoration: none;
      border: 0;
      cursor: pointer;
    }
    .btn-primary {
      background: #5b7cff;
      color: #fff;
    }
    .btn-secondary {
      background: #eef2ff;
      color: #111827;
    }
    .btn-danger {
      background: #fee2e2;
      color: #991b1b;
    }
    .users-table-wrap {
      width: 100%;
      overflow-x: auto;
    }
    .users-toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 14px;
    }
    .users-search {
      display: flex;
      align-items: center;
      gap: 10px;
      flex: 1;
      min-width: 240px;
    }
    .users-search input {
      width: 100%;
      padding: 10px 12px;
      border-radius: 10px;
      border: 1px solid #ddd;
      outline: none;
      font-size: 13px;
      background: #fff;
    }
    .users-search input:focus {
      border-color: #5b7cff;
      box-shadow: 0 0 0 3px rgba(91, 124, 255, 0.12);
    }
    .users-table {
      width: 100%;
      min-width: 1020px;
      border-collapse: collapse;
      font-size: 13px;
      table-layout: fixed;
      border-radius: 12px;
      overflow: hidden;
    }
    .users-table th,
    .users-table td {
      padding: 11px 10px;
      border-bottom: 1px solid #eee;
      vertical-align: middle;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      text-align: left;
    }
    .users-badge {
      display: inline-block;
      padding: 4px 8px;
      border-radius: 999px;
      background: #eef2ff;
      font-size: 11px;
    }
    .pagination {
      margin-top: 16px;
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .page-btn {
      border: 1px solid #d7ddf2;
      background: #fff;
      color: #111827;
      padding: 8px 11px;
      border-radius: 10px;
      cursor: pointer;
      font-size: 13px;
      transition: 0.15s ease;
    }
    .page-btn:hover {
      background: #f5f7ff;
      transform: translateY(-1px);
    }
    .page-input {
      width: 70px;
      padding: 8px 10px;
      border-radius: 10px;
      border: 1px solid #ddd;
    }
    
    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }
    
    .calendar-nav {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .nav-btn {
      width: 34px;
      height: 34px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      background: #f6f7fb;
      border: 1px solid var(--line);
      color: var(--text-main);
      padding: 0;
      flex: 0 0 auto;
    }
    
    .nav-btn svg {
      width: 18px;
      height: 18px;
    }
    
    .nav-btn:hover {
      background: #eef2ff;
    }
    
    .quick-icons {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
      margin-top: 8px;
    }
    
    .quick-icon {
      height: 56px;
      border-radius: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 3px;
      background: #f4f6ff;
      border: 1px solid var(--line);
      transition: 0.2s ease;
      font-size: 10px;
      color: var(--text-soft);
    }
    
    .quick-icon svg {
      width: 16px;
      height: 16px;
    }
    
    .quick-icon:hover {
      transform: translateY(-3px);
      background: #eef2ff;
      color: var(--text-main);
    }
    
    .stats-vertical {
      margin-top: 14px;
    }
    
    .vertical-bars {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      gap: 14px;
      height: 150px;
      margin-top: 12px;
    }
    
    .v-item {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      gap: 6px;
      height: 100%;
    }
    
    .v-bar {
      width: 12px;
      border-radius: 999px;
      min-height: 8px;
    }
    
    .v-bar.blue {
      background: #5b7cff;
    }
    
    .v-bar.green {
      background: #25c18f;
    }
    
    .v-bar.orange {
      background: #ff9800;
    }
    
    .v-bar.purple {
      background: #8b5cf6;
    }
    
    .v-item span {
      font-size: 11px;
      font-weight: 700;
    }
    
    .v-item small {
      font-size: 10px;
      color: var(--text-soft);
    }
    
    @media (max-width: 1280px) {
      .dashboard-app {
        grid-template-columns: 1fr;
      }
      .dashboard-main {
        border-left: 0;
        border-right: 0;
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
      }
      .kpi-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 720px) {
      .dashboard-shell {
        padding: 10px;
      }
      .dashboard-sidebar,
      .dashboard-main,
      .dashboard-rightbar {
        padding: 14px;
      }
      .kpi-grid {
        grid-template-columns: 1fr;
      }
      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

  {% set auth = authUser %}
  {% set displayName = auth ? (auth.prenom ~ ' ' ~ auth.nom)|trim:'Guest' %}
  {% set displayRole = auth and auth.roleEntity ? auth.roleEntity.nomRole : 'Visitor' %}
  {% set avatarLetter = auth ? (auth.prenom ? : auth.nom)|first|upper : 'G' %}
  {% set maxKpi = max([stats.users, stats.products, stats.orders, stats.events, stats.articles, 1]) %}

  <div class=\"dashboard-shell\">
    <div class=\"dashboard-app\">
      <aside class=\"dashboard-sidebar\">
        <div class=\"brand\">
          <strong>BiZCoRE</strong>
        </div>

        <section class=\"card card-pad\">
          <div class=\"section-title\">Calendar</div>
          <div class=\"calendar-header\">
            <span>{{ currentMonthLabel }}</span>

            <div class=\"calendar-nav\">
              <a class=\"nav-btn prev\" href=\"{{ path('dashboard', { month: prevMonth, year: prevYear }) }}\" title=\"Previous month\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M15 18l-6-6 6-6\" />
                </svg>
              </a>

              <a class=\"nav-btn today\" href=\"{{ path('dashboard') }}\" title=\"Current month\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <rect x=\"3\" y=\"5\" width=\"18\" height=\"16\" rx=\"3\" />
                  <path d=\"M8 3v4M16 3v4M3 10h18\" />
                </svg>
              </a>

              <a class=\"nav-btn next\" href=\"{{ path('dashboard', { month: nextMonth, year: nextYear }) }}\" title=\"Next month\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M9 18l6-6-6-6\" />
                </svg>
              </a>
            </div>
          </div>

          <div class=\"calendar-grid\">
            {% for d in ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] %}
              <div class=\"weekday\">{{ d }}</div>
            {% endfor %}

            {% for i in 1..firstDayOfMonth - 1 %}
              <div></div>
            {% endfor %}

            {% for day in 1..daysInMonth %}
              {% set isToday = day == date().format('j') and month == date().format('n') and year == date().format('Y') %}
              <div class=\"day {{ isToday ? 'today' : '' }}\">{{ day }}</div>
            {% endfor %}
          </div>
        </section>

        <section class=\"card card-pad\" style=\"margin-top:16px;\">
          <div class=\"section-title\">Overview</div>
          <div class=\"overview-grid\">
            <div class=\"overview-kpi\">
              <span>Total</span>
              <strong>{{ stats.users }}</strong>
            </div>
            <div class=\"overview-kpi\">
              <span>Active</span>
              <strong>{{ stats.active_users }}</strong>
            </div>
            <div class=\"overview-kpi\">
              <span>New 7d</span>
              <strong>{{ stats.recent_users }}</strong>
            </div>
            <div class=\"overview-kpi\">
              <span>Dormant</span>
              <strong>{{ stats.dormant_users }}</strong>
            </div>
          </div>

          <div class=\"overview-alerts\">
            {% if stats.without_role > 0 %}
              <div class=\"alert-box warning\">{{ stats.without_role }}
                user(s) without role</div>
            {% endif %}
            {% if stats.incomplete_profiles > 0 %}
              <div class=\"alert-box danger\">{{ stats.incomplete_profiles }}
                incomplete profile(s)</div>
            {% endif %}
            {% if stats.dormant_users > 0 %}
              <div class=\"alert-box info\">{{ stats.dormant_users }}
                dormant account(s)</div>
            {% endif %}
          </div>
        </section>
      </aside>

      <main class=\"dashboard-main\">
        <div class=\"topbar card\">
          <div class=\"title\">
            <strong>Dashboard</strong>
            <span>
              Welcome back,
              {{ displayName }}
            </span>
          </div>
          <div class=\"clock\" id=\"liveClock\">00:00:00</div>
        </div>

        <section class=\"kpi-grid\">
          <div class=\"card kpi\">
            <div class=\"label\">Total users</div>
            <div class=\"value\">{{ stats.users }}</div>
            <div class=\"sub\">Registered accounts</div>
            <div class=\"accent-line\">
              <i style=\"width: {{ stats.users / maxKpi * 100 }}%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Products</div>
            <div class=\"value\">{{ stats.products }}</div>
            <div class=\"sub\">Catalog items</div>
            <div class=\"accent-line\">
              <i style=\"width: {{ stats.products / maxKpi * 100 }}%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Orders</div>
            <div class=\"value\">{{ stats.orders }}</div>
            <div class=\"sub\">Sales activity</div>
            <div class=\"accent-line\">
              <i style=\"width: {{ stats.orders / maxKpi * 100 }}%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Events</div>
            <div class=\"value\">{{ stats.events }}</div>
            <div class=\"sub\">Upcoming sessions</div>
            <div class=\"accent-line\">
              <i style=\"width: {{ stats.events / maxKpi * 100 }}%\"></i>
            </div>
          </div>
          <div class=\"card kpi\">
            <div class=\"label\">Articles</div>
            <div class=\"value\">{{ stats.articles }}</div>
            <div class=\"sub\">Blog posts</div>
            <div class=\"accent-line\">
              <i style=\"width: {{ stats.articles / maxKpi * 100 }}%\"></i>
            </div>
          </div>
        </section>

        <div id=\"dynamicContent\" class=\"card\" style=\"padding:20px; margin-top:16px;\"></div>
      </main>

      <aside class=\"dashboard-rightbar\">
        <div class=\"card\" style=\"padding:18px;\">
          <div style=\"display:flex; align-items:center; justify-content:space-between; margin-bottom:16px;\">
            <div class=\"profile-head\">
              <div class=\"avatar\">
                <span>{{ avatarLetter }}</span>
              </div>
              <div class=\"profile-meta\">
                <strong>{{ displayName }}</strong>
                <span>{{ displayRole }}</span>
              </div>
            </div>

            <div class=\"profile-menu-wrap\">
              <button class=\"icon-btn\" id=\"menuBtn\">☰</button>
              <div class=\"profile-menu\" id=\"menu\">
                <a href=\"#\" onclick=\"openProfileModal(); return false;\">
                  Profile
                  <span>›</span>
                </a>
                <a href=\"{{ path('app_logout') }}\">
                  Logout
                  <span>↩</span>
                </a>
              </div>
            </div>
          </div>

          <div class=\"section-card\" style=\"margin-top:14px;\">
            <div class=\"section-title\">
              <strong>Shortcuts</strong>
            </div>

            <div class=\"quick-icons\">
              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('users'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <circle cx=\"12\" cy=\"7\" r=\"4\" />
                  <path d=\"M4 20c1.8-3.5 5-5 8-5s6.2 1.5 8 5\" />
                </svg>
                <span>Users</span>
              </a>

              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('products'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M4 7h16v13H4z\" />
                  <path d=\"M8 7V5a4 4 0 0 1 8 0v2\" />
                </svg>
                <span>Products</span>
              </a>

              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('orders'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <rect x=\"4\" y=\"5\" width=\"16\" height=\"14\" rx=\"3\" />
                  <path d=\"M8 9h8M8 13h5\" />
                </svg>
                <span>Orders</span>
              </a>

              <a href=\"/evenement/\" class=\"quick-icon\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <rect x=\"3\" y=\"5\" width=\"18\" height=\"16\" rx=\"3\" />
                  <path d=\"M8 3v4M16 3v4M3 10h18\" />
                </svg>
                <span>Events</span>
              </a>

              <a href=\"#\" class=\"quick-icon\" onclick=\"toggleView('article'); return false;\">
                <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path d=\"M4 4h16v16H4z\" />
                  <path d=\"M8 8h8M8 12h8M8 16h5\" />
                </svg>
                <span>Article</span>
              </a>
            </div>
          </div>

          <div class=\"section-card\" style=\"margin-top:14px;\">
            <a href=\"{{ path('dashboard_report') }}\" target=\"_blank\" class=\"btn-primary\" style=\"width:100%; gap:8px;\">
              <svg viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"width:16px;height:16px;\">
                <path d=\"M6 2h9l5 5v15H6z\" />
                <path d=\"M14 2v6h6\" />
                <path d=\"M8 13h8M8 17h8M8 9h2\" />
              </svg>Report PDF
            </a>
          </div>

          <div class=\"section-card stats-vertical\" style=\"margin-top:14px;\">
            <div class=\"section-title\">
              <strong>Statistics</strong>
            </div>

            {% set maxStat = max([stats.users, stats.products, stats.orders, stats.events, 1]) %}

            <div class=\"vertical-bars\">
              <div class=\"v-item\">
                <div class=\"v-bar blue\" style=\"height: {{ stats.users / maxStat * 120 }}px\"></div>
                <span>{{ stats.users }}</span>
                <small>Users</small>
              </div>

              <div class=\"v-item\">
                <div class=\"v-bar green\" style=\"height: {{ stats.products / maxStat * 120 }}px\"></div>
                <span>{{ stats.products }}</span>
                <small>Products</small>
              </div>

              <div class=\"v-item\">
                <div class=\"v-bar orange\" style=\"height: {{ stats.orders / maxStat * 120 }}px\"></div>
                <span>{{ stats.orders }}</span>
                <small>Orders</small>
              </div>

              <div class=\"v-item\">
                <div class=\"v-bar purple\" style=\"height: {{ stats.events / maxStat * 120 }}px\"></div>
                <span>{{ stats.events }}</span>
                <small>Events</small>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>

  <div id=\"profileModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeProfileModal()\"></div>

    <div class=\"modal-card\">
      <div class=\"modal-header\">
        <h3>My Profile</h3>
        <button type=\"button\" class=\"modal-close\" onclick=\"closeProfileModal()\">×</button>
      </div>

      <div class=\"modal-body\">
        <div class=\"profile-summary\">
          <div class=\"avatar avatar-lg\">
            <span>{{ avatarLetter }}</span>
          </div>
          <div>
            <div style=\"font-weight:800; font-size:18px;\">{{ displayName }}</div>
            <div style=\"color:#667085;\">{{ displayRole }}</div>
          </div>
        </div>

        <div id=\"profileViewBox\">
          <div class=\"profile-field\">
            <strong>Email:</strong>
            {{ auth.email ?? '-' }}
          </div>
          <div class=\"profile-field\">
            <strong>Phone:</strong>
            {{ auth.telephone ?? '-' }}
          </div>
          <div class=\"profile-field\">
            <strong>Address:</strong>
            {{ auth.adresse ?? '-' }}
          </div>
          <div class=\"profile-field\">
            <strong>Status:</strong>
            {{ auth.statut ?? '-' }}
          </div>
        </div>

        <form id=\"profileEditForm\" method=\"POST\" action=\"{{ path('profile_update') }}\" style=\"display:none;\">
          <div class=\"form-grid\">
            <div class=\"field\">
              <label>First name</label>
              <input type=\"text\" name=\"prenom\" value=\"{{ auth.prenom ?? '' }}\" required minlength=\"2\" maxlength=\"50\" />
            </div>

            <div class=\"field\">
              <label>Last name</label>
              <input type=\"text\" name=\"nom\" value=\"{{ auth.nom ?? '' }}\" required minlength=\"2\" maxlength=\"50\" />
            </div>

            <div class=\"field full\">
              <label>Email</label>
              <input type=\"email\" name=\"email\" value=\"{{ auth.email ?? '' }}\" required maxlength=\"100\" />
            </div>

            <div class=\"field\">
              <label>Phone</label>
              <input type=\"tel\" name=\"telephone\" value=\"{{ auth.telephone ?? '' }}\" maxlength=\"20\" inputmode=\"tel\" autocomplete=\"tel\" />
            </div>

            <div class=\"field full\">
              <label>Address</label>
              <input type=\"text\" name=\"adresse\" value=\"{{ auth.adresse ?? '' }}\" maxlength=\"255\" autocomplete=\"street-address\" />
            </div>

            <div class=\"field full\">
              <label>Current password</label>
              <input type=\"password\" name=\"current_password\" minlength=\"6\" autocomplete=\"current-password\" />
            </div>

            <div class=\"field\">
              <label>New password</label>
              <input type=\"password\" name=\"new_password\" minlength=\"8\" autocomplete=\"new-password\" />
            </div>

            <div class=\"field\">
              <label>Confirm password</label>
              <input type=\"password\" name=\"confirm_password\" minlength=\"8\" autocomplete=\"new-password\" />
            </div>
          </div>

          <div class=\"field full\">
            <label>Role</label>
            <input type=\"text\" value=\"{{ displayRole }}\" readonly />
          </div>

          <div class=\"modal-actions\" style=\"padding:18px 0 0; justify-content:flex-end;\">
            <button type=\"submit\" class=\"btn-primary\">Save changes</button>
          </div>
        </form>
      </div>

      <div class=\"modal-actions modal-footer\">
        <button type=\"button\" class=\"btn-secondary\" id=\"profileEditBtn\" onclick=\"toggleProfileEdit()\">Edit</button>
        <a class=\"btn-danger\" href=\"{{ path('app_logout') }}\">Logout</a>
      </div>
    </div>
  </div>

  <script>
    const LOAD_URL = \"{{ path('dashboard_load') }}\"
    const liveClock = document.getElementById('liveClock')
    let currentView = null
    let currentSearch = ''
    let currentSort = 'id'
    let currentDir = 'ASC'
    
    function updateClock() {
      const now = new Date()
      liveClock.textContent = now.toLocaleTimeString([], {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
      })
    }
    
    updateClock()
    setInterval(updateClock, 1000)
    
    function initMenu() {
      const btn = document.getElementById('menuBtn')
      const menu = document.getElementById('menu')
    
      if (!btn || !menu) return
    
      btn.addEventListener('click', (e) => {
        e.stopPropagation()
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block'
      })
    
      document.addEventListener('click', () => {
        menu.style.display = 'none'
      })
    }
    
    function loadView(view, page = 1, search = '', sort = currentSort, dir = currentDir) {
      const container = document.getElementById('dynamicContent')
      currentSearch = search ?? ''
      currentSort = sort ?? 'id'
      currentDir = dir ?? 'ASC'
    
      fetch(`\${LOAD_URL}?view=\${encodeURIComponent(view)}&page=\${encodeURIComponent(page)}&search=\${encodeURIComponent(currentSearch)}&sort=\${encodeURIComponent(currentSort)}&dir=\${encodeURIComponent(currentDir)}`)
        .then((res) => {
          if (res.status === 401) {
            window.location.href = \"{{ path('app_login') }}\"
            return null
          }
          return res.text()
        })
        .then((html) => {
          if (html === null) return
          container.innerHTML = html
          container.style.display = 'block'
          currentView = view
        })
        .catch(() => {
          container.innerHTML = '<p style=\"padding:12px; color:#b91c1c;\">Failed to load content.</p>'
          container.style.display = 'block'
        })
    }
    
    function toggleView(view) {
      const container = document.getElementById('dynamicContent')
    
      if (currentView === view && container.style.display === 'block') {
        container.innerHTML = ''
        container.style.display = 'none'
        currentView = null
        return
      }
    
      if (view === 'users') {
        loadView('users', 1, currentSearch, currentSort, currentDir)
      } else {
        loadView(view)
      }
    }
    
    function submitUsersSearch(form) {
      const search = form.search.value.trim()
      loadView('users', 1, search, currentSort, currentDir)
      return false
    }
    
    function goToUsersPage(page) {
      const safePage = Math.max(1, parseInt(page, 10) || 1)
      loadView('users', safePage, currentSearch, currentSort, currentDir)
    }
    
    function toggleSort(sortKey) {
      const nextDir = currentSort === sortKey && currentDir === 'ASC' ? 'DESC' : 'ASC'
      loadView('users', 1, currentSearch, sortKey, nextDir)
    }
    
    function openProfileModal() {
      document.getElementById('profileModal').classList.add('open')
      document.getElementById('profileViewBox').style.display = 'block'
      document.getElementById('profileEditForm').style.display = 'none'
      document.getElementById('profileEditBtn').textContent = 'Edit'
    }
    
    function closeProfileModal() {
      document.getElementById('profileModal').classList.remove('open')
    }
    
    function toggleProfileEdit() {
      const view = document.getElementById('profileViewBox')
      const form = document.getElementById('profileEditForm')
      const btn = document.getElementById('profileEditBtn')
      const editing = form.style.display === 'block'
    
      form.style.display = editing ? 'none' : 'block'
      view.style.display = editing ? 'block' : 'none'
      btn.textContent = editing ? 'Edit' : 'Back'
    }
    
    function openUserCreateModal() {
      const modal = document.getElementById('userModal')
      const form = document.getElementById('userForm')
      document.getElementById('userModalTitle').textContent = 'Add user'
      form.action = \"{{ path('user_store') }}\"
      form.reset()
      document.getElementById('user_password').required = true
      modal.classList.add('open')
    }
    
    function openUserEditModal(user) {
      const modal = document.getElementById('userModal')
      const form = document.getElementById('userForm')
      document.getElementById('userModalTitle').textContent = 'Edit user'
      form.action = \"{{ path('user_update') }}\"
    
      document.getElementById('user_id').value = user.id_user || ''
      document.getElementById('user_prenom').value = user.prenom || ''
      document.getElementById('user_nom').value = user.nom || ''
      document.getElementById('user_email').value = user.email || ''
      document.getElementById('user_telephone').value = user.telephone || ''
      document.getElementById('user_adresse').value = user.adresse || ''
      document.getElementById('user_statut').value = user.statut || 'actif'
      document.getElementById('user_role').value = user.id_role || ''
      document.getElementById('user_password').required = false
      document.getElementById('user_password').value = ''
    
      modal.classList.add('open')
    }
    
    function closeUserModal() {
      document.getElementById('userModal').classList.remove('open')
    }
    
    function deleteUser(id) {
      if (!confirm('Delete this user?')) return
      window.location.href = \"{{ path('user_delete', {id: 0}) }}\".replace('/0', '/' + id)
    }
    
    document.addEventListener('DOMContentLoaded', () => {
      initMenu()
      const params = new URLSearchParams(window.location.search)
      if (params.get('view')) toggleView(params.get('view'))
    
      const container = document.getElementById('dynamicContent')
    
      container.addEventListener('click', (e) => {
        const sortBtn = e.target.closest('[data-sort]')
        if (sortBtn) {
          e.preventDefault()
          toggleSort(sortBtn.dataset.sort)
          return
        }
    
        const btn = e.target.closest('[data-page]')
        if (!btn) return
    
        e.preventDefault()
        goToUsersPage(btn.dataset.page)
      })
    
      container.addEventListener('submit', (e) => {
        const form = e.target
    
        if (form.classList.contains('users-search-form')) {
          e.preventDefault()
          submitUsersSearch(form)
          return
        }
    
        if (form.classList.contains('users-page-form')) {
          e.preventDefault()
          const input = form.querySelector('input[name=\"page\"]')
          goToUsersPage(input ? input.value : 1)
        }
      })
    })
  </script>

  <div id=\"userModal\" class=\"modal\">
    <div class=\"modal-backdrop\" onclick=\"closeUserModal()\"></div>

    <div class=\"modal-card\">
      <div class=\"modal-header\">
        <h3 id=\"userModalTitle\">Add user</h3>
        <button type=\"button\" class=\"modal-close\" onclick=\"closeUserModal()\">×</button>
      </div>

      <div class=\"modal-body\">
        <form id=\"userForm\" method=\"POST\" action=\"{{ path('user_store') }}\">
          <input type=\"hidden\" name=\"id_user\" id=\"user_id\" />

          <div class=\"form-grid\">
            <div class=\"field\">
              <label>First name</label>
              <input type=\"text\" name=\"prenom\" id=\"user_prenom\" required minlength=\"2\" maxlength=\"50\" />
            </div>
            <div class=\"field\">
              <label>Last name</label>
              <input type=\"text\" name=\"nom\" id=\"user_nom\" required minlength=\"2\" maxlength=\"50\" />
            </div>
            <div class=\"field full\">
              <label>Email</label>
              <input type=\"email\" name=\"email\" id=\"user_email\" required maxlength=\"100\" />
            </div>
            <div class=\"field\">
              <label>Password</label>
              <input type=\"password\" name=\"password\" id=\"user_password\" minlength=\"8\" maxlength=\"100\" />
            </div>
            <div class=\"field\">
              <label>Phone</label>
              <input type=\"tel\" name=\"telephone\" id=\"user_telephone\" maxlength=\"20\" inputmode=\"tel\" autocomplete=\"tel\" placeholder=\"+216 00 000 000\" />
            </div>
            <div class=\"field full\">
              <label>Address</label>
              <input type=\"text\" name=\"adresse\" id=\"user_adresse\" maxlength=\"255\" autocomplete=\"street-address\" placeholder=\"Street, city, country\" />
            </div>
            <div class=\"field full\">
              <label>Status</label>
              <input type=\"text\" name=\"statut\" id=\"user_statut\" maxlength=\"20\" value=\"actif\" />
            </div>
            <div class=\"field full\">
              <label>Role</label>
              <select name=\"id_role\" id=\"user_role\">
                <option value=\"\">No role</option>
                {% for role in roles ?? [] %}
                  <option value=\"{{ role.id_role }}\">{{ role.nom_role }}</option>
                {% endfor %}
              </select>
            </div>
          </div>

          <div class=\"modal-actions\" style=\"padding:0; margin-top:16px;\">
            <button type=\"submit\" class=\"btn-primary\">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\MSI\\Desktop\\payment +qrcode\\bizcore\\templates\\dashboard\\index.html.twig");
    }
}
