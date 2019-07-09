<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $titas_metabox = 'titas_portfolio';

    //
    // Create a metabox
    CSF::createMetabox( $titas_metabox, array(
        'title'     => __('External Portfolio Link', 'titas'),
        'post_type' => 'portfolio',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $titas_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'portfolio_excerpt',
                'type'  => 'textarea',
                'title' => __('Portfolio Short Description', 'titas'),
            ),
            array(
                'id'    => 'portfolio_link',
                'type'  => 'text',
                'title' => __('External Link', 'titas'),
            ),

        )
    ) );

}