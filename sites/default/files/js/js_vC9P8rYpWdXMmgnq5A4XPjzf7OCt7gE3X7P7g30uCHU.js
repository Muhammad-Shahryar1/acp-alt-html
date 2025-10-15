// navbar animation
      window.addEventListener("scroll", function () {
        const header = document.getElementById("main-header");
        if (window.scrollY > 250) {
          header.classList.add("bg-white", "shadow-md", "text-gray-900");
          header.classList.remove("bg-transparent", "text-white");
          document.getElementById("mobile-menu").classList.add("!text-white");
        } else {
          header.classList.add("bg-transparent", "text-white");
          header.classList.remove("bg-white", "shadow-md", "text-gray-900");
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
;
