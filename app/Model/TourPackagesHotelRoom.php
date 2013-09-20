<?php
App::uses('AppModel', 'Model');
/**
 * TourPackagesHotelRoom Model
 *
 * @property TourPackage $TourPackage
 * @property HotelRoom $HotelRoom
 */
class TourPackagesHotelRoom extends AppModel {


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
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'foreignKey' => 'hotel_room_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
