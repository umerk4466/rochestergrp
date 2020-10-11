<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="rochestergrp vehicles exporters" />
  <meta name="author" content="rochestergrp ltd" />
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/site-icon.png" />
  <title> <?php echo get_bloginfo('name'); ?> | <?php echo get_the_title();  ?> </title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="loader"></div>

  <header>
    <nav id="navbar" class="navbar nav-masthead navbar-expand-md fixed-top">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <?php
        // change logo dynamically from the admin panel
        $logo = get_bloginfo('template_url') . '/assets/images/logo.png';
        $custom_logo = get_theme_mod('custom_logo');
        $custom_logo_src = wp_get_attachment_image_src($custom_log, 'full');
        if (has_custom_logo()) {
          $logo = esc_url($custom_logo_src[0]);
        }
        ?>
        <img src="<?php echo $logo ?>" width="170" alt="Rochester Group" />
      </a>
      <button id="menu-btn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span id="menu-icon" class="menu-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link" href="<?php echo get_home_url(); ?>">Home</a>
          <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('about-us')) ?>">About Us</a>
          <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('vehicles-stock')) ?>">Vehicles Stock</a>
          <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('contact-us')) ?>">Contact Us</a>
        </div>
      </div>
    </nav>
  </header>