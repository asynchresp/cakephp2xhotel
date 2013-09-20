<?php
App::uses('AppModel', 'Model');
/**
 * TourPackagesActivityType Model
 *
 * @property TourPackage $TourPackage
 * @property ActivityType $ActivityType
 */
class TourPackagesActivityType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TourPackage' => array(
			'className' => 'TourPackage',
			'foreignKey' => 'tour_package_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ActivityType' => array(
			'className' => 'ActivityType',
			'foreignKey' => 'activity_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
