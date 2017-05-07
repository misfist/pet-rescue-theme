<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Blog Page Default Aside Post Format Template
 * Created by CMSMasters
 * 
 */
 
 
global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);

$date = (in_array('date', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsms_post_aside_text = get_post_meta(get_the_ID(), 'cmsms_post_aside_text', true);

?>

<!--_________________________ Start Aside Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
	<div class="cmsms_post_info entry-meta">
		<?php $date ? cmsms_post_date('page') : ''; ?>
	
		<span class="cmsms_post_format_img <?php 
			if (is_sticky()) {
				echo ' cmsms_theme_icon_attach';
			} else {
				echo ' cmsms_theme_icon_megaphone';
			}
		?>"></span>
	</div>
	<div class="cmsms_post_cont">
	<?php 
		if (!post_password_required()) {
			if ($cmsms_post_aside_text != '') {
				echo '<div class="cmsms_post_content">' . 
					'<div class="cmsms_post_content_aligner"></div>' . 
					'<div class="entry-title entry-content">' . $cmsms_post_aside_text . '</div>' . 
				'</div>';
			} else {
				echo '<div class="cmsms_post_content">' . 
					'<div class="cmsms_post_content_aligner"></div>' . 
					'<div class="entry-title entry-content">' . theme_excerpt(55, false) . '</div>' . 
				'</div>';
			}
		} else {
			echo '<p class="cmsms_post_content">' . esc_html__('There is no excerpt because this is a protected post.', 'pet-rescue') . '</p>';
		}
		
		if ($author || $categories || $tags) {
			echo '<div class="cmsms_post_cont_info entry-meta">';
			
				$author ? cmsms_post_author('page') : '';
				
				$categories ? cmsms_post_category('page') : '';
				
				$tags ? cmsms_post_tags('page') : '';
				
			echo '</div>';
		}
		
		if ($likes || $comments || $more) {
			echo '<footer class="cmsms_post_footer entry-meta">';
			
				if ($likes || $comments) {
					echo '<div class="cmsms_post_meta_info">';
					
						$likes ? cmsms_post_like('page') : '';
						
						$comments ? cmsms_post_comments('page') : '';
					
					echo '</div>';
				}
			
				$more ? cmsms_post_more(get_the_ID()) : '';
		
			echo '</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Aside Article _________________________ -->

