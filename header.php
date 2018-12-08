<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevRev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-scroll-background collapsed">
    <a class="navbar-brand" href="#preloader">
    <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Logo DevRev.pl"><div class="logo">DevRev.pl</div>';
    ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars fa-2x" style="color: #FFFFFF" aria-hidden="true"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <?php
        wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'ul',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );

//        wp_nav_menu( array(
//            'theme_location' => 'menu-1',
//            'menu_id'        => 'primary-menu',
//            'menu_class'     => 'navbar-nav',
//        ) );
//        ?>
    </div>
</nav>
<!--[navbar-end]-->



<!--[Carouse]-->
<header id="myCarousel" class="carousel slide" data-ride="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="fill_1"></div>
                <div class="carousel-caption">
                    <div class="carousel-center revealSubTitle">
                        <div class="title">
                            <h1>PROGRAMOWANIE</h1>
                        </div>
                        <p data-sr="wait 1.6s, then enter bottom and hustle 25px over 2s">All you need is code!</p>
<!--                        <div class="button-yt" data-sr="wait 2.6s, then enter bottom and hustle 50px over 2s">-->
<!--                            <p><a class="btn btn-primary btn-lg" href="#about" role="button"-->
<!--                                  data-anijs="if: mouseover, do: pulse animated">About Us</a></p>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="opac"></div>
            </div>

            <div class="carousel-item">
                <div class="fill_2"></div>
                <div class="carousel-caption">
                    <div class="carousel-center">
                        <div class="title">
                            <h1>RECENZJE</h1>
                        </div>
                        <p>Niesponsorowane opinie i testy</p>
<!--                        <div class="button-yt">-->
<!--                            <p><a class="btn btn-primary btn-lg" href="#team" role="button"-->
<!--                                  data-anijs="if: mouseover, do: pulse animated">Team</a></p>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="opac"></div>
            </div>

            <div class="carousel-item">
                <div class="fill_3"></div>
                <div class="carousel-caption">
                    <div class="carousel-center">
                        <div class="title">
                            <h1>ERGONOMIA</h1>
                        </div>
                        <p>To nie tylko wygoda ale i zdrowie</p>
<!--                        <div class="button-yt">-->
<!--                            <p><a class="btn btn-primary btn-lg" href="#gallery" role="button"-->
<!--                                  data-anijs="if: mouseover, do: pulse animated">Gallery</a></p>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="opac"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<!--[Carouse-end]-->



<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'devrev' ); ?><!--</a>-->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
//			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$devrev_description = get_bloginfo( 'description', 'display' );
			if ( $devrev_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $devrev_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
