<?php
/*
Plugin Name: NetrunnerDB For WordPress
Plugin URI: https://github.com/MWDelaney/NetrunnerDB-for-WordPress
Description: NetrunnerDB.com API and card lookups for WordPress
Version: 0.1
Author: Michael W. Delaney
Author URI: 
License: MIT
*/

/*  Include the styling for the help tab in the admin
*/

function nrdb_styles_scripts() {
  wp_register_style( 'jquery-qtip', '//cdnjs.cloudflare.com/ajax/libs/qtip2/2.1.1/jquery.qtip.css' );
  wp_register_style( 'nrdb-icons', plugins_url( 'NetrunnerDB-for-WordPress/includes/css/style.css' ) );
 
  wp_register_script( 'taffy', 'http://netrunnerdb.com/web/bundles/netrunnerdbbuilder/js/taffy.js', array("jquery"));
  wp_register_script( 'jquery-qtip', '//cdnjs.cloudflare.com/ajax/libs/qtip2/2.1.1/jquery.qtip.js', array("jquery"));
  wp_register_script( 'nrdb-data', 'http://netrunnerdb.com/web/bundles/netrunnerdbbuilder/js/nrdb.data.js', array("jquery"));
  wp_register_script( 'nrdb-format', 'http://netrunnerdb.com/web/bundles/netrunnerdbbuilder/js/nrdb.format.js', array("jquery"));
  wp_register_script( 'nrdb-tip', 'http://netrunnerdb.com/web/bundles/netrunnerdbbuilder/js/nrdb.tip.js', array("jquery"));
    
  wp_enqueue_style( 'jquery-qtip' );
  wp_enqueue_style( 'nrdb-icons' );

  wp_enqueue_script( 'taffy' );    
  wp_enqueue_script( 'jquery-qtip' );
  wp_enqueue_script( 'nrdb-data' );
  wp_enqueue_script( 'nrdb-format' );
  wp_enqueue_script( 'nrdb-tip' );
}
add_action( 'wp_enqueue_scripts', 'nrdb_styles_scripts' );



