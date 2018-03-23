<?php
/**\
 *
 * Template Name: My Template
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 * @package 8Store Lite
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="store-wrapper">
			<main id="main" class="site-main clearfix <?php echo esc_attr($single_page_layout); ?>" role="main">

				<form action="<?php the_permalink(); ?>" method="get">
					<label>Type:</label>
					<select name="type">
						<option value="">Any</option>
						<option value="botanical_name">Botanical Name</option>
						<option value="common_name">Common Name</option>
					</select>

					<label>Category:</label>
					<select name="category">
						<option value="">Any</option>
						<option value="68">Essential Oils</option>
						<option value="66">Oleoresins</option>
						<option value="67">Phytochemicals</option>
						<option value="69">Top Selling</option>
						<option value="5">Herbal Extracts </option>
					</select>

					<label>Application:</label>
					<select name="application">
						<option value="">Any</option>
						<option value="39">GIT Protective Agents</option>
						<option value="8">Hair Protective Agents</option>
						<option value="40">Heart Protective Agents</option>
					</select>

					<label>Order:</label>
					<select name="order">
						<option value="">Any</option>
						<option value="ASC">ASC</option>
						<option value="DESC">DESC</option>
					</select>
					<button type="submit" name="">Filter</button>
				</form>

				<?php

				if($_GET['type'] && !empty($_GET['type']))
				{
					$type = $_GET['type'];
				}

				if($_GET['category'] && !empty($_GET['category']))
				{
					$category = $_GET['category'];
				}

				if($_GET['application'] && !empty($_GET['application']))
				{
					$application = $_GET['application'];
				}

				if($_GET['order'] && !empty($_GET['order']))
				{
					$order = $_GET['order'];
				}

				if($_GET['category'] && !empty($_GET['category']) && $_GET['application'] && !empty($_GET['application']))
				{
					$relation = "AND";
				}else
				{
					$relation = "OR";
				}
				?>

				<?php

				// query
				$the_query = new WP_Query(array(
					'post_type'			=> 'post',
					'posts_per_page'	=> -1,
					'meta_key'			=> $type,
					'orderby'			=> 'meta_value',
					'order'				=> $order,
					'tax_query'			=> array(

						'relation' => $relation,

						array(

							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $category,
						),

						array(

							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $application,
						),
					),

				));

				?>
				<?php if( $the_query->have_posts() ): ?>
					<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
						<?php
						$type1 = $type;

						switch ($type1) {
							case "botanical_name":
								?>

								<div class="list">
									<h1><a href="<?php the_permalink(); ?>">Botanical Name:<?php the_field('botanical_name') ?></a></h1>
									<h3></h3>
									<h3>Common Name: <?php the_field('common_name') ?></h3>
								</div>

								<?php break; ?>

							<?php case "common_name": ?>

							<div class="list">
								<h1><a href="<?php the_permalink(); ?>">Common Name: <?php the_field('common_name') ?></h1></a>
								<h3>Botanical Name:<?php the_field('botanical_name') ?></h3>
								<h3></h3>
							</div>

							<?php break; ?>

						<?php default:?>

							<div class="list">
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<h3>Botanical Name:<?php the_field('botanical_name') ?></h3>
								<h3>Common Name: <?php the_field('common_name') ?></h3>
							</div>

						<?php } ?>

					<?php endwhile; ?>

				<?php else: ?>

					<h1>No Post Found</h1>

				<?php endif; ?>

				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_footer(); ?>
