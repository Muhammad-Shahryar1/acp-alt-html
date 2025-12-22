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

/* @acp/header.html.twig */
class __TwigTemplate_64450abe862a8ceada48da79d269452e extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/header-styling"), "html", null, true);
        yield "

<!-- Skip Links for Screen Reader Navigation -->
<a href=\"#main-content\" class=\"skip-link sr-only\">";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "</a>
<a href=\"#main-navigation\" class=\"skip-link sr-only\">";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to navigation"));
        yield "</a>

<header id=\"main-header\">
  <nav id=\"main-navigation\" role=\"navigation\">
    <div class=\"nav-container\">
      <!-- Logo Section -->
      <div class=\"logo-section\">
        <div>
          <a href=\"";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
            <img src=\"";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/logos/header-logo.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Logo"));
        yield "\">
          </a>
        </div>
      </div>

      <!-- Desktop Navigation -->
      <div class=\"desktop-nav\">
        ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 21), "html", null, true);
        yield "
        \t";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 22) == "ar")) {
            // line 23
            yield "         
\t\t<a class=\"arabic-vist-nav\" href=\"https://www.visitsaudi.com/ar\" >
\t\t\tروح السعودية
\t\t</a>
   
              ";
        } else {
            // line 29
            yield "         
\t
\t\t<a class=\"english-vist-nav\" href=\"https://www.visitsaudi.com/en\" >
\t\t\tVisit Saudi
\t\t</a>
\t
              ";
        }
        // line 36
        yield "
      </div>

      <!-- Right Side Actions -->
      <div class=\"right-actions\">
        <!-- Language Selector -->
        <div class=\"language-selector-wrapper\">
          <button 
            id=\"language-selector\" 
            type=\"button\"
            role=\"button\"
            tabindex=\"0\"
            aria-label=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Change language"));
        yield "\"
            data-lang=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 49), "html", null, true);
        yield "\"
            class=\"focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
          >
            <span id=\"language-selector-content-desktop\">
              ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 53) == "ar")) {
            // line 54
            yield "                English
              ";
        } else {
            // line 56
            yield "                العربية
              ";
        }
        // line 58
        yield "            </span>
            <img src=\"";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/language-selector.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "\" aria-hidden=\"true\">
          </button>
        </div>

        <!-- Become a Partner Button -->
        ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 64) == "ar")) {
            // line 65
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"partner-button\">
            كن شريكاً
          </a>
        ";
        } else {
            // line 69
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"partner-button\">
            Become a Partner
          </a>
        ";
        }
        // line 73
        yield "
        <!-- Accessibility Menu Button -->
        <div class=\"accessibility-menu-wrapper\">
          <button 
            id=\"accessibility-menu-button\"
            type=\"button\"
            aria-label=\"";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open accessibility menu"));
        yield "\"
            aria-expanded=\"false\"
            aria-haspopup=\"true\"
            class=\"accessibility-menu-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
            title=\"";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility options"));
        yield "\"
          >
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
              <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
              <path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path>
              <path d=\"M2 12h20\"></path>
            </svg>
            <span class=\"sr-only\">";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility"));
        yield "</span>
          </button>

          <!-- Accessibility Menu Panel -->
          <div id=\"accessibility-menu-panel\" class=\"accessibility-menu-panel hidden\" role=\"menu\" aria-label=\"";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility options"));
        yield "\">
            <div class=\"accessibility-menu-header\">
              <h3>
                ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 97) == "ar")) {
            // line 98
            yield "                  خيارات إمكانية الوصول
                ";
        } else {
            // line 100
            yield "                  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility Options"));
            yield "
                ";
        }
        // line 102
        yield "              </h3>
              <button 
                id=\"accessibility-menu-close\"
                type=\"button\"
                aria-label=\"";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close accessibility menu"));
        yield "\"
                class=\"accessibility-menu-close focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
              >
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                  <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
                  <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
                </svg>
              </button>
            </div>

            <div class=\"accessibility-menu-content\">
              <!-- Text Size Adjustment -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 120
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 120) == "ar")) {
            // line 121
            yield "                    حجم النص
                  ";
        } else {
            // line 123
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Size"));
            yield "
                  ";
        }
        // line 125
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"text-size-default\"
                    type=\"button\"
                    role=\"menuitemradio\"
                    aria-checked=\"true\"
                    aria-label=\"";
        // line 132
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default text size"));
        yield "\"
                    class=\"accessibility-control-btn text-size-btn active focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    data-size=\"default\"
                  >
                    <span aria-hidden=\"true\">A</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 138
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 138) == "ar")) {
            // line 139
            yield "                        الافتراضي
                      ";
        } else {
            // line 141
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default"));
            yield "
                      ";
        }
        // line 143
        yield "                    </span>
                  </button>
                  <button 
                    id=\"text-size-large\"
                    type=\"button\"
                    role=\"menuitemradio\"
                    aria-checked=\"false\"
                    aria-label=\"";
        // line 150
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Large text size"));
        yield "\"
                    class=\"accessibility-control-btn text-size-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    data-size=\"large\"
                  >
                    <span aria-hidden=\"true\">A</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 156
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 156) == "ar")) {
            // line 157
            yield "                        كبير
                      ";
        } else {
            // line 159
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Large"));
            yield "
                      ";
        }
        // line 161
        yield "                    </span>
                  </button>
                  <button 
                    id=\"text-size-extra-large\"
                    type=\"button\"
                    role=\"menuitemradio\"
                    aria-checked=\"false\"
                    aria-label=\"";
        // line 168
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra large text size"));
        yield "\"
                    class=\"accessibility-control-btn text-size-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    data-size=\"extra-large\"
                  >
                    <span aria-hidden=\"true\">A</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 174
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 174) == "ar")) {
            // line 175
            yield "                        كبير جداً
                      ";
        } else {
            // line 177
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra Large"));
            yield "
                      ";
        }
        // line 179
        yield "                    </span>
                  </button>
                </div>
              </div>

              <!-- Contrast Adjustment -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 187
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 187) == "ar")) {
            // line 188
            yield "                    التباين
                  ";
        } else {
            // line 190
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contrast"));
            yield "
                  ";
        }
        // line 192
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"contrast-decrease\"
                    type=\"button\"
                    role=\"menuitem\"
                    aria-label=\"";
        // line 198
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Decrease contrast"));
        yield "\"
                    class=\"accessibility-control-btn contrast-btn contrast-minus focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
            title=\"";
        // line 200
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Decrease contrast"));
        yield "\"
          >
                    <span aria-hidden=\"true\">−</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 204
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 204) == "ar")) {
            // line 205
            yield "                        تقليل
                      ";
        } else {
            // line 207
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Decrease"));
            yield "
                      ";
        }
        // line 209
        yield "                    </span>
          </button>
          <button 
            id=\"contrast-increase\"
            type=\"button\"
                    role=\"menuitem\"
            aria-label=\"";
        // line 215
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Increase contrast"));
        yield "\"
                    class=\"accessibility-control-btn contrast-btn contrast-plus focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
            title=\"";
        // line 217
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Increase contrast"));
        yield "\"
          >
                    <span aria-hidden=\"true\">+</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 221
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 221) == "ar")) {
            // line 222
            yield "                        زيادة
                      ";
        } else {
            // line 224
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Increase"));
            yield "
                      ";
        }
        // line 226
        yield "                    </span>
                  </button>
                </div>
              </div>

              <!-- Dark Mode Toggle -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 234
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 234) == "ar")) {
            // line 235
            yield "                    الوضع الداكن
                  ";
        } else {
            // line 237
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dark Mode"));
            yield "
                  ";
        }
        // line 239
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"dark-mode-toggle\"
                    type=\"button\"
                    role=\"menuitemcheckbox\"
                    aria-checked=\"false\"
                    aria-label=\"";
        // line 246
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle dark mode"));
        yield "\"
                    class=\"accessibility-control-btn dark-mode-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    title=\"";
        // line 248
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle dark mode"));
        yield "\"
                  >
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" class=\"dark-mode-icon\">
                      <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path>
                    </svg>
                    <span
                      id=\"dark-mode-label\"
                      class=\"accessibility-control-label\"
                      data-label-dark=\"";
        // line 256
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 256) == "ar")) {
            yield "الوضع الداكن";
        } else {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dark Mode"));
        }
        yield "\"
                      data-label-light=\"";
        // line 257
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 257) == "ar")) {
            yield "الوضع الفاتح";
        } else {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Light Mode"));
        }
        yield "\"
                    >
                      ";
        // line 259
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 259) == "ar")) {
            // line 260
            yield "                        الوضع الداكن
                      ";
        } else {
            // line 262
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dark Mode"));
            yield "
                      ";
        }
        // line 264
        yield "                    </span>
                  </button>
                </div>
              </div>

              <!-- Screen Reader Mode Toggle -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 272
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 272) == "ar")) {
            // line 273
            yield "                    وضع قارئ الشاشة
                  ";
        } else {
            // line 275
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Screen Reader Mode"));
            yield "
                  ";
        }
        // line 277
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"screen-reader-mode-toggle\"
                    type=\"button\"
                    role=\"menuitemcheckbox\"
                    aria-pressed=\"false\"
                    aria-label=\"";
        // line 284
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle screen reader mode"));
        yield "\"
                    class=\"accessibility-control-btn screen-reader-mode-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    title=\"";
        // line 286
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle screen reader mode"));
        yield "\"
                  >
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" class=\"screen-reader-icon\">
                      <path d=\"M1 12s4-4 11-4 11 4 11 4\"></path>
                      <path d=\"M1 12s4 4 11 4 11-4 11-4\"></path>
                      <line x1=\"1\" y1=\"12\" x2=\"1.01\" y2=\"12\"></line>
                      <line x1=\"23\" y1=\"12\" x2=\"22.99\" y2=\"12\"></line>
                    </svg>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 295
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 295) == "ar")) {
            // line 296
            yield "                        وضع قارئ الشاشة
                      ";
        } else {
            // line 298
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Screen Reader Mode"));
            yield "
                      ";
        }
        // line 300
        yield "                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button 
          id=\"mobile-menu-button\"
          type=\"button\"
          aria-label=\"";
        // line 312
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle mobile menu"));
        yield "\"
          aria-expanded=\"false\"
          class=\"focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
        >
          <svg fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id=\"mobile-menu\" class=\"hidden\">
      <div class=\"mobile-menu-content\">
        ";
        // line 326
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 326), "html", null, true);
        yield "
        <div>
            ";
        // line 328
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 328) == "ar")) {
            // line 329
            yield "        <div style=\"text-align:right; margin-right: 16px;\">
\t\t<a  href=\"https://www.visitsaudi.com/ar\" >
\t\t\tزوروا السعودية
\t\t</a>
   </div>
              ";
        } else {
            // line 335
            yield "         
\t<div style=\"text-align:left; margin-left:16px;\">
\t\t<a href=\"https://www.visitsaudi.com/en\"  >
\t\t\tVisit Saudi
\t\t</a>
\t</div>
              ";
        }
        // line 342
        yield "
            
        </div>

        <!-- Mobile Actions -->
        <div class=\"mobile-actions\">
          <!-- Language Selector -->
          <div id=\"mobile-language-selector\">
            <span id=\"language-selector-content-mobile\">
              ";
        // line 351
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 351) == "ar")) {
            // line 352
            yield "                English
              ";
        } else {
            // line 354
            yield "                العربية
              ";
        }
        // line 356
        yield "            </span>
            <button 
              id=\"language-selector\" 
              type=\"button\"
              role=\"button\"
              tabindex=\"0\"
              aria-label=\"";
        // line 362
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Change language"));
        yield "\"
              data-lang=\"";
        // line 363
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 363), "html", null, true);
        yield "\"
              class=\"focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2\"
            >
              <img src=\"";
        // line 366
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/language-selector.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "\" aria-hidden=\"true\">
            </button>
          </div>

          ";
        // line 370
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 370) == "ar")) {
            // line 371
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"partner-button\">
              كن شريكاً
            </a>
          ";
        } else {
            // line 375
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"partner-button\">
              Become a Partner
            </a>
          ";
        }
        // line 379
        yield "
          <!-- Accessibility Menu (Mobile) -->
          <div class=\"accessibility-menu-mobile\">
            <button 
              id=\"accessibility-menu-button-mobile\"
              type=\"button\"
              aria-label=\"";
        // line 385
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open accessibility menu"));
        yield "\"
              aria-expanded=\"false\"
              aria-haspopup=\"true\"
              class=\"accessibility-menu-btn-mobile focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
              title=\"";
        // line 389
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility options"));
        yield "\"
            >
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                <path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path>
                <path d=\"M2 12h20\"></path>
              </svg>
              <span>";
        // line 396
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility"));
        yield "</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id=\"nav-overlay\"></div>
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
        return "@acp/header.html.twig";
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
        return array (  713 => 396,  703 => 389,  696 => 385,  688 => 379,  680 => 375,  672 => 371,  670 => 370,  661 => 366,  655 => 363,  651 => 362,  643 => 356,  639 => 354,  635 => 352,  633 => 351,  622 => 342,  613 => 335,  605 => 329,  603 => 328,  598 => 326,  581 => 312,  567 => 300,  561 => 298,  557 => 296,  555 => 295,  543 => 286,  538 => 284,  529 => 277,  523 => 275,  519 => 273,  517 => 272,  507 => 264,  501 => 262,  497 => 260,  495 => 259,  486 => 257,  478 => 256,  467 => 248,  462 => 246,  453 => 239,  447 => 237,  443 => 235,  441 => 234,  431 => 226,  425 => 224,  421 => 222,  419 => 221,  412 => 217,  407 => 215,  399 => 209,  393 => 207,  389 => 205,  387 => 204,  380 => 200,  375 => 198,  367 => 192,  361 => 190,  357 => 188,  355 => 187,  345 => 179,  339 => 177,  335 => 175,  333 => 174,  324 => 168,  315 => 161,  309 => 159,  305 => 157,  303 => 156,  294 => 150,  285 => 143,  279 => 141,  275 => 139,  273 => 138,  264 => 132,  255 => 125,  249 => 123,  245 => 121,  243 => 120,  226 => 106,  220 => 102,  214 => 100,  210 => 98,  208 => 97,  202 => 94,  195 => 90,  185 => 83,  178 => 79,  170 => 73,  162 => 69,  154 => 65,  152 => 64,  142 => 59,  139 => 58,  135 => 56,  131 => 54,  129 => 53,  122 => 49,  118 => 48,  104 => 36,  95 => 29,  87 => 23,  85 => 22,  81 => 21,  69 => 14,  65 => 13,  54 => 5,  50 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@acp/header.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 22];
        static $filters = ["escape" => 1, "t" => 4];
        static $functions = ["attach_library" => 1, "path" => 13, "url" => 65];

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
