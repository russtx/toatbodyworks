<?php /* Template Name: Tour Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="tourSection">
                    
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-414.jpg" alt="Logo" id="mobileOnly" class="homeImage" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-image-desktop.jpg" alt="Logo" id="desktopOnly" class="homeImage" >

                    <div class="postArea">
			<h1><?php the_title(); ?></h1>

                        <?php
                            $args = array( 'cat' => 8,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" >
                                <div class="tourPost">
                                    
                                <h2><?php the_title(); ?></h2>
                                                          
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div></s>
                        <?php endwhile; ?> 
                                
                                
                        <?php
                            $args = array( 'cat' => 11,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" >
                                <div class="tourPost">
                                     
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div></a>
                        <?php endwhile; ?> 
                                
                        <?php
                            $args = array( 'cat' => 9,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                                <a href="<?php the_permalink(); ?>" >
                                <div class="tourPost">
                                                          
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div></a>
                        <?php endwhile; ?> 
                                
                        <?php
                            $args = array( 'cat' => 10,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                                <a href="<?php the_permalink(); ?>" >
                                <div class="tourPost">
                                                          
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <span class="postThumb"><?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?></span>
                                    
                                    <p><?php the_excerpt(); ?></p>

                                </div></a>
                        <?php endwhile; ?>        
                    </div><!-- postArea -->
                    
                    <div class="testimonialArea" id="desktopOnly2">
                        
                        
                        <?php
                            $args = array( 'post_type' => 'testimonials','cat' => 13,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '2' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" >
                                <div class="testimonial">
                                                                                                        
                                    <span class="leftQuote">&ldquo; &nbsp;</span><?php the_excerpt(); ?><span class="rightQuote">&nbsp; &rdquo;</span>
                                    <h3>&#45; Testimonial&#44; <?php the_title(); ?></h3>
                                </div></a>
                        <?php endwhile; ?> 
                        
                        
                    </div>
                    
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
