<?php


add_action( 'cmb2_init', 'alpha_cmb2_metabox' );
function alpha_cmb2_metabox() {


	$prefix = 'alpha_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'alpha_metabox',
		'title'        => __( 'Image Information', 'alpha' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Camera Model', 'alpha' ),
		'id' => $prefix . 'camera_model',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Location', 'alpha' ),
		'id' => $prefix . 'location',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Date', 'alpha' ),
		'id' => $prefix . 'date',
		'type' => 'text_date',
	) );

	$cmb->add_field( array(
		'name' => __( 'Licensed ', 'alpha' ),
		'id' => $prefix . 'licensed',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Licensed Information', 'alpha' ),
		'id' => $prefix . 'licensed_information',
		'type' => 'textarea',
		'attributes' => array(
			'data-conditional-id'    => $prefix . 'licensed',
			'data-conditional-value' => 'on',
		),
	) );
}