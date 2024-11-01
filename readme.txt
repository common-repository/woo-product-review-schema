=== WooCommerce Product Review Schema - Automatic, no Setup Needed ===
Contributors: josevega,wpsheeteditor
Tags: seo, reviews, schema, woocommerce
Tested up to: 6.6
Stable tag: 1.0.1
Requires at least: 3.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Automatically add the rich snippets schema to display review stars on Google searches for WooCommerce Products.

== Description ==

Automatically add the rich snippets schema to display review stars on Google searches for WooCommerce Products.

It's very simple.

When the product has reviews left by customers, it will automatically add this schema code:

`{
	"@context": "http://schema.org",
	"@id": "#product",
	"@type": "IndividualProduct",
	"aggregateRating": {
	"@type": "AggregateRating",
	"ratingCount": "$rating_count",
	"ratingValue": "$average_rating"
	},
	"name": "$product_title",
	"category": "$category"
}`

... which makes Google display the review stars on the search pages.

No setup needed. Everything is automatic. Just activate the plugin.
This plugin is super lightweight and it's completely free.

== Installation ==

= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don’t need to leave your web browser. To do an automatic install log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.



In the search field type the plugin name and click Search Plugins. Once you’ve found our plugin you can install it by simply clicking “Install Now”.



= Manual installation =

The manual installation method involves downloading our plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here.](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation)



== Frequently Asked Questions ==

= Why is Google not showing my review stars? =

Maybe your product doesn't have reviews, or you need to wait a few days/weeks until Google detects the rich snippet.

== Screenshots ==

1. Example of the review stars on Google

== Changelog ==

= 1.0.1 =
* Update readme.txt

= 1.0.0 =
* Initial release.