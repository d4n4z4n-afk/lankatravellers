<?php
/*
* Display Theme menus
*/
?>
<?php
$adventure_travelling_sticky = get_theme_mod('adventure_travelling_sticky');
    $adventure_travelling_data_sticky = "false";
    if ($adventure_travelling_sticky) {
    $adventure_travelling_data_sticky = "true";
    }
    global $wp_customize;
?>

<div class="headerbox menubar <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($adventure_travelling_data_sticky); ?>">
  	<div class="container right_menu">
  		<div class="row">
  			<div class="col-lg-3 col-md-4 col-12 align-self-md-center">
		        <?php $adventure_travelling_logo_settings = get_theme_mod( 'adventure_travelling_logo_settings','Different Line');
		        if($adventure_travelling_logo_settings == 'Different Line'){ ?>
		          	<div class="logo">
		            	<?php if( has_custom_logo() ) adventure_travelling_the_custom_logo(); ?>
		            	<?php if( get_theme_mod('adventure_travelling_site_title_text',true) == 1){ ?>
		              		<?php if (is_front_page() && is_home()) : ?>
				                <h1 class="text-capitalize">
				                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				                </h1> 
				              <?php else : ?>
				                  <p class="text-capitalize site-title">
				                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				                  </p>
				             <?php endif; ?>
	            		<?php }?>
		            	<?php $adventure_travelling_description = get_bloginfo( 'description', 'display' );
		            	if ( $adventure_travelling_description || is_customize_preview() ) : ?>
		              		<?php if(get_theme_mod('adventure_travelling_site_tagline_text',false) != ''){ ?>
	               	 			<p class="site-description"><?php echo esc_html($adventure_travelling_description); ?></p>
		              		<?php }?>
	            		<?php endif; ?>
		          	</div>
		        <?php }else if($adventure_travelling_logo_settings == 'Same Line'){ ?>
		          	<div class="logo logo-same-line">
		            	<div class="row">
		              		<div class="col-lg-5 col-md-5 align-self-md-center">
		                		<?php if( has_custom_logo() ) adventure_travelling_the_custom_logo(); ?>
		              		</div>
		              		<div class="col-lg-7 col-md-7 align-self-md-center">
		                		<?php if( get_theme_mod('adventure_travelling_site_title_text',true) == 1){ ?>
		                  			<h1 class="mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                		<?php }?>
								<?php $adventure_travelling_description = get_bloginfo( 'description', 'display' );
								if ( $adventure_travelling_description || is_customize_preview() ) : ?>
									<?php if(get_theme_mod('adventure_travelling_site_tagline_text',false) != ''){ ?>
										<p class="site-description"><?php echo esc_html($adventure_travelling_description); ?></p>
									<?php }?>
								<?php endif; ?>
		              		</div>
		            	</div>
		          	</div>
		        <?php }?>
	      	</div>
	    	<div class="menubox col-lg-5 col-md-4 col-6 align-self-center">
	      		<div class="innermenubox">
			          	<div class="toggle-nav mobile-menu">
	            			<button onclick="adventure_travelling_menu_open_nav()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','tourism-guide'); ?></span></button>
	          			</div>
         	 		<div id="mySidenav" class="nav sidenav">
            			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'tourism-guide' ); ?>">
			              	<?php
			                  	wp_nav_menu( array(
				                    'theme_location' => 'primary-menu',
				                    'container_class' => 'main-menu clearfix' ,
				                    'menu_class' => 'clearfix',
				                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                    'fallback_cb' => 'wp_page_menu',
			                  	) );
			              	?>
              				<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="adventure_travelling_menu_close_nav()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','tourism-guide'); ?></span></a>
	            		</nav>
	          		</div>
          			<div class="clearfix"></div>
        		</div>
	    	</div>
	    	<div class="col-lg-1 col-md-4 col-6 align-self-center d-flex justify-content-center align-items-center">
	    		<?php if(get_theme_mod('adventure_travelling_search_icon',true) != ''){ ?>
			        <span class="search-bar">
			            <button type="button" class="open-search"><i class="fas fa-search"></i></button>
			        </span>
		    	<?php }?>
		    </div>
	      	<div class="col-lg-3 col-md-12 col-12 mt-3 mt-md-0 align-self-center">
				<div class="social-media">
					<?php						  		
		            $adventure_travelling_header_fb_new_tab = esc_attr(get_theme_mod('adventure_travelling_header_fb_new_tab','true'));
		            $adventure_travelling_header_twt_new_tab = esc_attr(get_theme_mod('adventure_travelling_header_twt_new_tab','true'));
		            $adventure_travelling_header_ins_new_tab = esc_attr(get_theme_mod('adventure_travelling_header_ins_new_tab','true'));
		            $adventure_travelling_header_ut_new_tab = esc_attr(get_theme_mod('adventure_travelling_header_ut_new_tab','true'));
		            $adventure_travelling_header_pint_new_tab = esc_attr(get_theme_mod('adventure_travelling_header_pint_new_tab','true'));
		            ?>
					<?php if( get_theme_mod( 'adventure_travelling_facebook_url' ) != '') { ?>
						<a <?php if($adventure_travelling_header_fb_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_facebook_icon','fab fa-facebook-f')); ?>"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_twitter_url' ) != '') { ?>
						<a <?php if($adventure_travelling_header_twt_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_twitter_icon','fab fa-twitter')); ?>"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_instagram_url' ) != '') { ?>
						<a <?php if($adventure_travelling_header_ins_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_instagram_icon','fab fa-instagram')); ?>"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_youtube_url' ) != '') { ?>
						<a <?php if($adventure_travelling_header_ut_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_youtube_icon','fab fa-youtube')); ?>"></i></a>
					<?php } ?>
					<?php if( get_theme_mod( 'adventure_travelling_pint_url' ) != '') { ?>
						<a <?php if($adventure_travelling_header_pint_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_pint_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('adventure_travelling_pint_icon','fab fa-pinterest')); ?>"></i></a>
					<?php } ?>
				</div>
			</div>
    	</div>
	    <div class="search-outer">
	        <div class="inner_searchbox w-100 h-100">
	            <?php get_search_form(); ?>
	        </div>
	        <button type="button" class="search-close"><?php esc_html_e('CLOSE', 'tourism-guide'); ?></button>
	    </div>
  	</div>
</div>