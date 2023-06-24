<?php
/**
 * Bootsraps the theme
 * 
 * @package Assignment
 */

 namespace ASSIGNMENT_THEME\Includes;

 use ASSIGNMENT_THEME\Includes\Traits\Singleton;

 class ASSIGNMENT_THEME {

    use Singleton;

    protected function __construct() {
        //load class
        wp_die('hello');
        $this->set_hooks();
    }

    protected function set_hooks() {
        //actions and filters

    }

 }