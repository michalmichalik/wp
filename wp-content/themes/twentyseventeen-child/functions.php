<?php
    /* Get parent template style */
    function enqueue_parent_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

    /* Custom post type */
    function create_posttype() {
        register_post_type( 'employee',
            array(
                'labels' => array(
                    'name' => __( 'Employees' ),
                    'singular_name' => __( 'Employee' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'employees')
            )
        );
    }
    add_action( 'init', 'create_posttype' );
?>
