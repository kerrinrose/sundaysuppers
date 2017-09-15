<?php get_header(); ?>

<div class="hero-image">
  <div class="hero-text">
<span> Strengthening families, </span> <br><span> one meal at a time. </span>
<br><button> Learn More </button>
</div>






</div>
<div class="container">
<?php

$get_homepage = new WP_Query (' pagename=home');
while ($get_homepage->have_posts() ) : $get_homepage -> the_post();
  the_content();
endwhile;

wp_reset_postdata();

?>

</div>

<?php get_footer(); ?>
