<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.0.0
 * 
 * Blog Post Full Width Chat Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();

?>

<!--_________________________ Start Chat Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	echo '<div class="cmsms_post_info">' . 
		'<span class="cmsms_post_format_img cmsms_theme_icon_star"></span>';
		
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
	
	
	cmsms_post_format_chat(); 
?>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

