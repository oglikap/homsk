<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<section id="post" class="wrapper" style="background-image:url(<?php if( get_field('foto') ): ?><?php the_field('foto'); ?><?php endif; ?> );">

		<div class="inner">
			<article class="box">
				<?php include( get_template_directory() . '/includes/logo.php' ); ?>
				<header>
					<h2>
						<?php the_title(); ?>
					</h2>

								<?php
								if( has_post_thumbnail() ) :?>
									<span class="image"><?php the_post_thumbnail('landscape'); ?></span>
								<?php endif; ?>

				</header>
				<div class="content">
					<?php
						the_content();
					?>
					<?php if( get_field('vimeo') ) : the_field('vimeo'); endif; ?>
				</div><!-- .content -->
				<footer>
					<?php include( get_template_directory() . '/includes/navigation.php' ); ?>
				</footer>
			</article><!-- Article .box -->

		</div>

	</section><!-- .wrapper -->
