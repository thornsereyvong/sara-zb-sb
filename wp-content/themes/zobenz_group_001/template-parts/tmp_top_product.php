<?php		
	$category = get_categories(array('taxonomy'=>'category', 'parent'=>'0'));	
	$y =0;
	foreach($category as $cat){	 $y++;	
?>

<div class="row">
	<div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
		<div class="block products_block exclusive leomanagerwidgets">
			<h4 class="title_block">
				<span><?php echo $cat->cat_name; ?></span> <br /> 
				<em><?php echo $cat->category_description;?></em>
			</h4>
			
			<?php
						//$arge = array(
						//	'post_type' => 'stv_product',
						//	'posts_per_page' => -1,
						//	'cat' => 2
						//);
						//$lastProduct = new WP_Query($arge);
						
						//echo "<pre>";
						//print_r($lastProduct);
						//echo "</pre>";
			?>
			
			<div class="block_content row">
				<div id="tab_pro_<?php echo $y; ?>" class="owl-carousel owl-theme grid">				
					
					<?php
						$arge = array(
							'post_type' => 'stv_product',
							'posts_per_page' => -1,
							'cat' => 2
						);
						$lastProduct = new WP_Query($arge);
						
						//echo "<pre>";
						//print_r($lastProduct);
						//echo "</pre>";
						
						
						if($lastProduct->have_posts()) : 
							while($lastProduct->have_posts()) : $lastProduct->the_post();
								get_template_part('template-parts/content', 'product');						
							endwhile;							
						endif;
						wp_reset_postdata();
					?>
					
					
				</div>
				</div>
			</div>
		</div>
		<script>
			/* <![CDATA[ */;
			$(document).ready(function() {
				$("#tab_pro_<?php echo $y; ?>").owlCarousel({
					items : 4,
					singleItem : false,
					itemsScaleUp : false,
					slideSpeed : 200,
					paginationSpeed : 800,
					rewindSpeed : 1000,
					autoPlay : 2000,
					stopOnHover : true,
					navigation : false,
					navigationText : ["&lsaquo;","&rsaquo;" ],
					rewindNav : true,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
					responsive : true,
					lazyLoad : false,
					lazyFollow : true,
					lazyEffect : "fade",
					autoHeight : false,
					mouseDrag : true,
					touchDrag : true,
					addClassActive : true,
				});
			});/* ]]> */
		</script>
	</div>


<?php		
	}
	
	/*   [term_id] => 2
    [name] => Man
    [slug] => man
    [term_group] => 0
    [term_taxonomy_id] => 2
    [taxonomy] => category
    [description] => 
    [parent] => 0
    [count] => 2
    [filter] => raw
    [cat_ID] => 2
    [category_count] => 2
    [category_description] => 
    [cat_name] => Man
    [category_nicename] => man
    [category_parent] => 0  */
?>


