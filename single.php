<?php
/**
 * The Template for displaying all single posts
 */

get_header();

the_showcase();

?>

	<div class="content-wide article" role="main">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?>
				<h1><?php the_title(); ?></h1>
				<div class="article-content">
					<p class="post-date">By <?php print get_the_author_link() ?> in <?php print get_the_category_list( ', ' ) ?> on <?php the_date() ?></p>
					<?php the_content(); ?>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>

<?php

get_footer();

?>