<!-- get header -->
<?php get_header(); ?>
<!-- HOME PAGE PAGE -->
<section id="Home" class="main-container">
  <div class="row h-100 text-center">
    <div class="col my-auto">
      <div class="heading-size white heading-font">Whatever Road You're In</div>
      <div id="typewriter">We will find you the right car</div>
      <br />
      <button type="button" class="white-custom-button btn go_down_btn" onclick="return false;">
        Show More
      </button>
    </div>
  </div>
</section>

<!-- ABOUT US Section -->
<section id="about-us-section" class="container">
  <div class="row my-5">
    <div class="col-lg-6">
      <div class="heading-size heading-font">Rochester Group Ltd</div>
      <h5 class="sub-heading-size heading-font">The International Car Exporters</h5>
      <p class="my-4">
        With a wealth of automotive experience, if you are looking to import your next vehicle from the UK you have come to the right place.
        We have registered consistent growth after continually keeping the service personalised and creating our own internal exacting standards on all vehicles we send out.
        We are happy to arrange Export Service for Dealers and Private Individuals abroad. If we don't have the current cars you are looking for in stock please contact us and we will try to source the cars for you.
      </p>
      <a class="btn black-custom-button mr-2" href="<?php echo get_permalink(get_page_by_path('about-us')) ?>" role="button">Find Out More</a>
      <a class="btn black-custom-button" href="<?php echo get_permalink(get_page_by_path('contact-us')) ?>" role="button">Contact Us</a>
    </div>
    <div class="col-lg-6 d-none d-lg-block">
      <div class="text-center">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/main.jpg" width="400" class="img-fluid" alt="Rochestergrp car Image" />
      </div>
    </div>
  </div>
</section>

<!-- GALLERY SECTION -->
<div class="page-bg-color py-5">
  <section class="container">
    <div class="row">
      <div class="col text-center">
        <h2 class="heading-size heading-font white">Recently Added Or Exported</h2>
        <h5 class="sub-heading-size heading-font white">The international car exporters</h5>
        <!-- cars slider start -->
        <div id="cars-slider" class="splide">
          <div class="splide__slider">
            <div class="splide__track">
              <ul class="splide__list">
                <?php
                // get all the vehicles of bmw make
                query_posts(array(
                  'post_type' => 'vehicle',
                  'showposts' => 10,
                ));
                if (have_posts()) : while (have_posts()) : the_post();
                    // get post fields data
                    $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
                    $mileage = get_post_meta(get_the_ID(), 'mileage', true);
                    $gearbox_type = get_post_meta(get_the_ID(), 'gearbox_type', true);
                    $engine_consumption_type = get_post_meta(get_the_ID(), 'engine_consumption_type', true);
                    $price = get_post_meta(get_the_ID(), 'price', true);
                    $place = get_post_meta(get_the_ID(), 'place', true);
                ?>
                    <!-- vehicle -->
                    <li class="splide__slide">
                      <section class="my-5">
                        <a href="<?php the_permalink() ?>" class="custom-card-a">
                          <div class="card">
                            <img class="card-img-top" loading="lazy" src="<?php echo the_post_thumbnail_url(); ?>" />
                            <div class="card-body text-left">
                              <div class="h6 font-weight-bold">
                                <?php echo the_title() . " " . $sub_heading ?>
                              </div>
                              <div class="d-flex m-0 bottom-line top-line py-1">
                                <div class="col p-0 right-line"><?php echo $mileage ?></div>
                                <div class="col"><?php echo $gearbox_type ?></div>
                              </div>
                              <div class="font-weight-bold bottom-line py-1">
                                <?php echo $price ?>
                              </div>
                              <div class="pt-1"><?php echo $place ?></div>
                            </div>
                          </div>
                        </a>
                      </section>
                    </li>
                    <!-- end-vehicles loop -->
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>No vehicles added yet</p>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- slider end -->
        <a class="btn white-custom-button" href="<?php echo get_permalink(get_page_by_path('vehicles-stock')) ?>" role="button">Find Out More</a>
      </div>
    </div>
  </section>
</div>
<!-- GALLERY SECTION END -->

<!-- CUSTOMER REVIEWS SECTION -->
<section class="container">
  <div class="row py-5 text-center">
    <div class="col">
      <h2 class="heading-size heading-font">What Our Customers Say!</h2>
      <h5 class="sub-heading-size heading-font d-none d-md-block">
        Latest reviews from out customers
      </h5>
      <!-- customer review slider -->
      <div id="customer-review-slider" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="col">
                <div class="review-box mx-auto">
                  <div class="review-img-box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/customer-2.jpg" alt="rochester group customer" />
                  </div>
                  <p class="customer-review-description">
                    I just wanted to say thank you, I love the car! I was really impressed with the support and professionalism throughout the whole process.
                  </p>
                  <p class="font-weight-bold m-0">Kevin Salaash</p>
                  <p>Rochestergrp Client</p>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="col">
                <div class="review-box mx-auto">
                  <div class="review-img-box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/customer-1.jpg" alt="rochester group customer" />
                  </div>
                  <p class="customer-review-description">
                    John and his team are people you can trust to deliver you a quality car. Great communication throughout the process and no surprises.
                  </p>
                  <p class="font-weight-bold m-0">Joe Walker</p>
                  <p>Rochestergrp Client</p>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="col">
                <div class="review-box mx-auto">
                  <div class="review-img-box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/customer-3.jpg" alt="rochester group customer" />
                  </div>
                  <p class="customer-review-description">
                    These guys are great. All of my clients have been happy with their cars. I would recommend John and his team again as professional and reliable.
                  </p>
                  <p class="font-weight-bold m-0">Christopher</p>
                  <p>Rochestergrp Client</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CUSTOMER REVIEWS SECTION END -->

<!-- get footer -->
<?php get_footer(); ?>