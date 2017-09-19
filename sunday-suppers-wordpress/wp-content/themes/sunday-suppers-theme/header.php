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

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Lato:400,400i,700,900" rel="stylesheet">
        <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->

        <?php wp_head(); ?>
    </head>
    <body>

      <nav class="top">


        <a href="<?php echo get_home_url(); ?>" class="logolink"><div class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logo.svg "></div></a>


        <?php
        $menu_name = 'header-menu';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
        ?>
        <ul>
            <?php
            $count = 0;
            $submenu = false;
            foreach( $menuitems as $item ):
                $link = $item->url;
                $title = $item->title;
                // item does not have a parent so menu_item_parent equals 0 (false)
                if ( !$item->menu_item_parent ):
                // save this id for later comparison with sub-menu items
                $parent_id = $item->ID;
            ?>

            <li class="dropdown">
                <a href="<?php echo $link; ?>" class="dropbtn">
                    <?php echo $title; ?>
                </a>
            <?php endif; ?>

                <?php if ( $parent_id == $item->menu_item_parent ): ?>

                    <?php if ( !$submenu ): $submenu = true; ?>
                      <div class="dropdown-content">
                    <?php endif; ?>


                            <a href="<?php echo $link; ?>"><?php echo $title; ?></a>


                    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                    </div>
                    <?php $submenu = false; endif; ?>

                <?php endif; ?>

            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
            </li>
            <?php $submenu = false; endif; ?>

        <?php $count++; endforeach; ?>


        <li class="donate">
          <a href="<?php echo get_page_link(71); ?>">Donate</a>
        </li>

        <li>  <a href="javascript:void(0);" class="nav-icon"> Menu </a></li>

        </ul>

      </nav>

      <div class="mobile-overlay">
        <a href="javascript:void(0)" class="closebtn">Close</a>





        <div class="overlay-content">





          <?php
          $menu_name = 'header-menu';
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
          $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
          ?>
          <ul>
              <?php
              $count = 0;
              $submenu = false;
              foreach( $menuitems as $item ):
                  $link = $item->url;
                  $title = $item->title;
                  // item does not have a parent so menu_item_parent equals 0 (false)
                  if ( !$item->menu_item_parent ):
                  // save this id for later comparison with sub-menu items
                  $parent_id = $item->ID;
              ?>

              <li>
                  <a href="<?php echo $link ?>">
                      <?php echo $title; ?>
                  </a>
              <?php endif; ?>

                  <?php if ( $parent_id == $item->menu_item_parent ): ?>

                      <?php if ( !$submenu ): $submenu = true; ?>
                        <div class="overlaynavcontent">
                      <?php endif; ?>


                              <a href="<?php echo $link; ?>"><?php echo $title; ?></a>


                      <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                      </div>
                      <?php $submenu = false; endif; ?>

                  <?php endif; ?>

              <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
              </li>
              <?php $submenu = false; endif; ?>

          <?php $count++; endforeach; ?>


          </ul>






         </div>

      </div>
