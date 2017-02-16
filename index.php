<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Whistle
 */

get_header(); ?>
			<div class="container">
				<div class="hero__banner">
					<div class="hero__banner-content">
						<h1>
							<span class="small brand-name">Whistle</span>
							Verktøy for PTer
						</h1>
						<p>Glemt Google Docs og Excel. Whistle er arbeidsverktøyet som underbygger <u>din</u> arbeidsflyt. Opprett gratis bruker og prøv selv!</p>
						<a href="https://app.whistle.no/new-user" class="button create-user">Opprett bruker</a>
					</div>
				</div>
			</div>
		</div><!-- / picture container -->
		
		
		<main role="main">
			<section class="section text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/user.svg" alt="" />
							<h2>Hold styr på kunder</h2>
							<p>Legger du kundene inn i løsningen, får du en ryddig oversikt.</p>
						</div>
						<div class="col-md-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/program.svg" alt="" />
							<h2>Opprett programmer</h2>
							<p>Du kan opprette programmaler for å effektivisere arbeidsflyten.</p>
						</div>
						<div class="col-md-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/share.svg" alt="" />
							<h2>Del med kunder</h2>
							<p>Du kan enkelt dele programmer med kunder.</p>
						</div>
					</div>
				</div>
			</section>
			
			<section class="section white text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Kvitt deg med Excel. Start i dag.</h2>
							<p></p>
							<a href="https://app.whistle.no/new-user" class="button create-user">Opprett gratis bruker</a>
						</div>
					</div>
				</div>
			</section>
		</main><!-- /main -->

<?php
//get_sidebar();
get_footer();
