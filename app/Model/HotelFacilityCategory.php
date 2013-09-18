<?php
App::uses('AppModel', 'Model');
/**
 * HotelFacilityCategory Model
 *
 * @property Site $Site
 * @property HotelFacility $HotelFacility
 * @property HotelRoom $HotelRoom
 * @property Hotel $Hotel
 * @property HotelFacility $HotelFacility
 * @property HotelRoom $HotelRoom
 * @property Hotel $Hotel
 */
class HotelFacilityCategory extends AppModel {


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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'foreignKey' => 'hotel_facility_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'foreignKey' => 'hotel_facility_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_facility_category_id',
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
		'HotelFacility' => array(
			'className' => 'HotelFacility',
			'joinTable' => 'hotel_facility_categories_hotel_facilities',
			'foreignKey' => 'hotel_facility_category_id',
			'associationForeignKey' => 'hotel_facility_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'HotelRoom' => array(
			'className' => 'HotelRoom',
			'joinTable' => 'hotel_rooms_hotel_facility_categories',
			'foreignKey' => 'hotel_facility_category_id',
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
		),
		'Hotel' => array(
			'className' => 'Hotel',
			'joinTable' => 'hotels_hotel_facility_categories',
			'foreignKey' => 'hotel_facility_category_id',
			'associationForeignKey' => 'hotel_id',
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
