<?php
get_header();
?>

	<div class="content-sidebar-wrap">
		<main id="genesis-content" class="content">
			<div class="archive-description">
				<?php
				global $post;
				setup_postdata( $post );
				?>
				<header>
					<h1 class="entry-header">
						<?php echo get_the_title( get_the_ID() ); ?>
					</h1>
				</header>
				<div class="entry-content">
					<?php echo get_the_content( get_the_ID() ); ?>
				</div>
			</div><!-- .archive-description -->
			<?php
			$the_query = new WP_Query( 'post_type=podcast' ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
			<div class="podcast-posts">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2>
							<?php the_title(); ?>
						</h2>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
		</main><!-- #genesis-content -->
	</div><!-- .content-sidebar-wrap -->

<?php
get_footer();
