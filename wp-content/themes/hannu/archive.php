<?php

get_header();
$categoryobj = get_queried_object();
$cat_ID      = $categoryobj->term_id;
?>
<!-- banner section -->
<section id="banner" class="infras-banner">
<?php 

$image = get_field('category_image', 'category_'. $cat_ID); //'category_image' is our field name
if ($image):
?>
<img class="custom_image" src="<?php echo $image['url']; ?>">

<?php
 endif;
?>
 <div class="banner-caption">
			<div class="banner_text">
                  <h1> <?php wp_title('', true,''); ?></h1>
            </div>			
 </div>
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