<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Posts Slider Aside Post Format Template
 * Created by CMSMasters
 * 
 */
 
 
global $cmsms_post_metadata;


$cmsms_metadata = explode(',', $cmsms_post_metadata);

$date = in_array('date', $cmsms_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_metadata))) ? true : false;
$author = in_array('author', $cmsms_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_metadata))) ? true : false;
$likes = in_array('likes', $cmsms_metadata) ? true : false;
$more = in_array('more', $cmsms_metadata) ? true : false;


$cmsms_post_aside_text = get_post_meta(get_the_ID(), 'cmsms_post_aside_text', true);

?>

<!--_________________________ Start Aside Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_slider_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			cmsms_thumb_rollover(get_the_ID(), 'square-thumb', false, true, true, false, false, false, false, false, true);
		}
		

		echo '<div class="cmsms_slider_post_cont_wrap">';
		
			$date ? cmsms_slider_post_date('post') : '';
			
			
			if (!post_password_required()) {
				if ($cmsms_post_aside_text != '') {
					echo '<div class="cmsms_slider_post_content">' . 
						'<div class="entry-title entry-content">' . $cmsms_post_aside_text . '</div>' . 
					'</div>';
				} else {
					echo '<div class="cmsms_slider_post_content">' . 
						'<div class="entry-title entry-content">' . theme_excerpt(55, false) . '</div>' . 
					'</div>';
				}
			} else {
				echo '<p class="cmsms_slider_post_content">' . esc_html__('There is no excerpt because this is a protected post.', 'pet-rescue') . '</p>';
			}
			
			
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
<!--_________________________ Finish Aside Article _________________________ -->

