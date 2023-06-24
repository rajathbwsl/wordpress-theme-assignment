<?php 
/**
 * Enqueue theme assets
 * @package Assignment theme
 */
namespace ASSIGNMENT_THEME\Includes;

use ASSIGNMENT_THEME\Includes\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //actions and filters
        add_action('wp_enqueue_scripts',[$this,"register_styles"]);
        add_action('wp_enqueue_scripts',[$this,"register_scripts"]);

    }
    public function register_styles(){
        wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],"true","all");
        wp_enqueue_style('bootstrap-style',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css",[],"true","all");

    }
    public function register_scripts(){
        wp_enqueue_script('main-script',ASSIGNMENT_DIR_URI.'/assets/main.js',[],"true","true");
        wp_enqueue_script('bootstrap-script','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',[],"true","true");    
              
    }
}