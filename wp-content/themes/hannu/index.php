<?php

get_header();
?>
<!-- banner section -->

<section id="banner" class="infras-banner">
<?php
		if ( is_home() && ! ( is_front_page() ) ) :
			$queried_id = get_option( 'page_for_posts' );
			?>
<!--<?php the_post_thumbnail(); ?>-->
 <div class="banner-caption">
			<div class="banner_text">
                  <h1><?php echo get_the_title( $queried_id ); ?> </h1>
            </div>			
 </div>
            <?php endif; ?>
</section>
<!-- blog content section -->
<section id="blog-content" class="section-padding">
    <div class="container">
	   <div class="row">
	        <div class="blog-main">
		        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
                    <?php
              while(have_posts()) {
                    the_post();
              ?>
				    <div class="blog-div-block"> 
						 <div class="featured-block">
							 <?php the_post_thumbnail();?>
						 </div> 
						 <div class="blog-div-cont">
						     <h2> <?php the_title();?>  </h2> 
                              	
                             <p><?php echo wp_trim_words(get_the_content(), 100); ?> 
</p>
                            <div class="read-more"><span> <img src="http://localhost/hannu_shop/wp-content/uploads/2020/07/read-more-left-img.png" alt="read-more-left-img"></span><a href="<?php the_permalink();?>"> read more </a> </div>							 
						 </div>
                    </div> 
                    <?php } ?>
                    </div>			
		   
		        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
                      <div class="right-block">
					       <div class="right-block-div-top right-block-div">
                                     <?php get_sidebar( 'primary' ); ?>
                </div>				
		   		   
		   
		    </div> 
			
			
	   </div>
	</div>
</section>                                                                                
<?php
get_footer();
?>