<?php						
	$args = array( 'post_type' => 'promotion', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	$i = 0;
	while ( $loop->have_posts() ) : $loop->the_post(); $i++;
?>
	
<div class="widget col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12">
	<div class="widget-html block">
		<div class="block_content">
			<div class=" banner-image">				
				<?php if( $i%2 == 0){ ?>
					<div class="top-banner">
						<h6>
							<a href="#"><?php the_field('reference'); ?></a>
						</h6>
						<h4>
							<a href="#"><?php the_title(); ?></a>
						</h4>					
					</div>
					<a href="#"><img class="img-responsive" src="<?php the_field('image'); ?>" alt="" /></a>
				<?php }else{ ?>
					<a href="#"><img class="img-responsive" src="<?php the_field('image'); ?>" alt="" /></a>
					<div class="top-banner">
						<h6>
							<a href="#"><?php the_field('reference'); ?></a>
						</h6>
						<h4>
							<a href="#"><?php the_title(); ?></a>
						</h4>						
					</div>			
				<?php } ?>
				
			</div>
		</div>
	</div>
</div>	
					
<?php
	endwhile;
	wp_reset_postdata();
?>