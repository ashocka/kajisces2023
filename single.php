<?php
/**
 * The template for displaying all single posts (except Novice)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					//understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->

	</div><!-- #content -->

<!-- #single-wrapper -->

<?php
		if ( !has_category( 'Novice' ) ) {
?>

<footer class="entry-footer container">
		<div class="row">
		<div class="col-12"><h2>Preberi več na to temo</h2></div>
		<?php
		/*
		*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
		*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
		*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
		*/

		if (get_field('priporocamo')){
			$post_objects = get_field('priporocamo');
		}

		else { // if no recomm posts picked

			$postcat = get_the_category( $post->ID );
			$catid = $postcat[0]->cat_ID;

			$args = array(
		    'posts_per_page'   => 3,
		    'category'         => $catid,
		    'orderby'          => 'name',
		    'order'            => 'ASC',
		    'post_type'        => 'post',
		    'post__not_in'     => array(get_the_ID())
			);

			$posts = get_posts( $args );
			// get IDs of posts retrieved from get_posts

			$post_objects = array();

			foreach ( $posts as $thepost ) {
			    $id = $thepost->ID;
			    $post_objects[] = get_permalink($id);
			}
						
		};

		if( $post_objects ): ?>

		    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>

				<?php
				echo "<div class='col-12 col-md-4 priporocamo-wrap'>
				<div class='priporocamo priporocamo-ena'>";

		        echo "<a rel='bookmark' href='" . $post . "' ><h2>";

				echo get_the_title( url_to_postid($post) );

				echo "</h2>
				<img class='btn-arrow' alt='' role='presentation' src='";
				echo get_stylesheet_directory_uri();
				echo "/img/arrow.svg' /></a></div></div>";

				?>

		    <?php endforeach; ?>

		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif;

		?>

	</div></footer><!-- .entry-footer -->

<?php } ?>

<?php
get_footer();
