<?php
App::uses('AppModel', 'Model');
/**
 * Coupon Model
 *
 * @property Site $Site
 * @property Hotel $Hotel
 * @property RoomType $RoomType
 * @property HotelRoom $HotelRoom
 * @property HotelRoom $HotelRoom
 */
class Coupon extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'site_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RoomType' => array(
			'className' => 'RoomType',
			'foreignKey' => 'room_type_id',
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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'joinTable' => 'coupons_hotel_rooms',
			'foreignKey' => 'coupon_id',
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
