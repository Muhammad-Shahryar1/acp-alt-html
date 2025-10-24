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

/* @acp/sec-header.html.twig */
class __TwigTemplate_ef466c1db9d7dd529ae218c61ccd3631 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/secheader-styling"), "html", null, true);
        yield "

<header class=\"secondary-header\">
  <nav>
    <div class=\"nav-container\">
      <!-- Logo Section -->
      <div class=\"logo-section\">
        <div>
          <a href=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
            <img src=\"";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/logos/header-logo2.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Logo"));
        yield "\">
          </a>
        </div>
      </div>

      <!-- Desktop Navigation -->
      <div class=\"sec-header-menu\">
        ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17), "html", null, true);
        yield "
      </div>

      <!-- Right Side Actions -->
      <div class=\"right-actions\">
        <!-- Language Selector -->
        <div class=\"language-selector-wrapper\">
          <div id=\"language-selector\" data-lang=\"";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 24), "html", null, true);
        yield "\">
            <span id=\"language-selector-content-desktop\">
              ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 26) == "ar")) {
            // line 27
            yield "                English
              ";
        } else {
            // line 29
            yield "                العربية
              ";
        }
        // line 31
        yield "            </span>
            <img src=\"";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/language-selector.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "\">
          </div>
        </div>

        <!-- Become a Partner Button -->
        ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 37) == "ar")) {
            // line 38
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"partner-button\">
            كن شريكاً
          </a>
        ";
        } else {
            // line 42
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"partner-button\">
            Become a Partner
          </a>
        ";
        }
        // line 46
        yield "
        <!-- Mobile Menu Button -->
        <button id=\"mobile-menu-button\">
          <svg fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
              d=\"M4 6h16M4 12h16M4 18h16\"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id=\"mobile-menu\" class=\"hidden\">
      <div class=\"mobile-menu-content\">
        ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), "html", null, true);
        yield "

        <!-- Mobile Actions -->
        <div class=\"mobile-actions\">
          <!-- Language Selector -->
          <div id=\"mobile-language-selector\" data-lang=\"";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 65), "html", null, true);
        yield "\">
            <span id=\"language-selector-content-mobile\">
              ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 67) == "ar")) {
            // line 68
            yield "                English
              ";
        } else {
            // line 70
            yield "                العربية
              ";
        }
        // line 72
        yield "            </span>
            <div id=\"language-selector\">
              <img src=\"";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/language-selector.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "\">
            </div>
          </div>

          ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 78) == "ar")) {
            // line 79
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"partner-button\">
              كن شريكاً
            </a>
          ";
        } else {
            // line 83
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"partner-button\">
              Become a Partner
            </a>
          ";
        }
        // line 87
        yield "        </div>
      </div>
    </div>
  </nav>
</header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "directory", "page", "language"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@acp/sec-header.html.twig";
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
        return array (  197 => 87,  189 => 83,  181 => 79,  179 => 78,  170 => 74,  166 => 72,  162 => 70,  158 => 68,  156 => 67,  151 => 65,  143 => 60,  127 => 46,  119 => 42,  111 => 38,  109 => 37,  99 => 32,  96 => 31,  92 => 29,  88 => 27,  86 => 26,  81 => 24,  71 => 17,  59 => 10,  55 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@acp/sec-header.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/sec-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 26];
        static $filters = ["escape" => 1, "t" => 10];
        static $functions = ["attach_library" => 1, "path" => 9, "url" => 38];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library', 'path', 'url'],
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
