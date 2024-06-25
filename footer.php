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
<div class="">
<strong>Skupina:</strong>
<select name="" class="" id="target-group"><option value="">Izberi možnost</option><option value="msm">Moški, ki imajo spolne odnose z moškimi</option><option value="sw">Osebe, ki se ukvarjajo s spolnim delom</option></select>
</div>
<div id="msm-form" class="form-container mc-form-tab mc-form-tab-01">
<form class="enovice" action="https://kajisces.us15.list-manage.com/subscribe/post?u=ca1ce05c47f697b64123f2d04&amp;id=d8fba7d495" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<!-- Rest of the original form code for "Moški, ki imajo spolne odnose z moškimi" -->
</form>
</div>

<div id="sw-form" class="form-container mc-form-tab mc-form-tab-01" style="display: none;">
<form class="enovice" action="https://kajisces.us15.list-manage.com/subscribe/post?u=ca1ce05c47f697b64123f2d04&amp;id=d8fba7d495" method="post" id="mc-embedded-subscribe-form-sw" name="mc-embedded-subscribe-form-sw" class="validate" target="_blank" novalidate>
<div id="mc_embed_signup_scroll">
<div class="mc-field-group">
<label for="mce-EMAIL-sw">E-naslov:*
</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL-sw">
</div>
<div class="mc-field-group input-group">
<strong>Lokacije: </strong>
<ul>
<li><input type="checkbox" value="256" name="group[6395][256]" id="mce-group[6395]-6395-8-sw"><label for="mce-group[6395]-6395-8-sw">Ljubljana</label></li>
<li><input type="checkbox" value="4" name="group[6395][4]" id="mce-group[6395]-6395-2-sw"><label for="mce-group[6395]-6395-2-sw">Maribor</label></li>
<li><input type="checkbox" value="1024" name="group[6395][1024]" id="mce-group[6395]-6395-10-sw"><label for="mce-group[6395]-6395-10-sw">Koper</label></li>
</ul>
</div>
<hr />
<div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
<div class="content__gdpr">
<fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
<label class="checkbox subfield" for="gdpr_19843-sw"><input type="checkbox" id="gdpr_19843-sw" name="gdpr[19843]" value="Y" class="av-checkbox gdpr"><span>Soglašam, da me obveščate o prihodnjih testiranjih in se strinjam s <a href="<?php echo site_url(); ?>/pogoji-uporabe/">pogoji uporabe in zasebnosti</a>.*</span> </label>  
</fieldset>
</div>
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response-sw" style="display:none"></div>
<div class="response" id="mce-success-response-sw" style="display:none"></div>
</div>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ca1ce05c47f697b64123f2d04_d8fba7d495" tabindex="-1" value=""></div>
<div class="clear"><input type="submit" class="btn" value="Prijavi se" name="subscribe" id="mc-embedded-subscribe-sw" class="button"></div>
</div>
</form>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
		formSelect.addEventListener('change', function() {
  		msmForm.style.display = (this.value === 'msm') ? 'block' : 'none';
  		swForm.style.display = (this.value === 'sw') ? 'block' : 'none';
	});
});
</script>


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

