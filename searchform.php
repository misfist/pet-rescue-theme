<?php
/**
 * @package 	WordPress
 * @subpackage 	Pet Rescue
 * @version 	1.1.7
 * 
 * Search Form Template
 * Created by CMSMasters
 * 
 */
?>

<div class="search_bar_wrap">
	<form method="get" action="<?php echo esc_url(home_url()); ?>">
		<p>
			<input name="s" placeholder="<?php esc_attr_e('enter keywords', 'pet-rescue'); ?>" value="" type="text" />
			<button type="submit" class="cmsms_theme_icon_search"></button>
		</p>
	</form>
</div>

