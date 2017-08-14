<div class="tool-box" style=' width: calc(100% - 350px);'>

	<h3 class="title"><?php _e('Import Product Variations CSV', 'rspider-csv-export-import-woo'); ?></h3>
	<p><?php _e('Import and add variations to your variable products using this tool.', 'rspider-csv-export-import-woo'); ?></p>
	<p class="description"><?php _e('Each row must be mapped to a variable product via a <code>post_parent</code> or <code>parent_sku</code> column in order to import successfully. Merging also requires a <code>sku</code> or <code>id</code> column.', 'rspider-csv-export-import-woo'); ?></p>
	<p class="submit"><a class="button " href="<?php echo admin_url('admin.php?import=woocommerce_variation_csv'); ?>"><?php _e('Import Variations', 'rspider-csv-export-import-woo'); ?></a> <a class="button " href="<?php echo admin_url('admin.php?import=woocommerce_variation_csv&merge=1'); ?>"><?php _e('Merge Variations', 'rspider-csv-export-import-woo'); ?></a></p>

</div>