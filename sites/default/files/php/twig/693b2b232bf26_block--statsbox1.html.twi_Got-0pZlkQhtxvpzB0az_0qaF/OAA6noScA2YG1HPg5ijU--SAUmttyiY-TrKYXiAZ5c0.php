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

/* themes/custom/acp/templates/block--statsbox1.html.twig */
class __TwigTemplate_29e84d82af3951960967c72315699d1d extends Template
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
        yield "<div id=\"card1\" class=\"bg-white border border-gray-300 text-gray-800 p-6 rounded-md cursor-pointer hover:bg-emerald-500 hover:border-emerald-400 transition-all h-full duration-300 group\">
\t<div class=\"flex items-center justify-between mb-8\">
\t\t<div class=\"w-10 h-10 \">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_2\" data-name=\"Layer 2\" viewbox=\"0 0 62.09 46.32\" class=\"w-full h-full\">
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
\t\t\t\t\t\t<polyline class=\"cls-1 group-hover:!stroke-[white]\" points=\"30.85 7.51 14.77 3.25 10.41 5.32 25.09 15.13\"/>
\t\t\t\t\t\t<path class=\"cls-1 group-hover:!stroke-[white]\" d=\"M5.23,22.59l-3.23-6.8,3.08-1.46,8.56,6.25S42.39,6.9,51.46,2.59s11.49,5.4,6.77,7.64c-1.43.68-5.99,2.85-11.63,5.53l-11.16,24.69-7.09,3.37,1.92-20.3-10.25,4.87\"/>
\t\t\t\t\t\t<path class=\"cls-1 group-hover:!stroke-[white]\" d=\"M36.76,9.58l14.7-6.99c9.07-4.31,11.49,5.4,6.77,7.64\"/>
\t\t\t\t\t\t<polyline class=\"cls-2\" points=\"6.2 24.62 10.2 33.05 18.13 29.29\"/>
\t\t\t\t\t</g>
\t\t\t\t</g>
\t\t\t</svg>
\t\t</div>
\t\t<span class=\"text-4xl text-[#44505E] font-semibold group-hover:text-white\" data-i18n=\"stats.routesActivatedDigit\">
\t\t\t";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber((($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_stats", [], "any", false, false, true, 34), 0, [], "any", false, false, true, 34)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_stats", [], "any", false, false, true, 34), 0, [], "any", false, false, true, 34), "#markup", [], "array", false, false, true, 34)), 0), "html", null, true);
        yield "
\t\t</span>
\t</div>
\t<div>
\t\t<p class=\"font-semibold mb-6 text-lg group-hover:text-white\" data-i18n=\"stats.routesActivated\">
\t\t\t";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 39), 0, [], "any", false, false, true, 39), "html", null, true);
        yield "
\t\t</p>
\t\t<p class=\"!text-sm text-[#9D9D9C] mb-6 group-hover:text-white\" data-i18n=\"stats.routesActivatedDesc\">
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
        return "themes/custom/acp/templates/block--statsbox1.html.twig";
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
        return array (  93 => 42,  87 => 39,  79 => 34,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/block--statsbox1.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/block--statsbox1.html.twig");
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
