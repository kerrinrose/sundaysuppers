<footer>
  <div class="container">
<div class="row">
<div class="col-100  padding-reset flex align-items-center">
  <h1>Sunday Suppers</h1>

  <div class="social"><a href=""><img src="img/Facebook-white.svg"></a></div>
    <div class="social"><a href=""><img src="img/Twitter-white.svg"></a></div>
</div>
</div>

<div class="row justify-content">
<div class="">
  <nav>
    <ul>
      <li><a href="">Who We Are</a></li>
      <li><a href="">What We Do</a></li>
      <li><a href="">Get Involved</a></li>
      <li><a href="">News & Stories</a></li>
      <li><a href="">Recipes</a></li>
      <li><a href="">Contact Us</a></li>
      <li><a href="">Donate</a></li>
    </ul>
  </nav>
</div>
<div class="col-33">
  <h2>Our Mission</h2>

  <p>To strengthen the health and
well-being of families through the transformative power of family meals.</p>
</div>
<div class="col-33">
  <h2>Serving Meals Every Wednesday at Memphis Street Academy</h2>
  <p>2950 Memphis Street<br>
Philadelphia, PA 19134</p>

<h2>Our Address</h2>

<p>2901 Hunting Park Ave<br>
Philadelphia, PA 19129<br>
Phone: 215-913-5028</p>
</div>
</div>

<span>© <?php echo date('Y'); ?> Sunday Suppers. All Rights Reserved. Site Design by <a href="http://www.kerrinrose.com">Kerrin McLaughlin</a></span>
</div>
</footer>
<?php wp_footer(); ?>



<script>

jQuery(document).ready(function(){

$('.overlaynavcontent').prev().attr('href', 'javascript:void(0)');
$('.overlaynavcontent').prev().addClass('after');

$('.after').click(function() {

  $(this).toggleClass('afterafter');
  $(this).next().toggleClass('display-block');

});

});</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
