<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iThemer
 */

get_header(); ?>

	<!-- Start Blog -->
		<section id="blog" class="section archive single">
			<div class="container">
				<div class="row">
					<?php	if ( ! is_active_sidebar( 'sidebar-1' ) ): ?>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<?php else: ?>
						<div class="col-md-8 col-sm-12 col-xs-12">
						<?php endif; ?>
						<div class="row">

			<?php woocommerce_content(); ?>	

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar('woo');
get_footer();
