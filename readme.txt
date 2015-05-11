=== Vidme ===
Contributors: vidme, ramiy
Tags: Vid.me, vidme, video, embed
Requires at least: 3.5
Tested up to: 4.2
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed videos from vid.me into your WordPress site

== Description ==

[Vidme](https://vid.me) is the fastest and easiest way to upload videos - no account needed. No need to rely solely on YouTube or Vimeo to host the videos on your WordPress site. Vidme lets you upload unlimited videos with or without an account - perfect for quickly adding videos to your WordPress posts. 

With the Vidme WordPress plugin, you can easily add videos to your WordPress posts using nothing but the URL. Choose any video from [vid.me](https://vid.me/explore), copy the video URL and paste it to your post text editor. Then simply click over to the visual editor to confirm that it loads properly.

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Vidme".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Updating =
* Use WordPress automatic updates to upgrade to the latest version. Ensure to backup your site just in case.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended  Requirements =
* The latest WordPress version.
* PHP version 5.4 or greater.
* MySQL version 5.5 or greater.

== Screenshots ==
1. Pasting the URL to the text-editor.
2. Pasting the URL to the visual-editor.

== Frequently Asked Questions ==

= How do I embed videos from vidme? =

With this plugin you can use the URL to embed videos. Just paste the video URL into your post editor:
`https://vid.me/JaEF`

= How do I set custom dimentions to my videos? =

In WordPress 4.2 you can double click the embedded video to set max `width` and max `height` dimentions. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="400"]https://vid.me/JaEF[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works with all the themes.

= How do I customize my videos? =
For advanced customization, use the `[vidme]` shortcodes with `id`, `width`, `height`, `autoplay`, `repeat` and `mute` parameters:

`[vidme id="JaEF" width="500" height="400" autoplay="true" repeat="true" mute="false"]`

== Changelog ==

= 1.1  (2015-05-05) =
* Add vidme shortcode.
* Add screenshots.
* Add i18n support.
* Add hebrew (he_IL) traslation.

= 1.0  (2015-04-30) =
* Initial release.
* Register embed handler.
