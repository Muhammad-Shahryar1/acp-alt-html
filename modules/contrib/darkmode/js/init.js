((Drupal, once, drupalSettings) => {
  Drupal.behaviors.darkModeWidget = {
    attach(context) {
      once('darkmode', 'body', context).forEach(() => {
        const options = {
          bottom: drupalSettings.darkmode.bottom,
          right: drupalSettings.darkmode.right,
          left: drupalSettings.darkmode.left,
          time: drupalSettings.darkmode.time,
          mixColor: drupalSettings.darkmode.mixColor,
          backgroundColor: drupalSettings.darkmode.backgroundColor,
          buttonColorDark: drupalSettings.darkmode.buttonColorDark,
          buttonColorLight: drupalSettings.darkmode.buttonColorLight,
          saveInCookies: drupalSettings.darkmode.saveInCookies,
          label: '🌓',
          autoMatchOsTheme: drupalSettings.darkmode.themeMode === 'auto',
        };
        // Initialize the dark mode widget.
        /* global Darkmode */
        /* eslint no-undef: "error" */
        const darkmode = new Darkmode(options);
        darkmode.showWidget();
        window.darkmodeInstance = darkmode;
      });
    },
  };

  Drupal.behaviors.darkModeApplyTheme = {
    attach(context) {
      once('darkmode-theme-apply', 'body', context).forEach(() => {
        const mode = drupalSettings.darkmode.themeMode;
        const darkmode = window.darkmodeInstance;
        const layer = document.querySelector('.darkmode-layer');
        const toggleButton = document.querySelector('.darkmode-toggle');

        if (!darkmode) return;

        if (mode === 'dark') {
          if (!darkmode.isActivated()) {
            darkmode.toggle();
          }
          layer?.classList.add('darkmode-layer--expanded');
          toggleButton?.classList.add('darkmode-toggle--white');
        } else if (mode === 'light') {
          if (darkmode.isActivated()) {
            darkmode.toggle();
          }
          layer?.classList.remove('darkmode-layer--expanded');
          toggleButton?.classList.remove('darkmode-toggle--white');
        }
      });
    },
  };
})(Drupal, once, drupalSettings);
