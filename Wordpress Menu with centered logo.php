<div class="main-nav-wrapper">
	<nav id="main-nav" <?php echo ( $live_search_data_skin ); ?> class="<?php echo esc_attr( $main_menu_class ) ?>" <?php echo ( $line_height ) ?> aria-label="<?php esc_html_e( 'Primary Navigation', TIELABS_TEXTDOMAIN ); ?>">
		<div class="container">

			<div class="main-menu-wrapper">

				<div id="menu-components-wrap">

					

					<div class="main-menu main-menu-wrap shloopmenu">
						<?php

							$menu_args   = array(
								'menu'            => 'lefthome',
								'container_id'    => 'lefter-nav-menu',
								'container_class' => 'left-menu',
								'theme_location'  => 'lefthome',
								'fallback_cb'     => false,
								'items_wrap'      => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
							);

							// Check if the Built-in theme mega menu is enabled
							if( ! tie_get_option( 'disable_mega_menu' ) ){
								$menu_args['walker'] = new TIELABS_MEGA_MENU();
							}

							wp_nav_menu( $menu_args );

						?>
						
						<?php
					if( $header_layout == 1 ){ ?>
						<div class="header-layout-1-logo" <?php echo ( $logo_width ) ?>>
							<?php

								do_action( 'TieLabs/Logo/before' );

								tie_logo();

								do_action( 'TieLabs/Logo/after' );
							?>
						</div>
						<?php
					}
				?>

						
						<?php

							$menu_args   = array(
								'menu'            => 'righthome',
								'container_id'    => 'righter-nav-menu',
								'container_class' => 'right-menu',
								'theme_location'  => 'righthome',
								'fallback_cb'     => false,
								'items_wrap'      => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
							);

							// Check if the Built-in theme mega menu is enabled
							if( ! tie_get_option( 'disable_mega_menu' ) ){
								$menu_args['walker'] = new TIELABS_MEGA_MENU();
							}

							wp_nav_menu( $menu_args );

						?>
					</div><!-- .main-menu.tie-alignleft /-->

					<?php

						do_action( 'TieLabs/after_main_menu' );

						// Get components template
						TIELABS_HELPER::get_template_part( 'templates/header/components', '', array( 'components_id' => 'main-nav' ) );

						do_action( 'TieLabs/after_main_components' );

					?>

				</div><!-- #menu-components-wrap /-->
			</div><!-- .main-menu-wrapper /-->
		</div><!-- .container /-->
	</nav><!-- #main-nav /-->
</div><!-- .main-nav-wrapper /-->