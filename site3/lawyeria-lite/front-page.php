		<?php
		/**
		 *  The template for displaying Front Page.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		if ( get_option( 'show_on_front' ) == 'page' ){?>

		</header><!--/header-->
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
					?>
					<div class="post">
						
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
												
						
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
<?php } else { ?>
			<div id="subheader" style="background-image: url('<?php
				if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg', get_template_directory_uri() . "/images/full-header.jpg" ) ) {
				    echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg',get_template_directory_uri() . "/images/full-header.jpg" );
			     }
			 ?>');">
				<div class="subheader-color cf">
					<div class="wrapper cf">
						<div class="full-header-content full-header-content-no-sidebar">
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' ) ) {
										echo '<h3 style="text-align: center;">';
										echo get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' );
										echo '</h3>';
									}
								?>
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' )) {
										echo '<p>';
											echo get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' );
										echo '</p>';	
									}
								?>
						</div><!--/div .header-content-->
					</div><!--/div .wrapper-->
				</div><!--/div .full-header-color-->
				
		</header><!--/header-->
		<section id="features">
			<div class="wrapper cf">
				<div class="features-box">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon',get_template_directory_uri().'/images/features-box-icon-one.png' ) ) { 
							
								echo '<div class="features-box-icon">';
							
									echo '<a href="http://www.51huidu.com/class/kid-set/" target="_self" title="K课程"><img src="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon', get_template_directory_uri().'/images/features-box-icon-one.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" /></a>';
									
								echo '</div>';
							}
							
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' ) ) {
							
								echo '<a href="http://www.51huidu.com/class/kid-set/" target="_self" title="K课程"><h4>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' );
									
								echo '</h4></a>';	
							}
							
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
				</div><!--/div .features-box-->
				<div class="features-box">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon', get_template_directory_uri().'/images/features-box-icon-two.png' ) ) {
							
								echo '<div class="features-box-icon">';
								
									echo '<a href="http://www.51huidu.com/class/reading/" target="_self" title="绘拼绘读"><img src="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon',get_template_directory_uri().'/images/features-box-icon-two.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" /></a>';
									
								echo '</div>';	
							} 
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ) ) {
							
								echo '<a href="http://www.51huidu.com/class/reading/" target="_self" title="绘拼绘读"><h4>';
							
									echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' );
									
								echo '</h4></a>';	
							}
					
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
							
									echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
				
				</div><!--/div .features-box-->
				<div class="features-box">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon',get_template_directory_uri().'/images/features-box-three.png' ) ) { 
							
								echo '<div class="features-box-icon">';
								
									echo '<a href="http://www.51huidu.com/class/kid-set/" target="_self" title="绘本课程"><img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon', get_template_directory_uri().'/images/features-box-three.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" /></a>';
								
								echo '</div>';
								
							}	
				
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ) ) {
							
								echo '<a href="http://www.51huidu.com/class/kid-set/" target="_self" title="绘本课程"><h4>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' );
									
								echo '</h4></a>';	
							}
						
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
					
				</div><!--/div .features-box-->
			</div><!--/div .wrapper-->
		</section><!--/section #features-->


		<?php } get_footer(); ?>