<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

      
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Lato:400,400i,700,900" rel="stylesheet">
        <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->

        <?php wp_head(); ?>
    </head>
    <body>

      <nav class="top">
        <a href="" class="logolink"><div class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logo.svg "></div></a>
        <ul>
          <li class="dropdown">
            <a href="" class="dropbtn">Who We Are</a>
            <div class="dropdown-content">
  <a href="#">Mission & Values</a>
  <a href="#">Why Sunday Suppers?</a>
  <a href="#">Where We Serve</a>
    <a href="#">Our Impact</a>
      <a href="#">Staff</a>
</div>
</li>
<li class="dropdown">
  <a href="whatwedo.html" class="dropbtn">What We Do</a>
</li>

<li class="dropdown">
  <a href="" class="dropbtn">Get Involved</a>
  <div class="dropdown-content">
<a href="#">Volunteer</a>
<a href="#">Donate</a>
<a href="#">Become a Sunday Suppers Family</a>

</div>
</li>
<li class="dropdown">
  <a href="" class="dropbtn">News & Stories</a>
  <div class="dropdown-content">
<a href="#">News and Updates</a>
<a href="#">Family & Volunteer Stories</a>
<a href="#">Media Coverage</a>
</div>
</li>

          <li>
            <a href="">Recipes</a>
          </li>

          <li>
            <a href="">Contact Us</a>
          </li>

          <li class="donate">
            <a href="">Donate</a>
          </li>

          <li>  <a href="javascript:void(0);" class="nav-icon"> Menu </a></li>
       </ul>
      </nav>

      <div class="mobile-overlay">
        <a href="javascript:void(0)" class="closebtn">Close</a>

        <div class="overlay-content">
          <li><a href="javascript:void(0)" class="after">Who We Are</a>
            <div class="overlaynavcontent">
              <a href="#">Mission & Values</a>
              <a href="#">Why Sunday Suppers?</a>
              <a href="#">Where We Serve</a>
                <a href="#">Our Impact</a>
                  <a href="#">Staff</a>
            </div>

          </li>
          <li><a href="" class="after">What We Do</a></li>
          <li><a href="" class="after">Get Involved</a></li>
          <li><a href="" class="after">News & Stories</a></li>
          <li><a href="">Recipes</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="">Donate</a></li>
         </div>

      </div>
