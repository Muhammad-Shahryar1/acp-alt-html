document.addEventListener("DOMContentLoaded", () => {
  const langButtons = document.querySelectorAll("#language-selector");

  langButtons.forEach((langButton) => {
    const currentLang = langButton?.dataset.lang || "en";

    const langMap = {
      "/media": "/ar/node/4",
      "/media/": "/ar/node/4",
      "/ar/node/4": "/media",
      "/node/4": "/media",
      "/become-partner": "/ar/node/3",
      "/become-partner/": "/ar/node/3",
      "/ar/node/3": "/become-partner",
      "/node/3": "/become-partner",
      "/contact-us": "/ar/node/2",
      "/contact-us/": "/ar/node/2",
      "/ar/node/2": "/contact-us",
      "/node/2": "/contact-us",
    };

    const handleLanguageToggle = () => {
      const isArabic = currentLang === "ar";
      let pathname = window.location.pathname;
      const origin = window.location.origin;
      const search = window.location.search;

      // Normalize pathname (remove trailing slash for matching)
      const normalizedPath = pathname.endsWith('/') && pathname !== '/' 
        ? pathname.slice(0, -1) 
        : pathname;

      let targetPath = pathname;

      if (isArabic) {
        // Arabic → English
        if (langMap[normalizedPath]) {
          targetPath = langMap[normalizedPath];
        } else if (langMap[pathname]) {
          targetPath = langMap[pathname];
        } else {
          targetPath = pathname.replace(/^\/ar\//, "/");
        }
      } else {
        // English → Arabic
        if (langMap[normalizedPath]) {
          targetPath = langMap[normalizedPath];
        } else if (langMap[pathname]) {
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