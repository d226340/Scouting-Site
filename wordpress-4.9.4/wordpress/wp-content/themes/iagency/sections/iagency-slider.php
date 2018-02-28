		<section id="personal-area" class="slider">
			<div class="personal-main slide">


				<?php $k=1; 
					for($i=1;$i<11;$i++){
						if(get_theme_mod('iagency_slider_page_'.$i)!=''): 
							$slider_page[$k]=get_theme_mod('iagency_slider_page_'.$i);
							$slider_subheading[$k]=get_theme_mod('iagency_slider_subtitle_'.$i);
							$slider_button_title[$k]=get_theme_mod('iagency_slider_button_title_'.$i);
							$slider_button_url[$k]=get_theme_mod('iagency_slider_button_url_'.$i);
							$k=$k+1;
						endif;
					}
					$args = array (
					                          'post_type' => 'page',
					                          'post_per_page' => $k,
					                          'post__in'         => $slider_page,
					                          'orderby'           =>'post__in',
					                        );

					                      $sliderloop = new WP_Query($args);

					                      
					                      if ($sliderloop->have_posts()) :  while ($sliderloop->have_posts()) : $sliderloop->the_post(); $j=1;?>
				
				
				<!-- Single Slider -->
				<?php if(has_post_thumbnail()): ?>
						<?php $slider_img_url = get_the_post_thumbnail_url(get_the_ID($i),'iagency-slider-thumb'); ?>
						<div class="personal-single" style="background-image:url(<?php echo esc_url($slider_img_url); ?>">
				<?php else: ?>
				<div class="personal-single">
				<?php endif; ?>
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Personal Text -->
								<div class="personal-text center">
									<div class="my-info">
										<h1><?php the_title(); ?></h1>
										<h2><?php echo esc_html($slider_subheading[$j]); ?></h2>
										<p><?php the_excerpt(); ?></p>
										<div class="button">
											<a href="<?php the_permalink(); ?>" class="btn primary"><i class="fa fa-rocket"></i><?php esc_html_e('Read More' ,'iagency'); ?></a>
											<?php if($slider_button_title[$j]): ?>
													<a href="<?php echo esc_url($slider_button_url[$j]); ?>" class="btn"><i class="fa fa-briefcase"></i><?php echo esc_attr($slider_button_title[$j]); ?></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<!--/ End Personal Text -->
							</div>
						</div>
					</div>
				</div>
						          <?php $j=$j+1; endwhile;
						              wp_reset_postdata();  
						            endif; ?>
				
			</div>
		</section>
		<!--/ End Personal Area -->
