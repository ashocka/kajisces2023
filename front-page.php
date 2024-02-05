<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper home-wrap" id="page-wrapper">

<main class="site-main" id="main">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">		

<div class="row">
				<div class="col-12 col-md-10 offset-md-1">
					<h1><span>Brezplačno</span> in <span>zaupno</span> testiranje na spolno prenosljive okužbe</h1>
				</div>
</div>

<div class="row features">
				<div class="col-12 col-md-4 feature">
					<div class="feat-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon01.svg" alt="roka s petimi prsti" /></div>
					<p>Živjo rene</p>
				</div>

				<div class="col-12 col-md-4 feature">
				<div class="feat-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon03.svg" alt="par, ki se drži za roke" /></div>
					<p>Živjo rene!</p>
				</div>

				<div class="col-12 col-md-4 feature">
					<div class="feat-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon02.svg" alt="faca ki se smeje" /></div>
					<p>Novo: testiranje tudi za migrante in uporabnike drog pri partnerjih projekta</p>
				</div>
</div>

<div class="row">
	<div class="col-12 col-md-6 offset-md-3">
		<a href="<?php echo get_site_url(); ?>/testiranje/" class="btn">Pridi na testiranje na Legebitro</a>
		<a href="<?php echo get_site_url(); ?>/mesta/" class="under-btn">Ne zveni prav zate? Preveri splošna testirna mesta</a>

		<div class="info-ponuja">
			<span>testiranje in informacije ponuja Legebitra</span>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-lege.png" class="logo-lege" alt="logo legebitra" />
		</div>
	</div>
</div>


<div class="row">

	<div class="col-12 col-md-4 priporocamo-wrap">
		<div class="priporocamo priporocamo-ena">
		<?php
			$predlagana_stran = get_field('predlagana_stran_1_url');

			if ($predlagana_stran){
				$naslov = get_field('predlagana_stran_1_naslov');
				$podnaslov = get_field('predlagana_stran_1_podnaslov');

				echo "<a href='" . $predlagana_stran . "'>";
				echo "<h2>" . $naslov . "</h2>";
				echo "<p>" . $podnaslov . "</p>";
			} else {
				echo "<a href='" . get_site_url() . "/mesta/'>";
				echo "<h2>Kaj pa, če nisem MSM?</h2>";
				echo "<p>Seznam lokacij, ki ponujajo testiranja na spolno prenosljive okužbe</p>";
			}
		?>
		<img class="btn-arrow" alt="" role="presentation" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.svg" />
			</a>
		</div>
	</div>


	<div class="col-12 col-md-4 priporocamo-wrap">
		<div class="priporocamo priporocamo-ena">
		<?php
			$predlagana_stran = get_field('predlagana_stran_2_url');

			if ($predlagana_stran){
				$naslov = get_field('predlagana_stran_2_naslov');
				$podnaslov = get_field('predlagana_stran_2_podnaslov');

				echo "<a href='" . $predlagana_stran . "'>";
				echo "<h2>" . $naslov . "</h2>";
				echo "<p>" . $podnaslov . "</p>";
			} else {
				echo "<a href='" . get_site_url() . "/hiv/'>";
				echo "<h2>Kako se lahko zaščitim pred hivom?</h2>";
				echo "<p>Več informacij o hivu</p>";
			}
		?>
		<img class="btn-arrow" alt="" role="presentation" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.svg" />
			</a>
		</div>
	</div>

	<div class="col-12 col-md-4 priporocamo-wrap">
		<div class="priporocamo priporocamo-ena">
		<?php
			$predlagana_stran = get_field('predlagana_stran_3_url');

			if ($predlagana_stran){
				$naslov = get_field('predlagana_stran_3_naslov');
				$podnaslov = get_field('predlagana_stran_3_podnaslov');

				echo "<a href='" . $predlagana_stran . "'>";
				echo "<h2>" . $naslov . "</h2>";
				echo "<p>" . $podnaslov . "</p>";
			} else {
				echo "<a href='" . get_site_url() . "/buddy/'>";
				echo "<h2>Kje lahko dobim podporo?</h2>";
				echo "<p>Informacije o Buddy programu</p>";
			}
		?>
		<img class="btn-arrow" alt="" role="presentation" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.svg" />
			</a>
		</div>
	</div>

</div>

</div><!-- #content -->

<div>
	<img class="divider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/divider.svg');" alt="" role="presentation"/>
</div>

<div class="container">

<h2>Zadnje novice</h2>

<div class="row novice">
<?php 
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'Novice',
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php
	    echo "<div class='novica col-12 col-md-4'><a href='";
	    echo get_permalink();
	    echo "'><h4>";
	    the_title();
	    echo "</h4><span>";
	    echo get_the_date("d.m.Y");
	    echo "</span><img alt='' role='presentation' src='";
	    echo get_stylesheet_directory_uri();
	    echo "/img/arrow-dark.svg' /></div></a>";
    ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('Ni novic'); ?></p>
<?php endif; ?>

</div>

<?php

	$baner = get_field('baner');

	if ($baner){
		echo "<img src='" . $baner['url'] . "' alt='" . $baner['alt'] . "' />";
	}

?>

</div><!-- #content -->

</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php
get_footer();
