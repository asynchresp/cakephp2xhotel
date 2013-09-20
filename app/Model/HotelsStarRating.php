<?php
App::uses('AppModel', 'Model');
/**
 * HotelsStarRating Model
 *
 * @property Hotel $Hotel
 * @property StarRating $StarRating
 */
class HotelsStarRating extends AppModel {


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
		'StarRating' => array(
			'className' => 'StarRating',
			'foreignKey' => 'star_rating_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
