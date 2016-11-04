<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414.jpg" alt="Logo" id="mobileOnly" class="homeImage" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop.jpg" alt="Logo" id="desktopOnly" class="homeImage" >


			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
