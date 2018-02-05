<?php
/*
Template Name: Design Studio
 */

get_header();
 ?>
 <?php
// Dispay Loop Meta at top
hoot_display_loop_title_content( 'pre', 'page.php' );
if ( hoot_page_header_attop() ) {
	get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
	hoot_display_loop_title_content( 'post', 'page.php' );
}

// Template modification Hook
do_action( 'hoot_template_before_content_grid', 'page.php' );
?>

<div class="grid main-content-grid">

	<?php
	// Template modification Hook
	do_action( 'hoot_template_before_main', 'page.php' );
	?>

	<main <?php hybridextend_attr( 'content' ); ?>>

		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_start', 'page.php' );

		// Checks if any posts were found.
		if ( have_posts() ) :

			// Dispay Loop Meta in content wrap
			if ( ! hoot_page_header_attop() ) {
				hoot_display_loop_title_content( 'post', 'page.php' );
				get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
			}
            ?>
            <div id="content-wrap">

            <div class="tab"></div>
            <div id="wrapper" class="container">
            <div id="main" class="row">
                <div id="content" class="col24 columns last">
                    <div id="content_int">
            <html>
            <head>
            </head>
            <body>
            <div>
            <script type="text/javascript" language="javascript" src="https://stores.inksoft.com/designer/html5/common/js/launcher.js"></script>
            <div align="center" id="embeddedDesigner"></div>
            <script type="text/javascript" language="javascript">
                var flashvars = {
            DesignerLocation: "https://images.inksoft.com/designer/html5",
            EnforceBoundaries: "1",
            Background: "",
            VectorOnly: false,
            DigitalPrint: true,
            ScreenPrint: true,
            Embroidery: false,
            MaxScreenPrintColors: "6",
            RoundPrices: false,
            StoreID: "38180",
            PublisherID: "6632",
            SessionID: "",
            SessionToken: "",
            CartRetailItemID: "",
            UserID: "",
            UserName: "",
            UserEmail: "",
            DesignID: "",
            DefaultProductID: "1000033",
            DefaultProductStyleID: "1000886",
            ProductID: "1000033",
            ProductStyleID: "1000886",
            ProductCategoryID: "1000033",
            ClipArtGalleryID: "",
            DisableAddToCart: false,
            DisableUploadImage: false,
            DisableClipArt: false,
            DisableUserArt: false,
            DisableProducts: false,
            DisableDesigns: false,
            DisableDistress: false,
            DisableResolutionMeter: false,
            DisableUploadVectorArt: false,
            DisableUploadRasterArt: false,
            StartPage: "",
            StartPageCategoryID: "",
            StartPageHTML: "",
            StartBanner: "",
            OrderID: "",
            CartID: "",
            ArtID: "",
            FontID: "",
            Domain: "stores.inksoft.com",
            SSLEnabled: true,
            SSLDomain: "stores.inksoft.com",
            StoreURI: "TSC",
            Admin: "",
            NextURL: "",
            CartURL: "https://stores.inksoft.com/TSC/Cart",
            OrderSummary: true,
            VideoLink: "http://www.youtube.com/watch?v=EfXICdRwt4E",
            Phone: "855-350-4830",
            WelcomeScreen: "",
            ContactUsLink: "/TSC/Stores/Contact",
            WelcomeVideo: "",
            GreetBoxSetting: "",
            HelpVideoOverview: "",
            AutoZoom: true,
            EnableNameNumbers: false,
            AddThisPublisherId: "xa-4fccb0966fef0ba7",
            EnableCartPricing: true,
            EnableCartCheckout: true,
            EnableCartBilling: false,
            EnableCartShipping: true,
            PaymentDisabled: false,
            PaymentRequired: true,
            BillingAddressRequired: true,
            PasswordLength: "4",
            DefaultCountryCode: "US",
            CurrencyCode: "USD",
            CurrencySymbol: "$",
            HideProductPricing: true,
            PB: true,
            HideClipArtNames: true,
            HideDesignNames: true,
            ThemeName: "flat",
            FullScreen: false,
            Version: "3.11.0.0",
            BackgroundColor: "",
            StoreLogo: "//stores.inksoft.com/images/publishers/6632/stores/TSC/img/logo.png",
            StoreName: "T-Shirt Champions",
            StoreEmail: "contact@tshirtchampions.com",
            EnableEZD: false,
            EmbedType: "iframe"};
                launchDesigner('HTML5DS', flashvars, document.getElementById("embeddedDesigner"));
            </script>
            </div>
            </body>
            </html>
            </div><!-- end content_int -->
        </div><!-- end content -->
        <div class="clear"></div>
        </div><!-- end main -->
        </div><!-- end wrapper -->
            
            <?php
			// Template modification Hook
			do_action( 'hoot_template_after_content_wrap', 'page.php' );

			// Loads the comments.php template if this page is not being displayed as frontpage or a custom 404 page or if this is attachment page of media attached (uploaded) to a page.
			if ( !is_front_page() && !hybridextend_is_404() && !is_attachment() ) :

				// Loads the comments.php template
				comments_template( '', true );

			endif;

		// If no posts were found.
		else :

			// Loads the template-parts/error.php template.
			get_template_part( 'template-parts/error' );

		// End check for posts.
		endif;

		// Template modification Hook
		do_action( 'hoot_template_main_end', 'page.php' );
		?>

	</main><!-- #content -->

	<?php
	// Template modification Hook
	do_action( 'hoot_template_after_main', 'page.php' );
	?>

	<?php hybridextend_get_sidebar( 'primary' ); // Loads the template-parts/sidebar-primary.php template. ?>

</div><!-- .grid -->


<?php get_footer(); // Loads the footer.php template. ?>
