document.addEventListener("DOMContentLoaded", () => {
  const langButtons = document.querySelectorAll("#language-selector");

  langButtons.forEach((langButton) => {
    const currentLang = langButton?.dataset.lang || "en";

    langButton.addEventListener("click", () => {
      const isArabic = currentLang === "ar";
      let newUrl =
        window.location.origin +
        window.location.pathname +
        window.location.search;

      if (isArabic) {
        // Arabic → English
        newUrl = newUrl.replace("/ar/", "/");
      } else {
        // English → Arabic
        if (!window.location.pathname.startsWith("/ar/")) {
          newUrl =
            window.location.origin +
            "/ar" +
            window.location.pathname +
            window.location.search;
        }
      }

      window.location.href = newUrl;
    });
  });
});

(function ($, Drupal) {
  Drupal.behaviors.logosCarousel = {
    attach: function (context, settings) {
      // Only run once per page load
      if (context !== document) return;

      const container = document.getElementById("logosContainer");
      if (!container) return;

      // API endpoint
      const apiUrl = "/api/logos";

      fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
          if (!Array.isArray(data) || data.length === 0) return;

          // Clear existing
          container.innerHTML = "";

          // Build <img> tags
          data.forEach((item) => {
            // Create wrapper for consistent size and alignment
            const wrapper = document.createElement("div");
            wrapper.className =
              "flex items-center justify-center w-48 h-32 sm:w-64 sm:h-40 bg-transparent flex-shrink-0";

            const img = document.createElement("img");
            img.src = item.image_url;
            img.alt = item.title || "Logo";
            img.className =
              "max-w-full max-h-full object-contain opacity-60 hover:opacity-100 transition-opacity";

            wrapper.appendChild(img);
            container.appendChild(wrapper);
          });

          // Duplicate logos to make infinite scroll look seamless
          data.forEach((item) => {
            // Create wrapper for consistent size and alignment
            const wrapper = document.createElement("div");
            wrapper.className =
              "flex items-center justify-center w-48 h-32 sm:w-64 sm:h-40 bg-transparent flex-shrink-0";

            const img = document.createElement("img");
            img.src = item.image_url;
            img.alt = item.title || "Logo";
            img.className =
              "max-w-full max-h-full object-contain opacity-60 hover:opacity-100 transition-opacity";

            wrapper.appendChild(img);
            container.appendChild(wrapper);
          });
        })
        .catch((err) => console.error("Logos API error:", err));
    },
  };
})(jQuery, Drupal);

document.addEventListener("DOMContentLoaded", () => {
  const path = window.location.pathname;
  console.log("Current path:", path);

  // Handle both `/ar` and `/ar/...`
  const isArabic = path === "/ar" || path.startsWith("/ar/");
  console.log("isArabic:", isArabic);
  const lang = document.documentElement.lang;

  const panel = document.querySelector("#panel-container");

  if (isArabic) {
    document.querySelector("#gsap-text").dir = lang === "ar" ? "rtl" : "ltr";
    document.querySelector("#airportName").style.textAlign = "right";

    document
      .getElementById("statistics-content")
      .classList.add(lang === "ar" ? "lg:!text-right" : "lg:!text-left");
    document
      .getElementById("statistics-content")
      .classList.remove(lang === "ar" ? "lg:!text-left" : "lg:!text-right");
    // General Pagination
    // document.querySelector("#flightsPaginationSlider").dir =
    //   lang === "ar" ? "ltr" : "ltr";
    document.querySelector("#continentPaginationSlider").dir =
      lang === "ar" ? "ltr" : "ltr";

    document.querySelector("#newspaginationslider").dir =
      lang === "ar" ? "rtl" : "ltr";

    document
      .getElementById("statistics-content")
      .classList.add(lang === "ar" ? "lg:!text-right" : "lg:!text-left");
    document
      .getElementById("statistics-content")
      .classList.remove(lang === "ar" ? "lg:!text-left" : "lg:!text-right");

    // Routes Navigation
    const routeNextBtn = document.getElementById("flight-next-page");
    const routePrevBtn = document.getElementById("flight-prev-page");
    routePrevBtn.classList.add(lang === "ar" ? "!rotate-180" : "rotate-0");
    routePrevBtn.classList.remove(lang === "ar" ? "!rotate-0" : "!rotate-180");
    routeNextBtn.classList.add(lang === "ar" ? "!rotate-180" : "!rotate-0");
    routeNextBtn.classList.remove(lang === "ar" ? "!rotate-0" : "!rotate-180");

    // News Slider
    document.querySelector("#sliderNewsSection").dir =
      lang === "ar" ? "rtl" : "ltr";
    // News Slider Navigation
    // Update button states
    const prevBtn = document.getElementById("news-prev");
    const nextBtn = document.getElementById("news-next");
    prevBtn.classList.add(lang === "ar" ? "!rotate-180" : "rotate-0");
    prevBtn.classList.remove(lang === "ar" ? "!rotate-0" : "!rotate-180");
    nextBtn.classList.add(lang === "ar" ? "!rotate-180" : "!rotate-0");
    nextBtn.classList.remove(lang === "ar" ? "!rotate-0" : "!rotate-180");
    // Infinite Slider
    document.querySelector("#infiniteImagesSlider").dir =
      lang === "ar" ? "ltr" : "ltr";
  } else {
    document.querySelector("#airportName").style.textAlign = "left";
  }

  if (panel) {
    if (isArabic) {
      panel.classList.add("right-[1%]");
      panel.classList.remove("left-[5%]");
    } else {
      panel.classList.add("left-[5%]");
      panel.classList.remove("right-[1%]");
    }
  }
});

// Navbar animation
window.addEventListener("scroll", function () {
  const header = document.getElementById("main-header");
  const mobileMenu = document.getElementById("mobile-menu");

  if (window.scrollY > 250) {
    header.classList.add("header-scrolled");
    header.classList.remove("header-transparent");
    if (mobileMenu) {
      mobileMenu.classList.add("mobile-menu-white");
    }
  } else {
    header.classList.add("header-transparent");
    header.classList.remove("header-scrolled");
    if (mobileMenu) {
      mobileMenu.classList.remove("mobile-menu-white");
    }
  }
});

// Mobile menu toggle
const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

if (mobileMenuButton && mobileMenu) {
  mobileMenuButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
  });
}

// Hide mobile menu when a link inside is clicked
if (mobileMenu) {
  const mobileLinks = mobileMenu.querySelectorAll("a");
  mobileLinks.forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenu.classList.add("hidden");
    });
  });
  // document
  //   .querySelectorAll("#language-selector")[1]
  //   .addEventListener("click", (e) => {
  //     console.log("clicked lanf");
  //     mobileMenu.classList.add("hidden");
  //   });
}

// Hero Section Animation

window.addEventListener("load", () => {
  const heroTitle = document.getElementById("hero-title");

  // Reveal hero text slightly later for staggered effect
  setTimeout(() => {
    heroTitle.classList.add("show");
  }, 100);
});

gsap.registerPlugin(ScrollTrigger);
function initAnimations() {
  // Kill all old ScrollTriggers
  ScrollTrigger.getAll().forEach((trigger) => trigger.kill());

  // Clear inline gsap styles (opacity, transform, etc.)
  gsap.set(["#panel-container", "#statistics-content"], {
    clearProps: "all",
  });

  const langSelected = document.documentElement.lang;
  const xCordinate = langSelected === "ar" ? 1800 : -200; // reduced from 12000 so it doesn't fly off screen

  ["#panel-container", "#statistics-content"].forEach((selector) => {
    gsap.from(selector, {
      scrollTrigger: {
        trigger: selector,
        start: "top bottom",
        toggleActions: "play none none none",
      },
      x: xCordinate,
      opacity: 0,
      duration: 1.2,
      ease: "power3.out",
    });
  });
}

// Run initially
document.addEventListener("DOMContentLoaded", initAnimations);

// Stats Cards
function selectableStatsCards() {
  const cards = document.querySelectorAll(".stats-card > div"); // all 4 cards

  cards.forEach((card) => {
    card.addEventListener("click", () => {
      // Remove selected from all
      cards.forEach((c) => c.classList.remove("card-selected"));
      // Add to clicked one
      card.classList.add("card-selected");
    });
  });
}

// Animated GSAP Text
(function (Drupal, once) {
  Drupal.behaviors.gsapTextReveal = {
    attach: function (context, settings) {
      // Only run once per page load
      once("gsap-text-reveal", "body", context).forEach(function () {
        const getTextEl = () => context.querySelector("#gsap-text");
        let letters = [];
        let currentIndex = 0;
        let animationFinished = false;
        let isRTL = false;
        const charsPerScroll = 1;
        const visibilityRatio = 0.8;

        let autoRevealStarted = false;
        let autoRevealInterval = null;

        function splitIntoWords(node) {
          const el = node;
          const text = el.textContent || "";
          el.innerHTML = "";

          const segments = text.split(/(\s+)/);
          const frag = document.createDocumentFragment();

          segments.forEach((segment) => {
            if (segment.trim() === "") {
              frag.appendChild(document.createTextNode(segment));
            } else {
              const span = document.createElement("span");
              span.className = "word text-gray-400 inline-block";
              span.textContent = segment;
              frag.appendChild(span);
            }
          });

          el.appendChild(frag);
          return Array.from(el.querySelectorAll(".word"));
        }

        // NEW: sort spans by their actual position in the viewport
        function sortByPosition(spans, rtl) {
          return spans
            .map((span) => ({
              el: span,
              rect: span.getBoundingClientRect(),
            }))
            .sort((a, b) => {
              // sort top first
              if (a.rect.top !== b.rect.top) {
                return a.rect.top - b.rect.top;
              }
              // then by horizontal position based on direction
              return rtl
                ? b.rect.left - a.rect.left
                : a.rect.left - b.rect.left;
            })
            .map((item) => item.el);
        }

        function resetLettersState() {
          animationFinished = false;
          letters.forEach((l) => {
            l.classList.remove("text-black");
            l.classList.add("text-gray-400");
          });
          currentIndex = 0; // always start at index 0 of sorted list
        }

        function init() {
          const el = getTextEl();
          if (!el) return;
          letters = splitIntoWords(el);

          const computedDir =
            getComputedStyle(el).direction ||
            el.dir ||
            document.documentElement.dir ||
            "ltr";
          isRTL = computedDir === "rtl";

          // sort by real visual order
          letters = sortByPosition(letters, isRTL);

          resetLettersState();
        }

        function isElementMostlyVisible(el) {
          if (!el) return false;
          const rect = el.getBoundingClientRect();
          if (rect.bottom <= 0 || rect.top >= window.innerHeight) return false;
          const visibleHeight =
            Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);
          const ratio = visibleHeight / rect.height;
          return ratio >= visibilityRatio;
        }

        function revealStep(maxChars) {
          let revealed = 0;
          while (revealed < maxChars && currentIndex < letters.length) {
            if (!isElementMostlyVisible(letters[currentIndex])) break;
            letters[currentIndex].classList.remove("text-gray-400");
            letters[currentIndex].classList.add("text-black");
            currentIndex++;
            revealed++;
          }
          if (currentIndex >= letters.length) {
            animationFinished = true;
          }
          return revealed;
        }

        function startAutoReveal() {
          if (autoRevealStarted) return;
          autoRevealStarted = true;
          autoRevealInterval = setInterval(() => {
            if (animationFinished) {
              clearInterval(autoRevealInterval);
              return;
            }
            if (
              letters[currentIndex] &&
              isElementMostlyVisible(letters[currentIndex])
            ) {
              revealStep(charsPerScroll);
            }
          }, 250);
        }

        function observeSectionCenter() {
          const section = context.querySelector("#animated-section");
          if (!section) return;
          const observer = new IntersectionObserver(
            (entries) => {
              entries.forEach((entry) => {
                if (entry.isIntersecting && entry.intersectionRatio > 0.5) {
                  startAutoReveal();
                  observer.disconnect();
                }
              });
            },
            {
              threshold: [0.5],
            }
          );
          observer.observe(section);
        }

        function attachTranslationListener() {
          if (window.i18next && typeof window.i18next.on === "function") {
            window.i18next.on("languageChanged", () => {
              setTimeout(() => {
                init();
              }, 0);
            });
          } else {
            const el = getTextEl();
            if (!el) return;
            const mo = new MutationObserver(() => {
              init();
            });
            mo.observe(el, {
              childList: true,
              characterData: true,
              subtree: true,
            });
          }
        }

        // Run after everything is defined
        init();
        attachTranslationListener();
        observeSectionCenter();
      });
    },
  };
})(Drupal, once);

// Stats Cards

function selectableStatsCards() {
  const cards = document.querySelectorAll(".stats-card > div"); // all 4 cards

  cards.forEach((card) => {
    card.addEventListener("click", () => {
      // Remove selected from all
      cards.forEach((c) => c.classList.remove("card-selected"));
      // Add to clicked one
      card.classList.add("card-selected");
    });
  });
}

// News Section Start
function formatDate(dateString) {
  const date = new Date(dateString);
  return date.toLocaleDateString("en-GB", {
    day: "2-digit",
    month: "long",
    year: "numeric",
  });
}

let currentNewsSlide = 1;

function createNewsCard(news, index) {
  // Detect current language (based on <html lang="...">)
  const lang = document.documentElement.lang || "en";

  // Handle Read More text
  const readMoreText = lang === "ar" ? "اقرأ المزيد" : "Read More";

  // Handle direction (optional enhancement)
  const isArabic = lang === "ar";
  const arrowIcon = isArabic
    ? `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
       </svg>`
    : `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
       </svg>`;

  // ✅ Fix image path — dynamic theme directory
  const themePath = drupalSettings?.path?.themeUrl || "/themes/custom/acp";

  return `
    <div 
      class="news-card w-[100%] sm:w-[100%] md:w-[50%] flex-shrink-0 border border-gray-300 bg-white rounded-md shadow-sm hover:shadow-sm transition-shadow duration-300 p-6 cursor-pointer opacity-[${
        news.id == 1 ? 1 : 0.5
      }]" 
      data-id="${news.id}">
      
      <div class="flex flex-col gap-6 h-full">
        <div class="flex justify-between">
          <div class="w-2/5">
            <h4 class="text-xl font-bold text-gray-800 mb-4 line-clamp-2" data-i18n="articles.featured.${
              news.id
            }.title">
              ${news.headline}
            </h4>
            <p class="text-gray-600 mb-6 line-clamp-3 flex-grow" data-i18n="articles.featured.${
              news.id
            }.description">
              ${news.description}
            </p>
          </div>
          <div class="w-3/5 ml-3 h-48 overflow-hidden">
            <img 
              src="${themePath}/assets/news/${news.image}" 
              alt="${news.headline}" 
              class="w-full h-full object-cover"
            />
          </div>
        </div>
        <div class="flex items-center justify-between">
          <div class="text-[12px] text-gray-400">
            <span class="border border-gray-300 p-2 rounded-sm">${
              news.location
            }</span>
            <span class="border border-gray-300 p-2 rounded-sm" data-i18n="articles.featured.${
              index + 1
            }.date">${formatDate(news.date)}</span>
          </div>
          <button 
            class="read-more-btn hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium transition-colors flex items-center space-x-2"
            data-id="${news.id}">
            <span class="text-sm text-gray-600" data-i18n="buttons.readMore">${readMoreText}</span>
            <span class="w-8 h-8 rounded-full bg-gray-600 text-white flex items-center justify-center" aria-hidden="true">
              ${arrowIcon}
            </span>
          </button>
        </div>
      </div>
    </div>
  `;
}

// Modal Functionality Start
// 📰 Modal Elements
const modal = document.getElementById("newsModal");
const closeModalBtn = document.getElementById("closeModal");
const modalTitle = document.getElementById("modalTitle");
const modalDate = document.getElementById("modalDate");
const modalImage = document.getElementById("modalImage");
const modalDescription = document.getElementById("modalDescription");

/**
 * Attach read-more functionality to your slider container.
 * Replace "#news-slider-track" with the actual container element of your slider.
 */
const sliderTrack = document.getElementById("news-slider-track");

// use event delegation so buttons added later also work
sliderTrack.addEventListener("click", (e) => {
  const button = e.target.closest(".read-more-btn");
  if (!button) return;

  e.stopPropagation();

  // find the card id
  const id = parseInt(button.dataset.id, 10);

  const news = newsData.find((item) => item.id === id);
  console.log(news);
  // Populate modal with translated content
  modalTitle.textContent = news.headline;
  modalDescription.textContent = news.description;

  // You can still pull location from newsData (if you don’t have translations for it)
  modalDate.textContent = `${formatDate(news.date)}• ${news.location}`;

  modalImage.src = src = `/themes/custom/acp/assets/news/${news.image}`;

  modal.classList.remove("hidden");
});

// close modal
closeModalBtn.addEventListener("click", () => {
  modal.classList.add("hidden");
});

// close modal when clicking outside
modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.classList.add("hidden");
  }
});

// Modal Functionality End

function renderNewsSlider() {
  const sliderTrack = document.getElementById("news-slider-track");
  const totalSlides = newsData.length;

  // clone last + first
  const clonedSlides = [
    createNewsCard(newsData[newsData.length - 1], newsData.length - 1),
    ...newsData.map((n, i) => createNewsCard(n, i)),
    createNewsCard(newsData[0], 0),
  ];

  sliderTrack.innerHTML = clonedSlides.join("");

  // Reset current slide (but now shifted by +1 because of prepended clone)
  currentNewsSlide = 1;

  // Initial position (center on first real slide)
  // applyTransform();
  applyTransform(false);
  updateSlideOpacity();

  // Update news cards translations if they exist
  // if (sliderTrack) {
  //   const newsCard = sliderTrack.querySelectorAll("[data-i18n]");
  //   newsCard.forEach((card) => {
  //     const key = card.getAttribute("data-i18n");
  //     if (key) {
  //       card.textContent = i18next.t(key);
  //     }
  //   });
  // }

  // 🔥 Add click listeners on cards
  const cards = document.querySelectorAll(".news-card");
  cards.forEach((card, idx) => {
    card.addEventListener("click", () => {
      // Map DOM index -> real slide index
      let clickedRealIndex;
      if (idx === 0) {
        clickedRealIndex = totalSlides; // clone of last
      } else if (idx === totalSlides + 1) {
        clickedRealIndex = 1; // clone of first
      } else {
        clickedRealIndex = idx; // real slide
      }

      // console.log("card clicked:", {
      //   domIdx: idx,
      //   clickedRealIndex,
      //   currentNewsSlide,
      // });

      if (clickedRealIndex === currentNewsSlide) {
        // active card clicked → do nothing
        return;
      }

      // Check if clicked is prev or next
      const prevIndex =
        currentNewsSlide === 1 ? totalSlides : currentNewsSlide - 1;
      const nextIndex =
        currentNewsSlide === totalSlides ? 1 : currentNewsSlide + 1;

      if (clickedRealIndex === prevIndex) {
        slideNews("prev");
      } else if (clickedRealIndex === nextIndex) {
        slideNews("next");
      } else {
        // Jump directly to the clicked slide
        currentNewsSlide = clickedRealIndex;
        applyTransform(true);
        updateSlideOpacity();
        updateNewsProgress();
        updateNewsNavigation();
      }
    });
  });

  // Update progress segments
  updateNewsProgress();

  // Update navigation text
  updateNewsNavigation();
}

function updateNewsProgress() {
  const progressContainer = document.getElementById("news-progress-container");
  const totalSlides = newsData.length;
  let currentDigit;
  let progressHTML = "";
  for (let i = 1; i <= totalSlides; i++) {
    currentDigit =
      currentNewsSlide === 0
        ? totalSlides - currentNewsSlide
        : currentNewsSlide > totalSlides
        ? 1
        : currentNewsSlide;
    const isActive = i === currentDigit;
    progressHTML += `
                    <div class="flex-1 h-1 rounded-full ${
                      isActive ? "bg-gray-600" : "bg-gray-300"
                    } transition-colors duration-300"></div>
                `;
  }

  progressContainer.innerHTML = progressHTML;
}

function updateNewsNavigation() {
  const totalSlides = newsData.length;
  const currentDigit =
    currentNewsSlide === 0
      ? totalSlides - currentNewsSlide
      : currentNewsSlide > totalSlides
      ? 1
      : currentNewsSlide;

  // Update current slide number
  document.getElementById("current-news-slide").textContent = String(
    currentDigit
  ).padStart(2, "0");

  // Update total slides
  document.getElementById("total-news-slides").textContent = String(
    totalSlides
  ).padStart(2, "0");

  // Update progress bar
  const progressPercentage =
    totalSlides > 1 ? (currentDigit / totalSlides) * 100 : 100;
  document.getElementById(
    "news-slider-progress"
  ).style.width = `${progressPercentage}%`;
}

function updateSlideOpacity() {
  const allCards = document.querySelectorAll("#news-slider-track .news-card");
  allCards.forEach((card, idx) => {
    if (idx === currentNewsSlide) {
      card.style.opacity = "1";
    } else {
      card.style.opacity = "0.5";
    }
  });
}

function applyTransform(animate = true) {
  const sliderTrack = document.getElementById("news-slider-track");
  if (!animate) sliderTrack.style.transition = "none";
  else sliderTrack.style.transition = "transform 0.5s ease-in-out";

  const langSelected = document.documentElement.lang;
  let translateX;
  const isMobile = window.innerWidth < 768;

  if (isMobile) {
    translateX =
      langSelected == "ar" ? currentNewsSlide * 100 : -currentNewsSlide * 100;
  } else {
    translateX =
      langSelected == "ar"
        ? -25 + currentNewsSlide * 51.32
        : 25 - currentNewsSlide * 51.32;
  }

  sliderTrack.style.transform = `translateX(${translateX}%)`;
}

function slideNews(direction) {
  console.log("news btn");

  const totalSlides = newsData.length;
  const sliderTrack = document.getElementById("news-slider-track");

  if (direction === "next") {
    currentNewsSlide++;
    console.log(currentNewsSlide);
  } else if (direction === "prev") {
    currentNewsSlide--;
    console.log(currentNewsSlide);
  }

  applyTransform(true);
  updateSlideOpacity();

  // Handle clones after transition
  sliderTrack.addEventListener("transitionend", function handler() {
    if (currentNewsSlide === 0) {
      // jumped left into last clone → reset to real last
      currentNewsSlide = totalSlides;
      applyTransform(false);
    }
    if (currentNewsSlide === totalSlides + 1) {
      // jumped right into first clone → reset to real first
      currentNewsSlide = 1;
      applyTransform(false);
    }
    updateSlideOpacity();
    sliderTrack.removeEventListener("transitionend", handler);
  });

  // Update progress and navigation
  updateNewsProgress();
  updateNewsNavigation();
}

function initializeNewsSlider() {
  renderNewsSlider();

  // Add event listeners
  document
    .getElementById("news-prev")
    .addEventListener("click", () => slideNews("prev"));
  document
    .getElementById("news-next")
    .addEventListener("click", () => slideNews("next"));
}

document.addEventListener("DOMContentLoaded", async function () {
  try {
    // Detect current language from <html lang="">
    const lang = document.documentElement.lang || "en";

    //  se /ar prefix if Arabic
    const apiUrl =
      lang === "ar" ? "/ar/acp-news/api/news" : "/acp-news/api/news";

    // Fetch from Drupal API
    const response = await fetch(apiUrl);
    const data = await response.json();

    // Map API fields to match your existing JS structure
    newsData = data.map((item) => ({
      id: parseInt(item.id, 10),
      headline: item.title,
      description: item.description,
      location: item.location,
      date: item.date,
      image: item.newsimage,
    }));

    // Start the slider
    initializeNewsSlider();
  } catch (error) {
    console.error("Failed to load news data:", error);
  }

  selectableStatsCards();
});

// News Section End
document.addEventListener("DOMContentLoaded", async () => {
  window.saudiAirports = [];

  // Detect current language
  const lang = document.documentElement.lang || "en";

  // Determine API endpoint based on language
  const apiEndpoint = lang === "ar" ? "/ar/api/airports" : "/api/airports";

  // ------------------------------
  // Fetch API Data
  // ------------------------------
  await fetch(apiEndpoint)
    .then((res) => res.json())
    .then((data) => {
      // console.log("Fetched airports:", data);
      // Assign API data globally
      window.saudiAirports = data;

      // Initialize first airport as default (optional)
      if (data.length > 0) {
        currentAirportIndex = 0;
        currentImageIndex = 0;
        againInitializeAirportSlider();
      }
    })
    .catch((err) => {
      console.error("Failed to fetch airports API:", err);
      // fallback: uncomment if you want to use hardcoded on failure
      // window.saudiAirports = saudiAirports;
    });

  // ------------------------------
  // Keep your existing helper as-is
  // ------------------------------
  window.setAirportByCode = function (code) {
    console.log(`setAirportByCode ${code}`);

    const idx = (window.saudiAirports || []).findIndex((a) => a.code === code);
    if (idx < 0) return console.warn("Airport code not found:", code);

    currentAirportIndex = idx;
    currentImageIndex = 0;

    if (typeof currentFlightAirportIndex !== "undefined") {
      currentFlightAirportIndex = idx;
    }

    againInitializeAirportSlider();

    if (typeof filterFlightsByAirport === "function") {
      // filterFlightsByAirport();
    }

    if (typeof setActiveAirportArrow === "function") {
      try {
        setActiveAirportArrow(code);
      } catch (_) {}
    } else if (typeof window !== "undefined") {
      window.pendingMapHighlight = code;
    }
  };
});

// ------------------ Map & Routes Sections Start --------------------

// Airports Section Start
function updateAirportDropdown() {
  // This function previously handled i18next translations
  // Now it's a no-op but kept for compatibility
}

// for pins on map - Start
// for pins on map - Start
const airportPointers = document.querySelectorAll(".airport");
const highlightLayer = document.getElementById("highlights");
const svg = document.getElementById("saudi-map");

// Create label layer if it doesn't exist
let labelLayer = document.getElementById("airport-labels");
if (!labelLayer) {
  labelLayer = document.createElementNS("http://www.w3.org/2000/svg", "g");
  labelLayer.setAttribute("id", "airport-labels");
  svg.appendChild(labelLayer);
}

airportPointers.forEach((airport) => {
  airport.addEventListener("click", () => {
    const name = airport.getAttribute("data-name");
    const code = airport.getAttribute("data-code");
    console.log(`Clicked: ${name} (${code})`);
    window.setAirportByCode(code);

    document
      .querySelectorAll(".plane-circle")
      .forEach((c) => c.classList.remove("active"));

    let planeCircle = airport.querySelector(".plane-circle");
    if (planeCircle) {
      planeCircle.classList.add("active");
    }

    highlightLayer.innerHTML = "";
    labelLayer.innerHTML = ""; // Clear previous labels

    // Get pin position (x, y are strings → convert to numbers)
    const x = parseFloat(airport.getAttribute("x"));
    const y = parseFloat(airport.getAttribute("y"));
    const targetRadius = 80; // final radius

    // Create highlight circle
    const circle = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "circle"
    );
    circle.setAttribute("class", "highlight");
    circle.setAttribute("cx", x + 28);
    circle.setAttribute("cy", y + 104);
    circle.setAttribute("r", 0);
    circle.setAttribute("fill", "url(#highlight-gradient)");
    circle.setAttribute("pointer-events", "none");

    // Append to highlight layer
    highlightLayer.appendChild(circle);

    // Create a group element for the label
    const labelGroup = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "g"
    );
    labelGroup.setAttribute("class", "airport-label-group");
    labelGroup.style.pointerEvents = "none";

    // Create label background (rounded rectangle) - positioned ABOVE the pin
    const labelBg = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "rect"
    );
    labelBg.setAttribute("class", "airport-label-bg");
    labelBg.setAttribute("x", x - 10);
    labelBg.setAttribute("y", y - 40);
    labelBg.setAttribute("width", 76);
    labelBg.setAttribute("height", 32);
    labelBg.setAttribute("rx", 8);
    labelBg.setAttribute("fill", "white");
    labelBg.setAttribute("stroke", "#00D9A3");
    labelBg.setAttribute("stroke-width", "2");
    labelBg.setAttribute("pointer-events", "none");

    // Create label text - positioned ABOVE the pin
    const labelText = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "text"
    );
    labelText.setAttribute("class", "airport-label-text");
    labelText.setAttribute("x", x + 28);
    labelText.setAttribute("y", y - 16);
    labelText.setAttribute("text-anchor", "middle");
    labelText.setAttribute("fill", "#333333");
    labelText.setAttribute("font-size", "18");
    labelText.setAttribute("font-weight", "600");
    labelText.setAttribute("pointer-events", "none");
    labelText.textContent = code;

    // Append label elements to the group
    labelGroup.appendChild(labelBg);
    labelGroup.appendChild(labelText);

    // Append the group to the label layer
    labelLayer.appendChild(labelGroup);

    // CRITICAL: Move label layer to the very end of SVG to ensure it's on top
    svg.appendChild(labelLayer);

    // Trigger the transition a tiny bit later
    requestAnimationFrame(() => {
      circle.setAttribute("r", targetRadius);
    });
  });
});
// for pins on map - End
// for pins on map - End

const FLIGHTS_PER_PAGE = 12;
let currentFlightPage = 0;
let totalFlightPages = 1;

// function generateFlightData() {
//   const flights = [];
//   const destinations = [

//     // Hard Coded Data
//   ];

//   destinations.forEach((d) => {
//     if (d.Route) {
//       const parts = d.Route.split("-");
//       if (parts.length === 2) {
//         flights.push({
//           from: parts[0],
//           to: parts[1],
//           airline: d.airline,
//           started: d.started,
//           yearStarted: d.yearStarted,
//           contractedYear: d.ContractedSupportedYear,
//           continent: d.continent || "Asia",
//         });
//       } else if (parts.length > 2) {
//         for (let i = 0; i < parts.length - 1; i++) {
//           flights.push({
//             from: parts[i],
//             to: parts[i + 1],
//             airline: d.airline,
//             started: d.started,
//             yearStarted: d.yearStarted,
//             contractedYear: d.ContractedSupportedYear,
//             continent: d.continent || "Asia",
//           });
//         }
//       }
//     }
//   });;

//   return flights;
// }

async function generateFlightData() {
  const flights = [];

  try {
    // 1️⃣ Fetch all flights from your Drupal API endpoint
    const response = await fetch("/api/flights");
    if (!response.ok) throw new Error("Failed to fetch flights API");

    // 2️⃣ Parse the JSON data
    const destinations = await response.json();

    // 3️⃣ Loop over each record
    destinations.forEach((d) => {
      if (!d.Route && (!d.from || !d.to)) return; // Skip invalid entries

      const route = d.Route || `${d.from}-${d.to}`;
      const parts = route
        .split("-")
        .map((p) => p.trim())
        .filter(Boolean);

      // Case 1: Simple 2-point route
      if (parts.length === 2) {
        flights.push({
          from: parts[0],
          to: parts[1],
          airline: d.airline,
          started: d.started ?? "No",
          yearStarted: d.yearStarted ?? "-",
          contractedYear: d.contractedYear ?? "-",
          continent: d.continent ?? "Asia",
        });
      }

      // Case 2: Multi-stop route
      else if (parts.length > 2) {
        for (let i = 0; i < parts.length - 1; i++) {
          flights.push({
            from: parts[i],
            to: parts[i + 1],
            airline: d.airline,
            started: d.started ?? "No",
            yearStarted: d.yearStarted ?? "-",
            contractedYear: d.contractedYear ?? "-",
            continent: d.continent ?? "Asia",
          });
        }
      }
    });
    return flights;
  } catch (error) {
    console.error("Error generating flight data:", error);
    return [];
  }
}

document.addEventListener("DOMContentLoaded", async function () {
  // ✅ Wait for the API to finish
  window.flightData = await generateFlightData();

  // ✅ Set filteredFlights now that data is ready
  window.filteredFlights = [...window.flightData];

  initializeFlightSearch(); // This now has flightData available
});

// let flightData = generateFlightData();

let currentAirportIndex = 0;
let currentImageIndex = 0;
let imageRotationInterval;
let airportImageRotationInterval;
let progressAnimationInterval;

function initializeAirportSlider() {
  updateAirportDisplay();
}

function againInitializeAirportSlider() {
  updateAirportDisplay();
}

function updateAirportDisplay() {
  const airport = window.saudiAirports[currentAirportIndex];
  console.log(airport);

  const years = Object.keys(airport.yearsData);

  // Detect current language
  const lang = document.documentElement.lang || "en";

  // Define label translations for display only
  const labels = {
    en: {
      years: "Years",
      internationalPassengers: "International Passengers",
      domesticPassengers: "Domestic Passengers",
      flights: "Flights",
      passengers: "Passengers",
    },
    ar: {
      years: "السنوات",
      internationalPassengers: "المسافرون الدوليون",
      domesticPassengers: "المسافرون المحليون",
      flights: "الرحلات",
      passengers: "الركاب",
    },
  };

  const t = labels[lang] || labels["en"]; // fallback to English for display

  // Update labels in HTML
  document.getElementById("airportName").textContent = `${airport.name}`;
  document.getElementById("labelYears").textContent = t.years;

  //   document.getElementById("year1").textContent = years[0];
  document.getElementById("year2").textContent = years[1];

  if (airport.airportType === "International") {
    document.getElementById("intlLabel").textContent =
      t.internationalPassengers;
    document.getElementById("domLabel").textContent = t.domesticPassengers;

    // Access data using English keys
    // document.getElementById("intl1").textContent =
    //   airport.yearsData[years[0]]["International Passengers"];
    document.getElementById("intl2").textContent =
      airport.yearsData[years[1]]["International Passengers"];
    // document.getElementById("dom1").textContent =
    //   airport.yearsData[years[0]]["Domestic Passengers"];
    document.getElementById("dom2").textContent =
      airport.yearsData[years[1]]["Domestic Passengers"];
  } else {
    document.getElementById("intlLabel").textContent = t.flights;
    document.getElementById("domLabel").textContent = t.passengers;

    // Access data using English keys
    // document.getElementById("intl1").textContent =
    //   airport.yearsData[years[0]]["Flights"];
    document.getElementById("intl2").textContent =
      airport.yearsData[years[1]]["Flights"];
    // document.getElementById("dom1").textContent =
    //   airport.yearsData[years[0]]["Passengers"];
    document.getElementById("dom2").textContent =
      airport.yearsData[years[1]]["Passengers"];
  }

  updateAirportImageSlider();
}

function updateAirportImageSlider() {
  const airport = saudiAirports[currentAirportIndex];
  const imageContainer = document.getElementById("airport-image");
  imageContainer.src = airport.image;
}

function startImageRotation() {
  imageRotationInterval = setInterval(() => {
    const airport = saudiAirports[currentAirportIndex];
    currentImageIndex = (currentImageIndex + 1) % airport.images.length;
  }, 3000);
}

function startAirportImageRotation() {
  airportImageRotationInterval = setInterval(() => {
    const airport = saudiAirports[currentAirportIndex];
    const nextImageIndex = (currentImageIndex + 1) % airport.images.length;
    updateAirportImageSlider();
  }, 3000);
}

function restartImageRotation() {
  clearInterval(imageRotationInterval);
  clearInterval(airportImageRotationInterval);
  clearInterval(progressAnimationInterval);
  startImageRotation();
  startAirportImageRotation();
}

let currentFlightAirportIndex = 0;
let currentContinentPage = 0;
// let filteredFlights = [...flightData];
const flightsPerPage = 12;
let activeFilters = [];

function filterFlights(query) {
  console.log("Filtering flights with query:", query);
  if (query.length === 0) {
    filteredFlights = [...flightData];
  } else {
    filteredFlights = flightData.filter(
      (flight) =>
        flight.from.toLowerCase().includes(query) ||
        flight.to.toLowerCase().includes(query)
    );
  }
  currentFlightPage = 0;
  renderFlightCards();
}

function filterFlightsByAirport() {
  const currentAirport = saudiAirports[currentFlightAirportIndex];
  filteredFlights = flightData.filter(
    (flight) =>
      flight.from === currentAirport.code || flight.to === currentAirport.code
  );
  currentFlightPage = 0;
  renderFlightCards();
}

function renderFlightCards() {
  const grid = document.getElementById("flight-cards-grid");

  totalFlightPages = Math.ceil(filteredFlights.length / FLIGHTS_PER_PAGE);
  const startIndex = currentFlightPage * FLIGHTS_PER_PAGE;
  const endIndex = Math.min(
    startIndex + FLIGHTS_PER_PAGE,
    filteredFlights.length
  );
  const currentPageFlights = filteredFlights.slice(startIndex, endIndex);

  updateFlightPaginationDisplay();

  // Detect current language
  const lang = document.documentElement.lang || "en";

  // Translations
  const t =
    {
      en: {
        airline: "Airline",
        started: "Started?",
        yearStarted: "Year Started",
        yes: "Yes",
        no: "No",
      },
      ar: {
        airline: " التشغيل؟",
        started: "هل بدأ",
        yearStarted: "سنة التشغيل",
        yes: "لا", // Yes → لا
        no: "نعم", // No → نعم
      },
    }[lang] || t.en;

  grid.innerHTML = currentPageFlights
    .map((flight) => {
      // Normalize started field
      let startedDisplay = "-";
      if (flight.started) {
        const val = flight.started.toString().trim().toLowerCase();
        if (val === "yes") startedDisplay = t.yes;
        else if (val === "no") startedDisplay = t.no;
        else startedDisplay = flight.started;
      }

      return `
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:bg-emerald-50 hover:border-emerald-200 transition-all duration-200 cursor-pointer">
          <div class="flex items-center justify-center mb-6">
            <div class="flex items-center space-x-4">
              <span class="text-2xl font-bold text-gray-800">${
                flight.from
              }</span>
              <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
              <span class="text-2xl font-bold text-gray-800">${flight.to}</span>
            </div>
          </div>

          <div class="grid grid-cols-3 gap-4">
            <div class="text-center flex flex-col justify-between">
              <div class="flex items-center justify-center mb-2">
                <span class="text-xs text-gray-500">${t.airline}</span>
              </div>
              <div class="text-lg font-bold text-gray-800">${
                flight.airline
              }</div>
            </div>

            <div class="text-center flex flex-col justify-between">
              <div class="flex items-center justify-center mb-2">
                <span class="text-xs text-gray-500">${t.started}</span>
              </div>
              <div class="text-lg font-bold text-gray-800">${startedDisplay}</div>
            </div>

            <div class="text-center flex flex-col justify-between">
              <div class="flex items-center justify-center mb-2">
                <span class="text-xs text-gray-500">${t.yearStarted}</span>
              </div>
              <div class="text-lg font-bold text-gray-800">${
                flight.yearStarted || "-"
              }</div>
            </div>
          </div>
        </div>
      `;
    })
    .join("");
}

function updateFlightPaginationDisplay() {
  document.getElementById("current-flight-page").textContent = String(
    currentFlightPage + 1
  ).padStart(2, "0");
  document.getElementById("total-flight-pages").textContent = String(
    totalFlightPages
  ).padStart(2, "0");

  const progress =
    totalFlightPages > 1
      ? ((currentFlightPage + 1) / totalFlightPages) * 100
      : 100;
  document.getElementById("flight-page-progress").style.width = `${progress}%`;
}

function initializeFlightSearch() {
  currentFlightAirportIndex = 0;
  filteredFlights = [...flightData];
  currentContinentPage = 0;
  currentFlightPage = 0;
  activeFilters = [];
  renderFlightCards();
  setupFlightSearchListeners();
  updateContinentProgress();
}

function againInitializeFlightSearch() {
  console.log("Flight Searched Loaded Again");
  currentFlightAirportIndex = 0;
  filteredFlights = [...flightData];
  currentContinentPage = 0;
  currentFlightPage = 0;
  activeFilters = [];
  renderFlightCards();
  updateContinentProgress();
}

function setupFlightSearchListeners() {
  const searchInput = document.getElementById("flight-search");
  const searchResults = document.getElementById("flight-search-results");

  searchInput.addEventListener("input", function () {
    console.log("filter by airport");

    const query = this.value.toLowerCase().trim();

    if (query.length === 0) {
      searchResults.classList.add("hidden");
      filterFlightsByAirport();
      return;
    }

    const filteredAirports = saudiAirports.filter(
      (airport) =>
        airport.name.toLowerCase().includes(query) ||
        airport.city.toLowerCase().includes(query) ||
        airport.code.toLowerCase().includes(query)
    );

    displayFlightSearchResults(filteredAirports);
  });

  document.addEventListener("click", function (event) {
    if (
      !searchInput.contains(event.target) &&
      !searchResults.contains(event.target)
    ) {
      searchResults.classList.add("hidden");
    }
  });

  document.getElementById("flight-prev-page").addEventListener("click", () => {
    if (currentFlightPage > 0) {
      currentFlightPage--;
      renderFlightCards();
    }
  });

  document.getElementById("flight-next-page").addEventListener("click", () => {
    if (currentFlightPage < totalFlightPages - 1) {
      currentFlightPage++;
      renderFlightCards();
    }
  });

  document.getElementById("continent-prev").addEventListener("click", () => {
    currentContinentPage = Math.max(0, currentContinentPage - 1);
    updateContinentProgress();
  });

  document.getElementById("continent-next").addEventListener("click", () => {
    console.log("click", currentContinentPage);
    if (currentContinentPage < 1) {
      currentContinentPage = Math.min(2, currentContinentPage + 1);
      updateContinentProgress();
    }
  });
}

function displayFlightSearchResults(airports) {
  const searchResults = document.getElementById("flight-search-results");

  if (airports.length === 0) {
    searchResults.innerHTML =
      '<div class="p-3 text-gray-500 text-sm">No airports found</div>';
    searchResults.classList.remove("hidden");
    return;
  }

  const resultsHTML = airports
    .map(
      (airport) => `
                <div class="p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0" onclick="selectFlightAirport('${
                  airport.name
                }', '${airport.city}', '${
        airport.code
      }', ${saudiAirports.indexOf(airport)})">
                    <div class="font-medium text-gray-800">${airport.name}</div>
                    <div class="text-sm text-gray-600">${airport.city} (${
        airport.code
      })</div>
                </div>
            `
    )
    .join("");

  searchResults.innerHTML = resultsHTML;
  searchResults.classList.remove("hidden");
}

function selectFlightAirport(name, city, code, index) {
  const searchInput = document.getElementById("flight-search");
  const searchResults = document.getElementById("flight-search-results");

  searchInput.value = `${name} - ${city} (${code})`;
  searchResults.classList.add("hidden");

  currentFlightAirportIndex = index;

  activeFilters = [];
  activeFilters["airport"] = saudiAirports[currentFlightAirportIndex].name;
  console.log(activeFilters);

  filterFlightsByAirport();
}

function filterFlights(query) {
  if (!query) {
    filterFlightsByAirport();
    return;
  }

  const currentAirport = saudiAirports[currentFlightAirportIndex];
  const airportFlights = flightData.filter(
    (flight) =>
      flight.from === currentAirport.code || flight.to === currentAirport.code
  );

  filteredFlights = airportFlights.filter((flight) => {
    const destinationAirport = saudiAirports.find(
      (airport) =>
        airport.code ===
        (flight.from === currentAirport.code ? flight.to : flight.from)
    );

    if (destinationAirport) {
      return (
        destinationAirport.name.toLowerCase().includes(query) ||
        destinationAirport.city.toLowerCase().includes(query) ||
        destinationAirport.code.toLowerCase().includes(query)
      );
    }

    return (
      flight.from.toLowerCase().includes(query) ||
      flight.to.toLowerCase().includes(query)
    );
  });

  currentFlightPage = 0;
  renderFlightCards();
}

const continents = [
  { name: "Asia", image: "assets/svg/Asia.svg" },
  { name: "Europe", image: "assets/svg/Europe.svg" },
  { name: "Africa", image: "assets/svg/Africa.svg" },
  { name: "North America", image: "assets/svg/North-America.svg" },
  { name: "South America", image: "assets/svg/South-America.svg" },
  { name: "Australia", image: "assets/svg/Australia.svg" },
];

const CONTINENTS_PER_PAGE = 3;
let selectedContinent = null;

// Arabic translations
const continentTranslations = {
  Asia: "آسيا",
  Europe: "أوروبا",
  Africa: "أفريقيا",
  "North America": "أمريكا الشمالية",
  "South America": "أمريكا الجنوبية",
  Australia: "أستراليا",
};

function renderContinents() {
  const container = document.getElementById("continent-cards");
  const start = currentContinentPage * CONTINENTS_PER_PAGE;
  const end = start + CONTINENTS_PER_PAGE;
  const visible = continents.slice(start, end);

  // Detect current language
  const lang = document.documentElement.lang || "en";

  container.innerHTML = visible
    .map((c, i) => {
      const globalIndex = start + i;
      const isSelected = selectedContinent === c.name;

      // Translate name if Arabic
      const displayName =
        lang === "ar" ? continentTranslations[c.name] : c.name;

      // Use absolute path to avoid /ar/ prefix issue
      const imagePath = `${window.basePath || "/"}themes/custom/acp/${c.image}`;

      return `
        <div id="continent-card-${globalIndex}" data-index="${globalIndex}" onclick="selectFlightContinent('${c.name}', 'continent-card-${globalIndex}')" class="flex flex-col items-center mt-2 mb-6 cursor-pointer">
            <div class='w-24 h-24 border border-gray-200 rounded'>
                <img src="${imagePath}" alt="${displayName}" class="w-full h-full object-fill"/>
            </div>
            <p class="!text-sm text-gray-600 text-center">${displayName}</p>
        </div>
      `;
    })
    .join("");
}

function updateContinentProgress() {
  const totalContinentPages = Math.max(
    1,
    Math.ceil(continents.length / CONTINENTS_PER_PAGE)
  );
  const progress = ((currentContinentPage + 1) / totalContinentPages) * 100;
  document.getElementById("continent-progress").style.width = `${progress}%`;

  document.getElementById("current-continent-page").textContent = String(
    currentContinentPage + 1
  ).padStart(2, "0");
  document.getElementById("total-continent-pages").textContent = String(
    totalContinentPages
  ).padStart(2, "0");

  renderContinents();
}

function selectFlightContinent(name, continentCard) {
  console.log("Selected Continent:", name, continentCard);

  if (selectedContinent === name) {
    selectedContinent = null;
    againInitializeFlightSearch();
  } else {
    selectedContinent = name;

    activeFilters = [];

    const container = document.getElementById("continent-cards");
    const childDivs = container.querySelectorAll(":scope > div");

    childDivs.forEach((div, index) => {
      const continentSvg = div.getElementsByTagName("img")[0];
      continentSvg.classList.remove("bg-emerald-100");
    });

    const continent = document.getElementById(continentCard);
    const continentSvg = continent.getElementsByTagName("img")[0];
    continentSvg.classList.add("bg-emerald-100");

    filterFlightsByContinent();
  }
}

function filterFlightsByContinent() {
  filteredFlights = flightData.filter(
    (flight) => flight.continent === selectedContinent
  );
  currentFlightPage = 0;
  renderFlightCards();
}

document.addEventListener("DOMContentLoaded", async function () {
  // Only initialize if data is already loaded, otherwise wait for fetch to complete
  if (window.saudiAirports && window.saudiAirports.length > 0) {
    initializeAirportSlider();
  }
});

// ------------------ Map & Routes Section End --------------------
// Airports Section End
