<?php
/* 
* Template Name: musik
*/ 
get_header(); ?>

	<div id="primary" class="site-content music">
		<div id="content" role="main">
			<div class="pageHead">
                <div class="headlineBottom"></div>                    
                <div class="pageHeadline">
                    Musik
                </div>
            </div>

			<div class="categorySitesBox">
 				<?php 
					$categoriesMusic = get_categories('child_of=17');

					foreach ($categoriesMusic as $category) {
						$categoryLink = get_category_link($category->cat_ID);
						echo '<a href="'.$categoryLink.'"><div class="link-box boxLayout">'.$category->name.'</div></a>';
					}
 				?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>