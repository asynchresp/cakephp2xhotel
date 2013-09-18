<?php
App::uses('AppModel', 'Model');
/**
 * HotelsHotelFacilityCategory Model
 *
 * @property Hotel $Hotel
 * @property HotelFacilityCategory $HotelFacilityCategory
 */
class HotelsHotelFacilityCategory extends AppModel {


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
		'HotelFacilityCategory' => array(
			'className' => 'HotelFacilityCategory',
			'foreignKey' => 'hotel_facility_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
