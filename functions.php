<?php
/**
 * Theme Functions
 * 
 * @package Theme Assignment
 */

 if (!defined('ASSIGNMENT_DIR_PATH')){
    define('ASSIGNMENT_DIR_PATH',untrailingslashit(get_template_directory()));
 }

 require_once ASSIGNMENT_DIR_PATH . '/includes/helpers/autoloader.php';

 function assignment_get_theme_instance(){
    \ASSIGNMENT_THEME\Includes\ASSIGNMENT_THEME::get_instance();
 }
 assignment_get_theme_instance();

 function assignment_enqueue_scripts() {
    wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_stylesheet_uri()),"all");
    wp_enqueue_script('main-script',get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory_uri().'/assets/main.js'),"true");
 }

 add_action('wp_enqueue_scripts','assignment_enqueue_scripts');