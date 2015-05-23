<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package heatherlauren-theme
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<ul class="footer__nav">
					<?php wp_list_pages('depth=1&title_li='); ?>
			</ul>
			<span class="footer__copyright">Copyright &copy; 
				<script type="text/javascript">
				var d = new Date()
				document.write(d.getFullYear())
				</script>
				heatherlauren</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
