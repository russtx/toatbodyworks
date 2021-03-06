<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('defaultContent'); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('medium'); ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
                <div class="SocialLinks">
                        <a href="https://api.instagram.com/oembed?url=http://instagr.am/p/fA9uwTtkSN/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a><br />
                    
                </div>
		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

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
