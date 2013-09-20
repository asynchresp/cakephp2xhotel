<?php
App::uses('AppModel', 'Model');
/**
 * HotelRoomsFoodMenuType Model
 *
 * @property HotelRoom $HotelRoom
 * @property FoodMenuType $FoodMenuType
 */
class HotelRoomsFoodMenuType extends AppModel {


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
		'FoodMenuType' => array(
			'className' => 'FoodMenuType',
			'foreignKey' => 'food_menu_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
