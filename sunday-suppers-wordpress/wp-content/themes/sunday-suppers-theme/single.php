<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>




<div class="container">
  <img src="<?php echo get_the_post_thumbnail_url();?>">
  <div class="row">
  <div class="col-80"><h1 class="post"><?php the_title(); ?></h1>
  <h2 style="padding-top: 0px; font-weight: 400;">Posted on <?php echo get_the_date(); ?></h2>
<?php the_content(); ?>
</div></div></div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
