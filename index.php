<?php
/*
  Plugin Name: WooCommerce Product Review Schema
  Description: Display review stars on Google searches for WooCommerce Products that have user reviews. Everything works automatically, no setup needed.
  Version: 1.0.1
  Author: WP Sheet Editor
  Author URI: http://wpsheeteditor.com/?utm_source=wp-admin&utm_medium=plugins-list&utm_campaign=product-review-schema-plugin
  Plugin URI: https://wpsheeteditor.com/extensions/woocommerce-spreadsheet/?utm_source=wp-admin&utm_medium=plugins-list&utm_campaign=product-review-schema-plugin
  License: GPLv2
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

 if( ! function_exists('wpse_add_schema') ){
	add_filter('wp_footer', 'wpse_add_schema');

	function wpse_add_schema() {
		if (!is_singular('product')) {
			return;
		} 
		$product_id = get_queried_object_id();
		$rating_count = (int) get_post_meta($product_id, '_wc_review_count', true);
		$average_rating = (int) get_post_meta($product_id, '_wc_average_rating', true);
		$terms = get_the_terms($product_id, 'product_cat');
		$category = '';
		if ($terms && !is_wp_error($terms)) {
			$category = $terms[0]->name;
		}
		
		if( empty($rating_count)){
			return;
		}
		
		?>
		<script type="application/ld+json">{
			"@context": "http://schema.org",
			"@id": "#product",
			"@type": "IndividualProduct",
			"aggregateRating": {
			"@type": "AggregateRating",
			"ratingCount": "<?php echo (int) $rating_count; ?>",
			"ratingValue": "<?php echo (int) $average_rating; ?>"
			},
			"name": <?php echo json_encode(get_the_title($product_id)); ?>,
			"category": <?php echo json_encode($category); ?>
			}</script>
		<?php
	}
}