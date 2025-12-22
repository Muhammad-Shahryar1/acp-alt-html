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

/* themes/custom/acp/templates/block--statsbox2.html.twig */
class __TwigTemplate_d4c50afd3fff4750849c202b8e5a5d4c extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"card2\" class=\"bg-white border border-gray-300 text-gray-800 p-6 rounded-md cursor-pointer hover:bg-emerald-500 hover:border-emerald-400 transition-all duration-300 h-full group\">
\t<div class=\"flex items-center justify-between mb-8\">
\t\t<div class=\"w-10 h-10\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_2\" data-name=\"Layer 2\" viewbox=\"0 0 60.12 59.67\" class=\"w-full h-full\">
\t\t\t\t<defs>
\t\t\t\t\t<style>
\t\t\t\t\t\t.cls-1 {
\t\t\t\t\t\t\tstroke: #32d2a0;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cls-1,
\t\t\t\t\t\t.cls-2 {
\t\t\t\t\t\t\tfill: none;
\t\t\t\t\t\t\tstroke-miterlimit: 10;
\t\t\t\t\t\t\tstroke-width: 3px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cls-2 {
\t\t\t\t\t\t\tstroke: #009696;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t</defs>
\t\t\t\t<g id=\"Layer_1-2\" data-name=\"Layer 1\">
\t\t\t\t\t<g>
\t\t\t\t\t\t<circle class=\"cls-2\" cx=\"10.12\" cy=\"10.12\" r=\"8.62\"/>
\t\t\t\t\t\t<circle class=\"cls-2\" cx=\"51.42\" cy=\"50.98\" r=\"7.2\"/>
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"33.67 50.98 10.12 50.98 10.12 27.43\"/>
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"27.98 10.12 51.53 10.12 51.53 33.67\"/>
\t\t\t\t\t</g>
\t\t\t\t</g>
\t\t\t</svg>
\t\t</div>
\t\t<span class=\"text-4xl text-[#44505E] font-semibold group-hover:text-white\" data-i18n=\"stats.carrierCollaborationDigit\">
\t\t\t";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_stats", [], "any", false, false, true, 34), 0, [], "any", false, false, true, 34)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_stats", [], "any", false, false, true, 34), 0, [], "any", false, false, true, 34), "#markup", [], "array", false, false, true, 34)), 0), "html", null, true);
        yield "</span>
\t</div>
\t<div>
\t\t<p class=\"font-semibold mb-6 text-lg group-hover:text-white\" data-i18n=\"stats.carrierCollaboration\">
\t\t\t";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 38), 0, [], "any", false, false, true, 38), "html", null, true);
        yield "
\t\t</p>
\t\t<p class=\"!text-sm text-[#9D9D9C] mb-6 group-hover:text-white\" data-i18n=\"stats.carrierCollaborationDesc\">

\t\t\t";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 42), 0, [], "any", false, false, true, 42), "html", null, true);
        yield "
\t\t</p>
\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/acp/templates/block--statsbox2.html.twig";
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
        return array (  93 => 42,  86 => 38,  79 => 34,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/block--statsbox2.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/block--statsbox2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 34, "number_format" => 34];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'number_format'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
