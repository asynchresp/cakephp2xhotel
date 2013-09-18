<?php
App::uses('AppModel', 'Model');
/**
 * HotelRoomsHotelFacility Model
 *
 * @property HotelRoom $HotelRoom
 * @property HotelFacility $HotelFacility
 */
class HotelRoomsHotelFacility extends AppModel {


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
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'foreignKey' => 'hotel_facility_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
