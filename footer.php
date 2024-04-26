<body>
 <section class="info_section ">
    <div class="container">
      <h4>
        Get In Touch
      </h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>
                     <?php  echo get_theme_mod('footer_address','');?>
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>
                    <?php  echo get_theme_mod('footer_phone','');?>
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>
                    <?php  echo get_theme_mod('footer_email','');?>
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="<?php echo get_theme_mod('social_profile_facebook_link','')?>">
Facebook
          <!-- <i class="fa fa-facebook" aria-hidden="true"></i> -->
        </a>
        <a href="<?php echo get_theme_mod('social_profile_twitter_link','')?>">
          <!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
          Twitter
        </a>
        <a href="<?php echo get_theme_mod('social_profile_youtube_link','')?>">
          <!-- <i class="fa fa-youtube" aria-hidden="true"></i> -->
          Youtube
        </a>
        <a href="<?php echo get_theme_mod('social_profile_Linkedin_link','')?>">
          <!-- <i class="fa fa-instagram" aria-hidden="true"></i> -->
          Linkedin
        </a>
      </div>
    </div>
  </section>



  <div class="sidebar" >
    <?php dynamic_sidebar('sidebar-1')?>
</div>  
 
<footer class="footer_section">
<div class="container">
  <p>
    &copy; <span id="displayDateYear"><?php echo get_theme_mod('copyright_text'); ?>
        
  </p>
</div>
</footer>
<!-- footer section -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->




</body>