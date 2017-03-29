<div class="s-mobile"></div>
<div id="slideshow" class="clearfix">
		<div class="bannercontainer banner-fullwidth"
			style="padding: 0; margin: 0; background-color: #fff">
			<div id="sliderlayer1518071150" class="rev_slider fullwidthbanner"
				style="width: 100%; height: 510px;">
				<ul>
					<?php						
						$args = array( 'post_type' => 'slideshow', 'posts_per_page' => -1 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						  //the_title();
						  //echo '<div class="entry-content">';
						  ///the_content();
						  //echo '</div>';
						  
					?>
						<li>
							<img src="<?php the_field('image'); ?>" alt="" />
							<div class="caption dec-slier sfr easeOutQuad str" data-x="225" data-y="169" data-speed="300" data-start="1200" data-easing="easeOutExpo" style="font-size: 52px; color: #ffffff; z-index: 62;">
								<?php the_title(); ?>
							</div>
							<div class="caption dec-slider sfr easeOutQuad " data-x="453"
								data-y="258" data-speed="300" data-start="1600"
								data-easing="easeOutExpo"
								style="font-size: 14px; color: #ffffff; z-index: 63;">
								<p><?php the_field('description'); ?></p>
							</div>
							<!-- 
							<div class="caption btn-link sfr easeOutQuad stb" data-x="519"
								data-y="322" data-speed="300" data-start="2000"
								data-easing="easeOutExpo"
								style="font-size: 14px; background-color: #2db6c2; color: #ffffff; z-index: 64;">
								See whats new!
							</div>
							-->
						</li>
					<?php
						endwhile;
						wp_reset_postdata();
					?>
					
					
				</ul>
				<div class="tp-bannertimer tp-top"></div>
			</div>
		</div>
		<script type="text/javascript">
			/* <![CDATA[ */;
			var tpj = jQuery;
			if (tpj.fn.cssOriginal != undefined)
				tpj.fn.css = tpj.fn.cssOriginal;
			tpj("#sliderlayer1518071150").revolution({
				delay : 9000,
				startheight : 510,
				startwidth : 1170,
				hideThumbs : 200,
				thumbWidth : 100,
				thumbHeight : 50,
				thumbAmount : 5,
				navigationType : "bullet",
				navigationArrows : "verticalcentered",
				navigationStyle : "round",
				navOffsetHorizontal : 0,
				navOffsetVertical : 20,
				touchenabled : "on",
				onHoverStop : "on",
				shuffle : "on",
				stopAtSlide : -1,
				stopAfterLoops : -1,
				hideCaptionAtLimit : 0,
				hideAllCaptionAtLilmit : 0,
				hideSliderAtLimit : 0,
				fullWidth : "on",
				shadow : 0,
				startWithSlide : 0
			});
			$(document).ready(
					function() {
						$('.caption', $('#sliderlayer1518071150')).click(
								function() {
									if ($(this).data('link') != undefined
											&& $(this).data('link') != '')
										location.href = $(this)
												.data('link');
								});
					});/* ]]> */
		</script>
	</div>