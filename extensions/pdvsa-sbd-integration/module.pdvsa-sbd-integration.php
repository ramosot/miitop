<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'pdvsa-sbd-integration/1.0.0',
	array(
		// Identification
		//
		'label' => 'Soporte BD',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/2.5.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.pdvsa-sbd-integration.php',
			'main.pdvsa-sbd-integration.php'
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
			//'sbd_url' => 'http://oriplc200.ori.pdvsa.com/sbd/inventario_editar.php?ba=%s',
			//'target_classes' => array('DBServer'),
		),
	)
);


?>
