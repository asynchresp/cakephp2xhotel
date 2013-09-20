<?php
App::uses('AppModel', 'Model');
/**
 * HotelGroupsHotel Model
 *
 * @property HotelGroup $HotelGroup
 * @property Hotel $Hotel
 */
class HotelGroupsHotel extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HotelGroup' => array(
			'className' => 'HotelGroup',
			'foreignKey' => 'hotel_group_id',
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
		)
	);
}
