<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Name
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php dynamic_sidebar("footer_sections"); ?>
	</div><!-- .site-info -->
	<p class="copyright">Copyright ©<?php echo date("Y"); ?>. All Rights Reserved. &nbsp;&nbsp;&nbsp; Website by <a target="_blank" href="https://www.gtrsoftware.com/">Golden Triangle Software</a></p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>