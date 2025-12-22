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

/* themes/custom/acp/templates/page--node--3.html.twig */
class __TwigTemplate_66911117ea1ada33ed5398e9d0366aa4 extends Template
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
        yield from $this->loadTemplate("@acp/sec-header.html.twig", "themes/custom/acp/templates/page--node--3.html.twig", 1)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"partner-page-section bg-[#009595]\">
  <div class=\"py-20 container mx-auto px-4 xl:px-16 pb-10 md:pt-10 gap-5 flex flex-col items-center justify-center\">

    <!-- Page Navigation -->
    <div id=\"pageNavigation\" class=\"flex gap-1 pl-5 my-10 items-center container mx-auto\">
      ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 9) == "ar")) {
            // line 10
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-100 hover:text-gray-200\">الرئيسية</a>
        <svg class=\"w-4 h-4 text-green-200\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
        </svg>
        <a href=\"";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/3\" class=\"text-green-400 hover:text-green-400\">نموذج الشريك</a>
      ";
        } else {
            // line 16
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-100 hover:text-gray-200\">Home</a>
        <svg class=\"w-4 h-4 text-green-200\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\" />
        </svg>
        <a href=\"";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "become-partner\" class=\"text-green-400 hover:text-green-400\">Become a Partner</a>
      ";
        }
        // line 22
        yield "    </div>

    <div class=\"relative w-full flex justify-center\">
      <!-- Green card -->
      <div class=\"absolute top-0 right-8 md:right-4 w-[90%] xl:h-[100%] lg:h-[110%] md:h-[400px] sm:h-[350px] h-[400px] bg-[#32D2A0] -rotate-5 z-10\"></div>

      <!-- White card -->
      <div class=\"relative bg-white contact-form-card rounded-2xl space-y-12 sm:space-y-16 md:space-y-20 -mb-32 md:-mb-[700px] shadow-md w-full p-6 sm:p-8 md:p-20 lg:py-40 py-10 z-10\">

        <!-- Header Text -->
        <div class=\"mb-4 sm:mb-6\">
          <h1 id=\"hero-heading\" class=\"text-2xl md:text-3xl lg:text-4xl xl:text-[51px] mb-4 leading-[1.1em] text-[#44505E] font-bold\">
            ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 34) == "ar")) {
            // line 35
            yield "              نموذج الشريك
            ";
        } else {
            // line 37
            yield "              Partner Information
            ";
        }
        // line 39
        yield "          </h1>

          <p class=\"text-gray-600 font-medium text-sm sm:text-base lg:text-lg\">
            ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 42) == "ar")) {
            // line 43
            yield "             سجّل اهتمامك في أن تصبح شريكًا قيّمًا اليوم! من خلال انضمامك إلى شبكتنا، ستحصل على إمكانية الوصول إلى موارد حصرية وبيئة تعاونية مصممة لتسريع نجاحك. املأ النموذج أدناه للبدء، وسيتواصل معك أحد أعضاء فريق الشراكات لدينا لاستكشاف كيفية عملنا معًا لتحقيق الأهداف المشتركة.
            ";
        } else {
            // line 45
            yield "             Register your interest in becoming a valued partner today! By joining our network, you’ll gain access to exclusive resources and collaborative environment designed to accelerate your success. Fill out the form below to get started, and one of our partnership team will reach out to explore how we can work together to achieve shared goals.
            ";
        }
        // line 47
        yield "          </p>
        </div>

        <!-- Form (AJAX submission, no redirect) -->
        <form";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "attributes", [], "any", false, false, true, 51), "addClass", [["space-y-6", "contact-form"]], "method", false, false, true, 51), "html", null, true);
        yield " class=\"overflow-hidden\" action=\"/contact/partner_form\" method=\"post\" id=\"contact-message-partner-form\" accept-charset=\"UTF-8\">
          ";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "form_build_id", [], "any", false, false, true, 52), "html", null, true);
        yield "
          ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "form_token", [], "any", false, false, true, 53), "html", null, true);
        yield "
          ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "form_id", [], "any", false, false, true, 54), "html", null, true);
        yield "

          <!-- Organization Info -->
          <div class=\"space-y-10 mt-10\">
            <h2 class=\"text-xl sm:text-2xl font-bold text-[#44505E]\">
              ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 59) == "ar")) {
            yield " معلومات الجهة ";
        } else {
            yield " Organization Information ";
        }
        // line 60
        yield "            </h2>

            <div class=\"grid grid-cols-1 partner-info-container sm:grid-cols-2 lg:grid-cols-3 gap-6\">
              ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_organization_name", [], "any", false, false, true, 63), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 63) == "ar")) ? ("اسم الجهة") : ("Organization Name")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 63) == "ar")) ? ("اسم الجهة") : ("Organization Name")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
              ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_organization_website", [], "any", false, false, true, 64), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 64) == "ar")) ? ("الموقع الالكتروني") : ("Organization Website")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 64) == "ar")) ? ("الموقع الالكتروني") : ("Organization Website")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
              ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_organization_industry", [], "any", false, false, true, 65), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 65) == "ar")) ? ("القطاع") : ("Industry")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 65) == "ar")) ? ("القطاع") : ("Industry")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
              ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_country", [], "any", false, false, true, 66), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 66) == "ar")) ? ("الدولة") : ("Country")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 66) == "ar")) ? ("الدولة") : ("Country")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
            </div>
          </div>

          <!-- Contact Info -->
          <div class=\"space-y-10 mt-10\">
            <h2 class=\"text-xl sm:text-2xl font-bold text-[#44505E]\">
              ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 73) == "ar")) {
            yield " ممثّل الجهة ";
        } else {
            yield " Contact Information ";
        }
        // line 74
        yield "            </h2>

            <div class=\"grid grid-cols-1 sm:grid-cols-2 partner-contactinfo-container max-w-4xl gap-10\">
              ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_first_name", [], "any", false, false, true, 77), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 77) == "ar")) ? ("الاسم الاول") : ("First Name")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 77) == "ar")) ? ("الاسم الاول") : ("First Name")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
              ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_last_name", [], "any", false, false, true, 78), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 78) == "ar")) ? ("الاسم الاخير") : ("Last Name")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 78) == "ar")) ? ("الاسم الاخير") : ("Last Name")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
              ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_phone", [], "any", false, false, true, 79), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 79) == "ar")) ? ("رقم الجوال") : ("Phone Number")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 79) == "ar")) ? ("رقم الجوال") : ("Phone Number")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
              ";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_email_partner", [], "any", false, false, true, 80), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 80) == "ar")) ? ("البريد الالكتروني") : ("Email")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 80) == "ar")) ? ("البريد الالكتروني") : ("Email")), "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "border-gray-300", "focus:border-gray-600", "pb-2", "text-sm"]]]), "html", null, true);
        yield "
            </div>
          </div>

          <!-- Partner Message -->
          <div class=\"flex partner-message-container flex-col mt-10\">
            <label for=\"edit-field-partner-message-0-value\" class=\"font-semibold\" data-i18n=\"form.contributionLabel\">
              ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 87) == "ar")) {
            // line 88
            yield "                كيف ترغب الجهة بالمساهمة في برنامج الربط الجوي
              ";
        } else {
            // line 90
            yield "                How would you like to contribute to Saudi Air Connectivity Program?
              ";
        }
        // line 92
        yield "            </label>

            ";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "field_partner_message", [], "any", false, false, true, 94), ["#title_display" => "invisible", "#attributes" => ["placeholder" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 97
($context["language"] ?? null), "id", [], "any", false, false, true, 97) == "ar")) ? ("اكتب هنا...") : ("Type your message here...")), "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["language"] ?? null), "id", [], "any", false, false, true, 98) == "ar")) ? ("كيف ترغب الجهة بالمساهمة في برنامج الربط الجوي") : ("How would you like to contribute to Saudi Air Connectivity Program?")), "rows" => "10", "class" => ["border", "p-4", "max-w-4xl", "w-full", "rounded-xl", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "mt-5", "border-gray-300", "focus:border-gray-600", "text-sm"]]]), "html", null, true);
        // line 115
        yield "
          </div>

          <!-- Submit -->
          <div class=\"mt-4\">
            ";
        // line 120
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["partner_form"] ?? null), "actions", [], "any", false, false, true, 120), "submit", [], "any", false, false, true, 120), ["#attributes" => ["class" => ["bg-[#32D2A0]", "text-white", "px-8", "sm:px-12", "py-3", "sm:py-4", "rounded-lg", "shadow", "text-sm", "w-full", "sm:w-auto", "flex", "items-center", "justify-center", "partner-submit-btn", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "focus:ring-offset-2", "hover:bg-[#2AB890]", "transition-colors"], "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 123
($context["language"] ?? null), "id", [], "any", false, false, true, 123) == "ar")) ? ("إرسال معلومات الشريك") : ("Send partner information"))], "#value" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 125
($context["language"] ?? null), "id", [], "any", false, false, true, 125) == "ar")) ? ("إرسال") : ("Send"))]), "html", null, true);
        // line 126
        yield "
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div style=\"padding-bottom:100px;\"></div>

";
        // line 139
        yield "<div 
  id=\"partnerSuccessModal\"
  class=\"fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4\"
  aria-hidden=\"true\"
>
  <div
    class=\"relative w-full max-w-md mx-auto rounded-2xl bg-white shadow-xl overflow-hidden
    ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 146) == "ar")) {
            yield " text-right ";
        }
        yield "\"
    ";
        // line 147
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 147) == "ar")) {
            yield " dir=\"rtl\" ";
        }
        // line 148
        yield "  >
    ";
        // line 150
        yield "    <div class=\"h-1 w-full bg-gradient-to-r from-[#009595] via-[#32D2A0] to-[#00D3B4]\"></div>

    <div class=\"p-6 sm:p-8\">
      ";
        // line 154
        yield "      <button
        type=\"button\"
        class=\"absolute top-3 ";
        // line 156
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 156) == "ar")) {
            yield "left-3";
        } else {
            yield "right-3";
        }
        yield " rounded-full p-1.5 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition\"
        data-close-modal
        aria-label=\"";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 158) == "ar")) {
            yield "إغلاق";
        } else {
            yield "Close";
        }
        yield "\"
      >
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5 text-gray-500\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
          <path fill-rule=\"evenodd\" d=\"M10 8.586L13.95 4.636L15.364 6.05L11.414 10L15.364 13.95L13.95 15.364L10 11.414L6.05 15.364L4.636 13.95L8.586 10L4.636 6.05L6.05 4.636L10 8.586Z\" clip-rule=\"evenodd\" />
        </svg>
      </button>

      ";
        // line 166
        yield "      <div class=\"flex justify-center mb-4\">
        <div class=\"flex items-center justify-center h-14 w-14 rounded-full bg-[#E6FFF7]\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-[#32D2A0]\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
              d=\"M9 12l2 2 4-4M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
          </svg>
        </div>
      </div>

      ";
        // line 176
        yield "      <h2 class=\"text-xl sm:text-2xl font-semibold text-[#1F2933] mb-2 text-center\">
        ";
        // line 177
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 177) == "ar")) {
            // line 178
            yield "          شكرًا لاهتمامك بأن تصبح شريكًا!
        ";
        } else {
            // line 180
            yield "          Thank you for your interest in becoming a partner!
        ";
        }
        // line 182
        yield "      </h2>

      <p class=\"text-sm sm:text-base text-gray-600 mb-6 text-center leading-relaxed\">
        ";
        // line 185
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 185) == "ar")) {
            // line 186
            yield "          سيقوم فريق الشراكات لدينا بالتواصل معك قريبًا.
        ";
        } else {
            // line 188
            yield "          Our partnerships team will contact you soon.
        ";
        }
        // line 190
        yield "      </p>

      ";
        // line 193
        yield "      <div class=\"flex flex-col sm:flex-row gap-3 sm:gap-4\">
        <button
          type=\"button\"
          data-close-modal
          class=\"w-full inline-flex items-center justify-center rounded-xl border border-gray-200
                 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition\"
        >
          ";
        // line 200
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 200) == "ar")) {
            yield "إغلاق";
        } else {
            yield "Close";
        }
        // line 201
        yield "        </button>

        <a
          href=\"";
        // line 204
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\"
          class=\"w-full inline-flex items-center justify-center rounded-xl bg-[#32D2A0]
                 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#2AB38A] transition\"
        >
          ";
        // line 208
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 208) == "ar")) {
            yield "العودة إلى الرئيسية";
        } else {
            yield "Back to Home";
        }
        // line 209
        yield "        </a>
      </div>
    </div>
  </div>
</div>

";
        // line 218
        yield "<script>
  (function () {
    var form = document.getElementById('contact-message-partner-form');
    var modal = document.getElementById('partnerSuccessModal');
    if (!form || !modal) return;

    var closeButtons = modal.querySelectorAll('[data-close-modal]');
    var submitBtn = form.querySelector('.partner-submit-btn');
    var originalBtnText = submitBtn ? (submitBtn.value || submitBtn.innerText) : '';

    function openModal() {
      modal.classList.remove('hidden');
      modal.classList.add('flex'); // so items-center/justify-center work
      document.body.classList.add('overflow-hidden');
    }

    function closeModal() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.classList.remove('overflow-hidden');
    }

    closeButtons.forEach(function (btn) {
      btn.addEventListener('click', closeModal);
    });

    // Close on backdrop click
    modal.addEventListener('click', function (e) {
      if (e.target === modal) {
        closeModal();
      }
    });

    // Handle AJAX submit
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      if (submitBtn) {
        submitBtn.disabled = true;
        if (submitBtn.tagName.toLowerCase() === 'input') {
          submitBtn.value = '";
        // line 258
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 258) == "ar")) {
            yield "جارٍ الإرسال...";
        } else {
            yield "Sending...";
        }
        yield "';
        } else {
          submitBtn.innerText = '";
        // line 260
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 260) == "ar")) {
            yield "جارٍ الإرسال...";
        } else {
            yield "Sending...";
        }
        yield "';
        }
      }

      var formData = new FormData(form);

      fetch(form.action, {
        method: 'POST',
        body: formData,
        credentials: 'same-origin'
      })
      .then(function (response) {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        // Reset the form and show success modal
        form.reset();
        openModal();
      })
      .catch(function (error) {
        console.error('Form submission error:', error);
        alert('";
        // line 282
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 282) == "ar")) {
            yield "حدث خطأ أثناء إرسال النموذج. يرجى المحاولة مرة أخرى.";
        } else {
            yield "There was an error submitting the form. Please try again.";
        }
        yield "');
      })
      .finally(function () {
        if (submitBtn) {
          submitBtn.disabled = false;
          if (submitBtn.tagName.toLowerCase() === 'input') {
            submitBtn.value = originalBtnText;
          } else {
            submitBtn.innerText = originalBtnText;
          }
        }
      });
    });
  })();
</script>

";
        // line 298
        yield from $this->loadTemplate("@acp/footer.html.twig", "themes/custom/acp/templates/page--node--3.html.twig", 298)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "partner_form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/acp/templates/page--node--3.html.twig";
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
        return array (  495 => 298,  472 => 282,  443 => 260,  434 => 258,  392 => 218,  384 => 209,  378 => 208,  371 => 204,  366 => 201,  360 => 200,  351 => 193,  347 => 190,  343 => 188,  339 => 186,  337 => 185,  332 => 182,  328 => 180,  324 => 178,  322 => 177,  319 => 176,  308 => 166,  294 => 158,  285 => 156,  281 => 154,  276 => 150,  273 => 148,  269 => 147,  263 => 146,  254 => 139,  242 => 126,  240 => 125,  239 => 123,  238 => 120,  231 => 115,  229 => 98,  228 => 97,  227 => 94,  223 => 92,  219 => 90,  215 => 88,  213 => 87,  203 => 80,  199 => 79,  195 => 78,  191 => 77,  186 => 74,  180 => 73,  170 => 66,  166 => 65,  162 => 64,  158 => 63,  153 => 60,  147 => 59,  139 => 54,  135 => 53,  131 => 52,  127 => 51,  121 => 47,  117 => 45,  113 => 43,  111 => 42,  106 => 39,  102 => 37,  98 => 35,  96 => 34,  82 => 22,  77 => 20,  69 => 16,  64 => 14,  56 => 10,  54 => 9,  46 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/page--node--3.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/page--node--3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 9];
        static $filters = ["escape" => 51, "merge" => 63];
        static $functions = ["path" => 10, "url" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'merge'],
                ['path', 'url'],
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
