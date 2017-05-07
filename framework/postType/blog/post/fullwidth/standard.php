<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Blog Post Full Width Standard Post Format Template
 * Created by CMSMasters
 * 
 */
 
 
$cmsms_option = cmsms_get_global_options();


$cmsms_post_title = get_post_meta(get_the_ID(), 'cmsms_post_title', true);

$cmsms_post_image_show = get_post_meta(get_the_ID(), 'cmsms_post_image_show', true);

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	echo '<div class="cmsms_post_info">' . 
		'<span class="cmsms_post_format_img cmsms_theme_icon_desktop"></span>';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_date']) {
			cmsms_post_date('post');
		}
		
		
		if ($cmsms_post_title == 'true') {
			echo '<header class="cmsms_post_header entry-header">';
				cmsms_post_title_nolink(get_the_ID(), 'h3');
			echo '</header>';
		}
		
		
		if (
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_author'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] || 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag']
		) {
			echo '<div class="cmsms_post_cont_info">';
			
				cmsms_post_author('post');
				
				cmsms_post_category('post');
				
				cmsms_post_tags('post');
			
			echo '</div>';
		}
	echo '</div>';
	
	
	if (!post_password_required() && has_post_thumbnail() && $cmsms_post_image_show != 'true') {
		cmsms_thumb(get_the_ID(), 'full-masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, false);
	}
	
	
	echo '<div class="cmsms_post_content entry-content">';
		
		the_content();
		
		wp_link_pages(array( 
			'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'pet-rescue') . ':</strong>', 
			'after' => '</div>', 
			'link_before' => ' [ ', 
			'link_after' => ' ] ' 
		));
		
		echo '<div class="cl"></div>' . 
	'</div>';
	?>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

