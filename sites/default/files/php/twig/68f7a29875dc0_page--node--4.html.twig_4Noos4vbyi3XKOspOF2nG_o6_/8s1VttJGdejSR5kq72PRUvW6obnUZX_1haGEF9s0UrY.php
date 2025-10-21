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

/* themes/custom/acp/templates/page--node--4.html.twig */
class __TwigTemplate_5c46fb93121313658bd25d476ee17cf6 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("acp/media-scripts"), "html", null, true);
        yield "
";
        // line 2
        yield from $this->loadTemplate("@acp/sec-header.html.twig", "themes/custom/acp/templates/page--node--4.html.twig", 2)->unwrap()->yield($context);
        // line 4
        yield "
<section class=\"xl:container mx-auto py-12 sm:pb-20 sm:pt-10 px-4 sm:px-6 lg:px-8\">
\t<div id=\"pageNavigation\" class=\"flex gap-1 my-4 items-center text-lg container pl-4\">
\t\t";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 7) == "ar")) {
            // line 8
            yield "\t\t\t<a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-500 hover:text-gray-600\">الرئيسية</a>

\t\t\t<!-- Separator -->
\t\t\t<svg class=\"w-4 h-4 text-[#00C951] rotate-180\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewbox=\"0 0 24 24\">
\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"/>
\t\t\t</svg>

\t\t\t<!-- Media Center Arabic -->
\t\t\t<a href=\"";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "/node/4\" class=\"text-[#00C951] hover:text-green-500\">المركز الإعلامي</a>

\t\t";
        } else {
            // line 19
            yield "\t\t\t<a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"text-gray-500 hover:text-gray-600\">Home</a>

\t\t\t<!-- Separator -->
\t\t\t<svg class=\"w-4 h-4 text-[#00C951]\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewbox=\"0 0 24 24\">
\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"/>
\t\t\t</svg>

\t\t\t<!-- Media Center English -->
\t\t\t<a href=\"";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            yield "media\" class=\"text-[#00C951] hover:text-green-500\">Media Center</a>
\t\t";
        }
        // line 29
        yield "\t</div>

\t<div class=\"bg-[#b8dadc] py-10 px-5 sm:px-10 xl:px-20 rounded-2xl w-full\">
\t\t<div class=\"flex gap-4 items-center mt-5\">
\t\t\t<img src=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/assets/pen.png\" alt=\"Pen\" class=\"w-10 h-10 inline-block object-cover\"/>
\t\t\t<h2 class=\"font-bold text-[#495057] text-2xl\" data-i18n=\"media.newsTitle\">
\t\t\t\t";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 35) == "ar")) {
            // line 36
            yield "\t\t\t\t\tالأخبار
\t\t\t\t";
        } else {
            // line 38
            yield "\t\t\t\t\tNews
\t\t\t\t";
        }
        // line 40
        yield "\t\t\t</h2>

\t\t</div>

\t\t<hr class=\"border my-5 border-white/70 w-full\"/>
\t\t<!-- News Modal -->
\t\t<!-- POPUP MODAL -->
\t\t\t<div id=\"newsModal\" class=\"fixed inset-0 bg-black/50 hidden items-center justify-center z-50\"> <div
\t\t\t\tclass=\"bg-white max-h-[90vh] overflow-y-auto rounded-xl max-w-[95%] lg:max-w-4xl w-full px-6 py-10 relative\">
\t\t\t\t<!-- Close button -->
\t\t\t\t<button id=\"closeModal\" class=\"absolute cursor-pointer top-3 right-3 text-gray-600 hover:text-black text-3xl\">
\t\t\t\t\t&times;
\t\t\t\t</button>

\t\t\t\t<!-- Modal Content -->
\t\t\t\t<h2 id=\"modalTitle\" class=\"text-xl font-bold mb-2 text-gray-900\"></h2>
\t\t\t\t<p id=\"modalDate\" class=\"text-sm text-gray-500 mb-4\"></p>

\t\t\t\t<div class=\"relative w-full h-56 mb-4\">
\t\t\t\t\t<img id=\"modalImage\" src=\"/placeholder.svg\" alt=\"\" class=\"w-full h-full object-cover rounded-md\"/>
\t\t\t\t</div>

\t\t\t\t<p id=\"modalDescription\" class=\"text-gray-700 leading-relaxed\"></p>
\t\t\t</div>
\t\t</div>
\t\t<!-- News Grid Section -->
\t\t<div
\t\t\tclass=\"grid grid-cols-1 lg:grid-cols-2 gap-5 mt-10 items-stretch\">
\t\t\t<!-- LEFT COLUMN -->
\t\t\t<div
\t\t\t\tclass=\"col-span-1 lg:h-[32rem] h-auto\">
\t\t\t\t<!-- Single Card with Progress Bar and Auto Image Slider -->
\t\t\t\t<div
\t\t\t\t\tclass=\"max-w-full mx-auto bg-[#009595] rounded-2xl pb-6 overflow-hidden shadow-lg h-full flex flex-col\">
\t\t\t\t\t<!-- Image Gallery with Progress Bar -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"relative h-72 overflow-hidden\">
\t\t\t\t\t\t<!-- Progress bar at top of image -->
\t\t\t\t\t\t<div class=\"hidden absolute top-6 left-1/2 -translate-x-1/2 w-[90%] h-[3px] bg-white/80 bg-opacity-20 z-10\">
\t\t\t\t\t\t\t<div class=\"progress-bar h-full bg-green-500 transition-all duration-100 ease-linear\" style=\"width: 0%\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"image-gallery relative w-full h-full\">
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"./assets/slide1.jpg\" alt=\"Gallery Image 1\" class=\"gallery-image image1 absolute rounded-2xl inset-0 w-full h-full object-cover transition-opacity duration-500\" style=\"opacity: 1\"/>
\t\t\t\t\t\t<!-- <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    src=\"./assets/slide2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    alt=\"Gallery Image 2\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    class=\"gallery-image image2 absolute inset-0 w-full h-full object-cover transition-opacity duration-500\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    style=\"opacity: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    src=\"./assets/slide3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    alt=\"Gallery Image 3\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    class=\"gallery-image absolute image3 inset-0 w-full h-full object-cover transition-opacity duration-500\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    style=\"opacity: 0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  /> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Text Content -->
\t\t\t\t\t<div class=\"text-white pt-5 px-8 md:px-12 mb-4 flex-1\">
\t\t\t\t\t\t<h3 id=\"bigCardTitle\" class=\"text-xl leading-7 md:text-2xl font-semibold mb-2\">
\t\t\t\t\t\t\tPlaceholder Text
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p id=\"bigCardDesc\" class=\"text-sm opacity-90\">
\t\t\t\t\t\t\tPlaceholder Text Used To Fill Space
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Button -->
\t\t\t\t\t<div class=\"md:px-12 flex flex-col items-start px-8\">
\t\t\t\t\t\t<a id=\"readMoreBtn\" href=\"#\" class=\"flex items-center gap-2 text-white font-light text-xs hover:underline\">
\t\t\t\t\t\t\t<span data-i18n=\"media.readMore\">
\t\t\t\t\t\t\t\t";
        // line 114
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 114) == "ar")) {
            // line 115
            yield "\t\t\t\t\t\t\t\t\tاقرأ المزيد
\t\t\t\t\t\t\t\t";
        } else {
            // line 117
            yield "\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t\t";
        }
        // line 119
        yield "\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<div class=\"bg-white p-[1px] rounded-full\">
\t\t\t\t\t\t\t\t<svg class=\"w-3 h-3\" fill=\"none\" stroke=\"black\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- RIGHT COLUMN -->
\t\t\t<div class=\"col-span-1 lg:h-[32rem] h-auto\">
\t\t\t\t<div
\t\t\t\t\tclass=\"lg:max-w-2xl mx-auto h-full\">
\t\t\t\t\t<!-- Articles Container -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"bg-white rounded-2xl shadow-lg p-6 h-full flex flex-col\">
\t\t\t\t\t\t<!-- Header Section -->
\t\t\t\t\t\t<div class=\"flex items-center justify-between mb-6\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"flex items-center gap-3\">
\t\t\t\t\t\t\t\t<!-- Filter Dropdown Button -->
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<button id=\"filter-btn\" class=\"p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200\" aria-label=\"Filter articles\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flex gap-1 flex-col\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"h-[2px] w-6 bg-black\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"h-[2px] w-6 bg-black\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"h-[2px] w-6 bg-black\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t<!-- Dropdown Menu -->
\t\t\t\t\t\t\t\t\t<div id=\"filter-dropdown\" class=\"absolute left-0 top-full mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg z-10 hidden\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"py-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Updated dropdown options to new categories -->
\t\t\t\t\t\t\t\t\t\t\t<button class=\"filter-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700\" data-filter=\"featured\" data-i18n=\"media.featured\">
\t\t\t\t\t\t\t\t\t\t\t\tFeatured
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"filter-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700\" data-filter=\"mostliked\" data-i18n=\"media.mostLiked\">
\t\t\t\t\t\t\t\t\t\t\t\tMost Liked
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"filter-option w-full text-left px-4 py-2 hover:bg-gray-50 text-gray-700\" data-filter=\"trending\" data-i18n=\"media.topTrending\">
\t\t\t\t\t\t\t\t\t\t\t\tTop Trending
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h2 class=\"text-lg font-medium text-gray-800\" id=\"section-title\" data-i18n=\"media.featuredArticles\">
\t\t\t\t\t\t\t\t\tFeatured Articles
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Articles List -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tid=\"articles-container\" class=\"space-y-2 overflow-y-auto pr-2 h-100 lg:h-auto lg:flex-1\"><!-- Articles will be populated by JavaScript -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!-- Added new video section with two-column layout -->
<section class=\"max-w-7xl hidden mx-auto mt-16 px-4 sm:px-6 lg:px-8\">
\t<div
\t\tclass=\"bg-white py-12 sm:py-24 rounded-lg\">
\t\t<!-- First Row: Title and Horizontal Line -->
\t\t<div
\t\t\tclass=\"mb-16 px-16 flex items-center space-x-3\">
\t\t\t<!-- Video button -->
\t\t\t<button class=\"flex items-center justify-center w-8 h-8 bg-[#44505E] rounded-lg\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewbox=\"0 0 24 24\" class=\"w-4 h-4 bg-white text-[#44505E] rounded-full\">
\t\t\t\t\t<path d=\"M8 5v14l11-7z\"/>
\t\t\t\t</svg>
\t\t\t</button>

\t\t\t<!-- Text -->
\t\t\t<h2 class=\"text-2xl font-bold text-[#566578]\" data-i18n=\"media.newsUpdates\">
\t\t\t\tNews & Updates
\t\t\t</h2>
\t\t</div>
\t\t<div class=\"mb-16 px-16\">
\t\t\t<hr class=\"border-gray-300\"/>
\t\t</div>

\t\t<!-- Second Row: Two Column Layout -->
\t\t<div class=\"grid grid-cols-1 lg:grid-cols-[2.7fr_2.3fr]\">
\t\t\t<!-- Left Column: Video with dark background container (takes 3/5 of space on desktop) -->
\t\t\t<!-- Added dark navy background container with proper proportions -->
\t\t\t\t<div
\t\t\t\tclass=\"bg-slate-700 rounded-lg px-8 py-10 sm:px-24 sm:py-28\"> <!-- Video takes most of the container height -->
\t\t\t\t<div
\t\t\t\t\tclass=\"relative rounded-lg overflow-hidden aspect-video mb-6\">
\t\t\t\t\t<!-- Video Element with world map placeholder -->
\t\t\t\t\t<video id=\"mainVideo\" class=\"w-full h-full object-cover\" poster=\"/placeholder.svg?height=400&width=600\">
\t\t\t\t\t\t<source src=\"./assets/hero-video.mp4\" type=\"video/mp4\"/>
\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t</video>

\t\t\t\t\t<!-- Video Overlay with Play/Pause Button -->
\t\t\t\t\t<div id=\"videoOverlay\" class=\"absolute inset-0 bg-black/30 flex items-center justify-center\" style=\"background: url(./assets/videoBackground.png)\">
\t\t\t\t\t\t<button
\t\t\t\t\t\t\tid=\"playPauseBtn\" class=\"rounded-full p-4 transition-all duration-200 cursor-pointer\">
\t\t\t\t\t\t\t<!-- Play Icon (shown by default) -->
\t\t\t\t\t\t\t<svg id=\"playIcon\" class=\"w-16 h-16 text-[#44505E]\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path d=\"M8 5v14l11-7z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<!-- Pause Icon (hidden by default) -->
\t\t\t\t\t\t\t<svg id=\"pauseIcon\" class=\"w-16 h-16 text-[#44505E] hidden\" fill=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t<path d=\"M6 19h4V5H6v14zm8-14v14h4V5h-4z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Video Duration -->
\t\t\t\t\t<div id=\"videoDuration\" class=\"absolute top-4 right-4 bg-black/80 text-white text-sm px-2 py-1 rounded\">
\t\t\t\t\t\t00:00
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Video Title and Description at bottom of dark container -->
\t\t\t\t<!-- Updated text colors for dark background and positioned at bottom -->
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"text-2xl font-bold text-white mb-2\" data-i18n=\"media.featuredNews\">
\t\t\t\t\t\tFeatured News
\t\t\t\t\t</h3>
\t\t\t\t\t<p class=\"text-gray-300\" data-i18n=\"media.featuredNewsDesc\">
\t\t\t\t\t\tWatch the latest updates and stories from the Air Connectivity
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Program.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Right Column: Content (takes 2/5 of space on desktop) -->
\t\t\t<div class=\"flex flex-col justify-start items-center bg-gradient-to-r from-[#F8F9FA] to-[#E9ECEF] lg:h-[90%] lg:my-auto px-8 sm:px-0 py-16 mx-8 sm:mx-16 mt-16 lg:pt-20 lg:pb-0 lg:mx-0 \">
\t\t\t\t<div class=\"w-full sm:w-1/2\">
\t\t\t\t\t<h3 class=\"text-4xl font-bold text-[#44505E] mb-4\" data-i18n=\"media.latestNews\">
\t\t\t\t\t\tLatest News
\t\t\t\t\t</h3>
\t\t\t\t\t<p class=\"text-[#A5A5A5] mb-12 text-lg leading-5\" data-i18n=\"media.latestNewsDesc\">
\t\t\t\t\t\tStay updated with the most recent announcements, press releases,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                and updates from the Air Connectivity Program. Watch our
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                featured stories and explore the latest developments shaping
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Saudi Arabia's aviation and tourism sector.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!-- Adding new video cards slider section as separate section -->
<section
\tdir=\"ltr\" id=\"videoSection\"  class=\"xl:container  mx-auto my-20 px-4 sm:px-6 lg:px-8\">
\t<!-- First Row: Title and Navigation -->
\t<div
\t\tclass=\"flex flex-col md:flex-row items-center justify-between mb-8 gap-4\">
\t\t<!-- Title -->

\t\t<div
\t\t\tclass=\"pl-0 md:pl-16 flex-1 flex items-center space-x-3\">
\t\t\t<!-- Video button -->
\t\t\t<button class=\"flex items-center justify-center w-8 h-8 bg-[#44505E] rounded-lg\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewbox=\"0 0 24 24\" class=\"w-4 h-4 bg-white text-[#44505E] rounded-full\">
\t\t\t\t\t<path d=\"M8 5v14l11-7z\"/>
\t\t\t\t</svg>
\t\t\t</button>

\t\t\t<!-- Text -->
\t\t\t<h2 class=\"text-2xl font-bold text-[#566578]\" data-i18n=\"media.mediaHighlights\">
\t\t\t\t";
        // line 296
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, true, 296) == "ar")) {
            // line 297
            yield "\t\t\t\t\tتغطيات إعلامية
\t\t\t\t";
        } else {
            // line 299
            yield "\t\t\t\t\tMedia Highlights
\t\t\t\t";
        }
        // line 301
        yield "\t\t\t</h2>

\t\t</div>

\t\t<!-- Video Cards Slider Navigation with Progress Bar -->
\t\t<div
\t\t\tclass=\"flex items-center\">
\t\t\t<!-- Current Slide Number -->
\t\t\t<span id=\"videoCardsCurrentSlide\" class=\"text-normal text-[#AAB1BB] font-medium min-w-[2ch] text-right\">01</span>

\t\t\t<!-- Navigation Controls -->
\t\t\t<div class=\"flex items-center\">
\t\t\t\t<button id=\"videoCardsPrevBtn\" class=\"p-2 rounded-full\">
\t\t\t\t\t<svg class=\"w-7 h-7 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</button>

\t\t\t\t<!-- Progress Bar -->
\t\t\t\t<div class=\"w-24 h-1 bg-gray-200 rounded-full overflow-hidden\">
\t\t\t\t\t<div id=\"videoCardsProgressBar\" class=\"h-full bg-gray-800 rounded-full transition-all duration-300 ease-in-out\" style=\"width: 4%\"></div>
\t\t\t\t</div>

\t\t\t\t<button id=\"videoCardsNextBtn\" class=\"p-2 rounded-full\">
\t\t\t\t\t<svg class=\"w-7 h-7 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<!-- Total Slides -->
\t\t\t<span id=\"videoCardsTotalSlides\" class=\"text-normal text-[#AAB1BB] font-medium min-w-[2ch]\">25</span>
\t\t</div>
\t</div>

\t<!-- Second Row: Video Cards Slider -->
\t<div class=\"overflow-hidden\">
\t\t<div
\t\t\tid=\"videoCardsSliderTrack\" class=\"flex transition-transform duration-300 ease-in-out\"><!-- Video card slides will be generated by JavaScript -->
\t\t</div>
\t</div>
</section>
<div style=\"padding-bottom:20px;\"></div>

";
        // line 345
        yield from $this->loadTemplate("@acp/footer.html.twig", "themes/custom/acp/templates/page--node--4.html.twig", 345)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "base_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/acp/templates/page--node--4.html.twig";
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
        return array (  434 => 345,  388 => 301,  384 => 299,  380 => 297,  378 => 296,  199 => 119,  195 => 117,  191 => 115,  189 => 114,  113 => 40,  109 => 38,  105 => 36,  103 => 35,  98 => 33,  92 => 29,  87 => 27,  75 => 19,  69 => 16,  57 => 8,  55 => 7,  50 => 4,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/acp/templates/page--node--4.html.twig", "/home/u492849996/domains/orangered-dragonfly-781009.hostingersite.com/public_html/themes/custom/acp/templates/page--node--4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 2, "if" => 7];
        static $filters = ["escape" => 1];
        static $functions = ["attach_library" => 1, "path" => 8, "url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
