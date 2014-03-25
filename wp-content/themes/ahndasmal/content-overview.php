<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php 
	$catInfo = get_cat_info_by_post_id(get_the_ID());;
	$thumbnailInfo = get_thumbnail_info(get_the_ID());
?>
	<article id="post-<?php the_ID(); ?>" data-effeckt='fly' <?php post_class('col-xs-6 col-sm-4 col-md-3 articlePreview'); ?>  title="<?php the_title(); ?>">
			<div class="previewContent boxLayout">
				<a href="<?php the_permalink(); ?>">
					<div class="previewTitle"><?php the_title(); ?></div>
					<!-- get_media_image(the_content()); -->
					<div class="thumbnailContainer <?php echo $thumbnailInfo['class'];?>" style="background-image: url(<?php echo $thumbnailInfo['url']; ?>)">
						
					</div>
					<a href="<?php echo $catInfo['link'];?>" title="<?php echo $catInfo['name'];?>">
						<div class="categoryName">
							<?php echo $catInfo['name'];?>
						</div>
					</a>
				</a>
			</div>
	</article><!-- #post -->
