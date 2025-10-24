
// Footer Animation

document.addEventListener("DOMContentLoaded", function () {
    console.log('Running from Footer Section')
        let lastScrollTop =
          window.pageYOffset || document.documentElement.scrollTop;
        let footerShown = false;
        const footer = document.getElementById("animatedFooter");
        const pageOverlay = document.getElementById("pageOverlay");
        let scrollTimer = null;
        const threshold = 200; // px to consider "at bottom"

        // safety: ensure elements exist
        if (!footer || !pageOverlay) return;

        // Force hidden state & opacity at load
        footer.classList.remove("active");
        pageOverlay.classList.remove("active");
        footerShown = false;

        // After a tiny delay remove hidden-init to allow CSS transitions
        setTimeout(() => {
          footer.classList.remove("hidden-init");
        }, 200);

        function isAtBottom() {
          const scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;
          const clientHeight =
            window.innerHeight || document.documentElement.clientHeight;
          const scrollHeight = Math.max(
            document.body.scrollHeight,
            document.documentElement.scrollHeight
          );
          return scrollTop + clientHeight >= scrollHeight - threshold;
        }

        function showFooter() {
          if (footerShown) return;
          footer.classList.add("active");
          pageOverlay.classList.add("active");
          footerShown = true;
        }

        function hideFooter() {
          if (!footerShown) return;
          footer.classList.remove("active");
          pageOverlay.classList.remove("active");
          footerShown = false;
        }

        window.addEventListener(
          "scroll",
          function () {
            const currentScrollTop =
              window.pageYOffset || document.documentElement.scrollTop;

            // capture previous scroll position for the debounced check
            const prevScrollTop = lastScrollTop;

            // Instant hide when scrolling up
            if (currentScrollTop < prevScrollTop - 5 && footerShown) {
              hideFooter();
            }

            // Debounced show at bottom ONLY when scrolling down from the previous position
            clearTimeout(scrollTimer);
            scrollTimer = setTimeout(function () {
              // Show only if user was moving down (current > prev) AND we're at bottom
              if (currentScrollTop > prevScrollTop && isAtBottom()) {
                showFooter();
              } else if (!isAtBottom()) {
                // If we've left the bottom area, ensure footer is hidden
                hideFooter();
              }
              // update lastScrollTop after debounce so prevScrollTop stays meaningful
              lastScrollTop = currentScrollTop;
            }, 80);

            // do NOT set lastScrollTop here (we update it inside the debounced handler)
          },
          { passive: true }
        );

        // Click overlay to hide footer
        pageOverlay.addEventListener("click", function () {
          hideFooter();
          window.scrollBy({ top: -120, left: 0, behavior: "smooth" });
        });

        // Ensure footer shows/hides on resize/orientation change if needed
        window.addEventListener("resize", () => {
          if (isAtBottom()) showFooter();
          else hideFooter();
        });

        // keyboard escape closes footer
        document.addEventListener("keydown", (e) => {
          if (e.key === "Escape") hideFooter();
        });
      });
