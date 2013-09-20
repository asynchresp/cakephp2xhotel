<?php
App::uses('AppModel', 'Model');
/**
 * HotelsHotelFacility Model
 *
 * @property Hotel $Hotel
 * @property HotelFacility $HotelFacility
 */
class HotelsHotelFacility extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
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
