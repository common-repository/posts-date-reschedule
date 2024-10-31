<div class="wrap">
	<h2><?php echo __( 'Posts Date Reschedule', 'pdr' );?></h2>
	<form method="POST">
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" class="titledesc">
						<label for="pdr_function">Function</label>				
					</th>
					<td class="forminp forminp-select">
						<select id="pdr_function" name="pdt_function">
							<option value="1"><?php echo __( 'Same date for all', 'pdr' );?></option>
							<option value="2"><?php echo __( 'Current date plus selected days', 'pdr' );?></option>
							<option value="3"><?php echo __( 'Current date minus selected days', 'pdr' );?></option>
							<option value="4"><?php echo __( 'Random dates', 'pdr' );?></option>
						</select>
					</td>
				</tr>
				<tr valign="top" class="pdr_date_selector pdr_function_selector">
					<th scope="row" class="titledesc">
						<label for="psr_date_selector"><?php echo __( 'Date & time for selected posts', 'pdr' );?></label>				
					</th>
					<td class="forminp">
						<input type="date" id="psr_date_selector" name="pdt_function_date">
						<input type="time" id="psr_time_selector" name="pdt_function_time">
					</td>
				</tr>
				<tr valign="top" class="pdr_plus_selector pdr_function_selector">
					<th scope="row" class="titledesc">
						<label for="pdr_plus_selector"><?php echo __( 'Plus days for selected posts', 'pdr' );?></label>				
					</th>
					<td class="forminp">
						<?php echo __( 'Post date', 'pdr' );?> + 
						<input type="number" id="pdr_plus_selector" name="pdt_function_days_plus">
						<?php echo __( 'days', 'pdr' );?>
					</td>
				</tr>
				<tr valign="top" class="pdr_minus_selector pdr_function_selector">
					<th scope="row" class="titledesc">
						<label for="pdr_minus_selector"><?php echo __( 'Minus days for selected posts', 'pdr' );?></label>				
					</th>
					<td class="forminp">
						<?php echo __( 'Post date', 'pdr' );?> - 
						<input type="number" id="pdr_minus_selector" name="pdt_function_days_minus">
						<?php echo __( 'days', 'pdr' );?>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" class="titledesc">
						<label for="pdr_minus_selector"><?php  echo __( 'Select posts', 'pdr' );?></label>				
					</th>
					<td class="forminp">
						<select multiple="true" style="height: 350px;" name="pdr_posts[]">
							<?php
								$cpts = array();
								foreach ( get_post_types( array( 'public' => true ) ) as $cpt ) {
									array_push( $cpts, $cpt );
								}
								unset($cpts[2]);	
							
								$args = array(
									'post_type' => $cpts,
									'orderby' => 'date',
									'order' => 'DESC',
									'numberposts' => -1,
								);

								$get_posts = get_posts($args);
								foreach ($get_posts as $post) {
									echo '<option value="'.$post->ID.'">'.$post->post_title.'</option>';
								}
							?>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="submit">
			<input name="pdr_save" class="button-primary" type="submit" value="<?php echo __( 'GO!', 'pdr' );?>">
		</p>
	</form>
</div>