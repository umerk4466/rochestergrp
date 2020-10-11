<!-- get header -->
<?php get_header(); ?>
<!-- VEHICLES STOCK PAGE BANNER -->
<div class="vehicles-stock-banner white">
    <div class="row h-100 mx-0 text-center">
        <div class="col my-auto pt-5 pt-md-0">
            <h2 class="heading-size heading-font">Vehicles In Stock</h2>
            <h5 class="sub-heading-size heading-font">We have all top rated vehicle brands</h5>
        </div>
    </div>
</div>


<!-- Tabs -->
<section id="tabs" style="min-height: 50%;">
    <div class="container">
        <div class="row py-5">
            <div class="col">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-mercedes-tab" data-toggle="tab" href="#nav-mercedes" role="tab" aria-controls="nav-mercedes" aria-selected="true">Mercedes</a>
                        <a class="nav-item nav-link" id="nav-toyota-tab" data-toggle="tab" href="#nav-toyota" role="tab" aria-controls="nav-toyota" aria-selected="false">Toyota</a>
                        <a class="nav-item nav-link" id="nav-bmw-tab" data-toggle="tab" href="#nav-bmw" role="tab" aria-controls="nav-bmw" aria-selected="false">BMW</a>
                        <a class="nav-item nav-link" id="nav-jeep-tab" data-toggle="tab" href="#nav-jeep" role="tab" aria-controls="nav-jeep" aria-selected="false">Jeep</a>
                    </div>
                </nav>
                <div class="tab-content py-3" id="nav-tabContent">
                    <!-- Mercedes -->
                    <div class="tab-pane fade show active" id="nav-mercedes" role="tabpanel" aria-labelledby="nav-mercedes-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col p-0">
                                    <div class="vehicles-container">
                                        <?php
                                        // get all the vehicles of mercedes make
                                        query_posts(array(
                                            'post_type' => 'vehicle',
                                            'meta_key'  => 'make',
                                            'meta_value' => 'mercedes',
                                        ));
                                        if (have_posts()) : while (have_posts()) : the_post();
                                                $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
                                                $gearbox_type = get_post_meta(get_the_ID(), 'gearbox_type', true);
                                                $mileage = get_post_meta(get_the_ID(), 'mileage', true);
                                                $reg_year = get_post_meta(get_the_ID(), 'reg_year', true); ?>
                                                <!-- vehicle -->
                                                <a href="<?php the_permalink() ?>" class="car-box col-md-6">
                                                    <div class="car-thumbnail">
                                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>">
                                                    </div>
                                                    <div class="car-descriptions">
                                                        <P class="font-weight-bold mb-1"><?php echo the_title() . " " . $sub_heading ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-cog mr-2"></span>Type : <?php echo $gearbox_type; ?></P>
                                                        <P class=" text-muted mb-0"><span class="fa fa-tachometer mr-2"></span>Mileage : <?php echo $mileage; ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-calendar mr-2"></span>Year : <?php echo $reg_year; ?></P>
                                                    </div>
                                                </a>
                                                <!-- vehicle end -->
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <div class="w-100">
                                                <p class="text-center mt-5">Currently Mercedes vehicles are out of the stock</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Toyota -->
                    <div class="tab-pane fade" id="nav-toyota" role="tabpanel" aria-labelledby="nav-toyota-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col p-0">
                                    <div class="vehicles-container">
                                        <?php
                                        // get all the vehicles of Toyota make
                                        query_posts(array(
                                            'post_type' => 'vehicle',
                                            'meta_key'  => 'make',
                                            'meta_value' => 'toyota',
                                        ));
                                        if (have_posts()) : while (have_posts()) : the_post();
                                                $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
                                                $gearbox_type = get_post_meta(get_the_ID(), 'gearbox_type', true);
                                                $mileage = get_post_meta(get_the_ID(), 'mileage', true);
                                                $reg_year = get_post_meta(get_the_ID(), 'reg_year', true); ?>
                                                <!-- vehicle -->
                                                <a href="<?php the_permalink() ?>" class="car-box col-md-6">
                                                    <div class="car-thumbnail">
                                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>">
                                                    </div>
                                                    <div class="car-descriptions">
                                                        <P class="font-weight-bold mb-1"><?php echo the_title() . " " . $sub_heading ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-cog mr-2"></span>Type : <?php echo $gearbox_type; ?></P>
                                                        <P class=" text-muted mb-0"><span class="fa fa-tachometer mr-2"></span>Mileage : <?php echo $mileage; ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-calendar mr-2"></span>Year : <?php echo $reg_year; ?></P>
                                                    </div>
                                                </a>
                                                <!-- vehicle end -->
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <div class="w-100">
                                                <p class="text-center mt-5">Currently Toyota vehicles are out of the stock</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BMW -->
                    <div class="tab-pane fade" id="nav-bmw" role="tabpanel" aria-labelledby="nav-bmw-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col p-0">
                                    <div class="vehicles-container">
                                        <?php
                                        // get all the vehicles of bmw make
                                        query_posts(array(
                                            'post_type' => 'vehicle',
                                            'meta_key'  => 'make',
                                            'meta_value' => 'bmw',
                                        ));
                                        if (have_posts()) : while (have_posts()) : the_post();
                                                $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
                                                $gearbox_type = get_post_meta(get_the_ID(), 'gearbox_type', true);
                                                $mileage = get_post_meta(get_the_ID(), 'mileage', true);
                                                $reg_year = get_post_meta(get_the_ID(), 'reg_year', true); ?>
                                                <!-- vehicle -->
                                                <a href="<?php the_permalink() ?>" class="car-box col-md-6">
                                                    <div class="car-thumbnail">
                                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>">
                                                    </div>
                                                    <div class="car-descriptions">
                                                        <P class="font-weight-bold mb-1"><?php echo the_title() . " " . $sub_heading ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-cog mr-2"></span>Type : <?php echo $gearbox_type; ?></P>
                                                        <P class=" text-muted mb-0"><span class="fa fa-tachometer mr-2"></span>Mileage : <?php echo $mileage; ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-calendar mr-2"></span>Year : <?php echo $reg_year; ?></P>
                                                    </div>
                                                </a>
                                                <!-- vehicle end -->
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <div class="w-100">
                                                <p class="text-center mt-5">Currently BWM vehicles are out of the stock</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jeep -->
                    <div class="tab-pane fade" id="nav-jeep" role="tabpanel" aria-labelledby="nav-jeep-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col p-0">
                                    <div class="vehicles-container">
                                        <?php
                                        // get all the vehicles of jeep make
                                        query_posts(array(
                                            'post_type' => 'vehicle',
                                            'meta_key'  => 'make',
                                            'meta_value' => 'jeep',
                                        ));
                                        if (have_posts()) : while (have_posts()) : the_post();
                                                $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
                                                $gearbox_type = get_post_meta(get_the_ID(), 'gearbox_type', true);
                                                $mileage = get_post_meta(get_the_ID(), 'mileage', true);
                                                $reg_year = get_post_meta(get_the_ID(), 'reg_year', true); ?>
                                                <!-- vehicle -->
                                                <a href="<?php the_permalink() ?>" class="car-box col-md-6">
                                                    <div class="car-thumbnail">
                                                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>">
                                                    </div>
                                                    <div class="car-descriptions">
                                                        <P class="font-weight-bold mb-1"><?php echo the_title() . " " . $sub_heading ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-cog mr-2"></span>Type : <?php echo $gearbox_type; ?></P>
                                                        <P class=" text-muted mb-0"><span class="fa fa-tachometer mr-2"></span>Mileage : <?php echo $mileage; ?></P>
                                                        <P class="text-muted mb-0"><span class="fa fa-calendar mr-2"></span>Year : <?php echo $reg_year; ?></P>
                                                    </div>
                                                </a>
                                                <!-- vehicle end -->
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <div class="w-100">
                                                <p class="text-center mt-5">Currently Jeep vehicles are out of the stock</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Tabs -->

<!-- get footer -->
<?php get_footer(); ?>