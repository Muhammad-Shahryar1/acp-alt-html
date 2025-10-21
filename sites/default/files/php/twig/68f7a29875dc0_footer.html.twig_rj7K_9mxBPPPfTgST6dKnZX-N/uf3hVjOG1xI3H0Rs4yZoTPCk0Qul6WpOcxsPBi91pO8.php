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

/* @acp/footer.html.twig */
class __TwigTemplate_bffdc1096b1c32e235440e8e7ff8537b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/footer-scripts"), "html", null, true);
        yield "

   <div style=\"margin-top:400px;\" ></div>
    <div class=\"page-overlay\" id=\"pageOverlay\"></div>

<footer class=\"footer-overlay hidden-init bg-slate-700 text-white pt-16 pb-8\" id=\"animatedFooter\">
\t<div
\t\tclass=\"container mx-auto px-4 sm:px-6 lg:px-8\">
\t\t";
        // line 10
        yield "\t\t<div
\t\t\tclass=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12\">

\t\t\t";
        // line 14
        yield "\t\t\t<div class=\"lg:col-span-1\">
  <div class=\"mb-6\">
    <a href=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" class=\"w-auto h-auto flex items-center lg:justify-center\">
      <img src=\"";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/white-logo.png\"
           alt=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Wizz Air"));
        yield "\"
           class=\"w-auto opacity-100 hover:opacity-100 transition-opacity\" />
    </a>
  </div>
</div>


\t\t\t";
        // line 26
        yield "\t\t\t";
        $context["is_arabic"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "getId", [], "method", false, false, true, 26) == "ar");
        // line 27
        yield "
<div class=\"lg:col-span-1\">
  <h3 class=\"text-lg font-semibold mb-6 text-white\">
    ";
        // line 30
        if (($context["is_arabic"] ?? null)) {
            yield " لمحة عامة ";
        } else {
            yield " Overview ";
        }
        // line 31
        yield "  </h3>
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footermenu1", [], "any", false, false, true, 32), "html", null, true);
        yield "
</div>

<div class=\"lg:col-span-1\">
  <h3 class=\"text-lg font-semibold mb-6 text-white\">
    ";
        // line 37
        if (($context["is_arabic"] ?? null)) {
            yield " لتواصل والدعم ";
        } else {
            yield " Contact and Support ";
        }
        // line 38
        yield "  </h3>
  ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footermenu2", [], "any", false, false, true, 39), "html", null, true);
        yield "
</div>

<div class=\"lg:col-span-1\">
  <h3 class=\"text-lg font-semibold mb-6 text-white\">
    ";
        // line 44
        if (($context["is_arabic"] ?? null)) {
            yield " روابط ذات صلة ";
        } else {
            yield " Related Links ";
        }
        // line 45
        yield "  </h3>
  ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footermenu3", [], "any", false, false, true, 46), "html", null, true);
        yield "
</div>

<div class=\"lg:col-span-1\">
  <h3 class=\"text-lg font-semibold mb-6 text-white\">
    ";
        // line 51
        if (($context["is_arabic"] ?? null)) {
            yield " تابعنا على ";
        } else {
            yield " Follow us on ";
        }
        // line 52
        yield "  </h3>


\t\t\t\t";
        // line 56
        yield "\t\t\t\t<div class=\"flex space-x-4 mb-8\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"https://x.com/ACP_Saudi\" class=\"hover:text-white transition-colors duration-200\">
\t\t\t\t\t\t";
        // line 60
        yield "\t\t\t\t\t\t<svg class=\"w-6 h-6 text-[#56B796]\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path d=\"M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"https://www.linkedin.com/company/saudi-air-connectivity-program/\" class=\"text-gray-300 hover:text-white transition-colors duration-200\">
\t\t\t\t\t\t";
        // line 67
        yield "\t\t\t\t\t\t<svg class=\"w-6 h-6 text-[#56B796]\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t";
        // line 74
        yield "\t\t\t\t<div class=\"flex items-start space-x-3\">
\t\t\t\t\t<svg class=\"w-8 h-8 mt-1 text-[#56B796] flex-shrink-0\" viewbox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M12 2C8.13 2 5 5.13 5 9C5 13.25 9.75 20 12 22C14.25 20 19 13.25 19 9C19 5.13 15.87 2 12 2Z\" stroke=\"#5DE0B0\" stroke-width=\"1.5\" fill=\"none\"/>
\t\t\t\t\t\t<circle cx=\"12\" cy=\"9\" r=\"2.5\" stroke=\"#5DE0B0\" stroke-width=\"1.5\" fill=\"none\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<div class=\"text-gray-300 leading-relaxed\">
\t\t\t\t\t\t<p class=\"!text-[16px]\">
\t\t\t\t\t\t\t";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerAddress", [], "any", false, false, true, 81))), "html", null, true);
        yield "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t";
        // line 90
        yield "\t\t<div class=\"border-t border-gray-600 mt-12 pt-4\">
  <p class=\"text-gray-400 !text-xs text-center lg:text-left\">
    ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 92) == "ar")) {
            // line 93
            yield "      جميع الحقوق محفوظة برنامج الربط الجوي 2025
    ";
        } else {
            // line 95
            yield "      Copyright © 2025 Air Connectivity Program. All rights reserved.
    ";
        }
        // line 97
        yield "  </p>
</div>

\t</div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory", "language", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@acp/footer.html.twig";
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
        return array (  207 => 97,  203 => 95,  199 => 93,  197 => 92,  193 => 90,  182 => 81,  173 => 74,  165 => 67,  157 => 60,  152 => 56,  147 => 52,  141 => 51,  133 => 46,  130 => 45,  124 => 44,  116 => 39,  113 => 38,  107 => 37,  99 => 32,  96 => 31,  90 => 30,  85 => 27,  82 => 26,  72 => 18,  68 => 17,  64 => 16,  60 => 14,  55 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@acp/footer.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 30];
        static $filters = ["escape" => 1, "t" => 18, "striptags" => 81, "render" => 81];
        static $functions = ["attach_library" => 1, "path" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't', 'striptags', 'render'],
                ['attach_library', 'path'],
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
