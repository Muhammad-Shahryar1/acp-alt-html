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

/* themes/custom/acp/templates/page--node--2.html.twig */
class __TwigTemplate_0cf02fe2c48ce4dddc04e750325a03da extends Template
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
        yield from $this->loadTemplate("@acp/sec-header.html.twig", "themes/custom/acp/templates/page--node--2.html.twig", 1)->unwrap()->yield($context);
        // line 3
        yield "
<div class=\"mb-92 bg-[#009595]\" style=\"margin-bottom:200px;\" >
  <div class=\"max-h-screen py-20 container mx-auto px-4 xl:px-16 pb-10 md:pt-28 gap-5 flex flex-col items-center justify-center\">
    <div id=\"pageNavigation\" class=\"flex gap-1 my-6 items-center container mx-auto\">
      ";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 7) == "ar")) {
            // line 8
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-100 hover:text-gray-200\">الرئيسية</a>

        <!-- Separator (Arrow pointing left for Arabic) -->
        <svg class=\"w-4 h-4 text-green-400 rotate-180\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewbox=\"0 0 24 24\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
        </svg>

        <!-- Contact Us (Arabic) -->
        <a href=\"";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/2\" class=\"text-green-400 hover:text-green-400\">تواصل معنا</a>

      ";
        } else {
            // line 19
            yield "        <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-100 hover:text-gray-200\">Home</a>

        <!-- Separator (Normal direction for English) -->
        <svg class=\"w-4 h-4 text-green-400\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewbox=\"0 0 24 24\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5l7 7-7 7\"/>
        </svg>

        <!-- Contact Us (English) -->
        <a href=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "contact-us\" class=\"text-green-400 hover:text-green-400\">Contact Us</a>
      ";
        }
        // line 29
        yield "    </div>

    <div class=\"relative w-full flex justify-center\">
      <!-- Green card -->
      <div class=\"absolute top-0 right-8 md:right-0 w-[90%] xl:h-[100%] lg:h-[110%] md:h-[400px] sm:h-[350px] h-[400px] bg-[#32D2A0] -rotate-5 z-10\"></div>

      <!-- White card -->
      <div
        class=\"relative bg-white contact-form-card rounded-2xl space-y-12 sm:space-y-16 md:space-y-20 -mb-32 md:-mb-40 shadow-md w-full p-6 sm:p-8 md:p-12 xl:pl-40 xl:pr-24 lg:py-40 py-10 z-10\">

        <!-- Header Text -->
        <div class=\"mb-4 sm:mb-6\">
          <h1 id=\"hero-heading\" class=\"text-2xl md:text-3xl lg:text-4xl xl:text-[51px] mb-8 sm:mb-12 md:mb-16 lg:mb-20 leading-[1.1em] text-[#566578] font-bold\" data-i18n=\"main.heading\">
            ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 42) == "ar")) {
            // line 43
            yield "              هل لديك أي أسئلة؟ نحن هنا للإجابة عليها
            ";
        } else {
            // line 45
            yield "              Any questions? We are here to answer them!
            ";
        }
        // line 47
        yield "          </h1>
        </div>

        <!-- Form (AJAX submission, no redirect) -->
        <form";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "attributes", [], "any", false, false, true, 51), "addClass", [["space-y-6", "contact-form"]], "method", false, false, true, 51), "html", null, true);
        yield " 
          action=\"/contact/contact_us_form\" 
          method=\"post\" 
          id=\"contact-message-contact-us-form-form\" 
          accept-charset=\"UTF-8\"
        >
          ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "form_build_id", [], "any", false, false, true, 57), "html", null, true);
        yield "
          ";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "form_token", [], "any", false, false, true, 58), "html", null, true);
        yield "
          ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "form_id", [], "any", false, false, true, 59), "html", null, true);
        yield "

          <div class=\"grid grid-cols-1 sm:grid-cols-2 input-fields-container lg:grid-cols-3 overflow-hidden gap-4 sm:gap-6\">
            ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 62) == "ar")) {
            // line 63
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_name", [], "any", false, false, true, 63), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "اسمك", "aria-label" => "اسمك", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm"]]]), "html", null, true);
            yield "
              ";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_email", [], "any", false, false, true, 64), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "عنوان البريد الإلكتروني", "aria-label" => "عنوان البريد الإلكتروني", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm"]]]), "html", null, true);
            yield "
              ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_phone_number", [], "any", false, false, true, 65), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "رقم الهاتف (اختياري)", "aria-label" => "رقم الهاتف (اختياري)", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm", "sm:col-span-2", "lg:col-span-1"]]]), "html", null, true);
            yield "
            ";
        } else {
            // line 67
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_name", [], "any", false, false, true, 67), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "Your Name", "aria-label" => "Your Name", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm"]]]), "html", null, true);
            yield "
              ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_email", [], "any", false, false, true, 68), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "Email Address", "aria-label" => "Email Address", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm"]]]), "html", null, true);
            yield "
              ";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_phone_number", [], "any", false, false, true, 69), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "Phone Number (optional)", "aria-label" => "Phone Number (optional)", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm", "sm:col-span-2", "lg:col-span-1"]]]), "html", null, true);
            yield "
            ";
        }
        // line 71
        yield "          </div>

          <div class=\"message-field-container\">
            ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 74) == "ar")) {
            // line 75
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_message", [], "any", false, false, true, 75), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "الرسالة", "aria-label" => "الرسالة", "rows" => "3", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm"]]]), "html", null, true);
            yield "
            ";
        } else {
            // line 77
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "field_message", [], "any", false, false, true, 77), ["#title_display" => "invisible", "#attributes" => ["placeholder" => "Message", "aria-label" => "Message", "rows" => "3", "class" => ["border-b", "w-full", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "placeholder:text-black", "border-gray-300", "focus:border-gray-600", "pb-4", "text-sm"]]]), "html", null, true);
            yield "
            ";
        }
        // line 79
        yield "          </div>

          <!-- Submit Button -->
          <div class=\"pt-4\">
            ";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["contact_us_form"] ?? null), "actions", [], "any", false, false, true, 83), "submit", [], "any", false, false, true, 83), ["#attributes" => ["class" => ["bg-[#32D2A0]", "text-white", "px-8", "sm:px-12", "py-3", "sm:py-4", "rounded-lg", "shadow", "text-sm", "w-full", "sm:w-auto", "flex", "items-center", "justify-center", "gap-2", "contact-submit-btn", "focus:outline-none", "focus:ring-2", "focus:ring-emerald-500", "focus:ring-offset-2", "hover:bg-[#2AB890]", "transition-colors"], "aria-label" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 86
($context["language"] ?? null), "id", [], "any", false, false, true, 86) == "ar")) ? ("إرسال الرسالة") : ("Send message"))], "#value" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 88
($context["language"] ?? null), "id", [], "any", false, false, true, 88) == "ar")) ? ("إرسال") : ("Send"))]), "html", null, true);
        // line 89
        yield "
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<div style=\"padding-bottom:100px;\"></div>

";
        // line 102
        yield "<div 
  id=\"contactSuccessModal\"
  class=\"fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4\"
  aria-hidden=\"true\"
>
  <div
    class=\"relative w-full max-w-md mx-auto rounded-2xl bg-white shadow-xl overflow-hidden
    ";
        // line 109
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 109) == "ar")) {
            yield " text-right ";
        }
        yield "\"
    ";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 110) == "ar")) {
            yield " dir=\"rtl\" ";
        }
        // line 111
        yield "  >
    ";
        // line 113
        yield "    <div class=\"h-1 w-full bg-gradient-to-r from-[#009595] via-[#32D2A0] to-[#00D3B4]\"></div>

    <div class=\"p-6 sm:p-8\">
      ";
        // line 117
        yield "      <button
        type=\"button\"
        class=\"absolute top-3 ";
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 119) == "ar")) {
            yield "left-3";
        } else {
            yield "right-3";
        }
        yield " rounded-full p-1.5 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition\"
        data-close-modal
        aria-label=\"";
        // line 121
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 121) == "ar")) {
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
        // line 129
        yield "      <div class=\"flex justify-center mb-4\">
        <div class=\"flex items-center justify-center h-14 w-14 rounded-full bg-[#E6FFF7]\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-[#32D2A0]\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
              d=\"M9 12l2 2 4-4M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
          </svg>
        </div>
      </div>

      ";
        // line 139
        yield "      <h2 class=\"text-xl sm:text-2xl font-semibold text-[#1F2933] mb-2 text-center\">
        ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 140) == "ar")) {
            // line 141
            yield "          شكرًا لتواصلك معنا!
        ";
        } else {
            // line 143
            yield "          Thank you for your submission!
        ";
        }
        // line 145
        yield "      </h2>

      <p class=\"text-sm sm:text-base text-gray-600 mb-6 text-center leading-relaxed\">
        ";
        // line 148
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 148) == "ar")) {
            // line 149
            yield "          سيقوم فريقنا بالتواصل معك قريبًا.
        ";
        } else {
            // line 151
            yield "          Our team will contact you soon.
        ";
        }
        // line 153
        yield "      </p>

      ";
        // line 156
        yield "      <div class=\"flex flex-col sm:flex-row gap-3 sm:gap-4\">
        <button
          type=\"button\"
          data-close-modal
          class=\"w-full inline-flex items-center justify-center rounded-xl border border-gray-200
                 px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition\"
        >
          ";
        // line 163
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 163) == "ar")) {
            yield "إغلاق";
        } else {
            yield "Close";
        }
        // line 164
        yield "        </button>

        <a
          href=\"";
        // line 167
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\"
          class=\"w-full inline-flex items-center justify-center rounded-xl bg-[#32D2A0]
                 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#2AB38A] transition\"
        >
          ";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 171) == "ar")) {
            yield "العودة إلى الرئيسية";
        } else {
            yield "Back to Home";
        }
        // line 172
        yield "        </a>
      </div>
    </div>
  </div>
</div>

";
        // line 181
        yield "<script>
  (function () {
    var form = document.getElementById('contact-message-contact-us-form-form');
    var modal = document.getElementById('contactSuccessModal');
    if (!form || !modal) return;

    var closeButtons = modal.querySelectorAll('[data-close-modal]');
    var submitBtn = form.querySelector('.contact-submit-btn');
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
        // line 221
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 221) == "ar")) {
            yield "جارٍ الإرسال...";
        } else {
            yield "Sending...";
        }
        yield "';
        } else {
          submitBtn.innerText = '";
        // line 223
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 223) == "ar")) {
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
        // Even if Drupal responds with a redirect, fetch follows it.
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
        // line 246
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 246) == "ar")) {
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
        // line 262
        yield from $this->loadTemplate("@acp/footer.html.twig", "themes/custom/acp/templates/page--node--2.html.twig", 262)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "contact_us_form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/acp/templates/page--node--2.html.twig";
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
        return array (  456 => 262,  433 => 246,  403 => 223,  394 => 221,  352 => 181,  344 => 172,  338 => 171,  331 => 167,  326 => 164,  320 => 163,  311 => 156,  307 => 153,  303 => 151,  299 => 149,  297 => 148,  292 => 145,  288 => 143,  284 => 141,  282 => 140,  279 => 139,  268 => 129,  254 => 121,  245 => 119,  241 => 117,  236 => 113,  233 => 111,  229 => 110,  223 => 109,  214 => 102,  202 => 89,  200 => 88,  199 => 86,  198 => 83,  192 => 79,  186 => 77,  180 => 75,  178 => 74,  173 => 71,  168 => 69,  164 => 68,  159 => 67,  154 => 65,  150 => 64,  145 => 63,  143 => 62,  137 => 59,  133 => 58,  129 => 57,  120 => 51,  114 => 47,  110 => 45,  106 => 43,  104 => 42,  89 => 29,  84 => 27,  72 => 19,  66 => 16,  54 => 8,  52 => 7,  46 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/page--node--2.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/page--node--2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 7];
        static $filters = ["escape" => 51, "merge" => 63];
        static $functions = ["path" => 8, "url" => 16];

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
