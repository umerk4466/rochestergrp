<!-- get header -->
<?php get_header(); ?>

<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    // get post fields data
    $mileage = get_post_meta(get_the_ID(), 'mileage', true);
    $reg_year = get_post_meta(get_the_ID(), 'reg_year', true);
    $make = get_post_meta(get_the_ID(), 'make', true);
    $engine_size = get_post_meta(get_the_ID(), 'engine_size', true);
    $gearbox_type = get_post_meta(get_the_ID(), 'gearbox_type', true);
    $engine_consumption_type = get_post_meta(get_the_ID(), 'engine_consumption_type', true);
    $doors = get_post_meta(get_the_ID(), 'doors', true);
    $seats = get_post_meta(get_the_ID(), 'seats', true);
    $place = get_post_meta(get_the_ID(), 'place', true);
    $price = get_post_meta(get_the_ID(), 'price', true);
    $rrp_price = get_post_meta(get_the_ID(), 'rrp_price', true);
    $saving = get_post_meta(get_the_ID(), 'saving', true);
    $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
    $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());
?>

    <!-- top banner -->
    <div class="specific-car-banner d-none d-md-block white">
      <div class="row h-100 mx-0 text-center">
        <div class="col my-auto pt-5 pt-md-0">
          <h2 class="heading-size heading-font"><?php echo the_title(); ?></h2>
          <h5 class="sub-heading-size heading-font"><?php echo $sub_heading; ?></h5>
        </div>
      </div>
    </div>
    <!-- SPECIFIC CAR SECTION -->
    <section class="container specific-car-section">
      <div class="row">
        <div class="col-12 col-md-7  px-0 px-sm-3">
          <!-- img slider -->
          <div id="custom-car-images-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <!-- get thumbnail image first -->
              <div class="carousel-item active">
                <img class="carousel-img" loading="lazy" src="<?php echo the_post_thumbnail_url(); ?>">
              </div>

              <?php
              // loop throgh the featured images
              foreach ($featured_images as $featured_image) {
              ?>
                <div class="carousel-item">
                  <img class="carousel-img" loading="lazy" src="<?php echo $featured_image["full"];  ?>">
                </div>
              <?php
              }
              // end featured images loop
              ?>

            </div>
            <a class="carousel-control-prev" href="#custom-car-images-carousel" role="button" data-slide="prev">
              <span class="fa fa-angle-left car-slider-btn" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#custom-car-images-carousel" role="button" data-slide="next">
              <span class="fa fa-angle-right car-slider-btn" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- end img slider -->
        </div>

        <div class="col-12 col-md-5 pt-2 pt-md-0">
          <div class="heading-size heading-font"><?php echo the_title(); ?></div>
          <h5 class="sub-heading-size heading-font mb-3"><?php echo $sub_heading; ?></h5>
          <div style="color:lightseagreen;">RRP <del><?php echo $rrp_price; ?></del></div>
          <h2 class="heading-size heading-font" style="color:crimson; font-weight:bold "><?php echo $price; ?></h2>
          <div class="text-muted">Save <?php echo $saving; ?></div>
          <p>No admin fees!</p>
          <a class="email-us-directly" href="mailto:info@rochestergrp.co.uk">
            <div>Email us directly </div><span class="fa fa-arrow-right mx-1"></span>
          </a>
          <a class="btn btn-sm btn-dark" target="_blank" role="button" href="<?php echo get_permalink(get_page_by_path('contact-us')) ?>">Enquire now</a>

        </div>
      </div>
      <!-- overview  -->
      <div class="row">
        <div class="col-12">
          <div class="heading-size heading-font mt-3 mb-1">Overview</div>
          <div class="d-flex flex-wrap">
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M20.65 11l.35 1v8a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H6v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-8l.35-1H3a1 1 0 0 1 0-2h1.04l1.04-2.99A1.5 1.5 0 0 1 6.5 5h11c.66 0 1.22.42 1.42 1.01L19.96 9H21a1 1 0 0 1 0 2h-.35zM6.85 7l-1.08 3.11h12.45L17.14 7H6.85zM19 17v-5H5v5h14zM7.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm9 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
              </svg><?php echo $make; ?>
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M5 14H4v1a1 1 0 0 1-2 0v-4a1 1 0 0 1 2 0v1h1v-2h1l1.7-1.7a1 1 0 0 1 .71-.3H11V7h-1a1 1 0 1 1 0-2h4a1 1 0 0 1 0 2h-1v1h1.76a2 2 0 0 1 1.8 1.1L18 12h2v-1h1s1-.41 1 4c0 4-1 4-1 4h-1v-2h-2v1a1 1 0 0 1-1 1h-7a2 2 0 0 1-1.6-.8L6 15H5v-1zm2-1l3 4h6v-1a1 1 0 0 1 1-1h3v-1h-2.62a1 1 0 0 1-.9-.56l-1.71-3.43H8.84L7 11.82V13z"></path>
              </svg><?php echo $engine_size; ?>
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M6 11h5V6.73a2 2 0 112 0V11h4a1 1 0 001-1V6.73a2 2 0 112 0V10a3 3 0 01-3 3h-4v4.27a2 2 0 11-2 0V13H6v4.27a2 2 0 11-2 0V6.73a2 2 0 112 0V11z"></path>
              </svg><?php echo $gearbox_type; ?>
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M6 19h6V5H6v14zm8-8h3a1 1 0 0 1 1 1v6a.5.5 0 0 0 1 0V7.44l-1.82-1.82a1 1 0 1 1 1.42-1.41l2.1 2.1a1 1 0 0 1 .3.71V18a2.5 2.5 0 0 1-5 0v-5h-2v5.02c.57.1 1 .59 1 1.18v.6c0 .66-.54 1.2-1.2 1.2H4.2A1.2 1.2 0 0 1 3 19.8v-.6c0-.6.43-1.09 1-1.18V4.2C4 3.54 4.56 3 5.25 3h7.5c.69 0 1.25.54 1.25 1.2V11zM8 6h2a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1z"></path>
              </svg><?php echo $engine_consumption_type; ?>
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M4 11h16v2H4v-2zm2 3.5c0-.28.22-.5.5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm11-8.27l4 5.07v2.71s-2.55.46-3.6 1.79c-1.16 1.33-1.2 3-1.2 3-.16.7-.14 1.2-.77 1.2h-9.9c-.63 0-.8-.53-1.15-1.23 0 0-1.38-3.46-1.38-6.93V6.23C3 5.6 3.53 5.1 4.16 5h11.16c.63 0 1.15.4 1.68 1.23zM5 7v4.84c0 1.31.23 3.24.6 4.5A14.23 14.23 0 0 0 6.23 18h8.1c.04-.18.1-.37.17-.58.28-.77.28-1.62 1.34-2.86a6.16 6.16 0 0 1 2.3-1.71c.3-.14.59-.26.87-.36V12l-3.57-4.53-.11-.15a2.82 2.82 0 0 0-.23-.31H5z"></path>
              </svg><?php echo $doors; ?> Doors
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M16.9 8.34c-.98-.02-1.93-.88-2.26-2.13-.39-1.44.2-2.85 1.32-3.15 1.12-.3 2.34.62 2.72 2.07.36 1.35-.14 2.68-1.12 3.08V9c.6 0 1.14.75 1.14 1.18 0 .43 0 .43-.02.64a66.68 66.68 0 0 0-.52 6.57c0 1.4-.16 3.61-3 3.61H6.2c-.6-.2-1-.6-1.2-1.2a10.76 10.76 0 0 1 0-3c.2-.4 1.2-.6 2.99-.6 2.7 0 3.59 1.2 4.78 1.2.8 0 1.2-.2 1.2-.6v-4.82c0-1 .6-2.38 1.8-2.98.15-.06.46-.06.92 0l.2-.66z"></path>
              </svg><?php echo $seats; ?> Seats
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M12 4.2L6 6.87v4.08c0 3.96 2.56 7.71 6 8.94 3.44-1.23 6-4.98 6-8.94V6.88l-6-2.69zM12 2l8 3.58v5.38c0 4.93-3.26 9.57-7.7 10.95L12 22l-.3-.1C7.26 20.54 4 15.9 4 10.97V5.58L12 2zM8 8.17v2.79a7.8 7.8 0 004 6.76 7.8 7.8 0 004-6.76V8.17l-4-1.79-4 1.8z"></path>
              </svg><?php echo $reg_year; ?> Plate
            </div>
            <div class="vehicle-overview-item">
              <svg class="svg-size">
                <path d="M12 21c-5 0-9-4-9-9s4-9 9-9 9 4 9 9-4 9-9 9zm0-2c3.9 0 7-3.1 7-7s-3.1-7-7-7-7 3.1-7 7 3.2 7 7 7zm.8-4l1.4 1.7c.3.3.2.8-.1 1.1-.1.1-.2.1-.4.2-.6.1-1.1.2-1.7.2s-1.1-.1-1.7-.2c-.4-.1-.7-.5-.7-.9 0-.1.1-.3.2-.4l1.4-1.7c.3-.4 1-.5 1.4-.1.1 0 .1 0 .2.1zm-3.4-1.3l-1.2 1.9c-.2.3-.7.4-1.1.2l-.3-.3c-.2-.5-.5-1-.7-1.5-.2-.5-.3-1.1-.4-1.6-.1-.4.2-.8.7-.9h.4l2.1.8c.5.2.8.8.6 1.3 0-.1 0 0-.1.1zm.2-3.6l-2.1-.6c-.4-.1-.7-.6-.6-1 .1-.1.1-.3.2-.4.4-.3.8-.7 1.3-1.1.5-.3.9-.6 1.4-.9.4-.2.9-.1 1.1.3.1.2.1.4.1.5l-.1 2.2c0 .6-.5 1-1.1.9 0 .1-.1.1-.2.1zm3.5-1L13 6.9c0-.4.3-.8.8-.8.1 0 .3 0 .4.1.5.3 1 .5 1.4.9.5.3.9.7 1.3 1.1.3.3.3.8 0 1.1-.1.1-.2.2-.4.2l-2.1.6c-.5.1-1.1-.2-1.2-.7-.1-.1-.1-.2-.1-.3zm2 3.1l2.1-.8c.4-.2.9 0 1 .5.1.1.1.3 0 .4-.1.6-.2 1.1-.4 1.6s-.4 1-.7 1.5c-.2.4-.7.6-1.1.4l-.3-.3-1.2-1.9c-.3-.5-.2-1.1.3-1.4h.3zM12 13c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
              </svg><?php echo $mileage; ?>
            </div>
            <div class="vehicle-overview-item">&nbsp;<span class="fa fa-map-marker"></span>&nbsp;&nbsp; <?php echo $place; ?></div>
          </div>
        </div>
      </div>
      <!-- description -->
      <div class="row">
        <div class="col-12">
          <div class="heading-size heading-font mt-3 mb-2">Description</div>
          <?php echo the_content(); ?>
        </div>
      </div>
    </section>
<?php endwhile;
endif; ?>
<!-- more vehicles section  -->
<section class="bg-light py-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="more-vehicles-titles">
          <div class="heading-size heading-size heading-font">Latest added vehicles</div>
          <a href="<?php echo get_permalink(get_page_by_path('vehicles-stock')) ?>" class="text-decoration-none">View all <span class="fa fa-angle-right"></span></a>
        </div>
        <div class="more-vehicles-flex">
          <?php
          // get all the vehicles of bmw make
          query_posts(array(
            'post_type' => 'vehicle',
            'showposts' => 6,
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
              <section class="my-3 mr-3 shadow-sm">
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
            <?php endwhile; ?>
          <?php else : ?>
            <p>No vehicles added yet</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END SPECIFIC CAR SECTION -->

<!-- get footer -->
<?php get_footer(); ?>