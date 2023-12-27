<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class='col-12 col-md-4 priporocamo-wrap'>
	<div class='priporocamo priporocamo-ena'>
		<a href='<?php the_permalink(); ?>' rel='bookmark'>

	<?php
		the_title('<h2 class="entry-title">', '</h2>');
	?>

	<?php the_excerpt(); ?>

	<img class='btn-arrow' alt='' role='presentation' src="
	<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.svg" />

		</a>
	</div>
</div>
