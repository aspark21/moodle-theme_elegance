<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The Elegance theme is built upon  Bootstrapbase 3 (non-core).
 *
 * @package    theme
 * @subpackage theme_elegance
 * @author     Julian (@moodleman) Ridden
 * @author     Based on code originally written by G J Bernard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;


$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
$haslinkedin    = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
$hasyoutube     = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
$hasflickr      = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
$hasvk          = (empty($PAGE->theme->settings->vk)) ? false : $PAGE->theme->settings->vk;
$haspinterest   = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
$hasinstagram   = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
$hasskype       = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
$haswebsite     = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;
$hasblog     = (empty($PAGE->theme->settings->blog)) ? false : $PAGE->theme->settings->blog;
$hasvimeo     = (empty($PAGE->theme->settings->vimeo)) ? false : $PAGE->theme->settings->vimeo;
$hastumblr     = (empty($PAGE->theme->settings->tumblr)) ? false : $PAGE->theme->settings->tumblr;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasfacebook || $hastwitter || $hasgoogleplus || $hasflickr || $hasinstagram || $hasvk || $haslinkedin || $haspinterest || $hasskype || $haslinkedin || $haswebsite || $hasyoutube ) ? true : false;

?>
<div class="container">
	<div class="row">
		<div id="course-footer">
			<?php echo $OUTPUT->course_footer(); ?>	
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<?php echo $OUTPUT->home_link(); ?>
   			
			<?php
			if ($hascopyright) {
				echo '<p class="copy">&copy; Copyright '.date("Y").' by '.$hascopyright.'</p>';
   			} ?>
   			
   			<?php if ($hasfootnote) {
				echo  '<div class="footnote">'. $hasfootnote. '</div>';
   			} ?>
   			
		</div>
		
		<div class="col-lg-6 pull-right">
			<?php echo $OUTPUT->login_info();
			if ($hassocialnetworks) {
				echo '<ul class="socials unstyled">';
					if ($hasblog) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasblog.'" class="socialicon blog">';
						echo '<i class="fa fa-bookmark fa-inverse"></i>';
							echo '<span class="sr-only">Read our Blog</span>';
						echo '</button>';
					}
					
					if ($haswebsite) {
						echo '<button type="button" ONCLICK="window.location.href='.$haswebsite.'" class="socialicon website">';
						echo '<i class="fa fa-globe fa-inverse"></i>';
							echo '<span class="sr-only">Visit our Website</span>';
						echo '</button>';
					}
					
					if ($hasgoogleplus) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasgoogleplus.'" class="socialicon googleplus">';
						echo '<i class="fa fa-google-plus fa-inverse"></i>';
							echo '<span class="sr-only">Follow us on Google Plus</span>';
						echo '</button>';
					}
					
					if ($hastwitter) {
						echo '<button type="button" ONCLICK="window.location.href='.$hastwitter.'" class="socialicon twiiter">';
						echo '<i class="fa fa-twitter fa-inverse"></i>';
							echo '<span class="sr-only">Follow us on Twitter</span>';
						echo '</button>';
					}
					
					if ($hasfacebook) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasfacebook.'" class="socialicon facebook">';
						echo '<i class="fa fa-facebook fa-inverse"></i>';
							echo '<span class="sr-only">Like us on Facebook</span>';
						echo '</button>';
					}
					
					if ($haslinkedin) {
						echo '<button type="button" ONCLICK="window.location.href='.$haslinkedin.'" class="socialicon linkedin">';
						echo '<i class="fa fa-linkedin fa-inverse"></i>';
							echo '<span class="sr-only">Connect with us on LinkedIn</span>';
						echo '</button>';
					}
					
					if ($hasyoutube) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasyoutube.'" class="socialicon youtube">';
						echo '<i class="fa fa-youtube fa-inverse"></i>';
							echo '<span class="sr-only">Watch us on Youtube</span>';
						echo '</button>';
					}
					
					if ($hasvimeo) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasvimeo.'" class="socialicon vimeo">';
						echo '<i class="fa fa-vimeo-square fa-inverse"></i>';
							echo '<span class="sr-only">Watch us on Vimeo</span>';
						echo '</button>';
					}
					
					if ($hasflickr) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasflickr.'" class="socialicon flickr">';
						echo '<i class="fa fa-flickr fa-inverse"></i>';
							echo '<span class="sr-only">View us on Flickr</span>';
						echo '</button>';
					}
					
					if ($haspinterest) {
						echo '<button type="button" ONCLICK="window.location.href='.$haspinterest.'" class="socialicon pinterest">';
						echo '<i class="fa fa-pinterest fa-inverse"></i>';
							echo '<span class="sr-only">Pin us on Pinterest</span>';
						echo '</button>';
					}
					
					if ($hastumblr) {
						echo '<button type="button" ONCLICK="window.location.href='.$hastumblr.'" class="socialicon tumblr">';
						echo '<i class="fa fa-tumblr fa-inverse"></i>';
							echo '<span class="sr-only">Find us on Tumblr</span>';
						echo '</button>';
					}
					
					if ($hasinstagram) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasinstagram.'" class="socialicon instagram">';
						echo '<i class="fa fa-instagram fa-inverse"></i>';
							echo '<span class="sr-only">Find us on Instagram</span>';
						echo '</button>';
					}
					
					if ($hasvk) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasvk.'" class="socialicon vk">';
						echo '<i class="fa fa-vk fa-inverse"></i>';
							echo '<span class="sr-only">Like us on VK</span>';
						echo '</button>';
					}
					
					if ($hasskype) {
						echo '<button type="button" ONCLICK="window.location.href='.$hasskype.'" class="socialicon skype">';
						echo '<i class="fa fa-skype fa-inverse"></i>';
							echo '<span class="sr-only">Call us on Skype</span>';
						echo '</button>';
					}
					
				echo '</ul>';
			} ?>
		</div>
	</div>
	
	<div class="row">
		<p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
		<?php echo $OUTPUT->standard_footer_html(); ?>
	</div>
	
</div>