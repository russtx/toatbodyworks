<?php get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="defaultSection">
                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414" alt="Logo" id="mobileOnly" class="homeImage" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop" alt="Logo" id="desktopOnly" class="homeImage" >


			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
