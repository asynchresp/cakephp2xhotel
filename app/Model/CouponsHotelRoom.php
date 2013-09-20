<?php
App::uses('AppModel', 'Model');
/**
 * CouponsHotelRoom Model
 *
 * @property Coupon $Coupon
 * @property HotelRoom $HotelRoom
 */
class CouponsHotelRoom extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Coupon' => array(
			'className' => 'Coupon',
			'foreignKey' => 'coupon_id',
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
