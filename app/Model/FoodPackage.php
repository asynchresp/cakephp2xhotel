<?php
App::uses('AppModel', 'Model');
/**
 * FoodPackage Model
 *
 * @property FoodMenuType $FoodMenuType
 * @property HotelRoom $HotelRoom
 * @property HotelRoom $HotelRoom
 */
class FoodPackage extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FoodMenuType' => array(
			'className' => 'FoodMenuType',
			'foreignKey' => 'food_menu_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'foreignKey' => 'food_package_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'joinTable' => 'hotel_rooms_food_packages',
			'foreignKey' => 'food_package_id',
			'associationForeignKey' => 'hotel_room_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
