<?php

/**
 * Header template
 * @package Theme Assignment
 */
$menu_class = \ASSIGNMENT_THEME\Includes\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('assignment-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress</title>
    <?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                    if (!empty($header_menus) && is_array($header_menus)) {
                    ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php
                            foreach ($header_menus as $menu_items) {
                                if (!$menu_items->menu_item_parent) {
                                    $child_menu_items = $menu_class->get_child_menu_id($header_menus, $menu_items->ID);
                                    $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                                    if (!$has_children) {
                            ?>
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="<?php echo esc_url($menu_items->url); ?>"><?php echo esc_html($menu_items->title); ?></a>
                                        </li>
                                    <?php
                                    } else {
                                    ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_items->url); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?php echo ($menu_items->title); ?>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                foreach ($child_menu_items as $child_menu_item) {
                                                ?>
                                                    <li><a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>"><?php echo esc_html($child_menu_item->title); ?></a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    <?php
                                    }
                                }
                            }
                        }
                        ?>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                </div>
            </div>
        </nav>
    </header>