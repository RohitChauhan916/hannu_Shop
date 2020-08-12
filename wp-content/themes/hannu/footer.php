<!-- our contact section -->
<section id="our-contact" class="section-padding">
    <div class="container">
	    <div class="row">
		     <div class="client-main-block">
		     <div class="client-title-block">
		      <h1>
				   <span> our </span>
				     contact
 				</h1> 
			</div>	
			<div class="contact-content">
			   <p>H-27, Udyog Industrial Area, Rohtak Road, New Delhi-110041 </p>
			   <p><a href="tel:011-47060986">011-47060986</a> / <a href="tel:9910092920">9910092920</a> /  <a href="tel:9910374687">9910374687</a> /  <a href="tel:9810611962">9810611962</a> /  <a href="tel:9810148361">9810148361</a>  </p>
			   
			   
			   <p><a href="mailto:hannudelhi@gmail.com">hannudelhi@gmail.com </a> / <a href="mailto:mdoffice@hannumarketing.com"> mdoffice@hannumarketing.com </a></p>
			</div>
			</div>
			<div class="footer-contact">
			    <ul>
				   <li> <a href="https://www.facebook.com/Hannu-Marketing-Pvt-Ltd-149396238485518/?ref=settings" target="_blank"> <img src="<?php echo get_theme_file_uri('img/fb.jpg') ?>" alt="facebook"></a></li>
				   <li> <a href="https://www.instagram.com/hannu_marketing/"  target="_blank"> <img src="<?php echo get_theme_file_uri('img/insta.jpg') ?>" alt="insta"></a></li>
				   <li> <a href="https://www.linkedin.com/company/14380991/admin/" target="_blank"> <img src="<?php echo get_theme_file_uri('img/linkin.jpg') ?>" alt="linkin"></a></li>
				</ul>
			</div>
			
			<div class="footer-link">
			   <ul>
			       <li> <a href="terms.html">  terms & conditions</a></li>
				    <li> <a href="privacy.html">  Privacy Policy</a></li>
					 <li> <a href="disclaimer.html">  Disclaimer</a></li>
			   </ul>
			</div>
			
			<div class="copyright-block">
			   <p>Copyright 2017 <a href="<?php echo site_url();?>" target="_blank">HANNU </a> | All Rights Reserved </p>
			</div>
			
	</div>
</div></section>



  <!-- scripts -->
  <?php wp_footer(); ?>
  
  
  <!--  on scroll menu -->     
	   
	<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".fhome-pg").addClass("fixheader");
    } else {
        $(".fhome-pg").removeClass("fixheader");
    }
});
	</script>
	
	<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".fhome-pg").addClass("fixheader");
    } else {
        $(".fhome-pg").removeClass("fixheader");
    }
});
	</script>
	

	
	  <!-- tabs -->
      <script>
         function openCity(evt, cityName) {
           var i, tabcontent, tablinks;
           tabcontent = document.getElementsByClassName("tabcontent");
           for (i = 0; i < tabcontent.length; i++) {
             tabcontent[i].style.display = "none";
           }
           tablinks = document.getElementsByClassName("tablinks");
           for (i = 0; i < tablinks.length; i++) {
             tablinks[i].className = tablinks[i].className.replace(" active", "");
           }
           document.getElementById(cityName).style.display = "block";
           evt.currentTarget.className += " active";
         }
      </script>
      <!-- lightbox  -->
      <script>
         function openModal() {
           document.getElementById("myModal").style.display = "block";
         }
         
         function closeModal() {
           document.getElementById("myModal").style.display = "none";
         }
         
         var slideIndex = 1;
         showSlides(slideIndex);
         
         function plusSlides(n) {
           showSlides(slideIndex += n);
         }
         
         function currentSlide(n) {
           showSlides(slideIndex = n);
         }
         
         function showSlides(n) {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           var dots = document.getElementsByClassName("demo");
           var captionText = document.getElementById("caption");
           if (n > slides.length) {slideIndex = 1}
           if (n < 1) {slideIndex = slides.length}
           for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
           }
           for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" active", "");
           }
           slides[slideIndex-1].style.display = "block";
           dots[slideIndex-1].className += " active";
           captionText.innerHTML = dots[slideIndex-1].alt;
         }
      </script>


</body></html>