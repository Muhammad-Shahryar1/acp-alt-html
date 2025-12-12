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
";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/frontpage-scripts"), "html", null, true);
        yield "

<!-- Skip Links for Screen Reader Navigation -->
<a href=\"#main-content\" class=\"skip-link sr-only\">";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "</a>
<a href=\"#main-navigation\" class=\"skip-link sr-only\">";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to navigation"));
        yield "</a>

<header class=\"secondary-header\">
  <nav id=\"main-navigation\" role=\"navigation\">
    <div class=\"nav-container\">
      <!-- Logo Section -->
      <div class=\"logo-section\">
        <div>
          <a href=\"";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
            <img src=\"";
        // line 15
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
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 22), "html", null, true);
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
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Change language"));
        yield "\"
            data-lang=\"";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 35), "html", null, true);
        yield "\"
            class=\"focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
          >
            <span id=\"language-selector-content-desktop\">
              ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 39) == "ar")) {
            // line 40
            yield "                English
              ";
        } else {
            // line 42
            yield "                العربية
              ";
        }
        // line 44
        yield "            </span>
            <img src=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/language-selector.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "\" aria-hidden=\"true\">
          </button>
        </div>

        <!-- Become a Partner Button -->
        ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 50) == "ar")) {
            // line 51
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"partner-button\">
            كن شريكاً
          </a>
        ";
        } else {
            // line 55
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"partner-button\">
            Become a Partner
          </a>
        ";
        }
        // line 59
        yield "
        <!-- Accessibility Menu Button -->
        <div class=\"accessibility-menu-wrapper\">
          <button 
            id=\"accessibility-menu-button\"
            type=\"button\"
            aria-label=\"";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open accessibility menu"));
        yield "\"
            aria-expanded=\"false\"
            aria-haspopup=\"true\"
            class=\"accessibility-menu-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
            title=\"";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility options"));
        yield "\"
          >
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
              <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
              <path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path>
              <path d=\"M2 12h20\"></path>
            </svg>
            <span class=\"sr-only\">";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility"));
        yield "</span>
          </button>

          <!-- Accessibility Menu Panel -->
          <div id=\"accessibility-menu-panel\" class=\"accessibility-menu-panel hidden\" role=\"menu\" aria-label=\"";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility options"));
        yield "\">
            <div class=\"accessibility-menu-header\">
              <h3>
                ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 83) == "ar")) {
            // line 84
            yield "                  خيارات إمكانية الوصول
                ";
        } else {
            // line 86
            yield "                  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility Options"));
            yield "
                ";
        }
        // line 88
        yield "              </h3>
              <button 
                id=\"accessibility-menu-close\"
                type=\"button\"
                aria-label=\"";
        // line 92
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
        // line 106
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 106) == "ar")) {
            // line 107
            yield "                    حجم النص
                  ";
        } else {
            // line 109
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Size"));
            yield "
                  ";
        }
        // line 111
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"text-size-default\"
                    type=\"button\"
                    role=\"menuitemradio\"
                    aria-checked=\"true\"
                    aria-label=\"";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default text size"));
        yield "\"
                    class=\"accessibility-control-btn text-size-btn active focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    data-size=\"default\"
                  >
                    <span aria-hidden=\"true\">A</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 124) == "ar")) {
            // line 125
            yield "                        الافتراضي
                      ";
        } else {
            // line 127
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default"));
            yield "
                      ";
        }
        // line 129
        yield "                    </span>
                  </button>
                  <button 
                    id=\"text-size-large\"
                    type=\"button\"
                    role=\"menuitemradio\"
                    aria-checked=\"false\"
                    aria-label=\"";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Large text size"));
        yield "\"
                    class=\"accessibility-control-btn text-size-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    data-size=\"large\"
                  >
                    <span aria-hidden=\"true\">A</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 142
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 142) == "ar")) {
            // line 143
            yield "                        كبير
                      ";
        } else {
            // line 145
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Large"));
            yield "
                      ";
        }
        // line 147
        yield "                    </span>
                  </button>
                  <button 
                    id=\"text-size-extra-large\"
                    type=\"button\"
                    role=\"menuitemradio\"
                    aria-checked=\"false\"
                    aria-label=\"";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra large text size"));
        yield "\"
                    class=\"accessibility-control-btn text-size-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    data-size=\"extra-large\"
                  >
                    <span aria-hidden=\"true\">A</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 160) == "ar")) {
            // line 161
            yield "                        كبير جداً
                      ";
        } else {
            // line 163
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra Large"));
            yield "
                      ";
        }
        // line 165
        yield "                    </span>
                  </button>
                </div>
              </div>

              <!-- Contrast Adjustment -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 173
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 173) == "ar")) {
            // line 174
            yield "                    التباين
                  ";
        } else {
            // line 176
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contrast"));
            yield "
                  ";
        }
        // line 178
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"contrast-decrease\"
                    type=\"button\"
                    role=\"menuitem\"
                    aria-label=\"";
        // line 184
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Decrease contrast"));
        yield "\"
                    class=\"accessibility-control-btn contrast-btn contrast-minus focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
            title=\"";
        // line 186
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Decrease contrast"));
        yield "\"
          >
                    <span aria-hidden=\"true\">−</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 190
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 190) == "ar")) {
            // line 191
            yield "                        تقليل
                      ";
        } else {
            // line 193
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Decrease"));
            yield "
                      ";
        }
        // line 195
        yield "                    </span>
          </button>
          <button 
            id=\"contrast-increase\"
            type=\"button\"
                    role=\"menuitem\"
            aria-label=\"";
        // line 201
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Increase contrast"));
        yield "\"
                    class=\"accessibility-control-btn contrast-btn contrast-plus focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
            title=\"";
        // line 203
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Increase contrast"));
        yield "\"
          >
                    <span aria-hidden=\"true\">+</span>
                    <span class=\"accessibility-control-label\">
                      ";
        // line 207
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 207) == "ar")) {
            // line 208
            yield "                        زيادة
                      ";
        } else {
            // line 210
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Increase"));
            yield "
                      ";
        }
        // line 212
        yield "                    </span>
                  </button>
                </div>
              </div>

              <!-- Dark Mode Toggle -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 220
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 220) == "ar")) {
            // line 221
            yield "                    الوضع الداكن
                  ";
        } else {
            // line 223
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dark Mode"));
            yield "
                  ";
        }
        // line 225
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"dark-mode-toggle\"
                    type=\"button\"
                    role=\"menuitemcheckbox\"
                    aria-checked=\"false\"
                    aria-label=\"";
        // line 232
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle dark mode"));
        yield "\"
                    class=\"accessibility-control-btn dark-mode-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    title=\"";
        // line 234
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
        // line 242
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 242) == "ar")) {
            yield "الوضع الداكن";
        } else {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dark Mode"));
        }
        yield "\"
                      data-label-light=\"";
        // line 243
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 243) == "ar")) {
            yield "الوضع الفاتح";
        } else {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Light Mode"));
        }
        yield "\"
                    >
                      ";
        // line 245
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 245) == "ar")) {
            // line 246
            yield "                        الوضع الداكن
                      ";
        } else {
            // line 248
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dark Mode"));
            yield "
                      ";
        }
        // line 250
        yield "                    </span>
                  </button>
                </div>
              </div>

              <!-- Screen Reader Mode Toggle -->
              <div class=\"accessibility-menu-section\">
                <label class=\"accessibility-menu-label\">
                  ";
        // line 258
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 258) == "ar")) {
            // line 259
            yield "                    وضع قارئ الشاشة
                  ";
        } else {
            // line 261
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Screen Reader Mode"));
            yield "
                  ";
        }
        // line 263
        yield "                </label>
                <div class=\"accessibility-menu-controls\">
                  <button 
                    id=\"screen-reader-mode-toggle\"
                    type=\"button\"
                    role=\"menuitemcheckbox\"
                    aria-pressed=\"false\"
                    aria-label=\"";
        // line 270
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle screen reader mode"));
        yield "\"
                    class=\"accessibility-control-btn screen-reader-mode-btn focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
                    title=\"";
        // line 272
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
        // line 281
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 281) == "ar")) {
            // line 282
            yield "                        وضع قارئ الشاشة
                      ";
        } else {
            // line 284
            yield "                        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Screen Reader Mode"));
            yield "
                      ";
        }
        // line 286
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
        // line 298
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle mobile menu"));
        yield "\"
          aria-expanded=\"false\"
          class=\"focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
        >
          <svg fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
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
        // line 313
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 313), "html", null, true);
        yield "

        <!-- Mobile Actions -->
        <div class=\"mobile-actions\">
          <!-- Language Selector -->
          <div id=\"mobile-language-selector\" data-lang=\"";
        // line 318
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 318), "html", null, true);
        yield "\">
            <span id=\"language-selector-content-mobile\">
              ";
        // line 320
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 320) == "ar")) {
            // line 321
            yield "                English
              ";
        } else {
            // line 323
            yield "                العربية
              ";
        }
        // line 325
        yield "            </span>
            <button 
              id=\"language-selector\" 
              type=\"button\"
              role=\"button\"
              tabindex=\"0\"
              aria-label=\"";
        // line 331
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Change language"));
        yield "\"
              class=\"focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2\"
            >
              <img src=\"";
        // line 334
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/language-selector.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
        yield "\" aria-hidden=\"true\">
            </button>
          </div>

          ";
        // line 338
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 338) == "ar")) {
            // line 339
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"partner-button\">
              كن شريكاً
            </a>
          ";
        } else {
            // line 343
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"partner-button\">
              Become a Partner
            </a>
          ";
        }
        // line 347
        yield "
          <!-- Accessibility Menu (Mobile) -->
          <div class=\"accessibility-menu-mobile\">
            <button 
              id=\"accessibility-menu-button-mobile\"
              type=\"button\"
              aria-label=\"";
        // line 353
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open accessibility menu"));
        yield "\"
              aria-expanded=\"false\"
              aria-haspopup=\"true\"
              class=\"accessibility-menu-btn-mobile focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2\"
              title=\"";
        // line 357
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility options"));
        yield "\"
            >
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\">
                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                <path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path>
                <path d=\"M2 12h20\"></path>
              </svg>
              <span>";
        // line 364
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Accessibility"));
        yield "</span>
            </button>
          </div>
        </div>
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
        return array (  670 => 364,  660 => 357,  653 => 353,  645 => 347,  637 => 343,  629 => 339,  627 => 338,  618 => 334,  612 => 331,  604 => 325,  600 => 323,  596 => 321,  594 => 320,  589 => 318,  581 => 313,  563 => 298,  549 => 286,  543 => 284,  539 => 282,  537 => 281,  525 => 272,  520 => 270,  511 => 263,  505 => 261,  501 => 259,  499 => 258,  489 => 250,  483 => 248,  479 => 246,  477 => 245,  468 => 243,  460 => 242,  449 => 234,  444 => 232,  435 => 225,  429 => 223,  425 => 221,  423 => 220,  413 => 212,  407 => 210,  403 => 208,  401 => 207,  394 => 203,  389 => 201,  381 => 195,  375 => 193,  371 => 191,  369 => 190,  362 => 186,  357 => 184,  349 => 178,  343 => 176,  339 => 174,  337 => 173,  327 => 165,  321 => 163,  317 => 161,  315 => 160,  306 => 154,  297 => 147,  291 => 145,  287 => 143,  285 => 142,  276 => 136,  267 => 129,  261 => 127,  257 => 125,  255 => 124,  246 => 118,  237 => 111,  231 => 109,  227 => 107,  225 => 106,  208 => 92,  202 => 88,  196 => 86,  192 => 84,  190 => 83,  184 => 80,  177 => 76,  167 => 69,  160 => 65,  152 => 59,  144 => 55,  136 => 51,  134 => 50,  124 => 45,  121 => 44,  117 => 42,  113 => 40,  111 => 39,  104 => 35,  100 => 34,  85 => 22,  73 => 15,  69 => 14,  58 => 6,  54 => 5,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@acp/sec-header.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/sec-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 39];
        static $filters = ["escape" => 1, "t" => 5];
        static $functions = ["attach_library" => 1, "path" => 14, "url" => 51];

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
