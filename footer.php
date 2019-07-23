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
	
	<p class="copyright">
		<?php esc_html_e('Copyright', 'theme-name'); ?> ©<?php echo esc_html(date_i18n('Y')); ?>. 
		<?php esc_html_e('All Rights Reserved. Website by', 'theme-name'); ?> 

		<a target="_blank" href="<?php echo esc_url('https://www.gtrsoftware.com/'); ?>">
			<?php echo esc_html('Golden Triangle Software'); ?>
		</a>
	</p><!--.copyright-->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>