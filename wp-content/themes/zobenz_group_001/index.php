<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zobenz_group_001
 */

get_header(); ?>


<?php require get_template_directory() . '/template-parts/tmp_slideshow.php'; ?>
<section id="columns" class="columns-container">
	<div class="container">
		<div class="row">
			<section id="center_column" class="col-md-12">
				<div class="clearfix">
					<div class="nopadding margin-30-70 clearfix">
						<?php require get_template_directory() . '/template-parts/tmp_top_content.php'; ?>
					</div>
					<?php require get_template_directory() . '/template-parts/tmp_top_product.php'; ?>
				</div>
			</section>
		</div>
	</div>
</section>


<?php
get_sidebar();
get_footer();
