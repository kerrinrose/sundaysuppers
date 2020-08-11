<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  $intro_text = get_field('intro_text');
  $ingredients = get_field('ingredients');
  $ingredients_array = explode("\n", $ingredients );
  $instructions = get_field('instructions');
$instructions_array = explode("\n", $instructions );

  ?>

<div class="header-image" style="background-image: url('');">
<div class="black-bg">  <div class="header-text">
<span> Recipes </span>
</div>
</div>
</div>
<div class="container">

<div class="row">
  <div class="col-90">

    <h1><?php echo the_title(); ?></h1>


      <img src="<?php echo get_the_post_thumbnail_url();?>" style="padding: 20px 0px 20px 0px">

    <p><?php echo $intro_text ?></p>
</div>
</div>

<div class="row">
  <div class="col-40" style="background-color:#F5E3C8; padding-left: 40px;">
    <h2>Ingredients</h2>
    <ul>
    <?php
    foreach($ingredients_array as $ingredient) {

      echo "<li> $ingredient </li>";
    }

     ?>
   </ul>
  </div>





    <div class="col-50">

      <h2>Directions</h2>
      <ol>
      <?php
      foreach($instructions_array as $instructions) {

        echo "<li> $instructions </li>";
      }

       ?>
     </ol>

  </div>
  </div>

</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
