<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zytrax_bar
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1> Nos raquette</h1>
				<p> fabriquer par des profetionnel</p>
				
				
				
				<?php
				
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="ingredients-wrapper">
			<?php
			/* Start the Loop */
			
			
			
			while ( have_posts() ) :
				the_post();
?>
			<article class="ingredients-card">
                <?php the_post_thumbnail(); ?>
                <div class="ingredients_card_content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">En savoir +</a>
                </div>
            </article>
				
<?php
			endwhile;

			the_posts_navigation(); ?>
			</section>

			<?php else :

get_template_part( 'template-parts/content', 'none' );

endif;
?>

	</main><!-- #main -->

<?php

get_footer();
