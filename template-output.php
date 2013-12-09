<?php
/*
    Plugin Name: Template Output
    Plugin URI: https://github.com/3themes/template-output
    Description: Outputs the template files being called in the page you are viewing, in the footer
    Author: 3themes
    Version: 1.0
    Author URI: http://3them.es
 */

/*
 * Function to test which template files are being called
 * Bug testing only. Not to be used on a production site!! 
 */
add_action('wp_footer', 'spring_wrap_info');

function spring_wrap_info() {  
  $format = '<h6>The %s template being used is: %s</h6>';
  $main   = Spring_Wrapping::$main_template;
  global $template;

  printf($format, 'Main', $main);
  printf($format, 'Base', $template);
}