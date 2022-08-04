<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', function() {

    Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_fields( array(
        Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
         ->add_fields( array(
        Field::make( 'text', 'title', __( 'Slide Title' ) ),
        Field::make( 'textarea', 'desc', __( 'Slide Description' ) ),
        Field::make( 'image', 'photo', __( 'Slide Photo' ) ),
    ) )
    ) );

} );


    
