<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.0.0
 * 
 * Posts Slider Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_post_metadata;


$cmsms_metadata = explode(',', $cmsms_post_metadata);

$title = in_array('title', $cmsms_metadata) ? true : false;
$excerpt = in_array('excerpt', $cmsms_metadata) ? true : false;
$date = in_array('date', $cmsms_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_metadata))) ? true : false;
$author = in_array('author', $cmsms_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_metadata))) ? true : false;
$likes = in_array('likes', $cmsms_metadata) ? true : false;
$more = in_array('more', $cmsms_metadata) ? true : false;


$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));


?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_slider_post_cont">
	<?php 
		if (!post_password_required()) {
			cmsms_thumb_rollover(get_the_ID(), 'square-thumb', false, true, true, $cmsms_post_images, false, false, false, false, true);
		}
		

		echo '<div class="cmsms_slider_post_cont_wrap">';
		
			$date ? cmsms_slider_post_date('post') : '';
			
			$title ? cmsms_slider_post_heading(get_the_ID(), 'post', 'h5') : '';
			
			$excerpt ? cmsms_slider_post_exc_cont('post') : '';
			
			
			if ($author || $categories) {
				echo '<div class="cmsms_slider_post_cont_info entry-meta">';
				
					$author ? cmsms_slider_post_author('post') : '';
					
					$categories ? cmsms_slider_post_category('post') : '';
					
				echo '</div>';
			}
			
			
			if ($likes || $comments) {
				echo '<footer class="cmsms_slider_post_footer entry-meta">' . 
					'<div class="cmsms_slider_post_meta_info">';
					
						$likes ? cmsms_slider_post_like('post') : '';
						
						$comments ? cmsms_slider_post_comments('post') : '';
					
					echo '</div>' . 
				'</footer>';
			}
			
			
			$more ? cmsms_slider_post_more(get_the_ID()) : '';
		
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

