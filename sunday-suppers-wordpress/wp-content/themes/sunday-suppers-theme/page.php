<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<div class="header-image" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
<div class="black-bg">  <div class="header-text">
<span> <?php the_title(); ?> </span>
</div>
</div>
</div>
<div class="container">
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
