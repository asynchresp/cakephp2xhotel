<?php
App::uses('AppModel', 'Model');
/**
 * HotelFacilityCategoriesHotelFacility Model
 *
 * @property HotelFacilityCategory $HotelFacilityCategory
 * @property HotelFacility $HotelFacility
 */
class HotelFacilityCategoriesHotelFacility extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HotelFacilityCategory' => array(
			'className' => 'HotelFacilityCategory',
			'foreignKey' => 'hotel_facility_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'foreignKey' => 'hotel_facility_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
