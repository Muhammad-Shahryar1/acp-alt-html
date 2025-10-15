// Wait until DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("main-header");
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");

  // Navbar animation on scroll
  window.addEventListener("scroll", function () {
    if (!header) return;

    if (window.scrollY > 250) {
      header.classList.add("bg-white", "shadow-md", "text-gray-900");
      header.classList.remove("bg-transparent", "text-white");

      if (mobileMenu) {
        mobileMenu.classList.add("!text-white");
      }
    } else {
      header.classList.add("bg-transparent", "text-white");
      header.classList.remove("bg-white", "shadow-md", "text-gray-900");
    }
  });

  // Mobile menu toggle
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

    // Handle language selector inside mobile menu
    const languageSelectors = document.querySelectorAll("#language-selector");
    if (languageSelectors[1]) {
      languageSelectors[1].addEventListener("click", () => {
        console.log("clicked lang");
        mobileMenu.classList.add("hidden");
      });
    }
  }
});
;
