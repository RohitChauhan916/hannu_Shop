<?php 
    get_header();

    while(have_posts()){
        the_post();
?>
<?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
} ?>
<section id="banner" class="about-banner infras-banner services-banner">
<div class="banner_img">
<?php the_post_thumbnail('thumbnail', array(
							 'loading' => 'lazy'
							 ));?>
</div>
 <div class="banner-caption">
			<div class="banner_text">
                  <h1> <?php the_title();?> </h1>
            </div>			
 </div>
</section>
<div class="container">
<?php the_content();?>
</div>
<?php }
    get_footer();
?>