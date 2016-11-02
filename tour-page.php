<?php /* Template Name: Tour Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="default">
                    
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414" alt="Logo" id="mobileOnly" class="homeImage" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop" alt="Logo" id="desktopOnly" class="homeImage" >


			<h1><?php the_title(); ?></h1>

                        <?php
                            $args = array( 'cat' => 8,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="tourPost">
                                    
                                <h2><?php the_title(); ?></h2>
                                                          
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div>
                        <?php endwhile; ?> 
                                
                                
                        <?php
                            $args = array( 'cat' => 11,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="tourPost">
                                     
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div>
                        <?php endwhile; ?> 
                                
                        <?php
                            $args = array( 'cat' => 9,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="tourPost">
                                                          
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div>
                        <?php endwhile; ?> 
                                
                        <?php
                            $args = array( 'cat' => 10,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="tourPost">
                                                          
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div>
                        <?php endwhile; ?>        

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
