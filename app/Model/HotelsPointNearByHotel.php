<?php
App::uses('AppModel', 'Model');
/**
 * HotelsPointNearByHotel Model
 *
 * @property Hotel $Hotel
 * @property PointNearByHotel $PointNearByHotel
 */
class HotelsPointNearByHotel extends AppModel {


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
		'PointNearByHotel' => array(
			'className' => 'PointNearByHotel',
			'foreignKey' => 'point_near_by_hotel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
