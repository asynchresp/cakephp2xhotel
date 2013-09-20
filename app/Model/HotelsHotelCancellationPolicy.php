<?php
App::uses('AppModel', 'Model');
/**
 * HotelsHotelCancellationPolicy Model
 *
 * @property Hotel $Hotel
 * @property HotelCancellationPolicy $HotelCancellationPolicy
 */
class HotelsHotelCancellationPolicy extends AppModel {


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
		'HotelCancellationPolicy' => array(
			'className' => 'HotelCancellationPolicy',
			'foreignKey' => 'hotel_cancellation_policy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
