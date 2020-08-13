<!DOCTYPE html>
<html>
<head>
  <title>Hannu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="images/favicon.png" type="img/x-icon">
   <?php wp_head(); ?>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR7NV7S');</script>
<!-- End Google Tag Manager -->
 </head>
<body class="home-pg fhome-pg internal-pg" <?php body_class();  ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR7NV7S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="header">
<div class="container">
<nav class="navbar">
  <div class="container">
    <div class="nav_men">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>   
	  <a class="navbar-brand" href="<?php echo site_url();?>">
	    <img loading=lazy src="<?php echo get_theme_file_uri('img/logo.png')?>" alt="logo">
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">  
    <?php wp_nav_menu(array(
    'theme_location' => 'headerMenuLocation',
    'menu_class' => 'nav navbar-nav',
    'container'  => 'ul'
    ));?>
    </div>
	</div>
  </div>
</nav>

</div>
</div>