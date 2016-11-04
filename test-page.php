<?php /* Template Name: Test Page  */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="slider one">
                    
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414.jpg" alt="Logo" id="mobileOnly" class="homeImage" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop.jpg" alt="Logo" id="desktopOnly" class="homeImage" >
   
                    
    <div>slide1</div>
    <div>slide2</div>
    <div>slide3</div>
    <div>slide4</div>
		<div>slide5</div>
</section>

<section class="slider two">
    <div>slide1</div>
    <div>slide2</div>
    <div>slide3</div>
    <div>slide4</div>
</section>

<button class="pp">back</button>
<button class="nn">forward</button>

<section class="slider three">
    <div>slide1</div>
    <div>slide2</div>
    <div>slide3</div>
</section>

<button class="pp2">back</button>
<button class="nn2">forward</button>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
