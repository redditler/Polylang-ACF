<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eos_demo
 * Template Name: Home Page
 */

get_header();
?>

        <?php $banner = get_field('banner'); ?>
        <?php if($banner) : ?>
        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php foreach($banner as $item) : ?>
                <div class="item">
                    <img class="img-responsive" src="<?php echo $item['image']?>" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title"><?php echo $item['content']['title']?></h1>
                                <p><?php echo $item['content']['subtitle']?></p>
                            </div>
                            <a href="<?php echo $item['content']['button_link']?>" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><?php echo $item['content']['button_text']?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--========== SLIDER ==========-->
        <?php endif; ?>

        <?php $service = get_field('service');?>
        <?php if($service) :?>
        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <?php foreach($service as $item) :?>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-<?php echo $item['icon_name']; ?>"></i>
                                </div>
                                <div class="service-info">
                                    <h3><?php echo $item['content']['title']; ?></h3>
                                    <p class="margin-b-5"><?php echo $item['content']['descritption']; ?></p>
                                </div>
                                <a href="<?php echo $item['content']['link']; ?>" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->
        <?php endif; ?>

        <?php $products = get_field('products'); ?>
        <?php if($products) : ?>
        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2><?php echo $item['title']; ?></h2>
                    <p><?php echo $item['subtitle']; ?></p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <?php foreach($products['product'] as $item) : ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="<?php echo $item['image']; ?>">
                        </div>
                    </div>
                    <h4><?php echo $item['content']['title']; ?></h4>
                    <p><?php echo $item['content']['description']; ?></p>
                    <a class="link" href="<?php echo $item['content']['button_link']; ?>"><?php echo $item['content']['button_title']; ?></a>
                </div>
                <?php endforeach; ?>
                <!-- End Latest Products -->
            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->
        <?php endif; ?>

        <?php $clients = get_field('clients'); ?>
        <?php if($clients): ?>
        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <?php foreach($clients as $client): ?>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo $client['image']; ?>" alt="<?php echo $client['alt']; ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->
        <?php endif; ?>


<?php
get_footer();
