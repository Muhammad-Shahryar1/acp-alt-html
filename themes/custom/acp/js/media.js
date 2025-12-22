document.addEventListener("DOMContentLoaded", () => {
  const langButtons = document.querySelectorAll("#language-selector");

  langButtons.forEach((langButton) => {
    const currentLang = langButton?.dataset.lang || "en";

    const langMap = {
      "/media": "/ar/node/4",
      "/media/": "/ar/node/4",
      "/ar/node/4": "/media",
      "/node/4": "/media",
    };

    const handleLanguageToggle = () => {
      const isArabic = currentLang === "ar";
      const pathname = window.location.pathname;
      const origin = window.location.origin;
      const search = window.location.search;

      let targetPath = pathname;

      if (isArabic) {
        // Arabic → English
        if (langMap[pathname]) {
          targetPath = langMap[pathname];
        } else {
          targetPath = pathname.replace(/^\/ar\//, "/");
        }
      } else {
        // English → Arabic
        if (langMap[pathname]) {
          targetPath = langMap[pathname];
        } else if (!pathname.startsWith("/ar/")) {
          targetPath = `/ar${pathname}`;
        }
      }

      window.location.href = origin + targetPath + search;
    };

    langButton.addEventListener("click", handleLanguageToggle);
    langButton.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        handleLanguageToggle();
      }
    });
  });
});



// Modal references
const articleModal = document.getElementById("newsModal");
const closeArticleModalBtn = document.getElementById("closeModal");
const modalTitleNew = document.getElementById("modalTitle");
const modalDateNew = document.getElementById("modalDate");
const modalImageNew = document.getElementById("modalImage");
const modalDescriptionNew = document.getElementById("modalDescription");

// Read More button (BigCard button)
const readMoreBtn = document.querySelector("#readMoreBtn");

let currentBigCardArticle = null;
let articlesData = []; // fetched data will live here
// Detect site language and set translated default filter label
const lang = document.documentElement.lang || "en";
const allLabel = lang === "ar" ? "الكل" : "All";
let currentFilter = allLabel;

// Resolve Drupal base path (for subdirectory installs)
function getBasePath() {
  const base =
    (window.drupalSettings &&
      window.drupalSettings.path &&
      window.drupalSettings.path.baseUrl) ||
    "/";
  return base.replace(/\/+$/, "") + "/";
}



async function fetchWithFallback(urls, label) {
  for (const url of urls) {
    try {
      console.log(`[Media] Fetching ${label}`, url);
      const res = await fetch(url, { headers: { Accept: "application/json" } });
      console.log(`[Media] ${label} status`, res.status);
      if (!res.ok) {
        console.warn(`[Media] ${label} failed`, url, res.status);
        continue;
      }
      const json = await res.json();
      console.log(`[Media] ${label} items`, Array.isArray(json) ? json.length : "n/a");
      return json;
    } catch (err) {
      console.warn(`[Media] ${label} error`, url, err);
    }
  }
  throw new Error(`${label} fetch failed on all URLs`);
}


document.addEventListener("DOMContentLoaded", () => {
  const path = window.location.pathname;
  const lang = document.documentElement.lang;

  // Detect Arabic path (/ar or /ar/anything)
  const isArabic = path === "/ar" || path.startsWith("/ar/");

  // Set direction on video section
  const videoSection = document.querySelector("#videoSection");
  if (videoSection) {
    videoSection.dir = isArabic ? "rtl" : "ltr";
  }

  // Rotate navigation buttons
  const videoSlidePrevBtn = document.getElementById("videoCardsPrevBtn");
  const videoSlideNextBtn = document.getElementById("videoCardsNextBtn");

  if (videoSlidePrevBtn && videoSlideNextBtn) {
    if (isArabic) {
      videoSlidePrevBtn.style.transform = "rotate(180deg)";
      videoSlideNextBtn.style.transform = "rotate(180deg)";
    } else {
      videoSlidePrevBtn.style.transform = "rotate(0deg)";
      videoSlideNextBtn.style.transform = "rotate(0deg)";
    }
  }

  // Update text alignment for all video cards manually (no Tailwind)
  const singleVideoCards = document.querySelectorAll(".singleVideoCard");
  singleVideoCards.forEach((card) => {
    card.style.textAlign = isArabic ? "right" : "left";
  });
});


// Show modal with current big card article
function openArticleModal() {
  if (!currentBigCardArticle) return;

  modalTitleNew.textContent = currentBigCardArticle.title || "";
  modalDateNew.textContent = new Date(currentBigCardArticle.date).toDateString();
  modalImageNew.src = currentBigCardArticle.image_url || "/placeholder.svg";
  modalImageNew.alt = currentBigCardArticle.title || "";
  modalDescriptionNew.textContent = currentBigCardArticle.description || "";

  articleModal.classList.remove("hidden");
  articleModal.classList.add("flex");
}

// Close modal
function closeArticleModal() {
  articleModal.classList.add("hidden");
  articleModal.classList.remove("flex");
}

if (readMoreBtn) {
  readMoreBtn.addEventListener("click", (e) => {
    e.preventDefault();
    openArticleModal();
  });
  readMoreBtn.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      openArticleModal();
    }
  });
}

if (closeArticleModalBtn) {
  closeArticleModalBtn.addEventListener("click", closeArticleModal);
  closeArticleModalBtn.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      closeArticleModal();
    }
  });
}

articleModal.addEventListener("click", (e) => {
  if (e.target === articleModal) closeArticleModal();
});

// ======================
// DOM Elements
// ======================
const filterBtn = document.getElementById("filter-btn");
const filterDropdown = document.getElementById("filter-dropdown");
const articlesContainer = document.getElementById("articles-container");
const sectionTitle = document.getElementById("section-title");

// Toggle dropdown
function toggleDropdown() {
  filterDropdown.classList.toggle("hidden");
}
function hideDropdown() {
  filterDropdown.classList.add("hidden");
}

// ======================
// Attach Article Click Handlers
// ======================
function attachArticleClickHandlers() {
  const articleItems = document.querySelectorAll(".article-item");

  articleItems.forEach((item) => {
    const handleArticleClick = () => {
      const id = parseInt(item.dataset.id, 10);
      const article = articlesData.find((a) => a.id == id);
      if (article) updateBigCard(article);
    };
    
    item.addEventListener("click", handleArticleClick);
    item.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        handleArticleClick();
      }
    });
  });
}


function renderArticles(filter) {
  const lang = document.documentElement.lang || "en";
  const allLabel = lang === "ar" ? "الكل" : "All";

  let filteredArticles = [];

  // Treat both the English "All" and the localized allLabel as "no filter"
  if (filter === "All" || filter === allLabel) {
    filteredArticles = articlesData;
  } else {
    filteredArticles = articlesData.filter((article) =>
      article.categories.includes(filter)
    );
  }

  articlesContainer.innerHTML = filteredArticles
    .map(
      (article) => `
      <div
        role="button"
        tabindex="0"
        aria-label="View article: ${article.title}"
        class="article-item flex flex-col md:flex-row gap-4 p-4 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-lg transition-colors duration-200"
        data-id="${article.id}">
          <div class="flex-shrink-0">
              <img
                  src="${article.image_url}"
                  alt="${article.title}"
                  class="w-full md:w-40 h-32 md:h-full object-cover rounded-sm"
              >
          </div>
          <div class="flex-1 min-w-0">
              <h3 class="font-medium sm:text-lg cursor-pointer text-gray-900 mb-1 leading-tight">
                  ${article.title}
              </h3>
              <p class="!text-sm text-gray-500">
                ${new Date(article.date).toDateString()}
              </p>
          </div>
      </div>`
    )
    .join("");

  attachArticleClickHandlers();

  if (filteredArticles.length > 0) {
    updateBigCard(filteredArticles[0]);
  }
}

// ======================
// Big Card
// ======================
const bigCardImage = document.querySelector(".image-gallery .image1");
const bigCardTitle = document.querySelector("#bigCardTitle");
const bigCardDesc = document.querySelector("#bigCardDesc");

function updateBigCard(article, openFlag) {
  bigCardImage.src = article.image_url || "";
  bigCardTitle.textContent = article.title || "";
  bigCardDesc.textContent =
    article.description && article.description.length > 0
      ? article.description.slice(0, 100) + "..."
      : "";

  currentBigCardArticle = article;
  if (openFlag) openArticleModal();
}

// ======================
// Filters Setup
// ======================
function buildFilterDropdown() {
  const lang = document.documentElement.lang || "en";
  const allLabel = lang === "ar" ? "الكل" : "All";

  // Collect unique categories
  const categorySet = new Set();
  articlesData.forEach((article) => {
    if (article.categories) {
      article.categories.forEach((cat) => categorySet.add(cat));
    }
  });

  // Create category list including translated "All"
  const categories = [allLabel, ...categorySet];

  filterDropdown.innerHTML = categories
    .map(
      (cat) => `
      <div
        role="button"
        tabindex="0"
        aria-label="Filter by ${cat}"
        class="filter-option cursor-pointer px-4 py-2 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-emerald-500"
        data-filter="${cat}">
        ${cat}
      </div>`
    )
    .join("");

  // Attach events
  document.querySelectorAll(".filter-option").forEach((option) => {
    const handleFilterClick = (e) => {
      const filter = option.getAttribute("data-filter");
      handleFilterSelect(filter);
    };
    
    option.addEventListener("click", handleFilterClick);
    option.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        handleFilterClick(e);
      }
    });
  });
}

function handleFilterSelect(filter) {
  const lang = document.documentElement.lang || "en";
  const allLabel = lang === "ar" ? "الكل" : "All";

  // store the label (so UI shows localized text)
  currentFilter = filter;

  // pass internal "All" to renderArticles when the localized all label is selected
  const internalFilter = filter === allLabel ? "All" : filter;
  renderArticles(internalFilter);

  // update section title to the displayed label
  sectionTitle.textContent = filter;
  hideDropdown();

  // update active state on dropdown options (optional, but good UX)
  document.querySelectorAll(".filter-option").forEach((opt) => {
    opt.classList.toggle("bg-gray-100", opt.getAttribute("data-filter") === filter);
  });
}


// Event listeners
if (filterBtn) {
  const handleFilterToggle = (e) => {
    e.stopPropagation();
    toggleDropdown();
  };
  
  filterBtn.addEventListener("click", handleFilterToggle);
  filterBtn.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      handleFilterToggle(e);
    }
  });
}

document.addEventListener("click", (e) => {
  if (!filterDropdown.contains(e.target) && !filterBtn.contains(e.target)) {
    hideDropdown();
  }
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") hideDropdown();
});

// ======================
// INIT (Fetch API)
// ======================
document.addEventListener("DOMContentLoaded", async () => {

  try {
    const lang = document.documentElement.lang || "en";
    const base = getBasePath();
    const urls = [
      lang === "ar" ? "/ar/acp-news/api/news" : "/acp-news/api/news",
      base + (lang === "ar" ? "ar/acp-news/api/news" : "acp-news/api/news"),
    ];
    articlesData = await fetchWithFallback(urls, "news");
    
    buildFilterDropdown();
    renderArticles(currentFilter);
    sectionTitle.textContent = currentFilter;
  } catch (error) {
    console.error("Failed to fetch articles:", error);
    if (articlesContainer) {
      articlesContainer.innerHTML = `<div class="text-red-600 p-3">${error.message}</div>`;
    }
  }
});


// News Section End

// Video Section Start

const video = document.getElementById("mainVideo");
const playPauseBtn = document.getElementById("playPauseBtn");
const playIcon = document.getElementById("playIcon");
const pauseIcon = document.getElementById("pauseIcon");
const videoOverlay = document.getElementById("videoOverlay");
const videoDuration = document.getElementById("videoDuration");

function formatTime(seconds) {
  const minutes = Math.floor(seconds / 60);
  const remainingSeconds = Math.floor(seconds % 60);
  return `${minutes.toString().padStart(2, "0")}:${remainingSeconds
    .toString()
    .padStart(2, "0")}`;
}

video.addEventListener("loadedmetadata", () => {
  if (video.duration && !isNaN(video.duration)) {
    videoDuration.textContent = formatTime(video.duration);
  }
});

function togglePlayPause() {
  if (video.paused) {
    video.play();
    playIcon.classList.add("hidden");
    pauseIcon.classList.remove("hidden");
    videoOverlay.classList.add("opacity-0", "pointer-events-none");
    videoDuration.classList.add("hidden");
  } else {
    video.pause();
    playIcon.classList.remove("hidden");
    pauseIcon.classList.add("hidden");
    videoOverlay.classList.remove("opacity-0", "pointer-events-none");
    videoDuration.classList.remove("hidden");
  }
}

if (playPauseBtn) {
  playPauseBtn.addEventListener("click", togglePlayPause);
  playPauseBtn.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      togglePlayPause();
    }
  });
}

video.addEventListener("ended", () => {
  playIcon.classList.remove("hidden");
  pauseIcon.classList.add("hidden");
  videoOverlay.classList.remove("opacity-0", "pointer-events-none");
  videoDuration.classList.remove("hidden");
});

video.addEventListener("mouseenter", () => {
  video.controls = true;
});

video.addEventListener("mouseleave", () => {
  if (!video.paused) {
    video.controls = false;
  }
});


let videoCardsData = [];

document.addEventListener("DOMContentLoaded", async () => {
  try {
    const lang = document.documentElement.lang || "en";
    const base = getBasePath();
    const urls = [
      lang === "ar" ? "/ar/api/videos" : "/api/videos",
      base + (lang === "ar" ? "ar/api/videos" : "api/videos"),
    ];

    // Fetch translated video data
    videoCardsData = await fetchWithFallback(urls, "videos");

    // Render video cards
    renderVideoCardsSlider();
    updateVideoCardsNavigation();
    if (!videoCardsData || videoCardsData.length === 0) {
      const videoCardsSliderTrack = document.getElementById("videoCardsSliderTrack");
      if (videoCardsSliderTrack) {
        videoCardsSliderTrack.innerHTML = `<div class="text-gray-600 p-4">${lang === "ar" ? "لا توجد فيديوهات متاحة حالياً" : "No videos available right now."}</div>`;
      }
    }
  } catch (error) {
    console.error("Error fetching videos:", error);
    const videoCardsSliderTrack = document.getElementById("videoCardsSliderTrack");
    if (videoCardsSliderTrack) {
      videoCardsSliderTrack.innerHTML = `<div class="text-red-600 p-4">${error.message}</div>`;
    }
  }
});


let videoCardsCurrentSlideIndex = 0;
let videoCardsPerSlide = window.innerWidth >= 768 ? 6 : 2;

window.addEventListener("resize", () => {
  const newVideoCardsPerSlide = window.innerWidth >= 768 ? 6 : 2;
  if (newVideoCardsPerSlide !== videoCardsPerSlide) {
    videoCardsPerSlide = newVideoCardsPerSlide;
    videoCardsCurrentSlideIndex = 0;
    renderVideoCardsSlider();
    updateVideoCardsNavigation();
  }
});

function formatVideoCardsTime(seconds) {
  const minutes = Math.floor(seconds / 60);
  const remainingSeconds = Math.floor(seconds % 60);
  return `${minutes.toString().padStart(2, "0")}:${remainingSeconds
    .toString()
    .padStart(2, "0")}`;
}

function createVideoCardsHTML(card, index) {
  return `
    <div class="bg-white rounded-lg overflow-hidden border border-gray-300">
      <div class="relative aspect-video overflow-hidden">
        <video
          id="videoCardsVideo${index}"
          class="w-full h-full object-cover"
          poster="/placeholder.svg?height=200&width=300"
        >
          <source src="${card.video_link}" type="video/mp4">
          Your browser does not support the video tag.
        </video>

        <div id="videoCardsOverlay${index}" class="absolute inset-0 bg-black/10 flex items-center justify-center">
          <button id="videoCardsPlayBtn${index}" class="p-3 cursor-pointer">
            <svg class="w-16 h-16 text-[#6C757D]" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8 5v14l11-7z"/>
            </svg>
          </button>
        </div>

        <div id="videoCardsDuration${index}" class="absolute top-2 right-2 bg-black/80 text-white text-xs px-2 py-1 rounded">
          00:00
        </div>
      </div>
      <div class="singleVideoCard  p-4">
        <h3 class="font-bold text-lg text-[#495057] mb-2">${card.title}</h3>
      </div>
    </div>
  `;
}

function renderVideoCardsSlider() {
  const videoCardsSliderTrack = document.getElementById(
    "videoCardsSliderTrack"
  );
  const totalVideoCardsSlides = Math.ceil(
    videoCardsData.length / videoCardsPerSlide
  );

  videoCardsSliderTrack.innerHTML = "";

  for (let i = 0; i < totalVideoCardsSlides; i++) {
    const slideDiv = document.createElement("div");

    if (window.innerWidth >= 768) {
      slideDiv.className =
        "flex-none w-full grid grid-cols-3 grid-rows-2 gap-x-8 gap-y-24 px-2";
    } else {
      slideDiv.className =
        "flex-none w-full grid grid-cols-1 grid-rows-2 gap-8 px-2";
    }

    const startIndex = i * videoCardsPerSlide;
    const endIndex = Math.min(
      startIndex + videoCardsPerSlide,
      videoCardsData.length
    );

    for (let j = startIndex; j < endIndex; j++) {
      const cardElement = document.createElement("div");
      cardElement.innerHTML = createVideoCardsHTML(videoCardsData[j], j);
      slideDiv.appendChild(cardElement.firstElementChild);
    }

    videoCardsSliderTrack.appendChild(slideDiv);
  }

  videoCardsData.forEach((card, index) => {
    const video = document.getElementById(`videoCardsVideo${index}`);
    const playBtn = document.getElementById(`videoCardsPlayBtn${index}`);
    const overlay = document.getElementById(`videoCardsOverlay${index}`);
    const duration = document.getElementById(`videoCardsDuration${index}`);

    if (video && playBtn && overlay && duration) {
      let hasBeenPlayed = false;

      video.addEventListener("loadedmetadata", () => {
        if (video.duration && !isNaN(video.duration)) {
          duration.textContent = formatVideoCardsTime(video.duration);
        }
      });

      const handleVideoPlay = (e) => {
        e.stopPropagation();
        video.play();
        hasBeenPlayed = true;
        overlay.classList.add("opacity-0", "pointer-events-none");
        duration.classList.add("hidden");
        video.controls = true;
      };
      
      playBtn.addEventListener("click", handleVideoPlay);
      playBtn.addEventListener("keydown", function (e) {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          handleVideoPlay(e);
        }
      });

      video.addEventListener("ended", () => {
        if (!hasBeenPlayed) {
          overlay.classList.remove("opacity-0", "pointer-events-none");
          duration.classList.remove("hidden");
        }
        video.controls = false;
      });

      video.addEventListener("pause", () => {
        if (!hasBeenPlayed) {
          overlay.classList.remove("opacity-0", "pointer-events-none");
          duration.classList.remove("hidden");
        }
      });
    }
  });
}

function updateVideoCardsNavigation() {
  const totalVideoCardsSlides = Math.ceil(
    videoCardsData.length / videoCardsPerSlide
  );
  const videoCardsCurrentSlideElement = document.getElementById(
    "videoCardsCurrentSlide"
  );
  const videoCardsTotalSlidesElement = document.getElementById(
    "videoCardsTotalSlides"
  );
  const videoCardsProgressBar = document.getElementById(
    "videoCardsProgressBar"
  );

  videoCardsCurrentSlideElement.textContent = String(
    videoCardsCurrentSlideIndex + 1
  ).padStart(2, "0");
  videoCardsTotalSlidesElement.textContent = String(
    totalVideoCardsSlides
  ).padStart(2, "0");

  const progressPercentage =
    totalVideoCardsSlides > 1
      ? 4 + (videoCardsCurrentSlideIndex / (totalVideoCardsSlides - 1)) * 96
      : 4;
  videoCardsProgressBar.style.width = `${progressPercentage}%`;

  const videoCardsSliderTrack = document.getElementById(
    "videoCardsSliderTrack"
  );
  const langSelected = document.documentElement.lang;
  const translateX =
    langSelected == "ar"
      ? videoCardsCurrentSlideIndex * 100
      : -videoCardsCurrentSlideIndex * 100;
  videoCardsSliderTrack.style.transform = `translateX(${translateX}%)`;
}

const videoCardsPrevBtn = document.getElementById("videoCardsPrevBtn");
const videoCardsNextBtn = document.getElementById("videoCardsNextBtn");

if (videoCardsPrevBtn) {
  const handleVideoCardsPrev = () => {
    const totalVideoCardsSlides = Math.ceil(
      videoCardsData.length / videoCardsPerSlide
    );
    if (videoCardsCurrentSlideIndex > 0) {
      videoCardsCurrentSlideIndex--;
    } else {
      videoCardsCurrentSlideIndex = totalVideoCardsSlides - 1;
    }
    updateVideoCardsNavigation();
  };
  
  videoCardsPrevBtn.addEventListener("click", handleVideoCardsPrev);
  videoCardsPrevBtn.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      handleVideoCardsPrev();
    }
  });
}

if (videoCardsNextBtn) {
  const handleVideoCardsNext = () => {
    const totalVideoCardsSlides = Math.ceil(
      videoCardsData.length / videoCardsPerSlide
    );
    if (videoCardsCurrentSlideIndex < totalVideoCardsSlides - 1) {
      videoCardsCurrentSlideIndex++;
    } else {
      videoCardsCurrentSlideIndex = 0;
    }
    updateVideoCardsNavigation();
  };
  
  videoCardsNextBtn.addEventListener("click", handleVideoCardsNext);
  videoCardsNextBtn.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      handleVideoCardsNext();
    }
  });
}
renderVideoCardsSlider();
updateVideoCardsNavigation();
// Video Section End


  (function () {
    const modal = document.getElementById('videoPreviewModal');
    const previewVideo = document.getElementById('previewVideo');
    const closeBtn = document.getElementById('closeVideoPreview');

    if (!modal || !previewVideo || !closeBtn) {
      return;
    }

    function openPreviewFromVideo(videoEl) {
      if (!videoEl) return;

      const source = videoEl.querySelector('source');
      const src =
        videoEl.getAttribute('data-preview-src') ||
        (source && source.getAttribute('src'));

      if (!src) return;

      // Clear previous sources
      previewVideo.pause();
      previewVideo.removeAttribute('src');
      while (previewVideo.firstChild) {
        previewVideo.removeChild(previewVideo.firstChild);
      }

      // Create new source
      const newSource = document.createElement('source');
      newSource.src = src;
      newSource.type = source && source.type ? source.type : 'video/mp4';
      previewVideo.appendChild(newSource);
      previewVideo.load();

      // Show modal
      modal.classList.remove('hidden');
      modal.classList.add('flex');

      // Try to autoplay
      previewVideo.play().catch(function () {
        // Ignore autoplay errors (e.g. browser restrictions)
      });
    }

    function closePreview() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      previewVideo.pause();
    }

    // Close button
    closeBtn.addEventListener('click', closePreview);

    // Click outside to close
    modal.addEventListener('click', function (e) {
      if (e.target === modal) {
        closePreview();
      }
    });

    // ESC to close
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        closePreview();
      }
    });

    // Inject "Preview" buttons on top of all previewable videos
    // Any <video> with data-generate-poster will get a preview badge
    const videos = document.querySelectorAll('video[data-generate-poster]');

    videos.forEach(function (videoEl) {
      const wrapper = videoEl.parentElement;
      if (!wrapper) return;

      // Avoid duplicates
      if (wrapper.querySelector('[data-role="video-preview-button"]')) return;

      // Ensure wrapper is positioned (most of yours already have class "relative")
      if (!wrapper.style.position) {
        wrapper.style.position = 'relative';
      }

      const btn = document.createElement('button');
      btn.type = 'button';
      btn.setAttribute('data-role', 'video-preview-button');
      btn.className =
        'absolute top-3 left-3 bg-black/60 text-white text-xs px-3 py-1 ' +
        'rounded-md backdrop-blur-sm';

      // Basic Arabic/English label based on <html lang="">
      btn.innerText = document.documentElement.lang === 'ar'
        ? 'معاينة'
        : 'Preview';

      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        openPreviewFromVideo(videoEl);
      });

      wrapper.appendChild(btn);
    });
  })();