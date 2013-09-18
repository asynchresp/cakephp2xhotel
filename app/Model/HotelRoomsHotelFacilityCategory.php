<?php
App::uses('AppModel', 'Model');
/**
 * HotelRoomsHotelFacilityCategory Model
 *
 * @property HotelRoom $HotelRoom
 * @property HotelFacilityCategory $HotelFacilityCategory
 */
class HotelRoomsHotelFacilityCategory extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'foreignKey' => 'hotel_room_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelFacilityCategory' => array(
			'className' => 'HotelFacilityCategory',
			'foreignKey' => 'hotel_facility_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
