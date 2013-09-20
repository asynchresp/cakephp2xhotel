<?php
App::uses('AppModel', 'Model');
/**
 * HotelsHotelTyep Model
 *
 * @property Hotel $Hotel
 * @property HotelType $HotelType
 */
class HotelsHotelTyep extends AppModel {


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
		'HotelType' => array(
			'className' => 'HotelType',
			'foreignKey' => 'hotel_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
