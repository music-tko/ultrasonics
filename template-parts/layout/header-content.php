<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ultrasonics
 */

?>

<header id="masthead">

	<div class="pr-40 bg-black text-white hidden lg:block">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'subheader',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex p-2 gap-8 justify-end " aria-label="submenu">%3$s</ul>',
				)
			);
		?>
	</div>

	<nav id="site-navigation" class=" justify-around items-center shadow-lg hidden lg:flex" aria-label="<?php esc_attr_e( 'Main Navigation', 'ultrasonics' ); ?>">
		<img src="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2023/09/logo.png'); ?>" class="w-80" alt="Logo">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s flex gap-8 uppercase" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
			<?php get_template_part( 'template-parts/layout/custom-searchform' ); ?>
	</nav><!-- #site-navigation -->

	<div class="flex justify-between items-center shadow-lg p-4 md:hidden">
		<a id="cart-menu-button" href="#" class="text-white relative">
			<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M20.202 6.7089C20.0364 6.42199 19.7993 6.1829 19.5138 6.01494C19.2282 5.84698 18.904 5.7559 18.5728 5.75056H6.30616L5.75033 3.58473C5.69417 3.37566 5.56888 3.19176 5.39486 3.06299C5.22084 2.93421 5.00835 2.86815 4.79199 2.87556H2.87533C2.62116 2.87556 2.3774 2.97653 2.19768 3.15625C2.01796 3.33597 1.91699 3.57973 1.91699 3.8339C1.91699 4.08806 2.01796 4.33182 2.19768 4.51154C2.3774 4.69126 2.62116 4.79223 2.87533 4.79223H4.06366L6.70866 14.6247C6.76482 14.8338 6.89011 15.0177 7.06413 15.1465C7.23814 15.2752 7.45064 15.3413 7.66699 15.3339H16.292C16.469 15.3334 16.6423 15.2838 16.7929 15.1908C16.9434 15.0978 17.0653 14.9649 17.1449 14.8068L20.2882 8.52015C20.4245 8.23458 20.4879 7.91972 20.4729 7.60368C20.4578 7.28763 20.3648 6.98023 20.202 6.7089ZM15.6978 13.4172H8.39533L6.83324 7.66723H18.5728L15.6978 13.4172ZM7.1875 20.125C7.98141 20.125 8.625 19.4814 8.625 18.6875C8.625 17.8936 7.98141 17.25 7.1875 17.25C6.39359 17.25 5.75 17.8936 5.75 18.6875C5.75 19.4814 6.39359 20.125 7.1875 20.125ZM18.208 18.6875C18.208 19.4814 17.5644 20.125 16.7705 20.125C15.9766 20.125 15.333 19.4814 15.333 18.6875C15.333 17.8936 15.9766 17.25 16.7705 17.25C17.5644 17.25 18.208 17.8936 18.208 18.6875Z" fill="#221F1F"/>
			</svg>
			<div class="cart-counter w-4 h-4 rounded-full bg-red-600 md:hidden absolute -top-3 -right-2 text-xs text-center"></div>
		</a>
		<button id="mobile-menu-button">
			<svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
				<rect x="38" width="38" height="38" rx="19" transform="rotate(90 38 0)" fill="#F6F6F6"/>
				<rect x="9" y="9" width="20" height="3" rx="1.5" fill="#363895"/>
				<rect x="9" y="17" width="20" height="3" rx="1.5" fill="#363895"/>
				<rect x="15.666" y="25" width="13.3333" height="3" rx="1.5" fill="#363895"/>
			</svg>
		</button>
	</div>
	<div id="mobile-menu" class="hidden absolute z-5 bg-white w-full shadow-xl">
			<?php
			wp_nav_menu(
					array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'mobile-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-col gap-4 px-6" aria-label="submenu">%3$s</ul>',
					)
			);
			?>
			<?php get_template_part( 'template-parts/layout/custom-searchform' ); ?>
		</div>
</header>
