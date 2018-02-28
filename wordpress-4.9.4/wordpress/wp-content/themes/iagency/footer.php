<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iAgency
 */

?>		
						</div>
			</div>
		</section>
		<!-- Footer Top -->
			<section id="blog" class="section archive footer">
			<div class="container">
				<div class="row">
					<!-- Single Widget -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="blog-sidebar">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
					</div>
					<!--/ End Single Widget -->
				</div>
			</div>
		</section>
		<!--/ End footer Top -->

	
		<!-- Start Footer -->
		<footer id="footer">
			<!--/ End Arrow -->
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Social -->
						<ul class="social">
							             <?php if(get_theme_mod('ithemer_facebook_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_facebook_url')); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <?php endif; ?>
										<?php if(get_theme_mod('ithemer_twitter_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_twitter_url')); ?>"><i class="fa fa-twitter"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_theme_mod('ithemer_linkedin_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_theme_mod('ithemer_youtube_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_youtube_url')); ?>"><i class="fa fa-youtube"></i></a></li>
                                        <?php endif; ?>
                                        <?php if(get_theme_mod('ithemer_pinterest_url')): ?>
										<li><a href="<?php echo esc_url(get_theme_mod('ithemer_pinterest_url')); ?>"><i class="fa fa-pinterest"></i></a></li>
                                        <?php endif; ?>
						</ul>
						<!--/ End Social -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Copyright -->
						<div class="copyright">
							<p>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'iagency' ), 'iAgency', '<a href="http://ithemer.com/">iThemer</a>' );
			?></p>
						</div>
						<!--/ End Copyright -->
					</div>
					
				</div>
			</div>
		</footer>
		<!--/ End Footer -->
	


		<?php wp_footer(); ?>
    </body>
</html>