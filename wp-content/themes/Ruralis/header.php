<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

</head>


<header>
    <div class="ancre" name="top" id="top"></div>
    <div class="navbar-fixed">
        <nav>
            <a href="https://twitter.com/Ruralismagazine" target="_blank"><img class="logotwitter" src="http://www.internationalwildcircus.com/wp-content/themes/Ruralis/img/twitter.png" alt="twitter" /></a>
            <a href="https://www.facebook.com/Ruralis-Magazine-488687077922669/" target="_blank"><img class="logofb" src="wp-content/themes/Ruralis/img/facebook.png" alt="facebook" /></a>
            <a href="http://www.instagram.com" target="_blank"><img class="logoinsta" src="wp-content/themes/Ruralis/img/instagram.png" alt="instaram" /></a>
            <div class="nav-wrapper z-depth-1">
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre1.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre2.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre3.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre4.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre5.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre6.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre7.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre8.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre9.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre10.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre11.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre12.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre13.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre14.png" alt="Logo arbre"/>
                <img class="hidden" src="wp-content/themes/Ruralis/img/logoarbre15.png" alt="Logo arbre"/>
                <img src="wp-content/themes/Ruralis/img/logoarbre1.png" id="animation" alt="Logo arbre"/>
                <!-- Next image is used for first frame, before scroll -->
                <!--<img src="wp-content/themes/Ruralis/img/logoarbre1.png" />-->
                <div id="bottommark"></div>

                <ul class="left hide-on-med-and-down">
                    <li><a href="#top">Ruralis</a></li>
                    <li><a href="#valeurs">Valeurs</a></li>
                    <li><a href="#editoriale">Ligne éditoriale</a></li>
                    <li><a href="#objectifs">Objectifs</a></li>
                    <li><a href="#abonnements">Abonnements</a></li>
                    <li><a href="#equipe">Notre Equipe</a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <?php
    $queried_post = get_post(10);
    echo $queried_post->post_content;
    ?>

    <img id="logo" src="wp-content/themes/Ruralis/img/logo.png" alt="logo ruralis magazine" />

</header>

