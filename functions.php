<?php

function achadata_light_theme_setup()
{
    add_theme_support("titlte-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'achadata-light-theme'),
        )
    );
}
add_action('after_setup_theme','achadata_light_theme_setup');

function achadata_light_theme__widgets_init(){
    register_sidebar(
        array(
            'name' => __('Sidebar', 'achadata-light-theme'),
            'id' =>'sidebar-1',
            'description'=> __('Add widgets here to appear in your sidebar', 'achadata-light-theme'),
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget' => '</div>',
            'before_title'=> '<h2>',
            'after_title'=> '</h2>',
        )
    );
}
add_action('widgets_init','achadata_light_theme__widgets_init');