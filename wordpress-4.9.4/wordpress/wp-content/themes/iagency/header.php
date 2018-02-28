	<?php
		/**
		 * The header for our theme
		 *
		 * This is the template that displays all of the <head> section and everything up until <div id="content">
		 *
		 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		 *
		 * @package iAgency
		 */

		?>
		<!DOCTYPE html>
		<html class="no-js" <?php language_attributes(); ?>>
		    <head>
		     <meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">

			<?php wp_head(); ?>	
					
				
		    </head>
		    <body <?php body_class(); ?>>
				

			<header id="header" class="normal">

					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-12 col-xs-12">
								<!-- Logo -->
								<div class="logo">
									<?php
									if(has_custom_logo()):
										the_custom_logo(); 
									else: ?>		
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php endif; ?>
					
								</div>
								<!--/ End Logo -->
								<div class="mobile-nav"></div>
							</div>
							<div class="col-md-9 col-sm-12 col-xs-12">
								<div class="nav-area">
									<!-- Main Menu -->
									<nav class="mainmenu">
										<div class="collapse navbar-collapse">
											
								<?php
										if ( has_nav_menu( 'menu-1' ) ) : 
							            wp_nav_menu( array(
							                'theme_location'    => 'menu-1',
							                'depth'             => 8,
							                'container'         => 'div',
							                'menu_class'        => 'nav navbar-nav menu',
							                'fallback_cb'       => 'ithemer_bootstrap_navwalker::fallback',
							                'walker'            => new ithemer_bootstrap_navwalker()
							            ));
							        ?>
							        <?php else : ?>
                            			<ul class="nav navbar-nav menu">
                                			<li class="menu-item">
                               					 <a href="<?php echo admin_url( 'nav-menus.php' ); ?> "> <?php esc_html_e('Add a menu','iagency'); ?></a>
                            				</li>
                        				</ul>

                        <?php endif; ?>
											
										</div>
									</nav>
									<!--/ End Main Menu -->
								</div>
							</div>
						</div>
					</div>
				</header>
				<!--/ End Header -->
		        
		 <?php if ( !is_home() && !is_front_page()) : ?>       
		<!-- Start Breadcrumbs -->
				<section id="breadcrumbs">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<?php
								if ( is_archive() ) {
								the_archive_title( '<h2 class="page-title">', '</h2>' );
													}
							else{
								echo '<h2 class="page-title">';
								echo esc_html( get_the_title() );
								echo '</h2>';
							}
							?>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
								<ul class="bread-list">
									<?php
									do_action( 'ithemer_breadcrumb' );		
								?>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!--/ End Breadcrumbs -->
		<?php endif; ?>