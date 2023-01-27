<?php
/*
Home/catch-all template
*/

get_header(); 

?>

	<div class="content-wide" role="main">

		<?php
		if ( is_search() ) {
			?><h3 class="page-title">Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h3><?php
		} else {
			?><h3 class="page-title">Latest News from <span>the College Days Newspaper</span></h3><?php
		}

		?>
		<div class="post-list">
		<?php
		if ( have_posts() ) : 

			// Start the Loop.
			while ( have_posts() ) : the_post(); 
				?>
			<div class="entry<?php print ( is_sticky() ? ' sticky' : '' ); ?>">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</div>
				<?php
			endwhile;

		else :

			print "<p>There are currently no posts to list here.</p>";

		endif;
		?>
		</div>

		<?php paginate(); ?>

	</div><!-- #primary -->


<?php get_footer(); ?>