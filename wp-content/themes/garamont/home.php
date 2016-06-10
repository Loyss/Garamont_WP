<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/back.jpg" data-speed="0.6">
        <div class="home">
            <div class="container-fluid">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                            $c = 0;
                            $myquery = new WP_Query(array('post_type' => 'slider_home'));
                        ?>
                        <?php while ($myquery->have_posts()) : $myquery->the_post();
                            $c++;
                            if( $c == 1 ) $class .= 'active';
                            else $class = '';
                        ?>
                            <div class="item <?php echo $class ?>">
                                <?php

                                $image = get_field('img_slide');

                                if( !empty($image) ): ?>

                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                <?php endif; ?>
                                <div class="mask"></div>
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/logo_garamont.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <img src="<?php bloginfo('template_directory'); ?>/img/FlecheGauche.png" alt="">
                    </a>
                    <a class="carousel-control arrow" href="#formations">
                        <img src="<?php bloginfo('template_directory'); ?>/img/flecheHome.png" alt="">
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <img src="<?php bloginfo('template_directory'); ?>/img/FlecheDroite.png" alt="">
                    </a>
                </div>
            </div>
        </div>


        <!---------------------Formation---------------------->



        <div class="container-fluid block-formations no-padding wow fadeIn"  id="formations">
            <div class="home-titre text-center">
                <h1 class=" garamond">Formations</h1>
                <hr class="trans--grow">
            </div>

            <div id="team" class="block visible-xs">
                <div class="team">

                    <div id="carousel-example-generic-2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(array('post_type' => 'formations_home'));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'active';
                                else $class = '';
                                ?>
                                <div class="item <?php echo $class ?>">
                                    <div class="team-item col-xs-12">
                                        <div class="tream-entry">
                                            <a href="formations.php" class="team-img">
                                                <?php

                                                $image = get_field('img_formation');

                                                if( !empty($image) ): ?>

                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                                <?php endif; ?>
                                            </a>
                                            <div class="team-hover table-view">
                                                <div class="cell-view">
                                                    <div class="team-name">
                                                        <div class="h5">
                                                            <?php the_field('diplome'); ?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="team-social">
                                                        <?php the_title() ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
                            <img src="<?php bloginfo('template_directory'); ?>/img/FlecheGauche.png" alt="">
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
                            <img src="<?php bloginfo('template_directory'); ?>/img/FlecheDroite.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div id="team" class="block hidden-xs">
                <div class="container-fluid">
                    <div class="team">
                        <div class="teamrow row">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(
                                array(
                                    'post_type' => 'formations_home',
                                    'posts_per_page' => 4,
                                    'order'    => 'ASC'
                                ));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'col-sm-offset-2';
                                else $class = '';
                            ?>
                                <div class="team-item col-xs-12 col-sm-2 <?php echo $class ?>">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <?php

                                            $image = get_field('img_formation');

                                            if( !empty($image) ): ?>

                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                            <?php endif; ?>
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="h5">
                                                        <?php the_field('diplome'); ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="team-social">
                                                    <?php the_title() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="teamrow row">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(
                                array(
                                    'post_type' => 'formations_home',
                                    'posts_per_page' => 3,
                                    'offset' => 4,
                                    'order'    => 'ASC'
                                ));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'col-sm-offset-3';
                                else $class = '';
                                ?>
                                <div class="team-item col-xs-12 col-sm-2 <?php echo $class ?>">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <?php

                                            $image = get_field('img_formation');

                                            if( !empty($image) ): ?>

                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                            <?php endif; ?>
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="h5">
                                                        <?php the_field('diplome'); ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="team-social">
                                                    <?php the_title() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!---------------------Actualités---------------------->


        <div class="container-fluid no-padding actus wow fadeIn">
            <div class="home-titre">
                <h1 class="text-center garamond">Actualités</h1>
                <hr class="trans--grow">
            </div>
            <div class="wrapper">
                <div class="owl-carousel">
                <?php $myquery = new WP_Query(array('post_type' => 'actualites')); ?>
                <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                    <div class="item">
                        <a class="lien" href="#">
                            <div class="img">
                                <?php

                                $image = get_field('image_actualite');

                                if( !empty($image) ): ?>

                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                <?php endif; ?>
                            </div>
                            <div class="text-center">
                                <h3><?php the_field('titre_actualite') ?></h3>
                            </div>
                            <?php the_field('contenu_de_lactualite') ?>
                        </a>
                    </div>
                <?php endwhile; ?>

                </div>
            </div>
        </div>

        <!---------------------Galerie---------------------->

        <div class="container-fluid no-padding block-galerie wow fadeIn">
            <div class="home-titre text-center">
                <h1 class="garamond">Galerie</h1>
                <hr class="trans--grow">
            </div>
            <div id="team" class="block visible-xs">
                <div class="team">
                    <div id="carousel-example-generic-3" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(array('post_type' => 'projets'));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'active';
                                else $class = '';
                                ?>
                                <div class="item <?php echo $class ?>">
                                    <div class="team-item col-xs-12">
                                        <div class="tream-entry">
                                            <a href="formations.php" class="team-img">
                                                <?php the_post_thumbnail('full'); ?>

                                            </a>
                                            <div class="team-hover table-view">
                                                <div class="cell-view">
                                                    <div class="team-name">
                                                        <?php the_title() ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic-3" role="button" data-slide="prev">
                            <img src="<?php bloginfo('template_directory'); ?>/img/FlecheGauche.png" alt="">
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic-3" role="button" data-slide="next">
                            <img src="<?php bloginfo('template_directory'); ?>/img/FlecheDroite.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div id="team" class="block hidden-xs">
                <div class="container-fluid">
                    <div class="team">
                        <div class="teamrow row">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(
                                array(
                                    'post_type' => 'projets',
                                    'posts_per_page' => 4,
                                    'order'    => 'ASC'
                                ));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'col-sm-offset-2';
                                else $class = '';
                                ?>
                                <div class="team-item col-xs-12 col-sm-2 <?php echo $class ?>">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="team-name"><?php the_title() ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="teamrow row">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(
                                array(
                                    'post_type' => 'projets',
                                    'posts_per_page' => 3,
                                    'offset' => 4,
                                    'order'    => 'ASC'
                                ));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'col-sm-offset-3';
                                else $class = '';
                                ?>
                                <div class="team-item col-xs-12 col-sm-2 <?php echo $class ?>">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="team-name"><?php the_title() ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="teamrow row hide-line">
                            <?php
                            $c = 0;
                            $myquery = new WP_Query(
                                array(
                                    'post_type' => 'projets',
                                    'posts_per_page' => 4,
                                    'order'    => 'ASC'
                                ));
                            ?>
                            <?php while ($myquery->have_posts()) : $myquery->the_post();
                                $c++;
                                if( $c == 1 ) $class .= 'col-sm-offset-2';
                                else $class = '';
                                ?>
                                <div class="team-item col-xs-12 col-sm-2 <?php echo $class ?>">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <?php the_title() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/owl.carousel.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                lazyLoad: true,
                merge: true,
                video: true,
                nav: true,
                autoHeight:false,
                navText:[
                    '<span class="arr-l"><img src="<?php bloginfo('template_directory'); ?>/img/FlecheGauche.png"></span>',
                    '<span class="arr-r"><img src="<?php bloginfo('template_directory'); ?>/img/FlecheGauche.png" ></span>'
                ],
                responsive:{ // 삭제시 반응형 작동 안함.
                    480:{
                        items:1
                    },

                    600:{
                        items:2
                    },

                    960:{
                        items:3
                    }
                }
            });
            $(window).load(function(){
                window.dispatchEvent(new Event('resize'));
            })
        });
    </script>

<?php get_footer(); ?>