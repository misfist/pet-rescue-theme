<?php

/**
 *
 * Please see single-event.php in this directory for detailed instructions on how to use and modify these templates.
 * 
 * 
 * @cmsms_package 	Pet Rescue
 * @cmsms_version 	1.1.2
 */

?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip">
		<h4 class="tribe-event-title">[[=title]]</h4>

		<div class="tribe-events-event-body">
			<div class="tribe-event-duration">
				<abbr class="tribe-events-abbr tribe-event-date-start">[[=dateDisplay]] </abbr>
			</div>
			[[ if(imageTooltipSrc.length) { ]]
			<div class="tribe-events-event-thumb">
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]" />
			</div>
			[[ } ]]
			[[ if(excerpt.length) { ]]
			[[=raw excerpt]]
			[[ } ]]
			<span class="tribe-events-arrow"></span>
		</div>
	</div>
</script>
