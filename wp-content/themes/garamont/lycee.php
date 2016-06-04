<?php
/*
Template Name: Lycée
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
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet cumque exercitationem natus suscipit? Ab ad alias dicta eos neque nisi officiis perspiciatis placeat quas? Impedit inventore quasi sint ut."</p>
                        <p><b><i>Auteur</i></b></p>
                        <button href="" class="btn btn-histoire">Histoire</button>
                    </div>
                </div>
                <div class="col-md-3 points-verts no-padding">
                    <img src="<?php bloginfo('template_directory'); ?>/img/element_vert.png" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid  paragraphes-section garamond">
            <div class="row bg-gris">
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="row img-row">
                        <img src="img/img_lycee.JPG" alt="">
                    </div>
                    <div class="row img-row">
                        <img src="<?php bloginfo('template_directory'); ?>/img/elements_2.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1 padding-left">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem et eveniet ex exercitationem explicabo hic, illo iusto libero nesciunt, obcaecati officiis, optio perferendis quaerat quia quibusdam saepe sit tempora.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, commodi iusto labore nemo nesciunt quasi reiciendis similique voluptates. Earum error id impedit laborum odit quia saepe. Illum, ipsam, nulla?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iusto omnis porro quis vel? Culpa ea exercitationem facilis nobis pariatur placeat provident? Assumenda atque commodi debitis incidunt voluptas. Placeat, velit!</p>
                </div>
            </div>
            <div class="row p2">
                <div class="col-md-5 col-md-offset-0 visible-xs visible-sm col-xs-10 col-xs-offset-1">
                    <div class="row img-row">
                        <img src="img/img_lycee.JPG" alt="">
                    </div>
                    <div class="row img-row">
                        <img src="<?php bloginfo('template_directory'); ?>/img/elements_3.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1 padding-right">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem et eveniet ex exercitationem explicabo hic, illo iusto libero nesciunt, obcaecati officiis, optio perferendis quaerat quia quibusdam saepe sit tempora.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, commodi iusto labore nemo nesciunt quasi reiciendis similique voluptates. Earum error id impedit laborum odit quia saepe. Illum, ipsam, nulla?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iusto omnis porro quis vel? Culpa ea exercitationem facilis nobis pariatur placeat provident? Assumenda atque commodi debitis incidunt voluptas. Placeat, velit!</p>
                </div>
                <div class="col-md-5 col-md-offset-0 hidden-xs hidden-sm col-xs-10 col-xs-offset-1">
                    <div class="row img-row">
                        <img src="img/img_lycee.JPG" alt="">
                    </div>
                    <div class="row img-row">
                        <img src="<?php bloginfo('template_directory'); ?>/img/elements_3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row bg-gris">
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="row img-row">
                        <img src="img/img_lycee.JPG" alt="">
                    </div>
                    <div class="row img-row">
                        <img src="img/elements_2.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1 padding-left">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem et eveniet ex exercitationem explicabo hic, illo iusto libero nesciunt, obcaecati officiis, optio perferendis quaerat quia quibusdam saepe sit tempora.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid, commodi iusto labore nemo nesciunt quasi reiciendis similique voluptates. Earum error id impedit laborum odit quia saepe. Illum, ipsam, nulla?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iusto omnis porro quis vel? Culpa ea exercitationem facilis nobis pariatur placeat provident? Assumenda atque commodi debitis incidunt voluptas. Placeat, velit!</p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>