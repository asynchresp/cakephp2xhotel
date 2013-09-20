<?php
App::uses('AppModel', 'Model');
/**
 * HotelsHotelModificationPolicy Model
 *
 * @property Hotel $Hotel
 * @property HotelModificationPolicy $HotelModificationPolicy
 */
class HotelsHotelModificationPolicy extends AppModel {


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
		'HotelModificationPolicy' => array(
			'className' => 'HotelModificationPolicy',
			'foreignKey' => 'hotel_modification_policy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
