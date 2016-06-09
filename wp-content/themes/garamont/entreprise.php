<?php
/*
Template Name: Entreprise
*/
?>

<?php get_header(); ?>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/garamont_background.jpg">
        <div class="container-fluid visuel-entreprise no-padding">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            <div class="mask"></div>
            <h1 class="text-center garamond wow fadeIn"><?php the_title(); ?></h1>
        </div>
        <div class="container-fluid entreprise">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 contenu-entreprise-1">
                        <div class="taxe">
                            <h2><?php the_field('titre-1'); ?></h2>
                            <h3><?php the_field('sous-titre-1'); ?></h3>
                            <p><?php the_field('contenu-1'); ?></p>
                            <div class="col-md-offset-1 information-1">
                                <p>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i><strong> Horaire : </strong><?php the_field('horaire-1') ?>
                                </p>
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i><strong> Lieu : </strong><?php the_field('lieu-1') ?>
                                </p>
                                <p>
                                    <i class="fa fa-info-circle" aria-hidden="true"></i><strong> Information : </strong><?php the_field('information-1') ?> ou
                                    <a href="www.dfc.ccip.fr">www.dfc.ccip.fr</a>
                                </p>
                            </div>
                            <div class="renseigner-choisir">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="<?php the_field('se_renseigner') ?>">Se renseigner</a> et <a href="<?php the_field('choisir') ?>">choisir</a>
                            </div>
                        </div>
                        <div class="bourses">
                            <h2><?php the_field('titre-2'); ?></h2>
                            <h3><?php the_field('sous-titre-2'); ?></h3>
                            <p><?php the_field('contenu-2'); ?></p>
                            <div class="col-md-offset-1 information-2">
                                <p>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i><strong> Horaire : </strong><?php the_field('horaire-2') ?>
                                </p>
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i><strong> Lieu : </strong><?php the_field('lieu-2') ?>
                                </p>
                                <p>
                                    <i class="fa fa-info-circle" aria-hidden="true"></i><strong> Information : </strong><?php the_field('information-2') ?> ou
                                    <a href="#">www.dfc.ccip.fr</a>
                                </p>
                            </div>
                            <div class="button-bourses text-right">
                                <a href="<?php the_field('en_savoir_+'); ?>" class="boutton-savoir">En savoir +</a>
                            </div>
                        </div>
                        <div class="marches">
                            <h2><?php the_field('titre-3') ?></h2>
                            <h3><?php the_field('sous-titre-3') ?></h3>
                            <?php the_field('contenu-3') ?>
                            <div class="button-bourses text-right">
                                <a href="" class="boutton-savoir">En savoir +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 contenu-entreprise-2" >
                        <div class="offres" id="sticker">
                            <h2>Offres d'emplois</h2>
                            <div class="offres-arts-graphiques">
                                <h4>Dans les arts graphiques</h4>
                                <div class="list-group text-center contenu-offres-arts">
                                    <a href="<?php the_field('offres_demploi_et_de_stage'); ?>" class="list-group-item">Offres d'emploi et de stage</a>
                                    <a href="<?php the_field('offres_demploi_graphistes_et_infographistes'); ?>" class="list-group-item">Offres d'emploi graphistes et infographistes</a>
                                    <a href="<?php the_field('studio_crea_web_design_illustration_graphisme'); ?>" class="list-group-item">Studio créa, web design, illustration, graphisme...</a>
                                    <a href="<?php the_field('site_emploi_des_arts_graphiques'); ?>" class="list-group-item">Site emploi des arts graphiques</a>
                                </div>
                            </div>
                            <div class="offres-pif">
                                <h4>En prépresse - Impression - Finition</h4>
                                <div class="text-center contenu-pif">
                                    <a href="<?php the_field('offres_impression'); ?>" class="list-group-item">Offres impression</a>
                                    <a href="<?php the_field('offres_finition'); ?>" class="list-group-item">Offres finition</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>