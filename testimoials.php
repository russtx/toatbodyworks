<?php 
/* Template Name: Testimonial Page */
get_header(); ?>

        <div class="clearfix"></div>

	<main role="main">
		<!-- section -->
                <section class="defaultSection testimonialSection">
                    
                    
                    
                    <?php

                $args = array( 'post_type' => 'testimonials','orderby' => 'menu_order date',	'order'   => 'ASC',  'posts_per_page' => '110' );
                
                

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();?>
                     
<div class="testimonialContent">
             

    <h2><?php the_title(); ?></h2>
<span class="left-quotes">&ldquo;</span>  
    <?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 50, '<a href="'. get_permalink() .'"> ...[ read more ]</a>' ); ?>
    <p><?php echo $trimmed_content; ?></p>
    
    <span class="right-quotes">&rdquo;</span>

</div>                            


<?php endwhile; ?>
                        

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>

