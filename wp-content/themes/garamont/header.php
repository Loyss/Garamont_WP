<!doctype html>

<html lang="fr">

    <head>
        <!--    Bootstrap CSS    -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/bootstrap.min.css"/>
        <!--    Style CSS    -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
        <!--    ANIMATE CSS    -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/animate.css">
        <!--    FONT-AWESOME-CDN    -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <?php wp_head(); ?>
    </head>

    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo_garamont.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'principal',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    );
                    ?>
<!--                <ul class="nav navbar-nav navbar-right">
                    <li class="pronote"><a href="https://0922427n.index-education.net/pronote/" target="_blank"><b>Pronote</b></a></li>
                </ul>-->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>