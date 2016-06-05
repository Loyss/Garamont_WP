<?php
/*
Template Name: Projets
*/
?>

<?php get_header(); ?>
<div class="container-fluid visuel-projets no-padding">
    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
    <div class="mask"></div>
    <h1 class="text-center garamond wow fadeIn"><?php the_title(); ?></h1>
</div>

    <div class="container-fluid projets-tabs">
        <nav class="nav navbar">
            <ul class="simplefilter">

                <li class="btn-lines" data-filter="all">Tout voir
                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </li>
                <li class="btn-lines" data-filter="1"><?php the_field('categorie_1') ?>
                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span></li>
                <li class="btn-lines" data-filter="2"><?php the_field('categorie_2') ?>
                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span></li>
                <li class="btn-lines" data-filter="3"><?php the_field('categorie_3') ?>
                    <!-- CSS Border Effect -->
                    <!--
                    <span class="line-top"></span>
                      <span class="line-bottom"></span>
                      <span class="line-left"></span>
                      <span class="line-right"></span></li>
                    <li class="btn-lines" data-filter=".branding">NSM
                      -->

                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span></li>
            </ul>
        </nav>

    </div>

    <div class="container-fluid no-padding projets-visuels filtr-container">
        <div class="row no-margin projets-visuels">
            <?php $myquery = new WP_Query(array('post_type' => 'projets')); ?>
            <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
            <div class="col-md-4 col-sm-12 no-padding projets-items filtr-item" data-category="<?php the_field('tag_projet') ?>">
                <a href="#<?php the_field('numero_projet') ?>" class="portfolio-link" data-toggle="modal">
                    <div class="images-projets">
                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                    </div>
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <!--<div class="col-md-4 no-padding projets-items filtr-item" data-category="1">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="2">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="3">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="1">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="2">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="3">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="1">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>-->
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <?php $myquery = new WP_Query(array('post_type' => 'projets')); ?>
    <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
    <div class="projets-modal modal fade" id="<?php the_field('numero_projet'); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="modal-window">
                <div class="row">
                    <div class="col-md-6 no-padding">
                        <div class="modal-body">
                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <h2><?php the_title(); ?></h2>
                        <h3><?php the_field('date_projet'); ?></h3>
                        <h3>TAG : <?php the_field('nom_categorie'); ?></h3>
                        <br>
                        <p><strong>Description : </strong><br><?php the_content(); ?></p>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center close-project">
                    <button type="button" data-dismiss="modal"><i class="fa fa-times"></i> Fermer le projet</button>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php get_footer(); ?>

<script>
    $(function() {
        //Simple filter controls
        $('.simplefilter li').click(function() {
            $('.simplefilter li').removeClass('active');
            $(this).addClass('active');
        });
        //Multifilter controls
        $('.multifilter li').click(function() {
            $(this).toggleClass('active');
        });
        //Shuffle control
        $('.shuffle-btn').click(function() {
            $('.sort-btn').removeClass('active');
        });
        //Sort controls
        $('.sort-btn').click(function() {
            $('.sort-btn').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery.filterizr.js"></script>
<script type="text/javascript">
    $(function() {
        //Initialize filterizr with default options
        $('.filtr-container').filterizr();
    });
</script>
