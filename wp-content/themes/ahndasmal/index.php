<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	
	<div id="primary" class="site-content-index">
		<div class="pageHead">
            <div class="headlineBottom"></div>            
            <div class="pageHeadline">
                Letzte Posts
            </div>
            <div class="actionBar">
                <div class="actionContainer" id="showCategories">
                    Zeige Kategorien
                </div>
            </div>
        </div>
		<div id="content" role="main" class="article">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'overview' ); ?>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>