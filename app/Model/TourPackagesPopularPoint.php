<?php
App::uses('AppModel', 'Model');
/**
 * TourPackagesPopularPoint Model
 *
 * @property TourPackage $TourPackage
 * @property PopularPoint $PopularPoint
 */
class TourPackagesPopularPoint extends AppModel {


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
		'PopularPoint' => array(
			'className' => 'PopularPoint',
			'foreignKey' => 'popular_point_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
