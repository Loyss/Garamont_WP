<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

    <div class="parallax-window" data-parallax="scroll" data-image-src="img/back.jpg" data-speed="0.6">
        <div class="home">
            <div class="container-fluid">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->

                    <!--<ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>-->


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <img src="img/eleves.jpg" alt="...">
                            <div class="mask"></div>
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                                        <img src="img/logo_garamont.png" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="arrow">
                                        <div class="text-center">
                                            <a href="#formations">
                                                <img src="img/flecheHome.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/eleves.jpg" alt="...">
                            <div class="mask"></div>
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                                        <img src="img/logo_garamont.png" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="arrow">
                                        <div class="text-center">
                                            <a href="#formations">
                                                <img src="img/flecheHome.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <img src="img/FlecheGauche.png" alt="">
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <img src="img/FlecheDroite.png" alt="">
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
                            <div class="item active">
                                <div class="team-item col-xs-12">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <img src="img/formation-carré.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="h5">
                                                        Formation
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="team-social">
                                                    Façonnage industriel et routage
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item col-xs-12">
                                    <div class="tream-entry">
                                        <a href="formations.php" class="team-img">
                                            <img src="img/protrait-1.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="h5">
                                                        Formation
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="team-social">
                                                    lorem
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
                            <img src="img/FlecheGauche.png" alt="">
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
                            <img src="img/FlecheDroite.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div id="team" class="block hidden-xs">
                <div class="container-fluid">
                    <div class="team">
                        <div class="teamrow row">
                            <div class="team-item col-xs-12 col-sm-2 col-sm-offset-2">
                                <div class="tream-entry">
                                    <a href="javascript:;">
                                        <div class="team-img a-home-ind">
                                            <img src="img/projet-portrait-1.jpg" alt="" class="img-responsive">
                                        </div>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">
                                                    <div class="h5">
                                                        Formation
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="team-social">
                                                    Façonnage industriel <br> et routage
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="formations.php" class="team-img">
                                        <img src="img/protrait-1.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">
                                                <div class="h5">
                                                    Formation
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="team-social">
                                                Production imprimée
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="formations.php" class="team-img">
                                        <img src="img/formation-carré.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Formation</div>
                                            <hr>
                                            <div class="team-social">
                                                Production graphique
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="formations.php" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Formation</div>
                                            <hr>
                                            <div class="team-social">
                                                Études et réalisation <br> de produits imprimés
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teamrow row">
                            <div class="team-item col-xs-12  col-sm-offset-3 col-sm-2">
                                <div class="tream-entry">
                                    <a href="formations.php" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Formation</div>
                                            <hr>
                                            <div class="team-social">
                                                Études et réalisations <br> de produits graphiques
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="formations.php" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Formation</div>
                                            <hr>
                                            <div class="team-social">
                                                Communication visuelle
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="formations.php" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Formation</div>
                                            <hr>
                                            <div class="team-social">
                                                Communication <br> et média imprimés
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE1</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h2">ACTUALITE2</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE3</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>

                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE4</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE 5</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>

                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE6</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE7</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE8</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="lien" href="#">
                            <img src="img/pics.png" class="item"/>
                            <h6 class="h6">ACTUALITE9</h6>
                            <p>Lorem ipsum dolor sit amet,</br> consectetur adipiscing elit.</p>
                        </a>
                    </div>
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
                            <div class="item active">
                                <div class="team-item col-xs-12">
                                    <div class="tream-entry">
                                        <a href="" class="team-img">
                                            <img src="img/projet-portrait.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">Projet</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item col-xs-12">
                                    <div class="tream-entry">
                                        <a href="" class="team-img">
                                            <img src="img/projet-portrait-1.jpg" alt="" class="img-responsive">
                                        </a>
                                        <div class="team-hover table-view">
                                            <div class="cell-view">
                                                <div class="team-name">Projet</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic-3" role="button" data-slide="prev">
                            <img src="img/FlecheGauche.png" alt="">
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic-3" role="button" data-slide="next">
                            <img src="img/FlecheDroite.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div id="team" class="block hidden-xs">
                <div class="container-fluid">
                    <div class="team">
                        <div class="teamrow row">
                            <div class="team-item col-xs-12 col-sm-2 col-sm-offset-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/projet-portrait.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/projet-portrait-1.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/projet-portrait.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/protrait-1.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teamrow row">
                            <div class="team-item col-xs-12  col-sm-offset-3 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teamrow row hide-line">
                            <div class="team-item col-xs-12 col-sm-2 col-sm-offset-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item col-xs-12 col-sm-2">
                                <div class="tream-entry">
                                    <a href="" class="team-img">
                                        <img src="img/back.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="team-hover table-view">
                                        <div class="cell-view">
                                            <div class="team-name">Projet</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>