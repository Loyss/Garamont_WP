<?php
/*
Template Name: Histoire
*/
?>

<?php get_header(); ?>

    <div class="lycee">
        <div class="container-fluid visuel-lycée no-padding">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            <div class="mask"></div>
            <h1 class="text-center garamond wow fadeIn"><?php the_title(); ?></h1>
        </div>

        <div class="container-fluid temoignage-section">
            <div class="row">
                <div class="col-md-3 col-md-offset-0 col-sm-6 col-sm-offset-3 titre">
                    <h2 class="garamond">temoignages :</h2>
                </div>
                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
                    <div class="row">
                        <p>"<?php the_field('temoignage') ?>"</p>
                        <p><b><i>Auteur</i></b></p>
                        <button OnClick="window.location.href='<?php bloginfo('url'); ?>/lycee'" class="btn btn-histoire">Lycée</button>
                    </div>
                </div>
                <div class="col-md-3 points-verts no-padding">
                    <img src="<?php bloginfo('template_directory'); ?>/img/element_vert.png" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid  paragraphes-section garamond">
            <div class="container-fluid  paragraphes-section garamond">
                <?php
                $c = 0;
                $myquery = new WP_Query(array('post_type' => 'articles_histoire'));
                ?>
                <?php while ($myquery->have_posts()) : $myquery->the_post();
                    $c++;
                    if( $c % 2 == 0 ) {
                        ?>
                        <div class="row bg-gris">
                            <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                                <div class="row img-row">
                                    <?php

                                    $image = get_field('image');

                                    if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>
                                </div>
                                <div class="row img-row">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/elements_2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1 padding-left">
                                <?php the_field('paragraphe')?>
                            </div>
                        </div>
                    <?php }
                    else {
                        ?>
                        <div class="row p2">
                            <div class="col-md-5 col-md-offset-0 visible-xs visible-sm col-xs-10 col-xs-offset-1">
                                <div class="row img-row">
                                    <?php

                                    $image = get_field('image');

                                    if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>
                                </div>
                                <div class="row img-row">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/elements_3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 padding-right">
                                <?php the_field('paragraphe')?>
                            </div>
                            <div class="col-md-5 col-md-offset-0 hidden-xs hidden-sm col-xs-10 col-xs-offset-1">
                                <div class="row img-row">
                                    <?php

                                    $image = get_field('image');

                                    if( !empty($image) ): ?>

                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>
                                </div>
                                <div class="row img-row">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/elements_3.png" alt="">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>