<footer class="pb-5 bg-primary-3 text-light">
      <div class="container">
        <div class="row mb-4 justify-content-center">
          <div class="col-auto">
            <a href="index-2.html">
              <img src="logo.png" alt="Leap" class="icon icon-lg">
            </a>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">
            <ul class="nav justify-content-center">
              <li class="nav-item"><a href="https://dark-network.eu/" class="nav-link">Startseite</a>
              </li>
              <li class="nav-item"><a href="partner" class="nav-link">Partner</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link">Support</a>
              </li>
              <li class="nav-item"><a href="impressum" class="nav-link">Impressum</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center mt-5 mb-5">
          <div class="col-auto">
            <ul class="nav">
              <li class="nav-item">
                <a href="https://www.twitter.com/darknetworkeu" target="_blank" class="nav-link">
                  <img class="icon " src="assets/img/icons/social/twitter.svg" alt="twitter social icon" data-inject-svg />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xl-10">
            <small class="text-muted">&copy;2021 Dark-Network.eu</small>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="btn back-to-top btn-primary btn-round" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img class="icon" src="assets/img/icons/theme/navigation/arrow-up.svg" alt="arrow-up icon" data-inject-svg />
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://dark-network.eu/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="https://dark-network.eu/assets/js/bootstrap.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
      (function($){
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="https://dark-network.eu/assets/js/theme.js"></script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>