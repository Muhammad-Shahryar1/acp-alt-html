// navbar animation
window.addEventListener("scroll", function () {
  const header = document.getElementById("main-header");
  if (window.scrollY > 250) {
    header.classList.add("bg-gray-100", "shadow-md", "text-gray-900");
    header.classList.remove("bg-transparent", "text-white");
    document.getElementById("mobile-menu").classList.add("!text-white");
  } else {
    header.classList.add("bg-transparent", "text-white");
    header.classList.remove("bg-gray-100", "shadow-md", "text-gray-900");
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
  document
    .querySelectorAll("#language-selector")[1]
    .addEventListener("click", (e) => {
      console.log("clicked lanf");
      mobileMenu.classList.add("hidden");
    });
}

(function () {
  const getTextEl = () => document.getElementById("gsap-text");
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
        return rtl ? b.rect.left - a.rect.left : a.rect.left - b.rect.left;
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
    const section = document.getElementById("animated-section");
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

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", () => {
      init();
      attachTranslationListener();
      observeSectionCenter();
    });
  } else {
    init();
    attachTranslationListener();
    observeSectionCenter();
  }
})();
;
