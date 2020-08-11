<?php
/**
 * Template Name: Recipes
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */ ?>

<?php get_header(); ?>



<div class="header-image" style="background-image: url('');">
<div class="black-bg">  <div class="header-text">
<span> News & Updates </span>
</div>
</div>
</div>
<div class="container cards">
  <div class="row justify-left">
    <?php
    $query = new WP_Query( array( 'category_name' => 'family, volunteer' ) );

    while ($query->have_posts() ) : $query -> the_post();



      ?>

  <div class="col-33 recipe">  <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>">
      <h2><?php the_title(); ?></h2> <?php the_excerpt(); ?>
</a>    </div>



    <?php
    endwhile;

    wp_reset_postdata();

    ?>




</div>
</div>

<?php get_footer(); ?>
