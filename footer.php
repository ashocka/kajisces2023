<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer-full">
	<div class="container">
	<div class="row">
		<div class="col-12 col-md-9 footer-menu">
			<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

			<!-- The WordPress Menu goes here -->
			<?php
				wp_nav_menu(
					array(
							'theme_location'  => 'footer_menu',
							'container_class' => 'menu-footer-menu-container',
							'container_id'    => 'footer-menu',
							'menu_class'      => '',
							'fallback_cb'     => '',
							'menu_id'         => 'menu-footer-menu',
							'depth'           => 3
							//'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
			?>
		</div>

<div class="col-12 col-md-3">
			<h3>Prijava na obveščanje</h3>
			<p>Prijavi se na prejemanje e-novic o terminih in terenskem testiranju za lokacije, ki vas zanimajo. Zaupno in varno.</p>

<div id="mc_embed_signup" class="mc-form-tab mc-form-tab-01">
	<form class="enovice" action="https://kajisces.us15.list-manage.com/subscribe/post?u=ca1ce05c47f697b64123f2d04&amp;id=d8fba7d495" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
		<div class="mc-field-group">
			<label for="mce-EMAIL">E-naslov:*
		</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
		<div class="mc-field-group input-group">
			<strong>Lokacije 1: </strong>
			<ul><li><input type="checkbox" value="1" name="group[6395][1]" id="mce-group[6395]-6395-0"><label for="mce-group[6395]-6395-0">Murska Sobota</label></li>
		<li><input type="checkbox" value="2" name="group[6395][2]" id="mce-group[6395]-6395-1"><label for="mce-group[6395]-6395-1">Ptuj</label></li>
		<li><input type="checkbox" value="4" name="group[6395][4]" id="mce-group[6395]-6395-2"><label for="mce-group[6395]-6395-2">Maribor</label></li>
		<li><input type="checkbox" value="8" name="group[6395][8]" id="mce-group[6395]-6395-3"><label for="mce-group[6395]-6395-3">Celje</label></li>
		<li><input type="checkbox" value="16" name="group[6395][16]" id="mce-group[6395]-6395-4"><label for="mce-group[6395]-6395-4">Slovenj Gradec</label></li>
		<li><input type="checkbox" value="32" name="group[6395][32]" id="mce-group[6395]-6395-5"><label for="mce-group[6395]-6395-5">Radovljica</label></li>
		<li><input type="checkbox" value="64" name="group[6395][64]" id="mce-group[6395]-6395-6"><label for="mce-group[6395]-6395-6">Novo mesto</label></li>
		<li><input type="checkbox" value="128" name="group[6395][128]" id="mce-group[6395]-6395-7"><label for="mce-group[6395]-6395-7">Brežice</label></li>
		<li><input type="checkbox" value="256" name="group[6395][256]" id="mce-group[6395]-6395-8"><label for="mce-group[6395]-6395-8">Ljubljana</label></li>
		<li><input type="checkbox" value="512" name="group[6395][512]" id="mce-group[6395]-6395-9"><label for="mce-group[6395]-6395-9">Nova Gorica</label></li>
		<li><input type="checkbox" value="1024" name="group[6395][1024]" id="mce-group[6395]-6395-10"><label for="mce-group[6395]-6395-10">Koper</label></li>
		<li><input type="checkbox" value="2048" name="group[6395][2048]" id="mce-group[6395]-6395-11"><label for="mce-group[6395]-6395-11">Savna District35</label></li>
		<li><input type="checkbox" value="4096" name="group[6395][4096]" id="mce-group[6395]-6395-12"><label for="mce-group[6395]-6395-12">Savna Gymnasivm</label></li>
		<li><input type="checkbox" value="8192" name="group[6395][8192]" id="mce-group[6395]-6395-13"><label for="mce-group[6395]-6395-13">Klub Tiffany</label></li>
		</ul>
		</div>
		<hr />
		<div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
			<div class="content__gdpr">
				<fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
				<label class="checkbox subfield" for="gdpr_19843"><input type="checkbox" id="gdpr_19843" name="gdpr[19843]" value="Y" class="av-checkbox gdpr"><span>Soglašam, da me obveščate o prihodnjih testiranjih in se strinjam s <a href="<?php echo site_url(); ?>/pogoji-uporabe/">pogoji uporabe in zasebnosti</a>.*</span> </label>
				</fieldset>
				
			</div>

		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ca1ce05c47f697b64123f2d04_d8fba7d495" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" class="btn" value="Prijavi se" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</div>
		</form>
	</div>

	<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup" class="mc-form-tab mc-form-tab-02">
		<form class="enovice" action="https://kajisces.us15.list-manage.com/subscribe/post?u=ca1ce05c47f697b64123f2d04&amp;id=d8fba7d495" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
		<div class="mc-field-group">
			<label for="mce-EMAIL">E-naslov:*
		</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
		<div class="mc-field-group input-group">
			<strong>Lokacije2: </strong>
			<ul><li><input type="checkbox" value="1" name="group[6395][1]" id="mce-group[6395]-6395-0"><label for="mce-group[6395]-6395-0">Murska Sobota</label></li>
		<li><input type="checkbox" value="2" name="group[6395][2]" id="mce-group[6395]-6395-1"><label for="mce-group[6395]-6395-1">Ptuj</label></li>
		<li><input type="checkbox" value="4" name="group[6395][4]" id="mce-group[6395]-6395-2"><label for="mce-group[6395]-6395-2">Maribor</label></li>
		<li><input type="checkbox" value="8" name="group[6395][8]" id="mce-group[6395]-6395-3"><label for="mce-group[6395]-6395-3">Celje</label></li>
		<li><input type="checkbox" value="16" name="group[6395][16]" id="mce-group[6395]-6395-4"><label for="mce-group[6395]-6395-4">Slovenj Gradec</label></li>
		<li><input type="checkbox" value="32" name="group[6395][32]" id="mce-group[6395]-6395-5"><label for="mce-group[6395]-6395-5">Radovljica</label></li>
		<li><input type="checkbox" value="64" name="group[6395][64]" id="mce-group[6395]-6395-6"><label for="mce-group[6395]-6395-6">Novo mesto</label></li>
		<li><input type="checkbox" value="128" name="group[6395][128]" id="mce-group[6395]-6395-7"><label for="mce-group[6395]-6395-7">Brežice</label></li>
		<li><input type="checkbox" value="256" name="group[6395][256]" id="mce-group[6395]-6395-8"><label for="mce-group[6395]-6395-8">Ljubljana</label></li>
		<li><input type="checkbox" value="512" name="group[6395][512]" id="mce-group[6395]-6395-9"><label for="mce-group[6395]-6395-9">Nova Gorica</label></li>
		<li><input type="checkbox" value="1024" name="group[6395][1024]" id="mce-group[6395]-6395-10"><label for="mce-group[6395]-6395-10">Koper</label></li>
		<li><input type="checkbox" value="2048" name="group[6395][2048]" id="mce-group[6395]-6395-11"><label for="mce-group[6395]-6395-11">Savna District35</label></li>
		<li><input type="checkbox" value="4096" name="group[6395][4096]" id="mce-group[6395]-6395-12"><label for="mce-group[6395]-6395-12">Savna Gymnasivm</label></li>
		<li><input type="checkbox" value="8192" name="group[6395][8192]" id="mce-group[6395]-6395-13"><label for="mce-group[6395]-6395-13">Klub Tiffany</label></li>
		</ul>
		</div>
		<hr />
		<div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
			<div class="content__gdpr">
				<fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
				<label class="checkbox subfield" for="gdpr_19843"><input type="checkbox" id="gdpr_19843" name="gdpr[19843]" value="Y" class="av-checkbox gdpr"><span>Soglašam, da me obveščate o prihodnjih testiranjih in se strinjam s <a href="<?php echo site_url(); ?>/pogoji-uporabe/">pogoji uporabe in zasebnosti</a>.*</span> </label>
				</fieldset>
				
			</div>

		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ca1ce05c47f697b64123f2d04_d8fba7d495" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" class="btn" value="Prijavi se" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</div>
		</form>
	</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email'; /*
	* Translated default messages for the $ validation plugin.
	* Language: SL
	*/
	$.extend($.validator.messages, {
		required: "To polje je obvezno.",
		remote: "Prosimo popravite to polje.",
		email: "Prosimo vnesite veljaven email naslov.",
		url: "Prosimo vnesite veljaven URL naslov.",
		date: "Prosimo vnesite veljaven datum.",
		dateISO: "Prosimo vnesite veljaven ISO datum.",
		number: "Prosimo vnesite veljavno število.",
		digits: "Prosimo vnesite samo števila.",
		creditcard: "Prosimo vnesite veljavno številko kreditne kartice.",
		equalTo: "Prosimo ponovno vnesite vrednost.",
		accept: "Prosimo vnesite vrednost z veljavno končnico.",
		maxlength: $.validator.format("Prosimo vnesite največ {0} znakov."),
		minlength: $.validator.format("Prosimo vnesite najmanj {0} znakov."),
		rangelength: $.validator.format("Prosimo vnesite najmanj {0} in največ {1} znakov."),
		range: $.validator.format("Prosimo vnesite vrednost med {0} in {1}."),
		max: $.validator.format("Prosimo vnesite vrednost manjše ali enako {0}."),
		min: $.validator.format("Prosimo vnesite vrednost večje ali enako {0}.")
	});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->	
		</div>
</div>

	</div>
	</div>
</div>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">
				<?php if ( is_active_sidebar( 'financerji' ) ) : ?>

				<div class="financerji">

				<?php dynamic_sidebar( 'financerji' ); ?>

				</div>

			<?php endif; ?>
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

