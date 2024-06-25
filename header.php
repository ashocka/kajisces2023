<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/img/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/img/fav/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/img/fav/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/fav/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/img/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri() ?>/img/fav/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<meta property="og:image" content="<?php echo get_stylesheet_directory_uri() ?>/img/fav/social.php">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="1024">


	<?php wp_head(); ?>

	<style>
		.header-wrapper {
    		background-color: #dff7ff !important;
			padding-bottom: 1em;
		}

		.tag-simple .header-wrapper {
			background:none !important;
		}

		.wp-block-verse{
			font-family: unset;
			font-style: italic;
		}

		.form-container {
			display: none;
		}
		.form-container.active {
			display: block;
		}

		#page-wrapper .entry-title {
			background-color: #dff7ff;
			padding: 2rem;
		}

		.ea-bootstrap .time-value {
			background-color: #a1c627 !important;
			color: rgb(43, 43, 43) !important;
			font-weight: bold;
		}

		.ea-bootstrap .time-disabled {
			background-color: rgb(255, 102, 102) !important;
			color: rgb(186, 37, 37);
		}
	</style>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container nav-container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->

				<div class="toolbox toolbox-1 d-lg-none">
					<a href="<?php echo site_url(); ?>/english" class="toolbox-eng">EN</a>
					<span class="toolbox-search-icon">
			<?php
					searchwp_modal_form_trigger( array(
						'echo'     => true,                 // Whether to echo
						'type'     => 'link',             // Either 'link' or 'button'
						'text'     => '',        // Text of the trigger
					) );
			?>
					</span>
					
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="desktop-nav">
					<div class="toolbox toolbox-2 d-none d-lg-block">
						<a href="<?php echo site_url(); ?>/english" class="toolbox-eng">EN</a>

						<span class="toolbox-search-icon">
			<?php
					searchwp_modal_form_trigger( array(
						'echo'     => true,                 // Whether to echo
						'type'     => 'link',             // Either 'link' or 'button'
						'text'     => '',        // Text of the trigger
					) );
			?>
					</span>

					</div>

					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 3,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->