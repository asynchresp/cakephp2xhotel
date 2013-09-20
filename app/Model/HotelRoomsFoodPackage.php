<?php
App::uses('AppModel', 'Model');
/**
 * HotelRoomsFoodPackage Model
 *
 * @property HotelRoom $HotelRoom
 * @property FoodPackage $FoodPackage
 */
class HotelRoomsFoodPackage extends AppModel {


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
		'FoodPackage' => array(
			'className' => 'FoodPackage',
			'foreignKey' => 'food_package_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
