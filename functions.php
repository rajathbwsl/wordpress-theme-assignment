<?php
/**
 * Theme Functions
 * 
 * @package Theme Assignment
 */

 if (!defined('ASSIGNMENT_DIR_PATH')){
    define('ASSIGNMENT_DIR_PATH',untrailingslashit(get_template_directory()));
 }
 if (!defined('ASSIGNMENT_DIR_URI')){
    define('ASSIGNMENT_DIR_URI',untrailingslashit(get_template_directory_uri()));
 }
 require_once ASSIGNMENT_DIR_PATH . '/includes/helpers/autoloader.php';

 function assignment_get_theme_instance(){
    \ASSIGNMENT_THEME\Includes\ASSIGNMENT_THEME::get_instance();
 }
 assignment_get_theme_instance();

 function assignment_enqueue_scripts() {
    
    
 }

 add_action('wp_enqueue_scripts','assignment_enqueue_scripts');