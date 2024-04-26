
<?php
wp_head();

?>

<?php 
    $my_option = get_option('my_data');
    $text1 = $my_option['text1'];
    $text2 = $my_option['text2'];
    
    
    
    ?> 


<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <?php  echo $text1?>
              <!-- <span>
                Call : +01 123455678990
              </span> -->
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <?php  echo $text2?>
              <!-- <span>
                Email : demo@gmail.com
              </span> -->
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <div class="header">
              <span>
                Inance
              </span>
              </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
            <?php
        wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'navbar',//for the registration of class for styling navbar in style.css
 
))

?>