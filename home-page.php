<?php
/* Template Name: Home Page; */
get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">

			<h1><?php the_title(); ?></h1>
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414" alt="Logo" id="mobileOnly" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop" alt="Logo" id="desktopOnly" >

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			
                <div class="leftSide">    
                        
                        <!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('homeContent'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>
                                
                                <?php the_meta(); ?> 

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                        
                    <div class="homePostSection">
                        <?php
                            $args = array( 'post_type' => 'home-page-post','cat' => 4,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="homePost">
                                                          
                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>
                                    
                                    <p><?php the_content(); ?></p>

                                </div>
                        <?php endwhile; ?> 
                    </div>
                    <div class="homePostSection">
                                
                        <?php
                            $args = array( 'post_type' => 'home-page-post','cat' => 5,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="homePost">
                                                          
                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>
                                    
                                    <p><?php the_content(); ?></p>

                                </div>
                        <?php endwhile; ?> 
                    </div>
                        
                        <div id="desktopOnly2">
                            123
                        </div>  
                        
                    <div class="homePostSection">            
                        <?php
                            $args = array( 'post_type' => 'home-page-post','cat' => 6,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="homePost">
                                                          
                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>
                                    
                                    <p><?php the_content(); ?></p>

                                </div>
                        <?php endwhile; ?>         
                                
                    </div>
                        <div class="homePostSection">            
                        <?php
                            $args = array( 'post_type' => 'home-page-post','cat' => 7,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="homePost">
                                                          
                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>
                                    
                                    <p><?php the_content(); ?></p>

                                </div>
                        <?php endwhile; ?>         
                                
                    </div><!-- homePostSection -->
                    
                        <div id="mobileOnly2">
                            <?php echo do_shortcode('[print_continuous_slider_plus_lightbox]'); ?>
                        </div>    
                </div><!-- leftSide -->
                    <aside class="sidebar" id="desktopOnly2">
                        <?php
                            $args = array( 'post_type' => 'car-make-logos', 'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '7' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                                <ul>
                                
                                    <li>                      
                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>
                                    </li>
                                    

                                
                        <?php endwhile; ?>  
                                </ul>
                    
                    </aside>
                    
		</section>
		<!-- /section -->
                
                
	</main>



<?php get_footer(); ?>
