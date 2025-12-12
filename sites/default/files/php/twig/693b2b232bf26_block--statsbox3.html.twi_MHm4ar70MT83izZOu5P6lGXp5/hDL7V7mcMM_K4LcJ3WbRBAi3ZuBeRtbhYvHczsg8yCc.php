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

/* themes/custom/acp/templates/block--statsbox3.html.twig */
class __TwigTemplate_b5bbdea929c0a993b0dd296df53c1abf extends Template
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
        yield "<div id=\"card3\" class=\"bg-white border border-gray-300 text-gray-800 p-6 rounded-md cursor-pointer hover:bg-emerald-500 hover:border-emerald-400 transition-all duration-300 h-full group\">
\t<div class=\"flex items-center justify-between mb-8\">
\t\t<div class=\"w-10 h-10\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_2\" data-name=\"Layer 2\" viewbox=\"0 0 60.59 65\" class=\"w-full h-full\">
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
\t\t\t\t\t\t\tstroke: #009595;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t</defs>
\t\t\t\t<g id=\"Layer_1-2\" data-name=\"Layer 1\">
\t\t\t\t\t<g>
\t\t\t\t\t\t<polygon class=\"cls-1 group-hover:!stroke-[white]\" points=\"1.5 63.5 10.68 63.5 45.49 63.5 45.49 29.71 1.5 29.71 1.5 63.5\"/>
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"20.83 63.5 20.83 52.19 39.34 52.19 39.34 63.5\"/>
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"20.83 63.5 20.83 52.19 8.82 52.19 8.82 63.5\"/>
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"45.49 9.2 45.49 17.76 45.49 20.14 45.49 63.5\"/>
\t\t\t\t\t\t<line class=\"cls-1 group-hover:!stroke-[white]\" x1=\"59.09\" y1=\"50.06\" x2=\"59.09\" y2=\"25.44\"/>
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"42.94 63.5 59.09 63.5 59.09 50.06 45.49 50.06 45.49 63.5\"/>
\t\t\t\t\t\t<line class=\"cls-1 group-hover:!stroke-[white]\" x1=\"6.1\" y1=\"10.57\" x2=\"6.1\" y2=\"29.71\"/>
\t\t\t\t\t\t<line class=\"cls-1 group-hover:!stroke-[white]\" x1=\"8.82\" y1=\"41.28\" x2=\"30.09\" y2=\"41.28\"/>
\t\t\t\t\t\t<polyline class=\"cls-2\" points=\"48.89 10.52 58.75 10.52 58.75 21.5\"/>
\t\t\t\t\t\t<polygon class=\"cls-1 group-hover:!stroke-[white]\" points=\"6.1 2.31 6.1 17.76 23.49 10.04 6.1 2.31\"/>
\t\t\t\t\t</g>
\t\t\t\t</g>
\t\t\t</svg>
\t\t</div>
\t\t<span class=\"text-4xl text-[#44505E] font-semibold group-hover:text-white\" data-i18n=\"stats.seatsGeneratedDigit\">
\t\t\t";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_stats", [], "any", false, false, true, 40), 0, [], "any", false, false, true, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_stats", [], "any", false, false, true, 40), 0, [], "any", false, false, true, 40), "#markup", [], "array", false, false, true, 40)), 1), "html", null, true);
        yield "
\t\t</span>
\t</div>
\t<div>
\t\t<p class=\"font-semibold mb-6 text-lg group-hover:text-white\" data-i18n=\"stats.seatsGenerated\">
\t\t\t";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 45), 0, [], "any", false, false, true, 45), "html", null, true);
        yield "
\t\t</p>
\t\t<p class=\"!text-sm text-[#9D9D9C] mb-6 group-hover:text-white\" data-i18n=\"stats.seatsGeneratedDesc\">
\t\t\t";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 48), 0, [], "any", false, false, true, 48), "html", null, true);
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
        return "themes/custom/acp/templates/block--statsbox3.html.twig";
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
        return array (  99 => 48,  93 => 45,  85 => 40,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/block--statsbox3.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/block--statsbox3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 40, "number_format" => 40];
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
