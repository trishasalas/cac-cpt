<?php

get_header(); ?>

	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				global $post;
				setup_postdata( $post );
//				echo '<pre>';
//				var_dump($post);
//				echo '</pre>';
				echo get_the_content(get_the_ID());
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php get_footer();
