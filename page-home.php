<?php /* Template Name: Home page */


get_header(); ?>


<?php 
while ( have_posts() ) : the_post(); 
$postId = get_the_ID();
$banner_heading = get_post_meta( $postId, "banner_heading", true );
$banner_text = get_post_meta( $postId, "banner_text", true );
$banner_button_text = get_post_meta( $postId, "banner_button_text", true );
$cta_row = get_post_meta( $postId, "cta_row", true );
?>

<div class="container">
		<div class="hero__banner">
			<div class="hero__banner-content">
				<h1>
					<span class="small brand-name">Whistle</span>
					<?php echo ($banner_heading) ? $banner_heading : "Verktøy for PTer"; ?>
				</h1>
				<p><?php echo ($banner_text) ? $banner_text : "Glemt Google Docs og Excel. Whistle er arbeidsverktøyet som underbygger <u>din</u> arbeidsflyt. Opprett gratis bruker og prøv selv!"; ?></p>
				<a href="https://app.whistle.no/new-user" class="button create-user">
					<?php echo ($banner_button_text) ? $banner_button_text : "Opprett bruker"; ?>
				</a>
			</div>
		</div>
	</div>
</div><!-- / picture container -->


<main role="main">
	<section class="section text-center">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
	
	<?php if($cta_row) { ?>
		<section class="section white text-center">
			<div class="container">
				<?php echo ($cta_row) ? $cta_row : ""; ?>
			</div>
		</section>
	<?php } ?>
</main><!-- /main -->
<?php endwhile; ?>

<?php
get_footer();