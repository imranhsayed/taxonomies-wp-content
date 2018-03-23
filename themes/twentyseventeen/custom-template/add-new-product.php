<?php
/**
 * Template Name: Add New Product Template
 *
 */
get_header();

$args = array(
	'taxonomy'          => 'shirt',
	'hide_empty'        => false,
	'parent' => '0'
);

$shirt_terms = get_terms( $args );

$tax_color_name = 'color';
$args = array(
	'taxonomy'          => $tax_color_name,
	'hide_empty'        => false,
);
$term = get_terms( $args );

?>

	<form action="" method="post" id="product-form">
		<label for="">Product Name:<input type="text" id="product-name"></label>
		<label for="">Product Type:
			<select name="" id="product-category">
				<?php
				echo '<option data-slug=""value=""></option>';
				foreach ( $shirt_terms  as $term_obj ) {
					$term_name = $term_obj->name;
					$term_slug = $term_obj->slug;
					$term_id = $term_obj->term_id;
					?>
					<option data-slug="<?php echo $term_slug; ?>" value="<?php echo $term_id; ?>">
						<?php echo $term_name; ?>
					</option>
					<?php
				}
				?>
			</select>
		</label>
		<label for="">Product Sub Type:
			<select name="" id="product-sub-category"></select>
		</label>
		<label for="">Product Color:
			<select name="" id="product-color">
				<?php
				foreach ( $term  as $term_obj ) {
					$term_name = $term_obj->name;
					$term_slug = $term_obj->slug;
					$term_id = $term_obj->term_id;
				?>
					<option data-id="<?php echo $term_id; ?>" value="<?php echo $term_name; ?>">
						<?php echo $term_name; ?>
					</option>
				<?php
				}
				?>

			</select>
		</label>
		<button type="submit">Submit</button>
	</form>

<?php
get_footer();