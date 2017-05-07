<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Posts Slider Link Post Format Template
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


$cmsms_post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);

$cmsms_post_link_address = get_post_meta(get_the_ID(), 'cmsms_post_link_address', true);

if ($cmsms_post_link_text == '') {
	$cmsms_post_link_text = esc_html__('Enter link text', 'pet-rescue');
}

if ($cmsms_post_link_address == '') {
	$cmsms_post_link_address = '#';
}

?>

<!--_________________________ Start Link Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_slider_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			cmsms_thumb_rollover(get_the_ID(), 'square-thumb', false, true, true, false, false, false, false, false, true);
		}
		
		
		echo '<div class="cmsms_slider_post_cont_wrap">';
		
			$date ? cmsms_slider_post_date('post') : '';
			
			echo '<header class="cmsms_slider_post_header entry-header">';
			
				if (!post_password_required()) {
					echo '<h5 class="cmsms_slider_post_title entry-title">' . 
						'<a href="' . esc_url($cmsms_post_link_address) . '" target="_blank">' . $cmsms_post_link_text . '</a>' . 
					'</h5>' . 
					'<p class="cmsms_slider_post_subtitle">' . $cmsms_post_link_address . '</p>';
				} else {
					echo '<h5 class="cmsms_slider_post_title entry-title">' . $cmsms_post_link_text . '</h5>';
				}
			
			echo '</header>';
			
			
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
<!--_________________________ Finish Link Article _________________________ -->

