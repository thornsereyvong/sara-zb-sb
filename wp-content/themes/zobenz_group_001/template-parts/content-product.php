<?php
/*
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail_url();
} 
*/ 


	echo '<div class="ajax_block_product">';
		echo '<div class="product-container product-block text-center" >';
			echo '<div class="left-block">';
				echo '<div class="product-image-container image ImageWrapper">';
				echo '<div class="leo-more-info" data-idproduct="1"></div>';
				echo '<a class="product_img_link" href="#" title="Faded Short Sleeve T-shirts" itemprop="url">';
					echo '<img class="replace-2x img-responsive" src="'.get_template_directory_uri().'/img/product/1/faded-short-sleeve-tshirts.jpg" alt="'.$data['var_name'].'" title="'.$data['var_name'].'" itemprop="image" />';
					echo '<span class="product-additional" data-idproduct="1">';							
					echo '<img class="replace-2x img-responsive" src="'.get_template_directory_uri().'/img/product/1/blouse.jpg" alt="'.$data['var_name'].'" title="'.$data['var_name'].'" itemprop="image" />';					
					echo '</span>';
				echo '</a>';
			echo '</div>';
		echo '</div>';
		echo '<div class="right-block"><div class="product-meta"><h5 itemprop="name" class="name">';	
		echo '<a class="product-name" href="#" itemprop="url">'.the_title().'</a>';	
		echo '</h5>';
		
		if(the_content() != "")		
			echo '<p class="product-desc" itemprop="description">'.the_content().'</p>';
		
		
			echo '<div class="content_price"><span itemprop="price" class="price product-price"><small>Ask for Price</small></span><meta itemprop="priceCurrency" content="USD" /></div>';
		
			//echo '<div class="content_price"><span itemprop="price" class="price product-price">$'.$data['min_price'].'</span><meta itemprop="priceCurrency" content="USD" /></div>';
		
		echo '<div class="product-flags"></div>';
		echo '<div class="functional-buttons clearfix">';
		echo '<div class="cart">';
		echo '<button class="button btn" onClick="orderFrm()" > <i class="fa fa-shopping-cart"></i> Add to order</button>';						
		echo '</div></div></div></div></div></div>';




?>