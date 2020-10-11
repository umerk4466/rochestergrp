<!-- get header -->
<?php get_header(); ?>
<!-- CONTACT US PAGE BANNER -->
<div class="contact-us-banner white">
    <div class="row h-100 mx-0 text-center">
        <div class="col my-auto pt-5 pt-md-0">
            <h2 class="heading-size heading-font">Get In Touch</h2>
            <h5 class="sub-heading-size heading-font">The International Car Exporters</h5>
        </div>
    </div>
</div>
<!-- ICON BOXES SECTION -->
<section class="container text-center">
    <div class="row py-5 team-container">
        <div class="col-md-4 col-sm-6">
            <div class="custom-icons-box">
                <div class="icon-box">
                    <i class="fa fa-home"></i>
                </div>
                <h5 class="sub-heading-size heading-font"><strong>Visit us</strong></h5>
                <p class="icon-description">
                    Our office is located on Jasmine road number 79, with the postcose LU3 3FA in Luton, United Kingdom.
                </p>
                <a href="https://www.google.com/maps/place/79+Jasmine+Rd,+Luton+LU3+3FA/@51.915816,-0.4737989,17z/data=!4m5!3m4!1s0x48764949f5d76767:0xf75c359d6d768846!8m2!3d51.9157565!4d-0.4721681" target="_blank">Show me map!</a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="custom-icons-box">
                <div class="icon-box">
                    <i class="fa fa-mobile"></i>
                </div>
                <h5 class="sub-heading-size heading-font"><strong>Call us</strong></h5>
                <p class="icon-description">
                    If you need quick query about anything, you can call us on +447495997839 (UK) or +254790436322 (Kenya).
                </p>
                <a href="javascript:void(0);">+44 7495997839</a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="custom-icons-box">
                <div class="icon-box">
                    <i class="fa fa-comments"></i>
                </div>
                <h5 class="sub-heading-size heading-font"><strong>Message us</strong></h5>
                <p class="icon-description">
                    If you have any quesetion, message us derectly on the below given email. We will be in touch as soon as possible.
                </p>
                <a href="mailto:info@rochestergrp.co.uk">info@rochestergrp.co.uk</a>
            </div>
        </div>
    </div>
</section>
<!-- END ICON BOXES SECTION -->

<!-- CONTACT FORM SECTION -->
<div class="page-bg-color pt-5">
    <section class="container text-center">
        <h2 class="heading-size heading-font white">Have Any Question?</h2>
        <h5 class="sub-heading-size heading-font white">
            Send us message directly!
        </h5>
        <div class="row pt-5">
            <div class="col d-none d-md-block my-auto">
                <i class="fa fa-envelope-o" style="font-size: 11rem; color:white"></i>
            </div>
            <div class="col my-auto">
                <!-- FORM SAMPLE -->
                <!-- <form class="contact-form">
                    <input class="contact-form-input" type="text" id="fname" name="fname" value="Full name "><br>
                    <input class="contact-form-input" type="text" id="lname" name="lname" value="Email"><br>
                    <input class="contact-form-input" type="text" id="lname" name="lname" value="Phone number"><br>
                    <textarea class="contact-form-textarea" rows="4" value="John">Your question or message...</textarea><br>
                    <input class="contact-form-button" type="submit" value="Send Message">
                </form> -->
                <!--  FORM -->
                <?php
                echo do_shortcode(
                    '[contact-form-7 id="19" title="Contact form 1"]'
                );
                ?>
            </div>
        </div>
    </section>
    <svg class="custom-svg" viewBox="0 0 1440 320">
        <path fill="white" d="M0,32L80,58.7C160,85,320,139,480,176C640,213,800,235,960,240C1120,245,1280,235,1360,229.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>

</div>
<!-- END CONTACT FORM SECTION -->

<!-- get footer -->
<?php get_footer(); ?>