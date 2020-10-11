    <!-- Footer -->
    <footer class="footers py-4 pt-md-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5 class="sub-heading-size heading-font mb-2">Rochester Group Ltd</h5>
            <p>
              Copyright 2020 Rochester Group Ltd - Rochester Group is a company registered England and Wales (Company No. 12184298) 79 Jasmine Road, Luton, LU3 3FA
            </p>
            <p class="text-muted mb-0 text-center text-md-left">© 2020 Rogester Group Ltd.</p>
          </div>
          <div class="col d-none d-md-block">
            <h5 class="sub-heading-size heading-font mb-2">Quick Links</h5>
            <ul class="list-unstyled">
              <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('about-us')) ?>">About Us</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('vehicles-stock')) ?>">Vehicles Stock</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('contact-us')) ?>">Contact Us</a></li>
            </ul>
          </div>
          <div class="col d-none d-md-block">
            <h5 class="sub-heading-size heading-font mb-2">Follow Us</h5>
            <a href="https://www.facebook.com/john.kibugi.3/" target="_blank" class="social-link"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="javascript:void(0)" class="social-link"><i class="fa fa-twitter-square fa-2x"></i></a>
            <a href="mailto:info@rochestergrp.co.uk" class="social-link"><i class="fa fa-google-plus-square fa-2x"></i></a>
            <a href="mailto:info@rochestergrp.co.uk" class="social-link"><i class="fa fa-envelope-square fa-2x"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->
    <?php get_footer(); ?>
    </body>

    </html>