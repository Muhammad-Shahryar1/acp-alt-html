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

/* themes/custom/acp/templates/page--404.html.twig */
class __TwigTemplate_763ab052a3ccebcba7ed6f7831023872 extends Template
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
        yield from $this->loadTemplate("@acp/sec-header.html.twig", "themes/custom/acp/templates/page--404.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<main id=\"main-content\" class=\"custom-404-page\" role=\"main\">
  <div class=\"error-container\">
    <h1 class=\"error-code\">404</h1>

    ";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 7) == "ar")) {
            // line 8
            yield "      <h2 class=\"error-title\">عذرًا! لم يتم العثور على الصفحة</h2>
      <p class=\"error-message\">
        الصفحة التي تحاول الوصول إليها غير متوفرة أو ربما تم نقلها.
      </p>
      <a href=\"";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\" class=\"error-button\">العودة إلى الصفحة الرئيسية</a>
    ";
        } else {
            // line 14
            yield "      <h2 class=\"error-title\">Oops! Page Not Found</h2>
      <p class=\"error-message\">
        The page you’re looking for doesn’t exist or may have been moved.
      </p>
      <a href=\"";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "\" class=\"error-button\">Back to Home</a>
    ";
        }
        // line 20
        yield "  </div>
</main>

";
        // line 23
        yield from $this->loadTemplate("@acp/footer.html.twig", "themes/custom/acp/templates/page--404.html.twig", 23)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/acp/templates/page--404.html.twig";
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
        return array (  82 => 23,  77 => 20,  72 => 18,  66 => 14,  61 => 12,  55 => 8,  53 => 7,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/page--404.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 7];
        static $filters = [];
        static $functions = ["url" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                [],
                ['url'],
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
