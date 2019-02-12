<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a href="#" >
		<svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.35 34.11">
			<title>Brodbeck Interactive Logo</title>
			<g id="Layer_2" data-name="Layer 2">
				<g id="Layer_1-2" data-name="Layer 1">
					<path class="b" d="M31,16.76A8.53,8.53,0,0,0,35.43,9c0-5.11-4.48-9-10.28-9H0V.61C3.29,2.32,3.29,3.53,3.29,5L.19,34.11H26.73c5.94,0,10.62-3.95,10.62-9.41C37.35,20.22,33.6,17.59,31,16.76Z"/>
					<polygon class="menu-bar-top menu-bar" points="25.87 7.01 10.57 7.01 10.23 10.23 25.52 10.23 25.87 7.01"/>
					<polygon class="menu-bar-middle menu-bar" points="22.72 14.99 9.71 14.99 9.37 18.2 22.38 18.2 22.72 14.99"/>
					<polygon class="menu-bar-bottom menu-bar" points="27.36 22.96 8.86 22.96 8.51 26.18 27.02 26.18 27.36 22.96"/>
				</g>
			</g>
		</svg>
	</a>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bi' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row flex-center">
				<div class="col-md-4 offset-md-2 menu-col">
					<nav id="site-navigation" class="main-navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bi' ); ?></button> -->
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-md-4 menu-col">
					<p class="nav-text">Serving Philadelphia and beyond since 2013.</p>
					<div class="sep"></div>
					<a class="email" href="tel:717-870-0535">717.870.0535</a>
					<a class="email" href="mailto:hello@brodbeckinteractive.com">hello@brodbeckinteractive.com</a>
					<p><small>&copy; 2019 Brodbeck Interactive, LLC</small></p>
				</div>
			</div>

		
	</header><!-- #masthead -->
	<div id="progress" data-0="height:0%;" data-end="height:100%;"></div>
	<svg class="logo-type" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.42 10.59"><defs><style>.logo-type-fill{fill:#231f20;}</style></defs><title>logo-type</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="logo-type-fill" d="M5.19,5.25c2,0,2.89,1.19,2.89,2.38,0,2.09-1.49,2.82-3.64,2.82H0V10.3c.78-.4.78-.69.78-1V1.19c0-.35,0-.64-.78-1V0H4.66c1.78,0,3,.73,3,2.7A2.32,2.32,0,0,1,5.19,5.18ZM3.82,9.52c1.26,0,1.88-.31,1.88-1.89S5.05,5.7,3.79,5.7H3.54V4.77h.22c1,0,1.51-.37,1.51-1.94S4.66.93,3.66.93H3.11V9.52Z"/><path class="logo-type-fill" d="M12.36,3.4a1.87,1.87,0,0,1,1.15-.35,3.55,3.55,0,0,1,.9.13l-.67,1.9A3.73,3.73,0,0,0,13,5a2.22,2.22,0,0,0-1.46.51V9.23c0,.38,0,.67,1,1.07v.15H8.69V10.3c.75-.4.75-.69.75-1.07V4.69a1.26,1.26,0,0,0-.75-1.35V3.19h2.83V5h0Z"/><path class="logo-type-fill" d="M18.09,3.05c2.48,0,3.6,1.49,3.6,3.77s-1.12,3.77-3.6,3.77-3.6-1.49-3.6-3.77S15.59,3.05,18.09,3.05Zm0,6.76c1,0,1.41-.74,1.41-2.86s-.43-3.12-1.41-3.12-1.41.74-1.41,2.86S17.09,9.81,18.09,9.81Z"/><path class="logo-type-fill" d="M29.43,9.26c0,.35,0,.64.76,1v.15H27.43l-.07-1.13h0l-1.22,1a2.24,2.24,0,0,1-1.06.23c-1.74,0-2.58-1.49-2.58-3.77,0-2.61,1.19-3.77,2.93-3.77a2.32,2.32,0,0,1,1.67.58v.22a2.28,2.28,0,0,0-.76-.14c-1.19,0-1.65,1-1.65,3s.48,2.53,1.39,2.53a2.27,2.27,0,0,0,1.31-.44V1.5A1.26,1.26,0,0,0,26.6.15V0h2.83Z"/><path class="logo-type-fill" d="M34.39,3.28a2.25,2.25,0,0,1,1.07-.23c1.67,0,2.59,1.36,2.59,3.63,0,2.67-1.35,3.91-3.22,3.91a3.8,3.8,0,0,1-1.95-.53l-1.65.53h-.15V1.5A1.25,1.25,0,0,0,30.31.15V0h2.83V4.32h0ZM33.14,9.45a3.2,3.2,0,0,0,1.15.23c1.2,0,1.55-1.18,1.55-2.86,0-1.87-.48-2.41-1.41-2.41a2.25,2.25,0,0,0-1.29.44Z"/><path class="logo-type-fill" d="M45.31,6.7H41c.09,1.44.81,2.54,2.29,2.54a3.24,3.24,0,0,0,1.87-.64v.15a2.62,2.62,0,0,1-2.81,1.85c-2.25,0-3.54-1.46-3.54-3.74a3.57,3.57,0,0,1,3.84-3.8,2.52,2.52,0,0,1,2.78,2.73A6.36,6.36,0,0,1,45.31,6.7Zm-1.78-.84a3.2,3.2,0,0,0,0-.52c0-1-.46-1.51-1.13-1.51-.83,0-1.41.63-1.48,2.29Z"/><path class="logo-type-fill" d="M51.64,4.86a2.39,2.39,0,0,0-1.72-1c-.9,0-1.68.58-1.68,2.58,0,1.57.73,2.8,2.29,2.8a3.3,3.3,0,0,0,1.88-.64v.15a2.64,2.64,0,0,1-2.82,1.85c-2.25,0-3.54-1.46-3.54-3.74a3.62,3.62,0,0,1,4-3.8,8.05,8.05,0,0,1,2.26.29l-.58,1.49Z"/><path class="logo-type-fill" d="M55.45,9.26c0,.35,0,.64.77,1v.15H52.63V10.3c.76-.4.76-.69.76-1V1.5A1.26,1.26,0,0,0,52.63.15V0h2.82Zm4.19-.35A2.92,2.92,0,0,0,61,10.3v.15H58.08L55.74,6.91l2.34-2.53A.49.49,0,0,0,58.26,4c0-.24-.24-.45-.85-.67V3.19h3.25v.15A6.06,6.06,0,0,0,59.11,4.5L57.7,5.8Z"/><path class="logo-type-fill" d="M67.3,9.26c0,.35,0,.64.8,1v.15H64.19V10.3c.79-.4.79-.69.79-1V1.19c0-.35,0-.64-.79-1V0H68.1V.15c-.8.4-.8.69-.8,1Z"/><path class="logo-type-fill" d="M72.85,3.38a2.46,2.46,0,0,1,1.22-.33,1.89,1.89,0,0,1,2.08,2.12V9.26c0,.35,0,.64.75,1v.15H73.48V10.3c.61-.4.61-.69.61-1V5.6c0-.61-.38-.87-1-.87a2.55,2.55,0,0,0-1.52.48V9.26c0,.35,0,.64.75,1v.15H68.78V10.3c.75-.4.75-.69.75-1V4.69a1.26,1.26,0,0,0-.75-1.35V3.19h2.83V4.66h0Z"/><path class="logo-type-fill" d="M79.93,8.91c0,.94.38,1.05,1.68,1v.14a4.45,4.45,0,0,1-2,.52c-1.06,0-1.73-.45-1.73-1.68v-5h-.7V3.73l1-.67,1.6-1.32h.14V3.19H81.6v.68H79.93Z"/><path class="logo-type-fill" d="M88.43,6.7H84.08c.09,1.44.81,2.54,2.29,2.54a3.24,3.24,0,0,0,1.87-.64v.15a2.62,2.62,0,0,1-2.81,1.85c-2.25,0-3.54-1.46-3.54-3.74a3.57,3.57,0,0,1,3.84-3.8,2.52,2.52,0,0,1,2.78,2.73A6.36,6.36,0,0,1,88.43,6.7Zm-1.78-.84a3.2,3.2,0,0,0,0-.52c0-1-.46-1.51-1.13-1.51-.83,0-1.41.63-1.48,2.29Z"/><path class="logo-type-fill" d="M92.71,3.4a1.87,1.87,0,0,1,1.15-.35,3.55,3.55,0,0,1,.9.13l-.67,1.9A3.73,3.73,0,0,0,93.33,5a2.22,2.22,0,0,0-1.46.51V9.23c0,.38,0,.67,1,1.07v.15H89V10.3c.75-.4.75-.69.75-1.07V4.69A1.26,1.26,0,0,0,89,3.34V3.19h2.83V5h0Z"/><path class="logo-type-fill" d="M95.7,3.45A7.24,7.24,0,0,1,98,3.05c1.73,0,2.92.59,2.92,2.26v4c0,.35,0,.64.75,1v.15H98.89l-.07-1.21-.89,1a2.22,2.22,0,0,1-1.29.34,1.85,1.85,0,0,1-2-2,1.88,1.88,0,0,1,1.7-1.84l2.43-.5V5.69a1.09,1.09,0,0,0-1.24-1.22,6.21,6.21,0,0,0-2.35.43l-.06-.05Zm1.67,3.83a.79.79,0,0,0-.48.82.89.89,0,0,0,.94,1,1.88,1.88,0,0,0,1-.34v-2Z"/><path class="logo-type-fill" d="M107.68,4.86a2.35,2.35,0,0,0-1.71-1c-.9,0-1.69.58-1.69,2.58,0,1.57.73,2.8,2.3,2.8a3.29,3.29,0,0,0,1.87-.64v.15a2.64,2.64,0,0,1-2.82,1.85c-2.25,0-3.54-1.46-3.54-3.74a3.62,3.62,0,0,1,4-3.8,8,8,0,0,1,2.26.29l-.58,1.49Z"/><path class="logo-type-fill" d="M111.43,8.91c0,.94.38,1.05,1.69,1v.14a4.53,4.53,0,0,1-2,.52c-1.06,0-1.73-.45-1.73-1.68v-5h-.69V3.73l1-.67,1.6-1.32h.14V3.19h1.67v.68h-1.67Z"/><path class="logo-type-fill" d="M116.21,9.26c0,.35,0,.64.76,1v.15h-3.58V10.3c.75-.4.75-.69.75-1V4.69a1.26,1.26,0,0,0-.75-1.35V3.19h2.82Zm-1-9.23a1.13,1.13,0,1,1-1.26,1.12A1.13,1.13,0,0,1,115.19,0Z"/><path class="logo-type-fill" d="M124.84,3.34a2.53,2.53,0,0,0-.89,1.3l-2.1,5.88h-1.76l-2.17-5.79a2.43,2.43,0,0,0-1-1.39V3.19h3.69v.15c-.48.17-.64.35-.64.59a1.57,1.57,0,0,0,.13.57l1.54,4.28,1.22-4.06a2.14,2.14,0,0,0,.1-.58c0-.34-.18-.61-.71-.8V3.19h2.54Z"/><path class="logo-type-fill" d="M131.35,6.7H127c.08,1.44.81,2.54,2.29,2.54a3.26,3.26,0,0,0,1.87-.64v.15a2.63,2.63,0,0,1-2.81,1.85c-2.25,0-3.55-1.46-3.55-3.74a3.58,3.58,0,0,1,3.85-3.8,2.52,2.52,0,0,1,2.77,2.73A8,8,0,0,1,131.35,6.7Zm-1.79-.84a3.26,3.26,0,0,0,.05-.52c0-1-.47-1.51-1.13-1.51-.83,0-1.41.63-1.48,2.29Z"/></g></g></svg>
	<div id="social-icons">
		<a href="#"><img src="/wp-content/themes/bi/dist/images/facebook.svg"/></a>
		<a href="#"><img src="/wp-content/themes/bi/dist/images/insta.svg"/></a>
	</div>

	<div id="content" class="site-content">
