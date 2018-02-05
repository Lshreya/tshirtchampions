
<?php
// Template modification Hook
do_action( 'hoot_template_before_footer' );

// Get Footer Columns
$columns = hoot_get_footer_columns();
$alphas = range('a', 'e');
$structure = hoot_footer_structure();
$footercols = array();
$footerdisplay = false;
for ( $i=0; $i < $columns; $i++ ) {
	$footercols[ 'hoot-footer-' . $alphas[ $i ] ] = $structure[ $i ];
	if ( is_active_sidebar( 'hoot-footer-' . $alphas[ $i ] ) )
		$footerdisplay = true;
}
$inline_nav = ( $columns == 1 ) ? 'inline_nav' : '';

// Return if nothing to show
if ( !$footerdisplay )
	return;
?>
<footer id="footer" class="site-footer  footer grid-stretch footer-highlight-typo " role="contentinfo" itemscope="itemscope"
    itemtype="http://schema.org/WPFooter">
	<div class="grid">
		<div class="grid-span-3 footer-column">
			<section id="hoot-cta-widget-3" class="widget widget_hoot-cta-widget">
				<div class="cta-widget-wrap topborder-none">
					<div class="cta-widget-box bottomborder-none">
						<div class="cta-widget">
							<h3 class="cta-headline">Need Pricing?</h3>
							<div class="cta-description">
								<p>Click the 'Get a quote' button below to view pricing.</p>
							</div>
							<a href="http://design.tshirtchampions.com/tshirtchampions/Products#quote" class="cta-widget-button  button button-medium border-box">Get a Quote</a>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="grid-span-3 footer-column">
			<section id="nav_menu-4" class="widget widget_nav_menu">
				<h3 class="widget-title">YOUR ACCOUNT</h3>
                <div class="menu-footer-menu-container">
					<ul id="menu-footer-menu-1" class="menu">
						<li id="menu-item-6113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6113"><a href="http://localhost/t-shirtChampions/?page_id=5774"><span class="menu-title">Sign In</span></a></li>
						<li id="menu-item-6114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6114"><a href="http://localhost/t-shirtChampions/?page_id=5798"><span class="menu-title">Forgot Password</span></a></li>
						<li id="menu-item-6117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6117"><a href="http://localhost/t-shirtChampions/?page_id=5783"><span class="menu-title">Create New Account</span></a></li>
						<li id="menu-item-6135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6135"><a href="http://localhost/t-shirtChampions/?page_id=5856"><span class="menu-title">Order Status</span></a></li>					</ul>
				</div>
			</section>
			<section id="nav_menu-5" class="widget widget_nav_menu">
				<h3 class="widget-title">MORE INFO</h3>
				
					<ul id="menu-footer-menu-1" class="menu">
						<li id="menu-item-6113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6113"><a href="http://localhost/t-shirtChampions/?page_id=5774"><span class="menu-title">Templates</span></a></li>
						<li id="menu-item-6114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6114"><a href="http://localhost/t-shirtChampions/?page_id=5798"><span class="menu-title">FAQ’S</span></a></li>
						<li id="menu-item-6117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6117"><a href="http://localhost/t-shirtChampions/?page_id=5783"><span class="menu-title">T-Shirt Shop</span></a></li>
						<li id="menu-item-6135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6135"><a href="http://localhost/t-shirtChampions/?page_id=5856"><span class="menu-title">Design Lab</span></a></li>
						<li id="menu-item-6173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6173"><a href="http://localhost/t-shirtChampions/?page_id=6082"><span class="menu-title">Our Company</span></a></li>
					</ul>
				
			</section>
		</div>
		<div class="grid-span-3 footer-column">
			<section id="hoot-contact-info-widget-3" class="widget widget_hoot-contact-info-widget">
				<h3 class="widget-title">CONTACT US</h3>
				<div class="contact-info-widget">

					<div class="contact-info-block">
						<div class="contact-info-icon"><i class="fa fa-home"></i></div>
						<div class="contact-info-text">3649 WINPLACE RD, MEMPHIS, TN 38118</div>
					</div>

					<div class="contact-info-block">
						<div class="contact-info-icon"><i class="fa fa-phone"></i></div>
						<div class="contact-info-text"><a href="tel:(901)345-4830" class="contact-info-link">(901)345-4830</a></div>
					</div>

					<div class="contact-info-block">
						<div class="contact-info-icon"><i class="fa fa-envelope"></i></div>
						<div class="contact-info-text"><a href="mailto:c%6f%6e%74ac%74@t%73hi%72tcha%6dpions.%63%6fm" class="contact-info-link">contact@tshirtchampions.com</a></div>
					</div>

					<div class="contact-info-block">
						<div class="contact-info-icon"><i class="fa fa-instagram"></i></div>
						<div class="contact-info-text"> </div>
					</div>
					<div class="contact-info-block">
						<div class="contact-info-icon"><i class="fa fa-facebook"></i></div>
						<div class="contact-info-text"> </div>
					</div>
					<div class="contact-info-block">
						<div class="contact-info-icon"><i class="fa fa-linkedin"></i></div>
						<div class="contact-info-text"> </div>
					</div>

				</div>
			</section>
		</div>
		<div class="grid-span-3 footer-column">
		</div>
	</div>
</footer>
<?php
// Template modification Hook
do_action( 'hoot_template_after_footer' );