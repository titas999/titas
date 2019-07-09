<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $titas_metabox = 'titas_service_type';

    //
    // Create a metabox
    CSF::createMetabox( $titas_metabox, array(
        'title'     => __('External Service Link', 'titas'),
        'post_type' => 'service',
        'context'   => 'normal'
    ) );

    //
    // Create a section
    CSF::createSection( $titas_metabox, array(
        'fields' => array(
            // A text field
            array(
                'id'    => 'service_link',
                'type'  => 'text',
                'title' => __('External Link', 'titas'),
            ),

        )
    ) );

}