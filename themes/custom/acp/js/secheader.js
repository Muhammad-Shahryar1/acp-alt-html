document.addEventListener("DOMContentLoaded", () => {
  const langButtons = document.querySelectorAll("#language-selector");

  // Define known URL mappings between English and Arabic pages
  const langMap = {
    "/media": "/ar/node/4",
    "/become-partner": "/ar/node/3",
    "/contact-us": "/ar/node/2",
    "/privacy-policy": "/ar/node/1",
  };

  langButtons.forEach((langButton) => {
    langButton.addEventListener("click", () => {
      const currentPath = window.location.pathname;
      const baseUrl = window.location.origin;
      const isArabic = currentPath.startsWith("/ar/");

      let targetUrl = baseUrl; // default base

      if (isArabic) {
        // Arabic → English
        // Find the English equivalent of current Arabic node
        const englishPath = Object.keys(langMap).find(
          (enPath) => langMap[enPath] === currentPath
        );
        targetUrl += englishPath ? englishPath : currentPath.replace("/ar", "");
      } else {
        // English → Arabic
        targetUrl += langMap[currentPath] ? langMap[currentPath] : "/ar" + currentPath;
      }

      window.location.href = targetUrl;
    });
  });
});




// Secondary Header - Mobile menu toggle
const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileMenu = document.getElementById("mobile-menu");

if (mobileMenuButton && mobileMenu) {
  mobileMenuButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
  });
}

// Mobile about dropdown toggle (if you have an about dropdown)
const mobileAboutButton = document.getElementById("mobile-about-button");
const mobileAboutDropdown = document.getElementById("mobile-about-dropdown");
const mobileAboutArrow = document.getElementById("mobile-about-arrow");

if (mobileAboutButton && mobileAboutDropdown && mobileAboutArrow) {
  mobileAboutButton.addEventListener("click", function () {
    mobileAboutDropdown.classList.toggle("hidden");
    mobileAboutArrow.classList.toggle("rotate-180");
  });
}