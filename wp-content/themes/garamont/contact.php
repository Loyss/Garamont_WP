<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="parallax-window contact" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/garamont_background.jpg">
        <div class="container-fluid visuel-contact no-padding">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            <div class="mask"></div>
            <h1 class="text-center garamond"><?php the_title(); ?></h1>
        </div>
        <div class="container contact-texte">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-xs-10 col-xs-offset-1">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="container-fluid map-contact">
            <div class="row">
                <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20976.457503572667!2d2.2285637385309958!3d48.91430267929302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665b73af7d3d9%3A0xddf064acad6b6826!2sLycee+Polyvalent+Claude+Garamont!5e0!3m2!1sfr!2sfr!4v1461888117919"
                                width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php echo do_shortcode('[contact-form-7 id="178" title="Contact"]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer(); ?>