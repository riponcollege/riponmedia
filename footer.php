<?php
/**
 * The template for displaying the footer
 */
?>
	
	</section>
	
	<footer class="footer">
		<?php the_field( 'footer_content', 'option' ); ?>	
		<p class="copyright"><?php the_field( 'copyright', 'option' ); ?></p>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>
