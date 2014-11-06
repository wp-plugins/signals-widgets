<?php

/**
 * About panel view for the plugin
 *
 * @link       http://www.69signals.com
 * @since      0.1
 * @package    Signals_Widgets
 */

require_once 'header.php';

?>

	<div class="signals-body">
		<div class="signals-tile" style="display: block !important">
			<div class="signals-single-section">
				<p><?php _e( 'Widgets by 69signals is a plugin which provides with the most essential widgets for the modern blog and we will make sure to update the plugin over time with more widgets & even more awesomeness. The current pack contains 8 widgets which are listed below.', 'signals' ); ?></p>

				<ul>
					<li><strong>Ads</strong></li>
					<li><strong>Personal</strong></li>
					<li><strong>Subscribe</strong></li>
					<li><strong>Video</strong></li>
					<li><strong>Flickr</strong></li>
					<li><strong>Dribbble</strong></li>
					<li><strong>Social</strong></li>
					<li><strong>Instagram</strong></li>
				</ul><br/>

				<p><?php _e( 'Now that you have activated this plugin, all the widgets will appear in the Widgets section of your WordPress panel. Simply select the widget you would like to use and you are done. You don\'t have to configure anything. It\'s that bloody simple.', 'signals' ); ?></p>
				<p><?php _e( 'If you like using our plugin, then do us a favour by spreading word about it. Do share about us on your favourite social media and we promise to deliver more awesome products in future.', 'signals' ); ?></p>

				<div class="signals-share signals-clearfix">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.69signals.com" data-via="69signals" data-hashtags="wordpress">Tweet</a>

					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2F69Signals&width&layout=standard&action=like&show_faces=false&share=true&height=35&appId=1424307684475683"></iframe>

					<a href="http://www.reddit.com/submit" onclick="window.location = 'http://www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="http://www.reddit.com/static/spreddit7.gif" alt="submit to reddit" border="0" /> </a>
				</div>
			</div><!-- .signals-single-section -->
		</div><!-- .signals-tile -->
	</div><!-- .signals-body -->

<?php

require_once 'footer.php';
