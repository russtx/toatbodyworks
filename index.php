<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414.jpg" alt="Logo" id="mobileOnly" class="homeImage" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop.jpg" alt="Logo" id="desktopOnly" class="homeImage" >

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
