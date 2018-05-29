<?php
function alpha_bootstrapping() {
    load_theme_textdomain( "alpha" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    register_nav_menu( "topmenu", __( "Top Menu", "alpha" ) );
    register_nav_menu( "footermenu", __( "Footer Menu", "alpha" ) );
}
add_action( "after_setup_theme", "alpha_bootstrapping" );


function alpha_assets(){
    wp_enqueue_style("alpha",get_stylesheet_uri());
    wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");

}

add_action("wp_enqueue_scripts","alpha_assets");

function alpha_sidebar(){
    register_sidebar(
        [
            'name'=>__('Single Post Sidebar','alpha'),
            'id'=>'sidebar-1',
            'description'=>__('Right Sidebar','alpha'),
            'before_widget'=>'<section id="%1$s" class="%2$s">',
            'after_widget'=>'</section>',
            'before_title'=>'<h2 class="widget-title">',
            'after_title'=>'</h2>',
        ]
        );
    register_sidebar(
        [
            'name'=>__('Footer Left','alpha'),
            'id'=>'footer-left',
            'description'=>__('Widgetize Are Footer left','alpha'),
            'before_widget'=>'<section id="%1$s" class="%2$s">',
            'after_widget'=>'</section>',
            'before_title'=>'',
            'after_title'=>'',
        ]
        );
    register_sidebar(
        [
            'name'=>__('Footer Right','alpha'),
            'id'=>'footer-right',
            'description'=>__('Widgetize Are Footer Right','alpha'),
            'before_widget'=>'<section id="%1$s" class="%2$s">',
            'after_widget'=>'</section>',
            'before_title'=>'',
            'after_title'=>'',
        ]
        );
}
add_action("widgets_init","alpha_sidebar");

// function alpha_menu_item_class($classes,$item){
//     $classes[]="list_inline_item";
//     return $classes;
// }
// add_filter("nav_menu_css_class","alpha_menu_item_class",10,2);


function alpha_menu_item_class( $classes, $item ) {
    $classes[] = "list-inline-item text-center";
    return $classes;
}
add_filter( "nav_menu_css_class", "alpha_menu_item_class", 10, 2 );