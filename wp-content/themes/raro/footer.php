<!-- Contacts -->

      <section class="contacts section" id="contact">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
            <strong class="fade-title-right">contacts</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                <a href="tel:+529878761642">+52 (987) 876-1642</a><br>
                <small>MEX, Yucatán, Mérida</small><br>
                <a href="tel:+17863715657">+1 (786) 371-5657</a><br>
                <small>USA, Florida, Miami</small><br>
                <a href="mailto:info@goarch.com">info@raro-co.com</a><br>
              </div>
              <div class="col-base  col-md-8">
                <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]') ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->

      <footer id="footer" class="footer">     
        <div class="container">
          <div class="row-base row">
            <div class="col-base text-left-md col-md-4">
              <a href="#top" class="brand js-target-scroll">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="RaRo Logo">
              </a>
            </div>
            <div class="text-center-md col-base col-md-4">
              <a href="<?php echo site_url('privacy-policy') ?>" class="author-link">
                Privacy Notice
              </a>
            </div>
            <div class="text-right-md col-base col-md-4">
              © RaRo <?php echo date('Y') ?>. All Rights Reserved.
            </div>
          </div>
        </div>
      </footer>

      <!-- Go up button -->
      <div class="go-up">
        <a href="#top" class="js-target-scroll"><i class="fa fa-arrow-up"></i></a>
      </div>

      <!-- Lines -->

      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- SCRIPTS -->
<?php wp_footer(); ?> 
</body>
</html>