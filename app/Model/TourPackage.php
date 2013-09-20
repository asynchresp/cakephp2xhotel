<?php
App::uses('AppModel', 'Model');
/**
 * TourPackage Model
 *
 * @property Site $Site
 * @property Hotel $Hotel
 * @property RoomType $RoomType
 * @property HotelRoom $HotelRoom
 * @property ActivityType $ActivityType
 * @property PopularPoint $PopularPoint
 * @property Tax $Tax
 * @property ActivityType $ActivityType
 * @property HotelRoom $HotelRoom
 * @property PopularPoint $PopularPoint
 * @property Tax $Tax
 */
class TourPackage extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'site_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
		),
		'ActivityType' => array(
			'className' => 'ActivityType',
			'foreignKey' => 'activity_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PopularPoint' => array(
			'className' => 'PopularPoint',
			'foreignKey' => 'popular_point_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tax' => array(
			'className' => 'Tax',
			'foreignKey' => 'tax_id',
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
		'ActivityType' => array(
			'className' => 'ActivityType',
			'joinTable' => 'tour_packages_activity_types',
			'foreignKey' => 'tour_package_id',
			'associationForeignKey' => 'activity_type_id',
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
			'joinTable' => 'tour_packages_hotel_rooms',
			'foreignKey' => 'tour_package_id',
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
		'PopularPoint' => array(
			'className' => 'PopularPoint',
			'joinTable' => 'tour_packages_popular_points',
			'foreignKey' => 'tour_package_id',
			'associationForeignKey' => 'popular_point_id',
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
		'Tax' => array(
			'className' => 'Tax',
			'joinTable' => 'tour_packages_taxes',
			'foreignKey' => 'tour_package_id',
			'associationForeignKey' => 'tax_id',
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
