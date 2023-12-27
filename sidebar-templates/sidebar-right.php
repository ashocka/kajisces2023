<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	//return;
}

?>
	<?php
		if ( !is_page() && !has_category( 'Novice' ) ) {
	?>

<div class="sekundarni-nagovor">
		<?php
			global $nagovor;
		?>

		<h2>
			<?php echo $nagovor[0]; ?>
		</h2>

		<a class="button nagovor-btn" href="
			<?php echo $nagovor[2]; ?>
		">
			<?php echo $nagovor[1]; ?>
		<img class="btn-arrow" alt=">" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.svg" />
		</a>

		<a class="under-btn" href="
			<?php echo $nagovor[4]; ?>
		">
			<?php echo $nagovor[3]; ?>
		</a>

</div>

	<?php
		} // endif
	?>

<?php //dynamic_sidebar( 'right-sidebar' ); ?>
