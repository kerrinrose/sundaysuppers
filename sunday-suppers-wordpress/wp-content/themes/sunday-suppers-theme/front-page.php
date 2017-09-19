<?php get_header(); ?>

<div class="hero-image">
  <div class="hero-text">
<span> Strengthening families, </span> <br><span> one meal at a time. </span>
<br><button> Learn More </button>
</div>


<?php

$get_alert = new WP_Query( array( 'post_type' => 'alert', 'posts_per_page' => '1' ) );
while ($get_alert->have_posts() ) : $get_alert -> the_post();
  $cta = get_field('cta');
  $cta_url = get_field('cta_url');
  $message = get_field('message');

  ?>
  <div class="hero-message"> <?php echo $message; ?> <a href=" <?php echo $cta_url; ?>"><?php echo $cta; ?> </a></div>
        </div>
<?php

endwhile;

wp_reset_postdata();

?>



</div>
<div class="container">

  <?php

  $get_homepage = new WP_Query (' pagename=home');
  while ($get_homepage->have_posts() ) : $get_homepage -> the_post();
    the_content();
  endwhile;

  wp_reset_postdata();

  ?>

  <div class="row dark">
  <div class="col-33">
  <h1>Featured News</h1>
  <div class="news-card">
<?php
$query = new WP_Query( array( 'category_name' => 'news', 'posts_per_page' => '1'  ) );

while ($query->have_posts() ) : $query -> the_post();
  $title = get_the_title();
  set_post_thumbnail_size( 9999, 245 , array( 'center', 'center')  );
  $thumbnail = get_the_post_thumbnail();


  ?><a href="<?php the_permalink(); ?>">
<?php echo $thumbnail ?>
  <div class="news-card-text">
  <?php echo $title ?>
  </div>
</a>

  </div>

  <?php
  endwhile;

  wp_reset_postdata();

  ?>


  </div>



  <div class="col-33">
    <?php
    $query = new WP_Query( array( 'category_name' => 'family, volunteer', 'posts_per_page' => '1'  ) );

    while ($query->have_posts() ) : $query -> the_post();
      $title = get_the_title();
      set_post_thumbnail_size( 9999, 245 , array( 'center', 'center')  );
      $thumbnail = get_the_post_thumbnail();

      ?>

    <h1>Featured <?php if( in_category('family')) {echo 'Family';} else { echo 'Volunteer';} ?></h1>
    <div class="news-card">
      <a href="<?php the_permalink(); ?>">
    <?php echo $thumbnail ?>
    <div class="news-card-text">
    <?php echo $title ?>
  </div></a>
    </div>


    <?php
    endwhile;

    wp_reset_postdata();

    ?>
  </div>


  <div class="col-33">
  <h1>Featured Recipe</h1>
  <div class="news-card">
<?php
$query = new WP_Query( array( 'category_name' => 'recipe', 'posts_per_page' => '1'  ) );

while ($query->have_posts() ) : $query -> the_post();
  $title = get_the_title();
  set_post_thumbnail_size( 9999, 245 , array( 'center', 'center')  );
  $thumbnail = get_the_post_thumbnail();


  ?><a href="<?php the_permalink(); ?>">
<?php echo $thumbnail ?>
  <div class="news-card-text">
  <?php echo $title ?>
  </div>
</a>

  </div>

  <?php
  endwhile;

  wp_reset_postdata();

  ?>
  </div>

  </div>


  <div class="row"><div class="col-60 want-to-help">Want to help Sunday Suppers? <a href="">Volunteer</a> or <a href="">Donate</a> today. </div>
  </div>
  <div class="row">
    <div class="col-40 newsletter-image padding-reset"><img src="img/image-newsletter.png"></div>
      <div class="col-33 newsletter"><h1>Sign up for our newsletter for recipes, news, and more.</h1>
        <form>
        <div>  <label>Name</label><br>
          <input type="text" name="name">
        </div>
          <br>
          <div>
          <label>Email Address</label><br>
          <input type="text" name="email">
        </div>
          <br>
          <input type="submit" value="Sign Up">

        </form>

      </div>
  </div>

</div>

<?php get_footer(); ?>
