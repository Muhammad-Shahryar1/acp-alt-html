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

/* themes/custom/acp/templates/page--node--183.html.twig */
class __TwigTemplate_390cd73edcd3cabb0b552c317c325c9f extends Template
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
";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/frontpage-scripts"), "html", null, true);
        yield "


";
        // line 11
        yield "
";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/global-styling"), "html", null, true);
        yield "

";
        // line 15
        $context["is_ar"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 15) == "ar");
        // line 16
        $context["theme_path"] = ((array_key_exists("theme_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme_path"] ?? null), "themes/custom/acp")) : ("themes/custom/acp"));
        // line 17
        $context["polygon_icon"] = Twig\Extension\CoreExtension::replace(((($context["base_path"] ?? null) . ($context["theme_path"] ?? null)) . "/assets/img/Polygon 1.png"), [" " => "%20"]);
        // line 18
        $context["ministry_img"] = Twig\Extension\CoreExtension::replace(((($context["base_path"] ?? null) . ($context["theme_path"] ?? null)) . "/assets/img/ministry image.png"), [" " => "%20"]);
        // line 19
        $context["team_img"] = Twig\Extension\CoreExtension::replace(((($context["base_path"] ?? null) . ($context["theme_path"] ?? null)) . "/assets/img/team image.png"), [" " => "%20"]);
        // line 20
        yield "
";
        // line 21
        yield from $this->loadTemplate("@acp/sec-header.html.twig", "themes/custom/acp/templates/page--node--183.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "
<main id=\"main-content\" lang=\"";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("ar") : ("en")));
        yield "\" dir=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("rtl") : ("ltr")));
        yield "\">
  ";
        // line 27
        yield "  <section class=\"hero-section\">
    <div class=\"hero-overlay\">
      <div id=\"pageNavigation\" class=\"flex gap-1 my-6 items-center container mx-auto\">
        ";
        // line 30
        if (($context["is_ar"] ?? null)) {
            // line 31
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-100 hover:text-gray-200\">الرئيسية</a>
          <svg class=\"w-4 h-4 text-green-400 rotate-180\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
          </svg>
          ";
            // line 36
            yield "          <span class=\"text-green-400\">برنامج الربط الجوي</span>
        ";
        } else {
            // line 38
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-green-400 hover:text-green-400\">Home</a>
          <svg class=\"w-4 h-4 text-green-400\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
          </svg>
          ";
            // line 43
            yield "          <span class=\"text-green-400\">Air Connectivity Program</span>
        ";
        }
        // line 45
        yield "      </div>

      <h1>";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "aboutPageHeroSection", [], "any", false, false, true, 47), "html", null, true);
        yield "</h1>
    </div>
  </section>

  ";
        // line 54
        yield "  <section class=\"about-section\">
    <div class=\"about-container\">
      <div class=\"about-title ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("text-right") : ("")));
        yield "\">
        <h2>";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("نبذة") : ("About")));
        yield "</h2>
      </div>

      <div class=\"about-content ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("text-right") : ("")));
        yield "\">
        <h2>";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "aboutPageHeading", [], "any", false, false, true, 61), "html", null, true);
        yield "</h2>

        <p class=\"highlight-text\">
          ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "aboutPageHighlightedText", [], "any", false, false, true, 64), "html", null, true);
        yield "
        </p>

        <p>
          ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "aboutpagedescription2", [], "any", false, false, true, 68), "html", null, true);
        yield "
        </p>
      </div>
    </div>
  </section>

  ";
        // line 77
        yield "  <section class=\"minister-section\">
    <div class=\"white-bg-minister\">
      <div class=\"section-title ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("text-right") : ("")));
        yield "\">
            <img
  src=\"";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["polygon_icon"] ?? null), "html", null, true);
        yield "\"
  alt=\"icon\"
  class=\"title-icon\"
  ";
        // line 84
        if (($context["is_ar"] ?? null)) {
            yield "style=\"transform: scaleX(-1);\" ";
        }
        // line 85
        yield "/>
        <h2 class=\"section-heading\">";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("كلمة معالي وزير السياحة") : ("Minister’s Message")));
        yield "</h2>
      </div>

      <div class=\"minister-content\">
        <div class=\"minister-image\">
          ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "aboutImage1", [], "any", false, false, true, 91), "html", null, true);
        yield "
        </div>

        <div class=\"minister-text ";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("text-right") : ("")));
        yield "\">
          <h3>
           ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "MinistryMessageName", [], "any", false, false, true, 96), "html", null, true);
        yield "
          </h3>
          <div class=\"underline\"></div>

          <p>
            ";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "MinistryMesssageDesc", [], "any", false, false, true, 101), "html", null, true);
        yield "
          </p>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 111
        yield "  ";
        // line 112
        yield "   
<div class=\"section-title-team ";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("text-right") : ("")));
        yield "\"> <img
  src=\"";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["polygon_icon"] ?? null), "html", null, true);
        yield "\"
  alt=\"icon\"
  class=\"title-icon\"
  ";
        // line 117
        if (($context["is_ar"] ?? null)) {
            yield "style=\"transform: scaleX(-1);\" ";
        }
        // line 118
        yield "/> <h2 class=\"section-heading\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "TeamManagmentHeading", [], "any", false, false, true, 118), "html", null, true);
        yield "</h2> </div>

<div
  id=\"exec-grid\"
  class=\"management-grid ";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_ar"] ?? null)) ? ("text-right") : ("")));
        yield "\"
  data-fallback-img=\"";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["team_img"] ?? null), "html", null, true);
        yield "\"
>
  ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["team"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 126
            yield "    <div class=\"team-card\">
      <div class=\"image-box\">
        <img src=\"";
            // line 128
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["team_img"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, true, 128), "html", null, true);
            yield "\" />
      </div>
      <h4>";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, true, 130), "html", null, true);
            yield "</h4>
      <p class=\"department\"></p> ";
            // line 132
            yield "      <p class=\"role\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "role", [], "any", false, false, true, 132));
            yield "</p>
      <div class=\"underline\"></div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "</div>



</main>

";
        // line 142
        yield from $this->loadTemplate("@acp/footer.html.twig", "themes/custom/acp/templates/page--node--183.html.twig", 142)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "base_path", "page", "team"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/acp/templates/page--node--183.html.twig";
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
        return array (  301 => 142,  293 => 136,  282 => 132,  278 => 130,  271 => 128,  267 => 126,  263 => 125,  258 => 123,  254 => 122,  246 => 118,  242 => 117,  236 => 114,  232 => 113,  229 => 112,  227 => 111,  217 => 101,  209 => 96,  204 => 94,  198 => 91,  190 => 86,  187 => 85,  183 => 84,  177 => 81,  172 => 79,  168 => 77,  159 => 68,  152 => 64,  146 => 61,  142 => 60,  136 => 57,  132 => 56,  128 => 54,  121 => 47,  117 => 45,  113 => 43,  105 => 38,  101 => 36,  93 => 31,  91 => 30,  86 => 27,  80 => 23,  77 => 22,  75 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  57 => 12,  54 => 11,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/page--node--183.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/page--node--183.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "include" => 21, "if" => 30, "for" => 125];
        static $filters = ["escape" => 1, "default" => 16, "replace" => 17, "raw" => 132];
        static $functions = ["attach_library" => 1, "path" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'default', 'replace', 'raw'],
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
