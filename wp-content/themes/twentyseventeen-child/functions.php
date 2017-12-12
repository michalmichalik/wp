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

    /* Register ACF field */
    if(function_exists("register_field_group"))
    {
    	register_field_group(array (
    		'id' => 'acf_contact',
    		'title' => 'Contact',
    		'fields' => array (
    			array (
    				'key' => 'field_5a30023379fab',
    				'label' => 'Logo',
    				'name' => 'logo',
    				'type' => 'image',
    				'save_format' => 'id',
    				'preview_size' => 'full',
    				'library' => 'all',
    			),
    			array (
    				'key' => 'field_5a30024479fac',
    				'label' => 'Address',
    				'name' => 'address',
    				'type' => 'wysiwyg',
    				'default_value' => '',
    				'toolbar' => 'full',
    				'media_upload' => 'yes',
    			),
    			array (
    				'key' => 'field_5a30025e79fad',
    				'label' => 'Map',
    				'name' => 'map',
    				'type' => 'google_map',
    				'center_lat' => '49.800420',
    				'center_lng' => '19.061129',
    				'zoom' => 8,
    				'height' => 400,
    			),
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'page',
    					'operator' => '==',
    					'value' => '4',
    					'order_no' => 0,
    					'group_no' => 0,
    				),
    			),
    		),
    		'options' => array (
    			'position' => 'normal',
    			'layout' => 'no_box',
    			'hide_on_screen' => array (
    			),
    		),
    		'menu_order' => 0,
    	));
    	register_field_group(array (
    		'id' => 'acf_employee',
    		'title' => 'Employee',
    		'fields' => array (
    			array (
    				'key' => 'field_5a300b2fa8843',
    				'label' => 'Image',
    				'name' => 'image',
    				'type' => 'image',
    				'save_format' => 'id',
    				'preview_size' => 'full',
    				'library' => 'all',
    			),
    			array (
    				'key' => 'field_5a300b3ea8844',
    				'label' => 'Name',
    				'name' => 'name',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a300b48a8845',
    				'label' => 'Email',
    				'name' => 'email',
    				'type' => 'email',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    			),
    			array (
    				'key' => 'field_5a300b50a8846',
    				'label' => 'www',
    				'name' => 'www',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a300b5aa8847',
    				'label' => 'Related posts',
    				'name' => 'related_posts',
    				'type' => 'relationship',
    				'return_format' => 'id',
    				'post_type' => array (
    					0 => 'post',
    				),
    				'taxonomy' => array (
    					0 => 'category:2',
    				),
    				'filters' => array (
    					0 => 'search',
    				),
    				'result_elements' => array (
    					0 => 'featured_image',
    					1 => 'post_type',
    					2 => 'post_title',
    				),
    				'max' => '',
    			),
    			array (
    				'key' => 'field_5a301813100a8',
    				'label' => 'Label (1)',
    				'name' => 'social_label_1',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a301b20a568d',
    				'label' => 'URL (1)',
    				'name' => 'social_link_1',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a301ad6d8cc3',
    				'label' => 'Label (2)',
    				'name' => 'social_label_2',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a301b2da568e',
    				'label' => 'URL (2)',
    				'name' => 'social_link_2',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a301b0ea568c',
    				'label' => 'Label (3)',
    				'name' => 'social_label_3',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    			array (
    				'key' => 'field_5a301b3ca568f',
    				'label' => 'URL (3)',
    				'name' => 'social_link_3',
    				'type' => 'text',
    				'default_value' => '',
    				'placeholder' => '',
    				'prepend' => '',
    				'append' => '',
    				'formatting' => 'html',
    				'maxlength' => '',
    			),
    		),
    		'location' => array (
    			array (
    				array (
    					'param' => 'post_type',
    					'operator' => '==',
    					'value' => 'employee',
    					'order_no' => 0,
    					'group_no' => 0,
    				),
    			),
    		),
    		'options' => array (
    			'position' => 'normal',
    			'layout' => 'no_box',
    			'hide_on_screen' => array (
    			),
    		),
    		'menu_order' => 0,
    	));
    }
?>
