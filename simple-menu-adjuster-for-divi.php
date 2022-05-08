<?php /*
Plugin Name: Simple Menu Adjuster for Divi
Plugin URI: https://github.com/alantiller/simple-menu-adjuster-for-divi
description: This is a very simple plugin. All it does is add the description meta field of the menu item into the menu structure contained inside a special div called "menu-item-description".
Version: 1.0.0
Author: Alan Tiller
Author URI: https://www.alantiller.com
License: MIT */

function nav_menu_description( $item_output, $item, $depth, $args ) {
   if ( !empty( $item->description ) ) {
      $item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
   }
   return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'nav_menu_description', 10, 4 ); ?>
