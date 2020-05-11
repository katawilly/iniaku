
    <footer class="bg-primary text-white links-white pb-4 footer-1">
      <div class="container">
        <div class="row">

          <div class="col-xl-7 col-md-6">
            <div class="col-md-4 col-lg-3 col-xl-4" data-aos="fade-left">
              <img src="<?php echo base_url() ?>assets/front/img/logos/iniakume-dark.svg" alt="Image" class="img-fluid">
            </div>
            <br>
            <ul class="nav flex-row flex-md-column">
              <li class="nav-item mr-3 mr-md-0">
                <?php echo html_escape($settings->footer_about) ?>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="pricing-plans.html" class=""><i class="far fa-envelope"></i>&nbsp;
                 iniaku@gmail.com</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="blog-listing-1.html" class=""><i class="fab fa-whatsapp"></i>&nbsp; 62 895 0380 0600</a>
              </li>
            </ul>
          </div>

          <div class="col-xl-2 col-md-3">
            <h5>Perusahaan</h5>
            <ul class="nav flex-row flex-md-column">
              <li class="nav-item mr-3 mr-md-0">
                <a href="company-about-1.html" class="nav-link fade-page px-0 py-2">Company</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="pricing-plans.html" class="nav-link fade-page px-0 py-2">Features</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="blog-listing-1.html" class="nav-link fade-page px-0 py-2">Blog</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="help-center-home.html" class="nav-link fade-page px-0 py-2">Help Center</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="careers-1.html" class="nav-link fade-page px-0 py-2">Careers</a>
              </li>
            </ul>
          </div>

          <div class="col-xl-3 col-md-3 mb-4 mb-md-0">
            <h5>Dukungan</h5>
            <ul class="nav flex-row flex-md-column">
              <li class="nav-item mr-3 mr-md-0">
                <a href="landing-1.html" class="nav-link fade-page px-0 py-2">FAQ</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="landing-2.html" class="nav-link fade-page px-0 py-2">Kebijakan dan Privasi</a>
              </li>
              <li class="nav-item mr-3 mr-md-0">
                <a href="landing-2.html" class="nav-link fade-page px-0 py-2">Syarat dan Ketentuan</a>
              </li>
            </ul>
          </div>

          <div class="col mt-4 mt-md-0 mt-lg-5 mt-xl-0 order-lg-4 order-xl-3">
            
          </div>
        </div>
        <div class="row">
          <div class="col">
            <hr>
          </div>
        </div>
        <div class="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
          <div class="col-auto">
            <div class="d-flex flex-column flex-sm-row align-items-center text-small">
              <div class="text-muted"><?php echo html_escape($settings->copyright) ?>
                <!-- <a href="https://www.google.com/policies/privacy/" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> -->
              </div>
            </div>
          </div>
          <div class="col-auto mt-3 mt-lg-0">
            <ul class="list-unstyled d-flex mb-0">

              <?php if (!empty($settings->facebook)) : ?>
              <li class="mx-3">
                <a target="_blank" href="<?php echo html_escape($settings->facebook) ?>" class="hover-fade-out">
                  <img src="<?php echo base_url() ?>assets/front/img/icons/social/facebook.svg" alt="Facebook" class="icon icon-xs">
                </a>
              </li>
              <?php endif; ?>
              <?php if (!empty($settings->instagram)) : ?>
              <li class="mx-3">
                <a target="_blank" href="<?php echo html_escape($settings->instagram) ?>" class="hover-fade-out">
                  <img src="<?php echo base_url() ?>assets/front/img/icons/social/instagram.svg" alt="Instagram" class="icon icon-xs">
                </a>
              </li>
              <?php endif; ?>
              <?php if (!empty($settings->google)) : ?>
              <li class="mx-3">
                <a target="_blank" href="<?php echo html_escape($settings->google) ?>" class="hover-fade-out">
                  <img src="<?php echo base_url() ?>assets/front/img/icons/social/google.svg" alt="Google" class="icon icon-xs">
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <a href="#top" class="btn btn-warning rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <i class="fas fa-arrow-up text-primary"></i>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/bootstrap.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
      (($) => {
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index-2.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jarallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/theme.js"></script>
    <!-- This script appears only on the demo.  It is used to delay unnecessary image loading until after the main page content is loaded. -->
    <script type="text/javascript">
      window.addEventListener("load",function(){
            setTimeout(function() {
              const delayedImages = document.querySelectorAll('[data-delay-src]');
              theme.mrUtil.forEach(delayedImages, (index, elem) => {
                const source = elem.getAttribute('data-delay-src');
                elem.removeAttribute('data-delay-src');
                elem.setAttribute('src', source);
              });
            }, 500);
          });
    </script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>


<!-- Mirrored from jumpstart.mediumra.re/landing-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 01:58:41 GMT -->
</html>
