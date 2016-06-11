<?php
/*
Template Name: Formations
*/
?>

<?php get_header(); ?>

    <div class="formations garamond">
        <div class="container-fluid visuel-formations no-padding">
            <img src="<?php bloginfo('template_directory'); ?>/img/img_formations.jpg" alt="">
            <div class="mask"></div>
            <h1 class="text-center garamond">Formations</h1>
        </div>

        <div class="visible-xs container formations-xs" id="accordion" role="tablist" aria-multiselectable="true">
            <a class="collapsed" href="#collapse1" role="button" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false" aria-controls="collapse1">
                <h4>
                    <span class="vert">
                        bac pro
                    </span>
                    <br>
                    Industrie graphique
                </h4>
            </a>
            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                <?php the_field('industries_graphiques') ?>
                <div class="panel-group formation-xs" id="accordion" role="tablist" aria-multiselectable="true">
                    <a class="collapsed" href="#collapse1_1" role="button" data-toggle="collapse" data-parent="#collapse1"  aria-expanded="false" aria-controls="collapse1_1">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Façonnage industriel et routage
                        </h5>
                    </a>
                    <div id="collapse1_1" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                        <div class="margin-left-60">
                            <?php the_field('façonnage_industriel_et_routage') ?>
                        </div>
                    </div>

                    <a class="collapsed" href="#collapse1_2" role="button" data-toggle="collapse" data-parent="#collapse1"  aria-expanded="false" aria-controls="collapse1_2">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Production imprimée
                        </h5>
                    </a>
                    <div id="collapse1_2" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                        <div class="margin-left-60">
                            <?php the_field('production_imprimee') ?>
                        </div>
                    </div>

                    <a class="collapsed" href="#collapse1_3" role="button" data-toggle="collapse" data-parent="#collapse1"  aria-expanded="false" aria-controls="collapse1_3">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Production graphique
                        </h5>
                    </a>
                    <div id="collapse1_3" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                        <div class="margin-left-60">
                            <?php the_field('production_graphique') ?>
                        </div>
                    </div>
                </div>
            </div>

            <a class="collapsed" href="#collapse2" role="button" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false" aria-controls="collapse2">
                <h4>
                    <span class="vert">
                        b.t.s
                    </span>
                    <br>
                    Communication et industrie graphique
                </h4>
            </a>
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <?php the_field('communication_et_industrie_graphique') ?>
                <div class="panel-group formation-xs" id="accordion" role="tablist" aria-multiselectable="true">
                    <a class="collapsed" href="#collapse2_1" role="button" data-toggle="collapse" data-parent="#collapse2"  aria-expanded="false" aria-controls="collapse2_1">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Études et réalisation de produits imprimés
                        </h5>
                    </a>
                    <div id="collapse2_1" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                        <div class="margin-left-60">
                            <?php the_field('études_et_realisation_de_produits_imprimes') ?>
                        </div>
                    </div>

                    <a class="collapsed" href="#collapse2_2" role="button" data-toggle="collapse" data-parent="#collapse1"  aria-expanded="false" aria-controls="collapse2_2">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Études et réalisation de produits graphiques
                        </h5>
                    </a>
                    <div id="collapse2_2" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                        <div class="margin-left-60">
                            <?php the_field('études_et_realisation_de_produits_graphiques') ?>
                        </div>
                    </div>

                </div>
            </div>

            <a class="collapsed" href="#collapse3" role="button" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false" aria-controls="collapse3">
                <h4>
                    <span class="vert">
                        bac pro
                    </span>
                    <br>
                    Artisanat des métiers d'art
                </h4>
            </a>
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <?php the_field('artisanat_des_métiers_darts') ?>
                <div class="panel-group formation-xs" id="accordion" role="tablist" aria-multiselectable="true">
                    <a class="collapsed" href="#collapse3_1" role="button" data-toggle="collapse" data-parent="#collapse2"  aria-expanded="false" aria-controls="collapse3_1">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Communication visuelle
                        </h5>
                    </a>
                    <div id="collapse3_1" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                        <div class="margin-left-60">
                            <?php the_field('communication_visuelle') ?>
                        </div>
                    </div>
                </div>
            </div>

            <a class="collapsed" href="#collapse4" role="button" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false" aria-controls="collapse4">
                <h4>
                  <span class="vert">
                   bac pro
              </span>
                    <br>
                    Design graphique
                </h4>
            </a>
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <?php the_field('design_graphique') ?>
                <div class="panel-group formation-xs" id="accordion" role="tablist" aria-multiselectable="true">
                    <a class="collapsed" href="#collapse4_1" role="button" data-toggle="collapse" data-parent="#collapse2"  aria-expanded="false" aria-controls="collapse4_1">
                        <h5>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Communication et médias imprimés
                        </h5>
                    </a>
                    <div id="collapse4_1" class="collapse" role="tabpanel" aria-labelledby="heading1.1">
                       <div class="margin-left-60">
                           <?php the_field('communication_et_medias_imprimes') ?>
                       </div>
                    </div>
                </div>
            </div>
            <a class="greta-xs col-xs-6 col-xs-offset-3" href="https://0922427n.index-education.net/pronote/" target="_blank">greta</a>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-top hidden-xs" role="tablist">

            <li role="presentation" class="active col-md-2 col-sm-12 col-xs-12 text-center">
                <a href="#toutes" aria-controls="toutes" role="tab" data-toggle="tab" id="li-toutes">
                    <span class="toutes">Toutes les formations</span>
                </a>
            </li>

            <li role="presentation" class="col-md-2 col-md-offset-0 col-sm-5 col-sm-offset-1 col-xs-12 text-center">
                <a href="#ind_graph" aria-controls="ind_graph" role="tab" data-toggle="tab" id="li-ind_graph">
                   <span class="vert">
                       bac pro
                   </span>
                    <br>
                    Industries graphiques
                </a>
            </li>

            <li role="presentation" class="col-md-2 col-sm-5 col-xs-12 text-center margin-top-xs-10">
                <a href="#com_grap" aria-controls="com_grap" role="tab" data-toggle="tab" id="li-com_graph">
                  <span class="vert">
                       b.t.s
                  </span>
                    <br>
                    Communication et industrie graphique
                </a>
            </li>
            
            <li role="presentation" class="col-md-2 col-md-offset-0 col-sm-5 col-sm-offset-1 col-xs-12 text-center margin-top-xs-10">
                <a href="#artisanat" aria-controls="artisanat" role="tab" data-toggle="tab" id="li-artisanat">
                <span class="vert">
                    bac pro
                </span>
                    <br>
                    Artisanat des métiers d'art
                </a>
            </li>

            <a class="col-xs-offset-2 col-xs-10 visible-xs formation-xs" href="javascript:;" id="a-ind">
                <i class="fa fa-caret-right" aria-hidden="true"></i> Communication visuelle
            </a>

            <li role="presentation" class="col-md-2 col-sm-5 col-xs-12 text-center margin-top-xs-10">
                <a href="#design" aria-controls="design" role="tab" data-toggle="tab" id="li-design">
                <span class="vert">
                    bac pro
                </span>
                    <br>
                    Design graphique
                </a>
            </li>

            <li class="greta col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center">
                <a href="https://0922427n.index-education.net/pronote/" target="_blank">greta</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content hidden-xs">
            <div role="tabpanel" class="tab-pane fade in active hidden-xs" id="toutes">
                <div class="container">
                    <img class="corner-top-left" src="<?php bloginfo('template_directory'); ?>/img/formation_fond2.png" alt="">
                    <img class="corner-top-right" src="<?php bloginfo('template_directory'); ?>/img/formation_fond2.png" alt="">

                    <div class="row margin-top-row-1">
                        <div class="col-md-5 col-md-offset-1 margin-top-sm-xs-20">
                            <a href="javascript:;" class="losange-ind_graph">
                                <img class="losange" src="<?php bloginfo('template_directory'); ?>/img/ind_grap.png" alt="">
                            </a>
                            <div class="row">
                                <a href="javascript:;" class="a-ind">
                                    <div class="item item-1 text-center padding-right-20">
                                        <p>Façonnage industriel et routage</p>
                                    </div>
                                    <div class="triangle triangle-1">
                                    </div>
                                </a>
                            </div>
                            <div class="row">
                                <a href="javascript:;" class="a-prod-impr">
                                    <div class="item item-2 text-center padding-right-20">
                                        <p>Production imprimée</p>
                                    </div>
                                    <div class="triangle triangle-2">
                                    </div>
                                </a>
                            </div>
                            <div class="row">
                                <a href="javascript:;" class="a-prod-graph">
                                    <div class="item item-3 text-center padding-right-20">
                                        <p>Production graphique</p>
                                    </div>
                                    <div class="triangle triangle-3">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 margin-top-sm-xs-20">
                            <a href="javascript:;" class="losange-com_graph">
                                <img class="losange" src="<?php bloginfo('template_directory'); ?>/img/com_graph.png" alt="">
                            </a>
                            <div class="row">
                                <a href="javascript:;" class="a-e-impr">
                                    <div class="item item-4 text-center padding-right-20">
                                        <p><span>Études et réalisation de produits imprimés</span></p>
                                    </div>
                                    <div class="triangle triangle-4">
                                    </div>
                                </a>
                            </div>
                            <div class="row">
                                <a href="javascript:;" class="a-e-graph">
                                    <div class="item item-5 text-center padding-right-20">
                                        <p><span>Études et réalisation de produits graphiques</span></p>
                                    </div>
                                    <div class="triangle triangle-5">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-20">
                        <div class="col-md-5 col-md-offset-1">
                            <a href="javascript:;" class="a-artisanat">
                                <img class="losange" src="<?php bloginfo('template_directory'); ?>/img/artisanat.png" alt="">
                            </a>
                            <div class="row">
                                <a href="javascript:;" class="a-com-visuelle">
                                    <div class="item item-2 text-center padding-right-20">
                                        <p><span>Communication visuelle</span></p>
                                    </div>
                                    <div class="triangle triangle-2">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 margin-top-sm-xs-20">
                            <a href="javascript:;" class="a-design">
                                <img class="losange" src="<?php bloginfo('template_directory'); ?>/img/design.png" alt="">
                            </a>
                            <div class="row">
                                <a href="javascript:;" class="a-com-medias-impr">
                                    <div class="item item-2 text-center padding-right-20">
                                        <p><span>Communication et médias imprimés</span></p>
                                    </div>
                                    <div class="triangle triangle-2">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="ind_graph">
                <div class="container-fluid">
                    <div class="col-md-3 col-sm-3 sidebar">
                        <ul class="nav-side" role="tablist">
                            <li role="presentation" class="active title">
                                <a href="#ind_graph_gen" aria-controls="ind_graph_gen" role="tab" data-toggle="tab">
                                    <div class="col-md-4 col-sm-4 text-center vert">
                                        <h4>Bac pro</h4>
                                    </div>
                                    <div class="col-md-8 col-sm-8 text-center border-left">
                                        <h4>Industrie graphique</h4>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-offset-3">
                                <a href="#ind" id="a-ind-2" aria-controls="ind" role="tab" data-toggle="tab">Façonnage industriel et routage</a>
                            </li>
                            <li role="presentation" class="col-md-offset-3">
                                <a href="#prod-impr" id="a-prod-impr-2" aria-controls="prod-impr" role="tab" data-toggle="tab">Production imprimée</a>
                            </li>
                            <li role="presentation" class="col-md-offset-3">
                                <a href="#prod-graph" id="a-prod-graph-2" aria-controls="prod-graph" role="tab" data-toggle="tab">Production graphique</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-7 col-sm-7 text-div">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="ind_graph_gen">
                                <?php the_field('industries_graphiques') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ind">
                                <?php the_field('façonnage_industriel_et_routage') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade " id="prod-impr">
                                <?php the_field('production_imprimee') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="prod-graph">
                                <?php the_field('production_graphique') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="com_grap">
                <div class="container-fluid">
                    <div class="col-md-3 col-sm-3 sidebar">
                        <ul class="nav-side" role="tablist">
                            <li role="presentation" class="active title">
                                <a href="#com_graph_gen" aria-controls="com_graph_gen" role="tab" data-toggle="tab">
                                    <div class="col-md-4 col-sm-4 text-center vert">
                                        <h4>b.t.s</h4>
                                    </div>
                                    <div class="col-md-8 col-sm-8 text-center border-left com-title">
                                        <h4>Communication et industrie graphique</h4>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-offset-4">
                                <a href="#e-impr" id="a-e-impr-2" aria-controls="e-impr" role="tab" data-toggle="tab">Études et réalisation de produits imprimés</a>
                            </li>
                            <li role="presentation" class="col-md-offset-4">
                                <a href="#e-graph" id="a-e-graph-2" aria-controls="e-graph" role="tab" data-toggle="tab">Études et réalisation de produits graphiques</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-7 text-div">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="com_graph_gen">
                                <?php the_field('communication_et_industrie_graphique') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="e-impr">
                                <?php the_field('études_et_realisation_de_produits_imprimes') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade " id="e-graph">
                                <?php the_field('études_et_realisation_de_produits_graphiques') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="artisanat">
                <div class="container-fluid">
                    <div class="col-md-3 col-sm-3 sidebar">
                        <ul class="nav-side" role="tablist">
                            <li role="presentation" class="active title">
                                <a href="#artisanat_gen" aria-controls="artisanat_gen" role="tab" data-toggle="tab">
                                    <div class="col-md-4 col-sm-4 text-center vert">
                                        <h4>bac pro</h4>
                                    </div>
                                    <div class="col-md-8 col-sm-8 text-center border-left">
                                        <h4>artisanat des métiers d'arts</h4>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-offset-4">
                                <a href="#com-visuelle" id="a-com-visuelle-2" aria-controls="e-impr" role="tab" data-toggle="tab">Communication visuelle</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-7 text-div">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="artisanat_gen">
                                <?php the_field('artisanat_des_métiers_darts') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="com-visuelle">
                                <?php the_field('communication_visuelle') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="design">
                <div class="container-fluid">
                    <div class="col-md-3 col-sm-3 sidebar">
                        <ul class="nav-side" role="tablist">
                            <li role="presentation" class="active title">
                                <a href="#design_gen" aria-controls="design_gen" role="tab" data-toggle="tab">
                                    <div class="col-md-4 col-sm-4 text-center vert">
                                        <h4>bac pro</h4>
                                    </div>
                                    <div class="col-md-8 col-sm-8 text-center border-left">
                                        <h4>design graphique</h4>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-offset-4">
                                <a href="#com-medias-impr" id="a-com-medias-impr-2" aria-controls="com-medias-impr" role="tab" data-toggle="tab">Communication et médias imprimés</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-7 text-div">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="design_gen">
                                <?php the_field('design_graphique') ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="com-medias-impr">
                                <?php the_field('communication_et_medias_imprimes') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>