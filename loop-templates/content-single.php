<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="row">
<div class="header-background" style="--background: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'featuredp' ); ?>')">

<div class="header-wrapper">

	<?php
	// prikazovanje pravega nagovora

	// Define an array of categories to check
		$categories_to_check = array('novice', 'za-migrante');

		// Get the post categories
		$post_categories = get_the_category();

		// Check if the post is in any of the listed categories
		$found = false;
		foreach ($categories_to_check as $category) {
			if (has_category($category, $post_categories)) {
				$found = true;
				break;
			}
		}

		if ($found) {
	?>

	<div class="nagovor nagovor-top">

	<a class="button nagovor-btn" href="
	<?php
			if ( get_field('segment') ) {
				$segment = get_field('segment');			

		$args = array(
			'post_type' => 'nagovor',
			'post_status' => 'publish'
		);
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();

		    switch ($segment) {
			    case "neciljni":
			        $nagovor_id = "70";
			        break;
			    case "ciljni":
			        $nagovor_id = "75";
			        break;
			    case "hivplus":
			        $nagovor_id = "78";
			        break;
			}

		endwhile;

		global $nagovor; // make this array available elsewhere

		$nagovor[0] = get_field('nagovor', $nagovor_id);
		$nagovor[1] = get_field('gumb', $nagovor_id);
		$nagovor[2] = get_field('povezava', $nagovor_id);
		$nagovor[3] = get_field('sekundarni_gumb', $nagovor_id);
		$nagovor[4] = get_field('sekundarna_povezava', $nagovor_id);
			}
	?>

	<?php
		echo $nagovor[2];
	?>

	">

	<?php
		echo $nagovor[1];
	?>
	<img class="btn-arrow" alt=">" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.svg" />
	</a>
</div><!-- end .nagovor -->

	<?php

	}

	wp_reset_postdata();
	?>

	

	<header class="entry-header col-md-6 offset-md-2 col-12">
		<?php pancake_breadcrumbs(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta-or-excerpt">
		<?php
			if ( has_category( 'Novice' ) ) {
				understrap_posted_on();
			} else {
				echo get_the_excerpt();
			};
		?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->


</div><!-- end col-md-12 -->
</div><!-- end header-background -->

</div><!-- end .row -->

<div class="row">

	<div class="entry-content col-md-8 col-lg-6 offset-lg-2 col-12">

		<?php the_content(); ?>

	</div><!-- .entry-content -->


	<div class="col-md-4 col-12 sidebar">

		<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>
	
	</div>

</div><!-- end .row -->

</article><!-- #post-## -->
