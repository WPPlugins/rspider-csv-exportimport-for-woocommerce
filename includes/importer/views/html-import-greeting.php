<div>
	<p><?php _e( 'Hi there! Upload a CSV file containing product data to import the contents into your shop.', 'rspider-csv-export-import-woo' ); ?></p>
	<p><?php _e( 'Choose a CSV (.csv) file to upload, then click Upload file and import.', 'rspider-csv-export-import-woo' ); ?></p>

	<?php if ( ! empty( $upload_dir['error'] ) ) : ?>
		<div class="error"><p><?php _e('Before you can upload your import file, you will need to fix the following error:'); ?></p>
		<p><strong><?php echo $upload_dir['error']; ?></strong></p></div>
	<?php else : ?>
		<form enctype="multipart/form-data" id="import-upload-form" method="post" action="<?php echo esc_attr(wp_nonce_url($action, 'import-upload')); ?>">
			<table class="form-table">
				<tbody>
					<tr>
						<th>
							<label for="upload"><?php _e( 'Choose a file from your computer:' ); ?></label>
						</th>
						<td>
							<input type="file" id="upload" name="import" size="25" />
							<input type="hidden" name="action" value="save" />
							<input type="hidden" name="max_file_size" value="<?php echo $bytes; ?>" />
							<small><?php printf( __('Maximum size: %s' ), $size ); ?></small>
						</td>
					</tr>
					<?php if ( $this->file_url_import_enabled ) : ?>
					<tr>
						<th>
							<label for="file_url"><?php _e( 'OR enter path to file:', 'rspider-csv-export-import-woo' ); ?></label>
						</th>
						<td>
							<?php echo ' ' . ABSPATH . ' '; ?><input type="text" id="file_url" name="file_url" size="50" />
						</td>
					</tr>
					<?php endif; ?>
					<tr>
						<th><label><?php _e( 'Delimiter', 'rspider-csv-export-import-woo' ); ?></label><br/></th>
						<td><input type="text" name="delimiter" placeholder="," size="2" /></td>
					</tr>
					<tr>
						<th><label><?php _e( 'Merge empty cells', 'rspider-csv-export-import-woo' ); ?></label><br/></th>
						<td><input type="checkbox" name="merge_empty_cells" placeholder="," size="2" /> <span class="description"><?php _e( 'Check this box to merge empty cells - otherwise (when merging) the empty cells will be ignored when importing things such as attributes.', 'rspider-csv-export-import-woo' ); ?></span></td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<input type="submit" class="button" value="<?php esc_attr_e( 'Upload file and import' ); ?>" />
			</p>
		</form>
	<?php endif; ?>
</div>