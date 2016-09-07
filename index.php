<?php
/**
 * FilmMaker Theme Header
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php get_header(); ?>

<!-- Page Content -->

<div id="home" class="content-section-a">

    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <img class="logo_body img-responsive" src="<?php echo TmxLibraryIncluder::getAdminImage('home-img'); ?>" alt="">
            </div>
            <div class="col-sm-6">
                <?php if(TmxLibraryIncluder::getAdmin()->getOption('home-spacer')): ?><hr class="section-heading-spacer"><?php endif; ?>
                <div class="clearfix"></div>
                <h2 class="section-heading"> </h2>
                <div class="lead"><?php echo TmxLibraryIncluder::getAdmin()->getOption('home-info'); ?></div>
            </div>

        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /#home -->

<div id="about" class="content-section-b">

    <div class="container">
        <div class="row">
            <div class="col-sm-7 about-text">
                <?php if(TmxLibraryIncluder::getAdmin()->getOption('about-spacer')): ?><hr class="section-heading-spacer"><?php endif; ?>
                <div class="clearfix"></div>
                <h2 class="section-heading"><?php echo TmxLibraryIncluder::getAdmin()->getOption('about-title'); ?></h2>
                <div class="lead"><?php echo TmxLibraryIncluder::getAdmin()->getOption('about-info'); ?></div>
            </div>
            <div class="col-sm-5 about-img">
                <img class="img-responsive" src="<?php echo TmxLibraryIncluder::getAdminImage('about-img'); ?>" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /#about -->

<div id="locations" class="container">
    <div class="row">
        <div class="col-xs-12 text-center section_title">
					<hr class="section-heading-spacer spacer-center">
					<h2 class="mtp_contact"><?php echo TmxLibraryIncluder::getAdmin()->getOption('location-title'); ?></h2>
            <p class="lead mtp_contact_dexcription"><?php echo TmxLibraryIncluder::getAdmin()->getOption('location-info'); ?></p>
        </div>
    </div>
    <div class="row">
        <?php for($i=1;$i<=3;$i++): ?>
        <div class="col-sm-4">
            <!-- <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('location-url'.$i); ?>"> -->
                <div class="map_box">
                    <img class="img-responsive" src="<?php echo wp_get_attachment_image_src(TmxLibraryIncluder::getAdmin()->getOption('location-img'.$i), 'full')[0]; ?>" alt=""/>
                </div>
                <div class="location_name text-center"><?php echo TmxLibraryIncluder::getAdmin()->getOption('location-name'.$i); ?></div>
            <!-- </a> -->
        </div>
        <?php endfor; ?>
    </div>
</div>
<!-- /#locations -->

<?php get_footer();