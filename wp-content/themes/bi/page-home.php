<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bi
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<section id="vid-hero">
				<div class="hero-text">
					<!-- <h3>This is Brodbeck Interactive</h3> -->
					<h2>Design and development of custom web experiences for <a href="#">businesses</a> and <a href="#">agencies</a> like yours.</h2>
					<a class="scroll-down" href="#">See for yourself <svg class="hero-down bounce" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.84 16.9"><defs><style>.cls-1{fill:#282720;}</style></defs><title>down-arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="9.85 11.6 8.96 10.78 5.52 14.48 5.52 0 4.32 0 4.32 14.48 0.88 10.78 0 11.6 4.92 16.9 9.85 11.6"/></g></g></svg></a>
				</div>
				<video autoplay muted loop id="vid">
				  <source src="/wp-content/themes/bi/dist/images/video-bkg-compressed.mp4" type="video/mp4">
				</video>
			</section>

			<section id="samples" class="white offest-left">
				<img src="/wp-content/themes/bi/dist/images/project-placeholder.png" width="100%" height="auto"/>
				<div class="row">

				</div>
			</section>

			<section id="clients" class="offest-left last">
				<img style="mix-blend-mode: multiply;" src="/wp-content/themes/bi/dist/images/clients.png" />
				<div class="row">

				</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
