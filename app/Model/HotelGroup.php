<?php
App::uses('AppModel', 'Model');
/**
 * HotelGroup Model
 *
 * @property Site $Site
 * @property Hotel $Hotel
 * @property Hotel $Hotel
 */
class HotelGroup extends AppModel {


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
		'Hotel' => array(
			'className' => 'Hotel',
			'foreignKey' => 'hotel_group_id',
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
		'Hotel' => array(
			'className' => 'Hotel',
			'joinTable' => 'hotel_groups_hotels',
			'foreignKey' => 'hotel_group_id',
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
