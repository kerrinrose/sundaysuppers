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
<span> Recipes </span>
</div>
</div>
</div>
<div class="container cards">
  <div class="row justify-left">
    <?php

    $get_recipes = new WP_Query( array( 'post_type' => 'recipe_post') );
    while ($get_recipes->have_posts() ) : $get_recipes -> the_post();
      $excerpt = get_field('excerpt');


      ?>

  <div class="col-33 recipe">  <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>">
      <h2><?php the_title(); ?></h2><p> <?php echo $excerpt ?></p>
</a>    </div>



    <?php
    endwhile;

    wp_reset_postdata();

    ?>




</div>
</div>

<?php get_footer(); ?>
